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
     public function tenantCsv()
    {
        $arrPost = $this->input->post();
        $tableName = $arrPost['tablename'];

        $filename = $_FILES["tenant_csv"]["tmp_name"];
        if ($_FILES["tenant_csv"]["size"] > 0) {
            $file = fopen($filename, "r");
            $header = fgetcsv($file);

            $name = $header[0];
            $email = $header[1];
            $contact = $header[2];

            if (
                $name != "name" ||
                $email != "email" ||
                $contact != "contact"
            ) {
                redirect('tenant?message=0');
                // echo '<script>alert("Column Not Matched.")</script>';
                // }
                // exit();
                return false;
            }

            while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
                $dataArr['name'] = $data[0];
                $dataArr['email'] = $data[1];
                $dataArr['phone_number'] = $data[2];
                $data['tenantData'] =  $this->OWNER->AddUpdateOwnerTenant($tableName, $dataArr);
            }

            fclose($file);
            redirect('tenant?message=1');
        } else {
            return false;
        }
    }
    public function TenantUploader()
    {
        if ($this->session->userdata('name')) {
            return $this->load->view('tenant_uploader');
            
        } else {
            redirect('login');
        }
    }
}
