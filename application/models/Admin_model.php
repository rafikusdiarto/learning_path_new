<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('admin', array('email' => $email, 'password' => $password));
        return $query->row();
    }
}
