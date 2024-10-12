-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 09:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spikebike`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Poruka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`ID`, `Ime`, `Email`, `Poruka`) VALUES
(40, 'dfgdfg', 'matejvukovic2003@gmail.com', 'dsdds'),
(44, 'Bandi', 'brando@gmail.com', 'Nisam zadovoljan!'),
(45, 'Miksi', 'matejvukovic2003@gmail.com', 'MIKSI'),
(47, 'David', 'david@gmail.com', 'bla bla bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `cenovnik`
--

CREATE TABLE `cenovnik` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Usluga` varchar(255) NOT NULL,
  `Cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cenovnik`
--

INSERT INTO `cenovnik` (`ID`, `Naziv`, `Usluga`, `Cena`) VALUES
(26, 'Zamena kocnica', 'Menjanje kočnica na biciklu može biti važan deo održavanja bicikla, a takođe može poboljšati bezbednost i performanse.', 2500),
(27, 'Servisiranje amortizera', 'Servisiranje viljuški i amortizera na biciklu zahteva specijalne alate i znanje o podešavanju pritiska i opruga. Ovo je složeniji zadatak koji bi trebalo prepustiti stručnjacima ukoliko nemate odgovarajuće iskustvo.', 5000),
(28, 'Zamena lanca', 'Zamena lanca na biciklu je redovan deo održavanja, a pravilno obavljen postupak će produžiti vek trajanja lanca i pomoći u očuvanju performansi bicikla.', 3000),
(29, 'Zamena ležajeva i sistema pedala', 'Ako su ležajevi u oštećenom stanju, zamena ih može biti komplikovana. Podešavanje sistema pedala takođe zahteva pažnju kako bi se osigurala pravilna ravnoteža i funkcionalnost.', 5000),
(35, 'Promena Gume', 'Menjanje gume na biciklu je relativno jednostavan zadatak, ali ako niste sigurni u svoje veštine ili nemate odgovarajući alat, preporučujem da se obratite nama.', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cenovnik`
--
ALTER TABLE `cenovnik`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cenovnik`
--
ALTER TABLE `cenovnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
