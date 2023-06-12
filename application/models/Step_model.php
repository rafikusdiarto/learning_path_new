<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Step_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_step()
    {
		$this->db->select('steps.*, learning_paths.title as learning_path_name');
        $this->db->from('steps');
        $this->db->join('learning_paths', 'steps.learning_path_id = learning_paths.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_step_by_id($id)
    {
		// $this->db->select('steps.*, learning_paths.title as learning_path_name');
        // $this->db->from('steps');
        // $this->db->join('learning_paths', 'steps.learning_path_id = learning_paths.id');
		// $query = $this->db->get_where('steps', array('id' => $id))->row();

        // return $query->result();


        return $this->db->get_where('steps', array('id' => $id))->row();
    }

    public function create_step($data)
    {
        $this->db->insert_batch('steps', $data);
		return $this->db->insert_id();
    }

    public function update_step($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('steps', $data);
        return $this->db->affected_rows();
    }

    public function delete_step($id)
    {
        return $this->db->delete('steps', array('id' => $id));
    }
	
	public function get_data_count() {
        return $this->db->count_all('steps'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }
}
