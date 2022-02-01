<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OwnerControllers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('OwnerModal', 'OWNER');
	}
	public function Index()
	{
		if ($this->session->userdata('name')) {
			$this->load->view('main_header');
			$this->load->view('sidebar');
			$tableName='owner';
			$data['ownerData'] =  $this->OWNER->ShowOwner($tableName);
			$this->load->view('owner_show', $data);
			$this->load->view('footer');
		} else {
			redirect('login');
		}
	}
	public function OwnerUploader()
	{
		if ($this->session->userdata('name')) {
			return $this->load->view('owner_uploader');
			
		} else {
			redirect('login');
		}
	}
    public function LoadAddScreen()
    {
        if ($this->session->userdata('name')) {
            return $this->load->view('owner_add');
            
        } else {
            redirect('login');
        }
    }
	public function LoadEditScreen()
	{
		if ($this->session->userdata('name')) {
			$arrPost = $this->input->post();
            $id = $arrPost['id'];
            $tableName=$arrPost['tablename'];
			$data['ownerData'] =  $this->OWNER->ShowOwnerEdit($tableName,$id);
			return $this->load->view('owner_edit',$data);
		
		} else {
			redirect('login');
		}
	}

	public function AddOwnerTenant()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
             $tableName = $arrPost['table_name'];
            $arrInfo['name'] = $arrPost['name'];
            $arrInfo['email'] = $arrPost['email'];
            $arrInfo['phone_number'] = $arrPost['contact'];
            $arrInfo['created_at'] = date("Y-m-d h:i:s");
            $arrInfo['created_by'] =  $this->session->userdata('user_id');
            $arrInfo['created_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
			$check = $this->OWNER->AddOwner($arrInfo,$tableName);
            if ($check == true) {
                redirect('/'.$tableName);
            } else {
                die("asd");
            }

        }

    }
    public function EmailExit()
    {
        if ($this->session->userdata('name')) {
             $arrPost = $this->input->post();
       		 $email = $arrPost['email'];
       		 $tableName = $arrPost['table_name'];
        	$data = $this->OWNER->EmailExit($email,$tableName);
        	if ($data >= 1) {

            	echo json_encode($data);
        	} else {
            	return false;
        	}

        }

    }
    public function EditOwnerTenant()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            $tableName = $arrPost['table_name'];
            $recordId = $arrPost['record_id'];
            $arrInfo['name'] = $arrPost['name'];
            $arrInfo['email'] = $arrPost['email'];
            $arrInfo['phone_number'] = $arrPost['contact'];
            $arrInfo['updated_at'] = date("Y-m-d h:i:s");
            $arrInfo['updated_by'] =  $this->session->userdata('user_id');
            $arrInfo['updated_name'] =  $this->session->userdata('user_name');
            $arrInfo['status'] = "active";
			$check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            if ($check == true) {
                redirect('/'.$tableName);
            } else {
              
            }

        }

    }
      public function DeleteOwnerTenant()
    {
        if ($this->session->userdata('name')) {
            $arrPost = $this->input->post();
            	log_message('debug aaa',print_r($arrPost));
            $tableName = $arrPost['tablename'];
            $recordId = $arrPost['id'];
            $arrInfo['status'] = "inactive";
			$check = $this->OWNER->UpdateOwner($arrInfo,$tableName,$recordId);
            if ($check == true) {
                redirect('/'.$tableName);
            } 

        }

    }
      public function DownloadFiles()
        {
            $this->load->helper('download');
            $data = 'Here is some text!';
            $name = 'testfile.csv';
            force_download('http://localhost:1000/testfile.csv', '');
                redirect('/owner');

        }


     public function ownerCsv()
    {

        $arrPost = $this->input->post();
        $tableName = $arrPost['tablename'];

        $filename = $_FILES["owner_csv"]["tmp_name"];
        if ($_FILES["owner_csv"]["size"] > 0) {
            $file = fopen($filename, "r");
            $header = fgetcsv($file);

            $name = $header[0];
            $email = $header[1];
            $contact = $header[2];

            if (
                $name != "name" ||
                $email != "email" ||
                $contact != "contact"
            ) {
                redirect('owner?message=0');
                // echo '<script>alert("Column Not Matched.")</script>';
                // }
                // exit();
                return false;
            }

            while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
                log_message('debug', 'ownerCsv aa ' . print_r($data, TRUE));

                $dataArr['name'] = $data[0];
                $dataArr['email'] = $data[1];
                $dataArr['phone_number'] = $data[2];
                $data['ownerData'] =  $this->OWNER->AddUpdateOwnerTenant($tableName, $dataArr);
            }

            fclose($file);
            redirect('owner?message=1');
        } else {
            return false;
        }
    }
    
    


}
