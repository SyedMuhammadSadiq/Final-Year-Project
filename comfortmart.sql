-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 06:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comfortmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_Id` int(50) NOT NULL,
  `Brand_name` varchar(50) NOT NULL,
  `Product_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budget_recommendation`
--

CREATE TABLE `budget_recommendation` (
  `Budget_recom_Id` int(50) NOT NULL,
  `Product_Id` int(50) NOT NULL,
  `Product_Price` int(50) NOT NULL,
  `Product_Quantity` int(50) NOT NULL,
  `Ip_Address` int(50) NOT NULL,
  `Product_Category_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category_attributes`
--

CREATE TABLE `category_attributes` (
  `Category_Attributes_Id` int(50) NOT NULL,
  `Product_Category_Id` int(50) NOT NULL,
  `Value` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` int(50) NOT NULL,
  `Customer_name` varchar(50) NOT NULL,
  `Customer_Email` varchar(50) NOT NULL,
  `Customer_Number` int(15) NOT NULL,
  `Customer_Username` varchar(50) NOT NULL,
  `Customer_Password` varchar(50) NOT NULL,
  `Customer_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_history`
--

CREATE TABLE `customer_order_history` (
  `Order_History_Id` int(50) NOT NULL,
  `Order_Id` int(50) NOT NULL,
  `Customer_Id` int(50) NOT NULL,
  `Order_Date` date NOT NULL,
  `Invoice_Amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliver_order`
--

CREATE TABLE `deliver_order` (
  `deliver_order_Id` int(11) NOT NULL,
  `shipping_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_Id` int(11) NOT NULL,
  `Invoice_Type_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Invoice_Amount` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_type`
--

CREATE TABLE `invoice_type` (
  `Invoice_Type_Id` int(50) NOT NULL,
  `Online_Payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_Id` int(50) NOT NULL,
  `Customer_Id` int(50) NOT NULL,
  `Order_Date` date NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `Order_Item_Id` int(50) NOT NULL,
  `Order_Id` int(50) NOT NULL,
  `Product_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(50) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Product_Image` text NOT NULL,
  `Product_Price` int(50) NOT NULL,
  `Product_Description` varchar(100) NOT NULL,
  `Product_Quantity` int(50) NOT NULL,
  `Brand_Id` int(50) NOT NULL,
  `Product_Category_Id` int(50) NOT NULL,
  `Admin_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `Product_Attributes_Id` int(50) NOT NULL,
  `Product_Id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `Product_Category_Id` int(50) NOT NULL,
  `Product_Id` int(50) NOT NULL,
  `Product_Category_Name` varchar(50) NOT NULL,
  `Admin_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_Id` int(50) NOT NULL,
  `Customer_Id` int(50) NOT NULL,
  `shipping_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_information`
--

CREATE TABLE `shipping_information` (
  `shipping_Info_Id` int(50) NOT NULL,
  `shipping_Id` int(50) NOT NULL,
  `Customer_Id` int(50) NOT NULL,
  `Home` varchar(50) NOT NULL,
  `Business` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Stock_Id` int(50) NOT NULL,
  `Product_Id` int(50) NOT NULL,
  `Stock_Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Ip_Address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_Id`),
  ADD UNIQUE KEY `Product_Id` (`Product_Id`);

--
-- Indexes for table `budget_recommendation`
--
ALTER TABLE `budget_recommendation`
  ADD PRIMARY KEY (`Budget_recom_Id`),
  ADD UNIQUE KEY `product1` (`Product_Id`),
  ADD UNIQUE KEY `product2` (`Product_Price`),
  ADD UNIQUE KEY `product3` (`Product_Quantity`),
  ADD UNIQUE KEY `User` (`Ip_Address`);

--
-- Indexes for table `category_attributes`
--
ALTER TABLE `category_attributes`
  ADD PRIMARY KEY (`Category_Attributes_Id`),
  ADD UNIQUE KEY `category` (`Product_Category_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `customer_order_history`
--
ALTER TABLE `customer_order_history`
  ADD PRIMARY KEY (`Order_History_Id`),
  ADD UNIQUE KEY `order` (`Order_Id`),
  ADD UNIQUE KEY `customer` (`Customer_Id`),
  ADD UNIQUE KEY `orderdate` (`Order_Date`),
  ADD UNIQUE KEY `invoice` (`Invoice_Amount`);

--
-- Indexes for table `deliver_order`
--
ALTER TABLE `deliver_order`
  ADD PRIMARY KEY (`deliver_order_Id`),
  ADD UNIQUE KEY `Shipping_Deliver` (`shipping_Id`),
  ADD UNIQUE KEY `Order_Deliver` (`Order_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_Id`),
  ADD UNIQUE KEY `Invoice_type` (`Invoice_Type_Id`),
  ADD UNIQUE KEY `Customer` (`Customer_Id`),
  ADD UNIQUE KEY `Order` (`Order_Id`);

--
-- Indexes for table `invoice_type`
--
ALTER TABLE `invoice_type`
  ADD PRIMARY KEY (`Invoice_Type_Id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_Id`),
  ADD UNIQUE KEY `Customer_FK` (`Customer_Id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`Order_Item_Id`),
  ADD UNIQUE KEY `Order_item` (`Order_Id`),
  ADD UNIQUE KEY `Products` (`Product_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`),
  ADD UNIQUE KEY `brand_pro` (`Brand_Id`),
  ADD UNIQUE KEY `cus_product` (`Admin_Id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`Product_Attributes_Id`),
  ADD UNIQUE KEY `products` (`Product_Id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`Product_Category_Id`),
  ADD UNIQUE KEY `pro_category` (`Product_Id`),
  ADD UNIQUE KEY `admin` (`Admin_Id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_Id`),
  ADD UNIQUE KEY `cus_shipping` (`Customer_Id`);

--
-- Indexes for table `shipping_information`
--
ALTER TABLE `shipping_information`
  ADD PRIMARY KEY (`shipping_Info_Id`),
  ADD UNIQUE KEY `shipping_Info` (`shipping_Id`),
  ADD UNIQUE KEY `customer_Info` (`Customer_Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Stock_Id`),
  ADD UNIQUE KEY `pro_stock` (`Product_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Ip_Address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliver_order`
--
ALTER TABLE `deliver_order`
  MODIFY `deliver_order_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Invoice_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `Order_Item_Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_information`
--
ALTER TABLE `shipping_information`
  MODIFY `shipping_Info_Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Product_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
