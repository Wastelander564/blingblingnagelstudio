-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 mei 2024 om 14:04
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kleur1` varchar(10) NOT NULL,
  `kleur2` varchar(10) NOT NULL,
  `kleur3` varchar(10) NOT NULL,
  `kleur4` varchar(10) NOT NULL,
  `telefoonnummer` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `afspraakDatum` datetime NOT NULL,
  `verzondenDatumTijd` datetime NOT NULL,
  `nagelbijtArrangement` tinyint(1) DEFAULT NULL,
  `luxeManicure` tinyint(1) DEFAULT NULL,
  `nagelreparatie` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `afspraak`
--

INSERT INTO `afspraak` (`id`, `kleur1`, `kleur2`, `kleur3`, `kleur4`, `telefoonnummer`, `email`, `afspraakDatum`, `verzondenDatumTijd`, `nagelbijtArrangement`, `luxeManicure`, `nagelreparatie`) VALUES
(1, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-28 15:55:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
(2, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-28 15:55:00', '0000-00-00 00:00:00', 1, 1, 1),
(3, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-28 15:55:00', '0000-00-00 00:00:00', 1, 1, 1),
(4, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-28 15:55:00', '0000-00-00 00:00:00', 1, 1, 1),
(5, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-28 15:55:00', '0000-00-00 00:00:00', 1, 1, 1),
(6, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-12 16:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(7, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-12 16:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(8, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-12 16:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(9, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-04-21 16:04:00', '0000-00-00 00:00:00', 127, 1, 0),
(10, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-31 15:01:00', '2024-05-13 13:00:59', 1, 1, 0),
(11, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-25 15:07:00', '2024-05-13 13:07:28', 1, 1, 1),
(12, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-06-08 15:07:00', '2024-05-13 13:07:38', 0, 1, 1),
(13, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', 'anonymous@gmail.com', '2024-05-21 15:10:00', '2024-05-13 13:10:52', 1, 0, 0),
(14, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:37:48', 0, 0, 0),
(15, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:40:54', 0, 0, 0),
(16, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:41:22', 0, 0, 0),
(17, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:48:37', 0, 0, 0),
(18, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:52:43', 0, 0, 0),
(19, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:53:27', 0, 0, 0),
(20, '#b10a0a', '#c10a4a', '#ffffff', '#ff00ff', '1234567890', '', '0000-00-00 00:00:00', '2024-05-13 13:58:07', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
