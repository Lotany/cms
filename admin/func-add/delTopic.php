<?php
	require_once '../includes/config.php';

	if (isset($_GET['delete-post'])) {
		deletePost();
	}
	
	
	function deletePost()
	{
		global $conn;
		$sql = "DELETE FROM topic_tbl WHERE id=?";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['message'] = "Post successfully deleted";
			header("location:../topics/index.php");
			exit(0);
		}
	
	}
