-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 11:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(17, 'admin@admin.com'),
(18, 'admin@admin.com'),
(19, 'kevin@gmail.com'),
(20, 'jude@yahoo.com'),
(21, 'jude@yahoo.com'),
(22, 'gesache@yahoo.com'),
(23, 'kelly@gmail.com'),
(24, 'gesache@yahoo.com'),
(25, 'gesache@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$0tgN1EULMBcMRdmYBTE99e5rMat9ek/Px0liLXf9Gr3AvUiaKfUzO', 'campcodes@gmail.com', 1, '2020-03-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(2, 'Real Estate', 'Real Estate', '2023-03-05 23:20:54', NULL, 1),
(3, 'Cars', 'Cars', '2023-03-05 23:20:54', '0000-00-00 00:00:00', 1),
(4, 'Shopping', 'Shopping', '2023-03-05 23:21:26', NULL, 1),
(5, 'Job', 'Job', '2023-03-05 23:21:26', NULL, 1),
(6, 'Hotels', 'Hotels', '2023-03-05 23:21:58', NULL, 1),
(7, 'Services', 'Services', '2023-03-05 23:21:58', NULL, 1),
(8, 'Pets', 'Pets', '2023-03-05 23:22:18', NULL, 1),
(30, 'Restaurant', 'Restaurant', '2023-03-06 05:54:27', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `postprice` int(255) NOT NULL,
  `postquantity` int(255) NOT NULL,
  `postlocation` varchar(255) NOT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `postendtime` varchar(255) NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `postprice`, `postquantity`, `postlocation`, `PostDetails`, `postendtime`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`) VALUES
(27, 'Three Bedroom House', 2, 32, 1000, 1000, '3', 'London', '', '2023-03-06 08:24:34', NULL, 1, 'Three-Bedroom-House'),
(28, 'Second hand subaru', 3, 38, 400, 1000, '3', 'London', '2023-03-07', '2023-03-06 08:28:27', NULL, 1, 'Second-hand-subaru'),
(29, 'Pizaa', 30, 26, 1000, 1000, '10', 'London', '2023-03-09', '2023-03-06 08:58:45', NULL, 1, 'Pizaa'),
(30, 'Soft drinks', 30, 29, 1000, 10, 'New York', 'Soft drinks available', '2023-03-07', '2023-03-06 09:06:04', NULL, 1, 'Soft-drinks'),
(31, 'Two Bedroom House', 2, 32, 500, 10, 'New York', 'Two Bedroom House', '2023-03-09', '2023-03-06 09:08:25', NULL, 1, 'Two-Bedroom-House'),
(32, 'Best Study Spots on Campus', 7, 61, 100, 100, 'london', 'Best Study Spots on Campus', '2023-03-07', '2023-03-06 10:06:33', NULL, 1, 'Best-Study-Spots-on-Campus');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(26, 30, 'Fast Food', 'Fast Food', '2023-03-06 05:55:55', NULL, 1),
(27, 30, ' Food Truck', ' Food Truck', '2023-03-06 05:56:27', NULL, 1),
(28, 30, 'Cafe', 'Cafe', '2023-03-06 05:56:42', NULL, 1),
(29, 30, 'Casual Dining', 'Casual Dining', '2023-03-06 05:57:13', NULL, 1),
(30, 30, 'Fast Casual', 'Fast Casual', '2023-03-06 05:59:08', NULL, 1),
(31, 2, 'To Share', 'To Share', '2023-03-06 06:00:51', NULL, 1),
(32, 2, 'For Sale', 'For Sale', '2023-03-06 06:01:10', NULL, 1),
(33, 2, 'Land & Estates', 'Land & Estates', '2023-03-06 06:01:27', NULL, 1),
(34, 2, 'Appartments', 'Appartments', '2023-03-06 06:01:42', NULL, 1),
(35, 2, 'For Rent', 'For Rent', '2023-03-06 06:03:04', NULL, 1),
(36, 3, 'Car Parts', 'Car Parts', '2023-03-06 06:04:02', NULL, 1),
(37, 3, 'Ford Motor', 'Ford Motor', '2023-03-06 06:05:51', NULL, 1),
(38, 3, 'Toyota Motor', 'Toyota Motor', '2023-03-06 06:06:10', NULL, 1),
(39, 3, 'Motobikes', 'Motobikes', '2023-03-06 06:06:29', NULL, 1),
(40, 3, 'Motobikes', 'Motobikes', '2023-03-06 06:06:29', NULL, 1),
(41, 4, 'Food', 'Food', '2023-03-06 06:08:03', NULL, 1),
(42, 4, 'Wear', 'Wear', '2023-03-06 06:08:18', NULL, 1),
(43, 4, 'Accessories', 'Accessories', '2023-03-06 06:08:32', NULL, 1),
(44, 4, 'IT & Sofware', 'IT & Sofware', '2023-03-06 06:08:58', NULL, 1),
(45, 4, 'For Kids', 'For Kids', '2023-03-06 06:09:13', NULL, 1),
(46, 5, 'Accountancy', 'Accountancy', '2023-03-06 06:12:40', NULL, 1),
(47, 5, 'Banking', 'Banking', '2023-03-06 06:12:57', NULL, 1),
(48, 5, 'Managerment', 'Managerment', '2023-03-06 06:13:07', NULL, 1),
(49, 5, 'Secretarial & PA', 'Secretarial & PA', '2023-03-06 06:13:19', NULL, 1),
(50, 5, 'Voluntary Work', 'Voluntary Work', '2023-03-06 06:13:29', NULL, 1),
(51, 6, 'Artists', 'Artists', '2023-03-06 06:14:22', NULL, 1),
(52, 6, 'Events & Nightlife', 'Events & Nightlife', '2023-03-06 06:14:32', NULL, 1),
(53, 6, 'Hotel Stuff', 'Hotel Stuff', '2023-03-06 06:14:50', NULL, 1),
(54, 6, 'Classes', 'Classes', '2023-03-06 06:15:00', NULL, 1),
(55, 6, 'Hostel', 'Hostel', '2023-03-06 06:15:13', NULL, 1),
(57, 7, 'Clothing', 'Clothing', '2023-03-06 06:17:12', NULL, 1),
(58, 7, 'Clothing', 'Clothing', '2023-03-06 06:17:12', NULL, 1),
(59, 7, 'Childcare', 'Childcare', '2023-03-06 06:17:23', NULL, 1),
(61, 7, 'Business', 'Business', '2023-03-06 06:17:36', NULL, 1),
(62, 7, 'Cleaning', 'Cleaning', '2023-03-06 06:17:49', NULL, 1),
(63, 8, 'Cats', 'Cats', '2023-03-06 06:19:25', NULL, 1),
(64, 8, 'Dogs', 'Dogs', '2023-03-06 06:19:38', NULL, 1),
(65, 8, 'Birds', 'Birds', '2023-03-06 06:19:57', NULL, 1),
(66, 8, 'Wanted', 'Wanted', '2023-03-06 06:20:13', NULL, 1),
(67, 8, 'Pets for Sale', 'Pets for Sale', '2023-03-06 06:20:43', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `email`, `password`) VALUES
(0, 'rudekevin80@gmail.com', '$2y$10$1u7adymza..xzZVDwkP6WuskSXiexgwyab3ML37gb/HurV9ydAhAe');

-- --------------------------------------------------------

--
-- Table structure for table `tblviews`
--

CREATE TABLE `tblviews` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblviews`
--

INSERT INTO `tblviews` (`id`, `post_id`, `views`) VALUES
(14, 58, 7),
(15, 59, 3),
(16, 60, 2),
(17, 61, 0),
(18, 62, 2),
(19, 63, 1),
(20, 64, 0),
(21, 65, 1),
(22, 66, 8),
(23, 14, 8),
(24, 15, 8),
(25, 16, 3),
(26, 17, 2),
(27, 18, 3),
(28, 19, 6),
(29, 20, 5),
(30, 23, 6),
(31, 24, 19),
(32, 25, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `tblviews`
--
ALTER TABLE `tblviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tblviews`
--
ALTER TABLE `tblviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
