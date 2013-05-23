# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: yourcontacts
# Generation Time: 2013-05-23 23:44:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`cid`, `uid`, `name`, `email`, `phone`)
VALUES
	(38,7,'contact1','contact1@mail.com','111111111111111'),
	(39,7,'contact2','contact2@mail.com','222222222222222'),
	(40,7,'contact3','contact3@mail.com','333333333333333'),
	(41,7,'contact4','contact4@mail.com','444444444444444'),
	(42,8,'contact1','contact1@mail.com','111111111111111'),
	(43,8,'contact2','contact2@mail.com','222222222222222'),
	(44,8,'contact3','contact3@mail.com','333333333333333'),
	(45,9,'contact1','contact1@mail.com','111111111111111'),
	(46,9,'contact2','contact2@mail.com','222222222222222'),
	(47,10,'contact1','contact1@mail.com','111111111111111'),
	(48,10,'contact2','contact2@mail.com','222222222222222'),
	(49,10,'contact3','contact3@mail.com','333333333333333'),
	(50,10,'contact4','contact4@mail.com','444444444444444'),
	(51,8,'contact4','contact4@mail.com','444444444444444'),
	(52,8,'contact5','contact5@mail.com','555555555555555'),
	(53,8,'contact6','contact6@mail.com','666666666666666'),
	(54,8,'contact7','contact7@mail.com','777777777777777'),
	(64,10,'contact5','contact5@mail.com','555555555555555'),
	(65,10,'contact6','contact6@mail.com','666666666666666'),
	(66,10,'contact7','contact7@mail.com','777777777777777'),
	(67,10,'contact8','contact8@mail.com','888888888888888'),
	(68,10,'contact9','contact9@mail.com','999999999999999'),
	(69,10,'contact10','contact10@mail.com','101010101010101'),
	(70,10,'contact11','contact11@mail.com','111111111111111'),
	(71,10,'contact12','contact12@mail.com','121212121212121'),
	(72,13,'contact1','contact1@mail.com','111111111111111'),
	(73,13,'contact2','contact2@mail.com','222222222222222'),
	(74,12,'conatct1','contact1@mail.com','111111111111111'),
	(75,11,'contact1','contact1@mail.com','111111111111111'),
	(76,11,'contact2','contact2@mail.com','222222222222222'),
	(77,11,'contact3','contact3@mail.com','333333333333333');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
