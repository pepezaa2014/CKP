-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckw_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CardID` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Time` varchar(30) NOT NULL,
  `License` varchar(8) NOT NULL,
  `Token` int(2) NOT NULL,
  `Numtag` int(50) NOT NULL,
  `Parking` varchar(30) NOT NULL,
  `ParkNo` int(6) NOT NULL,
  `Outsc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scan`
--

INSERT INTO `scan` (`ID`, `Name`, `CardID`, `Status`, `Time`, `License`, `Token`, `Numtag`, `Parking`, `ParkNo`, `Outsc`) VALUES
(1, 'ภคพล ใจเสาร์ดี', '0011026268', 'ออกจากโรงเรียน', '14:33:47', 'กก1234', 4, 0, '', 0, 2),
(2, 'ภูริชญา เสาร์จันทร์', '0011006604', 'ไม่มาโรงเรียน', '00:00:00', 'กก1213', 0, 0, '', 0, 0),
(3, 'อาทิตยา กี', '0011014560', 'ไม่มาโรงเรียน', '00:00:00', 'กก1212', 0, 0, '', 0, 0),
(4, 'ภัทรพล หน่อหล้า', '0011024585', 'ออกจากโรงเรียน', '14:16:00', '1ฟก1234', 2, 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scan`
--
ALTER TABLE `scan`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
