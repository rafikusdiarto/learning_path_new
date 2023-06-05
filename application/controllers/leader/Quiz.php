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

class Quiz extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	$this->load->model('LearningPath_model');
	$this->load->model('Quiz_model');
	$this->load->library('session');
	$this->load->helper(array('form', 'url'));
	$this->load->library('upload');
  }

	public function quiz(){
		$data['quiz'] = $this->Quiz_model->get_all_quiz();
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/quiz/index';

		$this->load->view('leader/layouts', $data);

	}

	public function add_quiz(){
		$data['learning_path'] = $this->LearningPath_model->get_all_learning_path();

		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/quiz/add';

		$this->load->view('leader/layouts', $data);

	}

	public function create(){
		$data = array(
            'learning_path_id' => $this->input->post('learning_path_id'),
            'questions_text' => $this->input->post('questions_text'),
            'choiceA' => $this->input->post('choiceA'),
            'choiceB' => $this->input->post('choiceB'),
            'choiceC' => $this->input->post('choiceC'),
            'choiceD' => $this->input->post('choiceD'),
            'answer_key' => $this->input->post('answer_key'),
            'questions_score' => $this->input->post('questions_score'),
        );
        $quiz_id = $this->Quiz_model->create_quiz($data);
        if ($quiz_id) {
            $this->session->set_flashdata('success', 'Quiz created successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to create Quiz.');
        }
        redirect('leader/quiz');
	}

	public function detail_quiz($id){
		$data['detail_quiz'] = $this->Quiz_model->get_quiz_by_id($id);

		// $data['detail_quiz'] = $this->Quiz_model->get_all_quiz();
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/quiz/detail';

		$this->load->view('leader/layouts', $data);

	}

	
	public function edit_quiz(){
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/quiz/edit';

		$this->load->view('leader/layouts', $data);

	}
}

