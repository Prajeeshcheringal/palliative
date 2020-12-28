-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2020 at 11:59 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-29+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palliative`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bok_note` text,
  `disease_details` text,
  `doctors_note` text,
  `mental_note` text,
  `bp` varchar(50) DEFAULT NULL,
  `pulse` varchar(20) DEFAULT NULL,
  `tempreture` varchar(20) DEFAULT NULL,
  `general_state` text,
  `mouth` text,
  `skin` text,
  `head` text,
  `hidden_area` text,
  `other_treatment` text,
  `surroundings` text,
  `food` varchar(10) DEFAULT NULL,
  `water` varchar(10) DEFAULT NULL,
  `urine` varchar(10) DEFAULT NULL,
  `exercise` varchar(10) DEFAULT NULL,
  `body_cleaning` varchar(10) DEFAULT NULL,
  `sleep` varchar(10) DEFAULT NULL,
  `constipation` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `pat_id`, `date`, `bok_note`, `disease_details`, `doctors_note`, `mental_note`, `bp`, `pulse`, `tempreture`, `general_state`, `mouth`, `skin`, `head`, `hidden_area`, `other_treatment`, `surroundings`, `food`, `water`, `urine`, `exercise`, `body_cleaning`, `sleep`, `constipation`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-14', 'hhhhhhhhhhhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-12-27 01:44:55', '2020-12-27 01:44:55'),
(2, 1, '2020-12-14', 'hhhhhhhhhhhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-12-27 01:44:55', '2020-12-27 01:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` text,
  `care_of` varchar(50) DEFAULT NULL,
  `panchayath` varchar(50) DEFAULT NULL,
  `ref_no` varchar(50) DEFAULT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `volunteer` varchar(50) DEFAULT NULL,
  `location` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `reg_no`, `date`, `name`, `age`, `phone`, `address`, `care_of`, `panchayath`, `ref_no`, `organization`, `pincode`, `volunteer`, `location`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'gsdgdsg', '2020-12-01', 'prajeesh p', 22, 9567303152, 'prajeesh p\r\ncheringal parambu', 'Chandran', 'gs', 'gsd', 'gsd', 678572, 'prajeesh p', 'l', '2020-12-27 01:44:26', '2020-12-27 01:44:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_body_charts`
--

CREATE TABLE `patient_body_charts` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `body_part` varchar(50) DEFAULT NULL,
  `side` varchar(50) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_difficulties`
--

CREATE TABLE `patient_difficulties` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `dificulty` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_family_members`
--

CREATE TABLE `patient_family_members` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `married` varchar(50) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `disease` text,
  `remark` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_family_trees`
--

CREATE TABLE `patient_family_trees` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_other_details`
--

CREATE TABLE `patient_other_details` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) DEFAULT NULL,
  `need_food` text,
  `report_of_person` text,
  `patient_assumptiom` text,
  `relative_assumption` text,
  `patient_social` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_other_details`
--

INSERT INTO `patient_other_details` (`id`, `pat_id`, `need_food`, `report_of_person`, `patient_assumptiom`, `relative_assumption`, `patient_social`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL, NULL, NULL, NULL, '2020-12-27 01:44:26', '2020-12-27 01:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_relation` (`pat_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_body_charts`
--
ALTER TABLE `patient_body_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_difficulties`
--
ALTER TABLE `patient_difficulties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_family_members`
--
ALTER TABLE `patient_family_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_family_trees`
--
ALTER TABLE `patient_family_trees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_other_details`
--
ALTER TABLE `patient_other_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient_body_charts`
--
ALTER TABLE `patient_body_charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_difficulties`
--
ALTER TABLE `patient_difficulties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_family_members`
--
ALTER TABLE `patient_family_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_family_trees`
--
ALTER TABLE `patient_family_trees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_other_details`
--
ALTER TABLE `patient_other_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `patient_relation` FOREIGN KEY (`pat_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
