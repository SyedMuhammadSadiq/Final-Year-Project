-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 03:41 AM
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
(1, 'comfortmart@gmail.com', 'admin123');

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
(12, 'cocacola'),
(13, 'OREO'),
(14, 'CHOCO'),
(15, 'Pakola'),
(16, 'Tapal tea'),
(17, 'Dayfresh'),
(18, 'Nestle'),
(19, 'Olpers'),
(20, 'Pepsi'),
(22, 'Dayfresh');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES
(6, 'Breakfast & Dairy', 0),
(7, 'Milk & Milk Products', 6),
(8, 'Breakfast Cereal & Mixes', 6),
(9, 'Bread & Eggs', 6),
(10, 'Butter & Cheese', 6),
(11, 'Jam Jelly Honey & Spreads', 6),
(12, 'Beverages', 0),
(13, 'Soft Drinks', 12),
(14, 'Juices & Concentrates', 12),
(15, 'Tea & Coffee', 12),
(16, 'Health & Energy Drinks', 12),
(17, 'Spring Water', 12),
(18, 'Cans', 13),
(19, 'Pet Bottles', 13),
(20, 'Juices', 14),
(21, 'Concentrates', 14),
(22, 'Squash & Sharbat', 14),
(23, 'Tea', 15),
(24, 'Green Tea', 0),
(25, 'Coffee', 15),
(26, 'Tea Bags & Others', 15),
(27, 'Chocolate Health Drinks', 16),
(28, 'Health Drinks', 16),
(29, 'Energy Drinks', 16),
(30, 'Pharmacy', 0),
(31, 'Frozen Foods', 0),
(32, 'Household Needs', 0),
(33, 'Baby & Kids', 0),
(34, 'Biscuits Snacks & Chocolates', 0),
(35, 'Grocery & Staples', 0),
(36, 'Home & Kitchen', 0),
(37, ' Furnishing & Home Needs', 0),
(38, 'Personal Care', 0),
(39, 'Pet Care', 0),
(40, 'Ice Creams', 0),
(41, 'Antiseptics', 30),
(42, 'Pain Relievers', 30),
(43, 'OTCs', 30),
(44, 'Health Supplements', 30),
(45, 'Hand & Foot Care', 30),
(46, 'Adult Diapers', 30),
(47, 'Noodles', 0),
(48, 'Instant Noodles', 47),
(49, 'Cup Noodles', 47),
(50, 'Vermicelli', 47),
(51, 'Laundry Detergents', 32),
(52, 'Dishwashers', 32),
(53, 'Cleaners', 32),
(54, 'Cleaning Tools & Brushes', 32),
(55, 'Tissues & Disposables', 32),
(56, 'Premium Home Care', 32),
(57, 'Detergent Powders', 51),
(58, 'Liquid Detergents', 51),
(59, 'Detergent Bars', 51),
(60, 'Dishwashing Bars', 52),
(61, 'Dishwashing Gels & Powder', 52),
(62, 'Toilet Cleaners', 53),
(63, 'Floor Cleaners', 53),
(64, 'Brooms & Mops', 54),
(65, 'Cleaning Accessories', 54),
(66, 'Dustbins', 54),
(67, 'Wipers', 54),
(68, 'Fresheners', 32),
(69, 'Kitchen & Dining Disposable Tissues', 55),
(70, 'Toilet & Other Disposable Tissues', 55),
(71, 'Fabric Care', 56),
(72, 'Wipes Cleaners & Others', 56),
(73, 'Shoe Care', 32),
(74, 'Baby Food', 33),
(75, 'Baby Diapers & Wipes', 33),
(76, 'Baby Skin & Hair Care', 33),
(77, 'Baby Accessories & More', 33),
(78, 'Yogurt', 6),
(79, 'Biscuits & Cookies', 34),
(80, 'Namkeen & Snacks', 34),
(81, 'Chips & Crisps', 34),
(82, 'Chocolates & Candies', 34),
(83, 'Atta & Other Flours', 35),
(84, 'Pulses', 35),
(85, 'Rice & Other Grains', 35),
(86, 'Dry Fruits & Nuts', 35),
(87, 'Cooking Oils', 35),
(88, 'Ghee & Banaspati', 35),
(89, 'Spices', 35),
(90, 'Salt & Sugar', 35),
(91, 'Vinegar & Dressings', 35),
(92, 'ronaldo', 0),
(93, 'CR7 Shoes', 92),
(96, 'Messi Collection', 95),
(97, 'Messi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(55) NOT NULL,
  `userId` int(55) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `productName` varchar(55) DEFAULT NULL,
  `quantity` int(55) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(50) DEFAULT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `productName`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`, `user_address`, `user_number`) VALUES
(33, 27, '18', NULL, 5, '2019-11-26 14:11:29', 'COD', 'Delivered', 'gulshan khi', '03363057355');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(11, 33, 'in Process', 'will let you know then we deliver your order', '2019-11-25 21:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `stock` varchar(255) NOT NULL,
  `brands_id` int(11) NOT NULL,
  `categorys_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `stock`, `brands_id`, `categorys_id`) VALUES
(12, 'Dayfresh Milk Lactose', 40, 'Dayfresh Milk Lactose\r\n', 'dayfresh40.jpg', 'In Stock', 17, 7),
(14, 'Nestle Milkpak 250ml', 35, 'Nestle Milkpak 250ml', 'nestle milkpack 1ltr.jpg', 'In Stock', 18, 7),
(17, 'Nestle Milkpak Litre Pack', 1549, 'Nestle Milkpak UHT Milk\r\n1 Ltr x 12', 'milkpak.png', 'In Stock', 18, 7),
(18, 'Olpers Milk 1.5 Ltr', 185, 'Olpers Milk 1.5 Ltr', 'olpers1.5lrs.jpg', 'In Stock', 19, 7),
(19, 'Olpers Milk Carton', 1620, 'Olpers Milk Carton\r\n1 Ltr x 12', 'olpercarton1ltr.jpg', 'In Stock', 19, 7),
(20, 'Olpers Milk Carton', 1470, 'Olpers Milk Carton \r\n1.5 Ltr', 'olpercarton1ltr.jpg', 'In Stock', 19, 7),
(21, 'Nestle Milkpak Cream', 120, 'Nestle Milkpak Cream', '8961008212975.jpg', 'In Stock', 18, 7),
(22, 'Pepsi Pet Bottle', 130, 'Pepsi Pet Bottle\r\n2.25 Ltr', 'pepsi.jpg', 'In Stock', 20, 13),
(24, 'Pepsi Diet', 40, 'Pepsi Diet 300ML', 'pepsidiet.jpg', 'In Stock', 20, 18),
(25, 'Pepsi Can', 40, 'Pepsi Can 300ML', 'pepsican.jpg', 'In Stock', 20, 18),
(26, 'ice', 400, 'nice', '21.png', 'In Stock', 20, 18),
(29, 'Apple', 10, 'sweet And fresh', '11.png', 'In Stock', 17, 7),
(30, 'Spirit diet', 40, '500ml', '16.png', 'In Stock', 12, 7),
(31, 'Broccoli', 150, 'per unit', '12.png', 'In Stock', 17, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(27, 'moid', 'moid@gmail.com', 2147483647, 'gulshan block 3 karachi', 'a38ba7d3409312235f420b8d305f9cf4', '2019-11-17 08:18:28', NULL),
(28, 'sadiq', 'sadiq@gmail.com', 2147483647, 'gulshan block 3 ', '9e57dc68e299b150b37c939ecb4e5a07', '2019-11-23 10:35:17', NULL),
(29, 'sultan', 'sultan@gmail.com', 2147483647, 'abbas town gulshan karachi', '9af82031d374b97c9e73132a413cbdf5', '2019-11-24 15:02:58', NULL);

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `productId` (`productId`),
  ADD UNIQUE KEY `productName` (`productName`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderId` (`orderId`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

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
