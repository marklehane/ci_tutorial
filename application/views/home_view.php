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

<h1>Projects</h1>

<?php if(isset($projects)): ?>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>
	        Project Name
	      </th>
	      <th>
	        Project Description
	      </th>
	      <th>
	        Options
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach($projects as $project): ?>
	      <tr>
	        <?php echo "<td>$project->project_name</td>"; ?>
	        <?php echo "<td>$project->project_body</td>"; ?>
	        <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">View</a></td>
	      </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>

<?php endif; ?>

<h1>Tasks</h1>

<?php if(isset($tasks)): ?>

	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th>
	        Task Name
	      </th>
	      <th>
	        Task Description
	      </th>
	      <th>
	        Options
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach($tasks as $task): ?>
	      <tr>
	        <?php echo "<td>$task->task_name</td>"; ?>
	        <?php echo "<td>$task->task_body</td>"; ?>
	        <td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id; ?>">View</a></td>
	      </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>

<?php endif; ?>