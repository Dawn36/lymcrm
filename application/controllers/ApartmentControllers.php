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
		$arrPost = $this->input->post();
        $data['buildingId']=$arrPost['building_id'];
        
		return	$this->load->view('apartment_add',$data);
		
		} else {
			redirect('login');
		}
	}
	public function LoadEditScreen()
	{
		if ($this->session->userdata('name')) {
		
		return	$this->load->view('apartment_edit');
		
		} else {
			redirect('login');
		}
	}
	public function ApartmentVerification()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
            print_r($arrPost);
            die();
            $tableName = 'users';
            $arrInfo['owner_tenant_id'] = '0';
            $arrInfo['role_id'] = SUB_ADMIN;
            $arrInfo['email'] = $arrPost['email_name'];
            $arrInfo['name'] = $arrPost['admin_name'];
            $arrInfo['phone_number'] = $arrPost['contact_number'];
            $arrInfo['password'] = base64_encode($arrPost['admin_password']);
            $arrInfo['status'] = 'active';
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/admin');
            } else {
                die("asd");
            }
		
		} else {
			redirect('login');
		}
	}

}
