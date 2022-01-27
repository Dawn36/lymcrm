<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bed extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_bed');
			$bed = $this->Model_bed->BedShow();
			$data['bed']=$bed ;
			$this->load->view('bed', $data );
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	
		
	}
		public function BedAdd()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('bed_add');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
	public function BedAddVerify()
	{	
		if($this->session->userdata('name'))
		{	
			$arrPost=$this->input->post();
			$arrBedInfo['ward_no']=$arrPost['ward_no'];
			$arrBedInfo['bed_no']=$arrPost['bed_no'];
			$arrBedInfo['bed_creation']=date("Y-m-d");

			$this->load->model('Model_bed');
			$check = $this->Model_bed->BedAdd($arrBedInfo);
			if($check== true)
			{
				redirect('/Bed');
			}
			else
			{
				die("asd");
			}
			
			}
		
	}
		public function BedEdit($id)
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_bed');
			$get = $this->Model_bed->BedGet($id);
			$data['bed']=$get ;
			$this->load->view('bed_edit', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
	public function UpadteBed()
	{	
		if($this->session->userdata('name'))
		{ 
			$arrPost=$this->input->post();
			$arrBedInfo['ward_no']=$arrPost['ward_no'];
			$arrBedInfo['bed_no']=$arrPost['bed_no'];
			$arrBedInfo['bed_updation']=date("Y-m-d");
			$id=$arrPost['id'];

			$this->load->model('Model_bed');

			$check = $this->Model_bed->UpadateBedDb($id, $arrBedInfo);
			if($check== true)
			{
				redirect('/Bed');

			}
			
			
		}
	}
		public function Lovs()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_lovs');
			$lovs = $this->Model_lovs->LovsShow();
			$data['lovs']=$lovs ;
			$this->load->view('lovs', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}

		public function LovsAdd()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('lovs_add');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
		public function LovsAddVerify()
	{	
		if($this->session->userdata('name'))
		{
			$arrUserInfo['lov_name']=$this->input->post('lovs_name');
			$arrUserInfo['lov_type']=$this->input->post('lovs_type');
			$arrUserInfo['lov_creation']=date("Y-m-d");
			$this->load->model('Model_lovs');
			$check = $this->Model_lovs->LovsAdd($arrUserInfo);
			if($check== true)
			{
				redirect('/Bed/Lovs');
			}
			
			}
		else
		{
			redirect('login');
		}
		
	}
	public function Lovsedit($id)
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_lovs');
			$get = $this->Model_lovs->LovsGet($id);
			$data['lovs']=$get ;
			$this->load->view('lovs_edit',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
		
	}
	public function UpadteLovs()
	{	
		if($this->session->userdata('name'))
		{ 
			$arr=$this->input->post();
			$arrUserInfo['lov_name']=$arr['lovs_name'];
			$arrUserInfo['lov_type']=$this->input->post('lovs_type');
			$arrUserInfo['lov_updation']=date("Y-m-d");
			$id=$this->input->post('id');

			$this->load->model('Model_lovs');

			$check = $this->Model_lovs->UpadteLovsDb($id, $arrUserInfo);
			if($check== true)
			{
				redirect('/Bed/Lovs');

			}
			
			
		}
	}


}