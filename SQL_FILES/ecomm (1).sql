-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 12:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(250) NOT NULL,
  `P_ID` int(200) NOT NULL,
  `C_ID` int(200) NOT NULL,
  `SID` int(200) NOT NULL,
  `P_NAME` varchar(500) NOT NULL,
  `QNT` varchar(500) NOT NULL,
  `P_IMG` varchar(1000) NOT NULL DEFAULT 'images.png',
  `ORDER_ID` varchar(100) NOT NULL,
  `PRICE` int(200) NOT NULL,
  `DATE_TIME` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `P_ID`, `C_ID`, `SID`, `P_NAME`, `QNT`, `P_IMG`, `ORDER_ID`, `PRICE`, `DATE_TIME`) VALUES
(27, 1, 3, 1, 'SOYBEANS', '10', 'PRODUCT/031020210144.jpg', '615c1b22c9361', 600, '2021-10-05'),
(28, 2, 3, 1, 'oil', '5', 'PRODUCT/1c1f0cccf3df12d845ad0007bea20112.png', '615c1b22c9361', 500, '2021-10-05'),
(29, 1, 7, 0, 'SOYBEANS', '1', 'PRODUCT/031020210144.jpg', '634d699565450', 550, '2022-10-17'),
(30, 1, 3, 2, 'SOYBEANS', '1', 'PRODUCT/031020210144.jpg', '634d7a981b6ca', 550, '2022-10-17'),
(31, 1, 3, 2, 'SOYBEANS', '1', 'PRODUCT/031020210144.jpg', '634d7a981b6ca', 550, '2022-10-17'),
(32, 1, 3, 2, 'SOYBEANS', '1', 'PRODUCT/031020210144.jpg', '634d9a7a6aebc', 550, '2022-10-17'),
(33, 1, 3, 2, 'SOYBEANS', '1', 'PRODUCT/031020210144.jpg', '634d9f030d5f0', 550, '2022-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `ID` int(11) NOT NULL,
  `INCOMING_UID` varchar(100) NOT NULL,
  `OUTGOING_UID` varchar(10000) NOT NULL,
  `MESSAGE` varchar(10000) NOT NULL,
  `TIME_STAMP` timestamp NOT NULL DEFAULT current_timestamp(),
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`ID`, `INCOMING_UID`, `OUTGOING_UID`, `MESSAGE`, `TIME_STAMP`, `STATUS`) VALUES
(1, '3', '2', 'aGk=', '2022-10-17 21:55:51', '1'),
(2, '3', '2', 'aGVsbG8=', '2022-10-17 22:32:16', '1'),
(3, '2', '3', 'b2s=', '2022-10-17 22:32:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(200) NOT NULL,
  `NAME` varchar(1000) NOT NULL,
  `SID` int(200) NOT NULL,
  `DATE_TIME` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `NAME`, `SID`, `DATE_TIME`) VALUES
(1, 'sumit das', 1, '2021-10-02 17:29:01.000000'),
(3, 'samadrit', 1, '2021-10-02 19:38:16.922194'),
(4, 'sushant', 1, '2021-10-03 22:35:11.187855'),
(7, 'tumpa', 0, '2022-10-17 20:11:25.406584'),
(8, 'student', 0, '2022-10-17 23:56:34.808752'),
(9, 'student', 0, '2022-10-17 23:56:36.830680'),
(10, 'student', 0, '2022-10-17 23:56:37.399016'),
(11, 'student', 0, '2022-10-17 23:56:37.590752'),
(12, 'student', 0, '2022-10-17 23:58:36.299419');

-- --------------------------------------------------------

--
-- Table structure for table `orde_r`
--

CREATE TABLE `orde_r` (
  `ID` int(200) NOT NULL,
  `C_ID` varchar(200) NOT NULL,
  `ORDER_ID` varchar(500) NOT NULL,
  `SID` int(200) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `DATE_TIME` date NOT NULL DEFAULT current_timestamp(),
  `ACTIVE` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orde_r`
--

INSERT INTO `orde_r` (`ID`, `C_ID`, `ORDER_ID`, `SID`, `TOTAL`, `DATE_TIME`, `ACTIVE`) VALUES
(7, '3', '634d7a981b6ca', 2, 550, '2022-10-17', 1),
(8, '3', '634d9a7a6aebc', 2, 550, '2022-10-17', 1),
(9, '3', '634d9f030d5f0', 2, 550, '2022-10-18', 0),
(10, '3', '634d9f030d5f0', 2, 550, '2022-10-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `ID` int(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `OTP` varchar(100) NOT NULL,
  `PHONE` varchar(100) NOT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(200) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `PRICE` varchar(500) NOT NULL,
  `IMG` varchar(500) NOT NULL,
  `DETAILS` varchar(500) NOT NULL,
  `STOCK` int(100) NOT NULL,
  `DATE_TIME` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `SID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `NAME`, `PRICE`, `IMG`, `DETAILS`, `STOCK`, `DATE_TIME`, `SID`) VALUES
(1, 'SOYBEANS', '550', 'PRODUCT/031020210144.jpg', 'STOCK UP', 60, '0000-00-00 00:00:00.000000', 2),
(2, 'oil', '500', 'PRODUCT/1c1f0cccf3df12d845ad0007bea20112.png', '52', 82, '2021-10-04 20:06:35.520383', 2),
(3, 'sunrise garam masla', '7', 'PRODUCT/708cb2d647ce65c7a28689e138c8f925.png', 'good', 45, '2021-10-04 23:04:40.549756', 2),
(4, 'pen', '50', 'PRODUCT/adf2b59791b861c5ae978b931eb113a3.png', 'good', 100, '2022-10-18 02:13:52.806845', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `PH_NO` varchar(100) NOT NULL,
  `LEVEL` int(100) NOT NULL,
  `REG_BY` int(100) DEFAULT NULL,
  `REG_BY_NAME` varchar(500) NOT NULL,
  `DATE_TIME` date NOT NULL DEFAULT current_timestamp(),
  `DUE` int(100) NOT NULL,
  `REVENUE` int(100) NOT NULL,
  `DELETED` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `PH_NO`, `LEVEL`, `REG_BY`, `REG_BY_NAME`, `DATE_TIME`, `DUE`, `REVENUE`, `DELETED`) VALUES
(1, 'admin', 'tsama209@gmail.com', '9830517105', '7980372546', 1, NULL, '', '2021-09-17', 1650, 550, 0),
(2, 'teacher', 'teacher@gmail.com', '1234', '7980372546', 1, NULL, '', '2021-09-18', 1650, 550, 0),
(3, 'student', 's@gmail.com', '1234', '9051220790', 0, 2, 'teacher', '2021-09-18', 1650, 550, 0),
(4, 'Samadrit Das', 'tsam209@gmail.com', '1234', '7980372546', 1, NULL, '', '2021-09-18', 0, 0, 0),
(5, 'Pritam Goswami', 'sumitelegant@gmail.com', 'student123', '7003952344', 1, NULL, '', '2021-09-19', 0, 0, 0),
(7, 'Samadrit Das', 'slashthunder36@gmail.com', '424992', '9051220790', 0, NULL, '', '2021-09-23', 0, 0, 0),
(8, 'samadrit das', 'bvn@fg.com', '634dc67d47757', '7980372546', 0, 2, 'teacher', '2022-10-18', 0, 0, 0),
(12, 'BIGBAZAR', 'BIGBAZAR@G.COM', '123456', '9830517105', 1, NULL, '', '2022-10-18', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `orde_r`
--
ALTER TABLE `orde_r`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `otp_table`
--
ALTER TABLE `otp_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orde_r`
--
ALTER TABLE `orde_r`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
