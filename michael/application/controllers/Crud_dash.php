<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_dash extends CI_Controller {

	public function index(){

		$this->load->model('User_listModel');

		$result['data_user'] = $this->User_listModel->get();
		// print_r($result);
		// exit();


		$this->load->view('list',$result);

}







































































}?>