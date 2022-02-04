-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 08:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
(6, 'Panasonic', 'Panasonic merupakan merek elektronik internasional yang mendominasi pasar perlengkapan rumah tangga dan konsumen. Toko Matrix menyediakan perlengkapan saklar, stopkontak, kipas angin, serta exhaust fan merek Pannasonic.', 1),
(7, 'Supreme Cable', 'Supreme Cable merupakan salah satu manufaktur kabel listrik tertua di Indonesia. Dengan pengalaman lebih dari 50 tahun, kabel Supreme memiliki spesialisasi dalam pembuatan kabel listrik tegangan rendah (low voltage), tegangan menengah (medium voltage), dan tegangan tinggi (high voltage) untuk banyak industri lain.', 1),
(8, 'Legrand', 'Legrand adalah grup industri Prancis yang secara historis didirikan di Limoges di Limousin dan salah satu pemimpin dunia dalam produk dan sistem untuk instalasi listrik dan jaringan informasi.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `brand_id` int(255) NOT NULL,
  `type_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `alias`, `description`, `created_at`, `is_delete`, `brand_id`, `type_id`) VALUES
(1, 'B9020', '', 'Pipa conduit 20mm', '2022-02-01', 0, 5, 6),
(2, 'B9020CM', '', 'Pipa conduit corrugated 20mm', '2022-02-01', 0, 5, 6),
(100, '6611', '', 'Single switch 6A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(101, '6612', '', 'Double switch 6A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(102, '6613', '', 'Triple switch 6A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(103, '6100', '', 'Socket outlet with earth 16A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(104, '6122', '', 'Socket outlet with earth and hinged cover 16A 250V, cream', '2022-02-01', 0, 3, 1),
(105, '13410', '', 'Two pole plug coupler with earth 16A 250V, white', '2022-02-01', 0, 3, 1),
(106, '13310', '', 'Two pole plug with earth 16A 250V, white', '2022-02-01', 0, 3, 1),
(107, '13830', '', 'Three way adapter plug with earth 16A 250V, white', '2022-02-01', 0, 3, 1),
(108, '844', '', 'Coversion plug 6A 250V, black', '2022-02-01', 0, 3, 1),
(109, '344LN', '', 'Two pole plug 6A 250V, black', '2022-02-01', 0, 3, 1),
(110, '344LN', '', 'Plug coupler 6A 250V, black', '2022-02-01', 0, 3, 1),
(111, '13910', '', 'Universal adaptor plug 13A 250V, white - dark grey', '2022-02-01', 0, 3, 1),
(112, '13311', '', 'Plug switch with indicator lamp 10A 250V, white dark - grey', '2022-02-01', 0, 3, 1),
(113, '630N', '', 'Single switch 6A 250V for surface mounting, black', '2022-02-01', 0, 3, 1),
(114, '632N', '', 'Double switch 632N 6A 250V for surface mounting, black', '2022-02-01', 0, 3, 1),
(115, '6130', '', 'Socket outlet with earth 16A 250V for surface mounting, black', '2022-02-01', 0, 3, 1),
(116, '1210', '', 'Ceiling lamp holder 3A 250V, cream', '2022-02-01', 0, 3, 1),
(117, '1211', '', 'Ceiling lamp holder 3A 250V, cream', '2022-02-01', 0, 3, 1),
(118, '1212', '', 'Ceiling lamp holder 3A 250V, white', '2022-02-01', 0, 3, 1),
(119, '210L', '', 'Ceiling lamp holder 4A 250V, black', '2022-02-01', 0, 3, 1),
(120, '216L', '', 'Pendant lamp holder 3A 250V, black', '2022-02-01', 0, 3, 1),
(121, '226', '', 'Lamp holder with twin socket 6A 250V, black', '2022-02-01', 0, 3, 1),
(122, '2100', '', 'Surface mounting box, cream', '2022-02-01', 0, 3, 1),
(123, '711', '', 'Fuse box for single fuse 16A 250V, black', '2022-02-01', 0, 3, 1),
(124, '712', '', 'Fuse box for double fuse 25A 250V, black', '2022-02-01', 0, 3, 1),
(125, '713', '', 'Fuse box for triple fuses 25A 250V, black', '2022-02-01', 0, 3, 1),
(126, '6621U', '', 'New gee single switch 10AX 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(127, '6622U', '', 'New gee double switch 10AX 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(128, '5511U', '', 'New gee socket outlet with earth 16A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(129, '5154N', '', 'New gee socket outlet with earth and child protection for flush mounting 16A 250V, cream', '2022-02-01', 0, 3, 1),
(130, '5181', '', 'New gee antenna socket outlet for flush mounting, cream', '2022-02-01', 0, 3, 1),
(131, '5171', '', 'New gee telephone socket outlet for flush mounting, cream', '2022-02-01', 0, 3, 1),
(132, '525361', '', 'New gee universal socket outlet and single switch 10AX / 6A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(133, '5163', '', 'New gee single change over siwtch 10AX 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(134, '525161', '', 'New gee socket outlet and single switch 16A / 6A 250V for flush mounting, cream', '2022-02-01', 0, 3, 1),
(135, '16210', '', 'Single switch 10AX 250V for surface mounting', '2022-02-01', 0, 3, 1),
(136, '16220', '', 'Double switch 10AX 250V for surface mounting, cream', '2022-02-01', 0, 3, 1),
(137, '15410', '', 'Socket outlet with earth 16A 250V for surface mounting, cream', '2022-02-01', 0, 3, 1),
(138, '15211', '', 'Universal socket outlet and single switch 10AX / 6A 250V for surface mounting, cream', '2022-02-01', 0, 3, 1),
(139, '15210', '', 'Universal socket outlet 6A 250V for surface mounting, cream', '2022-02-01', 0, 3, 1),
(140, '15420', '', 'Double socket outlet with earth 16A 250V for surface mounting, cream', '2022-02-01', 0, 3, 1),
(141, 'C154', '', 'Socket outlet with child pretection 16A 250V for flush moutning claw type', '2022-02-01', 0, 3, 1),
(142, 'C161', '', 'Single switch 10AX 250V for flush mounting claw type', '2022-02-01', 0, 3, 1),
(143, 'C162', '', 'Double switch 10AX 250V claw type', '2022-02-01', 0, 3, 1),
(144, 'C163', '', 'Single change over switch 10AX 250V claw type', '2022-02-01', 0, 3, 1),
(145, 'C164', '', 'Double change over switch 10AX 250V claw type', '2022-02-01', 0, 3, 1),
(146, 'C165', '', 'Single push button switch 10AX 250V claw type', '2022-02-01', 0, 3, 1),
(147, 'C171', '', 'Telephone socket outlet (RJ11) for flush mounting claw type', '2022-02-01', 0, 3, 1),
(148, 'C181', '', 'Antenna socket outlet for flush mounting claw type', '2022-02-01', 0, 3, 1),
(149, 'C25361', '', 'Single switch and universal socket outlet 10AX & 6A 250V for flush mounting claw type', '2022-02-01', 0, 3, 1),
(150, 'C16F', '', 'Two pole switches with indicator lamp 20AX 250V flush mounting type', '2022-02-01', 0, 3, 1),
(151, 'C654', '', 'Socket outlet with child pretection 16A 250V for flush moutning screw type', '2022-02-01', 0, 3, 1),
(152, 'C661', '', 'Single switch 10AX 250V for flush mounting screw type', '2022-02-01', 0, 3, 1),
(153, 'C662', '', 'Double switch 10AX 250V screw type', '2022-02-01', 0, 3, 1),
(154, 'C663', '', 'Single change over switch 10AX 250V screw type', '2022-02-01', 0, 3, 1),
(155, 'C664', '', 'Double change over switch 10AX 250V screw type', '2022-02-01', 0, 3, 1),
(156, 'C665', '', 'Single push button switch 10AX 250V screw type', '2022-02-01', 0, 3, 1),
(157, 'C671', '', 'Telephone socket outlet (RJ11) for flush mounting screw type', '2022-02-01', 0, 3, 1),
(158, 'C681', '', 'Antenna socket outlet for flush mounting screw type', '2022-02-01', 0, 3, 1),
(159, 'C67361', '', 'Single switch and universal socket outlet 10AX & 6A 250V for flush mounting screw type', '2022-02-01', 0, 3, 1),
(160, 'C176', '', 'Dual universal network socket outlets (RJ45/RJ12/RJ11) for flush mounting', '2022-02-01', 0, 3, 1),
(161, 'C177', '', 'Dual network socket outlets CAT.5 RJ45 for flush mounting', '2022-02-01', 0, 3, 1),
(162, 'C191', '', 'Dimmer 60 -500W 220V for inscandescent lamp with push on push off switch for flush mounting', '2022-02-01', 0, 3, 1),
(163, 'C601', '', 'Single surface mounted box', '2022-02-01', 0, 3, 1),
(164, 'C961', '', 'Four switch 10AX 250V for flush mounting', '2022-02-01', 0, 3, 1),
(165, 'C061', '', 'Stainless gridswitch 10 inserts 10AX for flush mounting', '2022-02-01', 0, 3, 1),
(166, 'E151', '', 'Socket outlet 16A 250V', '2022-02-01', 0, 3, 1),
(167, 'E154', '', 'Socket outlet with child pretection 16A 250V', '2022-02-01', 0, 3, 1),
(168, 'E152', '', 'Socket outlet with hinged cover 16A 250V', '2022-02-01', 0, 3, 1),
(169, 'E15N', '', 'Universal socket oulet 13A 250V', '2022-02-01', 0, 3, 1),
(170, 'E161', '', 'Single switch 10AX 250V', '2022-02-01', 0, 3, 1),
(171, 'E162', '', 'Double switch 10AX 250V', '2022-02-01', 0, 3, 1),
(172, 'E16N', '', 'Triple switch 10AX 250V', '2022-02-01', 0, 3, 1),
(173, 'E163', '', 'Single change over switch 10AX 250V', '2022-02-01', 0, 3, 1),
(174, 'E164', '', 'Double change over switch 10AX 250V', '2022-02-01', 0, 3, 1),
(175, 'E165', '', 'Single push button switch 10AX 250V', '2022-02-01', 0, 3, 1),
(176, 'E16C', '', 'Single switch with indicator lamp 10AX 250V', '2022-02-01', 0, 3, 1),
(177, 'E16D', '', 'Single change over switch with indicator lamp 10AX 250V', '2022-02-01', 0, 3, 1),
(178, 'E16G', '', 'Intermediate switch 10AX 250V', '2022-02-01', 0, 3, 1),
(179, 'E16J', '', 'Intermediate siwtch with indicator lamp 10AX 250V', '2022-02-01', 0, 3, 1),
(180, 'E16F', '', 'Two pole switches with indicator lamp 20AX 250V', '2022-02-01', 0, 3, 1),
(181, 'E16E', '', 'Three pole switches with indicator lamp 16AX 400V', '2022-02-01', 0, 3, 1),
(182, 'E191', '', 'Dimmer for incandescent lamp with push on push off switch one way 60 - 500W 220V', '2022-02-01', 0, 3, 1),
(183, 'E191-2W', '', 'Dimmer for incandescent lamp with push on push off switch two way / change over 60 - 500W 220V', '2022-02-01', 0, 3, 1),
(184, 'E195', '', 'Motion sensor switch 500W 220V', '2022-02-01', 0, 3, 1),
(185, 'E196', '', 'Dual USB charging port 5VDC / 2.1A 220V', '2022-02-01', 0, 3, 1),
(186, 'E171', '', 'Telephone socket outlet (RJ11)', '2022-02-01', 0, 3, 1),
(187, 'E174', '', 'Single network socket otlet CAT.5E (RJ45) screw mounting only', '2022-02-01', 0, 3, 1),
(188, 'E173', '', 'Telephone socket and single network socket CAT.5E screw mounting only', '2022-02-01', 0, 3, 1),
(189, 'E176', '', 'Dual telephone / dual universal network socket outlets (RJ45/RJ12/RJ11)', '2022-02-01', 0, 3, 1),
(190, 'E177', '', 'Dual universal network socket outlets CAT.5E (RJ45)', '2022-02-01', 0, 3, 1),
(191, 'E183', '', 'Antenna socket outlet for TV only', '2022-02-01', 0, 3, 1),
(192, 'E185', '', 'TV cable socket outlet F type connector', '2022-02-01', 0, 3, 1),
(193, 'E181', '', 'Antenna socket outlet for TV and radio single use', '2022-02-01', 0, 3, 1),
(194, 'E184', '', 'Satellite antenna socket outlet', '2022-02-01', 0, 3, 1),
(195, 'E160', '', 'Key card holder switch one way 10AX 250V', '2022-02-01', 0, 3, 1),
(196, 'E160-2W', '', 'Key card holder switch two way / change over 10AX 250V', '2022-02-01', 0, 3, 1),
(197, 'E163-DND', '', 'Do not disturb switch 10AX 250V', '2022-02-01', 0, 3, 1),
(198, 'E16LD-DND-MUR', '', 'Do not disturb and make up-up room switch 10AX 250V', '2022-02-01', 0, 3, 1),
(199, 'E141', '', 'Do not disturb indicator 230V', '2022-02-01', 0, 3, 1),
(200, 'E142', '', 'Do not disturb and make-up room indicator 230V', '2022-02-01', 0, 3, 1),
(201, 'C064', '', 'Stainless steel grindswitch 18 inserts for flush mounting', '2022-02-01', 0, 3, 6),
(202, 'FV-17CDUN', '', 'Sirocco Fan 240mm x 240mm x 194mm 120m3/jam 8.5W 220V 50Hz', '2022-02-01', 0, 6, 5),
(203, 'FV-24CDUN', '', 'Sirocco Fan 290mm x 290mm x 200mm 180m3/jam 19W 220V 50Hz', '2022-02-01', 0, 6, 5),
(204, 'FV-20TGU5', '', 'Ventilating fan 14.1W - 17.9W 275CFM 468CMH 220V 50Hz', '2022-02-01', 0, 6, 5),
(205, 'FV-15TGU1', '', 'Ventilating fan 8.8W - 11.2W 141CFM 240CMH 220V 50Hz', '2022-02-01', 0, 6, 5),
(206, 'FV-30RUN5', '', 'Ventilating fan 19 - 24W 12.5m3/min intake 220V 50Hz', '2022-02-01', 0, 6, 5),
(207, 'FV-25RUN5', '', 'Ventilating fan 22 - 27W 10,7m3/min intake 220V 50Hz', '2022-02-01', 0, 6, 5),
(208, 'FV-40AFU', '', 'Ventilating fan 58.1 - 73.9W 33.5m3/min CMM', '2022-02-01', 0, 6, 5),
(209, 'FV-10EGS1', '', 'Ventilating fan 5.5W 75m3/h 220V 50Hz', '2022-02-01', 0, 6, 5),
(210, 'FV-15EGS1', '', 'Ventilating fan 6.2W 150m3/h 220V 50Hz', '2022-02-01', 0, 6, 5),
(211, 'F-EU309-G2', '', 'Kipas angin dinding 23 - 40W 44 m3/min(CMM) 220V 50Hz, hijau', '2022-02-01', 0, 6, 5),
(212, 'F-EU309-D2', '', 'Kipas angin dinding 23 - 40W 44 m3/min(CMM) 220V 50Hz, jingga', '2022-02-01', 0, 6, 5),
(213, 'F-EU309-A2', '', 'Kipas angin dinding 23 - 40W 44 m3/min(CMM) 220V 50Hz, biru', '2022-02-01', 0, 6, 5),
(214, 'EP-405', '', 'Kipas angin standing 36 - 64.3W 76.3\r\nft3/mnt 220V 50Hz', '2022-02-01', 0, 6, 5),
(215, 'EP-404', '', 'Kipas angin standing 36 - 64W 76\r\nft3/mnt 220V 50Hz', '2022-02-01', 0, 6, 5),
(216, 'DOMF01102', '', 'MCB Domae 1P 2A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(217, 'DOMF01104', '', 'MCB Domae 1P 4A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(218, 'DOMF01106', '', 'MCB Domae 1P 6A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(219, 'DOMF01110', '', 'MCB Domae 1P 10A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(220, 'DOMF01116', '', 'MCB Domae 1P 16A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(221, 'DOMF01120', '', 'MCB Domae 1P 20A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(222, 'DOMF01125', '', 'MCB Domae 1P 25A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(223, 'DOMF01132', '', 'MCB Domae 1P 32A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(224, 'DOMF01140', '', 'MCB Domae 1P 40A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(225, 'DOMF01150', '', 'MCB Domae 1P 50A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(226, 'DOMF01163', '', 'MCB Domae 1P 63A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(227, 'DOMF01202', '', 'MCB Domae 2P 2A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(228, 'DOMF01204', '', 'MCB Domae 2P 4A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(229, 'DOMF01206', '', 'MCB Domae 2P 6A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(230, 'DOMF01210', '', 'MCB Domae 2P 10A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(231, 'DOMF01216', '', 'MCB Domae 2P 16A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(232, 'DOMF01220', '', 'MCB Domae 2P 20A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(233, 'DOMF01225', '', 'MCB Domae 2P 25A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(234, 'DOMF01232', '', 'MCB Domae 2P 32A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(235, 'DOMF01240', '', 'MCB Domae 2P 40A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(236, 'DOMF01263', '', 'MCB Domae 2P 63A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(237, 'DOMF01306', '', 'MCB Domae 3P 6A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(238, 'DOMF01310', '', 'MCB Domae 3P 10A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(239, 'DOMF01316', '', 'MCB Domae 3P 16A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(240, 'DOMF01320', '', 'MCB Domae 3P 20A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(241, 'DOMF01325', '', 'MCB Domae 3P 25A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(242, 'DOMF01332', '', 'MCB Domae 3P 32A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(243, 'DOMF01340', '', 'MCB Domae 3P 40A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(244, 'DOMF01350', '', 'MCB Domae 3P 50A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(245, 'DOMF01363', '', 'MCB Domae 3P 63A 6kA  Schneider', '2022-02-01', 0, 4, 4),
(246, 'DOMD01606', '', 'RCBO Slim Domae 1P + N 30mA 6A Schneider', '2022-02-01', 0, 4, 4),
(247, 'DOMD01610', '', 'RCBO Slim Domae 1P + N 30mA 10A Schneider', '2022-02-01', 0, 4, 4),
(248, 'DOMD01616', '', 'RCBO Slim Domae 1P + N 30mA 16A Schneider', '2022-02-01', 0, 4, 4),
(249, 'DOMD01620', '', 'RCBO Slim Domae 1P + N 30mA 20A Schneider', '2022-02-01', 0, 4, 4),
(250, 'DOMD01625', '', 'RCBO Slim Domae 1P + N 30mA 25A Schneider', '2022-02-01', 0, 4, 4),
(251, 'DOML01140', '', 'Surge arrester Domae PF 1P Tipe 2 18mm Schneider', '2022-02-01', 0, 4, 4),
(252, 'DOML01640', '', 'Surge arrester Domae PF 1P + N Tipe 2 36mm Schneider', '2022-02-01', 0, 4, 4),
(253, 'DOMH12104F', '', 'Box MCB Domae 4 modul Schneider', '2022-02-01', 0, 4, 4),
(254, 'DOMH12108F', '', 'Box MCB Domae 8 modul Schneider', '2022-02-01', 0, 4, 4),
(255, 'DOML01340', '', 'Surge arrester Domae PF 3P Tipe 2 72mm Schneider', '2022-02-01', 0, 4, 4),
(256, 'DOMH12112F', '', 'Box MCB Domae 12 modul Schneider', '2022-02-01', 0, 4, 4),
(257, 'DOML01740', '', 'Surge arrester Domae PF 3P + N Tipe 2 72mm Schneider', '2022-02-01', 0, 4, 4),
(258, 'DOMR01225', '', 'ELCB Domae 1P + N 25mA  Schneider', '2022-02-01', 0, 4, 4),
(259, 'DOMR01240', '', 'ELCB Domae 1P + N 40mA  Schneider', '2022-02-01', 0, 4, 4),
(260, 'EZC100B3015', '', 'MCCB EZC100B 3P 15A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(261, 'EZC100B3020', '', 'MCCB EZC100B 3P 20A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(262, 'EZC100B3025', '', 'MCCB EZC100B 3P 25A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(263, 'EZC100B3030', '', 'MCCB EZC100B 3P 30A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(264, 'EZC100B3040', '', 'MCCB EZC100B 3P 40A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(265, 'EZC100B3050', '', 'MCCB EZC100B 3P 50A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(266, 'EZC100B3060', '', 'MCCB EZC100B 3P 60A 7,5kA Schneider', '2022-02-01', 0, 4, 4),
(267, 'LC1E0610M7', '', 'Kontaktor TesysE 3P 6A 1N/O 220VAC Schneider', '2022-02-01', 0, 4, 4),
(268, 'LC1E160M5', '', 'Kontaktor TesysE 3P 160A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(269, 'XB5AA21', '', 'Push button Harmony XB5 diameter 22mm IP66 1N/O hitam Schneider', '2022-02-01', 0, 4, 4),
(270, 'EZC100F3015', '', 'MCCB EZC100F 3P 15A 10kA Schneider', '2022-02-01', 0, 4, 4),
(271, 'EZC100F3020', '', 'MCCB EZC100F 3P 20A 10kA Schneider', '2022-02-01', 0, 4, 4),
(272, 'EZC100F3025', '', 'MCCB EZC100F 3P 25A 10kA Schneider', '2022-02-01', 0, 4, 4),
(273, 'EZC100F3030', '', 'MCCB EZC100F 3P 30A 10kA Schneider', '2022-02-01', 0, 4, 4),
(274, 'EZC100F3040', '', 'MCCB EZC100F 3P 40A 10kA Schneider', '2022-02-01', 0, 4, 4),
(275, 'EZC100F3050', '', 'MCCB EZC100F 3P 50A 10kA Schneider', '2022-02-01', 0, 4, 4),
(276, 'EZC100F3060', '', 'MCCB EZC100F 3P 60A 10kA Schneider', '2022-02-01', 0, 4, 4),
(277, 'EZC100F3075', '', 'MCCB EZC100F 3P 75A 10kA Schneider', '2022-02-01', 0, 4, 4),
(278, 'EZC100F3080', '', 'MCCB EZC100F 3P 80A 10kA Schneider', '2022-02-01', 0, 4, 4),
(279, 'EZC100F3100', '', 'MCCB EZC100F 3P 100A 10kA Schneider', '2022-02-01', 0, 4, 4),
(280, 'EZC250F3100', '', 'MCCB EZC250F 3P 100A 18kA Schneider', '2022-02-01', 0, 4, 4),
(281, 'EZC250F3125', '', 'MCCB EZC250F 3P 125A 18kA Schneider', '2022-02-01', 0, 4, 4),
(282, 'EZC250F3160', '', 'MCCB EZC250F 3P 160A 18kA Schneider', '2022-02-01', 0, 4, 4),
(283, 'EZC250F3200', '', 'MCCB EZC250F 3P 200A 18kA Schneider', '2022-02-01', 0, 4, 4),
(284, 'EZC250F3225', '', 'MCCB EZC250F 3P 225A 18kA Schneider', '2022-02-01', 0, 4, 4),
(285, 'EZC250F3250', '', 'MCCB EZC250F 3P 250A 18kA Schneider', '2022-02-01', 0, 4, 4),
(286, 'EZAUX10', '', 'Kontak bantu Auxiliary Switch (AX) untuk EZC100 Schneider', '2022-02-01', 0, 4, 4),
(287, 'EZAUX01', '', 'Kontak bantu Alarm Switch (AL) untuk EZC100 Schneider', '2022-02-01', 0, 4, 4),
(288, 'EZAUX11', '', 'Kontak bantu Auxiliary Switch / Alarm Switch (AX/AL) untuk EZC100 Schneider', '2022-02-01', 0, 4, 4),
(289, 'EZEAX', '', 'Kontak bantu Auxiliary Switch (AX) untuk EZC250 Schneider', '2022-02-01', 0, 4, 4),
(290, 'EZEAL', '', 'Kontak bantu Alarm Switch (AL) untuk EZC250 Schneider', '2022-02-01', 0, 4, 4),
(291, 'EZEAXAL', '', 'Kontak bantu Auxiliary Switch / Alarm Switch (AX/AL) untuk EZC250 Schneider', '2022-02-01', 0, 4, 4),
(292, 'LC1E0601M7', '', 'Kontaktor TesysE 3P 6A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(293, 'EZASHT200AC', '', 'Voltage release Shunt Trip 200 - 277VAC untuk EZC100 Schneider', '2022-02-01', 0, 4, 4),
(294, 'EZESHT200AC', '', 'Voltage release Shunt Trip 200 - 277VAC untuk EZC250 Schneider', '2022-02-01', 0, 4, 4),
(295, 'LC1D09M7', '', 'Kontaktor TesysD 3P 9A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(296, 'LC1D12M7', '', 'Kontaktor TesysD 3P 12A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(297, 'LC1D18M7', '', 'Kontaktor TesysD 3P 18A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(298, 'LC1D25M7', '', 'Kontaktor TesysD 3P 25A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(299, 'LC1D32M7', '', 'Kontaktor TesysD 3P 32A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(300, 'LC1E0910M7', '', 'Kontaktor TesysE 3P 9A 1N/O 220VAC Schneider', '2022-02-01', 0, 4, 4),
(301, 'LC1D38M7', '', 'Kontaktor TesysD 3P 38A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(302, 'METSEDM1110', '', 'Ampere meter PowerLogic 1P 50mA - 6A Schneider', '2022-02-01', 0, 4, 4),
(303, 'METSEDM1210', '', 'Volt meter PowerLogic 1P 44-480VAC Schneider', '2022-02-01', 0, 4, 4),
(304, 'LC1E0901M7', '', 'Kontaktor TesysE 3P 9A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(305, 'METSEDM1310', '', 'Frequency meter 1P 20 - 100Hz PowerLogic Schneider', '2022-02-01', 0, 4, 4),
(306, 'METSEDM3110', '', 'Ampere meter PowerLogic 3P 50mA - 6A Schneider', '2022-02-01', 0, 4, 4),
(307, 'METSEDM3210', '', 'Volt meter PowerLogic 3P 80 - 480VAC L-L Schneider', '2022-02-01', 0, 4, 4),
(308, 'METSEDM6200HCL10RS', '', 'Digital Meter seri 6000H dengan modul komunikasi Schneider', '2022-02-01', 0, 4, 4),
(309, 'LC1E1210M7', '', 'Kontaktor TesysE 3P 12A 1N/O220VAC Schneider', '2022-02-01', 0, 4, 4),
(310, 'XA2EA11', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/O putih Schneider', '2022-02-01', 0, 4, 4),
(311, 'LC1E1201M7', '', 'Kontaktor TesysE 3P 12A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(312, 'XA2EA21', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/O hitam Schneider', '2022-02-01', 0, 4, 4),
(313, 'LC1E1810M7', '', 'Kontaktor TesysE 3P 18A 1N/O 220VAC Schneider', '2022-02-01', 0, 4, 4),
(314, 'XA2EA31', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/O hijau Schneider', '2022-02-01', 0, 4, 4),
(315, 'LC1E1801M7', '', 'Kontaktor TesysE 3P 18A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(316, 'XA2AA42', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/C merah Schneider', '2022-02-01', 0, 4, 4),
(317, 'XA2EA51', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/O jingga Schneider', '2022-02-01', 0, 4, 4),
(318, 'LC1E2510M7', '', 'Kontaktor TesysE 3P 25A 1N/O 220VAC  Schneider', '2022-02-01', 0, 4, 4),
(319, 'XA2EA61', '', 'Push button Harmony XA2 diameter 22mm IP54 1N/O biru Schneider', '2022-02-01', 0, 4, 4),
(320, 'LC1E2501M7', '', 'Kontaktor TesysE 3P 25A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(321, 'LC1E3210M7', '', 'Kontaktor TesysE 3P 32A 1N/O 220VAC Schneider', '2022-02-01', 0, 4, 4),
(322, 'XA2EVM1LC', '', 'Pilot lamp Harmony XA2 diameter 22mm IP40 220VAC putih Schneider', '2022-02-01', 0, 4, 4),
(323, 'LC1E3201M7', '', 'Kontaktor TesysE 3P 32A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(324, 'XA2EVM3LC', '', 'Pilot lamp Harmony XA2 diameter 22mm IP40 220VAC hijau Schneider', '2022-02-01', 0, 4, 4),
(325, 'XA2EVM4LC', '', 'Pilot lamp Harmony XA2 diameter 22mm IP40 220VAC merah Schneider', '2022-02-01', 0, 4, 4),
(326, 'LC1E3810M7', '', 'Kontaktor TesysE 3P 38A 1N/O 220VAC Schneider', '2022-02-01', 0, 4, 4),
(327, 'XA2EVM5LC', '', 'Pilot lamp Harmony XA2 diameter 22mm IP40 220VAC jingga Schneider', '2022-02-01', 0, 4, 4),
(328, 'XA2EVM6LC', '', 'Pilot lamp Harmony XA2 diameter 22mm IP40 220VAC biru Schneider', '2022-02-01', 0, 4, 4),
(329, 'XA2ED21', '', 'Seleector switch Harmony XA2 diameter 22mm 2 posisi 1N/O Schneider', '2022-02-01', 0, 4, 4),
(330, 'XA2ES542', '', 'Emergency stop Harmony XA2 diameter 40mm turn to release 1N/C Schneider', '2022-02-01', 0, 4, 4),
(331, 'LC1E3801M7', '', 'Kontaktor TesysE 3P 38A 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(332, 'XB5AS8442', '', 'Emergency stop Harmony XB5 diameter 40mm latching turn to release 1N/C Schneider', '2022-02-01', 0, 4, 4),
(333, 'XB5AD21', '', 'Selector switch harmony XB5 diameter 22mm 2 posisi 1 N/O Schneider', '2022-02-01', 0, 4, 4),
(334, 'LC1E40M7', '', 'Kontaktor TesysE 3P 40A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(335, 'LC1E50M7', '', 'Kontaktor TesysE 3P 50A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(336, 'LC1E65M7', '', 'Kontaktor TesysE 3P 65A  1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(337, 'LC1E80M7', '', 'Kontaktor TesysE 3P 80A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(338, 'LC1D40AM7', '', 'Kontaktor TesysD koneksi Everlink 3P 40A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(339, 'LC1E95M7', '', 'Kontaktor TesysE 3P 95A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(340, 'LC1D50AM7', '', 'Kontaktor TesysD koneksi EverLink 3P 50A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(341, 'LC1E120M5', '', 'Kontaktor TesysE 3P 120A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(342, 'LC1D65AM7', '', 'Kontaktor TesysD koneksi EverLink 3P 65A 1N/O + 1N/C 220VAC Schneider', '2022-02-01', 0, 4, 4),
(343, 'XB5AA31', '', 'Push button Harmony XB5 diameter 22mm IP66 1N/O hijau  Schneider', '2022-02-01', 0, 4, 4),
(344, 'XB5AA42', '', 'Push button Harmony XB5 diameter 22mm IP66 1N/O merah Schneider', '2022-02-01', 0, 4, 4),
(345, 'XB5AA51', '', 'Push button Harmony XB5 diameter 22mm IP66 1N/O kuning  Schneider', '2022-02-01', 0, 4, 4),
(346, 'XB5AA61', '', 'Push button Harmony XB5 diameter 22mm IP66 1N/O biru Schneider', '2022-02-01', 0, 4, 4),
(347, 'XB5AVM1', '', 'Push button Harmony XB5 diameter 22mm IP66 230 - 240VAC Putih  Schneider', '2022-02-01', 0, 4, 4),
(348, 'XB5AVM3', '', 'Push button Harmony XB5 diameter 22mm IP66 230 - 240VAC hijau Schneider', '2022-02-01', 0, 4, 4),
(349, 'XB5AVM4', '', 'Push button Harmony XB5 diameter 22mm IP66 230 - 240VAC merah Schneider', '2022-02-01', 0, 4, 4),
(350, 'XB5AVM5', '', 'Push button Harmony XB5 diameter 22mm IP66 230 - 240VAC jingga Schneider', '2022-02-01', 0, 4, 4),
(351, 'XB5AVM6', '', 'Push button Harmony XB5 diameter 22mm IP66 230 - 240VAC biru  Schneider', '2022-02-01', 0, 4, 4),
(354, 'B240-20-1', '', 'Junction Box 1 way', '2022-02-01', 0, 5, 6),
(355, 'B240-20-2', '', 'Junction Box 2 way', '2022-02-02', 0, 5, 6),
(356, 'B240-20-2A', '', 'Junction Box 2 way angle', '2022-02-02', 0, 5, 6),
(357, 'B240-20-3', '', 'Junction Box 3 way', '2022-02-02', 0, 5, 6),
(358, 'B240-20-4', '', 'Junction Box 4 way', '2022-02-02', 0, 5, 6),
(359, 'B247-20', '', '90 degree bend', '2022-02-02', 0, 5, 6),
(360, 'B242-20', '', 'Joining coupling', '2022-02-02', 0, 5, 6),
(361, 'B729C20', '', 'Glands', '2022-02-02', 0, 5, 6),
(362, 'B261-20', '', 'Saddle', '2022-02-02', 0, 5, 6),
(363, 'Kabel NYYHY Extrana', '', 'Kabel NYYHY merupakan kabel serabut dilapisi oleh PVC (hitam) dengan core lebih dari 1. Kabel NYYHY Extrana sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 1, 7),
(364, 'Kabel NYMHY Extrana', '', 'Kabel NYMHY merupakan kabel serabut dilapisi oleh PVC (putih) dengan core lebih dari 1. Kabel NYMHY Extrana sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 1, 7),
(365, 'Kabel NYM Extrana', '', 'Kabel NYM Extrana merupakan kabel tunggal dilapisi dengan PVC (putih) dengan core lebih dari 1. Kabel NYM Extrana telah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 1, 7),
(366, 'Kabel NYY Extrana', '', 'Kabel NYY Extrana merupakan kabel tunggal dilapisi dengan PVC (hitam) dengan core lebih dari 1. Kabel NYM Extrana telah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 1, 7),
(367, 'Kabel NFA2X Extrana', '', 'Kabel NFA2X atau lebih dikenal dengan kabel udara merupakan kabel aluminimum yang diperuntukan sebaga kabel di udara. Kabel NFA2X Extrana sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-01', 0, 1, 7),
(368, 'Kabel NYA Extrana', '', 'Kabel NYA merupakan kabel tunggal yang tidak dilapisi oleh tambahan PVC luar. Kabel NYA Extrana tersedia dalam warna hitam, merah, biru, dan kuning-hijau. Kabel NYA Extrana sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 1, 7),
(369, 'Kabel NYAF Extrana', '', 'Kabel NYAF merupakan kabel serabut yang tidak dilapisi oleh tambahan PVC luar. Kabel NYAF Extrana tersedia dalam warna hitam, merah, biru, dan kuning-hijau. Kabel NYAF Extrana sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 1, 7),
(370, 'Kabel NYYHY Supreme', '', 'Kabel NYYHY merupakan kabel serabut dilapisi oleh PVC (hitam) dengan core lebih dari 1. Kabel NYYHY Supreme sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 7, 7),
(371, 'Kabel NYMHY Supreme', '', 'Kabel NYMHY merupakan kabel serabut dilapisi oleh PVC (putih) dengan core lebih dari 1. Kabel NYMHY Supreme sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 7, 7),
(372, 'Kabel NYM Supreme', '', 'Kabel NYM Supreme merupakan kabel tunggal dilapisi dengan PVC (putih) dengan core lebih dari 1. Kabel NYM Supreme telah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 7, 7),
(373, 'Kabel NYY Supreme', '', 'Kabel NYY Supreme merupakan kabel tunggal dilapisi dengan PVC (hitam) dengan core lebih dari 1. Kabel NYM Supreme telah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN.', '2022-02-02', 0, 7, 7),
(374, 'Kabel NFA2X Supreme', '', 'Kabel NFA2X atau lebih dikenal dengan kabel udara merupakan kabel aluminimum yang diperuntukan sebaga kabel di udara. Kabel NFA2X Supreme sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-01', 0, 7, 7),
(375, 'Kabel NYA Supreme', '', 'Kabel NYA merupakan kabel tunggal yang tidak dilapisi oleh tambahan PVC luar. Kabel NYA Supreme tersedia dalam warna hitam, merah, biru, dan kuning-hijau. Kabel NYA Supreme sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 7, 7),
(376, 'Kabel NYAF Supreme', '', 'Kabel NYAF merupakan kabel serabut yang tidak dilapisi oleh tambahan PVC luar. Kabel NYAF Supreme tersedia dalam warna hitam, merah, biru, dan kuning-hijau. Kabel NYAF Supreme sudah dilengkapi dengan sertifikasi SNI, LMK, dan SPLN', '2022-02-02', 0, 7, 7),
(377, 'WABJ5011-N', '', 'Acrosea Series 1-Way 1-Device 1-Gang 10AX 250V', '2022-02-01', 0, 6, 1),
(378, 'WABJ5021-N', '', 'Acrosea Series 1-Way 2-Device 1-Gang 10AX 250V', '2022-02-02', 0, 6, 1),
(379, 'WABJ5031-N', '', 'Acrosea Series 1-Way 3-Device 1-Gang 10AX 250V', '2022-02-02', 0, 6, 1),
(380, 'WABJ5012-N', '', 'Acrosea Series 2-Way 1-Device 1-Gang 10AX 250V', '2022-02-01', 0, 6, 1),
(381, 'WABJ5022-N', '', 'Acrosea Series 2-Way 2-Device 1-Gang 10AX 250V', '2022-02-02', 0, 6, 1),
(382, 'WABJ5032-N', '', 'Acrosea Series 2-Way 3-Device 1-Gang 10AX 250V', '2022-02-02', 0, 6, 1),
(383, 'WABJ5303-N', '', 'Acrosea Series DP 20A dengan indikator', '2022-02-02', 0, 6, 1),
(384, 'WABJ5511-N', '', 'Acrosea Series Push button bell symbol 1-gang 10A', '2022-02-02', 0, 6, 1),
(385, 'WABJ1610-N', '', 'Acrosea Series stop kontak schuko', '2022-02-02', 0, 6, 1),
(386, 'WABJ1211-N', '', 'Acrosea Series stop kontak AC 13A dengan saklar', '2022-02-02', 0, 6, 1),
(387, 'WABJ3010-N', '', 'Acrosea Series Modul TV tipe DIN', '2022-02-02', 0, 6, 1),
(388, 'WABJ3118-N', '', 'Acrosea Series Modul Telepon 6P 4C', '2022-02-02', 0, 6, 1),
(389, 'WABJ3217-N', '', 'Acrosea Series Modul Data (CAT6)', '2022-02-02', 0, 6, 1),
(390, 'WABJ8010-N', '', 'Acrosea Series Plat Penutup', '2022-02-02', 0, 6, 1),
(439, 'WEJ5541', '', 'Wide Series sakelar lebar 1 arah', '2022-02-01', 0, 6, 1),
(440, 'WEJ5581', '', 'Wide Series sakelar lebar 1 arah dengan indikator', '2022-02-01', 0, 6, 1),
(441, 'WEJ5542', '', 'Wide Series sakelar lebar 2 arah', '2022-02-01', 0, 6, 1),
(442, 'WEJ5582', '', 'Wide Series sakelar lebar 2 arah dengan indikator', '2022-02-01', 0, 6, 1),
(443, 'WEJ5531', '', 'Wide Series sakelar 1 arah', '2022-02-01', 0, 6, 1),
(444, 'WEJ5571', '', 'Wide Series sakelar 1 arah dengan indikator', '2022-02-01', 0, 6, 1),
(445, 'WEJ5532', '', 'Wide Series sakelar 2 arah', '2022-02-01', 0, 6, 1),
(446, 'WEJ5572', '', 'Wide Series sakelar 2 arah dengan indikator', '2022-02-01', 0, 6, 1),
(447, 'WEJ7823', '', 'Wide Series frame 3 gang', '2022-02-01', 0, 6, 1),
(448, 'WEJ30029', '', 'Wide Series inside cover untuk WEJ7823', '2022-02-01', 0, 6, 1),
(449, 'WEJ1121-7', '', 'Wide Series Stop kontak schuko dengan grounding untuk WEJ7823', '2022-02-01', 0, 6, 1),
(450, 'WEJ78019', '', 'Wide Series frame 1 gang 1 device', '2022-02-01', 0, 6, 1),
(451, 'WEJ78029', '', 'Wide Series frame 1 gang 2 device', '2022-02-01', 0, 6, 1),
(452, 'WEJ78049', '', 'Wide Series frame 2 gang 4 device', '2022-02-01', 0, 6, 1),
(453, 'WEJP11222-7', '', 'Wide Series stop kontak schuko dengan grounding ganda', '2022-02-01', 0, 6, 1),
(454, 'WEJP11322-7', '', 'Wide Series stop kontak schuko tanpa grounding ganda', '2022-02-01', 0, 6, 1),
(455, 'WEJP11212-7', '', 'Wide Series stop kontak schuko dengan grounding dan frame 2 gang', '2022-02-01', 0, 6, 1),
(456, 'WEJP11312-7', '', 'Wide Series stop kontak schuko tanpa  grounding dan frame 2 gang', '2022-02-01', 0, 6, 1),
(457, 'WEJP1121-7', '', 'Wide Series stop kontak schuko dengan grounding', '2022-02-01', 0, 6, 1),
(458, 'WEJP1131-7', '', 'Wide Series stop kontak schuko tanpa  grounding', '2022-02-01', 0, 6, 1),
(459, 'WEJ89911', '', 'Wide Series cover frame waterproof', '2022-02-01', 0, 6, 1),
(460, 'WEJ10919', '', 'Wide Series stop kontak universal', '2022-02-01', 0, 6, 1),
(461, 'WEJ10919H', '', 'Wide Series stop kontak universal hitam', '2022-02-01', 0, 6, 1),
(462, 'WEJ57518', '', 'Wide Series 1 gang dimmer 800W', '2022-02-01', 0, 6, 1),
(463, 'WEJ57518H', '', 'Wide Series 1 gang dimmer 800W hitam', '2022-02-01', 0, 6, 1),
(464, 'WEJ57515', '', 'Wide Series 1 gang dimmer 500W', '2022-02-01', 0, 6, 1),
(465, 'WEJ57515H', '', 'Wide Series 1 gang dimmer 500W hitam', '2022-02-01', 0, 6, 1),
(466, 'WEJ5401-7', '', 'Wide Series tombol tekan', '2022-02-01', 0, 6, 1),
(467, 'WEJ5401H-7', '', 'Wide Series tombol tekan hitam', '2022-02-01', 0, 6, 1),
(468, 'WEJ2164', '', 'Wide Series modul telepon (6P 4C)', '2022-02-01', 0, 6, 1),
(469, 'WEJ2164H', '', 'Wide Series modul telepon (6P 4C) hitam', '2022-02-01', 0, 6, 1),
(470, 'WEJ2166', '', 'Wide Series modul telepon (6P 6C)', '2022-02-01', 0, 6, 1),
(471, 'WEJ2166H', '', 'Wide Series modul telepon (6P 6C) hitam', '2022-02-01', 0, 6, 1),
(472, 'WEJ2488', '', 'Wide Series modul data CAT5E (8P 8C)', '2022-02-01', 0, 6, 1),
(473, 'WEJ2488H', '', 'Wide Series modul data CAT5E (8P 8C) hitam', '2022-02-01', 0, 6, 1),
(474, 'WEJ24886', '', 'Wide Series modul data CAT6 (8P 8C)', '2022-02-01', 0, 6, 1),
(475, 'WEJ24886H', '', 'Wide Series modul data CAT6 (8P 8C) hitam', '2022-02-01', 0, 6, 1),
(476, 'WEJ2501', '', 'Wide Series modul TV', '2022-02-01', 0, 6, 1),
(477, 'WEJ2501H', '', 'Wide Series modul TV hitam', '2022-02-01', 0, 6, 1),
(478, 'WEJ3020', '', 'Wide Series plat penutup', '2022-02-01', 0, 6, 1),
(479, 'WEJ3020H', '', 'Wide Series plat penutup hitam', '2022-02-01', 0, 6, 1),
(480, 'WNJ9986', '', 'Wide Series condensor untuk saklear berindikator', '2022-02-01', 0, 6, 1),
(481, 'WEF1172W', '', 'Wide Series USB 2 lubang', '2022-02-01', 0, 6, 1),
(482, 'WEF1172H', '', 'Wide Series USB 2 lubang hitam', '2022-02-01', 0, 6, 1),
(483, 'WEJ9111W', '', 'Wide Series steker stop kontak AC', '2022-02-01', 0, 6, 1),
(484, 'WBJ1214W', '', 'Wide Series stop kontak AC', '2022-02-01', 0, 6, 1),
(485, 'WBJ1214W-3K', '', 'Wide Series stop kontak AC dengan saklear dan outbow', '2022-02-01', 0, 6, 1),
(486, 'WBJ6010W', '', 'Wide Series outbow doost untuk stop kontak AC', '2022-02-01', 0, 6, 1),
(487, 'LED Lilin 4W', '', 'Lampu lilin LED 2.700K (kuning) bening menambah kilau nyaman untuk rumah Anda.', '2022-02-03', 0, 2, 2),
(488, 'LED Lilin 5.5W', '', 'Lampu lilin LED 2.700K (kuning) bening menambah kilau nyaman untuk rumah Anda.', '2022-02-03', 0, 2, 2),
(490, '8718696579510', '', 'LED spot 3W (35W) GU5.3 kap Putih hangat, Tidak dapat diredupkan', '2022-02-03', 0, 2, 2),
(491, '8718696579534', '', 'LED spot 3W (35W) GU5.3 kap Terang Sejuk, Tidak dapat diredupkan', '2022-02-03', 0, 2, 2),
(492, '8718696579558', '', 'LED spot 5W (50W) GU5.3 kap Putih Hangat, Tidak dapat diredupkan', '2022-02-03', 0, 2, 2),
(493, '8718696579558', '', 'LED spot 5W (50W) GU5.3 kap Terang Sejuk, Tidak dapat diredupkan', '2022-02-03', 0, 2, 2),
(494, '8718696574874', 'Dapat diredupkan', 'Lampu bohlam LED 4W (40W) E27 Putih hangat, Dapat diredupkan', '2022-02-03', 0, 2, 2),
(495, '8718696820605', '', 'Lampu bohlam LED 5W - 50W (50W GLS, 9W CFL) E27 Putih', '2022-02-03', 0, 2, 2),
(496, '8718696820629', '', 'Lampu bohlam LED 5W - 50W (50W GLS, 9W CFL) E27 Cool Daylight', '2022-02-03', 0, 2, 2),
(497, '8718696820643', '', 'Lampu bohlam LED 7W - 65W (65W GLS, 12W CFL) E27 Putih', '2022-02-03', 0, 2, 2),
(498, '8718696820667', '', 'Lampu bohlam LED 7W - 65W (65W GLS, 12W CFL) E27 Cool Daylight', '2022-02-03', 0, 2, 2),
(499, 'LED bulb 8719514252493', '', 'Lampu bohlam LED 9W - 60W 9W-60W (60W GLS, 15W CFL) E27 Putih', '2022-02-03', 0, 2, 2),
(500, 'LED bulb 8719514252516', '', 'Lampu bohlam LED 9W - 60W 9W-60W (60W GLS, 15W CFL) E27 Cool Daylight', '2022-02-03', 0, 2, 2),
(501, 'LED bulb 8719514252530', '', 'Lampu bohlam LED 11W-80W (80W GLS, 20W CFL) E27 Putih', '2022-02-03', 0, 2, 2),
(502, 'LED bulb 8719514252554', '', 'Lampu bohlam LED 11W-80W (80W GLS, 20W CFL) E27 Cool Daylight', '2022-02-03', 0, 2, 2),
(503, '656513', '', 'Pipa Conduit PVC -LINK Rigid Conduit 20mm', '2022-02-03', 0, 8, 6),
(504, '656526', '', 'Kabel PVC / Penarik Kabel', '2022-02-03', 0, 8, 6),
(505, 'SPS20', '', 'Saddle conduit 20mm', '2022-02-03', 0, 8, 6),
(506, '617100', '', 'Belanko Series Sakelar 1-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(507, '617101', '', 'Belanko Series Sakelar 1-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(508, '617102', '', 'Belanko Series Sakelar 2-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(509, '617103', '', 'Belanko Series Sakelar 2-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(510, '617104', '', 'Belanko Series Sakelar 3-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(511, '617105', '', 'Belanko Series Sakelar 3-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(512, '617106', '', 'Belanko Series Sakelar 4-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(513, '617107', '', 'Belanko Series Sakelar 4-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(514, '617108', '', 'Belanko Series Sakelar 5-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(515, '617110', '', 'Belanko Series Sakelar 6-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(516, '617000', '', 'Belanko Series Sakelar 1-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(517, '617001', '', 'Belanko Series Sakelar 1-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(518, '617002', '', 'Belanko Series Sakelar 2-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(519, '617003', '', 'Belanko Series Sakelar 2-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(520, '617004', '', 'Belanko Series Sakelar 3-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(521, '617005', '', 'Belanko Series Sakelar 3-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(522, '617006', '', 'Belanko Series Sakelar 4-gang 1-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(523, '617007', '', 'Belanko Series Sakelar 4-gang 2-way switch 10AX 250V', '2022-02-03', 0, 8, 1),
(524, '617009', '', 'Belanko Series Intermediate switch 10AX 250V', '2022-02-03', 0, 8, 1),
(525, '617020', '', 'Belanko Series Sakelar 1-gang 1-way switch 20AX 250V', '2022-02-03', 0, 8, 1),
(526, '617021', '', 'Belanko Series Sakelar 1-gang 2-way switch 20AX 250V', '2022-02-03', 0, 8, 1),
(527, '617022', '', 'Belanko Series Sakelar 2-gang 1-way switch 20AX 250V', '2022-02-03', 0, 8, 1),
(528, '617023', '', 'Belanko Series Sakelar 2-gang 2-way switch 20AX 250V', '2022-02-03', 0, 8, 1),
(535, '617121', '', 'Belanko Series single TV socket, female', '2022-02-03', 0, 8, 1),
(536, '617120', '', 'Belanko Series single TV socket, \"F\" type', '2022-02-03', 0, 8, 1),
(537, '617123', '', 'Belanko Series double TV socket, female + \"F\" type', '2022-02-03', 0, 8, 1),
(538, '617097', '', 'Belanko Series RJ11 socket', '2022-02-03', 0, 8, 1),
(539, '617098', '', 'Belanko Series double RJ11 socket', '2022-02-03', 0, 8, 1);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;

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
