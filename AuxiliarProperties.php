<?php
$Var = $_REQUEST["Str1"];
if ($Var == 1){
	echo "<div class = 'alert alert-warning alert-dismissible' role = 'alert'>
  		<button type = 'button' class = 'close' data-dismiss = 'alert' onclick = SizeDiv('close')><span aria-hidden = 'true'>&times;</span></button>
  		<div id = 'myInspector' class = 'inspector-container'>llamando </div>
		</div>";
}

?>