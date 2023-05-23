<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LeaderAuthController extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('Leader_model');
		$this->load->library('session');
		
    }
	
	public function index()
	{
		$this->load->view('leader/layouts/auth/login');
	}

    public function authenticate()
    {
        // Validate the login form data
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", "required");
		
        if ($this->form_validation->run() == FALSE) {
            // Display login form with validation errors
            $this->load->view('leader/layouts/auth/login');
        } else {

			// Validation pas6sed, process login
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->Leader_model->login($email, $password);

            if ($user) {
                // Login successful, store user data in session
                $this->session->set_userdata('user_id');
                redirect('leader/dashboard'); // Change 'dashboard' to the desired redirect URL
            } else {
                // Login failed, show error message
                $data['error'] = 'Invalid username or password';
                $this->load->view('leader/layouts/auth/login', $data);
            }
        }
    }

    public function logout()
    {
        // Remove leader user data from session
        $this->session->unset_userdata('leader_user');
        redirect('login-leader');
    }
}
