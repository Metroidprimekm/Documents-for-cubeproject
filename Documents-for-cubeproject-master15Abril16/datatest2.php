<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "project2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 /* // Create database   //STEP 01
$sql = "CREATE DATABASE project2";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}  */

/*  // sql to create table   //STEP 02
$sql = "CREATE TABLE parts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
identifier INT(7) NOT NULL,
available INT(3) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table parts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}  */

/* $sql = "INSERT INTO parts (identifier, available)
VALUES ('4541728', '9')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 */

/* // prepare and bind   //STEP 04
$stmt = $conn->prepare("INSERT INTO parts (identifier, available) VALUES (?, ?)");
$stmt->bind_param("ii", $identifier, $available); 	 
	 
// set parameters and execute
$identifier = "135790";
$available= "10";
$stmt->execute();

$identifier = "246810";
$available= "8";
$stmt->execute();

echo "New records created successfully";

$stmt->close(); */



/* $sql = "UPDATE parts SET available= available +9  WHERE identifier=4541728";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close(); */
$conn->close();
?>