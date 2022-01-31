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
    public function UploadProfilePic($ownerInfo, $recordId, $tableName)
    {
        $this->session->unset_userdata('profile_picture');
        $this->session->set_userdata('profile_picture', $ownerInfo['profile_picture']);
        $this->db->where('record_id', $recordId);
        $result = $this->db->update($tableName, $ownerInfo);
        // print_r($edit) ;
        log_message('debug', 'UpdateOwnerIsUser : ' . $this->db->last_query());


        if ($result == true) {
            return $result;
        } else {
            return false;
        }
    }
    
}
