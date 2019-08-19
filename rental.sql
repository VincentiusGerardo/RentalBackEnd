-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 04:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_admin`
--

CREATE TABLE `ms_admin` (
  `ID_Admin` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `JK` varchar(10) DEFAULT NULL,
  `NIK` int(16) DEFAULT NULL,
  `Alamat` text,
  `TanggalLahir` date DEFAULT NULL,
  `Email` text,
  `Username` varchar(50) DEFAULT NULL,
  `Password` text,
  `NomorHP` varchar(12) DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_admin`
--

INSERT INTO `ms_admin` (`ID_Admin`, `Nama`, `JK`, `NIK`, `Alamat`, `TanggalLahir`, `Email`, `Username`, `Password`, `NomorHP`, `FlagActive`) VALUES
(1, 'Administrator', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$V.z81nG8A15OXYJg/278buCwAiYFpmUC7TSedDKCK.rzl5V.xkgem', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_jenismobil`
--

CREATE TABLE `ms_jenismobil` (
  `ID_JenisMobil` int(11) NOT NULL,
  `JenisMobil` varchar(50) DEFAULT NULL,
  `ID_Pengentri` int(11) DEFAULT NULL,
  `TanggalEntri` datetime DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_mobil`
--

CREATE TABLE `ms_mobil` (
  `ID_Mobil` int(11) NOT NULL,
  `NamaMobil` varchar(100) DEFAULT NULL,
  `PlatNomor` varchar(10) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL,
  `Bagasi` int(11) DEFAULT NULL,
  `TahunKeluaran` int(4) DEFAULT NULL,
  `TarifDriver` int(11) DEFAULT NULL,
  `ID_JenisMobil` int(11) DEFAULT NULL,
  `Warna` varchar(50) DEFAULT NULL,
  `PhotoURL` text,
  `Transmisi` varchar(10) DEFAULT NULL,
  `BahanBakar` varchar(50) DEFAULT NULL,
  `StatusPinjam` char(1) DEFAULT 'N',
  `ID_Pengentri` int(11) DEFAULT NULL,
  `TanggalEntri` datetime DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_pelanggan`
--

CREATE TABLE `ms_pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `NamaPelanggan` varchar(50) DEFAULT NULL,
  `JK` varchar(10) DEFAULT NULL,
  `NIK` char(16) DEFAULT NULL,
  `Alamat` text,
  `TanggalLahir` date DEFAULT NULL,
  `Email` text,
  `NomorHP` varchar(12) DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_rental`
--

CREATE TABLE `tr_rental` (
  `ID_Rental` int(11) NOT NULL,
  `ID_Pelanggan` int(11) DEFAULT NULL,
  `ID_Mobil` int(11) DEFAULT NULL,
  `TanggalBooking` date DEFAULT NULL,
  `WaktuAmbil` datetime DEFAULT NULL,
  `WaktuKembali` datetime DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `BuktiPembayaran` text,
  `StatusPembayaran` char(1) DEFAULT 'N',
  `ValidasiOleh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_admin`
--
ALTER TABLE `ms_admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `ms_jenismobil`
--
ALTER TABLE `ms_jenismobil`
  ADD PRIMARY KEY (`ID_JenisMobil`),
  ADD KEY `ms_jenismobil_ibfk_1` (`ID_Pengentri`);

--
-- Indexes for table `ms_mobil`
--
ALTER TABLE `ms_mobil`
  ADD PRIMARY KEY (`ID_Mobil`),
  ADD KEY `ms_mobil_ibfk_1` (`ID_JenisMobil`),
  ADD KEY `ms_mobil_ibfk_2` (`ID_Pengentri`);

--
-- Indexes for table `ms_pelanggan`
--
ALTER TABLE `ms_pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `tr_rental`
--
ALTER TABLE `tr_rental`
  ADD PRIMARY KEY (`ID_Rental`),
  ADD KEY `tr_rental_ibfk_1` (`ID_Pelanggan`),
  ADD KEY `tr_rental_ibfk_2` (`ID_Mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_admin`
--
ALTER TABLE `ms_admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ms_jenismobil`
--
ALTER TABLE `ms_jenismobil`
  MODIFY `ID_JenisMobil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_mobil`
--
ALTER TABLE `ms_mobil`
  MODIFY `ID_Mobil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_pelanggan`
--
ALTER TABLE `ms_pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_rental`
--
ALTER TABLE `tr_rental`
  MODIFY `ID_Rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ms_jenismobil`
--
ALTER TABLE `ms_jenismobil`
  ADD CONSTRAINT `ms_jenismobil_ibfk_1` FOREIGN KEY (`ID_Pengentri`) REFERENCES `ms_admin` (`ID_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_mobil`
--
ALTER TABLE `ms_mobil`
  ADD CONSTRAINT `ms_mobil_ibfk_1` FOREIGN KEY (`ID_JenisMobil`) REFERENCES `ms_jenismobil` (`ID_JenisMobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_mobil_ibfk_2` FOREIGN KEY (`ID_Pengentri`) REFERENCES `ms_admin` (`ID_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tr_rental`
--
ALTER TABLE `tr_rental`
  ADD CONSTRAINT `tr_rental_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `ms_pelanggan` (`ID_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_rental_ibfk_2` FOREIGN KEY (`ID_Mobil`) REFERENCES `ms_mobil` (`ID_Mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
