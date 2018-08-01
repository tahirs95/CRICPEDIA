-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 05:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `Country` varchar(20) NOT NULL,
  `Format_id` int(10) NOT NULL,
  `Rating` int(10) NOT NULL,
  `Points` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`Country`, `Format_id`, `Rating`, `Points`) VALUES
('Australia', 20, 114, 2390),
('Australia', 30, 119, 5958),
('England', 20, 113, 2481),
('England', 30, 107, 5658),
('India', 20, 126, 3284),
('India', 30, 110, 5278),
('New Zealand', 20, 132, 2635),
('New Zealand', 30, 113, 4631),
('Pakistan', 20, 113, 3604),
('Pakistan', 30, 89, 4555),
('South Africa', 20, 119, 2734),
('South Africa', 30, 115, 5855),
('Srilanka', 20, 94, 2630),
('Srilanka', 30, 101, 5657),
('West Indies', 20, 116, 2547),
('West Indies', 30, 88, 2919);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`Country`,`Format_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
