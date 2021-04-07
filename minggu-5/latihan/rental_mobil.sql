-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 03:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat_nomer` char(14) NOT NULL,
  `tahun_produksi` int(4) DEFAULT NULL,
  `harga_kendaraan` int(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat_nomer`, `tahun_produksi`, `harga_kendaraan`, `status`) VALUES
('AB 1221 CH', 2010, 180000000, 'Baik'),
('H 1234 AA', 2009, 150000000, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nomer_ktp` int(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `no_telpon` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id_sopir` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `no_telpon` int(12) DEFAULT NULL,
  `tipe_sim` char(1) DEFAULT NULL,
  `tarif` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kendaraan`
--

CREATE TABLE `tipe_kendaraan` (
  `id_tipe` int(16) NOT NULL,
  `tipe_kendaraannya` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(20) NOT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `rencana_tgl_kembali` date DEFAULT NULL,
  `rencana_jam_kembali` time DEFAULT NULL,
  `realisasi_tgl_kembali` date DEFAULT NULL,
  `realisasi_jam_kembali` time DEFAULT NULL,
  `denda` int(9) DEFAULT NULL,
  `km_pinjam` int(6) DEFAULT NULL,
  `km_kembali` int(6) DEFAULT NULL,
  `bbm_pinjam` int(3) DEFAULT NULL,
  `bbm_kembali` int(3) DEFAULT NULL,
  `kondisi_mobil_pinjam` char(6) DEFAULT NULL,
  `kondisi_mobil_kembali` char(6) DEFAULT NULL,
  `kerusakan` varchar(15) DEFAULT NULL,
  `biaya_kerusakan` int(9) DEFAULT NULL,
  `biaya_bbm` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat_nomer`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`nomer_ktp`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `tipe_kendaraan`
--
ALTER TABLE `tipe_kendaraan`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
