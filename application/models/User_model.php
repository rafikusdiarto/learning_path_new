<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function create_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function get_user_by_username($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row();
    }

    public function get_user_by_email($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row();
    }

    public function verify_password($username, $password)
    {
        $user = $this->get_user_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }

        return null;
    }
}
