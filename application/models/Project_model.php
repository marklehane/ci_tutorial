<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

  public function get_projects()
  {
    $query = $this->db->get('projects');

    return $query->result();
  }

  public function get_project($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('projects');

    return $query->row();
  }


}
