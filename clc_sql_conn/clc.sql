-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 06:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clc`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `pass_key` varchar(30) NOT NULL,
  `security` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `login_id`, `pass_key`, `security`, `level`, `sex`, `name`) VALUES
(1, 'admin1', 'admin1', 'admin1', 5, 'male', 'Mr Admin'),
(2, 'cashier', 'cashier', 'cashier1', 4, 'male', 'cashier');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `fname`, `lname`, `username`, `password`, `email`, `address`, `contact_no`) VALUES
(1, 'Cess', 'Ulgasan', 'cessy123', '1234', 'cess@gmail.com', 'Lahug, Cebu City', 123456),
(2, 'Xa', 'XAxaxa', 'xaxa', '1234', 'xa@gmail.com', 'asdasd', 123124),
(3, 'Quen', 'qwewq', 'qwewq', '1211', 'qeda', 'asdas', 121),
(4, 'april', 'trocio', 'april', '1234', 'april@gmail.com', 'sdasdasd', 1214115),
(5, 'fafzcz', 'zczcz', 'zcz', 'zcaasdsa', 'asdasdas', 'asdas', 0),
(6, 'Xavier', 'Gonzales', 'xavierkpop', 'xavier123', 'xavier_gwapo143@yahoo.com', '0751 Sitio Mahayahay Barangay Apas Lahug Cebu city', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `category_code` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`category_code`, `product_id`, `product_name`) VALUES
('13627', 'LXN', 'Xavier123'),
('81962', 'WOZ', 'Plywood'),
('74512', 'ZHA', 'Fake Friends');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `category_code` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`category_code`, `category_name`) VALUES
('13627', 'Xavier Gonzales'),
('74512', 'Candy'),
('81962', 'armourwood moulding');

-- --------------------------------------------------------

--
-- Table structure for table `product_data`
--

CREATE TABLE `product_data` (
  `id` int(8) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `srp` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_data`
--

INSERT INTO `product_data` (`id`, `product_id`, `product_type`, `description`, `size`, `srp`, `img`) VALUES
(28, 'WOZ', 'Marine Wood Pink', 'Three Tree Brown Rice', '12inch', '999', 'received_10155839587533374-1.jpg'),
(29, 'LXN', 'Marine Wood Pink', 'Three Tree Brown Rice', '12', '199.00', 'Central-Lumber-Corporation--200x200.png'),
(30, 'ZHA', 'Traitors', 'FUCUCUCUCUKK', '2meters by 4meters', '199.00', 'received_10155839587533374-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `product_data`
--
ALTER TABLE `product_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
