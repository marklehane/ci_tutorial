<?php

echo "<h2>Create Project</h2>";

$attributes = array('id' => 'create_form' , 'class' => 'form-horizontal');

echo validation_errors("<p class='alert alert-danger'>");

echo form_open('users/register', $attributes);

$data = array(
  'class' => 'form-control',
  'name' => 'project_name',
  'placeholder' => 'Enter Project Name'
);

echo "<div class='form-group'>";
  echo form_label('Project Name');
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'project_body'
);

echo "<div class='form-group'>";
  echo form_label('Project Description');
  echo form_textarea($data);
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
