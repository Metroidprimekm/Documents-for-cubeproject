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


  // sql to create table  STEP 02
$sql = "CREATE TABLE Users (
Name VARCHAR(30) NOT NULL,
Email VARCHAR(255) NOT NULL PRIMARY KEY 
)";

 if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}  
 
/*  $sql = "INSERT INTO Users (email,FirstName)
VALUES ('gonzo@','paco')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 */

/* $sql = "UPDATE Orders SET Status= 'Pending'  WHERE OrderID=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} */

$conn->close();
?>
