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
-- Table structure for table `langileak`
--

DROP TABLE IF EXISTS `langileak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `langileak` (
  `Izena` varchar(255) DEFAULT NULL,
  `Abizena` varchar(255) DEFAULT NULL,
  `DNI` char(9) DEFAULT NULL,
  `Jaiotze_data` date DEFAULT NULL,
  `Hizkuntzak` varchar(255) DEFAULT NULL,
  `Soldata` int DEFAULT NULL,
  `Helbidea` varchar(255) DEFAULT NULL,
  `Generoa` varchar(8) DEFAULT NULL,
  `Telefono_zenbakia` int DEFAULT NULL,
  `Gmail_helbidea` varchar(255) DEFAULT NULL,
  `Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langileak`
--

LOCK TABLES `langileak` WRITE;
/*!40000 ALTER TABLE `langileak` DISABLE KEYS */;
INSERT INTO `langileak` VALUES ('Laura','García','23456789B','1990-03-05','Inglés',1800,'Avenida de la Libertad','Emakumea',678123456,'laura.garcia@hotmail.com',1),('Pablo','López','34567890C','1988-12-03','Francés',1900,'Paseo de la Victoria','Gizona',621987654,'pablo.lopez@yahoo.com',2),('María','Sánchez','45678901D','1987-04-19','Alemán',2200,'Plaza España','Emakumea',665432109,'maria.sanchez@gmail.com',3),('Carlos','Rodríguez','56789012E','1995-10-30','Italiano',1700,'Callejón del Sol','Gizona',689012345,'carlos.rodriguez@hotmail.com',4),('Laura','Martínez','67890123F','1989-06-15','Inglés',1800,'Calle Mayor','Emakumea',678345678,'laura.martinez@yahoo.com',5),('David','Pérez','78901234G','1992-02-27','Francés',2000,'Avenida de la Libertad','Gizona',634567890,'david.perez@gmail.com',6),('Elena','González','89012345H','1986-07-08','Portugués',1900,'Paseo de la Victoria','Emakumea',679012345,'elena.gonzalez@hotmail.com',7),('Miguel','Ruiz','90123456I','1993-11-18','Alemán',2100,'Plaza España','Gizona',645678901,'miguel.ruiz@yahoo.com',8),('Marta','López','01234567J','1990-03-04','Italiano',1800,'Callejón del Sol','Emakumea',690123456,'marta.lopez@gmail.com',9),('Javier','Sánchez','12345678K','1988-09-21','Inglés',1900,'Calle Mayor','Gizona',678901234,'javier.sanchez@hotmail.com',10),('Laura','González','23456789L','1991-05-11','Francés',2000,'Avenida de la Libertad','Emakumea',679012345,'laura.gonzalez@yahoo.com',11),('Sergio','Pérez','34567890M','1987-12-29','Portugués',1800,'Paseo de la Victoria','Gizona',645678901,'sergio.perez@gmail.com',12),('Ana','Martínez','45678901N','1989-08-17','Alemán',1900,'Plaza España','Emakumea',690123456,'ana.martinez@hotmail.com',13),('Daniel','González','56789012O','1994-02-14','Italiano',2000,'Callejón del Sol','Gizona',678901234,'daniel.gonzalez@yahoo.com',14),('Elena','Sánchez','67890123P','1985-06-23','Inglés',1800,'Calle Mayor','Emakumea',679012345,'elena.sanchez@gmail.com',15),('Francisco','Martínez','78901234Q','1993-10-06','Francés',1900,'Avenida de la Libertad','Gizona',645678901,'francisco.martinez@hotmail.com',16),('Daniel','Martínez','78636566T','1991-09-06','Ingles',1700,'Avenida de la Constitucion','Gizona',65342822,'daniel.martinez@hotmail.com',17),('Francisco','Gimenez','78910934Q','1993-12-09','Aleman',2000,'Calle Piedad','Gizona',623768327,'francisco.gimenez@hotmail.com',18),('Alba','Blanco','26397612H','2000-03-22','Ingles',1900,'Avenida Filipinas','Emakumea',665872745,'alba.blanco@hotmail.com',19),('Esther','Hermoso','56286476P','1995-02-06','Portugues',2200,'Calle El Faro','Emakumea',677935278,'esther.hermoso@hotmail.com',20),('Juan','Pérez','12345678J','1980-05-12','Español',2500,'Calle 123','Hombre',5551234,'juan.perez@example.com',21),('María','González','23456789U','1985-09-20','Inglés',2200,'Av. Principal 456','Mujer',5555678,'maria.gonzalez@example.com',22),('Carlos','Martínez','34567890R','1990-02-28','Francés',2000,'Calle de las Flores 789','Hombre',5557890,'carlos.martinez@example.com',23),('Laura','López','45678901E','1982-11-15','Alemán',2700,'Av. Libertad 101','Mujer',5552345,'laura.lopez@example.com',24),('Pedro','Sánchez','56789012N','1988-07-03','Español',2600,'Calle 567','Hombre',5556789,'pedro.sanchez@example.com',25),('Elena','Fernández','67890123D','1984-04-25','Inglés',2900,'Av. Primavera 202','Mujer',5553456,'elena.fernandez@example.com',26),('Miguel','Rodríguez','78901234W','1987-10-10','Francés',2100,'Calle de las Palmas 321','Hombre',5558901,'miguel.rodriguez@example.com',27),('Marta','Gómez','89012345W','1983-03-18','Alemán',2800,'Av. Paseo 456','Mujer',5554567,'marta.gomez@example.com',28),('David','Ruiz','90123456Q','1989-06-30','Español',2700,'Calle 789','Hombre',5556789,'david.ruiz@example.com',29),('Ana','Pérez','01234567H','1986-12-05','Inglés',3000,'Av. Central 567','Mujer',5552345,'ana.perez@example.com',30);
/*!40000 ALTER TABLE `langileak` ENABLE KEYS */;
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
