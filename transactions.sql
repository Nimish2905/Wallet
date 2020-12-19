-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 06:59 PM
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TRANSFER_DATE` text NOT NULL,
  `FROM_ACCOUNT` int(11) NOT NULL,
  `FROM_NAME` text NOT NULL,
  `TO_ACCOUNT` int(11) NOT NULL,
  `AMOUNT_TRANSFER` int(11) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TRANSFER_DATE`, `FROM_ACCOUNT`, `FROM_NAME`, `TO_ACCOUNT`, `AMOUNT_TRANSFER`, `MESSAGE`) VALUES
('16-12-2020 10:51:56 am', 1, 'Nollie', 4, 6000, 'Sample'),
('16-12-2020 10:52:26 am', 1, 'Nollie', 8, 10000, 'Sample'),
('18-12-2020 18:54:40 pm', 1, 'Nollie', 7, 20000, 'Sample'),
('19-12-2020 04:41:48 am', 3, 'Michelina', 1, 10000, 'Sample'),
('19-12-2020 10:59:35 am', 4, 'Bamby', 1, 10000, 'Sample'),
('19-12-2020 11:24:06 am', 7, 'Meris', 1, 10000, 'Sample'),
('19-12-2020 11:32:09 am', 10, 'Kathie', 8, 10000, 'Sample'),
('19-12-2020 17:55:27 pm', 1, 'Nollie', 6, 10000, 'Sample'),
('19-12-2020 18:10:39 pm', 1, 'Nollie', 10, 10000, 'Sample'),
('19-12-2020 18:29:37 pm', 1, 'Nollie', 6, 376, 'Sample'),
('19-12-2020 18:30:25 pm', 10, 'Kathie', 1, 28868, 'Sample');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
