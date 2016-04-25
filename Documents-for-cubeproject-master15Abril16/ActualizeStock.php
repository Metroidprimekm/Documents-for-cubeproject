<?php
	$servername = "localhost";
	$username = "root";
	$password = "projectcube2";
	$dbname = "project2";
	
	$id = $_POST["6050965"];
	$id2 = $_POST["6078317"];
	$id3 = $_POST["6100058"];
	$id4 = $_POST["6004947"];
	$id5 = $_POST["343724"];
	$id6 = $_POST["6030817"];
	$id7 = $_POST["6031324"];
	$id8 = $_POST["4160152"];
	$id9 = $_POST["6001240"];
	$id10 = $_POST["343721"];
	$id11 = $_POST["6020412"];
	$id12 = $_POST["6020150"];
	$id13 = $_POST["6020134"];
	$id14 = $_POST["301121"];
	$id15 = $_POST["4515331"];
	$id16 = $_POST["6058256"];
	$id17 = $_POST["6020110"];
	$id18 = $_POST["4183780"];
	$id19 = $_POST["4652863"];
	$id20 = $_POST["4166923"];
	$id21 = $_POST["4168579"];
	$id22 = $_POST["6025187"];
	$id23 = $_POST["4170795"];
	$id24 = $_POST["4247780"];
	$id25 = $_POST["4541728"];
	
	
    if (!(preg_match('/^[0-9]{1}$/', $id) &&
		preg_match('/^[0-9]{1}$/', $id2) &&
		preg_match('/^[0-9]{1}$/', $id3) &&
		preg_match('/^[0-9]{1}$/', $id4) &&
		preg_match('/^[0-9]{1}$/', $id5) &&
		preg_match('/^[0-9]{1}$/', $id6) &&
		preg_match('/^[0-9]{1}$/', $id7) &&
		preg_match('/^[0-9]{1}$/', $id8) &&
		preg_match('/^[0-9]{1}$/', $id9) &&
		preg_match('/^[0-9]{1}$/', $id10) &&
		preg_match('/^[0-9]{1}$/', $id11) &&
		preg_match('/^[0-9]{1}$/', $id12) &&
		preg_match('/^[0-9]{1}$/', $id13) &&
		preg_match('/^[0-9]{1}$/', $id14) &&
		preg_match('/^[0-9]{1}$/', $id15) &&
		preg_match('/^[0-9]{1}$/', $id16) &&
		preg_match('/^[0-9]{1}$/', $id17) &&
		preg_match('/^[0-9]{1}$/', $id18) &&
		preg_match('/^[0-9]{1}$/', $id19) &&
		preg_match('/^[0-9]{1}$/', $id20) &&
		preg_match('/^[0-9]{1}$/', $id21) &&
		preg_match('/^[0-9]{1}$/', $id22) &&
		preg_match('/^[0-9]{1}$/', $id23) &&
		preg_match('/^[0-9]{1}$/', $id24) &&
		preg_match('/^[0-9]{1}$/', $id25))) {
        // Error
		echo "enter valid number";
    } else {
        // Continue
		echo "Correct";
		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	$sql = "UPDATE brick SET Stock=$id WHERE identifier=6050965";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id2 WHERE identifier=6078317";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id3 WHERE identifier=6100058";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id4 WHERE identifier=6004947";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id5 WHERE identifier=343724";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id6 WHERE identifier=6030817";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id7 WHERE identifier=6031324";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id8 WHERE identifier=4160152";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id9 WHERE identifier=6001240";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id10 WHERE identifier=343721";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id11 WHERE identifier=6020412";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id12 WHERE identifier=6020150";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id13 WHERE identifier=6020134";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id14 WHERE identifier=301121";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id15 WHERE identifier=4515331";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id16 WHERE identifier=6058256";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id17 WHERE identifier=6020110";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id18 WHERE identifier=4183780";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id19 WHERE identifier=4652863";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id20 WHERE identifier=4166923";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id21 WHERE identifier=4168579";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id22 WHERE identifier=6025187";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id23 WHERE identifier=4170795";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id24 WHERE identifier=4247780";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	$sql = "UPDATE brick SET Stock=$id25 WHERE identifier=4541728";

	if (!$conn->query($sql) === TRUE) {
		echo "Error updating record: " . $conn->error;
	}
	
	
	

	$conn->close();
		
		
    }
?> 