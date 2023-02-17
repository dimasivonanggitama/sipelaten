<?php
	class UserModel extends Koneksi {
		
		public function selectBySomething($something, $username) {
			return $this->mysqli->query("SELECT * FROM user where $something = '$username'");
		}

		public function selectOnlyRealName($username) {
			return $this->mysqli->query("SELECT namaLengkapUser FROM user WHERE username = '$username'");
		}

		public function login($username, $password) {
			return $this->mysqli->query("SELECT * FROM member where username = '$username' AND password_member = '$password'");
		}

		public function login_asAdmin($username, $password) {
			return $this->mysqli->query("SELECT username FROM admin where username = '$username' AND password = '$password'");
		}

		public function delete($username) {
			return $this->mysqli->query("DELETE FROM user WHERE username = '$username'");
		}

		public function delete_order($parameter_id) {
			return $this->mysqli->query("DELETE FROM peminjaman WHERE id_peminjaman = '$parameter_id'");
		}

		public function insert($username, $nama, $nim, $alamat, $telpon, $password) {
			return $this->mysqli->query("INSERT INTO member (username, nama_member, nim, alamat_member, no_telp_member, password_member, poin) VALUES ('$username', '$nama', '$nim', '$alamat', '$telpon', '$password', '0')");
		}

		public function insertPeminjaman($id, $nama, $telpon, $lapangan, $tanggal, $waktu_awal, $waktu_akhir, $poin) {
			return $this->mysqli->query("INSERT INTO peminjaman (id_member, atasnama_peminjam, no_telp_peminjaman, id_lapangan, tanggal_peminjaman, waktu_peminjaman_A, waktu_peminjaman_B, poin) VALUES ('$id', '$nama', '$telpon', '$lapangan', '$tanggal', '$waktu_awal', '$waktu_akhir', '$poin')");
		}

		public function selectAllFieldSchedule() {
			return $this->mysqli->query("SELECT * FROM lapangan");
		}

		public function selectAll_orders() {
			return $this->mysqli->query("SELECT * FROM peminjaman");
		}

		public function selectByID_Member($parameter_id) {
			return $this->mysqli->query("SELECT id_peminjaman, atasnama_peminjam, no_telp_peminjaman, id_lapangan, tanggal_peminjaman, waktu_peminjaman_A, waktu_peminjaman_B, poin, validasi FROM peminjaman where id_member = '$parameter_id'");
		}

		public function selectByID_Peminjaman($parameter_id) {
			return $this->mysqli->query("SELECT atasnama_peminjam, no_telp_peminjaman, id_lapangan, tanggal_peminjaman, waktu_peminjaman_A, waktu_peminjaman_B, poin FROM peminjaman where id_peminjaman = '$parameter_id'");
		}

		public function selectOnlyID($username) {
			return $this->mysqli->query("SELECT id_member FROM member where username = '$username'");
		}

		public function selectOnlyPoin($parameter_id) {
			return $this->mysqli->query("select SUM(poin) from peminjaman WHERE id_member = '$parameter_id'");
		}

		public function update($id, $nama, $telpon, $lapangan, $tanggal, $waktu_awal, $waktu_akhir) {
			return $this->mysqli->query("UPDATE peminjaman SET atasnama_peminjam = '$nama', no_telp_peminjaman = '$telpon', id_lapangan = '$lapangan', waktu_peminjaman_A = '$waktu_awal', waktu_peminjaman_B = '$waktu_akhir' WHERE id_peminjaman = '$id'");
		}

		public function update_validasi($parameter_id) {
			return $this->mysqli->query("UPDATE peminjaman SET validasi = '1' WHERE id_peminjaman = '$parameter_id'");
		}

		public function update_unvalidasi($parameter_id) {
			return $this->mysqli->query("UPDATE peminjaman SET validasi = '-1' WHERE id_peminjaman = '$parameter_id'");
		}
	}