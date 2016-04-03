<?php
$EA_Domais = array(
		"Capabilities",
		"Business Architecture", 
		"Application Architecture", 
		"Data Architecture",
		"Technology Architecture"
		);

$EA_Nodes = array(
	1,"Venta",
	1,"Renta",
	2,"ProcesoVenta",
	2,"BusquedaDeClienteEnBD",
	2,"RevisionStock",
	2,"SeleccionDeProducto",
	2,"BajaDeProducto",
	3,"CRM",
	);
$EA_NodeRelations = array(
	1, 3,
	3,4,
	4,5,
	5,6,
	6,7
	
	);
$EA_Node_Attributes = array(
	""
	);
?>