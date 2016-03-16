<! DOCTYPE html>

<html>
<head>
	<!--         Lo de la FH             -->
<link rel="stylesheet" type"text/css" href="Styles/styles.css" />
<title>Eng_FH Aachen: Manufacturing Cube/Index</title>

<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/typo3temp/stylesheet_0ade94ab98.css?1448379798" media="all" />
<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/fileadmin/template/css/fh.css?1450189426" media="all" />



<div id="PAGE">
    <BUTTONBAR id="BUTTONBAR">
        <div id="language" title="Language">
        
			 <a href="index.html" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="index_es.html" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="index_de.html" class="lang">
            <img src="Figures/deutsch.png" width="30" height="20" >
            </a>

        </div>
        <NAVBUTTON class="navhaupt" style="float:left;" title="Hauptnavigation" onclick="resptoggle('nav');">
            <svg version="1.1" id="G0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-30 -170 1600 1600" xml:space="preserve" style="stroke:#888;fill:#666;">
                <path d="M1536 192v-128q0 -26 -19 -45t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45zM1536 704v-128q0 -26 -19 -45t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45zM1536 1216v-128q0 -26 -19 -45 t-45 -19h-1408q-26 0 -45 19t-19 45v128q0 26 19 45t45 19h1408q26 0 45 -19t19 -45z"/>
            </svg>
        </NAVBUTTON>
    </BUTTONBAR>
    <div ID="HEADER">
        <script type="text/javascript">
            function dropdown(ID) {
                drop=window.setTimeout("dropaktiv("+ID+")", 1000);
            }
            function dropaktiv(ID) {
                pos=document.getElementById('SEITE').offsetLeft+106;
                if (ID==3) {pos = pos;}
                if (ID==4) {pos = pos + 216;}
                if (ID==5) {pos = pos;}
                if (ID==6) {pos = pos + 648;}
                document.getElementById('dropdown_page_'+ID).style.left=pos+"px";
                document.getElementById('dropdown_page_'+ID).style.display="block";
                if (ID != 3) document.getElementById('dropdown_page_3').style.display="none";
                if (ID != 4) document.getElementById('dropdown_page_4').style.display="none";
                if (ID != 5) document.getElementById('dropdown_page_5').style.display="none";
                if (ID != 6) document.getElementById('dropdown_page_6').style.display="none";
                //  dropaus=window.setTimeout("dropup("+ID+")",3000);
            }
            function dropup(ID) {
                document.getElementById('dropdown_page_'+ID).style.display="none";
            }
            function resptoggle(block) {
                if (document.getElementById('PAGE').className==block) {
                    document.getElementById('PAGE').className='none';
                    document.getElementById('MAIN').className='none';
                    document.body.style.overflow='auto';
                } else {
                    document.getElementById('PAGE').className=block;
                    if (block == "sidenav") {
                        document.getElementById('MAIN').className='sidenav';
                        document.body.style.overflow='hidden';
                    } else {
                        document.getElementById('MAIN').className='none';
                        document.body.style.overflow='auto';
                    }
                    if (block == 'login') {
                        if (document.getElementById('user')) {
                            document.getElementById('user').focus();
                        }
                    }
                }
            }
            function accordionAUF(id) {
                $("#accordion_"+id+"_klein_B").hide(0);
                $("#accordion_"+id+"_gross_C").fadeIn(500);
                $("#accordion_"+id+"_gross_B").show(0);
            }
            function accordionZU(id) {
                $("#accordion_"+id+"_klein_B").show(0);
                $("#accordion_"+id+"_gross_C").fadeOut(500);
                $("#accordion_"+id+"_gross_B").hide(0);
            }
        </script>
        
        <div id="TOPNAV"><span id="hilfsnavi_topnavi" class="invisible"><a href="#hilfsnavi_sprachwahl">Top-Navigation &uuml;berspringen</a></span>
            <a href="index.html" title="Home">Home</a><a href="kontakt/" title="Contact">Contact</a><a href="#" title="about us">About us</a>
        </div>
        <div id="LOGIN">    
            <a style="cursor:pointer" title="Öffnet die Login-Box" >Login</a><form style="visibility:hidden" action="/" name="loginbutton" method="post"><input type="hidden" name="995F472B" value="2060A5A289FD684BAD2756C18F7E4393"><input type="hidden" name="login" value="1"></form>
            <div class="loginbox" id="LoginBox" onclick="document.getElementById('LoginBox').style.visibility='hidden';document.getElementById('LoginFrame').style.visibility='hidden'"></div><div class="loginframe" id="LoginFrame"><div class="content" >

	<div class="tx-felogin-pi1">
		
<script language="javascript">
  if ("<div></div>">"" && "<div></div>"!="<div></div>") {
    text="<div></div>";
    text=text.substr(5);
    p=text.search(/<\/div>/);
    text=text.substr(0,p);
    alert(text);
  }
</script>


	</div>
	
	<!-- END: Content of extension "felogin", plugin "tx_felogin_pi1" -->

	</div></div>
            
        </div>
        
        <div id="SPRACHE">
            <span id="hilfsnavi_sprachwahl" class="invisible"><a href="#hilfsnavi_suche">Sprachumschaltung &uuml;berspringen</a></span>
            <a href="index.html" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="index_es.html" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="index_de.html" class="lang">
            <img src="Figures/deutsch.png" width="30" height="20" >
            </a>
        </div>
            
            
        

        <div id="HEADNAV">
            <span id="hilfsnavi_headnavi" class="invisible"><a href="#hilfsnavi_navigation">Haupt-Navigation &uuml;berspringen</a></span>
            <div id="START" class="passiv"><a href="https://www1.fh-aachen.de" title="Startseite">Startseite</a></div>
            <div class="passiv"><a href="index.html" title="Home" id="page_3" onmouseover="dropdown(3)" onmouseout="window.clearTimeout(drop)">Home icon</a></div><div class="passiv"><a href="#" title="Info" id="page_4" onmouseover="dropdown(4)" onmouseout="window.clearTimeout(drop)">About us</a></div><div class="passiv"><a href="#" title="contact" id="page_5" onmouseover="dropdown(5)" onmouseout="window.clearTimeout(drop)">Contact</a></div><div class="passiv"><a href="hochschule/zentralverwaltung/dezernat-v-innovationstransfer/" title="Algotracosa" id="page_6" onmouseover="dropdown(6)" onmouseout="window.clearTimeout(drop)">More</a></div>
        </div>
       
    </div>

</head>

	<!--         Lo de la FH             -->

<body>


	<center><h1 class="tittle">FH Aachen Manufacturing Cube</h1></br></center>
	


	

	
	
	
	<div id="dom-target" style="display: none;">
<?php
// define variables and set to empty values
$name = $email = "";
$maximo=0;

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

$sql = "SELECT OrderID FROM Orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		$maximo=$maximo+1;
    }
	echo "OrderID: " . $maximo. "<br>";
} else {
    echo "0 results";
}
$conn->close();

	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
	$last_id = $conn->insert_id;
    //echo "New record created successfully. Last inserted ID is: " . $last_id;	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);    
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	// Write data in table
	$sql = "INSERT INTO Users (email,Name)
	VALUES ('$email', '$name')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	 $sql = "INSERT INTO Orders (UserName,Status,OrderDate)
	VALUES ('$name','pending',NOW())";

	if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;	
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}	


?>
<script type="text/javascript">
window.location = "build.php";
</script>
<?php

	$conn->close();
	
}



function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
</div>



<html>
  <head>
  </head>
  <body>
    <script>
      //var js_var = "<?php echo $last_id; ?>";
	  var js_var = <?php echo json_encode("$last_id"); ?>;
       // alert("js_var="+ js_var);
    </script>
  </body>
</html>

<!-- <script>
    var div = document.getElementById("dom-target");
    var myData = div.textContent;
	//alert("myData = " + myData);
</script> */-->

 

<!--<h2>PHP Form Validation</h2> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   <input type="submit" name="submit" value="submit" >
   
</form>


<?php

/* echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>"; */


?>

 	 <center><img src="Figures/cube.png" alt="CUBE"/></center></br>
		
	</body>





</html>