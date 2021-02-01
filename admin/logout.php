<?php
	include '../config.php';
    session_start();
    session_destroy();
    unset($_SESSION['admin']);
    echo "<script>alert('Kamu telah keluar!');</script>";
    echo "<script>location='../index.php';</script>";
?>