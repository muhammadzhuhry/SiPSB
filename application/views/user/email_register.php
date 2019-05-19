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
    <title>PPDB - Pesantren Imam Syafi'i </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/user/frontend/img/fav.ico">

    <!-- Google fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Google Font Titillium Web  -->  
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <!-- Load CSS Files -->
    <!-- <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/user/frontend/css/lib/icomoon/icomoon.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.css">
    <script src="<?php echo base_url() ?>assets/user/frontend/js/lib/jquery.min.js"></script>

    <link href="<?php echo base_url() ?>assets/user/frontend/css/style-email.css" rel="stylesheet" type="text/css"> -->

    <link href="https://muhamadzhuhry.github.io/PSB-Template/email/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://muhamadzhuhry.github.io/PSB-Template/email/css/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://muhamadzhuhry.github.io/PSB-Template/email/css/lib/icomoon/icomoon.css" rel="stylesheet" type="text/css">

    <script src="https://muhamadzhuhry.github.io/PSB-Template/email/js/lib/jquery.min.js"></script>

    <link href="https://muhamadzhuhry.github.io/PSB-Template/email/css/style-email.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    * {
    padding: 0;
    margin: 0;
}

body {
    overflow-x: hidden;
    font-family: 'Raleway', sans-serif;
}

ol, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

a {
    text-decoration: none;
    -webkit-transition: all 500ms ease-in-out;
    -moz-transition: all 500ms ease-in-out;
    -ms-transition: all 500ms ease-in-out;
    -o-transition: all 500ms ease-in-out;
    transition: all 500ms ease-in-out;
}

a, a:focus, a:hover {
    text-decoration: none;
    outline: 0;
}

.hr-style {
    border-top: 1px solid #8c8b8b;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Titillium Web', sans-serif;
}

/*===================================
            Margin & Padding
===================================*/

.padding-top-0  { padding-top: 0px !important;  }
.padding-top-10 { padding-top: 10px !important; }
.padding-top-20 { padding-top: 20px !important; }
.padding-top-30 { padding-top: 30px !important; }
.padding-top-50 { padding-top: 50px !important; }
.padding-top-80 { padding-top: 80px !important; }

.padding-bottom-0  { padding-bottom: 0px !important;  }
.padding-bottom-10 { padding-bottom: 10px !important; }
.padding-bottom-20 { padding-bottom: 20px !important; }
.padding-bottom-30 { padding-bottom: 30px !important; }
.padding-bottom-50 { padding-bottom: 50px !important; }
.padding-bottom-80 { padding-bottom: 80px !important; }

.margin-top-0   { margin-top: 0px !important;  }
.margin-top-10  { margin-top: 10px !important; }
.margin-top-20  { margin-top: 20px !important; }
.margin-top-30  { margin-top: 30px !important; }
.margin-top-50  { margin-top: 50px !important; }
.margin-top-80  { margin-top: 80px !important; }
.margin-top-100 { margin-top: 100px !important; }

.margin-bottom-0   { margin-bottom: 0px !important;  }
.margin-bottom-10  { margin-bottom: 10px !important; }
.margin-bottom-20  { margin-bottom: 20px !important; }
.margin-bottom-30  { margin-bottom: 30px !important; }
.margin-bottom-50  { margin-bottom: 50px !important; }
.margin-bottom-80  { margin-bottom: 80px !important; }
.margin-bottom-100 { margin-bottom: 100px !important; }

/*===================================
                Navbar
===================================*/

.navbar {
    border: 0;
    margin-bottom: 0;
    font-family: 'Lato', sans-serif;
    border-bottom: 3px solid #ffa500 !important; /*second-colour*/
    font-size: 12px;
    letter-spacing: 1px;
    background-color: #1e5474; /*base-colour*/
}

.navbar-brand {
    padding: 0px;
}

.navbar-brand > img {
    height: 100%;
    padding: 3px;
    width: auto;
}

.navbar a {
    color: #e0e0e0 !important;
    opacity: 1;
    border-bottom: 2px solid transparent !important;
}

.navbar a:hover {
    opacity: 1;
    color:  #ffa500 !important; /*second-colour*/
}

/*.navbar-nav li .dropdown-menu { 
    background-color: #080808;
    color: #ffffff;
    font-size: 12px;
}*/

.dropdown-menu li a {
    color: #333333 !important;
    font-size: 12px;
}

.dropdown-menu li a:hover {
    background-color: transparent;
}

.navbar-nav li.active a {
     color:  #ffa500 !important;
     border: none;
     background-color: transparent !important;
}

@media(max-width: 768px) {
    .navbar-brand {
        margin-left: 10px;
    }

    .dropdown-menu li a {
        color: #e0e0e0 !important;
    }
}

.header {
    text-align: center;
}

.header img {
    width: 60px;
    height: 60px;
}

.header p {
    font-size: 25px;
}

/*.btn-login {
  margin:auto;
  display:block;
}*/

.img-nomor {
    width: 250px;
    height: 50px;
}

.text-red {
    color: #dd4b39 !important
}

.btn-login {
   background: #3c8dbc; /*base-colour*/
   border: 2px solid #3c8dbc; /*base-colour*/
   border-radius: 0px;
   font-size: 14px;
   width:200px;
   color: #ffffff !important;
   margin: 5px 5px 5px 5px;
   padding: 13px 20px 10px 20px;
   -webkit-transition: 0.5s;
   -moz-transition: 0.5s;
   transition: 0.5s; 
}

.btn-login:hover {
   background: #3c8dbc; /*base-colour*/
   border: 2px solid #3c8dbc; /*base-colour*/
   color: #ffffff !important;
   -webkit-transition: 0.5s;
   -moz-transition: 0.5s;
   transition: 0.5s; 
}

</style>

</head>

<body>
	
	<section class="header margin-top-10">
		<div class="container">
            <div class="row">
            
                <p class="text-header"> <img src="https://muhamadzhuhry.github.io/PSB-Template/email/img/logo-pis.jpg"" class="logo" alt="logo-pis"> PSB | Pesantren Imam Syafi'i</p>
                
            </div>      
        </div>
	</section>

	<div class="container">
        <hr class="hr-style">   
    </div>

    <section>
        <div class="container">
            
                <h4>Assalamualaikum warahmatullahi wabarakatuh, <?php echo $pendaftaran['nama']; ?></h4>
                <p align="justify">Sebelumnya, kami ucapkan terimakasih karena sudah mendafatarkan diri anda di sistem PSB - Pesantren Imam Syafi'i, Berikut ini adalah informasi yang digunakan untuk dapat login ke dalam sistem ini: </p>

                <br>

                <table  class="table table-striped table-bordered" align="center">
                    <tr>
                        <td>Email</td>
                        <td>: <?php echo $pendaftaran['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>: <?php echo $pass; ?></td>
                    </tr>
                </table>

                <p align="justify">Untuk prosedur yang lebih lengkap anda dapat melihat di halaman prosedur setelah login nanti, klik tombol dibawah untuk login</p>
                <button class="btn btn-primary btn-login"><span class="fa fa-key" aria-hidden="true"></span> LOGIN</button>

                <div class="margin-top-10"></div>

                <p class="text-red">Apabila memiliki pertanyaan dapat menghubungi admin via wa di nomor :</p>
                <img src="https://muhamadzhuhry.github.io/PSB-Template/email/img/nomor.png" class="img-nomor img-responsive" alt="img-nomor">
            
        </div>
    </section>

	<div class="container">
        <hr class="hr-style">   
    </div>

    <section>
        <div class="container">  
            <p><i class="fa fa-home" aria-hidden="true"></i> Jl. Banda Aceh – Medan Km. 16.5, Aceh Besar, Indonesia</p>        
            <p><i class="fa fa-phone" aria-hidden="true"></i>  <a href="tel:06517556100">0651-7556-100</a></p>
        </div>
    </section>

</body>

</html>