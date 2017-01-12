-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 07:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--
--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_ID`, `image_Link`, `longitude`, `latitude`, `date`, `time`) VALUES
(1, '', '80.461106', '7.747315', '2017-01-11', '12:17:52'),
(2, '', '81.421684', '7.716627', '2017-01-11', '12:18:49'),
(4, '', '81.701351', '7.716627', '2017-01-11', '13:05:43'),
(5, '', '81.357507', '6.645291', '2017-01-11', '13:07:33'),
(6, '', '80.602107', '7.111901', '2017-01-11', '13:07:33'),
(7, '', '80.745824', '7.431701', '2017-01-11', '13:11:42'),
(8, '', '79.956735', '7.760679', '2017-01-11', '13:11:42'),
(9, '', '80.276483', '7.798469', '2017-01-11', '13:12:10'),
(10, '', '7.747315', '80.461106', '2017-01-11', '13:21:02'),
(11, '', '7.716627', '81.421684', '2017-01-11', '13:26:30'),
(12, '', '7.716627', '81.701351', '2017-01-11', '13:26:30'),
(13, '', '6.645291', '81.357507', '2017-01-11', '13:28:56'),
(14, '', '7.111901', '80.602107', '2017-01-11', '13:28:56'),
(15, '', '7.431701', '80.745824', '2017-01-11', '13:28:56'),
(16, '', '7.760679', '79.956735', '2017-01-11', '13:28:56'),
(17, '', '7.798469', '80.276483', '2017-01-11', '13:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
