var Button = 0;
var ButtonValue = 0; 
var dataString = 0;
var BV1 = 0, BV2 = 0, BV3 = 0, BV4 = 0, BV5 = 0, BV6 = 0, BV7 = 0, BV8 = 0, BV9 = 0, BV10 = 0,
BV11 = 0, BV12 = 0, BV13 = 0, BV14 = 0, BV15 = 0, BV16 = 0, BV17 = 0, BV18 = 0, BV19 = 0, BV20 = 0,
BV21 = 0, BV22 = 0, BV23 = 0, BV24 = 0, BV25 = 0, BV26 = 0, BV27 = 0, BV28 = 0, BV29 = 0, BV30 = 0, BV31 = 0;

function ResAll(){
	Button = "Submit";
	BV1 = document.getElementById("6050965").value;
	BV2 = document.getElementById("6078317").value;
	BV3 = document.getElementById("6100058").value;
	BV4 = document.getElementById("6004947").value;
	BV5 = document.getElementById("343724").value;
	BV6 = document.getElementById("6030817").value;
	BV7 = document.getElementById("6031324").value;
	BV8 = document.getElementById("4160152").value;
	BV9 = document.getElementById("6001240").value;
	BV10 = document.getElementById("343721").value;
	BV11 = document.getElementById("6020412").value;
	BV12 = document.getElementById("6020150").value;
	BV13 = document.getElementById("6020134").value;
	BV14 = document.getElementById("301121").value;
	BV15 = document.getElementById("4515331").value;
	BV16 = document.getElementById("6058256").value;
	BV17 = document.getElementById("6020110").value;
	BV18 = document.getElementById("4183780").value;
	BV19 = document.getElementById("4652863").value;
	BV20 = document.getElementById("4166923").value;
	BV21 = document.getElementById("4168579").value;
	BV22 = document.getElementById("6025187").value;
	BV23 = document.getElementById("4170795").value;
	BV24 = document.getElementById("4247780").value;
	BV25 = document.getElementById("4541728").value;
	BV26 = document.getElementById("4620515").value;
	BV27 = document.getElementById("4167177").value;
	BV28 = document.getElementById("6023087").value;
	BV29 = document.getElementById("6048908").value;
	BV30 = document.getElementById("6048907").value;
	BV31 = document.getElementById("6048909").value;
	
	dataString = 'Button=' + Button + '&BV1=' + BV1 + '&BV2=' + BV2 + '&BV3=' + BV3 + '&BV4=' + BV4
	+ '&BV5=' + BV5 + '&BV6=' + BV6 + '&BV7=' + BV7 + '&BV8=' + BV8 + '&BV9=' + BV9 + '&BV10=' + BV10
	+ '&BV11=' + BV11 + '&BV12=' + BV12 + '&BV13=' + BV13 + '&BV14=' + BV14 + '&BV15=' + BV15 + '&BV16=' + BV16
	+ '&BV17=' + BV17 + '&BV18=' + BV18 + '&BV19=' + BV19 + '&BV20=' + BV20 + '&BV21=' + BV21 + '&BV22=' + BV22
	+ '&BV23=' + BV23 + '&BV24=' + BV24 + '&BV25=' + BV25 + '&BV26=' + BV26 + '&BV27=' + BV27 + '&BV28=' + BV28
	+ '&BV29=' + BV29 + '&BV30=' + BV30 + '&BV31=' + BV31;
	
	//Check entered value
	if ((BV1 >= 0 && BV1 <= 9) && (BV2 >= 0 && BV2 <= 9) && (BV3 >= 0 && BV3 <= 9) && (BV4 >= 0 && BV4 <= 9)&& (BV5 >= 0 && BV5 <= 9) &&
	   (BV6 >= 0 && BV6 <= 9) && (BV7 >= 0 && BV7 <= 9) && (BV8 >= 0 && BV8 <= 9) && (BV9 >= 0 && BV9 <= 9) && (BV10 >= 0 && BV10 <= 9) &&
	   (BV11 >= 0 && BV11 <= 9) && (BV12 >= 0 && BV12 <= 9) && (BV13 >= 0 && BV13 <= 9) && (BV14 >= 0 && BV14 <= 9) && (BV15 >= 0 && BV15 <= 9) &&
	   (BV16 >= 0 && BV16 <= 9) && (BV17 >= 0 && BV17 <= 9) && (BV18 >= 0 && BV18 <= 9) && (BV19 >= 0 && BV19 <= 9) && (BV20 >= 0 && BV20 <= 9) &&
	   (BV21 >= 0 && BV21 <= 9) && (BV22 >= 0 && BV22 <= 9) && (BV23 >= 0 && BV23 <= 9) && (BV24 >= 0 && BV24 <= 9) && (BV25 >= 0 && BV25 <= 9) &&
	   (BV26 >= 0 && BV26 <= 9) && (BV27 >= 0 && BV27 <= 9) && (BV28 >= 0 && BV28 <= 9) && (BV29 >= 0 && BV29 <= 9) && (BV30 >= 0 && BV30 <= 9) &&
	   (BV31 >= 0 && BV31 <= 9)) {
		
		AjaxSend();
  
	}else{
		alert("Please enter numbers between 0-9 only")
	}
	return false;
}

function WriteDefault(){
	Button = "WriteDefault";
	BV1 = document.getElementById("6050965").value;
	BV2 = document.getElementById("6078317").value;
	BV3 = document.getElementById("6100058").value;
	BV4 = document.getElementById("6004947").value;
	BV5 = document.getElementById("343724").value;
	BV6 = document.getElementById("6030817").value;
	BV7 = document.getElementById("6031324").value;
	BV8 = document.getElementById("4160152").value;
	BV9 = document.getElementById("6001240").value;
	BV10 = document.getElementById("343721").value;
	BV11 = document.getElementById("6020412").value;
	BV12 = document.getElementById("6020150").value;
	BV13 = document.getElementById("6020134").value;
	BV14 = document.getElementById("301121").value;
	BV15 = document.getElementById("4515331").value;
	BV16 = document.getElementById("6058256").value;
	BV17 = document.getElementById("6020110").value;
	BV18 = document.getElementById("4183780").value;
	BV19 = document.getElementById("4652863").value;
	BV20 = document.getElementById("4166923").value;
	BV21 = document.getElementById("4168579").value;
	BV22 = document.getElementById("6025187").value;
	BV23 = document.getElementById("4170795").value;
	BV24 = document.getElementById("4247780").value;
	BV25 = document.getElementById("4541728").value;
	BV26 = document.getElementById("4620515").value;
	BV27 = document.getElementById("4167177").value;
	BV28 = document.getElementById("6023087").value;
	BV29 = document.getElementById("6048908").value;
	BV30 = document.getElementById("6048907").value;
	BV31 = document.getElementById("6048909").value;
	
	dataString = 'Button=' + Button + '&BV1=' + BV1 + '&BV2=' + BV2 + '&BV3=' + BV3 + '&BV4=' + BV4
	+ '&BV5=' + BV5 + '&BV6=' + BV6 + '&BV7=' + BV7 + '&BV8=' + BV8 + '&BV9=' + BV9 + '&BV10=' + BV10
	+ '&BV11=' + BV11 + '&BV12=' + BV12 + '&BV13=' + BV13 + '&BV14=' + BV14 + '&BV15=' + BV15 + '&BV16=' + BV16
	+ '&BV17=' + BV17 + '&BV18=' + BV18 + '&BV19=' + BV19 + '&BV20=' + BV20 + '&BV21=' + BV21 + '&BV22=' + BV22
	+ '&BV23=' + BV23 + '&BV24=' + BV24 + '&BV25=' + BV25 + '&BV26=' + BV26 + '&BV27=' + BV27 + '&BV28=' + BV28
	+ '&BV29=' + BV29 + '&BV30=' + BV30 + '&BV31=' + BV31;
	
	//Check entered value
	if ((BV1 >= 0 && BV1 <= 9) && (BV2 >= 0 && BV2 <= 9) && (BV3 >= 0 && BV3 <= 9) && (BV4 >= 0 && BV4 <= 9)&& (BV5 >= 0 && BV5 <= 9) &&
	   (BV6 >= 0 && BV6 <= 9) && (BV7 >= 0 && BV7 <= 9) && (BV8 >= 0 && BV8 <= 9) && (BV9 >= 0 && BV9 <= 9) && (BV10 >= 0 && BV10 <= 9) &&
	   (BV11 >= 0 && BV11 <= 9) && (BV12 >= 0 && BV12 <= 9) && (BV13 >= 0 && BV13 <= 9) && (BV14 >= 0 && BV14 <= 9) && (BV15 >= 0 && BV15 <= 9) &&
	   (BV16 >= 0 && BV16 <= 9) && (BV17 >= 0 && BV17 <= 9) && (BV18 >= 0 && BV18 <= 9) && (BV19 >= 0 && BV19 <= 9) && (BV20 >= 0 && BV20 <= 9) &&
	   (BV21 >= 0 && BV21 <= 9) && (BV22 >= 0 && BV22 <= 9) && (BV23 >= 0 && BV23 <= 9) && (BV24 >= 0 && BV24 <= 9) && (BV25 >= 0 && BV25 <= 9) &&
	   (BV26 >= 0 && BV26 <= 9) && (BV27 >= 0 && BV27 <= 9) && (BV28 >= 0 && BV28 <= 9) && (BV29 >= 0 && BV29 <= 9) && (BV30 >= 0 && BV30 <= 9) &&
	   (BV31 >= 0 && BV31 <= 9)) {
		
		AjaxSend();
  
	}else{
		alert("Please enter numbers between 0-9 only")
	}
	return false;
	
}

function ChooseDefault(){
	Button = "ResDefault";
	dataString = 'Button=' + Button;
	AjaxSend();
	return false;
}

function send01(){
	//Get values from form
	Button = "button01";
	ButtonValue = document.getElementById("6050965").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send02(){
	//Get values from form
	Button = "button02";
	ButtonValue = document.getElementById("6078317").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send03(){
	//Get values from form
	Button = "button03";
	ButtonValue = document.getElementById("6100058").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send04(){
	//Get values from form
	Button = "button04";
	ButtonValue = document.getElementById("6004947").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send05(){
	//Get values from form
	Button = "button05";
	ButtonValue = document.getElementById("343724").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send06(){
	//Get values from form
	Button = "button06";
	ButtonValue = document.getElementById("6030817").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send07(){
	//Get values from form
	Button = "button07";
	ButtonValue = document.getElementById("6031324").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send08(){
	//Get values from form
	Button = "button08";
	ButtonValue = document.getElementById("4160152").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send09(){
	//Get values from form
	Button = "button09";
	ButtonValue = document.getElementById("6001240").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send10(){
	//Get values from form
	Button = "button10";
	ButtonValue = document.getElementById("343721").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send11(){
	//Get values from form
	Button = "button11";
	ButtonValue = document.getElementById("6020412").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send12(){
	//Get values from form
	Button = "button12";
	ButtonValue = document.getElementById("6020150").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send13(){
	//Get values from form
	Button = "button13";
	ButtonValue = document.getElementById("6020134").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send14(){
	//Get values from form
	Button = "button14";
	ButtonValue = document.getElementById("301121").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send15(){
	//Get values from form
	Button = "button15";
	ButtonValue = document.getElementById("4515331").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send16(){
	//Get values from form
	Button = "button16";
	ButtonValue = document.getElementById("6058256").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send17(){
	//Get values from form
	Button = "button17";
	ButtonValue = document.getElementById("6020110").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send18(){
	//Get values from form
	Button = "button18";
	ButtonValue = document.getElementById("4183780").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send19(){
	//Get values from form
	Button = "button19";
	ButtonValue = document.getElementById("4652863").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send20(){
	//Get values from form
	Button = "button20";
	ButtonValue = document.getElementById("4166923").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send21(){
	//Get values from form
	Button = "button21";
	ButtonValue = document.getElementById("4168579").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send22(){
	//Get values from form
	Button = "button22";
	ButtonValue = document.getElementById("6025187").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send23(){
	//Get values from form
	Button = "button23";
	ButtonValue = document.getElementById("4170795").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send24(){
	//Get values from form
	Button = "button24";
	ButtonValue = document.getElementById("4247780").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send25(){
	//Get values from form
	Button = "button25";
	ButtonValue = document.getElementById("4541728").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send26(){
	//Get values from form
	Button = "button26";
	ButtonValue = document.getElementById("4620515").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send27(){
	//Get values from form
	Button = "button27";
	ButtonValue = document.getElementById("4167177").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send28(){
	//Get values from form
	Button = "button28";
	ButtonValue = document.getElementById("6023087").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send29(){
	//Get values from form
	Button = "button29";
	ButtonValue = document.getElementById("6048908").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send30(){
	//Get values from form
	Button = "button30";
	ButtonValue = document.getElementById("6048907").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function send31(){
	//Get values from form
	Button = "button31";
	ButtonValue = document.getElementById("6048909").value;
	dataString = 'Button=' + Button + '&ButtonValue=' + ButtonValue;
	
	//Check entered value
	if (ButtonValue >= 0 && ButtonValue <= 9) {
		
		AjaxSend();
  
	}else{
		alert("Please enter a number between 0-9")
	}
	return false;
}

function AjaxSend(){
	//Send information to server
	$.ajax({type: "POST",
	url: "FillStock.php",
	data: dataString,
	cache: false,
	success: function(html) {
	alert(html);
	}
	});
}


