<! DOCTYPE html>

<html>

<head>

  <!-- <link rel="stylesheet" type"text/css" href="Styles/styles.css" />
  <link rel="stylesheet" href="Styles/style-test.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="Styles/Carruselstyle.css"> -->

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Eng_FH Aachen: Manufacturing Cube</title>

<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/typo3temp/stylesheet_0ade94ab98.css?1448379798" media="all" />
<link rel="stylesheet" type="text/css" href="https://www.fh-aachen.de/fileadmin/template/css/fh.css?1450189426" media="all" />

<!-- Variable of current position of the Carrousel -->
<script type="text/javascript">
var didi=1;
</script>

    <!-- Bliss JS Libs -->
    <script src='JavaScript/Aminaciones.js'></script>

    <!-- jCarouselLite -->
    <script src="JavaScript/Animaciones2.js"></script>

</head>
<body>


<div id="PAGE">
    <BUTTONBAR id="BUTTONBAR">
        <div id="language" title="Language">
        
       <a href="build.php" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="build_es.php" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="build_de.php" class="lang">
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
            <a href="testindex.php" title="Home">Home</a><a href="Contact.html" title="Contact">Kontact</a><a href="About_us.html" title="about us">&Uuml;ber uns</a>        
        </div>
        
        <div id="SPRACHE">
            <span id="hilfsnavi_sprachwahl" class="invisible"><a href="#hilfsnavi_suche">Sprachumschaltung &uuml;berspringen</a></span>
            <a href="build.php" class="lang">
            <img src="Figures/english.png" width="30" height="20" >
            </a>
            <a href="build_es.php" class="lang">
            <img src="Figures/espanol.png" width="30" height="20" >
            </a>
            <a href="build_de.php" class="lang">
            <img src="Figures/deutsch.png" width="30" height="20" >
            </a>
        </div>

        <div id="HEADNAV">
            <span id="hilfsnavi_headnavi" class="invisible"><a href="#hilfsnavi_navigation">Haupt-Navigation &uuml;berspringen</a></span>
            <!-- <div id="START" class="passiv"><a href="https://www1.fh-aachen.de" title="Startseite">Startseite</a></div> -->
            <div class="passiv"><a href="testindex.php" title="Home" id="page_3" onmouseover="dropdown(3)" onmouseout="window.clearTimeout(drop)">Home</a></div><div class="passiv"><a href="About_us.html" title="Info" id="page_4" onmouseover="dropdown(4)" onmouseout="window.clearTimeout(drop)">&Uuml;ber uns</a></div><div class="passiv"><a href="Contact.html" title="contact" id="page_5" onmouseover="dropdown(5)" onmouseout="window.clearTimeout(drop)">Kontact</a></div><div class="passiv"><a href="https://www.fh-aachen.de/" title="Algotracosa" id="page_6" onmouseover="dropdown(6)" onmouseout="window.clearTimeout(drop)">Mehr</a></div>
        </div>
       
    </div>

  <!--         Lo de la FH             -->

  <!-- Drag n Drop -->
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<div id="SEITE">
    <a href="testindex.html" id="logo" title="zur Startseite"></a>

  
  <style> 
      canvas { width: 30%; height: 100%; padding-left:5%;}
      <!-- #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; } -->
      <!-- #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; } -->
    </style>


    <div id="MAIN" class="none">

        <div id="MAINNAV">

    <script src="JavaScript/OBJLoader.js"></script>
    <script src="JavaScript/JSONLoader.js"></script>
    

  <center>
<font size=6>
    <div id="jcl-demo" class="entry-content">
                <div class="custom-container mainchas">
                   
                    <div class="carousel">
                        <ul>
                            <li><a id = "show_chasisR"><img src="Figures/Legos/6048907.png"></a></li>
                            <li><a id = "show_chasisA"><img src="Figures/Legos/6048908.png"></a></li>
                            <li><a id = "show_chasisV"><img src="Figures/Legos/6048909.png"></a></li>
                        </ul>
                    <a href="#" class="prev">&lsaquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="next">&rsaquo;</a>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
            <br>
        
        <div id="jcl-demo" class="entry-content">
            <div class="custom-container mainbody">
                               
                <div class="carousel">
                    <ul>
                        <li><a id="show_body_2x2x2_R"><img src="Figures/Legos/343721.png"></a></li>
                        <li><a id="show_body_2x2x2_A"><img src="Figures/Legos/343724.png"></a></li>
                        <li><a id="show_body_2x4x1_A"><img src="Figures/Legos/4160152.png"></a></li>
                        <li><a id="show_body_2x4x2_V"><img src="Figures/Legos/4166923.png"></a></li>
                        <li><a id="show_body_2x4x2_A"><img src="Figures/Legos/4167177.png"></a></li>
                        <li><a id="show_body_2x2x2_V"><img src="Figures/Legos/4168579.png"></a></li>
                        <li><a id="show_body_2x4x1_V"><img src="Figures/Legos/4170795.png"></a></li>
                        <li><a id="show_body_2x2x2_L"><img src="Figures/Legos/4183780.png"></a></li>
                        <li><a id="show_body_2x8x1_V"><img src="Figures/Legos/4247780.png"></a></li>
                        <li><a id="show_body_2x6_1_A"><img src="Figures/Legos/6023087.png"></a></li>
                        <li><a id="show_body_2x4x2_R"><img src="Figures/Legos/301121.png"></a></li>
                        <li><a id="show_tanque"><img src="Figures/Legos/6001240.png"></a></li>

                    </ul>
                    <a href="#" class="prev">&lsaquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="next">&rsaquo;</a>
                </div>
                
                <div class="clear"></div>
            </div>
        </div> 
        <br>
   
    
        <div id="jcl-demo" class="entry-content">
            <div class="custom-container maintec">
                               
                <div class="carousel">
                    <ul>
                        <li><a id="show_techo_2x3x2_A"><img src="Figures/Legos/4541728.png"></a></li>
                        <li><a id="show_techo_2x4x2_V"><img src="Figures/Legos/4652863.png"></a></li>
                        <li><a id="show_techo_2x3x2_B"><img src="Figures/Legos/6004947.png"></a></li>
                        <li><a id="show_ventana_2x3x2_A"><img src="Figures/Legos/6020110.png"></a></li>
                        <li><a id="show_ventana_2x4x2_R"><img src="Figures/Legos/6020134.png"></a></li>
                        <li><a id="show_techo_2x3x3_R"><img src="Figures/Legos/6020150.png"></a></li>
                        <li><a id="show_ventana_2x2x3_R"><img src="Figures/Legos/6020412.png"></a></li>
                        <li><a id="show_ventana_2x2x2_V"><img src="Figures/Legos/6025187.png"></a></li>
                    </ul>
                <a href="#" class="prev">&lsaquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="next">&rsaquo;</a>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        </font>
       <!--

        <div id="jcl-demo" class="entry-content">
            <div class="custom-container mainspe">
                <a href="#" class="prev">&lsaquo;</a>
                <div class="carousel">
                    <ul>
                        <li><a id="show_gancho_1"><img src="Figures/Legos/6050965.png"></a></li>
                        <li><a id="show_sirena"><img src="Figures/Legos/6058256.png"></a></li>
                        <li><a id="show_gancho_2"><img src="Figures/Legos/6100058.png"></a></li>
                        <li><a id="show_motor"><img src="Figures/Legos/6078317.png"></a></li>
                        <li><a id="show_cosarara"><img src="Figures/Legos/4515331.png"></a></li>
                        <li><a id="show_coladepato"><img src="Figures/Legos/4620515.png"></a></li>
                        <li><a id="show_special_2x1x3_A"><img src="Figures/Legos/6030817.png"></a></li>
                        <li><a id="show_semaforo"><img src="Figures/Legos/6031324.png"></a></li>                        
                    </ul>
                </div>
                <a href="#" class="next">&rsaquo;</a>
                <div class="clear"></div>
            </div>
        </div>-->


    <!-- Set of the stock boxes under the carrousel -->
    </br></br></br></br></br></br></br></br></br>
    <script type="text/javascript">
       getStock2(6048908);
       </script>
       
       <div id="dom-target2" style="display: none;"></div> 
       
  <?php 

  function pruebashow(){
    
    $stock = 6048907;
    
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
        {echo $row["stock"];
        break;
        }
    
    }
    
} else {
    echo "0 results";
}
$conn->close();
      return $row["stock"]; 
  }
    ?>
       
   <!-- Stock:<input type="text" name="stock chasis" value= pruebashow(); id="sch">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Stock:<input type="text" name="stock body" value=getStock2(6048908); id="sby">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Stock:<input type="text" name="stock techo" value=getStock2(4541728); id="stc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Stock:<input type="text" name="stock special" value="1" id="ssp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    -->

    <script>
        function getStock2(PartCodeToGet){
    
        var hr = new XMLHttpRequest();
        // Create some variables we need to send to our PHP file
        var url = "GetCode.php";
        var vars = "GetCode="+PartCodeToGet ;
        hr.open("POST", url, true);
        // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function() {
            if(hr.readyState == 4 && hr.status == 200) {
                var return_data = hr.responseText;
                //document.getElementById("status").innerHTML = return_data;
            }
        }
        // Send the data to PHP now... and wait for response to update the status div
        hr.send(vars); // Actually execute the request
       // document.getElementById("status").innerHTML = "processing...";
       //   alert("hola funcion final");

  }</script>
    
    </center>
  
  <div id="dom-target" style="display: none;">
    <?php 

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
    echo $maximo. "<br>";
} else {
    echo "0 results";
}
$conn->close();
    
    ?>

</div>
</div>

<div id="INHALT_MAIN">
<p><i> 
Nutz die Pfeile, wenn Sie den Legostein rechts oder links bewegen m&ouml;chten. Dann drucken Sie "ok" wenn Sie den Legostein aufstellen m&ouml;chten.
Wenn Sie schon fertig sein, bitte drucken Sie den gr&uuml;ne Pfeil und Ihr Auto wird gebeudet werde. Wenn sie einen Legostein entrefen, bitte drucken Sie das rote Kruez. </p>
</br></i>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a onclick="izq = !izq;" href="#" ><img src="Figures/flechaizq.png"></a>&nbsp;&nbsp;&nbsp;
    <a onclick="ok = !ok;" href="#"><img src="Figures/interfaz.png"></a>&nbsp;&nbsp;&nbsp;
    <a onclick="der = !der;" href="#"><img src="Figures/flechader.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a align="left" onclick="rem = !rem;" href="#"><img src="Figures/cruzar.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <p id="demo"></p> --> 
    <a  id="next" href="#" onclick="ajaxWriteXML();"><img class="box1" src="Figures/flechago.png"></a>
</center>
<div id="render">
    <script src="JavaScript/three.min.js"></script>
    <script src="JavaScript/OrbitControls.js"></script>
    <script src="JavaScript/Jsonconverter.js"></script> 
    <script src="JavaScript/renderfile.js"></script> 
</div>

<!-- Close of the INHALT_MAIN -->
</div>

    <div id="FOOTER">
            <div id="BREADCRUMB_FOOTER">
                
            </div>
            <div class="mobil" id="TOPNAV">
                <h2>FH Direkt</h2><a href="kontakt/" title="Kontaktinformationen der FH Aachen">Kontakt/Hilfe</a><a href="hochschule/zentralverwaltung/dezernat-i-personal/stellenanzeigen/" title="Stellenanzeigen">Stellenanzeigen</a><a href="presse/" title="Presseinformationen der FH Aachen">Presse</a><a href="topnavi/telefonbuch/" title="Telefonbuch">Telefonbuch</a><a href="downloads/?no_cache=1" title="Formulare, Flyer, Broschüren, Informationen, ...">Downloads</a>
            </div>
            <div id="INHALT_FOOTER">

                <div class="STD NO_1">
    <!--  CONTENT ELEMENT, uid:43/text [begin] -->
        <div id="c43" class="csc-default">
        <!--  Header: [begin] -->
            <div class="csc-header csc-header-n1"><h2 class="csc-firstHeader">Kontakt</h2></div>
        <!--  Header: [end] -->
            
        <!--  Text: [begin] -->
            <p class="bodytext"><b>FH Aachen<br></b>Postfach 100 560<br>52005 Aachen<br>T +49.241.6009 0<br>F +49.241.6009 51090</p>
        <!--  Text: [end] -->
            </div>
    <!--  CONTENT ELEMENT, uid:43/text [end] -->
        </div>
                
            </div>


        <div style="clear: both;"></div>
        </div>

        <!-- CLose div MAIN -->
        </div>

    <!-- CLose div SEITE -->
    </div>
<!-- CLose div PAGE -->
</div>
    
</body>


     <!-- El Drag n' Drop -->
      <script>
         $(function() {
            $( "#show_chasisR" ).draggable({ revert: true});
            $( "#show_chasisA" ).draggable({ revert: true});
            $( "#show_chasisV" ).draggable({ revert: true});
            $( "#show_body_2x2x2_R" ).draggable({ revert: true});
            $( "#show_body_2x2x2_A" ).draggable({ revert: true});
            $( "#show_body_2x4x1_A" ).draggable({ revert: true});
            $( "#show_body_2x4x2_V" ).draggable({ revert: true});
            $( "#show_body_2x4x2_A" ).draggable({ revert: true});
            $( "#show_body_2x2x2_V" ).draggable({ revert: true});
            $( "#show_body_2x4x1_V" ).draggable({ revert: true});
            $( "#show_body_2x2x2_L" ).draggable({ revert: true});
            $( "#show_body_2x8x1_V" ).draggable({ revert: true});
            $( "#show_body_2x6_1_A" ).draggable({ revert: true});
            $( "#show_body_2x4x2_R" ).draggable({ revert: true});
            $( "#show_tanque" ).draggable({ revert: true});
            $("#show_techo_2x3x2_A").draggable({revert:true});
            
            $("#show_techo_2x3x3_R").draggable({revert:true});
            $("#show_techo_2x3x2_B").draggable({revert:true});
            $("#show_techo_2x4x2_V").draggable({revert:true});
            $("#show_techo_2x1x3_A").draggable({revert:true});
            
       $(function() {
          $('*[draggable!=true]','.slick-track').unbind('dragstart');
          $( ".draggable-element" ).draggable();
        });
      });
      </script> 


    <script scr="JavaScript/FileSaver.js"/></script>


  <script src="JavaScript/build.js"></script>
  <script >
  verify.addEventListener("click", function(){
    if (objects[0] != null && objects[1] != null && arrayBlockCounter >= 2)
    if (confirm('Are you sure that this is the car of your dreams?')) {
      window.location = "ending.php"; 
  }
  });
  </script>

  <script>
    $(function() {
      $(".mainchas .carousel").jCarouselLite({
          btnNext: ".mainchas .next",
          btnPrev: ".mainchas .prev",
          speed: 500,
          visible: 1
        });
       });
  </script>

  <script>
    $(function() {
      $(".mainbody .carousel").jCarouselLite({
          btnNext: ".mainbody .next",
          btnPrev: ".mainbody .prev",
          speed: 500,
          visible: 1
        });
       });
  </script>

    <script>
    $(function() {
      $(".mainspe .carousel").jCarouselLite({
          btnNext: ".mainspe .next",
          btnPrev: ".mainspe .prev",
          speed: 500,
          visible: 1
        });
       });
  </script>

    <script>
    $(function() {
      $(".maintec .carousel").jCarouselLite({
          btnNext: ".maintec .next",
          btnPrev: ".maintec .prev",
          speed: 500,
          visible: 1
        });
       });
  </script>

  <!-- Code which takes the screenshoot and saves the img in the variable "imagen" as a png image by clicking the button "Print" -->
  <script type="text/javascript">
  $('#printimg').click(function(){
    var imagen;
    imagen = Render.domElement.toDataURL("image/png");
    window.open(imagen);
    });
 
  </script>

<script>
</script>
</html>