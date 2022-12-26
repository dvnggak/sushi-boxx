-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi-ku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `order_id` int(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `salmon` int(100) NOT NULL,
  `shrimp` int(100) NOT NULL,
  `octopus` int(100) NOT NULL,
  `tuna` int(100) NOT NULL,
  `tamago` int(100) NOT NULL,
  `wagyu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`order_id`, `customer`, `contact`, `salmon`, `shrimp`, `octopus`, `tuna`, `tamago`, `wagyu`) VALUES
(2, 'Dev', '123', 1, 11, 1, 1, 1, 1),
(3, 'Rinaldi', '08151294287', 1, 1, 1, 0, 0, 0),
(4, 'Putri Regina', '0813681512317', 1, 2, 6, 90, 1, 5),
(5, 'Jali', '0813687561231', 1, 1, 0, 0, 0, 1),
(6, 'Dani', '0812675122227878', 1, 1, 2, 3, 1, 1),
(8, 'Reza', '071112341234', 1, 1, 1, 1, 5, 1),
(9, 'Jono', '12345678', 1, 0, 0, 0, 0, 0),
(11, 'Fatih', '9876761762', 1, 1, 1, 1, 2, 1),
(12, 'Jaki', '081122312211', 1, 2, 1, 0, 0, 1),
(13, 'Hendra', '0987617823811', 1, 0, 1, 1, 1, 0),
(14, 'Angga', '9898971', 1, 1, 2, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `name`, `email`, `category`, `message`) VALUES
(2, 'tes', 'tees@gmail.com', 'Food Experience', '              wer'),
(3, 'Devangga Kertawijaya', 'devanggakertawijaya@gmail.com', 'Food Experience', '              de'),
(4, 'admin', 'asd2@gm.com', 'Food Experience', '          asd    '),
(5, 'test', 'devanggakertawijaya@gmail.com', '3', '        tes'),
(6, 'devanggakertawijaya@gmail.com', 'devanggakertawijaya@gmail.com', 'Food Experience', '    asd          '),
(7, 'Jono', 'jono@gmail.com', 'Food Experience', 'Wah fitur nya keren              '),
(8, 'admin', 'devanggakertawijaya@gmail.com', 'Food Experience', '              asd'),
(9, '', '', 'Food Experience', '              ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
