<?php
    require_once '../includes/config.php';
	//delete topic
function delTopic(){
    global $conn;


	$sql = "delete from topic_tbl where topic_id = ?";
	if($conn->query($sql)===TRUE){
		echo "Topic deleted successfully";
	} else {
		echo "Error deleting topic!!";
	}
}

delTopic();