-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`ID`, `NAME`, `EMAIL`, `AMOUNT`, `IMAGE`) VALUES
(1, 'Nollie', 'npaskell0@wikipedia.org', 38868, 'first.jpg'),
(2, 'Desiri', 'drandales1@de.vu', 53379, 'second.jpg'),
(3, 'Michelina', 'mlere2@bbc.co.uk', 48414, 'third.jpg'),
(4, 'Bamby', 'bduggary3@wordpress.org', 63153, 'fourth.jpg'),
(6, 'Garland', 'gmcquorkell5@privacy.gov.au', 70656, 'fifth.jpg'),
(7, 'Meris', 'mmetherell6@bloglines.com', 85754, 'sixth.jpg'),
(8, 'Brooke', 'bbankes7@domainmarket.com', 31836, 'seventh.jpg'),
(9, 'Husein', 'hsouness8@rediff.com', 28082, 'eighth.jpg'),
(10, 'Kathie', 'kletterese9@thetimes.co.uk', 100000, 'ninth.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
