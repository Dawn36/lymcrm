<?php 
class Model_infection  extends CI_Model{

	public function InfectionForm($arrInfo)
	 {
		$invalid = $this->db->insert('ic_surveillance_form',$arrInfo);
		if ($invalid) { return true;} else {return false ;}
        
	}
	public function InfectionFormDevice($arrInfoPhlebitis)
	 {
	 	$invalid = $this->db->insert('ic_infection_devices',$arrInfoPhlebitis);
		if ($invalid) {
			$deviceId = $this->db->insert_id();
	 		 // log_message('debug',  $deviceId);
        	return $deviceId ;
		} else {
			return false ;
		}
	 	

	}
	public function InfectionFormCulture($infoAdd)
	 {
	 	log_message('debug',  "fun");
	 	 $this->db->insert('ic_culture_report',$infoAdd);
        return true ;

	}

	public function view_submitted_form_data()
	 {
		$this->db->where('form_status', 1);
        $result = $this->db->get('ic_surveillance_form')->result_array();
		log_message('debug', print_r($result,true));
        return $result;
	

	}
	public function get_antibiotic_list_by_orgnisam($org_name)
	{
		$this->db->where('organism_name',$org_name);
		$result = $this->db->get('ic_lovs');
		log_message('debug', $this->db->last_query());
		if($result->num_rows() > 0){
			return $result->row();
 
		} else {
 
		 return false;
		}
		
	}
}

	

?>
