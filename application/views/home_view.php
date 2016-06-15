<p class="bg-success">

<?php

if ($this->session->flashdata('login_success')) {
  echo $this->session->flashdata('login_success');
}

if ($this->session->flashdata('user_register')) {
  echo $this->session->flashdata('user_register');
}

?>

</p>

<p class="bg-danger">

<?php

if ($this->session->flashdata('no_access')) {
  echo $this->session->flashdata('no_access');
}

if ($this->session->flashdata('login_failed')) {
  echo $this->session->flashdata('login_failed');
}

?>

</p>

<div class="jumbotron">
	<h2 class="text-center">Welcome to the CI App</h2>
</div>

<?php if(isset($projects)): ?>

<div class="panel panel-primary">
	<div class="panel-heading"><h3>Projects</h3></div>

	<div class="panel-body">

	<ul class="list-group">




<?php foreach($projects as $project): ?>

	<li class="list-group-item"><a href="<?php echo base_url();?>projects/display/<?php echo $project->id ?>">

	<?php echo  $project->project_name; ?>

	</a></li>

	  <?php endforeach; ?>


<?php endif; ?>

	</ul>
</div>

</div> <!-- ENd of panel-->


<?php if(isset($tasks)): ?>



<div class="panel panel-success">
	<div class="panel-heading"><h3>Tasks</h3></div>

	<div class="panel-body">

	<ul class="list-group">
	
	
		<?php foreach($tasks as $task): ?>

			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id ?>">

	<?php echo  $task->task_name; ?></td>

	</a></li>



	   <?php endforeach; ?>


<?php endif; ?>

	</ul>
</div>

</div>