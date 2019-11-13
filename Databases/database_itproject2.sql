-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 05:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
  `userID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `deptFac` varchar(20) NOT NULL,
  `facEmail` varchar(20) NOT NULL,
  `facPass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_fac`
--

INSERT INTO `account_fac` (`userID`, `first_name`, `last_name`, `deptFac`, `facEmail`, `facPass`) VALUES
(3, 'jayditch', 'balansi', 'sao', 'awdawdawkll', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `account_office`
--

CREATE TABLE `account_office` (
  `officeID` int(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `depOfc` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_office`
--

INSERT INTO `account_office` (`officeID`, `firstName`, `lastName`, `depOfc`, `email`, `password`) VALUES
(3, 'sample', 'sample', 'sao', 'office@slu.edu.ph', 'officefs');

-- --------------------------------------------------------

--
-- Table structure for table `account_orgs`
--

CREATE TABLE `account_orgs` (
  `userID` int(15) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `studOrg` varchar(50) NOT NULL,
  `studPosition` varchar(50) NOT NULL,
  `studEmail` varchar(50) NOT NULL,
  `studPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_orgs`
--

INSERT INTO `account_orgs` (`userID`, `firstName`, `lastName`, `studOrg`, `studPosition`, `studEmail`, `studPassword`) VALUES
(12, 'localhost', 'localhost', 'localhost', 'localhost', 'student@slu.edu.ph', 'studentfs');

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
  `numPart` varchar(10) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL,
  `mob_num` int(11) NOT NULL,
  `eve_adviser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `firstName`, `lastName`, `eventOrg`, `actEve`, `actVenue`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`, `mob_num`, `eve_adviser`) VALUES
(5, 'h', 'gjhg', 'jhg', 'jhg', 'jhg', 'jhg', '0000-00-00', '0000-00-00', '00:00:00.000000', '00:00:00.000000', 0, '');

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
(6, '4', '433', 'Clinic', 'dwadefdsf', '50'),
(7, '4', '433', 'Clinic', 'dwadefdsf', '50'),
(8, '4', '433', 'Court', 'dwadefdsf', '50'),
(9, '4', '433', 'Laboratory', 'wda', '50'),
(10, '100', '100', 'Laboratory', 'dwadefdsf', '500'),
(11, '5', '515', 'Lecture', 'ayus', '500'),
(12, '5', '433', 'Laboratory', 'lecturelecturelecturelecturelecture', '50'),
(13, '100', '100', 'Lecture', 'wdwadawdawdawd', '4141');

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
-- Indexes for table `account_fac`
--
ALTER TABLE `account_fac`
  ADD PRIMARY KEY (`userID`);

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
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilityID`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`idSU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_fac`
--
ALTER TABLE `account_fac`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `account_office`
--
ALTER TABLE `account_office`
  MODIFY `officeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `account_orgs`
--
ALTER TABLE `account_orgs`
  MODIFY `userID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilityID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `super_user`
--
ALTER TABLE `super_user`
  MODIFY `idSU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
