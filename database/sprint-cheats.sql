-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 08:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sprint-cheats`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diamonds` int(11) NOT NULL DEFAULT 150,
  `promocode` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL DEFAULT 'Member',
  `password` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(7) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filter` varchar(255) NOT NULL,
  `version` varchar(10) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`, `name`, `filter`, `version`, `price`, `download`) VALUES
(22, 'https://bit.ly/30QpnLG', 'Wurst', 'minecraft', '1.12.2', 250, 'http://raboninco.com/10qMU'),
(23, 'https://i.imgur.com/4n3katm.jpg', 'S0beit', 'gtasa', '0.3.DL', 100, 'http://raboninco.com/10qVT'),
(30, 'https://i.imgur.com/KQDl2Ff.jpg', 'Wolfram', 'minecraft', '1.12.2', 250, 'https://direct-link.net/128441/wolfram'),
(31, 'https://i.imgur.com/VHa8EKS.jpg', 'Huzuni', 'minecraft', '1.10.2', 175, 'http://raboninco.com/119vv'),
(33, 'https://i.imgur.com/S7ZxuOD.jpg', 'Infinite Jump', 'roblox', '1.2', 100, 'http://raboninco.com/11A4o'),
(34, 'https://i.imgur.com/88WqzDM.jpg', 'Arsenal Aimbot', 'roblox', '17r2', 200, 'https://pastebin.com/raw/pnWRXQud'),
(35, 'https://i.imgur.com/rK9FtPO.jpg', 'S0beit Overlight', 'gtasa', '0.3.7', 170, 'http://raboninco.com/11c1j'),
(36, 'https://i.imgur.com/7ovOVMD.jpg', 'Multiple RBX', 'roblox', '2.8', 120, 'https://bit.ly/2YPDoqi'),
(37, 'https://i.imgur.com/nRgQ3dR.png', 'EnhancedAim', 'cs16', '2.2.1', 300, 'http://raboninco.com/11cOK');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `id` int(11) NOT NULL,
  `promocode` varchar(255) NOT NULL,
  `diamonds` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`id`, `promocode`, `diamonds`) VALUES
(3, 'tkutkerka', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
