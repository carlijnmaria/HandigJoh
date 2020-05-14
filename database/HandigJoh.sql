-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 14, 2020 at 07:47 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `HandigJoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `bestelnummer` int(11) NOT NULL,
  `besteldatum` datetime NOT NULL,
  `medewerkernummer` int(11) NOT NULL,
  `klantnummer` int(11) NOT NULL,
  `vestiging` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bestelregel`
--

CREATE TABLE `bestelregel` (
  `bestelnummer` int(11) NOT NULL,
  `productnummer` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `categorienummer` int(11) NOT NULL,
  `omschrijving` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`categorienummer`, `omschrijving`) VALUES
(1, 'Gereedschap'),
(2, 'Veevoer'),
(3, 'Algemeen'),
(4, 'Materiaal');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `klantnummer` int(11) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `tussenvoegsel` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klantnummer`, `voornaam`, `tussenvoegsel`, `achternaam`) VALUES
(1, 'Patrick', '', 'Laranjo'),
(2, 'Marieke', 'van ', 'Zantwijk'),
(4, 'Henk', 'van der', 'Steen'),
(5, 'Carlijn', 'den ', 'Hartog');

-- --------------------------------------------------------

--
-- Table structure for table `medewerker`
--

CREATE TABLE `medewerker` (
  `medewerkernummer` int(11) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `tussenvoegsel` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `vestigingnummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productnummer` int(11) NOT NULL,
  `omschrijving` varchar(45) NOT NULL,
  `prijs` int(11) NOT NULL,
  `categorienummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productnummer`, `omschrijving`, `prijs`, `categorienummer`) VALUES
(4, 'Schroevendraaier', 4, 1),
(5, 'Koeienvoer', 40, 2),
(6, 'Kippenvoer', 30, 2),
(7, 'Hamer', 15, 1),
(8, 'Kettingzaag', 150, 1),
(9, 'Houten planken', 9, 4),
(10, 'Vijverfolie', 15, 4),
(14, 'Schroeven', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusnummer` int(11) NOT NULL,
  `omschrijving` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vestiging`
--

CREATE TABLE `vestiging` (
  `vestigingnummer` int(11) NOT NULL,
  `omschijving` varchar(45) DEFAULT NULL,
  `adres` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `plaats` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`bestelnummer`),
  ADD KEY `fk_bestelling_medewerker1_idx` (`medewerkernummer`),
  ADD KEY `fk_bestelling_klant1_idx` (`klantnummer`),
  ADD KEY `fk_bestelling_vestiging1_idx` (`vestiging`),
  ADD KEY `fk_bestelling_status1_idx` (`status`);

--
-- Indexes for table `bestelregel`
--
ALTER TABLE `bestelregel`
  ADD PRIMARY KEY (`bestelnummer`,`productnummer`),
  ADD KEY `fk_bestelling_has_product_product1_idx` (`productnummer`),
  ADD KEY `fk_bestelling_has_product_bestelling1_idx` (`bestelnummer`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorienummer`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantnummer`);

--
-- Indexes for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`medewerkernummer`),
  ADD KEY `fk_medewerker_vestiging1_idx` (`vestigingnummer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productnummer`),
  ADD KEY `fk_product_categorie_idx` (`categorienummer`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusnummer`);

--
-- Indexes for table `vestiging`
--
ALTER TABLE `vestiging`
  ADD PRIMARY KEY (`vestigingnummer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `bestelnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categorienummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klantnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `medewerkernummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vestiging`
--
ALTER TABLE `vestiging`
  MODIFY `vestigingnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `fk_bestelling_klant1` FOREIGN KEY (`klantnummer`) REFERENCES `klant` (`klantnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bestelling_medewerker1` FOREIGN KEY (`medewerkernummer`) REFERENCES `medewerker` (`medewerkernummer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bestelling_status1` FOREIGN KEY (`status`) REFERENCES `status` (`statusnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bestelling_vestiging1` FOREIGN KEY (`vestiging`) REFERENCES `vestiging` (`vestigingnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bestelregel`
--
ALTER TABLE `bestelregel`
  ADD CONSTRAINT `fk_bestelling_has_product_bestelling1` FOREIGN KEY (`bestelnummer`) REFERENCES `bestelling` (`bestelnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bestelling_has_product_product1` FOREIGN KEY (`productnummer`) REFERENCES `product` (`productnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD CONSTRAINT `fk_medewerker_vestiging1` FOREIGN KEY (`vestigingnummer`) REFERENCES `vestiging` (`vestigingnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_categorie` FOREIGN KEY (`categorienummer`) REFERENCES `categorie` (`categorienummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;
