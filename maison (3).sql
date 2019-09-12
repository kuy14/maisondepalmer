-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 09:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maison`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `nama_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `gambar`, `detail`, `price`, `nama_url`) VALUES
(1, 'TP PREMIUM MOTIF', 'tp-premium.jpg', '70 x 140 cm<br>480 Gr', '139.000', 'Terry-Palmer-Premium'),
(2, 'TP ETERNAL', 'Eternal-2.jpg', '70 x 135 cm<br>480 Gr', '115.000', 'Eternal-2'),
(3, 'TP ETERNAL', 'Eternal-3.jpg', '50 x 100 cm<br>480 Gr', '75.000', 'Eternal-3'),
(4, 'TP ETERNAL', 'Eternal-4.jpg', '34 x 80 cm<br>480 Gr', '38.000', 'Eternal-4'),
(5, 'TP BATIK', 'Batik-5.jpg', '70 x 140 cm<br>480 Gr', '139.000', 'Batik-5'),
(6, 'TP HOTEL', 'Hotel-1.jpg', '70 x 140 cm<br>500 Gr', '125.000', 'Hotel-1'),
(7, 'TP HOTEL', 'Hotel-2.jpg', '50 x 100 cm<br>500 Gr', '75.000', 'Hotel-2'),
(8, 'TP INTERCONT', 'Intercont1.png', '70 x 140 cm<br>500 Gr', '135.000', 'Intercont1'),
(10, 'TP PREMIUM MOTIF', 'tp-premium3.jpg', '50 x 100 cm<br>480 Gr', '75.000', 'Terry-Palmer-Premium3'),
(11, 'TP ENCHANTED', 'Enchanted-1.jpg', '70 x 135 cm<br>450 Gr', '95.000', 'Enchanted'),
(12, 'TP ENCHANTED', 'Enchanted-2.jpg', '50 x 100 cm<br>450 Gr', '70.000', 'Enchanted'),
(13, 'TP ENCHANTED', 'Enchanted-3.jpg', '34 x 80 cm<br>450 Gr', '38.000', 'Enchanted'),
(14, 'TP PLAIN', 'Plain.jpg', '70 x 140 cm<br>550 Gr', '169.000', 'Plain'),
(15, 'TP COTTON COMBED LUXURY', 'cotton.png', '70 x 140 cm<br>580 Gr', '279.000', 'Cotton'),
(16, 'LITTLE TERRY', 'LT2.png', '50 x 100 cm<br>360 Gr', '80.000', 'Little-Terry2'),
(17, 'TP DOORMAT POLOS & MOTIF', 'Slide5.jpg', '45 x 70 cm<br>1000 Gr', '65.000', 'Doormat Motif'),
(18, 'TP HOTEL', 'Hotel-1.jpg', '34 x 80 cm<br>500 Gr', '45.000', 'Tp-Hotel3'),
(19, 'TP CONCEPT MOTIF', NULL, '70 x 135 cm<br>500 Gr', '125.000', 'Concept-Motif'),
(20, 'TP EGYPTION V LINE', NULL, '70 x 140 cm<br>580 Gr', '279.000', 'Egyption-vLine'),
(21, 'TP CROSSLINE', NULL, '70 x 140 cm<br>600 Gr', '285.000', 'Crossline'),
(22, 'WF BATH MAT', NULL, '52 x 75 cm<br>1000 Gr', '120.000', 'Bath-Math'),
(23, 'WF BATH TOWEL', NULL, '70 x 140 cm<br>550 Gr', '180.000', 'Bath-Towel'),
(24, 'WHITE BATHROBE KIMONO', NULL, 'ALL SIZE FIT TO L<br>450 Gr', '180.000', 'Bathrobe-Kimono'),
(25, 'TP HIGHEND ARTAVIA', NULL, '34 x 34 cm<br>450 Gr', '23.000', 'Highend-Artavia'),
(26, 'TP HIGHEND ARTAVIA', NULL, '34 x 76 cm<br>450 Gr', '38.000', 'Highend-Artavia-2'),
(27, 'TP HIGHEND ARTAVIA', NULL, '70 x 140 cm<br>450 Gr', '125.000', 'Highend-Artavia-3'),
(28, 'COTTON CLUB MOTIF', NULL, '60 x 120 cm<br>360 Gr', '65.000', 'Cotton-Motif'),
(29, 'COTTON CLUB POLOS', NULL, '70 x 140 cm<br>360 Gr', '80.000', 'Cotton-Polos'),
(30, 'COTTON CLUB POLOS', NULL, '50 x 100 cm<br>360 Gr', '45.000', 'Cotton-Polos-2'),
(31, 'COTTON CLUB POLOS', NULL, '34 x 80 cm<br>360 Gr', '30.000', 'Cotton-Polos-3'),
(32, 'SHAPELY', NULL, '70 x 135<br>360 Gr', '80.000', 'shapely'),
(33, 'SHAPELY', NULL, '50 x 100 cm<br>360 Gr', '45.000', 'shapely-2'),
(34, 'SHAPELY', NULL, '34 x 80<br>360 Gr', '30.000', 'Shapley-3'),
(35, 'MASTRO BIANCO', NULL, '50 x 100 cm<br>360 Gr', '50.000', 'Mastro-Bianco'),
(36, 'MASTRO BIANCO SET OF 2', NULL, '34 x 80 & 50 x 100 cm<br>360 Gr', '85.000', 'Mastro-Bianco-Set-2'),
(37, 'CHALMER', NULL, '70 x 140 cm<br>450 Gr', '83.000', 'Chalmer'),
(38, 'CHALMER', NULL, '50 x 100 cm<br>450 Gr', '50.000', 'Chalmer-2'),
(39, 'CHALMER', NULL, '34 x 80 cm<br>450 Gr', '31.000', 'Chalmer-3'),
(40, 'CHALMER', NULL, '30 x 30 cm<br>450 Gr', '15.000', 'Chalmer-4'),
(41, 'EVOLUTION LUNARSON', NULL, '70 x 140<br>550 Gr', '169.000', 'Evolution-Lunarson'),
(42, 'EVOLUTION OXFORD', NULL, '70 x 140 cm<br>550 Gr', '169.000', 'Evolution-Oxford'),
(43, 'GIFTBOX RIBBON', NULL, NULL, '110.000', 'Giftbox-Ribbon'),
(44, 'PAPERBOX', NULL, NULL, '30.000', 'Paperbox');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `sub1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `sub2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `sub3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `title1`, `gambar1`, `sub1`, `title2`, `gambar2`, `sub2`, `title3`, `gambar3`, `sub3`, `title4`, `gambar4`, `sub4`) VALUES
(1, 'Terry Palmer - Premium', 'slider1.png', '', 'Terry Palmer - Eternal', 'slider2.png', 'test2', 'Terry Palmer - ', 'slider3.png', 'test3', 'title4', 'slider4.png', 'test4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
