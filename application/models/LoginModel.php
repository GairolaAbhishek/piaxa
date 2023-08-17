<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class LoginModel extends CI_Model {



	function loginfun()
	{
		

	$email = $this->input->post('email');
	$password = $this->input->post('password');

	
	$sql = "select * from sign_up where email = '$email'";

	$check = $this->db->query($sql);


	
	if ($check->num_rows()==1) 
	{
// print_r("hy");
// 	exit();

	 	$data = $check->result_array();
  		$dpassword = $data[0]['password'];
		if (password_verify($password, $dpassword)) 
		{
  		
	 	 	$_SESSION['logged_in'] = true;
	 	 	$_SESSION['welcm'] = '1';
	 	 	$_SESSION['name'] = $data[0]['name'];
	 	 	$_SESSION['user'] = $data[0]['email'];
	 	 	$_SESSION['image'] = $data[0]['image'];

	 	 	// $_SESSION['type'] = $data[0]['type'];
	 	 	$_SESSION['id'] = $data[0]['id'];
	 	 	return true;
		}
	 	else
	 	{
 	 		return 'wrong';
	 	}
	}
	 else
	 {
	 	return 'wrong';
	 } 
	}

function get(){
	
		$sql = "select * from sign_up ";
		$result = $this->db->query($sql);
		if ($result->num_rows()>0) {
		return $data = $result->result_array();
		}else{
			$data = 'No';
		}
		}


}
?>

