<?php
	require_once '../includes/config.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM topic_tbl WHERE id=$id";
		mysqli_query($conn,$sql);
