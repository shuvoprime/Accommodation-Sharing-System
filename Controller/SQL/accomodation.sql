-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accomodation`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `username`, `password`, `phone`, `address`) VALUES
('Abde Musavvir Khan', 'rafee2048@gmail.com', 'rafee2048', 'carrizo', '01928334621', 'Moghbazar');

-- --------------------------------------------------------

--
-- Table structure for table `houseowner`
--

CREATE TABLE `houseowner` (
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houseowner`
--

INSERT INTO `houseowner` (`name`, `email`, `username`, `password`, `phone`, `address`) VALUES
('Abu Saleh Faysal', 'abufaysal@gmail.com', 'abufaysal', 'footballers', '01728140175', 'Mohammadpur'),
('MZP', 'mzp@gmail.com', 'mzp', 'mzp', '420', 'GP Chha Road, Mohakhali'),
('Nawshin Ahasan', 'nawshin@gmail.com', 'nawshin', 'nawshin', '01676248932', '240 Bashabo'),
('Abde Musavvir Khan', 'rafee2048@gmail.com', 'rafee2048', 'carrizo', '01928334621', 'Moghbazar'),
('Zannatun Nayeem', 'zannatun@gmail.com', 'zannatun', 'zannatun', '01928334621', 'Baridhara');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `type` varchar(6) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `toilet` int(11) DEFAULT NULL,
  `balcony` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `username`, `address`, `type`, `price`, `bedroom`, `toilet`, `balcony`, `email`, `phone`, `description`) VALUES
(1, 'abufaysal', 'Mohammadpur', 'medium', 12000, 3, 2, 2, 'abusalehfaysal@gmail.com', '01728140175', 'the house is near the main road'),
(2, 'abufaysal', 'Gulshan', 'large', 50000, 4, 2, 2, 'abusalehfaysal@gmail.com', '01728140175', 'new apartment house'),
(3, 'zannatun', 'Uttara ', 'small', 58000, 6, 5, 4, 'zannatun@gmail.com', '01928334621', 'house far from airport, no sound of airplanes can be heard'),
(4, 'zannatun', '547, Mirpur-1', 'small', 5000, 1, 1, 1, 'zannatun@gmail.com', '01928334621', 'small rooms with wifi, water, electricity facilities'),
(5, 'zannatun', '420, Badda', 'medium', 8000, 2, 2, 1, 'zannatun@gmail.com', '01928334621', 'house on 3rd floor'),
(6, 'abufaysal', '428, Badda', 'small', 12000, 2, 2, 2, 'abusalehfaysal@gmail.com', '0167624893', 'cheap facilities'),
(7, 'zannatun', 'Benajir Bagan', 'medium', 25000, 3, 3, 2, 'nawshinprime@gmail.com', '01790447405', 'Have good air flow, this home is cool even in the summer'),
(8, 'zannatun', 'Shahjahanpur', 'medium', 18000, 3, 2, 2, 'natahsa78@gmail.com', '0189556789', 'Less mosquity problem, vey sequired'),
(9, 'zannatun', 'Mirpur', 'large', 25000, 2, 2, 2, 'jarin@gmail.com', '0198668234', 'Environment is very good.Botanical garden is very near.'),
(10, 'nawshin', 'Bashundhara', 'small', 20000, 2, 2, 2, 'prity@gmail.com', '0156889256', 'Child park and child friendly place are very near'),
(11, 'nawshin', 'Mohakhaly', 'small', 25000, 2, 2, 2, 'jannat@gmail.com', '01456732489', 'Friendly place for older people are very near'),
(12, 'nawshin', 'Motijheel', 'small', 20000, 2, 2, 2, 'tahmid@gmail.com', '015678234', 'Playing ground for outdoor game is very near.'),
(13, 'nawshin', 'Kollanpur', 'small', 15000, 2, 2, 2, 'jalil@gmail.com', '0178267349', 'Beautiful flower garden very near.'),
(14, 'nawshin', 'Rampura', 'small', 12000, 2, 2, 2, 'faiaz23@gmail.com', '01794568923', 'Comparatively cheap'),
(15, 'nawshin', 'kallanpur', 'small', 15000, 3, 2, 2, 'ayon@gmail.com', '01456239234', 'Beautiful garden very near');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `houseowner`
--
ALTER TABLE `houseowner`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
