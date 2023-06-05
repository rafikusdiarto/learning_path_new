<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_all_quiz()
    {
        return $this->db->get('quiz')->result();
    }

    public function get_quiz_by_id($id)
    {
        return $this->db->get_where('quiz', array('id' => $id))->row();
    }

    public function create_quiz($data)
    {
        $this->db->insert('quiz', $data);
		return $this->db->insert_id();
    }

    public function update_quiz($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('quiz', $data);
        return $this->db->affected_rows();
    }

    public function delete_quiz($id)
    {
        return $this->db->delete('quiz', array('id' => $id));
    }
	
	public function get_data_count() {
        return $this->db->count_all('quiz'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }
}
