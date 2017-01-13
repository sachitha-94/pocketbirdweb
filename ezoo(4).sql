-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 06:23 AM
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
  `comment_ID` int(255) NOT NULL,
  `note_ID` varchar(10) NOT NULL,
  `user_ID` int(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) NOT NULL,
  `viewd` tinyint(1) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_ID`, `note_ID`, `user_ID`, `date`, `time`, `content`, `viewd`, `approved`) VALUES
(1, '4', 10, '2017-01-08', '11:33:39', 'Have seen this one', 0, 0),
(2, '4', 10, '2017-01-08', '11:33:46', 'Have seen this one', 0, 0),
(3, '3', 13, '2017-01-08', '11:36:32', 'Wow seen this one but not this close', 0, 0),
(4, '3', 4, '2017-01-09', '14:59:26', 'dfgdoighieo', 0, 0),
(21, '3', 4, '0000-00-00', '10:54:56', 'o;igiorghoig oiroi', 0, 0),
(22, '3', 4, '0000-00-00', '10:56:23', 'o;igiorghoig oiroi', 0, 0),
(23, '3', 4, '2017-01-09', '19:55:28', 'bla bla bla', 0, 0),
(24, '3', 4, '2017-01-09', '19:56:58', 'bla bla bla', 0, 0),
(25, '3', 4, '2017-01-09', '19:58:03', 'TESTING 2', 0, 0),
(26, '3', 4, '2017-01-09', '20:03:47', 'TESTING 2', 0, 0),
(27, '5', 4, '2017-01-09', '20:09:39', 'this is nice', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_ID` varchar(10) NOT NULL,
  `user_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) NOT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `apprved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_ID` int(100) NOT NULL,
  `image_Link` varchar(100) NOT NULL,
  `longitude` decimal(10,0) DEFAULT NULL,
  `latitude` decimal(10,0) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log_note_detail`
--

CREATE TABLE `log_note_detail` (
  `note_ID` int(100) NOT NULL,
  `user_ID` int(200) NOT NULL,
  `image_ID` varchar(200) NOT NULL,
  `shape` int(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `province` varchar(50) NOT NULL,
  `village` varchar(100) NOT NULL,
  `exact_location` varchar(250) NOT NULL,
  `nearest_city` varchar(200) NOT NULL,
  `longitude` decimal(8,6) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `confidence level` int(3) DEFAULT NULL,
  `habbitat` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `size` varchar(200) NOT NULL,
  `looks_like` varchar(200) NOT NULL,
  `colors` varchar(200) NOT NULL,
  `behaviour` varchar(500) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `track_ID` varchar(200) NOT NULL,
  `viewed` tinyint(1) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_note_detail`
--

INSERT INTO `log_note_detail` (`note_ID`, `user_ID`, `image_ID`, `shape`, `date`, `time`, `province`, `village`, `exact_location`, `nearest_city`, `longitude`, `latitude`, `confidence level`, `habbitat`, `name`, `size`, `looks_like`, `colors`, `behaviour`, `Description`, `track_ID`, `viewed`, `approved`) VALUES
(0, 1, '', 0, '0000-00-00', '00:00:00', 'North Western and North Central provinces', '', '', 'Puttlam', '0.000000', '0.000000', 84, 'nest', '', '', '', 'Red and green', 'Red and green', NULL, '', 0, 0),
(2, 3, '', 0, '0000-00-00', '00:00:00', 'Uva province', '', '', 'Kataragama', '0.000000', '0.000000', 1145, 'Sky', '', '', '', 'brownwhite', 'flying', NULL, '', 0, 0),
(3, 4, '', 0, '0000-00-00', '00:00:00', 'Eastern province', '', '', 'Ampara', '0.000000', '0.000000', 0, 'nest', '', '', '', 'white', 'Resting', '', '', 0, 0),
(4, 3, '', 0, '0000-00-00', '00:00:00', 'Uva province', '', '', 'Kataragama', '0.000000', '0.000000', 1145, '\r\n\r\nSky\r\n', '', '', '', '\r\n\r\nbrown\r\nwhite\r\n', 'flying', NULL, '', 0, 0),
(5, 4, '', 0, '0000-00-00', '00:00:00', 'Eastern province', '', 'UOC', 'Ampara', '0.000000', '0.000000', 0, 'nest', 'bird 1', '', 'a bird', 'white', 'feeding', 'testing description 1', '', 0, 0),
(6, 10, '', 15, '2017-01-10', '09:48:27', 'Eastern', 'Kakkachchivaddai', '', 'Ampara', '81.701351', '7.474067', 75, 'Riverine Forest', '', '15-20cm', 'Parrot', 'Green', 'Eating', NULL, '', 0, 0),
(7, 10, '', 10, '2017-01-10', '09:52:24', 'Eastern', 'Eralaikulam', '', 'Batticaloa', '81.421684', '7.716627', 75, 'Home Garden', '', '21-30cm', 'Sea Bird', 'Brown', 'Eating', 'Color was brown with black', '', 0, 0),
(9, 12, '', 14, '2017-01-10', '10:13:19', 'Central', 'Udapalatha', '', 'Nuwara Eliya', '80.602107', '7.111901', 50, 'Mountain Rainforest', '', '5-10cm', 'Owl', 'Black', 'Sleeping', 'It was kind of sleeping in the day', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

CREATE TABLE `shape` (
  `shape_id` int(25) NOT NULL,
  `shape_name` varchar(30) NOT NULL,
  `shape_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` int(10) NOT NULL DEFAULT '0',
  `viewed` int(11) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `what`, `email`, `password`, `active`, `viewed`, `approved`) VALUES
(3, 'ishan', 'weragoda', 'ishan', 'nature lover', 'ishanweragoda@gmail.com', 'e77f8607ccf619ca9d4cd806c84b6772', 1, 0, 0),
(4, 'Akhila', 'Damsari', 'akhiladamsari', '', 'akhiladamsari@gmail.com', 'akhila123', 0, 0, 0),
(10, 'Sachitha', 'Kariyawasam', 'sachitha', '', 'sachitha@gmail.com', 'sachitha123', 0, 0, 0),
(11, 'Piumi', 'Nimesha', 'piuminimesha', '', 'piumi@gmail.com', 'piuminimesha', 0, 0, 0),
(12, 'Kasun ', 'Eranda', 'kasuneranda', '', 'kasun@gmail.com', 'kasuneranda', 0, 0, 0),
(13, 'Gihan', 'Ishara', 'gihanishara', '', 'gihan@gmail.com', 'gihanishara', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_ID`);

--
-- Indexes for table `log_note_detail`
--
ALTER TABLE `log_note_detail`
  ADD PRIMARY KEY (`note_ID`);

--
-- Indexes for table `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`shape_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `log_note_detail`
--
ALTER TABLE `log_note_detail`
  MODIFY `note_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
