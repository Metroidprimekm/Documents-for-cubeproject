 
 
 <?php 
 
 function showstock(){
	 
	 if ($_POST['GetCode']){
	echo $_POST['GetCode'];
	$stock = $_POST['GetCode'];
	
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

$sql = "SELECT stock,identifier FROM Brick";
$ceros = $conn->query($sql);

if ($ceros->num_rows > 0) {
    // output data of each row
    while($row = $ceros->fetch_assoc()) {
		
		if($row["identifier"]== $stock)
		{echo htmlspecialchars ($row["stock"]);
	    break;

	    }
	
    }
	
} else {
    echo "0 results";
	}
	$conn->close();
	
	
		$lacala = 12;

	return $row["stock"];
	}

	 
	 
 }
 	?>
	
	

	
	

