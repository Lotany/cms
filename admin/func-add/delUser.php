<?php
	include '../includes/config.php';
		$delete = $_GET['id'];
		$sql = "DELETE FROM tbl_users WHERE id =$delete";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)==true){
			header('Location: ../users/index.php?success');

		}else {
			echo "Error";
		}
?>