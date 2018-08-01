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
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `Match_id` int(11) NOT NULL,
  `player_name` varchar(30) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `bat_runs` int(11) DEFAULT NULL,
  `balls_faced` int(11) DEFAULT NULL,
  `ball_runs` int(11) DEFAULT NULL,
  `balls` int(11) DEFAULT NULL,
  `wickets` int(11) DEFAULT NULL,
  `P_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`Match_id`, `player_name`, `Country`, `bat_runs`, `balls_faced`, `ball_runs`, `balls`, `wickets`, `P_ID`) VALUES
(1, 'DM de Silva', 'Srilanka', 34, 47, 0, 0, 0, 111),
(1, 'MD Gunathilaka', 'Srilanka', 39, 40, 0, 0, 0, 112),
(1, 'BKG Mendis', 'Srilanka', 33, 36, 0, 0, 0, 113),
(1, 'LD Chandimal', 'Srilanka', 1, 3, 0, 0, 0, 114),
(1, 'WU Tharanga', 'Srilanka', 15, 25, 0, 0, 0, 115),
(1, 'MDKJ  Perera', 'Srilanka', 14, 27, 0, 0, 0, 116),
(1, 'MD Shanaka', 'Srilanka', 13, 17, 10, 12, 0, 117),
(1, 'SS Pathirana', 'Srilanka', 32, 38, 36, 60, 0, 118),
(1, 'MDK Perera', 'Srilanka', 5, 7, 51, 60, 3, 119),
(1, 'RAS Lakmal', 'Srilanka', 0, 1, 30, 48, 0, 120),
(1, 'MA Aponso', 'Srilanka', 0, 2, 33, 36, 0, 121),
(1, 'DA Warner	', 'Australia', 106, 126, 0, 0, 0, 122),
(1, 'MS Wade', 'Australia', 3, 13, 0, 0, 0, 123),
(1, 'UT Khawaja', 'Australia', 6, 6, 0, 0, 0, 124),
(1, 'GJ Bailey', 'Australia', 44, 73, 0, 0, 0, 125),
(1, 'TM Head', 'Australia', 13, 20, 22, 30, 2, 126),
(1, 'JP Faulkner', 'Australia', 8, 14, 30, 42, 1, 127),
(1, 'JW Hastings', 'Australia', 8, 6, 30, 42, 1, 128),
(1, 'AJ Finch', 'Australia', 0, 0, 0, 0, 0, 129),
(1, 'MA Starc', 'Australia', 0, 0, 40, 54, 3, 130),
(1, 'A Zampa', 'Australia', 0, 0, 43, 36, 2, 131),
(1, 'SM Boland', 'Australia', 0, 0, 28, 38, 1, 132),
(2, 'GJ Maxwell', 'Australia', 145, 65, 21, 12, 0, 23),
(2, 'DA Warner', 'Australia', 28, 16, NULL, NULL, NULL, 24),
(2, 'TM Head', 'Australia', 45, 18, 0, 0, 0, 25),
(2, 'UT Khawaja', 'Australia', 36, 22, 0, 0, 0, 26),
(2, 'GJ Bailey', 'Australia', 0, 0, 0, 0, 0, 27),
(2, 'MC Henriques', 'Australia', 0, 0, 24, 12, 1, 28),
(2, 'PM Nevill', 'Australia', 0, 0, 0, 0, 0, 29),
(2, 'JP Faulkner', 'Australia', 0, 0, 38, 24, 1, 30),
(2, 'MA Starc', 'Australia', 0, 0, 26, 24, 3, 31),
(2, 'A Zampa', 'Australia', 0, 0, 27, 24, 1, 32),
(2, 'SM Boland', 'Australia', 0, 0, 26, 24, 3, 33),
(2, 'MDKJ  Perera', 'Srilanka', 4, 6, 0, 0, 0, 34),
(2, 'TM Dilshan', 'Srilanka', 4, 3, 0, 0, 0, 35),
(2, 'DM de Silva', 'Srilanka', 12, 8, 8, 6, 0, 36),
(2, 'LD Chandimal', 'Srilanka', 58, 43, 0, 0, 0, 37),
(2, 'BKG Mendis', 'Srilanka', 22, 13, 0, 0, 0, 38),
(2, 'NLTC Perera', 'Srilanka', 7, 7, 58, 24, 1, 39),
(2, 'CK Kapugedera', 'Srilanka', 43, 25, 0, 0, 0, 40),
(2, 'SS Pathirana', 'Srilanka', 2, 2, 45, 24, 1, 41),
(2, 'SMSM Senanayake', 'Srilanka', 6, 6, 49, 24, 1, 42),
(2, 'RAS Lakmal', 'Srilanka', 1, 2, 51, 24, 0, 43),
(2, 'CAK Rajitha', 'Srilanka', 0, 5, 46, 18, 0, 44),
(3, 'David Warner', 'Australia', 40, 36, 0, 0, 0, 1),
(3, 'AJ Finch', 'Australia', 33, 28, NULL, NULL, NULL, 2),
(3, 'SPD Smith', 'Australia', 8, 11, NULL, NULL, NULL, 3),
(3, 'GJ Bailey', 'Australia', 74, 90, NULL, NULL, NULL, 4),
(3, 'MR Marsh', 'Australia', 31, 25, 66, 48, 0, 5),
(3, 'TM Head', 'Australia', 18, 18, 16, 12, 0, 6),
(3, 'MS Wade', 'Australia', 5, 10, NULL, NULL, NULL, 7),
(3, 'JW Hastings', 'Australia', 51, 56, 52, 42, 0, 8),
(3, 'A Zampa', 'Australia', 12, 19, 44, 30, 1, 9),
(3, 'DJ Worrall', 'Australia', 6, 4, 50, 44, 0, 10),
(3, 'SM Boland', 'Australia', 3, 3, 67, 42, 3, 11),
(3, 'Q de Kock', 'South Africa', 178, 113, NULL, NULL, NULL, 12),
(3, 'RR Rossouw', 'South Africa', 63, 45, NULL, NULL, NULL, 13),
(3, 'F du Plessis', 'South Africa', 26, 36, NULL, NULL, NULL, 14),
(3, 'JP Duminy', 'South Africa', 9, 8, NULL, NULL, NULL, 15),
(3, 'DA Miller', 'South Africa', 10, 10, NULL, NULL, NULL, 16),
(3, 'F Behardien', 'South Africa', 5, 6, 15, 12, 0, 17),
(3, 'AL Phehlukwayo', 'South Africa', NULL, NULL, 44, 60, 4, 18),
(3, 'WD Parnell', 'South Africa', NULL, NULL, 56, 48, 1, 19),
(3, 'DW Steyn', 'South Africa', NULL, NULL, 65, 60, 2, 20),
(3, 'K Rabada', 'South Africa', NULL, NULL, 63, 60, 0, 21),
(3, 'Imran Tahir', 'South Africa', NULL, NULL, 46, 60, 1, 22),
(4, 'Q de Kock', 'South Africa', 22, 24, 0, 0, 0, 67),
(4, 'RR Rossouw', 'South Africa', 75, 81, 0, 0, 0, 68),
(4, 'F du Plessis', 'South Africa', 111, 93, 0, 0, 0, 69),
(4, 'JP Duminy', 'South Africa', 82, 58, 17, 18, 1, 70),
(4, 'DA Miller', 'South Africa', 26, 17, 0, 0, 0, 71),
(4, 'F Behardien', 'South Africa', 13, 14, 0, 0, 0, 72),
(4, 'WD Parnell', 'South Africa', 8, 5, 40, 42, 3, 73),
(4, 'AL Phehlukwayo', 'South Africa', 13, 8, 59, 40, 2, 74),
(4, 'DW Steyn', 'South Africa', 0, 0, 37, 42, 1, 75),
(4, 'K Rabada', 'South Africa', 0, 0, 31, 42, 2, 76),
(4, 'Imran Tahir', 'South Africa', 0, 0, 31, 42, 1, 77),
(4, 'AJ Finch', 'Australia', 1, 5, 0, 0, 0, 78),
(4, 'DA Warner	', 'Australia', 50, 56, 0, 0, 0, 79),
(4, 'SPD Smith', 'Australia', 14, 12, 0, 0, 0, 80),
(4, 'GJ Bailey', 'Australia', 9, 18, 0, 0, 0, 81),
(4, 'MR Marsh', 'Australia', 19, 19, 68, 60, 2, 82),
(4, 'TM Head', 'Australia', 51, 45, 0, 0, 0, 83),
(4, 'MS Wade', 'Australia', 33, 33, 0, 0, 0, 84),
(4, 'JW Hastings', 'Australia', 23, 19, 57, 60, 3, 85),
(4, 'JM Mennie', 'Australia', 1, 2, 82, 60, 0, 86),
(4, 'A Zampa', 'Australia', 8, 11, 54, 48, 0, 87),
(4, 'CP Tremain', 'Australia', 0, 6, 78, 60, 1, 88),
(5, 'DA Warner	', 'Australia', 117, 107, 0, 0, 0, 89),
(5, 'AJ Finch', 'Australia', 53, 34, 0, 0, 0, 90),
(5, 'SPD Smith', 'Australia', 108, 107, 0, 0, 0, 91),
(5, 'GJ Bailey', 'Australia', 28, 18, 0, 0, 0, 92),
(5, 'MR Marsh', 'Australia', 2, 8, 61, 60, 1, 93),
(5, 'TM Head', 'Australia', 35, 18, 31, 18, 1, 94),
(5, 'MS Wade', 'Australia', 17, 8, 0, 0, 0, 95),
(5, 'JW Hastings', 'Australia', 0, 0, 79, 60, 2, 96),
(5, 'A Zampa', 'Australia', 0, 0, 55, 44, 1, 97),
(5, 'CP Tremain', 'Australia', 0, 0, 65, 60, 1, 98),
(5, 'DJ Worrall', 'Australia', 0, 0, 78, 54, 0, 99),
(5, 'Q de Kock', 'South Africa', 70, 49, 0, 0, 0, 100),
(5, 'HM Amla', 'South Africa', 45, 30, 0, 0, 0, 101),
(5, 'F du Plessis', 'South Africa', 33, 32, 0, 0, 0, 102),
(5, 'RR Rossouw', 'South Africa', 18, 21, 0, 0, 0, 103),
(5, 'JP Duminy', 'South Africa', 20, 26, 32, 30, 0, 104),
(5, 'DA Miller', 'South Africa', 118, 79, 0, 0, 0, 105),
(5, 'D Pretorius', 'South Africa', 15, 20, 42, 36, 0, 106),
(5, 'AL Phehlukwayo', 'South Africa', 42, 39, 58, 48, 1, 107),
(5, 'DW Steyn', 'South Africa', 0, 0, 96, 60, 2, 108),
(5, 'K Rabada', 'South Africa', 0, 0, 86, 60, 1, 109),
(5, 'Imran Tahir', 'South Africa', 0, 0, 54, 60, 2, 110),
(8, 'AB de Villiers', 'South Africa', 13, 9, 0, 0, 0, 45),
(8, 'Q de Kock', 'South Africa', 44, 28, 0, 0, 0, 46),
(8, 'F du Plessis', 'South Africa', 79, 41, 0, 0, 0, 47),
(8, 'JP Duminy', 'South Africa', 14, 12, 0, 0, 0, 48),
(8, 'DA Miller', 'South Africa', 33, 18, 0, 0, 0, 49),
(8, 'F Behardien', 'South Africa', 3, 5, 0, 0, 0, 50),
(8, 'CH Morris', 'South Africa', 3, 5, 39, 24, 1, 51),
(8, 'D Wiese', 'South Africa', 10, 3, 58, 24, 0, 52),
(8, 'K Rabada', 'South Africa', 0, 0, 25, 24, 2, 53),
(8, 'Imran Tahir', 'South Africa', 0, 0, 47, 24, 0, 54),
(8, 'DW Steyn', 'South Africa', 0, 0, 32, 24, 2, 55),
(8, 'AJ Finch', 'Australia', 2, 4, 0, 0, 0, 56),
(8, 'SR Watson', 'Australia', 9, 15, 0, 0, 0, 57),
(8, 'SPD Smith', 'Australia', 19, 15, 0, 0, 0, 58),
(8, 'DA Warner	', 'Australia', 77, 40, 0, 0, 0, 59),
(8, 'GJ Maxwell', 'Australia', 75, 43, 30, 24, 0, 60),
(8, 'MR Marsh', 'Australia', 2, 1, 28, 12, 1, 61),
(8, 'JP Faulkner', 'Australia', 7, 4, 28, 24, 3, 62),
(8, 'PM Nevill', 'Australia', 0, 0, 0, 0, 0, 63),
(8, 'JR Hazlewood', 'Australia', 0, 0, 50, 24, 0, 64),
(8, 'JW Hastings', 'Australia', 0, 0, 42, 24, 2, 65),
(8, 'AC Agar', 'Australia', 0, 0, 25, 12, 1, 66);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`Match_id`,`P_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
