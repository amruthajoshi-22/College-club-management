-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 09:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trefle`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `sno` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `USN` char(10) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `sem` int(1) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `reason` varchar(350) NOT NULL,
  `club` varchar(50) NOT NULL,
  `core member` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sno`, `name`, `USN`, `branch`, `sem`, `mail`, `phone`, `reason`, `club`, `core member`) VALUES
(1, 'Bhargavi Nayak', '4nm19is026', 'ISE', 7, '4nm19is026@nmamit.in', 1122334455, 'I enjoy dancing', 'Kalanjali', 'N'),
(2, 'amrutha', '4nm20cs027', 'CSE', 5, 'ankitharao@gmail.com', 1192244188, 'i love code', 'Kalanjali', 'N'),
(3, 'Amrutha V', '4nm20cs029', 'CSE', 5, 'ananya2002@gmail.com', 1192244188, 'I love coding', 'CSI', 'Y'),
(4, 'Amrutha Joshi', '4nm20cs030', 'CSE', 7, 'amruthajoshi2002@gma', 1192244188, 'kldsfiehwr', 'Kalanjali', 'N'),
(5, 'ananya', '4nm20cs045', 'ISE', 7, 'ananya2002@gmail.com', 1192244188, 'vh;usoa', 'CSI', 'N'),
(6, 'Aditi kumari', '4nm20cs013', 'CS', 5, '4nm20cs013@nmamit.in', 1340776213, 'i love to code', 'ACE', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`sno`,`USN`,`phone`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
