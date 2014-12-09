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
          return $this->db->query("SELECT categories.id, categories.title, categories.description, `lines`.id AS Lid, `lines`.title AS Ltitle FROM categories LEFT JOIN `lines` ON categories.line_id=`lines`.id;")->result_array();
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