<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenancyRenewController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->moSdel('Model_user', 'MUSER');
        $this->load->model('OwnerModal', 'OWNER');
        $this->load->model('ApartmentModal', 'APARTMENT');
        $this->load->model('TenancyRenewModel', 'TENANCY');
    }


    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $tableName = 'tenancy';
            $data['tenancyInfo'] = $this->TENANCY->Show($tableName);
            $this->load->view('tenancy_renew', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }

    function DeleteTenancy()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $recordId = $arrPost['tenancyId'];
            $delArr['status'] = 'active';
            $tableName = 'tenancy';
            $this->TENANCY->DeleteTenancy($delArr, $recordId, $tableName);

            $recordId = $arrPost['apartmentId'];
            $tableName = 'apartment';
            $isTenancy = 'no';
            $this->APARTMENT->UpdateApartmentStatus($tableName, $recordId, $isTenancy);

            $delArr['status'] = 'active';
            $recordId = $arrPost['tenancyId'];
            $tableName = 'payment';
            $this->TENANCY->DeletePayments($delArr, $recordId, $tableName);

            redirect('/tenancy');
        }
    }

    function TenancyLoadPayments()
    {
        if ($this->session->userdata('name')) {

            log_message('debug', 'TenancyViewPayments');
            $arrPost = $this->input->post();
            $tenancyId =  $arrPost['tenancyId'];
            $tableName = 'payment';
            $data['paymentInfo'] = $this->TENANCY->ViewPayments($tenancyId, $tableName);
            $tableName = 'tenancy';
            $data['tenancyInfo'] = $this->TENANCY->ViewTenancy($tenancyId, $tableName);
            return  $this->load->view('tenancy_view_payments', $data);
        } else {
            redirect('login');
        }
    }

    public function TenancyRenewAdd()
    {
        if ($this->session->userdata('name')) {
            // die(print_r($data['tenancyInfo']));

            log_message('debug', 'AddTenancy');
            $arrPost = $this->input->post();
            $tableName = 'building';
            $data['buildingInfo'] = $this->OWNER->ShowOwner($tableName);
            $tableName = 'tenant';
            $data['tenantInfo'] = $this->OWNER->ShowOwner($tableName);
            $recordId =  $arrPost['recordId'];
            $tableName = 'tenancy';
            $data['tenancyInfo'] = $this->TENANCY->ShowEdit($tableName, $recordId);

            return  $this->load->view('tenancy_renew_add', $data);
        } else {
            redirect('login');
        }
    }

    public function TenancyRenewSubmit()
    {

        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();

            // die(print_r($arrPost['recordId']));
            //tenancy table insert
            $tableName = 'tenancy';
            $arrInfo['tenancy_no']      = $arrPost['tenancy_no'];
            $arrInfo['building_id']     = $arrPost['building'];
            $arrInfo['apartment_id']    = $arrPost['apartment_no'];
            $arrInfo['tenant_id']       = $arrPost['tenant'];
            $daterange                  = $arrPost['daterange'];
            $date                       = explode('-', $daterange);
            $date[0]                    = str_replace('/', '-', $date[0]);
            $date[1]                    = str_replace('/', '-', $date[1]);
            $startDate                  = date("Y-m-d h:i:s", strtotime($date[0]));
            $endDate                    = date("Y-m-d h:i:s", strtotime($date[1]));
            $arrInfo['start_date']      = $startDate;
            $arrInfo['end_date']        = $endDate;
            $arrInfo['rent_amount']     = $arrPost['rent_amount'];
            $arrInfo['no_of_payments']  = $arrPost['no_of_payments'];
            $arrInfo['is_renew']        = 'no';
            $arrInfo['status']          = 'active';
            $arrInfo['created_at']      = date("Y-m-d h:i:s");
            $arrInfo['created_by']      =  $this->session->userdata('user_id');
            $arrInfo['created_name']    =  $this->session->userdata('user_name');
            $arrInfo['updated_at']      = date("Y-m-d h:i:s");
            $arrInfo['updated_by']      =  $this->session->userdata('user_id');
            $arrInfo['updated_name']    =  $this->session->userdata('user_name');

            $cid = $this->TENANCY->Add($arrInfo, $tableName);
            //inserting the payments details in payment table connected to the above inserted data
            for ($i = 0; $i < $arrInfo['no_of_payments']; $i++) {
                $tableName = 'payment';
                $tenInfo['tenancy_id']      = $cid;
                $tenInfo['installment']     = $i + 1;
                $tenInfo['payment_type']    = $arrPost['payment_type'][$i];
                $tenInfo['cheque_no']       = $arrPost['cheque_no'][$i];
                $tenInfo['amount']          = $arrPost['amount'][$i];
                $tenInfo['status']          = 'active';
                $date                       = str_replace('/', '-', $arrPost['date'][$i]);
                $tenInfo['payment_date']    = date("Y-m-d h:i:s", strtotime($date));
                $tenInfo['created_at']      = date("Y-m-d h:i:s");
                $tenInfo['created_by']      =  $this->session->userdata('user_id');
                $tenInfo['created_name']    =  $this->session->userdata('user_name');
                $tenInfo['updated_at']      = date("Y-m-d h:i:s");
                $tenInfo['updated_by']      = $this->session->userdata('user_id');
                $tenInfo['updated_name']    =  $this->session->userdata('user_name');

                $this->TENANCY->Add($tenInfo, $tableName);
            }

            //changing the tenancy status in apartment so that it is not available
            $tableName = 'apartment';
            $isTenancy = 'yes';
            $recordId = $arrInfo['apartment_id'];
            $this->APARTMENT->UpdateApartmentStatus($tableName, $recordId, $isTenancy);

            $tableName                  = 'tenancy';
            $recordId                   = $arrPost['record_id'];
            $reInfo['is_renew']         = 'yes';
            $reInfo['status']           = 'active';
            $reInfo['updated_at']       = date("Y-m-d h:i:s");
            $reInfo['updated_by']       = $this->session->userdata('user_id');
            $reInfo['updated_name']     = $this->session->userdata('user_name');
            $this->TENANCY->Update($tableName, $recordId, $reInfo);

            redirect('/tenancy');
        }
    }
}
