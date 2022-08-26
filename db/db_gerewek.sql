-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 12:53 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gerewek`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'dewi', 'ed1d859c50262701d92e5cbf39652792', 'admin'),
(3, 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'admin'),
(4, 'rizki', '3e089c076bf1ec3a8332280ee35c28d4', 'admin'),
(6, 'santi', 'ae1d4b431ead52e5ee1788010e8ec110', 'admin'),
(7, 'anwar', '46d923d9b44b8aaaf3179c5f6f7adf81', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(20) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `jam_buka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `jam_buka`) VALUES
(3, 'Jakarta', '09.45'),
(4, 'Ciamis', '09.30'),
(5, 'Tasikmalaya', '10.00'),
(8, 'Sukabumi', '09.00');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(20) NOT NULL,
  `nama_kasir` varchar(20) NOT NULL,
  `id_cabang` int(20) NOT NULL,
  `jam_kerja` int(20) NOT NULL,
  `id_akun` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `id_cabang`, `jam_kerja`, `id_akun`) VALUES
(3, 'Dewi', 4, 8, 2),
(4, 'Santi', 8, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `manajer`
--

CREATE TABLE `manajer` (
  `id_manajer` int(20) NOT NULL,
  `nama_manajer` varchar(30) NOT NULL,
  `id_cabang` int(20) NOT NULL,
  `id_akun` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manajer`
--

INSERT INTO `manajer` (`id_manajer`, `nama_manajer`, `id_cabang`, `id_akun`) VALUES
(1, 'Joko', 4, 3),
(3, 'Anwar', 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `jenis_produk` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `keterangan`) VALUES
(3, 'Jus Jeruk', 'Minuman', '-'),
(5, 'Ayam Geprek', 'Makanan', '-'),
(6, 'Milkshake', 'Minuman', '-'),
(7, 'Jus Jambu', 'Minuman', '-');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_cabang` int(20) NOT NULL,
  `id_manajer` int(20) NOT NULL,
  `id_kasir` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_produk` int(20) NOT NULL,
  `harga` float NOT NULL,
  `banyak` int(20) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_cabang`, `id_manajer`, `id_kasir`, `tanggal`, `id_produk`, `harga`, `banyak`, `total`) VALUES
(2, 4, 1, 3, '2020-06-10', 5, 15000, 15, 225000),
(3, 8, 3, 4, '2020-06-03', 6, 11000, 20, 220000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_cabang` (`id_cabang`,`id_akun`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `manajer`
--
ALTER TABLE `manajer`
  ADD PRIMARY KEY (`id_manajer`),
  ADD KEY `id_cabang` (`id_cabang`,`id_akun`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_cabang` (`id_cabang`,`id_manajer`,`id_kasir`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_manajer` (`id_manajer`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manajer`
--
ALTER TABLE `manajer`
  MODIFY `id_manajer` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`);

--
-- Constraints for table `manajer`
--
ALTER TABLE `manajer`
  ADD CONSTRAINT `manajer_ibfk_1` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`),
  ADD CONSTRAINT `manajer_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_manajer`) REFERENCES `manajer` (`id_manajer`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
