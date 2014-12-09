<?php 
  class Dashboard_model extends CI_model
  {
    public function get_all_orders($start)
    {
     // Order manager
     // get_all_orders and sort by desc
      return $this->db->query("SELECT * FROM orders ORDER BY created DESC")->result_array();
    
    }

    public function search_orders($query)
    {
      // sql query to db using $query and like
      $query="SELECT * FROM orders WHERE $query LIKE %$query%"

    }

    public function get_order_by_id($start)
    {
     // Order manager
     // query sql and get_order_by_id
     return $this->db->query("SELECT * FROM orders WHERE id = ?", array($id))->row_array();
     
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

    public function remove_category($id)
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