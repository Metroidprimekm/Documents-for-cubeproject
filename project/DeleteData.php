<?php
if ($_POST['Delete']){
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
		
	$sql = "DELETE FROM LegoObject ORDER BY id DESC LIMIT 1";
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
		
	$conn->close();		
}

?>


