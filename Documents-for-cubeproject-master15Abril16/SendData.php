
<?php include 'codetoget.php';?>
<html>
<head>
<script  type="text/javascript" src="SendData.js">
</script>

</head>
<body>
<h2>Ajax Post to PHP and Get Return Data</h2>

<input name="GetCode" type="submit" value="Send code" onclick="codetoget2();"> <br><br>
<script type="text/javascript">

document.getElementById("sch").value = "<?php echo $stock; ?>"; 
</script>
Stock:<input type="text" name="idtest" value="<?php echo ($stock); ?>" id="sch" />

<!--Stock:<input type="text" name="stock chasis" value= ""; "id="sch">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

<div id="status"></div>

</body>
</html>




<?php

	
/* 	$str = '<input name="text" class="carpe_slider_display" id="%s" value="%s">';
    printf($str,"", "hola"); */


?>

	
	