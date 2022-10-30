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
    	if (isset($_POST['edit-user'])){
        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $id = $_GET['topid'];
            $sql= "update users_tbl set user_name = '$username', email ='$email',password = '$password',user_role_id= '$role' where id=$id";
            mysqli_query($conn,$sql);
            header('Location: ../topics/index.php');
         }
         
         else if(isset($_GET['edid'])){
                $q = "select * from users_tbl where id ='".$_GET['edid']."'";
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

                    <h2 class="page-title">Add User</h2>

                    <form action="editUser.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username"
                                class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="text-input">
                        </div>

                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-big">Add User</button>
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