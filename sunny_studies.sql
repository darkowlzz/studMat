-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2012 at 09:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sunny_studies`
--

-- --------------------------------------------------------

--
-- Table structure for table `matList`
--

CREATE TABLE IF NOT EXISTS `matList` (
  `title` varchar(30) NOT NULL,
  `sub_name` varchar(20) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `title_2` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matList`
--

INSERT INTO `matList` (`title`, `sub_name`, `link`) VALUES
('8089 Architecture', 'MicroProcessor', '8089.ppt'),
('Normal Forms', 'DBMS', 'good_normalization_final.ppt'),
('Prob', 'Math', 'chapter1.txt'),
('Question Bank UT-2', 'MicroProcessor', 'micro_processor_UT2');

-- --------------------------------------------------------

--
-- Table structure for table `subList`
--

CREATE TABLE IF NOT EXISTS `subList` (
  `name` varchar(30) NOT NULL DEFAULT '',
  `entries` int(3) DEFAULT '0',
  PRIMARY KEY (`name`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subList`
--

INSERT INTO `subList` (`name`, `entries`) VALUES
('DBMS', 1),
('MicroProcessor', 3),
('OS', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
