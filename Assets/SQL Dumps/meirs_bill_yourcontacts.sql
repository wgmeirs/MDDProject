# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: yourcontacts
# Generation Time: 2013-05-30 16:30:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contacts` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`uid`, `email`, `password`, `contacts`)
VALUES
	(7,'user2@mail.com','ee11cbb19052e40b07aac0ca060c23ee',4),
	(8,'user3@mail.com','ee11cbb19052e40b07aac0ca060c23ee',7),
	(9,'user4@mail.com','ee11cbb19052e40b07aac0ca060c23ee',2),
	(10,'user1@mail.com','ee11cbb19052e40b07aac0ca060c23ee',12),
	(11,'user5@mail.com','ee11cbb19052e40b07aac0ca060c23ee',3),
	(12,'user6@mail.com','ee11cbb19052e40b07aac0ca060c23ee',1),
	(13,'user7@mail.com','ee11cbb19052e40b07aac0ca060c23ee',2),
	(14,'greyhoundjoey@yahoo.com','c726698620762d88f738be4a294fae79',0),
	(15,'bill.meirs@gmail.com','6b3f74d6ac3df04708cf3bad1e1de60c',0),
	(16,'wgmeirs@fullsail.edu','d10ce830ebd527096ac646521c5ed0ff',0),
	(17,'joeyhound@yahoo.com','81dc9bdb52d04dc20036dbd8313ed055',0),
	(18,'Moose@moosehead.com','2fe7cec3131fa9662906ecfb2eac8a49',0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
