<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SiPelaten | Front Page</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<?php 
			session_start();
			if (isset ($_SESSION['session_username'])) {
				if (isset ($_SESSION['user_state'])) {
					?>
					<script>
						alert('<?php print($_SESSION['user_state']); ?>');
					</script>
					<?php
					unset($_SESSION['user_state']);
				}
			}
		?>	
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="access.php?controller=User&function=home">
					<strong>siPelaten </strong>
				</a>
				<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
            		</div>
            	<div class="collapse navbar-collapse" id="navcol-1">
            	   <ul class="nav navbar-nav navbar-right">
		     <?php
			if (isset($_SESSION['session_username'])) {
				?>
                  		<li role="presentation"><a href="access.php?controller=User&function=redirectToPeminjaman">Pinjam Lapangan</a></li>
				<?php
			}
			if (isset($_SESSION['session_username'])) {
				?>
                  		<li role="presentation"><a>Selamat datang, <b><?php echo $_SESSION['session_username'] ?></b>!</a></li>
				<li role="presentation"><a href="access.php?controller=User&function=logout"><font color="red"><b>Logout </b></font><i class="glyphicon glyphicon-log-out"></i></a></li>
				<?php
			}
			if (!isset($_SESSION['session_username'])) {
				?>
                  		<li role="presentation"><a href="access.php?controller=User&function=login">Login <i class="glyphicon glyphicon-log-in"></i></a></li>
				<?php
			}
			?>
               </ul>
            </div>
         </div>
      </nav>
      <div id="banner">
         <div class="jumbotron">
            <h1>SiPelaten </h1>
            <p id="ub">Sistem Pemesanan Lapangan Tenis yang memudahkan anda memesan lapangan tenis di UB Sport Center.</p>
         </div>
      </div>
      <div id="HAHA">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h1 class="text-center">Tentang Kami</h1>
                  <p class="text-center">Kami Merupakan Mahasiswa FILKOM UB jurusan Teknik Informatika</p>
               </div>
               <div class="col-md-4">
                  <h1 class="text-center">Kontak Kami</h1>
                  <p class="text-center">Silahkan Hubungi Kami</p>
               </div>
               <div class="col-md-4">
                  <h1 class="text-center">Login </h1>
                  <p class="text-center">Untuk Memesan Lapangan, anda harus login terlebih dahulu. Jika anda tidak memiliki akun keanggotaan (membership), silahkan untuk melakukan registrasi dengan meneken link registrasi</p>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>