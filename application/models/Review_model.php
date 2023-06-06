<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_review()
    {
        return $this->db->get('reviews')->result();
    }

    public function create_review($data)
    {
        $this->db->insert('reviews', $data);
		return $this->db->insert_id();
    }

}
