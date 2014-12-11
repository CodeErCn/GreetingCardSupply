<?php 
  class Dashboard_model extends CI_model
  {
    public function get_all_orders()
    {
     // Order manager
     // get_all_orders and sort by desc
      return $this->db->query("SELECT *, orders.id as orderid FROM orders 
      LEFT JOIN customers ON orders.customer_id=customers.id
      LEFT JOIN addresses ON orders.billing_address_id=addresses.id 
      LEFT JOIN `status` ON orders.status_id=`status`.id 
      ORDER BY orders.created_at DESC; ", array())->result_array();
    }

    public function search_orders($post)
    {
      // sql query to db using $query and like
      // $query="SELECT * FROM orders WHERE $query LIKE '%$query%'";
        $value = $post['search-result'];
        $query = "SELECT *, orders.id as orderid FROM orders 
        LEFT JOIN customers ON orders.customer_id=customers.id
        LEFT JOIN addresses ON orders.billing_address_id=addresses.id 
        LEFT JOIN `status` ON orders.status_id=`status`.id 
        WHERE customers.first_name LIKE '%{$value}%' 
        OR customers.last_name LIKE '%{$value}%' 
        OR orders.created_at  LIKE '%{$value}%' 
        OR addresses.street_address LIKE '%{$value}%' 
        OR addresses.street_address2 LIKE '%{$value}%'
        OR addresses.city LIKE '%{$value}%'
        OR addresses.state LIKE '%{$value}%'
        OR addresses.zip LIKE '%{$value}%';";
        return $this->db->query($query, $value)->result_array();

        // query db with like %
        // called from store and dashboard
    }

    public function get_order_info($id)
    {
     // Order manager
     // query sql and get_order_by_id
     return $this->db->query("SELECT *, billaddress.street_address as billaddress1, billaddress.street_address2 as billaddress2, billaddress.city as billcity, billaddress.state as billstate, billaddress.zip as billzip, shipaddress.street_address as shipaddress1, shipaddress.street_address2 as shipaddress2, shipaddress.city as shipcity, shipaddress.state as shipstate, shipaddress.zip as shipzip 
      FROM orders 
      LEFT JOIN customers ON orders.customer_id=customers.id
      LEFT JOIN addresses AS billaddress ON orders.billing_address_id=billaddress.id
      LEFT JOIN addresses AS shipaddress ON orders.shipping_address_id=shipaddress.id 
      LEFT JOIN `status` ON orders.status_id=`status`.id 
      LEFT JOIN items ON orders.id=items.order_id 
      LEFT JOIN products ON items.product_id=products.id 
      WHERE orders.id = ?; ", array($id))->result_array();
    }
    
    public function update_order_status($id, $status)
    {
      // query sql and edit
      $query = "UPDATE orders SET status_id=? WHERE orders.id='$id'";
      $values = array($status);
      return $this->db->query($query, $values);
    } 
    public function get_all_products()
    {
     // Product manager, get_all_products
      return $this->db->query("SELECT * FROM products; ", array())->result_array();
    }

    public function add_product($product)
    {
      // query sql and insert
      $query = "INSERT INTO products (id, description, label, type, inchwidth, inchheight, inchdepth, metricwidth, metricheight, metricdepth, density, color, material, pieceweight, unitqty, price, created_at, updated_at, $category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $values = array($product['id'], $product['description'], $product['label'], $product['type'], $product['inchwidth'], $product['inchheight'], $product['inchdepth'], $product['metricwidth'], $product['metricheight'], $product['metricdepth'], $product['density'], $product['color'], $product['material'], $product['pieceweight'], $product['unitqty'], $product['price'], date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'), $product['category_id']);
      return $this->db->query($query, $values);
    }

    public function update_product($product)
    {
      // query sql and edit
      $id=$product['id'];
      $query = "UPDATE products SET description=?, label=?, type=?, inchwidth=?, inchheight=?, inchdepth=?, metricwidth=?, metricheight=?, metricdepth=?, density=?, color=?, material=?, pieceweight=?, unityqty=?, price=?, created_at=?, updated_at=?, category_id=?) WHERE id='$id'";
      $values = array($product['description'], $product['label'], $product['type'], $product['inchwidth'], $product['inchheight'], $product['inchdepth'], $product['metricwidth'], $product['metricheight'], $product['metricdepth'], $product['density'], $product['color'], $product['material'], $product['pieceweight'], $product['unitqty'], $product['price'],date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'), $category['line_id']);
      return $this->db->query($query, $values);
    }    

    public function delete_product($id)
    {
      // query sql and remove
      $query = "UPDATE products SET active=0 WHERE products.id='$id'";
      
      $delete = $this->db->query($query);
      
    } 
    
    public function get_all_categories()
    {
     // Product manager, get_all_products
     
      return $this->db->query("SELECT categories.title, categories.description, categories.id AS cid, count(products.category_id) 
        FROM products RIGHT JOIN categories ON products.category_id=categories.id GROUP BY (category_id); ", array())->result_array();
      
    }

    public function add_category($category)
    {
      // query sql and insert
      $query = "INSERT INTO categories (title, description, created_at, updated_at, line_id) VALUES (?, ?, ?, ?, ?)";
      $values = array($category['title'], $category['description'], date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'), $category['line_id']);
      return $this->db->query($query, $values);
    }

    public function update_category($category)
    {
      // query sql and edit
      $id=$category['id'];
      $query = "UPDATE categories SET title=?, description=?, created_at=?, updated_at=?, line_id=?) WHERE id='$id'";
      $values = array($category['title'], $category['description'], date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'), $category['line_id']);
      return $this->db->query($query, $values);
    }    

    public function delete_category($id)
    {
      // query sql and remove
      // do not remove if there are products
      $result=$this->db->query("SELECT * FROM products where category_id='$id'")->result_array();
      if(count($result)==0)
      {
        $query = "DELETE FROM categories WHERE id='$id'";
        $this->db->query($query);
      }
      else
      {
        echo 'there are products in this category, it cannot be deleted';
        die('');
      }
    } 

  }
?>