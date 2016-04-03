<?php
$Var = $_REQUEST["Str1"];
$UserNameManager = "Adán Mateos Hernández";

echo "
<div class='container'>
  <div class = 'row'>
    <div class = 'col-sm-2'>
    </div>

    <div class = 'col-sm-8'>
        <center><h5><font color = 'gray'><b>$UserNameManager</b></font> system responsible</h5></center>
        <center><font color='gray' size='1px'>To change manager click <a href='#'>here</a></font></center>
        <center><h2>New system</h2></center>
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
          <label class='control-label col-sm-3' for='SystemName'>System name:</label>
          <div class='col-sm-6'>
            <input type='email' class='form-control' id='SystemName' placeholder='Enter system name'>
          </div>
        </div>
        <div class='form-group'>
          <label class='control-label col-sm-3' for='SystemDesc'>System description:</label>
          <div class='col-sm-6'>
            <input type='email' class='form-control' id='SystemDesc' placeholder='Enter system description'>
          </div>
        </div>
        <div class='form-group'>
          <label class='control-label col-sm-3' for='SystemRoudMap'>Update date:</label>
          <div class='col-sm-6'>
            <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class='form-control' />
                    <span class='input-group-addon'>
                        <span class='glyphicon glyphicon-calendar' onclick='calendar(1)'></span>
                    </span>
                </div>
          </div>
        </div>
         <div class='form-group'>
          <label class='control-label col-sm-3' for='SystemUpdateDesc'>Update description:</label>
          <div class='col-sm-6'>
            <input type='email' class='form-control' id='SystemUpdateDesc' placeholder='Enter update description'>
          </div>
        </div>
        <div class='form-group'>
          <label class='control-label col-sm-3' for='SystemStatus'>System status:</label>
          <div class ='col-sm-6'>
            <label class='radio-inline'>
              <input type='radio' value='' name = 'optradio'><span class='label label-primary'>Active</spam>
            </label>
            <label class='radio-inline'>
              <input type='radio' value='' name = 'optradio'>Inactive
            </label>
            <label class='radio-inline'>
              <input type='radio' value='' name = 'optradio'>Develop
            </label>
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