<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SiPelaten | Login</title>
      <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/styles.css">
   </head>
   <body>
	<?php
		session_start();
		if (isset($_SESSION['session_username'])) {
			if ($_SESSION['session_username'] == "failed!") {
				unset($_SESSION['session_username']);
				?>
				<script>
					alert("Username/Password yang anda masukkan salah, silahkan coba lagi!");
				</script>
				<?php
			} else {
				$_SESSION['user_state'] = "Anda telah login sebagai ".$_SESSION['session_username'].". Silahkan melakukan logout terlebih dahulu kemudian lakukan login kembali!";
				header("location: ../access.php?controller=User&function=home");
				break;
			}
		}
		if (isset($_SESSION['user_state'])) {
			?>
			<script>
				alert('<?php print($_SESSION['user_state']); ?>');
			</script>
			<?php
			unset($_SESSION['user_state']);
		}
	?>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="../access.php?controller=User&function=home"><strong>siPelaten </strong></a>
               <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
               <ul class="nav navbar-nav navbar-right">
                  <li role="presentation"><a href="login.php" style="background-color:Turquoise;">Login <i class="glyphicon glyphicon-log-in"></i></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-md-offset-4" style="border: 1px solid lightblue; background-color: white; border-radius: 20px; padding: 20px 20px 20px 20px">
               <h2 style="margin-bottom: 20px; text-align: center">Member Login</h2>
               <form method="post" action="../access.php?controller=User&function=login" type="post" style="font-family: Arial">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Username</label>
                     <input type="text" name="input_username" class="form-control" placeholder="Masukkan username" required>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" name="input_password" class="form-control" id="InputPassword1" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                  <a href="register.php" style="padding-left: 180px">Register</a>
               </form>
            </div>
         </div>
      </div>
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>