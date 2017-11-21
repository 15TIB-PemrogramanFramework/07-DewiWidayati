-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 01:10 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almadani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `bahan`, `keterangan`, `harga`, `gambar`) VALUES
(8, 'Jilbab Maxmara', 'Royal Satin', 'Square 115*115', 'Rp 65.000', '1511080378.jpg'),
(9, 'Jilbab Maxmara', 'Royal Satin', 'Square 115*115', 'Rp 65.000', '1511081165.jpg'),
(11, 'Jilbab Maxmara', 'Royal Satin', 'Square 115*115', 'Rp 65.000', '1511081206.jpg'),
(13, 'Gamis Lafni', 'Misbee HQ', 'Panjang 132cm, lingkar dada 100-110cm, lengan 53cm, lebar leher 20cm, bahu 38cm, lebar bawah 120cm lingkar lengan atas 42cm, bawah 26cm', 'Rp 145.000', '1511081514.jpg'),
(14, 'Gamis Ayala', 'Almond Linen HQ', 'Panjang 135cm, lingkar dada 110cm, lengan 64cm, lebar leher 20cm, bahu 41cm, lebar bawah 120cm, lingkar lengan atas 56cm, bawah 24cm', 'Rp 241.000', '1511081650.jpg'),
(15, 'Gamis Dellaba', 'Balloteli HQ', 'Panjang 135cm, lingkar dada 108cm, lengan 60cm, lebar leher 16cm, bahu 40cm, lebar bawah 173cm, lingkar lengan atas 52cm, bawah 22cm', 'Rp 235.000', '1511081779.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `password`, `alamat`, `no_hp`) VALUES
(36, 'dewi', 'dewi', '123', 'pku', '082387654987'),
(37, 'wida', 'wida', '123', 'rumbai', '081290872341'),
(44, 'rara', 'rara', 'rara', 'rara', '085378649089'),
(45, 'ong', 'ong', 'ong', 'pku', '087865432832'),
(46, 'sasa', 'sasa', 'sasa', 'duri', '087865432167');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_memesan` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_customer`, `id_memesan`, `gambar`) VALUES
(11, 44, 30, '1511097170.jpg'),
(12, 36, 31, '1511105085.jpg'),
(13, 45, 32, '1511110117.jpg'),
(14, 46, 34, '1511183285.png');

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id_memesan` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`id_memesan`, `id_barang`, `id_customer`, `jumlah`, `status`) VALUES
(30, 14, 44, 2, ''),
(31, 9, 36, 8, ''),
(32, 15, 45, 13, 'Sedang diproses'),
(33, 9, 45, 1, 'Sedang dikirim'),
(34, 9, 46, 1, 'Sedang diproses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_customer_2` (`id_customer`),
  ADD KEY `id_memesan` (`id_memesan`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`id_memesan`),
  ADD KEY `Id_barang` (`id_barang`),
  ADD KEY `Id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `id_memesan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`id_memesan`) REFERENCES `memesan` (`id_memesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memesan_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
