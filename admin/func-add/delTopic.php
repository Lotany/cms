<?php
	include '../includes/config.php';
		$delete = $_GET['id'];
		$sql = "DELETE FROM topics WHERE id =$delete";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)==true){
			header('Location: ../topics/index.php?success');

		}else {
			echo "Error";
		}
?>