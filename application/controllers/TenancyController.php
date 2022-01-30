<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenancyController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Model_user', 'MUSER');
		// $this->load->model('Model_lovs', 'MLOVS');
	}


	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			// $data['users'] = $this->MUSER->UserShow();
			$this->load->view('tenancy_show');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

    public function AddTenancy()
    {
        log_message('debug', 'AddTenancy');
        return  $this->load->view('tenancy_add');
    }

    public function EditTenancy()
    {
        log_message('debug', 'EditTenancy');
        return  $this->load->view('tenancy_edit');
    }

}
