<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenantController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->model('OwnerModal', 'OWNER');
    }

    public function index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $tableName='tenant';
            $data['tenantData'] =  $this->OWNER->ShowOwner($tableName);
            $this->load->view('tenant_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function LoadAddScreen()
    {
        log_message('debug', 'modalAddTenant');
        return  $this->load->view('tenant_add');
    }


    // Edit User Modal
    public function LoadEditScreen()
    {
        $arrPost = $this->input->post();
            $id = $arrPost['id'];
            $tableName=$arrPost['tablename'];
            $data['tenantData'] =  $this->OWNER->ShowOwnerEdit($tableName,$id);
        return  $this->load->view('tenant_edit',$data);
    }

    // Delete User
    public function deleteTenant()
    {
        $id = $this->input->post('id');
        // $item = $this->HiringRequest->delete_item($id);
        // log_message('debug', 'item' . $item);
        return true;
    }
}
