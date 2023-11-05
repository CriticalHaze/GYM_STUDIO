import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Redirect } from 'react-router-dom';
import axios from 'axios';
import './App.css'; // Import your CSS file

function LoginPage() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleLogin = async (e) => {
    e.preventDefault();

    try {
      const apiEndpoint = '/api/login';

      const userCredentials = {
        email,
        password,
      };

      const response = await axios.post(apiEndpoint, userCredentials);

      const { token } = response.data;

      localStorage.setItem('adminToken', token);

      // Redirect the user to the admin dashboard
      window.location.href = '/admin/dashboard'; // Replace with your admin dashboard route
    } catch (error) {
      console.error('Login error:', error);
    }
  };

  // Implement the isAuthenticated function
  const isAuthenticated = () => {
    // Check if the user is authenticated (e.g., by checking for a token in localStorage)
    return !!localStorage.getItem('adminToken');
  };

  return (
    <Router>
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

      <Route exact path="/login" component={LoginPage} />

      {/* Define the private route */}
      <PrivateRoute path="/admin/dashboard">
        {/* The component to render when authenticated */}
        <AdminDashboard />
      </PrivateRoute>

      <Redirect from="/" to="/login" />
    </Router>
  );
}



return (
  <Router>
    <div className="content-container"> {/* Apply the white background */}
      <h2>Login</h2>
      <form onSubmit={handleLogin}>
        {/* Style your form elements as needed */}
        {/* Add CSS classes for white background */}
        <div className="form-group">
          <label htmlFor="email">Email:</label>
          <input
            type="email"
            id="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
          />
        </div>
        <div className="form-group">
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
    {/* ... */}
  </Router>
);

// Create a PrivateRoute component for protected routes
function PrivateRoute({ children, ...rest }) {
  const isAuthenticated = () => {
    return !!localStorage.getItem('adminToken');
  };

  return (
    <Route
      {...rest}
      render={({ location }) =>
        isAuthenticated() ? (
          children // Render the component when authenticated
        ) : (
          <Redirect
            to={{
              pathname: '/login',
              state: { from: location },
            }}
          />
        )
      }
    />
  );
}

// Implement the AdminDashboard component (you may need to import it)

export default LoginPage;