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
		$this->load->model('LearningPath_model');
  }

  public function index()
  {
		$data['learning_path'] = $this->LearningPath_model->get_all_learning_path();
		$data['sidebar'] = $this->load->view('users/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/dashboard/index';

		$this->load->view('users/layouts', $data);
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
