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
		$this->load->model('Review_model');
		$this->load->helper('date');

  }

  public function index($id)
  {
		$data['learning_path_detail'] = $this->LearningPath_model->get_learning_path_by_id($id);
		$data['reviews'] = $this->Review_model->get_all_review();
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

	public function submit_quiz($id)
	{

		$questions = $this->Quiz_model->get_quiz_by_learningpath($id);
			
		$correct_answers = 0;
		foreach ($questions as $question) {
			$selected_answer = $this->input->post('answer_' . $question['id']);

			if ($selected_answer == $question['answer_key']) {
				$correct_answers++;
			}
		}
 
		$total_score = $correct_answers * 10;

		$learning_path_id = $this->input->post('learning_path_id');
		$score = $total_score;
        $this->Quiz_model->save_score($learning_path_id, $score);

		$data['questions'] = $this->Quiz_model->get_quiz_by_learningpath($id);
		$data['quizes'] = $this->LearningPath_model->get_learning_path_by_id($id);
		$data['total_questions'] = $this->Quiz_model->count_quiz_by_learningpath($id);
		$data['correct_answers'] = $correct_answers;
		$data['score'] = $total_score;
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/learning_path/result';

		$this->load->view('users/layouts', $data);

	}

	public function history()
	{
		$data['history'] = $this->Quiz_model->get_all_quiz_history();
		$data['navbar'] = $this->load->view('users/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('users/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'users/learning_path/history';

		$this->load->view('users/layouts', $data);

	}

	public function create_review()
	{
		$data = array(
            'name' => $this->input->post('name'),
            'position' => $this->input->post('position'),
            'review_description' => $this->input->post('review_description'),
        );
        $review_id = $this->Review_model->create_review($data);
        if ($review_id) {
            $this->session->set_flashdata('success', 'Reviews successfully added.');
        } else {
            $this->session->set_flashdata('error', 'Failed to create Reviews.');
        }
        redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}
}

