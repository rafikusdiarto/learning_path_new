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

class LearningPath extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->library('session');
		$this->load->model('LearningPath_model');
		$this->load->model('Quiz_model');

  }

  public function index($id)
  {
		$data['learning_path_detail'] = $this->LearningPath_model->get_learning_path_by_id($id);
		$data['sidebar'] = $this->load->view('users/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/learning_path/index';

    $this->load->view('users/layouts', $data);
  }

	public function start_quiz($id){
		$data['quizes'] = $this->Quiz_model->get_quiz_by_learningpath($id);
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/learning_path/quiz';

    $this->load->view('users/layouts', $data);

	}

	function view_video()
	{
		$this->load->view('users/learning_path/video');
	}

	

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
