<?php 
	session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:../../login.php?lmsg=true');
		exit;
	}		
	
    require_once('../includes/function.php');
	require_once('../includes/header.php');

    function getPost($query){
        global $conn;
        $q = "select * from topic_tbl";
        $query = mysqli_query($conn,$q);

    }
     

?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include '../includes/sidebar.php'; ?>

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Topic</a>
                    <a href="index.php" class="btn btn-big">Manage Topics</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Topics</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Name</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                        <?php { ?>
                            <tr>
	   <td><?php getPost('topic_id'); ?></td> 
	   <td></td>
	   <td><a href="#" class="edit">edit</a></td>
	   <td><form action ="../func-add/delTopic.php" method="post"><button name="delete-post">Delete</button></form></td>
   </tr>

                       <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>