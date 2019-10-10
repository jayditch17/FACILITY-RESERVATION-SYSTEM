-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 04:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_itproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_fac`
--

CREATE TABLE `account_fac` (
  `userID` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `deptFac` varchar(50) NOT NULL,
  `facEmail` varchar(50) NOT NULL,
  `facPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_office`
--

CREATE TABLE `account_office` (
  `officeID` int(15) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `depOfc` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_orgs`
--

CREATE TABLE `account_orgs` (
  `userID` varchar(15) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `studOrg` varchar(50) NOT NULL,
  `studPostition` varchar(50) NOT NULL,
  `studEmail` varchar(50) NOT NULL,
  `studPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(50) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `eventOrg` varchar(15) NOT NULL,
  `actEve` varchar(50) NOT NULL,
  `actVenue` varchar(50) NOT NULL,
  `numPart` int(10) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `firstName`, `lastName`, `eventOrg`, `actEve`, `actVenue`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`) VALUES
(110, 'jay', 'ditch', 'rpg', 'sportsfest', 'courts', 90, '2019-11-01', '2019-11-14', '14:00:00.000000', '23:00:00.000000'),
(989, 'Jayditch', 'Balansi', 'sicap', 'fund raising', 'oval', 90, '0000-00-00', '0000-00-00', '07:00:00.000000', '16:00:00.000000'),
(3387, 'Jayditch', 'Hakdog', 'jpia', 'sportsfest', 'oval ', 89, '2019-10-23', '2019-10-29', '09:00:00.000000', '15:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilityID` int(15) NOT NULL,
  `facilityLevel` varchar(15) NOT NULL,
  `facilityRoom` varchar(15) NOT NULL,
  `roomType` varchar(50) NOT NULL,
  `roomDescription` varchar(50) NOT NULL,
  `roomCapacity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilityID`, `facilityLevel`, `facilityRoom`, `roomType`, `roomDescription`, `roomCapacity`) VALUES
(2, '1', '555', 'Lecture', 'Thesis natin', '10'),
(3, '5', '515', 'Lecture', 'meeting meetingmeeting meetingmeeting meetingmeeti', '50');

-- --------------------------------------------------------

--
-- Table structure for table `super_user`
--

CREATE TABLE `super_user` (
  `idSU` int(11) NOT NULL,
  `uidSU` tinytext NOT NULL,
  `emailSU` tinytext NOT NULL,
  `pwdSU` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_user`
--

INSERT INTO `super_user` (`idSU`, `uidSU`, `emailSU`, `pwdSU`) VALUES
(1, 'superadmin', 'superadmin@localhost.ph', '$2y$10$FCZfAUqW2TnmnQ9C568CnOcYEPhquuU28.TCilj8r2WzMpaRkj3O6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_office`
--
ALTER TABLE `account_office`
  ADD PRIMARY KEY (`officeID`);

--
-- Indexes for table `account_orgs`
--
ALTER TABLE `account_orgs`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`idSU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_office`
--
ALTER TABLE `account_office`
  MODIFY `officeID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_user`
--
ALTER TABLE `super_user`
  MODIFY `idSU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
