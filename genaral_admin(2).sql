-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genaral_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `division` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `division`, `password`, `role`) VALUES
(1, 'admin1', 'a@gmail.com', 'admin', '1234', 'admin'),
(2, 'user1', 'user@gmail.com', 'Information Technology', '1234', 'user'),
(3, 'Jawidh', 'jawidh@gmail.com', 'Marine', '1234', 'user'),
(4, 'Ishan', 'i@gmail.com', 'Polymer', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_booking`
--

CREATE TABLE `vehicle_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `vehicleType` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `dateRequirement` varchar(20) NOT NULL,
  `dateReturn` varchar(20) NOT NULL,
  `destination` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_booking`
--

INSERT INTO `vehicle_booking` (`id`, `user_id`, `name`, `vehicleType`, `division`, `dateRequirement`, `dateReturn`, `destination`, `reason`, `email`, `mobile`, `status`) VALUES
(14, 4, 'ishan', 'Bus', 'Information Technology', '2023-07-03T05:05', '2023-07-05T03:03', 'fgtr', 'rtdgtr', 'i@gmail.com', 711191199, 'approved'),
(15, 4, 'Ishan', 'Van', 'Information Technology', '2023-07-04T05:05', '2023-07-05T06:03', 'njh', 'gyh', 'i@gmail.com', 56895624, 'approved'),
(16, 4, 'Ishan', 'Van', 'Textile', '2023-07-06T05:05', '2023-07-15T06:06', 'erfters', 'drtgr', 'i@gmail.com', 1235555, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
