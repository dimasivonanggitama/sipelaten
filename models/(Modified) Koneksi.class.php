<?php class Koneksi {
	protected $mysqli;
	public function __construct() {
		$dbhostname = '10.34.233.139';
		$dbusername = 'habib';
		$dbpassword = 'hirohiroki3132';
		$dbname = 'sipelaten';
		$connectioninfo = array("Database"=>$dbname, "UID"=>$dbusername, "PWD"=>$dbpassword);
		$conn = sqlsrv_connect($dbhostname, $connectioninfo);
		if ($conn == true) {
			echo "connection successfull";
		} else {
			echo "Failed to connect the database!";
			die(print_r(sqlsrv_errors(), true));
		}
	}
}