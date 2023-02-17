<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>homepage</title>
      <link rel="stylesheet" href="assets/home/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/home/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="assets/home/css/user.css">

   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="navbar-header"><img src="gaya-ku logo.png">
               <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
		<div class="collapse navbar-collapse" id="navcol-1">
			<ul class="nav navbar-nav navbar-left">
				<li class="active" role="presentation"><a href="profile.php"><b>PROFIL</b></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
        		    	<?php 
                		     	session_start();
					?>
                		     	<li class="active" role="presentation"><a>Selamat datang, <b><?php echo $_SESSION['session_realname']; ?></b>!</a></li>
                		 	<?php
					if ($_SESSION['session_realname'] == "Administrator") {
                		     		?>
                		 		<li class="active" role="presentation"><a href="access.php?controller=User&function=readUser">MANAGE USER </a></li>
                		 		<?php
					} else {
						?>
						<li class="active" role="presentation"><a href="access.php?controller=Iklan&function=createIklan"><font color="orange"><b>+Iklan</b></font></a></li>
						<?php
					}
               			?>
                		<li class="active" role="presentation"><a href="index.php">HOME</a></li>
                		<li class="active" role="presentation"><a href="logout.php"><b><font color=blue">LOGOUT</font></b></a></li>
			</ul>
            	</div>
         </div>
      </nav>



      <center>
		<b>Profile belongs here!</b>
      </center>
   </body>
</html>