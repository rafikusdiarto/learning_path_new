<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leader_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email, $password) {
        $query = $this->db->get_where('leaders', array('email' => $email, 'password' => $password));
        return $query->num_rows() === 1;
    }
	
    public function getAccessLevel($userId) {
        $this->db->select('access_level');
        $this->db->where('id', $userId);
        $query = $this->db->get('leaders');

        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->access_level;
        } else {
            return false;
        }
    }

	public function get_all_leader()
    {
        return $this->db->get('leaders')->result();
    }
}

