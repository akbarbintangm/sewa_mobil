-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sewa_mobil
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) unsigned DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_admins`
--

DROP TABLE IF EXISTS `m_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_admins` (
  `id_m_admin` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin_verified_at` timestamp NULL DEFAULT NULL,
  `password_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_admin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_admin` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_admin`),
  UNIQUE KEY `m_admins_email_admin_unique` (`email_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_admins`
--

LOCK TABLES `m_admins` WRITE;
/*!40000 ALTER TABLE `m_admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_banks`
--

DROP TABLE IF EXISTS `m_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_banks` (
  `id_m_banks` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_banks`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_banks`
--

LOCK TABLES `m_banks` WRITE;
/*!40000 ALTER TABLE `m_banks` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_bookings`
--

DROP TABLE IF EXISTS `m_bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_bookings` (
  `id_m_booking` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_bookings`
--

LOCK TABLES `m_bookings` WRITE;
/*!40000 ALTER TABLE `m_bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_brand_mobils`
--

DROP TABLE IF EXISTS `m_brand_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_brand_mobils` (
  `id_m_brand_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_brand_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_brand_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_brand_mobils`
--

LOCK TABLES `m_brand_mobils` WRITE;
/*!40000 ALTER TABLE `m_brand_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_brand_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_chattings`
--

DROP TABLE IF EXISTS `m_chattings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_chattings` (
  `id_m_chatting` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_chatting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_chattings`
--

LOCK TABLES `m_chattings` WRITE;
/*!40000 ALTER TABLE `m_chattings` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_chattings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_cities`
--

DROP TABLE IF EXISTS `m_cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_cities` (
  `id_m_city` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_cities`
--

LOCK TABLES `m_cities` WRITE;
/*!40000 ALTER TABLE `m_cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_countries`
--

DROP TABLE IF EXISTS `m_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_countries` (
  `id_m_country` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_countries`
--

LOCK TABLES `m_countries` WRITE;
/*!40000 ALTER TABLE `m_countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_admins`
--

DROP TABLE IF EXISTS `m_d_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_admins` (
  `id_m_d_admin` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_admin` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_admins`
--

LOCK TABLES `m_d_admins` WRITE;
/*!40000 ALTER TABLE `m_d_admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_banks`
--

DROP TABLE IF EXISTS `m_d_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_banks` (
  `id_m_d_banks` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_banks` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_banks`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_banks`
--

LOCK TABLES `m_d_banks` WRITE;
/*!40000 ALTER TABLE `m_d_banks` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_bookings`
--

DROP TABLE IF EXISTS `m_d_bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_bookings` (
  `id_m_d_booking` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_booking` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_bookings`
--

LOCK TABLES `m_d_bookings` WRITE;
/*!40000 ALTER TABLE `m_d_bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_brand_mobils`
--

DROP TABLE IF EXISTS `m_d_brand_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_brand_mobils` (
  `id_m_brand_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_d_brand_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_brand_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_brand_mobils`
--

LOCK TABLES `m_d_brand_mobils` WRITE;
/*!40000 ALTER TABLE `m_d_brand_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_brand_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_chattings`
--

DROP TABLE IF EXISTS `m_d_chattings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_chattings` (
  `id_m_d_chatting` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_chatting` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_chatting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_chattings`
--

LOCK TABLES `m_d_chattings` WRITE;
/*!40000 ALTER TABLE `m_d_chattings` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_chattings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_kategori_mobils`
--

DROP TABLE IF EXISTS `m_d_kategori_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_kategori_mobils` (
  `id_m_d_kategori_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_kategori_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_kategori_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_kategori_mobils`
--

LOCK TABLES `m_d_kategori_mobils` WRITE;
/*!40000 ALTER TABLE `m_d_kategori_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_kategori_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_mobils`
--

DROP TABLE IF EXISTS `m_d_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_mobils` (
  `id_m_d_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_mobils`
--

LOCK TABLES `m_d_mobils` WRITE;
/*!40000 ALTER TABLE `m_d_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_operators`
--

DROP TABLE IF EXISTS `m_d_operators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_operators` (
  `id_m_operator` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_d_operator` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_operators`
--

LOCK TABLES `m_d_operators` WRITE;
/*!40000 ALTER TABLE `m_d_operators` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_operators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_owners`
--

DROP TABLE IF EXISTS `m_d_owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_owners` (
  `id_m_d_owner` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_owner` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_owners`
--

LOCK TABLES `m_d_owners` WRITE;
/*!40000 ALTER TABLE `m_d_owners` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_owners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_pembayarans`
--

DROP TABLE IF EXISTS `m_d_pembayarans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_pembayarans` (
  `id_m_d_pembayaran` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_pembayaran` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_pembayarans`
--

LOCK TABLES `m_d_pembayarans` WRITE;
/*!40000 ALTER TABLE `m_d_pembayarans` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_pembayarans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_posts`
--

DROP TABLE IF EXISTS `m_d_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_posts` (
  `id_m_d_post` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_post` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_posts`
--

LOCK TABLES `m_d_posts` WRITE;
/*!40000 ALTER TABLE `m_d_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_reservasis`
--

DROP TABLE IF EXISTS `m_d_reservasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_reservasis` (
  `id_m_d_reservasi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_reservasi` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_reservasis`
--

LOCK TABLES `m_d_reservasis` WRITE;
/*!40000 ALTER TABLE `m_d_reservasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_reservasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_transaksis`
--

DROP TABLE IF EXISTS `m_d_transaksis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_transaksis` (
  `id_m_d_transaksi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_transaksi` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_transaksis`
--

LOCK TABLES `m_d_transaksis` WRITE;
/*!40000 ALTER TABLE `m_d_transaksis` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_transaksis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_transmisi_mobils`
--

DROP TABLE IF EXISTS `m_d_transmisi_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_transmisi_mobils` (
  `id_m_d_transmisi_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_transmisi_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_transmisi_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_transmisi_mobils`
--

LOCK TABLES `m_d_transmisi_mobils` WRITE;
/*!40000 ALTER TABLE `m_d_transmisi_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_transmisi_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_users`
--

DROP TABLE IF EXISTS `m_d_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_users` (
  `id_m_d_user` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_m_user` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_d_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_users`
--

LOCK TABLES `m_d_users` WRITE;
/*!40000 ALTER TABLE `m_d_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_d_websites`
--

DROP TABLE IF EXISTS `m_d_websites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_d_websites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_d_websites`
--

LOCK TABLES `m_d_websites` WRITE;
/*!40000 ALTER TABLE `m_d_websites` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_d_websites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_districts`
--

DROP TABLE IF EXISTS `m_districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_districts` (
  `id_m_district` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_district`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_districts`
--

LOCK TABLES `m_districts` WRITE;
/*!40000 ALTER TABLE `m_districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_kategori_mobils`
--

DROP TABLE IF EXISTS `m_kategori_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_kategori_mobils` (
  `id_m_kategori_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_kategori_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_kategori_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_kategori_mobils`
--

LOCK TABLES `m_kategori_mobils` WRITE;
/*!40000 ALTER TABLE `m_kategori_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_kategori_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_mobils`
--

DROP TABLE IF EXISTS `m_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_mobils` (
  `id_m_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_m_brand_mobil` bigint(20) NOT NULL,
  `id_m_kategori_mobil` bigint(20) NOT NULL,
  `id_m_transmisi_mobil` bigint(20) NOT NULL,
  `total_passenger_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_mobils`
--

LOCK TABLES `m_mobils` WRITE;
/*!40000 ALTER TABLE `m_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_operators`
--

DROP TABLE IF EXISTS `m_operators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_operators` (
  `id_m_operator` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_operator_verified_at` timestamp NULL DEFAULT NULL,
  `password_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_operator` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_operator` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_operator`),
  UNIQUE KEY `m_operators_email_operator_unique` (`email_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_operators`
--

LOCK TABLES `m_operators` WRITE;
/*!40000 ALTER TABLE `m_operators` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_operators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_owners`
--

DROP TABLE IF EXISTS `m_owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_owners` (
  `id_m_owner` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_owner_verified_at` timestamp NULL DEFAULT NULL,
  `password_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_owner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_owner` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_owner`),
  UNIQUE KEY `m_owners_email_owner_unique` (`email_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_owners`
--

LOCK TABLES `m_owners` WRITE;
/*!40000 ALTER TABLE `m_owners` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_owners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_pembayarans`
--

DROP TABLE IF EXISTS `m_pembayarans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_pembayarans` (
  `id_m_pembayaran` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_pembayarans`
--

LOCK TABLES `m_pembayarans` WRITE;
/*!40000 ALTER TABLE `m_pembayarans` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_pembayarans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_posts`
--

DROP TABLE IF EXISTS `m_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_posts` (
  `id_m_post` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_posts`
--

LOCK TABLES `m_posts` WRITE;
/*!40000 ALTER TABLE `m_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_provinces`
--

DROP TABLE IF EXISTS `m_provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_provinces` (
  `id_m_province` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_province`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_provinces`
--

LOCK TABLES `m_provinces` WRITE;
/*!40000 ALTER TABLE `m_provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_reservasis`
--

DROP TABLE IF EXISTS `m_reservasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_reservasis` (
  `id_m_reservasi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_reservasis`
--

LOCK TABLES `m_reservasis` WRITE;
/*!40000 ALTER TABLE `m_reservasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_reservasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_sub_districts`
--

DROP TABLE IF EXISTS `m_sub_districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_sub_districts` (
  `id_m_sub_district` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_sub_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_sub_district`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_sub_districts`
--

LOCK TABLES `m_sub_districts` WRITE;
/*!40000 ALTER TABLE `m_sub_districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_sub_districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_transaksis`
--

DROP TABLE IF EXISTS `m_transaksis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_transaksis` (
  `id_m_transaksi` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_transaksis`
--

LOCK TABLES `m_transaksis` WRITE;
/*!40000 ALTER TABLE `m_transaksis` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_transaksis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_transmisi_mobils`
--

DROP TABLE IF EXISTS `m_transmisi_mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_transmisi_mobils` (
  `id_m_transmisi_mobil` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_transmisi_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_transmisi_mobil` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_transmisi_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_transmisi_mobils`
--

LOCK TABLES `m_transmisi_mobils` WRITE;
/*!40000 ALTER TABLE `m_transmisi_mobils` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_transmisi_mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_users`
--

DROP TABLE IF EXISTS `m_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_users` (
  `id_m_user` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user_verified_at` timestamp NULL DEFAULT NULL,
  `password_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_m_user`),
  UNIQUE KEY `m_users_email_user_unique` (`email_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_users`
--

LOCK TABLES `m_users` WRITE;
/*!40000 ALTER TABLE `m_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_websites`
--

DROP TABLE IF EXISTS `m_websites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_websites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_websites`
--

LOCK TABLES `m_websites` WRITE;
/*!40000 ALTER TABLE `m_websites` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_websites` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_12_21_081141_create_activity_log_table',1),(7,'2021_12_21_081142_add_event_column_to_activity_log_table',1),(8,'2021_12_21_081143_add_batch_uuid_column_to_activity_log_table',1),(9,'2021_12_22_162609_create_m_admins_table',1),(10,'2021_12_22_162628_create_m_d_admins_table',1),(11,'2021_12_22_162641_create_m_users_table',1),(12,'2021_12_22_162653_create_m_d_users_table',1),(13,'2021_12_22_162707_create_m_owners_table',1),(14,'2021_12_22_162720_create_m_d_owners_table',1),(15,'2021_12_22_162735_create_m_transaksis_table',1),(16,'2021_12_22_162753_create_m_d_transaksis_table',1),(17,'2021_12_22_162808_create_m_mobils_table',1),(18,'2021_12_22_162823_create_m_d_mobils_table',1),(19,'2021_12_24_090436_create_m_kategori_mobils_table',1),(20,'2021_12_24_090450_create_m_transmisi_mobils_table',1),(21,'2021_12_24_090500_create_m_brand_mobils_table',1),(22,'2021_12_24_090509_create_m_posts_table',1),(23,'2021_12_24_090517_create_m_d_posts_table',1),(24,'2021_12_24_090526_create_m_reservasis_table',1),(25,'2021_12_24_090535_create_m_d_reservasis_table',1),(26,'2021_12_24_090543_create_m_bookings_table',1),(27,'2021_12_24_090552_create_m_d_bookings_table',1),(28,'2021_12_24_090602_create_m_pembayarans_table',1),(29,'2021_12_24_090610_create_m_d_pembayarans_table',1),(30,'2021_12_24_090619_create_m_chattings_table',1),(31,'2021_12_24_090628_create_m_d_chattings_table',1),(32,'2021_12_29_144018_create_m_websites_table',1),(33,'2021_12_29_144027_create_m_d_websites_table',1),(34,'2021_12_29_144039_create_m_countries_table',1),(35,'2021_12_29_144048_create_m_provinces_table',1),(36,'2021_12_29_144058_create_m_cities_table',1),(37,'2021_12_29_144108_create_m_districts_table',1),(38,'2021_12_29_144118_create_m_sub_districts_table',1),(39,'2021_12_29_144131_create_m_operators_table',1),(40,'2021_12_29_144143_create_m_d_operators_table',1),(41,'2021_12_29_144155_create_m_d_kategori_mobils_table',1),(42,'2021_12_29_144204_create_m_d_transmisi_mobils_table',1),(43,'2021_12_29_144213_create_m_d_brand_mobils_table',1),(44,'2021_12_29_144226_create_m_banks_table',1),(45,'2021_12_29_144235_create_m_d_banks_table',1);
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-01-12 14:57:27
