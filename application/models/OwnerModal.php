<?php 
class OwnerModal  extends CI_Model{

		public function AddOwner($arrInfo,$tableName)
	 {
	 	$result = $this->db->insert($tableName,$arrInfo);
		log_message('debug',$this->db->last_query());
        if($result == true)
        {
        	return true;
        }
        else
        {
        	return false;
        }

	}
	public function ShowOwner($tableName)
	 {
	 	$userId=$this->session->userdata('user_id');
	 	$roleId=$this->session->userdata('role_id');
		$this->db->select('*');
	 	 $this->db->where('status','active');
	 	 $id=array(3,4);
	 	 $this->db->where_in('role_id',$id);
	 	 $this->db->order_by('record_id', 'DESC');
	 	$owner = $this->db->get($tableName)->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $owner;

	}
	function EmailExit($email,$tableName)
	{
		$userId=$this->session->userdata('user_id');
	 	$roleId=$this->session->userdata('role_id');
		$this->db->select('*');
	 	 $this->db->where('status','active');
	 	 $this->db->where('email', $email);
	 	$owner = $this->db->get($tableName)->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $owner;
	}
	public function ShowOwnerEdit($tableName,$id)
	{
		$this->db->select('*');
	 	 $this->db->where('status','active');
	 	 $this->db->where('record_id',$id);
	 	$data = $this->db->get($tableName)->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $data;
	}

	public function UpdateOwner($arrInfo,$tableName,$recordId)
	 {
	 	
	 	$this->db->where('record_id',$recordId);
	 	$result= $this->db->update($tableName,$arrInfo);
	 	 // print_r($edit) ;
	 	
	 	if($result == true)
        {
        	return true;
        }
        else
        {
        	return false;
        }


	}

}

?>
