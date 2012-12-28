CREATE DATABASE  IF NOT EXISTS `bd_registro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_registro`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: bd_registro
-- ------------------------------------------------------
-- Server version	5.5.16-log

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
-- Table structure for table `tbl_nacionalidad_atleta`
--

DROP TABLE IF EXISTS `tbl_nacionalidad_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nacionalidad_atleta` (
  `id_nacionalidad` int(11) NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nacionalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nacionalidad_atleta`
--

LOCK TABLES `tbl_nacionalidad_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_nacionalidad_atleta` DISABLE KEYS */;
INSERT INTO `tbl_nacionalidad_atleta` VALUES (1,'Venezolano'),(2,'Extranjero');
/*!40000 ALTER TABLE `tbl_nacionalidad_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_ingreso`
--

DROP TABLE IF EXISTS `tbl_tipo_ingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_ingreso` (
  `id_ingreso` int(11) NOT NULL,
  `ingreso` varchar(45) NOT NULL,
  PRIMARY KEY (`id_ingreso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_ingreso`
--

LOCK TABLES `tbl_tipo_ingreso` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_ingreso` DISABLE KEYS */;
INSERT INTO `tbl_tipo_ingreso` VALUES (1,'Artículo 25'),(2,'Prueba Interna'),(3,'CNU'),(4,'Convenio');
/*!40000 ALTER TABLE `tbl_tipo_ingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pais`
--

DROP TABLE IF EXISTS `tbl_pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pais`
--

LOCK TABLES `tbl_pais` WRITE;
/*!40000 ALTER TABLE `tbl_pais` DISABLE KEYS */;
INSERT INTO `tbl_pais` VALUES (1,'Abjasia'),(2,'Acrotiri y Dhekelia'),(3,'Afganistán'),(4,'Albania'),(5,'Alemania'),(6,'Alto Karabaj'),(7,'Andorra'),(8,'Angola'),(9,'Anguila'),(10,'Antigua y Barbuda'),(11,'Arabia Saudita'),(12,'Argelia'),(13,'Argentina'),(14,'Armenia'),(15,'Aruba'),(16,'Australia'),(17,'Austria'),(18,'Azerbaiyán'),(19,'Bahamas'),(20,'Bangladés'),(21,'Barbados'),(22,'Baréin'),(23,'Bélgica'),(24,'Belice'),(25,'Benín'),(26,'Bermudas'),(27,'Bielorrusia'),(28,'Birmania'),(29,'Bolivia'),(30,'Bosnia y Herzegovina'),(31,'Botsuana'),(32,'Brasil'),(33,'Brunéi'),(34,'Bulgaria'),(35,'Burkina Faso'),(36,'Burundi'),(37,'Bután'),(38,'Cabo Verde'),(39,'Camboya'),(40,'Camerún'),(41,'Canadá'),(42,'Catar'),(43,'Chad'),(44,'Chile'),(45,'China'),(46,'Chipre'),(47,'Ciudad del Vaticano'),(48,'Colombia'),(49,'Comoras'),(50,'Corea del Norte'),(51,'Corea del Sur'),(52,'Costa de Marfil'),(53,'Costa Rica'),(54,'Croacia'),(55,'Cuba'),(56,'Curazao'),(57,'Dinamarca'),(58,'Dominica'),(59,'Ecuador'),(60,'Egipto'),(61,'El Salvador'),(62,'Emiratos Árabes Unidos'),(63,'Eritrea'),(64,'Eslovaquia'),(65,'Eslovenia'),(66,'España'),(67,'Estados Unidos'),(68,'Estonia'),(69,'Etiopía'),(70,'Filipinas'),(71,'Finlandia'),(72,'Fiyi'),(73,'Francia'),(74,'Gabón'),(75,'Gambia'),(76,'Georgia'),(77,'Ghana'),(78,'Gibraltar'),(79,'Granada'),(80,'Grecia'),(81,'Groenlandia'),(82,'Guam'),(83,'Guatemala'),(84,'Guernsey'),(85,'Guinea'),(86,'Guinea Ecuatorial'),(87,'Guinea-Bissau'),(88,'Guyana'),(89,'Haití'),(90,'Holanda (Países Bajos)'),(91,'Honduras'),(92,'Hong Kong'),(93,'Hungría'),(94,'India'),(95,'Indonesia'),(96,'Inglaterra'),(97,'Irak'),(98,'Irán'),(99,'Irlanda'),(100,'Isla de Man'),(101,'Isla de Navidad'),(102,'Isla Norfolk'),(103,'Islandia'),(104,'Islas Caimán'),(105,'Islas Cocos'),(106,'Islas Cook'),(107,'Islas Feroe'),(108,'Islas Malvinas'),(109,'Islas Marianas del Norte'),(110,'Islas Marshall'),(111,'Islas Pitcairn'),(112,'Islas Salomón'),(113,'Islas Turcas y Caicos'),(114,'Islas Vírgenes Británicas'),(115,'Islas Vírgenes de los Estados Unidos'),(116,'Israel'),(117,'Italia'),(118,'Jamaica'),(119,'Japón'),(120,'Jersey'),(121,'Jordania'),(122,'Kazajistán'),(123,'Kenia'),(124,'Kirguistán'),(125,'Kiribati'),(126,'Kosovo'),(127,'Kuwait'),(128,'Laos'),(129,'Lesoto'),(130,'Letonia'),(131,'Líbano'),(132,'Liberia'),(133,'Libia'),(134,'Liechtenstein'),(135,'Lituania'),(136,'Luxemburgo'),(137,'Macao'),(138,'Macedonia'),(139,'Madagascar'),(140,'Malasia'),(141,'Malaui'),(142,'Maldivas'),(143,'Malta'),(144,'Marruecos'),(145,'Mauricio'),(146,'Mauritania'),(147,'México'),(148,'Micronesia'),(149,'Moldavia'),(150,'Mónaco'),(151,'Mongolia'),(152,'Montenegro'),(153,'Montserrat'),(154,'Mozambique'),(155,'Namibia'),(156,'Nauru'),(157,'Nepal'),(158,'Nicaragua'),(159,'Nigeria'),(160,'Niue'),(161,'Noruega'),(162,'Nueva Caledonia'),(163,'Nueva Zelanda'),(164,'Omán'),(165,'Osetia del Sur'),(167,'Pakistán'),(168,'Palaos'),(169,'Palestina'),(170,'Panamá'),(171,'Papúa Nueva Guinea'),(172,'Paraguay'),(173,'Perú'),(174,'Polinesia Francesa'),(175,'Polonia'),(176,'Portugal'),(177,'Puerto Rico'),(178,'Reino Unido'),(179,'Rep. Centroafricana'),(180,'Rep. Checa'),(181,'Rep. del Congo'),(182,'Rep. del Norte de Chipe'),(183,'Rep. Dem. del Congo'),(184,'Rep. Dominicana'),(185,'Ruanda'),(186,'Rumania'),(187,'Rusia'),(188,'Sahara Occidental'),(189,'Samoa'),(190,'Samoa Americana'),(191,'San Bartolomé'),(192,'San Cristóbal y Nieves'),(193,'San Marino'),(194,'San Martín (Francia)'),(195,'San Martín (Países Bajos)'),(196,'San Pedro y Miquelón'),(197,'San Vicente y las Granadinas'),(198,'Santa Helena'),(199,'Santa Lucía'),(200,'Santo Tomé y Príncipe'),(201,'Senegal'),(202,'Serbia'),(203,'Seychelles'),(204,'Sierra Leona'),(205,'Singapur'),(206,'Siria'),(207,'Somalia'),(208,'Somalilandia'),(209,'Sri Lanka'),(210,'Suazilandia'),(211,'Sudáfrica'),(212,'Sudán'),(213,'Suecia'),(214,'Suiza'),(215,'Surinam'),(216,'Svalbard'),(217,'Tailandia'),(218,'Taiwán'),(219,'Tanzania'),(220,'Tayikistán'),(221,'Timor Oriental'),(222,'Togo'),(223,'Tokelau'),(224,'Tonga'),(225,'Transnistria'),(226,'Trinidad y Tobago'),(227,'Túnez'),(228,'Turkmenistán'),(229,'Turquía'),(230,'Tuvalu'),(231,'Ucrania'),(232,'Uganda'),(233,'Uruguay'),(234,'Uzbekistán'),(235,'Vanuatu'),(236,'Venezuela'),(237,'Vietnam'),(238,'Wallis y Futuna'),(239,'Yemen'),(240,'Yibuti'),(241,'Zambia'),(242,'Zimbabue');
/*!40000 ALTER TABLE `tbl_pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_semestre`
--

DROP TABLE IF EXISTS `tbl_semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_semestre` (
  `id_semestre` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_semestre`
--

LOCK TABLES `tbl_semestre` WRITE;
/*!40000 ALTER TABLE `tbl_semestre` DISABLE KEYS */;
INSERT INTO `tbl_semestre` VALUES (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8'),(9,'9'),(10,'10');
/*!40000 ALTER TABLE `tbl_semestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_periodo_lectivo`
--

DROP TABLE IF EXISTS `tbl_periodo_lectivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_periodo_lectivo` (
  `id_lectivo` int(11) NOT NULL,
  `lectivo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_lectivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_periodo_lectivo`
--

LOCK TABLES `tbl_periodo_lectivo` WRITE;
/*!40000 ALTER TABLE `tbl_periodo_lectivo` DISABLE KEYS */;
INSERT INTO `tbl_periodo_lectivo` VALUES (1,'1-1970'),(2,'2-1970'),(3,'1-1971'),(4,'2-1971'),(5,'1-1972'),(6,'2-1972'),(7,'1-1973'),(8,'2-1973'),(9,'1-1974'),(10,'2-1974'),(11,'1-1975'),(12,'2-1975'),(13,'1-1976'),(14,'2-1976'),(15,'1-1977'),(16,'2-1977'),(17,'1-1978'),(18,'2-1978'),(19,'1-1979'),(20,'2-1979'),(21,'1-1980'),(22,'2-1980'),(23,'1-1981'),(24,'2-1981'),(25,'1-1982'),(26,'2-1982'),(27,'1-1983'),(28,'2-1983'),(29,'1-1984'),(30,'2-1984'),(31,'1-1985'),(32,'2-1985'),(33,'1-1986'),(34,'2-1986'),(35,'1-1987'),(36,'2-1987'),(37,'1-1988'),(38,'2-1988'),(39,'1-1989'),(40,'2-1989'),(41,'1-1990'),(42,'2-1990'),(43,'1-1991'),(44,'2-1991'),(45,'1-1992'),(46,'2-1992'),(47,'1-1993'),(48,'2-1993'),(49,'1-1994'),(50,'2-1994'),(51,'1-1995'),(52,'2-1995'),(53,'1-1996'),(54,'2-1996'),(55,'1-1997'),(56,'2-1997'),(57,'1-1998'),(58,'2-1998'),(59,'1-1999'),(60,'2-1999'),(61,'1-2000'),(62,'2-2000'),(63,'1-2001'),(64,'2-2001'),(65,'1-2002'),(66,'2-2002'),(67,'1-2003'),(68,'2-2003'),(69,'1-2004'),(70,'2-2004'),(71,'1-2005'),(72,'2-2005'),(73,'1-2006'),(74,'2-2006'),(75,'1-2007'),(76,'2-2007'),(77,'1-2008'),(78,'2-2008'),(79,'1-2009'),(80,'2-2009'),(81,'1-2010'),(82,'2-2010'),(83,'1-2011'),(84,'2-2011'),(85,'1-2012'),(86,'2-2012');
/*!40000 ALTER TABLE `tbl_periodo_lectivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_talla_asiatica`
--

DROP TABLE IF EXISTS `tbl_talla_asiatica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_talla_asiatica` (
  `id_asiatica` int(11) NOT NULL,
  `asiatica` varchar(45) NOT NULL,
  PRIMARY KEY (`id_asiatica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_talla_asiatica`
--

LOCK TABLES `tbl_talla_asiatica` WRITE;
/*!40000 ALTER TABLE `tbl_talla_asiatica` DISABLE KEYS */;
INSERT INTO `tbl_talla_asiatica` VALUES (1,'000'),(2,'00'),(3,'0'),(4,'1'),(5,'2'),(6,'3'),(7,'4'),(8,'5'),(9,'6'),(10,'7');
/*!40000 ALTER TABLE `tbl_talla_asiatica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_notas`
--

DROP TABLE IF EXISTS `tbl_notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_notas` (
  `id_nota` int(11) NOT NULL,
  `nota` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_notas`
--

LOCK TABLES `tbl_notas` WRITE;
/*!40000 ALTER TABLE `tbl_notas` DISABLE KEYS */;
INSERT INTO `tbl_notas` VALUES (0,'00'),(1,'01'),(2,'02'),(3,'03'),(4,'04'),(5,'05'),(6,'06'),(7,'07'),(8,'08'),(9,'09'),(10,'10'),(11,'11'),(12,'12'),(13,'13'),(14,'14'),(15,'15'),(16,'16'),(17,'17'),(18,'18'),(19,'19'),(20,'20');
/*!40000 ALTER TABLE `tbl_notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_municipio`
--

DROP TABLE IF EXISTS `tbl_municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_municipio` (
  `id_estado` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  PRIMARY KEY (`id_municipio`),
  KEY `municipio_estado` (`id_estado`),
  CONSTRAINT `municipio_estado` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_municipio`
--

LOCK TABLES `tbl_municipio` WRITE;
/*!40000 ALTER TABLE `tbl_municipio` DISABLE KEYS */;
INSERT INTO `tbl_municipio` VALUES (9,1,'Libertador'),(15,2,'Acevedo'),(15,3,'Andrés Bello'),(15,4,'Baruta'),(15,5,'Brión'),(15,6,'Buroz'),(15,7,'Carrizal'),(15,8,'Chacao'),(15,9,'Cristóbal Rojas'),(15,10,'El Hatillo'),(15,11,'Guaicaipuro'),(15,12,'Independencia'),(15,13,'Lander'),(15,14,'Los Salias'),(15,15,'Páez'),(15,16,'Paz Castillo'),(15,17,'Pedro Gual'),(15,18,'Plaza'),(15,19,'Simón Bolívar'),(15,20,'Urdaneta'),(15,21,'Sucre'),(15,22,'Zamora'),(23,23,'Vargas');
/*!40000 ALTER TABLE `tbl_municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `cedula_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `apellido_usuario` varchar(45) NOT NULL,
  `clave_usuario` varchar(45) NOT NULL,
  `identificador_usuario` varchar(45) NOT NULL,
  `dependencia_usuario` varchar(45) NOT NULL,
  `rol_usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`cedula_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (1,'usuario','usuario','usuario','usuario','UTI','usuario');
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rol`
--

DROP TABLE IF EXISTS `tbl_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rol` (
  `id` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rol`
--

LOCK TABLES `tbl_rol` WRITE;
/*!40000 ALTER TABLE `tbl_rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_disciplina`
--

DROP TABLE IF EXISTS `tbl_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `disciplina` varchar(45) NOT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_disciplina`
--

LOCK TABLES `tbl_disciplina` WRITE;
/*!40000 ALTER TABLE `tbl_disciplina` DISABLE KEYS */;
INSERT INTO `tbl_disciplina` VALUES (1,'Ajedrez'),(2,'Atletismo'),(3,'Baloncesto'),(4,'Béisbol'),(5,'Boxeo – Full Contact'),(6,'Esgrima'),(7,'Excursionismo'),(8,'Fútbol'),(9,'Fútbol de Salón'),(10,'Gimnasia Rítmica'),(11,'Halterofilia'),(12,'Judo'),(13,'Karate Do (Shito Ryu Sosey Kay)'),(14,'Karate Libre'),(15,'Kenpo'),(16,'Kickingball'),(17,'Kung Fu (Mantis)'),(18,'Kung Fu (Pak-Hok-Pai)'),(19,'Kung Fu (Wu Shu)'),(20,'Lucha Olímpica'),(21,'Natación'),(22,'Polo Acuático'),(23,'Rugby'),(24,'Saltos Ornamentales'),(25,'Softbol'),(26,'Submarinismo'),(27,'Taekwondo'),(28,'Tenis de Campo'),(29,'Tenis de Mesa'),(30,'Voleibol'),(31,'Yoga');
/*!40000 ALTER TABLE `tbl_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_talla_pantalon`
--

DROP TABLE IF EXISTS `tbl_talla_pantalon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_talla_pantalon` (
  `id_pantalon` int(11) NOT NULL,
  `pantalon` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pantalon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_talla_pantalon`
--

LOCK TABLES `tbl_talla_pantalon` WRITE;
/*!40000 ALTER TABLE `tbl_talla_pantalon` DISABLE KEYS */;
INSERT INTO `tbl_talla_pantalon` VALUES (4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8'),(9,'9'),(10,'10'),(11,'11'),(12,'12'),(13,'13'),(14,'14'),(15,'15'),(16,'16'),(17,'17'),(18,'18'),(19,'19'),(20,'20'),(21,'21'),(22,'22'),(23,'23'),(24,'24'),(25,'25'),(26,'26'),(27,'27'),(28,'28'),(29,'29'),(30,'30'),(31,'31'),(32,'32'),(33,'33'),(34,'34'),(35,'35'),(36,'36'),(37,'37'),(38,'38'),(39,'39'),(40,'40'),(41,'41'),(42,'42'),(43,'43'),(44,'44'),(45,'45'),(46,'46'),(47,'47'),(48,'48'),(49,'49'),(50,'50'),(51,'51'),(52,'52'),(53,'53'),(54,'54');
/*!40000 ALTER TABLE `tbl_talla_pantalon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dependencia_disciplina`
--

DROP TABLE IF EXISTS `tbl_dependencia_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dependencia_disciplina` (
  `id_dependencia` varchar(45) NOT NULL,
  `dependencia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dependencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dependencia_disciplina`
--

LOCK TABLES `tbl_dependencia_disciplina` WRITE;
/*!40000 ALTER TABLE `tbl_dependencia_disciplina` DISABLE KEYS */;
INSERT INTO `tbl_dependencia_disciplina` VALUES ('Dirección de Deportes','Dirección de Deportes');
/*!40000 ALTER TABLE `tbl_dependencia_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_year`
--

DROP TABLE IF EXISTS `tbl_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_year` (
  `id_year` int(11) NOT NULL,
  `year` varchar(45) NOT NULL,
  PRIMARY KEY (`id_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_year`
--

LOCK TABLES `tbl_year` WRITE;
/*!40000 ALTER TABLE `tbl_year` DISABLE KEYS */;
INSERT INTO `tbl_year` VALUES (0,'N/A'),(1912,'1912'),(1913,'1913'),(1914,'1914'),(1915,'1915'),(1916,'1916'),(1917,'1917'),(1918,'1918'),(1919,'1919'),(1920,'1920'),(1921,'1921'),(1922,'1922'),(1923,'1923'),(1924,'1924'),(1925,'1925'),(1926,'1926'),(1927,'1927'),(1928,'1928'),(1929,'1929'),(1930,'1930'),(1931,'1931'),(1932,'1932'),(1933,'1933'),(1934,'1934'),(1935,'1935'),(1936,'1936'),(1937,'1937'),(1938,'1938'),(1939,'1939'),(1940,'1940'),(1941,'1941'),(1942,'1942'),(1943,'1943'),(1944,'1944'),(1945,'1945'),(1946,'1946'),(1947,'1947'),(1948,'1948'),(1949,'1949'),(1950,'1950'),(1951,'1951'),(1952,'1952'),(1953,'1953'),(1954,'1954'),(1955,'1955'),(1956,'1956'),(1957,'1957'),(1958,'1958'),(1959,'1959'),(1960,'1960'),(1961,'1961'),(1962,'1962'),(1963,'1963'),(1964,'1964'),(1965,'1965'),(1966,'1966'),(1967,'1967'),(1968,'1968'),(1969,'1969'),(1970,'1970'),(1971,'1971'),(1972,'1972'),(1973,'1973'),(1974,'1974'),(1975,'1975'),(1976,'1976'),(1977,'1977'),(1978,'1978'),(1979,'1979'),(1980,'1980'),(1981,'1981'),(1982,'1982'),(1983,'1983'),(1984,'1984'),(1985,'1985'),(1986,'1986'),(1987,'1987'),(1988,'1988'),(1989,'1989'),(1990,'1990'),(1991,'1991'),(1992,'1992'),(1993,'1993'),(1994,'1994'),(1995,'1995'),(1996,'1996'),(1997,'1997'),(1998,'1998'),(1999,'1999'),(2000,'2000'),(2001,'2001'),(2002,'2002'),(2003,'2003'),(2004,'2004'),(2005,'2005'),(2006,'2006'),(2007,'2007'),(2008,'2008'),(2009,'2009'),(2010,'2010'),(2011,'2011'),(2012,'2012');
/*!40000 ALTER TABLE `tbl_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sexo_atleta`
--

DROP TABLE IF EXISTS `tbl_sexo_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sexo_atleta` (
  `id_sexo` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sexo_atleta`
--

LOCK TABLES `tbl_sexo_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_sexo_atleta` DISABLE KEYS */;
INSERT INTO `tbl_sexo_atleta` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `tbl_sexo_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_escuela_atleta`
--

DROP TABLE IF EXISTS `tbl_escuela_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_escuela_atleta` (
  `id_facultad` int(11) NOT NULL,
  `id_escuela` int(11) NOT NULL,
  `escuela` varchar(45) NOT NULL,
  PRIMARY KEY (`id_escuela`),
  KEY `escuela_facultad` (`id_facultad`),
  CONSTRAINT `escuela_facultad` FOREIGN KEY (`id_facultad`) REFERENCES `tbl_facultad_atleta` (`id_facultad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_escuela_atleta`
--

LOCK TABLES `tbl_escuela_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_escuela_atleta` DISABLE KEYS */;
INSERT INTO `tbl_escuela_atleta` VALUES (1,1,'Ingeniería Agrícola'),(2,2,'Arquitectura'),(3,3,'Biología'),(3,4,'Computación'),(3,5,'Física'),(3,6,'Geoquímica'),(3,7,'Matemática'),(3,8,'Química'),(4,9,'Administración y Contaduría'),(4,10,'Antropología'),(4,11,'Estadística'),(4,12,'Economía'),(4,13,'Estudios Internacionales'),(4,14,'Sociología'),(4,15,'Trabajo Social'),(5,16,'Derecho'),(5,17,'Estudios Políticos y Administrativos'),(6,18,'Medicina Veterinaria'),(7,19,'Farmacia'),(8,20,'Artes'),(8,21,'Bibliotecología y Archivología'),(8,22,'Comunicación Social'),(8,23,'Educación'),(8,24,'Filosofía'),(8,25,'Geografía'),(8,26,'Historia'),(8,27,'Idiomas Modernos'),(8,28,'Letras'),(8,29,'Psicología'),(9,30,'Ingeniería Civil'),(9,31,'Ingeniería Eléctrica'),(9,32,'Ingeniería Geofísica, Geología y Minas'),(9,33,'Ingeniería Metalúrgica'),(9,34,'Ingeniería Mecánica'),(9,35,'Ingeniería de Petróleo'),(9,36,'Ingeniería Química'),(9,37,'Procesos Industriales'),(10,38,'Bioanálisis'),(10,39,'Enfermería'),(10,40,'Medicina - Luis Razetti'),(10,41,'Medicina - José María Vargas'),(10,42,'Nutrición y Dietética'),(10,43,'Salud Pública'),(11,44,'Odontología'),(12,45,'N/A');
/*!40000 ALTER TABLE `tbl_escuela_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_club`
--

DROP TABLE IF EXISTS `tbl_club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_club` (
  `id_club` varchar(45) NOT NULL,
  `club` varchar(45) NOT NULL,
  PRIMARY KEY (`id_club`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_club`
--

LOCK TABLES `tbl_club` WRITE;
/*!40000 ALTER TABLE `tbl_club` DISABLE KEYS */;
INSERT INTO `tbl_club` VALUES ('Tenis de Mesa','Tenis de Mesa');
/*!40000 ALTER TABLE `tbl_club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_especialidad`
--

DROP TABLE IF EXISTS `tbl_especialidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_especialidad` (
  `id_especialidad` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_especialidad`
--

LOCK TABLES `tbl_especialidad` WRITE;
/*!40000 ALTER TABLE `tbl_especialidad` DISABLE KEYS */;
INSERT INTO `tbl_especialidad` VALUES ('Dobles','Dobles'),('Dobles Mixtos','Dobles Mixtos'),('Espada','Espada'),('Florete','Florete'),('Individual','Individual'),('Mínimo','Mínimo'),('Minimosca','Minimosca'),('Mosca','Mosca'),('Por Equipos','Por Equipos'),('Sable','Sable'),('Supermosca','Supermosca');
/*!40000 ALTER TABLE `tbl_especialidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sector`
--

DROP TABLE IF EXISTS `tbl_sector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sector` (
  `id_sector` int(11) NOT NULL,
  `sector` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sector`
--

LOCK TABLES `tbl_sector` WRITE;
/*!40000 ALTER TABLE `tbl_sector` DISABLE KEYS */;
INSERT INTO `tbl_sector` VALUES (1,'Estudiante'),(2,'Profesor'),(3,'Empleado'),(4,'Egresado'),(5,'Obrero'),(6,'Otro');
/*!40000 ALTER TABLE `tbl_sector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estatus_academico`
--

DROP TABLE IF EXISTS `tbl_estatus_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estatus_academico` (
  `id_estatus` int(11) NOT NULL,
  `estatus_academico` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estatus_academico`
--

LOCK TABLES `tbl_estatus_academico` WRITE;
/*!40000 ALTER TABLE `tbl_estatus_academico` DISABLE KEYS */;
INSERT INTO `tbl_estatus_academico` VALUES (1,'Regular'),(2,'Egresado'),(3,'Retirado');
/*!40000 ALTER TABLE `tbl_estatus_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_talla_letras`
--

DROP TABLE IF EXISTS `tbl_talla_letras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_talla_letras` (
  `id_letra` int(11) NOT NULL,
  `letra` varchar(45) NOT NULL,
  PRIMARY KEY (`id_letra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_talla_letras`
--

LOCK TABLES `tbl_talla_letras` WRITE;
/*!40000 ALTER TABLE `tbl_talla_letras` DISABLE KEYS */;
INSERT INTO `tbl_talla_letras` VALUES (1,'XXXS'),(2,'XXS'),(3,'XS'),(4,'S'),(5,'M'),(6,'L'),(7,'XL'),(8,'XXL'),(9,'XXXL');
/*!40000 ALTER TABLE `tbl_talla_letras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mes`
--

DROP TABLE IF EXISTS `tbl_mes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mes` (
  `id_mes` int(11) NOT NULL,
  `etiqueta_mes` varchar(45) NOT NULL,
  `valor_mes` varchar(45) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mes`
--

LOCK TABLES `tbl_mes` WRITE;
/*!40000 ALTER TABLE `tbl_mes` DISABLE KEYS */;
INSERT INTO `tbl_mes` VALUES (1,'01','enero'),(2,'02','febrero'),(3,'03','marzo'),(4,'04','abril'),(5,'05','mayo'),(6,'06','junio'),(7,'07','julio'),(8,'08','agosto'),(9,'09','septiembre'),(10,'10','octubre'),(11,'11','noviembre'),(12,'12','diciembre');
/*!40000 ALTER TABLE `tbl_mes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado_civil_atleta`
--

DROP TABLE IF EXISTS `tbl_estado_civil_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado_civil_atleta` (
  `id_civil` int(11) NOT NULL,
  `civil` varchar(45) NOT NULL,
  PRIMARY KEY (`id_civil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado_civil_atleta`
--

LOCK TABLES `tbl_estado_civil_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_estado_civil_atleta` DISABLE KEYS */;
INSERT INTO `tbl_estado_civil_atleta` VALUES (1,'Soltero'),(2,'Casado'),(3,'Viudo'),(4,'Divorciado');
/*!40000 ALTER TABLE `tbl_estado_civil_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estatura_atleta`
--

DROP TABLE IF EXISTS `tbl_estatura_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estatura_atleta` (
  `id_estatura` int(11) NOT NULL,
  `estatura` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estatura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estatura_atleta`
--

LOCK TABLES `tbl_estatura_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_estatura_atleta` DISABLE KEYS */;
INSERT INTO `tbl_estatura_atleta` VALUES (1,'1.00'),(2,'1.01'),(3,'1.02'),(4,'1.03'),(5,'1.04'),(6,'1.05'),(7,'1.06'),(8,'1.07'),(9,'1.08'),(10,'1.09'),(11,'1.10'),(12,'1.11'),(13,'1.12'),(14,'1.13'),(15,'1.14'),(16,'1.15'),(17,'1.16'),(18,'1.17'),(19,'1.18'),(20,'1.19'),(21,'1.20'),(22,'1.21'),(23,'1.22'),(24,'1.23'),(25,'1.24'),(26,'1.25'),(27,'1.26'),(28,'1.27'),(29,'1.28'),(30,'1.29'),(31,'1.30'),(32,'1.31'),(33,'1.32'),(34,'1.33'),(35,'1.34'),(36,'1.35'),(37,'1.36'),(38,'1.37'),(39,'1.38'),(40,'1.39'),(41,'1.40'),(42,'1.41'),(43,'1.42'),(44,'1.43'),(45,'1.44'),(46,'1.45'),(47,'1.46'),(48,'1.47'),(49,'1.48'),(50,'1.49'),(51,'1.50'),(52,'1.51'),(53,'1.52'),(54,'1.53'),(55,'1.54'),(56,'1.55'),(57,'1.56'),(58,'1.57'),(59,'1.58'),(60,'1.59'),(61,'1.60'),(62,'1.61'),(63,'1.62'),(64,'1.63'),(65,'1.64'),(66,'1.65'),(67,'1.66'),(68,'1.67'),(69,'1.68'),(70,'1.69'),(71,'1.70'),(72,'1.71'),(73,'1.72'),(74,'1.73'),(75,'1.74'),(76,'1.75'),(77,'1.76'),(78,'1.77'),(79,'1.78'),(80,'1.79'),(81,'1.80'),(82,'1.81'),(83,'1.82'),(84,'1.83'),(85,'1.84'),(86,'1.85'),(87,'1.86'),(88,'1.87'),(89,'1.88'),(90,'1.89'),(91,'1.90'),(92,'1.91'),(93,'1.92'),(94,'1.93'),(95,'1.94'),(96,'1.95'),(97,'1.96'),(98,'1.97'),(99,'1.98'),(100,'1.99'),(101,'2.00'),(102,'2.01'),(103,'2.02'),(104,'2.03'),(105,'2.04'),(106,'2.05'),(107,'2.06'),(108,'2.07'),(109,'2.08'),(110,'2.09'),(111,'2.10'),(112,'2.11'),(113,'2.12'),(114,'2.13'),(115,'2.14'),(116,'2.15'),(117,'2.16'),(118,'2.17'),(119,'2.18'),(120,'2.19'),(121,'2.20');
/*!40000 ALTER TABLE `tbl_estatura_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_facultad_atleta`
--

DROP TABLE IF EXISTS `tbl_facultad_atleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_facultad_atleta` (
  `id_facultad` int(11) NOT NULL,
  `facultad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_facultad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_facultad_atleta`
--

LOCK TABLES `tbl_facultad_atleta` WRITE;
/*!40000 ALTER TABLE `tbl_facultad_atleta` DISABLE KEYS */;
INSERT INTO `tbl_facultad_atleta` VALUES (1,'Agronomía'),(2,'Arquitectura y Urbanismo'),(3,'Ciencias'),(4,'Ciencias Económicas y Sociales'),(5,'Ciencias Jurídicas y Políticas'),(6,'Ciencias Veterinarias'),(7,'Farmacia'),(8,'Humanidas y Educación'),(9,'Ingeniería'),(10,'Medicina'),(11,'Odontología'),(12,'N/A');
/*!40000 ALTER TABLE `tbl_facultad_atleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_componente_disciplina`
--

DROP TABLE IF EXISTS `tbl_componente_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_componente_disciplina` (
  `id_componente` int(11) NOT NULL,
  `componente` varchar(45) NOT NULL,
  PRIMARY KEY (`id_componente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_componente_disciplina`
--

LOCK TABLES `tbl_componente_disciplina` WRITE;
/*!40000 ALTER TABLE `tbl_componente_disciplina` DISABLE KEYS */;
INSERT INTO `tbl_componente_disciplina` VALUES (1,'Recreación'),(2,'Formación'),(3,'Alta Competencia');
/*!40000 ALTER TABLE `tbl_componente_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dia`
--

DROP TABLE IF EXISTS `tbl_dia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dia` (
  `id_dia` int(11) NOT NULL,
  `dia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dia`
--

LOCK TABLES `tbl_dia` WRITE;
/*!40000 ALTER TABLE `tbl_dia` DISABLE KEYS */;
INSERT INTO `tbl_dia` VALUES (1,'01'),(2,'02'),(3,'03'),(4,'04'),(5,'05'),(6,'06'),(7,'07'),(8,'08'),(9,'09'),(10,'10'),(11,'11'),(12,'12'),(13,'13'),(14,'14'),(15,'15'),(16,'16'),(17,'17'),(18,'18'),(19,'19'),(20,'20'),(21,'21'),(22,'22'),(23,'23'),(24,'24'),(25,'25'),(26,'26'),(27,'27'),(28,'28'),(29,'29'),(30,'30'),(31,'31');
/*!40000 ALTER TABLE `tbl_dia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estatus_disciplina`
--

DROP TABLE IF EXISTS `tbl_estatus_disciplina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estatus_disciplina` (
  `id_estatus` int(11) NOT NULL,
  `estatus_disciplina` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estatus_disciplina`
--

LOCK TABLES `tbl_estatus_disciplina` WRITE;
/*!40000 ALTER TABLE `tbl_estatus_disciplina` DISABLE KEYS */;
INSERT INTO `tbl_estatus_disciplina` VALUES (1,'Aspirante'),(2,'Pre-Selección'),(3,'Selección'),(4,'Ex-Selección');
/*!40000 ALTER TABLE `tbl_estatus_disciplina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `id_pais` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `estado_pais` (`id_pais`),
  CONSTRAINT `estado_pais` FOREIGN KEY (`id_pais`) REFERENCES `tbl_pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
INSERT INTO `tbl_estado` VALUES (236,1,'Amazonas'),(236,2,'Anzoátegui'),(236,3,'Apure'),(236,4,'Aragua'),(236,5,'Barinas'),(236,6,'Bolívar'),(236,7,'Carabobo'),(236,8,'Cojedes'),(236,9,'Distrito Capital'),(236,10,'Delta Amacuro'),(236,11,'Dependencia Federal'),(236,12,'Falcón'),(236,13,'Guárico'),(236,14,'Lara'),(236,15,'Miranda'),(236,16,'Monagas'),(236,17,'Mérida'),(236,18,'Nueva Esparta'),(236,19,'Portuguesa'),(236,20,'Sucre'),(236,21,'Trujillo'),(236,22,'Táchira'),(236,23,'Vargas'),(236,24,'Yaracuy'),(236,25,'Zulia');
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-01  1:12:46
