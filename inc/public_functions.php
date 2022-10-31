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


function getallTopics(){
    global $conn;
    $sql ="select *from topics";
    $result = mysqli_query($conn,$sql);
    $topics = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $topics;
}