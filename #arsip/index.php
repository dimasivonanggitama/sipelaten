<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start();
			if (isset($_SESSION['session_username'])) {
				?>
				Selamat datang, <b><?php echo $_SESSION['session_username']; ?></b>!
				<?php
			}
		?>
		<center>This page is supposed to be Homepage!</center>
	</head>
	<body>
		<?php
			if (!isset($_SESSION['session_username'])) {
				?>
                		<a href="access.php?controller=User&function=login">Click here to LOGIN!</a>
				<?php

				//if (isset($_POST['input_username'])) {
				//	echo $_POST['input_username'];
				//}
			}
		?>
		<a href="access.php?controller=User&function=aboutUs">About us</a>
		<?php
			if (isset($_SESSION['session_username'])) {
				if ($_SESSION['session_username'] == "Administrator") {
					?>
					<a href="access.php?controller=User&function=readUser">User List</a>
					<?php
				}
				?>
				<a href="access.php?controller=User&function=logout">Logout</a>
				<?php
			}
		?>
	</body>
</html>