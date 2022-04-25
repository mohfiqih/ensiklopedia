-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 06:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensiklopedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_namalengkap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_foto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(1) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_created`, `user_edited`, `user_status`) VALUES
('220318072422', 'fiqih', '$2y$10$tGv5TBr7Zhacnv9Zl9wJ4eUAdbFzWimIoZRZcOXs88rRx3EaESDRu', 'Moh. Fiqih Erinsyah', 'd1101e3ebdf6db429d5c19e6a792c44f.png', 1, '2022-03-18 13:24:22', NULL, '1'),
('220425054953', 'ajeng', '$2y$10$t7/gsltxl3i3uegeQQmYH.QM/1T5ow5DcGKwcHKa2XHvlvzPXd9vq', 'ajeng', 'ce955655f13b0cf54a67bbb2cdd5648a.png', 1, '2022-04-25 10:49:54', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_nama` (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
