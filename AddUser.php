<?php
$Var = $_REQUEST["Str1"];
$UserNameManager = "Adán Mateos Hernández";

echo "
<div class='container'>
  <div class = 'row'>
    <div class = 'col-sm-2'>
    </div>

    <div class = 'col-sm-8'>
        <center><h5><font color = 'gray'><b>$UserNameManager</b></font> manager</h5></center>
        <center><font color='gray' size='1px'>To change manager click <a href='#'>here</a></font></center>
        <center><h2>New user</h2></center>
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
          <label class='control-label col-sm-3' for='sel1'>User type:</label>
          <div class='col-sm-6'>
            <select class='form-control form-control-sm' id='sel1'>
              <option>Business Architect</option>
              <option>Data Architect</option>
              <option>System Architect</option>
              <option>Technology Architect</option>
              <option>Integration Architect</option>
            </select>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='UserName'>Name:</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='UserName' placeholder='Enter the user name'>
          </div>
        </div>
        
        <div class='form-group'>
          <label class='control-label col-sm-3' for='FirstName'>First name:</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control form-control-sm' id='FirstName' placeholder='Enter the first name'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='SecondName'>Second name:</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control form-control-sm' id = 'SecondName' placeholder = 'Enter the second name'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='Email'>Email:</label>
          <div class='col-sm-6'>
            <input type='email' class='form-control form-control-sm' id = 'Email' placeholder = 'Enter the email'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='Password'>Password:</label>
          <div class='col-sm-6'>
            <input type='password' class='form-control form-control-sm' id='Password' placeholder='Enter the password'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='Phon'>Phon:</label>
          <div class='col-sm-6'>
            <input type='tel' class='form-control form-control-sm' id = 'Phon' placeholder = 'Enter the phon'>
          </div>
        </div>

        <div class='form-group'>
          <label class='control-label col-sm-3' for='sel2'>Area:</label>
          <div class='col-sm-6'>
            <select class='form-control form-control-sm' id='sel2'>
              <option>Ventas</option>
              <option>Procesos</option>
              <option>Sistemas</option>
            </select>
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