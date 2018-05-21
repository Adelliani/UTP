<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {


if(tambah($_POST) > 0){
	echo  "
		<script>
			alert('Data Berhasil ditambahkan');
			document.location.href = 'pasien.php';
		</script>
		";
} else {
		echo  "
		<script>
			alert('Data Gagal ditambahkan');
			document.location.href = 'pasien.php';
		</script>
		";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> REGISTRASI PASIEN</title>
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
	<h1>REGISTRASI PASIEN</h1>
	<form action="" method="post" enctype="">
			<table>	
				
				<tr>
					<td>No Kamar</td>
					<td> : </td>
					<td><input type="text" name="no_kamar" /></td>
				</tr>

				<tr>
					<td>Nama</td>
					<td> : </td>
					<td><input type="text" name="nama" required /></td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td> : </td>
					<td><input type="date" name="tanggal_lahir" /></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><input type="text" name="alamat" /></td>
				</tr>

				<tr>		
					<td>No Telp.</td>
					<td> : </td>
					<td><input type="text" name="no_telp" /></td>
				</tr>

				<tr>
					<td>Tanggal Masuk</td>
					<td> : </td>
					<td><input type="date" name="tanggal_masuk" /></td>
				</tr>

				<tr>
					<td>Tanggal Keluar</td>
					<td> : </td>
					<td><input type="date" name="tanggal_keluar" /></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type = "submit" name = "submit" value = "Submit"  /></td>
				</tr>
			</table>

	</form>

</body>
</html>