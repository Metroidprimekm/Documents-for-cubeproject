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
echo "<br>";

// sql to create table  
$sql = "CREATE TABLE Orders (
OrderID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
UserName VARCHAR(30) NOT NULL,
Status VARCHAR(30) NOT NULL,
OrderDate DATETIME
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Orders created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}   
 
/*  $sql = "INSERT INTO Orders (OrderID,UserName,Status,OrderDate)
VALUES ('2','lalo','pending',NOW())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */

/* $sql = "UPDATE Orders SET Status= 'Pending'  WHERE OrderID=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} */

$conn->close();
?>

