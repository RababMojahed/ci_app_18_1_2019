<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>		
		<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">-->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/style.css">
		<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<style type="text/css">
	.bootstrap-select .dropdown-toggle {
    background-color: #fafafa;
    border: 1px solid #e5e5e5 !important;
    border-radius: 4px !important;
    color: #919191;
    padding: 10px 12px;
    font-weight: 300;
    letter-spacing: 0px;
    text-transform: none;
}
</style>
	</head>	
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="<?php echo base_url();?>">CI App</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url();?>about">About</a>
		      </li>
		      <li class="nav-item dropdown active">
		        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>/services" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Our Services
		        </a>
		        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item " href="<?php echo base_url();?>/services">Dental</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?php echo base_url();?>/tooth_clinic">Family medicine </a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">other opedic</a>
		        </div>		        
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url();?>Doctor_c/dispaly_doctors">Doctors</a>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
		      </li>
		    </ul>
		    <?php if(!$this->session->userdata('logged_in')):?>
		    	<ul class='nav navbar-nav navbar-right '>
		    	<li>
		    	  <a class="nav-link" href="<?php echo base_url();?>user_c/login">Login</a>
			    </li>
			    </ul>
			    <ul class='nav navbar-nav navbar-right '>
			    	<li>
			    	  <a class="nav-link" href="<?php echo base_url();?>user_c/register">Sign Up</a>
			    </li>
			    </ul>
		    <?php endif;?>
		    <?php if($this->session->userdata('logged_in')):?>
		    	<ul class='nav navbar-nav navbar-right '>
		    	<li>
		    	  <a class="nav-link" href="<?php echo base_url();?>services_c/create_service">Create Service</a>
		      </li>
			    </ul>
			    <ul class='nav navbar-nav navbar-right '>
		    	<li>
		    	  <a class="nav-link" href="<?php echo base_url();?>doctor_c/create_doctor">Create Doctor</a>
		      </li>
			    </ul>
			    
			    <ul class='nav navbar-nav navbar-right '>
			    	<li>
			    	  <a class="nav-link" href="<?php echo base_url();?>user_c/logout">Log out</a>
			    </li>
			    </ul>
		    <?php endif;?>
		    	<ul class='nav navbar-nav navbar-right'>
			    	<li>
			    	  <a class="nav-link btn-primary mr-sm-2 form-control" href="<?php echo base_url();?>patient_c/book_appointment">Book Appointment</a>
			    	</li>
			    </ul>

		     

		   <!--  <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form> -->
		  </div>
		</nav>
		<div class='container-fluid' style="padding-right:0px; padding-left: 0px;">
		<?php 
			/*echo br(1);*/
			if($this->session->flashdata('user_registered')):?>
				<p class="alert alert-success"><?php echo $this->session->flashdata('user_registered');?></p>
			<?php endif;?>
			<?php if($this->session->flashdata('user_loggedin')):?>
				<p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedin');?></p>
			<?php endif;?>
			<?php if($this->session->flashdata('login_failed')):?>
				<p class="alert alert-danger"><?php echo $this->session->flashdata('login_failed');?></p>
			<?php endif;?>
			<?php if($this->session->flashdata('user_loggedout')):?>
				<p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedout');?></p>
			<?php endif;?>
			<?php if($this->session->flashdata('user_booked_appt')):?>
				<p class="alert alert-success"><?php echo $this->session->flashdata('user_booked_appt');?></p>
			<?php endif;?>

		<?php ?>

	