<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenancyController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->moSdel('Model_user', 'MUSER');
        $this->load->model('OwnerModal', 'OWNER');
        $this->load->model('ApartmentModal', 'APARTMENT');
        $this->load->model('TenancyModel', 'TENANCY');
    }


    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $tableName = 'tenancy';
            $data['tenancyInfo'] = $this->TENANCY->Show($tableName);
            $this->load->view('tenancy_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }

    public function AddTenancy()
    {
        if ($this->session->userdata('name')) {

            log_message('debug', 'AddTenancy');
            $tableName = 'building';
            $data['buildingInfo'] = $this->OWNER->ShowOwner($tableName);
            $tableName = 'tenant';
            $data['tenantInfo'] = $this->OWNER->ShowOwner($tableName);
            return  $this->load->view('tenancy_add', $data);
        } else {
            redirect('login');
        }
    }

    public function TenancyUpdate()
    {
        $arrPost = $this->input->post();

        // die(print_r($arrPost));
        //tenancy table insert
        $tableName = 'tenancy';
        $recordId                   = $arrPost['record_id'];
        $arrInfo['tenancy_no']      = $arrPost['tenancy_no'];
        $arrInfo['building_id']     = $arrPost['building'];
        $arrInfo['apartment_id']    = $arrPost['apartment_no'];
        $arrInfo['tenant_id']       = $arrPost['tenant'];
        $daterange                  = $arrPost['daterange'];
        $date                       = explode('-', $daterange);
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

        $this->TENANCY->Update($tableName, $arrInfo, $recordId);

        $delArr['status'] = 'inactive';
        $tableName = 'payment';
        $this->TENANCY->DeletePayments($delArr, $recordId, $tableName);

        //inserting the payments details in payment table connected to the above inserted data
        for ($i = 0; $i < $arrInfo['no_of_payments']; $i++) {
            $tableName = 'payment';
            $tenInfo['tenancy_id']      = $recordId;
            $tenInfo['installment']     = $i + 1;
            $tenInfo['payment_type']    = $arrPost['payment_type'][$i];
            $tenInfo['cheque_no']       = $arrPost['cheque_no'][$i];
            $tenInfo['amount']          = $arrPost['amount'][$i];
            $tenInfo['payment_date']    = date("Y-m-d h:i:s", strtotime($arrPost['date'][$i]));
            $tenInfo['status']          = 'active';
            $tenInfo['created_at']      = date("Y-m-d h:i:s");
            $tenInfo['created_by']      =  $this->session->userdata('user_id');
            $tenInfo['created_name']    =  $this->session->userdata('user_name');
            $tenInfo['updated_at']      = date("Y-m-d h:i:s");
            $tenInfo['updated_by']      = $this->session->userdata('user_id');
            $tenInfo['updated_name']    =  $this->session->userdata('user_name');

            $this->TENANCY->Add($tenInfo, $tableName);
        }
        redirect('/tenancy');
    }

    public function LoadEditScreen()
    {
        if ($this->session->userdata('name')) {

            log_message('debug', 'EditTenancy');
            $arrPost = $this->input->post();
            $recordId =  $arrPost['recordId'];;
            $tableName = 'tenant';
            $data['tenantInfo'] = $this->OWNER->ShowOwner($tableName);
            $tableName = 'tenancy';
            $data['tenancyInfo'] = $this->TENANCY->ShowEdit($tableName, $recordId);
            return  $this->load->view('tenancy_edit', $data);
        } else {
            redirect('login');
        }
    }

    public function ShowApartment()
    {
        if ($this->session->userdata('name')) {

            $arrPost = $this->input->post();
            $buildingId = $arrPost['buildingid'];
            log_message('debug', 'ShowApartment');
            $tableName = 'apartment';
            $apartmentInfo = $this->APARTMENT->ShowApartmentTenancy($tableName, $buildingId);
            echo json_encode($apartmentInfo);
        } else {
            redirect('login');
        }
    }

    public function TenancySubmit()
    {

        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();

            // die(print_r($arrPost));
            //tenancy table insert
            $tableName = 'tenancy';
            $arrInfo['tenancy_no']      = $arrPost['tenancy_no'];
            $arrInfo['building_id']     = $arrPost['building'];
            $arrInfo['apartment_id']    = $arrPost['apartment_no'];
            $arrInfo['tenant_id']       = $arrPost['tenant'];
            $daterange                  = $arrPost['daterange'];
            $date                       = explode('-', $daterange);
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
                $tenInfo['payment_date']    = date("Y-m-d h:i:s", strtotime($arrPost['date'][$i]));
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
            redirect('/tenancy');
        }
    }

    function DeleteTenancy()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $recordId = $arrPost['tenancyId'];
            $delArr['status'] = 'inactive';
            $tableName = 'tenancy';
            $this->TENANCY->DeleteTenancy($delArr, $recordId, $tableName);

            $recordId = $arrPost['apartmentId'];
            $tableName = 'apartment';
            $isTenancy = 'no';
            $this->APARTMENT->UpdateApartmentStatus($tableName, $recordId, $isTenancy);

            $delArr['status'] = 'inactive';
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
}
