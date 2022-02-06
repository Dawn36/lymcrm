<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//$route['default_controller'] = 'dashboard';
//$route['default_controller'] = 'infection';
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login';
$route['auth'] = 'login/userAuth';
$route['landing_page'] = 'login/landingPage';
$route['logoutNew'] = 'AdminControllers/logout';
$route['logout'] = 'login/logout';
;

///////////////////////////// Dashboard /////////////////////////////////////
$route['infection_dashboard'] = '/Dashboard';
$route['get_all_email']             = '/Dashboard/GetHistory';

/////////////////////////// Owner Login /////////////////////////////////////////
$route['owner_property']             = '/PropertyController/GetOwnerProperty';
$route['owner_tenant']             = '/PropertyController/GetOwnerTenant';

/////////////////////////// Tenant Login /////////////////////////////////////////
$route['tenant_tenancy']             = '/PropertyController/GetTenantTenacy';


//////////////////////     Image     ////////////////////////////////////////////
$route['profile_img'] = '/UserController/LoadUserProfile';
/////////////////////      Admin     ////////////////////////////////////////////
$route['admin'] = '/AdminControllers';
$route['admin_add'] = '/AdminControllers/LoadAddScreen';
$route['admin_edit'] = '/AdminControllers/LoadEditScreen';
$route['admin_verification'] = '/AdminControllers/AdminVerification';
$route['admin_update'] = '/AdminControllers/AdminUpdate';
$route['admin_delete'] = '/AdminControllers/DeleteAdmin';
$route['admin_password_exit'] = '/AdminControllers/PasswordExit';
$route['admin_change_password_modal'] = '/AdminControllers/ChangePasswordModal';
$route['change_password'] = '/AdminControllers/ChangePassword';

/////////////////////      Owner     ////////////////////////////////////////////
$route['owner']             = '/OwnerControllers';
$route['owner_add']         = '/OwnerControllers/LoadAddScreen';
$route['owner_edit']        = '/OwnerControllers/LoadEditScreen';
$route['ownerCsv']             = '/OwnerControllers/ownerCsv';
$route['owner_uploader']     = '/OwnerControllers/OwnerUploader';
$route['download_file']     = '/OwnerControllers/DownloadFiles';
// add owner And tenant
$route['add']                  = '/OwnerControllers/AddOwnerTenant';
$route['edit']                  = '/OwnerControllers/EditOwnerTenant';
$route['delete']                  = '/OwnerControllers/DeleteOwnerTenant';
$route['email_exit']              = '/OwnerControllers/EmailExit';



/////////////////////      Building     ////////////////////////////////////////////
$route['building']          = '/BuildingControllers';
$route['building_add']      = '/BuildingControllers/LoadAddScreen';
$route['building_edit']     = '/BuildingControllers/LoadEditScreen';
$route['building_exit']     = '/BuildingControllers/BuildingExit';
$route['building_update']     = '/BuildingControllers/UpdateBuilding';
$route['building_verification']     = '/BuildingControllers/BuildingVerification';
$route['building_import']     = '/BuildingControllers/BuildingCsvImportModal';
$route['buildingCsv']     = '/BuildingControllers/BuildingCsv';

/////////////////////      Apartment      ////////////////////////////////////////////
$route['apartment/(:num)']  = '/ApartmentControllers/LoadApartmentScreen/$1';
$route['apartment_add']     = '/ApartmentControllers/LoadAddScreen';
$route['apartment_verification'] = '/ApartmentControllers/ApartmentVerification';
$route['apartment_edit']    = '/ApartmentControllers/LoadEditScreen';
$route['apartment_update']    = '/ApartmentControllers/ApartmentUpdate';
$route['apartment_exit']    = '/ApartmentControllers/ApartmentExit';
$route['apartment_delete']    = '/ApartmentControllers/ApartmentDelete';

/////////// user management ///////////////////////////////////////////////////////////
$route['user'] = '/UserController';
$route['user_add'] = '/UserController/LoadAddScreen';
$route['user_edit'] = '/UserController/LoadEditScreen';
$route['user_verification'] = '/UserController/UserVerification';
$route['user_update'] = '/UserController/UserUpdate';
$route['user_delete'] = '/UserController/UserDelete';
$route['user_reset'] = '/UserController/UserRest';
$route['owner_tenant_email'] = '/UserController/GetEmailTenantOwner';
$route['profile'] = '/UserController/uploadprofile';

///////////// Property  //////////////////////////////////////////////////////
$route['property'] = '/PropertyController';
$route['property_add'] = '/PropertyController/LoadAddScreen';
$route['property_edit'] = '/PropertyController/LoadEditScreen';
$route['property_verification'] = '/PropertyController/AddVerification';
$route['property_update'] = '/PropertyController/PropertyUpdate';
$route['building_get'] = '/PropertyController/GetBuilding';
$route['building_apartment'] = '/PropertyController/GetApartment';
$route['building_apartment_edit'] = '/PropertyController/BuildingApartmentEdit';
$route['delete_property'] = '/PropertyController/DeleteProperty';


////////////////////// Tenant /////////////////////////////////////////////////
$route['tenant'] = '/TenantController';
$route['tenant_add'] = '/TenantController/LoadAddScreen';
$route['tenant_edit'] = '/TenantController/LoadEditScreen';
$route['tenantCsv']        = '/TenantController/tenantCsv';
$route['tenant_uploader']        = '/TenantController/TenantUploader';


///////////////////   Deposit slip route    //////////////////////////////////
$route['deposit']           = '/DepositController';
$route['deposit_add']       = '/DepositController/DepositAdd';
$route['deposit_edit']      = '/DepositController/DepositEdit';
$route['deposit_email']     = '/DepositController/DepositEmail';
$route['deposit_image']     = '/DepositController/LoadDepositImage';
$route['deposit_apartment']     = '/DepositController/GetApartment';
$route['deposit_tenant']     = '/DepositController/GetTenant';
$route['deposit_cheque']     = '/DepositController/GetCheque';
$route['deposit_verification'] = '/DepositController/AddVerification';
$route['email_send'] = '/DepositController/EmailSendOwner';
$route['deposit_delete'] = '/DepositController/DepositDelete';

///////////////////   Tenancy route    //////////////////////////////////
$route['tenancy']           = '/TenancyController';
$route['tenancy_add']       = '/TenancyController/AddTenancy';
$route['tenancy_edit']      = '/TenancyController/LoadEditScreen';
$route['tenancy_apartment'] = '/TenancyController/ShowApartment';
$route['tenancy_submit']    = '/TenancyController/TenancySubmit';
$route['tenancy_update']    = '/TenancyController/TenancyUpdate';
$route['tenancy_delete']    = '/TenancyController/DeleteTenancy';
$route['tenancy_load_payments']    = '/TenancyController/TenancyLoadPayments';

///////////////////   Crond Tab route    //////////////////////////////////
$route['email']     = '/CrondTabControllers/SetEmail';

///////////////////   tenancy_renew    //////////////////////////////////
$route['tenancy_renew']    = '/TenancyRenewController';
$route['tenancy_renew_add']    = '/TenancyRenewController/TenancyRenewAdd';
$route['tenancy_renew_submit']    = '/TenancyRenewController/TenancyRenewSubmit';
