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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center" style="padding: 50px 50px;">
                    <h1>Login</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="index.php"><i class='fas fa-arrow-left' style='font-size:24px;color:black'></i></a>&nbsp;Form Login</h3>
                        </div>
                        <form method="post">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Username / Email</span></div>
                                    <input type="text" name="username" class="form-control" placeholder="contoh Joni26" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                    <input type="password" name="password" class="form-control" placeholder="password anda" required autofocus>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="login" value="Masuk!" class="btn btn-primary btn-block"><br>
                                Belum punya akun?<br><a href="register.php">Yuk daftar!</a>
                            </div>
                        </form>
                            <?php
                                if(isset($_POST['login'])){
                                    $username = mysqli_real_escape_string($config,$_POST['username']);
                                    $password = mysqli_real_escape_string($config,md5($_POST['password']));
                                    $query = "SELECT * FROM tabel_user WHERE (email='$username' OR username ='$username') AND password='$password'"; 
                                    $result = mysqli_query($config, $query); 
                                    $checker = mysqli_num_rows($result);
                                    if($checker>0){
                                        while($row = mysqli_fetch_array($result)){
                                            if($row["role"]==0){
                                                $queryTemp = $config->query("SELECT * FROM tabel_user WHERE (email='$username' OR username ='$username')");
                                                $akun = $queryTemp->fetch_assoc(); 
                                                $_SESSION['admin'] = $akun;
                                                header("location:admin/dashboard.php");
                                            }
                                            else if ($row["role"]==1){
                                                $queryTemp = $config->query("SELECT * FROM tabel_user WHERE (email='$username' OR username ='$username')");
                                                $akun = $queryTemp->fetch_assoc(); 
                                                $_SESSION['pelanggan'] = $akun;
                                                header("location:pelanggan/dashboard.php");
                                            }
                                        }
                                    }
                                    else{echo "<script>alert('Username atau password salah!');location='login.php';</script>";}
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