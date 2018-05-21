<?php
require 'koneksi.php';

if (isset($_POST["login"]) ) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

	//cek uname
	if(mysqli_num_rows($result) === 1) {

		//cek pw
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {
			header("Location: pasien.php");
			exit;
		}

	} 
	$error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet" href="style.css">
	</head>	

<body background = "rumahsakit.jpg" class="login-body">
	<div class="login-div">
		<h1 class="login-h1">LOGIN ADMIN</h1>
	<?php if (isset($error)) : ?>
	<p class="login-p">Username/Password Salah...</p>
	<?php endif; ?>
	<form action="tampilan.html" method="post">
		<table align = "center" height=130px>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input type="text" name="username" id="username" required /></td>
			</tr>

			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="password" name="password" id="password" required /></td><br>
			</tr>

			<tr>
				<td align='center' colspan = "3"><input type = "submit" class="login-button" name = "submit" value = "Login"  align = "center" /></td>
			</tr>
		</table>
	</form>
	</div>
	

</body>
</html>