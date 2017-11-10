-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Current Database: `blog`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog`;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Autor` varchar(50) DEFAULT NULL,
  `Text` text,
  `Post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Petar Petrovic','Prvi komentar koji je na objavu prvog posta',1),(2,'Filip Filipovic','Drugi komentar koji je na objavu prvog posta',1),(3,'Zoran Zoranovic','Treci komentar koji je na objavu prvog posta',1),(4,'Petar Petrovic','Prvi komentar koji je na objavu drugog posta',2),(5,'Filip Filipovic','Drugi komentar koji je na objavu drugog posta',2),(6,'Zoran Zoranovic','Treci komentar koji je na objavu drugog posta',2),(7,'Filip Filipovic','Prvi komentar koji je na objavu treceg posta',3),(8,'Petar Petrovic','Drugi komentar koji je na objavu treceg posta',3),(9,'Ime prvog submit komentara','Tekst prvog submit komentara',2),(10,'Ime Submit','Submit komentar na treci blog post',3),(11,'Ime Submit Drugi','Submit drugog komentara na treci blog post',3),(12,'Ime Submit Drugi','Submit drugog komentara na treci blog post',3),(13,'Ime Submit Treci','Submit treceg komentara na treci blog post',3),(14,'Submit komentator','Tekst submit komentara za prvi post.',1),(15,'Komentator','KOmentar prvog posta',1),(16,'Submit komentator 2','Tekst komentara',1),(17,'Ime Submit Treci','KOmentar',1),(18,'Ime Submit Treci','KOmentar',1),(19,'Ime Submit Treci','KOmentar',1),(21,'Ime Submit Treci','KOmentar',1),(28,'','KOMENTAR!!!',3),(29,'Submit komentator','Komentar',2),(30,'Komentator','',3),(31,'ddfsfsd','sdfsdfs',3),(32,'dsfsdfds','sdfsdfdfs',3),(33,'dsfsdfds','sdfsdfdfs',3),(34,'dsfsdfds','sdfsdfdfs',3),(35,'dsfsdfds','sdfsdfdfs',3),(36,'dsfsdfds','sdfsdfdfs',3),(37,'dsfsdfds','sdfsdfdfs',3),(38,'dsfsdfds','sdfsdfdfs',3);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(60) NOT NULL,
  `Body` text,
  `Autor` varchar(30) DEFAULT NULL,
  `Created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Naslov prvog blog-posta','Ovo je tekst prvog blog posta koji ce se pojavtiti na blogu','Gojko Maric','2001-01-01'),(2,'Naslov drugog blog posta','Ovo je drugi tekst na blogu, koji ce se prikazati ispod prvog','Drugi Autor','2017-01-01'),(3,'Naslov treceg blog posta','Ovo je treci tekst na blogu, koji ce se prikazati ispod prvog','Treci Autor','2017-03-03');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-10 22:21:02
