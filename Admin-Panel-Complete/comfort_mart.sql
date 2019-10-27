-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 10:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comfort_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'comfortmart@gmail.com', 'comfortmart123');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Qatar Airways'),
(12, 'cocacola'),
(13, 'OREO'),
(14, 'CHOCO'),
(15, 'Pakola'),
(16, 'Tapal '),
(19, 'Mortein');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent_category_id`) VALUES
(1, 'Crickey', 0),
(2, 'Football', 0),
(3, 'Hockey', 0),
(4, 'UCL', 2),
(5, 'T20i', 1),
(13, 'Domestic Cricket', 1),
(14, 'Quad-i-azam trophy', 13),
(15, '8 teams', 14),
(16, 'karachi', 15),
(17, 'faislabad', 15),
(18, 'lahore', 15),
(19, 'islamabad', 15),
(20, 'rawalpindi', 15),
(21, 'multan', 15),
(22, 'kashmir', 15),
(24, 'Team A', 23),
(26, 'Tennis', 0),
(27, 'FCB', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `stock` varchar(255) NOT NULL,
  `brands_id` int(11) NOT NULL,
  `categorys_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `stock`, `brands_id`, `categorys_id`) VALUES
(1, 'hockey bat core            ', 10000, '   Nice hockey bat                                                      ', 'mountain.jpg', 'In Stock', 1, 1),
(2, 'Shoes       ', 50000, '       nice grip              ', 'images.jpg', 'Out of Stock', 2, 2),
(3, 'hockey bat', 5000, 'hard and smooth', 'images (3).jpg', 'In Stock', 3, 3),
(4, 'Socks', 2000, 'nice and soft', 'images (2).jpg', 'In Stock', 1, 2),
(7, 'tapal danedar', 20, 'nice tea', 'images (3).jpg', 'In Stock', 16, 5),
(11, 'Shoes', 222, 'crack', 'images (3).jpg', 'In Stock', 2, 4),
(12, 'Oreo', 20, 'outsanding', 'indicators.jpg', 'In Stock', 3, 2),
(16, 'Rice', 200, 'aaa', 'images (3).jpg', 'In Stock', 12, 4),
(17, 'chocolate', 20, 'bhv', 'images (2).jpg', 'In Stock', 12, 5),
(19, 'Tennis bat', 5000, 'nice', 'indicators.jpg', 'In Stock', 1, 26),
(20, 'Net', 10000, 'tyte and strong', 'images (3).jpg', 'In Stock', 1, 26),
(22, 'bat', 10500, 'nice', 'indicators.jpg', 'In Stock', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `shippingaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categorys_id` (`categorys_id`),
  ADD KEY `brands_id` (`brands_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categorys_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
