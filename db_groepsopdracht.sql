-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 13 dec 2018 om 13:45
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `db_groepsopdracht`
--
CREATE DATABASE IF NOT EXISTS `db_groepsopdracht` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_groepsopdracht`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Naam` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Tussenvoegsel` text CHARACTER SET utf8 COLLATE utf8_bin,
  `Achternaam` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Gebruikersnaam` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Wachtwoord` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Geboortedatum` date NOT NULL,
  PRIMARY KEY (`Gebruikersnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`Naam`, `Tussenvoegsel`, `Achternaam`, `Email`, `Gebruikersnaam`, `Wachtwoord`, `Geboortedatum`) VALUES
('Boas', 'in ''t', 'Veld', 'boasintveld@hotmail.nl', 'boasintveld', '2624', '2001-09-14'),
('Michiel', '', 'antonissen', 'michielantonissen@hotmail.com', 'michielantonissen123', 'bamiislekker', '1987-10-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
