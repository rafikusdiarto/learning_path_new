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

class Step extends CI_Controller
{
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LearningPath_model');
		$this->load->model('Step_model');
		$this->load->library('session');
	}

	public function index(){
		$data['step'] = $this->Step_model->get_all_step();
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/steps/index';

		$this->load->view('leader/layouts', $data);
	}

	public function add_step(){
		$data['learning_path'] = $this->LearningPath_model->get_all_learning_path();

		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/steps/add';

		$this->load->view('leader/layouts', $data);

	}

	public function create(){
		$learning_paths_id =  $this->input->post('learning_path_id');
		$step = $this->input->post('step');
		$descrition = $this->input->post('description');

		$data = array();

		foreach ($learning_paths_id as $key => $learning_path_id) {
            $data[] = array(
                'learning_path_id' => $learning_path_id,
                'step' => $step[$key],
                'description' => $descrition[$key]
            );
        }

        $quiz_id = $this->Step_model->create_step($data);
        if ($quiz_id) {
            $this->session->set_flashdata('success', 'Step created successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to create Step.');
        }
        redirect('leader/step');
	}
	
	public function edit_step($id){
		$data['step'] = $this->Step_model->get_step_by_id($id);
		$data['learning_path'] = $this->Step_model->get_all_step();
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/steps/edit';

		$this->load->view('leader/layouts', $data);
	}

	public function update_step($id){
		$data = array(
            'learning_path_id' => $this->input->post('learning_path_id'),
            'step' => $this->input->post('step'),
            'description' => $this->input->post('description'),
        );
        $step_id = $this->Step_model->update_step($id, $data);
        if ($step_id) {
            $this->session->set_flashdata('success', 'Step updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update Step.');
        }
        redirect('leader/step');
	}

	public function delete_step($id)
    {
		$affected_rows = $this->Step_model->delete_step($id);

        if ($affected_rows) {
			$this->session->set_flashdata('success', 'Step delete successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delte Step.');
		}
		redirect('leader/step');
    }
}

