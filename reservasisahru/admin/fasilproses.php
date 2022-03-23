<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$nama_fas=mysqli_real_escape_string($koneksi,$_POST['nama_fas']);
	$deskripsi=mysqli_real_escape_string($koneksi,$_POST['deskripsi']);
	$n = $_FILES['gambar']['name'];
	$u = $_FILES['gambar']['size'];
	$e = $_FILES['gambar']['error'];
	$t = $_FILES['gambar']['tmp_name'];

	if($e === 4){
		echo "<script>alert('Pilih gambar terlebih dahulu!');window.location='javascript:history.back()'</script>";
    	exit;
	}

	$valid = ['jpg','jpeg','png'];
	$eks = explode('.', $n);
	$eks = strtolower(end($eks));

	if(!in_array($eks, $valid)){
		echo "<script>alert('file yang diupload tidak dimengerti!');window.location='javascript:history.back()'</script>";
    	exit;
	}

	if ($u > 10000000) {
		echo "<script>alert('file size terlalu besar!');window.location='javascript:history.back()'</script>";
    	exit;
	}

	$nbaru = uniqid();
	$nbaru .= '.';
	$nbaru .= $eks;

	move_uploaded_file($t, '../gambar/'. $nbaru);


	$gambar= $nbaru;

	$data = mysqli_query($koneksi,"INSERT INTO fasilitas VALUES ('','$gambar','$nama_fas','$deskripsi')");
	$query = mysqli_query($koneksi,"SELECT * FROM fasilitas");			

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil ditambah!');window.location='fasilitas.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal ditambah!');window.location='fasilitas.php'</script>";
    	exit;
	}
}

  ?>