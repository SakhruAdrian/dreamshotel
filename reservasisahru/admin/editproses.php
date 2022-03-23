<?php 

include 'koneksi.php';

$id 	= $_POST['id'];
$nama 	= $_POST['nama'];
$email 	= $_POST['email'];
$akses	= $_POST['akses'];

$query = mysqli_query($koneksi,"UPDATE pengguna SET nama='$nama', email='$email', akses='$akses' WHERE id='$id'");

	echo '<script>alert("Ubah Data Berhasil")</script>';
	echo '<script>window.location="datapengguna.php"</script>';

?>