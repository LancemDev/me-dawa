-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 02:59 PM
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
-- Database: `me-dawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `adminFirstName` varchar(255) DEFAULT NULL,
  `adminLastName` varchar(255) DEFAULT NULL,
  `adminEmail` varchar(255) DEFAULT NULL,
  `adminPassword` varchar(255) DEFAULT NULL,
  `adminDOB` date DEFAULT NULL,
  `adminPhoneNumber` varchar(255) DEFAULT NULL,
  `adminAddress` varchar(255) DEFAULT NULL,
  `adminGender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `adminFirstName`, `adminLastName`, `adminEmail`, `adminPassword`, `adminDOB`, `adminPhoneNumber`, `adminAddress`, `adminGender`) VALUES
(1, 'Emily', 'Wilson', 'emilywilson@example.com', 'password456', '1992-08-30', '4445556666', '456 Pine St', 'Female'),
(2, 'Daniel', 'Brown', 'danielbrown@example.com', 'brownpass', '1988-03-05', '7778889999', '789 Oak Ave', 'Male'),
(3, 'Sophia', 'Johnson', 'sophiajohnson@example.com', 'password789', '1995-11-18', '1112223333', '321 Maple Dr', 'Female'),
(4, 'James', 'Anderson', 'jamesanderson@example.com', 'anderson123', '1979-06-25', '4444444444', '654 Elm St', 'Male'),
(5, 'Olivia', 'Taylor', 'oliviataylor@example.com', 'taylorpass', '1986-12-10', '7777777777', '987 Oak Ave', 'Female'),
(6, 'Benjamin', 'Davis', 'benjamindavis@example.com', 'password123', '1991-03-15', '2223334444', '123 Main Dr', 'Male'),
(7, 'Mia', 'Smith', 'miasmith@example.com', 'smithpass', '1993-07-22', '5556667777', '456 Elm Ave', 'Female'),
(8, 'Alexander', 'Wilson', 'alexanderwilson@example.com', 'password456', '1987-09-28', '8889990000', '789 Oak Dr', 'Male'),
(9, 'Ava', 'Thomas', 'avathomas@example.com', 'thomaspass', '1994-02-14', '1111111111', '321 Pine St', 'Female'),
(10, 'Ethan', 'Johnson', 'ethanjohnson@example.com', 'password789', '1999-05-07', '4445556666', '654 Elm Ave', 'Male'),
(11, 'Charlotte', 'Brown', 'charlottebrown@example.com', 'brown123', '1997-10-01', '7778889999', '987 Oak Dr', 'Female'),
(12, 'Liam', 'Jones', 'liamjones@example.com', 'jonespass', '1984-04-05', '2223334444', '123 Main Ave', 'Male'),
(13, 'Amelia', 'Davis', 'ameliadavis@example.com', 'password123', '1996-08-12', '5556667777', '456 Elm Dr', 'Female'),
(14, 'William', 'Wilson', 'williamwilson@example.com', 'wilsonpass', '1989-11-25', '8889990000', '789 Oak Ave', 'Male'),
(15, 'Sophia', 'Anderson', 'sophiaanderson@example.com', 'password456', '1992-02-17', '1111111111', '321 Pine Dr', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `companyEmail` varchar(255) DEFAULT NULL,
  `companyPassword` varchar(255) DEFAULT NULL,
  `companyPhoneNumber` varchar(255) DEFAULT NULL,
  `companyAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`ID`, `companyName`, `companyEmail`, `companyPassword`, `companyPhoneNumber`, `companyAddress`) VALUES
(1, 'Globex Industries', 'globex@example.com', 'globexpass', '4444444444', '567 Innovation Rd'),
(2, 'Sunrise Solutions', 'sunrise@example.com', 'sunrisepwd', '5555555555', '789 Technology Ave'),
(3, 'Elite Services', 'elite@example.com', 'elitepass', '6666666666', '123 Main St'),
(4, 'Pioneer Manufacturing', 'pioneer@example.com', 'pioneerpwd', '7777777777', '456 Elm St'),
(5, 'Innovative Ventures', 'innovative@example.com', 'innovativepass', '8888888888', '789 Oak Ave'),
(6, 'Prime Industries', 'prime@example.com', 'primepass', '9999999999', '321 Pine St'),
(7, 'Apex Solutions', 'apex@example.com', 'apexpass', '1111111111', '654 Elm Ave'),
(8, 'Swift Enterprises', 'swift@example.com', 'swiftpwd', '2222222222', '987 Oak Dr'),
(9, 'Visionary Corporation', 'visionary@example.com', 'visionarypass', '3333333333', '123 Main Ave'),
(10, 'Dynamic Technologies', 'dynamic@example.com', 'dynamicpwd', '4444444444', '456 Elm Dr'),
(11, 'Spectrum Services', 'spectrum@example.com', 'spectrumpass', '5555555555', '789 Oak Ave'),
(12, 'Adept Solutions', 'adept@example.com', 'adeptpass', '6666666666', '321 Pine Dr'),
(13, 'Vanguard Industries', 'vanguard@example.com', 'vanguardpwd', '7777777777', '654 Elm Ave'),
(14, 'Zenith Corporation', 'zenith@example.com', 'zenithpass', '8888888888', '987 Oak Dr'),
(15, 'Dynamic Ventures', 'dynamicventures@example.com', 'dynamicpass', '9999999999', '123 Main St');

-- --------------------------------------------------------

--
-- Table structure for table `dispensed`
--

CREATE TABLE `dispensed` (
  `ID` int(11) NOT NULL,
  `patientID` int(11) DEFAULT NULL,
  `doctorID` int(11) DEFAULT NULL,
  `drugID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispensed`
--

INSERT INTO `dispensed` (`ID`, `patientID`, `doctorID`, `drugID`) VALUES
(1, 4, 4, 1),
(2, 5, 5, 1),
(3, 6, 6, 2),
(4, 7, 7, 3),
(5, 8, 8, 4),
(6, 9, 9, 5),
(7, 10, 10, 5),
(8, 11, 11, 5),
(9, 3, 3, 5),
(10, 1, 6, 6),
(11, 10, 8, 7),
(12, 2, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(11) NOT NULL,
  `doctorFirstName` varchar(255) DEFAULT NULL,
  `doctorLastName` varchar(255) DEFAULT NULL,
  `doctorEmail` varchar(255) DEFAULT NULL,
  `doctorPassword` varchar(255) DEFAULT NULL,
  `doctorPhoneNumber` varchar(255) DEFAULT NULL,
  `doctorAddress` varchar(255) DEFAULT NULL,
  `doctorGender` varchar(255) DEFAULT NULL,
  `doctorDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `doctorFirstName`, `doctorLastName`, `doctorEmail`, `doctorPassword`, `doctorPhoneNumber`, `doctorAddress`, `doctorGender`, `doctorDOB`) VALUES
(1, 'Oliver', 'Johnson', 'oliverjohnson@example.com', 'doctorpass123', '1112223333', '321 Elm St', 'Male', '1975-09-15'),
(2, 'Ava', 'Garcia', 'avagarcia@example.com', 'avapass', '4445556666', '654 Pine Ave', 'Female', '1982-03-28'),
(3, 'Liam', 'Martinez', 'liammartinez@example.com', 'liampwd', '7778889999', '987 Oak Dr', 'Male', '1979-11-10'),
(4, 'Sophia', 'Taylor', 'sophiataylor@example.com', 'sophiapass', '1111111111', '123 Pine St', 'Female', '1981-07-25'),
(5, 'Jackson', 'Anderson', 'jacksonanderson@example.com', 'jackson123', '4445556666', '456 Maple Ave', 'Male', '1976-12-08'),
(6, 'Olivia', 'Thomas', 'oliviathomas@example.com', 'oliviapwd', '7778889999', '789 Oak Dr', 'Female', '1984-05-23'),
(7, 'Aiden', 'Harris', 'aidenharris@example.com', 'aidenpass', '1112223333', '321 Elm St', 'Male', '1987-01-16'),
(8, 'Isabella', 'Hall', 'isabellahall@example.com', 'isabellapass', '4445556666', '654 Pine Ave', 'Female', '1990-08-04'),
(9, 'Lucas', 'Clark', 'lucasclark@example.com', 'lucaspwd', '7778889999', '987 Oak Dr', 'Male', '1977-04-12'),
(10, 'Mia', 'Young', 'miayoung@example.com', 'miapass', '1111111111', '123 Pine St', 'Female', '1979-10-27'),
(11, 'Oliver', 'Lopez', 'oliverlopez@example.com', 'oliver123', '4445556666', '456 Maple Ave', 'Male', '1982-03-18'),
(12, 'Sophia', 'Scott', 'sophiascott@example.com', 'sophiapass', '7778889999', '789 Oak Dr', 'Female', '1975-09-30'),
(13, 'Ethan', 'Green', 'ethangreen@example.com', 'ethanpwd', '1112223333', '321 Elm St', 'Male', '1988-12-03'),
(14, 'Charlotte', 'Adams', 'charlotteadams@example.com', 'charlottepass', '4445556666', '654 Pine Ave', 'Female', '1981-05-19'),
(15, 'Noah', 'King', 'noahking@example.com', 'noahpwd', '7778889999', '987 Oak Dr', 'Male', '1976-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `ID` int(11) NOT NULL,
  `drugName` varchar(255) DEFAULT NULL,
  `drugDescription` varchar(255) DEFAULT NULL,
  `drugPrice` decimal(10,2) DEFAULT NULL,
  `drugQuantity` int(11) DEFAULT NULL,
  `drugExpirationDate` date DEFAULT NULL,
  `drugManufacturingDate` date DEFAULT NULL,
  `drugCompany` int(11) DEFAULT NULL,
  `Approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`ID`, `drugName`, `drugDescription`, `drugPrice`, `drugQuantity`, `drugExpirationDate`, `drugManufacturingDate`, `drugCompany`, `Approved`) VALUES
(1, 'Ibuprofen', 'Nonsteroidal anti-inflammatory drug', 9.99, 120, '2024-09-30', '2022-05-18', 4, 1),
(2, 'Omeprazole', 'Proton pump inhibitor', 12.99, 90, '2023-08-31', '2022-12-10', 5, 1),
(3, 'Simvastatin', 'Cholesterol-lowering medication', 7.99, 80, '2023-07-31', '2022-09-05', 6, 1),
(4, 'Metformin', 'Diabetes medication', 6.49, 100, '2024-06-30', '2022-04-02', 7, 1),
(5, 'Ciprofloxacin', 'Antibiotic', 14.99, 60, '2023-05-31', '2022-08-15', 8, 1),
(6, 'Atorvastatin', 'Cholesterol-lowering medication', 8.99, 70, '2023-04-30', '2022-10-20', 9, 1),
(7, 'Aspirin', 'Pain reliever', 5.99, 150, '2024-03-31', '2022-03-15', 10, 1),
(8, 'Metoprolol', 'Beta blocker', 7.49, 110, '2023-02-28', '2022-07-05', 11, 1),
(9, 'Cetirizine', 'Antihistamine', 6.99, 130, '2023-01-31', '2022-09-12', 12, 1),
(10, 'Prednisone', 'Corticosteroid', 9.49, 100, '2024-12-31', '2022-02-10', 13, 1),
(11, 'Sertraline', 'Antidepressant', 11.49, 90, '2023-11-30', '2022-06-25', 14, 1),
(12, 'Gabapentin', 'Anticonvulsant', 8.99, 80, '2023-10-31', '2022-08-08', 15, 1),
(13, 'Paracetamol', 'Good stuff', 12.22, 12, '2021-03-04', '2022-12-04', 0, NULL),
(14, 'Paracetamol', 'Good stuff', 12.22, 12, '2021-03-04', '2022-12-04', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(11) NOT NULL,
  `patientFirstName` varchar(255) DEFAULT NULL,
  `patientLastName` varchar(255) DEFAULT NULL,
  `patientEmail` varchar(255) DEFAULT NULL,
  `patientPassword` varchar(255) DEFAULT NULL,
  `patientPhoneNumber` varchar(255) DEFAULT NULL,
  `patientAddress` varchar(255) DEFAULT NULL,
  `patientGender` varchar(255) DEFAULT NULL,
  `patientDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `patientFirstName`, `patientLastName`, `patientEmail`, `patientPassword`, `patientPhoneNumber`, `patientAddress`, `patientGender`, `patientDOB`) VALUES
(1, 'Oliver', 'Johnson', 'oliverjohnson@example.com', 'patientpass123', '1112223333', '321 Elm St', 'Male', '1991-06-15'),
(2, 'Ava', 'Garcia', 'avagarcia@example.com', 'avapass', '4445556666', '654 Pine Ave', 'Female', '1994-02-28'),
(3, 'Liam', 'Martinez', 'liammartinez@example.com', 'liampwd', '7778889999', '987 Oak Dr', 'Male', '1996-11-10'),
(4, 'Sophia', 'Taylor', 'sophiataylor@example.com', 'sophiapass', '1111111111', '123 Pine St', 'Female', '1993-07-25'),
(5, 'Jackson', 'Anderson', 'jacksonanderson@example.com', 'jackson123', '4445556666', '456 Maple Ave', 'Male', '1988-12-08'),
(6, 'Olivia', 'Thomas', 'oliviathomas@example.com', 'oliviapwd', '7778889999', '789 Oak Dr', 'Female', '1990-05-23'),
(7, 'Aiden', 'Harris', 'aidenharris@example.com', 'aidenpass', '1112223333', '321 Elm St', 'Male', '1997-01-16'),
(8, 'Isabella', 'Hall', 'isabellahall@example.com', 'isabellapass', '4445556666', '654 Pine Ave', 'Female', '1999-08-04'),
(9, 'Lucas', 'Clark', 'lucasclark@example.com', 'lucaspwd', '7778889999', '987 Oak Dr', 'Male', '1992-04-12'),
(10, 'Mia', 'Young', 'miayoung@example.com', 'miapass', '1111111111', '123 Pine St', 'Female', '1994-10-27'),
(11, 'Oliver', 'Lopez', 'oliverlopez@example.com', 'oliver123', '4445556666', '456 Maple Ave', 'Male', '1996-03-18'),
(12, 'Sophia', 'Scott', 'sophiascott@example.com', 'sophiapass', '7778889999', '789 Oak Dr', 'Female', '1989-09-30'),
(13, 'Ethan', 'Green', 'ethangreen@example.com', 'ethanpwd', '1112223333', '321 Elm St', 'Male', '1991-12-03'),
(14, 'Charlotte', 'Adams', 'charlotteadams@example.com', 'charlottepass', '4445556666', '654 Pine Ave', 'Female', '1993-05-19'),
(15, 'Noah', 'King', 'noahking@example.com', 'noahpwd', '7778889999', '987 Oak Dr', 'Male', '1995-02-21'),
(16, 'Oliver', 'Johnson', 'oliverjohnson@example.com', 'patientpass123', '1112223333', '321 Elm St', 'Male', '1991-06-15'),
(17, 'Ava', 'Garcia', 'avagarcia@example.com', 'avapass', '4445556666', '654 Pine Ave', 'Female', '1994-02-28'),
(18, 'Liam', 'Martinez', 'liammartinez@example.com', 'liampwd', '7778889999', '987 Oak Dr', 'Male', '1996-11-10'),
(19, 'Sophia', 'Taylor', 'sophiataylor@example.com', 'sophiapass', '1111111111', '123 Pine St', 'Female', '1993-07-25'),
(20, 'Jackson', 'Anderson', 'jacksonanderson@example.com', 'jackson123', '4445556666', '456 Maple Ave', 'Male', '1988-12-08'),
(21, 'Olivia', 'Thomas', 'oliviathomas@example.com', 'oliviapwd', '7778889999', '789 Oak Dr', 'Female', '1990-05-23'),
(22, 'Aiden', 'Harris', 'aidenharris@example.com', 'aidenpass', '1112223333', '321 Elm St', 'Male', '1997-01-16'),
(23, 'Isabella', 'Hall', 'isabellahall@example.com', 'isabellapass', '4445556666', '654 Pine Ave', 'Female', '1999-08-04'),
(24, 'Lucas', 'Clark', 'lucasclark@example.com', 'lucaspwd', '7778889999', '987 Oak Dr', 'Male', '1992-04-12'),
(25, 'Mia', 'Young', 'miayoung@example.com', 'miapass', '1111111111', '123 Pine St', 'Female', '1994-10-27'),
(26, 'Oliver', 'Lopez', 'oliverlopez@example.com', 'oliver123', '4445556666', '456 Maple Ave', 'Male', '1996-03-18'),
(27, 'Sophia', 'Scott', 'sophiascott@example.com', 'sophiapass', '7778889999', '789 Oak Dr', 'Female', '1989-09-30'),
(28, 'Ethan', 'Green', 'ethangreen@example.com', 'ethanpwd', '1112223333', '321 Elm St', 'Male', '1991-12-03'),
(29, 'Charlotte', 'Adams', 'charlotteadams@example.com', 'charlottepass', '4445556666', '654 Pine Ave', 'Female', '1993-05-19'),
(30, 'Noah', 'King', 'noahking@example.com', 'noahpwd', '7778889999', '987 Oak Dr', 'Male', '1995-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `ID` int(11) NOT NULL,
  `pharmacyName` varchar(255) DEFAULT NULL,
  `pharmacyEmail` varchar(255) DEFAULT NULL,
  `pharmacyPassword` varchar(255) DEFAULT NULL,
  `pharmacyPhoneNumber` varchar(255) DEFAULT NULL,
  `pharmacyAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`ID`, `pharmacyName`, `pharmacyEmail`, `pharmacyPassword`, `pharmacyPhoneNumber`, `pharmacyAddress`) VALUES
(1, 'HealthCare Pharmacy', 'healthcarepharmacy@example.com', 'healthcarepass', '4444444444', '567 Pine Ave'),
(2, 'Express Rx', 'expressrx@example.com', 'expresspass', '5555555555', '789 Maple St'),
(3, 'PharmaPlus', 'pharmaplus@example.com', 'pharmapluspass', '6666666666', '901 Elm Dr'),
(4, 'Wellness Pharmacy', 'wellnesspharmacy@example.com', 'wellnesspass', '7777777777', '123 Oak St'),
(5, 'Sunset Drugs', 'sunsetdrugs@example.com', 'sunsetpass', '8888888888', '456 Pine Ave'),
(6, 'MediLife', 'medilife@example.com', 'medilifepass', '9999999999', '789 Maple Dr'),
(7, 'Care Pharmacy', 'carepharmacy@example.com', 'carepass', '1111111111', '321 Elm St'),
(8, 'Quick Meds', 'quickmeds@example.com', 'quickpass', '2222222222', '654 Oak St'),
(9, 'Safeway Pharmacy', 'safewaypharmacy@example.com', 'safewaypass', '3333333333', '987 Pine Ave'),
(10, 'Prime Care Pharmacy', 'primecarepharmacy@example.com', 'primecarepass', '4444444444', '321 Maple St'),
(11, 'Healthy Living', 'healthyliving@example.com', 'healthypass', '5555555555', '654 Elm Dr'),
(12, 'Family Pharmacy', 'familypharmacy@example.com', 'familypass', '6666666666', '987 Oak St');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `ID` int(11) NOT NULL,
  `patientID` int(11) DEFAULT NULL,
  `doctorID` int(11) DEFAULT NULL,
  `prescriptionDate` date DEFAULT NULL,
  `prescriptionDuration` int(11) DEFAULT NULL,
  `prescriptionNotes` varchar(255) DEFAULT NULL,
  `drugID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`ID`, `patientID`, `doctorID`, `prescriptionDate`, `prescriptionDuration`, `prescriptionNotes`, `drugID`) VALUES
(37, 4, 5, '2023-04-20', 30, 'Take one tablet daily', 1),
(38, 5, 6, '2023-05-25', 14, 'Apply to affected area', 2),
(39, 6, 7, '2023-06-30', 7, 'Take with meals', 2),
(40, 7, 8, '2023-07-10', 30, 'Take two tablets daily', 3),
(41, 8, 9, '2023-08-15', 14, 'Apply a thin layer', 4),
(42, 9, 10, '2023-09-20', 7, 'Take on an empty stomach', 4),
(43, 10, 11, '2023-10-25', 30, 'Take with plenty of water', 5),
(44, 11, 12, '2023-11-30', 14, 'Apply three times daily', 6),
(45, 12, 13, '2023-12-10', 7, 'Take after meals', 7),
(46, 13, 14, '2024-01-15', 30, 'Take as directed', 7),
(47, 14, 15, '2024-02-20', 14, 'Apply to clean, dry skin', 9),
(48, 15, 1, '2024-03-25', 7, 'Take with or without food', 10),
(49, 2, 2, '2023-07-18', 2022, 'Blah Blah Blah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `ID` int(11) NOT NULL,
  `supervisorFirstName` varchar(255) DEFAULT NULL,
  `supervisorLastName` varchar(255) DEFAULT NULL,
  `supervisorEmail` varchar(255) DEFAULT NULL,
  `supervisorPassword` varchar(255) DEFAULT NULL,
  `supervisorPhoneNumber` varchar(255) DEFAULT NULL,
  `supervisorAddress` varchar(255) DEFAULT NULL,
  `supervisorGender` varchar(255) DEFAULT NULL,
  `supervisorDOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`ID`, `supervisorFirstName`, `supervisorLastName`, `supervisorEmail`, `supervisorPassword`, `supervisorPhoneNumber`, `supervisorAddress`, `supervisorGender`, `supervisorDOB`) VALUES
(1, 'Emily', 'Wilson', 'emilywilson@example.com', 'supervisorpass123', '1112223333', '321 Elm St', 'Female', '1980-09-15'),
(2, 'Daniel', 'Smith', 'danielsmith@example.com', 'danielpwd', '4445556666', '654 Pine Ave', 'Male', '1978-03-28'),
(3, 'Sophia', 'Brown', 'sophiabrown@example.com', 'sophpass', '7778889999', '987 Oak Dr', 'Female', '1984-11-10'),
(4, 'Oliver', 'Johnson', 'oliverjohnson@example.com', 'supervisorpass', '1111111111', '123 Pine St', 'Male', '1979-07-25'),
(5, 'Ava', 'Garcia', 'avagarcia@example.com', 'avapass', '4445556666', '456 Maple Ave', 'Female', '1983-12-08'),
(6, 'Liam', 'Martinez', 'liammartinez@example.com', 'liampwd', '7778889999', '789 Oak Dr', 'Male', '1977-05-23'),
(7, 'Sophia', 'Taylor', 'sophiataylor@example.com', 'sophiapass', '1112223333', '321 Elm St', 'Female', '1985-01-16'),
(8, 'Jackson', 'Anderson', 'jacksonanderson@example.com', 'jackson123', '4445556666', '654 Pine Ave', 'Male', '1988-08-04'),
(9, 'Olivia', 'Thomas', 'oliviathomas@example.com', 'oliviapwd', '7778889999', '987 Oak Dr', 'Female', '1981-04-12'),
(10, 'Aiden', 'Harris', 'aidenharris@example.com', 'aidenpass', '1111111111', '123 Pine St', 'Male', '1983-10-27'),
(11, 'Oliver', 'Lopez', 'oliverlopez@example.com', 'oliver123', '4445556666', '456 Maple Ave', 'Male', '1976-09-30'),
(12, 'Sophia', 'Scott', 'sophiascott@example.com', 'sophiapass', '7778889999', '789 Oak Dr', 'Female', '1978-12-03'),
(13, 'Ethan', 'Green', 'ethangreen@example.com', 'ethanpwd', '1112223333', '321 Elm St', 'Male', '1982-05-19'),
(14, 'Charlotte', 'Adams', 'charlotteadams@example.com', 'charlottepass', '4445556666', '654 Pine Ave', 'Female', '1979-02-21'),
(15, 'Noah', 'King', 'noahking@example.com', 'noahpwd', '7778889999', '987 Oak Dr', 'Male', '1983-09-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dispensed`
--
ALTER TABLE `dispensed`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `doctorID` (`doctorID`),
  ADD KEY `drugID` (`drugID`);

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
  ADD KEY `doctorID` (`doctorID`),
  ADD KEY `drugID` (`drugID`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dispensed`
--
ALTER TABLE `dispensed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispensed`
--
ALTER TABLE `dispensed`
  ADD CONSTRAINT `dispensed_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `patients` (`ID`),
  ADD CONSTRAINT `dispensed_ibfk_2` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`ID`),
  ADD CONSTRAINT `dispensed_ibfk_3` FOREIGN KEY (`drugID`) REFERENCES `drugs` (`ID`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `patients` (`ID`),
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`ID`),
  ADD CONSTRAINT `prescriptions_ibfk_3` FOREIGN KEY (`drugID`) REFERENCES `drugs` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
