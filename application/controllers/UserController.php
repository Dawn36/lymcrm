<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
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
            $this->load->view('user_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function modalAddUser()
    {
        log_message('debug', 'modaladdUser');
        return  $this->load->view('modal_user_add');
    }


    // Edit User Modal
    public function modalEditUser()
    {
        $id = $this->input->post('id');
        log_message('debug', 'modalEditUser');
        // $hiringRequest = $this->HiringRequest->find_item($id);
        // return  $this->load->view('Screens/modal_hiringRequest_edit', array('hiringRequest' => $hiringRequest));
        return  $this->load->view('modal_user_edit');
    }

    // Delete User
    public function deleteUser()
    {
        $id = $this->input->post('id');
        // $item = $this->HiringRequest->delete_item($id);
        // log_message('debug', 'item' . $item);
        return true;
    }
    public function BedAdd()
    {
        if ($this->session->userdata('name')) {
            $data['ward'] = $this->MBED->get_ward();
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->view('bed_add', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function BedAddVerify()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $arrBedInfo['ward_no'] = $arrPost['ward_no'];
            $arrBedInfo['bed_no'] = $arrPost['bed_no'];
            $arrBedInfo['bed_creation'] = date("Y-m-d");
            $arrBedInfo['bed_status'] = 1;
            $check = $this->MBED->BedAdd($arrBedInfo);
            if ($check == true) {
                redirect('/Bed');
            } else {
                die("asd");
            }
        }
    }
    public function BedEdit($id)
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['bed'] = $this->MBED->BedGet($id);
            $this->load->view('bed_edit', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function UpadteBed()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $arrBedInfo['ward_no'] = $arrPost['ward_no'];
            $arrBedInfo['bed_no'] = $arrPost['bed_no'];
            $arrBedInfo['bed_updation'] = date("Y-m-d");
            $id = $arrPost['id'];
            $check = $this->MBED->UpadateBedDb($id, $arrBedInfo);
            if ($check == true) {
                redirect('/Bed');
            }
        }
    }
    public function bedDelete()
    {

        $post = $this->input->post();
        $id = $post['id'];
        $arrLovInfo['bed_status'] = 0;
        $data = $this->MBED->delete_bed($id, $arrLovInfo);
        if ($data == 1) {

            echo json_encode($data);
        } else {
            return false;
        }
    }
    public function Lovs()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['lovs'] = $this->MLOVS->LovsShow();
            $this->load->view('lovs', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }

    public function LovsAdd()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->view('lovs_add');
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function LovsAddVerify()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $arrUserInfo['organism_name'] = $arrPost['organism_name'];
            $arrUserInfo['antibiotic_class_1'] = $arrPost['antibiotic_class_1'];
            $arrUserInfo['antibiotic_class_2'] = $arrPost['antibiotic_class_2'];
            $arrUserInfo['antibiotic_class_3'] = $arrPost['antibiotic_class_3'];
            $arrUserInfo['antibiotic_class_4'] = $arrPost['antibiotic_class_4'];
            $arrUserInfo['antibiotic_class_5'] = $arrPost['antibiotic_class_5'];
            $arrUserInfo['antibiotic_class_6'] = $arrPost['antibiotic_class_6'];
            $arrUserInfo['antibiotic_class_7'] = $arrPost['antibiotic_class_7'];
            $arrUserInfo['antibiotic_class_8'] = $arrPost['antibiotic_class_8'];
            $arrUserInfo['antibiotic_class_9'] = $arrPost['antibiotic_class_9'];
            $arrUserInfo['mbr_name'] = $arrPost['mbr_name'];
            $arrUserInfo['lov_creation'] = date("Y-m-d");
            $check = $this->MLOVS->LovsAdd($arrUserInfo);
            if ($check == true) {
                redirect('/Bed/Lovs');
            }
        } else {
            redirect('login');
        }
    }
    public function Lovsedit($id)
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $get = $this->MLOVS->LovsGet($id);
            $data['lovs'] = $get;
            $this->load->view('lovs_edit', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function UpadteLovs()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $arrUserInfo['organism_name'] = $arrPost['organism_name'];
            $arrUserInfo['antibiotic_class_1'] = $arrPost['antibiotic_class_1'];
            $arrUserInfo['antibiotic_class_2'] = $arrPost['antibiotic_class_2'];
            $arrUserInfo['antibiotic_class_3'] = $arrPost['antibiotic_class_3'];
            $arrUserInfo['antibiotic_class_4'] = $arrPost['antibiotic_class_4'];
            $arrUserInfo['antibiotic_class_5'] = $arrPost['antibiotic_class_5'];
            $arrUserInfo['antibiotic_class_6'] = $arrPost['antibiotic_class_6'];
            $arrUserInfo['antibiotic_class_7'] = $arrPost['antibiotic_class_7'];
            $arrUserInfo['antibiotic_class_8'] = $arrPost['antibiotic_class_8'];
            $arrUserInfo['antibiotic_class_9'] = $arrPost['antibiotic_class_9'];
            $arrUserInfo['mbr_name'] = $arrPost['mbr_name'];
            $arrUserInfo['lov_updation'] = date("Y-m-d");
            $id = $this->input->post('id');
            $check = $this->MLOVS->UpadteLovsDb($id, $arrUserInfo);
            if ($check == true) {
                redirect('/Bed/Lovs');
            }
        }
    }
    public function checkOrgName()
    {
        if ($this->session->userdata('name')) {
            $post = $this->input->post();
            $org_name = strtolower($post['organism_name']);
            $data = $this->MLOVS->check_org_name($org_name);
            if ($data) {
                echo json_encode($data);
            } else {
                return false;
            }
        } else {
            redirect('login');
        }
    }
    public function LovsDelete()
    {

        $post = $this->input->post();
        $id = $post['id'];
        $arrLovInfo['lov_status'] = 0;
        $data = $this->MLOVS->delete_lov($id, $arrLovInfo);
        if ($data == 1) {

            echo json_encode($data);
        } else {
            return false;
        }
    }
    public function Source()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $dataArr = array();
            $dataArr['tablename'] = 'ic_source';
            $dataArr['fieldname'] = 'status';
            $dataArr['status'] = 'active';
            $data['data'] = $this->MLOVS->Show($dataArr);
            $this->load->view('source', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function SourceAdd()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->view('source_add');
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function SourceEdit($id)
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['source'] = $this->MLOVS->SourceGet($id);
            $this->load->view('source_edit', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    public function SourceDelete()
    {

        $post = $this->input->post();

        $id = $post['id'];
        $tableName = $post['tableName'];
        $arrInfo['status'] = $post['status'];
        $data = $this->MLOVS->Delete($tableName, $id, $arrInfo);
        if ($data == 1) {

            echo json_encode($data);
        } else {
            return false;
        }
    }
    public function SourceAddVerify()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = 'ic_source';
            $arrInfo['source_name'] = $arrPost['source_name'];
            $arrInfo['created_at'] = date("Y-m-d");
            $arrInfo['created_by'] = $this->session->userdata('user_id');
            $arrInfo['status'] = 'active';
            $check = $this->MLOVS->Add($tableName, $arrInfo);
            if ($check == true) {
                redirect('/source');
            } else {
                die("Data not submit please go back and resubmit");
            }
        }
    }
    public function UpadteSource()
    {
        if ($this->session->userdata('name')) {
            $post = $this->input->post();
            $recordId = $post['record_id'];
            $arrInfo['source_name'] = $post['source_name'];
            $arrInfo['update_at'] = date("Y-m-d");
            $arrInfo['update_by'] = $this->session->userdata('user_id');
            $id = $arrPost['id'];
            $check = $this->MLOVS->UpadateBedDb($recordId, $arrInfo);
            if ($check == true) {
                redirect('/source');
            } else {
                die("Data not submit please go back and resubmit");
            }
        }
    }
}
