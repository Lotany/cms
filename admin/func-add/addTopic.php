<?

require_once 'config.php';

if (isset($_POST['add-btn'])){	
$topic = $_POST['topics'];
$topd = $_POST['topdes'];
}


function addTopic($topic,$topd){
	global $conn;

	$sql= "insert into topic_tbl (topic_name, topic_desc) values($topic, $topd)";
	
	if($conn->query($sql)=== true){
		echo "<P>Topic Inserted Successfully</P>";
	}else {
		echo "Error".$conn->error;
	}
	$conn->close();

}

addTopic($topic,$topd);