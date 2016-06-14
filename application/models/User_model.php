<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model{

 // put form rules in the model for export later into the controller.
 // fat model, thin controller

  public $user_form_register = array(
          array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'trim|required|min_length[3]',
            ),
          array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|required|min_length[3]',
          ),
          array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|min_length[3]|is_unique[users.username]', /// <- must check that the new username is unique
          ),
          array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|max_length[255]',
         ),
          array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[3]',
        ),
          array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'trim|required|min_length[3]|matches[password]',
        ),
    );

  public $user_form_login = array(
        array(
          'field' => 'username',
          'label'=> 'Username',
          'rules' => 'trim|required|min_length[3]',
          ),
        array(
          'field' => 'password',
          'label'=> 'Password',
          'rules' => 'trim|required|min_length[3]',
          ),
        array(
          'field' => 'confirm_password',
          'label'=> 'Confirm Password',
          'rules' => 'trim|required|min_length[3]|matches[password]',
          ),
    );


  public function create_user() {

    $options = ['cost' => 12];

    $encrypted_pass = password_hash($this->input->post('password'),  PASSWORD_BCRYPT, $options); // note that alot of online servers are still on PHP 5.4
                                                                                                // hence this will not work online.

    $data = array(

      'username' => $this->input->post('username', true), // if your site displays username's etc to other users, such as posting and comments,
      'password' => $encrypted_pass,                      // you must protect yourself from xss hacking.
      'email' => $this->input->post('email', true),
      'first_name' => $this->input->post('first_name', true),
      'last_name' => $this->input->post('last_name', true),

    );

    $this->db->insert('users', $data);
    return count($this->db->affected_rows());

  }

  public function login_user() {

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->db->select('id, username, password'); // you should be specific with the data you need from the SQL db to save memory costs
    $this->db->where('username', $username);
    $result = $this->db->get('users')->row();

    if (password_verify($password, $result->password))

    {
      return $result;

    } else {

      return false;

    }

  }
  
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
