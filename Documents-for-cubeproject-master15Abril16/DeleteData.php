<?php
if ($_POST['Delete']){
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
	$Order2 = $_POST['Delete'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		header('Location: ErrorPage.html');
		exit;
		//die("Connection failed: " . $conn->connect_error);
	} 
	
	//Select PartCode
	$result = $conn->query("SELECT PartCode FROM order_parts WHERE OrderID = $Order2 ORDER BY id DESC LIMIT 1")->fetch_object()->PartCode;
	
	//$sql =  mysqli_fetch_assoc(mysqli_query($link, "SELECT PartCode FROM order_parts Where OrderID = $Order2 ORDER BY id DESC LIMIT 1"));
	//$result = $sql['PartCode'];
	echo $result;
		
	//Delete data		
	$sql = "DELETE FROM order_parts Where OrderID = $Order2 ORDER BY id DESC LIMIT 1";
	if ($conn->query($sql) === TRUE) {
		$sql2 = "UPDATE Brick SET Stock= Stock +1  WHERE identifier = $result";
		if ($conn->query($sql2) === TRUE) {
			echo "Stock updated successfully";
		} else {
			echo "Error deleting record: " . $conn->error;
	   }
		//echo "Record deleted successfully";
	} else {
		header('Location: ErrorPage.html');
		//echo "Error deleting record: " . $conn->error;
	}
		
	$conn->close();		
}

?>