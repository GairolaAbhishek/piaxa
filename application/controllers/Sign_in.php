<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Sign_in extends CI_Controller { 

	public function index(){
		
		$this->load->view('Sign_in');
}
	
public function register(){
	
		$this->load->model('Sign_inModel');

		$result = $this->Sign_inModel->get();

		echo json_encode($result);

}























	}





















?>