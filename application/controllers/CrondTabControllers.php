<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrondTabControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CrondTabModel', 'CRONDTAB');
		// $this->load->model('BuildingModal', 'BUILDING');

		// $this->load->library('email');
	}

	public function SetEmail()
	{
		$thirtyDays =	date('Y-m-d', strtotime('+30 days'));
		$sixtyDays =	date('Y-m-d', strtotime('+60 days'));
		$ninetyDays =	date('Y-m-d', strtotime('+90 days'));

		$whereThirtyDays = "DATE(`end_date`) = '$thirtyDays'";
		$daet=30;
		$data = $this->CRONDTAB->TenancyFromTenant($whereThirtyDays,$daet);
		if (!empty($data)) {
			$this->SendEmail($data,$daet);
		}

		$whereSixtyDays = "DATE(`end_date`) = '$sixtyDays'";
		$daet=60;
		$data = $this->CRONDTAB->TenancyFromTenant($whereSixtyDays,$daet);
		if (!empty($data)) {
			$this->SendEmail($data,$daet);
		}

		$whereNinetyDays = "DATE(`end_date`) = '$ninetyDays'";
		$daet=90;
		$data = $this->CRONDTAB->TenancyFromTenant($whereNinetyDays,$daet);
		if (!empty($data)) {
			$this->SendEmail($data,$daet);
		}
	}

	public function SendEmail($data,$daet)
	{
		$config['smtp_host'] = SMTPHOST;
		$config['smtp_user'] = SMTPUSER;
		$config['smtp_pass'] = SMTPPASS;
		$config['smtp_port'] = '465';
		$config['mailtype'] = 'html';
		$config['smtp_crypto'] = 'ssl';
		$config['protocol'] = 'smtp';
		$config['charset'] = 'iso-8859-1';
		$config['newline'] = "\r\n";


		foreach ($data as $key => $val) {
			$email = $val['email'];
<<<<<<< HEAD
			$subject = "Again some text";
=======
			$subject = "Renewal Notice";
>>>>>>> 3bdb593 (Initial commit)
			$emailToName = $val['name'];
			$message = "Dear $emailToName,<br><br>

			Greetings!<br><br>

			We hereby inform you, on behalf of the owner, in case you wish to renew your tenancy contract, your new rent shall be as per the RERA rental index calculator.<br><br>

			Renewing of the Tenancy Contract should be done at least [[CHANGE]] days before the expiry of the contract.<br><br>

			All other terms and conditions shall remain the same.<br><br>

			You can check your new rent as per index<br>https://dubailand.gov.ae/en/eservices/rental-in<br><br>

			Please note rent shall be based on the index at the time of renewal.";
<<<<<<< HEAD

			$message =str_replace("[[CHANGE]]",$daet,$message);
		}
		
		$this->email->initialize($config);
		$this->email->from(SMTPUSER);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			echo 'Email send.';
=======
			$message =str_replace("[[CHANGE]]",$daet,$message);
		}

		$this->email->initialize($config);
		$this->email->from(SMTPFROM);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
          $this->email->cc('reception@lymdubai.com');
          $this->email->bcc('imran@lymdubai.com');
         $this->email->bcc('dawngill08@gmail.com');
		if ($this->email->send()) {
			echo 'Email send.';
			$this->sendLog($data);
>>>>>>> 3bdb593 (Initial commit)
		} else {
			show_error($this->email->print_debugger());
		}
	}
<<<<<<< HEAD
=======
	

	public function sendLog($data)
	{
		
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,"http://www.lymcrm.com/log.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "logs=".json_encode($data));

		// In real life you should use something like:
		// curl_setopt($ch, CURLOPT_POSTFIELDS, 
		//          http_build_query(array('postvar1' => 'value1')));

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		curl_close ($ch);

		// Further processing ...
		if ($server_output == "OK") { 
			
		} else {
			
		}
	}
>>>>>>> 3bdb593 (Initial commit)
}
