<?php 
class Model_login  extends CI_Model{

	public function user_auth($arr)
	 {
		// log_message("debug",$this->db->last_query());
		$this->db->select('*,u.record_id AS user_id,u.name AS user_name');
    	$this->db->from('users u'); 
    	$this->db->join('roles r', 'u.role_id=r.record_id', 'inner');
    	$this->db->where('u.name',$arr['name']);
    	$this->db->where('u.password',$arr['password']);
		$this->db->where('u.status','active');       
		$this->db->where('r.status','active');       
    	$query = $this->db->get(); 
    	return $query->result_array();
	
	}
}

?>