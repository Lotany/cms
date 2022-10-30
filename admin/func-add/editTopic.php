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
   //edit topic
    	if (isset($_POST['add-update'])){
        
            $topics = $_POST['topics'];
            $topdes = $_POST['topdes'];
            $id = $_GET['topid'];
            $sql= "update topic_tbl set topic_name = '$topics', topic_desc ='$topdes' where topic_id=$id";
            mysqli_query($conn,$sql);
            header('Location: ../topics/index.php');
         }
         
         else if(isset($_GET['topid'])){
                $q = "select * from topic_tbl where topic_id ='".$_GET['topid']."'";
                $query = mysqli_query($conn, $q);
                $qq= mysqli_fetch_array($query);

            }
   
   
   ?>
        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include '../includes/sidebar.php'; ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">

                </div>


                <div class="content">

                    <h2 class="page-title">Edit Topic</h2>

                    <form method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="topics" value="<?php echo $qq['topic_name']; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <input type="text" name="topdes" value="<?php echo $qq['topic_desc']; ?>" class="text-input">
                        </div>

                        <div>
                            <button name="add-update" type="submit" class="btn btn-big">Add Topic</button>
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