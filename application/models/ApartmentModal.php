<?php
class ApartmentModal  extends CI_Model
{

        public function ShowApartment($tableName, $buildingId)
        {
                $this->db->select('*');
                $this->db->where('status', 'active');
                $this->db->where('building_id', $buildingId);
                $this->db->order_by("record_id", "ASC");
                log_message('debug', $this->db->last_query());
                return $this->db->get($tableName)->result_array();
        }
        public function ApartmentExit($tableName, $apartmentName, $buildingId)
        {
                $this->db->select('*');
                $this->db->where('status', 'active');
                $this->db->where('apartment_number', $apartmentName);
                $this->db->where('building_id', $buildingId);
                log_message('debug', $this->db->last_query());
                return $this->db->get($tableName)->result_array();
        }

        //update the  status of an apartment when tenancy is added(tenancy)
        public function UpdateApartmentStatus($tableName, $recordId, $isTenancy)
        {
                // $this->db->set('is_tenancy', 'yes');
                // $this->db->where('status', 'active');
                // $this->db->where('record_id',  $recordId);
                // $this->db->update($tableName);

                // log_message('debug', $this->db->last_query());

                // return true;

                $this->db->set('is_tenancy', $isTenancy);
                $this->db->where('status', 'active');
                $this->db->where('record_id',  $recordId);
                $this->db->update($tableName);

                log_message('debug', $this->db->last_query());

                return true;
        }

        //show apartments that are not yet in tenancy(tenancy)
        public function ShowApartmentTenancy($tableName, $buildingId)
        {
                $this->db->select('a.record_id AS record_id ,a.apartment_number AS apartment_number');
                $this->db->from('apartment a'); 
                $this->db->join('property p', 'a.record_id = p.apartment_id', 'INNER');
                $this->db->where('p.status', 'active');
                $this->db->where('a.building_id', $buildingId);
                $this->db->where('a.is_tenancy', 'no');
                $query = $this->db->get(); 
                log_message('debug', $this->db->last_query());
                return $query->result_array();
        }
}
