<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Cart extends CI_Controller {

  public function index()
  {
    $assoc['items'] = $this->store_model->get_all_products();
    $this->load->view('cart_index', $assoc);


    //redirect('/');
    // if the post of qty and id != null
    // update_cart(post(id), post(qty))
    // get_cart from model
    // build summary
    // load view and pass the get_cart info into it
  }

  public function update() {

    // Buy form, etc, load stuff.
    $items = $this->session->userdata('cart');
    $id = $this->input->post('id');
    $qty = $this->input->post('qty');

    // Remove if 0, else set.
    if(isset($items[$id])) {
      if($qty > 0) {
        $items[$id] = $qty;
      } else {
        unset($items[$id]);
      }
    } else {
      $items[$id] = $qty;
    }

    // Save to session.
    $this->session->set_userdata('cart', $items);

    // Load cart page.
    redirect('/cart');
  }


  public get_qty($id) {
    // Return qty for product view (which option to select).
    $items = $this->session->userdata('cart');
    var_dump($items); die('asd');
    if(isset($items[$id])) {
      return $items['qty'];
    }
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