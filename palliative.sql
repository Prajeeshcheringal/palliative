-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2020 at 10:48 PM
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
  `note` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `pat_id`, `date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(16, 16, '2020-12-21', 'ok', 1, '2020-12-20 02:12:42', '2020-12-20 02:12:42'),
(17, 6, '2020-12-13', 'ghftg', 1, '2020-12-20 02:13:10', '2020-12-20 02:13:10'),
(18, 6, '2020-12-13', 'ghftg', 1, '2020-12-20 02:13:10', '2020-12-20 02:13:10'),
(19, 16, '2020-12-20', 'hhj', 1, '2020-12-20 02:56:54', '2020-12-20 02:56:54'),
(20, 16, '2020-12-23', NULL, 1, '2020-12-22 13:51:37', '2020-12-22 13:51:37');

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
(6, 'gsdgdsg', '2020-12-08', 'prajeesh p', 22, 9567303152, 'prajeesh p\r\ncheringal parambu', 'dsg', 'gs', 'gsd', 'gsd', 678572, 'prajeesh p', 'htyhtry', '2020-12-07 11:17:17', '2020-12-07 11:17:17', NULL),
(16, 'fdsfds', '2020-12-15', 'Adhithya', 32, 9567303152, 'prajeesh p\r\ncheringal parambu', 'Chandran', 'gs', 'gsd', 'gsd', 678572, 'prajeesh p', 'gsdgfdsggdsg', '2020-12-12 11:05:32', '2020-12-12 23:36:26', NULL);

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

--
-- Dumping data for table `patient_body_charts`
--

INSERT INTO `patient_body_charts` (`id`, `pat_id`, `body_part`, `side`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'leg', NULL, '10', '2020-12-06 13:09:40', '2020-12-06 13:09:40', NULL),
(2, 5, 'hand', NULL, '10', '2020-12-06 13:11:15', '2020-12-06 13:11:15', NULL),
(3, 5, 'ace', NULL, '10', '2020-12-06 13:11:15', '2020-12-06 13:11:15', NULL);

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

--
-- Dumping data for table `patient_difficulties`
--

INSERT INTO `patient_difficulties` (`id`, `pat_id`, `dificulty`, `created_at`, `updated_at`) VALUES
(1, 13, 'on', '2020-12-10 03:53:48', '2020-12-10 03:53:48'),
(2, 13, 'on', '2020-12-10 03:53:48', '2020-12-10 03:53:48'),
(3, 13, 'on', '2020-12-10 03:53:48', '2020-12-10 03:53:48'),
(4, 13, 'on', '2020-12-10 03:53:48', '2020-12-10 03:53:48'),
(5, 13, 'on', '2020-12-10 03:53:48', '2020-12-10 03:53:48');

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

--
-- Dumping data for table `patient_family_members`
--

INSERT INTO `patient_family_members` (`id`, `pat_id`, `name`, `relation`, `age`, `education`, `married`, `job`, `disease`, `remark`, `created_at`, `updated_at`) VALUES
(1, 7, 'werewr', 'rwerew', 1, '1', 'yes', 'hgfh', 'hfgh', 'hgfhghgh', '2020-12-07 11:18:06', '2020-12-07 11:18:06'),
(2, 7, 'fsdfdsf', 'fdsf', 12, '12', 'yes', 'yes', 'adasd', 'dasdsa', '2020-12-07 11:18:06', '2020-12-07 11:18:06');

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

--
-- Dumping data for table `patient_family_trees`
--

INSERT INTO `patient_family_trees` (`id`, `pat_id`, `name`, `relation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 'name', 'rel', '2020-12-07 11:36:59', '2020-12-07 11:36:59', NULL),
(2, 8, 'fsdf', 'fsdds', '2020-12-07 11:36:59', '2020-12-07 11:36:59', NULL),
(12, 16, 'prajeesh', 'devep', '2020-12-13 00:02:31', '2020-12-13 00:02:31', NULL);

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
(16, 16, 'dfgdfgfdgfd', 'hgfh  fdgfd gfdgfg', 'hgfhgf gfdgfdggfd fd gfdgfd', 'hgfh fdgdfg fgdfgf g', 'hgfhgfh  gdfgfd g', '2020-12-13 00:02:31', '2020-12-13 00:02:31'),
(19, 17, NULL, NULL, NULL, NULL, NULL, '2020-12-18 12:30:04', '2020-12-18 12:30:04'),
(20, 18, NULL, NULL, NULL, NULL, NULL, '2020-12-18 12:38:23', '2020-12-18 12:38:23'),
(21, 19, NULL, NULL, NULL, NULL, NULL, '2020-12-18 12:53:16', '2020-12-18 12:53:16'),
(22, 20, NULL, NULL, NULL, NULL, NULL, '2020-12-18 12:53:30', '2020-12-18 12:53:30'),
(23, 21, NULL, NULL, NULL, NULL, NULL, '2020-12-18 12:54:14', '2020-12-18 12:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient_body_charts`
--
ALTER TABLE `patient_body_charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient_difficulties`
--
ALTER TABLE `patient_difficulties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_family_members`
--
ALTER TABLE `patient_family_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_family_trees`
--
ALTER TABLE `patient_family_trees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patient_other_details`
--
ALTER TABLE `patient_other_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
