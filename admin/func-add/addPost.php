<?php 

if (isset($_POST['add-post'])) {
    $author = $_POST['author'];
    $title = $_POST['title'];

    $image = $_FILES['image']['name'];
    
    $body = $_POST['body'];
    $status = $_POST['status'];

        // image file directory
    $target = "../../images/" . $image;


    $sql = "insert into posts (user_id, title, image, body, published) values ('$author', '$title', '$image','$body', '$status')";
    mysqli_query($conn,$sql);
    if(move_uploaded_file($image,$target)){
        header("Location: ../posts/index.php?add=success");

    }else {
        header("Location: ../posts/index.php?add=failed");
    }

}