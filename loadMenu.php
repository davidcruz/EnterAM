<?php
$Var = $_REQUEST["Str1"];
if ($Var == 1){
echo "
	<div id = 'Domain' class = 'navbar-header'>
		<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
	    	<span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        </button>
		<div class='navbar-header'>
			<a class='navbar-brand page-scroll' href='#page-top'>Business Architecture Domain</a>
	    </div>
	</div>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		<ul class='nav navbar-nav navbar-right'>
	    	<li>
	    		<a href='#Properties' class='inf' onclick = 'AddNewUser(1)'>Add new user</a>
	        </li>
	        <li class='dropdown'>
	        	<a class='dropdown-toggle' data-toggle = 'dropdown' href = '#' >Menu 1
    			<span class='caret'></span></a>
	        	<ul class = 'dropdown-menu'>
	        		<li><a href='#services' onclick = init(2)>Report</a></li>
	        	</ul>
	        	
	        </li>
	        <li>
	        	<a href='#portfolio' onclick='AddNewBusinessData(1)'>Add business data</a>
	        </li>
	        <li>
	        	<a href='#contact' onclick='AddNewSystemForm(1)'>Add new system</a>
	        </li>
	    </ul>
	</div>
";
}
if ($Var == 2){
	echo"<div id = 'Domain' class = 'navbar-header'>
		<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
	    	<span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        </button>
		<div class='navbar-header'>
			<a class='navbar-brand page-scroll' href='#page-top'>Business Architecture Domain</a>
	    </div>
	</div>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		<ul class='nav navbar-nav navbar-right'>
	    	<li>
	    		<a href='#about'>Administracion</a>
	        </li>
	        <li>
	        	<a href='#services'>Reportes</a>
	        </li>
	        <li>
	        	<a href='#portfolio'onclick = 'DrawForm(paper, graph, 10, 10)'>Generar Diagrama</a>
	        </li>
	        <li>
	        	<a href='#contact' onclick='LoadlogIn(1)'>LogIn</a>
	        </li>
	    </ul>
	</div>";
}
?>