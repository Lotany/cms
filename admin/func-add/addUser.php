<?php

	if (isset($_POST['add-user'])){

	include '../includes/config.php';

	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass =  $_POST['password'];
	$role =  $_POST['role'];
	
	$sql= "insert into users (user_name, email, password, role) values('$user', '$email', '$pass', '$role')";
	mysqli_query($conn,$sql);
	if(mysqli_query($conn,$sql)){
	header("Location: ../users/index.php?add=success");
		}else {
			header("Location: ../users/index.php?add=failed");
		}
	}
