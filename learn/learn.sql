-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 10:38 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsite1`
--

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) DEFAULT NULL,
  `customer_name` text,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_pass` varchar(100) DEFAULT NULL,
  `customer_country` text,
  `customer_city` text,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_image` text,
  `customer_address` text,
  `custom_roll` varchar(255) DEFAULT NULL,
  `custom_univ` varchar(255) DEFAULT NULL,
  `custom_result` varchar(255) DEFAULT NULL,
  `offer_cat` varchar(255) DEFAULT NULL,
  `ddate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `customer_address`, `custom_roll`, `custom_univ`, `custom_result`, `offer_cat`, `ddate`) VALUES
(15, '::1', 'Sample', 'sample@gmail.com', '8989', 'India', 'Delhi', '89898', NULL, ',dshgkaqf', NULL, NULL, NULL, NULL, '0'),
(14, '::1', 'Saurav Kumar', 'abc@gmail.com', '787', 'India', 'Delhi', '8860394267', NULL, 'F-282 3rd floor , nanakpura                     ', '', '', '', '', ''),
(17, '::1', 'abc', 'kbc@gmail.com', 'lddhfw', NULL, NULL, '4597396', NULL, NULL, NULL, NULL, NULL, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `learn`
--
ALTER TABLE `learn`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
