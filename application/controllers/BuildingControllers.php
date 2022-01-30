<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuildingControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
       $this->load->model('OwnerModal', 'OWNER');
	}


	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$tableName='building';
            $data['buildingInfo'] =$this->OWNER->ShowOwner($tableName);
			$this->load->view('building_show',$data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function LoadAddScreen()
	{
		if ($this->session->userdata('name')) {
			//$this->load->view('main_header');
			//$this->load->view('sidebar');
		return	$this->load->view('building_add');
			//$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function LoadEditScreen()
	{
		if ($this->session->userdata('name')) {
		//	$this->load->view('main_header');
		//	$this->load->view('sidebar');
		return	$this->load->view('building_edit');
		//	$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

}
