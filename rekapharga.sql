-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 09:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekapharga`
--

CREATE TABLE `rekapharga` (
  `id` int(11) UNSIGNED NOT NULL,
  `coa` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `totalrekap` varchar(11) DEFAULT NULL,
  `idspk` int(11) UNSIGNED NOT NULL,
  `tglspk` date DEFAULT NULL,
  `nospk` int(11) DEFAULT NULL,
  `qtypo` int(11) DEFAULT NULL,
  `hasil` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `idinv` int(11) UNSIGNED NOT NULL,
  `tglinv` int(11) DEFAULT NULL,
  `noinv` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `pu` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `idbayar` int(10) UNSIGNED NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `paytotal` int(11) DEFAULT NULL,
  `idmesin` int(11) UNSIGNED NOT NULL,
  `besar` int(11) DEFAULT NULL,
  `kecil` int(11) DEFAULT NULL,
  `shiftid` int(11) NOT NULL,
  `shiftpagi` varchar(11) DEFAULT NULL,
  `shiftmalam` varchar(11) DEFAULT NULL,
  `sabtupagi` varchar(11) DEFAULT NULL,
  `sabtumalam` varchar(11) DEFAULT NULL,
  `hpp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekapharga`
--
ALTER TABLE `rekapharga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idspk` (`idspk`),
  ADD KEY `invoiceid` (`idinv`),
  ADD KEY `idbayar` (`idbayar`),
  ADD KEY `mesinid` (`idmesin`),
  ADD KEY `shiftid` (`shiftid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekapharga`
--
ALTER TABLE `rekapharga`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
