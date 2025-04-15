<?php
class TenancyModel  extends CI_Model
{

    public function Add($arrInfo, $tableName)
    {
        $this->db->insert($tableName, $arrInfo);
        $result = $this->db->insert_id();

        log_message('debug', $this->db->last_query());

        return $result;
    }

    public function Update($tableName, $data, $recordId)
    {
        $this->db->where('record_id', $recordId);
        $this->db->update($tableName, $data);
        $result = $this->db->insert_id();

        log_message('debug', $this->db->last_query());
        return $result;
    }

    public function Show($tableName)
    {
        $userId = $this->session->userdata('user_id');
        $this->db->select('*');
<<<<<<< HEAD
        $this->db->select('tenancy.`record_id`');
=======
        $this->db->select('tenancy.`record_id`,tenancy.`created_at AS created_ata`');
>>>>>>> 3bdb593 (Initial commit)
        $this->db->join('building as b', 'b.record_id = tenancy.building_id', 'INNER');
        $this->db->join('apartment as a', 'a.record_id = tenancy.apartment_id', 'INNER');
        $this->db->join('tenant', 'tenant.record_id = tenancy.tenant_id', 'INNER');
        $this->db->where('tenancy.status', 'active');
        $this->db->order_by('tenancy.record_id');

        $result = $this->db->get($tableName)->result_array();
        // print_r($role) ;
        log_message('debug', $this->db->last_query());
        return $result;
    }

    public function ShowEdit($tableName, $recordId)
    {
        $userId = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->select('tenancy.`record_id`');
        $this->db->join('building as b', 'b.record_id = tenancy.building_id', 'INNER');
        $this->db->join('apartment as a', 'a.record_id = tenancy.apartment_id', 'INNER');
        $this->db->join('tenant', 'tenant.record_id = tenancy.tenant_id', 'INNER');
        $this->db->where('tenancy.record_id', $recordId);
        $this->db->where('tenancy.status', 'active');
        $this->db->where('tenancy.is_renew', 'no');

        $result = $this->db->get($tableName)->result_array();
        // print_r($role) ;
        log_message('debug', $this->db->last_query());
        return $result;
    }

    public function DeletePayments($delArr, $recordId, $tableName)
    {

        $this->db->where('tenancy_id', $recordId);
        $this->db->update($tableName, $delArr);
        $result = $this->db->insert_id();

        // print_r($role) ;
        log_message('debug', $this->db->last_query());
    }

    public function DeleteTenancy($delArr, $recordId, $tableName)
    {

        $this->db->where('record_id', $recordId);
        $this->db->update($tableName, $delArr);
        $result = $this->db->insert_id();

        // print_r($role) ;
        log_message('debug', $this->db->last_query());
    }

    public function ViewPayments($tenancyId, $tableName)
    {
        $this->db->select('*');
        $this->db->where('tenancy_id', $tenancyId);
        $this->db->where('status', 'active');
        $result = $this->db->get($tableName)->result_array();

        log_message('debug', $this->db->last_query());
        return $result;
        // print_r($role) ;
    }

    public function ViewTenancy($tenancyId, $tableName)
    {
        $this->db->select('*');
        $this->db->join('tenant', 'tenant.record_id = tenancy.tenant_id', 'INNER');
        $this->db->where('tenancy.record_id', $tenancyId);
        $this->db->where('tenancy.status', 'active');
        $result = $this->db->get($tableName)->result_array();

        log_message('debug', $this->db->last_query());
        return $result;
        // print_r($role) ;
    }

    public function ActivatePreviousTenancy($apartmentId, $tableName)
    {
        $query = $this->db->query("SELECT * FROM $tableName where `apartment_id` = '$apartmentId' AND `status` = 'active' ORDER BY record_id DESC LIMIT 1,1");
        $result = $query->result_array();
        $recordId = $result[0]['record_id'];
        $data['is_renew'] = 'no';

        $this->db->where('record_id', $recordId);
        $this->db->update($tableName, $data);
        $result = $this->db->insert_id();

        // print_r($role) ;
        log_message('debug', $this->db->last_query());
    }
     public function GetOwnerBuilding()
    {
        $userId = $this->session->userdata('user_id');
        $this->db->select('DISTINCT(building_id) AS record_id , b.building_name');
        $this->db->from('building b'); 
        $this->db->join('property p', 'b.record_id=p.building_id', 'INNER');
        $this->db->where('p.status', 'active');
<<<<<<< HEAD
=======
        $this->db->where('b.status', 'active');
		$this->db->order_by('b.building_name', 'ASC');
>>>>>>> 3bdb593 (Initial commit)
        $query = $this->db->get(); 
        // print_r($role) ;
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
}
