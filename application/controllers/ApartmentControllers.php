<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApartmentControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
       $this->load->model('ApartmentModal', 'APARTMENT');
       $this->load->model('OwnerModal', 'OWNER');
		
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
			$arrPost = $this->input->post();
        	$apartmentId=$arrPost['id'];
        	$tableName='apartment';
        	$data['apartmentInfo'] =  $this->OWNER->ShowOwnerEdit($tableName,$apartmentId);
		return	$this->load->view('apartment_edit',$data);
		
		} else {
			redirect('login');
		}
	}
	public function ApartmentVerification()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
            $tableName = 'apartment';
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $apartmentCount=count($arrPost['apartment_num']);
            for ($i=0; $i <$apartmentCount; $i++) { 
            	$arrInfo['apartment_number'] = strtolower($arrPost['apartment_num'][$i]);
            	 $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            }
            if ($check == true) {
                redirect('/apartment/'.$arrPost['building_id']);
            } else {
                die("asd");
            }
		
		} else {
			redirect('login');
		}
	}
	public function ApartmentExit()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
			
			$apartmentName=$arrPost['apartmentName'];
			$buildingId=$arrPost['building_id'];
			$tableName='apartment';
            $apartmentInfo = $this->APARTMENT->ApartmentExit($tableName,$apartmentName,$buildingId);
            echo json_encode($apartmentInfo);
			
		} else {
			redirect('login');
		}
	}
	public function ApartmentDelete()
	{
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'apartment';
            $recordId = $arrPost['id'];
            $arrInfo['status'] = "inactive";
			$check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            // if ($check == true) {
            //     redirect('/'.$tableName);
            // } 

        }
	}
	public function ApartmentUpdate()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'apartment';
            $recordId = $arrPost['record_id'];
            $buildingId = $arrPost['buildingId'];
            $arrInfo['apartment_number'] = $arrPost['apartment_num'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
			$check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            if ($check == true) {
                redirect('/apartment/'.$buildingId);
            } else {
              
            }

        }

    }


}
