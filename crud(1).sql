-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 10:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_assistant`
--

CREATE TABLE `add_assistant` (
  `id` int(11) NOT NULL,
  `assistant_name` varchar(255) NOT NULL,
  `assign_chamber` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `assigned_password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `upload_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_assistant`
--

INSERT INTO `add_assistant` (`id`, `assistant_name`, `assign_chamber`, `mobile`, `assigned_password`, `address`, `upload_id`) VALUES
(1, 'Mohammad Imran', 'Ruposhi', '01850536735', 'imran20', 'Ramu', ''),
(2, 'Kamal Uddin', 'Ruposhi Medical Hall', '01850536799', 'kamal', 'Chakmarkul', 'IMG_20180809_142051.jpg'),
(4, 'absar', '', '01850536736', 'absar', 'Chakmarkul', 'IMG_20180809_142036.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_chamber`
--

CREATE TABLE `add_chamber` (
  `id` int(11) NOT NULL,
  `chamber_title` varchar(255) NOT NULL,
  `chamber_address` varchar(255) NOT NULL,
  `assistant` varchar(255) NOT NULL,
  `fees` double NOT NULL,
  `approx_time_patient` varchar(50) NOT NULL,
  `patient_per_day_limit` int(11) NOT NULL,
  `visit_days` varchar(50) NOT NULL,
  `visit_time_from` varchar(50) NOT NULL,
  `visit_time_to` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_chamber`
--

INSERT INTO `add_chamber` (`id`, `chamber_title`, `chamber_address`, `assistant`, `fees`, `approx_time_patient`, `patient_per_day_limit`, `visit_days`, `visit_time_from`, `visit_time_to`) VALUES
(3, 'Desh Medico', 'cox', '', 500, '30min', 50, 'sat', '5pm', '10pm'),
(4, 'Hossain MEDICO', 'RAMU', '', 600, '30min', 50, 'sun', '6pm', '11pm'),
(7, 'imran', 'Banglabazar', '', 500, '30 min', 50, 'Array', '20:54', '08:54'),
(8, 'localoy', 'Chakaria', '', 500, '30 min', 50, 'Array', '11:05', '16:05'),
(13, 'tarek', 'cpoox', '', 200, '30 min', 35, 'Array', '01:49', '12:49');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_first_name` varchar(45) DEFAULT NULL,
  `doctor_last_name` varchar(45) DEFAULT NULL,
  `doctor_password` varchar(45) DEFAULT NULL,
  `doctor_mobile` varchar(14) DEFAULT NULL,
  `doctor_base_address_id` int(11) DEFAULT NULL,
  `doctor_email` varchar(45) DEFAULT NULL,
  `doctor_education_id` varchar(45) DEFAULT NULL,
  `doctor_category` int(11) DEFAULT NULL,
  `doctor_profile_picture` text,
  `doctor_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `doctor_updated_st` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `mobile`, `password`) VALUES
(1, '01850536735', 'imran35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_assistant`
--
ALTER TABLE `add_assistant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_chamber`
--
ALTER TABLE `add_chamber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_assistant`
--
ALTER TABLE `add_assistant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `add_chamber`
--
ALTER TABLE `add_chamber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
