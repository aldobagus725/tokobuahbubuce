<?php
    include '../config.php';
    if(!isset($_SESSION)){session_start();}
    if (empty($_SESSION)) {
        echo "<script>alert('Silahkan login terlebih dahulu!');</script>";
        echo "<script>location='login.php';</script>";
    } elseif (!isset($_SESSION['pelanggan'])) {
        echo "<script>alert('403 Forbidden');</script>";
        echo "<script>location='../index.php';</script>";
        die;
    }
?>
<html>
    <head>
        <title>Welcome</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/tokobuah.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <style>
            a:hover{transition: .5s;}
            li.nav-item{color: white; font-size: 20px;padding: 7px 7px 7px 7px;}
            #beranda{
                background-image: url(../assets/img/beranda.jpg);
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
                    <h1 class="display-2 animated fadeInDown">Halo <?php echo $_SESSION["pelanggan"]["fullname"]?></h1>
                    <p class="animated fadeInUp" style="font-size:28px; line-height:1.9;">
                        Yuk Gas Meblanja bossku!<br>
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
                    <img src="../assets/img/fruit/anggur.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Anggur <br> Rp 20.000 per 1/2 kg</p>
                    <a href="beli.php?id=1000?>" class="btn btn-primary">Beli</a>
                </div>
                <div class="col text-center">
                    <img src="../assets/img/fruit/apel.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Apel <br> Rp 50.000 per 1 Kg </p>
                    <a href="beli.php?id=1001?>" class="btn btn-primary">Beli</a>
                </div>
                <div class="col text-center">
                    <img src="../assets/img/fruit/durian.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Durian <br> Rp 100.000 per 1 Kg </p>
                    <a href="beli.php?id=1002?>" class="btn btn-primary">Beli</a>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <img src="../assets/img/fruit/jambu.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Jambu <br> Rp 30.560 per 1 kg</p>
                    <a href="beli.php?id=1004?>" class="btn btn-primary">Beli</a>
                </div>
                <div class="col text-center">
                    <img src="../assets/img/fruit/mangga.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Mangga <br> Rp 120.000 per 2 Kg </p>
                    <a href="beli.php?id=1005?>" class="btn btn-primary">Beli</a>
                </div>
                <div class="col text-center">
                    <img src="../assets/img/fruit/Nanas.jpg" class="shadow-sm" width="100%">
                    <br>
                    <br>
                    <p>Nanas <br> Rp 24.500 per 1 Kg </p>
                    <a href="beli.php?id=1003?>" class="btn btn-primary">Beli</a>
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
                    <img src="../assets/img/stiki.jpg" class="img-responsive rounded-circle shadow p-3 mb-5 bg-white rounded" width="50%">
                </div>
                <div class="col align-self-center">
                    <table class="table table-borderless table-hover">
                        <tr>
                            <th><h4 style="font-weight:bold;">Nama Lengkap</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;">
                                    <?php echo $_SESSION["pelanggan"]["fullname"];?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th><h4 style="font-weight:bold;">Address</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;">
                                    <?php echo $_SESSION["pelanggan"]["address"];?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th><h4 style="font-weight:bold;">Email</h4></th>
                            <td>
                                <p class="text-justify" style="font-size:26px;line-height:1.5;">
                                    <?php echo $_SESSION["pelanggan"]["email"];?>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
        <script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/mdb.min.js"></script>
</html>