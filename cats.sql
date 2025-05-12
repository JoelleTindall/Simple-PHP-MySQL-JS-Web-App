-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 03:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cats`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcategories`
--

CREATE TABLE `tcategories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tcategories`
--

INSERT INTO `tcategories` (`id`, `category_name`) VALUES
(3, 'Black'),
(2, 'Orange'),
(1, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `tcats`
--

CREATE TABLE `tcats` (
  `id` int(11) NOT NULL COMMENT 'id of cat',
  `name` varchar(30) NOT NULL COMMENT 'name of cat',
  `description` varchar(45) NOT NULL COMMENT 'description of cat',
  `image` varchar(100) NOT NULL COMMENT 'link to cat image',
  `categoryId` int(11) NOT NULL DEFAULT 1 COMMENT 'Foreign key pointing to tCategories table',
  `price` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tcats`
--

INSERT INTO `tcats` (`id`, `name`, `description`, `image`, `categoryId`, `price`) VALUES
(1, 'Jeff', 'This cat is Jeff', 'cat1.jpg', 2, 1.00),
(2, 'Carl', 'This cat is Carl', 'cat2.jpg', 1, 1.69),
(3, 'James', 'This cat is James', 'cat3.jpg', 3, 0.33);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vcatscategories`
-- (See below for the actual view)
--
CREATE TABLE `vcatscategories` (
`id` int(11)
,`name` varchar(30)
,`description` varchar(45)
,`image` varchar(100)
,`price` decimal(15,2)
,`category_name` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `vcatscategories`
--
DROP TABLE IF EXISTS `vcatscategories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcatscategories`  AS SELECT `tcats`.`id` AS `id`, `tcats`.`name` AS `name`, `tcats`.`description` AS `description`, `tcats`.`image` AS `image`, `tcats`.`price` AS `price`, `tcategories`.`category_name` AS `category_name` FROM (`tcats` join `tcategories` on(`tcats`.`categoryId` = `tcategories`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcategories`
--
ALTER TABLE `tcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `tcats`
--
ALTER TABLE `tcats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcategories`
--
ALTER TABLE `tcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tcats`
--
ALTER TABLE `tcats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of cat', AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tcats`
--
ALTER TABLE `tcats`
  ADD CONSTRAINT `tcats_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `tcategories` (`id`),
  ADD CONSTRAINT `tcats_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `tcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
