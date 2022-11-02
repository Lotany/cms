<?php 

if (isset($_POST['add-post'])) {
    include '../includes/config.php';

    $author = $_POST['author'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $image = $_FILES['image'];
    $body = $_POST['body'];
    $status = $_POST['status'];

        // image file directory
    $target = "../../images/" . $image;
    
    		// Ensure that no post is saved twice. 
		$post_check_query = "SELECT * FROM posts WHERE slug='$slug' LIMIT 1";
		$result = mysqli_query($conn, $post_check_query);

        if (mysqli_num_rows($result) > 0) { // if post exists
			array_push($errors, "A post already exists with that title.");
		}


      		// create post if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO posts (user_id, title, slug, image, body, published, created_at, updated_at) VALUES(1, '$title', '$slug', '$image', '$body', $status, now(), now())";
			if(mysqli_query($conn, $query)){ // if post created successfully
				$inserted_post_id = mysqli_insert_id($conn);
				// create relationship between post and topic
				$sql = "INSERT INTO post_topic (post_id, topic_id) VALUES($inserted_post_id, $topic_id)";
				mysqli_query($conn, $sql);

				$_SESSION['message'] = "Post created successfully";
				header('location: admin/posts/index.php');
				exit(0);
			}
		}

}
