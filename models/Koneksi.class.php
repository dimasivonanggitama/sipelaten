<?php class Koneksi {
	protected $mysqli;
	public function __construct() {
		$dbhostname = 'localhost';
		$dbusername = 'root';
		$dbpassword = '';
		$dbname = 'sipelaten';
		$this->mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);
		if ($this->mysqli->connect_error) {
			die('Database connection error!');
		}
	}
}