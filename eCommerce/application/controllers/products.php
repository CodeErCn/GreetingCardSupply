<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  function pageMain ($dataIn) {

      $return['cardEnvelope'] = array();
      $return['pkgingSolution'] = array();
      $return['accessories'] = array();
      $return['shippingRetail'] = array();

      for($i=0, $j=count($dataIn); $i<$j; $i++) {
        if($dataIn[$i]['Ltitle'] == "Cards & Envelopes"){
          $return['cardEnvelope'][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == "Packaging Solutions"){
          $return['pkgingSolution'][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == "Accessories"){
          $return['accessories'][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == "Shipping & Retail"){
          $return['shippingRetail'][] = $dataIn[$i]['title'];
        }
      }
        return $return;
  }

  function pageCategoryMain($dataIn) {

      for($i=0, $j=count($dataIn); $i<$j; $i++) {
        if($dataIn[$i]['Ltitle'] == 'Cards & Envelopes'){
          $return['lines'][$dataIn[$i]['Ltitle']][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == 'Packaging Solutions'){
          $return['lines'][$dataIn[$i]['Ltitle']][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == 'Accessories'){
          $return['lines'][$dataIn[$i]['Ltitle']][] = $dataIn[$i]['title'];
        }
        if($dataIn[$i]['Ltitle'] == 'Shipping & Retail'){
          $return['lines'][$dataIn[$i]['Ltitle']][] = $dataIn[$i]['title'];
        }
      }
      return $return;
  } 

class Products extends CI_Controller {
 
  public function index()
  {
    //get categories left join lines
    $result= $this->store_model->get_all_categories();   
    $return['main'] = pageMain($result);
    $return['outlet'] = $this->load->view('products_category_main', pageCategoryMain($result), TRUE);
    
    if($this->session->flashdata('categoryDetail') != null) {
      $return['outlet'] = $this->load->view('products_category_detail', $this->session->flashdata('categoryDetail'), TRUE);
    } else if ($this->session->flashdata('showItem') !=null) {
      $return['outlet'] = $this->load->view('products_show_item', $this->session->flashdata('showItem'), TRUE);
    } else if($this->session->flashdata('cart')!=null) {
      $return['outlet'] = $this->load->view('cart_index','',TRUE);
    }
    //get cart
    //build view
    $this->load->view('products_index', $return);
  }

  public function categorydetail($id, $start)
  {
    //get products by category
    $return['start'] = $start;
    $return['id'] = $id;
    $result = $this->store_model->get_products_by_category($id);
    $return['pc_count'] = count($result);

    for($i=($start-1)*5, $j=$start*5, $k=$return['pc_count']; $i<$j && $i<$k; $i++){
      $return['product_category'][] = $result[$i];
    }
    $this->session->set_flashdata('categoryDetail', $return);
    redirect('/');
  }

  public function show_item($id=null)
  {
    //get the product_by_id
    $return['products'] = $this->store_model->get_product_by_id($id);
    $return['similar'] = $this->store_model->get_similar($return['products']['type']);

    // Get qty by id.
    $return['qty'] = $this->cart->get_qty($id);
    
    // Build view into session and redirect.
    $this->session->set_flashdata('showItem', $return);
    redirect('/');
  }
}

/* End of file products.php */
/* Location: ./application/controllers/welcome.php */
   