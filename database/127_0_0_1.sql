-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 04:12 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizportal`
--
CREATE DATABASE IF NOT EXISTS `quizportal` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quizportal`;

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

DROP TABLE IF EXISTS `question_bank`;
CREATE TABLE IF NOT EXISTS `question_bank` (
  `ques_id` int(20) NOT NULL AUTO_INCREMENT,
  `sub_id` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ques` varchar(1000) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `opt1` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `opt2` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `opt3` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `opt4` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ans` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3028 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`ques_id`, `sub_id`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(3001, 'DIT0003', 'The keyword used to transfer control from a function back to the calling function is', 'switch', 'go back', 'go to', 'return', '4'),
(3002, 'DIT0003', 'Which of the following special symbol allowed in a variable name', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', '4'),
(3006, 'DIT0002', 'Who is president of India', 'Aman', 'Anubhav', 'Pranab Mukherjee', 'Barack Obama', '3'),
(3007, 'DIT0004', '2+4', '6', '8', '3', '9', '1'),
(3008, 'DIT0004', '16/4', '5', '6', '4', '8', '3'),
(3009, 'DIT0001', 'Java is', 'Purely OOPs', 'OOPs', 'Not OOPs', 'none of above', '1'),
(3010, 'DIT0001', 'Do java support multiple inheritance', 'yes', 'no', 'not sure', 'none of the above', '2'),
(3024, 'DIT0001', 'What  is full form of JRE', 'Java Runtime Environment', 'Java Runnable Environment', 'JDBC', 'None of these', '1'),
(3025, 'DIT0002', 'What population of 1.2 billion Indians are atheists', '23k', '45k', '33k', 'None of these', '3'),
(3014, 'DIT0003', 'C language developed in  ', '1956', '1972', '1994', 'None of these', '2'),
(3015, 'DIT0004', 'who invented zero', 'Aryabhatt', 'C V Raman', 'Issac newton', 'None of these', '1'),
(3020, 'DIT0001', 'What  is full form of JRE', 'Java Runtime Environment', 'Java Runnable Environment', 'JDBC', 'None of these', '1'),
(3021, 'DIT0002', 'What population of 1.2 billion Indians are atheists', '23k', '45k', '33k', 'None of these', '3'),
(3027, 'DIT0004', 'who invented zero', 'Aryabhatt', 'C V Raman', 'Issac newton', 'None of these', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

DROP TABLE IF EXISTS `student_detail`;
CREATE TABLE IF NOT EXISTS `student_detail` (
  `college_id` int(11) NOT NULL,
  `fname` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lname` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `branch` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `section` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`college_id`, `fname`, `lname`, `branch`, `section`, `year`, `email`, `mobile`, `password`) VALUES
(1401021025, 'Sushank', 'Kumar', 'CSE', 'A', 3, 'sushank@gmail.com', 4567891232, '9a1a9e2a'),
(1401021026, 'Amit', 'Kumar', 'CSE', 'A', 3, 'amit@gmail.com', 1234567899, 'ce8440fc'),
(1401021027, 'Ashish', 'Yadav', 'CSE', 'A', 3, 'ashish@gmail.com', 7894561230, 'ac70a77e'),
(1401021028, 'Ankit', 'Kumar', 'CSE', 'A', 3, 'ankitkr31195@gmail.com', 8979597691, 'b82aaeef'),
(1401021024, 'Nitish', 'Chauhan', 'CSE', 'A', 3, 'nitish@gmail.com', 1237894561, '4e3bac79');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

DROP TABLE IF EXISTS `student_result`;
CREATE TABLE IF NOT EXISTS `student_result` (
  `college_id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DIT0001` int(11) DEFAULT NULL,
  `DIT0002` int(11) DEFAULT NULL,
  `DIT0003` int(11) DEFAULT NULL,
  `DIT0004` int(11) DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`college_id`, `fname`, `lname`, `DIT0001`, `DIT0002`, `DIT0003`, `DIT0004`) VALUES
(1401021028, 'Ankit', 'Kumar', 2, 3, 2, 0),
(1401021027, 'Ashish', 'Yadav', 1, 3, 3, 3),
(1401021026, 'Amit', 'Kumar', NULL, NULL, NULL, NULL),
(1401021025, 'Sushank', 'Kumar', NULL, NULL, NULL, NULL),
(1401021024, 'Nitish', 'Chauhan', 1, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjectid`
--

DROP TABLE IF EXISTS `subjectid`;
CREATE TABLE IF NOT EXISTS `subjectid` (
  `id` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `subject` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjectid`
--

INSERT INTO `subjectid` (`id`, `subject`) VALUES
('DIT0002', 'Current Affairs'),
('DIT0003', 'C'),
('DIT0004', 'MATHEMATICS'),
('DIT0001', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `unique_no` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lname` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `depart` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `position` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`unique_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10003 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`unique_no`, `fname`, `lname`, `depart`, `position`, `email`, `username`, `password`) VALUES
(10000, 'Sumit', 'Kumar', 'CSE', 'Professor', 'sumit@gmail.com', 'sumit123', '123456789'),
(10001, 'M L', 'Garg', 'CSE', 'Admin', 'garg@gmail.com', 'admin123', '987654321'),
(10002, 'Kushal', 'Gupta', 'CSE', 'Professor', 'kushal@gmail.com', 'kushal123', '246813579');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
