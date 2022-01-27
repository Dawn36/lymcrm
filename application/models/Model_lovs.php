<?php
class Model_lovs extends CI_Model
{

    public function LovsAdd($arrUserInfo)
    {
        $invalid = $this->db->insert('ic_lovs', $arrUserInfo);
		log_message('debug',$this->db->last_query());
		if($invalid){return true;}else{return false;}
        

    }
    public function LovsShow()
    {
        $this->db->where('lov_status', 1);
        $lovs = $this->db->get('ic_lovs')->result_array();
        // print_r($role) ;
        return $lovs;

    }
    public function SourceGet($id)
    {
        $data='';
        $this->db->where('record_id', $id);
        $this->db->where('status', 'active');
        $data = $this->db->get('ic_source')->result_array();
        // print_r($role) ;
        return $data;

    }
    public function UpadateBedDb($id,$arrUserInfo)
     {
        
        $this->db->where('record_id',$id);
        $result= $this->db->update('ic_source',$arrUserInfo);
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
    public function Show($dataArr)
    {
        $tableName=$dataArr['tablename'];
        $fieldName=$dataArr['fieldname'];
        $status=$dataArr['status'];
        $this->db->where($fieldName, $status);
        $data = $this->db->get($tableName)->result_array();
        // print_r($role) ;
        return $data;

    }
     public function Add($tableName,$arrInfo)
    {
        $invalid = $this->db->insert($tableName, $arrInfo);
        log_message('debug',$this->db->last_query());
        if($invalid){return true;}else{return false;}

    }
    public function Delete($tableName,$id, $arrInfo)
    {
        
        $this->db->where('record_id',$id);
       
        $result= $this->db->update($tableName,$arrInfo);
         // print_r($result) ;
         log_message('debug',$this->db->last_query());
        if($result == true)
       {
           return 1;
       }
       else
       {
           return false;
       }


   }


    public function LovsGet($id)
    {
        $this->db->where('lov_id', $id);
        $get = $this->db->get('ic_lovs')->result_array();
        return $get;

    }
    public function UpadteLovsDb($id, $arrUserInfo)
    {

        $this->db->where('lov_id', $id);
        $invalid = $this->db->update('ic_lovs', $arrUserInfo);
        if($invalid){return true;}else{return false;}
        return true;

    }

    public function type_mdr()
    {
        $this->db->where('lov_type=mdr');
        $this->db->where('lov_status', 1);
        $lovs = $this->db->get('ic_lovs')->result_array();
        return $lovs;

    }

    public function type_antiboitic()
    {
        $this->db->where('lov_type', $type);
        $this->db->where('lov_status', 1);
        $lovs = $this->db->get('ic_lovs')->result_array();
        return $lovs;

    }

    public function type_organism()
    {
        $this->db->where('lov_type=organism');
        $this->db->where('lov_status', 1);
        $lovs = $this->db->get('ic_lovs')->result_array();
        return $lovs;

    }
    
    public function wards()
    {
        $this->db->where('ward_status', 1);
        $lovs = $this->db->get('ic_ward')->result_array();
        return $lovs;
        
    }

    public function ward_insertion($arrUserInfo)
    {
        $invalid = $this->db->insert('ic_bed', $arrUserInfo);
		log_message('debug',$this->db->last_query());
		if($invalid){return true;}else{return false;}
        

    }

    public function ward_updation($id, $arrUserInfo)
    {
        $this->db->where('bed_id', $id);
        $invalid = $this->db->update('ic_bed', $arrUserInfo);
        if($invalid){return true;}else{return false;}
        return true;

    }

    public function bed_insertion($arrUserInfo)
    {
        $invalid = $this->db->insert('ic_bed', $arrUserInfo);
		log_message('debug',$this->db->last_query());
		if($invalid){return true;}else{return false;}
        

    }

    public function bed_updation($id, $arrUserInfo)
    {
        $this->db->where('bed_id', $id);
        $invalid = $this->db->update('ic_bed', $arrUserInfo);
        if($invalid){return true;}else{return false;}
        return true;

    }
    public function check_org_name($org_name)
    {
        $this->db->where('organism_name',$org_name);
        $result = $this->db->get('ic_lovs');
        if($result->num_rows() > 0){
			return 1;
 
		} else {
 
		 return 2;
		}
    }
    public function delete_lov($id,$lov_status)
    {
        
        $this->db->where('lov_id',$id);
       
        $result= $this->db->update('ic_lovs',$lov_status);
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
