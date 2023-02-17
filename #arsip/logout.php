<?php
	session_start();
	session_destroy();
//	setcookie("cd_order", "", 1);
//	setcookie("dvd_order", "", 1);
	header("location: index.php");
?>