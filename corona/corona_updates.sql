-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2021 at 10:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona_updates`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

DROP TABLE IF EXISTS `hospital_details`;
CREATE TABLE IF NOT EXISTS `hospital_details` (
  `hospitalId` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalName` varchar(255) NOT NULL,
  `hospitalDesc` text NOT NULL,
  `totalSeats` int(11) NOT NULL,
  `city` varchar(155) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `vaccination` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`hospitalId`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`hospitalId`, `hospitalName`, `hospitalDesc`, `totalSeats`, `city`, `latitude`, `longitude`, `vaccination`, `featured`, `status`) VALUES
(1, 'Sushrusha Hospital & Research Centre, Vikhroli\r\n', '', 30, 'Lathur', '', '', 1, 1, 1),
(2, 'KJ Somaiya Hospital & Research Centre\r\n\r\n', '', 20, 'NAVI MUMBAI', '', '', 1, 0, 1),
(3, 'Dr Balabhai Nanavati Hospital\r\n\r\n', '', 21, 'Pune', '', '', 1, 0, 1),
(4, 'Wockhardt Hospital\r\n\r\n', '', 25, 'Nagpur', '', '', 1, 1, 1),
(5, 'Sir HN Reliance Foundation Hospital\r\n\r\n', '', 26, 'Nanded', '', '', 1, 0, 1),
(6, 'Saifee Hospital\r\n\r\n', '', 27, 'Solapur', '', '', 1, 0, 1),
(7, 'PD Hinduja Hospital & MRC\r\n\r\n', '', 26, 'Chennai', '', '', 1, 0, 1),
(8, 'Lilavati Hospitals & Medical Research Centre\r\n', '', 40, 'Kolkata', '', '', 1, 0, 1),
(9, 'Guru Nanak Hospital\r\n', '', 24, 'Hyderabad', '', '', 1, 0, 1),
(10, 'Bombay Hospital\r\n\r\n', '', 25, 'Mumbai', '', '', 1, 0, 1),
(11, 'Fortis, Mulund\r\n', '', 30, 'Pamval', '', '', 1, 0, 1),
(12, 'Global Hospital\r\n\r\n', '', 22, 'Raigarh', '', '', 1, 0, 1),
(13, 'Sarvodaya Hospital\r\n\r\n', '', 25, 'Bengaluru', '', '', 1, 0, 1),
(14, 'Karuna Hospital\r\n\r\n', '', 22, 'Kolkata', '', '', 1, 0, 1),
(15, 'HJ Doshi Ghatkopar Hindu Sabha Hospital\r\n\r\n', '', 50, 'Jodhpur', '', '', 1, 0, 1),
(16, 'Kokilaben Dhirubhai Ambani Hospital\r\n', '', 37, 'Delhi', '', '', 1, 0, 1),
(17, 'SRCC Children\'s Hospital\r\n', '', 15, 'Manipur', '', '', 1, 0, 1),
(18, 'Surana Sethia Hospital\r\n\r\n', '', 23, 'Belgavi', '', '', 1, 0, 1),
(19, 'Holy Spirit Hospital\r\n', '', 26, 'Chandrapore', '', '', 1, 0, 1),
(20, 'Tata Hospital\r\n\r\nRead more at:\r\nhttps://mumbaimirror.indiatimes.com/coronavirus/news/list-of-private-hospitals-that-can-give-covid-19-vaccine-in-mumbai/articleshow/81297898.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', '', 23, 'Delhi', '', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `userEmailId` varchar(255) NOT NULL,
  `userPassword` varchar(155) NOT NULL,
  `userStatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmailId`, `userPassword`, `userStatus`) VALUES
(1, 'deblina', 'deblina.chanda86@gmail.com', '123456', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
