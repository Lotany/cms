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

	$sql = "select * from topic_tbl";
	$result = $conn->query($sql);
	if ($result -> num_rows>0){
		while($row = $result->fetch_assoc()){
       $id = $row['topic_id'];
	   $name =$row['topic_name'];

echo '<tr>
	   <td>'.$id.'</td> 
	   <td>'.$name.'</td>
	   <td><a href="#" class="edit">edit</a></td>
	   <td><a href="../func-add/delTopic.php" class="delete">delete</a></td>
   </tr>';

		}
	}else {
		echo "No topic to fetch!!";
	}
	$conn->close();
}