<?php 
session_start();

if( isset($_SESSION["login"])) {
  header("Location: tamu/index.php");
  exit;
}


  //  Koneksi
include "config/koneksi.php";
  
  // Fungsi Login
if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    
    // Cek username
    if( mysqli_num_rows($result) === 1 ) {

      // Cek Password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"]) ) ;
      
        // Set Session
        $_SESSION["login"] = true;
        // $levels = mysqli_query($conn, "SELECT * FROM tb_user WHERE level = 'tamu'");
        // if( mysqli_num_rows($levels)===1){
        //   $level = mysqli_fetch_assoc($levels);
        //   header("Location: tamu/index.php");
        // }

        header("Location: tamu/index.php");
        exit;
      
    }

    $error = true;  
    
    
}
?>

<?php
  require_once "auth/header.php";

?>
<body>

<?php if( isset($error)) : ?>
      <script>
        alert ('Username atau Password Salah')
      </script>
<?php endif; ?>

<?php 
include "auth/nav.php"; 
?>



<center>
    <main class="form-signin" style="padding-top: 13rem; padding-bottom: 13rem;">
      <div class="shadow p-3 mb-5 bg-body rounded md-8" >
        <form action="" method="POST" >
          <h1 class="h3 mb-3 fw-bold text-center">Login</h1>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" value="" required/>
            <label for="floatingInput">Username/Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
            <label for="floatingPassword">Password</label>
          </div>

          <div class="btn">
            <button type="submit" class="btn btn-warning fw-bold" name="login" id="login">
            Login
            </button>
          </div>
          <a href="daftar.php" class="h6 text-info text-center">
            <h6>Belum Punya Akun?, Daftar disini</h6></a>
        </form>

      </div>
    </main>
    </center>
<?php 
    require_once "auth/footer.php"
?>
</body>
</html>