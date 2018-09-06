-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2018 at 04:34 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `results`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_username`, `ad_password`) VALUES
(1, 'shiva', '123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `admno` varchar(255) NOT NULL,
  `unit1` json DEFAULT NULL,
  `unit2` json DEFAULT NULL,
  `quarterly` json DEFAULT NULL,
  `unit3` json DEFAULT NULL,
  `halfyearly` json DEFAULT NULL,
  `unit4` json DEFAULT NULL,
  `prefinals` json DEFAULT NULL,
  `annual` json DEFAULT NULL,
  PRIMARY KEY (`admno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `admno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` int(2) NOT NULL,
  `section` varchar(1) NOT NULL,
  `rollno` int(4) NOT NULL,
  `dob` date NOT NULL,
  `yoj` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_mobile` int(10) DEFAULT NULL,
  `father_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`admno`, `name`, `class`, `section`, `rollno`, `dob`, `yoj`, `username`, `password`, `father_name`, `father_mobile`, `father_email`) VALUES
('20189B32', 'Shiva Kandagatla', 9, 'B', 32, '2010-11-02', 2018, '20189B32', '20189B32', 'Mahender Kandagatla', NULL, NULL);

--
-- Triggers `students`
--
DROP TRIGGER IF EXISTS `AutoInsertAdmnoToMarksTable`;
DELIMITER $$
CREATE TRIGGER `AutoInsertAdmnoToMarksTable` BEFORE INSERT ON `students` FOR EACH ROW INSERT INTO marks SET admno = NEW.admno
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `autoStudentPassword`;
DELIMITER $$
CREATE TRIGGER `autoStudentPassword` BEFORE INSERT ON `students` FOR EACH ROW set new.password= concat(new.yoj,new.class,new.section,new.rollno)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `autoStudentUsername`;
DELIMITER $$
CREATE TRIGGER `autoStudentUsername` BEFORE INSERT ON `students` FOR EACH ROW set new.username= concat(new.yoj,new.class,new.section,new.rollno)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `autoStudentadmno`;
DELIMITER $$
CREATE TRIGGER `autoStudentadmno` BEFORE INSERT ON `students` FOR EACH ROW set new.admno=CONCAT(new.yoj,new.class,new.section,new.rollno)
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
