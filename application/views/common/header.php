<!DOCTYPE html>
<html lang="eng">

<head>
  
  
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Results</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="manifest" href="site.webmanifest">
  <!--  Enable this if there is internet Connection only
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.min.css");?>"> 

  <?php if($this->uri->segment(1)=="MainPage"): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/MainPage.css");?>"> 
<?php endif ?>
<?php if($this->uri->segment(1)=="AdminLogin"): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/AdminLogin.css");?>"> 
<?php endif ?>
<?php if($this->uri->segment(1)=="StudentLogin" ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/StudentLogin.css");?>"> 
<?php endif ?>
<?php if($this->uri->segment(1)=="AdminPage" ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/AdminPage.css");?>"> 
<?php endif ?>
<?php if($this->uri->segment(1)=="StudentPage" ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/StudentPage.css");?>"> 
<?php endif ?>


</head>

<body>
  
  <?php if($this->uri->segment(1)=="AdminLogin" || $this->uri->segment(1)=="MainPage" || $this->uri->segment(1)=="StudentLogin"): ?>
    <div class="row navbar navbar-default" style="height:5vh; font-family:cursive; font-size:125%; margin-right:0px;">
       <div class="col-md-6">
       </div>
    <div class="col-md-6">
       <div class="row">
         <div class="col-md-4 d-flex  justify-content-center align-items-center" style="background-color:lightyellow">
          <a href="<?php echo base_url("/index.php/MainPage"); ?>">Home</a>
         </div>
        <div class="col-md-4 d-flex  justify-content-center align-items-center" style="background-color:lightyellow">
         <a href="<?php echo base_url("/index.php/AdminLogin"); ?>">Admin  Login</a>
        </div>
        <div class="col-md-4 d-flex  justify-content-center" style="background-color:lightyellow">
          <a href="<?php echo base_url("/index.php/StudentLogin"); ?>">Student  Login</a>
       </div>
    </div>
  </div>
  </div>
  <?php endif ?>
  
  <?php if($this->uri->segment(1)=="AdminPage"): ?>
    <nav class="navbar navbar-expand-lg navbar-light   fixed-top" style=" position:relative; background-color: #e3f2fd; ">
    <span class="navbar-brand" href="#">ADMIN</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="font-weight:700; font-size:100%;;">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url("/index.php/AdminPage/Home"); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item " >
          <a class="nav-link" href="<?php echo base_url("/index.php/AdminPage/AddNewStudent"); ?>">Add New Student</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url("/index.php/AdminPage/UpdateStudentDetails"); ?>">Update Student Details</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url("/index.php/AdminPage/ViewStudentDetails"); ?>">View Student Details</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url("/index.php/AdminPage/UpdateStudentMarks"); ?>">Update Student Marks</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-item nav-link " href="<?php echo base_url("index.php/AdminLogin/logout"); ?>">Logout(<?php echo($this->session->username); ?>)</a>        
        </li>
      </ul>
    </div>
  </nav>

  <?php endif ?>