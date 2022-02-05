<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DashboardModel', 'DASHBOARD');
	} 
	public function index()
	{	
		if($this->session->userdata('name'))
		{
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['ownerCount']=$this->DASHBOARD->GetOwnerCount();
			$data['propertyCount']=$this->DASHBOARD->GetPropertyCount();
			$data['tenantCount']=$this->DASHBOARD->GetTenantCount();
			$data['emailSelf']=$this->DASHBOARD->GetEmailSelf();
			$data['totalRevenue']=$this->DASHBOARD->GetTotalRevenue();
			$data['totalPaid']=$this->DASHBOARD->GetTotalPaid();
			$this->load->view('infection_dashboard',$data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
		
	}


	public function GetHistory()
	{	
		 if ($this->session->userdata('name')) {
		 	$arrPost = $this->input->post();
        	$depositId=$arrPost['depositId'];	
		 	$data['emailHistory']=$this->DASHBOARD->GetEmailHistory($depositId);
            return $this->load->view('email_self_history' ,$data);
        } else {
            redirect('login');
        }

	}
}
