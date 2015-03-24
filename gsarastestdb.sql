-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 07:41 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
`charityNum` mediumint(6) NOT NULL,
  `CharityName` text NOT NULL,
  `PrivateSupport` float NOT NULL,
  `TotalRevenue` float NOT NULL,
  `FundraisingEfficiency` int(11) NOT NULL,
  `CharitableCommitment` int(11) NOT NULL,
  `DonorDependency` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL,
  `QueryName` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`charityNum`, `CharityName`, `PrivateSupport`, `TotalRevenue`, `FundraisingEfficiency`, `CharitableCommitment`, `DonorDependency`, `Description`, `Image`, `QueryName`) VALUES
(1, 'American Red Cross', 1079, 3504, 82, 90, 86, 'The American Red Cross exists to provide compassionate care to those in need. Our network of generous donors, volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world, through five key service areas: Disaster Relief, Supporting America''s Military Family, Lifesaving Blood, Health and Safety Services, and International Services.', 'AmericanRedCross.png', 'americanredcross'),
(2, 'American Cancer Society', 871, 935, 77, 73, 100, 'For over 100 years, the American Cancer Society (ACS) has worked relentlessly to save lives and create a world with less cancer. Together with millions of our supporters worldwide, we help people stay well and get well, find cures, and fight back against cancer.', 'AmericanCancerSociety.png', 'americancancersociety'),
(3, 'Salvation Army', 2880, 4316, 90, 82, 56, 'The Salvation Army is serving more people in the United States than ever before. We are already seeing large increases in the number of Americans seeking the basic necessities of life - food, shelter, and warmth. Approximately 30 million people received help from the Salvation Army last year.', 'SalvationArmy.png', 'salvationarmy'),
(4, 'United Way', 3870, 4266, 91, 86, 100, 'There are thousands of nonprofits and foundations working to target the problems that affect our region. United Way was built on the idea that if we are to make meaningful, lasting change, we have to make it easier for these efforts to come together. To make the greatest impact possible, United Way aligns a network of more than 200 independent health and human service agencies under the same set of community goals.', 'UnitedWay.png', 'unitedway');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
`count` mediumint(6) NOT NULL,
  `loginNum` int(11) NOT NULL,
  `DonatedTo` text NOT NULL,
  `AmountDonated` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`count`, `loginNum`, `DonatedTo`, `AmountDonated`) VALUES
(1, 1, 'American Cancer Society', 100),
(2, 1, 'Salvation Army', 50),
(3, 1, 'United Way', 20),
(4, 1, 'United Way', 88);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`loginNum` mediumint(9) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `amountDonated` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginNum`, `Email`, `Password`, `FirstName`, `LastName`, `amountDonated`) VALUES
(1, 'anon@gmail.com', 'anon', 'anon', 'anon', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
 ADD PRIMARY KEY (`charityNum`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
 ADD PRIMARY KEY (`count`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`loginNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
MODIFY `charityNum` mediumint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
MODIFY `count` mediumint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `loginNum` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
