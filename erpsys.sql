-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 02:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `id` int(5) NOT NULL,
  `course` varchar(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `ccode` varchar(7) NOT NULL,
  `c_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `ccode`, `c_name`) VALUES
(1, 'CJC01', 'JAVA(CORE)'),
(2, 'CDC01', 'Discrete Mathematics'),
(3, 'CND01', 'DCO'),
(4, 'CDB01', 'NAD'),
(5, 'CDB01', 'DBMS'),
(6, 'CSP01', 'System Programming'),
(7, 'CAI01', 'Artificial Intelligence'),
(8, 'CAD01', 'ADA'),
(9, 'CWT01', 'Web Technology'),
(10, 'CFR01', 'French');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(100) NOT NULL,
  `course` varchar(10) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `subject`, `msg`, `status`) VALUES
(1, 'agsgsvdgjvsad', 'asgcasjghvajsgvdasd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enroll_id` varchar(20) NOT NULL,
  `sem` varchar(1) NOT NULL,
  `course` varchar(20) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `password`, `name`, `enroll_id`, `sem`, `course`, `mobileno`, `email`, `image`) VALUES
(1, 'ashwiniiojha101', '123456789', 'ankit singh chouhan', 'ankit@gmai.com', '1', '1', '9039980255', 'Adit@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `course` varchar(15) NOT NULL,
  `test_type` varchar(9) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tec_reg`
--

CREATE TABLE `tec_reg` (
  `id` int(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `desgination` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `employeeid` int(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `sub2` varchar(40) NOT NULL,
  `sub3` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tec_reg`
--

INSERT INTO `tec_reg` (`id`, `username`, `password`, `name`, `desgination`, `emailid`, `status`, `contactno`, `employeeid`, `subject`, `image`, `sub2`, `sub3`) VALUES
(1, '', '', '', 'select', '', 'select', 0, 0, 'select', '', 'select', 'select'),
(2, 'richa', '123456', 'richa bansal', 'Asst. Professor', 'deepticontri@gmail.com', 'Visiting', 2147483647, 0, 'DIGITAL COMPUTER ORGANIZATION', '', 'JAVA', 'NUMERICAL ANALYSIS DESIGN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tec_reg`
--
ALTER TABLE `tec_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attend`
--
ALTER TABLE `attend`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tec_reg`
--
ALTER TABLE `tec_reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
