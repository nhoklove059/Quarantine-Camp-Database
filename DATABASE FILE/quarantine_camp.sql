-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 09, 2023 at 05:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quarantine_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `patient_id` int(11) DEFAULT NULL,
  `room` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `effect` text DEFAULT NULL,
  `expiration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `lname`, `fname`, `gender`, `phone`, `address`) VALUES
(1, 'huy', 'nguyen', 'M', '0349023213', '16 duong 31'),
(2, 'thuuy', 'nguyen', 'F', '41242141', '16 duong 312'),
(3, 'tran', 'huynh', 'F', '4124214124', '525 b1'),
(4, 'hoang', 'huy', 'M', '12345', 'Qzzxx');

-- --------------------------------------------------------

--
-- Table structure for table `patient_comorbidity`
--

CREATE TABLE `patient_comorbidity` (
  `patient_id` int(11) NOT NULL,
  `comorbidity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_comorbidity`
--

INSERT INTO `patient_comorbidity` (`patient_id`, `comorbidity`) VALUES
(1, 'Mental health conditionst'),
(2, 'Older Age'),
(3, 'Diabetes and obesity'),
(4, 'die');

-- --------------------------------------------------------

--
-- Table structure for table `patient_symptom`
--

CREATE TABLE `patient_symptom` (
  `patient_id` int(11) DEFAULT NULL,
  `symptom` varchar(255) DEFAULT NULL,
  `date_symptom` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_symptom`
--

INSERT INTO `patient_symptom` (`patient_id`, `symptom`, `date_symptom`) VALUES
(0, 'Cough', '2023-11-08'),
(0, 'Cough', '2023-11-08'),
(0, 'Fatigue', '2023-11-08'),
(1, 'Fatigue', '2023-11-08'),
(2, 'Cough', '2023-11-08'),
(3, 'Shortness of breath or difficulty breathing', '2023-11-08'),
(4, 'die', '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `people_in_camp`
--

CREATE TABLE `people_in_camp` (
  `people_in_camp_id` int(11) NOT NULL,
  `people_in_camp_fname` varchar(255) NOT NULL,
  `people_in_camp_lname` varchar(255) NOT NULL,
  `people_in_camp_job_type` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people_in_camp`
--

INSERT INTO `people_in_camp` (`people_in_camp_id`, `people_in_camp_fname`, `people_in_camp_lname`, `people_in_camp_job_type`, `password`) VALUES
(1, 'HUY', 'NGUYỄN', 'Manager', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date_prescription` date DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room` int(11) NOT NULL,
  `limited_capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `date_test` date DEFAULT NULL,
  `pcr` varchar(255) DEFAULT NULL,
  `quick_test` varchar(255) DEFAULT NULL,
  `spo2` int(11) DEFAULT NULL,
  `respiratory_rate` int(11) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_covid`
--

CREATE TABLE `test_covid` (
  `test_id` int(11) NOT NULL,
  `quick_test` varchar(255) DEFAULT NULL,
  `pcr` varchar(255) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `respiratory_rate` int(11) DEFAULT NULL,
  `spo2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_comorbidity`
--
ALTER TABLE `patient_comorbidity`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_symptom`
--
ALTER TABLE `patient_symptom`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `people_in_camp`
--
ALTER TABLE `people_in_camp`
  ADD PRIMARY KEY (`people_in_camp_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `test_covid`
--
ALTER TABLE `test_covid`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people_in_camp`
--
ALTER TABLE `people_in_camp`
  MODIFY `people_in_camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `people_in_camp` (`people_in_camp_id`),
  ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `people_in_camp` (`people_in_camp_id`),
  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `test_covid`
--
ALTER TABLE `test_covid`
  ADD CONSTRAINT `test_covid_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
