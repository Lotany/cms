<?php 
    require_once('../includes/function.php');
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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>

                    <form action="../func-add/addPost.php" method="post">
                    <div>
                            <label>Author *</label>
                            <input type="text" value="" name="author" class="text-input">
                        </div>

                                                
                        <div>
                            <label>Topic *</label>
                            <select name="topic" class="text-input">
                                <?php while($q=mysqli_fetch_array($query,MYSQLI_ASSOC)):; ?>
                                <option value="Poetry"><?php echo $q['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div>
                            <label>Title *</label>
                            <input type="text" name="title" class="text-input">
                        </div>

                        <div>
                            <label>Slug *</label>
                            <input type="text" name="slug" class="text-input">
                        </div>

                        <div>
                            <label>Status *</label>
                            <select name="status" class="text-input">
                                <option value="Poetry">0</option>
                                <option value="Poetry">1</option>
                              
                            </select>
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
                            <button name="add-post" type="submit" class="btn btn-big">Upload Post</button>
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