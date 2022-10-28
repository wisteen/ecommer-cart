-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 01:06 PM
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
-- Database: `pns`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

CREATE TABLE `ordering` (
  `id` float NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `time_date` varchar(255) NOT NULL,
  `productname` varchar(1000) NOT NULL,
  `productsize` varchar(11) NOT NULL,
  `productquantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`id`, `name`, `phone`, `address`, `email`, `unique_id`, `time_date`, `productname`, `productsize`, `productquantity`, `status`) VALUES
(93, 'Blessing', '09034994949', 'Idow Bashorun No. 20 Lagos State', 'wisdomisaac168@gmail.com', '40098892', 'Monday 24th of October 2022 06:08:05 PM', 'rice', 'medium', 2, 'pending'),
(94, 'Blessing', '09034994949', 'Idow Bashorun No. 20 Lagos State', 'wisdomisaac168@gmail.com', '40098892', 'Monday 24th of October 2022 06:08:05 PM', 'Beans', 'small', 1, 'pending'),
(95, 'Blessing', '09034994949', 'Idow Bashorun No. 20 Lagos State', 'wisdomisaac168@gmail.com', '40098892', 'Monday 24th of October 2022 06:08:05 PM', 'Milk', '', 10, 'pending'),
(96, 'Blessing', '09034994949', 'Idow Bashorun No. 20 Lagos State', 'wisdomisaac168@gmail.com', '39053584', 'Monday 24th of October 2022 06:50:39 PM', 'maggi', 'small', 1, 'delivered'),
(97, 'Blessing', '09034994949', 'Idow Bashorun No. 20 Lagos State', 'wisdomisaac168@gmail.com', '47520895', 'Monday 24th of October 2022 06:52:32 PM', 'hello', 'small', 1, 'in progress'),
(98, 'Emaka', '09089889899', 'Idow Bashorun No. 20 Lagos State', 'ek@247.com', '79425616', 'Tuesday 25th of October 2022 08:18:14 PM', 'Garri one bag', 'big', 3, 'Delivered'),
(99, 'Emaka', '09089889899', 'Idow Bashorun No. 20 Lagos State', 'ek@247.com', '79425616', 'Tuesday 25th of October 2022 08:18:14 PM', 'Meat', 'small', 0, 'pending'),
(100, 'Quincy', '09125442676', 'Akwa Ibom state, 23 Oke Street, akpan compund', 'quincy@gmail.com', '108711879', 'Wednesday 26th of October 2022 02:44:08 PM', 'Fresh bread', 'big', 4, 'pending'),
(101, 'Quincy', '09125442676', 'Akwa Ibom state, 23 Oke Street, akpan compund', 'quincy@gmail.com', '108711879', 'Wednesday 26th of October 2022 02:44:08 PM', 'Sardine', 'big', 3, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `image1` varchar(225) NOT NULL,
  `unique_id2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `image1`, `unique_id2`) VALUES
(22, '40098892milad-fakurian-E8Ufcyxz514-unsplash.jpg', '40098892'),
(23, '40098892Nice Background.jpg', '40098892'),
(24, '40098892pexels-pixabay-531880.jpg', '40098892'),
(25, '39053584milad-fakurian-E8Ufcyxz514-unsplash.jpg', '39053584'),
(26, '39053584Nice Background.jpg', '39053584'),
(27, '39053584pexels-pixabay-531880.jpg', '39053584'),
(28, '47520895milad-fakurian-E8Ufcyxz514-unsplash.jpg', '47520895'),
(29, '47520895Nice Background.jpg', '47520895'),
(30, '47520895pexels-pixabay-531880.jpg', '47520895'),
(31, '79425616R.png', '79425616'),
(32, '108711879IMG-20220902-WA0012.jpg', '108711879');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(225) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `name`, `password`, `date_added`, `last_login`) VALUES
(12, 'wisdomisaac168@gmail.com', 'wisdomm', 'royrex', 'Sunday 23rd of October 2022 03:45:51 PM', 'Wednesday 26th of October 2022 02:03:54 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordering`
--
ALTER TABLE `ordering`
  MODIFY `id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
