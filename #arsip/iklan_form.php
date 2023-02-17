<html>
	<head>
		<title>Create iKlan</title>
	</head>
	<body>
		<form method="post" action="access.php?controller=Iklan&function=createIklan_process"create_iklan">
			<input type="text" name="namaToko" placeholder="Nama Toko" required>
			<input type="text" name="namaBarang" placeholder="Nama Barang" required>
			<input type="text" name="jenisBarang" placeholder="Jenis Barang" required>
			<input type="text" name="hargaBarang" placeholder="Harga Barang" required>
			<input type="submit" value="Submit!">
		</form>
	</body>
</html>