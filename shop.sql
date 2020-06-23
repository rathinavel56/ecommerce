-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 09:14 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `foreign_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `created`, `modified`, `foreign_id`, `name`, `class`) VALUES
(26, '2019-12-06 15:20:19', '2019-12-06 15:20:19', 12, 'light-horizontal-single-stage-centrifugal-pump-500x500.jpg', 'product'),
(33, '2019-12-06 17:44:20', '2019-12-06 17:44:20', 12, '', 'product'),
(38, '2019-12-07 16:25:40', '2019-12-07 16:25:40', 13, 'end-suction-centrifugal-pump-500x500.jpg', 'product'),
(39, '2019-12-07 16:25:59', '2019-12-07 16:25:59', 13, 'light-horizontal-single-stage-centrifugal-pump-500x500.jpg', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `sort`, `active`, `created`, `modified`) VALUES
(1, 'Centrifugal Pump', 'centrifugal-pump', 'Centrifugal Pump', 100, 1, '2013-10-18 11:23:04', '2019-10-28 16:05:18'),
(2, 'Water Pump', 'water-pump', 'Water Pump', 100, 1, '2013-10-23 03:11:57', '2019-10-28 16:06:15'),
(3, 'Split Case Pump', 'split-case-pump', 'Split Case Pump', NULL, 1, '2019-10-28 16:07:00', '2019-10-28 16:07:00'),
(4, 'Beacon Pump', 'beacon-pump', 'Beacon Pump', NULL, 1, '2019-10-28 16:07:38', '2019-10-28 16:07:38'),
(5, 'Ring Section Pump', 'ring-section-pump', 'Ring Section Pump', NULL, 1, '2019-10-28 16:08:22', '2019-10-28 16:08:22'),
(6, 'SS Industrial Shaft', 'ss-industrial-shaft', 'SS Industrial Shaft', NULL, 1, '2019-10-28 16:09:00', '2019-10-28 16:09:00'),
(7, 'Pump Impeller', 'pump-impeller', 'Pump Impeller', NULL, 0, '2019-10-28 16:09:41', '2019-10-28 16:09:41'),
(8, 'Uniglide Assembly Dewatering Pump', 'uniglide-assembly-dewatering-pump', 'Uniglide Assembly Dewatering Pump', NULL, 1, '2019-10-28 16:10:30', '2019-10-28 16:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `productoption_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `productoption_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT 0.00,
  `price` decimal(8,2) UNSIGNED DEFAULT NULL,
  `subtotal` decimal(8,2) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT 0.00,
  `order_item_count` int(11) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `shipping` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) UNSIGNED DEFAULT NULL,
  `shipping_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creditcard_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creditcard_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creditcard_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creditcard_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remote_host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referer_cookie` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `referer_session` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `productoptions`
--

INSERT INTO `productoptions` (`id`, `product_id`, `name`, `value`, `price`, `weight`, `active`, `views`, `created`, `modified`) VALUES
(1, 17, 'brown 8', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(2, 17, 'brown 9', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(3, 17, 'brown 10', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(4, 15, 'xl', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(5, 15, 'sm', NULL, '9.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(6, 15, 'md', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(7, 15, 'l', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `sub_category_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  `description` text DEFAULT NULL,
  `keyword` longtext DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `meta_description` longtext DEFAULT NULL,
  `price` longtext DEFAULT NULL,
  `offer_price` text DEFAULT NULL,
  `offer_date` date DEFAULT NULL,
  `weight` longtext DEFAULT NULL,
  `quantity` longtext DEFAULT NULL,
  `motor_phase` longtext DEFAULT NULL,
  `stages` longtext DEFAULT NULL,
  `head` longtext DEFAULT NULL,
  `power_source` longtext DEFAULT NULL,
  `brand` longtext DEFAULT NULL,
  `max_flow_rate` longtext DEFAULT NULL,
  `motor_speed` longtext DEFAULT NULL,
  `pump_size` longtext DEFAULT NULL,
  `temperature` longtext DEFAULT NULL,
  `frequency` longtext DEFAULT NULL,
  `discharge_size_millimeter` longtext DEFAULT NULL,
  `flanges` longtext DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created`, `modified`, `slug`, `category_id`, `sub_category_id`, `name`, `description`, `keyword`, `title`, `meta_description`, `price`, `offer_price`, `offer_date`, `weight`, `quantity`, `motor_phase`, `stages`, `head`, `power_source`, `brand`, `max_flow_rate`, `motor_speed`, `pump_size`, `temperature`, `frequency`, `discharge_size_millimeter`, `flanges`, `is_active`, `is_home`) VALUES
(3, '2015-12-31 07:40:21', '2015-12-31 07:40:21', NULL, 3, 8, 'Product 3', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '2015-12-31 07:38:43', '2015-12-31 07:38:43', NULL, 1, 1, 'Product 4', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, '2015-12-31 07:39:33', '2015-12-31 07:39:33', NULL, 1, 2, 'Product 5', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, '2015-12-31 07:40:21', '2015-12-31 07:40:21', NULL, 3, 8, 'Product 6', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, '2015-12-31 07:38:43', '2015-12-31 07:38:43', NULL, 1, 1, 'Product 7', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, '2015-12-31 07:39:33', '2015-12-31 07:39:33', NULL, 1, 2, 'Product 8', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, '2015-12-31 07:40:21', '2015-12-31 07:40:21', NULL, 3, 8, 'Product 9', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, '2019-11-03 10:14:16', '2019-11-03 10:14:16', 'tree', 1, NULL, 'Name---', 'Description', 'Keyword', '', 'Meta Description', '1', NULL, NULL, '', '3', '4', '5', '6', NULL, '8', '9', '', '', '12', '13', '14', '15', NULL, 0),
(11, '2019-11-03 10:19:52', '2019-11-03 10:19:52', 'tree4556', 1, NULL, 'Name1-2--', 'Description-------', 'Keyword---', '', 'Meta Description---1', '1', NULL, NULL, '2', '3', '4', '5', '6', NULL, '8', '9', '10', '11', '12', '13', '14', '15', 1, 0),
(12, '2019-12-04 08:12:11', '2019-12-06 17:44:20', 'Name---', 1, NULL, 'Name---', 'sad', 'ads', 'werwer', 'ad', '1.5', '', '2019-12-06', '15', '1', '3', '4', '5', '5', '5', '5', '564', '5', '5', '5', '5', '5', 1, 1),
(13, '2019-12-04 10:42:50', '2019-12-07 05:44:40', 'duo-glide-water-pump', 1, NULL, 'Duo Glide Water Pump', 'Matching up with the requirements of our clients, we are involved in offering Duo Glide Water Pump.', 'Duo Glide Water Pump', 'Duo Glide Water Pump', 'Duo Glide Water Pump', '2.86 Lakhs', '2000', '2019-12-31', '100', '1', 'Single Phase', 'Multi-Stage', '1', 'Electric', 'B & C Techno Solutions', '0.5 to 28.0 m3/hr', '5', '1', '1', '1', '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 0,
  `login_count` int(11) UNSIGNED DEFAULT 0,
  `login_last` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `phone`, `email`, `password`, `uuid`, `active`, `login_count`, `login_last`, `created`, `modified`) VALUES
(1, 'admin', 'Admin', 'Admin', '818-111-1111', 'info@example.com', '$2y$10$CgM4vIxsvxgDGR3A0.0tfuFNvBDw8EAVYWPZBV5eusI00qqeaofjm', '', 1, 27, '2019-12-08 07:28:25', '2014-12-10 11:19:57', '2019-12-08 07:28:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modified` (`modified`),
  ADD KEY `category_id` (`product_id`),
  ADD KEY `brand_id` (`value`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active` (`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
