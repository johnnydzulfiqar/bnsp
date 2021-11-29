-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 01:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `tanggalLahir` date NOT NULL,
  `email` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `name`, `tanggalLahir`, `email`, `jeniskelamin`, `image`, `image_text`, `alamat`, `status`) VALUES
(16, 'Geralt Of Rivia', '2021-10-15', 'lordnaufa@gmail.com', 'Laki-Laki', 'geralt-thumbs-up.jpg', 0, 'Pojok tengah', 'TIDAK DITERIMA'),
(101, 'Naufa Dzulfiqar', '1999-10-15', 'lordnaufa@gmail.com', 'Other', '32432.jpg', 0, 'Pojok tengah', 'DITERIMA'),
(109, 'kokom', '2021-10-15', 'lordnaufa@gmail.com', 'Perempuan', 'navy-butterfly.jpg', 0, 'Pojok tengah', 'CADANGAN'),
(110, 'dadang', '2021-10-15', 'lordnaufa@gmail.com', 'Laki-Laki', 'meterai.jpg', 0, 'Belum Di Konfirmasi', 'TIDAK DITERIMA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `level`) VALUES
(1, 'admin', 'admin', 'administrator', 1),
(4, 'naufa', 'naufa', 'Muhammad Naufa Dzulfiqar', 0),
(508, 'dadang', 'naufa', 'dadang', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50590;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
