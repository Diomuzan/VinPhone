-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Jun 2024 um 14:47
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

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
CREATE DATABASE IF NOT EXISTS `vinphone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vinphone`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240602162253', '2024-06-02 18:23:28', 144),
('DoctrineMigrations\\Version20240612074049', '2024-06-12 09:41:21', 200),
('DoctrineMigrations\\Version20240613091230', '2024-06-13 11:12:50', 124);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `description`, `role`) VALUES
(2, '2024-06-13', 'First news article on VinPhone', 'This is the very first news article on VinPhone and the purpose of this news article is to make sure that this news article gets properly inserted into the database and then displayed inside the news page. It can be lastly said that this news article is made for testing purposes.', '[\"ROLE_ADMIN\"], [\"ROLE_MEMBER\"]'),
(3, '2024-06-13', 'News article for admins', 'This is a news article for admins and the purpose of this news article is to make sure that this news article is properly inserted into the database. The second purpose of this news article it to make sure that this news article is lastly properly visible inside the news page for admins.', '[\"ROLE_ADMIN\"]'),
(4, '2024-06-13', 'News article for members', 'This is a news article for members and the purpose of this news article is to make sure that this news article is properly inserted into the database. The second purpose of this news article it to make sure that this news article is lastly properly visible inside the news page for members.', '[\"ROLE_MEMBER\"]'),
(5, '2024-06-13', 'News article for editing purposes', 'Nam consectetur leo sapien, eu placerat magna dignissim quis. Nulla sed turpis tortor. Ut id posuere nulla, nec gravida lacus. Sed at rhoncus turpis, non lacinia lacus. Cras suscipit libero velit, eu mattis leo commodo sit amet. Cras a lobortis elit, sit amet rhoncus metus. Aliquam elementum pellentesque est id lacinia. Maecenas ut dui feugiat, ultricies ipsum non.', '[\"ROLE_MEMBER\"], [\"ROLE_ADMIN\"]'),
(6, '2024-06-13', 'News article for detail purposes', 'This is a news article for everyone and the purpose of this news article is to make sure that this news article is properly inserted into the database. The second purpose of this news article it to make sure that the detail of this news article is properly visible inside the database.', '[\"ROLE_MEMBER\"], [\"ROLE_ADMIN\"]'),
(10, '2024-06-13', 'News article for deletion purposes', 'This is a news article for everyone and the purpose of this news article is to make sure that this news article is properly inserted into the database. The second purpose of this news article it to make sure that the detail of this news article is properly deleted from the database.', '[\"ROLE_MEMBER\"], [\"ROLE_ADMIN\"]');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news_user`
--

DROP TABLE IF EXISTS `news_user`;
CREATE TABLE `news_user` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `news_user`
--

INSERT INTO `news_user` (`news_id`, `user_id`) VALUES
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `phone`
--

DROP TABLE IF EXISTS `phone`;
CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `user_id_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `phone`
--

INSERT INTO `phone` (`id`, `user_id_id`, `brand`, `model`, `price`) VALUES
(2, 4, 'LG', 'Chocolate', '€20,00'),
(3, 4, 'Nokia', 'N-Gage', '€80,00'),
(4, 4, 'Samsung', 'SGH-F300', '€100,00'),
(5, 4, 'Samsung', 'M7600 Beat DJ', '€20,00'),
(6, 3, 'Nokia', '3310', '€10,00'),
(7, 3, 'Motorola', 'Razr', '€25,00'),
(8, 3, 'Motorola', 'Aura R1', '€2000,00'),
(9, 3, 'Samsung', 'SGH-i900 Omnia', '€20,00'),
(10, 3, 'LG', 'Prada', '€50,00'),
(11, 4, 'Samsung', 'SGH-P300', '€60,00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(1, 'PhoneCollectorsJapan', '[\"ROLE_MEMBER\"]', '$2y$13$WzCB5tedpfjDorRx3.Vw7O9tCfV7apz.eeu19kB.JANDwcVTg3ddC'),
(2, 'Pug', '[\"ROLE_MEMBER\"]', '$2y$13$2.rMyGN7FPw.MzIANB8ituGKXxM2SkDYLkwEgMEVvhhnO202itnqy'),
(3, 'DestructiveDan', '[\"ROLE_ADMIN\"]', '$2y$13$pO8aYVq2D5Pxjqd4ATYty.1wd987.uuDttDg05IWICvwWzd6NS3K2'),
(4, 'VinPhoneDivision', '[\"ROLE_ADMIN\"]', '$2y$13$jLEwNtxAUOL4VGSF8yPzjeS/mAuRpGaXlOCu8MhCY9MLe0MwIFxee');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indizes für die Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `news_user`
--
ALTER TABLE `news_user`
  ADD PRIMARY KEY (`news_id`,`user_id`),
  ADD KEY `IDX_584E20C2B5A459A0` (`news_id`),
  ADD KEY `IDX_584E20C2A76ED395` (`user_id`);

--
-- Indizes für die Tabelle `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_444F97DD9D86650F` (`user_id_id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `news_user`
--
ALTER TABLE `news_user`
  ADD CONSTRAINT `FK_584E20C2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_584E20C2B5A459A0` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `FK_444F97DD9D86650F` FOREIGN KEY (`user_id_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
