<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "project2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
	header('Location: ErrorPage.html');
	
} 
//echo "Connected successfully";



  // sql to create table   //STEP 02
$sql = "CREATE TABLE Order_Parts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
OrderID VARCHAR(6) NOT NULL,  
PartCode INT(7) NOT NULL,
PositionX INT(1) NOT NULL,
PositionZ INT(1) NOT NULL,
BlockType VARCHAR(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    //echo "Table parts created successfully";
} else {
    //echo "Error creating table: " . $conn->error;
	header('Location: ErrorPage.html');
}  

$conn->close();

?>