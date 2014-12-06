<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Products extends CI_Controller {

  public function index()
  {
    //get categories
    //get total of products by category
    //get cart
    //build view
    $this->load->view('products_index');
  }

  public function search($post)
      {
        // call search_products method from store_model
        // query db with like %
        // called from store and dashboard
      }

  public function category($id, $start)
  {
    //get products by category
  }

  public function show_item($id)
  {
    //get the product_by_id
    //get the similar
  }
}

/* End of file products.php */
/* Location: ./application/controllers/welcome.php */
