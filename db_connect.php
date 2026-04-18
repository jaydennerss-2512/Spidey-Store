<?php

// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$dbname = "spidey_store"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected successfully";

?>