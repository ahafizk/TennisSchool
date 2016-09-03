-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2015 at 12:34 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `user_id` int(12) NOT NULL,
  `street` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `house_number` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `home_plate` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `post_code` varchar(20) COLLATE latin1_bin DEFAULT NULL,
  `telefoon_vast` int(15) DEFAULT NULL,
  `telefoon_mobiel` int(15) DEFAULT NULL,
  `email` varchar(20) COLLATE latin1_bin DEFAULT NULL,
  `fax` varchar(50) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `street`, `house_number`, `home_plate`, `post_code`, `telefoon_vast`, `telefoon_mobiel`, `email`, `fax`) VALUES
(1, '234234', '34234', 'Location', '4234', 0, 0, 'abc@abc.com', ''),
(2, 's2234', 'h-124', 'p-123', 'location', 0, 0, 'abc@abc.com', ''),
(3, 's2234', 'h-124', 'p-123', 'location', 0, 0, 'abc@abc.com', ''),
(4, 's34', 'h32', 'p234', 'lock', 0, 0, 'bdc.bdc@bdc.com', ''),
(5, 's45', 'h43', 'p12', 'lcok', 0, 0, 'abd@abd.com', ''),
(6, 's89', 'h90', 'p87', 'lock', 0, 0, 'abd.a@ya.com', ''),
(7, 's78', 'h79', 'p234', 'lk', 0, 0, 'klm@ya.com', ''),
(10, 's1234', 'h1234', 'p1234', 'l1234', 0, 0, 'kamal@gmail.com', ''),
(11, 'Haastenburg', '1', '2804VA', 'Gouda', 0, 619693048, 'mdbnld@gmail.com', ''),
(12, 'str12345', 'house1234', 'post1234', 'location12345', 0, 0, 'ahafizk@gmail.com', ''),
(13, 'str12345', 'house1234', 'post1234', 'location12345', 0, 0, 'ahafizk@gmail.com', ''),
(16, '5001 APT B', '34234', '21227', 'United States', 0, 2147483647, 'mdbnld@gmail.com', '6672060895'),
(17, 'str1234', '34234', '21227', 'post1234', 0, 0, 'mdbnld@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `initial` varchar(20) NOT NULL,
  `call_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `house_number` varchar(30) NOT NULL,
  `post_code` varchar(30) NOT NULL,
  `location` varchar(500) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `gender` varchar(5) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `user_name`, `password`, `initial`, `call_name`, `middle_name`, `last_name`, `street`, `house_number`, `post_code`, `location`, `phone`, `mobile`, `email`, `fax`, `gender`, `birth_date`) VALUES
(2, 'nusrat', '123456', 'mrs.', 'nusrat', '', 'mehjabin', 'str1234', 'hn12345', 'post1234', 'loc1111', '', '', 'nusrat1811@gmail.com', '', 'Men', '0001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE IF NOT EXISTS `agreement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provision_accept` varchar(2) DEFAULT NULL,
  `email_accept` varchar(2) DEFAULT NULL,
  `debit_collection` varchar(2) DEFAULT NULL,
  `bank_acc_no` varchar(20) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `other_name` varchar(35) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(25) DEFAULT NULL,
  `house_num` varchar(25) DEFAULT NULL,
  `post_code` varchar(25) DEFAULT NULL,
  `other_location` varchar(25) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `agreement_FKIndex1` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `user_id`, `provision_accept`, `email_accept`, `debit_collection`, `bank_acc_no`, `location`, `other_name`, `email`, `street`, `house_num`, `post_code`, `other_location`, `note`) VALUES
(1, 0, 'Y', 'Y', 'N', '', '  ', '', '', '', '', '', '', '\r\n'),
(2, 2, 'Y', 'Y', 'N', '', 'md. mehedi rony', '', '', '', '', '', '', '\r\n'),
(3, 3, 'Y', 'Y', 'N', '', 'md. mehedi rony', '', '', '', '', '', '', '\r\n'),
(4, 4, 'Y', 'Y', 'N', '', 'md. karim hossen', '', '', '', '', '', '', '\r\n'),
(5, 5, 'Y', 'Y', 'N', '', 'md. hasan uddin', '', '', '', '', '', '', '\r\n'),
(6, 6, 'Y', 'Y', 'N', '', 'md. mithun hossen', '', '', '', '', '', '', '\r\n'),
(7, 7, 'Y', 'Y', 'N', '', 'md. kamal hossen', '', '', '', '', '', '', '\r\n'),
(8, 10, 'Y', 'Y', 'N', '', 'khan kamal Jakee', '', '', '', '', '', '', '\r\n'),
(9, 11, 'Y', 'Y', 'Y', '1234678', 'MX Mike Bruijn', '', '', '', '', '', '', 'nothing'),
(10, 12, 'Y', 'Y', 'N', '', 'md. khan rahim', '', '', '', '', '', '', '\r\n'),
(11, 13, 'Y', 'Y', 'N', '', 'md. khan rahim', '', '', '', '', '', '', '\r\n'),
(12, 15, 'Y', 'Y', 'N', '', 'mrs. prianka abrar', 'prianka  abrar', 'prianka@gmail.com', 'abdc', '231', 'ps123', 'lss123', '\r\n'),
(13, 16, 'Y', 'N', 'N', '', 'mrs prianka abrar', '', '', '', '', '', '', '\r\n'),
(14, 17, 'Y', 'Y', 'N', '', ' prianka abrar', '', '', '', '', '', '', '\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) DEFAULT NULL,
  `body` varchar(4000) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `signature` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `subject`, `body`, `created_on`, `signature`) VALUES
(1, 'announcement', 'This is announcement to all', '2010-01-29', 'nusrat'),
(2, 'hello', 'test announcemnet', '2014-12-21', 'sfd'),
(3, 'Class Closed Friday', 'all classes will be closed in Fri day.', '2015-01-13', 'rahim');

-- --------------------------------------------------------

--
-- Table structure for table `day_time`
--

CREATE TABLE IF NOT EXISTS `day_time` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `week_day` int(10) unsigned DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `abbreviation` varchar(20) DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `week_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `day_time`
--

INSERT INTO `day_time` (`id`, `week_day`, `start_time`, `end_time`, `location`, `name`, `abbreviation`, `group_id`, `week_id`) VALUES
(1, 1, '12:00', '2:00', 'location1', 'name11', 'n11', 1, 3),
(2, 2, '12:00', '2:00', 'location1', 'name11', 'n11', 1, 3),
(3, 3, '12:00', '2:00', 'location1', 'name11', 'n11', 1, 3),
(4, 4, '12:00', '2:00', 'location1', 'name11', 'n11', 1, 3),
(5, 5, '3:00', '6:00', 'location2', 'name12', 'n12', 1, 3),
(6, 6, '3:00', '6:00', 'location2', 'name12', 'n12', 1, 3),
(7, 7, '3:00', '6:00', 'location2', 'name12', 'n12', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `group_info`
--

CREATE TABLE IF NOT EXISTS `group_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_detail_id` int(10) unsigned NOT NULL,
  `max_group_member` int(5) unsigned DEFAULT NULL,
  `number_trainer` int(5) unsigned DEFAULT NULL,
  `explanation` varchar(250) DEFAULT NULL,
  `number_job` int(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`,`lesson_detail_id`),
  KEY `group_info_FKIndex1` (`lesson_detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `group_info`
--

INSERT INTO `group_info` (`id`, `lesson_detail_id`, `max_group_member`, `number_trainer`, `explanation`, `number_job`) VALUES
(1, 1, 8, 1, NULL, 1),
(2, 2, 4, 1, NULL, 1),
(3, 3, 4, 1, NULL, NULL),
(4, 1, 10, 1, 'This is test group', 1),
(5, 1, 10, 1, 'This is test group', 1),
(6, 1, 10, 1, 'This is test group', 1),
(7, 3, 4, 2, 'this is another testing group ', 2),
(8, 1, 4, 2, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_detail`
--

CREATE TABLE IF NOT EXISTS `lesson_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_type` varchar(25) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `detail_description` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `num_lesson` int(5) unsigned DEFAULT NULL,
  `frequency` varchar(30) DEFAULT NULL,
  `intented_skill` int(3) unsigned DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `duration_per_lesson` int(5) unsigned DEFAULT NULL,
  `age_group` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `lesson_detail`
--

INSERT INTO `lesson_detail` (`id`, `lesson_type`, `name`, `start_date`, `end_date`, `detail_description`, `num_lesson`, `frequency`, `intented_skill`, `comments`, `duration_per_lesson`, `age_group`) VALUES
(1, 'Youth Training', 'Youth Training', '2014-11-05', '2015-03-31', 'These lessons are intended for youth members of tennis school. The selection training on Thursday and Friday and the other youth members on Tuesday and Wednesday.', 22, '1', 1, NULL, 50, 'Youth'),
(2, 'group Lesson', 'juniors lesson', '2015-01-05', '2015-03-31', NULL, 20, '1', 1, NULL, 50, 'Juniors'),
(3, 'Tennis Kids', 'Kids Tesnnis lesson', '2014-10-05', '2015-03-31', '	 These lessons are intended for kids tennis. The fee includes the fee to rent.', 20, '1', 1, 'this is for kids trainig', 50, 'kids'),
(4, 'group lesson', 'group', '2014-10-05', '2015-03-31', 'Seniors (born until 29 December 1992)', 20, '1', 1, NULL, 50, 'Senior'),
(5, 'Private Lessons 1 / 2 hr', 'private lesson', '2014-10-05', '2015-03-31', '	 If you register for private lessons, we will contact to the workload and the date / time to discuss. The ticket is not specified fee to rent!', 1, '1', NULL, 'Includes 5 minutes unguided play freely.', 30, NULL),
(6, 'Private Lessons 1 / 2 hr', 'private lesson', '2014-10-05', '2015-03-31', '	 If you register for private lessons, we will contact to the workload and the date / time to discuss. The ticket is not specified fee to rent!', 1, '1', NULL, 'Includes 5 minutes unguided play freely.', 30, NULL),
(7, 'Private Lessons1 / 2 hr', 'private lesson', '2014-10-05', '2015-03-31', 'If you register for private lessons, we will contact to the workload and the date / time to discuss. The ticket is not specified fee to rent!', 1, '1', NULL, '	 Includes 5 minutes unguided play freely. Group Information', 30, NULL),
(8, 'private 1 hr', 'private lesson', '2014-10-05', '2015-03-31', 'If you register for private lessons, we will contact to the workload and the date / time to discuss. The ticket is not specified fee to rent!', 1, '1', 60, 'Includes 10 minutes unsupervised play freely.', NULL, NULL),
(16, 'junior', 'junior lessons', '2014-01-23', '2015-01-23', 'This is description', 20, NULL, 1, 'This is comment', 50, 'youth group'),
(17, 'Test', 'test', '2014-12-21', '2014-12-21', 'fsklfjl', 14, NULL, 1, '', 50, ''),
(18, 'normal', 'pk', '2015-01-13', '2015-02-13', '', 20, NULL, 1, '', 25, '18');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_finance`
--

CREATE TABLE IF NOT EXISTS `lesson_finance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `tution_fees` decimal(10,2) DEFAULT NULL,
  `tution_fee_collection` decimal(10,2) DEFAULT NULL,
  `payment_unit` int(3) unsigned DEFAULT NULL,
  `payable_by` int(3) unsigned DEFAULT NULL,
  `pay_for` date DEFAULT NULL,
  `collection_date` date DEFAULT NULL,
  `vat` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`lesson_id`,`group_id`),
  KEY `lesson_finance_FKIndex1` (`group_id`,`lesson_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lesson_finance`
--

INSERT INTO `lesson_finance` (`id`, `lesson_id`, `group_id`, `tution_fees`, `tution_fee_collection`, `payment_unit`, `payable_by`, `pay_for`, `collection_date`, `vat`) VALUES
(1, 1, 1, 375.00, 370.00, 1, 1, '2009-11-01', '2009-12-01', 6.00),
(2, 2, 2, 355.00, 350.00, 1, 1, '2009-11-01', '2009-12-01', 7.00),
(3, 3, 3, 390.00, 386.00, 1, 1, '2009-11-01', '2009-12-01', 6.00);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_times`
--

CREATE TABLE IF NOT EXISTS `lesson_times` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_info_lesson_detail_id` int(10) unsigned NOT NULL,
  `group_info_id` int(10) unsigned NOT NULL,
  `week_day` int(3) unsigned DEFAULT NULL,
  `start_time` decimal(4,2) DEFAULT NULL,
  `end_time` decimal(4,2) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `abbreviation` varchar(10) DEFAULT NULL,
  `job_number` int(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`,`group_info_lesson_detail_id`,`group_info_id`),
  KEY `lesson_times_FKIndex1` (`group_info_id`,`group_info_lesson_detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `lesson_times`
--

INSERT INTO `lesson_times` (`id`, `group_info_lesson_detail_id`, `group_info_id`, `week_day`, `start_time`, `end_time`, `location`, `name`, `abbreviation`, `job_number`) VALUES
(1, 1, 1, 1, 16.00, 18.00, 'LES4', 'Centre Court', 'CC', 1),
(4, 1, 1, 2, 16.00, 18.00, 'LES4', 'Centre Court', 'CC', 1),
(5, 1, 1, 3, 16.00, 18.00, 'LES4', 'Centre Court', 'CC', 1),
(6, 1, 1, 4, 16.00, 18.00, 'LES5', 'Name1', 'N', 1),
(7, 1, 1, 5, 13.00, 18.00, 'LES5', 'Name1', 'N', 1),
(8, 1, 1, 6, 9.00, 12.00, 'LES6', 'Name2', 'N2', 1),
(9, 2, 2, 1, 13.00, 18.00, 'LES 7', 'Name3', 'N3', 1),
(10, 2, 2, 2, 13.00, 18.00, 'LES 7', 'Name3', 'N3', 1),
(11, 2, 2, 3, 13.00, 18.00, 'LES 7', 'Name3', 'N3', 1),
(12, 2, 2, 4, 16.00, 18.00, 'LES 7', 'Name3', 'N3', 1),
(13, 2, 2, 6, 9.00, 12.00, 'LES 7', 'Name3', 'N3', 1),
(14, 3, 3, 3, 13.00, 13.50, 'LES 7', 'Name3', 'N3', 1),
(15, 4, 4, 1, 9.00, 20.00, 'LES8', 'Name4', 'N4', 1),
(16, 4, 4, 2, 9.00, 20.00, 'LES8', 'Name4', 'N4', 1),
(17, 4, 4, 4, 9.00, 20.00, 'LES8', 'Name4', 'N4', 1),
(18, 4, 4, 5, 9.00, 22.00, 'LES9', 'Name5', 'N5', 1),
(19, 4, 4, 6, 9.00, 22.00, 'LES9', 'Name5', 'N5', 1),
(37, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(36, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(35, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(34, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(33, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(32, 1, 6, 1, 9.00, 12.00, 'TestLocation1', 'TEST1', '', NULL),
(38, 3, 7, 2, 12.00, 13.00, 'test', 'test', 'test', NULL),
(39, 1, 8, 1, 9.00, 9.50, 'pabna', 'mumu', 'pk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_week`
--

CREATE TABLE IF NOT EXISTS `lesson_week` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` int(10) unsigned NOT NULL,
  `years` int(5) unsigned DEFAULT NULL,
  `weeks` int(5) unsigned DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`,`lesson_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `lesson_week`
--

INSERT INTO `lesson_week` (`id`, `lesson_id`, `years`, `weeks`, `comments`) VALUES
(2, 16, 2010, 3, 'week4'),
(3, 17, 2014, 51, ''),
(4, 18, 2015, 3, ''),
(5, 18, 2015, 4, ''),
(6, 18, 2015, 5, ''),
(7, 18, 2015, 6, ''),
(8, 18, 2015, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `look_up`
--

CREATE TABLE IF NOT EXISTS `look_up` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` decimal(8,2) DEFAULT NULL,
  `end_time` decimal(8,2) DEFAULT NULL,
  `duration` int(5) DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `lesson_id` int(10) unsigned DEFAULT NULL,
  `week_day` int(5) unsigned DEFAULT NULL,
  `max_member` int(4) unsigned DEFAULT NULL,
  `available_member` int(4) unsigned DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `location_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `look_up`
--

INSERT INTO `look_up` (`id`, `start_time`, `end_time`, `duration`, `group_id`, `lesson_id`, `week_day`, `max_member`, `available_member`, `location`, `location_name`) VALUES
(1, 9.00, 9.50, 50, 1, 1, 6, 8, 0, 'LES6', 'Name2'),
(2, 9.50, 10.40, 50, 1, 1, 6, 8, 0, 'LES6', 'Name2'),
(3, 10.40, 11.30, 50, 1, 1, 6, 8, 0, 'LES6', 'Name2'),
(4, 9.00, 9.50, 50, 2, 2, 6, 4, 0, 'LES 7', 'Name3'),
(5, 9.50, 10.40, 50, 2, 2, 6, 4, 0, 'LES 7', 'Name3'),
(6, 10.40, 11.30, 50, 2, 2, 6, 4, 0, 'LES 7', 'Name3'),
(7, 13.00, 13.50, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(8, 13.50, 14.40, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(9, 14.40, 15.30, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(10, 15.30, 16.20, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(11, 16.20, 17.10, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(12, 17.10, 18.00, 50, 1, 1, 5, 8, 0, 'LES5', 'Name1'),
(13, 13.00, 13.50, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(14, 13.50, 14.40, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(15, 14.40, 15.30, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(16, 15.30, 16.20, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(17, 16.20, 17.10, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(18, 17.10, 18.00, 50, 2, 2, 2, 4, 0, 'LES 7', 'Name3'),
(19, 13.00, 13.50, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(20, 13.50, 14.40, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(21, 14.40, 15.30, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(22, 15.30, 16.20, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(23, 16.20, 17.10, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(24, 17.10, 18.00, 50, 2, 2, 3, 4, 0, 'LES 7', 'Name3'),
(25, 13.00, 13.50, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(26, 13.50, 14.40, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(27, 14.40, 15.30, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(28, 15.30, 16.20, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(29, 16.20, 17.10, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(30, 17.10, 18.00, 50, 2, 2, 1, 4, 0, 'LES 7', 'Name3'),
(31, 16.00, 16.50, 50, 1, 1, 1, 8, 4, 'LES4', 'Centre Court'),
(32, 16.50, 17.40, 50, 1, 1, 1, 8, 1, 'LES4', 'Centre Court'),
(33, 16.00, 16.50, 50, 1, 1, 2, 8, 0, 'LES4', 'Centre Court'),
(34, 16.50, 17.40, 50, 1, 1, 2, 8, 0, 'LES4', 'Centre Court'),
(35, 16.00, 16.50, 50, 1, 1, 1, 8, 0, 'LES4', 'Centre Court'),
(36, 16.50, 17.40, 50, 1, 1, 1, 8, 0, 'LES4', 'Centre Court'),
(37, 16.00, 16.50, 50, 1, 1, 3, 8, 0, 'LES4', 'Centre Court'),
(38, 16.50, 17.40, 50, 1, 1, 3, 8, 0, 'LES4', 'Centre Court'),
(39, 16.00, 16.50, 50, 1, 1, 1, 8, 0, 'LES4', 'Centre Court'),
(40, 16.50, 17.40, 50, 1, 1, 1, 8, 0, 'LES4', 'Centre Court'),
(41, 16.00, 16.50, 50, 1, 1, 4, 8, 0, 'LES5', 'Name1'),
(42, 16.50, 17.40, 50, 1, 1, 4, 8, 0, 'LES5', 'Name1'),
(43, 16.00, 16.50, 50, 2, 2, 4, 4, 0, 'LES 7', 'Name3'),
(44, 16.50, 17.40, 50, 2, 2, 4, 4, 0, 'LES 7', 'Name3'),
(45, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(46, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(47, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(48, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(49, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(50, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(51, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(52, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(53, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(54, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(55, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(56, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(57, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(58, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(59, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(60, 9.00, 9.50, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(61, 9.50, 10.40, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(62, 10.40, 11.30, 50, 6, 1, 1, 10, 0, 'TestLocation1', 'TEST1'),
(63, 12.00, 12.50, 50, 7, 3, 2, 4, 0, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `perm_schedule`
--

CREATE TABLE IF NOT EXISTS `perm_schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `lookup_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_schedule`
--

CREATE TABLE IF NOT EXISTS `temp_schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `lookup_id` int(10) unsigned DEFAULT NULL,
  `confirm` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `temp_schedule`
--

INSERT INTO `temp_schedule` (`id`, `user_id`, `lookup_id`, `confirm`) VALUES
(9, 1, 32, 1),
(2, 3, 31, 1),
(3, 4, 31, 1),
(4, 5, 31, 1),
(5, 6, 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `initial` varchar(25) DEFAULT NULL,
  `call_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `other_detail` varchar(100) DEFAULT NULL,
  `active` int(3) DEFAULT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `initial`, `call_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `other_detail`, `active`, `user_name`, `password`, `type_id`) VALUES
(1, 'mrs', 'nusrat', '', 'mehjabin', 'W', '1989-10-27', 'This is comment', 1, 'nusrat1', '123456', 0),
(3, 'md.', 'mehedi', '', 'rony', 'M', '1986-06-10', '', 1, '', NULL, 0),
(4, 'md.', 'karim', '', 'hossen', 'M', '1970-01-01', '', 0, '', NULL, 0),
(5, 'md.', 'hasan', '', 'uddin', 'M', '1970-01-01', '', 1, '', NULL, 0),
(6, 'md.', 'mithun', 'q', 'hossen', 'M', '1970-01-01', '', 1, 'mithun', '123456', 0),
(7, 'md.', 'kamal', '', 'hossen', 'M', '1970-01-01', '', 0, 'kamal', '123456', 0),
(10, 'khan', 'kamal', '', 'Jakee', 'M', '1985-01-01', '', 1, 'jakee', '123456', 0),
(11, 'Mr', 'Mostaq', 'hossen', 'Ali', 'M', '1987-01-24', '', 1, 'mostaq', '123456', 0),
(12, 'md.', 'khan', '', 'rahim', 'M', '1991-01-02', '', 1, '', NULL, 0),
(13, 'md.', 'khan', '', 'rahim', 'M', '1991-01-02', '', 1, '', NULL, 0),
(17, '', 'prianka', '', 'abrar', 'W', '1990-01-01', '', 1, '', NULL, 0),
(16, 'mrs', 'prianka', '', 'abrar', 'W', '1960-01-01', '', 1, '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_lesson_pref`
--

CREATE TABLE IF NOT EXISTS `user_lesson_pref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `preference` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `user_lesson_pref_FKIndex1` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `user_lesson_pref`
--

INSERT INTO `user_lesson_pref` (`id`, `user_id`, `group_id`, `preference`) VALUES
(1, 1, 2, 1),
(2, 1, 1, 2),
(3, 1, 3, 3),
(9, 3, 1, 3),
(8, 3, 1, 2),
(7, 3, 1, 1),
(10, 4, 1, 1),
(11, 4, 1, 2),
(12, 4, 1, 3),
(13, 5, 1, 1),
(14, 5, 1, 2),
(15, 5, 2, 3),
(16, 6, 1, 1),
(17, 6, 2, 2),
(18, 6, 3, 3),
(19, 7, 1, 1),
(20, 7, 2, 2),
(21, 7, 3, 3),
(22, 10, 0, 1),
(23, 10, 0, 2),
(24, 10, 0, 3),
(25, 11, 0, 1),
(26, 11, 0, 2),
(27, 11, 0, 3),
(28, 12, 0, 1),
(29, 12, 0, 2),
(30, 12, 0, 3),
(31, 13, 0, 1),
(32, 13, 0, 2),
(33, 13, 0, 3),
(34, 0, 0, 1),
(35, 0, 0, 2),
(36, 0, 0, 3),
(37, 0, 0, 1),
(38, 0, 0, 2),
(39, 0, 0, 3),
(40, 0, 0, 1),
(41, 0, 0, 2),
(42, 0, 0, 3),
(43, 0, 0, 1),
(44, 0, 0, 2),
(45, 0, 0, 3),
(46, 15, 0, 1),
(47, 15, 0, 2),
(48, 15, 0, 3),
(49, 16, 0, 1),
(50, 16, 0, 2),
(51, 16, 0, 3),
(52, 17, 0, 1),
(53, 17, 0, 2),
(54, 17, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_partner_pref`
--

CREATE TABLE IF NOT EXISTS `user_partner_pref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `desired` varchar(1) DEFAULT NULL,
  `call_name` varchar(25) DEFAULT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `street` varchar(25) DEFAULT NULL,
  `house_num` varchar(25) DEFAULT NULL,
  `post_code` varchar(25) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `telephone` int(15) unsigned DEFAULT NULL,
  `mobile` int(15) unsigned DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `bond_num` varchar(30) DEFAULT NULL,
  `level_skill` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `user_partner_pref_FKIndex1` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_partner_pref`
--

INSERT INTO `user_partner_pref` (`id`, `user_id`, `desired`, `call_name`, `middle_name`, `last_name`, `sex`, `birth_date`, `street`, `house_num`, `post_code`, `location`, `telephone`, `mobile`, `email`, `bond_num`, `level_skill`) VALUES
(1, 1, 'Y', 'rony', '', 'hasan', '', '0000-00-00', '', '', '', '', 0, 0, '', '', 0),
(2, 4, '', 'mehedi', '', 'rony', '', '1970-01-01', '', '', '', '', 0, 0, '', '', 0),
(3, 5, '', 'mehedi', '', 'rony', '', '1970-01-01', '', '', '', '', 0, 0, '', '', 0),
(4, 6, '', 'mehedi', '', 'rony', '', '1970-01-01', '', '', '', '', 0, 0, '', '', 0),
(5, 7, 'N', 'mehedi', '', 'rony', 'M', '1970-01-01', '', '', '', '', 0, 0, '', '', 0),
(6, 11, 'N', 'Lester', 'de', 'Bats', 'M', '2001-01-01', 'street', '1', '1234AA', '', 0, 0, '', '', 0),
(7, 15, 'O', 'nusrat', '', 'mehjabin', 'W', '1969-12-31', '', '', '', '', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE IF NOT EXISTS `user_payment` (
  `payment_id` varchar(15) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `issuer` varchar(10) NOT NULL,
  `country` varchar(3) DEFAULT NULL,
  `language` varchar(3) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `amount` int(10) unsigned DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `payment_type` varchar(10) DEFAULT NULL,
  `payment_bank` varchar(10) NOT NULL,
  `payment_reference` varchar(20) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `payment_ic_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`payment_id`,`user_id`),
  KEY `user_payment_FKIndex1` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_payment`
--

INSERT INTO `user_payment` (`payment_id`, `user_id`, `issuer`, `country`, `language`, `currency`, `amount`, `description`, `pay_date`, `payment_type`, `payment_bank`, `payment_reference`, `payment_status`, `payment_ic_id`) VALUES
('1262449793', 1, 'INCASSO', 'NL', 'NL', 'EUR', 1200, '', '2010-01-02', 'DDEBIT', '', NULL, 'OPEN', NULL),
('1262453560', 1, 'INCASSO', 'NL', 'NL', 'EUR', 1200, '', '2010-01-02', 'DDEBIT', '', 'RefTESTk6QBr', 'OK', NULL),
('1262453735', 1, 'INCASSO', 'NL', 'NL', 'EUR', 1200, '', '2010-01-02', 'DDEBIT', '', 'RefTESTk6QBr', 'INIT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_sport_info`
--

CREATE TABLE IF NOT EXISTS `user_sport_info` (
  `user_id` int(10) NOT NULL,
  `id_association` varchar(20) DEFAULT NULL,
  `tb_bonds_nummer` varchar(25) DEFAULT NULL,
  `skill_single` int(5) DEFAULT NULL,
  `skill_double` int(5) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `diploma_certificate` varchar(25) DEFAULT NULL,
  `several_year_had` int(5) DEFAULT NULL,
  `num_year_tennis` int(5) DEFAULT NULL,
  `num_year_workout` int(5) DEFAULT NULL,
  `explanation` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sport_info`
--

INSERT INTO `user_sport_info` (`user_id`, `id_association`, `tb_bonds_nummer`, `skill_single`, `skill_double`, `level`, `diploma_certificate`, `several_year_had`, `num_year_tennis`, `num_year_workout`, `explanation`) VALUES
(1, 'NA', 'NA', 1, 1, '', '', 0, 0, 0, ''),
(2, '', '', 0, 0, '', '', 0, 0, 0, ''),
(3, '', '', 0, 0, '', '', 0, 0, 0, ''),
(4, '', '', 0, 0, '', '', 0, 0, 0, ''),
(5, '', '', 0, 0, '', '', 0, 0, 0, ''),
(6, '', '', 0, 0, '', '', 0, 0, 0, ''),
(7, '', '', 0, 0, '', '', 0, 0, 0, ''),
(10, '', '', 0, 0, '', '', 0, 0, 0, ''),
(11, '', '', 0, 0, '', '', 0, 0, 0, ''),
(12, '', '', 0, 0, '', '', 0, 0, 0, ''),
(13, '', '', 0, 0, '', '', 0, 0, 0, ''),
(16, '', '', 0, 0, '', '', 0, 0, 0, ''),
(17, '', '', 0, 0, '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_time_pref`
--

CREATE TABLE IF NOT EXISTS `user_time_pref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `week_day` int(3) unsigned DEFAULT NULL,
  `day_time` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `user_time_pref_FKIndex1` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `user_time_pref`
--

INSERT INTO `user_time_pref` (`id`, `user_id`, `week_day`, `day_time`) VALUES
(1, 1, 1, 16.00),
(2, 1, 1, 17.00),
(3, 1, 2, 18.00),
(4, 1, 2, 19.00),
(21, 3, 1, 13.00),
(20, 3, 1, 12.00),
(19, 3, 1, 11.00),
(18, 3, 1, 10.00),
(17, 3, 1, 9.00),
(28, 3, 1, 19.00),
(27, 3, 1, 18.30),
(26, 3, 1, 18.00),
(25, 3, 1, 17.30),
(24, 3, 1, 17.00),
(23, 3, 1, 16.30),
(22, 3, 1, 16.00),
(29, 4, 1, 15.30),
(30, 4, 1, 16.00),
(31, 4, 1, 16.30),
(32, 4, 1, 17.00),
(33, 4, 1, 17.30),
(34, 4, 1, 18.00),
(35, 4, 1, 18.30),
(36, 4, 1, 19.00),
(37, 5, 1, 15.30),
(38, 5, 1, 16.00),
(39, 5, 1, 16.30),
(40, 5, 1, 17.00),
(41, 5, 1, 17.30),
(42, 5, 1, 18.00),
(43, 5, 1, 18.30),
(44, 5, 1, 19.00),
(45, 6, 1, 15.30),
(46, 6, 1, 16.30),
(47, 6, 1, 17.00),
(48, 6, 1, 17.30),
(49, 6, 1, 18.00),
(50, 6, 1, 18.30),
(51, 6, 1, 19.00),
(52, 7, 1, 16.00),
(53, 7, 1, 16.30),
(54, 7, 1, 17.00),
(55, 7, 1, 17.30),
(56, 7, 1, 18.00),
(57, 7, 1, 18.30),
(58, 7, 1, 19.00),
(59, 7, 1, 20.00),
(60, 10, 1, 13.00),
(61, 10, 1, 16.00),
(62, 11, 1, 13.00),
(63, 11, 2, 16.00),
(64, 12, 1, 13.00),
(65, 12, 1, 16.00),
(66, 12, 2, 13.00),
(67, 12, 2, 16.00),
(68, 12, 3, 16.00),
(69, 12, 4, 16.00),
(70, 13, 1, 13.00),
(71, 13, 1, 16.00),
(72, 13, 2, 13.00),
(73, 13, 2, 16.00),
(74, 13, 3, 16.00),
(75, 13, 4, 16.00),
(76, 15, 2, 12.50),
(77, 15, 4, 16.50),
(78, 16, 2, 12.50),
(79, 16, 4, 16.50),
(80, 16, 6, 9.50),
(81, 17, 1, 9.50),
(82, 17, 2, 12.50),
(83, 17, 2, 16.00),
(84, 17, 3, 14.40),
(85, 17, 4, 16.50),
(86, 17, 4, 17.40),
(87, 17, 5, 14.40),
(88, 17, 6, 9.50),
(89, 17, 6, 11.30);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`, `name`) VALUES
(1, 1, 'admin'),
(2, 2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_list`
--

CREATE TABLE IF NOT EXISTS `waiting_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `waiting_list`
--

INSERT INTO `waiting_list` (`id`, `user_id`) VALUES
(1, 7),
(2, 10),
(3, 11),
(4, 12),
(5, 13),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
