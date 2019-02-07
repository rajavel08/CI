<!DOCTYPE html>
<html lang = 'en'>
  <head>
    <meta charset = 'utf-8'>
    <title> Sign up </title>
  </head>

  <body>
    <h1 align = 'center'> Create Account</h1>
    <hr>
    <div align = 'center'>
      <?php
          echo form_open('User/new_user');
          echo form_label('Email');
          echo form_input(array('id' => 'email', 'name' => 'email'));
          echo "<br/>";

          echo form_label('Name');
          echo form_input(array('id' => 'name', 'name' => 'name'));
          echo "<br/>";

          echo form_label('Password');
          echo form_input(array('id' => 'password', 'name' => 'password'));
          echo "<br/>";

          echo form_submit(array('id'=>'submit','value'=>'SIGNUP'));
          echo form_close();
      ?>
    </div>
  </body>
</html>
