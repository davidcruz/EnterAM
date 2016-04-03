<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

	<!--___________________________________________________FUNCTIONS FOR CONTROLS-->
	<script src = "goLibrary/go.js"></script>
	<script src = "goLibrary/go-debug.js"></script>
	<script src = "goLibrary/goFunctions.js"></script>
	
	<script src="goLibrary/spectrum.js"></script>
  	<link rel='stylesheet' href='goLibrary/spectrum.css' />

  	<!--
  	<link rel='stylesheet' href='goLibrary/inspector.css' />
	<script src = "goLibrary/inspector.js"></script>
  	<script src="goLibrary/ExtendedBrush.js"></script>	
	-->
	<!--___________________________________________________-->

	<!--___________________________________________________FUNCTIONS FOR CONTROLS-->
	<script src="ajaxFunctions/loadFunctions.js"></script>
	<!--___________________________________________________-->
	
	<!--___________________________________________________PERSONAL STYLE-->
  		<link rel="stylesheet" href="personalStyles/personalStyle.css">
  		<link rel="stylesheet" href="personalStyles/stylesForForms.css">
  		<link rel="stylesheet" href="personalStyles/paper.css">
	<!--___________________________________________________END PERSONAL STYLE-->
	
	<!--___________________________________________________STYLE USING BOOTSTRAP-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="JQuery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!--___________________________________________________END STYLE BOOTSTRAP-->


	<script>
		LoadMenu(1);

	</script>
	
    <script>
   /* window.onload = function() {
    init();
    makeInspector();
    //myDiagram.maybeUpdate(); // force measure before selecting object for inspector

    myDiagram.select(myDiagram.nodes.first())
  }*/


    	function SizeDiv(Str){
    		if (Str == 'close'){
    			console.log("cerrando DIV");
	    		//$(document).ready(function() {
	    			//$('#myholder').css({ 'width':'100%', 'height':'520px' });
	    			$('#myholder').addClass('col-xs-12');
	    			//$('#myholder').removeClass('col-xs-10');
	    			console.log("Cambiando clase");
	    			$('#Properties').hide("fast");
				//});	
    		}else{
	    		$('#myholder').toggleClass('col-xs-9');
	    		//$('#myholder').removeClass('col-xs-12');
	    		//$('#Properties').toggleClass("fast");
				//LoadAuxiliarProperties(1);
				makeInspector();
				myDiagram.select(myDiagram.nodes.first());
			}Properties
		}
    </script>
</head>
<?php
	
	/*session is started if you don't write this line can't use $_Session  global variable*/
	$Email = $_POST['userName'];
	$Password = $_POST['userPassword'];
	$A = $Email;

	if ($Email == "mateosadan_88@hotmail.com" && $Password == "amh"){
		session_start();
		$value = " Adan Mateos Hernández";
		$A = $value;
		$_SESSION["newsession"] = $value;	
	}else{
		header("location:index.php"); 
	}
	
?>
<body background="images/body-bg.png" id="page-top">
	 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div id = "cont" class = "container-fluid">
			<div id = "Menu" class = "col-sm-2">
				<img src = "images/GMATHEC.png" id = "BackgLogo" onclick="DrawForm(paper, graph, 5, 5)"></img>
			</div>
			<div class="col-sm-10" id = "menu">
				
           	</div>
           	<div class="col-sm-10" id = "Tools">
				<?php echo $A;?>
				Menu herramientas
           	</div>
		</div>
		<!--
		<div class="tab-content">
		  <div id="home" class="tab-pane fade in active">
		    <h3>HOME</h3>
		    <p>Some content.</p>
		  </div>
		  
		</div>
		-->
		<div id = "SheetContainer">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#myholder">Diagram</a></li>
			  <li><a data-toggle="tab" href="#Information">Information</a></li>
			</ul>
			<div class="tab-content">
				<div class = "tab-pane fade in active" id = "myholder">
				texto diagrama
			    </div>
			    <div id = "Information" class = "tab-pane fade">
				    <h3>Menu 1</h3>
				    <p>Some content in menu 1.</p>
				</div>
			</div>
		    <div class="col-xs-3" id = "Properties">
		    	<span style="display: inline-block; vertical-align: top;">
		    		<div id = 'myInspector' class = 'inspector-container'></div>	
		    	</span>
		    		<textarea id="mySavedModel" style="width:100%;height:200px">
{ "class": "go.GraphLinksModel",
  "copiesArrays": false,
  "copiesArrayObjects": false,
  "linkFromPortIdProperty": "fromPort",
  "linkToPortIdProperty": "toPort",
  "nodeDataArray": [
  {"key":"A", "loc":"50 10",
 "leftArray":[ {"portColor":"#425e5c", "portId":"left0"} ],
 "topArray":[ {"portColor":"#d488a2", "portId":"top0"} ],
 "bottomArray":[ {"portColor":"#316571", "portId":"a0"}, {"portColor":"#316571", "portId":"a1"} ],
 "rightArray":[ {"portColor":"#923951", "portId":"right0"},{"portColor":"#ef3768", "portId":"right1"} ]},

{"key":"B", "loc":"150 10",
 "leftArray":[ {"portColor":"#7d4bd6", "portId":"left0"},{"portColor":"#cc585c", "portId":"left1"},{"portColor":"#b1273a", "portId":"left2"} ],
 "topArray":[ {"portColor":"#14abef", "portId":"top0"} ],
 "bottomArray":[ {"portColor":"#dd45c7", "portId":"b0"},{"portColor":"#995aa6", "portId":"b1"} ],
 "rightArray":[  ] },

{"key":"C", "loc":"250 10",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"top0"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"c0"},{"portColor":"#6cafdb", "portId":"c1"} ],
 "rightArray":[  ] },

{"key":"D", "loc":"350 10",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"top0"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"d0"},{"portColor":"#6cafdb", "portId":"d1"} ],
 "rightArray":[  ] },

{"key":"E", "loc":"450 10",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"top0"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"e0"},{"portColor":"#6cafdb", "portId":"e1"} ],
 "rightArray":[  ] },


{"key":"F", "loc":"50 150",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"f0"}, {"portColor":"#d02104", "portId":"f1"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"bottom0"} ],
 "rightArray":[  ] },

{"key":"G", "loc":"150 150",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"g0"}, {"portColor":"#d08854", "portId":"g1"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"bottom0"} ],
 "rightArray":[  ] },

{"key":"H", "loc":"250 150",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"h0"}, {"portColor":"#f08154", "portId":"h1"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"bottom0"} ],
 "rightArray":[  ] },

{"key":"I", "loc":"350 150",
 "leftArray":[ {"portColor":"#bd8f27", "portId":"left0"},{"portColor":"#c14617", "portId":"left1"},{"portColor":"#47fa60", "portId":"left2"} ],
 "topArray":[ {"portColor":"#d08154", "portId":"i0"}, {"portColor":"#d08850", "portId":"i1"} ],
 "bottomArray":[ {"portColor":"#6cafdb", "portId":"bottom0"} ],
 "rightArray":[  ] },

{"key":"J", "loc":"450 150",
 "leftArray":[ {"portColor":"#491389", "portId":"left0"} ],
 "topArray":[ {"portColor":"#77ac1e", "portId":"j0"}, {"portColor":"#77ac1e", "portId":"j1"} ],
 "bottomArray":[ {"portColor":"#e9701b", "portId":"bottom0"} ],
 "rightArray":[ {"portColor":"#24d05e", "portId":"right0"},{"portColor":"#cfabaa", "portId":"right1"} ] }
 ],


"linkDataArray": [
{"from":"A", "to":"J", "fromPort":"a0", "toPort":"j0"},
{"from":"A", "to":"F", "fromPort":"a1", "toPort":"f0"},
{"from":"B", "to":"F", "fromPort":"b0", "toPort":"f1"},
{"from":"B", "to":"G", "fromPort":"b1", "toPort":"g0"},
{"from":"C", "to":"G", "fromPort":"c0", "toPort":"g1"},
{"from":"C", "to":"H", "fromPort":"c1", "toPort":"h1"},
{"from":"D", "to":"H", "fromPort":"d1", "toPort":"h0"},
{"from":"D", "to":"I", "fromPort":"d0", "toPort":"i0"},
{"from":"E", "to":"J", "fromPort":"e1", "toPort":"j1"},
{"from":"E", "to":"I", "fromPort":"e0", "toPort":"i1"}
 ]}
  </textarea>
		    </div>
		<div>
			
		</div>
	</nav>
</body>

</html>