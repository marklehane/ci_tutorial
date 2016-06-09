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

<table class="table table-hover">
  <thead>
    <tr>
      <th>
        Project Name
      </th>
      <th>
        Project Body
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($projects as $project): ?>
      <tr>
        <?php echo "<td><a href='". base_url() ."projects/display/". $project->id ."'>".$project->project_name."</a></td>"; ?>
        <?php echo "<td>".$project->project_body."</td>"; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

