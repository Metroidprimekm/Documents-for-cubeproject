<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "project2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE Brick (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
identifier INT(7) NOT NULL,
Stock INT(3) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Brick created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>