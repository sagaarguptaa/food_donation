-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 05:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waste_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_pass` varchar(10) NOT NULL,
  `admin_repass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_mobile`, `admin_email`, `admin_pass`, `admin_repass`) VALUES
(1, 'admin', '5588664415', 'admin@gmail.com', 'admin123', 'admin123'),
(2, 'geeta', '9988776655', 'geeta@gmail.com', 'geeta123', 'geeta123'),
(3, 'sagar', '9896989698', 'sagar@gmail.com', 'sagar', 'sagar');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_message`
--

CREATE TABLE `ngo_message` (
  `id` int(11) NOT NULL,
  `ngo_name` varchar(20) NOT NULL,
  `ngo_email` varchar(20) NOT NULL,
  `ngo_info` varchar(255) NOT NULL,
  `ngo_msg` varchar(255) NOT NULL,
  `ngo_mobile` varchar(10) NOT NULL,
  `ngo_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_signup`
--

CREATE TABLE `ngo_signup` (
  `id` int(11) NOT NULL,
  `ngo_name` varchar(20) NOT NULL,
  `ngo_mob` varchar(10) NOT NULL,
  `ngo_email` varchar(30) NOT NULL,
  `ngo_pin` varchar(6) NOT NULL,
  `ngo_add` varchar(255) NOT NULL,
  `ngo_pass` varchar(20) NOT NULL,
  `ngo_repass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_signup`
--

INSERT INTO `ngo_signup` (`id`, `ngo_name`, `ngo_mob`, `ngo_email`, `ngo_pin`, `ngo_add`, `ngo_pass`, `ngo_repass`) VALUES
(2, 'ngo', '5456545655', 'ngo@gmail.com', '123456', 'ngo', 'ngo1', 'ngo1');

-- --------------------------------------------------------

--
-- Table structure for table `res_message`
--

CREATE TABLE `res_message` (
  `id` int(11) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_email` varchar(20) NOT NULL,
  `res_mobile` varchar(10) NOT NULL,
  `res_info` varchar(255) NOT NULL,
  `res_msg` varchar(255) NOT NULL,
  `res_date` date NOT NULL,
  `res_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_message`
--

INSERT INTO `res_message` (`id`, `res_name`, `res_email`, `res_mobile`, `res_info`, `res_msg`, `res_date`, `res_image`) VALUES
(2, 'xyz', 'xyz@gmail.com', '9876543212', 'abc', 'i m available ', '2023-03-08', 'images/gajar_halwa.jpg'),
(3, 'sagar', 'xyz@gmail.com', '9876543212', 'abc', 'ggg', '2023-03-10', '../NGO_Dashboard/images/chena_roll.jpg'),
(4, 'xyz', 'xyz@gmail.com', '5856585585', 'abc', 'i m available ', '2023-03-24', '../NGO_Dashboard/images/Real_mango_juice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `res_signup`
--

CREATE TABLE `res_signup` (
  `id` int(11) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_mob` varchar(10) NOT NULL,
  `res_email` varchar(30) NOT NULL,
  `res_pin` varchar(6) NOT NULL,
  `res_add` varchar(255) NOT NULL,
  `res_pass` varchar(20) NOT NULL,
  `res_repass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_signup`
--

INSERT INTO `res_signup` (`id`, `res_name`, `res_mob`, `res_email`, `res_pin`, `res_add`, `res_pass`, `res_repass`) VALUES
(2, 'xyz', '8986898689', 'xyz@gmail.com', '400612', 'dombivli', 'xyz1', 'xyz1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_message`
--
ALTER TABLE `ngo_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_signup`
--
ALTER TABLE `ngo_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_message`
--
ALTER TABLE `res_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_signup`
--
ALTER TABLE `res_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_message`
--
ALTER TABLE `ngo_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_signup`
--
ALTER TABLE `ngo_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `res_message`
--
ALTER TABLE `res_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `res_signup`
--
ALTER TABLE `res_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
