-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 04:17 PM
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
-- Database: `kasbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `nominal` float NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `keterangan`, `nominal`, `username`, `jenis_transaksi`, `tanggal`) VALUES
(29, 'uang pak simon', 2000000, 'Kurniawan', 'Pemasukan', '2023-08-29'),
(30, 'beli cpu', 1000000, 'Kurniawan', 'Pengeluaran', '2023-08-29'),
(31, 'uang sumbangan', 1000000, 'Kurniawan', 'Pemasukan', '2023-07-19'),
(32, 'beli monitor', 100000, 'Kurniawan', 'Pengeluaran', '2023-08-18'),
(33, 'uang kelas', 100000, 'Kurniawan', 'Pemasukan', '2023-08-30'),
(34, 'beli barang berbahaya', 100000, 'Kurniawan', 'Pengeluaran', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(62, 'Kurniawan', 'kurniawan', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(63, 'Bamb', 'Bamb', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(64, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(65, 'Bang', 'Bang', '526e67744f0b90739ec17c191c62d24c', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
