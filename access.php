<?php
	error_reporting(~E_NOTICE);

	$controller = $_GET['controller'] ? $_GET['controller'] : 'Home';
	$function = $_GET['function'] ? $_GET['function'] : 'index';

	include_once "controllers/Controller.class.php";
	include_once "controllers/$controller.class.php";

	(new $controller)->$function();
?>