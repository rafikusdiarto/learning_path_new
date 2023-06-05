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
	$this->load->model('LearningPath_model');
	$this->load->library('session');
	$this->load->helper(array('form', 'url'));
	$this->load->library('upload');
  }

  public function index()
  {
		$data['learning_path'] = $this->LearningPath_model->get_all_learning_path();
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/learning_path/index';

    $this->load->view('leader/layouts', $data);
  }

	public function add()
	{
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['content_view'] = 'leader/learning_path/add';

		$this->load->view('leader/layouts', $data);
	}

	public function create()
    { 	

		$data = [
			'title' => $this->input->post('title'),
			'link_youtube' => $this->input->post('link_youtube'),
			'description' => $this->input->post('description'),
		];

        if (!empty($_FILES['thumbnail'])) {
            $config['upload_path'] = FCPATH. './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048; // 2MB

            $this->upload->initialize($config);

            if ($this->upload->do_upload('thumbnail')) {
                $uploadData = $this->upload->data();
                $data['thumbnail'] = $uploadData['file_name'];
            }
        }

        $learning_path_id = $this->LearningPath_model->create_learning_path($data);
        if ($learning_path_id) {
            $this->session->set_flashdata('success', 'Learning Path created successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to create Learning Path.');
        }
        redirect('leader/learning-path');
        // Upload gambar
    }

	public function edit_learning_path($id)
	{
		$data['sidebar'] = $this->load->view('leader/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('leader/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('leader/layouts/components/footer', '', TRUE);
		$data['learning_path'] = $this->LearningPath_model->get_learning_path_by_id($id);
		$data['content_view'] = 'leader/learning_path/edit';

		$this->load->view('leader/layouts', $data);
	}

	public function update_learning_path($id) {

		$data = [
			'title' => $this->input->post('title'),
			'link_youtube' => $this->input->post('link_youtube'),
			'description' => $this->input->post('description'),
		];

        $affected_rows = $this->LearningPath_model->update_learning_path($id, $data);

        if ($affected_rows) {
            redirect('leader/learning-path');
        }
    }

    public function delete_learning_path($id)
    {
		$affected_rows = $this->LearningPath_model->delete_learning_path($id);

        if ($affected_rows) {
            redirect('leader/learning-path');
        }
    }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
