-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2012 at 01:43 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timebomb`
--

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

DROP TABLE IF EXISTS `secrets`;
CREATE TABLE IF NOT EXISTS `secrets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `secret` blob NOT NULL,
  `notify` varchar(256) NOT NULL,
  `release_date` datetime NOT NULL,
  `website` text NOT NULL,
  `warn` tinytext NOT NULL,
  `remind` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `secrets`
--

INSERT INTO `secrets` VALUES(1, '2012-02-26 01:30:14', 0x6d7920736563726574, 'gavin@solonode.com', '2012-02-27 00:00:00', 'http://www.example.com', '', '');
INSERT INTO `secrets` VALUES(2, '2012-02-26 01:36:28', 0x6d7920736563726574, 'gavin@solonode.com', '2012-02-27 00:00:00', 'http://www.example.com', '', '');
INSERT INTO `secrets` VALUES(3, '2012-02-26 01:38:53', 0x6d7920736563726574, 'gavin@solonode.com', '2012-02-27 00:00:00', 'http://www.example.com', '', '');
INSERT INTO `secrets` VALUES(4, '2012-02-26 01:39:28', 0x6d7920736563726574, 'gavin@solonode.com', '2012-02-27 00:00:00', 'http://www.example.com', '', '');
INSERT INTO `secrets` VALUES(5, '2012-02-26 01:40:41', 0x4920646f6e2774207265616c6c79206c696b652062726f636f6c69, 'my_mum@home.org', '0000-00-00 00:00:00', 'http://www.example.com', '', 'on');
