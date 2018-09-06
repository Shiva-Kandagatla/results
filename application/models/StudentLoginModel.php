<?php

class StudentLoginModel extends CI_Model
{
	
  public function check_user($username){
		$sql = "SELECT * FROM `students` WHERE `username` = ? ";
		$query = $this->db->query($sql, array($username));
		
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
  
	public function get_user_details($username){
		$sql = "SELECT * FROM `students` WHERE `username`=?";
		$query = $this->db->query($sql, array($username));
      return $query->row_array();
			
		}
	
    
	}
	



?>