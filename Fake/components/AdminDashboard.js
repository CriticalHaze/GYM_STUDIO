import React, { useEffect, useState } from 'react';

import { fetchUserData } from './APP_GYM_STUDIO/MongoDbDatabase/api'; // Import the API function

import { useParams } from 'react-router-dom';


function AdminDashboard() {
    const [userData, setUserData] = useState(null);
    const { userId } = useParams(); // Access the 'userId' route parameter
  
    useEffect(() => {
      // Function to fetch user data
      const fetchUser = async () => {
        try {
          // Use the 'userId' from route parameters to fetch user data
          const user = await fetchUserData(userId);
  
          // Update the state with the fetched user data
          setUserData(user);
        } catch (error) {
          console.error('Error fetching user data:', error);
        }
      };
  
      // Call the function to fetch user data when the component mounts
      fetchUser();
    }, [userId]); // Include 'userId' in the dependency array to re-fetch data when it changes
  
    return (
      <div>
        <h2>Admin Dashboard</h2>
        {userData ? (
          <div>
            <h3>User Information</h3>
            <p>Name: {userData.name}</p>
            <p>Email: {userData.email}</p>
            {/* Display other user information here */}
          </div>
        ) : (
          <p>Loading user data...</p>
        )}
      </div>
    );
  }
  
  export default AdminDashboard;