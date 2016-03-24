 	


	
	<html>
	<script  type="text/javascript" src="SendData.js">
</script>

<div id="dom-target3" style="display: none;">

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
	
 $GetCode=6100058;
 $stock = 6100058;
 
 
if ($_POST['GetCode']){
	echo $_POST['GetCode'];
	$stock = 6050965;
	
	//$stock=6050965;
	
/* // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stock,identifier FROM Brick";
$ceros = $conn->query($sql);

if ($ceros->num_rows > 0) {
    // output data of each row
    while($row = $ceros->fetch_assoc()) {
		
		if($row["identifier"]== $stock)
		{echo($row["stock"]);
	    break;

	    }
	
    }
	
} else {
    echo "0 results";
}
$conn->close(); */


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

	//echo $stock. "<br>";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
		
	$conn->close();		
	
	
echo $stock. "<br>";
}
    ?>
	
</div>



	

 </html>
	
	
	
	
	



