<?php 
	session_start();
	require_once('../includes/header.php');

?>
       <?php
            require_once '../includes/config.php';
            $sql = "select * from topics";
            $query = mysqli_query($conn,$sql);
       
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
                            <?php
                            while($qq=mysqli_fetch_array($query))
                            { ?>
                        <tr>
	   <td><?php echo $qq['id']; ?></td> 
	   <td><?php echo $qq['name']; ?></td>

	   <td><a href="../func-add/editTopic.php?topid=<?php echo $qq['id']; ?>" class="edit">edit</a></td>

	   <td><a href="../func-add/delTopic.php?id=<?php echo $qq['id']; ?>" class="delete">Delete</a></td>
    
      
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