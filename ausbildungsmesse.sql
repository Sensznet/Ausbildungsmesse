-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Mrz 2017 um 10:49
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `ausbildungsmesse`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblansprechpartner`
--

CREATE TABLE `tblansprechpartner` (
  `BetriebID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Telefon` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblbetrieb`
--

CREATE TABLE `tblbetrieb` (
  `Nr` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `Strasse` text NOT NULL,
  `Ort` text NOT NULL,
  `Homepage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tblbetrieb`
--

INSERT INTO `tblbetrieb` (`Nr`, `Name`, `ID`, `Strasse`, `Ort`, `Homepage`) VALUES
(0, 'Das Team', 1, 'Musterstraße 6', 'Lichtenfels', 'www.dasteam.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblteilnahme`
--

CREATE TABLE `tblteilnahme` (
  `Teilnahme` tinyint(4) NOT NULL,
  `Flaeche` float NOT NULL,
  `Raum` tinyint(4) NOT NULL,
  `Strom` tinyint(4) NOT NULL,
  `Bemerkung` text NOT NULL,
  `BetriebID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tblansprechpartner`
--
ALTER TABLE `tblansprechpartner`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BetriebDBOID` (`BetriebID`),
  ADD KEY `BetriebID` (`BetriebID`);

--
-- Indizes für die Tabelle `tblbetrieb`
--
ALTER TABLE `tblbetrieb`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `tblteilnahme`
--
ALTER TABLE `tblteilnahme`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BetriebID` (`BetriebID`),
  ADD KEY `BetriebID_2` (`BetriebID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tblansprechpartner`
--
ALTER TABLE `tblansprechpartner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tblbetrieb`
--
ALTER TABLE `tblbetrieb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tblteilnahme`
--
ALTER TABLE `tblteilnahme`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tblansprechpartner`
--
ALTER TABLE `tblansprechpartner`
  ADD CONSTRAINT `tblansprechpartner_ibfk_1` FOREIGN KEY (`BetriebID`) REFERENCES `tblbetrieb` (`ID`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `tblteilnahme`
--
ALTER TABLE `tblteilnahme`
  ADD CONSTRAINT `tblteilnahme_ibfk_1` FOREIGN KEY (`BetriebID`) REFERENCES `tblbetrieb` (`ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;