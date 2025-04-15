<?php
class UserModel extends CI_Model
{

    public function GetEmailTenantOwner($tableName)
    {
        $this->db->select('*');
        $this->db->where('status','active');
        $this->db->where('is_user','no');
<<<<<<< HEAD
=======
		$this->db->order_by('email', 'ASC');
>>>>>>> 3bdb593 (Initial commit)
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
    public function UploadProfilePic($ownerInfo, $recordId, $tableName,$profileNot)
    {
        
        $this->session->unset_userdata('user_name');
        if($profileNot == 1)
        {   
            $this->session->unset_userdata('profile_picture');
             $this->session->set_userdata('profile_picture', $ownerInfo['profile_picture']);
             log_message('debug',"bshdsajdhjkas");
        }
       
        $this->session->set_userdata('name', $ownerInfo['name']);
        $this->session->set_userdata('user_name', $ownerInfo['name']);
        $this->db->where('record_id', $recordId);
       $result = $this->db->update($tableName, $ownerInfo);
       
        if($this->session->userdata('role_id') == OWNER)
        {
            $this->db->select('*');
            $this->db->where('status','active');
            $this->db->where('record_id',$recordId);
            $data=$this->db->get('users')->result_array();  
            $dataInfo['name']=$ownerInfo['name'];
            $this->db->where('record_id', $data[0]['owner_tenant_id']);
            $result = $this->db->update('owner', $ownerInfo);
            if ($result == true) {
            return $result;
        } else {
            return false;
        }
        
         }
        if($this->session->userdata('role_id') == TENANT)
        {
             $this->db->select('*');
            $this->db->where('status','active');
            $this->db->where('record_id',$recordId);
            $data=$this->db->get('users')->result_array();  
            $dataInfo['name']=$ownerInfo['name'];
            $this->db->where('record_id', $data[0]['owner_tenant_id']);
            $result = $this->db->update('tenant', $ownerInfo);
            if ($result == true) {
            return $result;
        } else {
            return false;
        }
        }


        


        if ($result == true) {
            return $result;
        } else {
            return false;
        }
    }
    
}
