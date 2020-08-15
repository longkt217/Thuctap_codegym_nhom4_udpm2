-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2013 at 06:17 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyudpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `name`, `gender`, `address`, `phone`, `email`, `hobby`) VALUES
(21, 'Phú Quốc', 'Nam', 'Hà Nội', '67357854765', 'longktttt@gmail.com', 'GameHát'),
(23, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'longklt@gmail.com', 'Game'),
(24, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'longklt@gmail.com', 'Game'),
(25, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'longklt@gmail.com', 'Game'),
(26, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'longklt@gmail.com', 'GameHát'),
(27, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'longklt@gmail.com', 'GameHát'),
(28, 'abcdef', 'Nam', 'Hà Nội', '23465264352', 'dat@gmail.com', 'Game'),
(29, 'longseu', 'Nam', 'Hà Nội', '124554', 'admin@admin.com', 'Game');

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id_dn` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`id_dn`, `email`, `pass`) VALUES
(1, '', '12345'),
(2, 'longktt@gmail.com', '12345'),
(3, 'longktl@gmail.com', '12345'),
(4, 'longklt@gmail.com', '12345'),
(5, 'longklt@gmail.com', '12345'),
(6, 'longklt@gmail.com', '12345'),
(7, 'longklt@gmail.com', '12345'),
(8, 'longklt@gmail.com', '12345'),
(9, 'dat@gmail.com', '12345'),
(10, 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `listsanpham`
--

CREATE TABLE `listsanpham` (
  `id` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listsanpham`
--

INSERT INTO `listsanpham` (`id`, `category`) VALUES
(2, 'I5-8400'),
(3, 'I9-9900K');

-- --------------------------------------------------------

--
-- Table structure for table `quequan`
--

CREATE TABLE `quequan` (
  `id` int(11) NOT NULL,
  `address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quequan`
--

INSERT INTO `quequan` (`id`, `address`) VALUES
(7, 'Đạt Nhọ'),
(8, 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`name`, `code`, `category`, `money`, `description`, `picture`) VALUES
('Phú Quốc', '04', 'I5-8400', 123450, ' alo', 'Penguins.jpg'),
('Hưng Yên', '324', 'I9-9900K', 12345, ' 123', 'Hydrangeas.jpg'),
('I3-9100F', 'i3-00', 'I3-9100F', 1850, 'alo cc ', 'Lighthouse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id_dn`);

--
-- Indexes for table `listsanpham`
--
ALTER TABLE `listsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quequan`
--
ALTER TABLE `quequan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `listsanpham`
--
ALTER TABLE `listsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quequan`
--
ALTER TABLE `quequan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
