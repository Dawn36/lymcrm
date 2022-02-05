<?php
class CrondTabModel extends CI_Model
{

    public function TenancyFromTenant($whereClause)
    {
        $this->db->select('*')
            ->from('tenant')
            ->join('tenancy', 'tenancy.tenant_id = tenant.record_id')
            ->where($whereClause)
            ->where('tenancy.status', 'active')
            ->where('tenancy.is_renew', 'no')
            ->where('tenant.status', 'active');
        $rs = $this->db->get()->result_array();
        log_message('debug', $this->db->last_query());


        if (!empty($rs)) {
            foreach ($rs as $key => $val) {
                log_message('debug', print_r($val, TRUE));
                $arrInfo['tenant_id'] = $val['record_id'];
                $arrInfo['tenant_name'] = $val['record_id'];
                $arrInfo['end_date'] = $val['end_date'];
                $result = $this->db->insert('email_history', $arrInfo);
            }
        }
        return $rs;
    }
}
