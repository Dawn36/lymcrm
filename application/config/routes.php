<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['login'] = 'login/index';
$route['auth'] = 'login/userAuth';
$route['landing_page'] = 'login/landingPage';
$route['logout'] = 'login/logout';
$route['infection_form'] = 'infection/index';
$route['info_submit'] = 'infection/formDataSubmit';
$route['info_updation'] = 'infection/formDataUpation';
$route['viewdata'] = 'infection/viewSubmitedFormData';
$route['get_antibiotic'] = 'infection/getAntibioticsList';
$route['get_bed'] = 'infection/getBedList';
$route['check_org_name'] = 'bed/checkOrgName';
$route['check_mr_num'] = 'infection/checkMrNumber';
$route['delete_lov'] = '/Bed/LovsDelete';
$route['delete_ward'] = '/Ward/WardDelete';
$route['delete_bed'] = '/Bed/bedDelete';
$route['check_ward'] = 'ward/checkWard';
$route['user_added'] = 'users/UsersAdd';
$route['source'] = '/Bed/Source';
$route['source_add'] = '/Bed/SourceAdd';
$route['delete_source'] = '/Bed/SourceDelete';

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
// add owner And tenant
$route['add']      			= '/OwnerControllers/AddOwnerTenant';
$route['edit']      			= '/OwnerControllers/EditOwnerTenant';
$route['delete']      			= '/OwnerControllers/DeleteOwnerTenant';
$route['email_exit']      		= '/OwnerControllers/EmailExit';

/////////////////////      Building     ////////////////////////////////////////////
$route['building']          = '/BuildingControllers';
$route['building_add']      = '/BuildingControllers/LoadAddScreen';
$route['building_edit']     = '/BuildingControllers/LoadEditScreen';
$route['building_exit']     = '/BuildingControllers/BuildingExit';
$route['building_update']     = '/BuildingControllers/UpdateBuilding';
$route['building_verification']     = '/BuildingControllers/BuildingVerification';

/////////////////////      Apartment      ////////////////////////////////////////////
$route['apartment/(:num)']  = '/ApartmentControllers/LoadApartmentScreen/$1';
$route['apartment_add']     = '/ApartmentControllers/LoadAddScreen';
$route['apartment_verification'] = '/ApartmentControllers/ApartmentVerification';
$route['apartment_edit']    = '/ApartmentControllers/LoadEditScreen';
$route['apartment_verification']    = '/ApartmentControllers/AddVerification';

/////////// user management ///////////////////////////////////////////////////////////
$route['user'] = '/UserController';
$route['user_add'] = '/UserController/LoadAddScreen';
$route['user_edit'] = '/UserController/LoadEditScreen';
$route['user_verification'] = '/UserController/UserVerification';
$route['user_update'] = '/UserController/UserUpdate';
$route['user_delete'] = '/UserController/UserDelete';
$route['user_reset'] = '/UserController/UserRest';
$route['owner_tenant_email'] = '/UserController/GetEmailTenantOwner';

///////////// Property  //////////////////////////////////////////////////////
$route['property'] = '/PropertyController';
$route['property_add'] = '/PropertyController/LoadAddScreen';
$route['property_edit'] = '/PropertyController/LoadEditScreen';
////////////////////// Tenant /////////////////////////////////////////////////
$route['tenant'] = '/TenantController';
$route['tenant_add'] = '/TenantController/LoadAddScreen';
$route['tenant_edit'] = '/TenantController/LoadEditScreen';



///////////////////   Deposit slip route    //////////////////////////////////
$route['deposit']           = '/DepositController';
$route['deposit_add']       = '/DepositController/DepositAdd';
$route['deposit_edit']      = '/DepositController/DepositEdit';
$route['deposit_email']     = '/DepositController/DepositEmail';
$route['deposit_image']     = '/DepositController/LoadDepositImage';

///////////////////   Tenancy route    //////////////////////////////////
$route['tenancy'] = '/TenancyController';
$route['tenancy_add'] = '/TenancyController/AddTenancy';
$route['tenancy_edit'] = '/TenancyController/EditTenancy';

