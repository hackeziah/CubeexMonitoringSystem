<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{

    function __construct()
    {
        parent::__construct();				
        if($this->session->username == "")
        {
            redirect('login');
        }
        //$this->load->model('LoginModel','LoginModel');
        
    }

	public function index()
	{
        $this->load->model('Employee_mod');
	 	$data['emp'] = $this->Employee_mod->getEmployee();
	 	$this->load->view('admin/Registration',$data);

	}

    public function addEmployee()
    {

        $data = array(
            'emp_id' => $this->input->post('emp_id'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'middlename' => $this->input->post('middlename'),
            'position' => $this->input->post('position'),
            'email' => $this->input->post('email'),
            'date' => $this->input->post('birthday'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address')
        );

         $insert = $this ->Employee_mod->insert($data);
         echo json_encode(array("status" => TRUE ));
    
    }
    


}