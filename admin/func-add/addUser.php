<?php

	if (isset($_POST['add-btn'])){

	include '../includes/config.php';

	$topics = $_POST['topics'];
	$topdes = $_POST['topdes'];
	
	$sql= "insert into topic_tbl (topic_name, topic_desc) values('$topics', '$topdes')";
	mysqli_query($conn,$sql);
	header("Location: ../topics/index.php?add=success");
	
	}
