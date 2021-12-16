-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Id` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pakage_name` varchar(30) NOT NULL,
  `amount` int(5) NOT NULL,
  `bill_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Id`, `username`, `area`, `pakage_name`, `amount`, `bill_date`) VALUES
(1, 'maksud', 'Uttara', 'Primium', 2500, '2021-12-14'),
(2, 'ashike820', 'Uttara ', 'package 1', 500, '21/12/09'),
(3, 'ashike820', 'Uttara ', 'package 1', 500, '21/12/09'),
(4, 'ashike820', 'Uttara ', 'package 1', 500, '21/12/09'),
(5, 'ashike820', 'Uttara ', 'package 1', 500, '21/12/09'),
(6, 'ashike820', 'Uttara ', 'package 1', 500, '21/12/09'),
(7, 'ashike820', 'Uttara ', 'package 1', 500, '21212121/1212/0909'),
(8, 'ashike820', 'Uttara ', 'package 1', 500, '2021/12/09'),
(9, 'ashike820', 'Uttara ', 'package 1', 500, '2021/12/11'),
(10, 'tamim', 'city', 'Package 8', 8000, '2021/12/11');

-- --------------------------------------------------------

--
-- Table structure for table `communication_box`
--

CREATE TABLE `communication_box` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `lineman` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communication_box`
--

INSERT INTO `communication_box` (`id`, `name`, `area`, `customer`, `lineman`, `status`) VALUES
(1, 'ashike', 'NARAYANGANJ', 'need to fix asap', 'Write the solution', 'CONFIRMED'),
(2, 'tamim', 'city', 'asxzczxczxc', ' ', 'CONFIRMED');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `manager_command` varchar(50) NOT NULL,
  `customer_request` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `name`, `area`, `package`, `status`, `manager_command`, `customer_request`, `date`) VALUES
(1, 'ashik', 'savar', 'package 4', 'RUNNING', 'active', 'None', '2021/11/12');

-- --------------------------------------------------------

--
-- Table structure for table `notifycustomer`
--

CREATE TABLE `notifycustomer` (
  `Id` int(8) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `sendby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifycustomer`
--

INSERT INTO `notifycustomer` (`Id`, `username`, `subject`, `comment`, `sendby`) VALUES
(4, 'taimma', 'Bye pakage', 'Your current package has expired.Please clear the ', 'maksud'),
(5, 'Ashiq', 'Bye pakage', 'Your current package has expired.Please clear the ', 'maksud'),
(11, 'ashike820', 'Payment', 'Due bill. ', 'maksud'),
(12, 'ashike820', 'Payment', 'bill', 'maksud2');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `speed` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `cable` varchar(50) NOT NULL,
  `sites` varchar(10) NOT NULL,
  `offer` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `speed`, `time`, `cable`, `sites`, `offer`, `area`, `amount`) VALUES
(1, 'Package 1', '20MBPS', '24 Hour', 'FIBRE', '24 Hour', 'xxxxxxxxx', 'xxxxxxxxxxxxx', '2000'),
(2, 'Package 2 ', '20MBPS', '12 Hour', 'FIBRE', '24 Hour', 'xxxxxxx', 'xxxxxxxxxxx', '800'),
(3, 'Package 3', '10MBPS', '12 Hour', 'FIBRE', '24 Hour', '500 talk time', 'city', '800'),
(4, 'package 4', '20MBPS', '12 Hour', 'SHIELDED', '24 Hour', '', '', '1000'),
(5, 'Package 5', '10MBPS', '12 Hour', 'TWISTED', '12 Hour', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxx', '800'),
(6, 'Package 6', '10MBPS', '24 Hour', 'TWISTED', '24 Hour', 'xxxxxxxxxxxxxxxxxx', '', '1000'),
(7, 'Package 8', '20MBPS', '24 Hour', 'SHIELDED', '24 Hour', '', '', '2000'),
(8, 'Pakage 9', '15MBPS', '12 Hour', 'FIBRE', '24 Hour', 'xxxxxx', '', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `gender`, `dob`, `religion`, `address`, `phone`, `email`, `username`, `password`, `user_type`) VALUES
(11, 'Ashique', 'male', '2021-12-23', 'Islam', 'Bramonbaria', '01919996452', 'mim@yahoo.com', 'ashique', '123', 'customer'),
(28, 'mehedi hasan', 'male', '2021-12-29', 'Islam', 'Narayanganj', '01919996451', 'mehedi@yahoo.com', 'tamim', '123', 'admin'),
(31, 'Ahsan nayeem', 'male', '2021-12-02', 'Islam', 'Donia', '01717778988', 'ash00@gmail.com', 'ahsan', '123', 'admin'),
(32, 'maksud', 'male', '2021-12-23', 'Islam', 'Uttara', '01961897472', 'mak@gmail.com', 'maksud', '123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `employee_status` varchar(10) NOT NULL,
  `amount` int(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `username`, `user_type`, `employee_status`, `amount`, `date`) VALUES
(1, 'ashiq.rahman', 'manger', 'active', 5000, '2021-11-29'),
(2, 'tamim', 'admin', 'active', 5000, '2021-12-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `communication_box`
--
ALTER TABLE `communication_box`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `notifycustomer`
--
ALTER TABLE `notifycustomer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `communication_box`
--
ALTER TABLE `communication_box`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifycustomer`
--
ALTER TABLE `notifycustomer`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
