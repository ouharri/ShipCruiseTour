-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 03:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipcruisetour`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `typeRom` int(11) DEFAULT NULL,
  `navire` int(11) DEFAULT NULL,
  `numberOfRom` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countrie`
--

CREATE TABLE `countrie` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `croisiére`
--

CREATE TABLE `croisiére` (
  `id` int(11) NOT NULL,
  `navire` int(11) DEFAULT NULL,
  `img` longblob DEFAULT NULL,
  `numberOfNight` int(11) DEFAULT NULL,
  `departmentPort` int(11) DEFAULT NULL,
  `DateOfDeparture` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cruiseitinery`
--

CREATE TABLE `cruiseitinery` (
  `id` int(11) NOT NULL,
  `port` int(11) DEFAULT NULL,
  `croisiére` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navire`
--

CREATE TABLE `navire` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `numberOfRom` int(11) DEFAULT NULL,
  `numberOfPlaces` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `countrie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `réservation`
--

CREATE TABLE `réservation` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `croisiére` int(11) DEFAULT NULL,
  `chambre` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typerom`
--

CREATE TABLE `typerom` (
  `id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `pasword` varchar(12) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeRom` (`typeRom`),
  ADD KEY `navire` (`navire`);

--
-- Indexes for table `countrie`
--
ALTER TABLE `countrie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `croisiére`
--
ALTER TABLE `croisiére`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navire` (`navire`),
  ADD KEY `departmentPort` (`departmentPort`);

--
-- Indexes for table `cruiseitinery`
--
ALTER TABLE `cruiseitinery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `port` (`port`),
  ADD KEY `croisiére` (`croisiére`);

--
-- Indexes for table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countrie` (`countrie`);

--
-- Indexes for table `réservation`
--
ALTER TABLE `réservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `croisiére` (`croisiére`),
  ADD KEY `chambre` (`chambre`);

--
-- Indexes for table `typerom`
--
ALTER TABLE `typerom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countrie`
--
ALTER TABLE `countrie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `croisiére`
--
ALTER TABLE `croisiére`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cruiseitinery`
--
ALTER TABLE `cruiseitinery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navire`
--
ALTER TABLE `navire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `réservation`
--
ALTER TABLE `réservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typerom`
--
ALTER TABLE `typerom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`typeRom`) REFERENCES `typerom` (`id`),
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`navire`) REFERENCES `navire` (`id`);

--
-- Constraints for table `croisiére`
--
ALTER TABLE `croisiére`
  ADD CONSTRAINT `croisiére_ibfk_1` FOREIGN KEY (`navire`) REFERENCES `navire` (`id`),
  ADD CONSTRAINT `croisiére_ibfk_2` FOREIGN KEY (`departmentPort`) REFERENCES `port` (`id`);

--
-- Constraints for table `cruiseitinery`
--
ALTER TABLE `cruiseitinery`
  ADD CONSTRAINT `cruiseitinery_ibfk_1` FOREIGN KEY (`port`) REFERENCES `port` (`id`),
  ADD CONSTRAINT `cruiseitinery_ibfk_2` FOREIGN KEY (`croisiére`) REFERENCES `croisiére` (`id`);

--
-- Constraints for table `port`
--
ALTER TABLE `port`
  ADD CONSTRAINT `port_ibfk_1` FOREIGN KEY (`countrie`) REFERENCES `countrie` (`id`);

--
-- Constraints for table `réservation`
--
ALTER TABLE `réservation`
  ADD CONSTRAINT `réservation_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `réservation_ibfk_2` FOREIGN KEY (`croisiére`) REFERENCES `croisiére` (`id`),
  ADD CONSTRAINT `réservation_ibfk_3` FOREIGN KEY (`chambre`) REFERENCES `chambre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
