

	//Render creation with all its properties
	var Render=new THREE.WebGLRenderer( { antialias: true } );
	

		Render.setClearColor( 0xffffff );
		Render.setPixelRatio( window.devicePixelRatio );
		Render.sortObjects = false;
		Render.shadowMapEnabled = true;
		Render.shadowMapType = THREE.PCFSoftShadowMap;

		
		
//Activates on click events on the HTML tag "render" which displays the WebGL Render object
document.getElementById("render").ondblclick = function() {dblClickFunc()};

function dblClickFunc() {
//Flag to achnowledge doubleclicks on the render
ok = !ok;
		}
	
	//Creation of the Scene object
	var Escenario=new THREE.Scene();
	//Creation of a soft white light to be added to the Scene object
	var light = new THREE.AmbientLight( 0x292929 ); 
	//AmbientLight is added to the scene.
	Escenario.add( light )
	//Var to add the render to the HTML file once the Start function is working
	var container;
	//Vars to detect mouse position inside the render
	var projector, mouse = { x: 0, y: 0 };
	//Var to create and store the Controls object ( OrbitControls )
	var controls;
	//Specific width size of the render with a 32% scale
	var Ancho=window.innerWidth*.32;
	//Specific height size of the render with a 6% scale
	var Alto=window.innerHeight*.6;
	//Var to store the Circle stage of the scene
	var Territorio;
	//Angle of the camera at start 
	var Angulo = 45;	
	//Relation width/height
	var Aspecto=Ancho/Alto;
	//Initial value of closeness for the camera
	var cerca=0.1;
	//Initial value of farness for the camera
	var lejos=10000;
	//Boolean value for left movement of the LEFT button clicked
	var izq = false;
	//Boolean value for right movement of the RIGHT button clicked
	var der = false;
	//Boolean value for OK movement or doubleclick inside the render
	var ok = false;
	//Boolean value for remove movement of the Remove button clicked
	var rem = false;
	//Var to achnowledge the current the ability of the program to receive a new Lego piece.
	//If ok1 is TRUE, the program is ready to receive a new lego piece.
	//If ok1 is FALSE, the client is setting the position for a piece. Once the piece is set or removed, ok1 should be TRUE and ready to receive a new Lego piece.
	var ok1 = true;
	//Boolean value to achnowledge the existance of a Chassis object
	var bChasis = false;
	//Counter variable to achnowledge the number of pieces currently in the client's car design
	var count = 0;
	//Var to store a specific object inside the objects array
	var object;
	//Array to store every object in the client's car design 
	var objects = [];
	//checkUpMatrix is a double dimention array [18][7] representing a grid of available slots to place pieces.
	//Initialy intended for 18 horizontal possible slots and 7 vertical slots. Due to hardware constrains this were reduced by software to 8 horizontal slots and 7 vertical slots.
	//If the value on the grid at checkUpMatrix[x][z] possition is a 0, the slot is available, if it is a 1 it is not available.
	var checkUpMatrix = [18];
		for(var m = 0; m < 18; m++){
			checkUpMatrix[m] = [7];
		}
	//Boolean value to achnowledge if the full length of the lego piece is available on the checkUpMatrix
	var bPiso = true;
	//Array value to know to store the tires and rims of the chassis object
	var array_llantas = [8];
	//Reference to the vertical slot position to drop the piece once it is set
	var actual = 0;
	//Reference to the horizontal slot position to check availablility by PosYOk(value); function.
	var actual2 = 0;
	//Var to store the last partcode entered
	var PartCode;
	//Var to store the last X or horizontal position entrered
	var PositionX;
	//Var to store the last Z or vertical position entered
	var PositionZ;
	//Var to store the last BlockType property entered.
	var BlockType;
	//Vars to store AmbientLight and DirectionalLight to be used once the render is working.
	var luz, luz2;
	//Constant value of pixels to be multiplied by the number of row slots for a piece to be set on the correct position (VISUALLY)
	var bajar = 60;
	//Creation of the camera instance, the arguments are (specific angle, Relation width/height, closeness, farness)
	var Camara=new THREE.PerspectiveCamera(Angulo,Aspecto,cerca,lejos);
	//Var to store the JSONLoader object and be able to load JSON files (Every piece is passed as a JSON)
	var loader = new THREE.JSONLoader();
	//Array to store every object in the client's car design with all its characteristics and specific positions
	var arrayBlock = [];
	//Counter to work as an index finder for the arrayBlock
	var arrayBlockCounter = 0;
	
	//This instructions are needed for the PHP side of the application
	var div = document.getElementById("dom-target");
    var myData = div.textContent;
	var PHP_last_id_js = myData;

	//Constructor of the Block class. Every lego piece is a Block object.
	function Block(PartCode, Type, Color, PosX, PosZ, objHeight, objLength){
		
		this.PartCode = PartCode;	//Specific part code of the piece instanciated
		this.Type = Type;			//There are 3 types: Chassis, Normal, Special
		this.Color = Color;			//Color
		this.PosX = PosX;			//Horizontal position
		this.PosZ = PosZ;			//Vertical position
		this.objHeight = objHeight;	//Heigth of the Lego block (1, 2 or 3)
		this.objLength = objLength;	//Length of the Lego block 
		
	}
	//Constructor of the Block class. Every lego piece is a Block object.
	function Block(PartCode, Type, Color, BlockType){
		
		this.PartCode = PartCode;	//Specific part code of the piece instanciated
		this.Type = Type;			//There are 3 types: Chassis, Normal, Special
		this.Color = Color;			//Color
		this.BlockType = BlockType;	//The BlockType is given depending the dimentions of the Lego block. WLH(width, length, height)
		this.PHP_last_id_block = PHP_last_id_js;	//PHP OrderID to be sent to the server
		
	}

	function inicio(){
			//Sets the size of the render. Arguments are: (width , height)
			Render.setSize(Ancho,Alto);
			//Adding the render element to the HTML page
			container = document.getElementById('render').appendChild(Render.domElement);
			//Change in camera position when starting the render
			Camara.position.z=220;
			Camara.position.y=100;
			//Adding the camera to the scene
			Escenario.add(Camara);
			//New AmbientLight and DirectionalLight objects to be added to the scene
			luz = new THREE.AmbientLight( 0x505050);
			luz2 = new THREE.DirectionalLight(0x505050);
			luz2.castShadow = true;
			luz2.shadowCameraVisible = true;
			luz2.shadowDarkness = 0.5;
			Adding the lights to the scene
			Escenario.add(luz);
			Escenario.add(luz2);
			//Creating the stage of the scene 
			crear_plano();
			//Creating the controls for the camera in the scene
			controls=new THREE.OrbitControls(Camara,Render.domElement);
			//Creating a projector to match the vector of position of the mouse in the scene
			projector = new THREE.Projector();
			//Adding an EventListener to prject the vector of position of the mouse
			document.addEventListener( 'mousedown', onDocumentMouseDown, false);

	}
	
	function onDocumentMouseDown( event ){
		//Prevents the default action of the EventListener
		event.preventDefault();
		//Writes "click" on the console when a click is done to messure the vector of the mouse
		console.log("Click.");
		//Calculates the relative position of the mouse click in the scene
		mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
		mouse.y = (- ( event.clientY / window.innerHeight ) * 2 + 1);
		
		// create a Ray with origin at the mouse position
		//   and direction into the scene (camera direction)
		var vector = new THREE.Vector3( mouse.x, mouse.y, 1 );
		projector.unprojectVector( vector, Camara );
		var ray = new THREE.Raycaster( Camara.position, vector.sub( Camara.position ).normalize() );
		// create an array containing all objects in the scene with which the ray intersects
		var intersects = ray.intersectObjects( objects );
		
		// if there is one (or more) intersections
		if ( intersects.length > 0 )
		{
			console.log("Hit @ " + toString( intersects[0].point ) );
			// change the color of the closest face.
			intersects[ 0 ].face.color.setRGB( 0.8 * Math.random() + 0.2, 0, 0 ); 
			intersects[ 0 ].object.geometry.colorsNeedUpdate = true;
		}
	}
	//Function to write if there was an intersect with the mouse click
	function toString(v) { return "[ " + v.x + ", " + v.y + ", " + v.z + " ]"; }
	
	//Function to create the stage of the scene
	function crear_plano(){
			//Creates the stage geometry
			Geometria_plano=new THREE.CylinderGeometry(100,100,10,100);
			//Sets the texture of the stage
			Textura_plano=new THREE.ImageUtils.loadTexture("Figures/cesped.jpg");
			Textura_plano.wrapS=Textura_plano.wrapT=THREE.RepeatWrapping;
			Textura_plano.repeat.set(10,10);
			//Adding the material and texture to the stage
			Material_plano=new THREE.MeshBasicMaterial({map:Textura_plano,side:THREE.DoubleSide});
			//Meshing the stage with the geometry and  material.
			Territorio=new THREE.Mesh(Geometria_plano,Material_plano);
			Territorio.rotation.y=-0.5
			Territorio.castShadow = true;
			Territorio.receiveShadow = true;
			//Moves the stage in our Z position (Vertical position) 3 pixels
			Territorio.position.y=-3;
			//Adding the stage to the scene
			Escenario.add(Territorio);
			
	}

	//This method acts as an EventListener for the buttons "OK", "Left", "Right", "Remove".
	function animacion(){
			requestAnimationFrame(animacion);
			
			//If the button "LEFT" is pressed
			if( izq ){
				//Verifies if ok1(the piece is available to be set) 
				// AND the relative position of the lego block is inside the boulds of the 8 delimited positions. (This value is set in pixels depending on every JSON piece)
				// AND the BlockType is correct for this implementation
				if((!ok1 && object.position.x > -63 && BlockType == 242)||
				   (!ok1 && object.position.x > -63 && BlockType == 243)||
				   (!ok1 && object.position.x > -63 && BlockType == 223)||
				   (!ok1 && object.position.x > -64 && BlockType == 261)||
				   (!ok1 && object.position.x > -63 && BlockType == 281)||
				   (!ok1 && object.position.x > -17 && BlockType == 241)||
				   (!ok1 && object.position.x > -63 && BlockType == 222)||
				   (!ok1 && object.position.x > -63 && BlockType == 221)||
				   (!ok1 && object.position.x > -47 && BlockType == 213)||
				   (!ok1 && object.position.x > -63 && BlockType == 232)||
				   (!ok1 && object.position.x > -63 && BlockType == 233)){
		
					//Then moves the Block object to the left 16 pixels (amount of pixels for 1 lego row horizontally)
					object.position.x-=16;
					
				} 
				
				//Sets to FALSE the flag for "LEFT" button pressed		
				izq = false;
			}
			
			//If the button "RIGHT" is pressed
			if( der ){
				//Verifies if ok1(the piece is available to be set) 
				// AND the relative position of the lego block is inside the boulds of the 7 delimited positions. (This value is set in pixels depending on every JSON piece)
				// AND the BlockType is correct for this implementation
				if((!ok1 && object.position.x < 31  && BlockType == 222)||
				   (!ok1 && object.position.x < 31  && BlockType == 223)||
				   (!ok1 && object.position.x < -34 && BlockType == 261)||
				   (!ok1 && object.position.x < -65 && BlockType == 281)||
				   (!ok1 && object.position.x < -33 && BlockType == 221)||
				   (!ok1 && object.position.x < 45  && BlockType == 241)||
				   (!ok1 && object.position.x < -1  && BlockType == 242)||
				   (!ok1 && object.position.x < -1  && BlockType == 243)||
				   (!ok1 && object.position.x < 31  && BlockType == 213)||
				   (!ok1 && object.position.x < 15  && BlockType == 232)||
				   (!ok1 && object.position.x < 15  && BlockType == 233)){
					
					//Then moves the Block object to the left 16 pixels (amount of pixels for 1 lego row horizontally)
					object.position.x+=16;
					
				} 
				
				//Sets to FALSE the flag for "LEFT" button pressed
				der = false;
			}
					
			//If the button "OK" is pressed
			if ( ok ){
				//Verifies if ok1(the piece is available to be set)
				if ( !ok1 ){
					//Verifies the BlockType is correct for this implementation
					if(BlockType == 222 || BlockType == 242 || 
					   BlockType == 261 || BlockType == 281 ||
					   BlockType == 213 || BlockType == 232 ||
					   BlockType == 233 || BlockType == 223 ||
					   BlockType == 243){
						   
					//According to the relative horizontal position "object.position.x" is the position to be set inside the checkUpMatrix
					//So every posible case for these BlockTypes sends the actual2 value to the PosYOk function.
					switch(object.position.x){
						case 0:
						case -0.5:
						//Correspondig value to Position 8 inside the checkUpMatrix
							actual2 = 8;
							PosYOk(actual2); 
							break;
						
						case 16:
						//Correspondig value to Position 9 inside the checkUpMatrix
							actual2 = 9;
							PosYOk(actual2); 
							break;
							
						case 32:
						//Correspondig value to Position 10 inside the checkUpMatrix
							actual2 = 10;
							PosYOk(actual2); 
							break;
						
						case -16:
						//Correspondig value to Position 7 inside the checkUpMatrix
							actual2 = 7;
							PosYOk(actual2); 
							break;
							
						case -32:
						case -33:
						//Correspondig value to Position 6 inside the checkUpMatrix
							actual2 = 6;
							PosYOk(actual2); 
							break;
							
						case -48:
						case -49:
						//Correspondig value to Position 5 inside the checkUpMatrix
							actual2 = 5;
							PosYOk(actual2); 
							break;
						
						case -64:
						case -65:
						//Correspondig value to Position 4 inside the checkUpMatrix
							actual2 = 4;
							PosYOk(actual2); 
							break;
							
						case -80:
						//Correspondig value to Position 3 inside the checkUpMatrix
							actual2 = 3;
							PosYOk(actual2); 
							break;
							
						case -96:
						//Correspondig value to Position 2 inside the checkUpMatrix
							actual2 = 2;
							PosYOk(actual2); 
							break;
							
						case -112:
						//Correspondig value to Position 1 inside the checkUpMatrix
							actual2 = 1;
							PosYOk(actual2); 
							break;
							
						case -128:
						//Correspondig value to Position 0 inside the checkUpMatrix
							actual2 = 0;
							PosYOk(actual2); 
							break;
							
					}	

					//As the piece was set, ok1 becomes TRUE again.
					ok1 = true;
				} 
				//If the BlockType is 221 (width = 2, length = 2, height = 1)
				else if (BlockType == 221){
					//Specific cases for this BlockType
					switch(object.position.x){
						case 0:
						//Correspondig value to Position 8 inside the checkUpMatrix
							actual2 = 8;
							PosYOk(actual2); 
							break;
						
						case -48:
						//Correspondig value to Position 9 inside the checkUpMatrix
							actual2 = 9;
							PosYOk(actual2); 
							break;
							
						case -32:
						//Correspondig value to Position 10 inside the checkUpMatrix
							actual2 = 10;
							PosYOk(actual2); 
							break;
						
						case -80:
						//Correspondig value to Position 7 inside the checkUpMatrix
							actual2 = 7;
							PosYOk(actual2); 
							break;
							
						case -96:
						//Correspondig value to Position 6 inside the checkUpMatrix
							actual2 = 6;
							PosYOk(actual2); 
							break;
							
						case -112:
						//Correspondig value to Position 5 inside the checkUpMatrix
							actual2 = 5;
							PosYOk(actual2); 
							break;
						
						case -128:
						//Correspondig value to Position 4 inside the checkUpMatrix
							actual2 = 4;
							PosYOk(actual2); 
							break;
							
						
					}	

					//As the piece was set, ok1 becomes TRUE again
					ok1 = true;
					
				}
				//If the BlockType is 241 (width = 2, length = 4, height = 1)
				else if (BlockType == 241){
					//Specific cases for this BlockType
					switch(object.position.x){
						case 46:
						//Correspondig value to Position 8 inside the checkUpMatrix
							actual2 = 8;
							PosYOk(actual2); 
							break;
						
						case 62:
						//Correspondig value to Position 9 inside the checkUpMatrix
							actual2 = 9;
							PosYOk(actual2); 
							break;
							
						case 78:
						//Correspondig value to Position 10 inside the checkUpMatrix
							actual2 = 10;
							PosYOk(actual2); 
							break;
						
						case 30:
						//Correspondig value to Position 7 inside the checkUpMatrix
							actual2 = 7;
							PosYOk(actual2); 
							break;
							
						case 14:
						//Correspondig value to Position 6 inside the checkUpMatrix
							actual2 = 6;
							PosYOk(actual2); 
							break;
							
						case -2:
						//Correspondig value to Position 5 inside the checkUpMatrix
							actual2 = 5;
							PosYOk(actual2); 
							break;
						
						case -18:
						//Correspondig value to Position 4 inside the checkUpMatrix
							actual2 = 4;
							PosYOk(actual2); 
							break;
							
						case -34:
						//Correspondig value to Position 3 inside the checkUpMatrix
							actual2 = 3;
							PosYOk(actual2); 
							break;
							
						case -50:
						//Correspondig value to Position 2 inside the checkUpMatrix
							actual2 = 2;
							PosYOk(actual2); 
							break;
					}	

					//As the piece was set, ok1 becomes TRUE again
					ok1 = true;
					
				}
				
				}
				
			//Sets to FALSE the flag for "OK" button pressed
			ok = false;
			}
			
			//If the button "REMOVE" is pressed
			if ( rem ){
				//Call to the REMOVE function in order to delete the last Lego block
				rem_3();
				//Sets to FALSE the flag for "REMOVE" button pressed
				rem = false;
				
			}
			
			//Return to "render_modelo" loop
			render_modelo();
			
			
	}
	
	function render_modelo(){
		//Maintes the update of the camera controls
		controls.update();
		//reDraw the render with the scene and the camera updated
		Render.render(Escenario,Camara);
	}
	
	//Function to add a Chassis Lego block
	//This function receives the color in HEX and the specific partcode of the Lego block
	function modelo_chasis(modelo_color, partcode){
		
		//Verifies that there is not a piece to be set
		if( ok1 ){
		//If no piece is to be set, we can set out chassis, the the boolean value for chassis is true
		bChasis = true;
		//Saves the passed partcode to the global variable Partcode
		PartCode = partcode;
		//Writes to the checkUpMatrix the existance of the chassis in its corresponding position
		for( m = 0; m < 6; m++){
			//Starring at position 5 + m
			var n = 5+m;
			//Write a 1 until you have ocupied 6 slots for the chassis
			checkUpMatrix[n][0] = 1;	

		}	
		
		//The JSON loader object loads the chassis JSON file
		loader.load('JavaScript/chasis.json',
		function (geometry){
			//The colour is passed to the material mesh
			Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
			//Creation of the chassis object with the loader geometry and the material mesh
			object = new THREE.Mesh(geometry, Material_modelo);
				
				//Starring position for the object. In this case, these positions are absolute
				object.position.x =-48;
				object.position.y =10;
				object.position.z =28.5;
			
				object.castShadow = false;
				object.receiveShadow = false;
				//Adding the object to the scene
				Escenario.add(object);
				//Adding the object to the array of the client's car design
				objects.push(object);
				//Increase the number of objects inside the client's car design
				count++;
			
			//Correction of the scale for the JSON file
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
			//Creating the Block object inside the arrayBlock of the client's car design with the constructor
			arrayBlock[arrayBlockCounter] = new Block(PartCode, "Chassis", modelo_color, "Normal");
			//Sends the request to the server to write on the data base the specifics of the Lego block
			ajaxSendChassis();
			//Completes the properties of the Lego block 
			arrayBlock[arrayBlockCounter].PosX = 1;
			arrayBlock[arrayBlockCounter].PosZ = 0;
			arrayBlock[arrayBlockCounter].length = 6;
			arrayBlock[arrayBlockCounter].height = 1;
			//Sets ready the counter for the next block to be added
			arrayBlockCounter++;
	
	}
	//Calls to the methods to build the tires
	modelo_llanta();
	//Calls to the methods to build the rims
	modelo_rin();
	}
	
	//Method to load the first tire in its concrete abosolute position 
	function modelo_llanta(){
		
		loader.load('JavaScript/modelo_llanta.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0X000000});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =50;
			object.position.y =-4;
			object.position.z =-16;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
		
			;
		});
		
		modelo_llanta2();
	}
	
	//Method to load the second tire in its concrete abosolute position 
	function modelo_llanta2(){
		
		loader.load('JavaScript/modelo_llanta.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0X000000});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =98;
			object.position.y =-4;
			object.position.z =-16;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
		modelo_llanta3();
	}
	
	//Method to load the third tire in its concrete abosolute position 
	function modelo_llanta3(){
		
		loader.load('JavaScript/modelo_llanta.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0X000000});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =50;
			object.position.y =-4;
			object.position.z =30;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
		modelo_llanta4();
	}	
	
	//Method to load the fourth tire in its concrete abosolute position 
	function modelo_llanta4(){
		
		loader.load('JavaScript/modelo_llanta.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0X000000});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =98;
			object.position.y =-4;
			object.position.z =30;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
	}	
	
	//Method to load the first rim in its concrete abosolute position 
	function modelo_rin(){
		
		loader.load('JavaScript/modelo_rin.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0XC9C0BB});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =50;
			object.position.y =-4;
			object.position.z =-16;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
		modelo_rin2();
	}
	
	//Method to load the second rim in its concrete abosolute position 
	function modelo_rin2(){
		
		loader.load('JavaScript/modelo_rin.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0XC9C0BB});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =98;
			object.position.y =-4;
			object.position.z =-16;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);

			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			array_llantas.push(object);			
		
			;
		});
		
		modelo_rin3();
	}
	
	//Method to load the third rim in its concrete abosolute position 
	function modelo_rin3(){
		
		loader.load('JavaScript/modelo_rin.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0XC9C0BB});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =50;
			object.position.y =-4;
			object.position.z =30;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
		modelo_rin4();
	}	
	
	//Method to load the fourth rim in its concrete abosolute position 
	function modelo_rin4(){
		
		loader.load('JavaScript/modelo_rin.json',
		function (geometry){
			
			Material_modelo=new THREE.MeshLambertMaterial({color:0XC9C0BB});
			object = new THREE.Mesh(geometry, Material_modelo);
				
			object.position.x =98;
			object.position.y =-4;
			object.position.z =30;
			object.rotation.y +=45 * Math.PI / 18;
		
			object.castShadow = false;
			object.receiveShadow = false;
			Escenario.add(object);
			array_llantas.push(object);
			
			object.scale.x=1;
			object.scale.y=1;
			object.scale.z=1;
			
		
			;
		});
		
	}	
	
	//Method to load a 221 Lego block object
	function modelo_221(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 221;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_221.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					
					//Starring position for the object.
					object.position.x =0;
					object.position.y =93.5;
					object.position.z =-14.5;
				
					object.castShadow = false;
					object.receiveShadow = false;
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 2;
				object.height = 1;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, BlockType, modelo_color);
		
		
	}
	
	//Method to load a 222 Lego block object
	function modelo_222(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 222;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_222.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-16;
					object.position.y =94.1;
					object.position.z =-14.5;
					object.rotation.x +=90 * Math.PI / 18;
				
					object.castShadow = false;
					object.receiveShadow = false;
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 2;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color,"Normal");
	
	}	

	//Method to load a 222_w Lego block object
	function modelo_222_w(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 222;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_ventana_222.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-16;
					object.position.y =94.1;
					object.position.z =-14.5;
					object.rotation.x +=90 * Math.PI / 18;
				
					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 2;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color,"Normal");

	}
	
	//Method to load a 222_w_recto Lego block object
	function modelo_222_w_recto(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 222;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_ventana_recto_222.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-16;
					object.position.y =94.1;
					object.position.z =-14.5;
					object.rotation.x +=90 * Math.PI / 18;
				
					object.castShadow = false;
					object.receiveShadow = false;
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 2;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
	
	//Creating the Block object inside the arrayBlock of the client's car design with the constructor
	arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color,"Normal");

}
	
	//Method to load a 241 Lego block object
	function modelo_241(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 241;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_241.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =14;
					object.position.y =36.5;
					object.position.z =-17.5;
				
					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 4;
				object.height = 1;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 242 Lego block object
	function modelo_242(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 242;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_242.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-32;
					object.position.y =29;
					object.position.z =-90;
				
					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1;
				object.scale.y=1;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 4;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}	
	
	//Method to load a 261 Lego block object
	function modelo_261(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 261;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_261.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-49;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-90
					object.rotation.x +=90 * Math.PI / 18;
				
					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 6;
				object.height = 1;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}

	//Method to load a 281 Lego block object
	function modelo_281(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 281;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_281.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-64;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-90
					object.rotation.x +=90 * Math.PI / 18;
				
					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 8;
				object.height = 1;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 232 Lego block object
	function modelo_232(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 232;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_techo_232.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object
					object.position.x =0;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 3;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 232_w Lego block object
	function modelo_232_w(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 232;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_232_ww.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =0;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego bloc
				object.length = 3;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 242_techo Lego block object
	function modelo_242_techo(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 242;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_techo_242.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-32;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 4;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 242_techo_w Lego block object
	function modelo_242_techo_w(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 242;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_techo_242_w.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-32;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 4;
				object.height = 2;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 243_tanque Lego block object
	function modelo_243_tanque(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 243;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_tanque.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =-32;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 4;
				object.height = 3;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
	
	//Method to load a 233 Lego block object
	function modelo_233(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 233;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_techo_233.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =0;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 3;
				object.height = 3;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}
  
	//Method to load a 213 Lego block object
	function modelo_213(modelo_color, partcode){
		//Verifies if there is no piece to be set and if there is a chassis object
		if( ok1 && bChasis ){
			//As this is a new piece to be set, ok1 becomes false
			ok1 = false;
			//Saves the passed partcode to the global variable Partcode
			PartCode = partcode;
			//Saves the BlockType of this method to the globl BlockType variable
			BlockType = 213;
			//The JSONLoader object loads the Lego block JSON file
			loader.load('JavaScript/modelo_213.json',
			function (geometry){
				//The colour is passed to the material mesh
				Material_modelo=new THREE.MeshLambertMaterial({color:modelo_color});
				//Creation of the Lego block object with the loader geometry and the material mesh
				object = new THREE.Mesh(geometry, Material_modelo);
					//Starring position for the object.
					object.position.x =0;
					object.position.y =93.3;	//29
					object.position.z =-14.5;	//-14.5
					object.rotation.x +=90 * Math.PI / 18;

					object.castShadow = false;
					object.receiveShadow = false;
					
					//Adding the object to the scene
					Escenario.add(object);
					//Adding the object to the array of the client's car design
					objects.push(object);
					//Increase the number of objects inside the client's car design
					count++;
				
				//Correction of the scale for the JSON file
				object.scale.x=1.01;
				object.scale.y=1.01;
				object.scale.z=1;
				
				//Completes the properties of the Lego block
				object.length = 1;
				object.height = 3;
				arrayBlock[arrayBlockCounter].objLength = object.length;
				arrayBlock[arrayBlockCounter].objHeight = object.height;
				;
			});
		
	}
		
		//Creating the Block object inside the arrayBlock of the client's car design with the constructor
		arrayBlock[arrayBlockCounter] = new Block(PartCode, "LegoBlock", modelo_color, "Normal");

	}	
	
	//Function to remove Lego block from the scene
	function rem_3(){
	
	//Ensures there is a Lego block before trying to delete an empty array slot	
	if (count != 0){
		//If there is at least one Lego block, drops the counter "count" by one to ensure that the last Lego block is going to be deleted
		count--;
		//Stores is a temporary variable the object to be deleted from the objects array
		var first = objects[count];	
		//Removes the object to be deleted from the scene
		Escenario.remove(first);
		
		//Verifies if the deletion must be done while a piece was about to be set. In that case, we just have to remove th piece from the scene
		if( !ok1 )
			ok1 = true;
		
		else 
		{
			//Verifies there is at least one Lego block registered in the arrayBlock
			if (arrayBlockCounter != 0)
				//If there is at least one Lego block, drops the counter "arrayBlockCounter" by one to ensure that the last Lego block is going to be deleted
				arrayBlockCounter--;
				
			//Stores is a temporary variable the object to be deleted from the arrayBlock array
			var first = arrayBlock[arrayBlockCounter];	
			
			//Verifies if the object to be deleted is of Type "Chassis"
			if (first.Type == "Chassis"){
				//If the object to be deleted is a chassis, then the boolean value bChasis must be set to FALSE because there is no longer a chassis on the client's car design
				bChasis = false;
				//Deletes the last entry on the objects array
				objects.pop();
				//For loop to delete the tires and rims of the chassis because each one is a different JSON object
				for (var k = 0; k<= array_llantas.length; k++){
					//Removes the object stored at the index [k] of the arraya array_llantas
					Escenario.remove(array_llantas[k]);		
				}
				
			}
			
			//For loop to write to the checkUpMatrix array. This for moves the rows in the array
			//Starring at 0 until the height of the Lego block
			for(var h = 0; h< first.objHeight; h++){
				
				//For to write to the checkUpMatrix array. This for moves the colums in the array
				//Starring at 0 until the length of the Lego block
				for(var j = 0; j< first.objLength; j++){
					
					//Writes a 0 to free the slot inside the array at the specific indexes
					// index [first.PosX + j] means: The object's X position plus the number of colums already done by the for until the last colum is done
					// index [first.PosZ + h] means: The object's Z position plus the number of rows already done by the for until the last row is done
					checkUpMatrix[ first.PosX + j ][ first.PosZ + h ] = 0;

				}		
			}	
		}
		
		//Call to the function delete of the server
		ajaxDelete();
		//Deletes the last object stored in the array
		objects.pop();
		//Deletes the last object stored in the array
		delete(arrayBlock[arrayBlockCounter]);
	
	} }

	//Function to set the Lego blocks at a client's request.
	//This funciton must check the slots to be filled in the checkUpMatrix array and write the slots to be filled by the Lego block
	//The agument "value" is the client's prefered horizontal position
	function PosYOk(value){
		//First comes the verification part
		
		//For loop to verify the lowest possible height. This For loops moves the rows in the array
		for(var i = 0; i <= 7; i++){
			//The boolean value starts as a TRUE value.
			bPiso = true;
			
			//For loop to verify if the complete length of the Lego block is available at this specific height
			for(var j = 0; j < object.length; j++){
				//If the for loops finds an unavailable slot, the for loop uses a break.
				if(checkUpMatrix[value+j][i]==1){
					//The value of bPiso is set to False to show the unavailability of the current row inside the checkUpMatrix
					bPiso = false;
					break;
					
				}
				
			}
			
			//bPiso is verified, if it is FALSE then nothing happens and the program returns to the height For loop
			//If bPiso is TRUE, that means the Lego piece is available to be set at the current height
			if(bPiso == true){
				//A rectification to the height from the For loop must be done, because the Chassis Lego block uses the first row of the matrix.
				
				//The real number of rows to drop down in the scene is saved for further use.
				actual = i-1;
				//As the piece is available to be set on this position, the passed horizontal position, value, is stored in the global variable PositionX
				PositionX = value;

				//For to write on the checkUpMatrix. This For loop moves the rows in the array
				//Starring in 0 until the Lego block to be written in the matrix's height
				for(var h = 0; h< object.height; h++){
					
					//For to write on the checkUpMatrix. This For loop moves the colums in the array
					//Starring in 0 until the Lego block to be written in te matrix's height
					for(var j = 0; j< object.length; j++){
					//Writes a 1 to set the slot as ocupied inside the array at the specific indexes
					// index [value + j] means: The object's X position plus the number of colums already done by the for until the last colum is done
					// index [i + h] means: The object's Z position plus the number of rows already done by the for until the last row is done
						checkUpMatrix[ value + j ][ i + h ] = 1;

					}
					
					//These statements will be rewritten until the maximum height of the object is reached by the rows for.
					
					//Stores the maximum Z position of the Lego block
					PositionZ = i+h;
					//If the Lego object has a height of 2, the position must be decreassed by 1 to represent the "floor" position of the piece
					if(object.height== 2){
			
						PositionZ --;
					}
					//If the Lego object has a height of 3, the position must be decreassed by 2 to represent the "floor" position of the piece
					if(object.height== 3){
			
						PositionZ --;
						PositionZ --;
					}
					
				}break; //This break statement, breaks the rows verification For because the Lego block has already been placed
				
			}
			
			
		}

		//Completes the properties of the Lego block
		arrayBlock[arrayBlockCounter].PosX = PositionX;
		arrayBlock[arrayBlockCounter].PosZ = PositionZ;
		
		//If the Lego object has a height of 2, the number of rows to drop must be increased by 1 to represent the "top" position of the piece
		if(object.height== 2){
			
			actual++;
		}
		//If the Lego object has a height of 3, the number of rows to drop must be increased by 2 to represent the "top" position of the piece
		if(object.height== 3){
			
			actual++;
			actual++;
		}

		//If the piece to be set is at the height Position 1. That means attached to the Chassis block
		if(arrayBlock[arrayBlockCounter].PosZ <= 1){
			//This operation drops the piece the exact amount of pixels to be assembled with the rest of the car.
			//The amount of pixels to drop is: 60 pixels - (9 * number of rows in the array to drop)
			object.position.y-= bajar-(9*actual);
			
		}
		//If the piece to be set is not attached to the Chassis block
		else {
			//This operation drops the piece the exact amount of pixels to be assembled with the rest of the car.
			//The amount of pixels to drop is: 60 pixels - (9 * number of rows in the array to drop) - 1
			object.position.y-= bajar-(9*actual)-1;
			
		}
		
		//Small corrections on these two BlockType blocks
		if(BlockType == 261 || BlockType == 281){
			
			object.position.x += 1;
			object.position.y += 0.5;
			
		}
		
		//Resets the values of height to be set for the next piece
		actual = 0;
		actual2 = 0;
		
		//Calls the ReserveBlock and SendBlock to the server
		ajaxReserveBlock();
		ajaxSendBlock();
		
		//Sets ready the counter for the next block to be added
		arrayBlockCounter++;
						
	}	
	
	//Function call to delete all pieces of the client's car design
	function Delall(){
	var Reload = myData;
	// Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "DeleteAll.php";
    var vars = "Reload="+Reload;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			
	    }
    }
    // Send the data to PHP 
    hr.send(vars); // Actually execute the request
	
}
		
	//Function to write the chassis Lego block on the data base 
	function ajaxSendChassis(){
		
		//In a sole object, the requested data is gathered to be sent to the data base
		var blockToSend = {
		  "LegoBlock": {
			"OrderID": arrayBlock[arrayBlockCounter].PHP_last_id_block,
			"PartCode":  arrayBlock[arrayBlockCounter].PartCode,
			"PositionX": 1,
			"PositionZ": 1,
			"BlockType": arrayBlock[arrayBlockCounter].BlockType
		  }
		}	 

		//JXON unbuilds the object to be sent
		var unbuilded = JXON.unbuild(blockToSend);
		//Creation of a serialization object
		var oSerializer = new XMLSerializer();
		//The serialization object converts to string the object to be sent
		var sXML = oSerializer.serializeToString(unbuilded);

		// Create our XMLHttpRequest object
		var hr = new XMLHttpRequest();
		// Create some variables we need to send to our PHP file
		var url = "WriteData.php";
		var vars = "array="+sXML;
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
		// Send the data to PHP now
		hr.send(vars); // Actually execute the request

  }
	
	//function to write the chassis Lego block on the data base 
	function ajaxSendBlock(){
		
		//As the requirements changed, it was requested to start at a different X position. The reques was to lower the X position 3 slots
		var new_posX= arrayBlock[arrayBlockCounter].PosX-3;
		
		//In a sole object, the requested data is gathered to be sent to the data base
		var blockToSend = {
		  "LegoBlock": {
			"OrderID": arrayBlock[arrayBlockCounter].PHP_last_id_block,
			"PartCode":  arrayBlock[arrayBlockCounter].PartCode,
			"PositionX": new_posX,
			"PositionZ": arrayBlock[arrayBlockCounter].PosZ,
			"BlockType": arrayBlock[arrayBlockCounter].BlockType
			
		  }
		}	 

		
		//JXON unbuilds the object to be sent
		var unbuilded = JXON.unbuild(blockToSend);
		//Creation of a serialization object
		var oSerializer = new XMLSerializer();
		//The serialization object converts to string the object to be sent
		var sXML = oSerializer.serializeToString(unbuilded);
			
		// Create our XMLHttpRequest object
		var hr = new XMLHttpRequest();
		// Create some variables we need to send to our PHP file
		var url = "WriteData.php";
		var vars = "array="+sXML;
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
		// Send the data to PHP now
		hr.send(vars); // Actually execute the request

  }
  
	//Function to recerve blocks from the data base
	function ajaxReserveBlock(){
		
		//Locally stores the object to be sent to the data base
		var blockToReserv = arrayBlock[arrayBlockCounter].PartCode;	 

		// Create our XMLHttpRequest object
		var hr = new XMLHttpRequest();
		// Create some variables we need to send to our PHP file
		var url = "ResStock.php";
		var vars = "RestBlock="+blockToReserv ;
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				
			}
		}
		// Send the data to PHP now
		hr.send(vars); // Actually execute the request

  }

	//Function to delete the last Lego block written in the data base
	function ajaxDelete(){
		//Locally stores the object to be deleted from the data base
		var Delete = arrayBlock[arrayBlockCounter].PHP_last_id_block;
		// Create our XMLHttpRequest object
		var hr = new XMLHttpRequest();
		// Create some variables we need to send to our PHP file
		var url = "DeleteData.php";
		var vars = "Delete="+Delete;
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				
			}
		}
		// Send the data to PHP now
		hr.send(vars); // Actually execute the request
		
}

	//DRAG AND DROP API
	$( "#render" ).droppable({ 
            tolerance: 'touch',
            //Every drop action of a Lego block is linked to its method call passing the coulor of the Lego block and the partnumber as arguments
            drop: function( event, ui ) {
            	if (ui.draggable.is('#show_chasisR')){
            		modelo_chasis(0XBE0606,6048907);	
            	}
            	if (ui.draggable.is('#show_chasisA')){
            		modelo_chasis(0X2562B3,6048908);
				}
            	if (ui.draggable.is('#show_chasisV')){
            		modelo_chasis(0X59B042,6048909);
				}
				if (ui.draggable.is('#show_body_2x2x2_R')){
					modelo_222(0XBE0606, 343721);
				}
				if (ui.draggable.is('#show_body_2x2x2_A')){
					modelo_222(0XF6C503, 343724);
				}
				if (ui.draggable.is('#show_body_2x4x1_A')){
					modelo_241(0XF6C503, 4160152);
				}
				if (ui.draggable.is('#show_body_2x4x2_V')){
					modelo_242(0X97BE3F, 4166923);
				}
				if (ui.draggable.is('#show_body_2x4x2_A')){
					modelo_242(0X7599CE, 4167177);
				}
				if (ui.draggable.is('#show_body_2x2x2_V')){
					modelo_222(0X59B042, 4168579);
				}
				if (ui.draggable.is('#show_body_2x4x1_V')){
					modelo_241(0X59B042, 4170795);
				}
				if (ui.draggable.is('#show_body_2x2x2_L')){
					modelo_222(0X97BE3F, 4183780);
				}
				if (ui.draggable.is('#show_body_2x8x1_V')){
					modelo_281(0X59B042, 4247780);
				}
				if (ui.draggable.is('#show_body_2x6_1_A')){
					modelo_261(0X7599CE, 6023087);
				}
				if (ui.draggable.is('#show_body_2x4x2_R')){
					modelo_242(0XBE0606, 301121);
				}
				if (ui.draggable.is('#show_techo_2x3x2_A')){
					modelo_232(0X7599CE, 4541728);
				}
				if (ui.draggable.is('#show_techo_2x3x2_B')){
					modelo_232(0XFFFFFF, 6004947);
				}
				if (ui.draggable.is('#show_techo_2x4x2_V')){
					modelo_242_techo(0XA3D651, 4652863);
				}
				if (ui.draggable.is('#show_techo_2x3x3_R')){
					modelo_233(0XBE0606, 6020150);
				}
				if (ui.draggable.is('#show_techo_2x1x3_A')){
					modelo_213(0XF6C503, 6030817);
				}
				if (ui.draggable.is('#show_ventana_2x3x2_A')){
					modelo_232_w(0X2562B3, 6020110);
				}
				if (ui.draggable.is('#show_ventana_2x4x2_R')){
					modelo_242_techo_w(0XBE0606, 6020134);
				}
				if (ui.draggable.is('#show_ventana_2x2x2_R')){
					modelo_222_w(0XBE0606, 6020412);
				}
				if (ui.draggable.is('#show_ventana_2x2x2_V')){
					modelo_222_w_recto(0X59B042, 6025187);
				}
				if (ui.draggable.is('#show_tanque')){
					modelo_243_tanque(0XF6C503, 6001240);
				}
				
			}
  	});

	//Call to the needed methods to start the render in blank at the begining
	inicio();
	animacion();	
	Delall();
	
	
	
	
	