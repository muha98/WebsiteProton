-- MySQL dump 10.13  Distrib 5.7.26, for osx10.10 (x86_64)
--
-- Host: localhost    Database: proton
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `homeartikel`
--

DROP TABLE IF EXISTS `homeartikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homeartikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeartikel`
--

LOCK TABLES `homeartikel` WRITE;
/*!40000 ALTER TABLE `homeartikel` DISABLE KEYS */;
INSERT INTO `homeartikel` VALUES (1,'img/hehe.jpg','Simulasi UNBK Tahun 2018','ARTIKEL 1'),(2,'img/gambar5.jpg','Simulasi UNBK Tahun 2019','ARTIKEL 2'),(3,'img/gambar5.jpg','Simulasi UNBK Tahun 2020','ARTIKEL 3');
/*!40000 ALTER TABLE `homeartikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecarousel`
--

DROP TABLE IF EXISTS `homecarousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecarousel` (
  `id_carousel` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_carousel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecarousel`
--

LOCK TABLES `homecarousel` WRITE;
/*!40000 ALTER TABLE `homecarousel` DISABLE KEYS */;
INSERT INTO `homecarousel` VALUES (1,'img/hehe.jpg'),(2,'img/slide1.jpg'),(3,'img/slide2.jpg');
/*!40000 ALTER TABLE `homecarousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homevideo`
--

DROP TABLE IF EXISTS `homevideo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homevideo` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homevideo`
--

LOCK TABLES `homevideo` WRITE;
/*!40000 ALTER TABLE `homevideo` DISABLE KEYS */;
INSERT INTO `homevideo` VALUES (1,'https://www.youtube.com/embed/OMOGaugKpzs'),(2,'https://www.youtube.com/embed/waqhwXWtdR4'),(3,'https://www.youtube.com/embed/waqhwXWtdR4');
/*!40000 ALTER TABLE `homevideo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `biaya` int(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materi`
--

DROP TABLE IF EXISTS `materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materi`
--

LOCK TABLES `materi` WRITE;
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
INSERT INTO `materi` VALUES (1,'SD','Bahasa Indonesia','google.com'),(2,'SD','Bahasa Inggris','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(3,'SD','IPA','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(4,'SD','IPS','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(5,'SD','PKN','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(6,'SMP','Bahasa Indonesia','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(7,'SMP','Bahasa Inggris','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(8,'SMP','Matematika','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(9,'SMP','IPA','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(10,'SMP','IPS','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(11,'SMP','PKN','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(12,'SMP','PAI','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(13,'SMA IPA','PKN','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(14,'SMA IPA','TPS','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(15,'SMA IPA','Matematika','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(16,'SMA IPA','Biologi','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(17,'SMA IPA','Fisika','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(18,'SMA IPA','Kimia','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(19,'SMA IPA','PAI','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(20,'SMA IPS','PKN','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(21,'SMA IPS','TPS','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(22,'SMA IPS','Matematika','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(23,'SMA IPS','Geografi','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(24,'SMA IPS','Sejarah','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(25,'SMA IPS','Ekonomi','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),(26,'SMA IPS','PAI','https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4');
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_04_06_145624_tambah_is_admin',2),(4,'2020_04_06_172110_create_roles_table',3),(5,'2020_04_27_152151_add_field_socialite_to_users_table',4);
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
  KEY `password_resets_email_index` (`email`(191))
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
-- Table structure for table `pengajar`
--

DROP TABLE IF EXISTS `pengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengajar` (
  `id_pengajar` varchar(20) NOT NULL,
  `nama_pengajar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengajar`
--

LOCK TABLES `pengajar` WRITE;
/*!40000 ALTER TABLE `pengajar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `fk_kategori` (`id_kategori`),
  CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id_staff` varchar(20) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('11111','1678','kitasatu@gmail.com'),('123','staff3','staff3@gmail.com'),('141170011','STAFF1','STAFF1@gmail.com'),('14117040','Yustika Ayu','Yustika@yahoo.com'),('14117065','Titis Prawilas','Titis@gmail.com'),('14117122','Talitha Bathari','Tebe@gmail.com'),('14117133','Rizqun','Rizqun@gmail.com'),('14117162','Muha','muha@gmail.com'),('14117179','Cikal Arvi Yuliawan','cikal@yahoo.com'),('14117183','bany','bany@gmail.com'),('22','staff2','staff2@gmail.com'),('444','staff4@gmail.com','staff4@gmail.com'),('99','shofia camilla','shofiacamilla@gmail.com');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `socialite_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,NULL,'muha','muhasfk123@gmail.com','',NULL,'$2y$10$yZWvz9EcHFY69XL2FqcXju9gmW3esEud1aaidYezyUo4X.X2qA8SO',NULL,'2020-04-01 20:16:41','2020-04-01 20:16:41'),(2,NULL,NULL,NULL,'Rizqun Rizal Ahsani','rizqun27@gmail.com','',NULL,'$2y$10$7hwIL05mngEZYKZKeyv28.toRVgn8Sd8hbcL2jSo8pWfjcEX0cRgW',NULL,'2020-04-02 04:33:07','2020-04-02 04:33:07'),(3,NULL,NULL,NULL,'Ricegun','second_kun@yahoo.com','admin',NULL,'$2y$10$MHO3KRHco0DDKcGfcgRmquZAQ5QhAVNMz05us2xvAzDUle3jeJxCe','Ylsar1s6rnEiI4RMKTiCM63McLH5MJ9qTG45U8b1KTX03FL5FpnK836gBPGb','2020-04-03 19:17:25','2020-04-03 19:17:25'),(4,NULL,NULL,NULL,'Yustika','yustika123@gmail.com','',NULL,'$2y$10$NlrbUy2g0Af9amEkkxxZ.efrffTiL.Ky/r5NrDMSrIzezRwSH3e/G',NULL,'2020-04-07 00:44:35','2020-04-07 00:44:35'),(5,NULL,NULL,NULL,'Titis','titis@gmail.com',NULL,NULL,'$2y$10$VnS4FJa1aiU4Gd7EMSlGQ.KvqKUmqPo/af3R7WWFb0SeIxRyHBpaC',NULL,'2020-04-08 18:21:50','2020-04-08 18:21:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'SD','PAI','https://www.youtube.com/embed/J1pPATZ3HVU'),(2,'SD','IPA','https://www.youtube.com/embed/aUKKZ9vlft0'),(3,'SD','IPS','https://www.youtube.com/embed/OSv_Wzp9crg'),(4,'SD','Bahasa Indonesia','https://www.youtube.com/embed/AbfnA183FtU'),(5,'SD','PKN','https://www.youtube.com/embed/oj07JnmAR4Q'),(6,'SMP','PAI','https://www.youtube.com/embed/azx86hZML-g'),(7,'SMP','PKN','https://www.youtube.com/embed/6RT9iKlFybQ'),(8,'SMP','Bahasa Indonesia','https://www.youtube.com/embed/mSt3HH-Fpi4'),(9,'SMP','Bahasa Inggris','https://www.youtube.com/embed/t8KyzOiP1-Q'),(10,'SMP','IPA','https://www.youtube.com/embed/-bKH3bSk0Nc'),(11,'SMP','Matematika','https://www.youtube.com/embed/XLjuybLmzr0'),(12,'SMP','IPS','https://www.youtube.com/embed/rr72UwNsOMs'),(13,'SMA IPA','PAI','https://www.youtube.com/embed/a2cfgxZ5qrw'),(14,'SMA IPA','PKN','https://www.youtube.com/embed/2jP-OBQSzho'),(15,'SMA IPA','Biologi','https://www.youtube.com/embed/FGC9gL7Ta2A'),(16,'SMA IPA','Fisika','https://www.youtube.com/embed/hFNT_c2lqBs'),(17,'SMA IPA','Kimia','https://www.youtube.com/embed/EksdEntiHMg'),(18,'SMA IPA','Matematika','https://www.youtube.com/embed/2DjVbbc_d1w'),(19,'SMA IPA','TPS','https://www.youtube.com/embed/-M7y8MJgQLg'),(20,'SMA IPS','PAI','https://www.youtube.com/embed/a2cfgxZ5qrw'),(21,'SMA IPS','PKN','https://www.youtube.com/embed/2jP-OBQSzho'),(22,'SMA IPS','Geografi','https://www.youtube.com/embed/2zqgimfW61o'),(23,'SMA IPS','Sejarah','https://www.youtube.com/embed/BS0Yjb8t5Xc'),(24,'SMA IPS','Ekonomi','https://www.youtube.com/embed/KmOHoKzWrn8'),(25,'SMA IPS','Matematika','https://www.youtube.com/embed/CFfXBXEO4lc'),(26,'SMA IPS','TPS','https://www.youtube.com/embed/-M7y8MJgQLg');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-06 13:40:35
