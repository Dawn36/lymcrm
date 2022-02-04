<?php 
class DepositModel  extends CI_Model{

		public function GetBuidlingFromTenany()
	 {
	 $this->db->select('DISTINCT 
	  (tc.building_id),
	  b.building_name');
    	$this->db->from('building b'); 
    	$this->db->join('tenancy tc ', 'tc.building_id = b.record_id', 'INNER');
    	$this->db->where('tc.is_renew','no');
    	$this->db->where('tc.status','active');
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
	public function GetApartment($building)
	{
		$this->db->select('DISTINCT(tc.apartment_id),a.apartment_number');
    	$this->db->from('apartment a'); 
    	$this->db->join('tenancy tc', 'tc.apartment_id=a.record_id', 'INNER');
    	$this->db->where('tc.is_renew','no');
    	$this->db->where('tc.status','active');
    	$this->db->where('tc.building_id',$building);
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
	public function GetTenant($apartmentId)
	{
		$this->db->select('tc.record_id,t.name');
    	$this->db->from('tenant t'); 
    	$this->db->join('tenancy tc ', 'tc.tenant_id=t.record_id', 'INNER');
    	$this->db->where('tc.is_renew','no');
    	$this->db->where('tc.status','active');
    	$this->db->where('tc.apartment_id',$apartmentId);
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
	public function GetCheque($type,$tenantId)
	{
		$this->db->select('*');
    	$this->db->from('payment'); 
    	$this->db->where('tenancy_id',$tenantId);
    	$this->db->where('payment_type',$type);
    	$this->db->where('is_deposit','no');
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
	public function GetChequeSlip()
	{
		$this->db->select('d.record_id,pay.record_id AS payment_id,b.building_name,
a.apartment_number,o.name,o.email,d.type,
pay.cheque_no,pay.amount,
d.created_name,pay.installment,d.created_at');
    	$this->db->from('deposit d'); 
    	$this->db->join('building b', 'd.building_id=b.record_id', 'INNER');
    	$this->db->join('apartment a', 'd.apartment_id=a.record_id', 'INNER');
    	$this->db->join('property p', 'p.apartment_id = d.apartment_id', 'INNER');
    	$this->db->join('owner o', 'o.record_id=p.owner_id', 'INNER');
    	$this->db->join('payment pay', 'pay.record_id=d.payment_id', 'INNER');
    	$this->db->where('d.status','active');
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
	public function GetDepositImg($depositId)
	{
		$this->db->select('*');
    	$this->db->from('deposit_attachment'); 
    	$this->db->where('status','active');
    	$this->db->where('deposit_id',$depositId);
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();	 
	}
}

?>
