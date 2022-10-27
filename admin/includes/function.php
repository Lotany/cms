<?php
     
     require_once 'config.php';

     //get user roles
function getUserAccessRoleByID($id)
	{
		global $conn;
		
		$query = "select user_role from tbl_user_role where  id = ".$id;
	
		$rs = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($rs);
		
		return $row['user_role'];
	}


	//get topic
function getTopic(){
	global $conn;

	$query = "select * from topic_tbl";
	$result = $conn->query($query);
	if ($result -> num_rows>0){
		while($row = $result->fetch_assoc()){
       echo $row["topic_name"];
		}
	}else {
		echo "0 Topics";
	}

	$conn->close();

}


?>