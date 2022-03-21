-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2022 at 02:40 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  UNIQUE KEY `adminname` (`adminname`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('NAVYA', 'navi');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `courses` varchar(60) NOT NULL,
  `duration` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `prefix`, `name`, `username`, `email`, `phoneno`, `courses`, `duration`) VALUES
(3, 'Ms.', 'MATHAVI', ' mathavi', 'mathavi@gmail.com', 2147483647, 'ADVANCE JAVA', '1 YEAR'),
(2, 'Mr.', 'sree', ' sree', 'sree@gmail.com', 876543, 'ADVANCE JAVA', '1 YEAR'),
(5, 'Ms.', 'SHIVANYA', ' shivanya', 'shivanya@gmail.com', 2147483647, 'MICROSOFT EXCEL', '3 MONTHS'),
(6, 'Ms.', 'KAVI', ' kavinaya', '456654467', 456654467, 'TALLY', '1 YEAR'),
(7, 'Ms.', 'MUTHU LEKSHMI', ' muthu', 'muthu@gmail.com', 987654321, 'TALLY', '1 YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `password2` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `password2`) VALUES
('kavikutty', 'kavikutty@gmail.com', 'kavi', 'kavi'),
('sree', 'sree@gmail.com', 'sree', 'sree'),
('mathavi', 'mathavi@gmail.com', 'maa', 'maa'),
('muthu', 'muthu@gmail.com', 'muthu', 'muthu'),
('sharmi', 'sharmi@gmail.com', 'sharmi', 'sharmi'),
('shivanya', 'shivanya@gmail.com', 'shiv', 'shiv'),
('Kavinaya', 'Kavi@gmail.com', 'kavi', 'kavi');
