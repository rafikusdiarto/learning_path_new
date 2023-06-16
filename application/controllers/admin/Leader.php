<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Leader
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

class Leader extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('Leader_model');
		$this->load->library('encryption');
  }

  public function index()
  {
		$data['leader'] = $this->Leader_model->get_all_leader();
		$data['sidebar'] = $this->load->view('admin/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('admin/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('admin/layouts/components/footer', '', TRUE);
		$data['content_view'] = "admin/master/leader/index";

		$this->load->view('admin/layouts', $data);

  }

	public function add_leader()
	{
		$data['sidebar'] = $this->load->view('admin/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('admin/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('admin/layouts/components/footer', '', TRUE);
		$data['content_view'] = "admin/master/leader/add";

		$this->load->view('admin/layouts', $data);
	}

	public function create_leader()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'join_at' => $this->input->post('join_at'),
		);
		$leader_id = $this->Leader_model->create_leader($data);
		if ($leader_id) {
				$this->session->set_flashdata('success', 'Leader successfully added.');
		} else {
				$this->session->set_flashdata('error', 'Failed to create Leader.');
		}
		redirect('admin/leader');
	}

	public function delete_leader($id)
	{
		$leader_id = $this->Leader_model->delete_leader($id);

    if ($leader_id) {
			$this->session->set_flashdata('success', 'Leader successfully delete.');
		} else {
				$this->session->set_flashdata('error', 'Failed to delete Leader.');
		}
		redirect('admin/leader');
	}

}


/* End of file Leader.php */
/* Location: ./application/controllers/Leader.php */
