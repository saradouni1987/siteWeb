-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 06 fév. 2022 à 15:36
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `onlinestore99`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Enfant'),
(2, 'Homme'),
(3, 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `commune_id` int(11) NOT NULL,
  `commune_title` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`commune_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`commune_id`, `commune_title`) VALUES
(1, 'Ballan-Mire'),
(2, 'Berthenay'),
(3, 'Chambray-l&egrave;s-Tours'),
(4, 'Chanceaux-sur-Choisille'),
(5, 'Druye'),
(6, 'Fondettes '),
(7, 'Jou&eacute;-l&egrave;s-Tours'),
(8, 'La Membrolle-sur-Choisille'),
(9, 'La Riche'),
(10, 'Luynes '),
(11, 'Mettray'),
(12, 'Parcay-Meslay\r\n'),
(13, 'Rochecorbon'),
(14, 'Saint-Avertin'),
(15, 'Saint-Cyr-sur-Loire\r\n'),
(16, 'Saint-Etienne-de-Chigny'),
(17, 'Saint-Genouph'),
(18, 'Saint-Pierre-des-Corps\r\n'),
(19, 'Savonnieres'),
(20, 'Tours'),
(21, 'Villandry');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat_id` int(100) NOT NULL,
  `product_brand_id` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_cat_id`, `product_brand_id`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 9, 'Veste gar&ccedil;on 5 ans', 0, 'Je donne une veste pour gar&ccedil;on', 'kids1.jpg', 'VESTE'),
(2, 1, 20, 'Pantalon gar&ccedil;ons 6 ans', 0, 'un lot de pantalons &agrave; venir r&eacute;cup&eacute;rer 	&agrave; Tours', 'kids2.JPG', 'Pantalon'),
(3, 1, 7, 'Veste gar&ccedil;on 5 ans', 0, ' Veste en bon &eacute;tat remise en mains propres', 'kids3.JPG', 'Veste'),
(4, 1, 6, 'Lot de t-shirt gar&ccedil;on ', 0, '', 'kids5.JPG', 't-shirt'),
(5, 1, 20, 'Haut fille', 0, 'Haut en bon &eacute;tat', 'kids4.JPG', 'Haut fille'),
(6, 1, 9, 'v&ecirc;tements b&egrave;b&egrave;', 0, '', 'kids6.JPG', 'b&egrave;b&egrave;'),
(7, 1, 2, 'Doudoune 12 mois', 0, 'Doudoune sans manche 12 mois ', 'kids7.JPG', 'Doudoune'),
(8, 1, 20, 'V&ecirc;tements fille 3 mois ', 0, 'V&ecirc;tements b&egrave;b&egrave; fille 3 mois en bon &eacute;tat', 'fille1.JPG', ' fille'),
(9, 1, 20, 'Jupe 6 ans', 0, 'Retrait chez moi sur Tours', 'jupe.JPG', 'JUPE'),
(10, 1, 20, 'Jean T36', 0, 'Pantalon en bon &eacute;tat', 'femme8.JPG', 'pantalon'),
(11, 2, 20, 'Blouson XL', 0, 'Blouson port&eacute; quelque fois', 'homme3.JPG', 'blouson'),
(12, 2, 3, 'T-shirt L', 0, 'T-shirt L en bon &eacute;tat ', 'homme2.JPG', 't-shirt'),
(13, 2, 9, 'Sweat XXL', 1450, 'Sweat &agrave; venir r&eacute;cup&eacute;rer &agrave la riche', 'homme8.JPG', 'sweat homme'),
(14, 2, 7, 'Gant L', 0, 'Retrait chez moi sur Jou&eacute;-l&egrave;s-Tours', 'homme10.JPG', 'Gant '),
(15, 2, 9, 'Chemises XXL', 0, 'Chemises &agrave; venir r&eacute;cup&eacute;rer &agrave la riche', 'homme7.JPG', 'chemise'),
(16, 2, 9, 'Blouson XL', 0, 'Blouson en bon &eacute;tat ', 'homme4.JPG', 'blouson homme'),
(17, 2, 20, 'Chaussure P42', 0, 'Chaussure en bon &eacute;tat', 'homme9.JPG', 'chaussure homme'),
(18, 2, 7, 'Chemise L', 0, 'Chemise port&eacute;e une fois', 'homme6.PNG', 'chemise homme'),
(19, 2, 9, 'T-shirt L', 0, 'T-shirt L en bon &eacute;tat ', 'homme1.png', 't-shirt'),
(20, 2, 3, 'Chemise L', 0, 'Chemise port&eacute;e une fois', 'homme5.png', 'Chemise homme'),
(37, 3, 20, 'Pull M', 0, 'Pull Bershka taille M', 'femme.JPG', 'pull femme'),
(38, 3, 4, 'Haut S', 0, 'Haut rose en bon &eacute;tat', 'femme1.JPG', 'haut femme'),
(39, 3, 4, 'veste M', 0, 'Veste Jennyfer en bon &eacute;tat', 'femme2.JPG', 'veste'),
(40, 3, 9, 'Jupe T36', 0, 'Jupe taille 36', 'femme3.JPG', 'jupe'),
(41, 3, 7, 'Pantalon de jogging T36', 1350, 'Pantalon  T36', 'femme6.JPG', 'pantalon femme'),
(42, 3, 9, 'Sac noir', 0, 'sac noir &eacute;tat moyen', 'femme10.JPG', 'sac'),
(43, 3, 9, 'Jupe T38', 0, 'Jupe T38', 'Femme4.JPG', 'jupe'),
(44, 3, 20, 'Chaussure P40', 0, 'Chaussure &eacute;tat moyen', 'femme9.JPG', 'chaussure'),
(45, 3, 20, 'Jupe T36', 0, 'Jupe 36', 'femme5.JPG', 'jupe'),
(49, 1, 9, 'pyjama', 0, 'pyjama pour garÃ§on', 'https://thumbs.dreamstime.com/z/children-s-clothes-23282090.jpg', 'pyjama');

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Yasmina', 'Kerfouf', 'sweet_luna@hotmail.fr', 'd44e1f75f9c5eb664b0e85d2d5029880', '0758186887', 'Tours', 'tours '),
(4, 'Azzedine', 'Saradouni', 'azzedine@hotmail.fr', 'd44e1f75f9c5eb664b0e85d2d5029880', '0788356776', 'tours', 'tours'),
(5, 'Elisabeth', 'Ela', 'elisabeth@hotmail.com', 'd44e1f75f9c5eb664b0e85d2d5029880', '0786765435', 'tours', 'tours'),
(6, 'Azze', 'Saradounii', 'kerfoufyasmina@hotmail.com', 'd44e1f75f9c5eb664b0e85d2d5029880', '0786754834', 'tours', 'la riche'),
(7, 'Moundi', 'FER', 'ker.kaho@gmail.com', 'd44e1f75f9c5eb664b0e85d2d5029880', '0766456473', 'tours', 'tours'),
(8, 'Moh', 'Maouche', 'mohand@hotmail.fr', 'd44e1f75f9c5eb664b0e85d2d5029880', '0786980768', 'paris', 'paris'),
(9, 'Mou', 'KER', 'mouni@hotmail.com', 'd44e1f75f9c5eb664b0e85d2d5029880', '0567890797', 'tours', 'tours'),
(10, 'Yas', 'Kerf', 'yasmina123@hotmail.com', 'd44e1f75f9c5eb664b0e85d2d5029880', '0789567843', 'PARIS', 'PARIS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
