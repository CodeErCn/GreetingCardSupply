<?php 
  class Admin_model extends CI_model
  {
    public function login_validation($email=null, $password=null)
    {
      //get admin password by email
   		$record = $this->db->query("SELECT * FROM admins WHERE email = ?", $email)->row_array();
		
		if($record) 
		{
			$password = crypt($password, $record['password']);
			
			if($record['password'] == $password) 
			{
				return true;	
			}
		}
		return false;
    }



  }
?>