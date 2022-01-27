<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infection extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_infection', 'MI');
	}

	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->model('Model_lovs');
			$this->load->model('Model_bed');
			$lovs = $this->Model_lovs->LovsShow();
			$bed = $this->Model_bed->Getward();
			$data['lovs'] = $lovs;
			$data['bed'] = $bed;
			$this->load->view('infection_form', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

	public function formDataSubmit()
	{
           
		$arrInfo['mr_no'] = strtolower($this->input->post('mr_num'));
		$arrInfo['pateint_name'] = strtolower($this->input->post('names'));
		$arrInfo['ward_no'] = $this->input->post('ward');
		$arrInfo['bed_no'] = $this->input->post('bed');
		$arrInfo['primary_diagnosis'] = strtolower($this->input->post('primary_diagnosis'));
		$arrInfo['final_diagnosis'] = strtolower($this->input->post('final_diagnosis'));
		$discharge_status = strtolower($this->input->post('discharge_status'));
		$arrInfo['admission_date'] = date("Y-m-d", strtotime($this->input->post('date_of_admission')));
		if ($discharge_status == "not applicable" || $discharge_status == "") {
			$arrInfo['discharge_date'] = "";
		} else {
			$arrInfo['discharge_date'] = date("Y-m-d", strtotime($this->input->post('date_of_discharge')));
		}

		$arrInfo['discharge_condition'] = strtolower($this->input->post('condition_on_discharge'));
		$arrInfo['fever'] = strtolower($this->input->post('fever'));
		$arrInfo['temp'] = $this->input->post('temperature_');
		$arrInfo['tachy'] = strtolower($this->input->post('tachycardia'));
		$arrInfo['pulse'] = $this->input->post('pulse');

		$arrInfo['hypo'] = strtolower($this->input->post('hypotension'));
		$arrInfo['bp'] = $this->input->post('bp');
		$arrInfo['chills'] = strtolower($this->input->post('chills'));
		$arrInfo['wbc'] = $this->input->post('wbc');

		if ($arrInfo['wbc'] >= 4.5 && $arrInfo['wbc'] <= 11) {
			$arrInfo['wbc'] = "medium";
		} else if ($arrInfo['wbc'] >= 0 && $arrInfo['wbc'] <= 4.5) {
			$arrInfo['wbc'] = "low";
		} else {
			$arrInfo['wbc'] = "high";
		}

		$arrInfo['neutro'] = $this->input->post('ln');
		$arrInfo['lymp'] = $this->input->post('lymphocytes');
		//  $arrInfo['worse_cxr']=strtolower($this->input->post('worsening_cxr'));
		//  $arrInfo['worse_tracheal_secret']=strtolower($this->input->post('worsening_tracheal_secretions'));
		$arrInfo['form_creation'] = date("Y-m-d");

		if ($arrInfo != '') {
			// log_message('debug',  "dsadasd");
			$this->load->model('Model_infection');
			$check = $this->Model_infection->InfectionForm($arrInfo);
		}

		if ($this->input->post('intravenous_cannula') == 'yes') {
			$arrInfoPhlebitis['device_name'] = 'Phlebitis';
			$arrInfoPhlebitis['device_status'] = $this->input->post('intravenous_cannula');
			$arrInfoPhlebitis['deivce_insertion_date'] = date("Y-m-d", strtotime($this->input->post('phlebitis_date_of_insertion')));
			$arrInfoPhlebitis['site'] = strtolower($this->input->post('phlebitis_sife'));
			$arrInfoPhlebitis['phlebitis'] = strtolower($this->input->post('phlebitis_phlebitis'));
			$arrInfoPhlebitis['check'] = strtolower($this->input->post('phlebitis_options'));
			$arrInfoPhlebitis['mr_no'] = strtolower($this->input->post('mr_num'));
			$arrInfoPhlebitis['device_creation'] = date("Y-m-d");


			// log_message('debug',  "dsadasd");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrInfoPhlebitis);



			if ($this->input->post('phlebitis_culture_report') == 'yes') {
				//$arrPhlebitisCultureReport['phlebitis_culture_report']=$this->input->post('phlebitis_culture_report');
				$arrPhlebitisCultureReport['phlebitis_date'] = $this->input->post('phlebitis_date');
				$arrPhlebitisCultureReport['phlebitis_source'] = $this->input->post('phlebitis_source');
				$arrPhlebitisCultureReport['phlebitis_result'] = $this->input->post('phlebitis_result');
				$arrPhlebitisCultureReport['phlebitis_organism'] = $this->input->post('phlebitis_organism');
				$arrPhlebitisCultureReport['phlebitis_antibiotic'] = $this->input->post('phlebitis_antibiotic');
				$arrPhlebitisCultureReport['phlebitis_mdr_name'] = $this->input->post('phlebitis_mdr_name');

				for ($i = 0; $i < count($arrPhlebitisCultureReport['phlebitis_antibiotic']); $i++) {
					for ($j = 0; $j <= $i; $j++) {
						if ($arrPhlebitisCultureReport['phlebitis_antibiotic'] != '') {
							$antibiotic = implode(",", $arrPhlebitisCultureReport['phlebitis_antibiotic'][$j]);
						} else {

							$antibiotic = '';
						}
					}

					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrPhlebitisCultureReport['phlebitis_date'][$i]));
					$infoAdd['culture_source'] = $arrPhlebitisCultureReport['phlebitis_source'][$i];
					$infoAdd['culture_result'] = $arrPhlebitisCultureReport['phlebitis_result'][$i];
					$infoAdd['culture_organism'] = $arrPhlebitisCultureReport['phlebitis_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrPhlebitisCultureReport['phlebitis_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}


				unset($infoAdd);
				unset($antibiotic);
			}
		}

		if ($this->input->post('urinary_catheter') == 'yes') {
			$arrInfoUrinary['device_name'] = 'Urinary Tract Infection';
			$arrInfoUrinary['device_status'] = $this->input->post('urinary_catheter');
			$arrInfoUrinary['type'] = $this->input->post('urinary_type_of_catheter');
			$arrInfoUrinary['deivce_insertion_date'] = date("Y-m-d", strtotime($this->input->post('urinary_date_of_insertion')));
			$arrInfoUrinary['check'] = $this->input->post('urinary_options');
			$arrInfoUrinary['mr_no'] = $this->input->post('mr_num');
			$arrInfoUrinary['device_creation'] = date("Y-m-d");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrInfoUrinary);

			if ($this->input->post('urinary_culture_report') == 'yes') {
				// $arrUrinaryCultureReport['urinary_culture_report']=$this->input->post('urinary_culture_report');
				$arrUrinaryCultureReport['urinary_date'] = $this->input->post('urinary_date');
				$arrUrinaryCultureReport['urinary_source'] = $this->input->post('urinary_source');
				$arrUrinaryCultureReport['urinary_result'] = $this->input->post('urinary_result');
				$arrUrinaryCultureReport['urinary_organism'] = $this->input->post('urinary_organism');
				$arrUrinaryCultureReport['urinary_antibiotic'] = $this->input->post('urinary_antibiotic');


				$arrUrinaryCultureReport['urinary_mdr_name'] = $this->input->post('urinary_mdr_name');
				for ($i = 0; $i < count($arrUrinaryCultureReport['urinary_antibiotic']); $i++) {
					for ($j = 0; $j <= $i; $j++) {

						if ($arrUrinaryCultureReport['urinary_antibiotic'] != '') {
							$antibiotic = implode(",", $arrUrinaryCultureReport['urinary_antibiotic'][$j]);
						} else {
							$antibiotic = '';
						}
					}

					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrUrinaryCultureReport['urinary_date'][$i]));
					$infoAdd['culture_source'] = $arrUrinaryCultureReport['urinary_source'][$i];
					$infoAdd['culture_result'] = $arrUrinaryCultureReport['urinary_result'][$i];
					$infoAdd['culture_organism'] = $arrUrinaryCultureReport['urinary_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrUrinaryCultureReport['urinary_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}

				unset($infoAdd);
				unset($antibiotic);
			}
		}

		if ($this->input->post('central_line') == 'yes') {
			$arrInfoCentral['device_name'] = 'Central Line Associated Bloodstream Infection';
			$arrInfoCentral['device_status'] = $this->input->post('central_line');
			$arrInfoCentral['deivce_insertion_date'] = date("Y-m-d", strtotime($this->input->post('central_date_of_insertion')));
			$arrInfoCentral['type'] = $this->input->post('central_type');
			$arrInfoCentral['check'] = $this->input->post('central_options');
			$arrInfoCentral['mr_no'] = $this->input->post('mr_num');
			$arrInfoCentral['device_creation'] = date("Y-m-d");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrInfoCentral);
			echo $deviceId;
			if ($this->input->post('central_culture_report') == 'yes') {
				// $arrCentralCultureReport['central_culture_report']=$this->input->post('central_culture_report');
				$arrCentralCultureReport['central_date'] = $this->input->post('central_date');
				$arrCentralCultureReport['central_source'] = $this->input->post('central_source');
				$arrCentralCultureReport['central_result'] = $this->input->post('central_result');
				$arrCentralCultureReport['central_organism'] = $this->input->post('central_organism');
				$arrCentralCultureReport['central_antibiotic'] = $this->input->post('central_antibiotic');

				$arrCentralCultureReport['central_mdr_name'] = $this->input->post('central_mdr_name');
				for ($i = 0; $i < count($arrCentralCultureReport['central_date']); $i++) {
					for ($j = 0; $j <= $i; $j++) {
						if ($arrCentralCultureReport['central_antibiotic'] != '') {
							$antibiotic = implode(",", $arrCentralCultureReport['central_antibiotic'][$j]);
						} else {
							$antibiotic = '';
						}
					}
					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrCentralCultureReport['central_date'][$i]));
					$infoAdd['culture_source'] = $arrCentralCultureReport['central_source'][$i];
					$infoAdd['culture_result'] = $arrCentralCultureReport['central_result'][$i];
					$infoAdd['culture_organism'] = $arrCentralCultureReport['central_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrCentralCultureReport['central_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}

				unset($infoAdd);
				unset($antibiotic);
			}
		}

		if ($this->input->post('hospital_acquired_pneumonia') == 'yes') {
			$arrInfoHospital['device_name'] = 'Hospital Acquired Pneumonia';
			$arrInfoHospital['device_status'] = $this->input->post('hospital_acquired_pneumonia');
			$arrInfoHospital['device_first_event'] = date("Y-m-d", strtotime($this->input->post('hospital_date_of_first_event')));
			$arrInfoHospital['check'] = $this->input->post('hospital_options');
			$arrInfoHospital['worse_cxr'] = $this->input->post('hospital_worsening_cxr');
			$arrInfoHospital['worse_tracheal_secret'] = $this->input->post('hospital_worsening_tracheal_secretions');
			$arrInfoHospital['mr_no'] = $this->input->post('mr_num');
			$arrInfoHospital['device_creation'] = date("Y-m-d");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrInfoHospital);
			echo $deviceId;
			if ($this->input->post('hospital_culture_report') == 'yes') {
				// $arrHospitalCultureReport['hospital_culture_report']=$this->input->post('hospital_culture_report');
				$arrHospitalCultureReport['hospital_date'] = $this->input->post('hospital_date');
				$arrHospitalCultureReport['hospital_source'] = $this->input->post('hospital_source');
				$arrHospitalCultureReport['hospital_antibiotic'] = $this->input->post('hospital_antibiotic');

				$arrHospitalCultureReport['hospital_organism'] = $this->input->post('hospital_organism');
				$arrHospitalCultureReport['hospital_result'] = $this->input->post('hospital_result');
				$arrHospitalCultureReport['hospital_mdr_name'] = $this->input->post('hospital_mdr_name');
				for ($i = 0; $i < count($arrHospitalCultureReport['hospital_date']); $i++) {
					for ($j = 0; $j <= $i; $j++) {
						if ($arrHospitalCultureReport['hospital_antibiotic'] != '') {
							$antibiotic = implode(",", $arrHospitalCultureReport['hospital_antibiotic'][$j]);
						} else {
							$antibiotic = '';
						}
					}
					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrHospitalCultureReport['hospital_date'][$i]));
					$infoAdd['culture_source'] = $arrHospitalCultureReport['hospital_source'][$i];
					$infoAdd['culture_result'] = $arrHospitalCultureReport['hospital_result'][$i];
					$infoAdd['culture_organism'] = $arrHospitalCultureReport['hospital_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrHospitalCultureReport['hospital_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}

				unset($infoAdd);
				unset($antibiotic);
			}
		}

		if ($this->input->post('ventilator_associated_pneumonia') == 'yes') {
			$arrVentilatorCultureReport['device_name'] = 'Ventilator Associated Pneumonia';
			$arrVentilatorCultureReport['device_status'] = $this->input->post('ventilator_associated_pneumonia');
			$arrVentilatorCultureReport['deivce_intubation_date'] = date("Y-m-d", strtotime($this->input->post('ventilator_date_of_intubation')));
			$arrVentilatorCultureReport['deivce_extubation_date'] = date("Y-m-d", strtotime($this->input->post('ventilator_date_of_extubation')));
			$arrVentilatorCultureReport['check'] = $this->input->post('ventilator_options');
			$arrVentilatorCultureReport['worse_cxr'] = $this->input->post('ventilator_worsening_cxr');
			$arrVentilatorCultureReport['worse_tracheal_secret'] = $this->input->post('ventilator_worsening_tracheal_secretions');
			$arrVentilatorCultureReport['mr_no'] = $this->input->post('mr_num');
			$arrVentilatorCultureReport['device_creation'] = date("Y-m-d");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrVentilatorCultureReport);
			echo $deviceId;
			if ($this->input->post('ventilator_culture_report') == 'yes') {
				// $arrVentilatorCultureReport['ventilator_culture_report']=$this->input->post('ventilator_culture_report');
				$arrVentilatorCultureReport['ventilator_date'] = $this->input->post('ventilator_date');
				$arrVentilatorCultureReport['ventilator_source'] = $this->input->post('ventilator_source');
				$arrVentilatorCultureReport['ventilator_result'] = $this->input->post('ventilator_result');
				$arrVentilatorCultureReport['ventilator_organism'] = $this->input->post('ventilator_organism');
				$arrVentilatorCultureReport['ventilator_antibiotic'] = $this->input->post('ventilator_antibiotic');

				$arrVentilatorCultureReport['ventilator_mdr_name'] = $this->input->post('ventilator_mdr_name');
				for ($i = 0; $i < count($arrVentilatorCultureReport['ventilator_date']); $i++) {
					for ($j = 0; $j <= $i; $j++) {
						if ($arrVentilatorCultureReport['ventilator_antibiotic'] != '') {
							$antibiotic = implode(",", $arrVentilatorCultureReport['ventilator_antibiotic'][$j]);
						} else {
							$antibiotic = '';
						}
					}
					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrVentilatorCultureReport['ventilator_date'][$i]));
					$infoAdd['culture_source'] = $arrVentilatorCultureReport['ventilator_source'][$i];
					$infoAdd['culture_result'] = $arrVentilatorCultureReport['ventilator_result'][$i];
					$infoAdd['culture_organism'] = $arrVentilatorCultureReport['ventilator_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrVentilatorCultureReport['ventilator_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}

				unset($infoAdd);
				unset($antibiotic);
			}
		}

		if ($this->input->post('surgical_site_infection') == 'yes') {
			$arrInfoSurgical['device_name'] = 'Surgical Site Infection';
			$arrInfoSurgical['device_status'] = $this->input->post('surgical_site_infection');
			// $arrInfoSurgical['deivce_insertion_date']=date("Y-m-d", strtotime($this->input->post('surgical_date_of_insertion')));
			$arrInfoSurgical['deivce_surgery_date'] = date("Y-m-d", strtotime($this->input->post('surgical_date_of_surgery')));
			$arrInfoSurgical['check'] = $this->input->post('surgical_options');
			$arrInfoSurgical['mr_no'] = $this->input->post('mr_num');
			$arrInfoSurgical['device_creation'] = date("Y-m-d");
			$this->load->model('Model_infection');
			$deviceId = $this->Model_infection->InfectionFormDevice($arrInfoSurgical);
			echo $deviceId;
			if ($this->input->post('surgical_culture_report') == 'yes') {
				$arrSurgicalCultureReport['surgical_culture_report'] = $this->input->post('surgical_culture_report');
				$arrSurgicalCultureReport['surgical_date'] = $this->input->post('surgical_date');
				$arrSurgicalCultureReport['surgical_source'] = $this->input->post('surgical_source');
				$arrSurgicalCultureReport['surgical_result'] = $this->input->post('surgical_result');
				$arrSurgicalCultureReport['surgical_organism'] = $this->input->post('surgical_organism');
				$arrSurgicalCultureReport['surgical_antibiotic'] = $this->input->post('surgical_antibiotic');

				$arrSurgicalCultureReport['surgical_mdr_name'] = $this->input->post('surgical_mdr_name');
				for ($i = 0; $i < count($arrSurgicalCultureReport['surgical_date']); $i++) {
					for ($j = 0; $j <= $i; $j++) {
						if ($arrSurgicalCultureReport['surgical_antibiotic'] != '') {
							$antibiotic = implode(",", $arrSurgicalCultureReport['surgical_antibiotic'][$j]);
						} else {
							$antibiotic = '';
						}
					}
					$infoAdd['device_id'] = $deviceId;
					$infoAdd['culture_insertion_date'] = date("Y-m-d", strtotime($arrSurgicalCultureReport['surgical_date'][$i]));
					$infoAdd['culture_source'] = $arrSurgicalCultureReport['surgical_source'][$i];
					$infoAdd['culture_result'] = $arrSurgicalCultureReport['surgical_result'][$i];
					$infoAdd['culture_organism'] = $arrSurgicalCultureReport['surgical_organism'][$i];
					$infoAdd['culture_antibio'] = $antibiotic;
					$infoAdd['MDR'] = $arrSurgicalCultureReport['surgical_mdr_name'][$i];
					$infoAdd['culture_creation'] = date("Y-m-d");

					$this->Model_infection->InfectionFormCulture($infoAdd);
				}

				unset($infoAdd);
				unset($antibiotic);
			}
		}

		redirect('infection_form');
	}

	public function formDataUpation()
	{
		if ($this->session->userdata('name')) {
			//$data['formdata'] = $this->MI->formDatByID($this->input->get('id'));
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('infection_form');
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

	public function viewSubmitedFormData()
	{

		if ($this->session->userdata('name')) {
			$data['variable'] = $this->MI->view_submitted_form_data();
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$this->load->view('infection_view_form', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}

	public function getAntibioticsList()
	{

		if ($this->session->userdata('name')) {
			$post = $this->input->post();
			$org_name = strtolower($post['organism_name']);
			$data = $this->MI->get_antibiotic_list_by_orgnisam($org_name);
			if ($data) {
				echo json_encode($data);
			} else {
				return false;
			}
		} else {
			redirect('login');
		}
	}

	public function getBedList()
	{

		if ($this->session->userdata('name')) {
			$post = $this->input->post();
			$ward = strtolower($post['ward']);
			$data = $this->MI->get_ward_list($ward);
			if ($data) {
				echo json_encode($data);
			} else {
				return false;
			}
		} else {
			redirect('login');
		}
	}

	public function checkMrNumber()
	{
		if ($this->session->userdata('name')) {
			$post = $this->input->post();
			$mr_num = strtolower($post['mr_num']);

			$data = $this->MI->check_Mr_Number($mr_num);
			if ($data) {
				echo json_encode($data);
			} else {
				return false;
			}
		} else {
			redirect('login');
		}
	}
}
