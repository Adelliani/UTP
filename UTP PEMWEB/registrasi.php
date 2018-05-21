<?php
require 'koneksi.php';

if (isset($_POST["register"]) ) {
	
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('Berhasil Ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> REGISTRASI </title>
	<style>
		
		label {
			display: block;
		}

		h1 {
			font-weight: 50px;
			font-style: bold;
			font-family: "calibri", Garamond, 'Comic Sans MS';
		}

	</style>
</head>	

<body>
	<h1>REGISTRASI ADMIN</h1>
	<form action="" method="post">
			<ul>
				<li>
					<label for="username">Username : </label>
					<input type="text" name="username" id="username" required>
				</li>
			
				<li>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password">
				</li>
			
				<li>
					<label for="password2">Konfirmasi Password : </label>
					<input type="password" name="password2" id="password2">
				</li>
			
				<li>
					<label for="email">E-mail : </label>
					<input type="text" name="email" id="email">
				</li><br>

				<li>
					<button type="submit" name="register">Register Now!</button>
				</li>
			
	</form>

</body>

</html>