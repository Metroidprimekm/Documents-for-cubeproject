<?php
if ($_POST['array'])	
{ 
/* 	$obj = json_decode('array');
	// include class file
	include("XML/Serializer.php");

	// create object
	$serializer = new XML_Serializer();

	// create array to be serialized

	// add XML declaration
	$serializer->setOption("addDecl", true);

	// indent elements
	$serializer->setOption("indent", " ");

	// set name for root element
	$serializer->setOption("rootName", "library");

	// represent scalar values as attributes instead of element
	$serializer->setOption("scalarAsAttributes", true);
      
	// perform serialization
	$result = $serializer->serialize($obj);

	// check result code and display XML if success
	if($result === true) 
	{
	echo $serializer->getSerializedData();
	} */
	//$dataPOST = trim(file_get_contents('array'));
	//$xmlData = simplexml_load_string('array');
	$xml = new DOMDocument();
	$xml->loadXML($_POST['array']);
	
	print $xml->saveXML();
	$xml->save('test_chassis.xml');
//	echo 'Thank you '. $_POST['array'] . ', says the PHP file';
} 


?>



