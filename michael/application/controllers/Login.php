<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	function __construct(){
			parent::__construct();
			if (isset($_SESSION['logged_in'])) {
				header('Location: '.base_url().'Dashboard');
			}
		}

	 public function index(){
		$this->load->view('login');
	}
	public function loginfun(){
	$this->load->model('LoginModel');
	$result = $this->LoginModel->Loginfun();
	echo json_encode($result);
	}

	function logout(){
		session_destroy();
		header('Location: '.base_url().'Login');
	}

}
// class Login extends CI_Controller {



// 	public function index()
// 	{

		

// 		$this->load->view('login');



		
// 	}



// public function Loginfun(){

// 	  $Email = $this->input->post('email');
// 		$Password = $this->input->post('password');
// $this->load->model('Sign_upModel');
// 		$result = $this->Sign_upModel->Loginfun();
// 		echo json_encode($result);

// }

// }
?>