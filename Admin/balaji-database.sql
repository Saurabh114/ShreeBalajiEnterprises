-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2021 at 05:07 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(30) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `admin_name`, `email_id`, `password`) VALUES
(5, 'khushal', 'k@123', '$2a$04$8sigLhTzHXJ1MzJAEZXBKu3ZGeN2/Uuu/qiM0MRV3TzRmiAwurewu'),
(6, 'webcoder', 'webcoder@gmail.com', '$2y$10$1a2KjdOxTXRiRl/vMpvbUuqfSPm8s..GBJ9GzAIQA9BcaAaIEAvFm');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `bid` int(30) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(50) NOT NULL,
  `blog_summary` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_date` date NOT NULL,
  `blog_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `blog_title`, `blog_summary`, `blog_content`, `blog_date`, `blog_image`) VALUES
(1, 'Mazagon Dockyard IPO Allotment Status', 'Incorporated in 1934, Mazagon Dock Shipbuilders Ltd is the India\'s leading defence public sector undertaking shipyard under the Ministry of Defense Mazagon Dock is primarily engaged in constructing and repairing warships and submarines for the MoD and other types of vessels i.e. cargo ships, multipurpose support vessels, barges and border outposts, tugs, dredgers, water tankers, etc. for commercial clients. It is the only shipyard to build destroyers and conventional submarines to be used by the Indian Navy.', '<p>The business has 2 key operating divisions - Shipbuilding division that undertakes building and repairing of naval ships, whereas Submarine and heavy engineering division includes building, repairing, and refitting of diesel electric submarines. Till 2020, the company has built 795 vessels, including 25 warships, 4 missile boats, 3 submarines, 6 Leander class frigates, 3 Godavari class frigates, 3 Shivalik class frigates, 3 corvettes, and 6 destroyers. Mazagon Dock shipyard is strategically located on the west coast of India, the sea route that connects Europe, Pacific Rim, and West Asia.</p>\r\n\r\n<p><strong>Competitive Strength</strong></p>\r\n\r\n<ul>\r\n	<li>India&#39;s leading public sector defense shipyard company.</li>\r\n	<li>World-class infrastructure facilities.</li>\r\n	<li>Strategic location at Mumbai on the west coast of India.</li>\r\n	<li>Strong order book and financial position.</li>\r\n</ul>\r\n', '2021-01-04', 'uploads/1609769022-dockyard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `message`, `time`) VALUES
(2, 'SLOVINSKI7975', 'DIPAOLA6352@thefmail.com', 'Hi', 'Thank you!!1', '2021-01-11 14:09:45'),
(3, 'CoreyNEs', 'no-replyFamsgusiase@gmail.com', 'A new method of email distribution.', 'Good day!  smeiposervice.com \r\n \r\nDid you know that it is possible to send letter fully legally? \r\nWe providing a new way of sending letter through feedback forms. Such forms are located on many sites. \r\nWhen such commercial offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nalso, messages sent through contact Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis letter is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693', '2021-01-11 23:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `pdes` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pdes`, `pimage`) VALUES
(16, 'Laurel Copper Winding Wire', 'Approx. Price: Rs 545 / Piece', 'uploads/1610374800-29.jpg'),
(18, 'Fiber Sleeves', 'Approx. Price: Rs 250 / Packet', 'uploads/1610374896-9.jpg'),
(20, 'Submersible Winding Wires', 'Approx. Price: Rs 35 / Meter', 'uploads/1610375114-23.jpg'),
(19, 'Vagale Submersible Copper Wire', 'Approx. Price: Rs 505 / Kilogram', 'uploads/1610374929-34.jpg'),
(17, 'Balaji Submersible Winding Wire', 'Approx. Price: Rs 490 / Kilogram', 'uploads/1610374853-5.jpg'),
(21, 'RR Shramik Enameled Copper Wire', 'Approx. Price: Rs 590 / Kilogram', 'uploads/1610375303-19.jpg'),
(22, 'DR. Varnish', '', 'uploads/1610375323-7.jpg'),
(23, 'SKF Bearing', 'Approx. Price: Rs 196 / Piece', 'uploads/1610376815-42.jpg'),
(24, 'SKF Grease Tube', 'Approx. Price: Rs 55 / Milliliter', 'uploads/1610376894-41.jpg'),
(25, 'Garware polyster paper', '', 'uploads/1610376921-49.jpg'),
(26, 'Omega Rubber tape', '', 'uploads/1610377045-32.jpg'),
(27, 'R R Cable', '', 'uploads/1610377070-17.jpg'),
(28, 'R R Shramik Submersible Winding Wire', '<p>Price Rs. 585/kg</p>\r\n', 'uploads/1610377136-22.jpg'),
(29, 'Capital Submersible Wire', 'Approx. Price: Rs 510 / Kilogram', 'uploads/1610377511-54.jpg'),
(30, 'SKF Ball Bearing', 'Approx. Price: Rs 196 / Piece', 'uploads/1610377533-20.jpg'),
(31, 'SKF Grease', 'Approx. Price: Rs 209 / Kilogram', 'uploads/1610377608-40.jpg'),
(32, 'R R Flat cable', 'Approx. Price: Rs 35 / Meter', 'uploads/1610377632-18.jpg'),
(33, 'Submersible Pump Cable', 'Contact to get Best Price', 'uploads/1610377667-21.jpg'),
(34, 'Swastik Super Enameled Cooper Wire', 'Approx. Price: Rs 525 / Kilogram', 'uploads/1610378272-52.png'),
(35, 'Polycab Submersible Winding Wire', 'Approx. Price: Rs 575 / Kilogram', 'uploads/1610378323-11.jpg'),
(36, 'HCH Bearing', 'Contact To get Best Price', 'uploads/1610378394-36.png'),
(37, 'Jyoti varnish', 'Approx. Price: Rs 175 / Kilogram', 'uploads/1610381582-24.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
