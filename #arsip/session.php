<?php
	session_start();
	if ($_POST['usernameInput'] == 'admin' & $_POST['passwordInput'] == 'admin') {
		header("location: index.php");
		$_SESSION['session_username'] = $_POST['usernameInput'];
	} else {
		$_SESSION['session_username'] = "failed";
		header("location: login.php");
	}
?>