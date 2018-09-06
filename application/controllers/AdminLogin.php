<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library("form_validation");
		$this->load->library("session");
		$this->load->model("AdminLoginModel");
		
}

	public function index()
	{
		if(($this->session->loggedin==true) && ($this->session->type=="admin"))
		{
			redirect("AdminPage");
  	}
		else {
			$this->load->view('common/header.php');
			$this->load->view("AdminLoginView.php");
			$this->load->view('common/footer.php');
		}
	}
	public function check_admin()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required'); 
		
		
		 
		if( $this->form_validation->run() == TRUE )
		{
			
			$username_ad=$this->input->post("username");
		  $password_ad=$this->input->post("password"); 
		 
				if($this->AdminLoginModel->check_user($username_ad))
				{
					$data= $this->AdminLoginModel->get_user_details($username_ad);
					if(($data['ad_username']==$username_ad) && ($data['ad_password']==$password_ad))
						 {
							 $this->session->set_userdata(array(
													 "loggedin" => true,
													 "type" =>"admin",
													 "username"=> $data['ad_username']
						 ));
								 redirect("AdminPage");
						}
						else
						{
							redirect("AdminLogin");				 
		       	}
				
				}
				else{
							redirect("AdminLogin");				 
		        	}
				}
				
		else{
			redirect("AdminLogin");
		}
	}
	 
	public function logout(){
		$this->session->sess_destroy();
		redirect("AdminLogin");
	}
}
