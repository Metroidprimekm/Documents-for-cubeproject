<?php
if ($_POST['DeleteData']){
	echo $_POST['DeleteData'];
	$DATA = $_POST['DeleteData'];
	
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
		
	$sql = "UPDATE Brick SET Stock= Stock -1  WHERE identifier=$DATA";
	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
		
	$conn->close();		
}

?>
