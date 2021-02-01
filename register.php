<?php 
    include 'config.php';
    if(!isset($_SESSION)){session_start();} 
    if (isset($_SESSION['admin'])) {echo "<script>location='../admin/dashboard.php';</script>";die;} 
    elseif (isset($_SESSION['pelanggan'])) {echo "<script>location='../pelanggan/dashboard.php';</script>";die;}
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center" style="padding: 50px 50px;">
                    <h1>Daftar Jadi Pelanggan</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="index.php"><i class='fas fa-arrow-left' style='font-size:24px;color:black'></i></a>&nbsp;Form Daftar</h3>
                        </div>
                        <form method="post">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Username</span></div>
                                    <input type="text" name="username" class="form-control" placeholder="contoh Joni26" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                    <input type="password" name="password" class="form-control" placeholder="password anda" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Nama Lengkap</span></div>
                                    <input type="text" name="fullname" class="form-control" placeholder="Nama lengkap anda" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Alamat</span></div>
                                    <input type="text" name="address" class="form-control" placeholder="Alamat Lengkap rumah anda" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                    <input type="email" name="email" class="form-control" placeholder="Email anda" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Nomor telepon</span></div>
                                    <input type="text" name="phone" class="form-control" placeholder="No telp anda" required autofocus>
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
                                <input hidden type="text" name="role" value="1">
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="register" value="Daftar!" class="btn btn-primary btn-block"><br>
                                Sudah punya akun?<br><a href="login.php">Langsung login!</a>
                            </div>
                        </form>
                            <?php
                                if(isset($_POST['register'])){
                                    $username=$_POST["username"];
                                    $fullname=$_POST["fullname"];
                                    $address=$_POST["address"];
                                    $email=$_POST["email"];
                                    $phone=$_POST["phone"];
                                    $password=md5($_POST["password"]); 
                                    $gender=$_POST["gender"];
                                    $role=$_POST["role"]; 
                                    $sql="insert into tabel_user (fullname,username,address,email,password,phone,gender,role) values 
                                    ('$fullname','$username','$address','$email','$password','$phone','$gender','$role')";	
//                                    $result=mysqli_query($config,$sql);
                                    if ($result=mysqli_query($config,$sql)) {echo "<script>alert('Pendaftaran anda berhasil!, silahkan login!.');location = 'login.php';</script>";}
                                    else {echo "<script>alert('Oops! Error occured');location='register.php';</script>";}
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
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mdb.min.js"></script>
</html>