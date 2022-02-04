<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	} 
	public function index()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('infection_dashboard');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
		
	}


	// public function dashboard()
	// {	
	// 	$this->load->model('Main_modal');
	// 	$data['view']=$this->MM->GetUsers();	
	// 	$this->load->view('dashboard' , $data );

	// }
}
