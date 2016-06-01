<?php

if ($this->session->userdata('logged_in')) {

  echo "<h2>Logout</h2>";
  echo form_open('users/logout');

  if ($this->session->userdata('username'))
  {
    echo "<p>You are logged in as " . $this->session->userdata('username')."</p>";
  }

  $data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Logout'
  );
  echo form_submit($data);
  echo form_close();
}
else
{

  echo "<h2>Login Form</h2>";

  $attributes = array('id' => 'login_form' , 'class' => 'form-horizontal');

  if ($this->session->flashdata('errors')) {
    echo $this->session->flashdata('errors');
  }

  echo form_open('users/login', $attributes);

  $data = array(
    'class' => 'form-control',
    'name' => 'username',
    'placeholder' => 'Enter Username'
  );

  echo "<div class='form-group'>";
    echo form_label('Username');
    echo form_input($data);
  echo "</div>";

  $data = array(
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Enter Password'
  );

  echo "<div class='form-group'>";
    echo form_label('Password');
    echo form_password($data);
  echo "</div>";

  $data = array(
    'class' => 'form-control',
    'name' => 'confirm_password',
    'placeholder' => 'Confirm Password'
  );

  echo "<div class='form-group'>";
    echo form_label('Confirm Password');
    echo form_password($data);
  echo "</div>";

  $data = array(
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Login'
  );

  echo "<div class='form-group'>";
    echo form_submit($data);
  echo "</div>";

  echo form_close();

}

?>
