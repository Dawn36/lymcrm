<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user', 'MUSER');
		$this->load->model('Model_lovs', 'MLOVS');
	}


	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['users'] = $this->MUSER->UserShow();
			$this->load->view('admin_show', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersAdd()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['role'] = $this->MUSER->UserRoleShow();
			$this->load->view('users_add', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersAddVerify()
	{
		$arrUserInfo['user_name'] = $this->input->post('user_name');
		$arrUserInfo['user_password'] = md5($this->input->post('password'));
		$arrUserInfo['user_role_id'] = $this->input->post('users_role');
		$arrUserInfo['user_creation'] = date("Y-m-d");
		$arrUserInfo['user_status'] = 1;
		$check = $this->MUSER->UesrAdd($arrUserInfo);
		if ($check == true) {
			redirect('/Users');
		}
	}
	public function UserEdit($id)
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['edit'] = $this->MUSER->UserShowEdit($id);
			$data['role'] = $this->MUSER->GetRole();
			$this->load->view('users_edit', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersEditVerify()
	{
		$arrUserInfoUpdate['user_name'] = $this->input->post('user_name');
		$arrUserInfoUpdate['user_role_id'] = $this->input->post('users_role');
		$arrUserInfoUpdate['user_updation'] = date("Y-m-d");
		$id = $this->input->post('id');
		$check = $this->MUSER->UesrUpdate($id, $arrUserInfoUpdate);
		if ($check == true) {
			redirect('/Users');
		}
	}
	public function UsersRole()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['role'] = $this->MUSER->UserRoleShow();
			$this->load->view('users_role_show', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersRoleAdd()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('users_role_add');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersRoleAddVerify()
	{
		$arrInfo['role_name'] = $this->input->post('user_role');
		$arrInfo['role_creation'] = date("Y-m-d");
		$check = $this->MUSER->UesrRoleAdd($arrInfo);
		if ($check == true) {
			redirect('/Users/UsersRole');
		}
	}
	public function UsersRoleEdit($id)
	{

		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['edit'] = $this->MUSER->UserRoleShowEdit($id);
			$this->load->view('users_role_edit', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UsersRoleEditVerify($id)
	{

		if ($this->session->userdata('name')) {
			$arrUpdate['role_name'] = $this->input->post('role');
			$arrUpdate['role_updation'] = date("Y-m-d");
			$update = $this->MUSER->UserRoleUpdate($id, $arrUpdate);
			if ($update == true) {
				redirect('/Users/UsersRole');
			}
		} else {
			redirect('login');
		}
	}
}
