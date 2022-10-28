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
	   <td><a href="' .delTopic($id).'" class="edit">edit</a></td>
	   <td><a href="dele.html" class="delete">delete</a></td>
   </tr>';

		}
	}else {
		echo "No topic to fetch!!";
	}
	$conn->close();
}


	//delete topic
function delTopic($id){
	global $conn;
	$sql = "delete from topic_tbl where topic_id = $id";
	if($conn->query($sql)===TRUE){
		echo "Topic deleted successfully";
	} else {
		echo "Error deleting topic!!";
	}
}

	//add topic

function addTopic(){
	global $conn;

	if (isset($_POST['add-btn'])){

		
		$topic = $_POST['topics'];
		$topd = $_POST['topdes'];

		$sql= "insert into topic_tbl (topic_name, topic_desc) values($topic, $topd)";
		if($conn->query($sql)=== true){
			echo "Topic Inserted Successfully";
		}else {
			echo "Error".$conn->error;
		}

	}
	
	$conn->close();

	

}


?>