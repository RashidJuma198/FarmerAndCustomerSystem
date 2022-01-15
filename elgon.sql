-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 07:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elgon`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `User_ID` int(10) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Quantity` varchar(50) NOT NULL,
  `Product_Quality` varchar(50) NOT NULL,
  `Product_Harvest_Date` date NOT NULL,
  `Product_Expiry_Date` date NOT NULL,
  `Product_Location` varchar(50) NOT NULL,
  `Farmer_Name` varchar(50) NOT NULL,
  `Farmer_ID` varchar(50) NOT NULL,
  `Farmer_Phone_No` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`User_ID`, `Product_Name`, `Product_Quantity`, `Product_Quality`, `Product_Harvest_Date`, `Product_Expiry_Date`, `Product_Location`, `Farmer_Name`, `Farmer_ID`, `Farmer_Phone_No`, `Price`) VALUES
(31, 'maize', '90 bags', 'fresh', '2021-10-11', '2021-10-13', 'kipsigon', 'ndiwa', '37418871', '655225', 0),
(32, 'maize', '90 bags', 'fresh', '2021-10-11', '2021-10-13', 'kipsigon', 'ndiwa', '37418871', '655225', 0),
(33, 'maize', '90 bags', 'fresh', '2021-10-11', '2021-10-13', 'kipsigon', 'ndiwa', '37418871', '655225', 0),
(34, 'maize', '90 bags', 'fresh', '2021-10-11', '2021-10-13', 'kipsigon', 'ndiwa', '37418871', '655225', 0),
(35, 'Beans', '900Sacks', 'Fresh', '2021-10-12', '2021-10-29', 'kipsigon', 'ndiwa', '37418871', '0782456652', 0),
(36, 'Rice', '40bags', 'Fresh', '2021-10-11', '2021-10-28', 'kipsigon', 'ndiwa', '37418871', '0752415456', 0),
(37, 'Beans', '90 bags', 'fresh', '2021-10-05', '2021-10-13', 'kipsigon', 'ndiwa', '37418871', '0700857910', 2400),
(38, 'maize', '90 bags', 'Fresh', '2021-10-13', '2021-10-29', 'kipsigon', 'ndiwa', '37418871', '0752415456', 7800),
(39, 'SUKUMA WIKI', '4 SACK', 'Fresh', '2021-10-03', '2021-10-04', 'CHEPTAIS', 'RASHID', '33268658', '655225', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `ras`
--

CREATE TABLE `ras` (
  `User_ID` int(10) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Quantity` varchar(50) NOT NULL,
  `Product_Quality` varchar(50) NOT NULL,
  `Product_Harvest_Date` date NOT NULL,
  `Product_Expiry_Date` date NOT NULL,
  `Product_Location` varchar(50) NOT NULL,
  `Farmer_Name` varchar(50) NOT NULL,
  `Farmer_ID` varchar(50) NOT NULL,
  `Farmer_Phone_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ras`
--

INSERT INTO `ras` (`User_ID`, `Product_Name`, `Product_Quantity`, `Product_Quality`, `Product_Harvest_Date`, `Product_Expiry_Date`, `Product_Location`, `Farmer_Name`, `Farmer_ID`, `Farmer_Phone_No`) VALUES
(3, 'maize', '90bags', 'fresh', '2021-10-20', '2021-10-28', 'kipsigon', 'ndiwa', '4632365633', '0702545212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `ras`
--
ALTER TABLE `ras`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ras`
--
ALTER TABLE `ras`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
