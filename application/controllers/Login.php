<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login', 'ML');
		$this->load->model('OwnerModal', 'OWNER');
	}

	public function index()
	{
		if ($this->session->userdata('name')) {

			if ($this->session->userdata('role_id') == OWNER) {
				redirect('owner_property');
			}
			if ($this->session->userdata('role_id') == TENANT) {
				redirect('tenant_tenancy');
			} else {
				redirect('infection_dashboard');
			}
		} else {
			$this->load->view('view_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('owner_tenant_id');
		$this->session->unset_userdata('role_name');
		$this->session->unset_userdata('profile_picture');
		$this->load->view('view_login');
	}

	public function userAuth()
	{

		$arr['email'] = $this->input->post('user_name');
		$arr['password'] = base64_encode($this->input->post('password'));
		$this->form_validation->set_rules('user_name', 'User_name', 'required');
		$this->form_validation->set_rules('password', 'User_password', 'required');
		if ($this->form_validation->run()) {
			$check = $this->ML->user_auth($arr);

			if (count($check) > 0) {
				$this->session->set_userdata('name', $check[0]['user_name']);
				$this->session->set_userdata('user_id', $check[0]['user_id']);
				$this->session->set_userdata('user_name', $check[0]['user_name']);
				$this->session->set_userdata('email', $check[0]['email']);
				$this->session->set_userdata('role_id', $check[0]['role_id']);
				$this->session->set_userdata('owner_tenant_id', $check[0]['owner_tenant_id']);
				$this->session->set_userdata('role_name', $check[0]['role_name']);
				$this->session->set_userdata('profile_picture', $check[0]['profile_picture']);
				//	log_message("debug","SESSION VALUE :: ".$this->session->userdata('name'));
				if ($this->session->userdata('role_id') == OWNER) {
					redirect('owner_property');
				}
				if ($this->session->userdata('role_id') == TENANT) {
					redirect('tenant_tenancy');
				} else {
					redirect('infection_dashboard');
				}
			} 
			// else {
			// 	$this->load->view('view_login');

			// }
		}
		$this->load->view('view_login');
	}

	public function landingPage()
	{

		log_message("debug", "LANDING SESSION VALUE :: " . $this->session->userdata('name'));
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$tableName = 'email_history';
			$data['emailInfo'] =  $this->OWNER->ShowOwner($tableName);
			$this->load->view('infection_dashboard', $data);
			$this->load->view('footer');
		} else {
			$this->load->view('view_login');
		}
	}
}
