<head>
	<center>this page is supposed to be login page!</center>
</head>
<body>
	<center>
		<a href="../access.php?controller=User&function=home">HOME</a>
		<form method="post" action="../access.php?controller=User&function=login" type="post">
			<input type="text" name="input_username" placeholder="Username" required>
			<input type="password" name="input_password" placeholder="Password" required>
			<input type="submit">
		</form>
</center>