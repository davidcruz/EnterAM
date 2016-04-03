<?php
$Var = $_REQUEST["Str1"];
$UserNameManager = "Adán Mateos Hernández";

echo "
<div class='container'>
  <div class = 'row'>
    <div class = 'col-sm-2'>
    </div>

    <div class = 'col-sm-8'>
        <center><h2>New business data</h2></center>
    </div>

    <div class = 'col-sm-2'>
    </div>

  </div>
  <div class = 'row'>
    <div class = 'col-sm-2'>
    </div>

    <div class = 'col-sm-9'>
      <form class='form-horizontal' role='form'>
        
        <div class='form-group'>
          <label class='control-label col-sm-3' for='BusinessDataName'>Business data name:</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='BusinessDataName' placeholder = 'Enter the business data name'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='BusinessDataAlias'>Business data alias:</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='BusinessDataAlias' placeholder = 'Example: DataName1, DataName2, ....'>
          </div>
        </div>

        <div class='form-group'>        
          <div class='col-sm-offset-3 col-sm-6'>
            <button type='submit' class='btn btn-default'>Submit</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

";
?>