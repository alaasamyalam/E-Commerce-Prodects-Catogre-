-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 02:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datab`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `catogre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`prod_id`, `name`, `description`, `price`, `photo`, `catogre`) VALUES
(54, 'Alaaaaaaa', 'asd a assda asdsa', '1213', 'Chrysanthemum.jpg', 'Care'),
(55, 'asd', 'wwwwwww', '123', 'Desert.jpg', 'P '),
(56, 'asd', 'wwwwwww', '123', 'Desert.jpg', 'P '),
(57, 'phone J7', 'RAM 3 GB   ', '3050', 'Penguins.jpg', 'Phone');

-- --------------------------------------------------------

--
-- Table structure for table `catogre`
--

CREATE TABLE `catogre` (
  `id` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `sup` varchar(10) NOT NULL,
  `sup_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catogre`
--

INSERT INTO `catogre` (`id`, `type`, `sup`, `sup_id`) VALUES
('1', 'Care', 'C 1', '1'),
('1', 'Care', 'C 2', '1'),
('1', 'Care', 'C 3', '1'),
('1', 'Care', 'C 4', '1'),
('1', 'Care', 'C 5', '1'),
('2', 'Phone', 'P 1', '2'),
('2', 'Phone', 'P 2', '2'),
('2', 'Phone', 'P 3', '2'),
('3', 'Closes', 'Cl 1', '1'),
('3', 'Closes', 'Cl 2', '3'),
('3', 'Closes', 'Cl 3', '3'),
('3', 'Closes', 'Cl 4', '3'),
('4', 'Beald', 'B 1', '4'),
('4', 'Beald', 'B 2', '4'),
('4', 'Beald', 'B 3', '4'),
('5', 'Arm', 'A 1', '5'),
('5', 'Arm', 'A 2', '5'),
('5', 'Arm', 'A 3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `user_name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`user_name`, `pwd`, `type`) VALUES
('alaa', '123', 'admin'),
('ali', '555', 'use');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `catogre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `name`, `description`, `price`, `photo`, `catogre`) VALUES
(9, 'Alaaaaaaa', 'asd a assda asdsa', '1213', 'Chrysanthemum.jpg', 'Care'),
(13, 'asd', 'wwwwwww', '123', 'Desert.jpg', 'P '),
(14, 'qqq', 'ewfadssadsad', '1213', 'slideimage1.gif', 'A '),
(15, 'qqq', 'ewfadssadsad', '1213', 'slideimage1.gif', 'A '),
(20, 'phone J7', 'RAM 3 GB   ', '3050', 'Penguins.jpg', 'Phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `catogre`
--
ALTER TABLE `catogre`
  ADD PRIMARY KEY (`id`,`sup`,`sup_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`user_name`,`pwd`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
