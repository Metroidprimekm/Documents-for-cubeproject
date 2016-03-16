<?php
if ($_POST['Reload']){
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
	$Order2 = $_POST['Reload'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		header('Location: ErrorPage.html');
		exit;
		//die("Connection failed: " . $conn->connect_error);
	} 
		
	$sql = "DELETE FROM order_parts WHERE OrderID = $Order2";
	if ($conn->query($sql) === TRUE) {
		//echo "Record deleted successfully";
	} else {
		header('Location: ErrorPage.html');
		//echo "Error deleting record: " . $conn->error;
	}
	///popopopopopopopopopopo
	$conn->close();		
}

?>