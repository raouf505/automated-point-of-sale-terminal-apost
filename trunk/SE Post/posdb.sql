-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2011 at 08:34 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(4) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `pathOfPicture` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Id`, `Name`, `Price`, `Quantity`, `Type`, `pathOfPicture`) VALUES
(16, 'sopp', 12, 10, 'utilities', ''),
(17, 'sopp', 12, 10, 'grocery', ''),
(18, 'sopp', 14, 11, 'grocery', ''),
(19, 'a', 14, 10, 'grocery', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Id`, `Name`, `Password`, `Type`) VALUES
(1, 'Maaz', 'xyz', 'Administrator'),
(2, 'humayun', '12345', 'Administrator');
