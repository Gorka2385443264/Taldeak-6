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
-- Table structure for table `hornitzailea`
--

DROP TABLE IF EXISTS `hornitzailea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hornitzailea` (
  `Enpresa` varchar(255) DEFAULT NULL,
  `Materiala` varchar(255) DEFAULT NULL,
  `Berria` tinyint(1) DEFAULT NULL,
  `Enpresaren_webgunea` varchar(255) DEFAULT NULL,
  `Kontu_zenbakia_ES00_0000_0000_0000_0000_0000` varchar(255) DEFAULT NULL,
  `Telefono_zenbakia` int DEFAULT NULL,
  `Enpresaren_gmail_helbidea` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hornitzailea`
--

LOCK TABLES `hornitzailea` WRITE;
/*!40000 ALTER TABLE `hornitzailea` DISABLE KEYS */;
INSERT INTO `hornitzailea` VALUES ('Microsoft','Software',1,'www.microsoft.com','ES12 3456 7890 12 123456789',611223344,'microsoft@gmail.com'),('Apple Inc.','Dispositivos móviles',0,'www.apple.com','ES34 5678 9012 34 234567890',622334455,'apple@gmail.com'),('IBM','Servidores',1,'www.ibm.com','ES56 7890 1234 56 345678901',633445566,'ibm@gmail.com'),('Cisco Systems','Equipos de red',0,'www.cisco.com','ES78 9012 3456 78 456789012',644556677,'cisco@gmail.com'),('Dell Technologies','Ordenadores',1,'www.dell.com','ES90 1234 5678 90 567890123',655667788,'dell@gmail.com'),('Amazon Web Services','Servicios en la nube',0,'www.aws.amazon.com','ES01 2345 6789 01 678901234',666778899,'aws@gmail.com'),('Intel Corporation','Componentes de PC',1,'www.intel.com','ES23 4567 8901 23 789012345',677889900,'intel@gmail.com'),('HP Inc.','Impresoras',0,'www.hp.com','ES45 6789 0123 45 234567890',688990011,'hp@gmail.com'),('Google LLC','Software y servicios en línea',1,'www.google.com','ES56 7890 1234 56 123456789',699001122,'google@gmail.com'),('Oracle Corporation','Bases de datos y software empresarial',0,'www.oracle.com','ES67 8901 2345 67 234567890',611122233,'oracle@gmail.com'),('Facebook, Inc.','Redes sociales y servicios en línea',1,'www.facebook.com','ES78 9012 3456 78 345678901',622233344,'facebook@gmail.com'),('Samsung Electronics Co., Ltd.','Dispositivos electrónicos',0,'www.samsung.com','ES89 0123 4567 89 567890123',633344455,'samsung@gmail.com'),('NVIDIA Corporation','Tarjetas gráficas',1,'www.nvidia.com','ES90 1234 5678 90 678901234',644455566,'nvidia@gmail.com'),('Adobe Inc.','Software de diseño y creatividad',0,'www.adobe.com','ES01 2345 6789 01 123456789',655566677,'adobe@gmail.com'),('Lenovo Group Ltd.','Ordenadores y dispositivos electrónicos',1,'www.lenovo.com','ES12 3456 7890 12 234567890',666677788,'lenovo@gmail.com'),('Sony Corporation','Electrónica de consumo',0,'www.sony.com','ES23 4567 8901 23 345678901',677788899,'sony@gmail.com'),('Cisco Systems','Equipos de red',1,'www.cisco.com','ES34 5678 9012 34 123456789',688899900,'cisco@gmail.com'),('VMware, Inc.','Software de virtualización',0,'www.vmware.com','ES45 6789 0123 45 567890123',699900011,'vmware@gmail.com'),('HP Inc.','Impresoras y hardware empresarial',1,'www.hp.com','ES56 7890 1234 56 678901234',711112233,'hp@gmail.com'),('Cisco Systems','Equipos de red y soluciones de TI',0,'www.cisco.com','ES67 8901 2345 67 123456789',722223344,'cisco@gmail.com');
/*!40000 ALTER TABLE `hornitzailea` ENABLE KEYS */;
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
