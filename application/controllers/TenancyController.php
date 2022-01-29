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
			$this->load->view('deposit_show');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

    public function ModalAddTenancy()
    {
        log_message('debug', 'modalAddTenancy');
        return  $this->load->view('modal_deposit_add');
    }

    public function ModalEditTenancy()
    {
        log_message('debug', 'ModalEditTenancy');
        return  $this->load->view('modal_deposit_edit');
    }

    public function ModalEmailTenancy()
    {
        log_message('debug', 'ModalEmailTenancy');
        return  $this->load->view('modal_deposit_email');
    }

    public function LoadImageTenancy()
    {
        log_message('debug', 'ImageTenancy');
        return  $this->load->view('deposit_image');
    }

}
