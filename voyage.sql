-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2018 at 07:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id_accueil` int(11) DEFAULT NULL,
  `titre_accueil` varchar(60) DEFAULT NULL,
  `texte_accueil` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `commentaire` text NOT NULL,
  `id_article` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `commentaire`, `id_article`) VALUES
(11, 'JJ', 'Je trouve que si revn', '<p>5hgq5hg</p>'),
(10, 'Truc', 'Trqitrqi bo le sith', '<p>dede</p>'),
(9, 'Test', 'Pls work', '<p>dede</p>');

-- --------------------------------------------------------

--
-- Table structure for table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `id_inscrit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_inscrit` varchar(50) DEFAULT NULL,
  `prenom_inscrit` varchar(50) DEFAULT NULL,
  `date_naiss` date NOT NULL,
  `ville` varchar(60) NOT NULL,
  `pays` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_inscrit`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscrit`
--

INSERT INTO `inscrit` (`id_inscrit`, `nom_inscrit`, `prenom_inscrit`, `date_naiss`, `ville`, `pays`, `email`, `mot_de_passe`) VALUES
(20, 'Percheron', 'Nathan', '1997-11-29', 'BrÃ©al sous Montfort', 'France', 'percheron.nathan@outlook.fr', 'nathan'),
(23, 'Trefouel', 'Anaelle', '1998-12-13', 'Lannion', 'France', 'anaelle.trefouel@laposte.net', 'laurence');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(60) NOT NULL,
  `text_article` text NOT NULL,
  `location` varchar(60) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id_pays`, `titre_article`, `text_article`, `location`) VALUES
(9, '<p>Test 2</p>', '<p>WOE IS ME</p>', 'Chine'),
(3, '<p>dwd</p>', '<p>dwdw</p>', 'France'),
(4, '<p>eferg</p>', '<p>wefwefef</p>', 'Angleterre'),
(10, '<p>ww</p>', '<p>xe</p>', 'Chine'),
(8, '<p>Test</p>', '<p>ededed</p>', 'Chine'),
(11, '<p>ffff</p>', '<p>&nbsp;fbfff</p>', 'France'),
(12, '<p>rherher</p>', '<p>hdrhdrh</p>', 'Japon'),
(14, '<p>dede</p>', '<p>etbartbra</p>\r\n<p>tb</p>\r\n<p>rtb</p>\r\n<p>artb</p>\r\n<p>rtb</p>\r\n<p>tb</p>\r\n<p>artb</p>\r\n<p>rtbry</p>\r\n<p>nryn</p>\r\n<p>ryn</p>\r\n<p>rtn</p>\r\n<p>rt</p>\r\n<p>bt</p>\r\n<p>br</p>\r\n<p>brtg</p>\r\n<p>br</p>\r\n<p>tnbfrg</p>\r\n<p>sgn</p>\r\n<p>trba</p>\r\n<p>rtbna</p>\r\n<p>rtb</p>\r\n<p>adt</p>\r\n<p>bafg</p>\r\n<p>nas</p>\r\n<p>fgnw</p>\r\n<p>srtns</p>\r\n<p>rgnsf</p>\r\n<p>nwr</p>\r\n<p>&nbsp;</p>', 'Chine'),
(15, '<p>f4ff4f4f</p>', '<p>wegthrtaetqe</p>', 'Inde'),
(16, '<p>hhwrthwtb</p>', '<p>rthwrthwr</p>', 'Etats-Unis'),
(17, '<p>qefaergerg</p>', '<p>tbtbqrbqtb</p>', 'Etatsunis'),
(18, '<p>5hgq5hg</p>', '<p>aegeq</p>', 'Etatsunis'),
(19, '<p>erger</p>', '<p>bateba</p>', 'Etats-unis');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
