-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2020 at 07:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ti_healthy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `kategoriaID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`kategoriaID`, `emri`) VALUES
(1, 'Sallata'),
(2, 'Smoothie'),
(3, 'Hamburger'),
(4, 'Pasta'),
(5, 'Wrap'),
(6, 'Rizoto'),
(7, 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `klientet`
--

CREATE TABLE `klientet` (
  `klientiID` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `telefoni` int(20) NOT NULL,
  `emaili` varchar(150) NOT NULL,
  `adresa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientet`
--

INSERT INTO `klientet` (`klientiID`, `emri`, `mbiemri`, `telefoni`, `emaili`, `adresa`) VALUES
(2, 'Andi', 'Ahmeti', 45221098, 'a@gmail.com', 'Novoberde'),
(3, 'Lea', 'Gashi', 44555999, 'lea@gmail.com', 'Gjilan'),
(4, 'Edi', 'Agushi', 45811222, 'edi@gmail.com', 'Prishtine'),
(5, 'Kaltrina', 'Mustafa', 44777333, 'k@gmail.com', 'Gjilan'),
(7, 'Liza', 'Krasniqi', 44889000, 'liza@gmail.com', 'Gjilan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuID` int(11) NOT NULL,
  `kategoriaID` int(11) DEFAULT NULL,
  `artikulli` varchar(50) NOT NULL,
  `perberesit` varchar(300) NOT NULL,
  `cmimi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuID`, `kategoriaID`, `artikulli`, `perberesit`, `cmimi`) VALUES
(1, 2, 'Smoothie 1', 'aaa aaa aaa aaa aaa ', 2),
(2, 2, 'Smoothie 2', 'bbbbb aaa aaa aaa aaa ', 2),
(7, 2, 'Smoothie 3', 'bbbbb aaa aaa aaa aaa ', 2),
(8, 1, 'Sallata 1', 'bbbbb fdfr', 4),
(9, 1, 'Sallata 2', 'bbbbb fdfr', 4),
(10, 1, 'Sallata 3', 'bbbbb fdfr', 4),
(11, 1, 'Sallata 4', 'bbbbb fdfr', 4),
(12, 3, 'Hamburger 1', 'bbbbb fdfr', 2),
(13, 3, 'Hamburger 2', 'bbbbb fdfr', 2),
(14, 6, 'Rizoto 1', 'bbbbb fdfr', 3),
(15, 6, 'Rizoto 2', 'bbbbb fdfr', 2),
(16, 4, 'Pasta 1', 'bbbbb fdfr', 3),
(17, 4, 'Pasta 2', 'bbbbb fdfr', 3),
(18, 4, 'Pasta 3', 'bbbbb fdfr', 3),
(19, 4, 'Pasta 4', 'bbbbb fdfr', 3),
(20, 5, 'Wrap 1', 'bbbbb fdfr', 3),
(21, 5, 'Wrap 2', 'bbbbb fdfr', 3),
(22, 7, 'Snack 1', 'aaa aaa aaa aaa aaa ', 2),
(23, 7, 'Snack 2', 'aaa aaa aaa aaa aaa ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `porosite`
--

CREATE TABLE `porosite` (
  `porosiaID` int(11) NOT NULL,
  `klientiID` int(11) NOT NULL,
  `menuID` int(11) NOT NULL,
  `sasia` int(11) NOT NULL,
  `preferenca` varchar(400) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porosite`
--

INSERT INTO `porosite` (`porosiaID`, `klientiID`, `menuID`, `sasia`, `preferenca`, `data`) VALUES
(2, 2, 1, 2, 'pwwww', '2020-08-05'),
(8, 7, 1, 1, 'preferenca', '2020-08-21'),
(9, 2, 1, 2, 'preferenca', '2020-08-21'),
(10, 7, 1, 2, 'preferenca', '2020-08-21'),
(11, 7, 1, 2, 'preferenca', '2020-08-21'),
(12, 7, 1, 2, 'preferenca', '2020-08-21'),
(13, 7, 1, 7, 'preferenca', '2020-08-21'),
(14, 5, 1, 1, 'preferenca', '2020-08-21'),
(16, 4, 20, 2, 'preferenca', '2020-08-21'),
(17, 3, 8, 1, 'preferenca', '2020-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'admin', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`kategoriaID`);

--
-- Indexes for table `klientet`
--
ALTER TABLE `klientet`
  ADD PRIMARY KEY (`klientiID`),
  ADD UNIQUE KEY `emaili` (`emaili`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuID`),
  ADD KEY `kategoriaID` (`kategoriaID`);

--
-- Indexes for table `porosite`
--
ALTER TABLE `porosite`
  ADD PRIMARY KEY (`porosiaID`),
  ADD KEY `klientiID` (`klientiID`),
  ADD KEY `menuID` (`menuID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `kategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `klientet`
--
ALTER TABLE `klientet`
  MODIFY `klientiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `porosite`
--
ALTER TABLE `porosite`
  MODIFY `porosiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`kategoriaID`) REFERENCES `kategorite` (`kategoriaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `porosite`
--
ALTER TABLE `porosite`
  ADD CONSTRAINT `porosite_ibfk_1` FOREIGN KEY (`klientiID`) REFERENCES `klientet` (`klientiID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `porosite_ibfk_2` FOREIGN KEY (`menuID`) REFERENCES `menu` (`menuID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
