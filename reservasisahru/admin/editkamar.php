<?php 

include 'koneksi.php';

$id 	= $_POST['id'];
$jenis	= $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$harga	= $_POST['harga'];

$query = mysqli_query($koneksi,"UPDATE kamar SET jenis='$jenis', jumlah='$jumlah', harga='$harga' WHERE id='$id'");

	echo '<script>alert("Ubah Data Berhasil")</script>';
	echo '<script>window.location="datakamar.php"</script>';

?>