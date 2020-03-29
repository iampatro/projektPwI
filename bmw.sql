-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2020, 19:53
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bmw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auto`
--

CREATE TABLE `auto` (
  `ID` int(11) NOT NULL,
  `MARKA` varchar(30) NOT NULL,
  `MODEL` varchar(30) NOT NULL,
  `MOC` varchar(30) NOT NULL,
  `SILNIK` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `auto`
--

INSERT INTO `auto` (`ID`, `MARKA`, `MODEL`, `MOC`, `SILNIK`) VALUES
(1, 'BMW', 'SERIA 1', '184 KM', '1998cm3'),
(2, 'BMW', 'SERIA 3', '220 KM', '2500cm3'),
(3, 'BMW', 'SERIA 5', '600 KM', '5600cm3'),
(4, 'BMW', 'SERIA 7', '498 KM', '5000cm3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID` int(8) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `Nazwisko` varchar(20) NOT NULL,
  `Miejscowosc` varchar(30) NOT NULL,
  `Telefon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`ID`, `Imie`, `Nazwisko`, `Miejscowosc`, `Telefon`) VALUES
(1, 'Jan', 'Kowalski', 'Białystok', 789304756),
(2, 'Mirosław', 'Stańczyk', 'Choroszcz', 567389201),
(3, 'Alicja', 'Nowak', 'Dojlidy', 536782912),
(4, 'Adam', 'Gaweł', 'Białystok', 876389212);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oferty`
--

CREATE TABLE `oferty` (
  `ID` int(8) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Cena` varchar(20) NOT NULL,
  `Przebieg` varchar(20) NOT NULL,
  `Vin` varchar(20) NOT NULL,
  `klienci_fk` int(8) NOT NULL,
  `auto_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oferty`
--

INSERT INTO `oferty` (`ID`, `Model`, `Cena`, `Przebieg`, `Vin`, `klienci_fk`, `auto_fk`) VALUES
(1, 'Seria 1', '200000 PLN', '100 ', 'TMAD351CADJ075080', 1, 2),
(2, 'Seria 3', '300000 PLN', '200', 'WF0SXXGCDS8S68720', 2, 1),
(3, 'Seria 5', '450000 PLN', '100', 'VF7GJKFWC93333517', 3, 3),
(4, 'Seria 7', '600000 PLN', '450', 'NMTEB16R40R045756', 4, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `oferty`
--
ALTER TABLE `oferty`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `klienci_fk` (`klienci_fk`),
  ADD KEY `auto_fk` (`auto_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `auto`
--
ALTER TABLE `auto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `oferty`
--
ALTER TABLE `oferty`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `oferty`
--
ALTER TABLE `oferty`
  ADD CONSTRAINT `oferty_ibfk_1` FOREIGN KEY (`klienci_fk`) REFERENCES `klienci` (`ID`),
  ADD CONSTRAINT `oferty_ibfk_2` FOREIGN KEY (`auto_fk`) REFERENCES `auto` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
