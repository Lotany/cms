<?php

	if (isset($_POST['add-user'])){

	include '../includes/config.php';

	$user = mysqli_real_escape_string($conn,$_POST['username']);
	$email =  mysqli_real_escape_string($conn,$_POST['email']);
	$pass =  mysqli_real_escape_string($conn,$_POST['password']);
	$role =  mysqli_real_escape_string($conn,$_POST['role']);
	
	$sql= "insert into tbl_users (user_name, email, password, user_role_id) values('$user', '$email', '$pass', '$role')";
	mysqli_query($conn,$sql);
	header("Location: ../users/index.php?add=success");
	}
