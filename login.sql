-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `coa`
--

CREATE TABLE `coa` (
  `Date` date NOT NULL,
  `Akshay` int(1) NOT NULL,
  `Gagn` int(1) NOT NULL,
  `Mayur` int(1) NOT NULL,
  `Kumar Sambhav` tinyint(1) NOT NULL,
  `Ranjeet Patel` tinyint(1) NOT NULL,
  `Siddarth Mishra` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa`
--

INSERT INTO `coa` (`Date`, `Akshay`, `Gagn`, `Mayur`, `Kumar Sambhav`, `Ranjeet Patel`, `Siddarth Mishra`) VALUES
('2020-04-28', 1, 1, 0, 0, 0, 0),
('0000-00-00', 0, 0, 0, 0, 0, 0),
('2020-05-08', 1, 1, 1, 0, 0, 0),
('2020-05-08', 1, 1, 1, 0, 0, 0),
('2020-05-08', 1, 1, 1, 0, 0, 0),
('2020-05-02', 1, 0, 1, 1, 1, 1),
('2020-05-06', 0, 1, 1, 1, 1, 0),
('2020-05-07', 1, 1, 1, 1, 1, 1),
('2020-05-07', 1, 1, 1, 1, 1, 1),
('2020-05-11', 1, 1, 1, 0, 1, 1),
('2020-05-11', 1, 1, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `Date` date NOT NULL,
  `Akshay` tinyint(1) NOT NULL,
  `Gagn` tinyint(1) NOT NULL,
  `Mayur` tinyint(1) NOT NULL,
  `Kumar Sambhav` tinyint(1) NOT NULL,
  `Ranjeet Patel` tinyint(1) NOT NULL,
  `Siddarth Mishra` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`Date`, `Akshay`, `Gagn`, `Mayur`, `Kumar Sambhav`, `Ranjeet Patel`, `Siddarth Mishra`) VALUES
('2020-05-01', 1, 0, 1, 0, 0, 0),
('2020-05-01', 1, 0, 1, 0, 0, 0),
('2020-05-01', 1, 0, 1, 0, 0, 0),
('2020-05-01', 1, 0, 1, 0, 0, 0),
('2020-05-06', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ee`
--

CREATE TABLE `ee` (
  `Date` date NOT NULL,
  `Akshay` tinyint(1) NOT NULL,
  `Gagn` tinyint(1) NOT NULL,
  `Mayur` tinyint(1) NOT NULL,
  `Kumar Sambhav` tinyint(1) NOT NULL,
  `Ranjeet Patel` tinyint(1) NOT NULL,
  `Siddarth Mishra` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ee`
--

INSERT INTO `ee` (`Date`, `Akshay`, `Gagn`, `Mayur`, `Kumar Sambhav`, `Ranjeet Patel`, `Siddarth Mishra`) VALUES
('2020-05-14', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `Date` date NOT NULL,
  `Akshay` tinyint(1) NOT NULL,
  `Gagn` tinyint(1) NOT NULL,
  `Mayur` tinyint(1) NOT NULL,
  `Kumar Sambhav` tinyint(1) NOT NULL,
  `Ranjeet Patel` tinyint(1) NOT NULL,
  `Siddarth Mishra` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`Date`, `Akshay`, `Gagn`, `Mayur`, `Kumar Sambhav`, `Ranjeet Patel`, `Siddarth Mishra`) VALUES
('2020-05-06', 1, 1, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`) VALUES
('Akshay', 'akshayp'),
('Gagn', 'Gagnp'),
('Mayur', 'Mayurp'),
('KumarSambhav', 'Kumarp'),
('RanjeetPatel', 'Ranjeetp'),
('SiddarthMish', 'Siddarthp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(32) NOT NULL,
  `User_spec` varchar(12) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `User_spec`, `username`, `password`) VALUES
('Ajay', 'F', 'ajayf', 'ajayf'),
('Jaswant', 'F', 'jaswantf', 'jaswantf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
