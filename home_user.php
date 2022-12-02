<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="KOLL-TAG - Hotel and Bed&amp;Breakfast">
    <meta name="author" content="Ansonika">
    <title>Rekomendasi hotel</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/SYMBOL KU.png" type="image/x-icon">


    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" type="text/css" href="css/DateTimePicker.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" href="styl3.css">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
        if ($_SESSION['level'] == "user") {
            echo "  <br>";
            echo "  <br>";
        } else if ($_SESSION['level'] == "admin") {
            header('Location: home_admin.php');
        }
    }

    if (!isset($_SESSION['level'])) {
        echo "Anda tidak boleh mengakses halaman ini tanpa : ";
        echo "<a href='Login\login.php</a>";
        echo "<a href='Login\submit_register.php'>Register</a>";
    }

    ?>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->

    <!-- Header ================================================== -->
    <header>
        <div class="container">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="home.php" id="logo">
                    <img src="img/nm.png" width="700" height="300">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <ul id="lang_top">
                    <li><a href="login.php" class="active">Logout</a></li>

                </ul>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/bl.png" width="1000" height="500">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="home_user.php" class="show-submenu" style="color: #DDF7FF;">Home<i class=></i></a>
                        </li>
                        <li><a href="rekomen_user.php" style="color: #DDF7FF;">ruangan</a></li>
                </div><!-- End main-menu -->

            </nav>
        </div><!-- End row -->
        </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->

    <!-- SubHeader =============================================== -->
    <div class="parallax-window" id="booking" data-parallax="scroll" data-image-src="img/blue.png" data-natural-width="1400" data-natural-height="550">
        <div id="subheader_home">

            <input ref="input" type="search" role="combobox" aria-autocomplete="both" aria-owns="ssg-suggestions" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" name="sQuery" class="input horus__querytext" id="horus-querytext">
        </div>

    </div>
    </div><!-- End group_1 -->
    </div>
    </form>
    <div id="message-booking"></div>
    </div><!-- End book_container -->
    </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </div><!-- End parallax-window -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60_35">
        <h1 class="main_title"><em></em>SELAMAT DATANG DI KOLL TAG <span>Rekomendasi hotel di Kota Malang</span></h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="mosaic_container">
                    <img src="img/cure.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Large Bedroom</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12">
                    <div class="mosaic_container">
                        <img src="img/odor.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Nice Outdoor</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="img/mer.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Modern Bathroom</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="img/ijenn.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Wellness</span>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="img/mercure.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                    <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM tbl_rekomendasi WHERE kategori='Hotel1'";
                        $hasil = mysqli_query($db_koneksi, $query);
                        $data = mysqli_fetch_array($hasil);
                        if (!$data) {
                            echo "Data Kosong";
                        } else {
                            echo "<h3>" . $data['nama_hotel'] . "</h3>
                            <p>
                                Hotel bintang 4
                                <br>
                                " . $data['isi'] . ".";
                        }
                        ?>
                        <ul>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                    <div class="tooltip-content">
                                        King size bed
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                    <div class="tooltip-content">
                                        Shower
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                    <div class="tooltip-content">
                                        Plasma TV
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-md-push-5">
                <figure class="room_pic left"><a href="#"><img src="img/ijen.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-4 col-md-offset-1 col-md-pull-6">
                <div class="room_desc_home">
                    <h3 class="a">Ijen Suites Resort & Convention Malang </h3>
                    <p class="c">
                        Hotel bintang 4
                        <br>
                        Jl. Ijen Nirwana Raya Blok A No.16, Bareng, Kec. Klojen, Kota Malang, Jawa Timur 65116•(0341) 3301000
                    </p>
                    <ul>
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    King size bed
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                                <div class="tooltip-content">
                                    Bathtub
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    Plasma TV
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                <div class="tooltip-content">
                                    Safe box
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- End room_desc_home -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="img/haris.jpg" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>HARRIS Hotel and Conventions Malang </h3>
                        <p>
                            Hotel bintang 4
                            <br>
                            Jl. A Yani Utara, Jl. Riverside Blk. C No.1, Polowijen, Blimbing, Malang City, East Java 65126•(0341) 2992299
                        </p>
                        <ul>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                    <div class="tooltip-content">
                                        King size bed
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                                    <div class="tooltip-content">
                                        Bathtub
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                    <div class="tooltip-content">
                                        Plasma TV
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_1_icon-15"></i></span>
                                    <div class="tooltip-content">
                                        Welcome bottle
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tooltip_styled tooltip-effect-4">
                                    <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                    <div class="tooltip-content">
                                        Safe box
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
    </div><!-- End col-md-8 -->
    </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End promo_full_wp -->
    </div><!-- End promo_full -->
    </section><!-- End section -->

    <div id="dtBox"></div><!-- End datepicker -->
    <div class="container margin_60_35">
        <h2 class="main_title"><em></em>Komentar
            <?php
            include "Coneksi.php";
            $query_lihat = "SELECT * FROM tbl_komen ";
            $hasil = mysqli_query($db_koneksi, $query_lihat);
            $data = mysqli_fetch_array($hasil);
            ?>
            <h3>Lihat data</h3>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>Nama Komentator</th>
            <th>Komentar</th>
        </tr>
        <tr>
            <td><?php echo $data['id_komen'];?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['isi']; ?></td> 
        </tr>
    </table>

            <span>Silahkan beri tanggapan</span>
        </h2>
        </table>
        <div class="row add_top_20">
            <div class="col-md-7 col-md-offset-1" align="center" aria-hidden="true"></i>>
                <div id="message-contact"></div>
                <form method="POST" action="submit_komen.php">
                    <input type="hidden" name="id_komen">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label> Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama anda">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Komentar</label>
                                <textarea name="isi" class="form-control" placeholder="Masukkan Komentar" style="height:150px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row add_bottom_30">
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Kirim" class="btn_1">
                        </div>
                    </div>
                </form>
            </div><!-- End col-md-8 -->
        </div><!-- End row -->
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="img/nm.png" width="150" height="75 alt="" id=" nm" data-retina="true">
                    <ul id="contact_details_footer">
                        <li>Butuh bantuan? Hubungi kami
                            <br>
                            <br>- 0895344173441
                            <br>- 0878374910038
                            <br>- 9374939273849
                            <br>
                            <br>Senin - Minggu jam 9.00 - 24.00
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h3>Rekomendasi hotel</h3>
                    <ul>
                        <li><a href="rekomen.php">Rekomendasi</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <p>Copyright © 2022 KOLL-TAG</p>

                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="assets/validate.js"></script>
    <script src="js/functions.js"></script>

    <script type="text/javascript" src="js/DateTimePicker.js"></script>
    <script type="text/javascript">
        $("#dtBox").DateTimePicker();
    </script>
</body>

</html>