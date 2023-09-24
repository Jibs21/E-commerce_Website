-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 01:48 PM
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
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproductform`
--

CREATE TABLE `addproductform` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproductform`
--

INSERT INTO `addproductform` (`id`, `name`, `price`, `image`) VALUES
(1, '1', '1', 'avr3.jpg'),
(2, 'ahsidhaisdh', '232', 'avr1.jpg'),
(3, 'ahsidhaisdh', '23222', 'avr4.jpg'),
(4, 'Manage', '23232', 'case2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `usertype`) VALUES
(2, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2@gmail.com', 'user'),
(3, '123', '202cb962ac59075b964b07152d234b70', '123@gmail.com', 'user'),
(4, 'jayvee', '9890f4e423f1fa56e6eaf13e95bcd590', 'jv@gmail.com', 'user'),
(5, 'dsadsa', '6512bd43d9caa6e02c990b0a82652dca', 'dsaas@gmail.com', 'user'),
(6, 'jj', 'bf2bc2545a4a5f5683d9ef3ed0d977e0', 'jj@gmail.com', 'user'),
(9, 'admin', '202cb962ac59075b964b07152d234b70', 'admin123@gmail.com', 'admin'),
(10, 'user', '123', 'user123@gmail.com', 'user'),
(11, 'hh', 'c20ad4d76fe97759aa27a0c99bff6710', 'hh@gmail.com', 'user'),
(12, 'yy', '202cb962ac59075b964b07152d234b70', 'yy@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproductform`
--
ALTER TABLE `addproductform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproductform`
--
ALTER TABLE `addproductform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
