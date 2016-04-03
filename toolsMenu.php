<?php
$Var = $_REQUEST["Str1"];
if ($Var == 1){
echo "
	<div id = 'Domain' class = 'navbar-header'>
		<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-2'>
	    	<span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        </button>
	</div>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-2'>
		<ul class='nav navbar-nav navbar-left'>
	    	<li>
	    		<a href='#about'><span class='label label-primary'>Business Architecture</span></a>
	        </li>
	        <li>
	        	<a href='#services'><span class='label label-success'>System Architecture</span></a>
	        </li>
	        <li>
	        	<a href='#portfolio' ><span class='label label-info'>Data Architecture</span></a>
	        </li>
	        <li>
	        	<a href='#portfolio' ><span class='label label-warning'>Technology Architecture</span></a>
	        </li>
	    </ul>
	</div>
";
}

if ($Var == 2){
echo "
	<div id = 'Domain' class = 'navbar-header'>
		<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-2'>
	    	<span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        </button>
	</div>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-2'>
		<ul class='nav navbar-nav navbar-left'>
	    	<li>
	    		<a href='#about'><span class='label label-primary'>Rectangle form</span></a>
	        </li>
	        <li>
	        	<a href='#services'><span class='label label-success'>Path Form</span></a>
	        </li>
	        <li>
	        	<a href='#portfolio' ><span class='label label-info'>Ellipse form</span></a>
	        </li>
	        <li>
	        	<a href='#portfolio' ><span class='label label-warning'>Line Form</span></a>
	        </li>
	    </ul>
	</div>
";
}
?>