-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: reborn
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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `Id` int NOT NULL,
  `Usuario` varchar(255) DEFAULT NULL,
  `Contraseña` varchar(255) DEFAULT NULL,
  `Permiso` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'laura_garcia','1111',1),(2,'maria_sanchez','2222',1),(3,'carlos_rodriguez','3333',0),(4,'laura_martinez','4444',1),(5,'david_perez','5555',0),(6,'elena_gonzalez','6666',0),(7,'miguel_ruiz','7777',0),(8,'marta_lopez','8888',1),(9,'javier_sanchez','9999',1),(10,'laura_gonzalez','1112',0),(11,'sergio_perez','1113',1),(12,'ana_martinez','1114',0),(13,'daniel_gonzalez','1115',1),(14,'elena_sanchez','1116',0),(15,'francisco_martinez','1117',0),(16,'daniel_martinez','1118',0),(17,'francisco_gimenez','1119',0),(18,'alba_blanco','2221',1),(19,'esther_hermoso','2223',1),(20,'juan_perez','2224',0),(21,'maria_gonzalez','2225',1),(22,'carlos_martinez','2226',0),(23,'laura_lopez','2227',0),(24,'pedro_sanchez','2228',0),(25,'elena_fernandez','2229',1),(26,'miguel_rodriguez','3331',0),(27,'marta_gomez','3332',1),(28,'david_ruiz','4441',1),(29,'ana_perez','3334',1),(30,'laura_garcia','3335',1),(1,'laura_garcia','1111',1),(2,'maria_sanchez','2222',1),(3,'carlos_rodriguez','3333',0),(4,'laura_martinez','4444',1),(5,'david_perez','5555',0),(6,'elena_gonzalez','6666',0),(7,'miguel_ruiz','7777',0),(8,'marta_lopez','8888',1),(9,'javier_sanchez','9999',1),(10,'laura_gonzalez','1112',0),(11,'sergio_perez','1113',1),(12,'ana_martinez','1114',0),(13,'daniel_gonzalez','1115',1),(14,'elena_sanchez','1116',0),(15,'francisco_martinez','1117',0),(16,'daniel_martinez','1118',0),(17,'francisco_gimenez','1119',0),(18,'alba_blanco','2221',1),(19,'esther_hermoso','2223',1),(20,'juan_perez','2224',0),(21,'maria_gonzalez','2225',1),(22,'carlos_martinez','2226',0),(23,'laura_lopez','2227',0),(24,'pedro_sanchez','2228',0),(25,'elena_fernandez','2229',1),(26,'miguel_rodriguez','3331',0),(27,'marta_gomez','3332',1),(28,'david_ruiz','4441',1),(29,'ana_perez','3334',1),(30,'laura_garcia','3335',1),(1,'laura_garcia','1111',1),(2,'maria_sanchez','2222',1),(3,'carlos_rodriguez','3333',0),(4,'laura_martinez','4444',1),(5,'david_perez','5555',0),(6,'elena_gonzalez','6666',0),(7,'miguel_ruiz','7777',0),(8,'marta_lopez','8888',1),(9,'javier_sanchez','9999',1),(10,'laura_gonzalez','1112',0),(11,'sergio_perez','1113',1),(12,'ana_martinez','1114',0),(13,'daniel_gonzalez','1115',1),(14,'elena_sanchez','1116',0),(15,'francisco_martinez','1117',0),(16,'daniel_martinez','1118',0),(17,'francisco_gimenez','1119',0),(18,'alba_blanco','2221',1),(19,'esther_hermoso','2223',1),(20,'juan_perez','2224',0),(21,'maria_gonzalez','2225',1),(22,'carlos_martinez','2226',0),(23,'laura_lopez','2227',0),(24,'pedro_sanchez','2228',0),(25,'elena_fernandez','2229',1),(26,'miguel_rodriguez','3331',0),(27,'marta_gomez','3332',1),(28,'david_ruiz','4441',1),(29,'ana_perez','3334',1),(30,'laura_garcia','3335',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-08  8:12:15
