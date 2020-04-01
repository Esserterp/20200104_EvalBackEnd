-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2020 at 10:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

DROP TABLE IF EXISTS `housing`;
CREATE TABLE IF NOT EXISTS `housing` (
  `id_housing` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pc` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` varchar(4) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_housing`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id_housing`, `title`, `address`, `city`, `pc`, `area`, `price`, `photo`, `type`, `description`) VALUES
(3, 'House of Pain', '38 rue de strasbourg', 'Luxembourg', 2560, 256, '256546546.00', 'https://images.adsttc.com/media/images/5de3/1ca6/3312/fda8/2a00/00b3/large_jpg/001.jpg', 'rent', ''),
(4, 'House of Pain', '38 rue de strasbourg', 'Luxembourg', 2560, 256, '256546546.00', 'https://images.adsttc.com/media/images/5de3/1ca6/3312/fda8/2a00/00b3/large_jpg/001.jpg', 'rent', ''),
(5, 'House of Pain', '38 rue des debiles', 'Luxembourg', 2560, 4568, '1.00', 'https://www.architectureholic.com/wp-content/uploads/2018/11/Contemporary-home-architecture-exterior-590x358.jpg', 'sale', 'stipstip'),
(6, 'taudis', 'aucune', 'ou tu veux', 0, 1, '0.10', 'https://s1.lmcdn.fr/multimedia/b21501672167/produits/carton-de-demenagement-54-l-l-60-cm-x-h-30-cm-x-p-30-cm/72748886-1-0-5489764-v-000100000000.jpg', 'sale', 'C\'est la merde!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
