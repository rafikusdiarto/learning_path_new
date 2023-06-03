<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearningPath_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_learning_path()
    {
        return $this->db->get('learning_path')->result();
    }

    public function get_learning_path_by_id($id)
    {
        return $this->db->get_where('learning_path', array('id' => $id))->row();
    }

    public function create_learning_path($data)
    {
        $this->db->insert('learning_path', $data);
		return $this->db->insert_id();
    }

    public function update_learning_path($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('learning_path', $data);
    }

    public function delete_learning_path($id)
    {
        return $this->db->delete('learning_path', array('id' => $id));
    }
}
