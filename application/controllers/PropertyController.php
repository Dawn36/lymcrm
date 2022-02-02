<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OwnerModal', 'OWNER');
       // $this->load->model('ApartmentModal', 'APARTMENT');
        $this->load->model('PropertyModel', 'PROPERTY');
   
    }

    public function Index()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $data['propertyData'] =  $this->PROPERTY->ShowProperty();
            $this->load->view('property_show', $data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    // Add User Modal
    public function LoadAddScreen()
    {
        log_message('debug', 'modalAddProperty');
        $tableName='owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_add',$data);
    }


    // Edit User Modal
    public function LoadEditScreen()
    {
        $arrPost = $this->input->post();
        $recordId=$arrPost['recordId'];
        $data['apartmentId']=$arrPost['apartmentId'];
        $tableName='property';
        $data['propertyInfo'] =  $this->OWNER->ShowOwnerEdit($tableName,$recordId);
        $tableName='owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        $tableName='building';
        $data['buildingData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_edit',$data);
    }

    // Delete User
    public function GetBuilding()
    {
        $tableName='building';
        $buildingInfo =$this->OWNER->ShowOwner($tableName);
        echo json_encode($buildingInfo);
        
    }

    public function GetApartment()
    {
        $arrPost = $this->input->post();
        $buildingId=$arrPost['id'];
        $tableName='apartment';
        $apartmentInfo =$this->PROPERTY->GetApartments($tableName,$buildingId);
        echo json_encode($apartmentInfo);
    }
     public function BuildingApartmentEdit()
    {
        $arrPost = $this->input->post();
        $buildingId=$arrPost['id'];
        $tableName='apartment';
        $apartmentInfo =$this->PROPERTY->BuildingApartmentEdit($tableName,$buildingId);
        echo json_encode($apartmentInfo);
    }
    public function AddVerification()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['apartment_id'] = $arrPost['apartment_id'];
            $apartmentId = $arrPost['apartment_id'];
            $arrInfo['community_building'] = $arrPost['community'];
            $arrInfo['owner_id'] = $arrPost['owner_id'];
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
            $apartmentInfo['is_owner']='yes';
             $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentId,$tableName,$apartmentInfo);
            if($apartment==true)
            {
                 $tableName = 'property';
                $check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/property');
            } else {
                die("asd");
            }
            }
            

        }

    }
      public function PropertyUpdate()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $recordId = $arrPost['record_id'];
            $apartmentIdOld = $arrPost['apartmentIdOld'];
            $appartmentIdNew = $arrPost['appartment_no'];
            if($apartmentIdOld != $appartmentIdNew)
            {
            $apartmentInfo['is_owner']='no';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentIdOld,$tableName,$apartmentInfo);
            $apartmentInfo['is_owner']='yes';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($appartmentIdNew,$tableName,$apartmentInfo);
            }
            $tableName='property';
            $arrInfo['building_id'] = $arrPost['building'];
            $arrInfo['apartment_id'] = $arrPost['appartment_no'];
            $arrInfo['community_building'] = $arrPost['community'];
            $arrInfo['owner_id'] = $arrPost['owner'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            if ($check == true) {
                redirect('/property');
            } else {
                die("asd");
            }
        }

    }
    public function DeleteProperty()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $apartmentId = $arrPost['apartmentId'];
            $apartmentInfo['is_owner']='no';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentId,$tableName,$apartmentInfo);

            $tableName = 'property';
            $recordId = $arrPost['recordId'];
            $arrInfo['status'] = "inactive";
            $check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            // if ($check == true) {
            //     redirect('/'.$tableName);
            // } 

        }
    }

    public function GetOwnerProperty()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getOwnerproperty'] =  $this->PROPERTY->GetOwnerProperty($ownerTenantId);
            $this->load->view('owner_property',$data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
     public function GetOwnerTenant()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getTenantProperty'] =  $this->PROPERTY->GetOwnerTenant($ownerTenantId);
            $this->load->view('owner_tenant',$data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
     public function GetTenantTenacy()
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getTenantTenancy'] =  $this->PROPERTY->GetTenantTenacy($ownerTenantId);
            $this->load->view('tenant_tenancy',$data);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
    
    
}
