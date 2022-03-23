<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$jenis=mysqli_real_escape_string($koneksi,$_POST['jenis']);
	$jumlah=mysqli_real_escape_string($koneksi,$_POST['jumlah']);
	$harga=mysqli_real_escape_string($koneksi,$_POST['harga']);
	$n = $_FILES['gambar']['name'];
	$u = $_FILES['gambar']['size'];
	$e = $_FILES['gambar']['error'];
	$t = $_FILES['gambar']['tmp_name'];

	if($e === 4){
			echo '<script>alert("Pilih gambar terlebih dahulu")</script>';
			echo '<script>window.location="datakamar.php"</script>';
    	exit;
	}

	$valid = ['jpg','jpeg','png'];
	$eks = explode('.', $n);
	$eks = strtolower(end($eks));

	if(!in_array($eks, $valid)){
			echo '<script>alert("File yang diupload tidak dimengerti")</script>';
			echo '<script>window.location="datakamar.php"</script>';
    	exit;
	}

	if ($u > 10000000) {
		echo '<script>alert("File size terlalu besar")</script>';
		echo '<script>window.location="datakamar.php"</script>';
    	exit;
	}

	$nbaru = uniqid();
	$nbaru .= '.';
	$nbaru .= $eks;

	move_uploaded_file($t, '../gambar/'. $nbaru);


	$gambar= $nbaru;

	$data = mysqli_query($koneksi,"INSERT INTO kamar VALUES ('','$gambar','$jenis','$jumlah','$harga')");
	$query = mysqli_query($koneksi,"SELECT * FROM kamar");			

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil ditambah!');window.location='datakamar.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal ditambah!');window.location='datakamar.php'</script>";
    	exit;
	}
}

  ?>