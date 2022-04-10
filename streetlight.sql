-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2019 at 06:38 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lightcode` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `progress` enum('pending','working','resolved') NOT NULL,
  `status` enum('read','unread') NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `lightcode`, `email`, `phone`, `purpose`, `progress`, `status`, `time`) VALUES
(1, 12355, 'amrutmishra@gmail.com', 1234567890, 'Defect in pole', 'resolved', 'read', '2019-12-04 15:40:16'),
(2, 3, 'amru@gmail.com', 123, 'Defect in pole', 'resolved', 'read', '2019-12-12 13:16:29'),
(3, 4, 'someone@gmail.com', 1234567890, 'Light problem', 'resolved', 'read', '2019-12-12 13:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `time` timestamp NOT NULL,
  `status` enum('read','unread') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `purpose`, `time`, `status`) VALUES
(1, 'abinash', 'abinsah@gmail.com', 1234567890, 'i want a soda', '2019-12-04 09:39:02', 'unread'),
(2, 'munu', 'munu@gmail.com', 1234567890, 'i want meet my bf', '2019-12-04 09:40:33', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Amrutansu Mishra', 'amrutansu@gmail.com', 1234567890, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `streetlight`
--

DROP TABLE IF EXISTS `streetlight`;
CREATE TABLE IF NOT EXISTS `streetlight` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `area` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `brightness` enum('LOW','HIGH','OFF') NOT NULL,
  `ldrvalue` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streetlight`
--

INSERT INTO `streetlight` (`id`, `area`, `status`, `brightness`, `ldrvalue`) VALUES
(1, 'CET', 'ON', 'OFF', 0),
(2, 'CET', 'OFF', 'OFF', 0),
(3, 'CET', 'OFF', 'OFF', 0),
(4, 'CET', 'OFF', 'OFF', 0),
(5, 'CET', 'OFF', 'LOW', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
