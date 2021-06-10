CREATE DATABASE  IF NOT EXISTS `maternal` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `maternal`;
-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: maternal
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.21.04.1

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
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1555074874),('m130524_201442_init',1555074887),('m190124_110200_add_verification_token_column_to_user_table',1555074887);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mother`
--

DROP TABLE IF EXISTS `mother`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mother` (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `other_names` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `husband_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `husband_phone_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gestation_age` double NOT NULL,
  `expected_date_of_delivery` date NOT NULL,
  `facility` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `assigned_room_midwife` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `savings_contributor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `financial_institution_partner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `community_savings_group_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `savings_target` double NOT NULL,
  `cash_out_date` date NOT NULL,
  `vas_preferences` enum('FINANCIAL_LITERACY_TIPS','PREGNANCY_TIPS','OTHER','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `other_preference` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_needs` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_staff` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `staff` (`assigned_staff`),
  CONSTRAINT `STAFFCONSTRAINT` FOREIGN KEY (`assigned_staff`) REFERENCES `staff` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mother`
--

LOCK TABLES `mother` WRITE;
/*!40000 ALTER TABLE `mother` DISABLE KEYS */;
INSERT INTO `mother` VALUES ('1','ggggg','hgghhg','gggf','',NULL,NULL,12,'2018-01-10','kjdshakj','kjdshjk','INDIVIDUAL','kjhsdakj','kjdshakj',30,'2018-01-10','OTHER','djkdhsajks','kjdalsjh',2,'2018-01-26 21:42:14','2018-01-26 21:42:14'),('2','kjajaj','ljfdsl','lsljfl','lkjdlks','lkdjsakl','lfdjal',3,'2018-10-27','lsasflk','dlsksa','INDIVIDUAL,HUSBAND,OTHER,','kjszjf','sf.jlj',40,'2018-10-27','FINANCIAL_LITERACY_TIPS','ldfslk','',2,'2018-02-10 07:46:14','2018-02-10 07:46:14'),('3','hhkjhkhkj','kjhjkhkj','khkjjhk','khkjhk','khkjh','khkh',8,'2018-09-22','khkjhk','kjhkkkkkkkh','HUSBAND','jkhjk','khjk',70,'2018-09-22','FINANCIAL_LITERACY_TIPS','ljl','jllkjlkjl',2,'2018-02-10 08:23:59','2018-02-10 08:23:59');
/*!40000 ALTER TABLE `mother` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms`
--

DROP TABLE IF EXISTS `sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms` (
  `id` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `gestation_age` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms`
--

LOCK TABLES `sms` WRITE;
/*!40000 ALTER TABLE `sms` DISABLE KEYS */;
/*!40000 ALTER TABLE `sms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms_status`
--

DROP TABLE IF EXISTS `sms_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms_status` (
  `id` varchar(255) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `mother` varchar(255) NOT NULL,
  `sent_status` enum('SENT','NOT_SENT') NOT NULL,
  `delivery_status` enum('DELIVERED','NOT_DELIVERED','PENDING') NOT NULL,
  `number` varchar(20) NOT NULL,
  `external_id` varchar(255) NOT NULL,
  `sent_response` varchar(255) NOT NULL,
  `delivery_response` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sms` (`sms`),
  KEY `patient` (`mother`),
  CONSTRAINT `SMSSTATUSSMS` FOREIGN KEY (`sms`) REFERENCES `sms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms_status`
--

LOCK TABLES `sms_status` WRITE;
/*!40000 ALTER TABLE `sms_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `sms_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms_tag`
--

DROP TABLE IF EXISTS `sms_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms_tag` (
  `id` varchar(255) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sms_2` (`sms`,`tag`),
  KEY `sms` (`sms`),
  KEY `tag` (`tag`),
  CONSTRAINT `SMSTAGSMS` FOREIGN KEY (`sms`) REFERENCES `sms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `SMSTAGTAG` FOREIGN KEY (`tag`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms_tag`
--

LOCK TABLES `sms_tag` WRITE;
/*!40000 ALTER TABLE `sms_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `sms_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `category` enum('associate','consultant','deposit mobilization officer','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('FULL_TIME','PART_TIME','CASUAL','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('new staff 1',2,'associate','FULL_TIME','2018-01-26 21:37:02','2018-01-26 21:37:02'),('ljkadslk',3,'consultant','PART_TIME','2018-02-12 09:10:39','2018-02-12 09:10:39');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `id` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Me','FV8-U1VLLxHzwDqocfqS2FCaEXbFO9bt','$2y$13$Pj3shFYZSTyFTtDC2bev5OI94ymYSTeO6xRIeCoClr6swJEnP8hCW',NULL,'me@me.com',10,1557226129,1557226796,'yZfIjxjXVLA3wSJ1bRu5N-jv_tY-cA0P_1557226129'),(2,'hello','fNdh8mXLG2d8dMda3WlCf6BCWQIESQ4p','$2y$13$nJX9qJnk8rguqCLFSt5fZOvZrBQRJH3kJ6NNp3li8pC96HOSEjVnW',NULL,'hello@hello.com',9,1620395004,1620395004,'cd3Y7hknNIJGOMSIiGjVLU-Bcfp-hDO6_1620395004'),(3,'anne','RduRYeEJ8WgXZB7LAPwrbBhUySinlqpb','$2y$13$DIjNRiOKiJSy.n2DAWKlYeOzDGCVXiGVB5xd8bhdtdrsGYxg8TQcy',NULL,'anne.nutsuklo@taryafrica.com',9,1620398028,1620398028,'qiqWpWGS9I8VKy6TFwnSmJ4QR6PImcWv_1620398028');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-10 15:46:36
