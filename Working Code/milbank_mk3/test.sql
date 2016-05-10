-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2015 at 02:35 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_seats`
--

CREATE TABLE IF NOT EXISTS `event_seats` (
  `EVENT_ID` int(11) NOT NULL,
  `SEAT_ID` int(11) NOT NULL,
  `IS_BOOKED` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_seats`
--

INSERT INTO `event_seats` (`EVENT_ID`, `SEAT_ID`, `IS_BOOKED`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(1, 9, 1),
(1, 10, 1),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 24, 0),
(1, 25, 0),
(1, 26, 0),
(1, 27, 0),
(1, 28, 0),
(1, 29, 0),
(1, 30, 0),
(1, 31, 0),
(1, 32, 0),
(1, 33, 0),
(1, 34, 0),
(1, 35, 0),
(1, 36, 0),
(1, 37, 0),
(1, 38, 0),
(1, 39, 0),
(1, 40, 0),
(1, 41, 0),
(1, 42, 0),
(1, 43, 0),
(1, 44, 0),
(1, 45, 0),
(1, 46, 0),
(1, 47, 0),
(1, 48, 0),
(1, 49, 0),
(1, 50, 0),
(1, 51, 0),
(1, 52, 0),
(1, 53, 0),
(1, 54, 0),
(1, 55, 0),
(1, 56, 0),
(1, 57, 0),
(1, 58, 0),
(1, 59, 0),
(1, 60, 0),
(1, 61, 0),
(1, 62, 0),
(1, 63, 0),
(1, 64, 0),
(1, 65, 0),
(1, 66, 0),
(1, 67, 0),
(1, 68, 0),
(1, 69, 0),
(1, 70, 0),
(1, 71, 0),
(1, 72, 0),
(1, 73, 0),
(1, 74, 0),
(1, 75, 0),
(1, 76, 0),
(1, 77, 0),
(1, 78, 0),
(1, 79, 0),
(1, 80, 0),
(1, 81, 0),
(1, 82, 0),
(1, 83, 0),
(1, 84, 0),
(1, 85, 0),
(1, 86, 0),
(1, 87, 0),
(1, 88, 0),
(1, 89, 0),
(1, 90, 0),
(1, 91, 0),
(1, 92, 0),
(1, 93, 0),
(1, 94, 0),
(1, 95, 0),
(1, 96, 0),
(1, 97, 0),
(1, 98, 0),
(1, 99, 0),
(1, 100, 0),
(1, 101, 0),
(1, 102, 0),
(1, 103, 0),
(1, 104, 0),
(1, 105, 0),
(1, 106, 0),
(1, 107, 0),
(1, 108, 0),
(1, 109, 0),
(1, 110, 0),
(1, 111, 0),
(1, 112, 0),
(1, 113, 0),
(1, 114, 0),
(1, 115, 0),
(1, 116, 0),
(1, 117, 0),
(1, 118, 0),
(1, 119, 0),
(1, 120, 0),
(1, 121, 0),
(1, 122, 0),
(1, 123, 0),
(1, 124, 0),
(1, 125, 0),
(1, 126, 0),
(1, 127, 0),
(1, 128, 0),
(1, 129, 0),
(1, 130, 0),
(1, 131, 0),
(1, 132, 0),
(1, 133, 0),
(1, 134, 0),
(1, 135, 0),
(1, 136, 0),
(1, 137, 0),
(1, 138, 0),
(1, 139, 0),
(1, 140, 0),
(1, 141, 0),
(1, 142, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 1),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 0),
(2, 23, 0),
(2, 24, 0),
(2, 25, 0),
(2, 26, 0),
(2, 27, 0),
(2, 28, 0),
(2, 29, 0),
(2, 30, 0),
(2, 31, 0),
(2, 32, 0),
(2, 33, 0),
(2, 34, 0),
(2, 35, 0),
(2, 36, 0),
(2, 37, 0),
(2, 38, 0),
(2, 39, 0),
(2, 40, 0),
(2, 41, 0),
(2, 42, 0),
(2, 43, 0),
(2, 44, 0),
(2, 45, 0),
(2, 46, 0),
(2, 47, 0),
(2, 48, 0),
(2, 49, 0),
(2, 50, 0),
(2, 51, 0),
(2, 52, 0),
(2, 53, 0),
(2, 54, 0),
(2, 55, 0),
(2, 56, 0),
(2, 57, 0),
(2, 58, 0),
(2, 59, 0),
(2, 60, 0),
(2, 61, 0),
(2, 62, 0),
(2, 63, 0),
(2, 64, 0),
(2, 65, 0),
(2, 66, 0),
(2, 67, 0),
(2, 68, 0),
(2, 69, 0),
(2, 70, 0),
(2, 71, 0),
(2, 72, 0),
(2, 73, 0),
(2, 74, 0),
(2, 75, 0),
(2, 76, 0),
(2, 77, 0),
(2, 78, 0),
(2, 79, 0),
(2, 80, 0),
(2, 81, 0),
(2, 82, 0),
(2, 83, 0),
(2, 84, 0),
(2, 85, 0),
(2, 86, 0),
(2, 87, 0),
(2, 88, 0),
(2, 89, 0),
(2, 90, 0),
(2, 91, 0),
(2, 92, 0),
(2, 93, 0),
(2, 94, 0),
(2, 95, 0),
(2, 96, 0),
(2, 97, 0),
(2, 98, 0),
(2, 99, 0),
(2, 100, 0),
(2, 101, 0),
(2, 102, 0),
(2, 103, 0),
(2, 104, 0),
(2, 105, 0),
(2, 106, 0),
(2, 107, 0),
(2, 108, 0),
(2, 109, 0),
(2, 110, 0),
(2, 111, 0),
(2, 112, 0),
(2, 113, 0),
(2, 114, 0),
(2, 115, 0),
(2, 116, 0),
(2, 117, 0),
(2, 118, 0),
(2, 119, 0),
(2, 120, 0),
(2, 121, 0),
(2, 122, 0),
(2, 123, 0),
(2, 124, 0),
(2, 125, 0),
(2, 126, 0),
(2, 127, 0),
(2, 128, 0),
(2, 129, 0),
(2, 130, 0),
(2, 131, 0),
(2, 132, 0),
(2, 133, 0),
(2, 134, 0),
(2, 135, 0),
(2, 136, 0),
(2, 137, 0),
(2, 138, 0),
(2, 139, 0),
(2, 140, 0),
(2, 141, 0),
(2, 142, 0),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(3, 6, 1),
(3, 7, 0),
(3, 8, 0),
(3, 9, 1),
(3, 10, 0),
(3, 11, 0),
(3, 12, 1),
(3, 13, 1),
(3, 14, 1),
(3, 15, 1),
(3, 16, 1),
(3, 17, 1),
(3, 18, 0),
(3, 19, 0),
(3, 20, 0),
(3, 21, 0),
(3, 22, 0),
(3, 23, 0),
(3, 24, 0),
(3, 25, 0),
(3, 26, 0),
(3, 27, 0),
(3, 28, 0),
(3, 29, 0),
(3, 30, 0),
(3, 31, 0),
(3, 32, 0),
(3, 33, 0),
(3, 34, 0),
(3, 35, 0),
(3, 36, 0),
(3, 37, 1),
(3, 38, 1),
(3, 39, 1),
(3, 40, 1),
(3, 41, 1),
(3, 42, 0),
(3, 43, 1),
(3, 44, 1),
(3, 45, 1),
(3, 46, 1),
(3, 47, 1),
(3, 48, 0),
(3, 49, 0),
(3, 50, 0),
(3, 51, 0),
(3, 52, 0),
(3, 53, 0),
(3, 54, 0),
(3, 55, 0),
(3, 56, 0),
(3, 57, 0),
(3, 58, 0),
(3, 59, 0),
(3, 60, 0),
(3, 61, 1),
(3, 62, 1),
(3, 63, 0),
(3, 64, 1),
(3, 65, 1),
(3, 66, 1),
(3, 67, 0),
(3, 68, 0),
(3, 69, 0),
(3, 70, 0),
(3, 71, 0),
(3, 72, 0),
(3, 73, 1),
(3, 74, 1),
(3, 75, 1),
(3, 76, 1),
(3, 77, 1),
(3, 78, 0),
(3, 79, 0),
(3, 80, 0),
(3, 81, 0),
(3, 82, 0),
(3, 83, 0),
(3, 84, 0),
(3, 85, 0),
(3, 86, 0),
(3, 87, 0),
(3, 88, 0),
(3, 89, 0),
(3, 90, 0),
(3, 91, 1),
(3, 92, 1),
(3, 93, 1),
(3, 94, 1),
(3, 95, 1),
(3, 96, 0),
(3, 97, 1),
(3, 98, 1),
(3, 99, 1),
(3, 100, 1),
(3, 101, 0),
(3, 102, 0),
(3, 103, 0),
(3, 104, 0),
(3, 105, 0),
(3, 106, 0),
(3, 107, 0),
(3, 108, 0),
(3, 109, 0),
(3, 110, 0),
(3, 111, 0),
(3, 112, 0),
(3, 113, 0),
(3, 114, 0),
(3, 115, 0),
(3, 116, 0),
(3, 117, 0),
(3, 118, 0),
(3, 119, 1),
(3, 120, 1),
(3, 121, 1),
(3, 122, 0),
(3, 123, 0),
(3, 124, 0),
(3, 125, 0),
(3, 126, 0),
(3, 127, 0),
(3, 128, 0),
(3, 129, 0),
(3, 130, 0),
(3, 131, 1),
(3, 132, 1),
(3, 133, 1),
(3, 134, 1),
(3, 135, 1),
(3, 136, 0),
(3, 137, 1),
(3, 138, 1),
(3, 139, 1),
(3, 140, 1),
(3, 141, 1),
(3, 142, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;