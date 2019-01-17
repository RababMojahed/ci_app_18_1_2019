<?php
class Patient_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Patient_m');
		$this->load->library('form_validation');
		$data['page_name']='Book Your Appointment';
	}//end __construct function
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('patient_pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function book_appointment(){
		$data['page_name']='Book Your Appointment';
		$this->form_validation->set_rules('p_name','Name','required');
		$this->form_validation->set_rules('p_email','Email','required');
		$this->form_validation->set_rules('p_phone','Phone Number','required');
		$this->form_validation->set_rules('appt_date','Appointment Date','required');

		if($this->form_validation->run()===FALSE){
			$this->show_general('Book Your Appointment','book_appointment',$data);
		}
		else{			
			$this->session->set_flashdata('user_booked_appt','You are booked appointment successfully');
			redirect('services_c/index');
			die('Continue');
		}//end if check
	}//end register function
	 }//end Patient_c class