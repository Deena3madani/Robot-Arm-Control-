-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2021 at 11:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Arm_Control`
--

-- --------------------------------------------------------

--
-- Table structure for table `Arm_motor`
--

CREATE TABLE `Arm_motor` (
  `motor_NO` int(11) NOT NULL,
  `motor_degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Arm_motor`
--

INSERT INTO `Arm_motor` (`motor_NO`, `motor_degree`) VALUES
(1, 90),
(2, 90),
(3, 90),
(4, 90),
(5, 90),
(6, 90);

-- --------------------------------------------------------

--
-- Table structure for table `Arm_status`
--

CREATE TABLE `Arm_status` (
  `id` int(11) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Arm_status`
--

INSERT INTO `Arm_status` (`id`, `Status`) VALUES
(1, 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Arm_status`
--
ALTER TABLE `Arm_status`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
