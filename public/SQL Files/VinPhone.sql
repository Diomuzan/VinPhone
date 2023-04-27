-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Apr 2023 um 21:48
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `vinphone`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `phone_collection`
--

CREATE TABLE `phone_collection` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `phone_collection`
--

INSERT INTO `phone_collection` (`id`, `brand`, `model`, `price`) VALUES
(1, 'Nokia ', 'N95', '€70,00'),
(2, 'Samsung', 'SGH-P300', '€25,00'),
(3, 'Samsung', 'SGH-F300', '€46,24'),
(4, 'Samsung', 'M7600 Beat DJ', '€30,37'),
(5, 'Nokia', 'N900', '€151,87'),
(6, 'LG', 'Cookie', '€9,00'),
(7, 'LG', 'Cookie Style T310', '€5,00'),
(8, 'Nokia', '3310', '€35,00'),
(9, 'Nokia', 'N-Gage', '€67,74'),
(10, 'Nokia', 'N-Gage QD', '€82,39'),
(11, 'Nokia ', '8800 Sirocco', '€225,00'),
(12, 'Nokia', '3650', '€39,00'),
(13, 'Nokia', 'N90', '€81,50'),
(14, 'Nokia', '6810', '€65,73'),
(15, 'Nokia', '9110 Communicator', '€54,33'),
(16, 'Nokia ', '8110', '€49,99'),
(17, 'Nokia ', '3210', '€37,00\r\n'),
(18, 'Nokia', '6310', '€30,00'),
(19, 'Nokia', 'E71', '€25,00'),
(20, 'Nokia ', '7650', '€92,53'),
(21, 'Nokia', '7600', '€112,90'),
(22, 'Nokia', '8210', '€31,77'),
(23, 'Nokia', '808 PureView', '€45,00'),
(24, 'Nokia', '7280', '€145,65'),
(25, 'Motorola', 'Razr', '€32,50'),
(26, 'Motorola', 'Aura R1', '€2200,00'),
(27, 'Blackberry', 'Curve 8520', '€50,00'),
(28, 'Nokia', '8310', '€35,00'),
(29, 'Nokia', '3250', '€119,43'),
(30, 'Samsung', 'Champ', '€18,74'),
(31, 'Samsung ', 'Champ 2', '€33,30'),
(32, 'Samsung ', 'Galaxy GT-i7500', '€55,90'),
(33, 'Samsung ', 'S3650 Corby', '€14,99'),
(34, 'LG ', 'Prada', '€181,10'),
(35, 'LG ', 'Prada II', '€40,00'),
(36, 'Samsung', 'SGH-R225', '€32,86'),
(37, 'Samsung ', 'SGH-Q105', '€43,82'),
(38, 'LG ', 'G4010', '€27,38'),
(39, 'Samsung', 'SCH-U470 Juke', '€62,69'),
(40, 'LG', 'Cookie', '€50,00'),
(41, 'Samsung', 'SGH-D600', '€16,00'),
(42, 'Samsung', 'SGH-D900', '€20,44'),
(43, 'Samsung', 'SGH-U800', '€35,00'),
(44, 'Samsung', 'SGH-i900 Omnia', '€19,19'),
(45, 'Samsung ', 'i8910 Omnia', '€37,33'),
(46, 'Nokia ', 'E90 Communicator', '€120,00'),
(47, 'Nokia ', 'Communicator 9000', '€289,00'),
(48, 'Nokia', 'E7', '€75,00'),
(49, 'Nokia', 'N9', '€100,00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `phone_collection`
--
ALTER TABLE `phone_collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `phone_collection`
--
ALTER TABLE `phone_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
