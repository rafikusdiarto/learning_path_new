<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        $user = $query->row();

        // Jika pengguna ditemukan
        if ($user) {
            // Verifikasi password
            $is_password_correct = password_verify($password, $user->password);

            if ($is_password_correct) {
                return $user; // Password benar, kembalikan data pengguna
            }
        }

        return false;
    }
	
    public function getAccessLevel($userId) {
        $this->db->select('access_level');
        $this->db->where('id', $userId);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->access_level;
        } else {
            return false;
        }
    }

	public function get_all_member()
    {
        return $this->db->get('users')->result();
    }

	public function create_member($data)
    {
        $this->db->insert('users', $data);
		return $this->db->insert_id();
    }

    public function delete_member($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
	
	public function get_member_count() {
        return $this->db->count_all('users'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }
}

