-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2013 at 10:27 AM
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
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `ID` int(2) NOT NULL,
  `activity_id` int(2) NOT NULL,
  `activity_type` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `activity_name` varchar(600) NOT NULL,
  `activity_desc` varchar(600) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ID`, `activity_id`, `activity_type`, `username`, `activity_name`, `activity_desc`, `status`) VALUES
(0, 1, 1, 'Ramki', 'Collaboratively build a WordMap for <strong>Abjure</strong><br/>Activity due <strong>Dec 10</strong>', 'As a group, build a WordMap for <b>Abjure</b>. <br/>One member in the group will serve as a facilitator for this activity', '<a href=''javascript:breakout_of_frame()''>Start</a>'),
(1, 2, 2, 'Ramki', 'Collaboratively build Wiki pages for the words you added in <strong>your wordmap(Activity 1)</strong><br/>Activity due <strong>Dec 20</strong>', 'Open the WordMap from your Google Drive/Dropbox. Click on each word to edit the Wiki. <br/>If the Wiki is blank, then create one. <br/>If the Wiki has contents in it, think and add/modify the existing content to improve the Wiki''s content quality', '<a href="javascript:breakout_of_frame1()">Start</a>'),
(2, 1, 1, 'Admin', 'Collaboratively build a WordMap for <strong>Abjure</strong><br/>Activity due <strong>Dec 10</strong>', 'As a group, build a WordMap for <b>Abjure</b>. <br/>One member in the group will serve as a facilitator for this activity', '<a href=''javascript:breakout_of_frame()''>Start</a>'),
(3, 2, 2, 'Admin', 'Collaboratively build Wiki pages for the words you added in <strong>your wordmap(Activity 1)</strong><br/>Activity due <strong>Dec 20</strong>', 'Open the WordMap from your Google Drive/Dropbox. Click on each word to edit the Wiki. <br/>If the Wiki is blank, then create one. <br/>If the Wiki has contents in it, think and add/modify the existing content to improve the Wiki''s content quality', '<a href="javascript:breakout_of_frame1()">Start</a>'),
(5, 3, 1, 'Ramki', 'Collaboratively build a WordMap for <strong>Alacrity</strong><br/>Activity due <strong>Dec 25</strong>', 'As a group, build a WordMap for <b>Alacrity</b>. <br/>One member in the group will serve as a facilitator for this activity', '<a href=''javascript:breakout_of_frame2()''>Start</a>'),
(6, 4, 2, 'Ramki', 'Collaboratively build Wiki pages for the words you added in <strong>your wordmap(Activity 2)</strong><br/>Activity due <strong>Jan 5</strong>', 'Open the WordMap from your Google Drive/Dropbox. Click on each word to edit the Wiki. <br/>If the Wiki is blank, then create one. <br/>If the Wiki has contents in it, think and add/modify the existing content to improve the Wiki''s content quality', '<a href="javascript:breakout_of_frame1()">Start</a>'),
(7, 3, 1, 'Admin', 'Collaboratively build a WordMap for <strong>Alacrity</strong><br/>Activity due <strong>Dec 25</strong>', 'As a group, build a WordMap for <b>Alacrity</b>. <br/>One member in the group will serve as a facilitator for this activity', '<a href="javascript:breakout_of_frame2()">Start</a>'),
(8, 4, 2, 'Admin', 'Collaboratively build Wiki pages for the words you added in <strong>your wordmap(Activity 2)</strong><br/>Activity due <strong>Jan 5</strong>', 'Open the WordMap from your Google Drive/Dropbox. Click on each word to edit the Wiki. <br/>If the Wiki is blank, then create one. <br/>If the Wiki has contents in it, think and add/modify the existing content to improve the Wiki''s content quality', '<a href="javascript:breakout_of_frame1()">Start</a>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
