<?php include('inc/config.php') ?>
<?php include('inc/login_reg.php') ?>
<?php include 'header.php' ?>

  <div class="auth-content">

    <form action="login.php" method="post">
      <h2 class="form-title">Login</h2>
 <?php include 'inc/errors.php' ?>
      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      </div>
      <p>Or <a href="register.php">Sign Up</a></p>
    </form>

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>