<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Dashboard
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

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->library('session');

  }

  public function index()
  {
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/dashboard/index';

		$this->load->view('leader/layouts', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */