-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2022 at 03:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `Cust_Email` varchar(250) NOT NULL,
  `Cust_Password` varchar(250) NOT NULL,
  `Cust_Name` varchar(250) NOT NULL,
  `Cust_Phone` varchar(250) NOT NULL,
  `Cust_Address` varchar(250) NOT NULL,
  `Area_Delivery` varchar(250) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Credit_Card` varchar(250) DEFAULT NULL,
  `cvv` varchar(50) DEFAULT NULL,
  `name_card` varchar(250) DEFAULT NULL,
  `expmonth` varchar(250) DEFAULT NULL,
  `expyear` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `Cust_Email`, `Cust_Password`, `Cust_Name`, `Cust_Phone`, `Cust_Address`, `Area_Delivery`, `Registration_Date`, `Credit_Card`, `cvv`, `name_card`, `expmonth`, `expyear`) VALUES
(6, 'c@g.com', 'c', 'c', '012-133-1300', 'c', 'Minyak', '2022-01-13', '123133411', '123', 'Hanis', 'March', '1233'),
(8, 'h@g.c', 'h', 'Hanis Zahira', '012-312-3213', '101-4,Kg. Pinang, 76400,Tg. Kling,Melaka', 'Tanjong', '2022-01-15', NULL, NULL, NULL, NULL, NULL),
(9, 'c@gmail.com', 'c', 'cs', '123-312-1233', 'c', 'Tanjong', '2022-01-15', NULL, NULL, NULL, NULL, NULL),
(10, 'a@gmail.com', 'a', 'Hanis Zahira', '132-122-1223', '101-4,Kg. Pinang, 76400,Tg. Kling,Mela', 'Tanjong', '2022-01-16', '324223423', '132', 'Hanis', 'March', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `FileID` int(11) NOT NULL,
  `File_Name` varchar(250) NOT NULL,
  `Color` varchar(250) NOT NULL,
  `Status_Order` varchar(250) NOT NULL DEFAULT 'In progress',
  `Service_Type` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Payment_Status` varchar(250) NOT NULL DEFAULT 'Unpaid',
  `CustID` int(11) DEFAULT NULL,
  `Page` int(11) DEFAULT 0,
  `Price` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`FileID`, `File_Name`, `Color`, `Status_Order`, `Service_Type`, `Date`, `Payment_Status`, `CustID`, `Page`, `Price`) VALUES
(10, 'Lab test.docx', 'bw', 'In progress', 'pickup', '2022-01-15', 'Paid', 6, 10, 1),
(11, 'r (1).docx', 'bw', 'In progress', 'pickup', '2022-01-16', 'Unpaid', 6, 0, 0),
(12, 'r (1).docx', 'bw', 'In progress', 'pickup', '2022-01-16', 'Paid', 6, 0, 0),
(13, 'Storyboard Latest.docx', 'bw', 'In progress', 'pickup', '2022-01-16', 'Paid', 6, 3, 0.3),
(14, 'test.docx', 'color', 'In progress', 'delivery', '2022-01-16', 'Paid', 10, 6, 0),
(15, 'Hanis Design wed(full ver).pdf', 'bw', 'In progress', 'pickup', '2022-01-16', 'Paid', 10, 0, 0),
(16, 'Lab12.xlsx', 'bw', 'In progress', 'pickup', '2022-01-16', 'Paid', 10, 16, 0),
(17, 'FINAL REPORT GROUP 6 KHAYAL.docx', 'bw', 'In progress', 'pickup', '2022-01-17', 'Paid', 6, 0, 0),
(18, 'test (1).docx', 'bw', 'In progress', 'pickup', '2022-01-17', 'Paid', 6, 23, 2.3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `Staff_Email` varchar(250) NOT NULL,
  `Staff_Password` varchar(250) NOT NULL,
  `Staff_Name` varchar(250) NOT NULL,
  `Staff_Phone` varchar(250) NOT NULL,
  `Staff_Address` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL DEFAULT 'Staff',
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `Staff_Email`, `Staff_Password`, `Staff_Name`, `Staff_Phone`, `Staff_Address`, `role`, `Registration_Date`) VALUES
(16, 'h@gmail.com', 'h', 'Hanis Zahira', '031-231-1200', '101-4,Kg. Pinang, 76400', 'admin', '2022-01-15'),
(22, 'r@vg', 'r', 'Hanis Zahira', '233-324-1111', '101-4,Kg.', 'admin', '2022-01-16'),
(25, 's@gmail.com', 's', 's', '123-123-1233', 'ss', 'Staff', '2022-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`FileID`),
  ADD KEY `CustID` (`CustID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `FileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
