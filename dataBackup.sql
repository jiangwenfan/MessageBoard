-- MySQL dump 10.13  Distrib 5.7.32, for Linux (x86_64)
--
-- Host: localhost    Database: ptest
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `pcontent`
--

DROP TABLE IF EXISTS `pcontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `content` char(60) NOT NULL,
  `backup` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcontent`
--

LOCK TABLES `pcontent` WRITE;
/*!40000 ALTER TABLE `pcontent` DISABLE KEYS */;
INSERT INTO `pcontent` VALUES (3,'test12322','12333322','1'),(7,'love','love like a dog!','1'),(8,'hai','hai,girl!','1'),(9,'ni','å¦¹å­','1'),(10,'å“ˆå–½','å¦¹å­','1');
/*!40000 ALTER TABLE `pcontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ptest1`
--

DROP TABLE IF EXISTS `ptest1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ptest1` (
  `id` char(6) NOT NULL,
  `name` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `title` char(40) NOT NULL,
  `message` char(40) NOT NULL,
  `address` char(20) DEFAULT NULL,
  `status` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ptest1`
--

LOCK TABLES `ptest1` WRITE;
/*!40000 ALTER TABLE `ptest1` DISABLE KEYS */;
/*!40000 ALTER TABLE `ptest1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ptest2`
--

DROP TABLE IF EXISTS `ptest2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ptest2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `title` char(40) NOT NULL,
  `message` char(40) NOT NULL,
  `address` char(20) DEFAULT NULL,
  `status` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ptest2`
--

LOCK TABLES `ptest2` WRITE;
/*!40000 ALTER TABLE `ptest2` DISABLE KEYS */;
INSERT INTO `ptest2` VALUES (1,'jwf','admin123','helloTest','this is test','192.168.1.2','0'),(2,'jwf2','admin1234','helloTest2','this is test','192.168.1.3','0'),(3,'test','123','tem','tem','0','0'),(4,'test','123','tem','tem','0','0'),(5,'test','123','tem','tem','0','0'),(6,'tiangou','gougougou123','tem','tem','0','0'),(7,'hahahaah','123','tem','tem','0','0'),(8,'xxxxxxxxx','xxxxxxxx','tem','tem','0','0'),(9,'xxxxxxxxx11','111','tem','tem','0','0'),(10,'xxxxxxxxx11','111','tem','tem','0','0'),(11,'xxxxxx2223','22323','tem','tem','0','0'),(12,'xxxxxx2223','22323','tem','tem','0','0'),(13,'xxxxxx2223','22323','tem','tem','0','0'),(14,'xxxxxx222322','222','tem','tem','0','0'),(15,'startk tuoni','1212','tem','tem','0','0'),(16,'startkyyy','yyyyyyy','tem','tem','0','0');
/*!40000 ALTER TABLE `ptest2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puser`
--

DROP TABLE IF EXISTS `puser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `email` char(40) DEFAULT NULL,
  `backup` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puser`
--

LOCK TABLES `puser` WRITE;
/*!40000 ALTER TABLE `puser` DISABLE KEYS */;
INSERT INTO `puser` VALUES (1,'jwf','admin123','210@qq.com',NULL),(2,'hello','zhanan','zhan2103208467@163.com',NULL),(3,'hello','zhanan','zhan2103208467@163.com',NULL),(4,'hello','zhanan','zhan2103208467@163.com',NULL),(5,'test666','aiq','666@wocao.com',NULL),(6,'124','222','888',NULL),(7,'jiang','admin','123@qq.com',NULL),(8,'admin','admin','456@qq.com',NULL),(9,'root','admin','789@qq.com',NULL),(10,'ç‹—å­','123','1043876586@qq.com',NULL),(11,'','','',NULL),(12,'','','',NULL),(13,'dogdog','admin','222@163.com',NULL),(14,'dogdog1','admin','222@163.com',NULL),(15,'lovedog','123123','333@qq.com',NULL),(16,'dog111','123321','qqq',NULL),(17,'123','123','123',NULL);
/*!40000 ALTER TABLE `puser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-14 10:52:54
