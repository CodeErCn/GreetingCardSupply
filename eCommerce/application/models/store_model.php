<?php 
  class Store_model extends CI_model 
  {
      public function search_products($post)
      {
        // query db with like %
        // called from store and dashboard
      }

      public function get_all_categories()
      {

      }

      public function get_category_by_id()
      {

      }

      public function get_all_products($sortBy=null)
      {

      }

      public function get_product_by_id()
      {

      }

      public function get_similar()
      {

      }

      public function get_total_products_by_category()
      {

      }

      public function post_order()
      {
        // four queries 
        // for save customer info to customers table, 
        // address to addresses table, 
        // order to orders table
        // item to items
      }

      public function get_cart()
      {
        //session post cart
      }

      public function update_cart($id, $qty)
      {
        //if post
        //update session and 0 qty for trash 
      }

  }
?>