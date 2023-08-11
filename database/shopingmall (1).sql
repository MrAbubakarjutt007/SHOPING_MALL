-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 02:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopingtable`
--

CREATE TABLE `shopingtable` (
  `idinfo` int(10) NOT NULL,
  `itemcode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useraddress` varchar(20) NOT NULL,
  `phonenumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shopingtable`
--

INSERT INTO `shopingtable` (`idinfo`, `itemcode`, `username`, `useraddress`, `phonenumber`) VALUES
(65, '#4356', 'kamranali', 'johartown', '03451212120'),
(68, '#5687', 'amjaed', 'saraj town', '03454545450'),
(86, '#AB4556', 'Abubakar', '12town', '03495858489'),
(95, '#er45', 'gohar', 'modelcity fase1', '03453434343'),
(97, '#3445', 'sohal', 'sohail town', '03242424240'),
(99, '#AB4556', 'amna', 'ali park', '03181818181'),
(118, '#AB4556', 'adeel', 'johar town', '03121312131'),
(119, '#345T6', 'TARIQ', 'ALI PARK', '03455678120'),
(121, '#4556T', 'naveed', 'johar town', '03455656560'),
(122, '#AB4556', 'waqas', 'ali town', '03456789000'),
(123, '#AB4556', 'ajmal', 'johar town', '03451212120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopingtable`
--
ALTER TABLE `shopingtable`
  ADD PRIMARY KEY (`idinfo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopingtable`
--
ALTER TABLE `shopingtable`
  MODIFY `idinfo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
