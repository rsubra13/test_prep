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
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TestID` varchar(50) DEFAULT NULL,
  `QuestionText` text,
  `QuestionPic` varchar(255) DEFAULT NULL,
  `PicMov` varchar(255) DEFAULT NULL,
  `PicMovWidth` varchar(50) DEFAULT NULL,
  `PicMovHeight` varchar(50) DEFAULT NULL,
  `Answer1` text,
  `AnswerPic1` varchar(255) DEFAULT NULL,
  `A1` tinyint(4) DEFAULT '0',
  `A1Clicks` int(11) NOT NULL DEFAULT '0',
  `Answer2` text,
  `AnswerPic2` varchar(255) DEFAULT NULL,
  `A2` tinyint(4) DEFAULT '0',
  `A2Clicks` int(11) NOT NULL DEFAULT '0',
  `Answer3` text,
  `AnswerPic3` varchar(255) DEFAULT NULL,
  `A3` tinyint(4) DEFAULT '0',
  `A3Clicks` int(11) NOT NULL DEFAULT '0',
  `Answer4` text,
  `AnswerPic4` varchar(255) DEFAULT NULL,
  `A4` tinyint(4) DEFAULT '0',
  `A4Clicks` int(11) NOT NULL DEFAULT '0',
  `Answer5` text,
  `AnswerPic5` varchar(255) DEFAULT NULL,
  `A5` tinyint(4) DEFAULT '0',
  `A5Clicks` int(11) NOT NULL DEFAULT '0',
  `Answer6` text,
  `AnswerPic6` varchar(255) DEFAULT NULL,
  `A6` tinyint(4) DEFAULT '0',
  `A6Clicks` int(11) NOT NULL DEFAULT '0',
  `AnswerText` text,
  `sortOrder` smallint(6) NOT NULL DEFAULT '100',
  `Points` int(11) NOT NULL DEFAULT '1',
  `Correct` int(11) NOT NULL DEFAULT '0',
  `Incorrect` int(11) NOT NULL DEFAULT '0',
  `Explanation` text,
  `Subject` int(11) NOT NULL DEFAULT '1',
  `AnswerAud1` varchar(255) DEFAULT NULL,
  `AnswerAud2` varchar(255) DEFAULT NULL,
  `AnswerAud3` varchar(255) DEFAULT NULL,
  `AnswerAud4` varchar(255) DEFAULT NULL,
  `AnswerAud5` varchar(255) DEFAULT NULL,
  `AnswerAud6` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `TestID` (`TestID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `TestID`, `QuestionText`, `QuestionPic`, `PicMov`, `PicMovWidth`, `PicMovHeight`, `Answer1`, `AnswerPic1`, `A1`, `A1Clicks`, `Answer2`, `AnswerPic2`, `A2`, `A2Clicks`, `Answer3`, `AnswerPic3`, `A3`, `A3Clicks`, `Answer4`, `AnswerPic4`, `A4`, `A4Clicks`, `Answer5`, `AnswerPic5`, `A5`, `A5Clicks`, `Answer6`, `AnswerPic6`, `A6`, `A6Clicks`, `AnswerText`, `sortOrder`, `Points`, `Correct`, `Incorrect`, `Explanation`, `Subject`, `AnswerAud1`, `AnswerAud2`, `AnswerAud3`, `AnswerAud4`, `AnswerAud5`, `AnswerAud6`) VALUES
(7, '2', 'Of the following, which is greater than ½ ? \r\n\r\nIndicate ALL such fractions.', NULL, NULL, NULL, NULL, ' 2/5', '', 0, 0, ' 4/7', '', 1, 0, ' 4/9', '', 0, 2, '5/11', '', 0, 0, '6/13', '', 0, 0, '8/15', '', 1, 1, '', 100, 10, 0, 3, '', 1, '', '', '', '', '', ''),
(8, '2', 'If an object travels at five feet per second, how many feet does it travel in one hour?', NULL, NULL, NULL, NULL, '30', '', 0, 0, '300', '', 0, 0, '720', '', 0, 0, '1800', '', 0, 2, '18000', '', 1, 0, '', '', 0, 0, '', 100, 10, 0, 3, '', 1, '', '', '', '', '', ''),
(9, '2', 'What is the average (arithmetic mean) of all the multiples of ten from 10 to 190 inclusive?', NULL, NULL, NULL, NULL, '90', '', 0, 1, '95', '', 0, 0, '100 ', '', 1, 1, '105', '', 0, 0, '110', '', 0, 0, '', '', 0, 0, '', 100, 10, 1, 2, '', 1, '', '', '', '', '', ''),
(10, '2', 'A cubical block of metal weighs 6 pounds. How much will another cube of the same metal weigh if its sides are twice as long?', NULL, NULL, NULL, NULL, '48', '', 1, 1, '32 ', '', 0, 0, '24', '', 0, 0, '18', '', 0, 1, '12', '', 0, 0, '', '', 0, 0, '', 100, 1, 1, 2, 'If you double the sides of a cube, the ratio of the surface areas of the old and new cubes will be 1: 4. The ratio of the volumes of the old and new cubes will be 1: 8. Weight is proportional to volume. So, If the first weighs 6 pounds, the second weighs 6x8 pounds =48.', 1, '', '', '', '', '', ''),
(11, '2', 'In a class of 78 students 41 are taking French, 22 are taking German. Of the students taking French or German, 9 are taking both courses. How many students are not enrolled in either course?', NULL, NULL, NULL, NULL, '6', '', 0, 0, '15', '', 0, 1, '24', '', 1, 2, '33', '', 0, 0, '56', '', 0, 0, '', '', 0, 0, '', 100, 1, 2, 1, '', 1, '', '', '', '', '', ''),
(12, '3', ' A straight fence is to be constructed from posts 6 inches wide and separated by lengths of chain 5 feet long. If a certain fence begins and ends with a post, which of the following could be the length of the fence in feet? (12 inches = 1 foot). ', NULL, NULL, NULL, NULL, '17', '', 1, 0, '28', '', 1, 0, '35', '', 0, 0, '39', '', 1, 0, '50', '', 1, 0, '', '', 0, 0, '', 100, 1, 0, 0, 'The fence will consist of one more post than there are chains. (e.g. P-c-P-c-P). Therefore, a total length has to be a multiple of the length of the chain plus one post (5.5) plus one post extra.We have length = (5.5n + 0.5), where n can be any positive whole number. If n= 3, length =17; if n= 5, length = 28, etc.but there is no whole number that can give 35. Hence all the answers except C are correct.', 1, '', '', '', '', '', ''),
(13, '3', '( &#8730;2 - &#8730;3 )² =', NULL, NULL, NULL, NULL, '5 - 2&#8730;6 ', '', 1, 0, '5 - &#8730;6 ', '', 0, 0, '1 - 2&#8730;6', '', 0, 0, '1 - &#8730;2', '', 0, 0, '1', '', 0, 0, '', '', 0, 0, '', 100, 10, 0, 0, 'Expand as for (a + b)2. (&#8730;2 - &#8730;3)(&#8730;2 - &#8730;3) = 2 - 2(&#8730;2 + &#8730;3) + 3 = 5 - 2 &#8730;6', 1, '', '', '', '', '', ''),
(14, '3', ' 2^30 +2^30 +2^30 +2^30 =', NULL, NULL, NULL, NULL, '8^120', '', 0, 0, '2^32', '', 1, 0, '2^60', '', 0, 0, '8^30', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 1, 0, 0, '', 1, '', '', '', '', '', ''),
(15, '3', 'Helpers are needed to prepare for the fete. Each helper can make either 2 large cakes or 35 small cakes per hour. The kitchen is available for 3 hours and 20 large cakes and 700 small cakes are needed. How many helpers are required?', NULL, NULL, NULL, NULL, '10', '', 1, 0, '15', '', 0, 0, '20', '', 0, 0, '25', '', 0, 0, '30', '', 0, 0, '', '', 0, 0, '', 100, 10, 0, 0, '20 large cakes will require the equivalent of 10 helpers working for one hour. 700 small cakes will require the equivalent of 20 helpers working for one hour. This means if only one hour were available we would need 30 helpers. But since three hours are available we can use 10 helpers.', 1, '', '', '', '', '', ''),
(16, '3', 'Jo''s collection contains US, Indian and British stamps. If the ratio of US to Indian stamps is 5 to 2 and the ratio of Indian to British stamps is 5 to 1, what is the ratio of US to British stamps?', NULL, NULL, NULL, NULL, '5 : 1 ', '', 0, 0, '10 : 5 ', '', 0, 0, '15 : 2', '', 0, 0, '20 : 2', '', 0, 0, '25 : 2', '', 1, 0, '', '', 0, 0, '', 100, 1, 0, 0, 'Indian stamps are common to both ratios. Multiply both ratios by factors such that the Indian stamps are represented by the same number. US : Indian = 5 : 2, and Indian : British = 5 : 1. Multiply the first by 5, and the second by 2.  Now US : Indian = 25 : 10, and Indian : British = 10 : 2 Hence the two ratios can be combined and US : British = 25 : 2', 1, '', '', '', '', '', ''),
(17, '4', 'The average (arithmetic mean) of four numbers is 36\r\n\r\nA)The sum of the same four numbers	B)140\r\n', NULL, NULL, NULL, NULL, 'Quantity A is greater', '', 0, 0, 'Quantity B is greater', '', 1, 0, 'Both are eqaul', '', 0, 0, 'The relationship cannot be determined without further information', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 10, 0, 0, 'If the average of a set of numbers is known, we can multiply the average by the number of elements in the set to find the total. Here if the average is 36, the total of the four numbers is 144. Hence, this is bigger than 140. Answer A.', 1, '', '', '', '', '', ''),
(18, '4', 'n is an integer >0\r\n\r\nA)1/n + n	\r\nB) 2\r\n', NULL, NULL, NULL, NULL, 'Quantity A is greater', '', 0, 0, 'Quantity B is greater', '', 0, 0, 'Both are equall', '', 0, 0, 'The relationship cannot be determined without further information', '', 1, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 10, 0, 0, '', 1, '', '', '', '', '', ''),
(19, '4', 'A)The diagonal of a rectangle	\r\nB)Half the perimeter of the same rectangle\r\n', NULL, NULL, NULL, NULL, 'Quantity A is greater', '', 0, 0, 'Quantity B is greater', '', 1, 0, 'Both are equal', '', 0, 0, 'The relationship cannot be determined without further information', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 1, 0, 0, 'The diagonal of a rectangle cuts the rectangle into two equal triangles. The diagonal is the hypotenuse of either of these triangles, and must be less than the sum of the other two sides. The other two sides make up half the perimeter, which is, therefore, greater.', 1, '', '', '', '', '', ''),
(20, '4', 'x + y = 5\r\ny - x = 3\r\n\r\nA)x	\r\nB)y\r\n', NULL, NULL, NULL, NULL, 'Quantity A is greater', '', 0, 0, 'Quantity B is greater', '', 1, 0, 'Both are equal', '', 0, 0, 'The relationship cannot be determined without further information', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 10, 0, 0, 'This is a pair of simultaneous equations. Just add them together to get 2y = 8 So y = 4. Putting this value in the first equation gives x + 4 = 5 So x = 1. The right hand column is greater.', 1, '', '', '', '', '', ''),
(21, '4', 'A)The distance between the points with rectangular coordinates (0,5) and (0,10)	B)The distance between the points with rectangular coordinates (1,8) and (-3,5)', NULL, NULL, NULL, NULL, 'Quantity A is greater', '', 0, 0, 'Quantity B is greater', '', 0, 0, 'Both are equal', '', 1, 0, 'The relationship cannot be determined without further information', '', 0, 0, '', '', 0, 0, '', '', 0, 0, '', 100, 1, 0, 0, '', 1, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
