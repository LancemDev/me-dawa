-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2023 at 04:55 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `me-dawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int NOT NULL,
  `companyName` varchar(100) DEFAULT NULL,
  `companyEmail` varchar(100) DEFAULT NULL,
  `companyPassword` varchar(100) DEFAULT NULL,
  `companyPhoneNumber` varchar(20) DEFAULT NULL,
  `companyAddress` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int NOT NULL,
  `doctorFirstName` varchar(50) DEFAULT NULL,
  `doctorSecondName` varchar(50) DEFAULT NULL,
  `doctorEmail` varchar(100) DEFAULT NULL,
  `doctorPassword` varchar(100) DEFAULT NULL,
  `doctorPhoneNumber` varchar(20) DEFAULT NULL,
  `doctorAddress` varchar(200) DEFAULT NULL,
  `doctorGender` varchar(10) DEFAULT NULL,
  `doctorDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `ID` int NOT NULL,
  `drugName` varchar(100) DEFAULT NULL,
  `drugDescription` varchar(200) DEFAULT NULL,
  `drugPrice` decimal(10,2) DEFAULT NULL,
  `drugQuantity` int DEFAULT NULL,
  `drugExpirationDate` date DEFAULT NULL,
  `drugManufacturingDate` date DEFAULT NULL,
  `drugCompany` varchar(100) DEFAULT NULL,
  `Approved` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int NOT NULL,
  `patientFirstName` varchar(50) DEFAULT NULL,
  `patientSecondName` varchar(50) DEFAULT NULL,
  `patientEmail` varchar(100) DEFAULT NULL,
  `patientPassword` varchar(100) DEFAULT NULL,
  `patientPhoneNumber` varchar(20) DEFAULT NULL,
  `patientAddress` varchar(200) DEFAULT NULL,
  `patientGender` varchar(10) DEFAULT NULL,
  `patientDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `ID` int NOT NULL,
  `pharmacyName` varchar(100) DEFAULT NULL,
  `pharmacyEmail` varchar(100) DEFAULT NULL,
  `pharmacyPassword` varchar(100) DEFAULT NULL,
  `pharmacyPhoneNumber` varchar(20) DEFAULT NULL,
  `pharmacyAddress` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `ID` int NOT NULL,
  `patientID` int DEFAULT NULL,
  `doctorID` int DEFAULT NULL,
  `prescriptionDate` date DEFAULT NULL,
  `prescriptionDuration` int DEFAULT NULL,
  `prescriptionNotes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `ID` int NOT NULL,
  `supervisorFirstName` varchar(50) DEFAULT NULL,
  `supervisorSecondName` varchar(50) DEFAULT NULL,
  `supervisorEmail` varchar(100) DEFAULT NULL,
  `supervisorPassword` varchar(100) DEFAULT NULL,
  `supervisorPhoneNumber` varchar(20) DEFAULT NULL,
  `supervisorAddress` varchar(200) DEFAULT NULL,
  `supervisorGender` varchar(10) DEFAULT NULL,
  `supervisorDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `patients` (`ID`),
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
