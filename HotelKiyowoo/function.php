<?php

    include('config/koneksi.php');

    //  Fungsi Registrasi
function registrasi($data) {
    global $conn;
    
        $nama = stripslashes($data["namalengkap"]);
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $no_tlpn = stripslashes($data["no_tlpn"]);
        $email = strtolower(stripslashes($data["email"]));
        $alamat = mysqli_real_escape_string($conn, $data["alamat"]);
        $jk = $_POST['jk'];
        $level = 'User';


        // Cek Username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result)) {
            echo "<script>
            alert('Username Sudah Terdaftar')
            </script>";
            return false;

        }



        // Cek Konfirmasi
        if( $password !== $password2 ) {
            echo"<script>
            alert('Konfirmasi Password Salah!!')
            </script>";
            return false;
        }
        // Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);


        // Tambah User Baru
        $sqlsimpan = mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$nama', '$username', '$password', '$no_tlpn', '$email', '$jk', '$alamat', '$level')");
        if($sqlsimpan){
            echo "<script> alert ('Data Berhasil Disimpan');
            </script>";
            header("Location: login.php");
        }
        else {
            echo "<script> alert ('Data Gagal Disimpan');</script>";
            header("location: daftar.php?pesan-gagal");
        } 

    
   
}

// function login($data) {
//     global $conn;

//     $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
//     $level= mysqli_query($conn, "SELECT * FROM tb_user WHERE");
//     // Cek username
//     if( mysqli_num_rows($result) === 1 ) {

//       // Cek Password
//       $row = mysqli_fetch_assoc($result);
//       if (password_verify($password, $row["password"]) ) ;
      
//        // Set Session
//        $_SESSION["login"] = true;
    
//     }
    
// function pesan($pesan){
//     global $conn;
//     $type_kamar
//     $chekin
//     $chekout
//     $jmlh_orng
// }

// function saran($saran){
//     global $conn;
//     $namap=$_POST['namap'];
//     $emailp=$_POST['emailp'];
//     $no_hp=$_POST['no_hp'];
//     $pesann=$_POST['pesann'];

//     $simpanpesan = mysqli_query($conn, "INSERT INTO saran Values ('$namap', '$emailp', '$no_hp', '$pesann')");
// }
// if($simpanpesan){
//     echo "<script>alert('Data Berhasil Dikirim');
//     window.location='indexsl.php?page=saran';
//     </script>";
// }
?>