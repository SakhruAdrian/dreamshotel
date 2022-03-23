<?php 
include '../koneksi.php';

$jenis = $_GET['jenis'];

if ($jenis=='Single Room') {

header("location:pesansingle.php");
}
else if ($jenis=='Twin Room') {

header("location:pesantwin.php");
}

else if ($jenis=='Deluxe Room') {

header("location:pesandeluxe.php");
}
else{
	header("location:dashboard.php");


}



?>