<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login', 'ML');
	} 

	public function index()
	{
		if ($this->session->userdata('name')) {
			redirect('landing_page');
		
		} else {
			$this->load->view('view_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->load->view('view_login');
	}

	public function userAuth()
	{
		
		 $arr['name'] = $this->input->post('user_name');
		 $arr['password'] = base64_encode($this->input->post('password'));
		 $this->form_validation->set_rules('user_name','User_name','required');
		 $this->form_validation->set_rules('password','User_password','required');
		if($this->form_validation->run()){
			$check = $this->ML->user_auth($arr);
			if(count($check) > 0)
			{	
				$this->session->set_userdata('name',$arr['name']);
				$this->session->set_userdata('user_id',$check[0]['user_id']);
				$this->session->set_userdata('role_code', $check[0]['user_role_id']);
				$this->session->set_userdata('role_name', $check[0]['role_name']);
				log_message("debug","SESSION VALUE :: ".$this->session->userdata('name'));
				redirect('landing_page');
			}
			else
			{
				redirect('login');
			}
		}

	}

	public function landingPage(){

		log_message("debug","LANDING SESSION VALUE :: ".$this->session->userdata('name'));
		if($this->session->userdata('name')){
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('infection_dashboard');
			$this->load->view('footer');
		} else {
			redirect('login');
		}

	}

}