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

// Drop the database and table
$sql_drop_db = "DROP DATABASE IF EXISTS alumni_db";
if ($conn->query($sql_drop_db) === TRUE) {
    echo "Database 'alumni_db' and its table 'alumni' have been deleted successfully.<br>";
} else {
    echo "Error deleting database: " . $conn->error;
}

// Close connection
$conn->close();
?>
