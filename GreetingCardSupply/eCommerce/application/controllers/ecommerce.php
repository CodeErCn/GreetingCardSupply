<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Ecommerce extends CI_Controller {

  public function index()
  {
    $this->load->view('ecommerce_index');
  }
}

/* End of file Ecommerce.php */
/* Location: ./application/controllers/welcome.php */