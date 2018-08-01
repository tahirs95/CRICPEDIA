-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 10:12 PM
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
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `Match_id` int(10) NOT NULL,
  `Team1` varchar(20) NOT NULL,
  `Team2` varchar(20) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Match_date` date NOT NULL,
  `Result` varchar(100) NOT NULL,
  `T1_score` varchar(30) NOT NULL,
  `T2_score` varchar(30) NOT NULL,
  `Format_id` int(10) NOT NULL,
  `T1_batting` varchar(30) NOT NULL,
  `T1_bowling` varchar(30) NOT NULL,
  `T2_batting` varchar(30) NOT NULL,
  `T2_bowling` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`Match_id`, `Team1`, `Team2`, `Venue`, `Match_date`, `Result`, `T1_score`, `T2_score`, `Format_id`, `T1_batting`, `T1_bowling`, `T2_batting`, `T2_bowling`) VALUES
(1, 'Srilanka', 'Australia', ' Sri Lanka,Pallekele', '2016-09-04', 'Australia won by 5 wickets', '195/10', '199/5', 20, 'MD Gunathilaka 39', 'MDK Perera 51/3', 'DA Warner 106', 'MA Starc 40/3'),
(2, 'Australia', 'Srilanka', 'Pallekele International Cricket Stadium', '2016-09-06', 'Australia won by 85 runs', '263/3', '178/10', 30, 'GJ Maxwell 145*', 'MA Starc 26/3', 'LD Chandimal 58', 'SS Pathirana 45/1'),
(3, 'Australia', 'South Africa', ' SuperSport Park, Centurion', '2016-09-30', 'South Africa won by 6 wickets', '294/10', '295/4', 30, 'George Bailey 74', 'S M Borland 67/3', 'Quinton de Kock 178', 'Andile Lucky Phehlukwayo 44/4'),
(4, 'South Africa', 'Australia', 'New Wanderers Stadium, Johannesburg', '2016-10-02', 'South Africa won by 142 runs', '361/6', '219/10', 20, 'Du Plessis 111', 'Wayne Parnell 40/3', 'Travis Head 51', 'Travis Head 57/3'),
(5, 'Australia', 'South Africa', 'Kingsmead Durban', '2016-10-05', 'South Africa won by 4 wickets', '371/6', '372/6', 20, 'David Warner 117', 'JW Hastings 79/2', 'David Miller 118', 'Dale Steyn 96/2'),
(8, 'Australia', 'South Africa', 'South Africa, The Wanderers Stadium,  Johannesburg', '2016-03-06', 'Australia won by 5 wickets', '204/10', '205/5', 30, 'F Du Plessis 79', 'Faulkner 28/3', 'D Warner 79', 'Steyn 32/2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`Match_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
