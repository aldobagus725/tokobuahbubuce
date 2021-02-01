<?php 
    include 'config.php';
    if(!isset($_SESSION)){session_start();} 
    if (isset($_SESSION['admin'])) {echo "<script>location='admin/dashboard.php';</script>";die;} 
    elseif (isset($_SESSION['pelanggan'])) {echo "<script>location='pelanggan/dashboard.php';</script>";die;}
?>
<html>
    <head>
        <title>Welcome</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/tokobuah.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <style>
            a:hover{transition: .5s;}
            li.nav-item{color: white; font-size: 20px;padding: 7px 7px 7px 7px;}
            #beranda{
                background-image: url(assets/img/beranda.jpg);
                height: 100%;
                background-repeat: no-repeat;background-size:cover;
            }
        </style>
    </head>
    <body>
        <?php include('header.php')?>
        <div class="container-fluid text-center" id="beranda">
            <div class="row" >
                <div class="col" style="color:white; padding-top:270px;">
                    <h1 class="display-2 animated fadeInDown">Toko Buah Bu Buce</h1>
                    <p class="animated fadeInUp" style="font-size:32px; line-height:1.9;">
                        Sehat Menyegarkan<br>
                        Kantong Tetap Aman!<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="container" id="produk" style="padding-top:50px;">
            <div class="row" style="padding-bottom:30px;">
                <div class="col text-center">
                    <h1>Toko Buah Bu Buce</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <img src="assets/img/1.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Menjual berbagai macam buah - buahan, <br>banyak pilihannya</p>
                </div>
                <div class="col text-center">
                    <img src="assets/img/2.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Buah dalam keadaaan segar, <br>langsung dipetik, langsung diantar!</p>
                </div>
                <div class="col text-center">
                    <img src="assets/img/3.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Transaksi lewat melalui <br>Transfer / Cash On Delivery</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container" id="profil">
            <div class="row">
                <div class="col text-center">
                    <h1>Profil</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center">
                    <img src="assets/img/stiki.jpg" class="img-responsive rounded-circle shadow p-3 mb-5 bg-white rounded" width="90%">
                </div>
                <div class="col align-self-center">
                    <img src="assets/img/pp2.jpeg" class="img-responsive rounded-circle shadow p-3 mb-5 bg-white rounded" width="90%">
                </div>
                <div class="col align-self-center">
                    <table class="table table-borderless table-hover">
                        <tr>
                            <th><h4 style="font-weight:bold;">Nama Lengkap</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;">
                                    Yoel Yolanda Oly
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th><h4 style="font-weight:bold;">Birthplace &amp; Date</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;">
                                    Denpasar 30 Juni 2001
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th><h4 style="font-weight:bold;">NIM</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;line-height:1.5;">
                                    19104234
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mdb.min.js"></script>
</html>