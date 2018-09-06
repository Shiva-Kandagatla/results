<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library("form_validation");
		$this->load->library("session");
}

	public function index()
	{
		 if(($this->session->loggedin==true) && $this->session->type=="student"){
		$this->load->view('common/header.php');
		$this->load->view("StudentPageView.php");
		$this->load->view('common/footer.php');
	}
	else {
		redirect("StudentLogin");
	}
		
	}
	
}
