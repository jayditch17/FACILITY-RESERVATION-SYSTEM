-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 08:04 AM
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
-- Database: `itproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userID` int(50) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipID` int(200) NOT NULL,
  `equipName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipID`, `equipName`) VALUES
(1, 'Microphone'),
(2, 'Project'),
(3, 'Projector'),
(4, 'Chair'),
(5, 'Sound System'),
(7, 'Divider');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `FacID` int(11) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`FacID`, `Level`, `room`, `roomType`, `description`, `capacity`) VALUES
(1, 'Mezzanine', 'Mezzanine', 'OTHERS', 'LIBRARY READING AREA/ TESTING AREA', 300),
(2, '4th floor', 'D1002', 'OTHERS', 'MINI-AVR/ CONFERENCE ROOM/ MULTIMEDIA', 20),
(3, '4th floor', 'D1001', 'OTHERS', 'AVR /MULTIMEDIA', 3),
(4, '4th floor', 'Library', 'OTHERS', 'LIBRARY', 200),
(5, '4th floor', 'Librarians Office', 'OTHERS', 'Librarians Office', 0),
(6, '4th floor', 'Multimedia Room', 'OTHERS', 'Multimedia Room', 0),
(7, '4th floor', 'Workroom', 'OTHERS', 'Workroom', 0),
(8, '4th floor', 'D1028', 'Laboratory', 'Culinary Lab (BAKING)', 0),
(9, '4th floor', 'D1027', 'Laboratory', 'Culinary Lab (International Cuisine)', 0),
(10, '4th floor', 'D1026', 'OTHERS', 'HTM Storeroom', 0),
(11, '4th floor', 'D1025', 'OTHERS', 'Crockery 1', 2),
(12, '4th floor', 'D1024', 'OFFICE', 'Crockery Office', 0),
(13, '4th floor', 'D1023', 'Laboratory', 'Culinary Lab (Reserve)', 0),
(14, '4th floor', 'D1022', 'Laboratory', 'Culinary Lab (Basic)', 0),
(15, '4th floor', 'D1021', 'OTHERS', 'Crockery 2', 0),
(16, '3rd Floor', 'D906', 'LECTURE', 'NSTP room/ Multimedia', 0),
(17, '3rd Floor', 'D905', 'LECTURE', 'Lecture room/ Multimedia', 0),
(18, '3rd Floor', 'D904', 'LECTURE', 'Lecture room/ Multimedia', 0),
(19, '3rd Floor', 'D903', 'LECTURE', 'Lecture room', 0),
(20, '3rd Floor', 'D902', 'LECTURE', 'Lecture room/ Multimedia', 0),
(21, '3rd Floor', 'D901', 'LECTURE', 'Lecture room', 0),
(22, '3rd Floor', 'D911', 'OTHERS', 'Filing/ Stock room', 0),
(23, '3rd Floor', 'D912', 'OFFICE', 'Bread Office', 0),
(24, '3rd Floor', 'D913', 'OTHERS', 'Defense/ Conference Room', 0),
(25, '3rd Floor', 'D914', 'OFFICE', 'President\'s Office', 0),
(26, '3rd Floor', 'D915', 'OFFICE', 'Dean\'s Office, 1 Conference room', 0),
(27, '3rd Floor', 'D921', 'OFFICE', 'General Education Faculty Room', 0),
(28, '3rd Floor', 'D922', 'OFFICE', 'SABM GPC', 0),
(29, '3rd Floor', 'D923', 'OFFICE', 'Equipment Room', 0),
(30, '3rd Floor', 'D924', 'OTHERS', 'Internet Library', 0),
(31, '3rd Floor', 'D925', 'LECTURE', 'Lecture room/ Multimedia', 0),
(32, '3rd Floor', 'FACULTY CENTER', 'OFFICE', 'Faculty Center', 0),
(33, '2nd Floor', 'D807', 'LECTURE', 'Lecture room', 0),
(34, '2nd Floor', 'D806', 'LECTURE', 'Lecture room', 0),
(35, '2nd Floor', 'D805', 'OFFICE', 'Registrar\'s Office', 0),
(36, '2nd Floor', 'D804', 'OFFICE', 'Department Heads Office', 0),
(37, '2nd Floor', 'D803', 'LECTURE', 'Lecture room', 0),
(38, '2nd Floor', 'D802', 'LECTURE', 'Lecture room', 0),
(39, '2nd Floor', 'D801', 'LECTURE', 'Lecture room', 0),
(40, '2nd Floor', 'D811', 'OFFICE', 'Parish Office', 0),
(41, '2nd Floor', 'D812', 'CLINIC', 'Dental Clinic', 0),
(42, '2nd Floor', 'D813', 'CLINIC', 'Medical Clinic', 0),
(43, '2nd Floor', 'D814', 'LECTURE', 'Lecture room (Former DH Office)', 20),
(44, '2nd Floor', 'D815', 'OFFICE', 'SAO (1 Office & 1 Receiving/ waiting area', 0),
(45, '2nd Floor', 'D816', 'OFFICE', 'Guidance Office (3 offices & 1 receiving area)', 0),
(46, '2nd Floor', 'D821', 'LECTURE', 'Lecture room', 0),
(47, '2nd Floor', 'D822', 'LECTURE', 'Lecture room', 0),
(48, '2nd Floor', 'D823', 'LECTURE', 'Lecture room', 0),
(49, '2nd Floor', 'D824', 'OTHERS', 'Guidance Testing Center', 0),
(50, '2nd Floor', 'D825', 'Laboratory', 'F&B LAB', 0),
(51, '2nd Floor', 'D826', 'Laboratory', 'HTM Function Lab/ Multimedia', 0),
(52, 'GROUND FLOOR', 'D709', 'LECTURE', 'Lecture room', 0),
(53, 'GROUND FLOOR', 'D708', 'LECTURE', 'Lecture room', 0),
(54, 'GROUND FLOOR', 'D707', 'LECTURE', 'Lecture room', 0),
(55, 'GROUND FLOOR', 'D706', 'Laboratory', 'Housekeeping Lab', 0),
(56, 'GROUND FLOOR', 'D705', 'Laboratory', 'Front Office Lab', 0),
(57, 'GROUND FLOOR', 'D704', 'OFFICE/ Laboratory', 'Demo Lab', 0),
(58, 'GROUND FLOOR', 'D703', 'LECTURE', 'Lecture room', 0),
(59, 'GROUND FLOOR', 'D702', 'LECTURE', 'Lecture room/ Multimedia ', 0),
(60, 'GROUND FLOOR', 'D701', 'LECTURE', 'Housekeeping Stock Room', 0),
(61, 'GROUND FLOOR', 'D721', 'OFFICE', 'SQC Office', 0),
(62, 'GROUND FLOOR', 'D722', 'Laboratory', 'Comp Lab & Tech Room', 0),
(63, 'GROUND FLOOR', 'D723', 'Laboratory', 'Comp Lab & Tech Room', 0),
(64, 'GROUND FLOOR', 'D724', 'Laboratory', 'Comp Lab & 1 Tech Room', 0),
(65, 'GROUND FLOOR', 'D725', 'Laboratory', 'Comp Lab & 1 Office/ Server Room', 0),
(66, 'GROUND FLOOR', 'D726', 'LECTURE', 'Lecture room', 0),
(67, 'FIRST BASEMENT', 'D608', 'LECTURE', 'Lecture room', 0),
(68, 'FIRST BASEMENT', 'D607', 'LECTURE', 'Lecture room', 0),
(69, 'FIRST BASEMENT', 'D606', 'LECTURE', 'Lecture room', 0),
(70, 'FIRST BASEMENT', 'D605', 'LECTURE', 'Lecture room', 0),
(71, 'FIRST BASEMENT', 'D604', 'LECTURE', 'Lecture room', 0),
(72, 'FIRST BASEMENT', 'D603', 'LECTURE', 'Lecture room', 0),
(73, 'FIRST BASEMENT', 'D602', 'LECTURE', 'Lecture room', 0),
(74, 'FIRST BASEMENT', 'D601', 'OFFICE', 'SSD Office', 0),
(75, 'FIRST BASEMENT', 'D621', 'OFFICE', 'General Education Faculty Room', 0),
(76, 'FIRST BASEMENT', 'D622', 'LECTURE', 'Lecture room', 0),
(77, 'FIRST BASEMENT', 'D623', 'LECTURE', 'Lecture room', 0),
(78, 'FIRST BASEMENT', 'D624', 'OTHERS', 'Prayer Room', 0),
(79, 'FIRST BASEMENT', 'D625', 'LECTURE', 'Lecture room', 0),
(80, 'FIRST BASEMENT', 'D626', 'LECTURE', 'Lecture room', 0),
(81, 'FIRST BASEMENT', 'D627', 'LECTURE', 'Lecture room', 0),
(82, 'FIRST BASEMENT', 'D628', 'LECTURE', 'Lecture room', 0),
(83, 'FIRST BASEMENT', 'PLAZA', 'OTHERS', 'Devesse Plaza', 1000),
(84, 'SECOND BASEMENT', 'D515', 'LECTURE', 'Lecture room', 0),
(85, 'SECOND BASEMENT', 'D514', 'LECTURE', 'Lecture room', 0),
(86, 'SECOND BASEMENT', 'D513', 'LECTURE', 'Lecture room', 0),
(87, 'SECOND BASEMENT', 'D512', 'LECTURE', 'Lecture room', 0),
(88, 'SECOND BASEMENT', 'D511', 'LECTURE', 'Lecture room', 0),
(89, 'SECOND BASEMENT', 'D510', 'LECTURE', 'Lecture room', 0),
(90, 'SECOND BASEMENT', 'D509', 'LECTURE', 'Lecture room', 0),
(91, 'SECOND BASEMENT', 'D508', 'LECTURE', 'Lecture room', 0),
(92, 'SECOND BASEMENT', 'D507', 'LECTURE', 'Lecture room', 0),
(93, 'SECOND BASEMENT', 'D506', 'LECTURE', 'Lecture room', 0),
(94, 'SECOND BASEMENT', 'D505', 'LECTURE', 'Lecture room', 0),
(95, 'SECOND BASEMENT', 'D504', 'LECTURE', 'Lecture room', 0),
(96, 'SECOND BASEMENT', 'D503', 'LECTURE', 'Lecture room', 0),
(97, 'SECOND BASEMENT', 'D502', 'LECTURE', 'Lecture room', 0),
(98, 'SECOND BASEMENT', 'D501', 'OFFICE', 'General Education Faculty Room', 0),
(99, 'SECOND BASEMENT', 'D521', 'OFFICE', 'General Education Faculty Room', 0),
(100, 'SECOND BASEMENT', 'D522', 'LECTURE', 'Lecture room', 0),
(101, 'SECOND BASEMENT', 'D523', 'LECTURE', 'Lecture room', 0),
(102, 'SECOND BASEMENT', 'D524', 'LECTURE', 'Lecture room', 0),
(103, 'SECOND BASEMENT', 'D525', 'LECTURE', 'Lecture room', 0),
(104, 'SECOND BASEMENT', 'D526', 'LECTURE', 'Lecture room', 0),
(105, 'SECOND BASEMENT', 'D527', 'LECTURE', 'Lecture room', 0),
(106, 'SECOND BASEMENT', 'D528', 'LECTURE', 'Lecture room', 0),
(107, 'THIRD BASEMENT', 'D414', 'LECTURE', 'Lecture room', 0),
(108, 'THIRD BASEMENT', 'D413', 'LECTURE', 'Lecture room', 0),
(109, 'THIRD BASEMENT', 'D412', 'LECTURE', 'Lecture room', 0),
(110, 'THIRD BASEMENT', 'D411', 'LECTURE', 'Lecture room', 0),
(111, 'THIRD BASEMENT', 'D406', 'LECTURE', 'Lecture room', 0),
(112, 'THIRD BASEMENT', 'D405', 'LECTURE', 'Lecture room', 0),
(113, 'THIRD BASEMENT', 'D404', 'LECTURE', 'P E/Lecture room', 0),
(114, 'THIRD BASEMENT', 'D403', 'LECTURE', 'P E/Lecture room', 0),
(115, 'THIRD BASEMENT', 'D402', 'LECTURE', 'P E/Lecture room', 0),
(116, 'THIRD BASEMENT', 'D401', 'OFFICE', 'P E/Lecture room', 0),
(117, 'THIRD BASEMENT', 'D421', 'OFFICE', 'General Education Faculty Room', 0),
(118, 'THIRD BASEMENT', 'D422', 'LECTURE', 'Lecture room', 0),
(119, 'THIRD BASEMENT', 'D423', 'LECTURE', 'Lecture room', 0),
(120, 'THIRD BASEMENT', 'D424', 'LECTURE', 'Lecture room', 0),
(121, 'THIRD BASEMENT', 'D425', 'LECTURE', 'Lecture room', 0),
(122, 'THIRD BASEMENT', 'D426', 'LECTURE', 'Lecture room', 0),
(123, 'THIRD BASEMENT', 'D427', 'LECTURE', 'Lecture room', 0),
(124, 'THIRD BASEMENT', 'D428', 'LECTURE', 'Lecture room', 0),
(125, 'THIRD BASEMENT', 'Accounting', 'OFFICE', 'ACCOUNTING', 0),
(126, 'THIRD BASEMENT', 'Bookstore', 'OTHERS', 'BOOKSTORE', 0),
(127, 'FOURTH BASEMENT', 'D303', 'LECTURE', 'Lecture room', 0),
(128, 'FOURTH BASEMENT', 'D302', 'LECTURE', 'Lecture room', 0),
(129, 'FOURTH BASEMENT', 'D301', 'OTHERS', 'CANTEEN', 0),
(130, 'FOURTH BASEMENT', 'D321', 'LECTURE', 'Lecture room', 0),
(131, 'FOURTH BASEMENT', 'D322', 'LECTURE', 'Lecture room', 0),
(132, 'FOURTH BASEMENT', 'D323', 'LECTURE', 'Lecture room', 0),
(133, 'FOURTH BASEMENT', 'D324', 'LECTURE', 'Lecture room', 0),
(134, 'FOURTH BASEMENT', 'D325', 'LECTURE', 'Lecture room', 0),
(135, 'FOURTH BASEMENT', 'D326', 'LECTURE', 'Lecture room', 0),
(136, 'FOURTH BASEMENT', 'D327', 'LECTURE', 'Lecture room', 0),
(137, 'FIFTH BASEMENT', 'D221', 'LECTURE', 'Lecture room', 0),
(138, 'FIFTH BASEMENT', 'D222', 'LECTURE', 'Lecture room', 0),
(139, 'FIFTH BASEMENT', 'D223', 'LECTURE', 'Lecture room', 0),
(140, 'FIFTH BASEMENT', 'D224', 'LECTURE', 'Lecture room', 0),
(141, 'SIXTH BASEMENT', 'CANTEEN', 'OTHERS', 'CANTEEN', 0),
(142, 'SIXTH BASEMENT', 'SSD OFFICE', 'OFFICE', 'SSD OFFICE', 1),
(143, 'OVAL', 'OVAL AREA', 'COURT', 'Basketball Court', 0),
(144, 'OVAL', 'OVAL AREA', 'COURT', 'Volleyball/Tennis Court', 0),
(145, 'OVAL', 'OVAL AREA', 'COURT', 'Fr. Desmedt Oval', 0),
(146, 'AMPHITHEATRE', 'Amphitheatre', 'Stage Area', 'AMPHITHEATRE', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `resID` int(200) NOT NULL,
  `userID` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `start_time` datetime(6) NOT NULL,
  `end_time` datetime(6) NOT NULL,
  `statusEvent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`FacID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `FacID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
