<?php 
class Model_bed  extends CI_Model{

		public function BedAdd($arrBedInfo)
	 {
	 	$result = $this->db->insert('ic_bed',$arrBedInfo);
		log_message('debug',$this->db->last_query());
        if($result == true)
        {
        	return true;
        }
        else
        {
        	return false;
        }

	}
	public function BedShow()
	 {
		$this->db->select('*');
		$this->db->join('ic_bed','ic_bed.ward_no=ic_ward.ward_no','INNER');
	 	 $this->db->where('ic_bed.bed_status',1);
	 	$bed = $this->db->get('ic_ward')->result_array();
	 	// print_r($role) ;
		 log_message('debug', $this->db->last_query());
	 	return $bed;

	}
	public function Getward()
	{
		$this->db->select('ic_bed.ward_no,ic_ward.ward_depart');
		$this->db->join('ic_ward','ic_ward.ward_no=ic_bed.ward_no','INNER');
		$this->db->distinct();
		$this->db->where('bed_status',1);
		$bed = $this->db->get('ic_bed ')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $bed;

   }
   public function get_ward()
	{
		$this->db->where('ward_status',1);
		$bed = $this->db->get('ic_ward')->result_array();
		// print_r($role) ;
		log_message('debug', $this->db->last_query());
		return $bed;

   }
	public function BedGet($id)
	 {
	 	$this->db->where('bed_id',$id);
	 	$get = $this->db->get('ic_bed')->result_array();
	 	 // print_r($edit) ;
	 	return $get;

	}
	public function UpadateBedDb($id,$arrUserInfo)
	 {
	 	
	 	$this->db->where('bed_id',$id);
	 	$result= $this->db->update('ic_bed',$arrUserInfo);
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
	public function delete_bed($id,$bed_status)
    {
        
        $this->db->where('bed_id',$id);
       
        $result= $this->db->update('ic_bed',$bed_status);
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
}

?>
