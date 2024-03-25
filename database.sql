-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 06:14 AM
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
-- Database: `registration2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `stateprovince` varchar(100) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telephone`, `address1`, `address2`, `city`, `stateprovince`, `zipcode`, `username`, `password`) VALUES
(1, 'test', 'test@gmail.com', '342342', '3423 fsdaf', '3424 fsdaf', 'fsdaf', 'afsa', '34242', 'afsdaf', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(2, 'test2', 'test2@gmail.com', '32432', '34234 fdasf', 'fdsaf', 'fdsaf', 'afa', '3222', 'test2', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(3, 'test2111', 'test21@gmail.com', '32432', '34234 fdasf', 'fdsaf', 'fdsaf', 'afa', '3222', 'test2', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(4, 'testt444', 'test211@gmail.com', '32432', '34234 fdasf', 'fdsaf', 'fdsaf', 'afa', '3222', 'test2', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(5, 'testt444', 'test2111@gmail.com', '32432', '34234 fdasf', 'fdsaf', 'fdsaf', 'afa', '3222', 'test2', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(6, 'Escaler', 'escaler@gmail.com', '4234', '234 fsdaf', '3432 fsaf', 'faf', 'fsdaf', '234', 'test1234', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(7, 'Escaler', 'escaler123@gmail.com', '4234', '234 fsdaf', '3432 fsaf', 'faf', 'fsdaf', '234', 'test1234', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(8, 'Escaler', 'escaler123444@gmail.com', '4234', '234 fsdaf', '3432 fsaf', 'faf', 'fsdaf', '234', 'test1234', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(9, 'Escaler2', '1111@gmail.com', '4234', '234 fsdaf', '3432 fsaf', 'faf', 'fsdaf', '234', 'test1234', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(10, 'testssssss', 'testsss@gmail.com', '3432', '3423 fsda', '3423 fdsaf', 'test', 'testsss', '3424', 'test', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f'),
(11, 'Escaler Cunan', 'escaleaaar@gmail.com', '12323', '12313 test', '23123', 'afdsa', 'fsdaf', '34234', 'Escaler', '7de17cecdd0235c4b406bdaa9ccd68a2ef26128f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
