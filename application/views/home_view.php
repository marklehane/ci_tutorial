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

<h1>Hello this is a view</h1>
