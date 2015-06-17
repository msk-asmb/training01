-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 03:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `automate`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintime`
--

CREATE TABLE IF NOT EXISTS `logintime` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `logindate` date DEFAULT NULL,
  `logintime` time DEFAULT NULL,
  `logouttime` time DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `logintime`
--

INSERT INTO `logintime` (`sno`, `id`, `logindate`, `logintime`, `logouttime`) VALUES
(152, 1, '2015-06-16', '11:42:05', '11:44:36'),
(156, 6, '2015-06-16', '11:45:53', '11:46:27'),
(157, 6, '2015-06-16', '11:46:02', '11:47:06'),
(158, 2, '2015-06-16', '11:46:49', '12:49:00'),
(162, 1, '2015-06-16', '12:28:09', '01:19:23'),
(163, 1, '2015-06-16', '12:49:18', '00:00:00'),
(164, 2, '2015-06-16', '12:59:12', '01:34:08'),
(165, 3, '2015-06-16', '01:20:52', '00:00:00'),
(168, 1, '2015-06-16', '01:40:11', '01:40:30'),
(169, 2, '2015-06-16', '01:41:18', '01:41:33'),
(170, 2, '2015-06-16', '01:41:50', '00:00:00'),
(171, 1, '2015-06-16', '02:58:58', '03:05:11'),
(172, 2, '2015-06-16', '03:05:16', '03:54:17'),
(173, 6, '2015-06-16', '03:54:21', '04:17:15'),
(174, 1, '2015-06-16', '04:17:19', '00:00:00'),
(175, 1, '2015-06-16', '05:19:51', '00:00:00'),
(176, 1, '2015-06-17', '08:37:20', '09:04:55'),
(177, 1, '2015-06-17', '09:05:02', '11:15:23'),
(178, 1, '2015-06-17', '12:43:57', '12:46:14'),
(179, 1, '2015-06-17', '12:44:12', '00:00:00'),
(180, 1, '2015-06-17', '12:44:50', '12:45:24'),
(181, 1, '2015-06-17', '12:53:51', '12:55:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
