<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenantController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_bed', 'MBED');
        $this->load->model('Model_lovs', 'MLOVS');
    }

    public function index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['bed'] = $this->MBED->BedShow();
            $this->load->view('tenant_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function modalAddTenant()
    {
        log_message('debug', 'modalAddTenant');
        return  $this->load->view('modal_tenant_add');
    }


    // Edit User Modal
    public function modalEditTenant()
    {
        $id = $this->input->post('id');
        log_message('debug', 'modalEditTenant');
        // $hiringRequest = $this->HiringRequest->find_item($id);
        // return  $this->load->view('Screens/modal_hiringRequest_edit', array('hiringRequest' => $hiringRequest));
        return  $this->load->view('modal_tenant_edit');
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
