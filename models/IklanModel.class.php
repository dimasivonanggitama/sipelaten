<?php
	class IklanModel extends Koneksi {
		public function delete($idBarang) {
			return $this->mysqli->query("DELETE FROM jualan WHERE idBarang = '$idBarang'");
		}

		public function insert($namaToko, $namaBarang, $jenisBarang, $hargaBarang, $username) {
			return $this->mysqli->query("INSERT INTO jualan (namaToko, namaBarang, jenisBarang, hargaBarang, username) VALUES ('$namaToko', '$namaBarang', '$jenisBarang', $hargaBarang, '$username')");
		}

		public function selectAll() {
			return $this->mysqli->query("SELECT * FROM jualan");
		}

		public function selectOnlyNamaToko($username) {
			return $this->mysqli->query("SELECT namaToko FROM user WHERE username = '$username'");
		}
	}