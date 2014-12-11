<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Dashboard extends CI_Controller {

  public function index($start=null)
  {

   // Order manager, get_all_orders and sort by desc
    $this->load->model('Dashboard_model');
    $result = $this->Dashboard_model->get_all_orders();
    if($start==null) {$start=1;}
    $assoc['count'] = count($result);
    for($i=($start-1)*25, $j=$start*25, $k=$assoc['count']; $i<$j && $i<$k; $i++)
    {
      $assoc['orders'][] = $result[$i];
    }
      $this->load->view('dashboard_order_manager', $assoc);

  }

  public function search_orders($query)
  {
    // call search_orders in model
  }

   public function update_order_status($id)
  {
    
    $this->load->model('Dashboard_model');
    $status = $this->input->get('order_status');
    
    $order = $this->Dashboard_model->update_order_status($id, $status);
    redirect("dashboard/index");
  }

  public function show_order($id)
  {
    //show the order detail
    // call get_order_by_id from the
    $this->load->model('Dashboard_model');
    $order = $this->Dashboard_model->get_order_info($id);
    $this->load->view('dashboard_show_order', array('orders'=>$order));
  }
  public function products($start=null)
  {
    //show the product manager, get all orders
    $this->load->model('Dashboard_model');
    $result = $this->Dashboard_model->get_all_products();
    if($start==null) {$start=1;}        
    $assoc['count'] = count($result);
    for($i=($start-1)*50, $j=$start*50, $k=$assoc['count']; $i<$j && $i<$k; $i++){
      $assoc['products'][] = $result[$i];
    }

    $this->load->view('dashboard_product_manager', $assoc);
    
  }

    public function add_edit_product($id=null)
    {
      //show the add/edit product view
      $this->load->model("Dashboard_model");
      $this->load->view('add_edit_product');
    }

        public function add_product()
        {               
          // add product function
          $this->load->model("Dashboard_model");
          
          redirect('dashboard_product_manager'); 
        }
        
         public function update_product()
        {
          // edit product function
          $this->load->model("Dashboard_model");
          
          redirect('dashboard_product_manager'); 
        }

        public function delete_product($id=null)
        // load model, delete and return to product_manager
        {
          $this->load->model("Dashboard_model");
          $query = $this->Dashboard_model->delete_product($id);
          redirect('dashboard/products');
        }

  public function categories($start=null)
  { 
    //show the category manager, get all categories
    $this->load->model('Dashboard_model');
    $assoc['categories'] = $this->Dashboard_model->get_all_categories();
    $this->load->view('dashboard_category_manager', $assoc);
    
  }

    public function edit_category($id)
    {
      //show the add/edit category view (not sure how to do modal)
    }

        public function add_category()
        {
          // add category function
          $this->load->model("Dashboard_model");
          
          redirect('dashboard_category_manager');
        }
        
        public function update_category()
        {
          // edit category function
          $this->load->model("Dashboard_model");

          redirect('dashboard_category_manager');
        }

        public function delete_category($id=null)
        // load model, delete and return to product_manager
        {
          $this->load->model("Dashboard_model");
          $categories = $this->Dashboard_model->delete_category($id);
          redirect('dashboard/categories');
        }

        

}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */