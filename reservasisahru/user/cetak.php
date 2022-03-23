<?php 
session_start();


// jika tidak ada session pelanggan (belum login)
if (!isset($_SESSION['status_login']) OR empty($_SESSION['status_login']))
{ 
    echo '<script>alert("Silahkan Login")</script>';
        echo '<script>window.location="/reservasisahru/index.php"</script>';
        exit();
} 
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dreams</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo_dreams.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <div class="container">
        <div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert" style="margin-top: 20px">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
        berhasil booking kamar!
            <span aria-hidden="true"></span>
        </button>
          </div>
        </div>
        <?php 



         ?>
          <table class="table table-hover" border="1">

            <tr>
              <th>#</th>
              <th>Check-in</th>
              <th>Check-out</th>
              <th>Jumlah kamar</th>
              <th>Tipe Kamar</th>
              <th>Nama</th>
              <th>Email</th>

            </tr>
            <?php 

            include '../koneksi.php';
            $nama=$_SESSION['nama'];
            $data = mysqli_query($koneksi,"SELECT * from transaksi WHERE nama = '$nama'");

            $no = 1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                        <td><?php echo $no++; ?></td> 
                        <td><?php echo $d['tgl_in']; ?></td>
                        <td><?php echo $d['tgl_out']; ?></td>
                        <td><?php echo $d['jumlah']; ?></td>
                        <td><?php echo $d['jenis']; ?></td>      
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        </tr>
                        <?php
            }
            ?>
            </table>
            <script>
              window.print()
            </script> 
            <a href="dashboard.php" class="btn btn-success">Keluar</a>            
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>