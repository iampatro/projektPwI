-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 06 Cze 2020, 00:33
-- Wersja serwera: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- Wersja PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logowanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konfiguracje`
--

CREATE TABLE `konfiguracje` (
  `id` int(8) NOT NULL,
  `seria` varchar(12) NOT NULL,
  `dane` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `silnik` varchar(16) NOT NULL,
  `kolor` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `konfiguracje`
--

INSERT INTO `konfiguracje` (`id`, `seria`, `dane`, `email`, `silnik`, `kolor`) VALUES
(18, 'Seria 1', 'asdasd', 'asdasd', '3.0 240hp', 'Czarny'),
(20, 'Seria 1', 'patryk jurewicz', 'chwicewski1999@gmail.com', '3.0 240hp', 'Zielony'),
(21, 'Seria 3', 'asdad', 'asdasd', '1.6d 150hp', 'Czarny'),
(22, 'Seria 1', '', '', '1.6d 150hp', 'Czarny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personalne`
--

CREATE TABLE `personalne` (
  `ID` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `Telefon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `ID` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`ID`, `login`, `haslo`, `email`) VALUES
(1, 'marecki', 'qwerty123', 'maro123@gmail.com'),
(2, 'tadek76', 'qwerty111', 'tadek76@gmail.com'),
(3, 'amelka88', 'amelcia123', 'amelka88@gmail.com'),
(4, 'rysiek11', 'ryszard123', 'rysiek11@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `konfiguracje`
--
ALTER TABLE `konfiguracje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `personalne`
--
ALTER TABLE `personalne`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `konfiguracje`
--
ALTER TABLE `konfiguracje`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `personalne`
--
ALTER TABLE `personalne`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
