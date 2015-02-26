CREATE DATABASE  IF NOT EXISTS `clubNutricion` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `clubNutricion`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: clubNutricion
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.10.1

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `actfisica` varchar(45) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `estatura` double DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `objetivo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
>>>>>>> c2b5a91ef514293361774d09a4065c5ef5fe0537
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `usuario` VALUES (11,'stefy','diaz','stef','1111',0,'ligera',11,123,NULL,NULL),(12,'ojojg','','','',0,'',0,0,0,'');
=======
INSERT INTO `usuario` VALUES (11,'Stefany','Diaz C','stefy@gmail.com','23999923','f','l',25,1.99,99.9,'subir'),(12,'ojojg','nkij','kkdsj','12345','m','a',22,1.68,58.32,'mkdsjid'),(13,'Byron','Herrera','byfaherr@hotmail.com','1911','m','l',26,1,0,''),(14,'Gaby','Hojas','gaby@gmail.com','12345','f','a',24,1.54,0,''),(17,'fab','Da','a@gmail.com','1000','m','m',24,1.6,0,''),(18,'Natha','Monte','nata@gmail.com','99999','f','m',22,1.9,70.9,'bajar');
>>>>>>> c2b5a91ef514293361774d09a4065c5ef5fe0537
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2015-02-25 14:03:34
=======
-- Dump completed on 2015-02-25 20:34:51
>>>>>>> c2b5a91ef514293361774d09a4065c5ef5fe0537
