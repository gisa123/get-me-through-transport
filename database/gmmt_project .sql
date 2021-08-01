-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2021 at 12:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmmt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `journey_from` varchar(255) NOT NULL,
  `journey_to` varchar(255) NOT NULL,
  `book_number` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `journey_from`, `journey_to`, `book_number`, `book_date`, `price`) VALUES
(1, 'rubavu', 'musanze', 6, '2021-07-27', 700),
(2, 'kigali', 'huye', 12, '2021-07-29', 3500),
(3, 'karangi', 'muhanga', 20, '2021-08-04', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `bus_no` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_model` varchar(30) NOT NULL,
  `number_of_seat` int(11) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_no`, `bus_id`, `bus_model`, `number_of_seat`, `departure_time`, `arrival_time`) VALUES
(23, 1, 'volvo', 24, '07:24:58', '08:24:58'),
(13, 2, 'taxi', 3, '13:30:51', '14:30:51'),
(45, 3, 'bertin', 8, '18:32:00', '05:32:00'),
(13, 4, 'tata', 8, '09:47:00', '10:47:00'),
(34, 5, 'gisa', 5, '14:11:00', '16:11:00'),
(90, 6, 'kari', 34, '07:22:00', '08:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

DROP TABLE IF EXISTS `journey`;
CREATE TABLE IF NOT EXISTS `journey` (
  `journey_id` int(11) NOT NULL,
  `journey_from` varchar(255) NOT NULL,
  `journey_to` varchar(255) NOT NULL,
  `journey_date` date NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`journey_id`),
  KEY `book_id` (`book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey`
--

INSERT INTO `journey` (`journey_id`, `journey_from`, `journey_to`, `journey_date`, `book_id`) VALUES
(1, 'nyagatare', 'rwamagana', '2021-07-07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_type`) VALUES
(20, 'gisa', 'gisa@gmail.com', '123e', 'admin'),
(21, 'prudent', 'dfghj@gmail.com', '1234', 'client'),
(19, 'hey', 'hey@gmail.com', 'hey1', 'client'),
(18, 'gisa1', 'rtyu@gmail.com', '12345', 'client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
