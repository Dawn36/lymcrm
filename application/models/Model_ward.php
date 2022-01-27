<?php 
class Model_ward  extends CI_Model{

		public function WardAdd($arrWardInfo)
	 {
	 	$result = $this->db->insert('ic_ward',$arrWardInfo);
        if($result == true)
        {
        	return true;
        }
        else
        {
        	return false;
        }

	}
	public function WardShow()
	 {
	 	 $this->db->where('ward_status',1);
	 	$ward = $this->db->get('ic_ward')->result_array();
	 	// print_r($role) ;
	 	return $ward;

	}
	public function WardGet($id)
	 {
	 	$this->db->where('ward_id',$id);
	 	$get = $this->db->get('ic_ward')->result_array();
	 	 // print_r($edit) ;
	 	return $get;

	}
	public function UpadateWardDb($id,$arrUserInfo)
	 {
	 	
	 	$this->db->where('ward_id',$id);
	 	$result= $this->db->update('ic_ward',$arrUserInfo);
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
	public function delete_Ward($id,$ward_status)
    {
        
        $this->db->where('ward_id',$id);
       
        $result= $this->db->update('ic_ward',$ward_status);
         // print_r($result) ;
        
        if($result == true)
       {
           return 1;
       }
       else
       {
           return false;
       }


   }
   public function check_Ward($ward_no)
	{
		$this->db->where('ward_no',$ward_no);
		$this->db->where('ward_status',1);
		$result = $this->db->get('ic_ward');
		log_message('debug', $this->db->last_query());
		if($result->num_rows() > 0){
			return 1;
 
		} else {
 
		 return 2;
		}
		
	}
}

?>
