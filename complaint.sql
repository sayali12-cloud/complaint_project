-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 01, 2026 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `rollno` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `complaint` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `rollno`, `fullname`, `subject`, `complaint`, `status`) VALUES
(1, '8013', 'sayali vilas adsul', 'Hostel', 'Rooms are not clean', 'unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `id` int(11) NOT NULL,
  `rollno` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`id`, `rollno`, `class`, `fullname`, `division`, `emailid`, `phoneno`) VALUES
(1, '8013', 'ty,bcs', 'sayali vilas adsul', 'A', 'sayaliadsul6@gmail.com', '8975117362');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
