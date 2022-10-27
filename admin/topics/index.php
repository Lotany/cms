<?php include 'header.php' ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.html">Manage Posts</a></li>
                    <li><a href="../users/index.html">Manage Users</a></li>
                    <li><a href="index.html">Manage Topics</a></li>
                </ul>
            </div>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Add Topic</a>
                    <a href="index.html" class="btn btn-big">Manage Topics</a>
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
                            <tr>
                                <td>1</td>
                                <td>Poetry</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Life Lessons</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                            </tr>
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