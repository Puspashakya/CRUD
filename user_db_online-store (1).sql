-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 01:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db_online-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('puspa', '123'),
('abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` int(255) UNSIGNED NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(64, 'tero bau', 4294967295, 'BKT', 'COD'),
(66, 'sajan Shakya', 4294967295, 'madhyapur thimi -6', 'COD'),
(68, 'sajan Shakya', 0, 'madhyapur thimi -6', 'COD'),
(77, 'Puspa Shakya', 0, 'kavrepalanchok', 'COD'),
(78, 'Puspa Shakya', 0, 'kavrepalanchok', 'COD'),
(79, 'Puspa Shakya', 4294967295, 'kavrepalanchok', 'COD'),
(80, 'asdfasdfasdf', 0, 'sadfasdfasd', 'COD'),
(81, '11111111', 1010101010, 'sdgadfv', 'COD'),
(82, 'hari maya', 4294967295, 'kammanu', 'COD'),
(83, 'sajan Shakya', 4294967295, 'madhyapur thimi -6', 'COD'),
(84, 'sajan Shakya', 4294967295, 'madhyapur thimi -6', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `iid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`iid`, `name`, `image`, `price`, `Quantity`) VALUES
(60, 'data cable', 'product-7.jpg', '1234', 12),
(62, 'advance calculator', 'calculator.jpg', '2500', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'puspa', 'puspa@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'pspa', 'puspashakya123@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(3, 'admin', 'puspa.shakya@nimscollege.edu.np', '202cb962ac59075b964b07152d234b70', 'admin'),
(4, 'ram1', 'ram@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'ram2', 'ram2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(6, 'ram3', 'ram3@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(9, 'puspa7', 'puspa7@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(10, 'saurav', 'saurav@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'rahul', 'rahul@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(13, 'rahul1', 'rahul1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(14, 'kp', 'kp@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(15, 'admin', 'ram2@g', '202cb962ac59075b964b07152d234b70', 'user'),
(16, 'Puspa Shakya', 'puspa123@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(17, 'tero', 'tero@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(61, 'laptop charger', 2500, 3),
(63, 'data cable', 1500, 6),
(68, 'data cable', 1500, 1),
(69, 'data cable', 1500, 1),
(70, 'data cable', 1500, 2),
(71, 'laptop charger', 2500, 1),
(72, 'laptop charger', 2500, 1),
(73, 'Mac book', 190000, 1),
(74, 'data cable', 1500, 1),
(75, 'laptop charger', 2500, 1),
(76, 'data cable', 1500, 1),
(77, 'laptop charger', 2500, 1),
(78, 'data cable', 1500, 2),
(79, 'laptop charger', 2500, 1),
(79, 'keyboard', 1900, 1),
(80, 'laptop charger', 2500, 1),
(81, 'keyboard', 1900, 1),
(82, 'data cable', 1500, 1),
(83, 'data cable', 1500, 1),
(84, 'data cable', 1500, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `iid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
