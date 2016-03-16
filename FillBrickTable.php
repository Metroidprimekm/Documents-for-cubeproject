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

// prepare and bind   
$stmt = $conn->prepare("INSERT INTO Brick (identifier, Stock) VALUES (?, ?)");
$stmt->bind_param("ii", $identifier, $Stock); 	 
	 
// set parameters and execute

$identifier = "6050965";
$Stock= "1";
$stmt->execute();

$identifier = "6078317";
$Stock= "1";
$stmt->execute();

$identifier = "6100058";
$Stock= "1";
$stmt->execute();

$identifier = "6004947";
$Stock= "2";
$stmt->execute();

$identifier = "343724";
$Stock= "2";
$stmt->execute();

$identifier = "6030817";
$Stock= "1";
$stmt->execute();

$identifier = "6031324";
$Stock= "1";
$stmt->execute();

$identifier = "4160152";
$Stock= "1";
$stmt->execute();

$identifier = "6001240";
$Stock= "1";
$stmt->execute();

$identifier = "343721";
$Stock= "1";
$stmt->execute();

$identifier = "6020412";
$Stock= "1";
$stmt->execute();

$identifier = "6020150";
$Stock= "1";
$stmt->execute();

$identifier = "6020134";
$Stock= "1";
$stmt->execute();

$identifier = "301121";
$Stock= "1";
$stmt->execute();

$identifier = "4515331";
$Stock= "1";
$stmt->execute();

$identifier = "6058256";
$Stock= "1";
$stmt->execute();

$identifier = "6020110";
$Stock= "1";
$stmt->execute();

$identifier = "4183780";
$Stock= "1";
$stmt->execute();

$identifier = "4652863";
$Stock= "2";
$stmt->execute();

$identifier = "4166923";
$Stock= "1";
$stmt->execute();

$identifier = "4168579";
$Stock= "1";
$stmt->execute();

$identifier = "6025187";
$Stock= "1";
$stmt->execute();

$identifier = "4170795";
$Stock= "1";
$stmt->execute();

$identifier = "4247780";
$Stock= "1";
$stmt->execute();

$identifier = "4541728";
$Stock= "2";
$stmt->execute();

$identifier = "4620515";
$Stock= "1";
$stmt->execute();

$identifier = "4167177";
$Stock= "1";
$stmt->execute();

$identifier = "6023087";
$Stock= "1";
$stmt->execute();

$identifier = "6048908";
$Stock= "1";
$stmt->execute();

$identifier = "6048907";
$Stock= "1";
$stmt->execute();

$identifier = "6048909";
$Stock= "1";
$stmt->execute();


echo "New records created successfully";

$stmt->close();

?>