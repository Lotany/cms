<?php 

    require_once('../includes/function.php');
	require_once('../includes/header.php');

?>

  <!-- getting all user roles from database -->
<?php
            require_once '../includes/config.php';
            $sql = "select * from tbl_user_role";
            $query = mysqli_query($conn,$sql);
       ?>


        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include '../includes/sidebar.php'; ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <form action="../func-add/addUser.php" method="post">
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
                            <?php while ($res= mysqli_fetch_array($query,MYSQLI_ASSOC)):;?>
                                <option value="<?php echo $res["user_role"]; ?>"> <?php echo $res["id"]; ?></option>
                                <?php endwhile; ?>
                            </select>
                           

                        <div>
                            <button type="submit" name="add-user" class="btn btn-big">Add User</button>
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