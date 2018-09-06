<?php

class AdminLoginModel extends CI_Model
{
	
  public function check_user($username_ad){
		$sql = "SELECT * FROM `admins` WHERE `ad_username` = ? ";
		$query = $this->db->query($sql, array($username_ad));
		
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
  
	public function get_user_details($username_ad){
		$sql = "SELECT * FROM `admins` WHERE `ad_username`=?";
		$query = $this->db->query($sql, array($username_ad));
      return $query->row_array();
			
		}
	
    
	}
	



?>