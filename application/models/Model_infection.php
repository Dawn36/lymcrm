<?php
class Model_infection  extends CI_Model
{

	public function InfectionForm($arrInfo)
	{
		$invalid = $this->db->insert('ic_surveillance_form', $arrInfo);
		$insertId = $this->db->insert_id();
		log_message('debug',  'Infection Form ::');
		log_message('debug',  $this->db->last_query());
		if ($invalid) {
			return $insertId;
		} else {
			return false;
		}
	}
	public function InfectionFormDevice($arrInfoPhlebitis)
	{
		$invalid = $this->db->insert('ic_infection_devices', $arrInfoPhlebitis);
		log_message('debug',  'InfectionFormDevice ::');
		log_message('debug',  $this->db->last_query());
		if ($invalid) {
			$deviceId = $this->db->insert_id();
			return $deviceId;
		} else {
			return false;
		}
	}

	public function InfectionFormCulture($infoAdd)
	{
		$this->db->insert('ic_culture_report', $infoAdd);
		log_message('debug',  'InfectionFormCulture ::');
		log_message('debug',  $this->db->last_query());
		return true;
	}

	public function view_submitted_form_data()
	{
		$this->db->where('form_status', 1);
		$result = $this->db->get('ic_surveillance_form')->result_array();
		log_message('debug',  'view_submitted_form_data ::');
		log_message('debug',  $this->db->last_query());
		return $result;
	}

	public function get_antibiotic_list_by_orgnisam($org_name)
	{
		$this->db->where('organism_name', $org_name);
		$result = $this->db->get('ic_lovs');
		log_message('debug',  'get_antibiotic_list_by_orgnisam ::');
		log_message('debug',  $this->db->last_query());
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {

			return false;
		}
	}

	public function get_ward_list($ward)
	{
		$this->db->where('ward_no', $ward);
		$result = $this->db->get('ic_bed')->result_array();
		log_message('debug',  'get_ward_list ::');
		log_message('debug',  $this->db->last_query());
		if ($result > 0) {
			return $result;
		} else {

			return false;
		}
	}

	public function check_Mr_Number($mr_num)
	{
		$this->db->where('mr_no', $mr_num);
		$this->db->order_by('form_id', 'DESC');
		$this->db->limit(1);
		$result = $this->db->get('ic_surveillance_form');
		log_message('debug', 'check_Mr_Number');
		log_message('debug', $this->db->last_query());
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {

			return false;
		}
	}
	
}
