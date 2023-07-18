-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 08:02 AM
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
  `ID` int(20) NOT NULL,
  `adminFirstName` varchar(50) NOT NULL,
  `adminLastName` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminPhoneNumber` int(50) NOT NULL,
  `adminAddress` varchar(50) NOT NULL,
  `adminGender` varchar(50) NOT NULL,
  `adminDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `adminFirstName`, `adminLastName`, `adminEmail`, `adminPassword`, `adminPhoneNumber`, `adminAddress`, `adminGender`, `adminDOB`) VALUES
(1, 'John', 'Doe', 'johndoe@example.com', 'password1', 1234567890, '123 Main St', 'Male', '1990-01-01'),
(2, 'Jane', 'Smith', 'janesmith@example.com', 'password2', 2147483647, '456 Elm St', 'Female', '1992-05-15'),
(3, 'Michael', 'Johnson', 'michaeljohnson@example.com', 'password3', 2147483647, '789 Oak St', 'Male', '1988-11-30'),
(4, 'Emily', 'Davis', 'emilydavis@example.com', 'password4', 2147483647, '567 Pine St', 'Female', '1994-08-22'),
(5, 'William', 'Anderson', 'williamanderson@example.com', 'password5', 2147483647, '789 Cedar St', 'Male', '1991-03-10'),
(6, 'Sophia', 'Wilson', 'sophiawilson@example.com', 'password6', 2147483647, '321 Birch St', 'Female', '1989-07-07'),
(7, 'Matthew', 'Taylor', 'matthewtaylor@example.com', 'password7', 2147483647, '456 Maple St', 'Male', '1993-09-25'),
(8, 'Olivia', 'Martin', 'oliviamartin@example.com', 'password8', 2147483647, '654 Oak St', 'Female', '1990-12-05'),
(9, 'Daniel', 'Thompson', 'danielthompson@example.com', 'password9', 2147483647, '987 Elm St', 'Male', '1995-02-14'),
(10, 'Ava', 'Walker', 'avawalker@example.com', 'password10', 2147483647, '234 Pine St', 'Female', '1987-06-18'),
(11, 'James', 'Harris', 'jamesharris@example.com', 'password11', 2147483647, '789 Oak St', 'Male', '1992-04-11'),
(12, 'Mia', 'Clark', 'miaclark@example.com', 'password12', 2147483647, '678 Cedar St', 'Female', '1991-08-03'),
(13, 'Benjamin', 'Lewis', 'benjaminlewis@example.com', 'password13', 2147483647, '543 Birch St', 'Male', '1988-10-29'),
(14, 'Charlotte', 'Lee', 'charlottelee@example.com', 'password14', 2147483647, '876 Maple St', 'Female', '1994-12-17'),
(15, 'Alexander', 'Baker', 'alexanderbaker@example.com', 'password15', 2147483647, '765 Oak St', 'Male', '1993-01-20'),
(16, 'Ella', 'Young', 'ellayoung@example.com', 'password16', 2147483647, '432 Elm St', 'Female', '1990-05-09'),
(17, 'William', 'Gonzalez', 'williamgonzalez@example.com', 'password17', 2147483647, '876 Pine St', 'Male', '1989-09-13'),
(18, 'Sofia', 'Rodriguez', 'sofia.rodriguez@example.com', 'password18', 2147483647, '345 Cedar St', 'Female', '1995-11-07'),
(19, 'Joseph', 'Hernandez', 'joseph.hernandez@example.com', 'password19', 2147483647, '654 Birch St', 'Male', '1987-03-24'),
(20, 'Scarlett', 'Wright', 'scarlett.wright@example.com', 'password20', 2147483647, '987 Maple St', 'Female', '1992-07-16'),
(21, 'Sharon', 'Bahaj', 'sh@yahoo.com', '123yy', 9012982, '333', 'Female', '2000-12-03'),
(22, 'Sharon', 'Bahaj', 'sh@yahoo.com', '123yy', 9012982, '333', 'Female', '2000-12-03'),
(23, 'Lance', 'Nelima', 'ssgfab@yahoo.com', '123yy', 12103923, '5654', 'Male', '2010-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(20) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `companyEmail` varchar(50) NOT NULL,
  `companyPassword` varchar(20) NOT NULL,
  `companyPhoneNumber` int(20) NOT NULL,
  `companyAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`ID`, `companyName`, `companyEmail`, `companyPassword`, `companyPhoneNumber`, `companyAddress`) VALUES
(1, 'ABC Pharmaceuticals', 'abcpharma@gmail.com', 'password123', 1234567890, '123 Main St'),
(2, 'XYZ Pharmaceuticals', 'xyzpharma@gmail.com', 'pass456', 2147483647, '456 Elm St'),
(3, 'PQR Pharmaceuticals', 'pqrpharma@gmail.com', 'pharmapass', 2147483647, '789 Oak St'),
(4, 'DEF Pharmaceuticals', 'defpharma@gmail.com', 'qwerty123', 1112223333, '321 Pine St'),
(5, 'GHI Pharmaceuticals', 'ghipharma@gmail.com', 'pass789', 2147483647, '987 Cedar St'),
(6, 'JKL Pharmaceuticals', 'jklpharma@gmail.com', 'pharmasecure', 2147483647, '654 Maple St'),
(7, 'MNO Pharmaceuticals', 'mnopharma@gmail.com', 'password7890', 2147483647, '741 Birch St'),
(8, 'RST Pharmaceuticals', 'rstpharma@gmail.com', 'pharmapassword', 2147483647, '852 Pineapple St'),
(9, 'UVW Pharmaceuticals', 'uvwpharma@gmail.com', 'pass1234', 2147483647, '963 Orange St'),
(10, 'LMN Pharmaceuticals', 'lmnpharma@gmail.com', 'pharmatest', 2147483647, '159 Grape St'),
(11, 'QRS Pharmaceuticals', 'qrspharma@gmail.com', 'pass5678', 2147483647, '357 Lemon St'),
(12, 'IJK Pharmaceuticals', 'ijkpharma@gmail.com', 'pharmapass123', 2147483647, '852 Banana St'),
(13, 'EFG Pharmaceuticals', 'efgpharma@gmail.com', 'testpass', 2147483647, '753 Cherry St'),
(14, 'NOP Pharmaceuticals', 'nopharma@gmail.com', 'pharmapass1234', 2147483647, '357 Apple St'),
(15, 'TUV Pharmaceuticals', 'tuvpharma@gmail.com', 'passpharm', 2147483647, '963 Pear St'),
(16, 'WXY Pharmaceuticals', 'wxypharma@gmail.com', 'pharmatest123', 2147483647, '159 Watermelon St'),
(17, 'STU Pharmaceuticals', 'stupharma@gmail.com', 'testpass5678', 2147483647, '753 Strawberry St'),
(18, 'MNP Pharmaceuticals', 'mnppharma@gmail.com', 'pharmapass234', 2147483647, '357 Blueberry St'),
(19, 'VWX Pharmaceuticals', 'vwxpharma@gmail.com', 'pass123pharm', 2147483647, '963 Raspberry St'),
(20, 'LMN Pharmaceuticals', 'lmnpharma@gmail.com', 'pharmatest5678', 2147483647, '159 Blackberry St'),
(21, 'Destiny Lars', 'aadl@yahoo.com', '123yy', 123456, '469');

-- --------------------------------------------------------

--
-- Table structure for table `dispensed`
--

CREATE TABLE `dispensed` (
  `ID` int(50) NOT NULL,
  `patientID` int(50) NOT NULL,
  `doctorID` int(50) NOT NULL,
  `drugID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `ID` int(20) NOT NULL,
  `doctorFirstName` varchar(20) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorPassword` varchar(20) NOT NULL,
  `doctorPhoneNumber` int(20) NOT NULL,
  `doctorAddress` varchar(20) NOT NULL,
  `doctorGender` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`ID`, `doctorFirstName`, `doctorLastName`, `doctorEmail`, `doctorPassword`, `doctorPhoneNumber`, `doctorAddress`, `doctorGender`, `doctorDOB`) VALUES
(24, 'Dr. Michael', 'Williams', 'michaelwilliams@yaho', 'abc123', 2147483647, '789 Oak St', 'Male', '1978-03-25'),
(25, 'Dr. Sarah', 'Brown', 'sarahbrown@yahoo.com', 'password456', 1112223333, '321 Pine St', 'Female', '1983-08-30'),
(26, 'Dr. Christopher', 'Taylor', 'christophertaylor@ya', 'qwerty123', 2147483647, '987 Cedar St', 'Male', '1976-07-05'),
(27, 'Dr. Olivia', 'Davis', 'oliviadavis@yahoo.co', 'pass9876', 2147483647, '654 Maple St', 'Female', '1981-12-10'),
(28, 'Dr. Benjamin', 'Miller', 'benjaminmiller@yahoo', 'secret123', 2147483647, '741 Birch St', 'Male', '1979-11-15'),
(29, 'Dr. Sophia', 'Wilson', 'sophiawilson@yahoo.c', 'mypassword', 2147483647, '852 Pineapple St', 'Female', '1984-04-20'),
(30, 'Dr. Daniel', 'Anderson', 'danielanderson@yahoo', 'test1234', 2147483647, '963 Orange St', 'Male', '1977-09-25'),
(31, 'Dr. Ava', 'Thomas', 'avathomas@yahoo.com', 'passpass', 2147483647, '159 Grape St', 'Female', '1982-02-28'),
(32, 'Dr. Matthew', 'Lewis', 'matthewlewis@yahoo.c', 'password789', 2147483647, '357 Lemon St', 'Male', '1980-01-03'),
(33, 'Dr. Mia', 'Clark', 'miaclark@yahoo.com', 'mypassword123', 2147483647, '852 Banana St', 'Female', '1985-06-08'),
(34, 'Dr. Andrew', 'Harris', 'andrewharris@yahoo.c', 'testpass', 2147483647, '753 Cherry St', 'Male', '1974-03-15'),
(35, 'Dr. Chloe', 'Baker', 'chloebaker@yahoo.com', 'pass123', 2147483647, '357 Apple St', 'Female', '1979-12-20'),
(36, 'Dr. Ethan', 'Young', 'ethanyoung@yahoo.com', 'password7890', 1114447777, '963 Pear St', 'Male', '1975-11-25'),
(37, 'Dr. Lily', 'Hall', 'lilyhall@yahoo.com', 'securepass', 2147483647, '159 Watermelon St', 'Female', '1980-04-30'),
(38, 'Dr. James', 'King', 'jamesking@yahoo.com', 'test12345', 2147483647, '753 Strawberry St', 'Male', '1973-07-05'),
(39, 'Dr. Ava', 'Robinson', 'avarobinson@yahoo.co', 'mypass123', 2147483647, '357 Blueberry St', 'Female', '1978-12-10'),
(40, 'Dr. Benjamin', 'Miller', 'benjaminmiller@yahoo', 'password1234', 2147483647, '963 Raspberry St', 'Male', '1976-11-15'),
(41, 'Dr. Lily', 'Baker', 'lilybaker@yahoo.com', 'testpass123', 2147483647, '159 Blackberry St', 'Female', '1981-02-20'),
(42, 'Rewel', 'Munyao', 'ewewlamn@yahoo.com', '123yy', 12103923, '234', 'Female', '2001-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `ID` int(11) NOT NULL,
  `drugName` varchar(100) DEFAULT NULL,
  `drugDescription` varchar(200) DEFAULT NULL,
  `drugPrice` decimal(10,2) DEFAULT NULL,
  `drugQuantity` int(11) DEFAULT NULL,
  `drugExpirationDate` date DEFAULT NULL,
  `drugManufacturingDate` date DEFAULT NULL,
  `drugCompany` varchar(100) DEFAULT NULL,
  `Approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`ID`, `drugName`, `drugDescription`, `drugPrice`, `drugQuantity`, `drugExpirationDate`, `drugManufacturingDate`, `drugCompany`, `Approved`) VALUES
(22, 'Paracetamol', 'Fever reducer', 8.99, 311, '2023-11-30', '2023-03-01', 'HealthMeds', 1),
(24, 'Metformin', 'Diabetes medication', 8.50, 60, '2024-04-30', '2023-10-01', 'Pharmagen', 0),
(26, 'Aspirin', 'Pain reliever', 4.99, 150, '2023-12-31', '2023-01-01', 'HealthMeds', 0),
(27, 'Simvastatin', 'Cholesterol medication', 14.25, 25, '2024-03-31', '2023-07-15', 'Pharmagen', 0),
(31, 'Metoprolol', 'Beta blocker', 8.99, 50, '2024-01-31', '2023-06-15', 'HealthMeds', 0),
(34, 'Warfarin', 'Blood thinner', 12.75, 20, '2024-04-30', '2023-10-01', 'Pharmagen', 0),
(36, 'Loratadine', 'Antihistamine', 5.99, 200, '2023-12-31', '2023-01-01', 'HealthMeds', 1),
(37, 'Citalopram', 'Antidepressant', 9.25, 30, '2024-03-31', '2023-07-15', 'Pharmaco Inc.', 0),
(39, 'Aspirin', 'Pain reliever and fever reducer', 6.99, 80, '2023-10-31', '2022-07-20', 'ABC Pharmaceuticals', 0),
(40, 'Cetirizine', 'Antihistamine for allergy relief', 9.50, 60, '2024-05-31', '2022-08-15', 'XYZ Pharmaceuticals', 0),
(41, 'Amlodipine', 'Medication for high blood pressure and chest pain', 11.85, 70, '2023-12-31', '2022-09-30', 'DEF Pharmaceuticals', 0),
(42, 'Metoprolol', 'Beta-blocker for high blood pressure and angina', 8.75, 40, '2023-09-30', '2022-08-05', 'PQR Pharmaceuticals', 0),
(43, 'Warfarin', 'Anticoagulant medication', 12.99, 90, '2024-06-30', '2022-10-25', 'GHI Pharmaceuticals', 0),
(44, 'Insulin', 'Medication for managing diabetes', 15.50, 50, '2023-11-30', '2022-07-15', 'JKL Pharmaceuticals', 0),
(45, 'Escitalopram', 'Antidepressant medication', 10.25, 60, '2023-10-31', '2022-09-01', 'MNO Pharmaceuticals', 0),
(46, 'Lisinopril', 'Medication for high blood pressure', 13.99, 30, '2023-12-31', '2022-08-15', 'RST Pharmaceuticals', 0),
(47, 'Duloxetine', 'Medication for depression and anxiety', 9.50, 80, '2024-07-31', '2022-10-10', 'UVW Pharmaceuticals', 0),
(48, 'Gabapentin', 'Medication for neuropathic pain and seizures', 7.85, 50, '2023-09-30', '2022-07-25', 'ABC Pharmaceuticals', 0),
(49, 'Ondansetron', 'Medication for preventing nausea and vomiting', 11.25, 40, '2023-12-31', '2022-08-20', 'XYZ Pharmaceuticals', 0),
(50, 'Hydrochlorothiazide', 'Diuretic for high blood pressure and edema', 14.99, 70, '2023-11-30', '2022-09-15', 'DEF Pharmaceuticals', 0),
(51, 'Tramadol', 'Pain reliever for moderate to severe pain', 13.50, 60, '2024-08-31', '2022-10-20', 'PQR Pharmaceuticals', 0),
(52, 'Atenolol', 'Beta-blocker for high blood pressure and chest pain', 9.85, 80, '2023-09-30', '2022-08-05', 'GHI Pharmaceuticals', 0),
(53, 'Fluoxetine', 'Antidepressant medication', 6.99, 50, '2023-10-31', '2022-09-15', 'JKL Pharmaceuticals', 0),
(54, 'Levothyroxine', 'Thyroid hormone replacement therapy', 11.75, 30, '2023-12-31', '2022-07-30', 'MNO Pharmaceuticals', 0),
(55, 'Morphine', 'Narcotic pain medication', 14.50, 90, '2024-07-31', '2022-10-25', 'RST Pharmaceuticals', 0),
(56, 'Bupropion', 'Antidepressant and smoking cessation aid', 9.99, 60, '2023-09-30', '2022-08-10', 'UVW Pharmaceuticals', 0);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientEmail` varchar(50) NOT NULL,
  `patientPassword` varchar(20) NOT NULL,
  `patientPhoneNumber` int(20) NOT NULL,
  `patientAddress` varchar(20) NOT NULL,
  `patientGender` varchar(20) NOT NULL,
  `patientDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `patientFirstName`, `patientLastName`, `patientEmail`, `patientPassword`, `patientPhoneNumber`, `patientAddress`, `patientGender`, `patientDOB`) VALUES
(23, 'Jane', 'Smith', 'janesmith@yahoo.com', 'pass1234', 2147483647, '456 Elm St', 'Female', '1992-05-10'),
(24, 'Michael', 'Johnson', 'michaeljohnson@yahoo.com', 'abc123', 2147483647, '789 Oak St', 'Male', '1988-12-15'),
(25, 'Emily', 'Williams', 'emilywilliams@yahoo.com', 'password456', 1112223333, '321 Pine St', 'Female', '1995-07-20'),
(26, 'David', 'Brown', 'davidbrown@yahoo.com', 'qwerty123', 2147483647, '987 Cedar St', 'Male', '1985-09-05'),
(27, 'Sarah', 'Davis', 'sarahdavis@yahoo.com', 'pass9876', 2147483647, '654 Maple St', 'Female', '1993-03-25'),
(28, 'Christopher', 'Miller', 'christophermiller@yahoo.com', 'secret123', 2147483647, '741 Birch St', 'Male', '1991-11-12'),
(29, 'Olivia', 'Wilson', 'oliviawilson@yahoo.com', 'mypassword', 2147483647, '852 Pineapple St', 'Female', '1994-02-18'),
(30, 'Andrew', 'Taylor', 'andrewtaylor@yahoo.com', 'test1234', 2147483647, '963 Orange St', 'Male', '1987-06-08'),
(31, 'Emma', 'Anderson', 'emmaanderson@yahoo.com', 'passpass', 2147483647, '159 Grape St', 'Female', '1996-09-30'),
(32, 'Matthew', 'Thomas', 'matthewthomas@yahoo.com', 'password789', 2147483647, '357 Lemon St', 'Male', '1989-04-03'),
(33, 'Sophia', 'Lee', 'sophialee@yahoo.com', 'mypassword123', 2147483647, '852 Banana St', 'Female', '1997-08-28'),
(34, 'Daniel', 'Harris', 'danielharris@yahoo.com', 'testpass', 2147483647, '753 Cherry St', 'Male', '1986-02-14'),
(35, 'Ava', 'Clark', 'avaclark@yahoo.com', 'pass123', 2147483647, '357 Apple St', 'Female', '1998-01-07'),
(36, 'Ethan', 'Lewis', 'ethanlewis@yahoo.com', 'password7890', 1114447777, '963 Pear St', 'Male', '1990-07-11'),
(37, 'Mia', 'Hall', 'miahall@yahoo.com', 'securepass', 2147483647, '159 Watermelon St', 'Female', '1999-03-22'),
(38, 'James', 'Young', 'jamesyoung@yahoo.com', 'test12345', 2147483647, '753 Strawberry St', 'Male', '1984-11-30'),
(39, 'Chloe', 'King', 'chloeking@yahoo.com', 'mypass123', 2147483647, '357 Blueberry St', 'Female', '2000-06-15'),
(40, 'Benjamin', 'Robinson', 'benjaminrobinson@yahoo.com', 'password1234', 2147483647, '963 Raspberry St', 'Male', '1983-08-26'),
(41, 'Lily', 'Baker', 'lilybaker@yahoo.com', 'testpass123', 2147483647, '159 Blackberry St', 'Female', '2001-02-10'),
(42, 'Sharon', 'Bahaj', 'bahass@gmail.com', '123yy', 1234, '12212', 'Male', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `ID` int(20) NOT NULL,
  `pharmacyName` varchar(50) NOT NULL,
  `pharmacyEmail` varchar(50) NOT NULL,
  `pharmacyPassword` varchar(20) NOT NULL,
  `pharmacyPhoneNumber` int(20) NOT NULL,
  `pharmacyAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`ID`, `pharmacyName`, `pharmacyEmail`, `pharmacyPassword`, `pharmacyPhoneNumber`, `pharmacyAddress`) VALUES
(1, 'ABC Pharmacy', 'abcpharmacy@gmail.com', 'password123', 1234567890, '123 Main St'),
(2, 'XYZ Pharmacy', 'xyzpharmacy@gmail.com', 'pass456', 2147483647, '456 Elm St'),
(3, 'PQR Pharmacy', 'pqrpharmacy@gmail.com', 'pharmapass', 2147483647, '789 Oak St'),
(4, 'DEF Pharmacy', 'defpharmacy@gmail.com', 'qwerty123', 1112223333, '321 Pine St'),
(5, 'GHI Pharmacy', 'ghipharmacy@gmail.com', 'pass789', 2147483647, '987 Cedar St'),
(6, 'JKL Pharmacy', 'jklpharmacy@gmail.com', 'pharmasecure', 2147483647, '654 Maple St'),
(7, 'MNO Pharmacy', 'mnopharmacy@gmail.com', 'password7890', 2147483647, '741 Birch St'),
(8, 'RST Pharmacy', 'rstpharmacy@gmail.com', 'pharmapassword', 2147483647, '852 Pineapple St'),
(9, 'UVW Pharmacy', 'uvwpharmacy@gmail.com', 'pass1234', 2147483647, '963 Orange St'),
(10, 'LMN Pharmacy', 'lmnpharmacy@gmail.com', 'pharmatest', 2147483647, '159 Grape St'),
(11, 'QRS Pharmacy', 'qrspharmacy@gmail.com', 'pass5678', 2147483647, '357 Lemon St'),
(12, 'IJK Pharmacy', 'ijkpharmacy@gmail.com', 'pharmapass123', 2147483647, '852 Banana St'),
(13, 'EFG Pharmacy', 'efgpharmacy@gmail.com', 'testpass', 2147483647, '753 Cherry St'),
(14, 'NOP Pharmacy', 'nopharmacy@gmail.com', 'pharmapass1234', 2147483647, '357 Apple St'),
(15, 'TUV Pharmacy', 'tuvpharmacy@gmail.com', 'passpharm', 2147483647, '963 Pear St'),
(16, 'WXY Pharmacy', 'wxypharmacy@gmail.com', 'pharmatest123', 2147483647, '159 Watermelon St'),
(17, 'STU Pharmacy', 'stupharmacy@gmail.com', 'testpass5678', 2147483647, '753 Strawberry St'),
(18, 'MNP Pharmacy', 'mnppharmacy@gmail.com', 'pharmapass234', 2147483647, '357 Blueberry St'),
(19, 'VWX Pharmacy', 'vwxpharmacy@gmail.com', 'pass123pharm', 2147483647, '963 Raspberry St'),
(20, 'LMN Pharmacy', 'lmnpharmacy@gmail.com', 'pharmatest5678', 2147483647, '159 Blackberry St'),
(21, 'Maisha Bora', 'mb112@gmail.com', '123yy', 4567899, '123');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `ID` int(11) NOT NULL,
  `patientID` int(11) DEFAULT NULL,
  `doctorID` int(11) DEFAULT NULL,
  `prescriptionDate` date DEFAULT NULL,
  `prescriptionDuration` varchar(50) DEFAULT NULL,
  `prescriptionNotes` varchar(200) DEFAULT NULL,
  `drugID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`ID`, `patientID`, `doctorID`, `prescriptionDate`, `prescriptionDuration`, `prescriptionNotes`, `drugID`) VALUES
(20, 24, 25, '2023-03-03', '14', 'Take medication twice daily', 0),
(21, 25, 26, '2023-04-04', '7', 'Apply cream to affected area', 0),
(22, 26, 27, '2023-05-05', '7', 'Take medication before bedtime', 0),
(23, 27, 28, '2023-06-06', '10', 'Follow a low-sodium diet', 0),
(24, 28, 29, '2023-07-07', '14', 'Avoid alcohol consumption', 0),
(25, 29, 30, '2023-08-08', '7', 'Increase fluid intake', 0),
(26, 30, 31, '2023-09-09', '7', 'Take medication with food', 0),
(27, 31, 32, '2023-10-10', '10', 'Complete the full course of antibiotics', 0),
(28, 32, 33, '2023-11-11', '14', 'Avoid exposure to sunlight', 0),
(29, 33, 34, '2023-12-12', '7', 'Use eye drops three times a day', 0),
(30, 34, 35, '2024-01-01', '7', 'Take medication on an empty stomach', 0),
(31, 35, 36, '2024-02-02', '10', 'Limit caffeine intake', 0),
(32, 36, 37, '2024-03-03', '14', 'Apply ointment twice daily', 0),
(33, 37, 38, '2024-04-04', '7', 'Avoid driving or operating machinery', 0),
(34, 38, 39, '2024-05-05', '7', 'Take medication with plenty of water', 0),
(35, 39, 40, '2024-06-06', '10', 'Maintain a balanced diet', 0),
(36, 40, 41, '2024-07-07', '14', 'Keep the affected area clean and dry', 0),
(37, 24, 25, '2023-03-03', '14 days', 'Take medication twice daily', 0),
(38, 25, 26, '2023-04-04', '7 days', 'Apply cream to affected area', 0),
(39, 26, 27, '2023-05-05', '7 days', 'Take medication before bedtime', 0),
(40, 27, 28, '2023-06-06', '10 days', 'Follow a low-sodium diet', 0),
(41, 28, 29, '2023-07-07', '14 days', 'Avoid alcohol consumption', 0),
(42, 29, 30, '2023-08-08', '7 days', 'Increase fluid intake', 0),
(43, 30, 31, '2023-09-09', '7 days', 'Take medication with food', 0),
(44, 31, 32, '2023-10-10', '10 days', 'Complete the full course of antibiotics', 0),
(45, 32, 33, '2023-11-11', '14 days', 'Avoid exposure to sunlight', 0),
(46, 33, 34, '2023-12-12', '7 days', 'Use eye drops three times a day', 0),
(47, 34, 35, '2024-01-01', '7 days', 'Take medication on an empty stomach', 0),
(48, 35, 36, '2024-02-02', '10 days', 'Limit caffeine intake', 0),
(49, 36, 37, '2024-03-03', '14 days', 'Apply ointment twice daily', 0),
(50, 37, 38, '2024-04-04', '7 days', 'Avoid driving or operating machinery', 0),
(51, 38, 39, '2024-05-05', '7 days', 'Take medication with plenty of water', 0),
(52, 39, 40, '2024-06-06', '10 days', 'Maintain a balanced diet', 0),
(53, 40, 41, '2024-07-07', '14 days', 'Keep the affected area clean and dry', 0);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `ID` int(20) NOT NULL,
  `supervisorFirstName` varchar(50) NOT NULL,
  `supervisorLastName` varchar(50) NOT NULL,
  `supervisorEmail` varchar(50) NOT NULL,
  `supervisorPassword` varchar(20) NOT NULL,
  `supervisorPhoneNumber` int(20) NOT NULL,
  `supervisorAddress` int(20) NOT NULL,
  `supervisorGender` varchar(20) NOT NULL,
  `supervisorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`ID`, `supervisorFirstName`, `supervisorLastName`, `supervisorEmail`, `supervisorPassword`, `supervisorPhoneNumber`, `supervisorAddress`, `supervisorGender`, `supervisorDOB`) VALUES
(22, 'Supervisor John', 'Smith', 'supervisorjohnsmith@yahoo.com', 'password123', 1234567890, 123, 'Male', '1970-08-15'),
(23, 'Supervisor Emily', 'Johnson', 'supervisoremilyjohnson@yahoo.com', 'pass1234', 2147483647, 456, 'Female', '1975-12-20'),
(24, 'Supervisor Michael', 'Williams', 'supervisormichaelwilliams@yahoo.com', 'abc123', 2147483647, 789, 'Male', '1973-05-25'),
(25, 'Supervisor Sarah', 'Brown', 'supervisorsarahbrown@yahoo.com', 'password456', 1112223333, 321, 'Female', '1978-10-30'),
(26, 'Supervisor Christopher', 'Taylor', 'supervisorchristophertaylor@yahoo.com', 'qwerty123', 2147483647, 987, 'Male', '1971-09-05'),
(27, 'Supervisor Olivia', 'Davis', 'supervisoroliviadavis@yahoo.com', 'pass9876', 2147483647, 654, 'Female', '1976-02-10'),
(28, 'Supervisor Benjamin', 'Miller', 'supervisorbenjaminmiller@yahoo.com', 'secret123', 2147483647, 741, 'Male', '1974-11-15'),
(29, 'Supervisor Sophia', 'Wilson', 'supervisorsophiawilson@yahoo.com', 'mypassword', 2147483647, 852, 'Female', '1979-04-20'),
(30, 'Supervisor Daniel', 'Anderson', 'supervisordanielanderson@yahoo.com', 'test1234', 2147483647, 963, 'Male', '1972-07-25'),
(31, 'Supervisor Ava', 'Thomas', 'supervisoravathomas@yahoo.com', 'passpass', 2147483647, 159, 'Female', '1977-12-28'),
(32, 'Supervisor Matthew', 'Lewis', 'supervisormatthewlewis@yahoo.com', 'password789', 2147483647, 357, 'Male', '1975-01-03'),
(33, 'Supervisor Mia', 'Clark', 'supervisormiaclark@yahoo.com', 'mypassword123', 2147483647, 852, 'Female', '1980-06-08'),
(34, 'Supervisor Andrew', 'Harris', 'supervisorandrewharris@yahoo.com', 'testpass', 2147483647, 753, 'Male', '1969-03-15'),
(35, 'Supervisor Chloe', 'Baker', 'supervisorchloebaker@yahoo.com', 'pass123', 2147483647, 357, 'Female', '1974-12-20'),
(36, 'Supervisor Ethan', 'Young', 'supervisorethanyoung@yahoo.com', 'password7890', 1114447777, 963, 'Male', '1970-11-25'),
(37, 'Supervisor Lily', 'Hall', 'supervisorlilyhall@yahoo.com', 'securepass', 2147483647, 159, 'Female', '1975-04-30'),
(38, 'Supervisor James', 'King', 'supervisorjamesking@yahoo.com', 'test12345', 2147483647, 753, 'Male', '1968-07-05'),
(39, 'Supervisor Ava', 'Robinson', 'supervisoravarobinson@yahoo.com', 'mypass123', 2147483647, 357, 'Female', '1973-12-10'),
(40, 'Supervisor Benjamin', 'Miller', 'supervisorbenjaminmiller@yahoo.com', 'password1234', 2147483647, 963, 'Male', '1971-11-15'),
(41, 'Supervisor Lily', 'Baker', 'supervisorlilybaker@yahoo.com', 'testpass123', 2147483647, 159, 'Female', '1976-02-20'),
(42, 'Sharon', 'Njihia', 'shanji@yahoo.com', '123yy', 9012982, 43445, 'Female', '2012-08-07');

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
-- Indexes for table `items`
--

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
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dispensed`
--
ALTER TABLE `dispensed`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
