<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PropertyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OwnerModal', 'OWNER');
<<<<<<< HEAD
        // $this->load->model('ApartmentModal', 'APARTMENT');
        $this->load->model('PropertyModel', 'PROPERTY');
=======
       // $this->load->model('ApartmentModal', 'APARTMENT');
        $this->load->model('PropertyModel', 'PROPERTY');
   
>>>>>>> 3bdb593 (Initial commit)
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
<<<<<<< HEAD
=======
     public function GetOwnerTenantDeposit()
    {
        if ($this->session->userdata('name')) {
           
            $arrPost = $this->input->post();
            $tenancyId = $arrPost['tenancyId'];
            $data['getdeposit'] =  $this->PROPERTY->GetOwnerDeposit($tenancyId);
           return $this->load->view('owner_deposit',$data);
           
        } else {
            redirect('login');
        }
    }
>>>>>>> 3bdb593 (Initial commit)
    // Add User Modal
    public function LoadAddScreen()
    {
        log_message('debug', 'modalAddProperty');
<<<<<<< HEAD
        $tableName = 'owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_add', $data);
=======
        $tableName='owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_add',$data);
>>>>>>> 3bdb593 (Initial commit)
    }


    // Edit User Modal
    public function LoadEditScreen()
    {
        $arrPost = $this->input->post();
<<<<<<< HEAD
        $recordId = $arrPost['recordId'];
        $data['apartmentId'] = $arrPost['apartmentId'];
        $tableName = 'property';
        $data['propertyInfo'] =  $this->OWNER->ShowOwnerEdit($tableName, $recordId);
        $tableName = 'owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        $tableName = 'building';
        $data['buildingData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_edit', $data);
=======
        $recordId=$arrPost['recordId'];
        $data['apartmentId']=$arrPost['apartmentId'];
        $tableName='property';
        $data['propertyInfo'] =  $this->OWNER->ShowOwnerEdit($tableName,$recordId);
        $tableName='owner';
        $data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
        $tableName='building';
        $data['buildingData'] =  $this->OWNER->ShowOwner($tableName);
        return  $this->load->view('property_edit',$data);
>>>>>>> 3bdb593 (Initial commit)
    }

    // Delete User
    public function GetBuilding()
    {
<<<<<<< HEAD
        $tableName = 'building';
        $buildingInfo = $this->OWNER->ShowOwner($tableName);
        echo json_encode($buildingInfo);
=======
        $tableName='building';
        $buildingInfo =$this->OWNER->ShowOwner($tableName);
        echo json_encode($buildingInfo);
        
>>>>>>> 3bdb593 (Initial commit)
    }

    public function GetApartment()
    {
        $arrPost = $this->input->post();
<<<<<<< HEAD
        $buildingId = $arrPost['id'];
        $tableName = 'apartment';
        $apartmentInfo = $this->PROPERTY->GetApartments($tableName, $buildingId);
        echo json_encode($apartmentInfo);
    }
    public function BuildingApartmentEdit()
    {
        $arrPost = $this->input->post();
        $buildingId = $arrPost['id'];
        $tableName = 'apartment';
        $apartmentInfo = $this->PROPERTY->BuildingApartmentEdit($tableName, $buildingId);
=======
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
>>>>>>> 3bdb593 (Initial commit)
        echo json_encode($apartmentInfo);
    }
    public function AddVerification()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
<<<<<<< HEAD

=======
            
>>>>>>> 3bdb593 (Initial commit)
            $arrInfo['building_id'] = $arrPost['building_id'];
            $arrInfo['apartment_id'] = $arrPost['apartment_id'];
            $apartmentId = $arrPost['apartment_id'];
            $arrInfo['community_building'] = $arrPost['community'];
            $arrInfo['owner_id'] = $arrPost['owner_id'];
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
<<<<<<< HEAD
            $apartmentInfo['is_owner'] = 'yes';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentId, $tableName, $apartmentInfo);
            if ($apartment == true) {
                $tableName = 'property';
                $check = $this->OWNER->AddOwner($arrInfo, $tableName);
                if ($check == true) {
                    redirect('/property');
                } else {
                    redirect('/property');
                }
            }
        }
    }
    public function PropertyUpdate()
=======
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
>>>>>>> 3bdb593 (Initial commit)
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $recordId = $arrPost['record_id'];
            $apartmentIdOld = $arrPost['apartmentIdOld'];
            $appartmentIdNew = $arrPost['appartment_no'];
<<<<<<< HEAD
            if ($apartmentIdOld != $appartmentIdNew) {
                $apartmentInfo['is_owner'] = 'no';
                $tableName = 'apartment';
                $apartment = $this->PROPERTY->UpdateApartment($apartmentIdOld, $tableName, $apartmentInfo);
                $apartmentInfo['is_owner'] = 'yes';
                $tableName = 'apartment';
                $apartment = $this->PROPERTY->UpdateApartment($appartmentIdNew, $tableName, $apartmentInfo);
            }
            $tableName = 'property';
=======
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
>>>>>>> 3bdb593 (Initial commit)
            $arrInfo['building_id'] = $arrPost['building'];
            $arrInfo['apartment_id'] = $arrPost['appartment_no'];
            $arrInfo['community_building'] = $arrPost['community'];
            $arrInfo['owner_id'] = $arrPost['owner'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
<<<<<<< HEAD
            $check = $this->OWNER->UpdateOwner($arrInfo, $tableName, $recordId);
=======
            $check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
>>>>>>> 3bdb593 (Initial commit)
            if ($check == true) {
                redirect('/property');
            } else {
                die("asd");
            }
        }
<<<<<<< HEAD
=======

>>>>>>> 3bdb593 (Initial commit)
    }
    public function DeleteProperty()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $apartmentId = $arrPost['apartmentId'];
<<<<<<< HEAD
            $apartmentInfo['is_owner'] = 'no';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentId, $tableName, $apartmentInfo);
=======
            $apartmentInfo['is_owner']='no';
            $tableName = 'apartment';
            $apartment = $this->PROPERTY->UpdateApartment($apartmentId,$tableName,$apartmentInfo);
>>>>>>> 3bdb593 (Initial commit)

            $tableName = 'property';
            $recordId = $arrPost['recordId'];
            $arrInfo['status'] = "inactive";
<<<<<<< HEAD
            $check = $this->OWNER->UpdateOwner($arrInfo, $tableName, $recordId);
=======
            $check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
>>>>>>> 3bdb593 (Initial commit)
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
<<<<<<< HEAD
            $ownerTenantId = $this->session->userdata('owner_tenant_id');
            $data['getOwnerproperty'] =  $this->PROPERTY->GetOwnerProperty($ownerTenantId);
            $this->load->view('owner_property', $data);
=======
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getOwnerproperty'] =  $this->PROPERTY->GetOwnerProperty($ownerTenantId);
            $this->load->view('owner_property',$data);
>>>>>>> 3bdb593 (Initial commit)
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
<<<<<<< HEAD
    public function GetOwnerTenant()
=======
     public function GetOwnerTenant()
>>>>>>> 3bdb593 (Initial commit)
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
<<<<<<< HEAD
            $ownerTenantId = $this->session->userdata('owner_tenant_id');
            $data['getTenantProperty'] =  $this->PROPERTY->GetOwnerTenant($ownerTenantId);
            $this->load->view('owner_tenant', $data);
=======
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getTenantProperty'] =  $this->PROPERTY->GetOwnerTenant($ownerTenantId);
            $this->load->view('owner_tenant',$data);
>>>>>>> 3bdb593 (Initial commit)
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
<<<<<<< HEAD
    public function GetOwnerTenantDeposit()
    {
        if ($this->session->userdata('name')) {

            $arrPost = $this->input->post();
            $tenancyId = $arrPost['tenancyId'];
            $data['getdeposit'] =  $this->PROPERTY->GetOwnerDeposit($tenancyId);
            return $this->load->view('owner_deposit', $data);
        } else {
            redirect('login');
        }
    }
    public function GetTenantTenacy()
=======
     public function GetTenantTenacy()
>>>>>>> 3bdb593 (Initial commit)
    {
        if ($this->session->userdata('name')) {
            $this->load->view('main_header');
            $this->load->view('sidebar');
<<<<<<< HEAD
            $ownerTenantId = $this->session->userdata('owner_tenant_id');
            $data['getTenantTenancy'] =  $this->PROPERTY->GetTenantTenacy($ownerTenantId);
            $this->load->view('tenant_tenancy', $data);
=======
            $ownerTenantId=$this->session->userdata('owner_tenant_id');
            $data['getTenantTenancy'] =  $this->PROPERTY->GetTenantTenacy($ownerTenantId);
            $this->load->view('tenant_tenancy',$data);
>>>>>>> 3bdb593 (Initial commit)
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
<<<<<<< HEAD
    public function LoadDepositImage()
=======
     public function LoadDepositImage()
>>>>>>> 3bdb593 (Initial commit)
    {
        log_message('debug', 'ImageDeposit');
        $arrPost = $this->input->post();

        $tenancyId = $arrPost['tenancyId'];
        $data['depositImg'] = $this->PROPERTY->GetDepositImgs($tenancyId);
        return  $this->load->view('deposit_image', $data);
    }
<<<<<<< HEAD
}
=======
    
    
}
?>
>>>>>>> 3bdb593 (Initial commit)
