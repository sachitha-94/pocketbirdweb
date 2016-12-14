-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 04:03 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_ID` varchar(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `lognote_ID` varchar(10) DEFAULT NULL,
  `user_ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_ID` varchar(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_ID` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `image_Link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log_note_detail`
--

CREATE TABLE `log_note_detail` (
  `note_ID` varchar(100) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `user_ID` int(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `province` varchar(50) NOT NULL,
  `nearest_city` varchar(200) NOT NULL,
  `elevation` varchar(200) NOT NULL,
  `habbitat` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `looks_like` varchar(200) NOT NULL,
  `shape` varchar(200) NOT NULL,
  `colors` varchar(200) NOT NULL,
  `special` varchar(500) NOT NULL,
  `behaviour` varchar(500) NOT NULL,
  `image_ID` varchar(200) NOT NULL,
  `track_ID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `what` varchar(20) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `what`, `email`, `password`, `active`) VALUES
(3, 'ishan', 'weragoda', 'ishan', 'nature lover', 'ishanweragoda@gmail.com', 'e77f8607ccf619ca9d4cd806c84b6772', 1),
(4, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(5, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(6, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(7, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(8, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(9, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0),
(10, 'Sachitha', 'Kariyawasam', 'sachitha', '', 'sachitha@gmail.com', 'sachitha123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
