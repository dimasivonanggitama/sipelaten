<html>
	<head>
		<a href="access.php?controller=Iklan&function=createIklan">create</a>
		<a href="index.php">home</a>
		<center>
			<form method="post" action="access.php?controller=Iklan&function=search_iklan">
				<input name="searchbar_member" type="text" placeholder="Cari Iklan" required>
				<select name="select_kategori">
  					<option value="namaBarang">Nama Barang</option>
  					<option value="jenisBarang">Jenis Barang</option>
  					<option value="hargaBarang">Harga Barang</option>
  				</select>
				<input type="submit" value="Cari">
			</form>
			<?php
				session_start();
				if (isset($_SESSION['result_search'])) {
					if ($_SESSION['result_search'] == "not found") {
						?>
						<font color="red"><b>Barang yang dicari tidak dapat ditemukan!</b></font>
						<?php
					} else {
						?>
						Barang yang dicari membuahkan <font color="green"><b><?php echo $_SESSION['result_search']." hasil" ?></b></font>!
						<?php
					}
					unset($_SESSION['result_search']);
				}
			?>
		</center>
		<hr>
	</head>
	<body>
		<table>
			<tr>
				<th>Penjual Barang</th>
				<th>ID Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Harga Barang</th>
			</tr>
			<?php while ($iklan = $query->fetch_object()): ?>
				<tr>
					<td><?php echo $iklan->username; ?></td>
					<td><?php echo $iklan->idBarang; ?></td>
					<td><?php echo $iklan->namaBarang; ?></td>
					<td><?php echo $iklan->jenisBarang; ?></td>
					<td><?php echo $iklan->hargaBarang; ?></td>
					<td><a href="access.php?controller=Iklan&function=update&idBarang=<?php echo $iklan->idBarang; ?>">Edit</a></td>
					<td><a href="access.php?controller=Iklan&function=delete&idBarang=<?php echo $iklan->idBarang; ?>">Delete</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
		<hr>
		<center>
			<form method="post" action='access.php?controller=Iklan&function=tampilIklan'>
				<input type="submit" value="Reset">
			</form>
		</center>
	</body>
</html>