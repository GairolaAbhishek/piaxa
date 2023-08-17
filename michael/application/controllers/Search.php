<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search extends CI_Controller {
	// function __construct(){
	// 		parent::__construct();
	// 		if (isset($_SESSION['logged_in'])) {
	// 			header('Location: '.base_url().'Dashboard');
	// 		}
	// 	}







 public function index(){

 	$this->load->model('SearchModel');

		$result['data_user'] = $this->SearchModel->find();

		// print_r($result);
		// exit();

		$this->load->view('search',$result);
	}

public function find(){
	$this->load->model('SearchModel');
		$result = $this->SearchModel->find();
		echo json_encode($result);
}




















}?>