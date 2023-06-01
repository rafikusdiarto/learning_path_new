<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuthController extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('User_model');
		$this->load->library('session');
		
    }
	
	public function index()
	{
		$this->load->view('users/layouts/auth/login');
	}

    public function authenticate()
    {
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", "required");
		
        if ($this->form_validation->run() == FALSE) {
            // Display login form with validation errors
            $this->load->view('users/layouts/auth/login');
        } else {

			// Validation passed, process login
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->login($email, $password);

            if ($user) {
                // Login successful, store user data in session
                $this->session->set_userdata('user_id');
                redirect('user/dashboard'); // Change 'dashboard' to the desired redirect URL
            } else {
                // Login failed, show error message
                $data['error'] = 'Invalid username or password';
                $this->load->view('users/layouts/auth/login', $data);
            }
        }
    }

    public function logout()
    {
        // Remove admin user data from session
        $this->session->unset_userdata('admin_user');
        redirect('login');
    }
}
