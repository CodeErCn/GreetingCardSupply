<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Admin extends CI_Controller {

  public function index()
  {
   // log in form
    $this->load->view('admin_login')
  }

  public function login()
  {
    //takes post.. 
    //call admin_model login_validation($post) return password from model
    //compare password
    //(true)redirect to dashboard (false)back to index
    $this->load->model('Admin_model');
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    if($this->Admin_model->login_validation($email, $password)) 
    {
      $this->session->set_userdata('email', $email);
      redirect('/dashboard/index');
    } 
    else 
    {
      $this->session->set_flashdata('message', "Invalid user name or password.");
      redirect('/');
    }
  }

  public function logout()
  {
    //destory session
    //return to admin index
    $this->session->set_userdata('email', '');
    $this->session->set_flashdata('message', "You are now logged off.");
    redirect('/');
  }
}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */