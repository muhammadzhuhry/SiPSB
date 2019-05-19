<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url() ?>assets/user/frontend/img/fav.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/user/frontend/img/fav.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>PSB - Pesantren Imam Syafi'i | Dashboard Peserta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- own style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url() ?>assets/user/backend/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: 'http://localhost/pis_psb/'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url() ?>assets/user/backend/css/dashboard.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>assets/user/backend/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url() ?>assets/user/backend/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>assets/user/backend/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url() ?>assets/user/backend/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>assets/user/backend/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url() ?>assets/user/backend/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <!-- <img src="<?php echo base_url() ?>assets/user/backend/demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo"> -->
                <img src="<?php echo base_url() ?>assets/user/frontend/img/Logo-pis.jpg" class="header-brand-img"  alt="img-logo"> PSB - Pesantren Imam Syafi'i
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none">
                    <span class="avatar" style="background-image: url(<?php echo base_url(); ?>assets/image/student.png)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php echo $this->session->userdata('nama'); ?></span>
                      <small class="text-muted d-block mt-1">Peserta</small>
                    </span>
                  </a>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <?php
                    $halaman = $this->uri->segment(3);
                  ?>
                  <li class="nav-item">
                    <a href="<?php echo site_url('user/backend/prosedur') ?>" class="nav-link <?php if ($halaman == 'prosedur') {echo "active";} ?>"><i class="fe fe-book-open"></i> Prosedur</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('user/backend/form_biodata') ?>" class="nav-link <?php if ($halaman == 'form_biodata') {echo "active";} ?>"><i class="fe fe-file-text"></i> Form Biodata</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="<?php echo site_url('user/backend/rekening') ?>" class="nav-link <?php if ($halaman == 'rekening') {echo "active";} ?>"><i class="fe fe-credit-card"></i> Info Rekening</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="<?php echo site_url('user/backend/upload_berkas') ?>" class="nav-link <?php if ($halaman == 'upload_berkas') {echo "active";} ?>"><i class="fe fe-upload-cloud"></i> Upload Berkas</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="<?php echo site_url('user/backend/cetak_kartu') ?>" class="nav-link <?php if ($halaman == 'cetak_kartu') {echo "active";} ?>"><i class="fe fe-printer"></i> Cetak Kartu</a>
                  </li>
                </ul>
              </div>
              <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                <li class="nav-item">
                    <a href="<?php echo site_url('user/backend/login_peserta/process_logout') ?>" class="nav-link"><i class="fe fe-log-out"></i> Sign Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <!-- ini konten dinamis -->
            <?php echo $contents; ?>
          <!-- /end konten dinamis -->
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 PSB - Pesantren Imam Syafi'i made by <a href=".">Zuhri</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>