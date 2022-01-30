<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
   
    }

    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['bed'] = "";
            $this->load->view('property_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function LoadAddScreen()
    {
        log_message('debug', 'modalAddProperty');
        return  $this->load->view('property_add');
    }


    // Edit User Modal
    public function LoadEditScreen()
    {
        $id = $this->input->post('id');
        
        return  $this->load->view('property_edit');
    }

    // Delete User
    public function DeleteProperty()
    {
        $id = $this->input->post('id');
        // $item = $this->HiringRequest->delete_item($id);
        // log_message('debug', 'item' . $item);
        return true;
    }
}
