const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');

// Import the User and Exercise models
const User = require('./src/models/User');
const Exercise = require('./src/models/Exercise');

// Define the fetchDataFromDatabase function to fetch data from your MongoDB collections
async function fetchDataFromDatabase() {
  try {
    // Fetch users and exercises data from your MongoDB collections
    const users = await User.find({}, 'name'); // Only select the 'name' field
    const exercises = await Exercise.find({}, 'name'); // Only select the 'name' field

    // Structure the data as an array of objects with 'id' and 'name' properties
    const formattedUsers = users.map((user) => ({ id: user._id, name: user.name }));
    const formattedExercises = exercises.map((exercise) => ({ id: exercise._id, name: exercise.name }));

    // Return the data as an array
    return [formattedUsers, formattedExercises];
  } catch (error) {
    console.error('Error fetching data from MongoDB:', error);
    throw error;
  }
}

// Define API routes here using the router
router.get('/fetchData', async (req, res) => {
  try {
    const data = await fetchDataFromDatabase();
    res.json(data);
  } catch (error) {
    console.error('Error fetching data:', error);
    res.status(500).json({ error: 'Internal server error' });
  }
});

// Add more API routes as needed

// Export the router
module.exports = router;