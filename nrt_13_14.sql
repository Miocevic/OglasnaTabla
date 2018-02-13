-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 02:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrt_13_14`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `kategorija_id` int(11) NOT NULL,
  `kategorija_naslov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`kategorija_id`, `kategorija_naslov`) VALUES
(1, 'prva kategorija'),
(2, 'druga kategorija');

-- --------------------------------------------------------

--
-- Table structure for table `oglasi`
--

CREATE TABLE `oglasi` (
  `oglas_id` int(11) NOT NULL,
  `oglas_naslov` varchar(100) NOT NULL,
  `oglas_sadrzaj` text NOT NULL,
  `oglas_datum` date NOT NULL,
  `oglas_kategorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oglasi`
--

INSERT INTO `oglasi` (`oglas_id`, `oglas_naslov`, `oglas_sadrzaj`, `oglas_datum`, `oglas_kategorija`) VALUES
(2, 'Drugi oglas', 'ovo je drugi oglas', '2016-09-21', 2),
(3, 'Treci oglas', 'ovo je treci oglas', '2016-09-22', 1),
(4, 'Cetvrti oglas', 'ovo je cetvrti oglas', '2016-09-23', 1),
(5, 'Peti oglas azuriran', 'ovo je 5 oglas azuriran', '2016-09-24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`kategorija_id`);

--
-- Indexes for table `oglasi`
--
ALTER TABLE `oglasi`
  ADD PRIMARY KEY (`oglas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `kategorija_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `oglasi`
--
ALTER TABLE `oglasi`
  MODIFY `oglas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
