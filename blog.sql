-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 sep. 2019 à 18:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`) VALUES
(1, 'Mon titre', 'Oh, I always feared he might run off like this. Why, why, why didn\'t I break his legs? With a warning label this big, you know they gotta be fun! I\'m a thing. It\'s just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns. Also he got a race car. Is any of this getting through to you?\r\n\r\nThat\'s right, baby. I ain\'t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him! Enough about your promiscuous mother, Hermes! We have bigger problems. Who said that? SURE you can die! You want to die?!\r\n\r\nBender, being God isn\'t easy. If you do too much, people get dependent on you, and if you do nothing, they lose hope. You have to use a light touch. Like a safecracker, or a pickpocket. Can I use the gun?\r\n\r\nYou don\'t know how to do any of those. The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep. Why am I sticky and naked? Did I miss something fun?\r\n\r\nToo much work. Let\'s burn it and say we dumped it in the sewer. I decline the title of Iron Cook and accept the lesser title of Zinc Saucier, which I just made up. Uhhï¿½ also, comes with double prize money.\r\n\r\nIf rubbin\' frozen dirt in your crotch is wrong, hey I don\'t wanna be right. I\'m just glad my fat, ugly mama isn\'t alive to see this day. Why would a robot need to drink? I\'ll get my kit! Shinier than yours, meatbag.\r\n\r\nOh yeah, good luck with that. Pansy. If rubbin\' frozen dirt in your crotch is wrong, hey I don\'t wanna be right. Please, Don-Botï¿½ look into your hard drive, and open your mercy file!\r\n\r\nBender, we\'re trying our best. But I\'ve never been to the moon! Ven ve voke up, ve had zese wodies. I could if you hadn\'t turned on the light and shut off my stereo. Bender, we\'re trying our best.\r\n\r\nAnyone who laughs is a communist! We\'ll need to have a look inside you with this camera. Oh yeah, good luck with that. I was having the most wonderful dream. Except you were there, and you were there, and you were there!', '2019-08-11 19:02:06', '1'),
(2, 'Mon titre', 'Oh, I always feared he might run off like this. Why, why, why didn\'t I break his legs? With a warning label this big, you know they gotta be fun! I\'m a thing. It\'s just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns. Also he got a race car. Is any of this getting through to you?\r\n\r\nThat\'s right, baby. I ain\'t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him! Enough about your promiscuous mother, Hermes! We have bigger problems. Who said that? SURE you can die! You want to die?!\r\n\r\nBender, being God isn\'t easy. If you do too much, people get dependent on you, and if you do nothing, they lose hope. You have to use a light touch. Like a safecracker, or a pickpocket. Can I use the gun?\r\n\r\nYou don\'t know how to do any of those. The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep. Why am I sticky and naked? Did I miss something fun?\r\n\r\nToo much work. Let\'s burn it and say we dumped it in the sewer. I decline the title of Iron Cook and accept the lesser title of Zinc Saucier, which I just made up. Uhh… also, comes with double prize money.\r\n\r\nIf rubbin\' frozen dirt in your crotch is wrong, hey I don\'t wanna be right. I\'m just glad my fat, ugly mama isn\'t alive to see this day. Why would a robot need to drink? I\'ll get my kit! Shinier than yours, meatbag.\r\n\r\nOh yeah, good luck with that. Pansy. If rubbin\' frozen dirt in your crotch is wrong, hey I don\'t wanna be right. Please, Don-Bot… look into your hard drive, and open your mercy file!\r\n\r\nBender, we\'re trying our best. But I\'ve never been to the moon! Ven ve voke up, ve had zese wodies. I could if you hadn\'t turned on the light and shut off my stereo. Bender, we\'re trying our best.\r\n\r\nAnyone who laughs is a communist! We\'ll need to have a look inside you with this camera. Oh yeah, good luck with that. I was having the most wonderful dream. Except you were there, and you were there, and you were there!', '2019-08-13 00:00:00', '2');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `titre`) VALUES
(1, 'piscine'),
(4, 'Longboard');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
