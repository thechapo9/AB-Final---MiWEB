CREATE DATABASE  IF NOT EXISTS `mi_pagina_web_abfinal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mi_pagina_web_abfinal`;
-- MySQL dump 10.13  Distrib 8.1.0, for Win64 (x86_64)
--
-- Host: localhost    Database: mi_pagina_web_abfinal
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `idcomentarios` int NOT NULL AUTO_INCREMENT,
  `ID_Usuarios` int NOT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` longtext NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`idcomentarios`),
  UNIQUE KEY `idcomentarios_UNIQUE` (`idcomentarios`),
  KEY `fkusuarios_comentarios_idx` (`ID_Usuarios`),
  CONSTRAINT `fkusuarios_comentarios` FOREIGN KEY (`ID_Usuarios`) REFERENCES `usuarios` (`idUsuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,7,'2024-01-21 00:00:00','me gustaria saber mas sobre las sneakers de los simpsons, saludos','Enviado'),(2,7,'2024-01-21 00:00:00','hola prueba','Enviado'),(3,7,'2024-01-21 00:00:00','hola prueba 2','Enviado'),(4,1,'2024-01-21 00:00:00','hola me gustaria saber más','Enviado'),(5,7,'2024-01-21 16:28:04','ya funcionan los comentarios????','Enviado');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idPedido` int NOT NULL AUTO_INCREMENT,
  `id_Usuarios` int NOT NULL,
  `Fecha_de_pedido` datetime NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`idPedido`),
  UNIQUE KEY `idCompras_UNIQUE` (`idPedido`),
  KEY `idUsuarios_idx` (`id_Usuarios`),
  CONSTRAINT `fk_idUsuarios` FOREIGN KEY (`id_Usuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,7,'2024-01-18 20:59:13',238.00,'Confirmado'),(2,1,'2024-01-18 21:01:12',507.00,'Confirmado'),(3,4,'2024-01-18 22:21:49',387.00,'Confirmado'),(4,4,'2024-01-18 22:49:38',507.00,'Confirmado'),(5,7,'2024-01-18 23:00:31',407.00,'Confirmado'),(6,7,'2024-01-18 23:08:28',327.00,'Confirmado'),(7,7,'2024-01-18 23:09:29',258.00,'Confirmado'),(8,7,'2024-01-18 23:12:34',158.00,'Confirmado'),(9,15,'2024-01-20 22:44:33',169.00,'Confirmado');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `idProducto` int NOT NULL AUTO_INCREMENT,
  `Producto` varchar(45) NOT NULL,
  `Descripcion` mediumtext NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  UNIQUE KEY `idProductos_UNIQUE` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Adidas Campus','Disfruta del mejor estilo retro con las adidas Campus. Estas zapatillas, diseñadas para responder a las necesidades de los astros de la cancha más exigente, son ideales para todo, desde jugar al baloncesto hasta practicar skate, y han sido las favoritas de los fans de todo el mundo. La parte superior de tela proporciona resistencia y un acabado a la última, al tiempo que el forro de piel garantiza un look de primera calidad. Mejora tu tracción dentro y fuera de la cancha gracias a la suela de goma. Con las adidas Campus, no solo podrás hacer de todo, sino además, hacerlo bien.',69.00,'../img/Tienda/Adidas/campus00.webp'),(2,'Adidas Handball','Antiguamente reservada para las canchas de balonmano, esta zapatilla de perfil bajo de adidas es ahora el centro de atención en las calles de la ciudad. La zapatilla Handball Spezial revive el estilo deportivo de los 70 y lo actualiza con un toque urbano. La suela de goma color caramelo y la parte superior de ante sintético le aportan un toque retro y un confort excepcional. Presenta un diseño minimalista con una puntera en forma de T que le aporta un toque elegante y versátil. El forro textil es suave y transpirable. Horma clásica. Cierre de cordones. Parte superior sintética. Forro textil. Suela de goma color caramelo.',89.00,'../img/Tienda/Adidas/handabll.webp'),(3,'Adidas Samba','adidas Samba OG shoes are a street style icon that celebrate the original adidas Samba design. The premium suede upper pops with thick 3-Stripes, plus laces to match. Long gone are the days of the Samba as just a football trainer. Now 70 years strong, its legacy as a lifestyle essential lives on. The reinforced toe cap and rubber outsole provide heritage-inspired durability and comfort. For a retro look with staying power, lace up these Sambas. Regular fit. Lace closure. Suede upper. Textile lining. Rubber outsole.',69.00,'../img/Tienda/Adidas/samba.webp'),(4,'Adidas Simpsons','Para los amantes de la conocida serie de TV.',169.00,'../img/Tienda/Adidas/simpsons.webp'),(5,'Nike Air Max','Marcar tendencia es pan comido con las Nike Air Max 1. Estas zapatillas, tan codiciadas para hacer deporte como para presumir de estilo, combinan tradición e innovación. La parte superior es resistente, como tu determinación. La cámara de aire visible Max Air funciona con una ventana de forma elíptica para una amortiguación exclusiva bajo los pies y para rendir homenaje a las primeras zapatillas con cámara de aire. Cuentan con una suela de goma gofrada para que superes cada jornada como los campeones.',89.00,'../img/Tienda/Nike/airmax.webp'),(6,'Nike Tuned','Recupera la tradición del running a cada paso con las Nike Air Max Plus OG. Retomando lo mejor de las emblemáticas zapatillas Nike del pasado, estas zapatillas AM hacen un guiño al modernismo retro. La parte superior combina piel sintética y malla para ofrecer, al mismo tiempo, flexibilidad y transpirabilidad. Situada en el talón y el antepié, la característica cámara de aire Max Air garantiza amortiguación y energía a tus zancadas. La suela de goma, de gran tracción y adherencia, te prepara para avanzar hacia un futuro prometedor.',139.00,'../img/Tienda/Nike/tuned1.webp'),(7,'Nike Dunk','Diseñada por Peter Moore, la colección Nike Dunk Low hizo su primera aparición en 1985. Esta vez, la silueta vuelve con algunos diseños nuevos y, al mismo tiempo, recupera algunos de los viejos. La pala de piel incluye perforaciones que le aportan transpirabilidad adicional. También presentan suela de goma con un diseño de tracción creado específicamente para facilitar los movimientos rápidos en suelos de madera. La cámara de aire Zoom Air del talón garantiza la máxima comodidad y facilita cada paso. ¡Hazte con tu par hoy mismo!',79.00,'../img/Tienda/Nike/dunk.webp'),(8,'Nike Air Dunk','Recupera la tradición del running a cada paso con las Nike Air Max Plus OG. Retomando lo mejor de las emblemáticas zapatillas Nike del pasado, estas zapatillas AM hacen un guiño al modernismo retro. La parte superior combina piel sintética y malla para ofrecer, al mismo tiempo, flexibilidad y transpirabilidad. Situada en el talón y el antepié, la característica cámara de aire Max Air garantiza amortiguación y energía a tus zancadas. La suela de goma, de gran tracción y adherencia, te prepara para avanzar hacia un futuro prometedor.',79.00,'../img/Tienda/Nike/airdunk.webp'),(9,'New Balance 530','Dale a tu armario informal de diario un toque retro con las New Balance 530. Estas zapatillas, que ofrecen el máximo confort gracias a su tecnología, son una combinación atrevida de estilo retro y estética moderna y deportiva. La parte superior sintética y de malla ofrece resistencia y una excelente comodidad transpirable para mantenerte fresco y sin preocupaciones durante todo el día. La entresuela ABZORB, que combina amortiguación y resistencia a la compresión, promete una protección contra impactos superior, para que disfrutes de un diseño ligero allá donde vayas.',59.00,'../img/Tienda/New Balance/530.webp'),(10,'New Balance 574','Realiza tus actividades urbanas diarias con el estilo clásico de las New Balance 574. Estas zapatillas inspiradas en los años 80 cuentan con actualizaciones modernas que te permiten afrontar los retos del día a día. La parte superior de piel, ante y malla ofrece resistencia, un acabado elegante y transpirabilidad a tus zancadas. La entresuela ENCAP con una amortiguación de espuma EVA, ofrece toda la comodidad y el apoyo que tus pies necesitan para que disfrutes durante todo el día.',89.00,'../img/Tienda/New Balance/574.webp'),(11,'New Balance 997H','New Balance ha actualizado su modelo clásico de culto 997 a la edición progresiva de nueva generación 997H. Este modelo incluye todos los detalles originales de las 997 y mucho más. La estilizada silueta de diseño audaz y renovado presenta un look limpio y elegante. La entresuela de espuma suave amortigua cada paso y te aporta agilidad. La versátil combinación de colores y el atractivo logotipo de New Balance añaden un toque de estilo a la estructura. Trasciende lo básico con las New Balance 997H.',69.00,'../img/Tienda/New Balance/997H.webp'),(12,'New Balance 2002R','Lleva el estilo original de las New Balance 2002R a tu colección de zapatillas de diario. Diseñadas con una parte superior de ante y malla, estas zapatillas son el epítome del estilo y la comodidad. La entresuela ACTEVA LITE, que ofrece una amortiguación insuperable para tus pies, aporta la ligereza que buscas en tus zancadas. La suela N-ergy, dotada de la tecnología Stability Web, ofrece un agarre y una tracción excepcionales, para que, vayas donde vayas, atraigas todas las miradas',169.00,'../img/Tienda/New Balance/2002R.webp');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono` int NOT NULL,
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuarios`),
  UNIQUE KEY `Direccion_UNIQUE` (`Direccion`),
  UNIQUE KEY `Telefono_UNIQUE` (`Telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Admin01','administrador','eugenio01@gmail.com','eugenio','lancha','Calle de la Ilustracion',666777888),(2,'Admin02','administrador02','javier01@gmail.com','javier','segovia','Calle de Fomento',656767878),(3,'Admin03','administrador03','gabs01@gmail.com','gabriela','garcia','Calle del Norte',646757868),(4,'test01','test1','test01@gmail.com','test','test1','calle test',555555555),(5,'test02','1234','test02@gmail.com','test02','test1','calle test02',666666666),(6,'test03','1234','test03@gmail.com','test3','test','calle de testeo',333444333),(7,'eugenio1','12345','eugenio1@gmail.com','eugenio','lancha','calle de testing',222333222),(8,'admin','admin','admin@gmail.com','admin','administrador','calle admin',111222111),(9,'test55','test55','test55@gmail.com','test55','apetest','calle 55',111222333),(10,'prueba','1234','prueba@gmail.com','prueba','prueba','calle de prueba',445533556),(11,'eugenio2','1234','eugenio2@gmail.com','eugenio','lancha','calle de eugenio',454556567),(12,'admin01','1234','admin01@gmail.com','admin','admin1','calle de admin',123456789),(13,'test15','1234','test15@gmail.com','test15','test','calle 15',987654567),(15,'flowerpower','1234','flower@gmail.com','flower','power','calle de la ilus',664325679);
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

-- Dump completed on 2024-01-21 18:02:58
