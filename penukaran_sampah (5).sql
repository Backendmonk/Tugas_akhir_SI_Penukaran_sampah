-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 06:09 AM
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
-- Table structure for table `cash_flow`
--

DROP TABLE IF EXISTS `cash_flow`;
CREATE TABLE `cash_flow` (
  `id_flow` varchar(100) NOT NULL,
  `Jumlah_uang_keluar` varchar(100) NOT NULL,
  `id_penukaran` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cash_flow`
--

INSERT INTO `cash_flow` (`id_flow`, `Jumlah_uang_keluar`, `id_penukaran`, `tanggal`) VALUES
('5538', '32000', '6285', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penukaran_sampah`
--

DROP TABLE IF EXISTS `tb_penukaran_sampah`;
CREATE TABLE `tb_penukaran_sampah` (
  `id_penukaran` varchar(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `jenis_emoney` varchar(100) NOT NULL,
  `nomer` varchar(100) NOT NULL,
  `jml_redem` varchar(100) NOT NULL,
  `jumlah_uang` varchar(100) NOT NULL,
  `status_approval` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penukaran_sampah`
--

INSERT INTO `tb_penukaran_sampah` (`id_penukaran`, `id_user`, `jenis_emoney`, `nomer`, `jml_redem`, `jumlah_uang`, `status_approval`, `tanggal`) VALUES
('6285', '13302 ', 'Gopay', '21432', '32', '32000', 'Approved', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poin`
--

DROP TABLE IF EXISTS `tb_poin`;
CREATE TABLE `tb_poin` (
  `id_user` varchar(100) NOT NULL,
  `akumulasi_poin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_poin`
--

INSERT INTO `tb_poin` (`id_user`, `akumulasi_poin`) VALUES
('13302 ', '3968'),
('72823', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap_sampah`
--

DROP TABLE IF EXISTS `tb_rekap_sampah`;
CREATE TABLE `tb_rekap_sampah` (
  `id` varchar(100) NOT NULL,
  `id_sampah` varchar(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `jumlah_Kg` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rekap_sampah`
--

INSERT INTO `tb_rekap_sampah` (`id`, `id_sampah`, `id_user`, `jumlah_Kg`, `tanggal_masuk`) VALUES
('8569', '59988', '13302 ', '1000', '2023-07-02');

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
-- Table structure for table `tb_sampah_user`
--

DROP TABLE IF EXISTS `tb_sampah_user`;
CREATE TABLE `tb_sampah_user` (
  `id_user` varchar(100) NOT NULL,
  `id_sampah` varchar(100) NOT NULL,
  `jumlah_sampah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sampah_user`
--

INSERT INTO `tb_sampah_user` (`id_user`, `id_sampah`, `jumlah_sampah`) VALUES
('13302 ', '59988', '1000');

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
('27181', 'uang', '141000', 'Rp', 'uang');

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
('13302', 'arya', 'dawas', 'user@email.com', 'laki-laki', '219038', '12345', 'pengguna'),
('19731', 'arya Pratama Putra', 'Dawas Sari', 'aryapratamaputra888@gmail.com', 'laki-laki', '098783921', '123456', 'petugas'),
('3421', 'Gede', 'Badung', 'ketua@email.com', 'Laki-Laki', '0826261836187', 'ketua', 'Ketua'),
('72823', 'dsa', 'dsa', 'aryatest@email.com', 'laki-laki', '213', '123456', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`id_flow`);

--
-- Indexes for table `tb_penukaran_sampah`
--
ALTER TABLE `tb_penukaran_sampah`
  ADD PRIMARY KEY (`id_penukaran`);

--
-- Indexes for table `tb_rekap_sampah`
--
ALTER TABLE `tb_rekap_sampah`
  ADD PRIMARY KEY (`id`);

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
