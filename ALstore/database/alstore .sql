-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 06:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(20) NOT NULL,
  `a_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Shravan', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_pass` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` text NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_contact`, `customer_address`) VALUES
(1, 'Nagu', 'shravanbangera14@gmail.com', '123', 'kudla', '987654321', 'prp');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_desc`, `product_keywords`) VALUES
(20, 1, '2020-02-18 09:24:39', 'Shampoos', 'hairwash.jpg', 'hairwash2.jpg', 449, '<p>A blend of herbs and oils</p>\r\n<p>Free from harmful ingredients</p>', 'Shampoos'),
(21, 2, '2020-02-18 09:26:19', 'Skin cream', 'skincream.jpg', 'skincream2.jpg', 449, '<p>Repairs damaged skin</p>\r\n<p>Prevents early cell aging</p>\r\n<p>No paraben</p>', 'Creams'),
(22, 2, '2020-02-20 05:55:59', 'Face cream', 'facecream.jpg', 'facecream2.jpg', 449, '<p>Fights dry skin</p>\r\n<p>Daily sun protection</p>\r\n<p>No paraben</p>', 'Face cream'),
(23, 3, '2020-02-18 09:28:34', 'Goat milk soap', 'goatsoap.jpg', 'goatsop2.jpg', 199, '<p>Premium Quality</p>\r\n<p>Rich in charcol</p>\r\n<p>Gently removes dead skin</p>', 'Soap'),
(24, 3, '2020-02-18 09:29:44', 'Charcol soap', 'charsoap.jpg', 'charcolsoap2.jpg', 199, '<p>Premium Quality</p>\r\n<p>Rich in charcol</p>\r\n<p>Controls oil</p>', 'Soap'),
(25, 4, '2020-02-18 09:30:45', 'Hair oil', 'hairoil.jpg', 'hairoil.jpg', 314, '<p>100% pure</p>\r\n<p>Free from chemicals</p>', 'Oils'),
(26, 4, '2020-02-18 09:32:07', 'Coconut virgin oil', 'coconutoil.jpg', 'coconutoil.jpg', 269, '<p>100% pure virgin coconut oil</p>\r\n<p>Packed with many health benefits</p>', 'Oils'),
(27, 5, '2020-02-18 09:33:55', 'Aloe vera gel', 'aloegel.jpg', 'aloegel.jpg', 224, '<p>99% Pure aloe vera gel</p>\r\n<p>Contains 100% bio activs</p>\r\n<p>Free from harmful ingredients</p>', 'Gel'),
(28, 5, '2020-02-18 09:35:48', 'Rose water', 'rosewater.jpg', 'rosewater.jpg', 269, '<p>100% pure from chemicals</p>\r\n<p>Contains health benefits</p>', 'Oils'),
(29, 6, '2020-02-18 09:37:28', 'Combo-Hair oil,rose water,gel', 'combo2.jpg', 'combo2.jpg', 807, '<p>Combat dry skin and hair related problems</p>', 'Combo'),
(30, 6, '2020-02-18 09:38:26', 'Combo-Coconut oil,rose water,gel', 'combo1.jpg', 'combo1.jpg', 762, '<p>Combat dry skin and hair related problems</p>', 'Combo');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'SHAMPOOS', 'SHAMPOOS'),
(2, 'CREAMS', 'CREAMS'),
(3, 'SOAPS', 'SOAPS'),
(4, 'OILS', 'OILS'),
(5, 'ESSENTIALS', 'ESSENTIALS'),
(6, 'COMBO', 'COMBO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
