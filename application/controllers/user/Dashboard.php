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
		// $this->load->model('User_model');
		$this->load->library('session');

  }

  public function index()
  {
		$data['sidebar'] = $this->load->view('users/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/dashboard/index';

		$this->load->view('users/layouts', $data);
		// $userId = $this->session->userdata('user_id');
		// $accessLevel = $this->User_model->getAccessLevel($userId);

		// if ($accessLevel === false || $accessLevel < 2) {
		// 		show_404();
		// }else {
			
		// }

  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
