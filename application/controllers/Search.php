<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Search extends CI_Controller {

	public function index(){
		 $this->load->model('LoginModel');  

    $result['data'] = $this->LoginModel->get();

		$this->load->view('search',$result);
	}







function get(){
	$this->load->model('SearchModel');
		$result = $this->SearchModel->get();
		echo json_encode($result);
}








}?>