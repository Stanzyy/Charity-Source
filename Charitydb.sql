-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: gsarastestdb.gsaras.com
-- Generation Time: Feb 24, 2015 at 12:59 PM
-- Server version: 5.1.56
-- PHP Version: 5.4.37

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gsarastestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Charities`
--

CREATE TABLE IF NOT EXISTS `Charities` (
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
-- Dumping data for table `Charities`
--

INSERT INTO `Charities` (`charityNum`, `CharityName`, `PrivateSupport`, `TotalRevenue`, `FundraisingEfficiency`, `CharitableCommitment`, `DonorDependency`) VALUES
(1, 'Charity 1', 6.50042e+06, 1e+07, 90, 50, 100),
(2, 'Charity 2', 4e+06, 5e+06, 10, 5, 0),
(3, 'Charity 3', 250000, 1e+06, 75, 50, 90),
(4, 'Charity 4', 750000, 2e+06, 90, 20, 86);
