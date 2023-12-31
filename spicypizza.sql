-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 03:25 AM
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
-- Database: `spicypizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `voucherName` varchar(255) NOT NULL,
  `discountType` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `minimumSpend` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `duration` date NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `voucherName`, `discountType`, `amount`, `minimumSpend`, `slot`, `duration`, `createdAt`, `updatedAt`) VALUES
(1, 'Yapuh Malingkat', 'Fixed', 250, 500, 5, '2024-03-27', '2023-10-26 14:06:01', '2023-10-26 14:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `role`, `email`, `password`, `status`) VALUES
(1, 'Khalil', 'Estrada', 'Manager', 'xeyoceg523@ukbob.com', '$2y$10$kZysdpZXltEBVknnxvWpd.XsDHrQpG1thL6/4o.YL1b9S.MRLVISK', 'Active'),
(2, 'Shan Khyle', 'Chonke', 'Staff', 'sikeco2317@covbase.com', '$2y$10$r6BVd63n81lHO5bx8adjKuXyDfKTfX6Ojj1NvAkWwTEwaxiQWSHwW', 'Deactivated'),
(3, 'Angelo John', 'Landiao', 'Manager', 'asfasdfasdfasdf@gmail.com', '$2y$10$.fwegwsdQag6fXo1J.FMAu6v1ipplB2RcbvIo30LKivaR8xbCPPBy', 'Active'),
(4, 'Rubert', 'Dela Cruz', 'Staff', 'afsdfsadfsdafsadfsadfsad@gmail.com', '$2y$10$I2jSQt1ptuwteQRvvt.glOKfz/s8qKT5AOqClDkWU0rk.2NxS8Waq', 'Active'),
(5, 'Rafael Alfredo', 'Ruste', 'Manager', 'abc123@gmail.com', '$2y$10$CZIO7qljeNteozHW316sY.3d1F1LeTSPJ/oKXZ6UWcWcfMDuNBCgG', 'Active'),
(6, 'Jaydee', 'Ballaho', 'Staff', 'pcx@gmail.com', '$2y$10$lZBECyPxo7Na69NwRFf8qO5S4QIy99Wkz4xW1O.71vct5dzXCIeUW', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
