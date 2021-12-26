-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 09:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advicesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Goods_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deliverystatus`
--

CREATE TABLE `deliverystatus` (
  `DeliveryStatus_ID` int(10) NOT NULL,
  `DeliveryDetail` varchar(100) NOT NULL,
  `DeliveryType_ID` int(10) NOT NULL,
  `PaymentStatus_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deliverytype`
--

CREATE TABLE `deliverytype` (
  `DeliveryType_ID` int(10) NOT NULL,
  `DeliveryMethod` varchar(100) NOT NULL,
  `Order_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `Goods_ID` int(10) NOT NULL,
  `GoodsName` varchar(100) NOT NULL,
  `GoodsDetail` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Stock` int(10) NOT NULL,
  `GoodsType_ID` int(10) NOT NULL,
  `Goods_Image` varchar(255) NOT NULL,
  `Statusgoods` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`Goods_ID`, `GoodsName`, `GoodsDetail`, `Price`, `Stock`, `GoodsType_ID`, `Goods_Image`, `Statusgoods`) VALUES
(1, 'Huawei MateBook D14 (R7)', 'Processor 		AMD Ryzen 7 3700U (4MB L3 Cache, 2.3 GHz up to 4.0 GHz)Graphics 			Integrated Graphics', 19900, 4, 1, 'upload/huawei1.jpg', ''),
(4, 'Huawei MateBook X Pro', 'Processor			Intel Core i7-10510U 1.8 GHz (8M Cache, up to 4.9 GHz)\r\nGraphics			NVIDIA GeForce MX 250', 59000, 2, 1, 'upload/huawei2.jpg', ''),
(5, 'ASUS X509JP-EJ107T', 'Processor			Intel Core i5-1035G1 1.0 GHz (6M Cache, up to 3.6 GHz)\r\nGraphics			NVIDIA GeForce MX 330', 18900, 3, 1, 'upload/asus1.png', ''),
(6, 'ASUS Vivobook D413IA-EB249TS', 'Processor			AMD Ryzen 5 4500U 2.4GHz (4M Cache, Up to 3.8GHz)\r\nGraphics			Integrated Graphics : AMD ', 19900, 5, 1, 'upload/asus2.png', ''),
(7, 'ASUS Vivobook D413IA-EB303TS', 'Processor			AMD Ryzen 7 4700U 3.6GHz (4M Cache, Up to 4.0GHz)\r\nGraphics			Integrated Graphics : AMD ', 22900, 1, 1, 'upload/asus3.png', ''),
(8, 'ASUS Zenbook Duo UX481FL-HJ096T', 'Processor		Intel Core i5-10210U 1.6 GHz (6M Cache, up to 4.2 GHz)\r\nGraphics		NVIDIA GeForce MX 250 (', 35900, 2, 1, 'upload/asus4.png', ''),
(9, 'ACER TMP214-52-564M/T00V', 'Processor			Intel Core i5-10210U (6M Cache, 1.60 GHz up to 4.20 GHz) 4 Cores, 8 ThreadsGraphics			', 16900.6, 3, 1, 'upload/ACER1.jpg', ''),
(10, 'ACER Swift SF314-42-R0ND/T004', 'Processor			AMD Ryzen 5 4500U (3MB L2 cache,8MB L3 cache,2.3GHz up to 4.0GHz)Graphics			Integrated', 22900.5, 1, 1, 'upload/ACER2.jpg', ''),
(11, 'ACER Swift SF314-57G-5315/T001', 'Processor			Intel Core i5-1035G1 ( 6MB SmartCache, 1.0GHz up to 3.6GHz)Graphics			NVIDIA GeForce M', 23900, 6, 1, 'upload/ACER3.jpg', ''),
(12, 'ACER Spin SP513-54N-50LA/T005', 'Processor			Intel Core i5-1035G4 (6MB Smart Cache,1.1GHz up to 3.7GHz)Graphics			Intel Iris Plus G', 29900, 9, 1, 'upload/ACER4.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `goodstype`
--

CREATE TABLE `goodstype` (
  `GoodsType_ID` int(10) NOT NULL,
  `GoodsTypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goodstype`
--

INSERT INTO `goodstype` (`GoodsType_ID`, `GoodsTypeName`) VALUES
(1, 'NOTEBOOK'),
(2, 'CPU'),
(3, 'Mainboard'),
(4, 'Graphic Card'),
(5, 'Ram for PC'),
(6, 'Ram for NoteBook'),
(7, 'Sound Card'),
(8, 'Case'),
(9, 'Power Supply'),
(10, 'Cooling System'),
(11, 'Optical Disk Drive (ODD)'),
(12, 'Monitor'),
(13, 'Hard Disk/Storage');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` int(10) NOT NULL,
  `MName` varchar(100) NOT NULL,
  `MLastname` varchar(100) NOT NULL,
  `MTelephone` varchar(10) NOT NULL,
  `MHouseNo` varchar(50) NOT NULL,
  `MSubDistrict` varchar(100) NOT NULL,
  `MDistrict` varchar(100) NOT NULL,
  `MProvince` varchar(100) NOT NULL,
  `MPostalCode` varchar(5) NOT NULL,
  `MEmail` varchar(100) NOT NULL,
  `MPassword` varchar(100) NOT NULL,
  `MStatus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `MName`, `MLastname`, `MTelephone`, `MHouseNo`, `MSubDistrict`, `MDistrict`, `MProvince`, `MPostalCode`, `MEmail`, `MPassword`, `MStatus`) VALUES
(1, 'ณัฐธิดา', 'หงษ์ไทย', '0986589392', '101/2592', 'ลำผักชี', 'หนองจอก', 'กรุงเทพมหานคร', '10530', 'hongthainattida@gmail.com', '12345', 'Admin'),
(2, 'สุนิตตา', 'เสาเวียง', '0951868378', '316/69', 'บางซื่อ', 'บางซื่อ', 'กรุงเทพ', '10800', 'phacus.ns@gmail.com', '098765', ''),
(3, 'ชานยอล', 'ปาร์ค', '0844216162', '316/69', 'บางซื่อ', 'บางซื่อ', 'กรุงเทพ', '10800', 'phacus_ns@hotmail.com', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `morder`
--

CREATE TABLE `morder` (
  `Order_ID` int(10) NOT NULL,
  `Total` float NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Cart_ID` int(10) NOT NULL,
  `Member_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(10) NOT NULL,
  `PaymentDate` datetime NOT NULL,
  `Order_ID` int(10) NOT NULL,
  `PaymentType_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentstatus`
--

CREATE TABLE `paymentstatus` (
  `PaymentStatus_ID` int(10) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Payment_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

CREATE TABLE `paymenttype` (
  `PaymentType_ID` int(10) NOT NULL,
  `PaymentPattern` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `deliverystatus`
--
ALTER TABLE `deliverystatus`
  ADD PRIMARY KEY (`DeliveryStatus_ID`);

--
-- Indexes for table `deliverytype`
--
ALTER TABLE `deliverytype`
  ADD PRIMARY KEY (`DeliveryType_ID`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`Goods_ID`);

--
-- Indexes for table `goodstype`
--
ALTER TABLE `goodstype`
  ADD PRIMARY KEY (`GoodsType_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `morder`
--
ALTER TABLE `morder`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD PRIMARY KEY (`PaymentStatus_ID`);

--
-- Indexes for table `paymenttype`
--
ALTER TABLE `paymenttype`
  ADD PRIMARY KEY (`PaymentType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliverystatus`
--
ALTER TABLE `deliverystatus`
  MODIFY `DeliveryStatus_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliverytype`
--
ALTER TABLE `deliverytype`
  MODIFY `DeliveryType_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `Goods_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Member_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `morder`
--
ALTER TABLE `morder`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  MODIFY `PaymentStatus_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymenttype`
--
ALTER TABLE `paymenttype`
  MODIFY `PaymentType_ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
