<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$nama 		= $_POST['nama'];
$email 		= $_POST['email'];
$password	= md5($_POST['password']);

// Proses ganti password
$password = $password;

// simpan akun ke tabel tamu
$koneksi->query("INSERT INTO pengguna(nama,email,password) VALUES ('$nama','$email','$password')");

echo '<script>alert("Anda telah daftar")</script>';
echo '<script>window.location="index.php"</script>';
?>