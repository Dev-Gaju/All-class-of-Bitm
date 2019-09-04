-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 06:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `rawtable`
--

CREATE TABLE `rawtable` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawtable`
--

INSERT INTO `rawtable` (`id`, `username`, `email`, `password`, `phoneNumber`) VALUES
(0, 'Gaju', 'ahmed@gmail.com', '123456', 1782057366),
(0, 'Gaju ahmed', 'gazu15-468@diu.edu.bd', '123456', 78563245),
(0, 'Gaju ahmed', 'gazu15-468@diu.edu.bd', '123456', 78563245),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, '', '', '', 0),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, '', '', '', 0),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, '', '', '', 0),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, 'hasan', 'hasan@gmail.com', '', 1236547952),
(0, 'kishor', 'kishor@gmail.com', '123456789', 1236547952);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
