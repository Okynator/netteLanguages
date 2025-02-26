-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 26.Feb 2025, 14:18
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `showbet`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `code` char(2) NOT NULL,
  `flag` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `languages`
--

INSERT INTO `languages` (`id`, `code`, `flag`, `name`, `is_active`) VALUES
(1, 'sk', '🇸🇰', 'Slovak', 1),
(2, 'de', '🇩🇪', 'German', 1),
(3, 'en', '🇬🇧', 'English', 1),
(4, 'fr', '🇫🇷', 'French', 0),
(5, 'cz', '🇨🇿', 'Czech', 1),
(6, 'hu', '🇭🇺', 'Hungarian', 1),
(7, 'pl', '🇵🇱', 'Polish', 1),
(8, 'es', '🇪🇸', 'Spanish', 1),
(9, 'it', '🇮🇹', 'Italian', 1),
(10, 'pt', '🇵🇹', 'Portuguese', 1),
(11, 'ru', '🇷🇺', 'Russian', 0),
(12, 'cn', '🇨🇳', 'Chinese', 0),
(13, 'jp', '🇯🇵', 'Japanese', 0),
(14, 'kr', '🇰🇷', 'Korean', 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `translations`
--

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) NOT NULL,
  `locale` varchar(5) NOT NULL,
  `translation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexy pre tabuľku `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locale` (`locale`),
  ADD UNIQUE KEY `key_name` (`key_name`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pre tabuľku `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
