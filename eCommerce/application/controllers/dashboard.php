<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Dashboard extends CI_Controller {

  public function index($start=null)
  {

   // Order manager, get_all_orders and sort by desc
    $this->load->model('Dashboard_model');
    $assoc['orders'] = $this->Dashboard_model->get_all_orders();
    $this->load->view('dashboard_order_manager', $assoc);

  }

  public function search_orders($query)
  {
    // call search_orders in model
  }

  public function show_order($id)
  {
    //show the order detail
    // call get_order_by_id from the
    $this->load->model('Dashboard_model');
    $order = $this->Dashboard_model->get_order_info($id);
    $this->load->view('dashboard_show_order', $order);
  }

  public function products($start=null)
  {
    //show the product manager, get all orders
    $this->load->model('Dashboard_model');
    $assoc['products'] = $this->Dashboard_model->get_all_products($id);
    $this->load->view('dashboard_product_manager', $assoc);
    
  }

    public function edit_product($id)
    {
      //show the add/edit product view (not sure how to do modal)
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

        public function delete_product($id)
        // load model, delete and return to product_manager
        {
          $this->load->model("Dashboard_model");
          $products = $this->Dashboard_model->delete_product($id);
          redirect('dashboard_product_manager');
        }

  public function categories($start=null)
  { 
    //show the category manager, get all categories
    $this->load->model('Dashboard_model');
    $assoc['categories'] = $this->Dashboard_model->get_all_categories($id);
    $this->load->view('dashboard_category_manager');
    
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

        public function delete_category($id)
        // load model, delete and return to product_manager
        {
          $this->load->model("Dashboard_model");
          $categories = $this->Dashboard_model->delete_category($id);
          redirect('dashboard_category_manager');
        }

        

}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */