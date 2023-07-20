-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 03:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsga`
--

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `no` int(11) NOT NULL,
  `nama_merek` varchar(20) CHARACTER SET latin1 NOT NULL,
  `warna` varchar(10) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`no`, `nama_merek`, `warna`, `jumlah`) VALUES
(2, 'CANON', 'HITAM', 20),
(3, 'HP C33XP', 'BIRU', 100),
(4, 'PIXMA MP237', 'HITAM', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
