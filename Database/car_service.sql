-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 10:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `mechanic_id` int(11) NOT NULL,
  `Time_from` time NOT NULL,
  `Time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `date`, `user_id`, `mechanic_id`, `Time_from`, `Time_to`) VALUES
(69, '2021-05-02', 9, 1, '00:00:00', '00:00:00'),
(70, '2021-05-02', 10, 3, '00:00:00', '00:00:00'),
(72, '2021-05-28', 10, 6, '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `mechanic_id` int(11) NOT NULL,
  `mechanic_name` varchar(255) NOT NULL,
  `mech_username` varchar(255) NOT NULL,
  `mech_password` varchar(255) NOT NULL,
  `mech_speacility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`mechanic_id`, `mechanic_name`, `mech_username`, `mech_password`, `mech_speacility`) VALUES
(1, 'Rafi', 'Rafi2', 'Rafi1', 'Tire Change Anod Oil change'),
(2, 'Nora\r\n', 'Nora1', 'Nora1', 'engine specialist'),
(3, 'Najmul', 'Najmu', 'Najmu', 'Full Service'),
(6, 'Kobir', 'Kobir', 'Kobir', 'AC Repair');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics_schedule`
--

CREATE TABLE `mechanics_schedule` (
  `schedule_ID` int(11) NOT NULL,
  `mechanic_id` int(30) NOT NULL,
  `day` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `Appoint_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(25) NOT NULL,
  `car_license_no` varchar(255) NOT NULL,
  `car_engine_no` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `address`, `phone_no`, `car_license_no`, `car_engine_no`, `user_type`) VALUES
(6, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', 999, '', '', 1),
(9, 'O', 'O@gmail.com', 'f186217753c37b9b9f958d906208506e', '4,N circuit house Road, Dhaka', 1903371766, ' 456', '123', 0),
(10, 'P', 'P@gmail.com', '44c29edb103a2872f519ad0c9a0fdaaa', '4,N circuit house Road, Dhaka', 1903371766, ' 456', '456', 0),
(12, 'Y', 'Y@gmail.com', '57cec4137b614c87cb4e24a3d003a3e0', '4,N circuit house Road, Dhaka', 1903371766, '11', '11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointments_ibfk_1` (`user_id`),
  ADD KEY `appointments_ibfk_2` (`mechanic_id`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`mechanic_id`);

--
-- Indexes for table `mechanics_schedule`
--
ALTER TABLE `mechanics_schedule`
  ADD PRIMARY KEY (`schedule_ID`),
  ADD KEY `mechanic_id` (`mechanic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `mechanic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mechanics_schedule`
--
ALTER TABLE `mechanics_schedule`
  MODIFY `schedule_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanics` (`mechanic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mechanics_schedule`
--
ALTER TABLE `mechanics_schedule`
  ADD CONSTRAINT `mechanics_schedule_ibfk_1` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanics` (`mechanic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
