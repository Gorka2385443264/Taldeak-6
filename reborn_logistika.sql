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
-- Table structure for table `logistika`
--

DROP TABLE IF EXISTS `logistika`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logistika` (
  `Produktuen_xehetasunak` varchar(255) DEFAULT NULL,
  `Eskaera_zenbakia` smallint DEFAULT NULL,
  `Aberia` tinyint(1) DEFAULT NULL,
  `Kostuak` smallint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logistika`
--

LOCK TABLES `logistika` WRITE;
/*!40000 ALTER TABLE `logistika` DISABLE KEYS */;
INSERT INTO `logistika` VALUES ('Portátil HP',1,1,800),('Monitor Dell',2,0,250),('Teclado Logitech',3,1,50),('Impresora Canon',4,0,150),('Router Cisco',5,1,200),('Disco Duro Seagate',6,0,90),('Tarjeta Gráfica NVIDIA',7,1,300),('Ratón Microsoft',8,0,20),('Procesador Intel',9,1,350),('Tableta Samsung',10,0,300),('Auriculares Sony',11,1,130),('Webcam Logitech',12,0,60),('Altavoces Bose',13,1,400),('Escáner Epson',14,0,200),('Memoria RAM Corsair',15,1,70),('Disco SSD Kingston',16,0,130),('Sistema Operativo Windows',17,1,200),('Software Adobe Photoshop',18,0,350),('Licencia Office 365',19,1,100),('Tarjeta de Red TP-Link',20,0,30);
/*!40000 ALTER TABLE `logistika` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-27 10:02:49
