<?php 
  class Store_model extends CI_model 
  {
      public function search_products($post)
      {
        $value = $post['search-result'];
        $query = "SELECT * FROM products WHERE products.description LIKE '%{$value}%' OR products.label LIKE '{$value}%' OR products.type LIKE '{$value}%' OR products.color LIKE '{$value}%' OR products.material like '{$value}%';";
        return $this->db->query($query)->result_array();
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

      public function get_product_by_id($id=null)
      {
          return $this->db->query("SELECT * FROM greeting_card_supply.products WHERE id = '$id';")->row_array();
      }

      public function get_similar($id=null)
      {
          return $this->db->query("SELECT products.id AS pid, products.unitqty, products.price FROM greeting_card_supply.products WHERE products.type='$id';")->result_array();
      }

      public function get_products_by_category($id=null)
      {
          return $this->db->query("SELECT products.id AS pid, products.description, products.unitqty, products.price, categories.title, categories.description AS cDescription, categories.id FROM greeting_card_supply.products LEFT JOIN categories ON products.category_id = categories.id WHERE categories.id = '$id';")->result_array();
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