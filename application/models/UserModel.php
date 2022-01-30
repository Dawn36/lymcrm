<?php
class UserModel extends CI_Model
{

    public function GetEmailTenantOwner($tableName)
    {
        $this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('is_user','no');
        return $this->db->get($tableName)->result_array();    

    }
    public function UpdateOwnerIsUser($ownerInfo,$recordId,$tableName)
    {
        $this->db->where('record_id',$recordId);
        $result= $this->db->update($tableName,$ownerInfo);
        log_message('debug',$this->db->last_query());
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
    
}
