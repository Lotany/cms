//add topic
<?php
function addTopic(){
	global $conn;

	if (isset($_POST['add-btn'])){

		
		$topic = $_POST['topics'];
		$topd = $_POST['topdes'];

		$sql= "insert into topic_tbl (topic_name, topic_desc) values($topic, $topd)";
		if($conn->query($sql)=== true){
			echo "Topic Inserted Successfully";
		}else {
			echo "Error".$conn->error;
		}

	}
	
	$conn->close();

	

}