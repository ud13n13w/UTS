-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 03:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemrogramanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftarankursus`
--

CREATE TABLE `tbl_pendaftarankursus` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_pendaftaran` datetime NOT NULL,
  `kursus` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftarankursus`
--

INSERT INTO `tbl_pendaftarankursus` (`id_transaksi`, `tgl_pendaftaran`, `kursus`, `nama`, `umur`, `jenis_kelamin`, `alamat`, `email`, `nohp`) VALUES
(5, '2020-03-27 15:10:00', 'Desain Grafis', 'Muhammad Burhanuddin Fawwaz', 0, 'Laki-Laki', 'Perumahan Bluru Asri Indah A-20, Sidoarjo', 'burhan1908291@gmail.com', '082141771958'),
(6, '2020-03-27 15:11:26', 'Desain Grafis', 'Azharudin Hamidi', 0, 'Laki-Laki', 'Perum Mega Jaya Blok A-21', 'azharrocket@yahoo.com', '08951828192'),
(7, '2020-03-27 15:12:25', 'Fotografi', 'Muhammad Dani Rozain', 0, 'Laki-Laki', 'Lontar Menara Indah Blok B-29, Sidoarjo', 'danirozain@gmail.com', '087736261717'),
(8, '2020-03-27 15:13:15', 'Videografi', 'Habibi Faizal', 0, 'Laki-Laki', 'Jln Diponegoro No 29 A, Sidoarjo', 'habibifaizal29@gmail.com', '089538382727'),
(9, '2020-03-27 15:15:00', 'Broadcasting', 'Ibnu Hasan Fanani', 0, 'Laki-Laki', 'Sugihwaras III Blok G-29, Sidoarjo', 'ibnuhasanf@gmail.com', '08756473958'),
(10, '2020-03-27 15:16:21', 'Broadcasting', 'Aisyah Malik', 0, 'Perempuan', 'Perumahan Gunung Indah No 92', 'aisyahhaha@gmail.com', '08659182717'),
(11, '2020-03-27 15:16:57', 'Fotografi', 'Novi Budianto', 0, 'Laki-Laki', 'Perum Bulog Indonesia Blok B-2', 'novibudianto21@gmail.com', '085716271829'),
(12, '2020-03-27 15:20:00', 'Videografi', 'Martin Garrix', 0, 'Laki-Laki', 'Perum Batavia Blok AL-30', 'martingarrix@gmail.com', '085947338488'),
(13, '2020-03-27 15:20:42', 'Fotografi', 'Troye Siban', 0, 'Laki-Laki', 'Perumahan Kemiri Indah No 29', 'troyesiban@gmail.com', '087408809574'),
(14, '2020-03-27 15:21:28', 'Videografi', 'Lennon Stella', 0, 'Perempuan', 'Perum Pondok Buana No 102', 'lennonstella@gmail.com', '08684941723');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pendaftarankursus`
--
ALTER TABLE `tbl_pendaftarankursus`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pendaftarankursus`
--
ALTER TABLE `tbl_pendaftarankursus`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
