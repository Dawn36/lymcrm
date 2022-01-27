<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ward extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			 $this->load->model('Model_ward');
			 $ward = $this->Model_ward->WardShow();
			 $data['ward']=$ward ;
			$this->load->view('ward_show' , $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	
		
	}
		public function WardAdd()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('ward_add');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
	public function WardAddVerify()
	{	
		if($this->session->userdata('name'))
		{	
			$arrPost=$this->input->post();
			$arrWardInfo['ward_no']=$arrPost['ward_no'];
			$arrWardInfo['ward_depart']=$arrPost['ward_depart'];
			$arrWardInfo['ward_creation']=date("Y-m-d");

			$this->load->model('Model_ward');
			$check = $this->Model_ward->WardAdd($arrWardInfo);
			if($check== true)
			{
				redirect('/Ward');
			}
			else
			{
				die("asd");
			}
			
			}
		
	}
		public function WardEdit($id)
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_ward');
			$get = $this->Model_ward->WardGet($id);
			$data['ward']=$get ;
			$this->load->view('ward_edit', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
	public function UpadateWard()
	{	
		if($this->session->userdata('name'))
		{ 
			$arrPost=$this->input->post();
			$arrWardInfo['ward_no']=$arrPost['ward_no'];
			$arrWardInfo['ward_depart']=$arrPost['ward_depart'];
			$arrWardInfo['ward_updation']=date("Y-m-d");
			$id=$arrPost['id'];

			$this->load->model('Model_ward');

			$check = $this->Model_ward->UpadateWardDb($id, $arrWardInfo);
			if($check== true)
			{
				redirect('/Ward');

			}
			
			
		}
	}
		


}