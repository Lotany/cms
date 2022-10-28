<?php
	//delete topic
function delTopic($id){
	global $conn;
	$sql = "delete from topic_tbl where topic_id = $id";
	if($conn->query($sql)===TRUE){
		echo "Topic deleted successfully";
	} else {
		echo "Error deleting topic!!";
	}
}