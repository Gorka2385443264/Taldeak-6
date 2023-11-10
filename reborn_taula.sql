-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: ejemplo
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `taula`
--

DROP TABLE IF EXISTS `taula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taula` (
  `id` int NOT NULL,
  `nombre` varchar(455) DEFAULT NULL,
  `email` varchar(455) DEFAULT NULL,
  `imagen_link` varchar(455) DEFAULT NULL,
  `precios` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taula`
--

LOCK TABLES `taula` WRITE;
/*!40000 ALTER TABLE `taula` DISABLE KEYS */;
INSERT INTO `taula` VALUES (1,'gorka','gorka@gmail.com',NULL,45),(2,'gorka','gorka@gmail.com',NULL,66),(4,'gorka','gorka@gmail.com',NULL,10),(5,'gorka','https://fotografias.lasexta.com/clipping/cmsimages02/2020/01/20/1B7822E4-B244-48CC-97F3-351AE194EA49/default.jpg?crop=1200,675,x0,y0&width=1900&height=1069&optimize=low',NULL,9),(6,'iker','https://cdn-icons-png.flaticon.com/512/4535/4535090.png',NULL,70),(10,'aaaa','blabla@gmail.com','https://ecdisis.com/wp-content/uploads/2021/01/Que-es-una-URL.png',800);
/*!40000 ALTER TABLE `taula` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-09  9:46:53
