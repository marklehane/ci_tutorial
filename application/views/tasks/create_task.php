<?php

echo "<h2>Create task</h2>";

$attributes = array('id' => 'create_form' , 'class' => 'form-horizontal');

echo validation_errors("<p class='alert alert-danger'>");

echo form_open('tasks/create/'. $this->uri->segment(3) .'', $attributes);

$data = array(
  'class' => 'form-control',
  'name' => 'task_name',
  'placeholder' => 'Enter Task Name'
);

echo "<div class='form-group'>";
  echo form_label('Task Name');
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'task_body'
);

echo "<div class='form-group'>";
  echo form_label('Task Description');
  echo form_textarea($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'date_due',
  'type' => 'date'
);

echo "<div class='form-group'>";
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'btn btn-primary',
  'name' => 'submit',
  'value' => 'Create'
);

echo "<div class='form-group'>";
  echo form_submit($data);
echo "</div>";

echo form_close();


?>
