<?php 
class Model_login  extends CI_Model{

	public function user_auth($arr)
	 {
		$this->db->where('user_name',$arr['name']);
		$this->db->where('user_password',$arr['password']);
		$this->db->where('user_status','1');
		$this->db->join('ic_roles', 'ic_users.user_role_id=ic_roles.role_code', 'INNER');
		$query = $this->db->get('ic_users');
		log_message("debug",$this->db->last_query());
		return $query->result_array();
		//if($query){ return $query->result_array(); } else { return $query->result_array(); }	
		//if($query){ return true; } else { return false; }	
	}
}

?>