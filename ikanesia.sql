-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikanesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `gambar`, `nama`, `deskripsi`, `harga`, `status`, `rating`) VALUES
(1, '2064313874_hmsr.jpg', 'Halfmoon Super Red', 'Usia Indukan, Size Induk, Kualitas Jos', 50000, 'Ada', 3.5),
(2, '1239417986_plakatwp.jpg', 'Plakat White Platinum', 'Ikan sangat berkualitas', 100000, 'Ada', 4),
(3, '1625730250_ctbesgel.jpg', 'Crowntail Besgel HM', 'Ikan Murahan banget', 10005, 'Habis', 2),
(10, '1592295970_1734055087_ikan1.jpg', 'Crowntail Super Black', 'Size Indukan', 1000000, 'Habis', NULL),
(11, '1661645720_626084550_besgel.jpg', 'Plakat Female', 'Ikan Ajaib', 80000, 'Ada', NULL),
(12, '1649213747_1477046682_besgel.jpg', 'Plakat Besgel Avatar', 'Ikan Murah banget', 5000, 'Ada', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
('2976e3a0-448b-11ec-96d6-7085c2f1cf35', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
