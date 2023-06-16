<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leader_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function login($email, $password) {
		$this->db->where('email', $email);
        $query = $this->db->get('leaders');
        $leader = $query->row();

        // Jika pengguna ditemukan
        if ($leader) {
            // Verifikasi password
            $is_password_correct = password_verify($password, $leader->password);

            if ($is_password_correct) {
                return $leader; // Password benar, kembalikan data pengguna
            }
        }

        return false;
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

	public function create_leader($data)
    {
        $this->db->insert('leaders', $data);
		return $this->db->insert_id();
    }

    public function delete_leader($id)
    {
        return $this->db->delete('leaders', array('id' => $id));
    }
	
	public function get_leader_count() {
        return $this->db->count_all('leaders'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    }
}

