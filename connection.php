<?php
$servername = "localhost"; // Change this to your server name if different
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password if you have set any
$database = "mugisa"; // Change this to your database name

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Close connection
$conn->close();
?>