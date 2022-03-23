<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include '../koneksi.php';
 
if (!isset($SESSION['loginproses'])){

	$cekin = $_POST['tgl_in'];
	$cekout = $_POST['tgl_out'];
	$jumlah = $_POST['jumlah'];
	$jenis = $_POST['jenis'];	
	$nama = $_SESSION['nama'];
	$email = $_SESSION['email'];
}
// simpan cekin ke tabel tamu
$koneksi->query("INSERT INTO transaksi VALUES ('','$cekin','$cekout','$jumlah','$jenis','$nama','$email','Cek In')");

echo '<script>alert("Anda telah check in")</script>';
echo '<script>window.location="sdhpesan.php"</script>';
?>