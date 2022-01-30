<?php 
class ApartmentModal  extends CI_Model{

	public function ShowApartment($tableName,$buildingId)
	 {
	 	$this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('building_id',$buildingId);
        log_message('debug',$this->db->last_query());
        return $this->db->get($tableName)->result_array();    
		
        
	}
	public function ApartmentExit($tableName,$apartmentName,$buildingId)
	 {
	 	$this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('apartment_number',$apartmentName);
        $this->db->where('building_id',$buildingId);
        log_message('debug',$this->db->last_query());
        return $this->db->get($tableName)->result_array();    
		
        
	}
	
	
}

?>
