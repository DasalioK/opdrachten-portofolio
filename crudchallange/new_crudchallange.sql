-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2025 om 13:35
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new crudchallange`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `te_laat_meldingen`
--

CREATE TABLE `te_laat_meldingen` (
  `id` int(11) NOT NULL,
  `student_naam` varchar(100) NOT NULL,
  `klas` varchar(50) NOT NULL,
  `minuten_te_laat` int(11) NOT NULL,
  `reden` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `te_laat_meldingen`
--

INSERT INTO `te_laat_meldingen` (`id`, `student_naam`, `klas`, `minuten_te_laat`, `reden`) VALUES
(30, 'dasalio', '24A', 1, '2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `te_laat_meldingen`
--
ALTER TABLE `te_laat_meldingen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `te_laat_meldingen`
--
ALTER TABLE `te_laat_meldingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
