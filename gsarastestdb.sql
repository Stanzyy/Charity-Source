-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2015 at 05:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gsarastestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE IF NOT EXISTS `charities` (
  `charityNum` mediumint(6) NOT NULL AUTO_INCREMENT,
  `CharityName` text NOT NULL,
  `PrivateSupport` float NOT NULL,
  `TotalRevenue` float NOT NULL,
  `FundraisingEfficiency` int(11) NOT NULL,
  `CharitableCommitment` int(11) NOT NULL,
  `DonorDependency` int(11) NOT NULL,
  PRIMARY KEY (`charityNum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`charityNum`, `CharityName`, `PrivateSupport`, `TotalRevenue`, `FundraisingEfficiency`, `CharitableCommitment`, `DonorDependency`) VALUES
(1, 'Charity 1', 6500420, 10000000, 90, 50, 100),
(2, 'Charity 2', 4000000, 5000000, 10, 5, 0),
(3, 'Charity 3', 250000, 1000000, 75, 50, 90),
(4, 'Charity 4', 750000, 2000000, 90, 20, 86);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `loginNum` mediumint(9) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  PRIMARY KEY (`loginNum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Login`
--

