<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ward extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_ward', 'MWARD');
		$this->load->model('Model_lovs', 'MLOVS');
	}

	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['ward'] = $this->MWARD->WardShow();
			$this->load->view('ward_show', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function WardAdd()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('ward_add');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function WardAddVerify()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
			$arrWardInfo['ward_no'] = $arrPost['ward_no'];
			$arrWardInfo['ward_depart'] = $arrPost['ward_depart'];
			$arrWardInfo['ward_creation'] = date("Y-m-d");
			$check = $this->MWARD->WardAdd($arrWardInfo);
			if ($check == true) {
				redirect('/Ward');
			} else {
				die("asd");
			}
		}
	}
	public function WardEdit($id)
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['ward'] = $this->MWARD->WardGet($id);
			$this->load->view('ward_edit', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function UpadateWard()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
			$arrWardInfo['ward_no'] = $arrPost['ward_no'];
			$arrWardInfo['ward_depart'] = $arrPost['ward_depart'];
			$arrWardInfo['ward_updation'] = date("Y-m-d");
			$id = $arrPost['id'];
			$check = $this->MWARD->UpadateWardDb($id, $arrWardInfo);
			if ($check == true) {
				redirect('/Ward');
			}
		}
	}
	public function checkWard()
	{
		if ($this->session->userdata('name')) {
			$post = $this->input->post();
			$ward_no = $post['ward_no'];
			$data = $this->MWARD->check_Ward($ward_no);
			if ($data) {
				echo json_encode($data);
			} else {
				return false;
			}
		} else {
			redirect('login');
		}
	}
	public function WardDelete()
	{
		$post = $this->input->post();
		$id = $post['id'];
		$arrLovInfo['ward_status'] = 0;
		$data = $this->MWARD->delete_Ward($id, $arrLovInfo);
		if ($data == 1) {

			echo json_encode($data);
		} else {
			return false;
		}
	}
}
