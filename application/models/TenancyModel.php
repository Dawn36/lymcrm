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

    public function Show($tableName)
    {
        $userId = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->join('building as b', 'b.record_id = tenancy.building_id', 'INNER');
        $this->db->join('apartment as a', 'a.record_id = tenancy.apartment_id', 'INNER');
        $this->db->join('tenant', 'tenant.record_id = tenancy.tenant_id', 'INNER');
        $this->db->where('tenancy.status', 'active');
        $this->db->where('tenancy.is_renew', 'no');
        $this->db->order_by('tenancy.record_id');

        $result = $this->db->get($tableName)->result_array();
        // print_r($role) ;
        log_message('debug', $this->db->last_query());
        return $result;
    }
}