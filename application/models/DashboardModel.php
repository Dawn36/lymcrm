<?php 
class DashboardModel  extends CI_Model{
	function GetEmailSelf()
	{
		$this->db->select('DISTINCT(deposit_id),owner_name, COUNT(deposit_id) AS ccount,deposit_id, created_at, created_name');
		$this->db->group_by("deposit_id");
	 	$this->db->order_by("record_id", "DESC");
	 	$data = $this->db->get('email_self')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}
	function GetEmailHistory($depositId)
	{
		$this->db->select('*');
	 	$this->db->order_by("record_id", "DESC");
	 	$this->db->where('deposit_id',$depositId);
	 	$data = $this->db->get('email_self')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}
	function GetOwnerCount()
	{
		$this->db->select('COUNT(*) AS owner_count');
	 	$data = $this->db->get('owner')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}
	function GetPropertyCount()
	{
		$this->db->select('COUNT(*) AS property_count');
	 	$data = $this->db->get('property')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}
	function GetTenantCount()
	{
		$this->db->select('COUNT(*) AS tenant_count');
	 	$data = $this->db->get('tenant')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}
	function GetTotalRevenue()
	{
		$this->db->select('SUM(rent_amount) AS rent_amount ');
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
    	$this->db->where('d.status','active');
    	$this->db->where('p.is_deposit','yes');
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
}

?>
