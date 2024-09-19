-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 09:18 PM
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
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `name`, `description`, `price`, `image`) VALUES
(2, 'test', 'no description', 20.00, 'itstore.png'),
(3, 'test', 'no description', 30.00, 'itstore.png'),
(4, 'test', 'no description', 40.00, 'itstore.png'),
(5, 'test', 'no description', 50.00, 'itstore.png'),
(6, 'test', 'no description', 60.00, 'itstore.png'),
(7, 'test', 'no description', 70.00, 'itstore.png'),
(8, 'test', 'no description', 80.00, 'itstore.png'),
(9, 'test', 'no description', 90.00, 'itstore.png'),
(10, 'test', 'no description', 100.00, 'itstore.png'),
(11, 'test', 'no description', 110.00, 'itstore.png'),
(12, 'test', 'no description', 120.00, 'itstore.png'),
(13, 'test', 'no description', 130.00, 'itstore.png'),
(14, 'test', 'no description', 140.00, 'itstore.png'),
(15, 'test', 'no description', 150.00, 'itstore.png'),
(16, 'test', 'no description', 160.00, 'itstore.png'),
(17, 'test', 'no description', 170.00, 'itstore.png'),
(18, 'test', 'no description', 180.00, 'itstore.png'),
(19, 'test', 'no description', 190.00, 'itstore.png'),
(20, 'test', 'no description', 200.00, 'itstore.png'),
(21, 'test', 'no description', 210.00, 'itstore.png'),
(22, 'test', 'no description', 220.00, 'itstore.png'),
(23, 'test', 'no description', 230.00, 'itstore.png'),
(24, 'test', 'no description', 240.00, 'itstore.png'),
(25, 'test', 'no description', 250.00, 'itstore.png'),
(26, 'test', 'no description', 260.00, 'itstore.png'),
(27, 'test', 'no description', 270.00, 'itstore.png'),
(28, 'test', 'no description', 280.00, 'itstore.png'),
(29, 'test', 'no description', 290.00, 'itstore.png'),
(30, 'test', 'no description', 300.00, 'itstore.png'),
(31, 'test', 'no description', 310.00, 'itstore.png'),
(32, 'test', 'no description', 320.00, 'itstore.png'),
(33, 'test', 'no description', 330.00, 'itstore.png');

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
(4, 'user2', 'test2', 'user2@gmail.com', '0934565401', '11', '2024-09-17 19:05:05', 'user2', '22'),
(5, 'user3', 'test3', 'user3@gmail.com', '09345619272', '111', '2024-09-17 19:10:48', 'user3', '33'),
(6, 'user3', 'test3', 'user3@gmail.com', '09345619272', '111', '2024-09-17 19:10:48', 'user4', '44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
