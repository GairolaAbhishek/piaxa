<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function index()
	{
		$this->load->view('sign_in');
	}
	public function Signn(){

	$this->load->model('Sign_inModel');
		$result = $this->Sign_inModel->Signn();
		echo json_encode($result);

}

public function fun(){
	echo"fun";
	exit();
}
}
