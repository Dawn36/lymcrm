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
}
