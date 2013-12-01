-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2013 at 10:20 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtester`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SessionID` int(11) DEFAULT '0',
  `TestID` int(11) DEFAULT '0',
  `QuesID` int(11) DEFAULT '0',
  `A1` tinyint(1) NOT NULL DEFAULT '0',
  `A2` tinyint(1) NOT NULL DEFAULT '0',
  `A3` tinyint(1) NOT NULL DEFAULT '0',
  `A4` tinyint(1) NOT NULL DEFAULT '0',
  `A5` tinyint(1) NOT NULL DEFAULT '0',
  `A6` tinyint(1) NOT NULL DEFAULT '0',
  `AnswerText` text,
  `SortOrder` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `QuesID` (`QuesID`),
  KEY `SessionID` (`SessionID`),
  KEY `TestID` (`TestID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ID`, `SessionID`, `TestID`, `QuesID`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `AnswerText`, `SortOrder`) VALUES
(1, 1, 2, 10, 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 2, 9, 0, 0, 1, 0, 0, 0, '', 2),
(3, 1, 2, 8, 0, 0, 0, 1, 0, 0, '', 3),
(4, 1, 2, 11, 0, 0, 1, 0, 0, 0, '', 4),
(5, 1, 2, 7, 0, 0, 1, 0, 0, 1, '', 5),
(6, 2, 2, 8, 0, 0, 0, 0, 0, 0, NULL, 0),
(7, 2, 2, 11, 0, 0, 0, 0, 0, 0, NULL, 0),
(8, 2, 2, 7, 0, 0, 0, 0, 0, 0, NULL, 0),
(9, 2, 2, 10, 0, 0, 0, 0, 0, 0, NULL, 0),
(10, 2, 2, 9, 0, 0, 0, 0, 0, 0, NULL, 0),
(11, 3, 2, 7, 0, 0, 0, 0, 0, 0, NULL, 0),
(12, 3, 2, 9, 0, 0, 0, 0, 0, 0, NULL, 0),
(13, 3, 2, 11, 0, 0, 0, 0, 0, 0, NULL, 0),
(14, 3, 2, 10, 0, 0, 0, 0, 0, 0, NULL, 0),
(15, 3, 2, 8, 0, 0, 0, 0, 0, 0, NULL, 0),
(16, 7, 2, 9, 1, 0, 0, 0, 0, 0, '', 0),
(17, 7, 2, 10, 0, 0, 0, 1, 0, 0, '', 2),
(18, 7, 2, 7, 0, 0, 1, 0, 0, 0, '', 3),
(19, 7, 2, 8, 0, 0, 0, 1, 0, 0, '', 4),
(20, 7, 2, 11, 0, 1, 0, 0, 0, 0, '', 5),
(21, 8, 2, 9, 0, 0, 0, 0, 0, 0, NULL, 0),
(22, 8, 2, 11, 0, 0, 0, 0, 0, 0, NULL, 0),
(23, 8, 2, 10, 0, 0, 0, 0, 0, 0, NULL, 0),
(24, 8, 2, 8, 0, 0, 0, 0, 0, 0, NULL, 0),
(25, 8, 2, 7, 0, 0, 0, 0, 0, 0, NULL, 0),
(26, 9, 2, 8, 0, 0, 0, 0, 0, 0, NULL, 0),
(27, 9, 2, 11, 0, 0, 0, 0, 0, 0, NULL, 0),
(28, 9, 2, 10, 0, 0, 0, 0, 0, 0, NULL, 0),
(29, 9, 2, 7, 0, 0, 0, 0, 0, 0, NULL, 0),
(30, 9, 2, 9, 0, 0, 0, 0, 0, 0, NULL, 0),
(31, 10, 2, 10, 0, 0, 0, 0, 0, 0, '', 1),
(32, 10, 2, 9, 0, 0, 0, 0, 0, 0, '', 2),
(33, 10, 2, 7, 0, 0, 0, 0, 0, 0, '', 3),
(34, 10, 2, 8, 0, 0, 0, 0, 0, 0, '', 4),
(35, 10, 2, 11, 0, 0, 1, 0, 0, 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
