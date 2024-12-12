-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 09:31 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrwlc2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `conID` int(11) NOT NULL,
  `conName` varchar(50) NOT NULL,
  `conDesc` varchar(50) NOT NULL,
  `conImg` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`conID`, `conName`, `conDesc`, `conImg`, `ID`) VALUES
(1, 'Elmer Fabrique', '', 'images/pic1.jpg', 1),
(2, 'Alsergin Gumanib', '', 'images/pic2.jpg', 2),
(3, 'Francis Sumodlayon', '', 'images/pic3.jpg', 3),
(4, 'John Dave Mascarinas', '', 'images/pic4.jpg', 4),
(5, 'Vic Justine Segovia', '', 'images/pic5.jpg', 5),
(6, 'Rhazhyven Galenzoga', '', 'images/pic6.jpg', 6),
(7, 'Daniel Bryan Frasco', '', 'images/pic7.jpg', 7),
(8, 'Ralph Steeve Miralles', '', 'images/pic8.jpg', 8),
(9, 'Nicholas Mesurado', '', 'images/pic9.jpg', 9),
(10, 'Dan Clifford Capuyan', '', 'images/pic10.jpg', 10),
(11, 'Roguin Suson', '', 'images/pic11.jpg', 11),
(12, 'Alexus Alan Abe', '', 'images/pic12.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `judgeID` varchar(10) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`judgeID`, `ID`) VALUES
('Judge1', 1),
('Judge2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prelim`
--

CREATE TABLE `prelim` (
  `preID` int(11) NOT NULL,
  `conID` int(11) NOT NULL,
  `preRate` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prelim`
--

INSERT INTO `prelim` (`preID`, `conID`, `preRate`) VALUES
(1, 1, '12.00'),
(2, 2, '9.30'),
(3, 3, '10.50'),
(4, 4, '12.30'),
(5, 5, '10.05'),
(6, 6, '12.75'),
(7, 7, '9.45'),
(8, 8, '11.55'),
(9, 9, '9.45'),
(10, 10, '13.50'),
(11, 11, '9.45'),
(12, 12, '10.95');

-- --------------------------------------------------------

--
-- Table structure for table `tally`
--

CREATE TABLE `tally` (
  `categID` int(11) NOT NULL,
  `judgeID` varchar(10) NOT NULL,
  `conID` int(11) NOT NULL,
  `rate` decimal(11,2) NOT NULL,
  `tally_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tally`
--

INSERT INTO `tally` (`categID`, `judgeID`, `conID`, `rate`, `tally_id`) VALUES
(1, 'Judge1', 1, '1.00', 1),
(2, 'Judge1', 1, '2.00', 2),
(3, 'Judge1', 1, '5.00', 3),
(1, 'Judge1', 2, '4.00', 4),
(2, 'Judge1', 2, '4.00', 5),
(3, 'Judge1', 2, '4.00', 6),
(1, 'Judge1', 3, '5.00', 7),
(2, 'Judge1', 3, '6.00', 8),
(3, 'Judge1', 3, '5.00', 9),
(1, 'Judge1', 4, '5.00', 10),
(2, 'Judge1', 4, '4.00', 11),
(3, 'Judge1', 4, '5.00', 12),
(1, 'Judge1', 5, '6.00', 13),
(2, 'Judge1', 5, '5.00', 14),
(3, 'Judge1', 5, '6.00', 15),
(1, 'Judge1', 6, '3.00', 16),
(2, 'Judge1', 6, '3.00', 17),
(3, 'Judge1', 6, '2.00', 18),
(1, 'Judge1', 7, '1.00', 19),
(2, 'Judge1', 7, '4.00', 20),
(3, 'Judge1', 7, '5.00', 21),
(1, 'Judge1', 8, '4.00', 22),
(2, 'Judge1', 8, '4.00', 23),
(3, 'Judge1', 8, '4.00', 24),
(1, 'Judge1', 9, '4.00', 25),
(2, 'Judge1', 9, '5.00', 26),
(3, 'Judge1', 9, '5.00', 27),
(1, 'Judge1', 10, '5.00', 28),
(2, 'Judge1', 10, '5.00', 29),
(3, 'Judge1', 10, '4.00', 30),
(1, 'Judge1', 11, '5.00', 31),
(2, 'Judge1', 11, '5.00', 32),
(3, 'Judge1', 11, '6.00', 33),
(1, 'Judge1', 12, '6.00', 34),
(2, 'Judge1', 12, '6.00', 35),
(3, 'Judge1', 12, '5.00', 36),
(4, 'Judge1', 1, '4.00', 37),
(5, 'Judge1', 1, '4.00', 38),
(6, 'Judge1', 1, '5.00', 39),
(7, 'Judge1', 1, '5.00', 40),
(4, 'Judge1', 2, '5.00', 41),
(5, 'Judge1', 2, '5.00', 42),
(6, 'Judge1', 2, '5.00', 43),
(7, 'Judge1', 2, '5.00', 44),
(4, 'Judge1', 3, '5.00', 45),
(5, 'Judge1', 3, '4.00', 46),
(6, 'Judge1', 3, '4.00', 47),
(7, 'Judge1', 3, '4.00', 48),
(4, 'Judge1', 4, '5.00', 49),
(5, 'Judge1', 4, '5.00', 50),
(6, 'Judge1', 4, '4.00', 51),
(7, 'Judge1', 4, '4.00', 52),
(4, 'Judge1', 5, '5.00', 53),
(5, 'Judge1', 5, '5.00', 54),
(6, 'Judge1', 5, '6.00', 55),
(7, 'Judge1', 5, '6.00', 56),
(4, 'Judge1', 6, '5.00', 57),
(5, 'Judge1', 6, '4.00', 58),
(6, 'Judge1', 6, '5.00', 59),
(7, 'Judge1', 6, '4.00', 60),
(4, 'Judge1', 7, '4.00', 61),
(5, 'Judge1', 7, '4.00', 62),
(6, 'Judge1', 7, '4.00', 63),
(7, 'Judge1', 7, '4.00', 64),
(4, 'Judge1', 8, '6.00', 65),
(5, 'Judge1', 8, '6.00', 66),
(6, 'Judge1', 8, '5.00', 67),
(7, 'Judge1', 8, '4.00', 68),
(4, 'Judge1', 9, '5.00', 69),
(5, 'Judge1', 9, '5.00', 70),
(6, 'Judge1', 9, '5.00', 71),
(7, 'Judge1', 9, '4.00', 72),
(4, 'Judge1', 10, '4.00', 73),
(5, 'Judge1', 10, '5.00', 74),
(6, 'Judge1', 10, '6.00', 75),
(7, 'Judge1', 10, '6.00', 76),
(4, 'Judge1', 11, '5.00', 77),
(5, 'Judge1', 11, '5.00', 78),
(6, 'Judge1', 11, '4.00', 79),
(7, 'Judge1', 11, '4.00', 80),
(4, 'Judge1', 12, '4.00', 81),
(5, 'Judge1', 12, '5.00', 82),
(6, 'Judge1', 12, '5.00', 83),
(7, 'Judge1', 12, '4.00', 84),
(8, 'Judge1', 1, '5.00', 85),
(9, 'Judge1', 1, '4.00', 86),
(10, 'Judge1', 1, '4.00', 87),
(8, 'Judge1', 2, '5.00', 88),
(9, 'Judge1', 2, '5.00', 89),
(10, 'Judge1', 2, '5.00', 90),
(8, 'Judge1', 3, '5.00', 91),
(9, 'Judge1', 3, '5.00', 92),
(10, 'Judge1', 3, '5.00', 93),
(8, 'Judge1', 4, '5.00', 94),
(9, 'Judge1', 4, '5.00', 95),
(10, 'Judge1', 4, '5.00', 96),
(8, 'Judge1', 5, '5.00', 97),
(9, 'Judge1', 5, '5.00', 98),
(10, 'Judge1', 5, '5.00', 99),
(8, 'Judge1', 6, '5.00', 100),
(9, 'Judge1', 6, '5.00', 101),
(10, 'Judge1', 6, '5.00', 102),
(8, 'Judge1', 7, '5.00', 103),
(9, 'Judge1', 7, '5.00', 104),
(10, 'Judge1', 7, '5.00', 105),
(8, 'Judge1', 8, '5.00', 106),
(9, 'Judge1', 8, '5.00', 107),
(10, 'Judge1', 8, '6.00', 108),
(8, 'Judge1', 9, '5.00', 109),
(9, 'Judge1', 9, '5.00', 110),
(10, 'Judge1', 9, '4.00', 111),
(8, 'Judge1', 10, '5.00', 112),
(9, 'Judge1', 10, '6.00', 113),
(10, 'Judge1', 10, '6.00', 114),
(8, 'Judge1', 11, '5.00', 115),
(9, 'Judge1', 11, '5.00', 116),
(10, 'Judge1', 11, '4.00', 117),
(8, 'Judge1', 12, '5.00', 118),
(9, 'Judge1', 12, '5.00', 119),
(10, 'Judge1', 12, '5.00', 120),
(1, 'Judge2', 1, '5.00', 121),
(2, 'Judge2', 1, '5.00', 122),
(3, 'Judge2', 1, '5.00', 123),
(1, 'Judge2', 2, '4.00', 124),
(2, 'Judge2', 2, '5.00', 125),
(3, 'Judge2', 2, '6.00', 126),
(1, 'Judge2', 3, '6.00', 127),
(2, 'Judge2', 3, '5.00', 128),
(3, 'Judge2', 3, '4.00', 129),
(1, 'Judge2', 4, '4.00', 130),
(2, 'Judge2', 4, '5.00', 131),
(3, 'Judge2', 4, '6.00', 132),
(1, 'Judge2', 5, '5.00', 133),
(2, 'Judge2', 5, '4.00', 134),
(3, 'Judge2', 5, '6.00', 135),
(1, 'Judge2', 6, '5.00', 136),
(2, 'Judge2', 6, '5.00', 137),
(3, 'Judge2', 6, '4.00', 138),
(1, 'Judge2', 7, '4.00', 139),
(2, 'Judge2', 7, '5.00', 140),
(3, 'Judge2', 7, '5.00', 141),
(1, 'Judge2', 8, '6.00', 142),
(2, 'Judge2', 8, '6.00', 143),
(3, 'Judge2', 8, '5.00', 144),
(1, 'Judge2', 9, '4.00', 145),
(2, 'Judge2', 9, '4.00', 146),
(3, 'Judge2', 9, '4.00', 147),
(1, 'Judge2', 10, '4.00', 148),
(2, 'Judge2', 10, '5.00', 149),
(3, 'Judge2', 10, '5.00', 150),
(1, 'Judge2', 11, '6.00', 151),
(2, 'Judge2', 11, '6.00', 152),
(3, 'Judge2', 11, '5.00', 153),
(1, 'Judge2', 12, '5.00', 154),
(2, 'Judge2', 12, '4.00', 155),
(3, 'Judge2', 12, '4.00', 156),
(4, 'Judge2', 1, '2.00', 157),
(5, 'Judge2', 1, '2.00', 158),
(6, 'Judge2', 1, '2.00', 159),
(7, 'Judge2', 1, '2.00', 160),
(4, 'Judge2', 2, '2.00', 161),
(5, 'Judge2', 2, '2.00', 162),
(6, 'Judge2', 2, '2.00', 163),
(7, 'Judge2', 2, '2.00', 164),
(4, 'Judge2', 3, '2.00', 165),
(5, 'Judge2', 3, '2.00', 166),
(6, 'Judge2', 3, '2.00', 167),
(7, 'Judge2', 3, '2.00', 168),
(4, 'Judge2', 4, '2.00', 169),
(5, 'Judge2', 4, '2.00', 170),
(6, 'Judge2', 4, '2.00', 171),
(7, 'Judge2', 4, '2.00', 172),
(4, 'Judge2', 5, '2.00', 173),
(5, 'Judge2', 5, '2.00', 174),
(6, 'Judge2', 5, '2.00', 175),
(7, 'Judge2', 5, '2.00', 176),
(4, 'Judge2', 6, '2.00', 177),
(5, 'Judge2', 6, '2.00', 178),
(6, 'Judge2', 6, '2.00', 179),
(7, 'Judge2', 6, '2.00', 180),
(4, 'Judge2', 7, '2.00', 181),
(5, 'Judge2', 7, '2.00', 182),
(6, 'Judge2', 7, '2.00', 183),
(7, 'Judge2', 7, '2.00', 184),
(4, 'Judge2', 8, '2.00', 185),
(5, 'Judge2', 8, '2.00', 186),
(6, 'Judge2', 8, '2.00', 187),
(7, 'Judge2', 8, '2.00', 188),
(4, 'Judge2', 9, '3.00', 189),
(5, 'Judge2', 9, '3.00', 190),
(6, 'Judge2', 9, '3.00', 191),
(7, 'Judge2', 9, '3.00', 192),
(4, 'Judge2', 10, '3.00', 193),
(5, 'Judge2', 10, '3.00', 194),
(6, 'Judge2', 10, '3.00', 195),
(7, 'Judge2', 10, '3.00', 196),
(4, 'Judge2', 11, '3.00', 197),
(5, 'Judge2', 11, '3.00', 198),
(6, 'Judge2', 11, '3.00', 199),
(7, 'Judge2', 11, '3.00', 200),
(4, 'Judge2', 12, '3.00', 201),
(5, 'Judge2', 12, '3.00', 202),
(6, 'Judge2', 12, '3.00', 203),
(7, 'Judge2', 12, '3.00', 204),
(8, 'Judge2', 1, '8.00', 205),
(9, 'Judge2', 1, '8.00', 206),
(10, 'Judge2', 1, '8.00', 207),
(8, 'Judge2', 2, '8.00', 208),
(9, 'Judge2', 2, '8.00', 209),
(10, 'Judge2', 2, '8.00', 210),
(8, 'Judge2', 3, '8.00', 211),
(9, 'Judge2', 3, '8.00', 212),
(10, 'Judge2', 3, '8.00', 213),
(8, 'Judge2', 4, '8.00', 214),
(9, 'Judge2', 4, '8.00', 215),
(10, 'Judge2', 4, '8.00', 216),
(8, 'Judge2', 5, '8.00', 217),
(9, 'Judge2', 5, '8.00', 218),
(10, 'Judge2', 5, '8.00', 219),
(8, 'Judge2', 6, '8.00', 220),
(9, 'Judge2', 6, '8.00', 221),
(10, 'Judge2', 6, '8.00', 222),
(8, 'Judge2', 7, '9.00', 223),
(9, 'Judge2', 7, '9.00', 224),
(10, 'Judge2', 7, '9.00', 225),
(8, 'Judge2', 8, '9.00', 226),
(9, 'Judge2', 8, '9.00', 227),
(10, 'Judge2', 8, '9.00', 228),
(8, 'Judge2', 9, '9.00', 229),
(9, 'Judge2', 9, '9.00', 230),
(10, 'Judge2', 9, '9.00', 231),
(8, 'Judge2', 10, '9.00', 232),
(9, 'Judge2', 10, '9.00', 233),
(10, 'Judge2', 10, '9.00', 234),
(8, 'Judge2', 11, '9.00', 235),
(9, 'Judge2', 11, '9.00', 236),
(10, 'Judge2', 11, '9.00', 237),
(8, 'Judge2', 12, '9.00', 238),
(9, 'Judge2', 12, '9.00', 239),
(10, 'Judge2', 12, '9.00', 240);

-- --------------------------------------------------------

--
-- Table structure for table `tally2`
--

CREATE TABLE `tally2` (
  `conID` int(11) NOT NULL,
  `categID` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `tally_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tally2`
--

INSERT INTO `tally2` (`conID`, `categID`, `rate`, `tally_two`) VALUES
(10, 2, '27.53', 1),
(9, 2, '22.63', 2),
(11, 2, '22.20', 3),
(12, 2, '23.70', 4),
(5, 2, '22.80', 5),
(8, 2, '23.88', 6),
(2, 2, '21.20', 7),
(1, 2, '23.05', 8),
(4, 2, '23.35', 9),
(6, 2, '23.80', 10),
(3, 2, '21.13', 11),
(7, 2, '19.65', 12),
(11, 1, '16.50', 13),
(5, 1, '16.00', 14),
(3, 1, '15.50', 15),
(12, 1, '15.00', 16),
(4, 1, '14.50', 17),
(8, 1, '14.50', 18),
(10, 1, '14.00', 19),
(2, 1, '13.50', 20),
(9, 1, '13.00', 21),
(7, 1, '12.00', 22),
(1, 1, '11.50', 23),
(6, 1, '11.00', 24),
(10, 3, '22.00', 25),
(8, 3, '21.50', 26),
(12, 3, '21.00', 27),
(7, 3, '21.00', 28),
(11, 3, '20.50', 29),
(9, 3, '20.50', 30),
(2, 3, '19.50', 31),
(3, 3, '19.50', 32),
(4, 3, '19.50', 33),
(5, 3, '19.50', 34),
(6, 3, '19.50', 35),
(1, 3, '18.50', 36),
(11, 1, '16.50', 37),
(5, 1, '16.00', 38),
(3, 1, '15.50', 39),
(12, 1, '15.00', 40),
(8, 1, '14.50', 41),
(4, 1, '14.50', 42),
(10, 1, '14.00', 43),
(2, 1, '13.50', 44),
(9, 1, '13.00', 45),
(7, 1, '12.00', 46),
(1, 1, '11.50', 47),
(6, 1, '11.00', 48),
(11, 1, '16.50', 49),
(5, 1, '16.00', 50),
(3, 1, '15.50', 51),
(12, 1, '15.00', 52),
(8, 1, '14.50', 53),
(4, 1, '14.50', 54),
(10, 1, '14.00', 55),
(2, 1, '13.50', 56),
(9, 1, '13.00', 57),
(7, 1, '12.00', 58),
(1, 1, '11.50', 59),
(6, 1, '11.00', 60);

-- --------------------------------------------------------

--
-- Table structure for table `topcontestants`
--

CREATE TABLE `topcontestants` (
  `tConID` int(11) NOT NULL,
  `tConName` varchar(50) NOT NULL,
  `tConDesc` varchar(50) NOT NULL,
  `tConImg` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topcontestants`
--

INSERT INTO `topcontestants` (`tConID`, `tConName`, `tConDesc`, `tConImg`, `ID`) VALUES
(10, 'Dan Clifford Capuyan', '', 'images/pic10.jpg', 1),
(8, 'Ralph Steeve Miralles', '', 'images/pic8.jpg', 2),
(12, 'Alexus Alan Abe', '', 'images/pic12.jpg', 3),
(11, 'Roguin Suson', '', 'images/pic11.jpg', 4),
(5, 'Vic Justine Segovia', '', 'images/pic5.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `toptally`
--

CREATE TABLE `toptally` (
  `tCategID` int(11) NOT NULL,
  `tJudgeID` varchar(10) NOT NULL,
  `tRate` decimal(11,2) NOT NULL,
  `tconID` int(11) NOT NULL,
  `toptally_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toptally`
--

INSERT INTO `toptally` (`tCategID`, `tJudgeID`, `tRate`, `tconID`, `toptally_id`) VALUES
(1, 'Judge1', '25.00', 1, 1),
(2, 'Judge1', '25.00', 1, 2),
(1, 'Judge1', '35.00', 2, 3),
(2, 'Judge1', '35.00', 2, 4),
(1, 'Judge1', '45.00', 3, 5),
(2, 'Judge1', '45.00', 3, 6),
(1, 'Judge1', '15.00', 4, 7),
(2, 'Judge1', '15.00', 4, 8),
(1, 'Judge1', '26.00', 5, 9),
(2, 'Judge1', '26.00', 5, 10),
(1, 'Judge2', '32.00', 1, 11),
(2, 'Judge2', '32.00', 1, 12),
(1, 'Judge2', '23.00', 2, 13),
(2, 'Judge2', '23.00', 2, 14),
(1, 'Judge2', '12.00', 3, 15),
(2, 'Judge2', '12.00', 3, 16),
(1, 'Judge2', '21.00', 4, 17),
(2, 'Judge2', '21.00', 4, 18),
(1, 'Judge2', '50.00', 5, 19),
(2, 'Judge2', '50.00', 5, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prelim`
--
ALTER TABLE `prelim`
  ADD PRIMARY KEY (`preID`);

--
-- Indexes for table `tally`
--
ALTER TABLE `tally`
  ADD PRIMARY KEY (`tally_id`);

--
-- Indexes for table `tally2`
--
ALTER TABLE `tally2`
  ADD PRIMARY KEY (`tally_two`);

--
-- Indexes for table `topcontestants`
--
ALTER TABLE `topcontestants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `toptally`
--
ALTER TABLE `toptally`
  ADD PRIMARY KEY (`toptally_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prelim`
--
ALTER TABLE `prelim`
  MODIFY `preID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tally`
--
ALTER TABLE `tally`
  MODIFY `tally_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `tally2`
--
ALTER TABLE `tally2`
  MODIFY `tally_two` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `topcontestants`
--
ALTER TABLE `topcontestants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `toptally`
--
ALTER TABLE `toptally`
  MODIFY `toptally_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
