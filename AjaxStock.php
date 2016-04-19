<?php
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "project2";

if ($_POST['Operation']=="Show"){
	
	// Get value
	$PartID = $_POST['PartCode'];
	//Connect to databse
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		$error = "DBerror";
		echo $error;
		exit();
	}
	
	// Select PartCode
	$result = $conn->query("SELECT Stock FROM Brick WHERE Identifier = $PartID")->fetch_object()->Stock;
	
	// Close connection
	$conn->close();
	
	// Echo the results back to Ajax
	echo $result;
	exit();
}

if ($_POST['Operation']=="Add"){
	
	// Get value
	$PartID = $_POST['PartCode'];
	//Check for no entry
	if ($PartID == 0){
		exit();
	}
	//Connect to databse
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		$error = "DBerror";
		echo $error;
		exit();
	}
	// Select PartCode
	$result = $conn->query("SELECT Stock FROM Brick WHERE Identifier = $PartID")->fetch_object()->Stock;

	//Check for max value
	if ($result >= 20){
		// Close connection
		$conn->close();
		// Echo the results without change to Ajax
		echo $result;
		exit();
	}
	
	$Add1 = "UPDATE Brick SET Stock= Stock +1  WHERE identifier = $PartID";
	if (!$conn->query($Add1) === TRUE){
		// Close connection
		$conn->close();
		$error = "DBerror";
		echo $error;
		exit();
	}
	
	// Select PartCode
	$ModifiedResult = $conn->query("SELECT Stock FROM Brick WHERE Identifier = $PartID")->fetch_object()->Stock;
	
	// Close connection
	$conn->close();
	
	// Echo the results back to Ajax
	echo $ModifiedResult;
	exit();
}

if ($_POST['Operation']=="Substract"){
	
	// Get value
	$PartID = $_POST['PartCode'];
	//Check for no entry
	if ($PartID == 0){
		exit();
	}
	//Connect to databse
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		$error = "DBerror";
		echo $error;
		exit();
	}
	// Select PartCode
	$result = $conn->query("SELECT Stock FROM Brick WHERE Identifier = $PartID")->fetch_object()->Stock;

	//Check for max value
	if ($result <= 0){
		// Close connection
		$conn->close();
		// Echo the results without change to Ajax
		echo $result;
		exit();
	}
	
	$Substract1 = "UPDATE Brick SET Stock= Stock -1  WHERE identifier = $PartID";
	if (!$conn->query($Substract1) === TRUE){
		// Close connection
		$conn->close();
		$error = "DBerror";
		echo $error;
		exit();
	}
	
	// Select PartCode
	$ModifiedResult = $conn->query("SELECT Stock FROM Brick WHERE Identifier = $PartID")->fetch_object()->Stock;
	
	// Close connection
	$conn->close();
	
	// Echo the results back to Ajax
	echo $ModifiedResult;
	exit();
}



?>