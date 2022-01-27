<?php
class Model_user extends CI_Model
{

    public function UesrRoleAdd($arrInfo)
    {
        $result = $this->db->insert('ic_roles', $arrInfo);
        if ($result) {return true;} else {return false;}
        //log_message('debug',$this->db->last_query());
        //log_message('debug',"hello " . print_r($arr, true));

    }
    public function UserRoleShow()
    {
        $this->db->where('role_status', 1);
        $role = $this->db->get('ic_roles')->result_array();
		//log_message('debug', $this->db->last_query());
        return $role;
    }
    public function UserRoleShowEdit($id)
    {
        $this->db->where('role_id', $id);
        $edit = $this->db->get('ic_roles')->result_array();
		//log_message('debug', $this->db->last_query());
        return $edit;

    }
    public function UserRoleUpdate($id, $arrUpdate)
    {
        $this->db->where('role_id', $id);
        $edit = $this->db->update('ic_roles', $arrUpdate);
		//log_message('debug', $this->db->last_query());
		if($edit){return true;}else{return false;}

    }
    public function UesrAdd($arrUserInfo)
    {
        $invalid = $this->db->insert('ic_users', $arrUserInfo);
        log_message('debug', $this->db->last_query());
        if ($invalid) {return true;} else {return false;}

    }
    public function UserShow()
    {
        $this->db->select('*');
        $this->db->from('ic_users');
        $this->db->join('ic_roles', 'role_code = user_role_id');
        $this->db->where('user_status', 1);
        $users = $this->db->get()->result_array();
        //log_message('debug',$this->db->last_query());
        return $users;
    }
    public function UserShowEdit($id)
    {
        $this->db->select('*');
        $this->db->from('ic_users');
        $this->db->join('ic_roles', 'role_code = user_role_id');
        $this->db->where('user_id', $id);
        $edit = $this->db->get()->result_array();
        //log_message('debug',$this->db->last_query());
        return $edit;

    }
    public function GetRole()
    {
        //$this->db->select('*');
        //$this->db->from('ic_roles');
        //$this->db->where('role_status',1);
        $role = $this->db->get('ic_roles')->result_array();
        //log_message('debug',$this->db->last_query());
        return $role;

    }
    public function UesrUpdate($id, $arrUserInfoUpdate)
    {
        $this->db->where('user_id', $id);
        $edit = $this->db->update('ic_users', $arrUserInfoUpdate);
        //log_message('debug',$this->db->last_query());
        if ($edit) {return true;} else {return false;}

    }
}
