<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Member
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

class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('User_model');
		$this->load->library('encryption');
  }

  public function index()
  {
		$data['member'] = $this->User_model->get_all_member();
    $data['sidebar'] = $this->load->view('admin/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('admin/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('admin/layouts/components/footer', '', TRUE);
		$data['content_view'] = "admin/master/member/index";

		$this->load->view('admin/layouts', $data);
  }

	public function add_member()
	{
		$data['sidebar'] = $this->load->view('admin/layouts/components/sidebar', '', TRUE);
		$data['navbar'] = $this->load->view('admin/layouts/components/navbar', '', TRUE);
		$data['footer'] = $this->load->view('admin/layouts/components/footer', '', TRUE);
		$data['content_view'] = "admin/master/member/add";

		$this->load->view('admin/layouts', $data);
	}

	public function create_member()
	{
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			);
		$member_id = $this->User_model->create_member($data);
		if ($member_id) {
				$this->session->set_flashdata('success', 'Member successfully added.');
		} else {
				$this->session->set_flashdata('error', 'Failed to create Member.');
		}
		redirect('admin/member');
	}

	public function delete_member($id)
	{
		$member_id = $this->User_model->delete_member($id);

    if ($member_id) {
			$this->session->set_flashdata('success', 'Member successfully delete.');
		} else {
				$this->session->set_flashdata('error', 'Failed to delete Member.');
		}
		redirect('admin/member');
	}

}


/* End of file Member.php */
/* Location: ./application/controllers/Member.php */
