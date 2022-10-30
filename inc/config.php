<?php 
	define("HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","able_db");
	
	
	$conn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$conn)
	{
		die("Failed Connection!!" . mysqli_connect_error());
	}
	
	define('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL','http://localhost/cms/');
	
	function getUserAccessRoleByID($id)
	{
		global $conn;
		
		$query = "select user_role from tbl_user_role where  id = ".$id;
	
		$rs = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($rs);
		
		return $row['user_role'];
	}
?>