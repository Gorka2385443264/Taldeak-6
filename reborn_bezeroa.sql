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
-- Table structure for table `bezeroa`
--

DROP TABLE IF EXISTS `bezeroa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bezeroa` (
  `Izena` varchar(255) DEFAULT NULL,
  `Abizena` varchar(255) DEFAULT NULL,
  `DNI` char(9) DEFAULT NULL,
  `Telefono_zenbakia` int DEFAULT NULL,
  `Helbidea` varchar(255) DEFAULT NULL,
  `Generoa` varchar(8) DEFAULT NULL,
  `Probintzia` varchar(255) DEFAULT NULL,
  `Herria` varchar(255) DEFAULT NULL,
  `Kalea` varchar(255) DEFAULT NULL,
  `Pisua` varchar(255) DEFAULT NULL,
  `Pk` int DEFAULT NULL,
  `Kontu_korrontea` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bezeroa`
--

LOCK TABLES `bezeroa` WRITE;
/*!40000 ALTER TABLE `bezeroa` DISABLE KEYS */;
INSERT INTO `bezeroa` VALUES ('Elena','González','57891648A',611223344,'elena@gmail.com','Emakumea','Vizcaya','Cadiz','Calle de la Paz','4ºB',48001,'ES12 3456 7890 12 123456789'),('Carlos','Martínez','23456789B',622334455,'carlos@gmail.com','Gizona','Madrid','Sevilla','Avenida del Sol','6ºC',28002,'ES34 5678 9012 34 234567890'),('Isabel','Fernández','34567890C',633445566,'isabel@gmail.com','Emakumea','Barcelona','Altea','Calle Mayor','5ºD',8003,'ES56 7890 1234 56 345678901'),('Luis','Sánchez','45678901D',644556677,'luis@gmail.com','Gizona','Sevilla','Almagro','Paseo de la Alameda','7ºE',41004,'ES78 9012 3456 78 456789012'),('Marta','Rodríguez','56789012E',655667788,'marta@gmail.com','Emakumea','Valencia','Albacete','Calle del Río','2ºF',46005,'ES90 1234 5678 90 567890123'),('Javier','López','67890123F',666778899,'javier@gmail.com','Gizona','Zaragoza','Badajoz','Avenida de la Libertad','3ºG',50006,'ES01 2345 6789 01 678901234'),('Lucía','Pérez','78901234G',677889900,'lucia@gmail.com','Emakumea','Málaga','Andujar','Calle de la Rosa','8ºH',29007,'ES23 4567 8901 23 789012345'),('Marcos','Gómez','89012345H',688990011,'marcos@gmail.com','Gizona','Alicante','Antequera','Avenida de la Playa','9ºI',3008,'ES45 6789 0123 45 890123456'),('Sara','Martín','90123456I',699001122,'sara@gmail.com','Emakumea','Cádiz','Almonte','Paseo de la Victoria','10ºJ',11009,'ES56 7890 1234 56 123456789'),('Pablo','Hernández','01234567J',611122233,'pablo@gmail.com','Gizona','Murcia','Almeria','Calle de la Luna','11ºK',30010,'ES67 8901 2345 67 234567890'),('Carmen','Díaz','12345678K',622233344,'carmen@gmail.com','Emakumea','Asturias','Alicante','Avenida de la Montaña','12ºL',33011,'ES78 9012 3456 78 345678901'),('Diego','García','23456789L',633344455,'diego@gmail.com','Gizona','Toledo','A Coruña','Calle del Olivo','13ºM',45012,'ES12 3456 7890 12 567890123'),('Raquel','Ramírez','34567890M',644455566,'raquel@gmail.com','Emakumea','Cuenca','Aranjuez','Paseo de la Esperanza','14ºN',16013,'ES23 4567 8901 23 678901234'),('Joaquín','Gutiérrez','45678901N',655566677,'joaquin@gmail.com','Gizona','Jaén','Alcala','Avenida de la Paz','15ºO',23014,'ES34 5678 9012 34 789012345'),('Laura','Fuentes','56789012O',666677788,'laura@gmail.com','Emakumea','Navarra','Alcoy','Calle del Bosque','16ºP',31015,'ES45 6789 0123 45 890123456'),('Pedro','Silva','67890123P',677788899,'pedro@gmail.com','Gizona','Burgos','Almansa','Avenida de la Aurora','17ºQ',9016,'ES56 7890 1234 56 123456789'),('María','Castro','78901234Q',688899900,'maria@gmail.com','Emakumea','Lérida','Amposta','Calle de la Estrella','18ºR',25017,'ES67 8901 2345 67 234567890'),('Andrés','López','89012345R',699900011,'andres@gmail.com','Gizona','Huesca','Baena','Paseo de la Luna','19ºS',22018,'ES78 9012 3456 78 345678901'),('Beatriz','Vega','90123456S',711112233,'beatriz@gmail.com','Emakumea','Teruel','Baena','Avenida del Sol','20ºT',44019,'ES89 0123 4567 89 567890123'),('Elena','González','12345678A',611223344,'elena@gmail.com','Emakumea','Vizcaya','Barbate','Calle de la Paz','4ºB',48001,'ES12 3456 7890 12 123456789'),('Carlos','Martínez','23456789B',622334455,'carlos@gmail.com','Gizona','Madrid','Algeciras','Avenida del Sol','6ºC',28002,'ES34 5678 9012 34 234567890'),('Martin','Gutierrez','76352836G',769867848,'martin@hotmail.com','Gizona','Barcelona','Barcelona','Avenida de la Paz','7ºG',20997,'ES12 3456 7890 12 123456777'),('Aimar','del Rio','73332896K',662378293,'aimar@gmail.com','Gizona','Bilbao','´Vizcaya','Avenida de la Paz','7ºG',20997,'ES12 3456 7890 12 123456777'),('Juan','Pérez','12345678A',555123456,'juanperez@email.com','Hombre','Madrid','Madrid','Calle Mayor','4º A',28001,'ES7912345678901234567890'),('María','García','98765432B',555987654,'mariagarcia@email.com','Mujer','Barcelona','Barcelona','Passeig de Gràcia','2º B',8007,'ES5612345678902345678901'),('Antonio','Martínez','54321678C',555234567,'antoniomartinez@email.com','Hombre','Valencia','Valencia','Carrer de Colón','3º C',46004,'ES8912345678903456789012'),('Laura','Rodríguez','87654321D',555876543,'laurarodriguez@email.com','Mujer','Sevilla','Sevilla','Calle Sierpes','1º D',41004,'ES3412345678904567890123'),('José','López','34567812E',555345678,'joselopez@email.com','Hombre','Málaga','Málaga','Calle Larios','4º E',29005,'ES6712345678905678901234'),('Ana','García','23456789F',555789012,'anagarcia@email.com','Mujer','Alicante','Alicante','Rambla Méndez Núñez','2º F',3002,'ES4512345678906789012345'),('David','Sánchez','76543210G',555210987,'davidsanchez@email.com','Hombre','Zaragoza','Zaragoza','Paseo de la Independencia','3º G',50008,'ES8112345678907890123456'),('Marta','López','43210987H',555432109,'marta@email.com','Mujer','Bilbao','Bilbao','Gran Vía','1º H',48001,'ES7012345678908901234567');
/*!40000 ALTER TABLE `bezeroa` ENABLE KEYS */;
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
