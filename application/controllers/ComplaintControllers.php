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
    public function AssignedComplaint()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'complaint';
            $recordId = $arrPost['complaint_id'];
            $arrInfo['company_id'] = $arrPost['company_id'];
            $arrInfo['complaint_status'] = 'assigned';
            $arrInfo['assigned_date'] = Date('Y-m-d');

            $check = $this->OWNER->UpdateOwner($arrInfo, $tableName, $recordId);
            redirect('/complaint');
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

            redirect('/complaint');
        }
    }
    public function EditComplaint()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            if ($this->session->userdata('role_id') == SUPER_ADMIN || $this->session->userdata('role_id') == SUB_ADMIN) {
                $arrInfo['cost'] = $arrPost['cost'];
                $arrInfo['complaint_status'] = $arrPost['complaint_status'];
            }
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
