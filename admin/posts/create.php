<?php 
	session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:../../login.php?lmsg=true');
		exit;
	}		
	
    require_once('../includes/function.php');
	require_once('../includes/header.php'); 
?>

<?php
            require_once '../includes/config.php';
            $sql = "select * from topic_tbl";
            $query = mysqli_query($conn,$sql);
       
       ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include '../includes/sidebar.php'; ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>

                    <form action="create.html" method="post">
                    <div>
                            <label>User_Id</label>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div>
                        

                                                
                        <div>
                            <label>Topic *</label>
                            <select name="topic" class="text-input">
                                <option value="Poetry">Poetry</option>
                            </select>
                        </div>


                            <label>Title *</label>
                            <input type="text" name="title" class="text-input">
                        </div>


                        <div>
                            <label>Image *</label>
                            <input type="file" name="image" class="text-input">
                        </div>

                        <div>
                            <label>Body *</label>
                            <textarea name="body" id="body"></textarea>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>