-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2017 at 05:18 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  `department_code` varchar(15) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_code`) VALUES
(1, 'Records', 'gwapa mi'),
(2, 'Admin', 'piza'),
(3, 'SDS', 'Pentatonics'),
(4, 'Accounting', 'hubag'),
(5, 'Finance', 'salad cila');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `tracking_number` varchar(50) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `datetime_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `submitted_by` varchar(50) NOT NULL,
  `status` enum('transit','done','','') NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`document_id`, `tracking_number`, `document_name`, `datetime_received`, `user_id`, `submitted_by`, `status`) VALUES
(1, '171017001\n', 'MOOE', '2017-10-17 18:13:08', 1, 'Glaiza', 'transit'),
(2, '171017002\n', 'Voucher', '2017-10-17 18:14:35', 3, 'Cathy', 'transit'),
(3, '171017003\n', 'Travel Expenses', '2017-10-17 18:17:36', 1, 'Edalyn', 'transit'),
(4, '171017004\n', 'asasd', '2017-10-17 18:43:41', 1, 'ada', 'transit'),
(5, '171017005\n', 'adaaada', '2017-10-17 18:46:04', 11, 'da', 'transit'),
(6, '171017006\n', 'hasulauy', '2017-10-17 18:47:50', 11, 'gasualauy', 'transit'),
(7, '171017007\n', 'ada', '2017-10-17 18:49:51', 1, 'adad', 'transit'),
(8, '171017008\n', 'adad', '2017-10-17 18:50:40', 1, 'ada', 'transit'),
(9, '171017009\n', 'wer', '2017-10-17 18:57:18', 1, 'wrw', 'transit'),
(10, '171017010\n', 'ad', '2017-10-17 18:58:09', 1, 'ada', 'transit'),
(11, '171017011\n', 'adaa', '2017-10-17 18:59:14', 1, 'ada', 'transit'),
(12, '171017012\n', 'asda', '2017-10-17 19:02:56', 1, 'adad', 'transit'),
(13, '171018013\n', 'ada', '2017-10-18 01:49:58', 11, 'ada', 'transit'),
(14, '171018014\n', 'ada', '2017-10-18 01:50:52', 3, 'ada', 'transit');

-- --------------------------------------------------------

--
-- Table structure for table `documents_history`
--

CREATE TABLE IF NOT EXISTS `documents_history` (
  `dochist` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `dochist_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dochist_type` enum('Received','Forwarded','Remarks','') NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dochist_active` varchar(30) NOT NULL,
  `dochist_remarks` varchar(30) NOT NULL,
  PRIMARY KEY (`dochist`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `documents_history`
--

INSERT INTO `documents_history` (`dochist`, `document_id`, `dochist_timestamp`, `dochist_type`, `department_id`, `user_id`, `dochist_active`, `dochist_remarks`) VALUES
(1, 1, '2017-10-18 01:32:03', 'Received', 2, 1, '0', ''),
(2, 2, '2017-10-17 18:15:33', 'Received', 3, 3, '0', ''),
(3, 2, '2017-10-17 18:16:05', 'Forwarded', 2, 3, '0', ''),
(4, 2, '2017-10-17 18:16:05', 'Received', 2, 1, '1', ''),
(5, 3, '2017-10-17 18:17:37', 'Received', 2, 1, '1', ''),
(6, 4, '2017-10-17 18:43:41', 'Received', 2, 1, '1', ''),
(7, 5, '2017-10-17 18:46:04', 'Received', 2, 11, '1', ''),
(8, 6, '2017-10-17 18:47:50', 'Received', 2, 11, '1', ''),
(9, 7, '2017-10-17 18:49:52', 'Received', 2, 1, '1', ''),
(10, 8, '2017-10-17 18:50:40', 'Received', 2, 1, '1', ''),
(11, 9, '2017-10-17 18:57:18', 'Received', 2, 1, '1', ''),
(12, 10, '2017-10-17 18:58:09', 'Received', 2, 1, '1', ''),
(13, 11, '2017-10-17 18:59:14', 'Received', 2, 1, '1', ''),
(14, 12, '2017-10-17 19:02:56', 'Received', 2, 1, '1', ''),
(15, 1, '2017-10-18 01:51:34', 'Forwarded', 2, 1, '0', ''),
(16, 13, '2017-10-18 01:49:58', 'Received', 2, 11, '1', ''),
(17, 14, '2017-10-18 01:50:52', 'Received', 3, 3, '1', ''),
(18, 1, '2017-10-18 01:52:00', 'Received', 2, 1, '0', ''),
(19, 1, '2017-10-18 01:52:00', 'Forwarded', 3, 1, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` enum('Admin','User','Receiver','') NOT NULL,
  `department_id` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `usertype`, `department_id`) VALUES
(1, 'Marjorie', 'Abasolo', 'Crave', 'admin', 'admin', 'Admin', '2'),
(3, 'Liezel', 'Acibes', 'Tiempo', 'receiver', 'receiver', 'Receiver', '3'),
(6, 'Sharan', 'Yurong', 'Timkang', 'gwapa', 'gwapa', 'Receiver', '2'),
(7, 'Joshua', 'Tiempo', 'Acibes', 'jampong', 'jampong', 'Admin', '3'),
(8, 'Liezel', 'Cagnaan', 'Baybayon', 'gamay', 'gamay', 'User', '3'),
(9, 'Kenneth', 'Bayot', 'Abande', 'bayot', 'bayot', 'User', '1'),
(10, 'Miagen', 'Mayang', 'Tidalgo', 'utot', 'sangay', 'Receiver', '2'),
(11, 'Leo Nino', 'Tambok', 'Galon', 'evil', 'evil', 'User', '2'),
(12, 'Joel', 'K', 'Quilantang', 'rockstar', 'rockstar', 'Admin', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
