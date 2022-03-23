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
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="dashboard.php">home</a></li>
                                        <li><a class="active" href="rooms.php">rooms</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="dashboard.php">
                                    <img src="img/Logo_dreams.png" width="85px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="main-menu  d-none d-lg-block">
                                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 25px"><?php echo $_SESSION['nama']; ?>
                                    <img src="img/<?php echo $_SESSION['gambar']; ?>" class="rounded-circle me-lg-2" alt="" style="width: 40px; height: 40px; margin-left: 15px;">
                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3>Dreams Room</h3>
    </div>
    <!-- bradcam_area_end -->
    <br>
    <br>
    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Jenis Ruangan</h3>
                    </div>
                </div>
            </div>
            <div class="our-room-show">
                <div class="row">
            <?php
                include'../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from kamar");
                while($d = mysqli_fetch_array($data)){
                ?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <a href="images/<?php echo $d['gambar'] ?>" width="100px"><img src="/reservasisahru/gambar/<?php echo $d['gambar'] ?>" width="100px" alt=""></a>
                        </div>
                    <div class="room-desc">
                        <div class="room-name">
                            <h3><?php echo $d['jenis'];?></a></h3>
                        </div>
                        <div class="room-rent">
                            <h6>Rp <?php echo $d['harga'];?> / <label>Malam</label></h6>
                        </div>
                        <div class="room-name">
                            <h3><?php echo $d['fasilitas'];?></a></h3>
                        </div>
                        <br>
                        <div class="room-book">
                            <a href="booking.php?jenis=<?= $d['id']?>" class="book_now">Pesan Sekarang</a>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                    </div>
                </div>
            <?php
            }
            ?>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->
    <!-- forQuery_start -->
    <!-- forQuery_end-->
    <br>
    <br>
    <!-- footer -->
    <footer class="footer" >
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text" > No. 06, Jln. Arwana, Margaasih, <br>
                                    Kota Cimahi</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Reservation
                            </h3>
                            <p class="footer_text" >+62 857 9702 3477 <br>
                                    sakhruadrian001@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Navigation
                            </h3>
                            <ul>
                                <li><a href="dashboard.php">Home</a></li>
                                <li><a href="rooms.php">Rooms</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Ulasan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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