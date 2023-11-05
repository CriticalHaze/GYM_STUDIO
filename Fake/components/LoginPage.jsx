import React, { useState } from 'react';
import axios from 'axios'; // Import Axios

function LoginPage() {
  // State to store user's login credentials
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  // Function to handle form submission
  const handleLogin = async (e) => {
    e.preventDefault();

    try {
      // Define your API endpoint for login
      const apiEndpoint = '/api/login'; // Replace with your actual login endpoint

      // Create an object with the user's credentials
      const userCredentials = {
        email,
        password,
      };

      // Send a POST request to the backend API
      const response = await axios.post(apiEndpoint, userCredentials);

      // If authentication is successful, you may receive a token
      const { token } = response.data;

      // Store the token in local storage or cookies
      localStorage.setItem('adminToken', token);

      // Redirect the user to the admin dashboard
      window.location.href = '/admin/dashboard'; // Replace with your admin dashboard route
    } catch (error) {
      // Handle login error, show an error message to the user, etc.
      console.error('Login error:', error);
    }
  };

  return (
    <div>
      <h2>Login</h2>
      <form onSubmit={handleLogin}>
        <div>
          <label htmlFor="email">Email:</label>
          <input
            type="email"
            id="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
          />
        </div>
        <div>
          <label htmlFor="password">Password:</label>
          <input
            type="password"
            id="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  );
}

export default LoginPage;