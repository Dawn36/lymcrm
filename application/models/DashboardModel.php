<?php
class DashboardModel  extends CI_Model
{
	function GetEmailSelf()
	{
		$this->db->select('DISTINCT(deposit_id),owner_name, COUNT(deposit_id) AS ccount,deposit_id, created_at, created_name');
		$this->db->where('deposit_id is NOT NULL', NULL, FALSE);
		$this->db->where('owner_name is NOT NULL', NULL, FALSE);
		$this->db->where('owner_email is NOT NULL', NULL, FALSE);
		$this->db->where('apartment_no is NOT NULL', NULL, FALSE);
		$this->db->group_by("deposit_id");
		$this->db->order_by("record_id", "DESC");
		$data = $this->db->get('email_self')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
<<<<<<< HEAD
=======
	function GetEmailSystem()
	{
		$this->db->select('tenant_name,GROUP_CONCAT(end_date)AS end_date_group ,GROUP_CONCAT(`check`) AS `check`');
		// $this->db->where('status', 'active');
		$this->db->group_by('tenancy_id');
		$data = $this->db->get('email_history')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
>>>>>>> 3bdb593 (Initial commit)
	function GetEmailHistory($depositId)
	{
		$this->db->select('*');
		$this->db->order_by("record_id", "DESC");
		$this->db->where('deposit_id', $depositId);
		$data = $this->db->get('email_self')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetSubAdminCount()
	{
		$this->db->select('COUNT(*) AS sub_admin_count');
		$this->db->where('role_id', '2');
		$this->db->where('status', 'active');
		$data = $this->db->get('users')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetUsersCount()
	{
		$this->db->select('COUNT(*) AS users_count');
		$this->db->where('status', 'active')->where("(role_id='3' OR role_id='4')");
		$data = $this->db->get('users')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
<<<<<<< HEAD
	function GetEmailSystem()
	{
		$this->db->select('tenant_name,GROUP_CONCAT(end_date)AS end_date_group ,GROUP_CONCAT(`check`) AS `check`');
		// $this->db->where('status', 'active');
		$this->db->group_by('tenancy_id');
		$data = $this->db->get('email_history')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetRenewCount()
	{
		$date = Date("Y-m-d");
=======
	function GetRenewCount()
	{
	    $date=Date("Y-m-d");
>>>>>>> 3bdb593 (Initial commit)
		$this->db->select('COUNT(*) AS renew_count');
		$this->db->where('status', 'active');
		$this->db->where('DATE(end_date) <=', $date);
		$this->db->where('is_renew', 'no');
		$data = $this->db->get('tenancy')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetOwnerCount()
	{
		$this->db->select('COUNT(*) AS owner_count');
		$this->db->where('status', 'active');
		$data = $this->db->get('owner')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetPropertyCount()
	{
		$this->db->select('COUNT(*) AS property_count');
		$this->db->where('status', 'active');
		$data = $this->db->get('property')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetTenantCount()
	{
		$this->db->select('COUNT(*) AS tenant_count');
		$this->db->where('status', 'active');

		$data = $this->db->get('tenant')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetTotalRevenue()
	{
		$this->db->select('SUM(rent_amount) AS rent_amount ');
		$this->db->where('status', 'active');
		$data = $this->db->get('tenancy')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetTotalPaid()
	{
		$this->db->select('SUM(p.amount) AS amount');
		$this->db->from('deposit d');
		$this->db->join('payment p', 'p.record_id=d.payment_id', 'INNER');
		$this->db->where('d.status', 'active');
		$this->db->where('p.is_deposit', 'yes');
		$query = $this->db->get();
		log_message('debug', $this->db->last_query());
		return $query->result_array();
	}
	function GetComplaint()
	{
		$this->db->select("SUM(CASE WHEN complaint_status='completed' THEN 1 ELSE 0 END)AS complete,
		SUM(CASE WHEN complaint_status='assigned' THEN 1 ELSE 0 END) AS assigned,
		SUM(CASE WHEN complaint_status='pending' THEN 1 ELSE 0 END) AS pending");
		$this->db->where('status', 'active');
		$data = $this->db->get('complaint')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetComplaintPendingEmailSend()
	{
		$this->db->select('*');
		$this->db->where('complaint_status', 'pending');
		$data = $this->db->get('email_complaint')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetComplaintAssignedEmailSend()
	{
		$this->db->select('*');
		$this->db->where('complaint_status', 'assigned');
		$data = $this->db->get('email_complaint')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
	function GetComplaintCompleteEmailSend()
	{
		$this->db->select('*');
		$this->db->where('complaint_status', 'completed');
		$data = $this->db->get('email_complaint')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
<<<<<<< HEAD
=======
	function GetDepositEmailNotSend()
	{
		$this->db->select('COUNT(*) AS email_not_send');
		$this->db->where('is_email_send', 'no');
		$data = $this->db->get('deposit')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}
>>>>>>> 3bdb593 (Initial commit)
}
