-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 06:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('aakash', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_of_ticket` int(50) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `arrival_time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `id`, `origin`, `destination`, `date`, `username`, `no_of_ticket`, `bus_name`, `arrival_time`) VALUES
(2, 1, 'mumbai', 'delhi', '2020-08-07', 'nitesh', 3, 'tata', 11),
(7, 1, 'mumbai', 'delhi', '2020-07-31', 'chandan', 2, 'tata', 10),
(10, 3, 'mumbai', 'gujrat', '2020-08-07', 'chandan', 1, 'xyz', 8),
(12, 1, 'mumbai', 'delhi', '2020-08-07', 'tarun', 2, 'tata', 10);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `seats` int(30) NOT NULL,
  `fare` int(50) NOT NULL,
  `arrival_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `origin`, `destination`, `seats`, `fare`, `arrival_time`) VALUES
(1, 'tata', 'mumbai', 'delhi', 40, 2000, '10.00'),
(2, 'bajaj', 'mumbai', 'delhi', 30, 2000, '11.00'),
(3, 'xyz', 'mumbai', 'gujrat', 40, 1000, '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fname`, `lname`, `email`) VALUES
(1, 'nitesh', '123', 'nitesh', 'mishra', 'nitesh@gmail.com'),
(2, 'jay', '12345', 'jay', 'jain', 'jay@gmail.com'),
(3, 'jay', '12345', 'jay', 'jain', 'jay@gmail.com'),
(4, 'ayaan', '1234', 'ayaan', 'faruqui', 'ayaan@gmail.com'),
(5, 'tarun', '1234', 'tarun', 'fyg', 'adg@gmail.com'),
(6, 'chandan', '12345', 'chandan', 'mishra', 'c@gmail.com'),
(7, 'deepak', '12345', 'deepak', 'gupta', 'g@gmail.com'),
(8, 'Pratik', '12345', 'pratik', 'ghelot', 'p@gmail.com'),
(9, 'tarun', '1234', 'tarun', 'jodha', 'afsfyjk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
