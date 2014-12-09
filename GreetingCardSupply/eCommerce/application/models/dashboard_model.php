<?php 
  class Dashboard_model extends CI_model
  {
    public function get_all_orders($start)
    {
     // Order manager
     // get_all_orders and sort by desc
    }

    public function search_orders($query)
    {
      // sql query to db using $query and like
    }

    public function get_order_by_id($start)
    {
     // Order manager
     // query sql and get_order_by_id 
    }

    public function add_product()
    {
      // query sql and insert
    }

    public function update_product()
    {
      // query sql and edit
    }    

    public function remove_product($id)
    {
      // query sql and remove
    } 

    public function add_category()
    {
      // query sql and insert
    }

    public function update_category()
    {
      // query sql and edit
    }    

    public function remove_category($id)
    {
      // query sql and remove
      // do not remove if there are no products
    } 

  }
?>