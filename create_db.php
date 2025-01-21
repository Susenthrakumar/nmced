<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS alumni_db";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Use the newly created database
$conn->select_db('alumni_db');

// Create Table with Photo Field
$sql_create_table = "CREATE TABLE IF NOT EXISTS alumni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    passout_year VARCHAR(20),
    current_designation VARCHAR(100),
    email VARCHAR(100),
    phone_number VARCHAR(20),
    address TEXT,
    district VARCHAR(100),
    photo VARCHAR(255) -- Path to the uploaded image file
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'alumni' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
