<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('OwnerModal', 'OWNER');
	}
	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$tableName = 'email_history';
			$data['emailInfo'] =  $this->OWNER->ShowOwner($tableName);
			$this->load->view('infection_dashboard', $data);
			$this->load->view('footer');
		} else {
			redirect('view_login');
		}
	}


	// public function dashboard()
	// {	
	// 	$this->load->model('Main_modal');
	// 	$data['view']=$this->MM->GetUsers();	
	// 	$this->load->view('dashboard' , $data );

	// }
}
