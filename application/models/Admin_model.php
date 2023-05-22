<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email, $password) {
        $query = $this->db->get_where('admin', array('email' => $email, 'password' => $password));
        return $query->num_rows() === 1;
    }
	
    public function getAccessLevel($userId) {
        $this->db->select('access_level');
        $this->db->where('id', $userId);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->access_level;
        } else {
            return false;
        }
    }
}

