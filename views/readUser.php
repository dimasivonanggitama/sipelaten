<html>
	<head>
		<a href="register.php">create</a>
		<a href="index.php">home</a>
		<center>
			<form method="post" action="access.php?controller=User&function=search_member">
				<input name="searchbar_member" type="text" placeholder="Cari Member" required>
				<select name="select_kategori">
  					<option value="username">Username</option>
  					<option value="password">Password</option>
  					<option value="namaLengkapUser">Nama Lengkap User</option>
  					<option value="tanggal_lahir">Tanggal Lahir</option>
  					<option value="email">Alamat Email</option>
  					<option value="hp">Nomor HP</option>
  					<option value="namaToko">Nama Toko</option>
  				</select>
				<input type="submit" value="Cari">
			</form>
			<?php
				session_start();
				if (isset($_SESSION['result_search'])) {
					if ($_SESSION['result_search'] == "not found") {
						?>
						<font color="red"><b>Member yang dicari tidak dapat ditemukan!</b></font>
						<?php
					} else {
						?>
						Member yang dicari membuahkan <font color="green"><b><?php echo $_SESSION['result_search']." hasil" ?></b></font>!
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
				<th>Username</th>
				<th>Password</th>
				<th>Nama Lengkap User</th>
				<th>Tanggal Lahir</th>
				<th>Nomor HP</th>
				<th>Alamat Email</th>
				<th>Nama Toko</th>
			</tr>
			<?php while ($user = $query->fetch_object()): ?>
				<tr>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->password; ?></td>
					<td><?php echo $user->namaLengkapUser; ?></td>
					<td><?php echo $user->tanggal_lahir; ?></td>
					<td><?php echo $user->hp; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->namaToko; ?></td>
					<td><a href="access.php?controller=User&function=update&username=<?php echo $user->username; ?>">Edit</a></td>
					<td><a href="access.php?controller=User&function=delete&username=<?php echo $user->username; ?>">Delete</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
		<hr>
		<center>
			<form method="post" action='access.php?controller=User&function=readUser'>
				<input type="submit" value="Reset">
			</form>
		</center>
	</body>
</html>