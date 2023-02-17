<!DOCTYPE html>
<html>
   <head>
	<title>Registrasi</title>
	<?php
		session_start();
		$_SESSION['registrasi'] = "true";
	?>
      <meta charset="utf-8">
      <link href="assets/register/css/style.css" rel='stylesheet' type='text/css' />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!--webfonts-->
      <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
      <!--//webfonts-->
   </head>
   <body>
	<div class="col_1_of_f span_1_of_f">
		<ul class='facebook'></ul>
	</div>
	<div class="col_1_of_f span_1_of_f">
		<ul class='twitter'></ul>
	</div>
	<div class="clear"> </div>
      	<form method="post" action="access.php?controller=User&function=create_process">
	<div class="main">
		<h2>REGISTRASI</h2>
        	<div class="lable-2">
			<input name="username" type="text" class="text" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Username';}" required>
        	 	<input name="password" type="password" class="text" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Password';}" required>
			<input name="namaLengkapUser" type="text" class="text" placeholder="Nama Lengkap User" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Nama Lengkap User';}" required>
            		<input name="tanggal_lahir" type="text" class="text" placeholder="Tanggal Lahir" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Tanggal Lahir';}" required>
            		<input name="hp" type="text" class="text" placeholder="Nomor HP" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Nomor HP';}" required>
            		<input name="email" type="text" class="text" placeholder="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.placeholder = 'Email Address';}" required>
         	</div>
		<h3>By creating an account, you agree to our <span class="term"><a href="#">Terms & Conditions</a></span></h3>
         	<div class="submit">
            		<input type="submit" value="Register" >
         	</div>
      </form>
      </div>
   </body>
</html>