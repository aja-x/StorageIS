-- MySQL dump 10.16  Distrib 10.2.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_storage_is
-- ------------------------------------------------------
-- Server version	10.2.23-MariaDB

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `tb_asal_kota`
--

DROP TABLE IF EXISTS `tb_asal_kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_asal_kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_asal_kota`
--

LOCK TABLES `tb_asal_kota` WRITE;
/*!40000 ALTER TABLE `tb_asal_kota` DISABLE KEYS */;
INSERT INTO `tb_asal_kota` VALUES (5,'Surabaya','2019-05-02 17:29:05','2019-05-02 10:29:05'),(6,'Sidoarjo','2019-05-02 09:13:43','2019-05-02 09:13:43');
/*!40000 ALTER TABLE `tb_asal_kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_blok`
--

DROP TABLE IF EXISTS `tb_blok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_blok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_blok` varchar(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  `sisa_kapasitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kolom` (`nama_blok`,`kolom`,`baris`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_blok`
--

LOCK TABLES `tb_blok` WRITE;
/*!40000 ALTER TABLE `tb_blok` DISABLE KEYS */;
INSERT INTO `tb_blok` VALUES (93,'A',1,1,0,'2019-05-21 22:34:08','2019-05-21 22:41:47'),(94,'A',1,2,0,'2019-05-21 22:34:08','2019-05-21 22:41:47'),(95,'A',2,1,0,'2019-05-21 22:34:08','2019-05-21 22:41:47'),(96,'A',2,2,0,'2019-05-21 22:34:08','2019-05-21 22:41:47'),(97,'B',1,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(98,'B',1,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(99,'B',2,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(100,'B',2,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(101,'C',1,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(102,'C',1,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(103,'C',2,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(104,'C',2,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(105,'D',1,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(106,'D',1,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(107,'D',2,1,25,'2019-05-21 22:34:08','2019-05-21 22:34:08'),(108,'D',2,2,25,'2019-05-21 22:34:08','2019-05-21 22:34:08');
/*!40000 ALTER TABLE `tb_blok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_blok_gudang`
--

DROP TABLE IF EXISTS `tb_blok_gudang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_blok_gudang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_gudang` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL,
  `jumlah_karung` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_detail_jalur` (`id_gudang`),
  KEY `tb_blok_gudang_ibfk_2` (`id_blok`),
  CONSTRAINT `tb_blok_gudang_ibfk_1` FOREIGN KEY (`id_gudang`) REFERENCES `tb_gudang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_blok_gudang_ibfk_2` FOREIGN KEY (`id_blok`) REFERENCES `tb_blok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_blok_gudang`
--

LOCK TABLES `tb_blok_gudang` WRITE;
/*!40000 ALTER TABLE `tb_blok_gudang` DISABLE KEYS */;
INSERT INTO `tb_blok_gudang` VALUES (7,7,93,25,'2019-05-21 22:41:47','2019-05-21 22:41:47'),(8,7,94,25,'2019-05-21 22:41:47','2019-05-21 22:41:47'),(9,7,95,25,'2019-05-21 22:41:47','2019-05-21 22:41:47'),(10,7,96,25,'2019-05-21 22:41:47','2019-05-21 22:41:47');
/*!40000 ALTER TABLE `tb_blok_gudang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_gudang`
--

DROP TABLE IF EXISTS `tb_gudang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_gudang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_asal_kota` int(11) NOT NULL,
  `id_jenis_beras` int(11) NOT NULL,
  `id_kualitas_beras` int(11) NOT NULL,
  `id_jenis_berat_beras` int(11) NOT NULL,
  `jumlah_karung` int(11) NOT NULL,
  `tanggal_masuk` timestamp NULL DEFAULT NULL,
  `tanggal_keluar` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asal_kota` (`id_asal_kota`),
  KEY `id_jenis_beras` (`id_jenis_beras`),
  KEY `id_kualitas_beras` (`id_kualitas_beras`),
  KEY `id_jenis_berat_beras` (`id_jenis_berat_beras`),
  CONSTRAINT `tb_gudang_ibfk_1` FOREIGN KEY (`id_asal_kota`) REFERENCES `tb_asal_kota` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_gudang_ibfk_2` FOREIGN KEY (`id_jenis_beras`) REFERENCES `tb_jenis_beras` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_gudang_ibfk_5` FOREIGN KEY (`id_jenis_berat_beras`) REFERENCES `tb_jenis_berat_beras` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_gudang_ibfk_6` FOREIGN KEY (`id_kualitas_beras`) REFERENCES `tb_kualitas_beras` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gudang`
--

LOCK TABLES `tb_gudang` WRITE;
/*!40000 ALTER TABLE `tb_gudang` DISABLE KEYS */;
INSERT INTO `tb_gudang` VALUES (7,5,2,2,2,100,'2019-01-21 22:30:00',NULL,'2019-01-21 22:41:47','2019-01-21 22:41:47');
/*!40000 ALTER TABLE `tb_gudang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jalur`
--

DROP TABLE IF EXISTS `tb_jalur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jalur` (
  `id_jalur` int(11) NOT NULL AUTO_INCREMENT,
  `nama_blok` varchar(32) NOT NULL,
  `jalur` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_jalur`) USING BTREE,
  UNIQUE KEY `id_blok` (`nama_blok`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jalur`
--

LOCK TABLES `tb_jalur` WRITE;
/*!40000 ALTER TABLE `tb_jalur` DISABLE KEYS */;
INSERT INTO `tb_jalur` VALUES (10,'A','A','2019-05-21 22:34:08','2019-05-21 22:34:08'),(11,'B','B','2019-05-21 22:34:08','2019-05-21 22:34:08'),(12,'C','A-C','2019-05-21 22:34:08','2019-05-21 22:34:08'),(13,'D','B-D','2019-05-21 22:34:09','2019-05-21 22:34:09');
/*!40000 ALTER TABLE `tb_jalur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jenis_beras`
--

DROP TABLE IF EXISTS `tb_jenis_beras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jenis_beras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jenis_beras`
--

LOCK TABLES `tb_jenis_beras` WRITE;
/*!40000 ALTER TABLE `tb_jenis_beras` DISABLE KEYS */;
INSERT INTO `tb_jenis_beras` VALUES (2,'Raja Lele','2019-05-02 09:30:03','2019-05-02 09:30:03'),(3,'Raja Sapi','2019-05-03 22:47:03','2019-05-03 22:47:03');
/*!40000 ALTER TABLE `tb_jenis_beras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jenis_berat_beras`
--

DROP TABLE IF EXISTS `tb_jenis_berat_beras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jenis_berat_beras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jenis_berat_beras`
--

LOCK TABLES `tb_jenis_berat_beras` WRITE;
/*!40000 ALTER TABLE `tb_jenis_berat_beras` DISABLE KEYS */;
INSERT INTO `tb_jenis_berat_beras` VALUES (2,50,'2019-05-02 09:49:58','2019-05-02 09:49:58');
/*!40000 ALTER TABLE `tb_jenis_berat_beras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_klasifikasi`
--

DROP TABLE IF EXISTS `tb_klasifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_klasifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asal_beras` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `jumlah_karung` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `tanggal_keluar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jalur_terdekat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_klasifikasi`
--

LOCK TABLES `tb_klasifikasi` WRITE;
/*!40000 ALTER TABLE `tb_klasifikasi` DISABLE KEYS */;
INSERT INTO `tb_klasifikasi` VALUES (3,'Probolinggo','Pandanwangi','Premium','25','100','2019-03-15','2019-06-14','Blok C1','A1-B4-C2-C1'),(5,'Probolinggo','Pandanwangi','Premium','25','100','2019-03-15','2019-06-14','Blok C1','A1-B4-C2-C1'),(7,'Probolinggo','Pandanwangi','Premium','25','100','2019-03-15','2019-06-14','Blok C1','A1-B4-C2-C1');
/*!40000 ALTER TABLE `tb_klasifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kualitas_beras`
--

DROP TABLE IF EXISTS `tb_kualitas_beras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kualitas_beras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kualitas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kualitas_beras`
--

LOCK TABLES `tb_kualitas_beras` WRITE;
/*!40000 ALTER TABLE `tb_kualitas_beras` DISABLE KEYS */;
INSERT INTO `tb_kualitas_beras` VALUES (2,'Premium','2019-05-02 09:41:24','2019-05-02 09:41:24'),(3,'Biasa','2019-05-03 22:46:46','2019-05-03 22:46:46');
/*!40000 ALTER TABLE `tb_kualitas_beras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_raw_data`
--

DROP TABLE IF EXISTS `tb_raw_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_raw_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_data` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_raw_data`
--

LOCK TABLES `tb_raw_data` WRITE;
/*!40000 ALTER TABLE `tb_raw_data` DISABLE KEYS */;
INSERT INTO `tb_raw_data` VALUES (30,'Probolinggo\r\nPandanwangi\r\nPremium\r\n25\r\n100\r\n2019-03-15\r\n2019-06-14\r\nBlok C1\r\nA1-B4-C2-C1'),(34,'Probolinggo\r\nPandanwangi\r\nPremium\r\n25\r\n100\r\n2019-03-15\r\n2019-06-14\r\nBlok C1\r\nA1-B4-C2-C1');
/*!40000 ALTER TABLE `tb_raw_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`yuuki`@`localhost`*/ /*!50003 TRIGGER `insert_tb_klasifikasi` BEFORE INSERT ON `tb_raw_data`
 FOR EACH ROW BEGIN
    INSERT INTO tb_klasifikasi (
        tb_klasifikasi.asal_beras,
        tb_klasifikasi.jenis,
        tb_klasifikasi.kualitas,
        tb_klasifikasi.berat,
        tb_klasifikasi.jumlah_karung,
        tb_klasifikasi.tanggal_masuk,
        tb_klasifikasi.tanggal_keluar,
        tb_klasifikasi.lokasi,
        tb_klasifikasi.jalur_terdekat
    ) VALUES (
    	(SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 1), '\r\n', -1)),
        (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 2), '\r\n', -1)),
        (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 3), '\r\n', -1)),
        (SELECT CONVERT(SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 4), '\r\n', -1), SIGNED)),
        (SELECT CONVERT(SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 5), '\r\n', -1), SIGNED)),
        (SELECT CONVERT(SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 6), '\r\n', -1), DATE)),
        (SELECT CONVERT(SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 7), '\r\n', -1), DATE)),
        (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 8), '\r\n', -1)),
        (SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(NEW.raw_data, '\r\n', 9), '\r\n', -1))
    );
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tb_tumpukan`
--

DROP TABLE IF EXISTS `tb_tumpukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tumpukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maksimal_tumpukan` int(11) NOT NULL,
  `banyak_karung` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tumpukan`
--

LOCK TABLES `tb_tumpukan` WRITE;
/*!40000 ALTER TABLE `tb_tumpukan` DISABLE KEYS */;
INSERT INTO `tb_tumpukan` VALUES (8,5,5);
/*!40000 ALTER TABLE `tb_tumpukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yuuki','admin@yuuki.com',NULL,'$2y$10$xUnaePHzHWXGYUw33bOqtOm96xUjBMdaKu05mq3IFN5WgSLp9Vs6a',NULL,'2019-04-29 06:18:19','2019-04-29 06:18:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_gudang`
--

DROP TABLE IF EXISTS `v_gudang`;
/*!50001 DROP VIEW IF EXISTS `v_gudang`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_gudang` (
  `nama_kota` tinyint NOT NULL,
  `nama_jenis` tinyint NOT NULL,
  `jenis_kualitas` tinyint NOT NULL,
  `berat` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `id_asal_kota` tinyint NOT NULL,
  `id_jenis_beras` tinyint NOT NULL,
  `id_kualitas_beras` tinyint NOT NULL,
  `id_jenis_berat_beras` tinyint NOT NULL,
  `jumlah_karung` tinyint NOT NULL,
  `tanggal_masuk` tinyint NOT NULL,
  `tanggal_keluar` tinyint NOT NULL,
  `created_at` tinyint NOT NULL,
  `updated_at` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_gudang`
--

/*!50001 DROP TABLE IF EXISTS `v_gudang`*/;
/*!50001 DROP VIEW IF EXISTS `v_gudang`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`yuuki`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_gudang` AS select `k`.`nama_kota` AS `nama_kota`,`jb`.`nama_jenis` AS `nama_jenis`,`kb`.`jenis_kualitas` AS `jenis_kualitas`,`bb`.`berat` AS `berat`,`g`.`id` AS `id`,`g`.`id_asal_kota` AS `id_asal_kota`,`g`.`id_jenis_beras` AS `id_jenis_beras`,`g`.`id_kualitas_beras` AS `id_kualitas_beras`,`g`.`id_jenis_berat_beras` AS `id_jenis_berat_beras`,`g`.`jumlah_karung` AS `jumlah_karung`,`g`.`tanggal_masuk` AS `tanggal_masuk`,`g`.`tanggal_keluar` AS `tanggal_keluar`,`g`.`created_at` AS `created_at`,`g`.`updated_at` AS `updated_at` from ((((`tb_gudang` `g` join `tb_asal_kota` `k` on(`g`.`id_asal_kota` = `k`.`id`)) join `tb_jenis_beras` `jb` on(`g`.`id_jenis_beras` = `jb`.`id`)) join `tb_kualitas_beras` `kb` on(`g`.`id_kualitas_beras` = `kb`.`id`)) join `tb_jenis_berat_beras` `bb` on(`g`.`id_jenis_berat_beras` = `bb`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-22 23:51:16
