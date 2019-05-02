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
  `nama_blok` varchar(2) NOT NULL,
  `kapasitas_blok` int(11) NOT NULL,
  `sisa_kapasitas_blok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_blok`
--

LOCK TABLES `tb_blok` WRITE;
/*!40000 ALTER TABLE `tb_blok` DISABLE KEYS */;
INSERT INTO `tb_blok` VALUES (176,'A',1000,1000,'2019-04-30 04:09:22','2019-04-30 04:09:22'),(177,'B',1000,1000,'2019-04-30 04:09:25','2019-04-30 04:09:25'),(178,'C',1000,1000,'2019-04-30 04:09:34','2019-04-30 04:09:34'),(179,'D',1000,1000,'2019-04-30 04:09:35','2019-04-30 04:09:35'),(180,'E',1000,1000,'2019-04-30 04:09:39','2019-04-30 04:09:39');
/*!40000 ALTER TABLE `tb_blok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_blok_detail`
--

DROP TABLE IF EXISTS `tb_blok_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_blok_detail` (
  `id_blok` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  PRIMARY KEY (`id_blok`,`kolom`,`baris`) USING BTREE,
  CONSTRAINT `tb_blok_detail_ibfk_1` FOREIGN KEY (`id_blok`) REFERENCES `tb_blok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_blok_detail`
--

LOCK TABLES `tb_blok_detail` WRITE;
/*!40000 ALTER TABLE `tb_blok_detail` DISABLE KEYS */;
INSERT INTO `tb_blok_detail` VALUES (176,1,1),(176,1,2),(176,1,3),(176,1,4),(176,1,5),(176,2,1),(176,2,2),(176,2,3),(176,2,4),(176,2,5),(176,3,1),(176,3,2),(176,3,3),(176,3,4),(176,3,5),(176,4,1),(176,4,2),(176,4,3),(176,4,4),(176,4,5),(176,5,1),(176,5,2),(176,5,3),(176,5,4),(176,5,5),(177,1,1),(177,1,2),(177,1,3),(177,1,4),(177,1,5),(177,2,1),(177,2,2),(177,2,3),(177,2,4),(177,2,5),(177,3,1),(177,3,2),(177,3,3),(177,3,4),(177,3,5),(177,4,1),(177,4,2),(177,4,3),(177,4,4),(177,4,5),(177,5,1),(177,5,2),(177,5,3),(177,5,4),(177,5,5),(178,1,1),(178,1,2),(178,1,3),(178,1,4),(178,1,5),(178,2,1),(178,2,2),(178,2,3),(178,2,4),(178,2,5),(178,3,1),(178,3,2),(178,3,3),(178,3,4),(178,3,5),(178,4,1),(178,4,2),(178,4,3),(178,4,4),(178,4,5),(178,5,1),(178,5,2),(178,5,3),(178,5,4),(178,5,5),(179,1,1),(179,1,2),(179,1,3),(179,1,4),(179,1,5),(179,2,1),(179,2,2),(179,2,3),(179,2,4),(179,2,5),(179,3,1),(179,3,2),(179,3,3),(179,3,4),(179,3,5),(179,4,1),(179,4,2),(179,4,3),(179,4,4),(179,4,5),(179,5,1),(179,5,2),(179,5,3),(179,5,4),(179,5,5),(180,1,1),(180,1,2),(180,1,3),(180,1,4),(180,1,5),(180,2,1),(180,2,2),(180,2,3),(180,2,4),(180,2,5),(180,3,1),(180,3,2),(180,3,3),(180,3,4),(180,3,5),(180,4,1),(180,4,2),(180,4,3),(180,4,4),(180,4,5),(180,5,1),(180,5,2),(180,5,3),(180,5,4),(180,5,5);
/*!40000 ALTER TABLE `tb_blok_detail` ENABLE KEYS */;
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
  `tanggal_masuk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `id_blok` int(11) NOT NULL,
  `id_jalur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asal_kota` (`id_asal_kota`),
  KEY `id_jenis_beras` (`id_jenis_beras`),
  KEY `id_kualitas_beras` (`id_kualitas_beras`),
  KEY `id_jenis_berat_beras` (`id_jenis_berat_beras`),
  KEY `id_blok` (`id_blok`),
  KEY `id_jalur` (`id_jalur`),
  CONSTRAINT `tb_gudang_ibfk_1` FOREIGN KEY (`id_asal_kota`) REFERENCES `tb_asal_kota` (`id`),
  CONSTRAINT `tb_gudang_ibfk_2` FOREIGN KEY (`id_jenis_beras`) REFERENCES `tb_jenis_beras` (`id`),
  CONSTRAINT `tb_gudang_ibfk_3` FOREIGN KEY (`id_jalur`) REFERENCES `tb_jalur` (`id`),
  CONSTRAINT `tb_gudang_ibfk_4` FOREIGN KEY (`id_blok`) REFERENCES `tb_blok` (`id`),
  CONSTRAINT `tb_gudang_ibfk_5` FOREIGN KEY (`id_jenis_berat_beras`) REFERENCES `tb_jenis_berat_beras` (`id`),
  CONSTRAINT `tb_gudang_ibfk_6` FOREIGN KEY (`id_kualitas_beras`) REFERENCES `tb_kualitas_beras` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gudang`
--

LOCK TABLES `tb_gudang` WRITE;
/*!40000 ALTER TABLE `tb_gudang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_gudang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jalur`
--

DROP TABLE IF EXISTS `tb_jalur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jalur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_jalur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_detail_jalur` (`id_detail_jalur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jalur`
--

LOCK TABLES `tb_jalur` WRITE;
/*!40000 ALTER TABLE `tb_jalur` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jalur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jalur_detail`
--

DROP TABLE IF EXISTS `tb_jalur_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jalur_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_blok` int(11) NOT NULL,
  `urutan_jalur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_blok` (`id_blok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jalur_detail`
--

LOCK TABLES `tb_jalur_detail` WRITE;
/*!40000 ALTER TABLE `tb_jalur_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jalur_detail` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jenis_beras`
--

LOCK TABLES `tb_jenis_beras` WRITE;
/*!40000 ALTER TABLE `tb_jenis_beras` DISABLE KEYS */;
INSERT INTO `tb_jenis_beras` VALUES (2,'Raja Lele','2019-05-02 09:30:03','2019-05-02 09:30:03');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kualitas_beras`
--

LOCK TABLES `tb_kualitas_beras` WRITE;
/*!40000 ALTER TABLE `tb_kualitas_beras` DISABLE KEYS */;
INSERT INTO `tb_kualitas_beras` VALUES (2,'Premium','2019-05-02 09:41:24','2019-05-02 09:41:24');
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-03  4:55:39
