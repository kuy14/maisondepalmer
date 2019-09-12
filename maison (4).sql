-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 12:05 PM
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
  `bahan` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `gramasi` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `nama_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `gambar`, `bahan`, `size`, `gramasi`, `price`, `warna`, `nama_url`) VALUES
(1, 'Terry PAlmer Premium', 'Premium-5.jpg', 'Cotton Combed', '70 x 140 cm', '480 Gr', '139.000', 'Maroon, Light Red', 'Terry-Palmer-Premium'),
(2, 'Terry Palmer Enchanted', 'TP-Enchant.jpg', 'Cotton Combed', '70 x 135 cm', '450 Gr', '95.000', 'Pink, Yellow, Blue, Purple, Green, Orange', 'Enchanted'),
(3, 'Terry Palmer Enchanted', 'TP-Enchant.jpg', 'Cotton Combed', '70 x 135 cm', '450 Gr', '95.000', 'Pink, Yellow, Blue, Purple, Green, Orange', 'Enchanted-2'),
(4, 'Terry Palmer Enchanted', 'TP-Enchant.jpg', 'Cotton Combed', '50 x 100 cm', '450 Gr', '70.000', 'Pink, Yellow, Blue, Purple, Green, Orange', 'Enchanted-e'),
(6, 'Terry Palmer Hotel', 'Hotel-1.jpg', 'Cotton Combed', '70 x 140 cm', '500 gr', '125.000', 'White', 'Hotel-1'),
(7, 'Terry Palmer Hotel', 'Hotel-1.jpg', 'Cotton Combed', '50 x 100 cm', '500 Gr', '75.000', 'White', 'Hotel-2'),
(8, 'Terry Palmer Intercont', 'Intercont1.png', 'Cotton Combed', '70 x 140 cm', '500 Gr', '135.000', 'Navy, Broken White, Dark Brown, White', 'Intercont1'),
(11, 'Terry Palmer Eternal', 'Eternal-5.jpg', 'Cotton Combed', '70 x 135 cm', '480 Gr', '115.00', 'Purple, Maroon, Yellow, Green, Brown, Mocca', 'Eternal'),
(12, 'Terry Palmer Eternal', 'Eternal-5.jpg', 'Cotton Combed', '50 x 100 cm', '480 Gr', '75.000', 'Purple, Maroon, Yellow, Green, Brown, Mocca', 'Eternal-2'),
(13, 'Terry Palmer Eternal', 'Eternal-5.jpg', 'Cotton Combed', '34 x 80 cm', '480 Gr', '38.000', 'Purple, Maroon, Yellow, Green, Brown, Mocca', 'Eternal-3'),
(16, 'Little Terry', 'LT2.png', 'Cotton', '50 x 100 cm', '360 Gr', '80.000', 'Corak', 'Little-Terry2'),
(17, 'Terry Palmer Doormat Hello Kitty', 'hello-kitty.jpg', 'Cotton Combed', '45 x 70 cm', '1000 Gr', '65.000', 'Navy, Red, Brown', 'Doormat-Hello-Kitty'),
(18, 'Terry Palmer Hotel', 'Hotel-1.jpg', 'Cotton Combed', '34 x 80 cm', '500 Gr', '45.000', 'White', 'Tp-Hotel3'),
(19, 'Terry Palmer Concept Leaf', 'corak-brown.png', 'Cotton Combed', '70 x 135 cm', '500 Gr', '125.000', 'Yellow, Blue, Brown, Green', 'Concept-Motif'),
(20, 'Terry Palmer Doormat Polos', 'doormat-polos.jpg', 'Cotton Combed', '45 x 70 cm', '1000 Gr', '65.000', 'Navy, Red, Brown', 'Doormat-Polos-1'),
(21, 'Terry Palmer Doormat Motif', 'Slide5.jpg', 'Cotton Combed', '45 x 70 cm', '1000 Gr', '65.000', 'Navy, Red, Brown', 'Doormat-Motif-1'),
(22, 'Terry Palmer Doormat Motif', 'doormat-motif2.jpg', 'Hard Box', NULL, NULL, '110.000', NULL, 'Doormat-Motif-2'),
(32, 'Shapely', 'light-brown.png', 'Cotton', '70 x 135 cm', '360 Gr', '80.000', 'Marron, Yellow, Light Brown, Brown,Green,Navy', 'shapely'),
(33, 'Shapely', 'light-brown.png', 'Cotton', '50 x 100 cm', '360 Gr', '45.000', 'Marron, Yellow, Light Brown, Brown,Green,Navy', 'shapely-2'),
(34, 'Shapely', 'light-brown.png', 'Cotton', '34 x 80 cm', '360 Gr', '30.000', 'Marron, Yellow, Light Brown, Brown,Green,Navy', 'Shapley-3'),
(42, 'Evolution Oxford', 'pink.png', 'Cotton Combed', '70 x 140 cm', '550 Gr', '169.000', 'Pink, Blue, Purple, Broken White, Brown, Green', 'Evolution-Oxford'),
(45, 'Terry Palmer Kids Butterfly', 'Butterfly-3.jpg', 'Cotton Combed', '70 x 135 cm', '480 Gr', '130.000', 'Pink, Yellow, Blue', 'Kids-Butterfly');

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
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
