<?php
	include '../includes/config.php';
		$delid = $_GET['delid'];
		$sql = "DELETE FROM users WHERE id=$delid";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)==true){
			header('Location: ../users/index.php?success');

		}else {
			header('Location: ../users/index.php?error');
		}
?>