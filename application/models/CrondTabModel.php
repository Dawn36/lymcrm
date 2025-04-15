<?php
class CrondTabModel extends CI_Model
{

    public function TenancyFromTenant($whereClause,$daet)
    {
        $this->db->select('*,tenancy.`record_id` AS tenancy_id')
            ->from('tenant')
            ->join('tenancy', 'tenancy.tenant_id = tenant.record_id')
            ->where($whereClause)
            ->where('tenancy.status', 'active')
<<<<<<< HEAD
            ->where('tenancy.is_renew', 'no')
=======
             ->where('tenancy.is_renew', 'no')
>>>>>>> 3bdb593 (Initial commit)
            ->where('tenant.status', 'active');
        $rs = $this->db->get()->result_array();
        log_message('debug', $this->db->last_query());

        if (!empty($rs)) {
            foreach ($rs as $key => $val) {
                //log_message('debug', print_r($val, TRUE));
                $arrInfo['tenant_id'] = $val['record_id'];
                $arrInfo['tenant_name'] = $val['name'];
                $arrInfo['end_date'] = $val['end_date'];
                $arrInfo['tenancy_id'] = $val['tenancy_id'];
                $arrInfo['check'] = $daet;
                
                $this->db->select('*');
                $this->db->where('tenant_id', $arrInfo['tenant_id']);
                $this->db->where('tenant_name', $arrInfo['tenant_name']);
                $this->db->where('check', $arrInfo['check']);
                $this->db->where('tenancy_id', $arrInfo['tenancy_id']);
                $emailRs = $this->db->get('email_history')->result_array();
                log_message('debug', $this->db->last_query());
                if (empty($emailRs)) {
                   
                    $result = $this->db->insert('email_history', $arrInfo);
                    log_message('debug', $this->db->last_query());
                } else {
                    
                    $this->db->where('tenant_id', $arrInfo['tenant_id']);
                    $this->db->where('tenancy_id', $arrInfo['tenancy_id']);
                    $this->db->where('check', $daet);
                    $emailRs = $this->db->update('email_history', $arrInfo);
                    log_message('debug', $this->db->last_query());
                }
            }
        }
        return $rs;
    }
}
