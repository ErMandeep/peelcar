-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 01:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peelcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `applicationsID` int(255) NOT NULL,
  `applicationsFirstname` varchar(255) NOT NULL,
  `applicationsLastname` varchar(255) NOT NULL,
  `applicationsInitials` varchar(255) NOT NULL,
  `applicationAddress` varchar(255) NOT NULL,
  `applicationCountry` varchar(255) NOT NULL,
  `applicationProvince` varchar(255) NOT NULL,
  `applicationPostal_Code` varchar(255) NOT NULL,
  `applicationHome_Phone` varchar(255) NOT NULL,
  `applicationBusiness_Phone` varchar(255) NOT NULL,
  `applicationEmail` varchar(255) NOT NULL,
  `applicationcomment` varchar(255) NOT NULL,
  `applicationDealership_name` varchar(255) NOT NULL,
  `applicationPhone` varchar(255) NOT NULL,
  `applicationDealership_Registration` varchar(255) NOT NULL,
  `applicationvin` varchar(255) NOT NULL,
  `applicationtype` varchar(255) NOT NULL,
  `applicationyear` varchar(255) NOT NULL,
  `applicationmake` varchar(255) NOT NULL,
  `applicationmodel` varchar(255) NOT NULL,
  `applicationTransmission` varchar(255) NOT NULL,
  `applicationFuel` varchar(255) NOT NULL,
  `applicationBody_Type` varchar(255) NOT NULL,
  `applicationColour` varchar(255) NOT NULL,
  `applicationMileage` varchar(255) NOT NULL,
  `applicationPurchase_Price` varchar(255) NOT NULL,
  `applicatioinFinancial_Institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationsID`, `applicationsFirstname`, `applicationsLastname`, `applicationsInitials`, `applicationAddress`, `applicationCountry`, `applicationProvince`, `applicationPostal_Code`, `applicationHome_Phone`, `applicationBusiness_Phone`, `applicationEmail`, `applicationcomment`, `applicationDealership_name`, `applicationPhone`, `applicationDealership_Registration`, `applicationvin`, `applicationtype`, `applicationyear`, `applicationmake`, `applicationmodel`, `applicationTransmission`, `applicationFuel`, `applicationBody_Type`, `applicationColour`, `applicationMileage`, `applicationPurchase_Price`, `applicatioinFinancial_Institution`) VALUES
(1, 'dfdsdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'mandepp', 'djfkjsdj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'kkkkk', 'kkkk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', '', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name@fds.in', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name', 'applicationDealership_name'),
(5, 'dsf', 'djfkjsdj', 'text', '', 'text', 'text', 'text', 'text', 'text', 'text@fdsdf.in', 'dfs', 'applicationDealership_name', 'text', 'text', 'text', 'text', 'text', 'text', '', '', '', 'text', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applicationsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
