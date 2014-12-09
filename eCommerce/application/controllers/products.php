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

  public function categorymain() {
    $this->load->view('products_category_main');
  }

  public function categorydetail($id=null, $start=null)
  {
    //get products by category
    $this->load->view('products_category_detail');
  }

  public function show_item($id=null)
  {
    $this->load->view('products_show_item');

    //get the product_by_id
    //get the similar
  }
}

/* End of file products.php */
/* Location: ./application/controllers/welcome.php */
