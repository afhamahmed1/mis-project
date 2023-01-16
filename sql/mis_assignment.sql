-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `email`) VALUES
(1, 'sasdsdsd', 'sadsdsd', 'sdsadasd', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `monthly_target` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `status`, `name`, `email`, `password`, `image`, `phone`, `country`, `city`, `address`, `monthly_target`, `created_at`) VALUES
(1, 1, 'manager', 'afham@gmail.com', '123', '', '', '', '', '', 0, '2023-01-09 07:12:10'),
(2, 0, 'employee1', 'employee1@gmail.com', '123', '', '', '', '', '', 0, '2023-01-10 07:13:02'),
(3, 0, 'employee2', 'employee2@gmail.com', '123', '', '', '', '', '', 0, '2023-01-11 04:43:53'),
(4, 0, 'employee3', 'employee3@gmail.com', '123', '', '', '', '', '', 0, '2023-01-11 04:43:53'),
(5, 0, 'employee4', 'employee4@gmail.com', '123', '', '', '', '', '', 0, '2023-01-11 04:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `extended_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `sales_order_id`, `product_id`, `quantity`, `extended_price`) VALUES
(1, 1, 1, 14, 25),
(2, 2, 2, 20, 42),
(3, 1, 3, 12, 49),
(4, 2, 1, 1, 25),
(5, 2, 2, 2, 34),
(6, 3, 2, 23, 30),
(7, 4, 2, 23, 53),
(8, 5, 6, 6, 0),
(9, 5, 4, 3, 0),
(10, 6, 6, 10, 0),
(11, 6, 5, 1, 0),
(12, 6, 2, 3, 0),
(13, 7, 4, 13, 0),
(14, 7, 6, 4, 0),
(15, 8, 5, 9, 0),
(16, 8, 7, 1, 0),
(17, 8, 2, 2, 0),
(18, 9, 6, 4, 0),
(19, 9, 5, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `price`, `quantity`, `description`, `status`, `created_at`) VALUES
(1, 'product 1', '11.00', '12.32', 100, 'this is product 1', 0, '2023-01-10 07:24:38'),
(2, 'product', '20.00', '23.00', 100, 'this is product 2', 0, '2023-01-10 07:59:25'),
(3, 'product', '30.00', '38.23', 100, 'this is product 3', 0, '2023-01-10 08:00:34'),
(4, 'product', '40.00', '45.00', 50, 'this is product 4', 0, '2023-01-11 04:45:29'),
(5, 'product 5', '50.00', '56.00', 0, 'this is product 5', 0, '2023-01-11 04:45:29'),
(6, 'product 6', '39.00', '50.00', 0, 'this is product 6', 0, '2023-01-11 04:46:21'),
(7, 'product 7', '48.00', '60.00', 0, 'this is product 7', 0, '2023-01-11 04:46:21'),
(8, 'Product 8', '40.00', '45.00', 0, '', 1, '2023-01-11 19:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `employee_id`, `store_id`, `order_date`, `customer_id`, `created_at`) VALUES
(1, 2, 1, '2023-01-10 07:23:55', 1, '2023-01-10 07:23:55'),
(2, 2, 1, '2023-01-04 07:25:25', 1, '2023-01-10 07:25:25'),
(3, 2, 1, '2023-01-03 09:09:48', 1, '2023-01-10 09:09:48'),
(4, 3, 2, '2023-02-11 04:51:04', 1, '2023-01-10 09:09:48'),
(5, 3, 2, '2023-02-11 04:51:09', 1, '2023-01-11 04:42:39'),
(6, 3, 2, '2023-02-11 04:51:53', 1, '2023-01-11 04:51:53'),
(7, 4, 3, '2023-03-11 04:51:53', 1, '2023-01-11 04:51:53'),
(8, 5, 2, '2023-03-11 04:54:25', 1, '2023-01-11 04:54:25'),
(9, 5, 2, '2022-04-11 04:54:25', 1, '2023-01-11 04:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `quantity`, `store_id`) VALUES
(1, 1, 20, 1),
(2, 2, 42, 1),
(3, 3, 58, 1),
(4, 4, 100, 1),
(5, 5, 100, 1),
(6, 6, 100, 1),
(7, 7, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `phone`, `email`, `address`, `city`, `zip_code`) VALUES
(1, 'store 1', '2947291', 'store1@gmail.com', '', 'sdadsd', 13),
(2, 'store 2', '27492894', 'store2@gmail.com', '', '', 0),
(3, 'store 3', '92374927', 'store3@gmail.com', '', '', 0),
(4, 'store 4', '9359282', 'store4@gmail.com', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_order_fk` (`sales_order_id`),
  ADD KEY `order_products_fk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_employee_fk` (`employee_id`),
  ADD KEY `sales_store_fk` (`store_id`),
  ADD KEY `sales_customer_fk` (`customer_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_product_fk` (`product_id`),
  ADD KEY `stock_store_fk` (`store_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_order_fk` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order` (`id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `sales_store_fk` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stock_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_store_fk` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
