<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library("form_validation");
		$this->load->library("session");
		$this->load->model("AdminPageModel");
		
}

	public function index()
	{
		 if(($this->session->loggedin==true) && ($this->session->type=="admin")){
	  		redirect("AdminPage/Home");
    	}
	    else {
	   	redirect("AdminLogin");
	    }
	}
	
	public function loadPage($page){
		$this->load->view("common/header.php");
		$this->load->view($page);
		$this->load->view("common/footer.php");
	}
	public function Home()
	{
		$this->loadPage("Home");
	}
	public function AddNewStudent()
	{
		$this->loadPage("AddNewStudent");
	}
	public function UpdateStudentDetails()
	{
		$this->loadPage("UpdateStudentDetails");
	}
	public function ViewStudentDetails()
	{
		$this->loadPage("ViewStudentDetails");
	}
	public function UpdateStudentMarks()
	{
		$this->loadPage("UpdateStudentMarks");
	}
	
	public function InsertStudent()
	{
		$this->form_validation->set_rules('name','name', 'required');
		$this->form_validation->set_rules('class','class','required');
		$this->form_validation->set_rules('section', 'section', 'required');
		$this->form_validation->set_rules('rollno', 'rollno', 'required');
		$this->form_validation->set_rules('dob', 'dob', 'required');
		$this->form_validation->set_rules('yoj', 'yoj', 'required');
		$this->form_validation->set_rules('father_name', 'father_name', 'required');
		
		 
		if( $this->form_validation->run() == TRUE )
		{
			
			$name=$this->input->post("name");
			$class=(int)$this->input->post("class");
			$section=$this->input->post("section");
			$rollno=(int)$this->input->post("rollno");
			$dob=$this->input->post("dob");
			$yoj=(int)$this->input->post("yoj");
			$father_name=$this->input->post("father_name");
			$father_mobile=(int)$this->input->post("father_mobile");
			$father_email=$this->input->post("father_email");
			
			if($father_mobile==0)
			 $father_mobile=null;
			 
			 if($father_email=="")
				$father_email=null;
				
			 $data=array(
			                        	 "name"       => $name,
			                         	 "class"        => $class,
		                	        	 "section"    =>	$section, 
			                        	  "rollno"     =>   $rollno,
			                 	         "dob"         =>  $dob,
				                        "yoj"           =>  $yoj,
                      	 "father_name"  =>  $father_name,
                      	"father_mobile"	=>	 $father_mobile,
                          "father_email"  =>  $father_email
		                       ); 
				 if($this->AdminPageModel->InsertStudent($data))
					{
						$data["message"]="Successfully Inserted";
				
            redirect("AdminPage/AddNewStudentSuccess");

						
					} 
													 
    	}

	
}

public function AddNewStudentSuccess()
{
	if($this->uri->segment(2) == "AddNewStudentSuccess"){
		echo <<<a
<div class="alert alert-danger">
success
</div>
a;
	
}


}
}