<?php 
class BuildingModal  extends CI_Model{
	function BuildingExit($buldingName,$tableName)
	{
		$this->db->select('*');
	 	 $this->db->where('status','active');
	 	 $this->db->where('building_name', $buldingName);
	 	$building = $this->db->get($tableName)->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $building;
	}

}

?>
