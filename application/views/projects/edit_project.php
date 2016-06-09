<?php

echo "<h2>Edit Project</h2>";

$attributes = array('id' => 'create_form' , 'class' => 'form-horizontal');

echo validation_errors("<p class='alert alert-danger'>");

echo form_open('projects/edit/'. $project_data->id .'', $attributes);

$data = array(
  'class' => 'form-control',
  'name' => 'project_name',
  'placeholder' => 'Edit Project Name',
  'value' => $project_data->project_name
);

echo "<div class='form-group'>";
  echo form_label('Project Name');
  echo form_input($data);
echo "</div>";

$data = array(
  'class' => 'form-control',
  'name' => 'project_body',
  'value' => $project_data->project_body
);

echo "<div class='form-group'>";
  echo form_label('Edit Project Description');
  echo form_textarea($data);
echo "</div>";

$data = array(
  'class' => 'btn btn-primary',
  'name' => 'submit',
  'value' => 'Update'
);

echo "<div class='form-group'>";
  echo form_submit($data);
echo "</div>";

echo form_close();


?>
