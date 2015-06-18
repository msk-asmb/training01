-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 07:13 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `passcode` varchar(30) DEFAULT NULL,
  `mobileno` bigint(20) DEFAULT NULL,
  `Address` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`, `mobileno`, `Address`, `Street`, `City`, `Country`) VALUES
(1, 'test', 'test', 9247566461, '#66, Mahalaksmi nila', 'Tinfactory', 'Bangalore', 'India'),
(2, 'raghav', 'madarasu', 9980424033, '9/237-1, madarasu ni', 'Nabikota', 'Kadapa', 'India'),
(3, 'siva', 'madarasu', 9036385347, 'SR Residency', 'Pailayout', 'Bangalore', 'India'),
(5, 'ayyar', 'madarasu', 9032566461, 'Abbanagari nilayam', 'Ramapuram', 'Chennai', 'India'),
(6, 'Nilay', 'Nilay', 8147355615, 'HI-Tech Appartments', 'Sultanpalya', 'Bangalore', 'India'),
(10, 'msrkrishna', 'madarasu', 7259680483, '#999 krishna home', 'K.R Puram', 'Bangalore', 'India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
