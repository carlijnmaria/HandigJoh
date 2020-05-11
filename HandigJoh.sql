-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2020 at 07:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HandigJoh`
--

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`categorienummer`, `omschrijving`) VALUES
(1, 'Gereedschap'),
(2, 'Veevoer'),
(3, 'Algemeen'),
(4, 'Materiaal');

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klantnummer`, `voornaam`, `tussenvoegsel`, `achternaam`) VALUES
(1, 'Patrick', '', 'Laranjo'),
(2, 'Marieke', 'van ', 'Zantwijk'),
(4, 'Henk', 'van der', 'Steen'),
(5, 'Carlijn', 'den ', 'Hartog');

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
(10, 'Vijverfolie', 15, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
