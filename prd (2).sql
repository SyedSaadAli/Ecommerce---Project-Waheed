-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(225) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Admin', '', 'Admin@123!+'),
(2, 'Waheed', 'waheed@gmail.com', '$2y$10$142mSf/jASI6XGm9UWSdAeeuUmj86Ima4RfptyvEmP3nfYhW34e/a');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` int(5) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Category`) VALUES
(2, 'Covers'),
(3, 'Chargers');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Image_ID` int(225) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Prd_ID` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Image_ID`, `Image`, `Prd_ID`) VALUES
(11, 'Products/Watch1.1.jpeg', 1),
(12, 'Products/Watch1.2.jpeg', 1),
(13, 'Products/Watch1.jpeg', 1),
(14, 'Products/Watch1.1.jpeg', 1),
(15, 'Products/Watch1.2.jpeg', 1),
(16, 'Products/Watch1.jpeg', 1),
(17, 'Products/Watch2.1.jpeg', 2),
(18, 'Products/Watch2.2.jpeg', 2),
(19, 'Products/Watch2.jpeg', 2),
(20, 'Products/Watch3.1.jpeg', 3),
(21, 'Products/Watch3.2.jpeg', 3),
(22, 'Products/Watch3.jpeg', 3),
(23, 'Products/Watch4.1.jpeg', 4),
(24, 'Products/Watch4.2.jpeg', 4),
(25, 'Products/Watch4.jpeg', 4),
(26, 'Products/Earbuds.jpg', 5),
(27, 'Products/Earbuds1.1.jpg', 5),
(28, 'Products/Earbuds1.2.jpg', 5),
(29, 'Products/AirPods.jpg', 6),
(30, 'Products/AirPods1.1.jpg', 6),
(31, 'Products/AirPods1.2.jpg', 6),
(34, 'Products/1662739654dubai-skyline-burj-khalifa-downtown-w1264x941.jpg', 7),
(35, 'Products/1662739839dubai-skyline-burj-khalifa-downtown-w1264x941.jpg', 7),
(36, 'Products/burj-al-arab-profile-exterior_6-4_landscape.jpg', 11),
(37, 'Products/1662740391dubai-skyline-burj-khalifa-downtown-w1264x941.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ordernow`
--

CREATE TABLE `ordernow` (
  `Order_ID` int(225) NOT NULL,
  `FullName` varchar(80) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Quantity` bigint(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Product_ID` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordernow`
--

INSERT INTO `ordernow` (`Order_ID`, `FullName`, `Mobile`, `Quantity`, `City`, `Address`, `Status`, `Product_ID`) VALUES
(3, 'Saad', 0, 0, '', '', 'Inprocess', 12),
(4, 'Ammad', 0, 0, '', '', 'Inprocess', 12),
(5, 'Ammar', 0, 0, '', '', 'Delivered', 12),
(6, 'Laiq', 0, 0, '', '', 'Inprocess', 12),
(7, 'Younus', 0, 0, '', '', 'Delivered', 12),
(8, 'Anas', 0, 0, '', '', 'New Order', 12),
(9, 'Rafay', 0, 0, '', '', 'New Order', 12),
(10, 'Sharik', 0, 0, '', '', 'New Order', 12),
(11, 'saad', 0, 0, '', '', 'New Order', 2),
(12, 'saad ali', 314151487, 1, 'Abu Dhabi', 'Dumy Street No, Dumy House No', '', 1),
(13, '', 0, 1, '', '', '', 1),
(14, '', 0, 1, '', '', '', 1),
(15, '', 0, 1, '', '', '', 1),
(16, '', 0, 1, '', '', '', 0),
(17, '', 0, 1, '', '', '', 0),
(18, '', 0, 1, '', '', '', 0),
(19, '', 0, 1, '', '', '', 1),
(20, 'saad ali', 314151487, 1, 'Abu Dhabi', 'Dumy Street No, Dumy House No', '', 0),
(21, 'saad ali', 314151487, 3, 'Dubai', 'Dumy Street No, Dumy House No', 'Delivered', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(225) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Description` varchar(220) NOT NULL,
  `CP` bigint(40) NOT NULL,
  `SP` bigint(40) NOT NULL,
  `DP` int(10) NOT NULL,
  `ItemsSold` bigint(40) NOT NULL,
  `Cat_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Name`, `Description`, `CP`, `SP`, `DP`, `ItemsSold`, `Cat_ID`) VALUES
(1, 'Deltron Unisex', 'Dumy Product Discription', 100, 120, 110, 20, 2),
(2, 'Timezone', 'Dumy Product Discription', 80, 100, 90, 10, 3),
(3, 'YAZOLE Black', 'Dumy Product Discription', 70, 95, 90, 25, 2),
(4, 'Hannah Martin', 'Dumy Product Discription', 50, 70, 60, 8, 2),
(5, 'JBL TWS 4 Earbuds', 'Dumy Product Discription', 30, 50, 40, 50, 2),
(6, 'Airpods', 'Dumy Product Discription', 50, 70, 60, 20, 3),
(11, 'burj khalifa', 'The Burj Khalifa is undoubtedly one of the most iconic towers in Dubai. The Burj Khalifa top view is at a staggering 828 meters and is currently the tallest building in the world.', 1200, 1500, 1400, 0, 3),
(12, '', '', 0, 0, 10, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Image_ID`);

--
-- Indexes for table `ordernow`
--
ALTER TABLE `ordernow`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Image_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ordernow`
--
ALTER TABLE `ordernow`
  MODIFY `Order_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
