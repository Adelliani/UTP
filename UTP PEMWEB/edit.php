<?php
require 'koneksi.php';
$no = $_GET["no"];

$pasien = query("SELECT * FROM pasien WHERE no='$no'")[0];


if (isset($_POST['submit'])) {


if(edit($_POST) > 0){
	echo  "
		<script>
			alert('Data Berhasil diupdate');
			document.location.href = 'pasien.php';
		</script>
		";
} else {
		echo  "
		<script>
			alert('Data Gagal diupdate');
			document.location.href = 'pasien.php';
		</script>
		";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> EDIT DATA PASIEN</title>
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
	<h1>EDIT DATA PASIEN</h1>
	<form action="" method="post" enctype="">
			<table>	
				<tr>
					<td></td>
					<td></td>
					<td><input type="hidden" name="no" value="<?= $pasien["no"]; ?>" /></td>
				</tr>
				<tr>
					<td>No Kamar</td>
					<td> : </td>
					<td><input type="text" name="no_kamar" /></td>
				</tr>

				<tr>
					<td>Nama</td>
					<td> : </td>
					<td><input type="text" name="nama" required value="<?= $pasien["nama"]; ?>" /></td>
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
					<td>Edit</td>
					<td></td>
					<td><input type = "submit" name = "submit" value = "Submit"  /></td>
				</tr>
			</table>

	</form>

</body>
</html>