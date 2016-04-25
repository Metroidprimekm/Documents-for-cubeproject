<?php
if ($_POST['Write']){
$servername = "localhost";
$username = "root";
$password = "projectcube";
$dbname = "project2";

$xml = new DOMDocument();
$xml->formatOutput = true;

//Create root element
$root = $xml->createElement( "LegoCar" );
$xml->appendChild( $root );

//OrderID
$ID = $xml->createElement( "OrderID" );
$ID->appendChild( $xml->createTextNode('000123') );
$root->appendChild( $ID );



 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//Select first row in data base
$sql = "SELECT PartCode FROM LegoObject LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$r = $xml->createElement( "Chassis" );
		
		//loop through each key,value pair in row
      foreach($row as $key => $value)
      {
		 // foreach($row as $field=>$value)
		 $tChild = $xml->createElement( $key );
         $tChild->appendChild( $xml->createTextNode($value) );
         $r->appendChild( $tChild ); 
         
      }
	  $root->appendChild($r);     
    }
} else {
    echo "0 results";
}

//Select LegoBlocks from data base
$sql = "SELECT PartCode, PositionX, PositionZ, BlockType FROM LegoObject LIMIT 20 OFFSET 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$r = $xml->createElement( "LegoBlock" );
		
		//loop through each key,value pair in row
      foreach($row as $key => $value)
      {
		 // foreach($row as $field=>$value)
		 $tChild = $xml->createElement( $key );
         $tChild->appendChild( $xml->createTextNode($value) );
         $r->appendChild( $tChild ); 
         
      }
	  $root->appendChild($r);     
    }
} else {
    echo "0 results";
}


$conn->close();
if (!$xml->schemaValidate('LegoCarSchemaDef.xsd')) {
		echo 'An error ocurred, please place part again !';
	}	else {
		//$xml->preserveWhiteSpace = false;
		$xml->save('test_chassis.xml');
	}
}



?>