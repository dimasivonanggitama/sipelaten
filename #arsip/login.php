<?php
	session_start();
	if (isset($_SESSION['session_username'])) {
		?>
		<script>
			alert("Username/Password anda salah atau belum terdaftar!");
		</script>
		<?php
	}
	session_destroy();
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login!</title>
      <link rel="stylesheet" href="assets/login/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/login/css/styles.css">
      <link rel="stylesheet" href="assets/login/css/Google-Style-Login.css">
   </head>
   <body>
      <div class="login-card">
         <img src="assets/login/img/avatar_2x.png" class="profile-img-card">
	 <center><h2>LOGIN</h2></center>
         <form method="post" action="access.php?controller=User&function=login" type="post" class="form-signin">
            <span class="reauth-email"> </span>
            <input class="form-control" type="text" placeholder="Username" autofocus="" name="usernameInput" required>
            <input class="form-control" type="password" placeholder="Password" name="passwordInput" required>
            <div class="checkbox">
               <div class="checkbox">
                  <label>
                  <input type="checkbox">Remember me</label>
               </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
         </form>
	<hr>
	<center>
         <a href="register.php" >Belum punya akun? Mendaftar di sini!</a>
	</center>
      </div>
      <script src="assets/login/js/jquery.min.js"></script>
      <script src="assets/login/bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>