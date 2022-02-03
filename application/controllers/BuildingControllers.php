<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuildingControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
       $this->load->model('OwnerModal', 'OWNER');
       $this->load->model('BuildingModal', 'BUILDING');
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
		
		return	$this->load->view('building_add');
	
		} else {
			redirect('login');
		}
	}
	public function LoadEditScreen()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
		$bildingId=$arrPost['bilding_id'];
        $tableName='building';
        $data['bildingInfo'] =  $this->OWNER->ShowOwnerEdit($tableName,$bildingId);
		return	$this->load->view('building_edit',$data);
	
		} else {
			redirect('login');
		}
	}
	public function BuildingVerification()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
		 	$tableName = 'building';
            $arrInfo['building_name'] = strtolower($arrPost['building_name']);
            $arrInfo['building_address'] = $arrPost['building_address'];
            $arrInfo['building_community'] = $arrPost['community'];
            $arrInfo['status'] = 'active';
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/building');
            } else {
                die(" ");
            }
		} else {
			redirect('login');
		}
	}
	 public function UpdateBuilding()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'building';
            $recordId = $arrPost['record_id'];
            $arrInfo['building_name'] = $arrPost['building_name'];
            $arrInfo['building_address'] = $arrPost['building_address'];
            $arrInfo['building_community'] = $arrPost['community'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
			$check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            if ($check == true) {
                redirect('/'.$tableName);
            } else {
              
            }

        }

    }
	public function BuildingExit()
	{
		if ($this->session->userdata('name')) {
			 $arrPost = $this->input->post();
       		 $buldingName = $arrPost['buldingName'];
       		 $tableName = 'building';
        	$data = $this->BUILDING->BuildingExit($buldingName,$tableName);
        	if ($data >= 1) {
            	echo json_encode($data);
        	} else {
            	return false;
        	}
		} else {
			redirect('login');
		}
	}
	public function BuildingCsvImportModal()
	{
		return  $this->load->view('building_csv_import_modal');
	}
	public function BuildingCsv()
	{

		$arrPost = $this->input->post();
		$tableName = $arrPost['tablename'];

		$filename = $_FILES["building_csv"]["tmp_name"];
		log_message('debug', 'BuildingCsv : ' . print_r($_FILES, TRUE));
		if ($_FILES["building_csv"]["size"] > 0) {
			$file = fopen($filename, "r");
			$header = fgetcsv($file);

			$name = $header[0];
			$address = $header[1];
			$community = $header[2];
			$appartmentNo = $header[3];

			if (
				$name != "building_name" ||
				$address != "building_address" ||
				$community != "building_community" ||
				$appartmentNo != "apartment_number"
			) {
				redirect('building');
				// echo '<script>alert("Column Not Matched.")</script>';
				// }
				// exit();
				return false;
			}

			while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
				$dataArr['building_name'] = $data[0];
				$dataArr['building_address'] = $data[1];
				$dataArr['building_community'] = $data[2];
				$apartment_number = $data[3];
				$data['buildingData'] =  $this->BUILDING->AddUpdateBuilding($tableName, $dataArr, $apartment_number);
			}

			fclose($file);
			redirect('building');
		} else {
			return false;
		}
	}

	

}
