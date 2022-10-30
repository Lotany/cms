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
   //edit user
    	if (isset($_POST['edit-update'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $id = $_GET['edid'];
            $sql= "update tbl_users set user_name = '$username', email ='$email', user_role_id= '$role' where id=$id";
            mysqli_query($conn,$sql);
            header('Location: editUser.php?success');
         }
         
         else if(isset($_GET['edid'])){
                $q = "select * from tbl_users where id ='".$_GET['edid']."'";
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

                    <h2 class="page-title">Edit User</h2>

                    <form method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $qq['user_name']; ?>"
                                class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $qq['email']; ?>" class="text-input">
                        </div>

                        <div>
                            <label>Role</label>
                            <input type="number" name="role" value="<?php echo $qq['user_role_id']; ?>" class="text-input">
                        </div>

                        <div>
                            <button type="submit" name="edit-update" class="btn btn-big">Update</button>
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