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
<<<<<<< HEAD
=======
	public function GetOwnerDeposit($tenancyId)
	 {
	 	$this->db->select('*');
	 	$this->db->from('deposit d'); 
    	$this->db->join('payment pay', 'pay.record_id=d.payment_id', 'INNER');
        $this->db->where('d.status','active');
        $this->db->where('d.tenancy_id',$tenancyId);
        $this->db->where('pay.is_deposit','yes');
        $query = $this->db->get(); 
        log_message('debug',$this->db->last_query());
        return   $query->result_array();
		
        
	}
>>>>>>> 3bdb593 (Initial commit)
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
    	log_message('debug', $this->db->last_query());
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
    	$this->db->where('u.role_id',OWNER);
    	$this->db->where('u.owner_tenant_id',$ownerTenantId);
    	  
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();
        
	}
	public function GetOwnerTenant($ownerTenantId)
	 {
	 	$this->db->select('tc.record_id,t.name,tc.no_of_payments,t.email,b.building_name, b.building_address, b.building_community, a.apartment_number, tc.start_date,tc.end_date,tc.is_renew,tc.record_id AS tenancyId');
    	$this->db->from('users u'); 
    	$this->db->join('property p', 'p.owner_id = u.owner_tenant_id', 'INNER');
    	$this->db->join('building b', 'b.record_id=p.building_id', 'INNER');
    	$this->db->join('apartment a', 'a.record_id=p.apartment_id', 'INNER');
    	$this->db->join('tenancy tc', 'tc.apartment_id=p.apartment_id', 'INNER');
    	$this->db->join('tenant t', 't.record_id=tc.tenant_id', 'INNER');
    	// $this->db->where('tc.building_id','p.building_id');
    	$this->db->where('u.status','active');
    	$this->db->where('p.status','active');
    	$this->db->where('a.status','active');
    	$this->db->where('b.status','active');
    	$this->db->where('tc.status','active');
    	$this->db->where('tc.is_renew','no');
    	$this->db->where('u.role_id',OWNER);
    	$this->db->where('u.owner_tenant_id',$ownerTenantId);
    	  
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();
        
	}
	public function GetTenantTenacy($ownerTenantId)
	 {
	 	$this->db->select('o.name,o.email,b.building_name,b.building_address,b.building_community,a.apartment_number,tc.start_date,tc.end_date,tc.no_of_payments,tc.record_id AS tenancyId');
    	$this->db->from('users u'); 
    	$this->db->join('tenancy tc ', 'u.owner_tenant_id = tc.tenant_id', 'INNER');
    	$this->db->join('building b', 'tc.building_id = b.record_id', 'INNER');
    	$this->db->join('apartment a', 'tc.apartment_id = a.record_id', 'INNER');
    	$this->db->join('property p', 'p.apartment_id = tc.apartment_id', 'INNER');
    	$this->db->join('owner o', 'o.record_id = p.owner_id', 'INNER');
    	// $this->db->where('tc.building_id','p.building_id');
    	$this->db->where('u.status','active');
    	$this->db->where('p.status','active');
    	$this->db->where('a.status','active');
    	$this->db->where('b.status','active');
    	$this->db->where('tc.status','active');
    	$this->db->where('tc.is_renew','no');
    	$this->db->where('u.role_id',TENANT);
    	$this->db->where('u.owner_tenant_id',$ownerTenantId);
    	  
    	$query = $this->db->get(); 
    	log_message('debug', $this->db->last_query());
    	return $query->result_array();
        
	}
<<<<<<< HEAD
	public function GetOwnerDeposit($tenancyId)
	 {
	 	$this->db->select('*');
	 	$this->db->from('deposit d'); 
    	$this->db->join('payment pay', 'pay.record_id=d.payment_id', 'INNER');
        $this->db->where('d.status','active');
        $this->db->where('d.tenancy_id',$tenancyId);
        $this->db->where('pay.is_deposit','yes');
        $query = $this->db->get(); 
        log_message('debug',$this->db->last_query());
        return   $query->result_array();
		
        
	}
	   public function GetDepositImgs($tenancyId)
=======
	  public function GetDepositImgs($tenancyId)
>>>>>>> 3bdb593 (Initial commit)
    {
        $this->db->select('*');
        $this->db->from('deposit d'); 
        $this->db->join('deposit_attachment da', 'd.record_id=da.deposit_id', 'INNER');
        $this->db->where('d.tenancy_id',$tenancyId);
        $this->db->where('d.status','active');
        $query = $this->db->get(); 
        log_message('debug', $this->db->last_query());
        return $query->result_array();   
    }
	
	
}
?>
