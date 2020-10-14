-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 08:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `mail` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mail`, `pass`) VALUES
('abc@gmail.com', '854d6fae5ee42911677c739ee1734486'),
('xyz@gmail.com', '158f3069a435b314a80bdcb024f8e422');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `ad_no` varchar(15) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`ad_no`, `php`, `mysql`, `html`, `total`, `percent`) VALUES
('CE1001', 70, 75, 80, 225, 75),
('ET30002', 20, 30, 20, 70, 23),
('IT1002', 50, 30, 20, 100, 33),
('ME1001', 50, 45, 60, 155, 52);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ad_no` varchar(15) NOT NULL,
  `sname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ad_no`, `sname`, `email`, `phone`, `pass`) VALUES
('CE1001', 'Tom', 'tho@yahoo.com', 2147483647, '22ac3c5a5bf0b520d281c122d1490650'),
('CE2003', 'Tina', 'ta@gmail.com', 2147483647, '1c1d4df596d01da60385f0bb17a4a9e0'),
('ET30002', 'Seb', 'sb@yahoo.com', 2147483647, 'abd815286ba1007abfbb8415b83ae2cf'),
('IT1002', 'Roy', 'rr@gmail.com', 2147483647, '2e65f2f2fdaf6c699b223c61b1b5ab89'),
('ME1001', 'Kate', 'kkt@gmail.com', 2147483647, '1ce927f875864094e3906a4a0b5ece68');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `ad_no` (`ad_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ad_no`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
