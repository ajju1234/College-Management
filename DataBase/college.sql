-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 05:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `peon`
--

CREATE TABLE `peon` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `q` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peon`
--

INSERT INTO `peon` (`firstname`, `middlename`, `lastname`, `dob`, `gender`, `email`, `mobile`, `q`, `address`, `salary`) VALUES
('a', 'b', 'c', '12/01/1980', 'male', 'aj.@gmail.com ', 1234567892, 'ME CMNP', 'A/102 Gold nager,thane-401105 ', 5000),
('vijay', 'ram', 'shah', '12/01/1799', 'male', 'vijay@gmail.com ', 12056396, '10th', 'A/102 Gold nager,thane-401105', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(50) NOT NULL,
  `password_1` varchar(50) NOT NULL,
  `password_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `password_1`, `password_2`) VALUES
('ABC', '12345', '12345'),
('A', '123456', '123456'),
('ABCD', '012345', '012345'),
('BOSS', '7715', '7715'),
('kajal suthar', '20131997', '20131997'),
('don', '12345', '12345'),
('user', 'pass', 'pass'),
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `q` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`firstname`, `middlename`, `lastname`, `dob`, `gender`, `email`, `mobile`, `q`, `address`, `salary`) VALUES
('vijay', 'ram', 'shah', '12/01/1799', 'male', 'vijay@gmail.com', 1234567892, 'ME CMNP', 'A/102 Gold nager,thane-401105 ', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `10th` int(50) NOT NULL,
  `12th` int(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `middlename`, `lastname`, `dob`, `gender`, `email`, `mobile`, `10th`, `12th`, `class`, `course`, `address`) VALUES
('ajit', 'kumar', 'trivedi', '2017-09-04', 'male', 'ajit@gmail.com', 7021556699, 92, 1234567890, 'SE', 'Comuter Engineering', 'A/102 Gold nager,thane-401105');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `q` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`firstname`, `middlename`, `lastname`, `dob`, `gender`, `email`, `mobile`, `q`, `address`, `salary`) VALUES
('vijay', 'sankar', 'sharma', '12/01/1799', 'male', 'vijay@gmail.com', 1234567892, 'ME CMNP', '11/c vijay nagar,mira road,thane-401107 ', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`) VALUES
(1, 'neovic', 'devierte', 'Neovic Devierte'),
(2, 'gemalyn', 'cepe', 'Gemalyn Cepe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
