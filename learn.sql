-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 07:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `password`, `roll`, `created_at`) VALUES
(1, 'qsx', 'd67fg@gmail.com', '123456789', 'User', '2018-04-28 01:56:00'),
(2, 'dfg', 'dfg@gmail.com', '123456789', 'User', '2018-04-29 01:33:55'),
(3, 'soumitra', 'soumitra@gmail.com', '11111111', 'User', '2018-04-29 01:50:20'),
(4, 'ed', 'dfeg@gmail.com', '123456789', 'User', '2018-05-02 03:02:54'),
(5, 'wsx', 'dqafg@gmail.com', '123456789', 'User', '2018-05-02 03:04:27'),
(6, 'qsd', 'dfgaz@gmail.com', '123456789', 'User', '2018-05-02 03:05:14'),
(7, 'abc', 'abc@gmail.com', '123456789', 'User', '2018-05-04 13:04:58'),
(8, 'soumitracode', 'psoumitra22@gmail.com', '$oumitrapatra', 'User', '2018-05-04 14:26:58'),
(9, 'soumitracodex', 'soumitracodex@gmail.com', '123456789', 'User', '2018-05-06 14:53:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
