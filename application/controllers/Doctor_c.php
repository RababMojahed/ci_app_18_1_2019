<?php
class Doctor_c extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Doctor_m');
	}//end __construct function
	
	public function show_general($page_title,$target_page,$data){

		$data['page_name']=$page_title;		
		$this->load->view('templates/header');
		$this->load->view('doctor_pages/'.$target_page,$data);
		$this->load->view('templates/footer');

	}//end show_general function
	public function dispaly_doctors(){
		$data['page_name']='Our Team';
		$this->show_general('Our Team','doctors',$data);
	}//end display_doctors function

	public function display_doctor_detls(){
		$data['page_name']='Doctor details';
		$this->show_general('Doctor details','doctor_details',$data);
	}//end display_doctor_detls function
}//end Doctor_c class
	?>