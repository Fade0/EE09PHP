-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 13 Sty 2021, 20:31
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
-- Baza danych: `magazyn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` varchar(11) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Aaron', 'Zawadzki', 'Magazynier'),
(2, 'Ludwik', 'Kowalczyk', 'Brygadzista'),
(3, 'Piotr', 'Walczak', 'Magazynier'),
(4, 'Ksawery ', 'Adamski', 'Załadowca'),
(5, 'Fryderyk', 'Walczewski', 'Lider zesp.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia_mag`
--

CREATE TABLE `zlecenia_mag` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `ilosc_gotowe` int(11) NOT NULL,
  `ilosc_produkcja` int(11) NOT NULL,
  `ilosc_uszkodzone` int(11) NOT NULL,
  `pilnosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zlecenia_mag`
--

INSERT INTO `zlecenia_mag` (`id`, `nazwa`, `ilosc_gotowe`, `ilosc_produkcja`, `ilosc_uszkodzone`, `pilnosc`) VALUES
(1, 'stół', 15, 30, 11, 5),
(2, 'Meble biur. ZH2', 22, 44, 1, 2),
(3, 'Krzesło ZH3', 33, 12, 54, 7),
(4, 'Krzesło biur. ', 31, 44, 161, 3),
(5, 'Krzesło JAN', 51, 45, 13, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zmiany`
--

CREATE TABLE `zmiany` (
  `id` int(11) NOT NULL,
  `pracownik_id` int(11) NOT NULL,
  `hala` int(11) NOT NULL,
  `data_zmiany` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zmiany`
--

INSERT INTO `zmiany` (`id`, `pracownik_id`, `hala`, `data_zmiany`) VALUES
(1, 1, 3, '2021-01-13'),
(2, 2, 5, '2021-01-14'),
(3, 3, 5, '2021-01-14'),
(4, 3, 2, '2021-01-13'),
(6, 4, 2, '2021-01-15'),
(7, 5, 1, '2021-01-13');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zlecenia_mag`
--
ALTER TABLE `zlecenia_mag`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zmiany`
--
ALTER TABLE `zmiany`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zlecenia_mag`
--
ALTER TABLE `zlecenia_mag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT dla tabeli `zmiany`
--
ALTER TABLE `zmiany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
