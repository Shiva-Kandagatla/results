<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library("form_validation");
		$this->load->library("session");
		$this->load->model("StudentLoginModel");
		
}

	public function index()
	{
		if(($this->session->loggedin==true) && ($this->session->type=="student"))
		{
			redirect("StudentPage");
  	}
		else {
			$this->load->view('common/header.php');
			$this->load->view("StudentLoginView.php");
			$this->load->view('common/footer.php');
		}
	}
	public function check_student()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required'); 
		
		$username=$this->input->post("username");
		$password=$this->input->post("password"); 
		 
		if( $this->form_validation->run() == TRUE )
		{
				if($this->StudentLoginModel->check_user($username))
				{
					$data= $this->StudentLoginModel->get_user_details($username);
					if(($data['username']==$username) && ($data['password']==$password))
						 {
							 $this->session->set_userdata(array(
													 "loggedin" => true,
													 "type"=> "student",
													 "admno" =>$data['admno'],
													 "username" =>$data['username']
						 ));
								 redirect("StudentPage");
						}
						else
						{
							redirect("StudentLogin");				 
		       	}
				
				}
				else{
							redirect("StudentLogin");				 
		        	}
				}
				
		else{
			redirect("StudentLogin");
		}
	}
	 
	public function logout(){
		$this->session->sess_destroy();
		redirect("StudentLogin");
	}
}
