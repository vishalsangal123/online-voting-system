-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 06:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL,
  `foundation year` int(11) NOT NULL,
  `symbol name` varchar(50) NOT NULL,
  `aadhar` bigint(16) NOT NULL,
  `verify` int(20) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `role`, `status`, `votes`, `foundation year`, `symbol name`, `aadhar`, `verify`, `age`) VALUES
(1, 'Indian National congress(INC)', 9654785512, 'congress', 'Delhi', 'congress.jpg', 2, 1, 2, 1885, 'Hand', 7895641236987456, 5252, 25),
(2, 'Bhartiya Janta Party(BJP)', 7896548784, 'bjp', 'Lucknow', 'Bharatiya-Janata-Party-Horoscope.jpg', 2, 1, 1, 1980, 'Lotus', 1236987458967895, 5252, 30),
(3, 'Bahujan Samaj party(BSP)', 9978456875, 'bahujan', 'noida', 'elephant.png', 2, 0, 0, 1984, 'Elephant', 1236987458795689, 5252, 35),
(4, 'Samajwadi Party', 8879564289, 'samajvadi', 'uttarpradesh', 'download.jpg', 2, 1, 0, 1992, 'Cycle', 1234567899874568, 5252, 40),
(40, 'Aam Aadmi Party(AAP)', 8514756254, 'aam', 'Mumbai', 'download (1).jpg', 2, 0, 4, 2012, 'Broom', 7892546123654789, 5252, 48),
(51, 'Vansh Sangal', 9875489625, 'shamli', 'Delhi', 'image.jpg', 1, 1, 0, 0, '', 7895874512365478, 5252, 20),
(54, 'Vishal Sangal', 9874563214, 'vishal', 'Shamli', 'download3.jpg', 1, 1, 0, 0, '', 8974561232587459, 5252, 19),
(55, 'Vishnu Kumar', 9874568524, '1234', 'Dehradun', 'download4.jpg', 1, 0, 0, 0, '', 1234567899876543, 5252, 24),
(56, 'Sanjeev', 9874562587, '1234', 'Lucknow', 'download3.jpg', 1, 0, 0, 0, '', 1234567891234567, 5252, 25),
(57, 'vishal sangal', 9987456588, '1234', 'ss', '', 1, 1, 0, 0, '', 1234567897894568, 5252, 19),
(58, 'sggdg', 9878957895, '1234', 'ddd', '', 1, 0, 0, 0, '', 1234567898745985, 5878, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
