-- phpMyAdmin SQL Dump
-- version 4.3.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 05:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample_dropdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
`main_category_id` int(11) NOT NULL,
  `main_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`main_category_id`, `main_category_name`) VALUES
(1, 'gadget'),
(2, 'cloth');

-- --------------------------------------------------------

--
-- Table structure for table `sub1_category`
--

CREATE TABLE IF NOT EXISTS `sub1_category` (
`sub1_category_id` int(11) NOT NULL,
  `sub1_category_name` varchar(100) NOT NULL,
  `main_category_id_fk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub1_category`
--

INSERT INTO `sub1_category` (`sub1_category_id`, `sub1_category_name`, `main_category_id_fk`) VALUES
(1, 'cellphone', 1),
(2, 'tablet', 1),
(3, 'mens', 2),
(4, 'womens', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub2_category`
--

CREATE TABLE IF NOT EXISTS `sub2_category` (
`sub2_category_id` int(11) NOT NULL,
  `sub2_category_name` varchar(100) NOT NULL,
  `sub1_category_id_fk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub2_category`
--

INSERT INTO `sub2_category` (`sub2_category_id`, `sub2_category_name`, `sub1_category_id_fk`) VALUES
(1, 'apple', 1),
(2, 'android', 1),
(3, 'mini ipad', 2),
(4, 'acer tablet', 2),
(5, 'jacket', 3),
(6, 'polo', 3),
(7, 'blause', 4),
(8, 'miniskirt', 4),
(9, 't-shirt', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
 ADD PRIMARY KEY (`main_category_id`);

--
-- Indexes for table `sub1_category`
--
ALTER TABLE `sub1_category`
 ADD PRIMARY KEY (`sub1_category_id`);

--
-- Indexes for table `sub2_category`
--
ALTER TABLE `sub2_category`
 ADD PRIMARY KEY (`sub2_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
MODIFY `main_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub1_category`
--
ALTER TABLE `sub1_category`
MODIFY `sub1_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub2_category`
--
ALTER TABLE `sub2_category`
MODIFY `sub2_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
