-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 06:48 PM
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
  `QueryName` text NOT NULL,
  `TotalDonated` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`charityNum`, `CharityName`, `PrivateSupport`, `TotalRevenue`, `FundraisingEfficiency`, `CharitableCommitment`, `DonorDependency`, `Description`, `Image`, `QueryName`) VALUES
(1, 'American Red Cross', 1079, 3504, 82, 90, 86, 'The American Red Cross exists to provide compassionate care to those in need. Our network of generous donors, volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world, through five key service areas: Disaster Relief, Supporting America''s Military Family, Lifesaving Blood, Health and Safety Services, and International Services.', 'AmericanRedCross.png', 'americanredcross'),
(2, 'American Cancer Society', 871, 935, 77, 73, 100, 'For over 100 years, the American Cancer Society (ACS) has worked relentlessly to save lives and create a world with less cancer. Together with millions of our supporters worldwide, we help people stay well and get well, find cures, and fight back against cancer.', 'AmericanCancerSociety.png', 'americancancersociety'),
(3, 'Salvation Army', 2880, 4316, 90, 82, 56, 'The Salvation Army is serving more people in the United States than ever before. We are already seeing large increases in the number of Americans seeking the basic necessities of life - food, shelter, and warmth. Approximately 30 million people received help from the Salvation Army last year.', 'SalvationArmy.png', 'salvationarmy'),
(4, 'United Way', 3870, 4266, 91, 86, 100, 'There are thousands of nonprofits and foundations working to target the problems that affect our region. United Way was built on the idea that if we are to make meaningful, lasting change, we have to make it easier for these efforts to come together. To make the greatest impact possible, United Way aligns a network of more than 200 independent health and human service agencies under the same set of community goals.', 'UnitedWay.png', 'unitedway'),
(5, 'Feeding America', 1855, 1894, 99, 98, 100, 'The Feeding America network is the nations largest domestic hunger-relief organization. The nationwide network of food banks provides more than 3.3 billion meals to virtually every community in the United States through food pantries and meal programs.', 'FeedingAmerica.png', 'feedingamerica' ),
(6, 'Task Force for Global Health', 1575, 1609, 100, 100, 100, 'The Task Force for Global Health was founded as the Task Force for Child Survival in 1984. The Task Force was initially tapped to serve as a Secretariat for a consortium of global health organizations: UNICEF, WHO, The Rockefeller Foundation, The United Nations Development Programme, and the World Bank. These organizations sought Task Force support for a collaborative effort to improve child wellness and survival strategies. With the Task Force as Secretariat for the network, they resolved to work together to develop and implement a plan for global immunization efforts and measures to promote and maintain healthy children and families.', 'TaskForceforGlobalHealth.png', 'taskforceforglobalhealth'),
(7, 'Food for the Poor', 1023, 1030, 97, 96, 100, 'Food For The Poor is the largest international relief and development organization in the United States, according to the Chronicle of Philanthropy. Founded in 1982, our interdenominational Christian ministry serves the poorest of the poor in 17 countries throughout the Caribbean and Latin America. Thanks to our faithful donors, our programs provide housing, healthcare, education, fresh water, emergency relief and micro-enterprise assistance in addition to feeding hundreds of thousands of people each day.', 'FoodforthePoor.png', 'foodforthepoor'),
(8, 'Goodwill Industries International', 975, 5178, 87, 88, 67, 'Goodwill strives to enhance the dignity and quality of life of individuals and families by helping people reach their full potential through education, skills training and the power of work.  Goodwills meet the needs of all job seekers, including programs for youth, seniors, veterans, and people with disabilities, criminal backgrounds and other specialized needs. Last year, Goodwill helped more than 9.8 million people train for careers in industries such as banking, IT and health care, to name a few, and get the supporting services they needed to be successful, such as English language training, additional education, or access to transportation and child care.', 'GoodwillIndustriesInternational.png', 'goodwillindustriesinternational'),
(9, 'YMCA of the USA', 939, 6612, 87, 85, 50, 'We know that lasting personal and social change comes about when we all work together. That’s why, at the Y, strengthening community is our cause.  Every day, we work side-by-side with our neighbors to make sure that everyone, regardless of age, income or background, has the opportunity to learn, grow and thrive.', 'YMCAoftheUSA', 'ymcaoftheusa'),
(10, 'World Vision', 795, 981, 86, 83, 99, 'When our work began in 1950, our approach was basic. We provided food and shelter for children in orphanages through child sponsorship. But we have learned a lot in 64 years. Now we offer a full solution to poverty and injustice issues, and make it sustainable so it lasts.  We work in the most difficult contexts in the poorest countries, because we believe in the power of transformation. Find out more about our mission and values.  Our community development approach empowers children and families to break the cycle of poverty and reach their God-given potential.', 'WorldVision.png', 'worldvision'),
(11, 'Boys and Girls Club of America', 766, 1686, 88, 80, 78, 'Our mission is to enable all young people, especially those who need us most, to reach their full potential as productive, caring, responsible citizens.', 'BoysandGirlsClubofAmerica.png', 'boysandgirlsclubofamerica'),
(12, 'Compassion International', 657, 660, 90, 84, 98, 'Compassion International exists as a Christian child advocacy ministry that releases children from spiritual, economic, social and physical poverty and enables them to become responsible, fulfilled Christian adults.  Founded by the Rev. Everett Swanson in 1952, Compassion began providing Korean War orphans with food, shelter, education and health care, as well as Christian training.  Today, Compassion helps more than 1.5 million children in 26 countries.  A passion for children.', 'CompassionInternational.png', 'compassioninternational'),
(13, 'AmeriCares Foundation', 620, 622, 99, 98, 100, 'We respond to disasters, the ones you see and the ones you dont. When an injured child is pulled from the rubble of a massive earthquake or an expectant mom struggles without health insurance, we are there with aid that restores health and saves lives.  When poverty, disease, or deadly conflict cause health crises, we deliver medicines, medical supplies and humanitarian aid to a trusted network of clinics, hospitals and health care providers around the world. We also create and support programs that increase capacity, improve quality and provide more access to health care in the worlds poorest countries and here in the U.S.', 'AmeriCaresFoundation.png', 'americaresfoundation'),
(14, 'Habitat for Humanity International', 606, 1665, 81, 84, 88, 'At Habitat for Humanity, we build. We build because we believe that everyone, everywhere, should have a healthy, affordable place to call home. More than building homes, we build communities, we build hope and we build the opportunity for families to help themselves.  Your donation will help families break the cycle of poverty and build long-term financial security. With an affordable, stable home, families have more to spend on food, medicine, child care, education and other essentials. Your support can help us do more in all the many ways that Habitat builds.  Thanks to you, Habitat is transforming the lives of more than 4 million people around the world!', 'HabitatforHumanityInternational.png', 'habitatforhumanityinternational'),
(15, 'UNICEF', 587, 593, 94, 91, 98, 'UNICEF is the driving force that helps build a world where the rights of every child are realized. We have the global authority to influence decision-makers, and the variety of partners at grassroots level to turn the most innovative ideas into reality.  That makes us unique among world organizations, and unique among those working with the young.  We believe that nurturing and caring for children are the cornerstones of human progress.  UNICEF was created with this purpose in mind; to work with others to overcome the obstacles that poverty, violence, disease and discrimination place in a childs path.  We believe that we can, together, advance the cause of humanity.  We advocate for measures to give children the best start in life, because proper care at the youngest age forms the strongest foundation for a persons future.', 'UNICEF.png', 'unicef'),
(16, 'American Heart Association', 502, 663, 85, 78, 86, 'The American Heart Association is the nations oldest, largest voluntary organization devoted to fighting cardiovascular diseases and stroke.  Founded by six cardiologists in 1924, our organization now includes more than 22.5 million volunteers and supporters working tirelessly to eliminate these diseases. We fund innovative research, fight for stronger public health policies and provide lifesaving tools and information to save and improve lives.  Our nationwide organization includes 144 local offices and nearly 2,700 employees. We moved our national headquarters from New York to Dallas in 1975 to be more centrally located. The American Stroke Association was created as a division in 1997 to bring together the organizations stroke-related activities.  Our Mission: Building healthier lives, free of cardiovascular diseases and stroke. Our mission drives everything we do.','AmericanHeartAssociation.png', 'americanheartassociation'),
(17, 'Direct Relief', 455, 658, 94, 91, 99, 'Direct Relief is a nonprofit, nonpartisan organization that provides medical assistance to people around the world who have been affected by poverty, natural disasters, and civil unrest. Thanks to generous material and financial contributions from individuals, pharmaceutical companies, and medical equipment manufacturers, Direct Relief can work with healthcare professionals and organizations on the ground and equip them with the essential medical supplies and equipment that they need to help people recover from a disaster.  Direct Reliefs assistance programs are tailored for the particular circumstances and needs of those who have suffered from the effects of natural and man-made disasters. Direct Relief also establishes partnerships with local organizations to provide health services to people in rural areas of a country that are poor and lack basic healthcare infrastructure.', 'DirectRelief.png', 'directrelief'),
(18, 'Feed the Children', 442, 454, 93, 89, 91, 'Feed the Children exists to end childhood hunger. It is the cause upon which we were founded 35 years ago and the one that we continue to fight for each and every day.  We know it takes the power of many to end childhood hunger for good. We connect donors, experts, partners, leaders and communities to attack the problem from all angles.  We are taking a stand and we will not rest until every child has enough to eat.', 'FeedtheChildren.png', 'feedthechildren'),
(19, 'Boy Scouts of America', 362, 1240, 87, 87, 19, 'The Boy Scouts of America is one of the nations largest and most prominent values-based youth development organizations. The BSA provides a program for young people that builds character, trains them in the responsibilities of participating citizenship, and develops personal fitness.  For over a century, the BSA has helped build the future leaders of this country by combining educational activities and lifelong values with fun. The Boy Scouts of America believes that through over a century of experience, knows that helping youth is a key to building a more conscientious, responsible, and productive society.', 'BoyScoutsofAmerica.png', 'boyscoutsofamerica'),
(20, 'Step Up for Students', 332, 333, 100, 99, 86, 'Step Up For Students was created to help alleviate the enormous educational challenges faced by children in Florida who live in or near poverty. The program provides Tax Credit Scholarships to students in K-12 who come from low-income families. These scholarships allow the students to consider a participating private school or an out-of-district public school that may better suit their individual needs, an option which already is available to families of greater financial means. This choice is not based on whether the public school is judged as succeeding or failing. Rather, it recognizes that different children learn in different ways and that our collective struggle is to help the students who often are at the greatest disadvantage in modern education.', 'StepUpforStudents.png', 'stepupforstudents');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
`count` mediumint(6) NOT NULL,
  `loginNum` int(11) NOT NULL,
  `DonatedTo` text NOT NULL,
  `AmountDonated` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`count`, `loginNum`, `DonatedTo`, `AmountDonated`) VALUES
(5, 1, 'American Red Cross', 10),
(6, 2, 'American Cancer Society', 10);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginNum`, `Email`, `Password`, `FirstName`, `LastName`, `amountDonated`) VALUES
(1, 'anon@gmail.com', 'anon', 'anon', 'anon', 200),
(2, 'bob@gmail.com', 'bobo', 'bob', 'boberson', 10);

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
MODIFY `charityNum` mediumint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
MODIFY `count` mediumint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `loginNum` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
