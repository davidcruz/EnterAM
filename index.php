<html>
	<head>
		<!--___________________________________________________PERSONAL STYLE-->
  		<link rel="stylesheet" href="personalStyles/personalStyle.css">
  		<link rel="stylesheet" href="personalStyles/stylesForForms.css">
		<!--___________________________________________________STYLE USING BOOTSTRAP-->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="JQuery/jquery.min.js"></script>
	  	<script src="bootstrap/js/bootstrap.min.js"></script>
		<!--___________________________________________________END STYLE BOOTSTRAP-->
		
	</head>
	<body>
		<div class ="row" id = "Margin"></div>
		<div class = "row" id = "LogInContent">
			<div class="col-md-5" id = "ImagenLogIn">
	    		<h2>GMATHEC una empresa dedicada a ofrecer soluciones empresariales</h2>
	    		<img src="./images/organizar.jpg"  id = "Image"></img>
	    	</div>
	    	<div class="col-md-3"></div>
	    	<form method = "POST" action = "EAManager.php">
			<div class = "col-md-6" id = "Datos">
				<br/><br/>
				<div class="row" id = "LogIn">
			    	<div class="col-md-offset-6 col-md-4" id = "img">
			      		<img src="./images/sistema.jpg" width = '180' height = '190'></img>
			    	</div>
			    	<div class="col-md-offset-6 col-md-4">
			        	<div class="form-login">
			            	<h4>Welcome</h4>
			            	<input type="text" id="userName" name = "userName" class="form-control input-sm chat-input" placeholder="username" />
			            	</br>
			            	<input type="password" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="password" />
			            	</br>
			            	<div class="wrapper">
			            		<span class="group-btn">   
			            		<!--
			            		<A href="JavaScript:window.open('http://www.forosdelweb.com/','foforofos','toolbar=0,location=0,directories=0,
			            		status=0,menubar=0,scrollbars=0,resizable=0,width=screen.width,height=screen.height,top=0,left=0');">  
			            		-->  
			            			<button type="submit" class = "btn btn-primary btn-md">Submit</button>
			                		<!--<a href = "EAManager.php" class = "btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>-->
			            		</span>
			            	</div>
			            </div>
			        </div>
			    </div>
			</form>
	    	</div>
	    </div>
	    <!--<img src="./images/fondo.jpg"  id = "Image"></img>-->
	</body>
</html>