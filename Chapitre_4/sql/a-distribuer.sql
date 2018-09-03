-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Septembre 2018 à 16:36
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `a-distribuer`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `Txt_title` varchar(255) NOT NULL,
  `Txt_description` varchar(255) NOT NULL,
  `idUser` int(11) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastEditDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tbl_news`
--

INSERT INTO `tbl_news` (`idNews`, `Txt_title`, `Txt_description`, `idUser`, `creationDate`, `lastEditDate`) VALUES
(6, 'My 6eme post', 'Mon 6eme post', 2, '2018-09-03 11:09:53', '2018-09-03 11:09:53'),
(8, 'My 7eme post', 'Salut jules ça va ? moi ça va bien au cas ou ', 2, '2018-09-03 11:28:21', '2018-09-03 11:33:38'),
(9, 'My 8eme post', 'Je m&#39;appelle seb\r\net j&#39;ai 12 000 ans', 9, '2018-09-03 11:39:37', '2018-09-03 11:40:27'),
(10, 'My 9eme post', 'salut salui\r\n\r\nLOL\r\nçA va\r\n\r\nDAB DE FEU', 9, '2018-09-03 11:42:29', '2018-09-03 13:01:01');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Txt_surname` varchar(45) NOT NULL,
  `Txt_name` varchar(45) NOT NULL,
  `Txt_login` varchar(45) NOT NULL,
  `Txt_password` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `Txt_surname`, `Txt_name`, `Txt_login`, `Txt_password`) VALUES
(2, 'Adar', 'Güner', 'Kadar', 'Super'),
(4, 'Louis', 'Choisy', 'Loïs', 'salut'),
(6, 'Jules', 'Stahli', 'Jul', '1234'),
(7, 'Florian', 'Burgener', 'Flo', '123'),
(8, 'Tanguy', 'Cavagna', 'Toguy', '1234'),
(9, 'Sebastien', 'Cuthbert', 'Seb', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
