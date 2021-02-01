<?php 
    include '../config.php';
    if(!isset($_SESSION)){session_start();}
    if (empty($_SESSION)) {
        echo "<script>alert('Silahkan login terlebih dahulu!');</script>";
        echo "<script>location='login.php';</script>";
    } elseif (!isset($_SESSION['admin'])) {
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center" style="padding: 50px 50px;">
                    <h1>Tambah Pegawai</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="dashboard.php"><i class='fas fa-arrow-left' style='font-size:24px;color:black'></i></a>&nbsp;Form Pegawai</h3>
                        </div>
                        <form method="post">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Nama Lengkap</span></div>
                                    <input type="text" name="fullname" class="form-control" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Alamat</span></div>
                                    <input type="text" name="alamat" class="form-control" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                    <input type="email" name="email" class="form-control" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">No Telp</span></div>
                                    <input type="text" name="phone" class="form-control" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Jenis Kelamin</span></div> &nbsp;
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki - Laki">
                                        <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="daftar_pegawai" value="Daftarkan Pegawai" class="btn btn-primary btn-block"><br>
                            </div>
                        </form>
                            <?php
                                if(isset($_POST['daftar_pegawai'])){
                                    $fullname=$_POST["fullname"];
                                    $alamat=$_POST["alamat"];
                                    $email=$_POST["email"];
                                    $phone=$_POST["phone"];
                                    $gender=$_POST["gender"];
                                    $sql="insert into tabel_pegawai (fullname,alamat,email,phone,gender) values 
                                    ('$fullname','$alamat','$email','$phone','$gender')";	
//                                    $result=mysqli_query($config,$sql);
                                    if ($result=mysqli_query($config,$sql)) {echo "<script>alert('Pegawai Berhasil Ditambahkan!');location = 'pegawai.php';</script>";}
                                    else {echo "<script>alert('Oops! Error occured');location='pegawai.php';</script>";}
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding:20px 20px">
            <div class="row">
                <div class="col text-center mx-auto">
                    <h6> Copyright 2021 &copy; WildHorse</h6>
                </div>
            </div>
        </div>
    </body>
        <script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/mdb.min.js"></script>
</html>