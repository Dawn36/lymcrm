<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepositController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user', 'MUSER');
		$this->load->model('Model_lovs', 'MLOVS');
	}


	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$data['users'] = $this->MUSER->UserShow();
			$this->load->view('deposit_show');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

    public function ModalAddDeposit()
    {
        log_message('debug', 'modalAddDeposit');
        return  $this->load->view('modal_deposit_add');
    }

}
