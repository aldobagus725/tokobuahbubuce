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
	$id = $_GET['id'];
		?>
<html>
    <head>
        <title>Beli</title>
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
                    <h1>Form Beli Barang</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="dashboard.php"><i class='fas fa-arrow-left' style='font-size:24px;color:black'></i></a>&nbsp;Form Barang</h3>
                        </div>
                        <form method="post">
                            <?php
                                $data = mysqli_query($config,"select * from tabel_barang where id_barang='$id'");
	                            while($d = mysqli_fetch_array($data)){
                            ?>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Nama Barang</span></div>
                                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $d["nama_barang"]?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Harga</span></div>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $d["harga"]?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Harga Per</span></div>
                                    <input type="text" name="harga_per" class="form-control" value="<?php echo $d["harga_per"]?>">
                                </div>
                                <input type="text" hidden name="id_barang" value="<?php echo $d["id_barang"]?>">
                                <input type="text" hidden name="id_pelanggan" value="<?php echo $_SESSION["pelanggan"]["id_user"]?>">
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="beli" value="Beli BARANG!" class="btn btn-primary btn-block"><br>
                            </div>
                            <?php
                                }
                            ?>
                        </form>
                            <?php
                                if(isset($_POST['beli'])){
                                    $nama_barang=$_POST["nama_barang"];
                                    $total_belanja=$_POST["harga"];
                                    $id_barang=$_POST["id_barang"];
                                    $id_pelanggan=$_POST["id_pelanggan"];
                                    $sql="insert into tabel_penjualan (id_pelanggan,id_barang,nama_barang,total_belanja) values 
                                    ('$id_pelanggan','$id_barang','$nama_barang','$total_belanja')";	
//                                    $result=mysqli_query($config,$sql);
                                    if ($result=mysqli_query($config,$sql)) {echo "<script>alert('Barang Berhasil Dibeli!');location = 'dashboard.php';</script>";}
                                    else {echo "<script>alert('Oops! Error occured');location='dashboard.php';</script>";}
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