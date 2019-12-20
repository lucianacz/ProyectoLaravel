-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: miBD
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_12_02_145601_create_column_pais_apellido',2),(4,'2019_12_02_150242_create_default_admin',3),(5,'2019_12_02_185253_add_default_country',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `foto` varchar(400) NOT NULL,
  `epigrafe` varchar(100) NOT NULL,
  `parrafo1` text NOT NULL,
  `pais` varchar(45) NOT NULL,
  `region` varchar(80) NOT NULL,
  `destacado` varchar(100) NOT NULL,
  `parrafo2` text NOT NULL,
  `video` varchar(500) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `foto2` varchar(400) DEFAULT NULL,
  `foto3` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idNota_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (26,3,'Midnat','Mujeres de cara tatuada','47gsrxN279klwJUBC9M7zW8WUN9uEgwx3xWJw281.jpeg','Queda solo una mujer viva que sabe tocar la flauta con el aire de la nariz.','Una de las características de los habitantes del estado de Chin consiste en los tatuajes faciales que lucen las mujeres de las tribus. Si bien hay muchos mitos acerca de como empezó esta tradición lo cierto es que es considerado un símbolo de belleza entre los locales. En el año 1960 el estado prohibió esta practica generando así una considerable disminución de la tradición. Hoy en día la mujer más joven que luce un tatuaje facial tiene 28 años.','Myanmar','Chin State','El tatuaje en la cara se considera como símbolo de belleza. Depende de qué tribu seas, otro tatuaje.','Viajar por este estado es un verdadero privilegio, abierto al turismo hace poco tiempo es uno de los lugares de Asia más tradicionales y con menos influencia occidental. Entre sus montañas se encuentra Mindat el punto de partida para los viajeros que se adentran en las montañas más remotas del estado. Dejando atrás la pequeña ciudad de Mindat, y luego de horas de atravesar selvas tropicales y cultivos se puede empezar un recorrido por los pequeños pueblos de agricultores.',NULL,'2018-11-01 00:00:00',NULL,NULL),(27,3,'Annapurna Circuit Trek','Una visita por los Himalayas','qMPKfNNmaeZVTj9RhS7q0VFLfXeTg2aJJVb1VoUp.jpeg','Nepal','Para cualquier amante de la naturaleza y el trekking Nepal es el paraíso. De las muchas opciones que hay nosotros elegimos el Annapurna circuit, uno de los recorridos más famosos por su belleza en la cordillera de los Himalayas. El circuito arranca a los 800 metros de altura y va subiendo hasta alcanzar los 5400!','Nepal','Eastern Development Region','DATO: La bandera nacional de Nepal es la única en el mundo que no es de forma rectangular','Al comenzar el trekking, el paisaje es verde por los campos cultivados y un clima subtropical, a medida que se asciende en altura el paisaje cambia hasta llegar a cumbres cubiertas de nieve, pasando por bosques de frondosos pinos y arbustos alpinos muy coloridos!',NULL,'2019-10-01 00:00:00',NULL,NULL),(28,3,'Tribu Mursi','Los mursis','P6IrFItcR6yPeNDVHdcLiuymAvkyGW2AWpzRFdd8.jpeg','Mursis','Cuenta la leyenda que los hombres de la tribu mursi obligaban a lucir platos de arcilla en los labios a las mujeres hace muchos siglos atrás, cuando desde Sudán los traficantes de esclavos se cruzaban a robar mujeres. De esta manera al no verlas atractivas, no se las iban a llevar. Pasado muucho tiempo, el plato se convirtio en el mayor símbolo de belleza; cuanto mayor es el plato existen más posibilidades de conseguir un buen matrimonio.','Ethiopia','Southern Nations, Nationalities, and Peoples\' Region','El plato en el labio es un simbolo de belleza! Increíbleeeeeeee','Es increíble como los humanos tenemos tantas diferencias y a la vez similitudes.\r\nPor ejemplo en la tribu Mursi es considerado símbolo de belleza el tener el labio extendido y adornado con platos de arcilla. Sin duda una característica única y difícil de comprender a los ojos occidentales, pero al viajar uno se transforma, aprende a apreciar las cosas excepcionales y hermosas que nos ofrece el mundo en el que vivimos.',NULL,'2019-02-01 00:00:00',NULL,NULL),(29,3,'Mentawai','La tribu Mentawai','hpoNqTcOS6p2gJ7AEqP9tO82HCEP6ARDbGRRXbmf.jpeg','Chamanes','La tribu Mentwai vive en un pequeño grupo de islas llamado Islas Mentawai, las mismas están ubicadas al sur oeste de la gran isla de Sumatra y pertenecen hoy en día a Indonesia.\r\nAun hoy los miembros de la tribu son cazadores recolectores, tomando de la naturaleza lo escencial para vivir.\r\nPara llegar a donde viven es necesario viajar en bote por los ríos de la isla y luego atravesar un extenso pantano a pie.','Indonesia','West Sumatra','Al no poseer escritura todas las enseñanzas del pueblo se transmiten oralmente','Los chamanes aprenden canciones, las cuales describen desde cómo reconocer arboles hasta como invocar espíritus. Cualquier hombre de la tribu puede convertirse en chaman si lo desea, para esto debe darle una ofrenda a un chaman que este dispuesto a enseñarle. El camino es largo, la mayoría termina su preparación chamánica cuando ya es muy mayor.',NULL,'2018-12-01 00:00:00',NULL,NULL),(30,3,'Padang','Mujeres de cuello largo','B8KKhCyYutshMrvSwDTEpdlsUCisvzSaIUKOfPt9.jpeg','Mujeres cuello largo','Esta práctica comienza los 5 años de edad donde se añaden progresivamente anillos. Los mismos, poco a poco van ejerciendo presión sobre la clavícula y logran así la apariencia de un cuello más largo. No hay un acuerdo de cómo empezó la tradición ni su razón de ser, lo cierto es que dado a la influencia del gobierno de Myanmar esta tradición fue menguando a lo largo de los años. En los 90, gracias a la inestabilidad política de su país, gran parte de la tribu migró a Tailandia.','Myanmar','Chin State','Son refugiadas con derechos limitado. No son consideradas parte ni de Tailandia ni de Myanmar.','DE QUÉ VIVEN?\r\nLas mujeres de la tribu Padaung hoy en día tienen por actividad principal la venta de artesanías a turistas, así como también el posar para fotos a cambio de propinas. Son pocas las mujeres de la tribu que hoy en día se dedican a la confección de prendas de algodón-actividad característica de las mujeres del pueblo- encargandose desde la preparación del algodón recolectado en el campo, pasando por el hilado artesanal y finalmente tejiendo los bellos patrones.',NULL,'2019-10-01 00:00:00',NULL,NULL),(31,3,'Romblon','Nudibranqueos','gf0CRimrNJN2gF8Nd1iiVcIvBVdrCth7f11lU4qJ.jpeg','Nudibranqueos','FILIPINAS: Un paraíso de mas de 7 mil islas. Estuvimos un mes conociendo este país y lo unico negativo es el transporte! Con conexiones mal organizadas moverse por el país es un verdadero reto. Para llegar a la isla de Romblon nos tomamos (en este orden): un ferry, un micro, un taxi, un avión, otro taxi, otro micro, un ferry, otro micro y por ultimo un ferry mas. Todo esto en dos noches de viaje. Esta hazaña fue bien recompensada.','Philippines','Romblon','Los nudibranqueos son babosas de mar. Tienen el tamaño de una uña.','El buceo “macro” consiste en enfocarse en buscar criaturas diminutas. Este post se lo dedicamos a algunas de las muchas especies de nudibranquios que vimos (conocidas como babosas de mar). Aunque por foto no parezca, tienen el tamaño de una uña. Lo mas llamativo son sus colores vivos y su forma, que en tierra son inimaginables. Filipinas es la meca del buceo macro, asi que no nos quedo otra que aprender a usar la camara bajo el agua, algo que requiere mucha paciencia y estabilidad al bucear.',NULL,'2019-01-01 00:00:00',NULL,NULL),(32,3,'Jinka','Pastores','qDPizYLzh0jeWHLccy04oAUV2ajrxB6TqITxjYIJ.png','Almohada','Lxs pastores de diferentes tribus de Etiopia estan acostrumbrados a caminar por dias de pueblo en pueblo. Es por eso, que cargan con un elemento que funciona como almohada, o mejor dicho, reposacabeza y como silla.\r\nSe dice que no son simétricos porque permiten a los pastores evitar caer en un sueño profundo debido a su inestabilidad','Ethiopia','Southern Nations, Nationalities, and Peoples\' Region','Es por eso, que cargan con un elemento que funciona como almohada','Lxs pastores de diferentes tribus de Etiopia estan acostrumbrados a caminar por dias de pueblo en pueblo. Es por eso, que cargan con un elemento que funciona como almohada, o mejor dicho, reposacabeza y como silla.\r\nSe dice que no son simétricos porque permiten a los pastores evitar caer en un sueño profundo debido a su inestabilidad',NULL,'2019-02-01 00:00:00',NULL,NULL),(33,3,'Estambul','El Gran Bazar de Estambul.','lUrHIFCMfMb7e3ZzmOGtU1wtLjA1uqYBGBGc9TKN.jpeg','El Gran Bazar de Estambul.','Esta ubicado en el mismo lugar desde su fundación en 1464 y tuvo que ser reconstruido luego de un terremoto en 1864. El mismo es uno de los bazares más grandes del mundo y lo que se encuentra allí dentro dejara satisfecho hasta al más exquisito de los viajeros; especias, tapices, túnicas de seda, lamparas, narguilas y una infinidad de cosas mas. Uno puede pasarse días descubriendo artículos únicos característicos de oriente.','Turkey','Istanbul Province','Esta ubicado en el mismo lugar desde su fundación en 1464','La estructura es bellísima, contando el lugar con domos, fuentes, azulejos coloridos y hasta una mezquita.\r\nEs justo admitir que todo el misticismo y el deleite que ofrece el bazar es un poco opacado debido a los altos precios (aun regateando precios) los vendedores están acostumbrados a que sus clientes sean turistas y poco a poco el bazar se fue adaptando a ese mercado.',NULL,'2018-08-01 00:00:00',NULL,NULL);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nombre` varchar(400) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  PRIMARY KEY (`photo_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (5,3,'IJkzGIwkgO5VDSX7IuI5VONr1zqWL9tMqNJiThyT.jpeg','Australia','Northern Territory'),(7,3,'uY7FxIdWZplbOS3g1XomJ6Xi5JsudIKaXH8ndjQQ.jpeg','Cambodia','Kampong Chhnang Province'),(9,3,'zURY1vfWzCj9k75P8jOWfxVRGMNjfk1o2o543mST.jpeg','Bahrain','Southern Governorate'),(10,3,'AiQDWVOQGdMCwmamdIFZAp7oAOvgOH2twZMGRA0q.jpeg','Indonesia','West Sumatra'),(12,5,'SStlEWj1mq3JngpyFdJf1kXZs3LyAsgeMtGcNsAX.jpeg','Armenia','Gegharkunik Province'),(14,3,'yMyulYttTEn5k0mUMBQ7j4eHCdUMbBkXbojfGUAW.jpeg','Philippines','Romblon'),(15,3,'iNGBmlEYbh98hGmkWeu8MWaqaFpd88TUFecBMvbD.jpeg','Peru','Cusco'),(16,3,'H3qFsqUClZbevgCNtLS7LyOeCUwvLMcjg9jjEdNu.jpeg','Indonesia','West Sumatra'),(17,5,'LtObYPKbjT8KRp8U6YkIlVrr68fweZ5wpQbOITmV.jpeg','Belgium','Liège');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Argentina',
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Gaston','gaston@digitalhouse.com',NULL,'$2y$10$3ZZU/Vp2i9ERMfK8.D7UgegnSYdibthXx2rcXMo6eAKgcvw6WFXLC',NULL,'2019-12-02 17:53:00','2019-12-02 17:53:00','Argentina','',0),(2,'Lucina','lucianac222zikk@gmail.com',NULL,'$2y$10$xPQXbPGw0Y/R2p5.H59.3.P10EG/JYS.5ECDJMMoTC4YyPkFP3ztK',NULL,'2019-12-02 21:58:28','2019-12-02 21:58:28','Andorra','Lucina',0),(3,'Luciana','lucianaczikk@gmail.com',NULL,'$2y$10$NXH5ZXcJ2zLIGabRL4D2T./k.fpazNcDF3zhJBy/1nWy5vK3T1Dn.',NULL,'2019-12-02 22:15:03','2019-12-18 20:19:50','Argentina','Czikk',1),(4,'juan','juan@juan.com',NULL,'$2y$10$NoLj8HF7rszCbXRN2sZqIOh9UNax.bp9bcdoubMjv9MBXLSdlmrcm',NULL,'2019-12-04 23:06:11','2019-12-04 23:06:11','Afghanistan','yo',0),(5,'Micaela','micaela@gmail.com',NULL,'$2y$10$l.7ZHTIdtXc17kxLU0S17.Da2ftzS/gmWuToxvGt7nQQo.ZfK7Nc6',NULL,'2019-12-13 22:44:49','2019-12-13 22:44:49','Benin','Caela',0),(6,'Susana','susana@gmail.com',NULL,'$2y$10$W7x9UD/k.CG0A/N4EwbUBe84EMyA51wkX9hx18A3TLUcvFsXtSSfS',NULL,'2019-12-18 22:29:32','2019-12-18 23:58:02','American Samoa','Gimenez',0),(7,'Cultura Sariri','culturasariri@gmail.com',NULL,'12345678',NULL,'2019-12-19 22:19:32','2019-12-19 22:19:32','Argentina','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(400) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `adm` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `Email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Luciana','Czikk','lucianaczikk@gmail.com','123456','Argentina',1),(2,'Gaston','Estevez','gaston@digitalhouse.com','123456','España',0);
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

-- Dump completed on 2019-12-20 13:42:28
