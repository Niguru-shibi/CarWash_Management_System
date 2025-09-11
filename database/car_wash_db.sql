-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2025 at 07:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_wash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tb`
--

CREATE TABLE `about_tb` (
  `about_id` int(11) NOT NULL,
  `about_img` varchar(1000) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` varchar(255) NOT NULL,
  `about_info` varchar(200) NOT NULL,
  `about_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`admin_id`, `admin_username`, `admin_password`, `admin_date`) VALUES
(1, 'admin', 'admin', '2025-09-10 13:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `baranggay_tb`
--

CREATE TABLE `baranggay_tb` (
  `baranggay_id` int(11) NOT NULL,
  `munCity_id` int(11) NOT NULL,
  `baranggay_name` varchar(100) NOT NULL,
  `baranggay_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE `booking_tb` (
  `booking_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `booking_schedule` datetime NOT NULL,
  `booking_status` enum('Pending','Done') NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch_tb`
--

CREATE TABLE `branch_tb` (
  `branch_id` int(11) NOT NULL,
  `zoneStreet_id` int(11) NOT NULL,
  `branch_location` varchar(100) NOT NULL,
  `branch_contact` bigint(11) NOT NULL,
  `branch_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `client_id` int(11) NOT NULL,
  `zoneStreet_id` int(11) NOT NULL,
  `client_name` int(255) NOT NULL,
  `client_email` int(255) NOT NULL,
  `client_ph_no` bigint(11) NOT NULL,
  `client_date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `feedback_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `feedback_comment` varchar(500) NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_tb`
--

CREATE TABLE `footer_tb` (
  `footer_id` int(11) NOT NULL,
  `footer_cname` varchar(100) NOT NULL,
  `footer_logo` varchar(1000) NOT NULL,
  `footer_pages` varchar(100) NOT NULL,
  `footer_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_crsl_tb`
--

CREATE TABLE `home_crsl_tb` (
  `crsl_id` int(11) NOT NULL,
  `crsl_header` varchar(255) NOT NULL,
  `crsl_desc` varchar(500) NOT NULL,
  `crsl_date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `muncity_tb`
--

CREATE TABLE `muncity_tb` (
  `munCity_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `munCity_name` varchar(100) NOT NULL,
  `munCity_zipcode` int(4) NOT NULL,
  `munCity_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_tb`
--

CREATE TABLE `offer_tb` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `offer_price` int(5) NOT NULL,
  `offer_one` varchar(50) NOT NULL,
  `offer_two` varchar(50) NOT NULL,
  `offer_three` varchar(50) NOT NULL,
  `offer_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_method` varchar(500) NOT NULL,
  `payment_status` enum('Pending','Done') NOT NULL,
  `payment_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province_tb`
--

CREATE TABLE `province_tb` (
  `province_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL,
  `province_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region_tb`
--

CREATE TABLE `region_tb` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(100) NOT NULL,
  `region_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_tb`
--

CREATE TABLE `room_tb` (
  `room_id` int(11) NOT NULL,
  `room_assigned_at` varchar(50) NOT NULL,
  `room_status` enum('Occupied','Vacant') NOT NULL,
  `room_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_tb`
--

CREATE TABLE `service_tb` (
  `service_id` int(11) NOT NULL,
  `service_sticker` varchar(1000) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tb`
--

CREATE TABLE `vehicle_tb` (
  `vehicle_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `vehicle_type` int(11) NOT NULL,
  `vehicle_brand` int(11) NOT NULL,
  `vehicle_color` int(11) NOT NULL,
  `vehicle_model` int(11) NOT NULL,
  `vehicle_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `washplan_tb`
--

CREATE TABLE `washplan_tb` (
  `washplan_id` int(11) NOT NULL,
  `washplan_name` int(11) NOT NULL,
  `washplan_price` int(11) NOT NULL,
  `washplan_one` int(11) NOT NULL,
  `washplan_two` int(11) NOT NULL,
  `washplan_three` int(11) NOT NULL,
  `washplan_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `washpoint_tb`
--

CREATE TABLE `washpoint_tb` (
  `washpoint_id` int(11) NOT NULL,
  `washpoint_name` varchar(255) NOT NULL,
  `washpoint_location` varchar(255) NOT NULL,
  `washpoint_num` bigint(11) NOT NULL,
  `washpoint_date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zonestreet_tb`
--

CREATE TABLE `zonestreet_tb` (
  `zoneStreet_id` int(11) NOT NULL,
  `baranggay_id` int(11) NOT NULL,
  `zoneStreet_name` varchar(100) NOT NULL,
  `zoneStreet_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tb`
--
ALTER TABLE `about_tb`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `baranggay_tb`
--
ALTER TABLE `baranggay_tb`
  ADD PRIMARY KEY (`baranggay_id`),
  ADD KEY `munCity_id_fk` (`munCity_id`);

--
-- Indexes for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `client_id_fk` (`client_id`),
  ADD KEY `vehicle_id_fk` (`vehicle_id`),
  ADD KEY `branch_id_fk` (`branch_id`),
  ADD KEY `service_id_fk` (`offer_id`),
  ADD KEY `room_id_fk` (`room_id`);

--
-- Indexes for table `branch_tb`
--
ALTER TABLE `branch_tb`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `region_id_fk` (`zoneStreet_id`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `region_id_fk` (`zoneStreet_id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `booking_id_fk` (`booking_id`);

--
-- Indexes for table `footer_tb`
--
ALTER TABLE `footer_tb`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `home_crsl_tb`
--
ALTER TABLE `home_crsl_tb`
  ADD PRIMARY KEY (`crsl_id`);

--
-- Indexes for table `muncity_tb`
--
ALTER TABLE `muncity_tb`
  ADD PRIMARY KEY (`munCity_id`),
  ADD KEY `province_id_fk` (`province_id`);

--
-- Indexes for table `offer_tb`
--
ALTER TABLE `offer_tb`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id_fk` (`booking_id`);

--
-- Indexes for table `province_tb`
--
ALTER TABLE `province_tb`
  ADD PRIMARY KEY (`province_id`),
  ADD KEY `region_id_fk` (`region_id`);

--
-- Indexes for table `region_tb`
--
ALTER TABLE `region_tb`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `room_tb`
--
ALTER TABLE `room_tb`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `service_tb`
--
ALTER TABLE `service_tb`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `client_id_fk` (`client_id`);

--
-- Indexes for table `washpoint_tb`
--
ALTER TABLE `washpoint_tb`
  ADD PRIMARY KEY (`washpoint_id`);

--
-- Indexes for table `zonestreet_tb`
--
ALTER TABLE `zonestreet_tb`
  ADD PRIMARY KEY (`zoneStreet_id`),
  ADD KEY `baranggay_id_fk` (`baranggay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tb`
--
ALTER TABLE `about_tb`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baranggay_tb`
--
ALTER TABLE `baranggay_tb`
  MODIFY `baranggay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_tb`
--
ALTER TABLE `booking_tb`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_tb`
--
ALTER TABLE `branch_tb`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_tb`
--
ALTER TABLE `footer_tb`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_crsl_tb`
--
ALTER TABLE `home_crsl_tb`
  MODIFY `crsl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `muncity_tb`
--
ALTER TABLE `muncity_tb`
  MODIFY `munCity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_tb`
--
ALTER TABLE `offer_tb`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province_tb`
--
ALTER TABLE `province_tb`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region_tb`
--
ALTER TABLE `region_tb`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_tb`
--
ALTER TABLE `room_tb`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_tb`
--
ALTER TABLE `service_tb`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `washpoint_tb`
--
ALTER TABLE `washpoint_tb`
  MODIFY `washpoint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zonestreet_tb`
--
ALTER TABLE `zonestreet_tb`
  MODIFY `zoneStreet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baranggay_tb`
--
ALTER TABLE `baranggay_tb`
  ADD CONSTRAINT `baranggay_tb_ibfk_1` FOREIGN KEY (`munCity_id`) REFERENCES `muncity_tb` (`munCity_id`) ON UPDATE CASCADE;

--
-- Constraints for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD CONSTRAINT `booking_tb_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle_tb` (`vehicle_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_3` FOREIGN KEY (`branch_id`) REFERENCES `branch_tb` (`branch_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_4` FOREIGN KEY (`offer_id`) REFERENCES `offer_tb` (`offer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_5` FOREIGN KEY (`room_id`) REFERENCES `room_tb` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `branch_tb`
--
ALTER TABLE `branch_tb`
  ADD CONSTRAINT `branch_tb_ibfk_1` FOREIGN KEY (`zoneStreet_id`) REFERENCES `zonestreet_tb` (`zoneStreet_id`) ON UPDATE CASCADE;

--
-- Constraints for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD CONSTRAINT `client_tb_ibfk_1` FOREIGN KEY (`zoneStreet_id`) REFERENCES `zonestreet_tb` (`zoneStreet_id`) ON UPDATE CASCADE;

--
-- Constraints for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD CONSTRAINT `feedback_tb_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_tb` (`booking_id`) ON UPDATE CASCADE;

--
-- Constraints for table `muncity_tb`
--
ALTER TABLE `muncity_tb`
  ADD CONSTRAINT `muncity_tb_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `province_tb` (`province_id`) ON UPDATE CASCADE;

--
-- Constraints for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD CONSTRAINT `payment_tb_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_tb` (`booking_id`) ON UPDATE CASCADE;

--
-- Constraints for table `province_tb`
--
ALTER TABLE `province_tb`
  ADD CONSTRAINT `province_tb_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region_tb` (`region_id`) ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  ADD CONSTRAINT `vehicle_tb_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`client_id`) ON UPDATE CASCADE;

--
-- Constraints for table `zonestreet_tb`
--
ALTER TABLE `zonestreet_tb`
  ADD CONSTRAINT `zonestreet_tb_ibfk_1` FOREIGN KEY (`baranggay_id`) REFERENCES `baranggay_tb` (`baranggay_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
