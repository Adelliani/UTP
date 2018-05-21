<?php

$conn = mysqli_connect('localhost', 'root', '', 'utp') or die($conn);


function query($query) {
	global $conn;
	$result = mysqli_query ($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc ($result)) {
		$rows[] = $row;

	}
	return $rows;
}


function tambah($data){
	global $conn;

	$no_kamar = $data["no_kamar"];
	$nama = $data["nama"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$alamat = $data["alamat"];
	$no_telp = $data["no_telp"];
	$tanggal_masuk = $data["tanggal_masuk"];
	$tanggal_keluar = $data["tanggal_keluar"];

	$query = "INSERT INTO pasien
				VALUES
				('', '$no_kamar', '$nama', '$tanggal_lahir', '$alamat', '$no_telp',	'$tanggal_masuk', '$tanggal_keluar')";

	mysqli_query ($conn, $query);

	return mysqli_affected_rows ($conn);
}


function hapus($no) {
	global $conn;

	mysqli_query($conn,"DELETE FROM pasien WHERE no='$no'");
	return mysqli_affected_rows ($conn);

}


function edit($data){
	global $conn;

	$no = $data["no"];
	$no_kamar = $data["no_kamar"];
	$nama = $data["nama"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$alamat = $data["alamat"];
	$no_telp = $data["no_telp"];
	$tanggal_masuk = $data["tanggal_masuk"];
	$tanggal_keluar = $data["tanggal_keluar"];

	$query = "UPDATE pasien	SET
				no_kamar = '$no_kamar', 
				nama = '$nama', 
				tanggal_lahir = '$tanggal_lahir', 
				alamat = '$alamat', 
				no_telp = '$no_telp',	
				tanggal_masuk = '$tanggal_masuk',
				tanggal_keluar = '$tanggal_keluar'
				WHERE no = $no
				";

	mysqli_query ($conn, $query);

	return mysqli_affected_rows ($conn);
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 =  mysqli_real_escape_string($conn, $data["password2"]);
	$email = strtolower($data["email"]);


//cek uname

$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'" );
if (mysqli_fetch_assoc($result)) {
	echo "<script>
			alert ('Username Sudah Terdaftar!')
		  </script>";
	return false;
}


//cek konfirmasi password

if ($password !== $password2) {
	echo "<script>
		  	alert ('Konfirmasi Password Tidak Sesuai!');
		  </script>";
	return false;
}

//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

//tambah admin

mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password', '$email')");

return mysqli_affected_rows($conn);

}



?>