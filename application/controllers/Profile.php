<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Profile extends CI_Controller {



    function __construct(){

      parent::__construct();

      if (!isset($_SESSION['logged_in'])) {

        header('Location: '.base_url().'Login');

      }

      $this->load->model('Sign_inModel');



    }

  public function index()



  {  

  $this->load->model('LoginModel');  

    $result['data'] = $this->LoginModel->get();
    

    $this->load->view('profile',$result);

  }

  public function edit(){


        $this->load->model('ProfileModel');


    $result1 = $this->ProfileModel->edit();

    echo json_encode($result1);

  }

public function delete(){

        $this->load->model('ProfileModel');

  $result2 = $this->ProfileModel->delete();

  if ($result2) {

    $_SESSION['true'] = "200";

  }

  else{

    $_SESSION['true'] = "199";

  }

redirect(base_url().'My_Profile');
}
  public function add()
  {
    $result = $this->User_listModel->add();
     if ($result)
     {
      $_SESSION['added'] = 'New contact has been added';
     }
     else{
      $_SESSION['already'] = 'This email is already in added';
     }
     redirect(base_url().'My_Profile');
  }


}

?>