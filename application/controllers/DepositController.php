<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepositController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('DepositModel', 'DEPOSIT');
		 $this->load->model('OwnerModal', 'OWNER');
         $this->load->library('email');
		// $this->load->model('Model_lovs', 'MLOVS');
	}


	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
            $config['smtp_host'] = 'smtp.googlemail.com';
            $config['smtp_user'] = 'dawngill08@gmail.com';
            $config['smtp_pass'] = '';
            $config['smtp_port'] = '465';
            $config['mailtype'] = 'html';
            $config['smtp_crypto'] = 'ssl';
            $config['protocol'] = 'smtp';
            $config['charset'] = 'iso-8859-1';
            $config['newline'] = "\r\n";

            $this->email->initialize($config);

            

            $this->email->from('dawngill08@gmail.com', 'Dawn');
            $this->email->to('dawngill08@gmail.com');
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.<br> ASD ');
            $this->email->send();
          //  $this->email->send();
             log_message('debug', $this->email->print_debugger());
			// $data['users'] = $this->MUSER->UserShow();
			$this->load->view('deposit_show');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

    public function DepositAdd()
    {
        log_message('debug', 'DepositAdd');
        $data['buildingData']=$this->DEPOSIT->GetBuidlingFromTenany();
        return  $this->load->view('deposit_add',$data);
    }
    public function GetApartment()
    {
        log_message('debug', 'DepositAdd');
        $arrPost = $this->input->post();
        $building = $arrPost['building'];
        $apartmentData=$this->DEPOSIT->GetApartment($building);
        echo  json_encode($apartmentData);
       
    }
    public function GetTenant()
    {
        log_message('debug', 'DepositAdd');
        $arrPost = $this->input->post();
        $apartmentId = $arrPost['appartmentId'];
        $tenantData=$this->DEPOSIT->GetTenant($apartmentId);
        echo  json_encode($tenantData);
       
    }
     public function GetCheque()
    {
        log_message('debug', 'DepositAdd');
        $arrPost = $this->input->post();
        $type = $arrPost['type'];
        $tenantId = $arrPost['tenantId'];
        $chequeData=$this->DEPOSIT->GetCheque($type,$tenantId);
        echo  json_encode($chequeData);
       
    }

    public function DepositEdit()
    {
        log_message('debug', 'DepositEdit');
        return  $this->load->view('deposit_edit');
    }

    public function DepositEmail()
    {
        log_message('debug', 'DepositEmail');
        return  $this->load->view('deposit_email');
    }

    public function LoadDepositImage()
    {
        log_message('debug', 'ImageDeposit');
        return  $this->load->view('deposit_image');
    }
    public function AddVerification()
    {
    		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
			$tableName='payment';
			$arrInfo['is_deposit']='yes';
			$recordId= $arrPost['cheque_no'];
            $check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            $arrInfo=array();
            $tableName = 'deposit';
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['apartment_id'] = $arrPost['appartment_id'];
            $arrInfo['tenancy_id'] = $arrPost['tenant_id'];
            $arrInfo['type'] = $arrPost['type'];
            $arrInfo['payment_id'] = $arrPost['cheque_no'];
            $arrInfo['status'] = 'active';
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/deposit');
            } else {
                die("asd");
            }
		
		} else {
			redirect('login');
		}
    }

}
