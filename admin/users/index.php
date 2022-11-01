<?php
    require_once('../includes/function.php');
	require_once('../includes/header.php');

?>

<!-- getting all users from database -->
<?php
            require_once '../includes/config.php';
            $sql = "select * from users";
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

                    <h2 class="page-title">Manage Users</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php while($qq= mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $qq['id']; ?></td>
                                <td><?php echo $qq['user_name']; ?></td>
                                <td><?php echo $qq['role']; ?></td>
                                <td><a href="../func-add/editUser?edid=<?php echo $qq['id']; ?>" class="edit">edit</a></td>
                                <td><a href="../func-add/delUser.php?delid=<?php echo $qq['id']; ?>" class="delete">delete</a></td>
                                <td><a href="#" class="delete">Ban</a></td>
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