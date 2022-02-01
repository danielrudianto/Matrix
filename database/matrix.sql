-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 02:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_shown` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`, `is_shown`) VALUES
(1, 'Extrana Cable', 'Extrana Cable merupakan manufaktur kabel listrik di Indonesia. Dengan pengalaman lebih dari 20 tahun, kabel Extrana memiliki spesialisasi dalam pembuatan kabel listrik tegangan rendah (low voltage), tegangan menengah (medium voltage), dan tegangan tinggi (high voltage) untuk banyak industri lain.', 1),
(2, 'Philips', 'Philips merupakan perusahaan yang bergerak dalam manufaktur komponen elektrikal dan komponen elektronik. Lampu Light Emitting Diodes (LED) dan saklar merupakan salah satu produk unggulan Philips. ', 1),
(3, 'Broco', 'Broco adalah merek terkenal asal Indonesia dengan pengalaman hampir 40 tahun. Sejak didirikan, Broco telah membuktikan menjadi pionir dan pemimpin pasar dalam memanufaktur produk produk elektrikal bermutu tinggi.', 1),
(4, 'Schneider Electric', 'Schneider Electric, perusahaan manufaktur internasional dengan produk komponen elektrikal asal Perancis, Eropa yang telah berdiri sejak 1836 menawarkan beragam produk elektrikal dengan kualitas yang sudah dijamin.', 1),
(5, 'Boss', 'Boss merupakan merek untuk keperluan PVC elektrikal seperti socket, pipa conduit, dan flexible asal Australia. Dengan pengalaman sejak 1980, Boss telah berkembang menjadi salah satu merek PVC elektrikal yang mendominasi pasar di Indonesia.', 1),
(6, 'Panasonic', 'Panasonic merupakan merek elektronik internasional yang mendominasi pasar perlengkapan rumah tangga dan konsumen. Toko Matrix menyediakan perlengkapan saklar, stopkontak, kipas angin, serta exhaust fan merek Pannasonic.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `brand_id` int(255) NOT NULL,
  `type_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Saklar'),
(2, 'Lampu'),
(3, 'Lampu Hias'),
(4, 'Komponen'),
(5, 'Kipas Angin'),
(6, 'PVC'),
(7, 'Kabel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
