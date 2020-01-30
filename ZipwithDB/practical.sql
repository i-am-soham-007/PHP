-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 06:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_master`
--

CREATE TABLE `registration_master` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hobby` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm` varchar(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_master`
--

INSERT INTO `registration_master` (`id`, `firstname`, `lastname`, `dob`, `gender`, `email`, `hobby`, `password`, `confirm`, `image`) VALUES
(1, 'Purvi', 'Jadav', '2019-11-22', 'Female', 'purvi@gmail.com', 'Reading,Travelling,Singing,Dancing', 'purvi', 'purvi', 'Koala.jpg'),
(5, '90kh', '9uio', '2019-11-15', 'Female', 'purv@gmail.com', 'Travelling,Singing,', 'purv', 'purv', 'Lighthouse.jpg'),
(6, '25', '15', '2019-11-22', 'Female', 'purvijdp@gmail.com', 'Travelling,Singing,', 'purvi', 'purvi', 'Tulips.jpg'),
(7, 'pj', 'rj', '2019-11-27', 'Male', 'purvi@gmail.com', 'Reading,Travelling', 'jkl', 'jkl', 'Lighthouse.jpg'),
(8, 'qwerty', 'asdfgh', '2019-11-28', 'Male', 'qwerty@gmail.com', 'Dancing,Cooking,', 'qwerty', 'qwerty', 'Jellyfish.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_master`
--
ALTER TABLE `registration_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_master`
--
ALTER TABLE `registration_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
