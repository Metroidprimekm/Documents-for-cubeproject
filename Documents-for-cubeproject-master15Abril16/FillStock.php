<?php
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
	
	if ($_POST['Button'] == "ResDefault"){
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		
		
		$query = "UPDATE Brick AS t1 INNER JOIN DefBrick AS t2 ON t1.Identifier = t2.Identifier SET t1.Stock = t2.Stock";
		if (!$conn->query($query) === TRUE) {
			echo("An error ocurred, please reload the page and press 'Restock Default'");
			$conn->close();
			exit;
		}
		
		//Close connection
		$conn->close();
		echo "Stock table successfully updated";
	}

	
	
	
	
	if ($_POST['Button'] == "WriteDefault"){
		$id = $_POST["BV1"];
		$id2 = $_POST["BV2"];
		$id3 = $_POST["BV3"];
		$id4 = $_POST["BV4"];
		$id5 = $_POST["BV5"];
		$id6 = $_POST["BV6"];
		$id7 = $_POST["BV7"];
		$id8 = $_POST["BV8"];
		$id9 = $_POST["BV9"];
		$id10 = $_POST["BV10"];
		$id11 = $_POST["BV11"];
		$id12 = $_POST["BV12"];
		$id13 = $_POST["BV13"];
		$id14 = $_POST["BV14"];
		$id15 = $_POST["BV15"];
		$id16 = $_POST["BV16"];
		$id17 = $_POST["BV17"];
		$id18 = $_POST["BV18"];
		$id19 = $_POST["BV19"];
		$id20 = $_POST["BV20"];
		$id21 = $_POST["BV21"];
		$id22 = $_POST["BV22"];
		$id23 = $_POST["BV23"];
		$id24 = $_POST["BV24"];
		$id25 = $_POST["BV25"];
		$id26 = $_POST["BV26"];
		$id27 = $_POST["BV27"];
		$id28 = $_POST["BV28"];
		$id29 = $_POST["BV29"];
		$id30 = $_POST["BV30"];
		$id31 = $_POST["BV31"];
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id WHERE identifier=6050965";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id2 WHERE identifier=6078317";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id3 WHERE identifier=6100058";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id4 WHERE identifier=6004947";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id5 WHERE identifier=343724";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id6 WHERE identifier=6030817";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id7 WHERE identifier=6031324";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id8 WHERE identifier=4160152";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id9 WHERE identifier=6001240";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id10 WHERE identifier=343721";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id11 WHERE identifier=6020412";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id12 WHERE identifier=6020150";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id13 WHERE identifier=6020134";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id14 WHERE identifier=301121";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id15 WHERE identifier=4515331";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}

		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id16 WHERE identifier=6058256";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id17 WHERE identifier=6020110";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}

		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id18 WHERE identifier=4183780";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id19 WHERE identifier=4652863";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id20 WHERE identifier=4166923";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id21 WHERE identifier=4168579";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id22 WHERE identifier=6025187";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id23 WHERE identifier=4170795";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id24 WHERE identifier=4247780";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id25 WHERE identifier=4541728";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id26 WHERE identifier=4620515";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id27 WHERE identifier=4167177";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id28 WHERE identifier=6023087";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id29 WHERE identifier=6048908";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id30 WHERE identifier=6048907";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE DefBrick SET Stock=$id31 WHERE identifier=6048909";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
			
		//Close connection
		$conn->close();
		echo "Default table successfully updated";
	}
	
		if ($_POST['Button'] == "Submit"){
		$id = $_POST["BV1"];
		$id2 = $_POST["BV2"];
		$id3 = $_POST["BV3"];
		$id4 = $_POST["BV4"];
		$id5 = $_POST["BV5"];
		$id6 = $_POST["BV6"];
		$id7 = $_POST["BV7"];
		$id8 = $_POST["BV8"];
		$id9 = $_POST["BV9"];
		$id10 = $_POST["BV10"];
		$id11 = $_POST["BV11"];
		$id12 = $_POST["BV12"];
		$id13 = $_POST["BV13"];
		$id14 = $_POST["BV14"];
		$id15 = $_POST["BV15"];
		$id16 = $_POST["BV16"];
		$id17 = $_POST["BV17"];
		$id18 = $_POST["BV18"];
		$id19 = $_POST["BV19"];
		$id20 = $_POST["BV20"];
		$id21 = $_POST["BV21"];
		$id22 = $_POST["BV22"];
		$id23 = $_POST["BV23"];
		$id24 = $_POST["BV24"];
		$id25 = $_POST["BV25"];
		$id26 = $_POST["BV26"];
		$id27 = $_POST["BV27"];
		$id28 = $_POST["BV28"];
		$id29 = $_POST["BV29"];
		$id30 = $_POST["BV30"];
		$id31 = $_POST["BV31"];
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6050965";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id2 WHERE identifier=6078317";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id3 WHERE identifier=6100058";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE brick SET Stock=$id4 WHERE identifier=6004947";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id5 WHERE identifier=343724";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id6 WHERE identifier=6030817";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id7 WHERE identifier=6031324";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id8 WHERE identifier=4160152";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id9 WHERE identifier=6001240";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id10 WHERE identifier=343721";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE brick SET Stock=$id11 WHERE identifier=6020412";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id12 WHERE identifier=6020150";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id13 WHERE identifier=6020134";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id14 WHERE identifier=301121";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id15 WHERE identifier=4515331";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}

		//Update register
		$sql = "UPDATE brick SET Stock=$id16 WHERE identifier=6058256";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id17 WHERE identifier=6020110";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}

		//Update register
		$sql = "UPDATE brick SET Stock=$id18 WHERE identifier=4183780";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id19 WHERE identifier=4652863";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id20 WHERE identifier=4166923";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id21 WHERE identifier=4168579";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id22 WHERE identifier=6025187";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id23 WHERE identifier=4170795";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE brick SET Stock=$id24 WHERE identifier=4247780";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id25 WHERE identifier=4541728";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id26 WHERE identifier=4620515";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id27 WHERE identifier=4167177";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id28 WHERE identifier=6023087";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id29 WHERE identifier=6048908";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
	
		//Update register
		$sql = "UPDATE brick SET Stock=$id30 WHERE identifier=6048907";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		
		//Update register
		$sql = "UPDATE brick SET Stock=$id31 WHERE identifier=6048909";
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
			
		//Close connection
		$conn->close();
		echo "Registers successfully updated";
	}
	
	if ($_POST['Button'] == "button01"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6050965";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button02"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6078317";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button03"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6100058";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button04"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6004947";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button05"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=343724";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button06"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6030817";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button07"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6031324";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button08"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4160152";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button09"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6001240";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button10"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=343721";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button11"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6020412";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button12"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6020150";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button13"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6020134";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button14"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=301121";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button15"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4515331";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button16"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6058256";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button17"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6020110";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button18"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4183780";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button19"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4652863";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button20"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4166923";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button21"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4168579";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button22"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6025187";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button23"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4170795";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button24"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4247780";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button25"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4541728";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button26"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4620515";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button27"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=4167177";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button28"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6023087";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button29"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6048908";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button30"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6048907";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
	if ($_POST['Button'] == "button31"){
		$id = $_POST["ButtonValue"];
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Update register
		$sql = "UPDATE brick SET Stock=$id WHERE identifier=6048909";
	
		if (!$conn->query($sql) === TRUE) {
			echo("An error ocurred, please reload the page");
			exit;
		}
		//Close connection
		$conn->close();
		echo "Register successfully updated";
	}
	
?>