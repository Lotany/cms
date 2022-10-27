<div class="left-sidebar">
                <ul>
                    <li><a href="index.php">Manage Posts</a></li>

                    <?php 
		//only visible to admin
		if($_SESSION['user_role_id'] == 1){?>
                    <li><a href="../users/index.php">Manage Users</a></li>
                    <li><a href="../topics/index.php">Manage Topics</a></li>

            <?php } ?>
                </ul>
            </div>