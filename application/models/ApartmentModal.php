<?php
class ApartmentModal  extends CI_Model
{

        public function ShowApartment($tableName, $buildingId)
        {
                $this->db->select('*');
                $this->db->where('status', 'active');
                $this->db->where('building_id', $buildingId);
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
                $this->db->select('*');
                $this->db->where('status', 'active');
                $this->db->where('building_id', $buildingId);
                $this->db->where('is_tenancy', 'no');
                log_message('debug', $this->db->last_query());
                return $this->db->get($tableName)->result_array();
        }
}
