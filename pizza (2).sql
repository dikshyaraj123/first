-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2024 at 08:36 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_path`) VALUES
(31, 'gallery/m4.png'),
(32, 'gallery/p6.jpg'),
(33, 'gallery/p2.jpg'),
(34, 'gallery/m10.png'),
(36, 'gallery/download (2).jpg'),
(37, 'gallery/images (15).jpg'),
(38, 'gallery/pngtree-delicious-pizza-creative-photography-png-image_6687083.png'),
(40, 'gallery/download (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `orders` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `orders`, `price`, `status`) VALUES
(189, 'Dixa', 'Egg pizza', '600', 'Confirmed'),
(184, 'prajina', 'Egg pizza', '600', 'Confirmed'),
(185, 'dhiraj', 'black olives', '678', 'Confirmed'),
(190, 'Dixa', 'peri peri pizza', '678', 'Confirmed'),
(188, 'Dixa', 'black olives', '600', 'Confirmed'),
(191, 'Dixa', 'tomato pizza', '200', 'Confirmed'),
(193, 'Dixa', 'Egg pizza', '600', 'Confirmed'),
(194, 'Dixa', 'veg pizza', '450', 'Confirmed'),
(197, 'Dixa', 'Egg pizza', '600', 'Confirmed'),
(198, 'Dixa', 'Margarete pizza', '345', 'Confirmed'),
(199, 'Dixa', 'Egg pizza', '600', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_menu`
--

DROP TABLE IF EXISTS `pizza_menu`;
CREATE TABLE IF NOT EXISTS `pizza_menu` (
  `id` int(34) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image_path` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza_menu`
--

INSERT INTO `pizza_menu` (`id`, `name`, `price`, `image_path`) VALUES
(26, 'pepperoni', 345, 'uploads/m4.png'),
(27, 'Egg pizza', 600, 'uploads/m5.jpeg'),
(28, 'veg pizza', 450, 'uploads/m11.png'),
(29, 'black olives', 600, 'uploads/images (6).jpg'),
(31, 'paneer pizza', 345, 'uploads/images (10).jpg'),
(33, 'Margarete pizza', 345, 'uploads/download (8).jpg'),
(34, 'peri peri pizza', 678, 'uploads/images (5).jpg'),
(36, 'tomato pizza', 200, 'uploads/download (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin12@gmail.com', '12345', 'admin'),
(2, 'dixa', 'rajdixa24@gmail.com', '1234', 'user'),
(3, 'Ram', 'ram12@gmail.com', '12345', 'user'),
(4, 'pari', 'pari12@gmail.com', '4321', 'user'),
(46, 'deepak', 'adwfe@gmail.com', '12345', 'user'),
(47, 'chandan', 'chandan12@gamil.com', '1234', 'user'),
(48, 'Dixa', 'dixa@gmail.com', '12345', 'user'),
(50, 'dhiraj', 'dhiraj@gmail.com', '12345', 'user'),
(51, 'prajina', 'prajina@gmail.com', '12345', 'user'),
(52, 'shyam', 'shyam12@gmail.com', '12345', 'user'),
(53, 'rams', 'ram12@gmail.com', '123', 'user'),
(54, 'sita', 'sita12@gmail.com', '98765', 'user'),
(55, 'manshi', 'manshi12@gmail.com', '12345', 'user'),
(58, 'manu', 'manu12@gmail.com', '12345', 'user'),
(59, 'priya', 'priya12@gmail.com', '12345', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
