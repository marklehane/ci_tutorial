  <?php if ($this->session->userdata('logged_in')): ?> // the controller controls with views are loaded. This doesnt belong here.
                                                      // this file really needs to be split  in 2 separate files/forms and loaded appropiately from
                                                      // the controller. but hey ho...

 <h2>Logout</h2>
 <?php echo form_open('users/logout'); ?>
 <?php if ($this->session->userdata('username')): ?>
  
  <p>You are logged in as "  <?php echo $this->session->userdata('username') ?>"</p>
  <?php echo form_submit('submit', 'Logout', array('class'=>'btn btn-primary')); ?>
  <?php echo form_close(); ?>

  <?php else: ?>


  <h2>Login Form</h2>
  <?php echo $this->session->flashdata('errors') ? $this->session->flashdata('errors') : "" ; ?>
  <?php echo form_open('users/login', array('id' => 'login_form' ,'class' => 'form-horizontal')); ?>

  <div class="form-group">
  <?php echo form_label('Username', 'username'); ?>
  <?php echo form_input('username', set_value('username'), array('class'=>'form-control', 'placeholder'=>'Enter Username')); ?>
  </div>

  <div class="form-group">
  <?php echo form_label('Password', 'password'); ?>
  <?php echo form_password('password', '', array('class'=>'form-control')); ?>
  </div>

  <div class="form-group">
  <?php echo form_label('Confirm Password', 'confirm_password'); ?>
  <?php echo form_password('confirm_password', '', array('class'=>'form_control')); ?>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Login</button>
  <?php // if your using bootstrap, the above allows you to use glypicons etc ?>
  <?php echo form_close(); ?>
  <?php endif; ?>
  
