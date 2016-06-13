<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function get_task($task_id) {
		
		$this->db->where('id', $task_id);

		$query = $this->db->get('tasks');

		return $query->row();

	}
	
  public function create_task($data) {
    

    $insert_query = $this->db->insert('tasks', $data);

    return $insert_query;

  }

  public function edit_task($task_id, $data) {
    
    $this->db->where('id', $task_id);
    $this->db->update('tasks', $data);

    return true;

  }

  public function delete_task($task_id) {

    $this->db->where('id', $task_id);
    $this->db->delete('tasks');

    return true;

  }

  public function get_tasks_info($task_id) {
    
    $this->db->where('id', $task_id);
    $get_data = $this->db->get('tasks');

    return $get_data->row();

  }

}
