<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
		$data['sidebar'] = $this->load->view('layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('layouts/components/footer', '', TRUE);
		$data['content_view'] = "users/index";

		$this->load->view('dashboard', $data);
  }

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
