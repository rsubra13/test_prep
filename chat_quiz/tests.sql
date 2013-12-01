-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2013 at 10:21 AM
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
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TestName` varchar(255) NOT NULL DEFAULT 'No Name',
  `Subject` int(255) NOT NULL DEFAULT '1',
  `Enabled` tinyint(1) NOT NULL DEFAULT '0',
  `RequireLogin` tinyint(1) NOT NULL DEFAULT '0',
  `PassingScore` int(11) NOT NULL DEFAULT '60',
  `TestPicture` varchar(255) DEFAULT NULL,
  `Random` tinyint(1) NOT NULL DEFAULT '0',
  `Creator` varchar(255) NOT NULL DEFAULT '',
  `Directions` text,
  `LimitTime` tinyint(1) NOT NULL DEFAULT '0',
  `TimeLimitH` char(2) NOT NULL DEFAULT '00',
  `TimeLimitM` char(2) NOT NULL DEFAULT '00',
  `EmailInstructor` int(11) NOT NULL DEFAULT '0',
  `EmailUsers` int(11) NOT NULL DEFAULT '0',
  `EmailTemplate` int(11) NOT NULL DEFAULT '1',
  `ReportTemplate` int(11) NOT NULL DEFAULT '1',
  `AutoSession` tinyint(1) NOT NULL DEFAULT '0',
  `QuestionLimit` int(11) NOT NULL DEFAULT '0',
  `MaxAttempts` int(11) NOT NULL DEFAULT '0',
  `AllowQuit` tinyint(1) NOT NULL DEFAULT '0',
  `Browseable` tinyint(1) NOT NULL DEFAULT '1',
  `AltEmail` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`ID`, `TestName`, `Subject`, `Enabled`, `RequireLogin`, `PassingScore`, `TestPicture`, `Random`, `Creator`, `Directions`, `LimitTime`, `TimeLimitH`, `TimeLimitM`, `EmailInstructor`, `EmailUsers`, `EmailTemplate`, `ReportTemplate`, `AutoSession`, `QuestionLimit`, `MaxAttempts`, `AllowQuit`, `Browseable`, `AltEmail`) VALUES
(1, 'Practice Test 1', 1, 1, 1, 60, '', 1, 'admin', '<span style="font-family: Arial;">This is the sample test.</span><br style="font-family: Arial;"><br style="font-family: Arial;"><span style="font-family: Arial;">You can put your own instructions in this area.</span><br>', 1, '00', '01', 0, 0, 1, 1, 1, 50, 0, 0, 1, 0),
(2, 'GRE MATH Problem Solving ', 1, 1, 1, 60, NULL, 1, 'admin', '', 0, '', '', 1, 1, 1, 1, 0, 0, 0, 1, 1, 1),
(3, 'GRE MATH Problem Solving 02', 1, 1, 1, 60, NULL, 1, 'admin', '', 0, '', '', 1, 1, 1, 1, 0, 0, 0, 1, 1, 1),
(4, 'GRE MATH Quantitative Comparison 1', 1, 1, 1, 60, NULL, 1, 'admin', '', 0, '', '', 1, 1, 1, 1, 0, 0, 0, 0, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
