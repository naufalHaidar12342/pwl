-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 12:20 PM
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
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `kd_pribadi` char(3) NOT NULL,
  `panggilan` char(4) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenis_kelamin` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tamu`
--

CREATE TABLE `tabel_tamu` (
  `nomor` int(3) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_tamu`
--

INSERT INTO `tabel_tamu` (`nomor`, `nama`, `alamat`, `email`, `no_telpon`) VALUES
(1, 'Boy Trimoyo', 'ujungberung', 'boi_776@yahoo.com', '085613454789'),
(2, 'Wasmui', 'Jatimulyo', 'heheboiii420@gmail.com', '0845687989'),
(3, 'Sumarno', 'Surodadi', 'man@ymail.com', '082469823578');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`kd_pribadi`),
  ADD UNIQUE KEY `kd_pribadi` (`kd_pribadi`,`panggilan`);

--
-- Indexes for table `tabel_tamu`
--
ALTER TABLE `tabel_tamu`
  ADD PRIMARY KEY (`nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
