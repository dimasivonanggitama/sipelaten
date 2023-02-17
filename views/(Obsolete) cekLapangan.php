<html>
	<head>
	</head>
	<body>
		<table align="center">
			<tr>
				<th></th>
				<th>[08:00 - 09:00]</th>
				<th>[09:00 - 10:00]</th>
				<th>[10:00 - 11:00]</th>
				<th>[11:00 - 12:00]</th>
				<th>[12:00 - 13:00]</th>
				<th>[13:00 - 14:00]</th>
				<th>[14:00 - 15:00]</th>
				<th>[15:00 - 16:00]</th>
				<th>[16:00 - 17:00]</th>
				<th>[17:00 - 18:00]</th>
				<th>[18:00 - 19:00]</th>
				<th>[19:00 - 20:00]</th>
			</tr>
			<?php while ($user = $query->fetch_object()): ?>
				<tr align="center">
					<td><?php echo $user->nama_lapangan; ?></td>
					<td><?php if ($user->jam_8_9_pagi == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_9_10_pagi == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_10_11_pagi == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_11_12_pagi == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_12_13_siang == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_13_14_siang == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_14_15_siang == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_15_16_sore == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_16_17_sore == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_17_18_sore == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_18_19_malam == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
					<td><?php if ($user->jam_19_20_malam == 0) { ?> <img src="assets/field_check/OK.png" alt="OK"> <?php } else { ?> <img src="assets/field_check/NO.png" alt="NO"> <?php } ?></td>
			</tr>
			<?php endwhile; ?>
		</table>
		<hr>
	</body>
</html>