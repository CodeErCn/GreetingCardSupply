<?php 
  class Dashboard_model extends CI_model
  {
    public function get_all_orders()
    {
     // Order manager
     // get_all_orders and sort by desc
      return $this->db->query("SELECT * FROM orders 
      LEFT JOIN customers ON orders.customer_id=customers.id
      LEFT JOIN addresses ON orders.billing_address_id=addresses.id 
      LEFT JOIN `status` ON orders.status_id=`status`.id 
      ORDER BY orders.created_at DESC; ", array())->result_array();
    }

    public function search_orders($query)
    {
      // sql query to db using $query and like
      // $query="SELECT * FROM orders WHERE $query LIKE '%$query%'";

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
      WHERE orders.id = ?; ", array($id))->row_array();
     
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
      $query = "DELETE FROM products WHERE id = $id";
      $this->db->query($query);
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
      $result=$this->db->query("SELECT * FROM products where category_id =$id")->result_array();
      if(count($result)==0)
      {
        $query = "DELETE FROM categories WHERE id = $id";
        $this->db->query($query);
      }
    } 

  }
?>