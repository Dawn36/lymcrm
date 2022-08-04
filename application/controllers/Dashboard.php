<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('OwnerModal', 'OWNER');
		$this->load->model('DashboardModel', 'DASHBOARD');
	}
	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['subCount'] = $this->DASHBOARD->GetSubAdminCount();
			$data['userCount'] = $this->DASHBOARD->GetUsersCount();
			$data['renewCount'] = $this->DASHBOARD->GetRenewCount();
			$data['ownerCount'] = $this->DASHBOARD->GetOwnerCount();
			$data['propertyCount'] = $this->DASHBOARD->GetPropertyCount();
			$data['tenantCount'] = $this->DASHBOARD->GetTenantCount();
			$data['emailSelf'] = $this->DASHBOARD->GetEmailSelf();
			$data['totalRevenue'] = $this->DASHBOARD->GetTotalRevenue();
			$data['totalPaid'] = $this->DASHBOARD->GetTotalPaid();
			$data['emailInfo'] =  $this->DASHBOARD->GetEmailSystem();
			$data['complaint'] =  $this->DASHBOARD->GetComplaint();
			$data['complaintEmailPending'] =  $this->DASHBOARD->GetComplaintPendingEmailSend();
			$data['complaintEmailAssigned'] =  $this->DASHBOARD->GetComplaintAssignedEmailSend();
			$data['complaintEmailCompleted'] =  $this->DASHBOARD->GetComplaintCompleteEmailSend();
			$this->load->view('infection_dashboard', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}


	public function GetHistory()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
			$depositId = $arrPost['depositId'];
			$data['emailHistory'] = $this->DASHBOARD->GetEmailHistory($depositId);
			return $this->load->view('email_self_history', $data);
		} else {
			redirect('login');
		}
	}
}
