<?php
	class Iklan extends Controller {
		private $iklanModel;
		public function __construct() {
			$this->iklanModel = $this->loadModel('IklanModel');
		}
		
		public function createIklan() {
			$this->loadView('createIklan', array());
		}

		public function createIklan_process() {
			session_start();
			$namaToko = $_POST['namaToko'];
			$namaBarang = $_POST['namaBarang'];
			$jenisBarang = $_POST['jenisBarang'];
			$hargaBarang = $_POST['hargaBarang'];
			$this->iklanModel->insert($namaToko, $namaBarang, $jenisBarang, $hargaBarang, $_SESSION['session_username']);
			header('Location: access.php?controller=Iklan&function=tampilIklan');
		}
		
		public function delete() {
			$barang = $_GET['idBarang'];
			$this->iklanModel->delete($barang);
			header('Location: access.php?controller=User&function=tampilIklan');
		}
		
		public function propic() {
			//$propic = 
		}

		public function search_iklan() {
		}

		public function getNamaToko() {
			session_start();
			$username = $_SESSION['session_username'];
			$data = $this->iklanModel->selectOnlyNamaToko($username);
			$result = mysqli_num_rows($data);
			echo $result;
		}
		
		public function tampilIklan() {
			$data['query'] = $this->iklanModel->selectAll();
			$this->loadView('readIklan', $data);
		}
		
		public function update() {
		}

		public function update_process() {
		}
	}