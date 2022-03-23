<?php 

include 'koneksi.php';

$id     = $_POST['id'];
$nama   = $_POST['nama_fas'];
$desk   = $_POST['deskripsi'];

$query = mysqli_query($koneksi,"UPDATE fasilitas SET nama_fas='$nama', deskripsi='$desk' WHERE id='$id'");

    echo '<script>alert("Ubah Data Berhasil")</script>';
    echo '<script>window.location="fasilitas.php"</script>';

?>