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
  }

  public function index()
  {
		$data['sidebar'] = $this->load->view('layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('layouts/components/footer', '', TRUE);
		$data['content_view'] = 'admin/index';

    $this->load->view('dashboard', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
