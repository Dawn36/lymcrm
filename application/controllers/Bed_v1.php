<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bed extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->model('Model_bed');
            $bed = $this->Model_bed->BedShow();
            $data['bed'] = $bed;
            $this->load->view('bed', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }

    }
    public function BedAdd()
    {
        if ($this->session->userdata('name')) {
			$this->load->model('Model_bed');
			$data['ward'] = $this->Model_bed->get_ward();
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->view('bed_add',$data);
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

            $this->load->model('Model_bed');
            $check = $this->Model_bed->BedAdd($arrBedInfo);
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
            $this->load->model('Model_bed');
            $data['bed'] = $this->Model_bed->BedGet($id);
			$data['ward'] = $this->Model_bed->get_ward();
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

            $this->load->model('Model_bed');

            $check = $this->Model_bed->UpadateBedDb($id, $arrBedInfo);
            if ($check == true) {
                redirect('/Bed');

            }

        }
    }
    public function Lovs()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $this->load->model('Model_lovs');
            $lovs = $this->Model_lovs->LovsShow();
            $data['lovs'] = $lovs;
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
            $this->load->model('Model_lovs');
            $check = $this->Model_lovs->LovsAdd($arrUserInfo);
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
            $this->load->model('Model_lovs');
            $get = $this->Model_lovs->LovsGet($id);
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

            $this->load->model('Model_lovs');

            $check = $this->Model_lovs->UpadteLovsDb($id, $arrUserInfo);
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
            $this->load->model('Model_lovs');
            $data = $this->Model_lovs->check_org_name($org_name);
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
        $this->load->model('Model_lovs');

        $data = $this->Model_lovs->delete_lov($id, $arrLovInfo);
        if ($data == 1) {

            echo json_encode($data);
        } else {
            return false;
        }

    }

}
