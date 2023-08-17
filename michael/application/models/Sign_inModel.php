<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sign_inModel extends CI_Model {

	function Signn(){
		
		$Name = $this->input->post('name');
		$Email = $this->input->post('Email');
		$Password = $this->input->post('Password');

			$tmp_img = $_FILES;

	
 if(!empty($tmp_img))
               {

				$img = $_FILES['file'];
			
				if (isset($_FILES['file'])) {
		   	for ($i=0; $i <sizeof($_FILES['file']['name']) ; $i++) { 
		 		$_FILES['myimg']['name'] = $_FILES['file']['name'][$i];
		 		$_FILES['myimg']['size'] = $_FILES['file']['size'][$i];
		 		$_FILES['myimg']['type'] = $_FILES['file']['type'][$i];
		 		$_FILES['myimg']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
		 		$_FILES['myimg']['error'] = $_FILES['file']['error'][$i];
		 		
		 		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		 		$config['file_name'] = 'img'.rand(100,1000);
		 		$config['upload_path'] = './upload';


		 	$this->load->library('upload',$config);

				if (!$this->upload->do_upload('myimg')) {
			$img = null;
				}
				else{
			$file_data = $this->upload->data();
				$img = base_url()."upload/".$file_data['file_name'];

				}
		 		}
				}
                }

	
		$insert="insert into sign_up( name,email,password,image)values('$Name','$Email','$Password','$img')";

		$result = $this->db->query($insert);

if ($result) {

	// echo"hy";
	// exit();

		$_SESSION['update'] = '1';

header('location:http://localhost/ci_3/Smsapp_CI/Login');


	}

	else{

		$_SESSION['update'] = '0';

header('location:http://localhost/ci_3/Smsapp_CI/Sign_in');


	}


	
	}



	
	















}














?>