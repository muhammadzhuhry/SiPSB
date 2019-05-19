<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Unicode -->
    <meta charset="UTF-8">
    <!-- IE Compatiblity -->
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Description -->
    <meta name="description" content="">
    <!-- Page Keywords -->
    <meta name="keywords" content="">
    <!-- Site Author -->
    <meta name="author" content="zuhri">

    <!-- Title Of template -->
    <title>PSB - Pesantren Imam Syafi'i | Homepage</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/user/frontend/img/fav.ico">

    <!-- Google fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Google Font Titillium Web  -->  
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <!-- Load CSS Files -->
    <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/icomoon/icomoon.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.css">
    <script src="<?php echo base_url() ?>assets/user/frontend/js/lib/jquery.min.js"></script>

    <link href="<?php echo base_url() ?>assets/user/frontend/css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- Start Navigation -->
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role=navigation"">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a data-scroll href="<?php echo site_url('user/frontend/tampilan_utama/beranda'); ?>" class="navbar-brand"><img src="<?php echo base_url() ?>assets/user/frontend/img/Logo-pis.jpg" class="img-circle" alt="Logo"></a>

            </div>

        <!-- Main Nav -->
        <?php
            $halaman = $this->uri->segment(4);
        ?>
        <div class="navbar-collapse collapse navbar-primary" role="navigation">
            <ul class="nav navbar-nav navbar-left">
                <li <?php if ($halaman == 'beranda') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/beranda'); ?>"><span class="fa fa-home" aria-hidden="true"></span> BERANDA</a></li>
                <li <?php if ($halaman == 'peserta') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/peserta'); ?>"><span class="fa fa-address-card-o" aria-hidden="true"></span> PESERTA</a></li>
                <li <?php if ($halaman == 'pendaftaran') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/pendaftaran'); ?>"><span class="fa fa-pencil" aria-hidden="true"></span> PENDAFTARAN</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-info-circle" aria-hidden="true"></span> INFORMASI <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if ($halaman == 'informasi_prosedur') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/informasi_prosedur'); ?>" target="_blank">Prosedur</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php if ($halaman == 'informasi_jadwal') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/informasi_jadwal'); ?>" target="_blank">Jadwal</a></li>
                    </ul>
                </li>

                <li <?php if ($halaman == 'bantuan') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/bantuan'); ?>"><span class="fa fa-question-circle-o" aria-hidden="true"></span> BANTUAN</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($halaman == 'halaman_login') {echo "class='active'";} ?>><a href="<?php echo site_url('user/frontend/tampilan_utama/halaman_login') ?>"><span class="fa fa-key" aria-hidden="true"></span> LOGIN</a></li>
            </ul>
        </div>

        </div>
    </nav>
    <!-- /End Navigation -->
    
    <!-- ini buat spasi antara navbar dan section selanjutnya -->
    <div class="margin-bottom-100"></div>

    <!-- ini konten dinamis -->
    <?php echo $contents; ?>
    <!-- /end konten dinamis -->

    <!-- Start Footer -->
    <!-- <footer id="footer" class="footer">
        <p>&copy; copright 2017. create by Zuhri. All Right Reserved.</p>
    </footer> -->
    <!-- /End Footer -->

    <!-- Start Footer -->
    <div id="footer" class="footer">

        <div class="container padding-top-50">
            <div class="row">

                <div class="col-md-6 tentang">
                    <h4>Tentang</h4>
                    <p>Pesantren Imam Syafi'i adalah sebuah pesantren yang berada dibawah naungan Yayasan Lajnah Khairiyah Musytarakah dan terletak di Nanggroe Aceh Darusalam (NAD).</p>
                    <div class="social">
                        <a href="#" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

                        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-md-6 profile">
                    <h4>Profile</h4>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@pesantrenimamsyafii.sch.id">info@pesantrenimamsyafii.sch.id</a></p>
                    <p><i class="fa fa-home" aria-hidden="true"></i> Jl. Banda Aceh – Medan Km. 16.5, Aceh Besar, Indonesia</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>  <a href="tel:06517556100">0651-7556-100</a></p>
                </div>
                
            </div>
        </div>

        <hr>

        <div class="container  copyright">
            <p>
                &copy; copright 2018. create by Zuhri. All Right Reserved.
                <span class="login-admin"><a href="<?php echo site_url('login') ?>">Login</a></span>
            </p>
        </div>

    </div>
    <!-- /End Footer -->

    <!-- Load Js Core Files -->
    
    <script src="<?php echo base_url() ?>assets/user/frontend/js/lib/bootstrap/bootstrap.min.js"></script>

</body>

</html>