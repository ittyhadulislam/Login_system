-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 02:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` longtext NOT NULL,
  `date` date NOT NULL,
  `gender` text NOT NULL,
  `address` mediumtext NOT NULL,
  `address2` mediumtext NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` int(30) NOT NULL,
  `com_edu` text NOT NULL,
  `current_status` text NOT NULL,
  `acdm_id` bigint(20) NOT NULL,
  `nid` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `first_name`, `last_name`, `phone`, `email`, `bio`, `date`, `gender`, `address`, `address2`, `city`, `state`, `zip_code`, `com_edu`, `current_status`, `acdm_id`, `nid`, `img`) VALUES
(1, 'Syed Ittyhadul Islam', 'Azmain', 1955323664, 'az.walker30822@gmail.com', 'I am Ittyhadul Islam, Certified and Experienced Web & WordPress Developer, completed over 200 web projects of 135 clientsemphasized text at various marketplaces since-2017', '2001-11-07', '1', '6/2 Gupibag 2nd Lane', '', 'Dhaka', '1', 1202, 'NIET', '1', 1810066084, 6912986996, '1.1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reg_info`
--

CREATE TABLE `reg_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `username`, `email`, `pass`, `cpass`) VALUES
(7, 'ittyhadulislam', 'az.walker30822@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_info`
--
ALTER TABLE `reg_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg_info`
--
ALTER TABLE `reg_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
