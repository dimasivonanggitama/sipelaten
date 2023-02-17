<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiPelaten | Register</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <?php
    	session_start();
	if (isset($_SESSION['input_password_ulang'])) {
		if ($_SESSION['input_password_ulang'] == "salah") {
			?>
			<script>
				alert("Password anda tidak sama. Silahkan masukkan kembali!");
			</script>
			<?php
			unset($_SESSION['input_password_ulang']);
		}
	}
	if (isset($_SESSION['session_username'])) {
		$_SESSION['user_state'] = "Anda telah login sebagai ".$_SESSION['session_username'].". Silahkan melakukan logout terlebih dahulu kemudian lakukan registrasi kembali!";
		header("location: ../access.php?controller=User&function=home");
		break;
	}
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand navbar-link" href="../index.php"><strong>siPelaten </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="login.php">Login <i class="glyphicon glyphicon-log-in"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4" style="border: 1px solid lightblue; background-color: white; border-radius: 20px; padding: 20px 20px 20px 20px; margin-bottom: 25px">
          <h2 style="margin-bottom: 20px; text-align: center">Register</h2>
          <p style="text-align:center">Silahkan mengisi data pribadi di kolom-kolom yang sudah disediakan</p>
          <form method="post" action="../access.php?controller=User&function=register_process" style="font-family: Arial">
            <div class="form-group">
              <label>Username</label>
              <input type="email" name="input_email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat email" required>
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="input_nama" class="form-control" id="InputNama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
              <label>NIM</label>
              <input type="number" name="input_nim" class="form-control" id="InputNIM" placeholder="NIM" required>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="input_alamat" class="form-control" id="InputAlamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="number" name="input_telpon" class="form-control" id="InputNoTelp" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="input_password_asli" class="form-control" id="InputPassword" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label>re-Password</label>
              <input type="password" name="input_password_ulang" class="form-control" id="InputRePass" placeholder="Masukkan Ulang Password" onkeyup="checkPassword()" required>
            </div>
            <button type="submit" class="btn btn-primary" onclick="checkPassword()">Register</button>
	    <label id="output"></label>
		<script>
			function checkPassword() {
    				if (document.getElementById("InputPassword").value == document.getElementById("InputRePass").value) {
    					document.getElementById("output").style.color = "green";
        				document.getElementById("output").innerHTML = "Password sama!";				
    				}
				else {
    					document.getElementById("output").style.color = "red";
        				document.getElementById("output").innerHTML = "Password tidak sama!";
				}
			}
		</script>
          </form>
        </div>
      </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
