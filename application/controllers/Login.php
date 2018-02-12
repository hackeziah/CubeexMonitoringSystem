<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();				
        // if($this->session->username == "")
        // {
        //     redirect('login');
        // }
        $this->load->model('Login_mod');
    }
	public function index()
	{
		 	
	$this->load->view('login/login');

	}

	// function login()
	// {
	// 	// $data['title'] = 'Login';
	// 	$this->load->view("login/login");

	// }
	function loginValidation ()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('Login_mod');

			if($this->Login_mod->canLogin($username,$password))
			{
				$session_data =  array(
					'username' => $username 
					 
				);
					$this->session->set_userdata($session_data);
					redirect(base_url(). 'dashboard');				
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url(). 'login');		
			}

		}

		else
		{

			$this->index();
		}

	}

	function dashboard()
	{
		if ($this->session->userdata('username') != '')
		{
			// $data['title'] = 'Sample Login';
			$this->session->userdata('username');
			$this->session->userdata('password');
			$this->load->view("admin/dashboard");
		}

		else
		{
			redirect(base_url().'login');
		}
	}

	function logout()
	{

		// $this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect(base_url().'login');

	}




}