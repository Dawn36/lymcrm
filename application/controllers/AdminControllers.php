<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControllers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'USER');
        $this->load->model('OwnerModal', 'OWNER');
        $this->load->model('AdminModal', 'ADMIN');
    }


    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $tableName = 'users';
            $data['adminInfo'] = $this->OWNER->ShowOwner($tableName);
            $this->load->view('admin_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function LoadAddScreen()
    {
        if ($this->session->userdata('name')) {

            return $this->load->view('admin_add');
        } else {
            redirect('login');
        }
    }
    public function ChangePasswordModal()
    {
        if ($this->session->userdata('name')) {

            return $this->load->view('change_password');
        } else {
            redirect('login');
        }
    }
    public function LoadEditScreen()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $userId = $arrPost['userId'];
            $tableName = 'users';
            $data['adminInfo'] =  $this->OWNER->ShowOwnerEdit($tableName, $userId);
            return $this->load->view('admin_edit', $data);
        } else {
            redirect('login');
        }
    }
    public function AdminUpdate()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'users';
            $userId = $arrPost['adminId'];
            $dataInfo['email'] = $arrPost['email_name'];
            $dataInfo['name'] = $arrPost['admin_name'];
            $dataInfo['phone_number'] = $arrPost['contact_number'];
            $dataInfo['owner_tenant_id'] = '0';
            $dataInfo['password'] = base64_encode($arrPost['admin_password']);
            $dataInfo['updated_at'] = date("Y-m-d h:i:s");
            $dataInfo['updated_by'] =  $this->session->userdata('user_id');
            $dataInfo['updated_name'] =  $this->session->userdata('user_name');
            $this->USER->UpdateOwnerIsUser($dataInfo, $userId, $tableName);
            redirect('/admin');
        }
    }
    public function ChangePassword()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'users';
            $userId = $this->session->userdata('user_id');
            $dataInfo['password'] = base64_encode($arrPost['new_password']);
            $this->USER->UpdateOwnerIsUser($dataInfo, $userId, $tableName);
            redirect('logout');
        }
    }
    public function AdminVerification()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();

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
            $check = $this->OWNER->AddOwner($arrInfo, $tableName);
            if ($check == true) {
                redirect('/admin');
            } else {
                die("asd");
            }
        }
    }
    public function DeleteAdmin()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();

            $userId = $arrPost['userId'];
            $dataInfo = array();
            $tableName = 'users';
            $dataInfo['status'] = 'inactive';
            $data = $this->USER->UpdateOwnerIsUser($dataInfo, $userId, $tableName);
            echo $data;
        }
    }
    public function PasswordExit()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $userId = $this->session->userdata('user_id');
            $oldPass = base64_encode($arrPost['oldpass']);
            $dataInfo = array();
            $tableName = 'users';
            $data = $this->ADMIN->PasswordExit($oldPass, $userId, $tableName);
            echo json_encode($data);
        }
    }
}
