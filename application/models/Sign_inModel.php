<?php

class Sign_inModel extends CI_Model {

	function get(){
	
	$name = $this->input->post('name');
	
		$email = $this->input->post('email');

		

	$password = $this->input->post('password');
		if ($password != '**************************' ) {
			$password = password_hash($password, PASSWORD_DEFAULT);			
		}
	

		if(($_FILES['image']['name'])) {
				for ($i=0; $i <sizeof($_FILES['image']['name']) ; $i++) { 
		 		$_FILES['myimg']['name'] = $_FILES['image']['name'][$i];
		 		$_FILES['myimg']['size'] = $_FILES['image']['size'][$i];
		 		$_FILES['myimg']['type'] = $_FILES['image']['type'][$i];
		 		$_FILES['myimg']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
		 		$_FILES['myimg']['error'] = $_FILES['image']['error'][$i];
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
		 		$config['file_name'] = 'img'.rand(100,1000);
		 		$config['upload_path'] = './img/avatars/';
		 	$this->load->library('upload',$config);
			if (!$this->upload->do_upload('myimg')) {
			$img = "null";
				}
			else{
			 $file_data = $this->upload->data();
			 $img = $file_data['file_name'];
	
		 		}
		 	}
			}


	
		$insert = "insert into sign_up (name,email,password,image) values('$name','$email','$password','$img')";

		
		$result_insert = $this->db->query($insert);

				

		if ($result_insert){
			
			header("Location:http://localhost/ci_3/Smsapp_CI/login");

		}else{

		echo"fun";


		}		



}













































}?>