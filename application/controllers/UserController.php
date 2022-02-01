<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'USER');
        $this->load->model('OwnerModal', 'OWNER');

    }

    public function index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $tableName='users';
            $data['userInfo'] =$this->OWNER->ShowOwner($tableName);
            $this->load->view('user_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function LoadAddScreen()
    {
        return  $this->load->view('user_add');
    }
    // Edit User Modal
    public function LoadEditScreen()
    {
        $arrPost = $this->input->post();
        $userId=$arrPost['userId'];
        $data['ownerTenantId'] = $arrPost['ownerTenantId'];
        $data['usersType'] = $arrPost['usersType'];
        $tableName='users';
        $data['userInfo'] =  $this->OWNER->ShowOwnerEdit($tableName,$userId);
        return  $this->load->view('user_edit',$data);
    }
    ///// email owner and tenant
    public function GetEmailTenantOwner()
    {
        $arrPost = $this->input->post();
        $id = $arrPost['id'];
        if($id == OWNER)
        {
            $tableName='owner';  
        }
        if($id == TENANT)
        {
            $tableName='tenant';  
        }
        $data= $this->USER->GetEmailTenantOwner($tableName);
        echo json_encode($data);

    }
    public function UserUpdate()
    {
         if ($this->session->userdata('name')) 
         {
            $arrPost = $this->input->post();
            $tableName='users';
            $userId=$arrPost['user_id'];
            $dataInfo['email']=$arrPost['user_email'];
            $dataInfo['name']=$arrPost['user_name'];
            $dataInfo['phone_number']=$arrPost['user_contact'];
            $dataInfo['owner_tenant_id']=$arrPost['owner_tenant_id'];
            $dataInfo['password']=base64_encode($arrPost['new_pass']);
            $dataInfo['updated_at'] = date("Y-m-d h:i:s");
            $dataInfo['updated_by'] =  $this->session->userdata('user_id');
            $dataInfo['updated_name'] =  $this->session->userdata('user_name');
            $this->USER->UpdateOwnerIsUser($dataInfo,$userId,$tableName);
            redirect('/user');
        }
    }
    public function UserDelete(){
        if ($this->session->userdata('name')) 
         {
            $arrPost = $this->input->post();
            $userId=$arrPost['userId'];
            $usersType=$arrPost['usersType'];
            if($usersType == TENANT)
            {
                $dataInfo= array();
                $tableName='tenant';
                $dataInfo['is_user']='no';
                $ownerId=$arrPost['ownerTenantId'];
                $this->USER->UpdateOwnerIsUser($dataInfo,$ownerId,$tableName);
            }
            else if($usersType == OWNER)
            {
                $dataInfo= array();
                $tableName='owner';
                $dataInfo['is_user']='no';
                $tenantId=$arrPost['ownerTenantId'];
                $this->USER->UpdateOwnerIsUser($dataInfo,$tenantId,$tableName);
            }
            $dataInfo= array();
            $tableName='users';
            $dataInfo['status']='inactive';
            $data=$this->USER->UpdateOwnerIsUser($dataInfo,$userId,$tableName);
            echo $data;
        }

    }
    public function UserRest(){
        if ($this->session->userdata('name')) 
         {
            $arrPost = $this->input->post();
            $userId=$arrPost['userId'];
            $dataInfo= array();
            $tableName='users';
            $dataInfo['password']=base64_encode('1234');
            $dataInfo['last_rest_password']=date("Y-m-d h:i:s");
            $data=$this->USER->UpdateOwnerIsUser($dataInfo,$userId,$tableName);
            echo $data;
        }

    }

     public function UserVerification()
    {
         if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            
            if($arrPost['user_type'] == OWNER)
            {
                $tableName='owner';
                $ownerId=$arrPost['email_id'];
                $ownerInfo['is_user']='yes';
                $this->USER->UpdateOwnerIsUser($ownerInfo,$ownerId,$tableName);
            }
            if($arrPost['user_type'] == TENANT)
            {
                $tableName='tenant';
                $tenantId=$arrPost['email_id'];
                $ownerInfo['is_user']='yes';
                $this->USER->UpdateOwnerIsUser($ownerInfo,$tenantId,$tableName);
            }
            $tableName = 'users';
            $arrInfo['owner_tenant_id'] = $arrPost['email_id'];
            $arrInfo['role_id'] = $arrPost['user_type'];
            $arrInfo['email'] = $arrPost['email'];
            $arrInfo['name'] = $arrPost['name'];
            $arrInfo['phone_number'] = $arrPost['contact'];
            $arrInfo['password'] = base64_encode($arrPost['new_pass']);
            $arrInfo['status'] = 'active';
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/user');
            } else {
                die("asd");
            }

        }
    }
     public function uploadprofile()
    {
        if ($this->session->userdata('name')) {
            $config['upload_path']          = './uploads/profile/';
            $config['allowed_types']        = 'jpg|png';
            // $config['max_size'] = 2000;
            // $config['max_width'] = 1500;
            // $config['max_height'] = 1500;
            log_message('debug', 'uploadprofile a');

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile')) {
                $error = array('error' => $this->upload->display_errors());
                log_message('debug', 'err : ' . print_r($error, true));
            } else {
                $data = array('upload_data' => $this->upload->data());
                log_message('debug', 'uploadprofile b: ' . print_r($data, true));
            }

            $arrPost = $this->input->post();
            $tableName = 'users';
            $userId = $this->session->userdata('user_id');

            $dataInfo['updated_at'] = date("Y-m-d h:i:s");
            $dataInfo['updated_by'] =  $this->session->userdata('user_id');
            $dataInfo['updated_name'] =  $this->session->userdata('user_name');
            $dataInfo['profile_picture'] = base_url() . 'uploads/profile/' . $data['upload_data']['file_name'];

            $result = $this->USER->UploadProfilePic($dataInfo, $userId, $tableName);
            log_message('debug', 'uploadprofile :: ' . $result['profile_picture']);

            redirect('/user');
        }
    }
    public function LoadUserProfile()
    {
        
        return  $this->load->view('profile_picture');
    }
   
    
}
