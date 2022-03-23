<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
  
// berfungsi menangkap data yang dikirim
$email = $_POST['email'];
$pass = md5($_POST['password']);

// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE email='$email' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql); 

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
    $data = mysqli_fetch_array($sql);
    $_SESSION['status_login']   = true;
            $_SESSION['id']     = $data['id'];
            $_SESSION['nama']   = $data['nama'];
            $_SESSION['email']  = $data['email'];
            $_SESSION['gambar'] = $data['gambar'];
            $_SESSION['akses']  = $data['akses'];
    // berfungsi mengecek jika user login sebagai admin
    if($data['akses']=="Admin"){
        // berfungsi membuat session
        $_SESSION['nama'] =  $data['nama'];
        $_SESSION['gambar'] = $data['gambar'];
        $_SESSION['akses'] = "Admin";
        //berfungsi mengalihkan ke halaman admin
        header("location:admin/index.php");
    // berfungsi mengecek jika user login sebagai moderator
    }else if($data['akses']=="Petugas"){
        // berfungsi membuat session
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['akses'] = "Petugas";
        // berfungsi mengalihkan ke halaman moderator
        header("location:petugas/index.php");

    }else if($data['akses']=="User"){
        // berfungsi membuat session
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['akses'] = "User";
        // berfungsi mengalihkan ke halaman moderator
        header("location:user/dashboard.php");

    }else{
        // berfungsi mengalihkan alihkan ke halaman login kembali
        echo '<script>alert("Username atau password anda salah")</script>';
        echo '<script>window.location="index.php"</script>';
    }   
}else{
      echo '<script>alert("Username atau password anda salah")</script>';
      echo '<script>window.location="index.php"</script>';
}
?>