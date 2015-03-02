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

INSERT INTO `charities` (`charityNum`, `CharityName`, `PrivateSupport`, `TotalRevenue`, `FundraisingEfficiency`, `CharitableCommitment`, `DonorDependency`,`Description`, `Image`) VALUES
(1, 'American Red Cross', 1079, 3504, 82, 90, 86, "The American Red Cross exists to provide compassionate care to those in need. Our network of generous donors, volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world, through five key service areas: Disaster Relief, Supporting Anerica's Military Family, Lifesaving Blood, Health and Safety Services, and International Services.", 'AmericanRedCross.jpg'),
(2, 'American Cancer Society', 871, 935, 77, 73, 100, "For over 100 years, the American Cancer Society (ACS) has worked relentlessly to save lives and create a world with less cancer. Together with millions of our supporters worldwide, we help people stay well and get well, find cures, and fight back against cancer.", 'AmericanCancerSociety.png'),
(3, 'Salvation Army', 2880, 4316, 90, 82, 56,"The Salvation Army is serving more people in the United States than ever before. We are already seeing large increases in the number of Americans seeking the basic necessities of life - food, shelter, and warmth. Approximately 30 million people received help from the Salvation Army last year.", 'SalvationArmy.png'),
(4, 'United Way', 3870, 4266, 91, 86, 100,"There are thousands of nonprofits and foundations working to target the problems that affect our region. United Way was built on the idea that if we are to make meaningful, lasting change, we have to make it easier for these efforts to come together. To make the greatest impact possible, United Way aligns a network of more than 200 independent health and human service agencies under the same set of community goals.",'UnitedWay.png');

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

