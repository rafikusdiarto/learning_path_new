<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearningPath_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_learning_path()
    {
        return $this->db->get('learning_paths')->result();
    }

    public function get_learning_path_by_id($id)
    {
        return $this->db->get_where('learning_paths', array('id' => $id))->row();
    }

    public function create_learning_path($data)
    {
        $this->db->insert('learning_paths', $data);
		return $this->db->insert_id();
    }

    public function update_learning_path($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('learning_paths', $data);
        return $this->db->affected_rows();
    }

    public function delete_learning_path($id)
    {
        return $this->db->delete('learning_paths', array('id' => $id));
    }
	
	public function get_data_count() {
        return $this->db->count_all('learning_paths'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }
}
