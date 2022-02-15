<?php
class OwnerModal  extends CI_Model
{

	public function AddOwner($arrInfo, $tableName)
	{
		$result = $this->db->insert($tableName, $arrInfo);
		log_message('debug', $this->db->last_query());
		if ($result == true) {
			return true;
		} else {
			return false;
		}
	}
	public function AddOwnerLastInsertedId($arrInfo, $tableName)
	{
		$result = $this->db->insert($tableName, $arrInfo);
		$last_id = $this->db->insert_id();
		log_message('debug', $this->db->last_query());
	
			return $last_id;
		
	}
	public function ShowOwner($tableName)
	{
		log_message('debug', 'ShowOwner');

		$userId = $this->session->userdata('user_id');
		$roleId = $this->session->userdata('role_id');
		$this->db->select('*');
		if ($tableName != 'email_history')
			$this->db->where('status', 'active');
		$this->db->order_by('record_id', 'DESC');
		$owner = $this->db->get($tableName)->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $owner;
	}
	function EmailExit($email, $tableName)
	{
		$userId = $this->session->userdata('user_id');
		$roleId = $this->session->userdata('role_id');
		$this->db->select('*');
		$this->db->where('status', 'active');
		$this->db->where('email', $email);
		$owner = $this->db->get($tableName)->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $owner;
	}
	public function ShowOwnerEdit($tableName, $id)
	{
		$this->db->select('*');
		$this->db->where('status', 'active');
		$this->db->where('record_id', $id);
		$data = $this->db->get($tableName)->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $data;
	}

	public function UpdateOwner($arrInfo, $tableName, $recordId)
	{

		$this->db->where('record_id', $recordId);
		$result = $this->db->update($tableName, $arrInfo);
		log_message('debug', $this->db->last_query());

		if ($result == true) {
			return true;
		} else {
			return false;
		}
	}
	public function AddUpdateOwnerTenant($tableName, $dataArr)
	{
		$email = $dataArr['email'];
		$this->db->select('*');
		$this->db->where('status', 'active');
		$this->db->where('email', $email);
		$rs = $this->db->get($tableName)->row();

		log_message('debug', "AddUpdateOwnerTenant find: " . $this->db->last_query());

		if (empty($rs)) {

			$dataArr['created_at'] = date("Y-m-d h:i:s");
			$dataArr['created_by'] = $this->session->userdata('user_id');
			$dataArr['created_name'] = $this->session->userdata('user_name');
			$rs = $this->db->insert($tableName, $dataArr);
			log_message('debug', "AddUpdateOwnerTenant insert : " . $this->db->last_query());
		} else {

			$dataArr['updated_at'] = date("Y-m-d h:i:s");
			$dataArr['updated_by'] =  $this->session->userdata('user_id');
			$dataArr['updated_name'] =  $this->session->userdata('user_name');
			$this->db->where('email', $email);
			$rs = $this->db->update($tableName, $dataArr);
			log_message('debug', "AddUpdateOwnerTenant update : " . $this->db->last_query());
		}

		if ($rs == true) {
			return true;
		} else {
			return false;
		}
	}
}
