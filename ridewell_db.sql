-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2025 at 12:42 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridewell_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `duration` int NOT NULL,
  `period` varchar(10) NOT NULL,
  `location` varchar(255) NOT NULL,
  `aboutus` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `additional_info` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `firstname`, `lastname`, `email`, `phone`, `service_type`, `datetime`, `duration`, `period`, `location`, `aboutus`, `state`, `additional_info`, `created_at`) VALUES
(1, 'Emmanuel', 'Igbinazaka', 'emmanueligbinazaka3@gmail.com', '09138206893', 'executive-driver', '2025-12-25 09:00:00', 1, 'day', 'Banana Island', 'friend', '', '', '2025-10-03 06:40:26'),
(2, 'Lu!', 'Abikoye', 'lu@aledoy.com', '11111111111', 'corporate-driver', '2025-11-10 08:00:00', 5, 'hour', 'Ikoyi', 'ads', '', 'The driver should come wearing a suit', '2025-10-03 06:42:11'),
(3, 'John', 'Akerele', 'akerelejohn6@gmail.com', '11111111111', 'executive-driver', '2025-10-22 08:46:00', 4, 'hour', 'Lekki', 'friend', '', 'come early', '2025-10-03 07:42:09'),
(4, 'John', 'Akerele', 'akerelejohn6@gmail.com', '11111111111', 'executive-driver', '2025-10-22 08:46:00', 4, 'hour', 'Lekki', 'friend', '', 'come early', '2025-10-03 07:54:19'),
(5, 'Emmanuel', 'Igbinazaka', 'emmanueligbinazaka3@gmail.com', '09138206893', 'executive-driver', '2025-10-15 09:41:00', 6, 'day', 'Lekki', 'none', '', 'helo', '2025-10-03 08:42:13'),
(6, 'Osareniro', 'Walter', 'walterniro11@gmail.com', '08074277621', 'VIP/Executive Drivers', '2025-10-29 12:38:00', 2, 'hour', 'oseni street', 'friend', '', 'q4we', '2025-10-03 09:37:15'),
(7, 'Osareniro', 'Walter', 'walterniro11@gmail.com', '08074277621', 'VIP/Executive Drivers', '2025-10-29 12:38:00', 3, 'hour', 'oseni street', 'friend', '', 'q4we', '2025-10-03 09:43:02'),
(8, 'Osareniro', 'Walter', 'walterniro11@gmail.com', '08074277621', 'VIP/Executive Drivers', '2025-10-29 12:38:00', 1, 'day', 'oseni street', 'friend', '', 'q4we', '2025-10-03 09:43:10'),
(9, 'Osareniro', 'Walter', 'walterniro11@gmail.com', '08074277621', 'Corporate Drivers', '2025-10-29 12:38:00', 1, 'day', 'oseni street', 'friend', '', 'q4we', '2025-10-03 09:43:32'),
(10, 'John', 'Abikoye', 'akerelejohn6@gmail.com', '08035722440', 'Spy Police Drivers', '2025-11-06 18:35:00', 4, 'day', 'Lekki', 'friend', '', 'hhh', '2025-10-03 11:34:21'),
(11, 'John', 'Abikoye', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-27 01:12:00', 4, 'hour', 'Lekki', 'friend', 'Edo', 'nnn', '2025-10-03 12:07:02'),
(12, 'Emmanuel', 'Akerele', 'lu@aledoy.com', '09138206893', 'Spy Police Drivers', '2025-10-21 06:23:00', 2, 'hour', 'bauchi', '', 'Bauchi', '', '2025-10-03 12:20:42'),
(13, 'Emmanuel', 'Akerele', 'lu@aledoy.com', '09138206893', 'Spy Police Drivers', '2025-10-21 06:23:00', 2, 'hour', 'bauchi', '', 'Bauchi', '', '2025-10-03 12:22:18'),
(14, 'Deba', 'Joseph', 'emmanueligbinazaka3@gmail.com', '08035722440', 'Corporate Drivers', '2025-10-17 16:57:00', 4, 'hour', 'Lekki', 'online', '', 'dhddhh', '2025-10-03 13:01:28'),
(15, 'Deba', 'Joseph', 'emmanueligbinazaka3@gmail.com', '08035722440', 'Corporate Drivers', '2025-10-17 16:57:00', 4, 'hour', 'Lekki', 'online', '', 'dhddhh', '2025-10-03 13:02:08'),
(16, 'Deba', 'Joseph', 'emmanueligbinazaka3@gmail.com', '08035722440', 'Corporate Drivers', '2025-10-17 16:57:00', 4, 'hour', 'Lekki', 'online', '', 'dhddhh', '2025-10-03 13:02:20'),
(17, 'Deba', 'Joseph', 'emmanueligbinazaka3@gmail.com', '08035722440', 'Corporate Drivers', '2025-10-17 16:57:00', 4, 'hour', 'Lekki', 'online', 'Abia', 'dhddhh', '2025-10-03 13:04:02'),
(18, 'Eloghosa', 'Akerele', 'david23@gmail.com', '58035722440', 'VIP/Executive Drivers', '2025-10-23 14:04:00', 7, 'hour', 'bauchi', 'friend', 'Imo', 'nnn', '2025-10-03 13:05:01'),
(19, 'Emmanuel', 'Akerele', 'akerelejohn6@gmail.com', '09138206893', 'Spy Police Drivers', '2025-10-07 14:07:00', 7, 'hour', 'bauchi', 'online', 'Jigawa', 'mmmm', '2025-10-03 13:08:18'),
(20, 'Deba', 'Igbinazaka', 'dlu2@gmail.com', '80357224406', 'Corporate Drivers', '2025-11-01 19:38:00', 2, 'day', 'Banana Island', 'online', 'Lagos', 'jjshsjshs', '2025-10-03 13:38:41'),
(21, 'Emmanuel', 'Igbinazaka', 'emmanueligbinazaka3@gmail.com', '08035722440', 'Corporate Drivers', '2025-10-18 16:05:00', 5, 'hour', 'Lekki', 'friend', 'Lagos', '', '2025-10-03 15:01:43'),
(22, 'John', 'Akerele', 'johnakerele404@gmail.com', '09138206893', 'Spy Police Drivers', '2025-10-22 21:08:00', 1, 'hour', 'Yaba', 'none', 'Lagos', 'gig', '2025-10-03 15:04:04'),
(23, 'Emmanuel', 'Joseph', 'lu@aledoy.com', '09138206893', 'Spy Police Drivers', '2025-10-30 19:44:00', 3, 'hour', 'bauchi', 'friend', 'Edo', 'hhhh', '2025-10-06 18:44:28'),
(24, 'John', 'Akerele', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-28 21:57:00', 4, 'hour', 'Yaba', 'ads', 'Lagos', 'The driver should come wearing a suit', '2025-10-07 03:52:35'),
(25, 'John', 'Akerele', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-28 21:57:00', 4, 'hour', 'Yaba', 'ads', 'Lagos', 'The driver should come wearing a suit', '2025-10-07 03:52:59'),
(26, 'John', 'Akerele', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-28 21:57:00', 4, 'hour', 'Yaba', 'ads', 'Lagos', 'The driver should come wearing a suit', '2025-10-07 03:53:04'),
(27, 'John', 'Akerele', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-28 21:57:00', 4, 'hour', 'Yaba', 'ads', 'Lagos', 'The driver should come wearing a suit', '2025-10-07 03:53:27'),
(28, 'John', 'Akerele', 'lu@aledoy.com', '09138206893', 'Corporate Drivers', '2025-10-28 21:57:00', 4, 'hour', 'Yaba', 'ads', 'Lagos', 'The driver should come wearing a suit', '2025-10-07 03:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `fullname`, `email`, `phone`, `message`, `date_created`) VALUES
(1, 'Igbinazaka Emmanuel Eloghosa', 'emmanueligbinazaka3@gmail.com', '58035722440', 'Testing', '2025-10-07 12:42:19'),
(2, 'Igbinazaka Emmanuel Eloghosa', 'emmanueligbinazaka3@gmail.com', '58035722440', 'Testing', '2025-10-07 13:05:05'),
(3, 'Collins Igbinazaka .O', 'david23@gmail.com', '09138206893', 'Testing', '2025-10-07 13:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `local_gov` varchar(100) NOT NULL,
  `eligible` enum('yes','no') NOT NULL,
  `additional_info` text,
  `license_no` varchar(50) NOT NULL,
  `expiry_date` date NOT NULL,
  `dob` date NOT NULL,
  `upload_lice` varchar(255) DEFAULT NULL,
  `agree` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `firstname`, `lastname`, `email`, `phone`, `address_1`, `address_2`, `state`, `local_gov`, `eligible`, `additional_info`, `license_no`, `expiry_date`, `dob`, `upload_lice`, `agree`, `created_at`) VALUES
(1, 'John', 'Joseph', 'johnjoseph56@gmail.com', '58035722440', 'Abbey Bank', 'Chemist Bus Stop', 'Enugu', 'Somewhere sha', 'yes', 'hello sir good morning', '5ADADD5FF', '2025-10-24', '2025-10-16', 'uploads/licenses/1759475314_drivers.jpg', 'yes', '2025-10-03 07:08:34'),
(2, 'John', 'Joseph', 'johnjoseph56@gmail.com', '58035722440', 'Abbey Bank', 'Chemist Bus Stop', 'Enugu', 'Somewhere sha', 'no', 'hello sir good morning', '5ADADD5FF', '2025-10-24', '2025-10-16', '', 'yes', '2025-10-03 07:15:00'),
(3, 'John', 'Joseph', 'johnjoseph56@gmail.com', '58035722440', 'Abbey Bank', 'Chemist Bus Stop', 'Enugu', 'Somewhere sha', 'yes', 'hello sir good morning', '5ADADD5FF', '2025-10-24', '2025-10-16', 'uploads/licenses/1759476073_team1.jpg', 'yes', '2025-10-03 07:21:13'),
(4, 'John', 'Joseph', 'johnjoseph56@gmail.com', '58035722440', 'Abbey Bank', 'Chemist Bus Stop', 'Enugu', 'Somewhere sha', 'yes', 'hello sir good morning', '5ADADD5FF', '2025-10-24', '2025-10-16', 'uploads/licenses/1759477146_team1.jpg', 'yes', '2025-10-03 07:39:06'),
(5, 'Emmanuel', 'Igbinazaka', 'akerelejohn6@gmail.com', '09138206893', 'Abbey Bank', 'Chemist Bus Stop', 'Ebonyi', 'Somewhere sha', 'yes', 'hELOO', '5ADADD5FF', '2025-10-21', '2025-10-24', 'uploads/licenses/1759808023_team.jpg', 'yes', '2025-10-07 03:33:43'),
(6, 'Lu!', 'Abikoye', 'lu@aledoy.com', '11111111111', 'Abbey Bank', '55, Oseni Liadi Street', 'Ekiti', 'Oshodi', 'yes', 'I&#039;m a female', '5ADADD5FF', '2025-10-23', '2025-10-04', 'uploads/licenses/1759839043_corporate plan.jpg', 'yes', '2025-10-07 12:10:43'),
(7, 'Lu!', 'Abikoye', 'lu@aledoy.com', '11111111111', 'Abbey Bank', '55, Oseni Liadi Street', 'Ekiti', 'Oshodi', 'yes', 'I&#039;m a female', '5ADADD5FF', '2025-10-23', '2025-10-04', 'uploads/licenses/1759839083_corporate plan.jpg', 'yes', '2025-10-07 12:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `driver_price`
--

DROP TABLE IF EXISTS `driver_price`;
CREATE TABLE IF NOT EXISTS `driver_price` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(60) DEFAULT NULL,
  `price_per_hour` varchar(10) DEFAULT NULL,
  `price_per_day` varchar(20) DEFAULT NULL,
  `price_outside_lagoa` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `driver_price`
--

INSERT INTO `driver_price` (`id`, `type`, `price_per_hour`, `price_per_day`, `price_outside_lagoa`) VALUES
(1, 'Corporate Drivers', '3000', '20000', '40000'),
(2, 'Personal Drivers', '3000', '20000', ''),
(3, 'VIP/Executive Drivers', '4000', '30000', '50000'),
(7, 'Spy Police Drivers', '4000', '30000', '50000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
