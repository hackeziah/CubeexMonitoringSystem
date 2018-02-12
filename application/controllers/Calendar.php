<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller
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
		 	
		 	$this->load->view('admin/Calendar');

		 }

}