<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "cube";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* // Create database    //STEP 01
$sql = "CREATE DATABASE CUBE";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
} */

/* // sql to create table   //STEP 02
$sql = "CREATE TABLE Project (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Identifier INT(6) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Project created successfully";
} else {
    echo "Error creating table: " . $conn->error;} */
	
	
// prepare and bind
$stmt = $conn->prepare("INSERT INTO Project (Identifier, Spare) VALUES (?, ?)");
$stmt->bind_param("dd", $Identifier, $Spare); 	 
	 
// set parameters and execute
$Identifier = "135790";
$Spare= "10";
$stmt->execute();

$Identifier = "246810";
$Spare= "9";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>


