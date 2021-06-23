-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 06:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotarmtask1`
--

-- --------------------------------------------------------

--
-- Table structure for table `enginestable`
--

CREATE TABLE `enginestable` (
  `EngineNum` int(11) NOT NULL,
  `State` int(11) NOT NULL,
  `Degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enginestable`
--

INSERT INTO `enginestable` (`EngineNum`, `State`, `Degree`) VALUES
(1, 0, 90),
(2, 0, 90),
(3, 0, 90),
(4, 0, 90),
(5, 0, 90),
(6, 0, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enginestable`
--
ALTER TABLE `enginestable`
  ADD PRIMARY KEY (`EngineNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
