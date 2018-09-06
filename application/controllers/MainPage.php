<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
}

	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view("MainView.php");
		$this->load->view('common/footer.php');
		
	}
	
}

