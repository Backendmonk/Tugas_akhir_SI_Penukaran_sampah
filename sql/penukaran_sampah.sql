-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 02:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penukaran_sampah`
--
CREATE DATABASE IF NOT EXISTS `penukaran_sampah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `penukaran_sampah`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penukaran_sampah`
--

DROP TABLE IF EXISTS `tb_penukaran_sampah`;
CREATE TABLE `tb_penukaran_sampah` (
  `id_penukaran` varchar(100) NOT NULL,
  `status_approval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penukaran_sampah`
--

INSERT INTO `tb_penukaran_sampah` (`id_penukaran`, `status_approval`) VALUES
('23198', 'belum'),
('2131241', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sampah`
--

DROP TABLE IF EXISTS `tb_sampah`;
CREATE TABLE `tb_sampah` (
  `id_sampah` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah_poin_per_kg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sampah`
--

INSERT INTO `tb_sampah` (`id_sampah`, `nama`, `jumlah_poin_per_kg`) VALUES
('10365', 'Sampah Botol', '4'),
('59988', 'Sampah Kaleng', '4'),
('84547', 'Sampah Kardus', '2'),
('88033', 'Sampah Plastik', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

DROP TABLE IF EXISTS `tb_stok`;
CREATE TABLE `tb_stok` (
  `id_stok` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah_stok` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `jenis_stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`id_stok`, `nama`, `jumlah_stok`, `satuan`, `jenis_stok`) VALUES
('27181', 'uang', '7000000', 'Rp', 'uang'),
('78611', 'Beras', '89', 'KG', 'Barang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telepon`, `password`, `hak_akses`) VALUES
('001213', 'Wayan Pratama', 'Kuta Utara', 'wayanaryapratamaputra888@gmail.com', 'Laki-laki', '0887812731', 'wayan', 'pengguna'),
('19731', 'arya Pratama Putra', 'Dawas Sari', 'aryapratamaputra888@gmail.com', 'laki-laki', '098783921', '123456', 'petugas'),
('3421', 'Gede', 'Badung', 'ketua@email.com', 'Laki-Laki', '0826261836187', 'ketua', 'Ketua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
