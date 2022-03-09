-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 14 Sty 2021, 18:04
-- Wersja serwera: 5.7.24
-- Wersja PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `transportowa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia`
--

CREATE TABLE `zlecenia` (
  `id` int(11) NOT NULL,
  `miasto_zal` varchar(64) COLLATE utf8_bin NOT NULL,
  `miasto_rozl` varchar(64) COLLATE utf8_bin NOT NULL,
  `ladunek` varchar(64) COLLATE utf8_bin NOT NULL,
  `firma` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `zlecenia`
--

INSERT INTO `zlecenia` (`id`, `miasto_zal`, `miasto_rozl`, `ladunek`, `firma`) VALUES
(1, 'Legnica', 'Grudziądz', 'Pomidory', 'Janusz-Fruit'),
(2, 'Bielsko-Biała', 'Żywiec', 'Piwo', 'TP Piwo'),
(3, 'Cieszyn', 'Ostrowiec Świętokrzyski', 'Słupki hektometryczne', 'Januszex'),
(4, 'Kielce', 'Piła', 'Piłki i zabawki', 'Budex'),
(5, 'Ostróda', 'Opole', 'Karma', 'Inxa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
