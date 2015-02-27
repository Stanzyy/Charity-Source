-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: gsarastestdb.gsaras.com
-- Generation Time: Feb 27, 2015 at 07:59 AM
-- Server version: 5.1.56
-- PHP Version: 5.4.37

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gsarastestdb`
--

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

