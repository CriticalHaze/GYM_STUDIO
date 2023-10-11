import './AdminDashboard.css';
import React, { useState, useEffect } from 'react';
import logoImage from './logo.png';

function AdminDashboard() {
  const [selectedUser, setSelectedUser] = useState('');
  const [selectedExercise, setSelectedExercise] = useState('');
  const [series, setSeries] = useState(1);
  const [repetitions, setRepetitions] = useState(1);
  const [exerciseDuration, setExerciseDuration] = useState('');
  const [users, setUsers] = useState([]);
  const [exercises, setExercises] = useState([]);

  const handleFormSubmit = async (e) => {
    e.preventDefault();

    const formData = {
      user: selectedUser,
      exercise: selectedExercise,
      series,
      repetitions,
      duration: exerciseDuration,
    };

    try {
      const response = await fetch('/api/updateData', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
      });

      if (response.ok) {
        // Handle success
        alert('Data updated successfully!');
      } else {
        // Handle errors
        alert('Error updating data. Please try again.');
      }
    } catch (error) {
      console.error('Error:', error);
    }
  };

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch('/api/fetchData');
        if (response.ok) {
          const data = await response.json();
          setUsers(data.users);
          setExercises(data.exercises);
        } else {
          console.error('Error fetching data.');
        }
      } catch (error) {
        console.error('Error:', error);
      }
    };

    fetchData();
  }, []);

  return (
    <div className="page-container">
      <div className="gray-bar left-bar"></div>
      <div className="content">
        <img src={logoImage} alt="Description of the image" />
        <h1>GYM STUDIO MOBILE MANAGER</h1>
        <form onSubmit={handleFormSubmit}>
          <div>
            <label>Seleziona l'utente:</label>
            <select onChange={(e) => setSelectedUser(e.target.value)}>
              <option value="">Select User</option>
              {users.map((user, index) => (
                <option key={index} value={user.name}>
                  {user.name}
                </option>
              ))}
            </select>
          </div>

          <div>
            <label>Seleziona l'esercizio:</label>
            <select onChange={(e) => setSelectedExercise(e.target.value)}>
              <option value="">Select Exercise</option>
              {exercises.map((exercise, index) => (
                <option key={index} value={exercise.name}>
                  {exercise.name}
                </option>
              ))}
            </select>
          </div>

          <div>
            <label>Seleziona il numero di serie:</label>
            <input
              type="number"
              value={series}
              onChange={(e) => setSeries(e.target.value)}
            />
          </div>
          <div>
            <label>Seleziona il numero di ripetizioni:</label>
            <input
              type="number"
              value={repetitions}
              onChange={(e) => setRepetitions(e.target.value)}
            />
          </div>

          <div>
            <label>Seleziona la durata dell'esercizio:</label>
            <select onChange={(e) => setExerciseDuration(e.target.value)}>
              <option value="">Select Duration</option>
              <option value="5">5 Min</option>
              <option value="10">10 Min</option>
              <option value="15">15 Min</option>
              <option value="20">20 Min</option>
              <option value="25">25 Min</option>
              <option value="30">30 Min</option>
              <option value="35">35 Min</option>
              <option value="40">40 Min</option>
              <option value="45">45 Min</option>
            </select>
          </div>
          <div className="center-button">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
      <div className="gray-bar right-bar"></div>
    </div>
  );
}

export default AdminDashboard;