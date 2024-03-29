-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 09:55 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `suuid` int(4) NOT NULL COMMENT 'หมายเลขผู้ใช้',
  `sugender` varchar(6) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `usname` varchar(50) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `suprovince` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `sumyfcolor` char(7) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `susize` int(2) NOT NULL,
  `sumobile_number` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `supwd` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `suintro` text COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`suuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `suuid` int(4) NOT NULL AUTO_INCREMENT COMMENT 'หมายเลขผู้ใช้';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
