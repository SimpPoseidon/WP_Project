-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 23, 2022 at 01:40 PM
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
  `PermanentAddress` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Pincode` int(6) NOT NULL,
  `AltNo` int(10) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `LocalAddress` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Program` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ClassRollNo` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `EnrollmentNo` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ReceiptNo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date_Receipt` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `File` varchar(50) NOT NULL,
  `Amount_Refunded` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'No',
  `Date_of_sub` date NOT NULL,
  `Time_of_sub` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`Application_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iips`
--

INSERT INTO `iips` (`Application_ID`, `Name`, `Fathers_Name`, `Mothers_Name`, `PermanentAddress`, `Email`, `Pincode`, `AltNo`, `MobileNo`, `LocalAddress`, `Program`, `ClassRollNo`, `EnrollmentNo`, `ReceiptNo`, `Date_Receipt`, `Amount`, `File`, `Amount_Refunded`, `Date_of_sub`, `Time_of_sub`) VALUES
(12, 'uhfufhafa', 'fafa', 'afnagnf', 'hsyhshs', 'primesquad95@gmail.com', 345678, 62622, 2262, 'hsyhshs', 'Mtech(IT)(5.5 Year)', '6336363', 'ghgw8g73hw', 'aafaaff52525', '2022-12-14', 33636, 'images.png', 'Yes', '2022-12-25', '10:41:01 am'),
(13, 'fafaffafafafa', 'ssgsgsg', 'fafaf', 'aagagaa', 'faaf@gmail.com', 456789, 2623737, 25252, 'aagagaa', 'Mtech(IT)(5.5 Year)', '52226g2', 'ghgw8g73hw', '5fafaaa5', '2022-12-24', 552252, 'images.png', 'Yes', '2022-12-21', '10:48:39 am'),
(15, 'sfssffs', 'ssgsgsg', 'fsfsfsfs', 'aaaeaeg', 'primesquad95@gmail.com', 123456, 256773, 25252, 'aaaeaeg', 'Mtech(IT)(5.5 Year)', '522ffafa2', 'ghgw8g73hw', '5fafaaa5', '2022-12-14', 2252552, 'images.png', 'Yes', '2022-12-22', '02:26:38 pm'),
(16, 'sfssffs', 'ssgsgsg', 'sfsfs', 'sghshrhs', 'primesquad95@gmail.com', 345678, 737377, 2552, 'sghshrhs', 'Mtech(IT)(5.5 Year)', '22t222', 'sgssgsgsgs', 'aafaaff52525', '2022-12-16', 225252, 'refund_of_caution_money with student.html', 'Yes', '2022-12-24', '02:33:05 pm'),
(17, 'sfssffs', 'ssgsgsg', 'sfsfs', 'sghshrhs', 'primesquad95@gmail.com', 345678, 737377, 2552, 'sghshrhs', 'Mtech(IT)(5.5 Year)', '22t222', 'sgssgsgsgs', 'aafaaff52525', '2022-12-16', 225252, 'refund_of_caution_money with student.html', 'Yes', '2022-12-22', '02:33:51 pm'),
(18, 'fafaffafafafa', 'fafa', 'sfsfs', 'agaegae', 'mehrunkart@gmail.com', 123456, 66422, 24626, 'agaegae', 'MCA(6 Year)', '522ffafa2', '5353ssfsfs', '533533', '2022-12-13', 1234, 'D:wampserverwww/Doc/18.png', 'Yes', '2022-12-23', '05:27:19 pm'),
(19, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'primesquad95@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/19.png', 'Yes', '2022-12-23', '05:35:51 pm'),
(22, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'primesquad95@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/22.png', 'Yes', '2022-12-23', '05:38:59 pm'),
(23, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'primesquad95@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/23.png', 'Yes', '2022-12-23', '05:46:29 pm'),
(24, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'primesquad95@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/24.png', 'Yes', '2022-12-23', '05:47:03 pm'),
(25, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'primesquad95@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/25.png', 'Yes', '2022-12-23', '05:48:52 pm'),
(26, 'You', 'fsfsfsfs', 'ahaufhauoa', 'agagae', 'mehrunkart@gmail.com', 345678, 6267357, 35252, 'agagae', 'MBA(MS)(5 Year)', '522ffafa2', 'sgssgsgsgs', 'aafaaff52525', '2022-12-15', 2345, 'D:wampserverwwwProject/Doc/26.png', 'No', '2022-12-23', '05:49:53 pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
