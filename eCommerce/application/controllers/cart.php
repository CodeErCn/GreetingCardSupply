<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Cart extends CI_Controller {

  public function index()
  {
    $assoc['cart'] = $this->session->userdata('cart');
    //$this->session->set_flashdata('cart', 'yes');
    $this->load->view('cart_index', $assoc);
    //redirect('/');
    // if the post of qty and id != null
    // update_cart(post(id), post(qty))
    // get_cart from model
    // build summary
    // load view and pass the get_cart info into it
  }

  public function update($id, $qty)
  {
    //update session and 0 qty for trash
  }

  public function validate_save()
  { 
    //validate the input
    //save customer name, email, phone to customers table return id
    //save order to order table using customer id and return order id
    //save item to items table with order id
    //save address to addresses table using 
    //post to stripe API(true) redirect to index(false)
    //post order model
  }

}

/* End of file cart.php */
/* Location: ./application/controllers/welcome.php */