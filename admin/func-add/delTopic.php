<?php
	include '../includes/config.php';
		$delete = $_GET['id'];
		$sql = "DELETE FROM topic_tbl WHERE topic_id =$delete";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)==true){
			echo "success";

		}else {
			echo "Error";
		}
?>