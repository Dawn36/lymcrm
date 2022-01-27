<?php 
class Main_modal  extends CI_Model{

	public function CanLogin($userName,$userPassword)
	{
		//echo "here";
		
		$this->db->where('user_name',$userName);
		$this->db->where('user_password',$userPassword);
		$query=$this->db->get('users');

		log_message('debug', $this->db->last_query());
		if($query->num_rows() > 0){
			log_message('debug', "true !");
			return true;
		}
		else {
			log_message('debug', "false !");
			return false;
		}
		
		
	}
	public function GetUsers()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
}

?>
