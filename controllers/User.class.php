<?php
	class User extends Controller {
		private $mahasiswaModel;	

		public function __construct() {
			$this->mahasiswaModel = $this->loadModel('UserModel');
		}

		public function aboutUs() {
			header("location: views/aboutUs.php");
		}
		
		public function create() {
			$this->loadView('create', array());
		}
		
		public function create_process() {
			session_start();
			echo isset($_SESSION['registrasi']);
			$username = $_POST['username'];
			$password = $_POST['password'];
			$namaLengkapUser = $_POST['namaLengkapUser'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$hp = $_POST['hp'];
			$email = $_POST['email'];
			$this->mahasiswaModel->insert($username, $password, $namaLengkapUser, $tanggal_lahir, $hp, $email);
			header('Location: index.php');
		}

		public function delete_process() {
			$id = $_GET['id'];
			$this->mahasiswaModel->delete_order($id);
			header('location: access.php?controller=User&function=redirectToPeminjaman');
		}

		public function selectOnlyRealName() {
    			session_start();
			$data = $this->mahasiswaModel->selectOnlyRealName($_SESSION['session_username']);
			$result = mysqli_fetch_row($data);
			$_SESSION['session_realname'] = implode($result);
			header("location: index.php");
		}

		public function home() {
			header("Location: index.php");
		}

		public function login() {
			echo "working: ";
    			session_start();

					//if user already login:
			if (isset ($_SESSION['session_username'])) {
				header("location: access.php?controller=User&function=home");
				break;
			}
			if (!isset ($_POST['input_username'])) {
				header("location: views/login.php");
				break;
			}

			$username = $_POST['input_username'];
			$password = $_POST['input_password'];

			$data = $this->mahasiswaModel->login($username, $password);
			$result = mysqli_num_rows($data);
			
					//Case 1: if user found on database:
			if($result > 0) { 
    				$_SESSION['session_username'] = $username;

					echo $_SESSION['session_username'];
				header("location: access.php?controller=User&function=redirectToPeminjaman");
				break;
			
					//Case 2(a): if user not found on database, then check user as admin:
			} else { 
				$data = $this->mahasiswaModel->login_asAdmin($username, $password);
				$result_asAdmin = mysqli_num_rows($data);
			
					//Case 2(b): if user as admin found on database:
				if ($result_asAdmin > 0) { 
    					$_SESSION['session_username'] = $username;
					echo $_SESSION['session_username'];
					header("location: access.php?controller=User&function=redirectToPeminjaman");
					break;

					//Case 3: if user not found on any database, then user is not yet registered:
				} else if ($result_asAdmin == 0) { 
    					$_SESSION['session_username'] = "failed!";
					echo $_SESSION['session_username'];
    					header("location: views/login.php");
					break;
				}
			}
		}

		public function logout() {
			session_start();
			session_destroy();
			header("location: access.php?controller=User&function=home");			
		}
		
		public function peminjaman_process() {
			session_start();
			$nama = $_POST['input_nama_pemesan'];
			$telpon = $_POST['input_nomorTelepon_pemesan'];
			$lapangan = $_POST['pilihan_lapangan'];
			$tanggal = $_POST['input_tanggal_pemesanan'];
			$waktu_awal = $_POST['input_waktu_pemesanan_awal'];
			$waktu_akhir = $_POST['input_waktu_pemesanan_akhir'];
			$id = $this->search_id_member($_SESSION['session_username']);
			if (!isset ($_SESSION['session_update'])) {
				$poin = "10";
				$validasi = 
				$this->mahasiswaModel->insertPeminjaman($id, $nama, $telpon, $lapangan, $tanggal, $waktu_awal, $waktu_akhir, $poin);
			} else {
				$this->mahasiswaModel->update($_SESSION['session_peminjam_id_forUpdate'], $nama, $telpon, $lapangan, $tanggal, $waktu_awal, $waktu_akhir);
				unset ($_SESSION['session_update']);
			}
			header('Location: access.php?controller=User&function=redirectToPeminjaman');
		}
		
		public function readUser() {
			$data['query'] = $this->mahasiswaModel->selectAll();
			$this->loadView('readUser', $data);
		}

		public function redirectToCekLapangan() {				
			header("Location: views/cekLapangan.php");
		}

		public function redirectToPemesanan() {				
			header("Location: views/pemesanan.php");
		}

		public function redirectToPeminjaman() {
			header("Location: access.php?controller=User&function=show_order");
		}

		public function redirectToRead() {
			header("Location: access.php?controller=User&function=read");
		}

		public function redirectToRegister() {
			header("Location: views/register.php");
		}
		
		public function register_process() {
			session_start();
			if ($_POST['input_password_asli'] != $_POST['input_password_ulang']) {
				$_SESSION['input_password_ulang'] = "salah";
				header('Location: access.php?controller=User&function=redirectToRegister');
			} else {
				$username = $_POST['input_email'];
				$nama = $_POST['input_nama'];
				$nim = $_POST['input_nim'];
				$alamat = $_POST['input_alamat'];
				$telpon = $_POST['input_telpon'];
				$password = $_POST['input_password_ulang'];
				$this->mahasiswaModel->insert($username, $nama, $nim, $alamat, $telpon, $password);
				header('Location: index.php');
			}
		}

		public function search_id_member($parameter_nama) {
			$id_result = $data['query'] = $this->mahasiswaModel->selectOnlyID($parameter_nama);
			$result = mysqli_fetch_row($id_result);
			return $result[0];
		}

		public function search_jadwal_lapangan() {
 		   	session_start();
			$search = $_POST['searchbar_member'];
			$kategori = $_POST['select_kategori'];
			$data_result = $data['query'] = $this->mahasiswaModel->selectAllFieldSchedule();
			$result = mysqli_num_rows($data_result);
			$this->loadView('cekLapangan', $data);
		}

		public function search_member() {
 		   	session_start();
			$search = $_POST['searchbar_member'];
			$kategori = $_POST['select_kategori'];
			$data_result = $data['query'] = $this->mahasiswaModel->selectBySomething($kategori, $search);
			$result = mysqli_num_rows($data_result);
			if ($result == 0) {
				$_SESSION['result_search'] = "not found";
			} else {
				$_SESSION['result_search'] = $result;
			}
			$this->loadView('readUser', $data);
		}

		public function show_order() {
			//show the list order only on this "username", searching by id member
			session_start();
			if ($_SESSION['session_username'] == "admin") {
				$data_result = $data['query'] = $this->mahasiswaModel->selectAll_orders();
			} else {
				$id = $this->search_id_member($_SESSION['session_username']);
				$_SESSION['session_peminjam_poin_total'] = $this->show_poin($id);
			
				$data_result = $data['query'] = $this->mahasiswaModel->selectByID_Member($id);
			}
			$result = mysqli_num_rows($data_result);
			if ($result == 0) {
				$_SESSION['session_peminjam_id'][1] = "Belum melakukan order";					
				$_SESSION['session_peminjam_nama'][1] = "N/A";
				$_SESSION['session_peminjam_telp'][1] = "N/A";
				$_SESSION['session_peminjam_lapangan'][1] = "N/A";
				$_SESSION['session_peminjam_tanggal'][1] = "N/A";
				$_SESSION['session_peminjam_durasi'][1] = "N/A";
				$_SESSION['session_peminjam_status'][1] = "N/A";
				$_SESSION['i'] = 1;
			} else {
				$i = 0;
				while ($row = $data_result->fetch_assoc()) {
					$i++;
					$_SESSION['session_peminjam_id'][$i] = $row['id_peminjaman'];					
					$_SESSION['session_peminjam_nama'][$i] = $row['atasnama_peminjam'];
					$_SESSION['session_peminjam_telp'][$i] = $row['no_telp_peminjaman'];
					$_SESSION['session_peminjam_lapangan'][$i] = $row['id_lapangan'];
					$_SESSION['session_peminjam_tanggal'][$i] = $row['tanggal_peminjaman'];
					$_SESSION['session_peminjam_durasi'][$i] = $row['waktu_peminjaman_B'] - $row['waktu_peminjaman_A'];
					$_SESSION['session_peminjam_status'][$i] = $row['validasi'];
				}
				$_SESSION['i'] = $i;
			}
			header("Location: views/home.php");
		}
		
		public function show_peminjam_detail() {
			//select all from id to show the data that editable
			//$id_result = $data['query'] = $this->mahasiswaModel->selectOnlyID($parameter_nama);
			//$result = mysqli_fetch_row($id_result);
			//return $result[0];
		}
		
		public function show_poin($parameter_id) {
			$poin_result = $data['query'] = $this->mahasiswaModel->selectOnlyPoin($parameter_id);
			$result = mysqli_fetch_row($poin_result);
			return $result[0];
		}
		
		public function unvalidasi() {
			$id = $_GET['id'];
			$this->mahasiswaModel->update_unvalidasi($id);
			header('location: access.php?controller=User&function=redirectToPeminjaman');
		}

		public function update_process() {
			session_start();
			$_SESSION['session_peminjam_id_forUpdate'] = $_GET['id'];
			$data_result = $data['query'] = $this->mahasiswaModel->selectByID_Peminjaman($_SESSION['session_peminjam_id_forUpdate']);

			$result = mysqli_num_rows($data_result);
			if ($result != 0) {
				//$_SESSION['session_peminjam_id'][1] = $row['id_peminjaman'];					
				$_SESSION['session_peminjam_nama_forUpdate'] = $row['atasnama_peminjam'];
				$_SESSION['session_peminjam_telp_forUpdate'] = $row['no_telp_peminjaman'];
				$_SESSION['session_peminjam_lapangan_forUpdate'] = $row['id_lapangan'];
				$_SESSION['session_peminjam_tanggal_forUpdate'] = $row['tanggal_peminjaman'];
				$_SESSION['session_peminjam_waktu_A_forUpdate'] = $row['waktu_peminjaman_A'];
				$_SESSION['session_peminjam_waktu_B_forUpdate'] = $row['waktu_peminjaman_B'];
			}
			$_SESSION['session_update'] = "true";
			header("Location: access.php?controller=User&function=redirectToPemesanan");
		}
		
		public function validasi() {
			$id = $_GET['id'];
			$this->mahasiswaModel->update_validasi($id);
			//$this->mahasiswaModel->update_validasi($id);
			header('location: access.php?controller=User&function=redirectToPeminjaman');
		}
	}