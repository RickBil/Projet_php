# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.28)
# Database: Gestion_Scolaire
# Generation Time: 2022-05-22 18:58:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table classe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `classe`;

CREATE TABLE `classe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



# Dump of table cours
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cours`;

CREATE TABLE `cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_cours` date NOT NULL,
  `heure_debut` varchar(10) NOT NULL,
  `heure_fin` varchar(10) NOT NULL,
  `classe_id` int NOT NULL,
  `module_id` int NOT NULL,
  `professeur_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classe_id` (`classe_id`),
  KEY `professeur_id` (`professeur_id`),
  KEY `module_id` (`module_id`),
  CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`),
  CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  CONSTRAINT `cours_ibfk_3` FOREIGN KEY (`professeur_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



# Dump of table inscription
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inscription`;

CREATE TABLE `inscription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `classe_id` int NOT NULL,
  `etudiant_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classe_id` (`classe_id`),
  KEY `inscription_ibfk_1` (`etudiant_id`),
  CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`etudiant_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



# Dump of table module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



# Dump of table professeur_module
# ------------------------------------------------------------

DROP TABLE IF EXISTS `professeur_module`;

CREATE TABLE `professeur_module` (
  `module_id` int NOT NULL,
  `professeur_id` int NOT NULL,
  KEY `module_id` (`module_id`),
  KEY `professeur_id` (`professeur_id`),
  CONSTRAINT `professeur_module_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  CONSTRAINT `professeur_module_ibfk_2` FOREIGN KEY (`professeur_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `grade` varchar(25) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `matricule` varchar(12) DEFAULT NULL,
  `img` longblob,
  `taille` int DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `tel` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
