-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 04:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projct`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `name`, `price`, `postingdate`) VALUES
(2, 'test1', 10, '2024-09-18 14:03:06'),
(3, 'test2', 20, '2024-09-18 14:03:06'),
(4, 'test3', 30, '2024-09-18 14:03:06'),
(5, 'test4', 40, '2024-09-18 14:03:06'),
(6, 'test5', 50, '2024-09-18 14:03:30'),
(7, 'test6', 60, '2024-09-18 14:03:30'),
(8, 'test7', 70, '2024-09-18 14:04:47'),
(9, 'test8', 80, '2024-09-18 14:04:47'),
(10, 'test9', 90, '2024-09-18 14:04:47'),
(11, 'test10', 100, '2024-09-18 14:04:47'),
(12, 'test11', 110, '2024-09-18 14:04:47'),
(13, 'test12', 120, '2024-09-18 14:04:47'),
(14, 'test13', 130, '2024-09-18 14:04:47'),
(15, 'test14', 140, '2024-09-18 14:04:47'),
(16, 'test15', 150, '2024-09-18 14:04:47'),
(17, 'test16', 160, '2024-09-18 14:04:47'),
(18, 'test17', 170, '2024-09-18 14:04:47'),
(19, 'test18', 180, '2024-09-18 14:04:47'),
(20, 'test19', 190, '2024-09-18 14:04:47'),
(21, 'test20', 200, '2024-09-18 14:04:47'),
(22, 'test21', 210, '2024-09-18 14:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` char(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `postingdate`, `username`, `password`) VALUES
(1, 'Athip', 'Praneewat', 'athip.pra@gmail.com', '0968743839', '111 test long address test 72000', '2024-09-17 15:43:04', 'cza', '12'),
(3, 'user1', 'test1', 'user1@gmail.com', '0934560913', '11111 thai 70000', '2024-09-17 18:28:16', 'user1', '12'),
(4, 'user2', 'test2', 'user2@gmail.com', '0934565401', '11', '2024-09-17 19:05:05', 'user2', '22'),
(5, 'user3', 'test3', 'user3@gmail.com', '09345619272', '111', '2024-09-17 19:10:48', 'user3', '33'),
(6, 'user3', 'test3', 'user3@gmail.com', '09345619272', '111', '2024-09-17 19:10:48', 'user3', '33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
