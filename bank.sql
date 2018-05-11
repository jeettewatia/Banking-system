-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 12:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `account` int(20) NOT NULL,
  `aadhar` int(20) NOT NULL,
  `amount` int(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `account`, `aadhar`, `amount`, `email`, `password`) VALUES
('jeet', 1234, 1234, 13998, 'jeet@gmail.com', '1234'),
('srtk', 9999, 9999, 19998, 'srtk', '9999'),
('srtk', 9999, 9999, 19998, '9999', '9999'),
('', 0, 888, 0, '', ''),
('bhaskar', 678, 555, 20, 'asdfgh', '1234'),
('gautam', 1234, 3333, 2468, 'qwer', '1234'),
('jeet', 1234, 9090, 13560, 'jeet', '123'),
('aa', 1234, 44, 10009, 'aa', '123'),
('as', 12, 3, 10, 'asd', '123'),
('a', 0, 1, 1234, 'as', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
