<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ComplaintControllers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('OwnerModal', 'OWNER');
        $this->load->model('ComplaintModel', 'COMPLAINT');
        $this->load->library('upload');
    }
    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $name = '';
            $id = '';
            if ($this->session->userdata('role_id') == OWNER) {
                $name = 'owner';
                $id = $this->session->userdata('owner_tenant_id');
            }
            if ($this->session->userdata('role_id') == TENANT) {
                $name = 'tenant';
                $id = $this->session->userdata('owner_tenant_id');
            }
            $data['complaintData'] =  $this->COMPLAINT->GetComplaints($name, $id);
            $this->load->view('complaint_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function LoadDepositImage()
    {
        log_message('debug', 'ImageDeposit');
        $arrPost = $this->input->post();

        $id = $arrPost['id'];
        $data['depositImg'] = $this->COMPLAINT->GetComplaintImg($id);
        return  $this->load->view('deposit_image', $data);
    }
    public function LoadAddScreen()
    {
        if ($this->session->userdata('name')) {
            return $this->load->view('complaint_add');
        } else {
            redirect('login');
        }
    }
    public  function ComplaintTenantAdd()
    {
        if ($this->session->userdata('name')) {
            $id = $this->session->userdata('owner_tenant_id');
            $data['tenant_name'] = $this->session->userdata('name');
            $data['tenant_id'] =  $id;
            $data['building'] = $this->COMPLAINT->ComplaintTenantBuilding($id);
            return $this->load->view('complaint_tenant_add', $data);
        } else {
            redirect('login');
        }
    }
    public  function ComplaintTenantApartment()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $buildingId = $arrPost['buildingId'];
            $data['apartment'] = $this->COMPLAINT->ComplaintTenantApartment($buildingId);
            echo json_encode($data);
        } else {
            redirect('login');
        }
    }
    public  function ComplaintTenantOwner()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $buildingId = $arrPost['buildingId'];
            $apartmentId = $arrPost['apartmentId'];
            $data['owner'] = $this->COMPLAINT->ComplaintTenantOwner($buildingId, $apartmentId);
            echo json_encode($data);
        } else {
            redirect('login');
        }
    }
    public function GetApartment()
    {
        $arrPost = $this->input->post();
        $buildingId = $arrPost['id'];
        $tableName = 'apartment';
        $apartmentInfo = $this->COMPLAINT->GetApartments($tableName, $buildingId);
        echo json_encode($apartmentInfo);
    }
    public function GetOwnerTenant()
    {
        $arrPost = $this->input->post();
        $buildingId = $arrPost['building_id'];
        $apartmentId = $arrPost['apartment_id'];
        $owner = $this->COMPLAINT->GetOwner($buildingId, $apartmentId);
        $tenant = $this->COMPLAINT->GetTenant($buildingId, $apartmentId);
        $data = array();
        $data['owner'] = $owner;
        $data['tenant'] = $tenant;
        echo json_encode($data);
    }
    public  function LoadEditScreen()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $id = $arrPost['id'];
            $tableName = $arrPost['tablename'];
            $data['complaintData'] =  $this->OWNER->ShowOwnerEdit($tableName, $id);
            return $this->load->view('complaint_edit', $data);
        } else {
            redirect('login');
        }
    }
    public function AssignComplaint()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $complaint = $arrPost['id'];
            $data['complaintId'] = $complaint;
            $tableName = 'company';
            $data['company'] = $this->OWNER->ShowOwner($tableName);
            $data['companyjson'] = json_encode($this->OWNER->ShowOwner($tableName));
            return $this->load->view('complaint_assign', $data);
        } else {
            redirect('login');
        }
    }
<<<<<<< HEAD
    public function AssignedComplaint()
=======
     public function AssignedComplaint()
>>>>>>> 3bdb593 (Initial commit)
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'complaint';
            $recordId = $arrPost['complaint_id'];
            $arrInfo['company_id'] = $arrPost['company_id'];
<<<<<<< HEAD
            $arrInfo['complaint_status'] = 'assigned';
            $arrInfo['assigned_remarks'] = $arrPost['assigned_remarks'];
=======
            $arrInfo['assigned_remarks'] = $arrPost['assigned_remarks'];
            $arrInfo['complaint_status'] = 'assigned';
>>>>>>> 3bdb593 (Initial commit)
            $arrInfo['assigned_date'] = Date('Y-m-d');

            $check = $this->OWNER->UpdateOwner($arrInfo, $tableName, $recordId);
            $data = $this->COMPLAINT->ComplaintAssignedEmail($recordId);

<<<<<<< HEAD
            $to = $data[0]['email'];
            $subject = "Maintenance Complaint #(. $recordId .)";
            $emailcontent = "Dear " . ucwords($data[0]['name']) . ",<br>
=======
             $to = $data[0]['email'];
            $to='dawngill08@gmail.com';
            $subject = "Maintenance Complaint #(. $recordId .)";
             $emailcontent = "Dear " . ucwords($data[0]['name']) . ",<br>
>>>>>>> 3bdb593 (Initial commit)

            Your maintenance request has been registered under the MR#: (" . $recordId . ") and assigned to M/S " . ucwords($data[0]['company_name']) . ". Mr. " . ucwords($data[0]['contact_person']) . " shall contact you for coordinating an appointment at the earliest. You may contact Mr. " . ucwords($data[0]['contact_person']) . " at " . $data[0]['phone_number'] . " " . $data[0]['contact_email'] . " for faster facilitation.<br><br> 
            
            Kindly note that the matter shall be treated in accordance with the maintenance clause mentioned in your tenancy contract.<br>
            CC: Dear " . ucwords($data[0]['contact_person']) . ", please contact the tenant to resolve issue as per above mentioned complaint and quote at the earliest. Tenant can be contacted at " . $data[0]['contact_person'] . " or " . $data[0]['email'] . ". ";


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
<<<<<<< HEAD
            $this->email->from(SMTPUSER);
            $this->email->to($to);
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc($data[0]['contact_email']);

            $this->email->subject($subject);
            $this->email->message($emailcontent);
            // $this->email->send();

            $to = $data[0]['contact_email'];
            $subject = "Maintenance Complaint #(. $recordId .)";
=======


            $list=array('reception@lymdubai.com');
            $this->email->from(SMTPFROM);
            $this->email->to($to);
            $this->email->bcc('imran@lymdubai.com');
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc($list);

            $this->email->subject($subject);
            $this->email->message($emailcontent);
            $this->email->send();

             $to = $data[0]['contact_email'];
            $to='dawngill08@gmail.com';
            $subject = "Maintenance Complaint ";
>>>>>>> 3bdb593 (Initial commit)
            $emailcontent = "Dear " . ucwords($data[0]['contact_person']) . "<br>

            Following maintenance Complaint number (" . $recordId . ") for Building: " . ucwords($data[0]['building_name']) . " and Apartment: " . $data[0]['apartment_number'] . "  is being marked to you for rectification.<br> 
            
            Complaint:" . $data[0]['description'] . " 
            
            <br>
            Please coordinate with tenant " . ucwords($data[0]['name']) . "," . $data[0]['email'] . "," . $data[0]['tenant_number'] . " as soon as possible.<br>
            
            Thanks";

<<<<<<< HEAD

            $this->email->from(SMTPUSER);
            $this->email->to($to);
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc('accounts@lymdubai.com');
=======
            $list=array('reception@lymdubai.com');
            $this->email->from(SMTPFROM);
            $this->email->to($to);
            $this->email->bcc('imran@lymdubai.com');
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc($list);
>>>>>>> 3bdb593 (Initial commit)

            $this->email->subject($subject);
            $this->email->message($emailcontent);
            $this->email->send();
<<<<<<< HEAD

            $tableName = 'complaint';
=======
            die($this->email->print_debugger());
             $tableName = 'complaint';
>>>>>>> 3bdb593 (Initial commit)
            $dataComplaint = $this->OWNER->ShowOwnerEdit($tableName, $arrPost['complaint_id']);

            $tableName = 'owner';
            $dataOwner = $this->OWNER->ShowOwnerEdit($tableName, $dataComplaint[0]['owner_id']);

            $tableName = 'email_complaint';
            $arrInfo = array();
            $arrInfo['tenant_id'] = $data[0]['tenant_id'];
            $arrInfo['complaint_id'] = $arrPost['complaint_id'];
            $arrInfo['tenant_name'] = $data[0]['name'];
            $arrInfo['building_id'] = $dataComplaint[0]['building_id'];
            $arrInfo['building_name'] = $data[0]['building_name'];
            $arrInfo['appartment_id'] = $dataComplaint[0]['apartment_id'];
            $arrInfo['appartment_name'] = $data[0]['apartment_number'];
            $arrInfo['owner_id'] = $dataComplaint[0]['owner_id'];
            $arrInfo['owner_name'] = $dataOwner[0]['name'];
            $arrInfo['assign_to'] = $data[0]['contact_person'];
            $arrInfo['complaint_status'] = 'assigned';
            $arrInfo['created_at'] = Date("Y-m-d h:i:s");

            $this->OWNER->AddOwner($arrInfo, $tableName);
            redirect('/complaint');
        } else {
            redirect('login');
        }
    }
<<<<<<< HEAD
    public function SendWhatsappComplaint()
=======
      public function SendWhatsappComplaint()
>>>>>>> 3bdb593 (Initial commit)
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $recordId = $arrPost['id'];

            $data = $this->COMPLAINT->ComplaintAssignedEmail($recordId);
<<<<<<< HEAD
            $message = "Dear " . ucwords($data[0]['contact_person']) . ",please contact the " . ucwords($data[0]['name']) . "," . $data[0]['tenant_number'] . " tenant of (apartment/villa " . $data[0]['apartment_number'] . ") (building:" . ucwords($data[0]['building_name']) . ") to resolve the (" . strip_tags($data[0]['description']) . ") issue. tenant to resolve issue as per above mentioned complaint and quote at the earliest. Tenant can be contacted at " . $data[0]['tenant_number'] . " or " . $data[0]['email'] . ". ";
=======
            $message = "Dear " . ucwords($data[0]['contact_person']) . ",please contact the " . ucwords($data[0]['name']) . "," . $data[0]['tenant_number'] . " tenant of (apartment/villa " . $data[0]['apartment_number'] . ") (building:" . ucwords($data[0]['building_name']) . ") to resolve the (" . strip_tags($data[0]['description']) . ") issue. tenant to resolve issue as per above mentioned complaint and quote at the earliest. Tenant can be contacted at " . $data[0]['tenant_number'] . " or " . $data[0]['t_email'] . ". ";
>>>>>>> 3bdb593 (Initial commit)
            echo json_encode($message);
        } else {
            redirect('login');
        }
    }

    public function LoadTenantEditScreen()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $arrPost = $this->input->post();
            $id = $arrPost['id'];
            $tableName = $arrPost['tablename'];
            $data['complaintData'] =  $this->OWNER->ShowOwnerEdit($tableName, $id);
            $id = $this->session->userdata('owner_tenant_id');
            $data['tenant_name'] = $this->session->userdata('name');
            $data['tenant_id'] =  $id;
            $data['building'] = $this->COMPLAINT->ComplaintTenantBuilding($id);
            // return $this->load->view('complaint_tenant_add', $data);
            // return $this->load->view('complaint_edit', $data);
            return $this->load->view('complaint_tenant_edit', $data);
        } else {
            redirect('login');
        }
    }

    public function AddComplaint()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $files = $_FILES;
            $tableName = 'complaint';
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['apartment_id'] = $arrPost['apartment_id'];
            $arrInfo['owner_id'] = $arrPost['owner_id'];
            $arrInfo['tenant_id'] = $arrPost['tenant_id'];
            $arrInfo['description'] = $arrPost['description'];
            $arrInfo['complaint_date'] = date("Y-m-d h:i:s");
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
            $id = $this->OWNER->AddOwnerLastInsertedId($arrInfo, $tableName);
            $tableName = 'complaint_image';
            $arrInfo = array();
            $cpt = count($_FILES['complaint_image']['name']);
            if ($_FILES['complaint_image']['name'][0] == "") {
                $cpt = 0;
            }
            if ($id != '') {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['complaint_image']['name'] = $files['complaint_image']['name'][$i];
                    $_FILES['complaint_image']['type'] = $files['complaint_image']['type'][$i];
                    $_FILES['complaint_image']['tmp_name'] = $files['complaint_image']['tmp_name'][$i];
                    $_FILES['complaint_image']['error'] = $files['complaint_image']['error'][$i];
                    $_FILES['complaint_image']['size'] = $files['complaint_image']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload('complaint_image');
                    $dataInfo[] = $this->upload->data();

                    $arrInfo['complaint_id'] = $id;
                    $arrInfo['file_name'] = $dataInfo[$i]['file_name'];
                    $arrInfo['file_path'] = base_url() . 'uploads/complaint/' . $dataInfo[$i]['file_name'];
                    $arrInfo['file_type'] = $dataInfo[$i]['file_ext'];
                    $arrInfo['created_at'] = date("Y-m-d h:i:s");
                    $arrInfo['created_by'] =  $this->session->userdata('user_id');
                    $arrInfo['created_name'] =  $this->session->userdata('user_name');
                    $arrInfo['status'] = "active";
                    $check = $this->OWNER->AddOwner($arrInfo, $tableName);
                }
            }
            $data = $this->COMPLAINT->ComplaintDataEmail($id);
<<<<<<< HEAD

=======
            //$data[0]['email']
           //print_r($data);
           //die();
            //$to = 'dawngill08@gmail.com';
>>>>>>> 3bdb593 (Initial commit)
            $to = $data[0]['email'];
            $subject = "Maintenance Complaint #" . $id . " Property: " . $data[0]['building_name'] . " " . $data[0]['apartment_number'];
            $emailcontent = "A maintenance complaint has been received for the above mentioned property and action shall be taken within 24 hours (excluding weekends)";


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



<<<<<<< HEAD
            $this->email->from(SMTPUSER);
            $this->email->to($to);
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc('accounts@lymdubai.com');

            $this->email->subject($subject);
            $this->email->message($emailcontent);
            $this->email->send();

            $tableName = 'owner';
=======
            $this->email->from(SMTPFROM);
            $this->email->to($to);
            $this->email->bcc('imran@lymdubai.com');
            $this->email->bcc('accounts@lymdubai.com');
            $this->email->cc('reception@lymdubai.com');

            $this->email->subject($subject);
            $this->email->message($emailcontent);


            $this->email->send();
            //$this->email->send();
             $tableName = 'owner';
>>>>>>> 3bdb593 (Initial commit)
            $dataOwner = $this->OWNER->ShowOwnerEdit($tableName, $arrPost['owner_id']);

            $tableName = 'email_complaint';
            $arrInfo = array();
            $arrInfo['tenant_id'] = $arrPost['tenant_id'];
            $arrInfo['complaint_id'] = $id;
            $arrInfo['tenant_name'] = $data[0]['name'];
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['building_name'] = $data[0]['building_name'];
            $arrInfo['appartment_id'] = $arrPost['apartment_id'];
            $arrInfo['appartment_name'] = $data[0]['apartment_number'];
            $arrInfo['owner_id'] = $arrPost['owner_id'];
            $arrInfo['owner_name'] = $dataOwner[0]['name'];
            $arrInfo['complaint_status'] = 'pending';
            $arrInfo['created_at'] = Date("Y-m-d h:i:s");
<<<<<<< HEAD

            $this->OWNER->AddOwner($arrInfo, $tableName);
            //$this->email->send();
=======
            $check = $this->OWNER->AddOwner($arrInfo, $tableName);
>>>>>>> 3bdb593 (Initial commit)
            log_message('debug', $this->email->print_debugger());

            redirect('/complaint');
        }
    }
    function ShowCompaintCostSceen()
    {
        $arrPost = $this->input->post();
        $id = $arrPost['id'];
        $data['id'] =  $id;
        return $this->load->view('complaint_cost', $data);
    }
<<<<<<< HEAD
    public function ComplaintCostUpdate()
=======
     public function ComplaintCostUpdate()
>>>>>>> 3bdb593 (Initial commit)
    {
        $arrPost = $this->input->post();
        $id = $arrPost['complaint_id'];
        $tableName = 'complaint';
        if ($this->session->userdata('role_id') == SUPER_ADMIN || $this->session->userdata('role_id') == SUB_ADMIN) {
            $arrInfo['cost'] = $arrPost['cost'];
            $arrInfo['currency'] = $arrPost['currency'];
            $arrInfo['remarks'] = $arrPost['remarks'];
            $arrInfo['paid_by'] = $arrPost['paid_by'];
            $arrInfo['bill'] = $arrPost['bill'];
            $arrInfo['complaint_status'] = 'completed';
        }
        $this->OWNER->UpdateOwner($arrInfo, $tableName, $id);

        $tableName = 'complaint';
        $dataComplaint = $this->OWNER->ShowOwnerEdit($tableName, $arrPost['complaint_id']);
        $tableName = 'tenant';
        $dataTenant = $this->OWNER->ShowOwnerEdit($tableName, $dataComplaint[0]['tenant_id']);

<<<<<<< HEAD
        // $to = $dataTenant[0]['email'];
        $to = 'dawngill08@gmail.com';
=======
         $to = $dataTenant[0]['email'];
        //$to = 'dawngill08@gmail.com';
>>>>>>> 3bdb593 (Initial commit)
        $subject = "Complaint resolved";
        $emailcontent = "Dear " . ucwords($dataTenant[0]['name']) . "<br>,


        We have been informed by  the (maintenance company) that the issue, as per complaint # (" . $arrPost['complaint_id'] . ") has been resolved. If it has not been resolved, please reply within 24 hours of receiving this email otherwise we will consider this complaint as closed.<br> 

        Thanks";


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



<<<<<<< HEAD
        $this->email->from(SMTPUSER);
        $this->email->to($to);
        $this->email->bcc('accounts@lymdubai.com');
        $this->email->cc('accounts@lymdubai.com');

=======
        $this->email->from(SMTPFROM);
        $this->email->to($to);
        $this->email->bcc('imran@lymdubai.com');
        $this->email->bcc('accounts@lymdubai.com');
        $this->email->cc('reception@lymdubai.com');
        
>>>>>>> 3bdb593 (Initial commit)
        $this->email->subject($subject);
        $this->email->message($emailcontent);
        $this->email->send();


        $tableName = 'building';
        $dataBuilding = $this->OWNER->ShowOwnerEdit($tableName, $dataComplaint[0]['building_id']);
        $tableName = 'apartment';
        $dataApartment = $this->OWNER->ShowOwnerEdit($tableName, $dataComplaint[0]['apartment_id']);
        $tableName = 'owner';
        $dataOwner = $this->OWNER->ShowOwnerEdit($tableName, $dataComplaint[0]['owner_id']);

        $tableName = 'email_complaint';
        $arrInfo = array();
        $arrInfo['tenant_id'] = $dataComplaint[0]['tenant_id'];
        $arrInfo['tenant_name'] = $dataTenant[0]['name'];
        $arrInfo['complaint_id'] = $arrPost['complaint_id'];
        $arrInfo['building_id'] = $dataComplaint[0]['building_id'];
        $arrInfo['building_name'] = $dataBuilding[0]['building_name']; //
        $arrInfo['appartment_id'] = $dataComplaint[0]['apartment_id'];
        $arrInfo['appartment_name'] = $dataApartment[0]['apartment_number']; //
        $arrInfo['owner_id'] = $dataComplaint[0]['owner_id'];
        $arrInfo['owner_name'] = $dataOwner[0]['name']; //
        $arrInfo['complaint_status'] = 'completed';
        $arrInfo['created_at'] = Date("Y-m-d h:i:s");

        $this->OWNER->AddOwner($arrInfo, $tableName);
        redirect('/complaint');
    }
    public function EditComplaint()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();

            $files = $_FILES;
            $id = $arrPost['complaint_id'];
            $tableName = 'complaint';
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['apartment_id'] = $arrPost['apartment_id'];
            $arrInfo['owner_id'] = $arrPost['owner_id'];
            $arrInfo['tenant_id'] = $arrPost['tenant_id'];
            $arrInfo['description'] = $arrPost['description'];
            $arrInfo['complaint_date'] = date("Y-m-d h:i:s");
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $this->OWNER->UpdateOwner($arrInfo, $tableName, $id);
            $tableName = 'complaint_image';
            $arrInfo = array();
            $cpt = count($_FILES['complaint_image']['name']);
            if ($_FILES['complaint_image']['name'][0] == "") {
                $cpt = 0;
            }
            if ($id != '') {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['complaint_image']['name'] = $files['complaint_image']['name'][$i];
                    $_FILES['complaint_image']['type'] = $files['complaint_image']['type'][$i];
                    $_FILES['complaint_image']['tmp_name'] = $files['complaint_image']['tmp_name'][$i];
                    $_FILES['complaint_image']['error'] = $files['complaint_image']['error'][$i];
                    $_FILES['complaint_image']['size'] = $files['complaint_image']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload('complaint_image');
                    $dataInfo[] = $this->upload->data();

                    $arrInfo['complaint_id'] = $id;
                    $arrInfo['file_name'] = $dataInfo[$i]['file_name'];
                    $arrInfo['file_path'] = base_url() . 'uploads/complaint/' . $dataInfo[$i]['file_name'];
                    $arrInfo['file_type'] = $dataInfo[$i]['file_ext'];
                    $arrInfo['created_at'] = date("Y-m-d h:i:s");
                    $arrInfo['created_by'] =  $this->session->userdata('user_id');
                    $arrInfo['created_name'] =  $this->session->userdata('user_name');
                    $arrInfo['status'] = "active";
                    $check = $this->OWNER->AddOwner($arrInfo, $tableName);
                }
            }

            redirect('/complaint');
        }
    }
    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './uploads/complaint/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }
    public function EmailExit()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $email = $arrPost['email'];
            $tableName = $arrPost['table_name'];
            $data = $this->OWNER->EmailExit($email, $tableName);
            if ($data >= 1) {

                echo json_encode($data);
            } else {
                return false;
            }
        }
    }
    public function EditOwnerTenant()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = $arrPost['table_name'];
            $recordId = $arrPost['record_id'];
            $arrInfo['name'] = $arrPost['name'];
            $arrInfo['email'] = $arrPost['email'];
            $arrInfo['phone_number'] = $arrPost['contact'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
            $check = $this->OWNER->UpdateOwner($arrInfo, $tableName, $recordId);
            if ($check == true) {
                redirect('/' . $tableName);
            } else {
            }
        }
    }
}
