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
	public function AddUpdateBuilding($tableName, $dataArr, $apartment_number)
	{
		$building_name = $dataArr['building_name'];
		$this->db->select('*');
		$this->db->where('status', 'active');
		$this->db->where('building_name', $building_name);
		$buildingRs = $this->db->get($tableName)->result_array();

		if (empty($buildingRs)) {
			// If not found any building by name than insert building and insert Appartment of inserted building
			$dataArr['created_at'] = date("Y-m-d h:i:s");
			$dataArr['created_by'] = $this->session->userdata('user_id');
			$dataArr['created_name'] = $this->session->userdata('user_name');
			$rs = $this->db->insert($tableName, $dataArr);
			$lsid = $this->db->insert_id();

			$appartmentArr['building_id'] = $lsid;
			$appartmentArr['apartment_number'] = $apartment_number;
			$appartmentArr['created_at'] = date("Y-m-d h:i:s");
			$appartmentArr['created_by'] = $this->session->userdata('user_id');
			$appartmentArr['created_name'] = $this->session->userdata('user_name');
			$rs = $this->db->insert('apartment', $appartmentArr);
		} else {
			// If found building by name than Update Building row and check appertment to whether update or insert
			$dataArr['updated_at'] = date("Y-m-d h:i:s");
			$dataArr['updated_by'] =  $this->session->userdata('user_id');
			$dataArr['updated_name'] =  $this->session->userdata('user_name');
			$this->db->where('building_name', $building_name);
			$rs = $this->db->update($tableName, $dataArr);

			$buildingId = $buildingRs[0]['record_id'];
			$this->db->select('*');
			$this->db->where('status', 'active');
			$this->db->where('building_id', $buildingId);
			$this->db->where('apartment_number', $apartment_number);
			$appartmentRs = $this->db->get('apartment')->result_array();

			if (empty($appartmentRs)) {
				// If not found any appartment by (appartment number and building id) than insert it
				$appartmentArr['building_id'] = $buildingId;
				$appartmentArr['apartment_number'] = $apartment_number;
				$appartmentArr['created_at'] = date("Y-m-d h:i:s");
				$appartmentArr['created_by'] = $this->session->userdata('user_id');
				$appartmentArr['created_name'] = $this->session->userdata('user_name');
				$rs = $this->db->insert('apartment', $appartmentArr);
			} else {
				// If found any appartment by (appartment number and building id) than update it
				$appartmentArr['updated_at'] = date("Y-m-d h:i:s");
				$appartmentArr['updated_by'] =  $this->session->userdata('user_id');
				$appartmentArr['updated_name'] =  $this->session->userdata('user_name');
				$this->db->where('building_id', $buildingId);
				$this->db->where('apartment_number', $apartment_number);
				$rs = $this->db->update('apartment', $appartmentArr);
			}
		}

		if ($rs == true) {
			return true;
		} else {
			return false;
		}
	}

}

?>
