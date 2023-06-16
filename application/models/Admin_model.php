<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email, $password) {
		$this->db->where('email', $email);
        $query = $this->db->get('admin');
        $admin = $query->row();

        // Jika pengguna ditemukan
        if ($admin) {
            // Verifikasi password
            $is_password_correct = password_verify($password, $admin->password);

            if ($is_password_correct) {
                return $admin; // Password benar, kembalikan data pengguna
            }
        }

        return false;    }
	
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

