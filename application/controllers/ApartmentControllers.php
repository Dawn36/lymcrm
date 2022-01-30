<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApartmentControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
       $this->load->model('ApartmentModal', 'APARTMENT');
		
	}


	public function LoadApartmentScreen($buildingId)
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['buildingId']=$buildingId;
			$tableName='apartment';
            $data['apartmentInfo'] =$this->APARTMENT->ShowApartment($tableName,$buildingId);
			$this->load->view('apartment_show',$data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function LoadAddScreen()
	{
		if ($this->session->userdata('name')) {
		//	$this->load->view('main_header');
		//	$this->load->view('sidebar');
		return	$this->load->view('apartment_add');
		//	$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function LoadEditScreen()
	{
		if ($this->session->userdata('name')) {
		//	$this->load->view('main_header');
		//	$this->load->view('sidebar');
		return	$this->load->view('apartment_edit');
		//	$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

}
