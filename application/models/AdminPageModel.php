<?php

class AdminPageModel extends CI_Model
{
	
  public function InsertStudent($data){
		$sql = "INSERT INTO `students` (`name`, `class`, `section`, `rollno`, `dob`, `yoj`, `father_name`, `father_mobile`, `father_email`) VALUES (?,?,?,?,?,?,?,?,?);";
		$query = $this->db->query($sql, array($data["name"], $data["class"],$data["section"],$data["rollno"],$data["dob"],$data["yoj"],$data["father_name"],$data["father_mobile"],$data["father_email"]));
		 return true;
	}
  

	
    
	}
	



?>