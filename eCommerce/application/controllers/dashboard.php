<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// STILL NEED DATABASE SETUP //

class Dashboard extends CI_Controller {

  public function index($start=null)
  {
    $this->load->view('dashboard_order_manager');
   // Order manager
   // get_all_orders and sort by desc
  }

  public function search_orders($query)
  {
    // call search_orders in model
  }

  public function show_order($id)
  {
    //show the order detail
    // call get_order_by_id from the model
  }

  public function products($start=null)
  {
    $this->load->view('dashboard_product_manager');
    //show the product manager
  }

    public function edit_product($id)
    {
      //show the edit product view
    }

        public function add_product()
        {
        }
        
        public function delete_product()
        {
        }

        public function update_product()
        {
        }

  public function categories($start=null)
  {
    $this->load->view('dashboard_category_manager');
    //show the category manager
  }

    public function edit_category($id)
    {
      //show the edit category view
    }

        public function add_category()
        {
        }
        
        public function delete_category()
        {
        }

        public function update_category()
        {
        }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */