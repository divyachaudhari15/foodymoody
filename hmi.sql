-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 07:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

DROP TABLE IF EXISTS `addfood`;
CREATE TABLE `addfood` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `images_path` varchar(200) CHARACTER SET utf8 NOT NULL,
  `options` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`F_ID`, `name`, `price`, `description`, `images_path`, `options`) VALUES
(1, 'Tea', 20, 'Black Tea', '[Images/tea.jpg]', 'ENABLE'),
(2, 'Burger', 70, 'Veg Burger', '[Images/burger.jpeg]', 'ENABLE'),
(3, 'Rice', 60, 'Plain Rice', '[Images/rice.jpg]', 'ENABLE'),
(4, 'Roti', 35, 'Butter Roti', '[Images/roti.jpg]', 'ENABLE'),
(5, 'Non-veg Biryani', 260, 'Biryani with Chicken', '[Images/non-veg biryani.jpg]', 'ENABLE'),
(6, 'Pulao', 160, 'Mix Veg. Pulao', '[Images/biryani.jpg]', 'ENABLE'),
(7, 'Idli Sambhar', 100, 'Idli with Sambhar', '[Images/idli-sambhar.jpg]', 'ENABLE'),
(8, 'Cup Cake', 50, 'Cup Cakes', '[Images/cup1.jpeg]', 'ENABLE'),
(9, 'Smoothie', 150, 'Blue Berry Smoothie', '[Images/smoothie.jpg]', 'ENABLE'),
(10, 'Gulab Jamun', 60, 'Gulab Jamun', '[Images/gulab-jamun.jpg]', 'ENABLE'),
(11, 'Dal', 150, 'Dal Tadka', '[Images/dal.jpeg]', 'ENABLE'),
(12, 'Pasta', 190, 'Pasta', '[Images/pasta.jpeg]', 'ENABLE'),
(13, 'Pizza', 50, 'pizza', '[Images/pizza.jpg]', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

DROP TABLE IF EXISTS `alogin`;
CREATE TABLE `alogin` (
  `sno` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`sno`, `username`, `password`, `dt`) VALUES
(1, 'Admin', 'admin123', '2021-05-11 11:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `sno` int(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(800) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `username`, `mobileno`, `email`, `message`, `dt`) VALUES
(1, 'a', 12, 'ab@gmail.com', 'hello', '2021-05-09 16:41:38'),
(2, 'a', 12, 'ab@gmail.com', 'hello', '2021-05-09 16:42:29'),
(4, 'ab', 0, '', 'hiii', '2021-05-09 16:45:44'),
(6, 'abc xyz pqr', 9911111111, 'a@a.com', 'hello ', '2021-05-09 17:03:57'),
(8, 'a', 12, 'a@a.com', 'fsdjrnm dalkeujn,f ds/', '2021-05-10 11:55:04'),
(9, 'a', 1, '', '', '2021-05-10 12:04:37'),
(11, '', 0, 'minal@gmail.com', 'h', '2021-05-10 12:20:24'),
(19, 'abc xyz pqr', 0, 'ab@gmail.com', '', '2021-05-10 17:35:01'),
(21, '', 0, '', '', '2021-05-10 19:56:50'),
(22, 'a', 1, 'ab@gmail.com', 'a', '2021-05-10 20:17:14'),
(23, 'minal jadhav', 987654321, 'm@gmail.com', 'hello everyone ', '2021-05-10 20:18:16'),
(24, 'qwr', 135, 'a@a.com', 'zdfgdczxh', '2021-05-10 20:19:11'),
(25, 'a', 325, 'ab@gmail.com', 'sawt', '2021-05-10 20:27:46'),
(26, 'a', 0, 'a@a.com', 'DSF', '2021-05-10 20:33:36'),
(27, 'divya', 9911111111, 'd@gmail.com', 'kdjnm', '2021-05-10 20:43:29'),
(28, 'vidya', 70, 'v13@gmail.com', 'aw', '2021-05-10 20:52:19'),
(29, 'a', 6568, 'ab@gmail.com', 'hgjb,m ', '2021-05-10 21:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_ID` int(50) NOT NULL,
  `F_ID` int(100) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `price` int(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `R_ID`) VALUES
(95, 2, 'Burger', 70, 1, '2021-05-17', 0),
(96, 1, 'Tea', 20, 1, '2021-05-17', 0),
(97, 8, 'Cup Cake', 50, 1, '2021-05-17', 0),
(98, 1, 'Tea', 20, 1, '2021-05-17', 0),
(99, 2, 'Burger', 70, 1, '2021-05-17', 0),
(100, 3, 'Rice', 60, 3, '2021-05-17', 0),
(101, 1, 'Tea', 20, 1, '2021-05-20', 0),
(102, 2, 'Burger', 70, 1, '2021-05-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup` (
  `sno` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `password` varchar(23) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `name`, `email`, `address`, `mobileno`, `password`, `dt`) VALUES
(1, 'Minal', 'minal@gmail.com', 'Karjat', 9276548709, '123', '2021-05-05 16:39:08'),
(2, 'abc', 'ab@c.com', 'abc', 12345, '12', '2021-05-07 17:25:45'),
(4, 'divya', 'divya@gmail.com', 'kalyan', 1, '123', '2021-05-10 11:56:37'),
(8, 'Divya Chaudhari', 'divya@yahoo.com', 'kalyan', 453675879, 'divya', '2021-05-12 18:16:55'),
(9, 'Vidya babar', 'vidya@yahoo.com', 'kalyan', 763258720, '123', '2021-05-12 18:20:17'),
(11, 'minal jadhav', 'mj@gmail.com', 'karjat', 9922337229, 'minal', '2021-05-16 16:18:17'),
(12, 'abc xyz', 'ab@gmail.com', 'abcde', 9876543210, '123', '2021-05-19 17:25:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfood`
--
ALTER TABLE `addfood`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfood`
--
ALTER TABLE `addfood`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
