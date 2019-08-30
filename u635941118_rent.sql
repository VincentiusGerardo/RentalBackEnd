-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 10.4.1.142:3306
-- Generation Time: Aug 30, 2019 at 05:31 PM
-- Server version: 10.2.24-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u635941118_rent`
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
  `Alamat` text DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `NomorHP` varchar(12) DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_admin`
--

INSERT INTO `ms_admin` (`ID_Admin`, `Nama`, `JK`, `NIK`, `Alamat`, `TanggalLahir`, `Email`, `Username`, `Password`, `NomorHP`, `FlagActive`) VALUES
(1, 'Administrator', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$sF.seUKQ8Eu6Wcd/Q7Q/Pu8f9pGtcJc5ahtGb9rq7UQCDKp6XdkVG', NULL, 'Y');

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

--
-- Dumping data for table `ms_jenismobil`
--

INSERT INTO `ms_jenismobil` (`ID_JenisMobil`, `JenisMobil`, `ID_Pengentri`, `TanggalEntri`, `FlagActive`) VALUES
(1, 'Mini Bus', 1, '2019-08-20 16:45:22', 'Y'),
(2, 'Sedan', 1, '2019-08-20 16:45:29', 'Y'),
(3, 'REIWA', 1, '2019-08-29 11:41:36', 'N'),
(4, 'ELF', 1, '2019-08-31 00:13:49', 'Y'),
(5, 'MPV', 1, '2019-08-31 00:16:48', 'Y');

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
  `PhotoURL` text DEFAULT NULL,
  `Transmisi` varchar(10) DEFAULT NULL,
  `BahanBakar` varchar(50) DEFAULT NULL,
  `StatusPinjam` char(1) DEFAULT 'N',
  `ID_Pengentri` int(11) DEFAULT NULL,
  `TanggalEntri` datetime DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_mobil`
--

INSERT INTO `ms_mobil` (`ID_Mobil`, `NamaMobil`, `PlatNomor`, `Harga`, `Kapasitas`, `Bagasi`, `TahunKeluaran`, `TarifDriver`, `ID_JenisMobil`, `Warna`, `PhotoURL`, `Transmisi`, `BahanBakar`, `StatusPinjam`, `ID_Pengentri`, `TanggalEntri`, `LastUpdate`, `FlagActive`) VALUES
(1, 'Nissan GT-R Nismo Special Edition', 'B 7777 UMZ', 10000000, 2, 1, 2019, 1000000, 2, 'White', '1_Nissan_GT-R_Nismo_Special_Edition1_30_08_2019_11:21:06_31_08_2019_00:28:20.jpg', 'Automatic', 'Bensin', 'N', 1, '2019-08-20 16:47:29', '2019-08-31 00:28:20', 'Y'),
(2, 'MAMA', 'B 360 LU', 400000000, 16, 2, 2015, 2000000, 2, 'HITAM', '2_asfasdfaw123123.jpg', 'Manual', 'Solar', 'N', 1, '2019-08-29 09:58:54', NULL, 'N'),
(3, 'asdasda', 'b asdasd', 2147483647, 2, 1, 2051, 20000000, 2, 'sdasda', '3_asdasda.png', 'Manual', 'Solar', 'N', 1, '2019-08-29 10:03:36', NULL, 'N'),
(4, 'asfasdfaw123123', 'asdas', 254673453, 2, 1, 2015, 2000000, 1, 'putih', '4_asfasdfaw123123.png', 'Manual', 'Solar', 'N', 1, '2019-08-29 10:05:11', NULL, 'N'),
(5, 'ANGELUS EFORD', 'B 360 LU', 254673453, 2, 1, 2015, 2000000, 2, 'putih', '5_asfasdfaw123123.png', 'Automatic', 'Bensin', 'N', 1, '2019-08-29 10:06:02', NULL, 'N'),
(6, 'asfasdfaw123123', 'asdas', 254673453, 2, 1, 2015, 20000000, 1, 'putih', '6_asfasdfaw123123.jpg', 'Automatic', 'Solar', 'N', 1, '2019-08-29 11:38:03', NULL, 'N'),
(7, 'ISUZU ELF NLR 55 B', 'B 9090 UYE', 400000000, 2, 1, 2015, 2000000, 4, 'ABU-ABU', '7_ELF.jpg', 'Manual', 'Solar', 'N', 1, '2019-08-31 00:15:17', NULL, 'Y'),
(8, 'Toyota All New Avanza', 'B 312 AK', 250000, 6, 2, 2017, 100000, 5, 'Silver', '8_Toyota_All_New_Avanza.jpg', 'Manual', 'Bensin', 'N', 1, '2019-08-31 00:18:14', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pelanggan`
--

CREATE TABLE `ms_pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `NamaPelanggan` varchar(50) DEFAULT NULL,
  `JK` varchar(10) DEFAULT NULL,
  `NIK` char(16) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NomorHP` varchar(12) DEFAULT NULL,
  `FlagActive` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_pelanggan`
--

INSERT INTO `ms_pelanggan` (`ID_Pelanggan`, `NamaPelanggan`, `JK`, `NIK`, `Alamat`, `TanggalLahir`, `Email`, `NomorHP`, `FlagActive`) VALUES
(1, 'Vincentius Gerardo', 'Laki-laki', '3171042611960003', 'Jl. Kali Baru Timur GG. IV A/12 RT 009/05', '1996-11-26', 'vincentiusgerardo11@gmail.com', '081293654545', 'Y'),
(2, 'Fandi Farhan Anas', 'Laki-laki', '3171042707970001', 'asdasd', '1997-07-27', 'anas.fandi@gmail.com', '081293654545', 'Y'),
(3, 'Elia Brian', 'Laki-laki', '12312313213123', 'sadadas', '2019-08-28', 'eliab@gmail.com', '123123123131', 'Y'),
(4, 'Vania Anastasya', 'Perempuan', '3171041601980001', 'bekasi', '1998-01-16', 'vaniaanas@gmail.com', '08788589625', 'Y'),
(5, 'Yugs', 'Laki-laki', '1414144444', 'Jl. Aja dulu sampe nyaman ', '1997-08-29', 'prayugao@gmail.com', '62625252522', 'Y');

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
  `BuktiPembayaran` text DEFAULT NULL,
  `StatusPembayaran` char(1) DEFAULT 'N',
  `ValidasiOleh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_rental`
--

INSERT INTO `tr_rental` (`ID_Rental`, `ID_Pelanggan`, `ID_Mobil`, `TanggalBooking`, `WaktuAmbil`, `WaktuKembali`, `Biaya`, `BuktiPembayaran`, `StatusPembayaran`, `ValidasiOleh`) VALUES
(1, 4, 1, '2019-05-07', '2019-05-07 10:00:00', '2019-05-10 12:00:00', 100000000, NULL, 'N', NULL);

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
  ADD PRIMARY KEY (`ID_Pelanggan`),
  ADD UNIQUE KEY `Email` (`Email`);

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
  MODIFY `ID_JenisMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ms_mobil`
--
ALTER TABLE `ms_mobil`
  MODIFY `ID_Mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ms_pelanggan`
--
ALTER TABLE `ms_pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tr_rental`
--
ALTER TABLE `tr_rental`
  MODIFY `ID_Rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
