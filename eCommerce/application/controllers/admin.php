<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Admin extends CI_Controller {

  public function index()
  {
   // log in form
  }

  public function login()
  {
    //takes post.. 
    //call admin_model login_validation($post) return password from model
    //compare password
    //(true)redirect to dashboard (false)back to index
  }

  public function logout()
  {
    //destory session
    //return to admin index
  }
}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */