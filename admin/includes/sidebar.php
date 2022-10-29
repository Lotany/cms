<div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.php">Manage Posts</a></li>

                    <?php 
		//only visible to admin
		if($_SESSION['user_role_id'] == 1){?>
                    <li><a href="../users/index.php">Manage Users</a></li>

                    <?php } ?>
                    <li><a href="../topics/index.php">Manage Topics</a></li>


                </ul>
            </div>