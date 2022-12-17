-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:43 PM
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
-- Database: `cinepluz`
--

-- --------------------------------------------------------

--
-- Table structure for table `baahubali_qns`
--

CREATE TABLE `bahubali_qns` (
  `qid` int(50) NOT NULL,
  `qname` varchar(200) NOT NULL,
  `aid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baahubali_qns`
--

INSERT INTO `bahubali_qns` (`qid`, `qname`, `aid`) VALUES
(1, 'What is the full name of katappa?', 4),
(2, 'In how many languages bahubali2 was released?', 8),
(3, "What animal sigil is incribed on amarendra bahubali's armour? ", 12),
(4, "How long did devasena stay as a captive at bhalladeva's kingdom", 16),
(5, "what is the name of the cowardly cousin of devasena,who becomes baahubali's follower?", 20),
(6, 'what is the profession of the character essayed by the director S.S.Rajamouli in the guest appearance?', 24),
(7, 'what is the name given to mahendra baahubali by his step-parents?', 28),
(8, 'what belonging of avanthika gets lost and is later used by baahubali to find her?', 32),
(9, "which of these talented women feature in the song 'manohari'?", 36),
(10, "we can't resist this last question!katappa ne baahubali ko kyu maara?", 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baahubali_qns`
--
ALTER TABLE `bahubali_qns`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baahubali_qns`
--
ALTER TABLE `bahubali_qns`
  MODIFY `qid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION *