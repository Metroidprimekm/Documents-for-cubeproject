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
	
		
	$sql = "SELECT PartCode FROM order_parts WHERE OrderID = $Order2";
	$result = $conn->query($sql);
	
	if($result === false) {
	header('Location: ErrorPage.html');
  
	} else {
	$result->data_seek(0);
	while($row = $result->fetch_assoc()){
		
		$Part = $row['PartCode'];
		$sql2 = "UPDATE Brick SET Stock = Stock +1  WHERE identifier = $Part";
		if ($conn->query($sql2) === TRUE) {
			echo "Stock updated successfully";
		} else {
			header('Location: ErrorPage.html');
	   }
	    //echo $row['PartCode'] . '<br>';
	}  
	}
	
	$sql = "DELETE FROM order_parts WHERE OrderID = $Order2";
	if ($conn->query($sql) === TRUE) {
		//echo "Record deleted successfully";
	} else {
		header('Location: ErrorPage.html');
		//echo "Error deleting record: " . $conn->error;
	}
		
	$result->free();
	$conn->close();		
}

?>