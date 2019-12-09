-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 02:55 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'comfortmart@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Honor'),
(2, 'Infinix'),
(3, 'VIVO'),
(4, 'Moto'),
(5, 'Lenevo'),
(6, 'Samsung'),
(7, 'Dayfresh'),
(8, '--'),
(9, 'spirit'),
(10, 'pepsi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES
(1, 'Mobiles', 0),
(2, 'Tablets', 0),
(3, 'Fruits', 0),
(4, 'vegetables', 3),
(5, 'juices', 3),
(6, 'pepsi', 5),
(7, 'Diet pepsi', 6),
(8, 'apple', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `productName` varchar(55) DEFAULT NULL,
  `quantity` int(55) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(50) DEFAULT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_number` text NOT NULL,
  `uniqueId` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `productName`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`, `user_address`, `user_number`, `uniqueId`) VALUES
(19, 1, 6, NULL, 1, '2019-12-08 09:26:57', 'COD', 'Delivered', 'karachi north', '12344', '5de7aa8c03dcb'),
(20, 1, 10, NULL, 7, '2019-12-08 09:29:15', 'COD', 'Delivered', 'karachi north', '12344', '5de7aa8c03dcb'),
(21, 1, 11, NULL, 1, '2019-12-08 09:29:15', 'COD', 'Delivered', 'karachi north', '12344', '5de7aa8c03dcb'),
(22, 1, 6, NULL, 6, '2019-12-09 00:37:24', 'COD', 'Delivered', 'karachi gulshan pakistan', '03363057355', '5de7adb16a45b'),
(25, 2, 6, NULL, 1, '2019-12-08 23:22:54', 'COD', 'in Process', 'gulshan', '03363057355', '5ded5e469e2ad'),
(26, 2, 15, NULL, 3, '2019-12-08 23:22:54', 'COD', 'in Process', 'gulshan', '03363057355', '5ded5e469e2ad'),
(27, 2, 1, NULL, 1, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(28, 2, 2, NULL, 2, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(29, 2, 4, NULL, 3, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(30, 2, 5, NULL, 1, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(31, 2, 6, NULL, 4, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(32, 2, 12, NULL, 1, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(33, 2, 13, NULL, 4, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd'),
(34, 2, 14, NULL, 2, '2019-12-09 00:06:05', 'COD', NULL, 'karachi gulshan pakistan', '03363057355', '5ded8fd17a5bd');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uniqueId` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`, `uniqueId`) VALUES
(11, NULL, 'in Process', 'ok', '2019-12-08 09:15:09', '5de7aa8c03dcb'),
(12, NULL, 'in Process', 'ok', '2019-12-08 09:16:25', '5de7aa8c03dcb'),
(13, NULL, 'Delivered', 'sad', '2019-12-08 09:18:16', '5de7aa8c03dcb'),
(14, NULL, 'Delivered', 'sad', '2019-12-08 09:18:33', '5de7aa8c03dcb'),
(15, NULL, 'in Process', 'ds', '2019-12-08 09:19:53', '5de7aa8c03dcb'),
(16, NULL, 'in Process', 'ds', '2019-12-08 09:20:26', '5de7aa8c03dcb'),
(17, NULL, 'Delivered', 'moiddd', '2019-12-08 09:20:47', '5de7aa8c03dcb'),
(18, NULL, 'Delivered', 'okoko', '2019-12-08 09:22:43', '5de7aa8c03dcb'),
(19, NULL, 'Delivered', 'okokmoidddn m', '2019-12-08 09:24:20', '5de7adb16a45b'),
(21, NULL, 'Delivered', 'oko', '2019-12-08 09:27:26', '5de7aa8c03dcb'),
(22, NULL, 'Delivered', 'okokoko sadiq', '2019-12-08 09:29:15', '5de7aa8c03dcb'),
(23, NULL, 'in Process', 'okaod sasdiqsadas', '2019-12-08 09:29:27', '5de7adb16a45b'),
(24, NULL, 'in Process', 'OK irfan here', '2019-12-08 09:34:41', '5de7adb16a45b'),
(25, NULL, 'in Process', 'soon', '2019-12-08 23:22:54', '5ded5e469e2ad'),
(26, NULL, 'Delivered', 'on the way ', '2019-12-09 00:37:24', '5de7adb16a45b');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `stock` varchar(50) NOT NULL,
  `brands_id` int(11) NOT NULL,
  `categorys_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `stock`, `brands_id`, `categorys_id`, `status`) VALUES
(1, 'Honor 9 Lite', 14000, 'touch with keypad ', 'image-1.jpeg', 'In Stock', 1, 1, '1'),
(2, 'Infinix Hot S3', 8999, 'slim', 'image-2.jpeg', 'In Stock', 2, 1, '1'),
(3, 'VIVO V9 Youth', 16990, 'smooth touch', 'image-3.jpeg', 'In Stock', 3, 1, '1'),
(4, 'Moto E4 Plus', 11499, 'slim and curve design ', 'image-4.jpeg', 'In Stock', 4, 1, '1'),
(5, 'Lenovo K8 Plus', 9999, 'touch glass', 'image-5.jpg', 'In Stock', 5, 1, '0'),
(6, 'Hp curve tablet', 20000, 'nice and fast touch', 'image-14.jpeg', 'In Stock', 6, 2, '1'),
(7, 'Apple', 150, 'nice', '6.jpg', 'In Stock', 7, 3, '0'),
(8, 'banana', 40, 'fresh', '10.png', 'In Stock', 7, 3, '0'),
(10, 'Broccoli', 150, 'fresh', '12.png', 'In Stock', 8, 4, '0'),
(11, 'Apple', 20, 'per unit', '11.png', 'In Stock', 7, 4, '0'),
(12, 'Spirit diet', 40, '1 litre', '16.png', 'In Stock', 9, 5, '0'),
(13, 'miranda', 40, '1 litre', '49.png', 'In Stock', 7, 5, '0'),
(14, 'Spirit diet', 40, '1 litre', '15.png', 'In Stock', 10, 6, '0'),
(15, 'appe1', 90, 'tvyytyv', '12.png', 'In Stock', 7, 8, '0'),
(16, 'sadiq', 40, 'aa', '20.png', 'In Stock', 7, 8, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'moid', 'moid@gmail.com', '0336305735', 'gulshan', '9193ce3b31332b03f7d8af056c692b84', '2019-12-07 06:55:53', '0000-00-00 00:00:00'),
(2, 'sadiq', 'sadiq@gmail.com', '03363057355', 'gulshan karachi', 'a38ba7d3409312235f420b8d305f9cf4', '2019-12-09 00:42:38', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_id` (`brands_id`,`categorys_id`),
  ADD KEY `categorys_id` (`categorys_id`);

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
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD CONSTRAINT `ordertrackhistory_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categorys_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
