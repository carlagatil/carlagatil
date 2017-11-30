-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 06:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gracedatabase`
--
CREATE DATABASE IF NOT EXISTS `gracedatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gracedatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_table`
--
-- Creation: Nov 08, 2017 at 07:58 PM
--

DROP TABLE IF EXISTS `inventory_table`;
CREATE TABLE `inventory_table` (
  `i_id` int(11) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_qty` int(11) NOT NULL,
  `i_price` int(11) NOT NULL,
  `i_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `inventory_table`:
--

--
-- Dumping data for table `inventory_table`
--

INSERT INTO `inventory_table` (`i_id`, `i_brand`, `i_qty`, `i_price`, `i_category`) VALUES
(1, 'Ligo', 10, 20, 'Can Goods'),
(2, 'Youngstown', 14, 14, 'Can Goods'),
(3, 'Rebisco', 12, 6, 'Biscuits'),
(4, 'Mega', 10, 15, 'Can Goods'),
(5, 'argentina', 10, 20, 'Can Goods'),
(7, 'Spam', 10, 50, 'Can Goods'),
(8, 'RC', 20, 17, 'Drinks'),
(9, 'Coca Cola', 15, 50, 'Drinks'),
(10, 'Royal', 10, 15, 'Drinks'),
(11, 'Sprite', 15, 50, 'Drinks'),
(12, 'Pepsi', 14, 15, 'Drinks'),
(13, 'Pineapple Juice', 10, 36, 'Drinks'),
(14, 'Cobra', 6, 13, 'Drinks'),
(15, 'Moo', 16, 18, 'Drinks'),
(16, 'Skyflakes', 12, 6, 'Biscuits'),
(17, 'Hansel', 12, 6, 'Biscuits'),
(18, 'Fita', 12, 6, 'Biscuits'),
(19, 'Magic Flakes', 12, 6, 'Biscuits'),
(20, 'Cream O', 12, 6, 'Biscuits'),
(21, 'Nova', 8, 13, 'Snack'),
(22, 'Piatos', 6, 13, 'Snack'),
(23, 'Red Horse', 5, 75, 'Drinks'),
(24, 'asdasdfj', 23, 512, 'Drinks'),
(25, 'Nissin', 24, 5, 'Biscuits'),
(26, 'Chippy', 6, 8, 'Snack'),
(27, 'CDO', 8, 26, 'Can Goods'),
(30, 'Maxx', 24, 1, 'Candy'),
(32, 'Judge', 24, 1, 'Candy'),
(33, 'Fres', 48, 1, 'Candy'),
(34, 'Mentos', 12, 3, 'Candy'),
(36, 'Snow Bear', 60, 1, 'Candy'),
(37, '555', 10, 17, 'Can Goods'),
(39, 'Samyang', 5, 98, 'Noodles'),
(40, 'Baygon', 99, 99, 'Mosquito Repellent'),
(47, 'whisper', 12, 7, 'Sanitary'),
(48, 'baygon katol', 5, 3, 'Mosquito Repellent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_table`
--
ALTER TABLE `inventory_table`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_table`
--
ALTER TABLE `inventory_table`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table inventory_table
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'gracedatabase', 'inventory_table', '{\"sorted_col\":\"`i_id` ASC\"}', '2017-11-16 17:00:01');

--
-- Metadata for database gracedatabase
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
