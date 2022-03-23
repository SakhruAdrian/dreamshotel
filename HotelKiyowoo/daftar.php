<?php 
include "config/koneksi.php";
include "config/function.php";

// <!-- Fungsi Registrasi -->



require_once "auth/header.php";
?>
<body>
<?php  

if( isset($_POST["registrasi"]))  {

  if( registrasi($_POST) > 0 ) {
    echo "<script>
    alert('User Baru Berhasil Ditambahkan')
    </script>";

  } else {
    echo mysqli_error($conn);
  }
}


?>
<?php 
include "auth/nav.php"; 
?>



    <section>
        
            <h3 class="mb-3 text-center pb-3 fw-bold" style="padding-top:5rem;"> REGISTRASI </h3>
            <div class="container">
        <div class="container col-md-6 shadow p-3 mb-5 bg-body rounded md-6" style="padding-top: 5rem ;">
            
            <form action="" method="POST" class="col-md">
              <div class="row g-3">
                <div class="col-11 mx-auto pt-3 text-start h5">
                <i class="fas fa-user"></i>
                    <label for="namalengkap" class="form-label mb-2"> Nama Lengkap</label>
                  <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="" required>
                </div>
    
    
                <div class="col-11 mx-auto text-start h5">
                <i class="fas fa-user"></i>
                    <label for="username" class="form-label mb-2"> Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="" required>
                  </div>
               
    
                <div class="col-11 mx-auto text-start h5">
                <i class="fas fa-key"></i>
                    <label for="password" class="form-label mb-2"> Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                </div>

                <div class="col-11 mx-auto text-start h5">
                <i class="fas fa-key"></i>
                    <label for="password2" class="form-label mb-2"> Konfirmasi Password</label>
                  <input type="password" class="form-control" id="password2" name="password2" placeholder="" required>
                </div>

                  <div class="col-11 mx-auto text-start h5">
                  <i class="fas fa-phone"></i>
                    <label for="no_tlpn" class="form-label mb-2"> No. Handphone</label>
                    <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" placeholder="" required>
                  </div>
    
                <div class="col-11 mx-auto text-start h5">
                <i class="fas fa-envelope"></i>
                  <label for="email" class="form-label mb-2"> E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                </div>

                <div class="col-11 mx-auto text-start h5">
                <i class="fas fa-location-dot"></i>
                  <label for="alamat" class="form-label mb-2"> Alamat</label>
                  <textarea class="form-control" id="email" cols="30" rows="5" placeholder="" name="alamat" required></textarea>
                </div>

                
                
              <h5 class="mt-4 mb-2 text-start ms-5" id="jk">Jenis Kelamin</h5>
    
              <div class="my-2 text-start">
                <div class="form-check" for="jk">
                  <input name="jk" value="Laki-laki" type="radio" class="form-check-input ms-3" checked required>
                  <label class="form-check-label ms-2">Laki-laki</label>
                </div>
                <div class="form-check" for="jk">
                  <input name="jk" value="Perempuan" type="radio" class="form-check-input ms-3" required>
                  <label class="form-check-label ms-2" for="jk">Perempuan</label>
                </div>
              </div>
    
            
    
              <input type="submit" class="btn btn-lg btn-warning col-6 mx-auto" value="Submit" name="registrasi"></input>
              
            
              <a href="login.php" class="text-center mb-4 col-12">Sudah Punya Akun?</a>
              </div>
            </form>
        </div>
      </div>
      
    </section>
<?php 
    require_once "auth/footer.php"
?>
</body>
</html>