<?php 
	include 'koneksi.php';

	if(isset($_GET['idu'])){
		$delete = mysqli_query($koneksi, "DELETE FROM pengguna WHERE id = '".$_GET['idu']."' ");
		echo '<script>window.location="datapengguna.php"</script>';
	}
?>