<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> LIST PASIEN </title>
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
	<h1>LIST PASIEN</h1>
	<form action="" method="post">
			<table border = "1">
				<tr>
					<td>No Kamar</td>
					<td>Nama</td>
					<td>Tanggal Lahir</td>
					<td>Alamat</td>
					<td>No Telp.</td>
					<td>Tanggal Masuk</td>
					<td>Tanggal Keluar</td>
					<td>Keterangan</td>
				</tr>	

				<?php 
					$query = mysqli_query($conn, "SELECT * FROM pasien ORDER BY no_kamar ASC");
					while($row = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $row['no_kamar'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['tanggal_lahir'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['no_telp'] ?></td>
					<td><?php echo $row['tanggal_masuk'] ?></td>
					<td><?php echo $row['tanggal_keluar'] ?></td>
					<td>
						
						<a href="edit.php?no=  <?php echo $row['no'] ?>">Edit</a>
						<a href="hapus.php?no= <?php echo $row['no'] ?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<br><br>
			<a href="tambah.php" align="right" >Tambah Pasien Baru</a>
	</form>

</body>

</html>