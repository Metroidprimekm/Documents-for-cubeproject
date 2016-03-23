<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 // Create database   //STEP 01
$sql = "CREATE DATABASE project2";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
} 

$conn->close();
?>