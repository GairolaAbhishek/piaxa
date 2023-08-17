<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends CI_Controller {



		function __construct(){

			parent::__construct();

			if (!isset($_SESSION['logged_in'])) {

				header('Location: '.base_url().'Login');

			}



		}

	public function index()


	{
	 $this->load->model('LoginModel');  

    $result['data'] = $this->LoginModel->get();


        

		$this->load->view('dashboard',$result);

	}





}

?>