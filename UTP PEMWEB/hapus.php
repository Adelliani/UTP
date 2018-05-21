<?php 
require 'koneksi.php';
$no = $_GET['no'];

if (hapus($no) > 0){
	echo  "
		<script>
			alert('Data Berhasil dihapus');
			document.location.href = 'pasien.php';
		</script>
		";
} else {
		echo  "
		<script>
			alert('Data Gagal dihapus');
			document.location.href = 'pasien.php';
		</script>
		";
}

?>