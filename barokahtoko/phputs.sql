-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 11:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phputs`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko_barokah`
--

CREATE TABLE `toko_barokah` (
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko_barokah`
--

INSERT INTO `toko_barokah` (`kode_barang`, `nama_barang`, `kategori`, `jumlah_stok`, `harga_satuan`) VALUES
('m1', 'rotiboy', 'makanan', 5, 7500),
('m1000', 'pisang goreng', 'makanan', 1500, 1500),
('m300', 'roti bakar', 'makanan', 105, 1000),
('mi100', 'sprit', 'minuman', 1000, 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko_barokah`
--
ALTER TABLE `toko_barokah`
  ADD PRIMARY KEY (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
