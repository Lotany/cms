<?php
if (isset($_POST['add-btn'])){	
$topic = $_POST['topics'];
$topd = $_POST['topdes'];
addTopic($topic,$topd);

}


function addTopic($topic,$topd){
	global $conn;

	$sql= "insert into topic_tbl (topic_name, topic_desc) values($topic, $topd)";
	
	if($conn->query($conn, $sql)=== true){
		echo "Topic Inserted Successfully";
	}else {
		echo "Error".$conn->error;
	}
	$conn->close();

}