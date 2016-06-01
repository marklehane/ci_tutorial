<?php

echo "<h2>Register</h2>";

$attributes = array('id' => 'register_form' , 'class' => 'form-horizontal');

echo validation_errors("<p class='alert alert-danger'>");

echo form_open('users/register', $attributes);

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
  'name' => 'first_name',
  'placeholder' => 'Enter First Name'
);

echo "<div class='form-group'>";
  echo form_label('First Name');
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'last_name',
  'placeholder' => 'Enter Last Name'
);

echo "<div class='form-group'>";
  echo form_label('Last Name');
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'email',
  'placeholder' => 'Enter Email'
);

echo "<div class='form-group'>";
  echo form_label('Email');
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
  'value' => 'Register'
);

echo "<div class='form-group'>";
  echo form_submit($data);
echo "</div>";

echo form_close();


?>
