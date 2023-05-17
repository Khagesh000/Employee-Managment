-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 03:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(2, 'admin', 'a1Bz20ydqelm8m1wqlf865b53623b121fd34ee5426c792e5c33af8c227', 'junil', 'a', 'toledo');

-- --------------------------------------------------------

--
-- Table structure for table `emp_message`
--

CREATE TABLE `emp_message` (
  `empID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_message`
--

INSERT INTO `emp_message` (`empID`, `name`, `email`, `message`) VALUES
(3, 'nice', 'jonelwalangkontra@yahoo.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `late`
--

CREATE TABLE `late` (
  `late_id` int(11) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `datehire` date NOT NULL,
  `designation` text NOT NULL,
  `Department` text NOT NULL,
  `id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `late`
--

INSERT INTO `late` (`late_id`, `user_no`, `password`, `fname`, `mname`, `lname`, `datehire`, `designation`, `Department`, `id`) VALUES
(12, 'CTcf475', 'toledo12345', 'junil', 'a', 'toledo', '0000-00-00', '', '', 'OFFLINE'),
(13, 'CT4292d', 'cecil', 'maria cecilia', 'r', 'obal', '0000-00-00', '', '', 'OFFLINE'),
(14, 'CTa48b4', '12345678', 'jonalyn', 'r', 'areglo', '0000-00-00', '', '', 'OFFLINE'),
(15, 'CT2887d', 'dar123', 'darwin', 'r', 'alborte', '0000-00-00', '', '', 'OFFLINE'),
(16, 'CT793f5', '12345678', 'jonalyn', 'r', 'areglo', '2019-04-24', 'it staff', 'Purchasing Dept', 'OFFLINE');

-- --------------------------------------------------------

--
-- Table structure for table `timein`
--

CREATE TABLE `timein` (
  `id` int(20) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `time` varchar(200) NOT NULL,
  `out` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timein`
--

INSERT INTO `timein` (`id`, `user_no`, `user_name`, `password`, `time`, `out`, `date`) VALUES
(1, 'CTcf475', 'toledo12345', 'junil a toledo', '11:10 AM', '05:46 PM', 'May-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `timeout`
--

CREATE TABLE `timeout` (
  `id` int(20) NOT NULL,
  `user_no` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `emp_message`
--
ALTER TABLE `emp_message`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `late`
--
ALTER TABLE `late`
  ADD PRIMARY KEY (`late_id`);

--
-- Indexes for table `timein`
--
ALTER TABLE `timein`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeout`
--
ALTER TABLE `timeout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_message`
--
ALTER TABLE `emp_message`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `late`
--
ALTER TABLE `late`
  MODIFY `late_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timein`
--
ALTER TABLE `timein`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timeout`
--
ALTER TABLE `timeout`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
