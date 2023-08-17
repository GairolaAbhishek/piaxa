<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model {


function Loginfun()
	{
		

$Email = $this->input->post('email');
		$password = $this->input->post('password');



		$sql = "select * from sign_up where email = '$Email'";
	$check = $this->db->query($sql);
	

	if ($check->num_rows()) 
	{

	 	$data = $check->result_array();
  		$dpassword = $data[0]['password'];
  		
  		
		if ($dpassword) 
		{
  		
	 	 	$_SESSION['logged_in'] = true;
	 	 	$_SESSION['welcm'] = '1';
	 	 	$_SESSION['name'] = $data[0]['name'];
	 	 	$_SESSION['user'] = $data[0]['email'];
	 	 	// $_SESSION['type'] = $data[0]['type'];
	 	 	$_SESSION['id'] = $data[0]['id'];
	 	 	return true;
		}
	 	else
	 	{
 	 		return 'ggh';
	 	}
	}
	 else
	 {
	 	return 'hasy';
	 } 
	}


// 	function Loginfun(){
		
// 		$Email = $this->input->post('email');
// 		$Password = $this->input->post('password');

// 		$query=$this->db->where(['email'=>$Email,'Password'=>$Password])->get('sign_up');


// if ($query->num_rows()) {


// header('location:http://localhost/ci_3/Smsapp_CI/Dashboard');


// 		return $query->row()->id;
// 		}else{

// header('location:http://localhost/ci_3/Smsapp_CI/Login');

// 	return false;
// 	}
// 		}






























	}