 <?php 
 
 function showstock($stock){
	 	
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
		
	$sql = "UPDATE Brick SET Stock= Stock +1  WHERE identifier=$stock";
	if ($conn->query($sql) === TRUE) {

	echo $stock. "<br>"."funciona";
	
	
	} else {
		echo "Error deleting record: " . $conn->error;
	}
		
	$conn->close();		
	

	}

	showstock(6048907);
	
	?>