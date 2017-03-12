-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Mrz 2017 um 15:19
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

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
  `Vorname` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Telefon` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tblansprechpartner`
--

INSERT INTO `tblansprechpartner` (`BetriebID`, `Vorname`, `Name`, `Telefon`, `Fax`, `Email`, `ID`) VALUES
(1, 'Stefan', 'Maier', '0945/43345', '0945/43522', 'ssensz@gmx.de', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblbetrieb`
--

CREATE TABLE `tblbetrieb` (
  `Nr` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `Strasse` text CHARACTER SET utf8 NOT NULL,
  `Ort` text NOT NULL,
  `Plz` int(10) NOT NULL,
  `Homepage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tblbetrieb`
--

INSERT INTO `tblbetrieb` (`Nr`, `Name`, `ID`, `Strasse`, `Ort`, `Plz`, `Homepage`) VALUES
(0, 'Das Team', 1, 'MusterstraÃŸe 6', 'Lichtenfels', 96215, 'https://www.dasteam.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblteilnahme`
--

CREATE TABLE `tblteilnahme` (
  `Teilnahme` tinyint(4) NOT NULL,
  `Flaeche` float NOT NULL,
  `Raum` tinyint(4) DEFAULT NULL,
  `Strom` tinyint(4) NOT NULL,
  `Bemerkung` text NOT NULL,
  `BetriebID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tblteilnahme`
--

INSERT INTO `tblteilnahme` (`Teilnahme`, `Flaeche`, `Raum`, `Strom`, `Bemerkung`, `BetriebID`, `ID`, `info`) VALUES
(1, 5, 0, 1, 'Internet', 1, 1, 'Test');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tblbetrieb`
--
ALTER TABLE `tblbetrieb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tblteilnahme`
--
ALTER TABLE `tblteilnahme`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
