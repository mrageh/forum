-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2012 at 10:54 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` VALUES(47, 13, 'This is my first comment', 1, '2012-05-05');
INSERT INTO `replies` VALUES(48, 14, 'Your comments go here!! ', 2, '2012-05-05');
INSERT INTO `replies` VALUES(49, 14, 'Your comments go here!! ', 2, '2012-05-05');
INSERT INTO `replies` VALUES(50, 14, 'Just checking to see my forums functionality \r\n', 2, '2012-05-05');
INSERT INTO `replies` VALUES(51, 14, 'This is an excellent forum full on wonder, excitement and dreams.', 3, '2012-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` VALUES(14, 'Final Test Of My Forum', ' Hi Kevin what do you think of my forum???', 2, 0, '2012-05-05');
INSERT INTO `threads` VALUES(15, 'Hello!', ' New thread. What do you think about fish?', 3, 0, '2012-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'saladj', 'e10adc3949ba59abbe56e057f20f883e', 'jibril salad', '2012-05-05');
INSERT INTO `users` VALUES(2, 'Adam25', '74e08afc3b96e3daa3d3ea10f8ae5eb9', 'Magan Adam', '2012-05-05');
INSERT INTO `users` VALUES(3, 'fred', 'e10adc3949ba59abbe56e057f20f883e', 'fred smith', '2012-05-08');
INSERT INTO `users` VALUES(4, 'hallo', 'e10adc3949ba59abbe56e057f20f883e', 'Adam Magan', '2012-05-08');
