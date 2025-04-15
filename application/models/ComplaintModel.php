<?php
class ComplaintModel  extends CI_Model
{

    public function GetApartments($tableName, $buildingId)
    {
        $this->db->select('*');
        $this->db->where('status', 'active');
        $this->db->where('building_id', $buildingId);
        // $this->db->where('is_owner', 'no');
        log_message('debug', $this->db->last_query());
        return $this->db->get($tableName)->result_array();
    }
    public function GetOwner($buildingId, $apartmentId)
    {
        $this->db->select('o.`record_id`,o.`name`');
        $this->db->from('property p');
        $this->db->join('owner o', 'o.`record_id`=p.`owner_id`', 'INNER');
        $this->db->where('p.status', 'active');
        $this->db->where('p.building_id', $buildingId);
        $this->db->where('p.apartment_id', $apartmentId);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function GetTenant($buildingId, $apartmentId)
    {
        $this->db->select('DISTINCT(tt.record_id),tt.name');
        $this->db->from('tenancy ty');
        $this->db->join('tenant tt', 'ty.tenant_id= tt.record_id', 'INNER');
        $this->db->where('ty.status', 'active');
        $this->db->where('ty.building_id', $buildingId);
        $this->db->where('ty.apartment_id', $apartmentId);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function GetComplaints($name, $id)
    {
        $this->db->select('c.`record_id`,
        b.`building_name`,
        a.`apartment_number`,
        o.`name` AS owner_name,
        t.`name` AS tenant_name,
        c.`complaint_date`,
        c.`complaint_status`,
        c.`description`,
        c.`assigned_remarks`,
        com.`name` AS company_name,
<<<<<<< HEAD
        c.`assigned_date`,
        c.`cost`,c.`currency`,c.`remarks`');
=======
        c.`assigned_date`,c.`currency`,c.`remarks`,
        c.`cost`');
>>>>>>> 3bdb593 (Initial commit)
        $this->db->from('complaint c');
        $this->db->join('building b', 'c.`building_id` = b.`record_id`', 'INNER');
        $this->db->join('apartment a', 'a.`record_id` = c.`apartment_id`', 'INNER');
        $this->db->join('owner o', 'o.`record_id` = c.`owner_id`', 'INNER');
        $this->db->join('tenant t', 'c.`tenant_id` = t.`record_id`', 'INNER');
        $this->db->join('company com', 'c.`company_id` = com.`record_id`', 'LEFT');
        $this->db->where('c.`status`', 'active');
        if ($name == "tenant") {
            $this->db->where('c.`tenant_id`', $id);
        }
        if ($name == "owner") {
            $this->db->where('c.`owner_id`', $id);
        }
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function GetComplaintImg($id)
    {
        $this->db->select('*');
        $this->db->from('complaint_image');
        $this->db->where('status', 'active');
        $this->db->where('complaint_id', $id);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function ComplaintTenantBuilding($tenantId)
    {
        $this->db->select('DISTINCT(t.building_id),b.`building_name`');
        $this->db->from('tenancy t');
        $this->db->join('building b', 'b.`record_id`=t.`building_id`', 'INNER');
        $this->db->where('t.status', 'active');
        $this->db->where('t.tenant_id', $tenantId);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function ComplaintTenantApartment($buildingId)
    {
        $this->db->select('DISTINCT(t.apartment_id) AS apartment_id, a.apartment_number');
        $this->db->from('apartment a');
        $this->db->join('tenancy t', 'a.record_id=t.apartment_id', 'INNER');
        $this->db->where('t.status', 'active');
        $this->db->where('t.building_id', $buildingId);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
    public function ComplaintTenantOwner($buildingId, $apartmentId)
    {
        $this->db->select('o.`record_id`,o.`name`');
        $this->db->from('owner o');
        $this->db->join('property p', 'p.`owner_id`=o.`record_id`', 'INNER');
        $this->db->where('o.status', 'active');
        $this->db->where('p.building_id', $buildingId);
        $this->db->where('p.apartment_id', $apartmentId);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
<<<<<<< HEAD
    public function ComplaintDataEmail($id)
=======
      public function ComplaintDataEmail($id)
>>>>>>> 3bdb593 (Initial commit)
    {
        $this->db->select('c.`record_id`,b.`building_name`,a.`apartment_number`,t.`email`,t.`name` ');
        $this->db->from('complaint c');
        $this->db->join('building b', 'b.`record_id`=c.`building_id`', 'INNER');
        $this->db->join('apartment a', 'a.`record_id`=c.`apartment_id`', 'INNER');
        $this->db->join('tenant t', 'c.`tenant_id`=t.`record_id`', 'INNER');
        $this->db->where('c.record_id', $id);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
<<<<<<< HEAD
    public function ComplaintAssignedEmail($id)
    {
        $this->db->select('t.`record_id` AS tenant_id,b.`building_name`,a.`apartment_number`,t.`name`,t.`email`,c.`description`,t.`phone_number` AS tenant_number,c.`record_id`,cc.`company_name`,cc.`name` AS contact_person ,cc.`email` AS contact_email,
=======
     public function ComplaintAssignedEmail($id)
    {
        $this->db->select('t.`record_id` AS tenant_id,b.`building_name`,a.`apartment_number`,t.`name`,t.`email` AS t_email,c.`description`,t.`phone_number` AS tenant_number,c.`record_id`,cc.`company_name`,cc.`name` AS contact_person ,cc.`email` AS contact_email,
>>>>>>> 3bdb593 (Initial commit)
        cc.`phone_number`');
        $this->db->from('complaint c');
        $this->db->join('tenant t', 't.`record_id`=c.`tenant_id`', 'INNER');
        $this->db->join('company cc', 'cc.`record_id`=c.`company_id`', 'INNER');
        $this->db->join('building b', 'b.`record_id`=c.`building_id`', 'INNER');
        $this->db->join('apartment a', 'a.`record_id`=c.`apartment_id`', 'INNER');
        $this->db->where('c.record_id', $id);
        $query = $this->db->get();
        log_message('debug', $this->db->last_query());
        return $query->result_array();
    }
}
