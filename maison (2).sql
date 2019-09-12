-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2019 pada 05.03
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.3.2

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `nama_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `gambar`, `detail`, `nama_url`) VALUES
(1, 'Terry Palmer Premium', 'tp-premium.jpg', NULL, 'Terry-Palmer-Premium'),
(2, 'Eternal', 'Eternal-2.jpg', NULL, 'Eternal-2'),
(3, 'Eternal', 'Eternal-3.jpg', NULL, 'Eternal-3'),
(4, 'Green', 'green-1.png', NULL, 'green-1'),
(5, 'Green', 'green-2.png', NULL, 'green-2'),
(6, 'Hotel', 'Hotel-1.jpg', NULL, 'Hotel-1'),
(7, 'Hotel', 'Hotel-2.jpg', NULL, 'Hotel-2'),
(8, 'InterContinental', 'Intercont1.png', NULL, 'Intercont1'),
(9, 'InterContinental', 'intercont2.png', NULL, 'intercont2'),
(10, 'light-brown', 'light-brown.png', NULL, 'light-brown'),
(11, 'maroon', 'maroon.png', '', 'maroon'),
(12, 'navy', 'navy.png', NULL, 'navy'),
(13, 'pink', 'pink.png', NULL, 'pink'),
(14, 'Plain', 'Plain.jpg', NULL, 'Plain'),
(15, 'Plain', 'Plain-2.jpg', NULL, 'Plain-2.jpg'),
(16, 'Plain', 'Plain-3.jpg', 'Plain', 'Plain-3'),
(17, 'Plain', 'Plain-4.jpg', NULL, 'Plain-4'),
(18, 'Premium', 'Premium-2.jpg', '', 'Premium-2'),
(19, 'Premium-3', 'Premium-3.jpg', NULL, 'Premium-3'),
(20, 'Premium-4', 'Premium-4.jpg', NULL, 'Premium-4'),
(21, 'Premium', 'Premium-5.jpg', NULL, 'Premium-5'),
(22, 'Premium', 'Premium-6.jpg', NULL, 'Premium-6'),
(23, 'Purple', 'purple.png', NULL, 'purple');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
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
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `title1`, `gambar1`, `sub1`, `title2`, `gambar2`, `sub2`, `title3`, `gambar3`, `sub3`, `title4`, `gambar4`, `sub4`) VALUES
(1, 'Terry Palmer - Premium', 'slider1.png', '', 'Terry Palmer - Eternal', 'slider2.png', 'test2', 'Terry Palmer - ', 'slider3.png', 'test3', 'title4', 'slider4.png', 'test4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
