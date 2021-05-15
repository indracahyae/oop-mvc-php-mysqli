-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2021 at 07:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_php_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(256) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `diskon` tinyint(4) DEFAULT NULL,
  `stok` tinyint(4) DEFAULT NULL,
  `kategori` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `foto`, `harga`, `diskon`, `stok`, `kategori`, `created_at`, `updated_at`) VALUES
(5, 'Mouse Logitech', 'keterangan', 'thumbnail.png', 50000, 0, 7, 2, '2021-05-04 00:00:00', '2021-05-04 00:00:00'),
(16, 'Mouse Logitech QQ', 'keterangan', 'thumbnail.png', 50000, 0, 7, 2, '2021-05-04 00:00:00', '2021-05-04 00:00:00'),
(17, 'Mouse Logitech PP', 'keterangan', '', 90000, 0, 7, 2, '2021-05-04 00:00:00', '2021-05-12 12:55:13'),
(22, 'Kode Anak Negri', 'xxxx', 'KitKat Arabia â€” Social Content.jpeg', 4445555, 5, 55, 0, NULL, NULL),
(25, 'Tas', 'ini tas', '', 800000, 7, 80, 1, '2021-05-14 12:36:16', '2021-05-14 12:36:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
