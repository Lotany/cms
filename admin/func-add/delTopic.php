<?php
if (isset($_GET['delete-post'])) {
	$post_id = $_GET['delete-post'];
	deletePost($post_id);
}


function deletePost($post_id)
{
	global $conn;
	$sql = "DELETE FROM topic_tbl WHERE id=$post_id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "Post successfully deleted";
		header("location: posts.php");
		exit(0);
	}

}
