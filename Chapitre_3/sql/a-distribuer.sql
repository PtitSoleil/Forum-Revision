-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 31 Août 2018 à 10:34
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
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_news`
--

INSERT INTO `tbl_news` (`idNews`, `Txt_title`, `Txt_description`, `idUser`) VALUES
(1, 'My first post', 'Lorem ipsum', 6),
(2, 'My second post', 'blablabla...', 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `Txt_surname`, `Txt_name`, `Txt_login`, `Txt_password`) VALUES
(2, 'Adar', 'Güner', 'Kadar', 'Super'),
(4, 'Louis', 'Choisy', 'Loïs', 'salut'),
(6, 'Jules', 'Stahli', 'Jul', '1234'),
(7, 'Florian', 'Burgener', 'Flo', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
