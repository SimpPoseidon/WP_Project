-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 27, 2022 at 08:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iips`
--

-- --------------------------------------------------------

--
-- Table structure for table `iips`
--

DROP TABLE IF EXISTS `iips`;
CREATE TABLE IF NOT EXISTS `iips` (
  `Application_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Fathers_Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Mothers_Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PostalAddress` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pincode` int(6) NOT NULL,
  `AltNo` int(10) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `CourseEnrolled` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ClassRollNo` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `EnrollmentNo` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `AccountNo` varchar(20) NOT NULL,
  `IFSC` varchar(20) NOT NULL,
  `Passbook` varchar(50) NOT NULL,
  `ReceiptNo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date_Receipt` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `ReceiptFile` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Amount_Refunded` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'No',
  `Date_of_sub` date NOT NULL,
  `Time_of_sub` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`Application_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
