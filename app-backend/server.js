const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

mongoose.connect('mongodb://localhost:27017/GymStudio', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

const Data = mongoose.model('Data', {
  user: String,
  exercise: String,
  series: Number,
  repetitions: Number,
  duration: String,
});

const apiRoutes = require('./apiRoutes');

app.use(bodyParser.json());
app.use('/api', apiRoutes);

app.post('/api/updateData', async (req, res) => {
  try {
    const { user, exercise, series, repetitions, duration } = req.body;

    const newData = new Data({ user, exercise, series, repetitions, duration });
    await newData.save();

    res.status(200).json({ message: 'Data updated successfully' });
  } catch (error) {
    console.error('Error:', error);
    res.status(500).json({ message: 'Error updating data. Please try again.' });
  }
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});





