-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 09:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'iksan', 'iksan'),
(2, 'dimas', 'dimas'),
(3, 'elsa', 'elsa'),
(4, 'akbar', 'akbar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `code_barang` varchar(10) NOT NULL,
  `asal_daerah` varchar(15) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`code_barang`, `asal_daerah`, `nama_barang`, `kategori`, `image`, `keterangan`) VALUES
('eq', 'e', 'e', 'e', 'http://localhost/Project_PBW/uploads/thumb-1920-962945.jpg', 'e'),
('qw', 'we', 'we', 'we', 'http://localhost/Project_PBW/uploads/Oud-Gambus6.jpg', 'we');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjual`
--

CREATE TABLE `tb_penjual` (
  `id_penjual` int(11) NOT NULL,
  `toko_penjual` varchar(15) NOT NULL,
  `harga` int(9) NOT NULL,
  `image_penjual` text NOT NULL,
  `code_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`code_barang`);

--
-- Indexes for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `code_barang` (`code_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD CONSTRAINT `tb_penjual_ibfk_1` FOREIGN KEY (`code_barang`) REFERENCES `tb_barang` (`code_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
