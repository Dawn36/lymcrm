<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepositController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('DepositModel', 'DEPOSIT');
		 $this->load->model('OwnerModal', 'OWNER');
         $this->load->library('upload');
        // $this->load->library('email');
		// $this->load->model('Model_lovs', 'MLOVS');
	}


	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
            
			$data['depositSlip'] = $this->DEPOSIT->GetChequeSlip();
			$this->load->view('deposit_show',$data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
    public function DepositDelete()
    {

        $arrPost = $this->input->post();

        $depositId = $arrPost['depositId'];
        $paymentId = $arrPost['paymentId'];
        $dataInfo = array();
        $tableName = 'payment';
        $dataInfo['is_deposit'] = 'no';
        $check = $this->OWNER->UpdateOwner($dataInfo,$tableName,$paymentId);
        $dataInfo = array();
        $tableName = 'deposit';
        $dataInfo['status'] = 'inactive';
        $check = $this->OWNER->UpdateOwner($dataInfo,$tableName,$depositId);
         
        echo $check;
        
    }
    private function set_upload_options()
    {   
    //upload an image options
    $config = array();
    $config['upload_path'] = './uploads/deposit/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
    }
    public function EmailSendOwner()
    {
    $arrPost = $this->input->post();
    $tableName = 'deposit_attachment';
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['deposit']['name']);
  if($_FILES['deposit']['name'][0] == "")
  {
    $cpt=0;
  }
    if($arrPost['depositId'] != '')
    {
         for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['deposit']['name']= $files['deposit']['name'][$i];
        $_FILES['deposit']['type']= $files['deposit']['type'][$i];
        $_FILES['deposit']['tmp_name']= $files['deposit']['tmp_name'][$i];
        $_FILES['deposit']['error']= $files['deposit']['error'][$i];
        $_FILES['deposit']['size']= $files['deposit']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('deposit');
        $dataInfo[] = $this->upload->data();

            $arrInfo['deposit_id'] = $arrPost['depositId'];
            $arrInfo['file_name'] = $dataInfo[$i]['file_name'];
            $arrInfo['file_path'] = base_url() . 'uploads/deposit/' . $dataInfo[$i]['file_name'];
            $arrInfo['file_type'] = $dataInfo[$i]['file_ext'];
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
            $check = $this->OWNER->AddOwner($arrInfo,$tableName);
    }
    }
  
           $dataInfo=array();  
           $tableName='email_self'; 
        $arrPost = $this->input->post();
        $dataInfo['subject'] = $arrPost['subject'];
        $dataInfo['email_content'] = $arrPost['email_send'];
        $dataInfo['installment'] = $arrPost['installment'];
        $dataInfo['deposit_id'] = $arrPost['depositId'];
        $dataInfo['owner_name'] = $arrPost['ownerName'];
        $dataInfo['owner_email'] = $arrPost['ownerEmail'];
        $dataInfo['apartment_no'] = $arrPost['apartmentNo'];
        $dataInfo['building_name'] = $arrPost['buildingName'];
        $dataInfo['created_at'] = date("Y-m-d h:i:s");
        $dataInfo['created_by'] = $this->session->userdata('user_id');
        $dataInfo['created_name'] = $this->session->userdata('user_name');
         $check = $this->OWNER->AddOwner($dataInfo,$tableName);

         $to = $arrPost['to'];
         $subject = $arrPost['subject'];
         $emailcontent = $arrPost['email_send'];
        

        $config['smtp_host'] = SMTPHOST;
            $config['smtp_user'] = SMTPUSER;
            $config['smtp_pass'] = SMTPPASS;
            $config['smtp_port'] = '465';
            $config['mailtype'] = 'html';
            $config['smtp_crypto'] = 'ssl';
            $config['protocol'] = 'smtp';
            $config['charset'] = 'iso-8859-1';
            $config['newline'] = "\r\n";

            $this->email->initialize($config);

            

            $this->email->from('dawngill08@gmail.com', 'Dawn');
            $this->email->to($to);
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            $depositId = $arrPost['depositId'];
            $depositImg = $this->DEPOSIT->GetDepositImg($depositId);
            for ($i=0; $i <count($depositImg) ; $i++) { 
            //  $this->email->attach($depositImg[$i]['file_path']);
            }
            
            // $this->email->attach($dataInfo[1]['full_path']);
            $this->email->subject($subject);
            $this->email->message($emailcontent);
            
           
            $this->email->send();
           //$this->email->send();
             log_message('debug', $this->email->print_debugger());
             redirect('/deposit');
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
         $arrPost = $this->input->post();

        $depositId = $arrPost['id'];
        $data['depositImg'] = $this->DEPOSIT->GetDepositImg($depositId);
        return  $this->load->view('deposit_image',$data);
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
