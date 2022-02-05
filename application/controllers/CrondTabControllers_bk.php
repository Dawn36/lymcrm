<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrondTabControllers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrondTabModel', 'CRONDTAB');
        // $this->load->model('BuildingModal', 'BUILDING');
        $this->load->library('email');
    }

    public function SetEmail()
    {

        $data = $this->CRONDTAB->TenancyFromTenant();
        // log_message('debug', print_r($data[0], TRUE));

        foreach ($data as $key => $val) {
            log_message('debug', print_r($val, TRUE));

            // 	$email = $val['email'];
            // 	$subject = "Again some text";
            // 	$emailToName = $val['name'];
            // 	$message = "Dear $emailToName,<br><br>

            // Greetings!<br><br>

            // We hereby inform you, on behalf of the owner, in case you wish to renew your tenancy contract, your new rent shall be as per the RERA rental index calculator.<br><br>

            // Renewing of the Tenancy Contract should be done at least 30 days before the expiry of the contract.<br><br>

            // All other terms and conditions shall remain the same.<br><br>

            // You can check your new rent as per index👉<br>https://dubailand.gov.ae/en/eservices/rental-in<br><br>

            // Please note rent shall be based on the index at the time of renewal.";
            // $this->SendEmail($email, $subject, $message);
        }
    }
    public function SendEmail($email, $subject, $message)
    {

        $config['smtp_host'] = 'smtp.googlemail.com';
        $config['smtp_user'] = 'uhfdev@gmail.com';
        $config['smtp_pass'] = 'karachipakistan';
        $config['smtp_port'] = '465';
        $config['mailtype'] = 'html';
        $config['smtp_crypto'] = 'ssl';
        $config['protocol'] = 'smtp';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n";

        $this->email->initialize($config);
        $this->email->from('uhfdev@gmail.com');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        // $this->email->attach('C:\Users\xyz\Desktop\images\abc.png');
        if ($this->email->send()) {
            echo 'Email send.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}
