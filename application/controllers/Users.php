<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function register() {

    $this->form_validation->set_rules($this->User_model->user_form_register);

    if ($this->form_validation->run() == FALSE) {

      $data['main_view'] = 'users/register_view';
      $this->load->view('layouts/main' ,$data);

    } else {

      if ($this->user_model->create_user()) {
        $this->session->set_flashdata('user_register', 'User has been registered.');
        redirect('home/index');

      } else {

      }

    }

  }

  public function login() {

    $this->form_validation->set_rules($this->User_model->user_form_login);

    if ($this->form_validation->run() == FALSE) {

      $data = array(
        'errors' => validation_errors()
      );
      $this->session->set_flashdata($data);
      redirect('home');

    } else {

      $result = $this->user_model->login_user();

      if ($result)

      {
        $user_data = array(
          'user_id' => $result->id,
          'username' => $result->username,
          'logged_in' => true
        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success', 'You are now logged in.');

        // $data['main_view'] = "admin_view";

        // $this->load->view('layouts/main', $data);

        redirect('home/index');

      } else {

        $this->session->set_flashdata('login_failed', 'Sorry, you are not logged in.');
        redirect('home/index');

      }

    }

  }

  public function logout() {

    $this->session->sess_destroy();
    redirect('home/index');

  }

}
