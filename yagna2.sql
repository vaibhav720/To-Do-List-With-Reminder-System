-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 02:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yagna`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(50) NOT NULL,
  `task` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emailstatus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `task`, `dates`, `message`, `status`, `email`, `emailstatus`) VALUES
(5, 'vaibhav', '2020-08-13', 'asiddjqfi', 1, 'parikhvaibhav19@gmail.com', 0),
(6, 'vaibhav', '2020-08-13', 'yagna', 1, 'parikhvaibhav19@gmail.com', 0),
(7, 'rohan', '2020-08-13', 'yagna', 1, 'rohanlahori99@gmail.com', 0),
(8, 'assignment', '2020-08-14', 'maths', 1, 'rohanlahori99@gmail.com', 0),
(9, 'practical', '2020-08-14', 'its a physics one', 1, 'rohanlahori99@gmail.com', 0),
(10, 'bhumi', '2020-08-20', 'bhumi', 1, 'sharmabhumi2000@gmail.com', 1),
(11, 'bhumi', '2020-08-14', 'bhumi', 1, 'sharmabhumi2000@gmail.com', 0),
(12, 'assignment', '2020-08-27', 'maths', 1, 'dharasatapara28@gmail.com', 1),
(13, 'assignmnet', '2020-08-15', 'dhara', 1, 'dharasatapara28@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `username`, `email`, `password`, `status`) VALUES
(15, 'rohanlahori', 'rohan', 'rohanlahori99@gmail.com', 'rohan', 1),
(34, 'bhumi', 'bhumi', 'sharmabhumi2000@gmail.com', 'bhumi', 1),
(48, 'patelyagna', 'yagna', 'yagnapatel1711@gmail.com', 'yagna', 1),
(51, 'soham', 'soham', 'sohampatel9403@gmail.com', 'soham', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
