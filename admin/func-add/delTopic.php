<?php
	include '../includes/config.php';
		$delete = $_GET['id'];
		$sql = "DELETE  FROM topic_tbl WHERE id=$delete";
		mysqli_query($conn,$sql);
?>