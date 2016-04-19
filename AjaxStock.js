var PartCode = 0;
var Operation = 0;
var DataString = 0;

function Part_6004947(){
	Operation = "Show";
	PartCode = 6004947;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_343724(){
	Operation = "Show";
	PartCode = 343724;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6030817(){
	Operation = "Show";
	PartCode = 6030817;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4160152(){
	Operation = "Show";
	PartCode = 4160152;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6001240(){
	Operation = "Show";
	PartCode = 6001240;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_343721(){
	Operation = "Show";
	PartCode = 343721;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6020412(){
	Operation = "Show";
	PartCode = 6020412;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6020150(){
	Operation = "Show";
	PartCode = 6020150;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6020134(){
	Operation = "Show";
	PartCode = 6020134;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_301121(){
	Operation = "Show";
	PartCode = 301121;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6020110(){
	Operation = "Show";
	PartCode = 6020110;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4183780(){
	Operation = "Show";
	PartCode = 4183780;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4652863(){
	Operation = "Show";
	PartCode = 4652863;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4166923(){
	Operation = "Show";
	PartCode = 4166923;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4168579(){
	Operation = "Show";
	PartCode = 4168579;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6025187(){
	Operation = "Show";
	PartCode = 6025187;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4170795(){
	Operation = "Show";
	PartCode = 4170795;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4247780(){
	Operation = "Show";
	PartCode = 4247780;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4541728(){
	Operation = "Show";
	PartCode = 4541728;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_4167177(){
	Operation = "Show";
	PartCode = 4167177;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6023087(){
	Operation = "Show";
	PartCode = 6023087;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6048908(){
	Operation = "Show";
	PartCode = 6048908;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6048907(){
	Operation = "Show";
	PartCode = 6048907;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Part_6048909(){
	Operation = "Show";
	PartCode = 6048909;
	SelectImage();
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Add(){
	Operation = "Add";
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function Substract(){
	Operation = "Substract";
	DataString = ('Operation=' + Operation + '&PartCode=' + PartCode);
	AjaxFunction();
	return false;
}

function AjaxFunction(){
	//Send information to server
	$.ajax({type: "POST",
	url: "AjaxStock.php",
	data: DataString,
	cache: false,
	success: function(result) {
		if (result == "DBerror"){
			alert ("An error ocurred in the database, please reoad the page.")
		} else{
			//Update stock value
			document.getElementById("results_box").innerHTML=result;	
		}
	},
	error: function() {
		alert( "An error ocurred, please reload the page" );
	}
	});
	return false;	
}

function SelectImage(){
	switch(PartCode){
		case 6004947:
			document.getElementById("img").src = "Figures/Legos/6004947.png";
			break;
		case 343724:
			document.getElementById("img").src = "Figures/Legos/343724.png";
			break;
		case 6030817:
			document.getElementById("img").src = "Figures/Legos/6030817.png";
			break;
		case 4160152:
			document.getElementById("img").src = "Figures/Legos/4160152.png";
			break;
		case 6001240:
			document.getElementById("img").src = "Figures/Legos/6001240.png";
			break;
		case 343721:
			document.getElementById("img").src = "Figures/Legos/343721.png";
			break;
		case 6020412:
			document.getElementById("img").src = "Figures/Legos/6020412.png";
			break;
		case 6020150:
			document.getElementById("img").src = "Figures/Legos/6020150.png";
			break;
		case 6020134:
			document.getElementById("img").src = "Figures/Legos/6020134.png";
			break;
		case 301121:
			document.getElementById("img").src = "Figures/Legos/301121.png";
			break;
		case 6020110:
			document.getElementById("img").src = "Figures/Legos/6020110.png";
			break;
		case 4183780:
			document.getElementById("img").src = "Figures/Legos/4183780.png";
			break;
		case 4652863:
			document.getElementById("img").src = "Figures/Legos/4652863.png";
			break;
		case 4166923:
			document.getElementById("img").src = "Figures/Legos/4166923.png";
			break;
		case 4168579:
			document.getElementById("img").src = "Figures/Legos/4168579.png";
			break;
		case 6025187:
			document.getElementById("img").src = "Figures/Legos/6025187.png";
			break;
		case 4170795:
			document.getElementById("img").src = "Figures/Legos/4170795.png";
			break;
		case 4247780:
			document.getElementById("img").src = "Figures/Legos/4247780.png";
			break;
		case 4541728:
			document.getElementById("img").src = "Figures/Legos/4541728.png";
			break;
		case 4167177:
			document.getElementById("img").src = "Figures/Legos/4167177.png";
			break;
		case 6023087:
			document.getElementById("img").src = "Figures/Legos/6023087.png";
			break;
		case 6048908:
			document.getElementById("img").src = "Figures/Legos/6048908.png";
			break;
		case 6048907:
			document.getElementById("img").src = "Figures/Legos/6048907.png";
			break;
		case 6048909:
			document.getElementById("img").src = "Figures/Legos/6048909.png";
			break;
		default:
			document.getElementById("img").src = "";		
	}
	return false;
}