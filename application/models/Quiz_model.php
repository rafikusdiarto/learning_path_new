<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_all_quiz()
    {
        $this->db->select('quizes.*, learning_paths.title as learning_path_name');
        $this->db->from('quizes');
        $this->db->join('learning_paths', 'quizes.learning_path_id = learning_paths.id');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function get_quiz_by_id($id)
    {
        return $this->db->get_where('quizes', array('id' => $id))->row();
    }

    public function create_quiz($data)
    {
        $this->db->insert('quizes', $data);
		return $this->db->insert_id();
    }

    public function update_quiz($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('quizes', $data);
        return $this->db->affected_rows();
    }

    public function delete_quiz($id)
    {
        return $this->db->delete('quizes', array('id' => $id));
    }
	
	public function get_quiz_by_learningpath($id)
    {
        $this->db->where('learning_path_id', $id);
        $query = $this->db->get('quizes');
        return $query->result_array();
    }

	public function count_quiz_by_learningpath($id)
    {
        $this->db->where('learning_path_id', $id);
        $this->db->from('quizes');
        return $this->db->count_all_results();
    }

	public function get_data_count() {
        return $this->db->count_all('quizes'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }

	public function save_score($learning_path_id, $score)
	{
		$data = array(
            'learning_path_id' => $learning_path_id,
            'score' => $score,
        );

        $this->db->insert('quiz_history', $data);
	}

	public function get_all_quiz_history()
    {
        $this->db->select('quiz_history.*, learning_paths.title as learning_path_name');
        $this->db->from('quiz_history');
        $this->db->join('learning_paths', 'quiz_history.learning_path_id = learning_paths.id');
        $query = $this->db->get();
        
        return $query->result();
    }
}
