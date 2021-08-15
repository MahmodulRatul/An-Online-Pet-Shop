-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 11:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_sp21_f`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pid` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pid`, `Quantity`, `pname`, `cname`, `id`, `address`) VALUES
(26, 9, 'adadasddsadasddad', 'Ratul', 3, 'Dhaka,Bangladesh'),
(26, 8, 'fsfs', 'Shahriar', 4, 'Comilla, bangladesh'),
(26, 5, 'adadasddsadasddad', 'Ratul', 5, 'Chittagong, Banglade'),
(30, 5, 'fsfs', 'Ratul', 6, 'Dhaka,Bangladesh'),
(27, 50, 'adadasddsadasddad', 'Ratul', 7, 'Dhaka,Bangladesh'),
(31, 89, 'dddd', 'Ratul', 8, 'Ashuganj, Brahmanbar'),
(30, 100, 'fsfs', 'Ratul', 9, 'Ashuganj, Brahmanbar');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `type_id` int(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `type_id`, `quantity`, `price`, `info`) VALUES
(26, 'adadasddsadasddad', 15, 2, 242342, 'bb'),
(27, 'adadasddsadasddad', 15, 2, 2342340, 'dd'),
(30, 'fsfs', 18, 1, 424, 'dd'),
(31, 'dddd', 18, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `stad` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `sname`, `stad`, `city`, `email`, `num`) VALUES
(23, '  sdadadadadada', 'ssds', 'dfdf', '1111s@gmail.com', '32424242');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) NOT NULL,
  `tname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `tname`) VALUES
(15, 'Cat Medicine'),
(17, 'food ss'),
(18, 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `number` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `ad`, `gender`, `email`, `pass`, `number`, `type`) VALUES
(1, 'Shahariar', 'Ahmed', 'shahariaryan', 'Madhabdi', 'Male', 'shahariarahmed834@gmail.com', 'ABCabcabc1#', '23423424242424', 'admin'),
(2, 'Safia', 'Bhuiyan', 'safia12233', 'Zulululululu', 'Female', 'sdsdsds@gmail.com', 'Qwertyuiop1#', '234242', 'user'),
(4, 'sdsdsdshahahahah', 'dadadada', 'dadadadad', 'ssds', 'Male', 'adsdsds@gmail.com', 'aaaaaaaaaaaA1#', '2424242', 'seller'),
(15, 'ffffffsddss', 'ffdfddfqwdq', 'anik12345', 'ssds', 'Male', 'ccsdsds@gmail.com', 'AAAAAAAAAAAAAa1#', '3454534535', 'deliveryman'),
(16, 'sasas', 'dsdsd', 'dsdddd', 'sdsd', 'Male', 'ddsdsds@gmail.com', 'dddddddddddA#', '234242', 'deliveryman'),
(18, 'sdsdsd', '45454345', 'shahariaryan1', 'ssds', 'Male', 'eesdsds@gmail.com', 'aaaaaaaaaaaaaaA1#', '23242', 'user'),
(23, 'Ratul', 'Kabir', 'Hello1234', 'Dhaka,Bangladesh', 'Male', 'kratul60@gmail.com', 'H123K123l#', '01622165822', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_type` (`type_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
