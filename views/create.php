<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start();
			if (isset($_SESSION['username_check'])) {
				unset($_SESSION['username_check']);
				?>
				<script>
					alert("<b>Username</b> yang sama telah ada dalam database!");
				</script>
				<?php
			}
		?>
	</head>
	<body>
		<form method="post" action="access.php?controller=User&function=read_username">
			<label>
				Username: <input type="text" name="username">
			</label>
			<br>
			<label>
				Password: <input type="text" name="password">
			</label>
			<br>
			<label>
				Nama Lengkap User: <input type="text" name="namaLengkapUser">
			</label>
			<br>
			<label>
				Tanggal Lahir: <input type="text" name="tanggal_lahir">
			</label>
			<br>
			<label>
				Nomor HP: <input type="number" name="hp">
			</label>
			<br>
			<label>
				Alamat Email: <input type="text" name="email">
			</label>
			<br>
			<input type="submit" value="Simpan">
		</form>
	</body>
</html>