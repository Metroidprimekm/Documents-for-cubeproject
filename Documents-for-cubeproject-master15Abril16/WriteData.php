<?php

function writedata($order2,$part2,$posx2,$posy2,$block2){
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		header('Location: ErrorPage.html');
		exit;
		die("Connection failed: " . $conn->connect_error);
	} 
	// Write data in table
	$sql = "INSERT INTO order_parts (OrderID, PartCode, PositionX, PositionZ, BlockType)
	VALUES ($order2, $part2, $posx2, $posy2, '$block2')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		header('Location: ErrorPage.html');
		
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}


if ($_POST['array'])	
{ 
	$xml = new DOMDocument();
	$xml->preserveWhiteSpace = false;
	$xml->loadXML($_POST['array']);
	$xml->formatOutput = true;
	
	if (!$xml->schemaValidate('BlockTypeSD.xsd')) {
		header('Location: ErrorPage.html');
		echo 'An error ocurred, please place part again !';
	}	else {
			$order = $xml->getElementsByTagName('OrderID')->item(0);
			$order = $order->nodeValue;
			$part = $xml->getElementsByTagName('PartCode')->item(0);
			$part = $part->nodeValue;
			$posx = $xml->getElementsByTagName('PositionX')->item(0);
			$posx = $posx->nodeValue;
			$posz = $xml->getElementsByTagName('PositionZ')->item(0);
			$posz = $posz->nodeValue;
			$block = $xml->getElementsByTagName('BlockType')->item(0);
			$block = $block->nodeValue;
			writedata($order,$part,$posx,$posz,$block);
			echo 'ok';
	}
} 
?>