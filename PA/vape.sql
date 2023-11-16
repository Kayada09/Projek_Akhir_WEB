-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vape`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_vape`
--

CREATE TABLE `tb_vape` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_vape`
--

INSERT INTO `tb_vape` (`id`, `nama`, `harga`, `deskripsi`, `foto`) VALUES
(6, 'sdsxsxs', 12232, '1222', '20231116-260.jpg'),
(7, 'adsa', 123, 'Hotcig R234 Cyber RedNew brand from Hotcig x VapebossIsi kemasan:-elektrikal box mod R234 1x-buku panduan 1x-kartu garansi 1xSpesifikasi:Ukuran: 90x55x25mmBahan: alumunium alloyBaterai: 2 baterai 18650( Dijual Terpisah)Watt: 10.0w-234.0wResistance.', 'adsa.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`) VALUES
(1, 'admin', 'admin', '$2y$10$JwoRkrCcKPqsNRWjkaBqs.mgz4XaGk3p8PeA2mq7dZ20UpHZhn2Oy'),
(2, 'user', '1', '$2y$10$W67eMv5lfZ0pYGsQFXcsbe1rhRVTAG2NSOQuUPhlqmPb66Q.8dg6a'),
(3, 'user', 'sds', '$2y$10$PpEmCyXb360zddA.T2Yh1O6Q6TVGP1jSjXPTyzZaCqHR5v8qFmg5m');

-- --------------------------------------------------------

--
-- Table structure for table `user_carts`
--

CREATE TABLE `user_carts` (
  `product_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_vape`
--
ALTER TABLE `tb_vape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_carts`
--
ALTER TABLE `user_carts`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_vape`
--
ALTER TABLE `tb_vape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
