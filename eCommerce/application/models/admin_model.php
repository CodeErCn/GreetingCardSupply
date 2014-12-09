<?php 
  class Admin_model extends CI_model
  {
    public function login_validation($post)
    {
      //get admin password by email
   		$record = $this->db->query("SELECT * FROM admins WHERE email = ?", $email)->row_array();
		$password = crypt($password, $record['password']);
		if($record) 
		{
			if($record['password'] == $password) 
			{
				return true;	
			}
		}
		return false;
    }



  }
?>