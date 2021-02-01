-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2021 pada 15.36
-- Versi server: 8.0.21
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuahbubuce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `harga_per` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama_barang`, `harga`, `harga_per`) VALUES
(1000, 'Anggur', '20000', '1/2 Kg'),
(1001, 'Apel', '50000', '1 Kg'),
(1002, 'Durian', '100000', '1 Kg'),
(1003, 'Nanas', '24500', '1 Kg'),
(1004, 'Jambu', '30560', '1 Kg'),
(1005, 'Mangga', '120000', '2 Kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pegawai`
--

CREATE TABLE `tabel_pegawai` (
  `id_pegawai` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`id_pegawai`, `fullname`, `alamat`, `email`, `phone`, `gender`) VALUES
(2000, 'Dekrit Tanesib', 'Anthiokia, Eropa', 'dekrit@gmail.com', '09764527123', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_penjualan` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `id_barang` int NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `total_belanja` decimal(10,0) NOT NULL,
  `waktu_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_penjualan`, `id_pelanggan`, `id_barang`, `nama_barang`, `total_belanja`) VALUES
(3000, 4000, 1002, 'Durian', '100000'),
(3001, 4000, 1005, 'Mangga', '120000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `fullname`, `username`, `address`, `email`, `password`, `phone`, `gender`, `role`) VALUES
(4000, 'Yoel Yolanda Oly', 'yoel', 'Pegending, Badung', 'yoel@gmail.com', '202cb962ac59075b964b07152d234b70', '081111111222', 'Laki - Laki', 1),
(4001, 'Yoyakim Pratama Oly', 'kim', 'Pegending, Badung', 'kim@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '09764527123', 'Laki - Laki', 0),
(4002, 'Rivaldo Bagus', 'aldo', 'Jln. Badak Agung, Renon, Denpasar, Bali', 'foo@gmail.com', '202cb962ac59075b964b07152d234b70', '0811236421132', 'Laki - Laki', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT untuk tabel `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;

--
-- AUTO_INCREMENT untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  MODIFY `id_penjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
