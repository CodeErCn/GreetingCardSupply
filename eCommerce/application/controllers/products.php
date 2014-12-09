<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Products extends CI_Controller {

  public function index()
  {
    //get categories left join lines
    $result['categories_lines'] = $this->store_model->get_all_categories();
    
    $return['cardEnvelope'] = array();
    $return['pkgingSolution'] = array();
    $return['accessories'] = array();
    $return['shippingRetail'] = array();

    for($i=0, $j=count($result['categories_lines']); $i<$j; $i++) {
      if($result['categories_lines'][$i]['Ltitle'] == "Cards & Envelopes"){
        $return['cardEnvelope'][] = $result['categories_lines'][$i]['title'];
      }
      if($result['categories_lines'][$i]['Ltitle'] == "Packaging Solutions"){
        $return['pkgingSolution'][] = $result['categories_lines'][$i]['title'];
      }
      if($result['categories_lines'][$i]['Ltitle'] == "Accessories"){
        $return['accessories'][] = $result['categories_lines'][$i]['title'];
      }
      if($result['categories_lines'][$i]['Ltitle'] == "Shipping & Retail"){
        $return['shippingRetail'][] = $result['categories_lines'][$i]['title'];
      }
    }
    //get cart
    //build view
    $this->load->view('products_index', $return);
  }

  public function search($post)
  {
    // call search_products method from store_model
    // query db with like %
    // called from store and dashboard
  }

  public function categorymain() {
    $result = $this->store_model->get_all_categories();
    
    for($i=0, $j=count($result); $i<$j; $i++) {
      if($result[$i]['Ltitle'] == 'Cards & Envelopes'){
        $return['lines'][$result[$i]['Ltitle']][] = $result[$i]['title'];
      }
      if($result[$i]['Ltitle'] == 'Packaging Solutions'){
        $return['lines'][$result[$i]['Ltitle']][] = $result[$i]['title'];
      }
      if($result[$i]['Ltitle'] == 'Accessories'){
        $return['lines'][$result[$i]['Ltitle']][] = $result[$i]['title'];
      }
      if($result[$i]['Ltitle'] == 'Shipping & Retail'){
        $return['lines'][$result[$i]['Ltitle']][] = $result[$i]['title'];
      }

    }
    $this->load->view('products_category_main', $return);
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
