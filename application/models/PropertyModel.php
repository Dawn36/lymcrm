<?php 
class PropertyModel  extends CI_Model{

	public function GetApartments($tableName,$buildingId)
	 {
	 	$this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('building_id',$buildingId);
        $this->db->where('is_owner','no');
        log_message('debug',$this->db->last_query());
        return $this->db->get($tableName)->result_array();    
		
        
	}
	public function BuildingApartmentEdit($tableName,$buildingId)
	 {
	 	$this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('building_id',$buildingId);
        // $this->db->where('is_owner','no');
        log_message('debug',$this->db->last_query());
        return $this->db->get($tableName)->result_array();    
		
        
	}
	public function UpdateApartment($recordId,$tableName,$arrInfo)
	 {
	 	
	 	$this->db->where('record_id',$recordId);
	 	$result= $this->db->update($tableName,$arrInfo);
 log_message('debug', $this->db->last_query());
	 	
	 	if($result == true)
        {
        	return true;
        }
        else
        {
        	return false;
        }


	}
	public function ShowProperty()
	 {
	 	$this->db->select('p.record_id,p.apartment_id,b.building_name,p.community_building,a.apartment_number,o.name,p.created_name,p.updated_name');
    	$this->db->from('property p'); 
    	$this->db->join('apartment a', 'p.apartment_id=a.record_id', 'INNER');
    	$this->db->join('building b', 'b.record_id=p.building_id', 'INNER');
    	$this->db->join('owner o', 'o.record_id=p.owner_id', 'INNER');
    	$this->db->where('p.status','active');
    	$this->db->where('b.status','active');
    	$this->db->where('o.status','active');
    	$this->db->where('a.status','active');
    	  
    	$query = $this->db->get(); 
    	return $query->result_array();
        
	}
	public function GetOwnerProperty($ownerTenantId)
	 {
	 	$this->db->select('b.building_name,b.building_address,b.building_community,a.apartment_number');
    	$this->db->from('users u'); 
    	$this->db->join('property p', 'p.owner_id = u.owner_tenant_id', 'INNER');
    	$this->db->join('building b', 'b.record_id=p.building_id', 'INNER');
    	$this->db->join('apartment a', 'a.record_id=p.apartment_id', 'INNER');
    	$this->db->where('u.status','active');
    	$this->db->where('p.status','active');
    	$this->db->where('a.status','active');
    	$this->db->where('b.status','active');
    	  
    	$query = $this->db->get(); 
    	return $query->result_array();
        
	}
	
}
?>
