<?php
//return published posts
function getpublishedPosts(){
    global $conn;
    $sql = "SELECT * FROM posts WHERE published=true";
    $result = mysqli_query($conn,$sql);
    $posts=mysqli_fetch_all($result,MYSQLI_ASSOC);

    $final_posts= array();
    foreach($posts as $post){
        $post['topic'] = getPostTopic($post['id']);
        array_push($final_posts,$post);
    }
    return $final_posts;
}

function getPostTopic($post_id){
    global $conn;
    $sql = "select * from topics where id =(select topic_id from post_topic where post_id=$post_id) limit 1";
    $result = mysqli_query($conn,$sql);
    $topic = mysqli_fetch_assoc($result);
    return $topic;
}

//get a single topic

function getPost($slug){
    global $conn;
    $post_slug = $_GET['post-slug'];
    $sql ="select * from posts where slug = '$post_slug' and published=true";
    $result = mysqli_query($conn,$sql);

    $post =mysqli_fetch_assoc($result);
    if ($post){
        $post['topic'] = getPostTopic($post['id']);
    }
    return $post;
}

//get all topics

function getallTopics(){
    global $conn;
    $sql ="select *from topics";
    $result = mysqli_query($conn,$sql);
    $topics = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $topics;
}


//
function getPublishedPostsByTopic($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}


//return topic name by topic id
function getTopicNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic['name'];
}
