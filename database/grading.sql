-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 04:01 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `grading`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `grading_tbl`
-- 

CREATE TABLE `grading_tbl` (
  `id` int(20) NOT NULL auto_increment,
  `Reg_no` int(20) NOT NULL,
  `Tests` int(20) NOT NULL,
  `coursework` int(20) NOT NULL,
  `final_exam` int(20) NOT NULL,
  `total_marks` int(20) NOT NULL,
  `grades` int(20) NOT NULL,
  `course_unit` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `grading_tbl`
-- 

INSERT INTO `grading_tbl` (`id`, `Reg_no`, `Tests`, `coursework`, `final_exam`, `total_marks`, `grades`, `course_unit`) VALUES 
(1, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, 0, ''),
(4, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`id`, `username`, `password`) VALUES 
(1, 'willima', '12345'),
(2, 'willima', '12345'),
(3, 'jur', '1234567'),
(4, 'jur', '1234567'),
(5, 'ceaser', 's.s'),
(6, 'ceaser', 's.s'),
(7, 'anis tombe', 'admin'),
(8, 'anis tombe', 'admin'),
(9, 'jur', '123456'),
(10, 'jur', '123456'),
(11, '', ''),
(12, '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `subjects`
-- 

CREATE TABLE `subjects` (
  `id` int(20) NOT NULL auto_increment,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `subjects`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tblstudent`
-- 

CREATE TABLE `tblstudent` (
  `id` int(20) NOT NULL auto_increment,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `Reg_no` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `tblstudent`
-- 

INSERT INTO `tblstudent` (`id`, `firstname`, `lastname`, `age`, `gender`, `address`, `email`, `contact`, `Reg_no`) VALUES 
(3, 'peter', 'thon', 45, 'male', 'kampala', 'peter@yahoo.com', 777774563, '123678'),
(4, 'peter', 'thon', 45, 'male', 'kampala', 'peter@yahoo.com', 777774563, '1236'),
(6, 'ceaser', 'birori', 20, 'male', 'mengo', 'ceaser@gmail,', 0, ''),
(7, 'anis', 'santo', 22, 'male', 'nabutiti', 'anizzysanto@gmail,co', 774354005, '0098'),
(8, 'anis', 'santo', 22, 'male', 'nabutiti', 'anizzysanto@gmail,co', 774354005, '0098'),
(9, '', '', 0, '', '', '', 0, ''),
(10, '', '', 0, '', '', '', 0, ''),
(11, 'kirang', 'wani', 23, 'female', 'kasanga', 'kirangwani@gmail.com', 776925529, 'BAITT/15D/SU/A1905'),
(12, 'kirang', 'wani', 23, 'female', 'kasanga', 'kirangwani@gmail.com', 776925529, 'BAITT/15D/SU/A1905'),
(13, '', '', 0, '', '', '', 0, ''),
(14, '', '', 0, '', '', '', 0, ''),
(15, 'fd', 'trr', 0, 'sds', 'df', 'gdg', 0, 'gfh'),
(16, 'fd', 'trr', 0, 'sds', 'df', 'gdg', 0, 'gfh');
