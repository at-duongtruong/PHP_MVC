-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: 192.168.33.10    Database: blogmvc
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` longtext,
  `author` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `picture` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Em Gai Mua','Ngoai Troi Dang Mua','Mua To Qua ',NULL,NULL,NULL),(2,'Anh Trai Nang','Ngoai Troi Dang N','Nang Hoai The B',NULL,NULL,NULL),(3,'mmmmm','123231','543543543',NULL,'2017-12-04 00:00:00',NULL),(4,'mmmmmmmmm','444444','11111111',NULL,'2017-12-04 00:00:00',NULL),(5,'7777777','4444444','11111111',NULL,'2017-12-04 00:00:00',NULL),(6,'bbbbbb','baaaaaa','3434343',NULL,'2017-12-04 00:00:00',NULL),(7,'666666','222222','111111',NULL,'2017-12-04 00:00:00',NULL),(8,'6666666','333333','111111',NULL,'2017-12-04 00:00:00',NULL),(9,'hhhhhhhh','gggggggg','mmmmmmm',NULL,'2017-12-04 00:00:00',NULL),(10,'bbbnvnvnvnvnv','cxcxcxcxcxcx','zzzzzzzzzzzzz',NULL,'2017-12-06 00:00:00',NULL),(11,'ppppppppppppppp','999999999999999','0000000000000000',NULL,'2017-12-06 00:00:00',NULL),(12,'0000000000000000','99999999999999999','11111111111111111111111111',NULL,'2017-12-07 00:00:00',NULL),(13,'gdfgfdgf','fgfdg','fgfdgfdgfg',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(14,'6666666666666','7777777777777777','333333333333333',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(15,'776576575','hgfhgfhgfhgf','5435435435333',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(16,'000000000000000000000','11111111111111111111111111111111111','222222222222222222222222222',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(17,'hohohohoho','hahahahhaah','hihihiihih',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(18,'vvvvvvvvvvvvvvv','zzzzzzzzzzzzzzzz','aaaaaaaaaaaaaaaaaaaaaaaa',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(19,'dfdf','sdfdsf','dfdsf',NULL,'2017-12-07 00:00:00','uploads/fbnattlnligppadrncul.png'),(20,'lalalalalalala','leleleelelelelele','lililililili','duong','2017-12-08 02:42:26','uploads/fbnattlnligppadrncul.png');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'duong','123456','duongtruong'),(2,'duong123','123456','truongduong'),(3,'ddsfdsf','dsfdsfdfdsf','123456'),(4,'adminx','123456','fgfdgdfg'),(5,'mmmmm','123456','vvvvv'),(6,'ppppp','123456','xxxxx'),(7,'nnnnn','123456','ttttt'),(8,'iiiii','123456','vvvvv'),(9,'iiiii','123456','vvvvv'),(10,'ooooo','123456','bbbbbb'),(11,'ubuntu','123456','ggdgd'),(12,'nvbnvnv','533445543','bcbbcbc'),(13,'vvvvvv','vvvvvvvv','xxxxxxx'),(14,'nnnnnnnnnn','444444444','9999999999'),(15,'y8y8y8','123456','bbbbbbbb');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-08 13:43:11
