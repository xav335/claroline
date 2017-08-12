-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: claroline
-- ------------------------------------------------------
-- Server version	5.5.55-0+deb8u1

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
-- Table structure for table `StepConditionsGroup`
--

DROP TABLE IF EXISTS `StepConditionsGroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StepConditionsGroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `StepConditionsGroup`
--

LOCK TABLES `StepConditionsGroup` WRITE;
/*!40000 ALTER TABLE `StepConditionsGroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `StepConditionsGroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardtype_fieldlabel_answer`
--

DROP TABLE IF EXISTS `cardtype_fieldlabel_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardtype_fieldlabel_answer` (
  `cardtype_id` int(11) NOT NULL,
  `fieldlabel_id` int(11) NOT NULL,
  PRIMARY KEY (`cardtype_id`,`fieldlabel_id`),
  KEY `IDX_73F017734E403864` (`cardtype_id`),
  KEY `IDX_73F01773A9D5EBE4` (`fieldlabel_id`),
  CONSTRAINT `FK_73F017734E403864` FOREIGN KEY (`cardtype_id`) REFERENCES `claro_fcbundle_card_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_73F01773A9D5EBE4` FOREIGN KEY (`fieldlabel_id`) REFERENCES `claro_fcbundle_field_label` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardtype_fieldlabel_answer`
--

LOCK TABLES `cardtype_fieldlabel_answer` WRITE;
/*!40000 ALTER TABLE `cardtype_fieldlabel_answer` DISABLE KEYS */;
INSERT INTO `cardtype_fieldlabel_answer` VALUES (1,2);
/*!40000 ALTER TABLE `cardtype_fieldlabel_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardtype_fieldlabel_question`
--

DROP TABLE IF EXISTS `cardtype_fieldlabel_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardtype_fieldlabel_question` (
  `cardtype_id` int(11) NOT NULL,
  `fieldlabel_id` int(11) NOT NULL,
  PRIMARY KEY (`cardtype_id`,`fieldlabel_id`),
  KEY `IDX_4FCC37F84E403864` (`cardtype_id`),
  KEY `IDX_4FCC37F8A9D5EBE4` (`fieldlabel_id`),
  CONSTRAINT `FK_4FCC37F84E403864` FOREIGN KEY (`cardtype_id`) REFERENCES `claro_fcbundle_card_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4FCC37F8A9D5EBE4` FOREIGN KEY (`fieldlabel_id`) REFERENCES `claro_fcbundle_field_label` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardtype_fieldlabel_question`
--

LOCK TABLES `cardtype_fieldlabel_question` WRITE;
/*!40000 ALTER TABLE `cardtype_fieldlabel_question` DISABLE KEYS */;
INSERT INTO `cardtype_fieldlabel_question` VALUES (1,1);
/*!40000 ALTER TABLE `cardtype_fieldlabel_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__event`
--

DROP TABLE IF EXISTS `claro__event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `time_slot_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_42A594A4A76ED395` (`user_id`),
  KEY `IDX_42A594A482D40A1F` (`workspace_id`),
  KEY `IDX_42A594A4D62B0FA` (`time_slot_id`),
  KEY `name_idx` (`name`),
  CONSTRAINT `FK_42A594A482D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_42A594A4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_42A594A4D62B0FA` FOREIGN KEY (`time_slot_id`) REFERENCES `claro__time_slot` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__event`
--

LOCK TABLES `claro__event` WRITE;
/*!40000 ALTER TABLE `claro__event` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__leave`
--

DROP TABLE IF EXISTS `claro__leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E2BB1ED340C1FEA7` (`year_id`),
  CONSTRAINT `FK_E2BB1ED340C1FEA7` FOREIGN KEY (`year_id`) REFERENCES `claro__year` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__leave`
--

LOCK TABLES `claro__leave` WRITE;
/*!40000 ALTER TABLE `claro__leave` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__location`
--

DROP TABLE IF EXISTS `claro__location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streetNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `boxNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__location`
--

LOCK TABLES `claro__location` WRITE;
/*!40000 ALTER TABLE `claro__location` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__location_organization`
--

DROP TABLE IF EXISTS `claro__location_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__location_organization` (
  `organization_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`organization_id`,`location_id`),
  KEY `IDX_C4EBDE032C8A3DE` (`organization_id`),
  KEY `IDX_C4EBDE064D218E` (`location_id`),
  CONSTRAINT `FK_C4EBDE032C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C4EBDE064D218E` FOREIGN KEY (`location_id`) REFERENCES `claro__location` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__location_organization`
--

LOCK TABLES `claro__location_organization` WRITE;
/*!40000 ALTER TABLE `claro__location_organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__location_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__organization`
--

DROP TABLE IF EXISTS `claro__organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B68DD0D5727ACA70` (`parent_id`),
  CONSTRAINT `FK_B68DD0D5727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__organization`
--

LOCK TABLES `claro__organization` WRITE;
/*!40000 ALTER TABLE `claro__organization` DISABLE KEYS */;
INSERT INTO `claro__organization` VALUES (1,NULL,1,'default',NULL,1,0,2,1,1);
/*!40000 ALTER TABLE `claro__organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__period`
--

DROP TABLE IF EXISTS `claro__period`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5CC844EA40C1FEA7` (`year_id`),
  CONSTRAINT `FK_5CC844EA40C1FEA7` FOREIGN KEY (`year_id`) REFERENCES `claro__year` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__period`
--

LOCK TABLES `claro__period` WRITE;
/*!40000 ALTER TABLE `claro__period` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__period` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__schedule_template`
--

DROP TABLE IF EXISTS `claro__schedule_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__schedule_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startHour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endHour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__schedule_template`
--

LOCK TABLES `claro__schedule_template` WRITE;
/*!40000 ALTER TABLE `claro__schedule_template` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__schedule_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__time_slot`
--

DROP TABLE IF EXISTS `claro__time_slot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__time_slot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `baseTemplateName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2EA6030D32C8A3DE` (`organization_id`),
  KEY `IDX_2EA6030DEC8B7ADE` (`period_id`),
  CONSTRAINT `FK_2EA6030D32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2EA6030DEC8B7ADE` FOREIGN KEY (`period_id`) REFERENCES `claro__period` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__time_slot`
--

LOCK TABLES `claro__time_slot` WRITE;
/*!40000 ALTER TABLE `claro__time_slot` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__time_slot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro__year`
--

DROP TABLE IF EXISTS `claro__year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro__year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `openHour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `closeHour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6CA4D43E32C8A3DE` (`organization_id`),
  CONSTRAINT `FK_6CA4D43E32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro__year`
--

LOCK TABLES `claro__year` WRITE;
/*!40000 ALTER TABLE `claro__year` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro__year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity`
--

DROP TABLE IF EXISTS `claro_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parameters_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `primaryResource_id` int(11) DEFAULT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E4A67CAC88BD9C1F` (`parameters_id`),
  UNIQUE KEY `UNIQ_E4A67CACB87FAB32` (`resourceNode_id`),
  KEY `IDX_E4A67CAC52410EEC` (`primaryResource_id`),
  CONSTRAINT `FK_E4A67CAC52410EEC` FOREIGN KEY (`primaryResource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_E4A67CAC88BD9C1F` FOREIGN KEY (`parameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E4A67CACB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity`
--

LOCK TABLES `claro_activity` WRITE;
/*!40000 ALTER TABLE `claro_activity` DISABLE KEYS */;
INSERT INTO `claro_activity` VALUES (1,1,'Suites arithmétiques avec Geogebra','<p>Pour visualiser des suites arithm&eacute;tiques.</p>\r\n<p>2 curseurs pour u0 et r.</p>\r\n<p>&nbsp;</p>',NULL,8),(2,2,'PPI Vecteurs','<p>Activit&eacute; de fin de s&eacute;quence.</p>\r\n<p>R&eacute;alis&eacute; en groupe.</p>',NULL,11);
/*!40000 ALTER TABLE `claro_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_evaluation`
--

DROP TABLE IF EXISTS `claro_activity_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_parameters_id` int(11) NOT NULL,
  `log_id` int(11) DEFAULT NULL,
  `lastest_evaluation_date` datetime DEFAULT NULL,
  `evaluation_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluation_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `score` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score_num` int(11) DEFAULT NULL,
  `score_min` int(11) DEFAULT NULL,
  `score_max` int(11) DEFAULT NULL,
  `evaluation_comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `total_duration` int(11) DEFAULT NULL,
  `attempts_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_activity_unique_evaluation` (`user_id`,`activity_parameters_id`),
  KEY `IDX_F75EC869A76ED395` (`user_id`),
  KEY `IDX_F75EC869896F55DB` (`activity_parameters_id`),
  KEY `IDX_F75EC869EA675D86` (`log_id`),
  CONSTRAINT `FK_F75EC869896F55DB` FOREIGN KEY (`activity_parameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F75EC869A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F75EC869EA675D86` FOREIGN KEY (`log_id`) REFERENCES `claro_log` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_evaluation`
--

LOCK TABLES `claro_activity_evaluation` WRITE;
/*!40000 ALTER TABLE `claro_activity_evaluation` DISABLE KEYS */;
INSERT INTO `claro_activity_evaluation` VALUES (1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,3,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `claro_activity_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_parameters`
--

DROP TABLE IF EXISTS `claro_activity_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) DEFAULT NULL,
  `max_duration` int(11) DEFAULT NULL,
  `max_attempts` int(11) DEFAULT NULL,
  `who` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity_where` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `with_tutor` tinyint(1) DEFAULT NULL,
  `evaluation_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E2EE25E281C06096` (`activity_id`),
  CONSTRAINT `FK_E2EE25E281C06096` FOREIGN KEY (`activity_id`) REFERENCES `claro_activity` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_parameters`
--

LOCK TABLES `claro_activity_parameters` WRITE;
/*!40000 ALTER TABLE `claro_activity_parameters` DISABLE KEYS */;
INSERT INTO `claro_activity_parameters` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL),(2,2,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `claro_activity_parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_past_evaluation`
--

DROP TABLE IF EXISTS `claro_activity_past_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_past_evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `activity_parameters_id` int(11) DEFAULT NULL,
  `log_id` int(11) DEFAULT NULL,
  `evaluation_date` datetime DEFAULT NULL,
  `evaluation_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluation_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `score` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score_num` int(11) DEFAULT NULL,
  `score_min` int(11) DEFAULT NULL,
  `score_max` int(11) DEFAULT NULL,
  `evaluation_comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_F1A76182A76ED395` (`user_id`),
  KEY `IDX_F1A76182896F55DB` (`activity_parameters_id`),
  KEY `IDX_F1A76182EA675D86` (`log_id`),
  CONSTRAINT `FK_F1A76182896F55DB` FOREIGN KEY (`activity_parameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_F1A76182A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_F1A76182EA675D86` FOREIGN KEY (`log_id`) REFERENCES `claro_log` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_past_evaluation`
--

LOCK TABLES `claro_activity_past_evaluation` WRITE;
/*!40000 ALTER TABLE `claro_activity_past_evaluation` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_activity_past_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_rule`
--

DROP TABLE IF EXISTS `claro_activity_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_parameters_id` int(11) NOT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `result_visible` tinyint(1) DEFAULT NULL,
  `occurrence` smallint(6) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultMax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultComparison` smallint(6) DEFAULT NULL,
  `userType` smallint(6) NOT NULL,
  `active_from` datetime DEFAULT NULL,
  `active_until` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6824A65E896F55DB` (`activity_parameters_id`),
  KEY `IDX_6824A65E89329D25` (`resource_id`),
  CONSTRAINT `FK_6824A65E89329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6824A65E896F55DB` FOREIGN KEY (`activity_parameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_rule`
--

LOCK TABLES `claro_activity_rule` WRITE;
/*!40000 ALTER TABLE `claro_activity_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_activity_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_rule_action`
--

DROP TABLE IF EXISTS `claro_activity_rule_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_rule_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) DEFAULT NULL,
  `log_action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_rule_unique_action_resource_type` (`log_action`,`resource_type_id`),
  KEY `IDX_C8835D2098EC6B7B` (`resource_type_id`),
  CONSTRAINT `FK_C8835D2098EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_rule_action`
--

LOCK TABLES `claro_activity_rule_action` WRITE;
/*!40000 ALTER TABLE `claro_activity_rule_action` DISABLE KEYS */;
INSERT INTO `claro_activity_rule_action` VALUES (3,NULL,'badge-awarding'),(5,6,'resource-claroline_forum-create_message'),(6,7,'resource-claroline_survey-answer'),(19,14,'resource-icap_blog-comment_create'),(17,14,'resource-icap_blog-post_create'),(18,14,'resource-icap_blog-post_read'),(20,15,'resource-icap_dropzone-drop_evaluate'),(25,25,'resource-icap_lesson-chapter_read'),(22,16,'resource-icap_wiki-contribution_create'),(10,12,'resource-innova_collecticiel-drop_evaluate'),(12,12,'resource-innova_collecticiel-dropzone_add_comment'),(14,12,'resource-innova_collecticiel-dropzone_add_document'),(11,12,'resource-innova_collecticiel-dropzone_manual_state_changed'),(15,12,'resource-innova_collecticiel-dropzone_return_receipt'),(13,12,'resource-innova_collecticiel-dropzone_validate_document'),(1,1,'resource-read'),(2,3,'resource-read'),(4,6,'resource-read'),(9,11,'resource-read'),(16,14,'resource-read'),(21,16,'resource-read'),(24,25,'resource-read'),(7,9,'resource-scorm_12-sco_result'),(8,10,'resource-scorm_2004-sco_result'),(23,24,'resource-ujm_exercise-exercise_evaluated');
/*!40000 ALTER TABLE `claro_activity_rule_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_activity_secondary_resources`
--

DROP TABLE IF EXISTS `claro_activity_secondary_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_activity_secondary_resources` (
  `activityparameters_id` int(11) NOT NULL,
  `resourcenode_id` int(11) NOT NULL,
  PRIMARY KEY (`activityparameters_id`,`resourcenode_id`),
  KEY `IDX_713242A7DB5E3CF7` (`activityparameters_id`),
  KEY `IDX_713242A777C292AE` (`resourcenode_id`),
  CONSTRAINT `FK_713242A777C292AE` FOREIGN KEY (`resourcenode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_713242A7DB5E3CF7` FOREIGN KEY (`activityparameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_activity_secondary_resources`
--

LOCK TABLES `claro_activity_secondary_resources` WRITE;
/*!40000 ALTER TABLE `claro_activity_secondary_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_activity_secondary_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_additonal_action`
--

DROP TABLE IF EXISTS `claro_additonal_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_additonal_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayedName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_additonal_action`
--

LOCK TABLES `claro_additonal_action` WRITE;
/*!40000 ALTER TABLE `claro_additonal_action` DISABLE KEYS */;
INSERT INTO `claro_additonal_action` VALUES (1,'edit','edit','fa-pencil','admin_user_action'),(2,'show_workspaces','show_workspaces','fa-book','admin_user_action');
/*!40000 ALTER TABLE `claro_additonal_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_admin_tool_role`
--

DROP TABLE IF EXISTS `claro_admin_tool_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_admin_tool_role` (
  `admintool_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`admintool_id`,`role_id`),
  KEY `IDX_940800692B80F4B6` (`admintool_id`),
  KEY `IDX_94080069D60322AC` (`role_id`),
  CONSTRAINT `FK_940800692B80F4B6` FOREIGN KEY (`admintool_id`) REFERENCES `claro_admin_tools` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_94080069D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_admin_tool_role`
--

LOCK TABLES `claro_admin_tool_role` WRITE;
/*!40000 ALTER TABLE `claro_admin_tool_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_admin_tool_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_admin_tools`
--

DROP TABLE IF EXISTS `claro_admin_tools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_admin_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_tool_plugin_unique` (`name`,`plugin_id`),
  KEY `IDX_C10C14ECEC942BCF` (`plugin_id`),
  CONSTRAINT `FK_C10C14ECEC942BCF` FOREIGN KEY (`plugin_id`) REFERENCES `claro_plugin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_admin_tools`
--

LOCK TABLES `claro_admin_tools` WRITE;
/*!40000 ALTER TABLE `claro_admin_tools` DISABLE KEYS */;
INSERT INTO `claro_admin_tools` VALUES (1,NULL,'platform_parameters','cog'),(2,NULL,'user_management','user'),(3,NULL,'workspace_management','book'),(4,NULL,'registration_to_workspace','book'),(5,NULL,'desktop_and_home','home'),(6,NULL,'platform_logs','bars'),(7,NULL,'platform_analytics','bar-chart-o'),(8,NULL,'roles_management','users'),(9,NULL,'widgets_management','list-alt'),(10,NULL,'organization_management','institution'),(11,2,'formalibre_reservation_tool','calendar'),(12,6,'claroline_tag_admin_tool','tags'),(13,7,'formalibre_support_management_tool','exclamation-triangle'),(14,9,'notification_configuration','bell'),(15,12,'LDAP','database'),(16,15,'claroline_cursus_tool','list-alt'),(17,15,'claroline_cursus_tool_registration','list-alt'),(18,18,'formalibre_presence_admin_tool','check-square-o'),(19,25,'competencies','graduation-cap'),(20,25,'learning-objectives','arrow-up'),(21,28,'badges_management','trophy'),(22,44,'claroline_chat_management_admin_tool','comments-o');
/*!40000 ALTER TABLE `claro_admin_tools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_announcement`
--

DROP TABLE IF EXISTS `claro_announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator_id` int(11) NOT NULL,
  `aggregate_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `announcer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `publication_date` datetime DEFAULT NULL,
  `visible` tinyint(1) NOT NULL,
  `visible_from` datetime DEFAULT NULL,
  `visible_until` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_778754E361220EA6` (`creator_id`),
  KEY `IDX_778754E3D0BBCCBE` (`aggregate_id`),
  CONSTRAINT `FK_778754E361220EA6` FOREIGN KEY (`creator_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_778754E3D0BBCCBE` FOREIGN KEY (`aggregate_id`) REFERENCES `claro_announcement_aggregate` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_announcement`
--

LOCK TABLES `claro_announcement` WRITE;
/*!40000 ALTER TABLE `claro_announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_announcement_aggregate`
--

DROP TABLE IF EXISTS `claro_announcement_aggregate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_announcement_aggregate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_79BF2C8CB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_79BF2C8CB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_announcement_aggregate`
--

LOCK TABLES `claro_announcement_aggregate` WRITE;
/*!40000 ALTER TABLE `claro_announcement_aggregate` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_announcement_aggregate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_announcements_widget_config`
--

DROP TABLE IF EXISTS `claro_announcements_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_announcements_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_30B4863CAB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_30B4863CAB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_announcements_widget_config`
--

LOCK TABLES `claro_announcements_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_announcements_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_announcements_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_api_access_token`
--

DROP TABLE IF EXISTS `claro_api_access_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_api_access_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CE948285F37A13B` (`token`),
  KEY `IDX_CE9482819EB6921` (`client_id`),
  KEY `IDX_CE94828A76ED395` (`user_id`),
  CONSTRAINT `FK_CE9482819EB6921` FOREIGN KEY (`client_id`) REFERENCES `claro_api_client` (`id`),
  CONSTRAINT `FK_CE94828A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_api_access_token`
--

LOCK TABLES `claro_api_access_token` WRITE;
/*!40000 ALTER TABLE `claro_api_access_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_api_access_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_api_auth_code`
--

DROP TABLE IF EXISTS `claro_api_auth_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_api_auth_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uri` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9DFA4575F37A13B` (`token`),
  KEY `IDX_9DFA45719EB6921` (`client_id`),
  KEY `IDX_9DFA457A76ED395` (`user_id`),
  CONSTRAINT `FK_9DFA45719EB6921` FOREIGN KEY (`client_id`) REFERENCES `claro_api_client` (`id`),
  CONSTRAINT `FK_9DFA457A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_api_auth_code`
--

LOCK TABLES `claro_api_auth_code` WRITE;
/*!40000 ALTER TABLE `claro_api_auth_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_api_auth_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_api_claroline_access`
--

DROP TABLE IF EXISTS `claro_api_claroline_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_api_claroline_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friend_request_id` int(11) DEFAULT NULL,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2B10E8B1EC394CA1` (`friend_request_id`),
  CONSTRAINT `FK_2B10E8B1EC394CA1` FOREIGN KEY (`friend_request_id`) REFERENCES `claro_friend_request` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_api_claroline_access`
--

LOCK TABLES `claro_api_claroline_access` WRITE;
/*!40000 ALTER TABLE `claro_api_claroline_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_api_claroline_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_api_client`
--

DROP TABLE IF EXISTS `claro_api_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_api_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uris` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_grant_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` tinyint(1) NOT NULL,
  `friendRequest_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_233AC88FD6215480` (`friendRequest_id`),
  CONSTRAINT `FK_233AC88FD6215480` FOREIGN KEY (`friendRequest_id`) REFERENCES `claro_friend_request` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_api_client`
--

LOCK TABLES `claro_api_client` WRITE;
/*!40000 ALTER TABLE `claro_api_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_api_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_api_refresh_token`
--

DROP TABLE IF EXISTS `claro_api_refresh_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_api_refresh_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B1292B905F37A13B` (`token`),
  KEY `IDX_B1292B9019EB6921` (`client_id`),
  KEY `IDX_B1292B90A76ED395` (`user_id`),
  CONSTRAINT `FK_B1292B9019EB6921` FOREIGN KEY (`client_id`) REFERENCES `claro_api_client` (`id`),
  CONSTRAINT `FK_B1292B90A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_api_refresh_token`
--

LOCK TABLES `claro_api_refresh_token` WRITE;
/*!40000 ALTER TABLE `claro_api_refresh_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_api_refresh_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge`
--

DROP TABLE IF EXISTS `claro_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `version` smallint(6) NOT NULL,
  `automatic_award` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_expiring` tinyint(1) NOT NULL DEFAULT '0',
  `expire_duration` int(11) DEFAULT NULL,
  `expire_period` smallint(6) DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_74F39F0F82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_74F39F0F82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge`
--

LOCK TABLES `claro_badge` WRITE;
/*!40000 ALTER TABLE `claro_badge` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge_claim`
--

DROP TABLE IF EXISTS `claro_badge_claim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge_claim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `claimed_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `badge_claim_unique` (`user_id`,`badge_id`),
  KEY `IDX_487A496AA76ED395` (`user_id`),
  KEY `IDX_487A496AF7A2C2FC` (`badge_id`),
  CONSTRAINT `FK_487A496AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_487A496AF7A2C2FC` FOREIGN KEY (`badge_id`) REFERENCES `claro_badge` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge_claim`
--

LOCK TABLES `claro_badge_claim` WRITE;
/*!40000 ALTER TABLE `claro_badge_claim` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge_claim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge_collection`
--

DROP TABLE IF EXISTS `claro_badge_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `is_shared` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_idx` (`slug`),
  KEY `IDX_BB3FD2DDA76ED395` (`user_id`),
  CONSTRAINT `FK_BB3FD2DDA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge_collection`
--

LOCK TABLES `claro_badge_collection` WRITE;
/*!40000 ALTER TABLE `claro_badge_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge_collection_user_badges`
--

DROP TABLE IF EXISTS `claro_badge_collection_user_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge_collection_user_badges` (
  `badgecollection_id` int(11) NOT NULL,
  `userbadge_id` int(11) NOT NULL,
  PRIMARY KEY (`badgecollection_id`,`userbadge_id`),
  KEY `IDX_85F018D4134B8A11` (`badgecollection_id`),
  KEY `IDX_85F018D4DBE73D8B` (`userbadge_id`),
  CONSTRAINT `FK_85F018D4134B8A11` FOREIGN KEY (`badgecollection_id`) REFERENCES `claro_badge_collection` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_85F018D4DBE73D8B` FOREIGN KEY (`userbadge_id`) REFERENCES `claro_user_badge` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge_collection_user_badges`
--

LOCK TABLES `claro_badge_collection_user_badges` WRITE;
/*!40000 ALTER TABLE `claro_badge_collection_user_badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge_collection_user_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge_rule`
--

DROP TABLE IF EXISTS `claro_badge_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) DEFAULT NULL,
  `associated_badge` int(11) NOT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `occurrence` smallint(6) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultMax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultComparison` smallint(6) DEFAULT NULL,
  `userType` smallint(6) NOT NULL,
  `active_from` datetime DEFAULT NULL,
  `active_until` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_805FCB8FF7A2C2FC` (`badge_id`),
  KEY `IDX_805FCB8F16F956BA` (`associated_badge`),
  KEY `IDX_805FCB8F89329D25` (`resource_id`),
  CONSTRAINT `FK_805FCB8F16F956BA` FOREIGN KEY (`associated_badge`) REFERENCES `claro_badge` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_805FCB8F89329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_805FCB8FF7A2C2FC` FOREIGN KEY (`badge_id`) REFERENCES `claro_badge` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge_rule`
--

LOCK TABLES `claro_badge_rule` WRITE;
/*!40000 ALTER TABLE `claro_badge_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_badge_translation`
--

DROP TABLE IF EXISTS `claro_badge_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_badge_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `criteria` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `badge_translation_unique_idx` (`locale`,`badge_id`),
  UNIQUE KEY `badge_name_translation_unique_idx` (`name`,`locale`,`badge_id`),
  UNIQUE KEY `badge_slug_translation_unique_idx` (`slug`,`locale`,`badge_id`),
  KEY `IDX_849BC831F7A2C2FC` (`badge_id`),
  CONSTRAINT `FK_849BC831F7A2C2FC` FOREIGN KEY (`badge_id`) REFERENCES `claro_badge` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_badge_translation`
--

LOCK TABLES `claro_badge_translation` WRITE;
/*!40000 ALTER TABLE `claro_badge_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_badge_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_bundle`
--

DROP TABLE IF EXISTS `claro_bundle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_bundle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `authors` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `description` longtext COLLATE utf8_unicode_ci,
  `targetDir` longtext COLLATE utf8_unicode_ci NOT NULL,
  `basePath` longtext COLLATE utf8_unicode_ci NOT NULL,
  `license` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `isInstalled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_bundle`
--

LOCK TABLES `claro_bundle` WRITE;
/*!40000 ALTER TABLE `claro_bundle` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_bundle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_chatbundle_chat_user`
--

DROP TABLE IF EXISTS `claro_chatbundle_chat_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_chatbundle_chat_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `chat_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chat_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_63EF42F2CC7CD147` (`chat_username`),
  UNIQUE KEY `UNIQ_63EF42F2A76ED395` (`user_id`),
  CONSTRAINT `FK_63EF42F2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_chatbundle_chat_user`
--

LOCK TABLES `claro_chatbundle_chat_user` WRITE;
/*!40000 ALTER TABLE `claro_chatbundle_chat_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_chatbundle_chat_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_chatbundle_room_message`
--

DROP TABLE IF EXISTS `claro_chatbundle_room_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_chatbundle_room_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_room_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `creation_date` datetime NOT NULL,
  `message_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_930423E01819BCFA` (`chat_room_id`),
  CONSTRAINT `FK_930423E01819BCFA` FOREIGN KEY (`chat_room_id`) REFERENCES `claro_chatbundle_room_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_chatbundle_room_message`
--

LOCK TABLES `claro_chatbundle_room_message` WRITE;
/*!40000 ALTER TABLE `claro_chatbundle_room_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_chatbundle_room_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_chatbundle_room_resource`
--

DROP TABLE IF EXISTS `claro_chatbundle_room_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_chatbundle_room_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_status` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DC04C3D0B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_DC04C3D0B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_chatbundle_room_resource`
--

LOCK TABLES `claro_chatbundle_room_resource` WRITE;
/*!40000 ALTER TABLE `claro_chatbundle_room_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_chatbundle_room_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_category`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `claco_form_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_E2D499A8F7D9CC0C` (`claco_form_id`),
  CONSTRAINT `FK_E2D499A8F7D9CC0C` FOREIGN KEY (`claco_form_id`) REFERENCES `claro_clacoformbundle_claco_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_category`
--

LOCK TABLES `claro_clacoformbundle_category` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_category_manager`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_category_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_category_manager` (
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`user_id`),
  KEY `IDX_562FC19412469DE2` (`category_id`),
  KEY `IDX_562FC194A76ED395` (`user_id`),
  CONSTRAINT `FK_562FC19412469DE2` FOREIGN KEY (`category_id`) REFERENCES `claro_clacoformbundle_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_562FC194A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_category_manager`
--

LOCK TABLES `claro_clacoformbundle_category_manager` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_category_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_category_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_claco_form`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_claco_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_claco_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template` longtext COLLATE utf8_unicode_ci,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_ACB82378B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_ACB82378B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_claco_form`
--

LOCK TABLES `claro_clacoformbundle_claco_form` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_claco_form_widget_config`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_claco_form_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_claco_form_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `claco_form_id` int(11) DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D1521187AB7B5A55` (`widgetInstance_id`),
  KEY `IDX_D1521187F7D9CC0C` (`claco_form_id`),
  CONSTRAINT `FK_D1521187AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D1521187F7D9CC0C` FOREIGN KEY (`claco_form_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_claco_form_widget_config`
--

LOCK TABLES `claro_clacoformbundle_claco_form_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_claco_form_widget_config_field`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_claco_form_widget_config_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_claco_form_widget_config_field` (
  `clacoformwidgetconfig_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  PRIMARY KEY (`clacoformwidgetconfig_id`,`field_id`),
  KEY `IDX_62B7ABB86C88DEB0` (`clacoformwidgetconfig_id`),
  KEY `IDX_62B7ABB8443707B0` (`field_id`),
  CONSTRAINT `FK_62B7ABB8443707B0` FOREIGN KEY (`field_id`) REFERENCES `claro_clacoformbundle_field` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_62B7ABB86C88DEB0` FOREIGN KEY (`clacoformwidgetconfig_id`) REFERENCES `claro_clacoformbundle_claco_form_widget_config` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_claco_form_widget_config_field`
--

LOCK TABLES `claro_clacoformbundle_claco_form_widget_config_field` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form_widget_config_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_claco_form_widget_config_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_comment`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `entry_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `edition_date` datetime DEFAULT NULL,
  `comment_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23B30E0A76ED395` (`user_id`),
  KEY `IDX_23B30E0BA364942` (`entry_id`),
  CONSTRAINT `FK_23B30E0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_23B30E0BA364942` FOREIGN KEY (`entry_id`) REFERENCES `claro_clacoformbundle_entry` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_comment`
--

LOCK TABLES `claro_clacoformbundle_comment` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_entry`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `claco_form_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_status` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `edition_date` datetime DEFAULT NULL,
  `publication_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_889DAEDFF7D9CC0C` (`claco_form_id`),
  KEY `IDX_889DAEDFA76ED395` (`user_id`),
  CONSTRAINT `FK_889DAEDFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_889DAEDFF7D9CC0C` FOREIGN KEY (`claco_form_id`) REFERENCES `claro_clacoformbundle_claco_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_entry`
--

LOCK TABLES `claro_clacoformbundle_entry` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_entry_category`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_entry_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_entry_category` (
  `entry_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`,`category_id`),
  KEY `IDX_2009A6BEBA364942` (`entry_id`),
  KEY `IDX_2009A6BE12469DE2` (`category_id`),
  CONSTRAINT `FK_2009A6BE12469DE2` FOREIGN KEY (`category_id`) REFERENCES `claro_clacoformbundle_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2009A6BEBA364942` FOREIGN KEY (`entry_id`) REFERENCES `claro_clacoformbundle_entry` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_entry_category`
--

LOCK TABLES `claro_clacoformbundle_entry_category` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_entry_keyword`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_entry_keyword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_entry_keyword` (
  `entry_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`,`keyword_id`),
  KEY `IDX_C61CA20BBA364942` (`entry_id`),
  KEY `IDX_C61CA20B115D4552` (`keyword_id`),
  CONSTRAINT `FK_C61CA20B115D4552` FOREIGN KEY (`keyword_id`) REFERENCES `claro_clacoformbundle_keyword` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C61CA20BBA364942` FOREIGN KEY (`entry_id`) REFERENCES `claro_clacoformbundle_entry` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_entry_keyword`
--

LOCK TABLES `claro_clacoformbundle_entry_keyword` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry_keyword` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_entry_keyword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_field`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `claco_form_id` int(11) NOT NULL,
  `field_facet_id` int(11) DEFAULT NULL,
  `field_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field_type` int(11) NOT NULL,
  `required` tinyint(1) NOT NULL,
  `is_metadata` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_unique_name` (`claco_form_id`,`field_name`),
  UNIQUE KEY `UNIQ_F84976F72AB018E9` (`field_facet_id`),
  KEY `IDX_F84976F7F7D9CC0C` (`claco_form_id`),
  CONSTRAINT `FK_F84976F72AB018E9` FOREIGN KEY (`field_facet_id`) REFERENCES `claro_field_facet` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F84976F7F7D9CC0C` FOREIGN KEY (`claco_form_id`) REFERENCES `claro_clacoformbundle_claco_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_field`
--

LOCK TABLES `claro_clacoformbundle_field` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_field_choice_category`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_field_choice_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_field_choice_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `field_facet_choice_id` int(11) DEFAULT NULL,
  `field_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F7C5EF7443707B0` (`field_id`),
  KEY `IDX_1F7C5EF712469DE2` (`category_id`),
  KEY `IDX_1F7C5EF7E07710C3` (`field_facet_choice_id`),
  CONSTRAINT `FK_1F7C5EF712469DE2` FOREIGN KEY (`category_id`) REFERENCES `claro_clacoformbundle_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1F7C5EF7443707B0` FOREIGN KEY (`field_id`) REFERENCES `claro_clacoformbundle_field` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1F7C5EF7E07710C3` FOREIGN KEY (`field_facet_choice_id`) REFERENCES `claro_field_facet_choice` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_field_choice_category`
--

LOCK TABLES `claro_clacoformbundle_field_choice_category` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_field_choice_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_field_choice_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_field_value`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_field_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL,
  `field_facet_value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B481BDB9D4EE0DAB` (`field_facet_value_id`),
  UNIQUE KEY `field_unique_name` (`entry_id`,`field_id`),
  KEY `IDX_B481BDB9BA364942` (`entry_id`),
  KEY `IDX_B481BDB9443707B0` (`field_id`),
  CONSTRAINT `FK_B481BDB9443707B0` FOREIGN KEY (`field_id`) REFERENCES `claro_clacoformbundle_field` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B481BDB9BA364942` FOREIGN KEY (`entry_id`) REFERENCES `claro_clacoformbundle_entry` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B481BDB9D4EE0DAB` FOREIGN KEY (`field_facet_value_id`) REFERENCES `claro_field_facet_value` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_field_value`
--

LOCK TABLES `claro_clacoformbundle_field_value` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_field_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_clacoformbundle_keyword`
--

DROP TABLE IF EXISTS `claro_clacoformbundle_keyword`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_clacoformbundle_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `claco_form_id` int(11) NOT NULL,
  `keyword_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_unique_name` (`claco_form_id`,`keyword_name`),
  KEY `IDX_CCDC13B7F7D9CC0C` (`claco_form_id`),
  CONSTRAINT `FK_CCDC13B7F7D9CC0C` FOREIGN KEY (`claco_form_id`) REFERENCES `claro_clacoformbundle_claco_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_clacoformbundle_keyword`
--

LOCK TABLES `claro_clacoformbundle_keyword` WRITE;
/*!40000 ALTER TABLE `claro_clacoformbundle_keyword` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_clacoformbundle_keyword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_contact`
--

DROP TABLE IF EXISTS `claro_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_unique_user_contact` (`user_id`,`contact_id`),
  KEY `IDX_2C215B9FA76ED395` (`user_id`),
  KEY `IDX_2C215B9FE7A1254A` (`contact_id`),
  CONSTRAINT `FK_2C215B9FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2C215B9FE7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_contact`
--

LOCK TABLES `claro_contact` WRITE;
/*!40000 ALTER TABLE `claro_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_contact_categories`
--

DROP TABLE IF EXISTS `claro_contact_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_contact_categories` (
  `contact_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`,`category_id`),
  KEY `IDX_69F02FC4E7A1254A` (`contact_id`),
  KEY `IDX_69F02FC412469DE2` (`category_id`),
  CONSTRAINT `FK_69F02FC412469DE2` FOREIGN KEY (`category_id`) REFERENCES `claro_contact_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_69F02FC4E7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `claro_contact` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_contact_categories`
--

LOCK TABLES `claro_contact_categories` WRITE;
/*!40000 ALTER TABLE `claro_contact_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_contact_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_contact_category`
--

DROP TABLE IF EXISTS `claro_contact_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_contact_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact_unique_user_category` (`user_id`,`category_name`),
  KEY `IDX_2C48C9BBA76ED395` (`user_id`),
  CONSTRAINT `FK_2C48C9BBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_contact_category`
--

LOCK TABLES `claro_contact_category` WRITE;
/*!40000 ALTER TABLE `claro_contact_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_contact_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_contact_options`
--

DROP TABLE IF EXISTS `claro_contact_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_contact_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BBCE147CA76ED395` (`user_id`),
  CONSTRAINT `FK_BBCE147CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_contact_options`
--

LOCK TABLES `claro_contact_options` WRITE;
/*!40000 ALTER TABLE `claro_contact_options` DISABLE KEYS */;
INSERT INTO `claro_contact_options` VALUES (1,1,'{\"show_all_my_contacts\":true,\"show_all_visible_users\":true,\"show_username\":true,\"show_mail\":false,\"show_phone\":false,\"show_picture\":true}'),(2,3,'{\"show_all_my_contacts\":true,\"show_all_visible_users\":true,\"show_username\":true,\"show_mail\":false,\"show_phone\":false,\"show_picture\":true}');
/*!40000 ALTER TABLE `claro_contact_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_content`
--

DROP TABLE IF EXISTS `claro_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_content`
--

LOCK TABLES `claro_content` WRITE;
/*!40000 ALTER TABLE `claro_content` DISABLE KEYS */;
INSERT INTO `claro_content` VALUES (1,'Registration to %platform_name%','<div>You username is %username%</div></br><div>Your password is %password%</div><div>%validation_mail%</div>','claro_mail_registration','2017-02-16 14:56:25','2017-02-16 14:56:25'),(2,NULL,'<div></div>%content%<div></hr>Powered by %platform_name%</div>','claro_mail_layout','2017-02-16 14:56:25','2017-02-16 14:56:25'),(3,'Registration confirmation','<div>You have been registered to course %course% in session %session% from %start_date% to %end_date%.</div>','claro_cursusbundle_mail_confirmation','2017-02-16 14:57:50','2017-02-16 14:57:50');
/*!40000 ALTER TABLE `claro_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_content2region`
--

DROP TABLE IF EXISTS `claro_content2region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_content2region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `next_id` int(11) DEFAULT NULL,
  `back_id` int(11) DEFAULT NULL,
  `size` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D18942E84A0A3ED` (`content_id`),
  KEY `IDX_8D18942E98260155` (`region_id`),
  KEY `IDX_8D18942EAA23F6C8` (`next_id`),
  KEY `IDX_8D18942EE9583FF0` (`back_id`),
  CONSTRAINT `FK_8D18942E84A0A3ED` FOREIGN KEY (`content_id`) REFERENCES `claro_content` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8D18942E98260155` FOREIGN KEY (`region_id`) REFERENCES `claro_region` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8D18942EAA23F6C8` FOREIGN KEY (`next_id`) REFERENCES `claro_content2region` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8D18942EE9583FF0` FOREIGN KEY (`back_id`) REFERENCES `claro_content2region` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_content2region`
--

LOCK TABLES `claro_content2region` WRITE;
/*!40000 ALTER TABLE `claro_content2region` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_content2region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_content2type`
--

DROP TABLE IF EXISTS `claro_content2type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_content2type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `next_id` int(11) DEFAULT NULL,
  `back_id` int(11) DEFAULT NULL,
  `size` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `collapse` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1A2084EF84A0A3ED` (`content_id`),
  KEY `IDX_1A2084EFC54C8C93` (`type_id`),
  KEY `IDX_1A2084EFAA23F6C8` (`next_id`),
  KEY `IDX_1A2084EFE9583FF0` (`back_id`),
  CONSTRAINT `FK_1A2084EF84A0A3ED` FOREIGN KEY (`content_id`) REFERENCES `claro_content` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1A2084EFAA23F6C8` FOREIGN KEY (`next_id`) REFERENCES `claro_content2type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1A2084EFC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `claro_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1A2084EFE9583FF0` FOREIGN KEY (`back_id`) REFERENCES `claro_content2type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_content2type`
--

LOCK TABLES `claro_content2type` WRITE;
/*!40000 ALTER TABLE `claro_content2type` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_content2type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_content_translation`
--

DROP TABLE IF EXISTS `claro_content_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_content_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `content_translation_idx` (`locale`,`object_class`,`field`,`foreign_key`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_content_translation`
--

LOCK TABLES `claro_content_translation` WRITE;
/*!40000 ALTER TABLE `claro_content_translation` DISABLE KEYS */;
INSERT INTO `claro_content_translation` VALUES (1,'fr','Claroline\\CoreBundle\\Entity\\Content','title','1','Inscription à %platform_name%'),(2,'fr','Claroline\\CoreBundle\\Entity\\Content','content','1','<div>Votre nom d\'utilisateur est %username%</div></br><div>Votre mot de passe est %password%</div><div>%validation_mail%</div>'),(3,'fr','Claroline\\CoreBundle\\Entity\\Content','content','2','<div></div>%content%<div></hr>Powered by %platform_name%</div>'),(4,'fr','Claroline\\CoreBundle\\Entity\\Content','title','3','Confirmation de votre inscription'),(5,'fr','Claroline\\CoreBundle\\Entity\\Content','content','3','<div>Vous avez bien été inscrit au cours %course% pour la session %session% du %start_date% au %end_date%.</div>');
/*!40000 ALTER TABLE `claro_content_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursus_sessions`
--

DROP TABLE IF EXISTS `claro_cursus_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursus_sessions` (
  `coursesession_id` int(11) NOT NULL,
  `cursus_id` int(11) NOT NULL,
  PRIMARY KEY (`coursesession_id`,`cursus_id`),
  KEY `IDX_5256A813AE020D6E` (`coursesession_id`),
  KEY `IDX_5256A81340AEF4B9` (`cursus_id`),
  CONSTRAINT `FK_5256A81340AEF4B9` FOREIGN KEY (`cursus_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5256A813AE020D6E` FOREIGN KEY (`coursesession_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursus_sessions`
--

LOCK TABLES `claro_cursus_sessions` WRITE;
/*!40000 ALTER TABLE `claro_cursus_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursus_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_model_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `public_registration` tinyint(1) NOT NULL,
  `public_unregistration` tinyint(1) NOT NULL,
  `registration_validation` tinyint(1) NOT NULL,
  `tutor_role_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `learner_role_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `user_validation` tinyint(1) NOT NULL,
  `organization_validation` tinyint(1) NOT NULL,
  `max_users` int(11) DEFAULT NULL,
  `session_duration` int(11) NOT NULL DEFAULT '1',
  `with_session_event` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` int(11) NOT NULL DEFAULT '500',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3359D34977153098` (`code`),
  KEY `IDX_3359D349EE7F5384` (`workspace_model_id`),
  KEY `IDX_3359D34982D40A1F` (`workspace_id`),
  CONSTRAINT `FK_3359D34982D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_3359D349EE7F5384` FOREIGN KEY (`workspace_model_id`) REFERENCES `claro_workspace_model` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course`
--

LOCK TABLES `claro_cursusbundle_course` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_organizations`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_organizations` (
  `course_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`organization_id`),
  KEY `IDX_6B367C8591CC992` (`course_id`),
  KEY `IDX_6B367C832C8A3DE` (`organization_id`),
  CONSTRAINT `FK_6B367C832C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6B367C8591CC992` FOREIGN KEY (`course_id`) REFERENCES `claro_cursusbundle_course` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_organizations`
--

LOCK TABLES `claro_cursusbundle_course_organizations` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_organizations` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_registration_queue`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_registration_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_registration_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `application_date` datetime NOT NULL,
  `validator_id` int(11) DEFAULT NULL,
  `organization_admin_id` int(11) DEFAULT NULL,
  `queue_status` int(11) NOT NULL,
  `validation_date` datetime DEFAULT NULL,
  `user_validation_date` datetime DEFAULT NULL,
  `validator_validation_date` datetime DEFAULT NULL,
  `organization_validation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_queue_unique_course_user` (`course_id`,`user_id`),
  KEY `IDX_E068776EA76ED395` (`user_id`),
  KEY `IDX_E068776E591CC992` (`course_id`),
  KEY `IDX_E068776EB0644AEC` (`validator_id`),
  KEY `IDX_E068776E8B3340B2` (`organization_admin_id`),
  CONSTRAINT `FK_E068776E591CC992` FOREIGN KEY (`course_id`) REFERENCES `claro_cursusbundle_course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E068776E8B3340B2` FOREIGN KEY (`organization_admin_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_E068776EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E068776EB0644AEC` FOREIGN KEY (`validator_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_registration_queue`
--

LOCK TABLES `claro_cursusbundle_course_registration_queue` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_registration_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_registration_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_session`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `learner_role_id` int(11) DEFAULT NULL,
  `tutor_role_id` int(11) DEFAULT NULL,
  `session_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_status` int(11) NOT NULL,
  `default_session` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `public_registration` tinyint(1) NOT NULL,
  `public_unregistration` tinyint(1) NOT NULL,
  `registration_validation` tinyint(1) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `user_validation` tinyint(1) NOT NULL,
  `organization_validation` tinyint(1) NOT NULL,
  `max_users` int(11) DEFAULT NULL,
  `session_type` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `event_registration_type` int(11) NOT NULL DEFAULT '0',
  `display_order` int(11) NOT NULL DEFAULT '500',
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_C5F56FDE591CC992` (`course_id`),
  KEY `IDX_C5F56FDE82D40A1F` (`workspace_id`),
  KEY `IDX_C5F56FDEEF2297F5` (`learner_role_id`),
  KEY `IDX_C5F56FDEBEFB2F13` (`tutor_role_id`),
  CONSTRAINT `FK_C5F56FDE591CC992` FOREIGN KEY (`course_id`) REFERENCES `claro_cursusbundle_course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C5F56FDE82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C5F56FDEBEFB2F13` FOREIGN KEY (`tutor_role_id`) REFERENCES `claro_role` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C5F56FDEEF2297F5` FOREIGN KEY (`learner_role_id`) REFERENCES `claro_role` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_session`
--

LOCK TABLES `claro_cursusbundle_course_session` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_session_group`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_session_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_session_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `group_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cursus_group_unique_course_session_group` (`session_id`,`group_id`,`group_type`),
  KEY `IDX_F27287A4FE54D947` (`group_id`),
  KEY `IDX_F27287A4613FECDF` (`session_id`),
  CONSTRAINT `FK_F27287A4613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F27287A4FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_session_group`
--

LOCK TABLES `claro_cursusbundle_course_session_group` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_session_registration_queue`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_session_registration_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_session_registration_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `application_date` datetime NOT NULL,
  `validator_id` int(11) DEFAULT NULL,
  `organization_admin_id` int(11) DEFAULT NULL,
  `queue_status` int(11) NOT NULL,
  `validation_date` datetime DEFAULT NULL,
  `user_validation_date` datetime DEFAULT NULL,
  `validator_validation_date` datetime DEFAULT NULL,
  `organization_validation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `session_queue_unique_session_user` (`session_id`,`user_id`),
  KEY `IDX_334FC296A76ED395` (`user_id`),
  KEY `IDX_334FC296613FECDF` (`session_id`),
  KEY `IDX_334FC296B0644AEC` (`validator_id`),
  KEY `IDX_334FC2968B3340B2` (`organization_admin_id`),
  CONSTRAINT `FK_334FC296613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_334FC2968B3340B2` FOREIGN KEY (`organization_admin_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_334FC296A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_334FC296B0644AEC` FOREIGN KEY (`validator_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_session_registration_queue`
--

LOCK TABLES `claro_cursusbundle_course_session_registration_queue` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_registration_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_registration_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_session_user`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_session_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_session_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cursus_user_unique_course_session_user` (`session_id`,`user_id`,`user_type`),
  KEY `IDX_80B4120FA76ED395` (`user_id`),
  KEY `IDX_80B4120F613FECDF` (`session_id`),
  CONSTRAINT `FK_80B4120F613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_80B4120FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_session_user`
--

LOCK TABLES `claro_cursusbundle_course_session_user` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_session_validators`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_session_validators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_session_validators` (
  `coursesession_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`coursesession_id`,`user_id`),
  KEY `IDX_7EE284A7AE020D6E` (`coursesession_id`),
  KEY `IDX_7EE284A7A76ED395` (`user_id`),
  CONSTRAINT `FK_7EE284A7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7EE284A7AE020D6E` FOREIGN KEY (`coursesession_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_session_validators`
--

LOCK TABLES `claro_cursusbundle_course_session_validators` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_validators` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_session_validators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_course_validators`
--

DROP TABLE IF EXISTS `claro_cursusbundle_course_validators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_course_validators` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`user_id`),
  KEY `IDX_219067F2591CC992` (`course_id`),
  KEY `IDX_219067F2A76ED395` (`user_id`),
  CONSTRAINT `FK_219067F2591CC992` FOREIGN KEY (`course_id`) REFERENCES `claro_cursusbundle_course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_219067F2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_course_validators`
--

LOCK TABLES `claro_cursusbundle_course_validators` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_course_validators` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_course_validators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_courses_widget_config`
--

DROP TABLE IF EXISTS `claro_cursusbundle_courses_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_courses_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cursus_id` int(11) DEFAULT NULL,
  `widgetInstance_id` int(11) DEFAULT NULL,
  `default_mode` int(11) NOT NULL DEFAULT '0',
  `public_sessions_only` tinyint(1) NOT NULL DEFAULT '0',
  `extra` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1724E274AB7B5A55` (`widgetInstance_id`),
  KEY `IDX_1724E27440AEF4B9` (`cursus_id`),
  CONSTRAINT `FK_1724E27440AEF4B9` FOREIGN KEY (`cursus_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_1724E274AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_courses_widget_config`
--

LOCK TABLES `claro_cursusbundle_courses_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_courses_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_courses_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_cursus`
--

DROP TABLE IF EXISTS `claro_cursusbundle_cursus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_cursus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `blocking` tinyint(1) NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `cursus_order` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `lvl` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_27921C3377153098` (`code`),
  KEY `IDX_27921C33591CC992` (`course_id`),
  KEY `IDX_27921C33727ACA70` (`parent_id`),
  KEY `IDX_27921C3382D40A1F` (`workspace_id`),
  CONSTRAINT `FK_27921C33591CC992` FOREIGN KEY (`course_id`) REFERENCES `claro_cursusbundle_course` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_27921C33727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_27921C3382D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_cursus`
--

LOCK TABLES `claro_cursusbundle_cursus` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_cursus_displayed_word`
--

DROP TABLE IF EXISTS `claro_cursusbundle_cursus_displayed_word`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_cursus_displayed_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayed_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_14E7B098C3F17511` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_cursus_displayed_word`
--

LOCK TABLES `claro_cursusbundle_cursus_displayed_word` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_displayed_word` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_displayed_word` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_cursus_group`
--

DROP TABLE IF EXISTS `claro_cursusbundle_cursus_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_cursus_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `cursus_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `group_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cursus_group_unique_cursus_group` (`cursus_id`,`group_id`,`group_type`),
  KEY `IDX_EA4DDE93FE54D947` (`group_id`),
  KEY `IDX_EA4DDE9340AEF4B9` (`cursus_id`),
  CONSTRAINT `FK_EA4DDE9340AEF4B9` FOREIGN KEY (`cursus_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EA4DDE93FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_cursus_group`
--

LOCK TABLES `claro_cursusbundle_cursus_group` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_cursus_organizations`
--

DROP TABLE IF EXISTS `claro_cursusbundle_cursus_organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_cursus_organizations` (
  `cursus_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`cursus_id`,`organization_id`),
  KEY `IDX_3B65A4C840AEF4B9` (`cursus_id`),
  KEY `IDX_3B65A4C832C8A3DE` (`organization_id`),
  CONSTRAINT `FK_3B65A4C832C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3B65A4C840AEF4B9` FOREIGN KEY (`cursus_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_cursus_organizations`
--

LOCK TABLES `claro_cursusbundle_cursus_organizations` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_organizations` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_cursus_user`
--

DROP TABLE IF EXISTS `claro_cursusbundle_cursus_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_cursus_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cursus_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cursus_user_unique_cursus_user` (`cursus_id`,`user_id`,`user_type`),
  KEY `IDX_8AA52D8A76ED395` (`user_id`),
  KEY `IDX_8AA52D840AEF4B9` (`cursus_id`),
  CONSTRAINT `FK_8AA52D840AEF4B9` FOREIGN KEY (`cursus_id`) REFERENCES `claro_cursusbundle_cursus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8AA52D8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_cursus_user`
--

LOCK TABLES `claro_cursusbundle_cursus_user` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_cursus_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_document_model`
--

DROP TABLE IF EXISTS `claro_cursusbundle_document_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_document_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `document_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_document_model`
--

LOCK TABLES `claro_cursusbundle_document_model` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_document_model` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_document_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_presence_status`
--

DROP TABLE IF EXISTS `claro_cursusbundle_presence_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_presence_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presence_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_presence_status`
--

LOCK TABLES `claro_cursusbundle_presence_status` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_presence_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_presence_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_session_event`
--

DROP TABLE IF EXISTS `claro_cursusbundle_session_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_session_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `location_resource_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `location_extra` longtext COLLATE utf8_unicode_ci,
  `max_users` int(11) DEFAULT NULL,
  `registration_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_257C3061613FECDF` (`session_id`),
  KEY `IDX_257C306164D218E` (`location_id`),
  KEY `IDX_257C30619FE77A61` (`location_resource_id`),
  KEY `IDX_257C3061B83297E7` (`reservation_id`),
  CONSTRAINT `FK_257C3061613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_257C306164D218E` FOREIGN KEY (`location_id`) REFERENCES `claro__location` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_257C30619FE77A61` FOREIGN KEY (`location_resource_id`) REFERENCES `formalibre_reservation_resource` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_257C3061B83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `formalibre_reservation` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_session_event`
--

LOCK TABLES `claro_cursusbundle_session_event` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_session_event_comment`
--

DROP TABLE IF EXISTS `claro_cursusbundle_session_event_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_session_event_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_event_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `edition_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_21DFDBA8A76ED395` (`user_id`),
  KEY `IDX_21DFDBA8FA5B88E3` (`session_event_id`),
  CONSTRAINT `FK_21DFDBA8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_21DFDBA8FA5B88E3` FOREIGN KEY (`session_event_id`) REFERENCES `claro_cursusbundle_session_event` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_session_event_comment`
--

LOCK TABLES `claro_cursusbundle_session_event_comment` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_session_event_tutors`
--

DROP TABLE IF EXISTS `claro_cursusbundle_session_event_tutors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_session_event_tutors` (
  `sessionevent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`sessionevent_id`,`user_id`),
  KEY `IDX_18D6F45217678BAC` (`sessionevent_id`),
  KEY `IDX_18D6F452A76ED395` (`user_id`),
  CONSTRAINT `FK_18D6F45217678BAC` FOREIGN KEY (`sessionevent_id`) REFERENCES `claro_cursusbundle_session_event` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_18D6F452A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_session_event_tutors`
--

LOCK TABLES `claro_cursusbundle_session_event_tutors` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_tutors` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_tutors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_cursusbundle_session_event_user`
--

DROP TABLE IF EXISTS `claro_cursusbundle_session_event_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_cursusbundle_session_event_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_event_id` int(11) NOT NULL,
  `presence_status_id` int(11) DEFAULT NULL,
  `registration_status` int(11) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `application_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_31D741DDA76ED395` (`user_id`),
  KEY `IDX_31D741DDFA5B88E3` (`session_event_id`),
  KEY `IDX_31D741DDD079F0B` (`presence_status_id`),
  CONSTRAINT `FK_31D741DDA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_31D741DDD079F0B` FOREIGN KEY (`presence_status_id`) REFERENCES `claro_cursusbundle_presence_status` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_31D741DDFA5B88E3` FOREIGN KEY (`session_event_id`) REFERENCES `claro_cursusbundle_session_event` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_cursusbundle_session_event_user`
--

LOCK TABLES `claro_cursusbundle_session_event_user` WRITE;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_cursusbundle_session_event_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_dashboard`
--

DROP TABLE IF EXISTS `claro_dashboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8027AA461220EA6` (`creator_id`),
  KEY `IDX_8027AA482D40A1F` (`workspace_id`),
  CONSTRAINT `FK_8027AA461220EA6` FOREIGN KEY (`creator_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_8027AA482D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_dashboard`
--

LOCK TABLES `claro_dashboard` WRITE;
/*!40000 ALTER TABLE `claro_dashboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_dashboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_directory`
--

DROP TABLE IF EXISTS `claro_directory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_directory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_upload_destination` tinyint(1) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_12EEC186B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_12EEC186B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_directory`
--

LOCK TABLES `claro_directory` WRITE;
/*!40000 ALTER TABLE `claro_directory` DISABLE KEYS */;
INSERT INTO `claro_directory` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6);
/*!40000 ALTER TABLE `claro_directory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_event`
--

DROP TABLE IF EXISTS `claro_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `priority` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_all_day` tinyint(1) NOT NULL,
  `is_task` tinyint(1) NOT NULL,
  `is_task_done` tinyint(1) NOT NULL,
  `is_editable` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B1ADDDB582D40A1F` (`workspace_id`),
  KEY `IDX_B1ADDDB5A76ED395` (`user_id`),
  CONSTRAINT `FK_B1ADDDB582D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B1ADDDB5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_event`
--

LOCK TABLES `claro_event` WRITE;
/*!40000 ALTER TABLE `claro_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_event_category`
--

DROP TABLE IF EXISTS `claro_event_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_event_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_408DC8C05E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_event_category`
--

LOCK TABLES `claro_event_category` WRITE;
/*!40000 ALTER TABLE `claro_event_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_event_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_event_event_category`
--

DROP TABLE IF EXISTS `claro_event_event_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_event_event_category` (
  `event_id` int(11) NOT NULL,
  `eventcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`eventcategory_id`),
  KEY `IDX_858F0D4C71F7E88B` (`event_id`),
  KEY `IDX_858F0D4C29E3B4B5` (`eventcategory_id`),
  CONSTRAINT `FK_858F0D4C29E3B4B5` FOREIGN KEY (`eventcategory_id`) REFERENCES `claro_event_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_858F0D4C71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `claro_event` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_event_event_category`
--

LOCK TABLES `claro_event_event_category` WRITE;
/*!40000 ALTER TABLE `claro_event_event_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_event_event_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_event_invitation`
--

DROP TABLE IF EXISTS `claro_event_invitation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_event_invitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_19D2F4603BAE0AA7` (`event`),
  KEY `IDX_19D2F460A76ED395` (`user_id`),
  CONSTRAINT `FK_19D2F4603BAE0AA7` FOREIGN KEY (`event`) REFERENCES `claro_event` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_19D2F460A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_event_invitation`
--

LOCK TABLES `claro_event_invitation` WRITE;
/*!40000 ALTER TABLE `claro_event_invitation` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_event_invitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_facet`
--

DROP TABLE IF EXISTS `claro_facet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_facet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `isMain` tinyint(1) NOT NULL,
  `forceCreationForm` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DCBA6D3A5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_facet`
--

LOCK TABLES `claro_facet` WRITE;
/*!40000 ALTER TABLE `claro_facet` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_facet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_facet_role`
--

DROP TABLE IF EXISTS `claro_facet_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_facet_role` (
  `facet_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`facet_id`,`role_id`),
  KEY `IDX_CDD5845DFC889F24` (`facet_id`),
  KEY `IDX_CDD5845DD60322AC` (`role_id`),
  CONSTRAINT `FK_CDD5845DD60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CDD5845DFC889F24` FOREIGN KEY (`facet_id`) REFERENCES `claro_facet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_facet_role`
--

LOCK TABLES `claro_facet_role` WRITE;
/*!40000 ALTER TABLE `claro_facet_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_facet_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_card`
--

DROP TABLE IF EXISTS `claro_fcbundle_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(11) DEFAULT NULL,
  `cardType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_92721E0681FD01F8` (`cardType_id`),
  KEY `IDX_92721E0626ED0855` (`note_id`),
  CONSTRAINT `FK_92721E0626ED0855` FOREIGN KEY (`note_id`) REFERENCES `claro_fcbundle_note` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_92721E0681FD01F8` FOREIGN KEY (`cardType_id`) REFERENCES `claro_fcbundle_card_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_card`
--

LOCK TABLES `claro_fcbundle_card` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_card` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_card_learning`
--

DROP TABLE IF EXISTS `claro_fcbundle_card_learning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_card_learning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `factor` double NOT NULL,
  `painful` tinyint(1) NOT NULL,
  `number_repeated` int(11) NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D0B7CD7B4ACC9A20` (`card_id`),
  KEY `IDX_D0B7CD7BA76ED395` (`user_id`),
  CONSTRAINT `FK_D0B7CD7B4ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `claro_fcbundle_card` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D0B7CD7BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_card_learning`
--

LOCK TABLES `claro_fcbundle_card_learning` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_card_learning` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_card_learning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_card_log`
--

DROP TABLE IF EXISTS `claro_fcbundle_card_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_card_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `factor` double NOT NULL,
  `painful` tinyint(1) NOT NULL,
  `number_repeated` int(11) NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F28F49854ACC9A20` (`card_id`),
  KEY `IDX_F28F4985A76ED395` (`user_id`),
  CONSTRAINT `FK_F28F49854ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `claro_fcbundle_card` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F28F4985A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_card_log`
--

LOCK TABLES `claro_fcbundle_card_log` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_card_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_card_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_card_type`
--

DROP TABLE IF EXISTS `claro_fcbundle_card_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_card_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noteType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FA7FA698EB100558` (`noteType_id`),
  CONSTRAINT `FK_FA7FA698EB100558` FOREIGN KEY (`noteType_id`) REFERENCES `claro_fcbundle_note_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_card_type`
--

LOCK TABLES `claro_fcbundle_card_type` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_card_type` DISABLE KEYS */;
INSERT INTO `claro_fcbundle_card_type` VALUES (1,'Forward',1);
/*!40000 ALTER TABLE `claro_fcbundle_card_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_deck`
--

DROP TABLE IF EXISTS `claro_fcbundle_deck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_deck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_card_day_default` int(11) NOT NULL,
  `session_duration_default` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CBCAB0E2B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_CBCAB0E2B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_deck`
--

LOCK TABLES `claro_fcbundle_deck` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_deck` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_deck` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_field_label`
--

DROP TABLE IF EXISTS `claro_fcbundle_field_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_field_label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noteType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_605BBEB5EB100558` (`noteType_id`),
  CONSTRAINT `FK_605BBEB5EB100558` FOREIGN KEY (`noteType_id`) REFERENCES `claro_fcbundle_note_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_field_label`
--

LOCK TABLES `claro_fcbundle_field_label` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_field_label` DISABLE KEYS */;
INSERT INTO `claro_fcbundle_field_label` VALUES (1,'Front',1),(2,'Back',1);
/*!40000 ALTER TABLE `claro_fcbundle_field_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_field_value`
--

DROP TABLE IF EXISTS `claro_fcbundle_field_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_field_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(11) DEFAULT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fieldLabel_id` int(11) DEFAULT NULL,
  `mimetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_738BB66950A389B2` (`fieldLabel_id`),
  KEY `IDX_738BB66926ED0855` (`note_id`),
  CONSTRAINT `FK_738BB66926ED0855` FOREIGN KEY (`note_id`) REFERENCES `claro_fcbundle_note` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_738BB66950A389B2` FOREIGN KEY (`fieldLabel_id`) REFERENCES `claro_fcbundle_field_label` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_field_value`
--

LOCK TABLES `claro_fcbundle_field_value` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_field_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_field_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_note`
--

DROP TABLE IF EXISTS `claro_fcbundle_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deck_id` int(11) DEFAULT NULL,
  `noteType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4BDB7CC1EB100558` (`noteType_id`),
  KEY `IDX_4BDB7CC1111948DC` (`deck_id`),
  CONSTRAINT `FK_4BDB7CC1111948DC` FOREIGN KEY (`deck_id`) REFERENCES `claro_fcbundle_deck` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4BDB7CC1EB100558` FOREIGN KEY (`noteType_id`) REFERENCES `claro_fcbundle_note_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_note`
--

LOCK TABLES `claro_fcbundle_note` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_note_type`
--

DROP TABLE IF EXISTS `claro_fcbundle_note_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_note_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_note_type`
--

LOCK TABLES `claro_fcbundle_note_type` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_note_type` DISABLE KEYS */;
INSERT INTO `claro_fcbundle_note_type` VALUES (1,'Basic');
/*!40000 ALTER TABLE `claro_fcbundle_note_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_session`
--

DROP TABLE IF EXISTS `claro_fcbundle_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `deck_id` int(11) DEFAULT NULL,
  `due_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_920ED92BA76ED395` (`user_id`),
  KEY `IDX_920ED92B111948DC` (`deck_id`),
  CONSTRAINT `FK_920ED92B111948DC` FOREIGN KEY (`deck_id`) REFERENCES `claro_fcbundle_deck` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_920ED92BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_session`
--

LOCK TABLES `claro_fcbundle_session` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_fcbundle_user_preference`
--

DROP TABLE IF EXISTS `claro_fcbundle_user_preference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_fcbundle_user_preference` (
  `deck` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `new_card_day` int(11) NOT NULL,
  `session_duration` int(11) NOT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`deck`,`user`),
  UNIQUE KEY `uniq` (`user`,`deck`),
  KEY `IDX_9715380E4FAC3637` (`deck`),
  KEY `IDX_9715380E8D93D649` (`user`),
  CONSTRAINT `FK_9715380E4FAC3637` FOREIGN KEY (`deck`) REFERENCES `claro_fcbundle_deck` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9715380E8D93D649` FOREIGN KEY (`user`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_fcbundle_user_preference`
--

LOCK TABLES `claro_fcbundle_user_preference` WRITE;
/*!40000 ALTER TABLE `claro_fcbundle_user_preference` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_fcbundle_user_preference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_field_facet`
--

DROP TABLE IF EXISTS `claro_field_facet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_field_facet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `panelFacet_id` int(11) DEFAULT NULL,
  `isRequired` tinyint(1) NOT NULL,
  `resource_node` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F6C21DB2E99038C0` (`panelFacet_id`),
  KEY `IDX_F6C21DB28A5F48FF` (`resource_node`),
  CONSTRAINT `FK_F6C21DB28A5F48FF` FOREIGN KEY (`resource_node`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F6C21DB2E99038C0` FOREIGN KEY (`panelFacet_id`) REFERENCES `claro_panel_facet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_field_facet`
--

LOCK TABLES `claro_field_facet` WRITE;
/*!40000 ALTER TABLE `claro_field_facet` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_field_facet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_field_facet_choice`
--

DROP TABLE IF EXISTS `claro_field_facet_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_field_facet_choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `fieldFacet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E2001D9F9239AF` (`fieldFacet_id`),
  CONSTRAINT `FK_E2001D9F9239AF` FOREIGN KEY (`fieldFacet_id`) REFERENCES `claro_field_facet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_field_facet_choice`
--

LOCK TABLES `claro_field_facet_choice` WRITE;
/*!40000 ALTER TABLE `claro_field_facet_choice` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_field_facet_choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_field_facet_role`
--

DROP TABLE IF EXISTS `claro_field_facet_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_field_facet_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `canOpen` tinyint(1) NOT NULL,
  `canEdit` tinyint(1) NOT NULL,
  `fieldFacet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_12F52A52D60322AC` (`role_id`),
  KEY `IDX_12F52A529F9239AF` (`fieldFacet_id`),
  CONSTRAINT `FK_12F52A529F9239AF` FOREIGN KEY (`fieldFacet_id`) REFERENCES `claro_field_facet` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_12F52A52D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_field_facet_role`
--

LOCK TABLES `claro_field_facet_role` WRITE;
/*!40000 ALTER TABLE `claro_field_facet_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_field_facet_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_field_facet_value`
--

DROP TABLE IF EXISTS `claro_field_facet_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_field_facet_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `stringValue` longtext COLLATE utf8_unicode_ci,
  `floatValue` double DEFAULT NULL,
  `dateValue` datetime DEFAULT NULL,
  `fieldFacet_id` int(11) NOT NULL,
  `arrayValue` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_35307C0AA76ED395` (`user_id`),
  KEY `IDX_35307C0A9F9239AF` (`fieldFacet_id`),
  CONSTRAINT `FK_35307C0A9F9239AF` FOREIGN KEY (`fieldFacet_id`) REFERENCES `claro_field_facet` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_35307C0AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_field_facet_value`
--

LOCK TABLES `claro_field_facet_value` WRITE;
/*!40000 ALTER TABLE `claro_field_facet_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_field_facet_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_file`
--

DROP TABLE IF EXISTS `claro_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `hash_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EA81C80BE1F029B6` (`hash_name`),
  UNIQUE KEY `UNIQ_EA81C80BB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_EA81C80BB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_file`
--

LOCK TABLES `claro_file` WRITE;
/*!40000 ALTER TABLE `claro_file` DISABLE KEYS */;
INSERT INTO `claro_file` VALUES (1,21542,'admin/C41110A9-2FAC-4CB8-B0EB-FB79BF1A9C42.ggb',7),(2,21542,'admin/F9B528C9-7566-4A55-8532-EB255CF4BBB8.ggb',9),(3,61728,'aurelie.favier/B9F63E52-23C4-4C5A-BB70-CB8CDC917669.pdf',10);
/*!40000 ALTER TABLE `claro_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum`
--

DROP TABLE IF EXISTS `claro_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resourceNode_id` int(11) DEFAULT NULL,
  `activate_notifications` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F2869DFB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_F2869DFB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum`
--

LOCK TABLES `claro_forum` WRITE;
/*!40000 ALTER TABLE `claro_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_category`
--

DROP TABLE IF EXISTS `claro_forum_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modificationDate` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2192ACF729CCBAD0` (`forum_id`),
  CONSTRAINT `FK_2192ACF729CCBAD0` FOREIGN KEY (`forum_id`) REFERENCES `claro_forum` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_category`
--

LOCK TABLES `claro_forum_category` WRITE;
/*!40000 ALTER TABLE `claro_forum_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_last_message_widget_config`
--

DROP TABLE IF EXISTS `claro_forum_last_message_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_last_message_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_instance_id` int(11) NOT NULL,
  `display_my_last_messages` tinyint(1) NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F68C6FF444BF891` (`widget_instance_id`),
  KEY `IDX_F68C6FF429CCBAD0` (`forum_id`),
  CONSTRAINT `FK_F68C6FF429CCBAD0` FOREIGN KEY (`forum_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_F68C6FF444BF891` FOREIGN KEY (`widget_instance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_last_message_widget_config`
--

LOCK TABLES `claro_forum_last_message_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_forum_last_message_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_last_message_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_message`
--

DROP TABLE IF EXISTS `claro_forum_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6A49AC0E23EDC87` (`subject_id`),
  KEY `IDX_6A49AC0EA76ED395` (`user_id`),
  CONSTRAINT `FK_6A49AC0E23EDC87` FOREIGN KEY (`subject_id`) REFERENCES `claro_forum_subject` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6A49AC0EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_message`
--

LOCK TABLES `claro_forum_message` WRITE;
/*!40000 ALTER TABLE `claro_forum_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_notification`
--

DROP TABLE IF EXISTS `claro_forum_notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `self_activation` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `IDX_1330B0B629CCBAD0` (`forum_id`),
  KEY `IDX_1330B0B6A76ED395` (`user_id`),
  CONSTRAINT `FK_1330B0B629CCBAD0` FOREIGN KEY (`forum_id`) REFERENCES `claro_forum` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1330B0B6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_notification`
--

LOCK TABLES `claro_forum_notification` WRITE;
/*!40000 ALTER TABLE `claro_forum_notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_options`
--

DROP TABLE IF EXISTS `claro_forum_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjects` int(11) NOT NULL,
  `messages` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_options`
--

LOCK TABLES `claro_forum_options` WRITE;
/*!40000 ALTER TABLE `claro_forum_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_forum_subject`
--

DROP TABLE IF EXISTS `claro_forum_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_forum_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `isSticked` tinyint(1) NOT NULL,
  `isClosed` tinyint(1) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_273AA20BA76ED395` (`user_id`),
  KEY `IDX_273AA20B12469DE2` (`category_id`),
  CONSTRAINT `FK_273AA20B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `claro_forum_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_273AA20BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_forum_subject`
--

LOCK TABLES `claro_forum_subject` WRITE;
/*!40000 ALTER TABLE `claro_forum_subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_forum_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_friend_request`
--

DROP TABLE IF EXISTS `claro_friend_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_friend_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_activated` tinyint(1) NOT NULL,
  `allow_authentication` tinyint(1) NOT NULL,
  `create_user_if_missing` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_friend_request`
--

LOCK TABLES `claro_friend_request` WRITE;
/*!40000 ALTER TABLE `claro_friend_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_friend_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_general_facet_preference`
--

DROP TABLE IF EXISTS `claro_general_facet_preference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_general_facet_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `baseData` tinyint(1) NOT NULL,
  `mail` tinyint(1) NOT NULL,
  `phone` tinyint(1) NOT NULL,
  `sendMail` tinyint(1) NOT NULL,
  `sendMessage` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_38AACF88D60322AC` (`role_id`),
  CONSTRAINT `FK_38AACF88D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_general_facet_preference`
--

LOCK TABLES `claro_general_facet_preference` WRITE;
/*!40000 ALTER TABLE `claro_general_facet_preference` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_general_facet_preference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_group`
--

DROP TABLE IF EXISTS `claro_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_unique_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_group`
--

LOCK TABLES `claro_group` WRITE;
/*!40000 ALTER TABLE `claro_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_group_organization`
--

DROP TABLE IF EXISTS `claro_group_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_group_organization` (
  `organization_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`organization_id`,`group_id`),
  KEY `IDX_B912197E32C8A3DE` (`organization_id`),
  KEY `IDX_B912197EFE54D947` (`group_id`),
  CONSTRAINT `FK_B912197E32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B912197EFE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_group_organization`
--

LOCK TABLES `claro_group_organization` WRITE;
/*!40000 ALTER TABLE `claro_group_organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_group_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_group_role`
--

DROP TABLE IF EXISTS `claro_group_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_group_role` (
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`),
  KEY `IDX_1CBA5A40FE54D947` (`group_id`),
  KEY `IDX_1CBA5A40D60322AC` (`role_id`),
  CONSTRAINT `FK_1CBA5A40D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1CBA5A40FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_group_role`
--

LOCK TABLES `claro_group_role` WRITE;
/*!40000 ALTER TABLE `claro_group_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_group_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_home_tab`
--

DROP TABLE IF EXISTS `claro_home_tab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_home_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A9744CCEA76ED395` (`user_id`),
  KEY `IDX_A9744CCE82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_A9744CCE82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A9744CCEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_home_tab`
--

LOCK TABLES `claro_home_tab` WRITE;
/*!40000 ALTER TABLE `claro_home_tab` DISABLE KEYS */;
INSERT INTO `claro_home_tab` VALUES (1,NULL,NULL,'Informations','admin_desktop',NULL),(2,NULL,NULL,'Informations','admin_workspace',NULL),(4,3,NULL,'Seconde','desktop',NULL);
/*!40000 ALTER TABLE `claro_home_tab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_home_tab_config`
--

DROP TABLE IF EXISTS `claro_home_tab_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_home_tab_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_tab_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_visible` tinyint(1) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `tab_order` int(11) NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `home_tab_config_unique_home_tab_user_workspace_type` (`home_tab_id`,`user_id`,`workspace_id`,`type`),
  KEY `IDX_F530F6BE7D08FA9E` (`home_tab_id`),
  KEY `IDX_F530F6BEA76ED395` (`user_id`),
  KEY `IDX_F530F6BE82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_F530F6BE7D08FA9E` FOREIGN KEY (`home_tab_id`) REFERENCES `claro_home_tab` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F530F6BE82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F530F6BEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_home_tab_config`
--

LOCK TABLES `claro_home_tab_config` WRITE;
/*!40000 ALTER TABLE `claro_home_tab_config` DISABLE KEYS */;
INSERT INTO `claro_home_tab_config` VALUES (1,1,NULL,NULL,'admin_desktop',1,0,1,NULL),(2,2,NULL,NULL,'admin_workspace',1,0,1,NULL),(3,1,1,NULL,'admin_desktop',1,0,1,'[]'),(4,1,2,NULL,'admin_desktop',1,0,1,'[]'),(5,1,3,NULL,'admin_desktop',1,0,1,'[]'),(7,4,3,NULL,'desktop',1,0,1,'{\"color\":\"#000aff\"}');
/*!40000 ALTER TABLE `claro_home_tab_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_home_tab_roles`
--

DROP TABLE IF EXISTS `claro_home_tab_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_home_tab_roles` (
  `hometab_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`hometab_id`,`role_id`),
  KEY `IDX_B81359F3CCE862F` (`hometab_id`),
  KEY `IDX_B81359F3D60322AC` (`role_id`),
  CONSTRAINT `FK_B81359F3CCE862F` FOREIGN KEY (`hometab_id`) REFERENCES `claro_home_tab` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B81359F3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_home_tab_roles`
--

LOCK TABLES `claro_home_tab_roles` WRITE;
/*!40000 ALTER TABLE `claro_home_tab_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_home_tab_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_list_type_creation`
--

DROP TABLE IF EXISTS `claro_list_type_creation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_list_type_creation` (
  `resource_rights_id` int(11) NOT NULL,
  `resource_type_id` int(11) NOT NULL,
  PRIMARY KEY (`resource_rights_id`,`resource_type_id`),
  KEY `IDX_84B4BEBA195FBDF1` (`resource_rights_id`),
  KEY `IDX_84B4BEBA98EC6B7B` (`resource_type_id`),
  CONSTRAINT `FK_84B4BEBA195FBDF1` FOREIGN KEY (`resource_rights_id`) REFERENCES `claro_resource_rights` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_84B4BEBA98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_list_type_creation`
--

LOCK TABLES `claro_list_type_creation` WRITE;
/*!40000 ALTER TABLE `claro_list_type_creation` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_list_type_creation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_log`
--

DROP TABLE IF EXISTS `claro_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doer_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `receiver_group_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `resource_type_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_log` datetime NOT NULL,
  `short_date_log` date NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `doer_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doer_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doer_session_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tool_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_displayed_in_admin` tinyint(1) NOT NULL,
  `is_displayed_in_workspace` tinyint(1) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `other_element_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_97FAB91F12D3860F` (`doer_id`),
  KEY `IDX_97FAB91FCD53EDB6` (`receiver_id`),
  KEY `IDX_97FAB91FC6F122B2` (`receiver_group_id`),
  KEY `IDX_97FAB91F7E3C61F9` (`owner_id`),
  KEY `IDX_97FAB91F82D40A1F` (`workspace_id`),
  KEY `IDX_97FAB91FB87FAB32` (`resourceNode_id`),
  KEY `IDX_97FAB91F98EC6B7B` (`resource_type_id`),
  KEY `IDX_97FAB91FD60322AC` (`role_id`),
  KEY `action_idx` (`action`),
  KEY `tool_idx` (`tool_name`),
  KEY `doer_type_idx` (`doer_type`),
  CONSTRAINT `FK_97FAB91F12D3860F` FOREIGN KEY (`doer_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91F7E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91F82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91F98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91FB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91FC6F122B2` FOREIGN KEY (`receiver_group_id`) REFERENCES `claro_group` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91FCD53EDB6` FOREIGN KEY (`receiver_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_97FAB91FD60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_log`
--

LOCK TABLES `claro_log` WRITE;
/*!40000 ALTER TABLE `claro_log` DISABLE KEYS */;
INSERT INTO `claro_log` VALUES (1,NULL,1,NULL,NULL,NULL,NULL,3,'role-subscribe_user','2017-05-18 23:47:04','2017-05-18','{\"role\":{\"name\":\"admin\"},\"receiverUser\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"username\":\"admin\"}}','platform',NULL,NULL,NULL,1,1,NULL,NULL),(2,NULL,NULL,NULL,1,1,2,NULL,'resource-create','2017-05-18 23:47:06','2017-05-18','{\"resource\":{\"name\":\"Espace personnel - admin\",\"path\":\"Espace personnel - admin\",\"guid\":\"CDC2A502-1F6B-4A05-8386-4D72267827FB\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"}}','platform',NULL,NULL,NULL,1,1,1,NULL),(3,NULL,NULL,NULL,1,1,2,NULL,'resource-create','2017-05-18 23:47:06','2017-05-18','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\" \\/ Mes documents publics\",\"guid\":\"57E4B943-21EE-4D07-A04F-699A233F3C56\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"}}','platform',NULL,NULL,NULL,1,1,2,NULL),(4,NULL,1,NULL,NULL,NULL,NULL,NULL,'user-create','2017-05-18 23:47:06','2017-05-18','{\"receiverUser\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"}}','platform',NULL,NULL,NULL,1,0,NULL,NULL),(5,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-18 23:49:52','2017-05-18','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','89.86.44.252','1l9nbg6qdv3hrgt2u61gsmtc55',NULL,1,0,NULL,NULL),(6,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-05-18 23:50:30','2017-05-18','{\"resource\":{\"name\":\"Espace personnel - admin\",\"path\":\"Espace personnel - admin\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','89.86.44.252','1l9nbg6qdv3hrgt2u61gsmtc55',NULL,1,1,1,NULL),(7,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-05-18 23:50:33','2017-05-18','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\"Espace personnel - admin \\/ Mes documents publics\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','89.86.44.252','1l9nbg6qdv3hrgt2u61gsmtc55',NULL,1,1,2,NULL),(8,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-19 00:05:59','2017-05-19','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','89.86.44.252','81vuf24ctvk8t74svo5ctlv4c7',NULL,1,0,NULL,NULL),(9,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-19 00:25:33','2017-05-19','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','89.86.44.252','ed406lnf2cmk89t1e5fqqb2k41',NULL,1,0,NULL,NULL),(10,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-19 11:27:20','2017-05-19','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','159.180.228.163','jp8djrjl3ggrltji0hqt6ap864',NULL,1,0,NULL,NULL),(11,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-19 14:03:01','2017-05-19','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.1.158.229','5e6buaot96lvalcdtoovchbpf5',NULL,1,0,NULL,NULL),(12,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-20 14:07:38','2017-05-20','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.182.21.3','ft1eeqcd08kovfp5qm4gvgmam2',NULL,1,0,NULL,NULL),(13,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-20 16:32:58','2017-05-20','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.182.21.3','qijil6g4ngienh1bh434imnto3',NULL,1,0,NULL,NULL),(14,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-05-24 09:05:25','2017-05-24','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.1.158.229','4ceroaj4r2h30egclu9j35okb4',NULL,1,0,NULL,NULL),(15,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-01 12:25:25','2017-06-01','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.182.21.3','neu8a9k0vvi6bgjhp2tl9s4nt7',NULL,1,0,NULL,NULL),(16,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:18:33','2017-06-15','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','30mnea8jetrdj2dsuu7ht7g4a6',NULL,1,0,NULL,NULL),(17,NULL,NULL,NULL,2,2,2,NULL,'resource-create','2017-06-15 14:22:35','2017-06-15','{\"resource\":{\"name\":\"Espace personnel - Crazyboy\",\"path\":\"Espace personnel - Crazyboy\",\"guid\":\"0C4E1EB3-667F-4D4A-A317-D67601C57348\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - Crazyboy\"},\"owner\":{\"lastName\":\"Galle\",\"firstName\":\"Samuel\"}}','anonymous','109.70.17.57','1j6i4te03dup9m230ki9orthe7',NULL,1,1,3,NULL),(18,NULL,NULL,NULL,2,2,2,NULL,'resource-create','2017-06-15 14:22:35','2017-06-15','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\" \\/ Mes documents publics\",\"guid\":\"16DEFC30-C062-43C4-9E17-7E1862EF5806\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - Crazyboy\"},\"owner\":{\"lastName\":\"Galle\",\"firstName\":\"Samuel\"}}','anonymous','109.70.17.57','1j6i4te03dup9m230ki9orthe7',NULL,1,1,4,NULL),(19,NULL,2,NULL,NULL,NULL,NULL,NULL,'user-create','2017-06-15 14:22:36','2017-06-15','{\"receiverUser\":{\"lastName\":\"Galle\",\"firstName\":\"Samuel\"}}','anonymous','109.70.17.57','1j6i4te03dup9m230ki9orthe7',NULL,1,0,NULL,NULL),(20,2,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:24:51','2017-06-15','{\"doer\":{\"firstName\":\"Samuel\",\"lastName\":\"Galle\",\"publicUrl\":\"samuel.galle\",\"platformRoles\":[\"user\"]}}','user','109.70.17.57','k1obn00gnumeefk0ih2pp6sq31',NULL,1,0,NULL,NULL),(21,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:25:37','2017-06-15','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,0,NULL,NULL),(22,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:26:22','2017-06-15','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','g0v5q1odt6chikm78o6936ucm7',NULL,1,0,NULL,NULL),(23,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:26:58','2017-06-15','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','9r7fej7se9geilvsjojjehper1',NULL,1,0,NULL,NULL),(24,NULL,NULL,NULL,3,3,2,NULL,'resource-create','2017-06-15 14:30:14','2017-06-15','{\"resource\":{\"name\":\"Espace personnel - aurelie.favier\",\"path\":\"Espace personnel - aurelie.favier\",\"guid\":\"04687CB7-D756-4CC8-8D47-9D30400D9294\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"}}','anonymous','109.70.17.57','id82t1ecnbp0906orb92s4tl15',NULL,1,1,5,NULL),(25,NULL,NULL,NULL,3,3,2,NULL,'resource-create','2017-06-15 14:30:14','2017-06-15','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\" \\/ Mes documents publics\",\"guid\":\"6E38516E-47B3-4200-B18B-BCD7B9701783\",\"resourceType\":\"directory\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"}}','anonymous','109.70.17.57','id82t1ecnbp0906orb92s4tl15',NULL,1,1,6,NULL),(26,NULL,3,NULL,NULL,NULL,NULL,NULL,'user-create','2017-06-15 14:30:14','2017-06-15','{\"receiverUser\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"}}','anonymous','109.70.17.57','id82t1ecnbp0906orb92s4tl15',NULL,1,0,NULL,NULL),(27,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:31:20','2017-06-15','{\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','109.70.17.57','kd7kdi95nhagdpv1qhe7ka1kv6',NULL,1,0,NULL,NULL),(28,3,NULL,NULL,3,3,2,NULL,'resource-read','2017-06-15 14:32:46','2017-06-15','{\"resource\":{\"name\":\"Espace personnel - aurelie.favier\",\"path\":\"Espace personnel - aurelie.favier\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"],\"workspaceRoles\":[\"manager\"]}}','user','109.70.17.57','kd7kdi95nhagdpv1qhe7ka1kv6',NULL,1,1,5,NULL),(29,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:33:43','2017-06-15','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','p0uae2nstoj80ffcbinhg7jj90',NULL,1,0,NULL,NULL),(30,1,2,NULL,NULL,NULL,NULL,3,'role-subscribe_user','2017-06-15 14:35:47','2017-06-15','{\"role\":{\"name\":\"admin\"},\"receiverUser\":{\"firstName\":\"Samuel\",\"lastName\":\"Galle\",\"username\":\"Crazyboy\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','p0uae2nstoj80ffcbinhg7jj90',NULL,1,1,NULL,NULL),(31,1,2,NULL,NULL,NULL,NULL,NULL,'user-update','2017-06-15 14:35:47','2017-06-15','{\"receiverUser\":{\"firstName\":\"Samuel\",\"lastName\":\"Galle\",\"changeSet\":[]},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','p0uae2nstoj80ffcbinhg7jj90',NULL,1,0,NULL,NULL),(32,2,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 14:36:42','2017-06-15','{\"doer\":{\"firstName\":\"Samuel\",\"lastName\":\"Galle\",\"publicUrl\":\"samuel.galle\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','r0mpe3h1nps70j1onemcod7hu7',NULL,1,0,NULL,NULL),(33,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-create','2017-06-15 14:37:27','2017-06-15','{\"tabId\":3,\"tabName\":\"Premier essai\",\"tabType\":\"desktop\",\"tabIcon\":null,\"configId\":6,\"type\":\"desktop\",\"locked\":false,\"visible\":true,\"tabOrder\":1,\"details\":{\"color\":\"#00fc0a\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(34,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-create','2017-06-15 14:37:57','2017-06-15','{\"tabId\":3,\"tabName\":\"Premier essai\",\"tabType\":\"desktop\",\"tabIcon\":null,\"widgetId\":2,\"widgetName\":\"simple_text\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":1,\"name\":\"Test\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetHomeTabConfigId\":1,\"order\":1,\"type\":\"desktop\",\"visible\":true,\"locked\":false,\"widgetDisplayConfigId\":1,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(35,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-edit','2017-06-15 14:38:06','2017-06-15','{\"widgetId\":2,\"widgetName\":\"simple_text\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":1,\"name\":\"Test\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetDisplayConfigId\":1,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(36,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-delete','2017-06-15 14:40:00','2017-06-15','{\"id\":1,\"widget\":{\"id\":2,\"name\":\"simple_text\",\"isConfigurable\":true,\"isExportable\":false,\"isDisplayableInWorkspace\":true,\"isDisplayableInDesktop\":true,\"defaultWidth\":4,\"defaultHeight\":3},\"isAdmin\":false,\"isDesktop\":true,\"name\":\"Test\",\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(37,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-edit','2017-06-15 14:40:37','2017-06-15','{\"tabId\":3,\"tabName\":\"Brainstorming 15\\/06\\/17\",\"tabType\":\"desktop\",\"tabIcon\":null,\"configId\":6,\"type\":\"desktop\",\"locked\":false,\"visible\":true,\"tabOrder\":1,\"details\":{\"color\":\"#00fc0a\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(38,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-create','2017-06-15 14:49:54','2017-06-15','{\"tabId\":3,\"tabName\":\"Brainstorming 15\\/06\\/17\",\"tabType\":\"desktop\",\"tabIcon\":null,\"widgetId\":2,\"widgetName\":\"simple_text\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":2,\"name\":\"Ressources\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetHomeTabConfigId\":2,\"order\":1,\"type\":\"desktop\",\"visible\":true,\"locked\":false,\"widgetDisplayConfigId\":2,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(39,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-delete','2017-06-15 14:50:17','2017-06-15','{\"id\":2,\"widget\":{\"id\":2,\"name\":\"simple_text\",\"isConfigurable\":true,\"isExportable\":false,\"isDisplayableInWorkspace\":true,\"isDisplayableInDesktop\":true,\"defaultWidth\":4,\"defaultHeight\":3},\"isAdmin\":false,\"isDesktop\":true,\"name\":\"Ressources\",\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(40,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-06-15 14:53:12','2017-06-15','{\"resource\":{\"name\":\"Espace personnel - admin\",\"path\":\"Espace personnel - admin\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,1,NULL),(41,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-06-15 14:53:33','2017-06-15','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\"Espace personnel - admin \\/ Mes documents publics\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,2,NULL),(42,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-15 15:03:52','2017-06-15','{\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','109.70.17.57','3m00saiat5ct6282p1oe1ei5j0',NULL,1,0,NULL,NULL),(43,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-create','2017-06-15 15:04:43','2017-06-15','{\"tabId\":4,\"tabName\":\"Seconde\",\"tabType\":\"desktop\",\"tabIcon\":null,\"configId\":7,\"type\":\"desktop\",\"locked\":false,\"visible\":true,\"tabOrder\":1,\"details\":{\"color\":\"#000aff\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','109.70.17.57','3m00saiat5ct6282p1oe1ei5j0',NULL,1,1,NULL,NULL),(44,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-create','2017-06-15 15:05:02','2017-06-15','{\"tabId\":5,\"tabName\":\"Test\",\"tabType\":\"desktop\",\"tabIcon\":null,\"configId\":8,\"type\":\"desktop\",\"locked\":false,\"visible\":true,\"tabOrder\":2,\"details\":{\"color\":null},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(45,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-delete','2017-06-15 15:05:44','2017-06-15','{\"configId\":8,\"hometab\":{\"id\":5,\"name\":\"Test\",\"type\":\"desktop\"},\"type\":\"desktop\",\"visible\":true,\"locked\":false,\"tabOrder\":2,\"details\":[],\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(46,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-home-tab-delete','2017-06-15 15:17:15','2017-06-15','{\"configId\":6,\"hometab\":{\"id\":3,\"name\":\"Brainstorming 15\\/06\\/17\",\"type\":\"desktop\"},\"type\":\"desktop\",\"visible\":true,\"locked\":false,\"tabOrder\":1,\"details\":{\"color\":\"#00fc0a\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','109.70.17.57','hib1n5pciplbbfeuq7m6qq8n42',NULL,1,1,NULL,NULL),(47,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-16 17:05:34','2017-06-16','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','86.213.158.246','65bh6nk6e1e4145sdbjgsthgh1',NULL,1,0,NULL,NULL),(48,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-28 09:35:48','2017-06-28','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,0,NULL,NULL),(49,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-06-28 09:37:42','2017-06-28','{\"resource\":{\"name\":\"Espace personnel - admin\",\"path\":\"Espace personnel - admin\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,1,NULL),(50,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-06-28 09:37:47','2017-06-28','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\"Espace personnel - admin \\/ Mes documents publics\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,2,NULL),(51,1,NULL,NULL,1,NULL,1,NULL,'resource-create','2017-06-28 09:40:35','2017-06-28','{\"resource\":{\"name\":\"SuitesArithmetiques_Graphique.ggb\",\"path\":\"SuitesArithmetiques_Graphique.ggb\",\"guid\":\"5899CC58-92C3-43C5-9C50-72A1FB199F07\",\"resourceType\":\"file\"},\"workspace\":{\"name\":\" - \"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,7,NULL),(52,1,NULL,NULL,1,1,5,NULL,'resource-create','2017-06-28 09:40:40','2017-06-28','{\"resource\":{\"name\":\"Suites arithm\\u00e9tiques avec Geogebra\",\"path\":\"Espace personnel - admin \\/ Mes documents publics \\/ Suites arithm\\u00e9tiques avec Geogebra\",\"guid\":\"269A3013-8DE3-4133-B364-06D982125D47\",\"resourceType\":\"activity\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,8,NULL),(53,1,NULL,NULL,1,1,5,NULL,'resource-read','2017-06-28 09:57:38','2017-06-28','{\"resource\":{\"name\":\"Suites arithm\\u00e9tiques avec Geogebra\",\"path\":\"Espace personnel - admin \\/ Mes documents publics \\/ Suites arithm\\u00e9tiques avec Geogebra\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,8,NULL),(54,1,NULL,NULL,1,1,2,NULL,'resource-read','2017-06-28 09:57:50','2017-06-28','{\"resource\":{\"name\":\"Espace personnel - admin\",\"path\":\"Espace personnel - admin\"},\"workspace\":{\"name\":\"Espace personnel - admin\"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"],\"workspaceRoles\":[\"manager\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,1,NULL),(55,1,NULL,NULL,1,NULL,1,NULL,'resource-create','2017-06-28 09:58:29','2017-06-28','{\"resource\":{\"name\":\"SuitesArithmetiques_Graphique.ggb\",\"path\":\"SuitesArithmetiques_Graphique.ggb\",\"guid\":\"0E844D31-D39E-4C81-90E1-8838F9F12711\",\"resourceType\":\"file\"},\"workspace\":{\"name\":\" - \"},\"owner\":{\"lastName\":\"Gonzalez\",\"firstName\":\"Xavier\"},\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','88.163.60.248','khvcigm0sm34k8pg6pcrssea92',NULL,1,1,9,NULL),(56,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-28 10:54:17','2017-06-28','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','31.36.70.129','6sbhn2cv8qvtgvbtq62ht7j144',NULL,1,0,NULL,NULL),(57,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-06-29 09:25:23','2017-06-29','{\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,0,NULL,NULL),(58,3,NULL,NULL,3,3,2,NULL,'resource-read','2017-06-29 09:26:49','2017-06-29','{\"resource\":{\"name\":\"Espace personnel - aurelie.favier\",\"path\":\"Espace personnel - aurelie.favier\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"],\"workspaceRoles\":[\"manager\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,1,5,NULL),(59,3,NULL,NULL,3,3,2,NULL,'resource-read','2017-06-29 09:26:59','2017-06-29','{\"resource\":{\"name\":\"Mes documents publics\",\"path\":\"Espace personnel - aurelie.favier \\/ Mes documents publics\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"],\"workspaceRoles\":[\"manager\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,1,6,NULL),(60,3,NULL,NULL,3,NULL,1,NULL,'resource-create','2017-06-29 09:29:41','2017-06-29','{\"resource\":{\"name\":\"2nde_G4_S3_PPI.pdf\",\"path\":\"2nde_G4_S3_PPI.pdf\",\"guid\":\"B7E3FE6F-0E62-4F5F-975B-4469C8045528\",\"resourceType\":\"file\"},\"workspace\":{\"name\":\" - \"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,1,10,NULL),(61,3,NULL,NULL,3,3,5,NULL,'resource-create','2017-06-29 09:30:32','2017-06-29','{\"resource\":{\"name\":\"PPI Vecteurs\",\"path\":\"Espace personnel - aurelie.favier \\/ Mes documents publics \\/ PPI Vecteurs\",\"guid\":\"B9763C84-6460-4FFC-8FF5-70A9AF5734A0\",\"resourceType\":\"activity\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"],\"workspaceRoles\":[\"manager\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,1,11,NULL),(62,3,NULL,NULL,3,3,5,NULL,'resource-read','2017-06-29 09:30:37','2017-06-29','{\"resource\":{\"name\":\"PPI Vecteurs\",\"path\":\"Espace personnel - aurelie.favier \\/ Mes documents publics \\/ PPI Vecteurs\"},\"workspace\":{\"name\":\"Espace personnel - aurelie.favier\"},\"owner\":{\"lastName\":\"Favier\",\"firstName\":\"Aur\\u00e9lie\"},\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"],\"workspaceRoles\":[\"manager\"]}}','user','83.200.255.124','694dusq9i22pi900pbqn7bo9t0',NULL,1,1,11,NULL),(63,1,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-07-06 09:43:41','2017-07-06','{\"doer\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"publicUrl\":\"xavier.gonzalez\",\"platformRoles\":[\"user\",\"admin\"]}}','user','31.36.70.129','ro4hgdglcdju7nvt37omp0p9i2',NULL,1,0,NULL,NULL),(64,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-login','2017-07-12 00:04:59','2017-07-12','{\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','2.6.31.85','ltsc2n4s4foers1p7qbmsrmg24',NULL,1,0,NULL,NULL),(65,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-create','2017-07-12 00:06:49','2017-07-12','{\"tabId\":4,\"tabName\":\"Seconde\",\"tabType\":\"desktop\",\"tabIcon\":null,\"widgetId\":5,\"widgetName\":\"resources_widget\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":3,\"name\":\"Cours Vecteurs\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetHomeTabConfigId\":3,\"order\":1,\"type\":\"desktop\",\"visible\":true,\"locked\":false,\"widgetDisplayConfigId\":3,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','2.6.31.85','ltsc2n4s4foers1p7qbmsrmg24',NULL,1,1,NULL,NULL),(66,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-edit','2017-07-12 00:07:16','2017-07-12','{\"widgetId\":5,\"widgetName\":\"resources_widget\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":3,\"name\":\"Cours Vecteurs\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetDisplayConfigId\":3,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','2.6.31.85','ltsc2n4s4foers1p7qbmsrmg24',NULL,1,1,NULL,NULL),(67,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-edit','2017-07-12 00:07:55','2017-07-12','{\"widgetId\":5,\"widgetName\":\"resources_widget\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":3,\"name\":\"Cours Vecteurs\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetDisplayConfigId\":3,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','2.6.31.85','ltsc2n4s4foers1p7qbmsrmg24',NULL,1,1,NULL,NULL),(68,3,NULL,NULL,NULL,NULL,NULL,NULL,'user-widget-edit','2017-07-12 00:07:57','2017-07-12','{\"widgetId\":5,\"widgetName\":\"resources_widget\",\"widgetIsConfigurable\":true,\"widgetIsExportable\":false,\"widgetIsDisplayableInWorkspace\":true,\"widgetIsDisplayableInDesktop\":true,\"id\":3,\"name\":\"Cours Vecteurs\",\"icon\":null,\"isAdmin\":false,\"isDesktop\":true,\"widgetDisplayConfigId\":3,\"row\":-1,\"column\":-1,\"width\":4,\"height\":3,\"color\":null,\"doer\":{\"firstName\":\"Aur\\u00e9lie\",\"lastName\":\"Favier\",\"publicUrl\":\"aur\\u00e9lie.favier\",\"platformRoles\":[\"user\"]}}','user','2.6.31.85','ltsc2n4s4foers1p7qbmsrmg24',NULL,1,1,NULL,NULL);
/*!40000 ALTER TABLE `claro_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_log_doer_platform_roles`
--

DROP TABLE IF EXISTS `claro_log_doer_platform_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_log_doer_platform_roles` (
  `log_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`log_id`,`role_id`),
  KEY `IDX_706568A5EA675D86` (`log_id`),
  KEY `IDX_706568A5D60322AC` (`role_id`),
  CONSTRAINT `FK_706568A5D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_706568A5EA675D86` FOREIGN KEY (`log_id`) REFERENCES `claro_log` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_log_doer_platform_roles`
--

LOCK TABLES `claro_log_doer_platform_roles` WRITE;
/*!40000 ALTER TABLE `claro_log_doer_platform_roles` DISABLE KEYS */;
INSERT INTO `claro_log_doer_platform_roles` VALUES (5,1),(5,3),(6,1),(6,3),(7,1),(7,3),(8,1),(8,3),(9,1),(9,3),(10,1),(10,3),(11,1),(11,3),(12,1),(12,3),(13,1),(13,3),(14,1),(14,3),(15,1),(15,3),(16,1),(16,3),(20,1),(21,1),(21,3),(22,1),(22,3),(23,1),(23,3),(27,1),(28,1),(29,1),(29,3),(30,1),(30,3),(31,1),(31,3),(32,1),(32,3),(33,1),(33,3),(34,1),(34,3),(35,1),(35,3),(36,1),(36,3),(37,1),(37,3),(38,1),(38,3),(39,1),(39,3),(40,1),(40,3),(41,1),(41,3),(42,1),(43,1),(44,1),(44,3),(45,1),(45,3),(46,1),(46,3),(47,1),(47,3),(48,1),(48,3),(49,1),(49,3),(50,1),(50,3),(51,1),(51,3),(52,1),(52,3),(53,1),(53,3),(54,1),(54,3),(55,1),(55,3),(56,1),(56,3),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(63,3),(64,1),(65,1),(66,1),(67,1),(68,1);
/*!40000 ALTER TABLE `claro_log_doer_platform_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_log_doer_workspace_roles`
--

DROP TABLE IF EXISTS `claro_log_doer_workspace_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_log_doer_workspace_roles` (
  `log_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`log_id`,`role_id`),
  KEY `IDX_8A8D2F47EA675D86` (`log_id`),
  KEY `IDX_8A8D2F47D60322AC` (`role_id`),
  CONSTRAINT `FK_8A8D2F47D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8A8D2F47EA675D86` FOREIGN KEY (`log_id`) REFERENCES `claro_log` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_log_doer_workspace_roles`
--

LOCK TABLES `claro_log_doer_workspace_roles` WRITE;
/*!40000 ALTER TABLE `claro_log_doer_workspace_roles` DISABLE KEYS */;
INSERT INTO `claro_log_doer_workspace_roles` VALUES (6,9),(7,9),(28,15),(40,9),(41,9),(49,9),(50,9),(52,9),(53,9),(54,9),(58,15),(59,15),(61,15),(62,15);
/*!40000 ALTER TABLE `claro_log_doer_workspace_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_log_hidden_workspace_widget_config`
--

DROP TABLE IF EXISTS `claro_log_hidden_workspace_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_log_hidden_workspace_widget_config` (
  `workspace_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`workspace_id`,`user_id`),
  KEY `IDX_BC83196EA76ED395` (`user_id`),
  CONSTRAINT `FK_BC83196EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_log_hidden_workspace_widget_config`
--

LOCK TABLES `claro_log_hidden_workspace_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_log_hidden_workspace_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_log_hidden_workspace_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_log_widget_config`
--

DROP TABLE IF EXISTS `claro_log_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_log_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `restrictions` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:simple_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C16334B2AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_C16334B2AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_log_widget_config`
--

LOCK TABLES `claro_log_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_log_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_log_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_menu_action`
--

DROP TABLE IF EXISTS `claro_menu_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_menu_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `async` tinyint(1) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL,
  `is_form` tinyint(1) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F57E52B98EC6B7B` (`resource_type_id`),
  CONSTRAINT `FK_1F57E52B98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_menu_action`
--

LOCK TABLES `claro_menu_action` WRITE;
/*!40000 ALTER TABLE `claro_menu_action` DISABLE KEYS */;
INSERT INTO `claro_menu_action` VALUES (1,1,'download',1,0,0,'4'),(2,1,'delete',1,0,0,'8'),(3,1,'edit-rights',1,0,1,'32'),(4,1,'open-tracking',1,0,0,'32'),(5,1,'rename',1,0,1,'32'),(6,1,'edit-properties',1,0,1,'32'),(7,2,'download',1,0,0,'4'),(8,2,'delete',1,0,0,'8'),(9,2,'edit-rights',1,0,1,'32'),(10,2,'open-tracking',1,0,0,'32'),(11,2,'rename',1,0,1,'32'),(12,2,'edit-properties',1,0,1,'32'),(13,3,'download',1,0,0,'4'),(14,3,'delete',1,0,0,'8'),(15,3,'edit-rights',1,0,1,'32'),(16,3,'open-tracking',1,0,0,'32'),(17,3,'rename',1,0,1,'32'),(18,3,'edit-properties',1,0,1,'32'),(19,4,'download',1,0,0,'4'),(20,4,'delete',1,0,0,'8'),(21,4,'edit-rights',1,0,1,'32'),(22,4,'open-tracking',1,0,0,'32'),(23,4,'rename',1,0,1,'32'),(24,4,'edit-properties',1,0,1,'32'),(25,5,'download',1,0,0,'4'),(26,5,'delete',1,0,0,'8'),(27,5,'edit-rights',1,0,1,'32'),(28,5,'open-tracking',1,0,0,'32'),(29,5,'rename',1,0,1,'32'),(30,5,'edit-properties',1,0,1,'32'),(31,5,'compose',0,1,0,'1024'),(32,1,'update_file',1,1,0,'16'),(33,6,'download',1,0,0,'4'),(34,6,'delete',1,0,0,'8'),(35,6,'edit-rights',1,0,1,'32'),(36,6,'open-tracking',1,0,0,'32'),(37,6,'rename',1,0,1,'32'),(38,6,'edit-properties',1,0,1,'32'),(39,NULL,'tag_action',1,1,1,'1'),(40,7,'download',1,0,0,'4'),(41,7,'delete',1,0,0,'8'),(42,7,'edit-rights',1,0,1,'32'),(43,7,'open-tracking',1,0,0,'32'),(44,7,'rename',1,0,1,'32'),(45,7,'edit-properties',1,0,1,'32'),(46,8,'download',1,0,0,'4'),(47,8,'delete',1,0,0,'8'),(48,8,'edit-rights',1,0,1,'32'),(49,8,'open-tracking',1,0,0,'32'),(50,8,'rename',1,0,1,'32'),(51,8,'edit-properties',1,0,1,'32'),(52,9,'download',1,0,0,'4'),(53,9,'delete',1,0,0,'8'),(54,9,'edit-rights',1,0,1,'32'),(55,9,'open-tracking',1,0,0,'32'),(56,9,'rename',1,0,1,'32'),(57,9,'edit-properties',1,0,1,'32'),(58,10,'download',1,0,0,'4'),(59,10,'delete',1,0,0,'8'),(60,10,'edit-rights',1,0,1,'32'),(61,10,'open-tracking',1,0,0,'32'),(62,10,'rename',1,0,1,'32'),(63,10,'edit-properties',1,0,1,'32'),(64,11,'download',1,0,0,'4'),(65,11,'delete',1,0,0,'8'),(66,11,'edit-rights',1,0,1,'32'),(67,11,'open-tracking',1,0,0,'32'),(68,11,'rename',1,0,1,'32'),(69,11,'edit-properties',1,0,1,'32'),(70,12,'download',1,0,0,'4'),(71,12,'delete',1,0,0,'8'),(72,12,'edit-rights',1,0,1,'32'),(73,12,'open-tracking',1,0,0,'32'),(74,12,'rename',1,0,1,'32'),(75,12,'edit-properties',1,0,1,'32'),(76,12,'open_dropzone',NULL,1,0,'1'),(77,12,'edit_dropzone',NULL,1,0,'16'),(78,NULL,'hevinci_favourite',1,1,1,'1'),(79,5,'manage-competencies',NULL,1,0,'1'),(80,13,'download',1,0,0,'4'),(81,13,'delete',1,0,0,'8'),(82,13,'edit-rights',1,0,1,'32'),(83,13,'open-tracking',1,0,0,'32'),(84,13,'rename',1,0,1,'32'),(85,13,'edit-properties',1,0,1,'32'),(86,13,'change_url_menu',NULL,1,1,'16'),(87,14,'download',1,0,0,'4'),(88,14,'delete',1,0,0,'8'),(89,14,'edit-rights',1,0,1,'32'),(90,14,'open-tracking',1,0,0,'32'),(91,14,'rename',1,0,1,'32'),(92,14,'edit-properties',1,0,1,'32'),(93,14,'configure_blog',NULL,1,0,'32'),(94,15,'download',1,0,0,'4'),(95,15,'delete',1,0,0,'8'),(96,15,'edit-rights',1,0,1,'32'),(97,15,'open-tracking',1,0,0,'32'),(98,15,'rename',1,0,1,'32'),(99,15,'edit-properties',1,0,1,'32'),(100,15,'open_dropzone',NULL,1,0,'1'),(101,15,'edit_dropzone',NULL,1,0,'16'),(102,15,'list_dropzone',NULL,1,0,'16'),(103,NULL,'like_action',1,1,1,'1'),(104,NULL,'share_action',1,1,1,'1'),(105,NULL,'comment_action',1,1,1,'1'),(106,NULL,'note_action',1,1,1,'1'),(107,16,'download',1,0,0,'4'),(108,16,'delete',1,0,0,'8'),(109,16,'edit-rights',1,0,1,'32'),(110,16,'open-tracking',1,0,0,'32'),(111,16,'rename',1,0,1,'32'),(112,16,'edit-properties',1,0,1,'32'),(113,17,'download',1,0,0,'4'),(114,17,'delete',1,0,0,'8'),(115,17,'edit-rights',1,0,1,'32'),(116,17,'open-tracking',1,0,0,'32'),(117,17,'rename',1,0,1,'32'),(118,17,'edit-properties',1,0,1,'32'),(119,18,'download',1,0,0,'4'),(120,18,'delete',1,0,0,'8'),(121,18,'edit-rights',1,0,1,'32'),(122,18,'open-tracking',1,0,0,'32'),(123,18,'rename',1,0,1,'32'),(124,18,'edit-properties',1,0,1,'32'),(125,18,'administrate',NULL,1,0,'64'),(126,18,'manageresults',NULL,1,0,'128'),(127,19,'download',1,0,0,'4'),(128,19,'delete',1,0,0,'8'),(129,19,'edit-rights',1,0,1,'32'),(130,19,'open-tracking',1,0,0,'32'),(131,19,'rename',1,0,1,'32'),(132,19,'edit-properties',1,0,1,'32'),(133,20,'download',1,0,0,'4'),(134,20,'delete',1,0,0,'8'),(135,20,'edit-rights',1,0,1,'32'),(136,20,'open-tracking',1,0,0,'32'),(137,20,'rename',1,0,1,'32'),(138,20,'edit-properties',1,0,1,'32'),(139,21,'download',1,0,0,'4'),(140,21,'delete',1,0,0,'8'),(141,21,'edit-rights',1,0,1,'32'),(142,21,'open-tracking',1,0,0,'32'),(143,21,'rename',1,0,1,'32'),(144,21,'edit-properties',1,0,1,'32'),(145,22,'download',1,0,0,'4'),(146,22,'delete',1,0,0,'8'),(147,22,'edit-rights',1,0,1,'32'),(148,22,'open-tracking',1,0,0,'32'),(149,22,'rename',1,0,1,'32'),(150,22,'edit-properties',1,0,1,'32'),(151,22,'innova_media_resource_administrate',NULL,1,0,'32'),(152,23,'download',1,0,0,'4'),(153,23,'delete',1,0,0,'8'),(154,23,'edit-rights',1,0,1,'32'),(155,23,'open-tracking',1,0,0,'32'),(156,23,'rename',1,0,1,'32'),(157,23,'edit-properties',1,0,1,'32'),(158,24,'download',1,0,0,'4'),(159,24,'delete',1,0,0,'8'),(160,24,'edit-rights',1,0,1,'32'),(161,24,'open-tracking',1,0,0,'32'),(162,24,'rename',1,0,1,'32'),(163,24,'edit-properties',1,0,1,'32'),(164,25,'download',1,0,0,'4'),(165,25,'delete',1,0,0,'8'),(166,25,'edit-rights',1,0,1,'32'),(167,25,'open-tracking',1,0,0,'32'),(168,25,'rename',1,0,1,'32'),(169,25,'edit-properties',1,0,1,'32'),(170,26,'download',1,0,0,'4'),(171,26,'delete',1,0,0,'8'),(172,26,'edit-rights',1,0,1,'32'),(173,26,'open-tracking',1,0,0,'32'),(174,26,'rename',1,0,1,'32'),(175,26,'edit-properties',1,0,1,'32'),(176,27,'download',1,0,0,'4'),(177,27,'delete',1,0,0,'8'),(178,27,'edit-rights',1,0,1,'32'),(179,27,'open-tracking',1,0,0,'32'),(180,27,'rename',1,0,1,'32'),(181,27,'edit-properties',1,0,1,'32');
/*!40000 ALTER TABLE `claro_menu_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_message`
--

DROP TABLE IF EXISTS `claro_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `object` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `is_removed` tinyint(1) NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `sender_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receiver_string` varchar(16000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D6FE8DD8F624B39D` (`sender_id`),
  KEY `IDX_D6FE8DD8727ACA70` (`parent_id`),
  KEY `level_idx` (`lvl`),
  KEY `root_idx` (`root`),
  CONSTRAINT `FK_D6FE8DD8727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `claro_message` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_D6FE8DD8F624B39D` FOREIGN KEY (`sender_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_message`
--

LOCK TABLES `claro_message` WRITE;
/*!40000 ALTER TABLE `claro_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_ordered_tool`
--

DROP TABLE IF EXISTS `claro_ordered_tool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_ordered_tool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `tool_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_visible_in_desktop` tinyint(1) NOT NULL,
  `ordered_tool_type` int(11) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordered_tool_unique_tool_user_type` (`tool_id`,`user_id`,`ordered_tool_type`),
  UNIQUE KEY `ordered_tool_unique_tool_ws_type` (`tool_id`,`workspace_id`,`ordered_tool_type`),
  UNIQUE KEY `ordered_tool_unique_name_by_workspace` (`workspace_id`,`name`),
  KEY `IDX_6CF1320E82D40A1F` (`workspace_id`),
  KEY `IDX_6CF1320E8F7B22CC` (`tool_id`),
  KEY `IDX_6CF1320EA76ED395` (`user_id`),
  CONSTRAINT `FK_6CF1320E82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6CF1320E8F7B22CC` FOREIGN KEY (`tool_id`) REFERENCES `claro_tools` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6CF1320EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_ordered_tool`
--

LOCK TABLES `claro_ordered_tool` WRITE;
/*!40000 ALTER TABLE `claro_ordered_tool` DISABLE KEYS */;
INSERT INTO `claro_ordered_tool` VALUES (1,NULL,2,NULL,1,'parameters',1,0,0),(2,NULL,3,NULL,1,'resource_manager',1,0,0),(3,NULL,7,NULL,1,'my_contacts',1,0,0),(4,NULL,10,NULL,1,'message',1,0,0),(5,NULL,2,1,1,'parameters',1,0,0),(6,NULL,3,1,2,'resource_manager',1,0,0),(7,NULL,7,1,3,'my_contacts',1,0,0),(8,NULL,10,1,4,'message',1,0,0),(9,1,3,NULL,1,'resource_manager',0,0,0),(10,1,1,NULL,2,'home',0,0,0),(11,NULL,1,1,5,'home',0,0,0),(12,NULL,8,1,5,'agenda_',1,0,0),(13,NULL,9,1,6,'formalibre_reservation_agenda',1,0,0),(14,NULL,11,1,7,'formalibre_support_tool',1,0,0),(15,NULL,13,1,8,'formalibre_presence_tool',1,0,0),(16,NULL,14,1,9,'claroline_activity_tool',1,0,0),(17,NULL,15,1,10,'my-learning-objectives',1,0,0),(18,NULL,16,1,11,'my_portfolios',1,0,0),(19,NULL,19,1,12,'all_my_badges',1,0,0),(20,NULL,20,1,13,'ujm_questions',1,0,0),(21,NULL,21,1,14,'dashboard',1,0,0),(22,NULL,2,2,1,'parameters',1,0,0),(23,NULL,3,2,2,'resource_manager',1,0,0),(24,NULL,7,2,3,'my_contacts',1,0,0),(25,NULL,10,2,4,'message',1,0,0),(26,2,3,NULL,1,'resource_manager',0,0,0),(27,2,1,NULL,2,'home',0,0,0),(28,NULL,2,3,1,'parameters',1,0,0),(29,NULL,3,3,2,'resource_manager',1,0,0),(30,NULL,7,3,3,'my_contacts',1,0,0),(31,NULL,10,3,4,'message',1,0,0),(32,3,3,NULL,1,'resource_manager',0,0,0),(33,3,1,NULL,2,'home',0,0,0),(34,NULL,1,2,1,'home',0,1,0),(35,NULL,2,2,2,'parameters',0,1,0),(36,NULL,3,2,3,'resource_manager',0,1,0),(37,NULL,7,2,4,'my_contacts',0,1,0),(38,NULL,8,2,5,'agenda_',0,1,0),(39,NULL,9,2,6,'formalibre_reservation_agenda',0,1,0),(40,NULL,10,2,7,'message',0,1,0),(41,NULL,11,2,8,'formalibre_support_tool',0,1,0),(42,NULL,13,2,9,'formalibre_presence_tool',0,1,0),(43,NULL,14,2,10,'claroline_activity_tool',0,1,0),(44,NULL,15,2,11,'my-learning-objectives',0,1,0),(45,NULL,16,2,12,'my_portfolios',0,1,0),(46,NULL,19,2,13,'all_my_badges',0,1,0),(47,NULL,20,2,14,'ujm_questions',0,1,0),(48,NULL,21,2,15,'dashboard',0,1,0),(49,NULL,1,1,1,'home',0,1,0),(50,NULL,2,1,2,'parameters',0,1,0),(51,NULL,3,1,1,'resource_manager',1,1,0),(52,NULL,7,1,2,'my_contacts',0,1,0),(53,NULL,8,1,3,'agenda_',0,1,0),(54,NULL,9,1,4,'formalibre_reservation_agenda',0,1,0),(55,NULL,10,1,5,'message',0,1,0),(56,NULL,11,1,6,'formalibre_support_tool',1,1,0),(57,NULL,13,1,7,'formalibre_presence_tool',0,1,0),(58,NULL,14,1,8,'claroline_activity_tool',1,1,0),(59,NULL,15,1,9,'my-learning-objectives',0,1,0),(60,NULL,16,1,10,'my_portfolios',0,1,0),(61,NULL,19,1,11,'all_my_badges',0,1,0),(62,NULL,20,1,12,'ujm_questions',0,1,0),(63,NULL,21,1,13,'dashboard',0,1,0),(64,NULL,1,NULL,5,'home',0,0,0),(65,NULL,8,NULL,6,'agenda_',0,0,0),(66,NULL,9,NULL,7,'formalibre_reservation_agenda',0,0,0),(67,NULL,11,NULL,8,'formalibre_support_tool',0,0,0),(68,NULL,13,NULL,9,'formalibre_presence_tool',0,0,0),(69,NULL,14,NULL,10,'claroline_activity_tool',0,0,0),(70,NULL,15,NULL,11,'my-learning-objectives',0,0,0),(71,NULL,16,NULL,12,'my_portfolios',0,0,0),(72,NULL,19,NULL,13,'all_my_badges',0,0,0),(73,NULL,20,NULL,14,'ujm_questions',0,0,0),(74,NULL,21,NULL,15,'dashboard',0,0,0);
/*!40000 ALTER TABLE `claro_ordered_tool` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_panel_facet`
--

DROP TABLE IF EXISTS `claro_panel_facet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_panel_facet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facet_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `isDefaultCollapsed` tinyint(1) NOT NULL,
  `isEditable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DA3985FFC889F24` (`facet_id`),
  CONSTRAINT `FK_DA3985FFC889F24` FOREIGN KEY (`facet_id`) REFERENCES `claro_facet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_panel_facet`
--

LOCK TABLES `claro_panel_facet` WRITE;
/*!40000 ALTER TABLE `claro_panel_facet` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_panel_facet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_panel_facet_role`
--

DROP TABLE IF EXISTS `claro_panel_facet_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_panel_facet_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `canOpen` tinyint(1) NOT NULL,
  `canEdit` tinyint(1) NOT NULL,
  `panelFacet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A66BF654D60322AC` (`role_id`),
  KEY `IDX_A66BF654E99038C0` (`panelFacet_id`),
  CONSTRAINT `FK_A66BF654D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A66BF654E99038C0` FOREIGN KEY (`panelFacet_id`) REFERENCES `claro_panel_facet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_panel_facet_role`
--

LOCK TABLES `claro_panel_facet_role` WRITE;
/*!40000 ALTER TABLE `claro_panel_facet_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_panel_facet_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_pdf_generator`
--

DROP TABLE IF EXISTS `claro_pdf_generator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_pdf_generator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6F3552112B6FCFB2` (`guid`),
  UNIQUE KEY `UNIQ_6F355211B548B0F` (`path`),
  KEY `IDX_6F35521161220EA6` (`creator_id`),
  CONSTRAINT `FK_6F35521161220EA6` FOREIGN KEY (`creator_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_pdf_generator`
--

LOCK TABLES `claro_pdf_generator` WRITE;
/*!40000 ALTER TABLE `claro_pdf_generator` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_pdf_generator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_pending_friend`
--

DROP TABLE IF EXISTS `claro_pending_friend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_pending_friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_pending_friend`
--

LOCK TABLES `claro_pending_friend` WRITE;
/*!40000 ALTER TABLE `claro_pending_friend` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_pending_friend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_personal_workspace_resource_rights_management_access`
--

DROP TABLE IF EXISTS `claro_personal_workspace_resource_rights_management_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_personal_workspace_resource_rights_management_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `is_accessible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A3AE069AD60322AC` (`role_id`),
  CONSTRAINT `FK_A3AE069AD60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_personal_workspace_resource_rights_management_access`
--

LOCK TABLES `claro_personal_workspace_resource_rights_management_access` WRITE;
/*!40000 ALTER TABLE `claro_personal_workspace_resource_rights_management_access` DISABLE KEYS */;
INSERT INTO `claro_personal_workspace_resource_rights_management_access` VALUES (1,1,1);
/*!40000 ALTER TABLE `claro_personal_workspace_resource_rights_management_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_personnal_workspace_tool_config`
--

DROP TABLE IF EXISTS `claro_personnal_workspace_tool_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_personnal_workspace_tool_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `mask` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pws_unique_tool_config` (`tool_id`,`role_id`),
  KEY `IDX_7A4A6A64D60322AC` (`role_id`),
  KEY `IDX_7A4A6A648F7B22CC` (`tool_id`),
  CONSTRAINT `FK_7A4A6A648F7B22CC` FOREIGN KEY (`tool_id`) REFERENCES `claro_tools` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7A4A6A64D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_personnal_workspace_tool_config`
--

LOCK TABLES `claro_personnal_workspace_tool_config` WRITE;
/*!40000 ALTER TABLE `claro_personnal_workspace_tool_config` DISABLE KEYS */;
INSERT INTO `claro_personnal_workspace_tool_config` VALUES (1,1,1,3),(2,1,2,3),(3,1,3,3),(4,1,4,3),(5,1,5,3),(6,1,6,3),(7,1,7,3),(8,1,8,3),(9,1,9,3),(10,1,11,3),(11,1,12,3),(12,1,13,3),(13,1,14,3),(14,1,15,3),(15,1,16,3),(16,1,17,3),(17,1,18,3),(18,1,19,3),(19,1,20,3),(20,1,21,3);
/*!40000 ALTER TABLE `claro_personnal_workspace_tool_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_plugin`
--

DROP TABLE IF EXISTS `claro_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `has_options` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plugin_unique_name` (`vendor_name`,`short_name`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_plugin`
--

LOCK TABLES `claro_plugin` WRITE;
/*!40000 ALTER TABLE `claro_plugin` DISABLE KEYS */;
INSERT INTO `claro_plugin` VALUES (1,'Claroline','AgendaBundle',0),(2,'FormaLibre','ReservationBundle',0),(3,'Claroline','ImagePlayerBundle',0),(4,'Claroline','MessageBundle',0),(5,'Claroline','ForumBundle',0),(6,'Claroline','TagBundle',0),(7,'FormaLibre','SupportBundle',1),(8,'Claroline','RssReaderBundle',0),(9,'Icap','NotificationBundle',0),(10,'Claroline','SurveyBundle',0),(11,'Claroline','AnnouncementBundle',0),(12,'Claroline','LdapBundle',0),(13,'Claroline','ScormBundle',0),(14,'Claroline','PdfPlayerBundle',0),(15,'Claroline','CursusBundle',1),(16,'Claroline','TeamBundle',0),(17,'Claroline','PdfGeneratorBundle',0),(18,'FormaLibre','PresenceBundle',0),(19,'Claroline','VideoPlayerBundle',0),(20,'Claroline','ActivityToolBundle',0),(21,'Claroline','WebResourceBundle',0),(22,'Claroline','TextPlayerBundle',0),(23,'Innova','CollecticielBundle',0),(24,'HeVinci','FavouriteBundle',0),(25,'HeVinci','CompetencyBundle',0),(26,'HeVinci','UrlBundle',0),(27,'Icap','PortfolioBundle',0),(28,'Icap','BadgeBundle',0),(29,'Icap','BlogBundle',0),(30,'Icap','DropzoneBundle',0),(31,'Icap','SocialmediaBundle',0),(32,'Icap','WikiBundle',0),(33,'Icap','OAuthBundle',0),(34,'Icap','FormulaPluginBundle',0),(35,'Claroline','ResultBundle',0),(36,'Innova','PathBundle',0),(37,'Icap','WebsiteBundle',0),(38,'Innova','VideoRecorderBundle',1),(39,'Innova','AudioRecorderBundle',1),(40,'Innova','MediaResourceBundle',0),(41,'Claroline','FlashCardBundle',0),(42,'UJM','ExoBundle',0),(43,'Icap','LessonBundle',0),(44,'Claroline','ChatBundle',0),(45,'Claroline','DashboardBundle',0),(46,'Claroline','ClacoFormBundle',0),(47,'Claroline','RemoteUserSynchronizationBundle',0);
/*!40000 ALTER TABLE `claro_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_profile_property`
--

DROP TABLE IF EXISTS `claro_profile_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_profile_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `is_editable` tinyint(1) NOT NULL,
  `property` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C2B93182D60322AC` (`role_id`),
  CONSTRAINT `FK_C2B93182D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_profile_property`
--

LOCK TABLES `claro_profile_property` WRITE;
/*!40000 ALTER TABLE `claro_profile_property` DISABLE KEYS */;
INSERT INTO `claro_profile_property` VALUES (1,1,0,'username'),(2,2,0,'username'),(3,3,0,'username'),(4,5,0,'username'),(5,1,0,'firstName'),(6,2,0,'firstName'),(7,3,0,'firstName'),(8,5,0,'firstName'),(9,1,0,'lastName'),(10,2,0,'lastName'),(11,3,0,'lastName'),(12,5,0,'lastName'),(13,1,0,'administrativeCode'),(14,2,0,'administrativeCode'),(15,3,0,'administrativeCode'),(16,5,0,'administrativeCode'),(17,1,0,'email'),(18,2,0,'email'),(19,3,0,'email'),(20,5,0,'email'),(21,1,1,'phone'),(22,2,1,'phone'),(23,3,1,'phone'),(24,5,1,'phone'),(25,1,1,'picture'),(26,2,1,'picture'),(27,3,1,'picture'),(28,5,1,'picture'),(29,1,1,'description'),(30,2,1,'description'),(31,3,1,'description'),(32,5,1,'description'),(33,6,0,'username'),(34,6,0,'firstName'),(35,6,0,'lastName'),(36,6,0,'administrativeCode'),(37,6,0,'email'),(38,6,1,'phone'),(39,6,1,'picture'),(40,6,1,'description');
/*!40000 ALTER TABLE `claro_profile_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_region`
--

DROP TABLE IF EXISTS `claro_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_region`
--

LOCK TABLES `claro_region` WRITE;
/*!40000 ALTER TABLE `claro_region` DISABLE KEYS */;
INSERT INTO `claro_region` VALUES (1,'header'),(2,'left'),(3,'content'),(4,'right'),(5,'footer');
/*!40000 ALTER TABLE `claro_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_rel_workspace_tag`
--

DROP TABLE IF EXISTS `claro_rel_workspace_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_rel_workspace_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rel_workspace_tag_unique_combination` (`workspace_id`,`tag_id`),
  KEY `IDX_7883931082D40A1F` (`workspace_id`),
  KEY `IDX_78839310BAD26311` (`tag_id`),
  CONSTRAINT `FK_7883931082D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_78839310BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `claro_workspace_tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_rel_workspace_tag`
--

LOCK TABLES `claro_rel_workspace_tag` WRITE;
/*!40000 ALTER TABLE `claro_rel_workspace_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_rel_workspace_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_icon`
--

DROP TABLE IF EXISTS `claro_resource_icon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shortcut_id` int(11) DEFAULT NULL,
  `mimeType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_shortcut` tinyint(1) NOT NULL,
  `relative_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_478C586179F0D498` (`shortcut_id`),
  CONSTRAINT `FK_478C586179F0D498` FOREIGN KEY (`shortcut_id`) REFERENCES `claro_resource_icon` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_icon`
--

LOCK TABLES `claro_resource_icon` WRITE;
/*!40000 ALTER TABLE `claro_resource_icon` DISABLE KEYS */;
INSERT INTO `claro_resource_icon` VALUES (1,2,'custom/default',0,'bundles/clarolinecore/images/resources/icons/res_default.png'),(2,2,'custom/default',1,'uploads/thumbnails/2CC74522-5B4A-444E-9292-6367985DB152.png'),(3,4,'custom/activity',0,'bundles/clarolinecore/images/resources/icons/res_activity.png'),(4,4,'custom/activity',1,'uploads/thumbnails/1D241DE2-6E12-4BEA-8C19-B0A94994B557.png'),(5,6,'custom/file',0,'bundles/clarolinecore/images/resources/icons/res_file.png'),(6,6,'custom/file',1,'uploads/thumbnails/63CB2A2D-9ADD-430D-8B27-466966A4025F.png'),(7,8,'custom/directory',0,'bundles/clarolinecore/images/resources/icons/res_folder.png'),(8,8,'custom/directory',1,'uploads/thumbnails/7862005C-CE7D-4081-9DBF-67BB7EF7EBDD.png'),(9,10,'text/plain',0,'bundles/clarolinecore/images/resources/icons/res_text.png'),(10,10,'text/plain',1,'uploads/thumbnails/968BD6A6-683D-43ED-9E4E-8FDEC846A11F.png'),(11,12,'custom/text',0,'bundles/clarolinecore/images/resources/icons/res_text.png'),(12,12,'custom/text',1,'uploads/thumbnails/D7768B51-1889-45FD-B951-25072F0600C7.png'),(13,14,'image',0,'bundles/clarolinecore/images/resources/icons/res_jpeg.png'),(14,14,'image',1,'uploads/thumbnails/26F4BB19-0B01-4E7C-A62C-C235B0538442.png'),(15,16,'audio',0,'bundles/clarolinecore/images/resources/icons/res_audio.png'),(16,16,'audio',1,'uploads/thumbnails/C7AF3382-7236-4E82-ADEA-A0EFAC13CBA9.png'),(17,18,'video',0,'bundles/clarolinecore/images/resources/icons/res_avi.png'),(18,18,'video',1,'uploads/thumbnails/05CABCF1-7DA4-469C-B4D6-CD14466C1ABE.png'),(19,20,'image/bmp',0,'bundles/clarolinecore/images/resources/icons/res_bmp.png'),(20,20,'image/bmp',1,'uploads/thumbnails/BA1B8853-8FCF-49BD-915A-F37714B873C7.png'),(21,22,'image/x-windows-bmp',0,'bundles/clarolinecore/images/resources/icons/res_bmp.png'),(22,22,'image/x-windows-bmp',1,'uploads/thumbnails/0C86CC8A-9387-4B1D-80D4-DB2864384876.png'),(23,24,'image/jpeg',0,'bundles/clarolinecore/images/resources/icons/res_jpeg.png'),(24,24,'image/jpeg',1,'uploads/thumbnails/6FF156B9-3C71-4E66-A78A-1FDF7B62D86A.png'),(25,26,'image/pjpeg',0,'bundles/clarolinecore/images/resources/icons/res_jpeg.png'),(26,26,'image/pjpeg',1,'uploads/thumbnails/C4F9DD23-9981-4148-9671-102066644F97.png'),(27,28,'image/gif',0,'bundles/clarolinecore/images/resources/icons/res_gif.png'),(28,28,'image/gif',1,'uploads/thumbnails/5D8127FC-8098-4240-B358-743FACC95388.png'),(29,30,'image/tiff',0,'bundles/clarolinecore/images/resources/icons/res_tiff.png'),(30,30,'image/tiff',1,'uploads/thumbnails/E9BCC041-37D5-4DB0-AB24-45522165A0E0.png'),(31,32,'image/x-tiff',0,'bundles/clarolinecore/images/resources/icons/res_tiff.png'),(32,32,'image/x-tiff',1,'uploads/thumbnails/5DC03E44-AA34-40D9-861A-866994B275F9.png'),(33,34,'video/mp4',0,'bundles/clarolinecore/images/resources/icons/res_mp4.png'),(34,34,'video/mp4',1,'uploads/thumbnails/9ED0462C-5ABE-46A6-BF57-17CAB558A952.png'),(35,36,'video/mpeg',0,'bundles/clarolinecore/images/resources/icons/res_mpeg.png'),(36,36,'video/mpeg',1,'uploads/thumbnails/350FF091-D6C1-4BF1-A22B-C58037A7CB3C.png'),(37,38,'audio/mpeg',0,'bundles/clarolinecore/images/resources/icons/res_mpeg.png'),(38,38,'audio/mpeg',1,'uploads/thumbnails/8CFA5822-836D-4807-ACCC-41D35C8E7E0B.png'),(39,40,'audio/wav',0,'bundles/clarolinecore/images/resources/icons/res_wav.png'),(40,40,'audio/wav',1,'uploads/thumbnails/3C3CE64D-769A-47B8-A95B-09FDAD769FD3.png'),(41,42,'audio/x-wav',0,'bundles/clarolinecore/images/resources/icons/res_wav.png'),(42,42,'audio/x-wav',1,'uploads/thumbnails/9B177659-BE39-4D3C-A5B3-A9DB5E5467C9.png'),(43,44,'audio/mpeg3',0,'bundles/clarolinecore/images/resources/icons/res_mp3.png'),(44,44,'audio/mpeg3',1,'uploads/thumbnails/279375E1-5E99-4AAC-9B86-5C22614C815B.png'),(45,46,'audio/x-mpeg3',0,'bundles/clarolinecore/images/resources/icons/res_mp3.png'),(46,46,'audio/x-mpeg3',1,'uploads/thumbnails/573E1472-92D7-46F9-AB6D-FC385660ED17.png'),(47,48,'audio/mp3',0,'bundles/clarolinecore/images/resources/icons/res_mp3.png'),(48,48,'audio/mp3',1,'uploads/thumbnails/467224AC-015F-469F-9964-17724FC7C442.png'),(49,50,'audio/mpeg',0,'bundles/clarolinecore/images/resources/icons/res_mp3.png'),(50,50,'audio/mpeg',1,'uploads/thumbnails/8EB822E8-6F06-4789-B99E-2ACA28F1642A.png'),(51,52,'text/html',0,'bundles/clarolinecore/images/resources/icons/res_html.png'),(52,52,'text/html',1,'uploads/thumbnails/E36707AC-BA3D-45B4-B30C-4FC287D8C643.png'),(53,54,'application/excel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(54,54,'application/excel',1,'uploads/thumbnails/323ABCDC-9CF5-4D60-B676-DBC54CF44897.png'),(55,56,'application/vnd.ms-excel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(56,56,'application/vnd.ms-excel',1,'uploads/thumbnails/477ED3DE-7CC8-4996-90F3-E8FF6BFA8078.png'),(57,58,'application/msexcel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(58,58,'application/msexcel',1,'uploads/thumbnails/1878C8A9-9A17-49BC-A53F-B28B25BBEE98.png'),(59,60,'application/x-msexcel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(60,60,'application/x-msexcel',1,'uploads/thumbnails/06940C16-3ABD-4565-8350-0E99F0BA51B0.png'),(61,62,'application/x-ms-excel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(62,62,'application/x-ms-excel',1,'uploads/thumbnails/8C00F704-0C3D-44AE-96CE-559038081267.png'),(63,64,'application/x-excel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(64,64,'application/x-excel',1,'uploads/thumbnails/60BC4547-75E5-4ED0-BA47-9782D26FD80A.png'),(65,66,'application/xls',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(66,66,'application/xls',1,'uploads/thumbnails/9C7D22F8-37B6-41F8-ADB0-FDB572E1FC09.png'),(67,68,'application/x-xls',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(68,68,'application/x-xls',1,'uploads/thumbnails/74FB8905-3E1F-4E5E-8021-42639A37CE36.png'),(69,70,'application/x-dos_ms_excel',0,'bundles/clarolinecore/images/resources/icons/res_xls.png'),(70,70,'application/x-dos_ms_excel',1,'uploads/thumbnails/8F8B76DF-7F9C-4343-9F36-2DD54F26C96B.png'),(71,72,'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',0,'bundles/clarolinecore/images/resources/icons/res_xlsx.png'),(72,72,'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',1,'uploads/thumbnails/B58A0FCE-F2CC-4893-AF56-AD544C702C32.png'),(73,74,'application/vnd.oasis.opendocument.text ',0,'bundles/clarolinecore/images/resources/icons/res_odt.png'),(74,74,'application/vnd.oasis.opendocument.text ',1,'uploads/thumbnails/954F1E59-B9F5-4B86-84FE-1EB619FCE079.png'),(75,76,'application/mspowerpoint',0,'bundles/clarolinecore/images/resources/icons/res_ppt.png'),(76,76,'application/mspowerpoint',1,'uploads/thumbnails/FD4E4866-E9E4-4028-8669-0F1E9233CD39.png'),(77,78,'application/powerpoint',0,'bundles/clarolinecore/images/resources/icons/res_ppt.png'),(78,78,'application/powerpoint',1,'uploads/thumbnails/5E5E8D61-8BFE-4E1E-B9C2-F609A7392ABC.png'),(79,80,'application/vnd.ms-powerpoint',0,'bundles/clarolinecore/images/resources/icons/res_ppt.png'),(80,80,'application/vnd.ms-powerpoint',1,'uploads/thumbnails/7C4833E7-6B63-4F63-8408-94DE961FD881.png'),(81,82,'application/application/x-mspowerpoint',0,'bundles/clarolinecore/images/resources/icons/res_ppt.png'),(82,82,'application/application/x-mspowerpoint',1,'uploads/thumbnails/06DDB1B6-B581-4117-88F8-902AB13FAE17.png'),(83,84,'application/vnd.openxmlformats-officedocument.presentationml.presentation',0,'bundles/clarolinecore/images/resources/icons/res_pptx.png'),(84,84,'application/vnd.openxmlformats-officedocument.presentationml.presentation',1,'uploads/thumbnails/262FA9F1-654B-492D-9127-E959838ECACD.png'),(85,86,'application/msword',0,'bundles/clarolinecore/images/resources/icons/res_doc.png'),(86,86,'application/msword',1,'uploads/thumbnails/7575023A-6A43-4FEC-8337-3D3699FB5F5A.png'),(87,88,'application/vnd.openxmlformats-officedocument.wordprocessingml.document',0,'bundles/clarolinecore/images/resources/icons/res_docx.png'),(88,88,'application/vnd.openxmlformats-officedocument.wordprocessingml.document',1,'uploads/thumbnails/1A2B5D47-E7C6-4968-9384-C3855B3F58B8.png'),(89,90,'application/pdf',0,'bundles/clarolinecore/images/resources/icons/res_pdf.png'),(90,90,'application/pdf',1,'uploads/thumbnails/3737A071-D3C1-4930-88F4-169F4C08F544.png'),(91,92,'application/zip',0,'bundles/clarolinecore/images/resources/icons/res_zip.png'),(92,92,'application/zip',1,'uploads/thumbnails/2C4E434E-8461-4F3E-BEA0-9BEC9E82511A.png'),(93,94,'application/x-rar-compressed',0,'bundles/clarolinecore/images/resources/icons/res_rar.png'),(94,94,'application/x-rar-compressed',1,'uploads/thumbnails/058602C9-4218-4332-BA3C-11CD1A431533.png'),(95,96,'application/x-gtar',0,'bundles/clarolinecore/images/resources/icons/res_archive.png'),(96,96,'application/x-gtar',1,'uploads/thumbnails/10C7F41A-D21A-48B4-85FE-5E25329DD04E.png'),(97,98,'application/x-7z-compressed',0,'bundles/clarolinecore/images/resources/icons/res_archive.png'),(98,98,'application/x-7z-compressed',1,'uploads/thumbnails/75FD07BB-D3FD-4013-9FAC-54884CF6C88D.png'),(99,100,'application/x-compressed',0,'bundles/clarolinecore/images/resources/icons/res_gz.png'),(100,100,'application/x-compressed',1,'uploads/thumbnails/D2B4BD10-5A2C-491C-81E3-08DBD3F756D0.png'),(101,102,'application/x-gzip',0,'bundles/clarolinecore/images/resources/icons/res_gz.png'),(102,102,'application/x-gzip',1,'uploads/thumbnails/53FE9148-34F2-4D56-A9E5-E2A7FFD08516.png'),(103,104,'multipart/x-gzip',0,'bundles/clarolinecore/images/resources/icons/res_gz.png'),(104,104,'multipart/x-gzip',1,'uploads/thumbnails/FCD90C81-1B8C-4A25-A9CA-B7118AD81907.png'),(105,106,'application/x-tar',0,'bundles/clarolinecore/images/resources/icons/res_tar.png'),(106,106,'application/x-tar',1,'uploads/thumbnails/B8D7C00A-DBF8-40E5-95A0-6736E9E580D8.png'),(107,108,'application/vnd.oasis.opendocument.presentation',0,'bundles/clarolinecore/images/resources/icons/res_odp.png'),(108,108,'application/vnd.oasis.opendocument.presentation',1,'uploads/thumbnails/41BA9B5B-80A1-46E6-B06F-9F4A378A04CD.png'),(109,110,'application/vnd.oasis.opendocument.spreadsheet',0,'bundles/clarolinecore/images/resources/icons/res_ods.png'),(110,110,'application/vnd.oasis.opendocument.spreadsheet',1,'uploads/thumbnails/72E00B2E-85D9-4F25-81BF-B33FD45BC011.png'),(111,112,'application/rtf',0,'bundles/clarolinecore/images/resources/icons/res_rtf.png'),(112,112,'application/rtf',1,'uploads/thumbnails/B0E97B1B-A8B3-47C7-BAD1-DDAC6569BFB8.png'),(113,114,'application/x-rtf',0,'bundles/clarolinecore/images/resources/icons/res_rtf.png'),(114,114,'application/x-rtf',1,'uploads/thumbnails/B9276441-ECD9-4204-979C-47F43D9654D9.png'),(115,116,'text/richtext',0,'bundles/clarolinecore/images/resources/icons/res_rtf.png'),(116,116,'text/richtext',1,'uploads/thumbnails/1D49FBD4-383C-4344-8ADB-2422EF332F1B.png'),(117,118,'custom/claroline_forum',0,'bundles/clarolineforum/images/icons/res_forum.png'),(118,118,'custom/claroline_forum',1,'uploads/thumbnails/028897E9-D125-4D34-BAC8-9F119B0E7BE2.png'),(119,120,'custom/claroline_survey',0,'bundles/clarolinesurvey/images/icons/res_survey.png'),(120,120,'custom/claroline_survey',1,'uploads/thumbnails/E5309D77-2A27-4AF2-AD82-487C65AD1217.png'),(121,122,'custom/claroline_announcement_aggregate',0,'bundles/clarolineannouncement/images/icons/res_announcement.png'),(122,122,'custom/claroline_announcement_aggregate',1,'uploads/thumbnails/629023CA-ED75-4B6C-8065-85EEA7C7A062.png'),(123,124,'custom/claroline_scorm_12',0,'bundles/clarolinescorm/images/icons/scorm_12_icon.png'),(124,124,'custom/claroline_scorm_12',1,'uploads/thumbnails/165FCB85-EB63-40CB-B9D9-15C88B3E7504.png'),(125,126,'custom/claroline_scorm_2004',0,'bundles/clarolinescorm/images/icons/scorm_2004_icon.png'),(126,126,'custom/claroline_scorm_2004',1,'uploads/thumbnails/9480CC30-0229-4C63-8D9D-E3A4E030CF5F.png'),(127,128,'custom/claroline_web_resource',0,'bundles/clarolinewebresource/images/icons/res_web.png'),(128,128,'custom/claroline_web_resource',1,'uploads/thumbnails/BA0C04BD-F10E-4513-8128-2BC5F64E232D.png'),(129,130,'custom/innova_collecticiel',0,'bundles/innovacollecticiel/images/icons/icap_eval_icon.png'),(130,130,'custom/innova_collecticiel',1,'uploads/thumbnails/CC3F2797-4654-46A3-B456-5ED29D58B55C.png'),(131,132,'custom/hevinci_url',0,'bundles/hevinciurl/images/icons/res_url.png'),(132,132,'custom/hevinci_url',1,'uploads/thumbnails/FA43808C-5614-4EE8-BF4E-7548120A36BE.png'),(133,134,'custom/icap_blog',0,'bundles/icapblog/images/icons/icap_blog_icon.png'),(134,134,'custom/icap_blog',1,'uploads/thumbnails/C6FA5940-C4D3-40DF-A909-EB61C3636BAF.png'),(135,136,'custom/icap_dropzone',0,'bundles/icapdropzone/images/icons/icap_eval_icon.png'),(136,136,'custom/icap_dropzone',1,'uploads/thumbnails/76F20879-7FBC-479A-85F9-5FDF484817A6.png'),(137,138,'custom/icap_wiki',0,'bundles/icapwiki/images/icons/icap_wiki_icon.png'),(138,138,'custom/icap_wiki',1,'uploads/thumbnails/DB874B67-B968-4AD8-9E6A-18C3CF447B03.png'),(139,140,'custom/claroline_result',0,'bundles/clarolinecore/images/resources/icons/res_default.png'),(140,140,'custom/claroline_result',1,'uploads/thumbnails/3A08C9DA-DE49-475F-9971-74729471BF14.png'),(141,142,'custom/innova_path',0,'bundles/innovapath/images/icons/res_file.png'),(142,142,'custom/innova_path',1,'uploads/thumbnails/A96A5707-41F3-4137-B03E-3661BF4FB11A.png'),(143,144,'custom/icap_website',0,'bundles/icapwebsite/images/icons/icap_website_icon.png'),(144,144,'custom/icap_website',1,'uploads/thumbnails/E59F3657-3CE7-4E03-95C4-BA7C8F783D88.png'),(145,146,'custom/innova_video_recorder',0,'bundles/clarolinecore/images/resources/icons/res_default.png'),(146,146,'custom/innova_video_recorder',1,'uploads/thumbnails/BCC86EA6-5CD3-4572-B611-0111BACE9E86.png'),(147,148,'custom/innova_audio_recorder',0,'bundles/clarolinecore/images/resources/icons/res_default.png'),(148,148,'custom/innova_audio_recorder',1,'uploads/thumbnails/1CABA3FA-AF1E-48BF-92A2-BB36C058DF13.png'),(149,150,'custom/innova_media_resource',0,'bundles/innovamediaresource/images/icons/res_file.png'),(150,150,'custom/innova_media_resource',1,'uploads/thumbnails/8CB7FAEF-2B0C-4821-9183-E44C483ECD73.png'),(151,152,'custom/claroline_flashcard',0,'bundles/clarolinecore/images/resources/icons/res_default.png'),(152,152,'custom/claroline_flashcard',1,'uploads/thumbnails/818121F7-3A12-4F1C-9315-F320BEB15575.png'),(153,154,'custom/ujm_exercise',0,'bundles/ujmexo/images/icons/res_exo.png'),(154,154,'custom/ujm_exercise',1,'uploads/thumbnails/C223BCBB-4D65-4775-AB1B-EFB61FEBD49C.png'),(155,156,'custom/icap_lesson',0,'bundles/icaplesson/images/icons/icap_lesson_icon.png'),(156,156,'custom/icap_lesson',1,'uploads/thumbnails/8CC0C09E-D7ED-4747-8B70-67D3D1E62BD6.png'),(157,158,'custom/claroline_chat_room',0,'bundles/clarolinechat/images/icons/IC-Chat.png'),(158,158,'custom/claroline_chat_room',1,'uploads/thumbnails/BB34E393-C859-4D06-880A-2AAC494CB426.png'),(159,160,'custom/claroline_claco_form',0,'bundles/clarolineclacoform/images/icons/claco_form_icon.png'),(160,160,'custom/claroline_claco_form',1,'uploads/thumbnails/D758D27B-2966-45FE-984B-BEF23D31DA14.png');
/*!40000 ALTER TABLE `claro_resource_icon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_mask_decoder`
--

DROP TABLE IF EXISTS `claro_resource_mask_decoder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_mask_decoder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39D93F4298EC6B7B` (`resource_type_id`),
  CONSTRAINT `FK_39D93F4298EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_mask_decoder`
--

LOCK TABLES `claro_resource_mask_decoder` WRITE;
/*!40000 ALTER TABLE `claro_resource_mask_decoder` DISABLE KEYS */;
INSERT INTO `claro_resource_mask_decoder` VALUES (1,1,1,'open'),(2,1,2,'copy'),(3,1,4,'export'),(4,1,8,'delete'),(5,1,16,'edit'),(6,1,32,'administrate'),(7,2,1,'open'),(8,2,2,'copy'),(9,2,4,'export'),(10,2,8,'delete'),(11,2,16,'edit'),(12,2,32,'administrate'),(13,3,1,'open'),(14,3,2,'copy'),(15,3,4,'export'),(16,3,8,'delete'),(17,3,16,'edit'),(18,3,32,'administrate'),(19,4,1,'open'),(20,4,2,'copy'),(21,4,4,'export'),(22,4,8,'delete'),(23,4,16,'edit'),(24,4,32,'administrate'),(25,5,1,'open'),(26,5,2,'copy'),(27,5,4,'export'),(28,5,8,'delete'),(29,5,16,'edit'),(30,5,32,'administrate'),(31,5,1024,'compose'),(32,6,1,'open'),(33,6,2,'copy'),(34,6,4,'export'),(35,6,8,'delete'),(36,6,16,'edit'),(37,6,32,'administrate'),(38,6,64,'post'),(39,6,128,'moderate'),(40,7,1,'open'),(41,7,2,'copy'),(42,7,4,'export'),(43,7,8,'delete'),(44,7,16,'edit'),(45,7,32,'administrate'),(46,8,1,'open'),(47,8,2,'copy'),(48,8,4,'export'),(49,8,8,'delete'),(50,8,16,'edit'),(51,8,32,'administrate'),(52,9,1,'open'),(53,9,2,'copy'),(54,9,4,'export'),(55,9,8,'delete'),(56,9,16,'edit'),(57,9,32,'administrate'),(58,10,1,'open'),(59,10,2,'copy'),(60,10,4,'export'),(61,10,8,'delete'),(62,10,16,'edit'),(63,10,32,'administrate'),(64,11,1,'open'),(65,11,2,'copy'),(66,11,4,'export'),(67,11,8,'delete'),(68,11,16,'edit'),(69,11,32,'administrate'),(70,12,1,'open'),(71,12,2,'copy'),(72,12,4,'export'),(73,12,8,'delete'),(74,12,16,'edit'),(75,12,32,'administrate'),(76,13,1,'open'),(77,13,2,'copy'),(78,13,4,'export'),(79,13,8,'delete'),(80,13,16,'edit'),(81,13,32,'administrate'),(82,14,1,'open'),(83,14,2,'copy'),(84,14,4,'export'),(85,14,8,'delete'),(86,14,16,'edit'),(87,14,32,'administrate'),(88,14,64,'post'),(89,15,1,'open'),(90,15,2,'copy'),(91,15,4,'export'),(92,15,8,'delete'),(93,15,16,'edit'),(94,15,32,'administrate'),(95,16,1,'open'),(96,16,2,'copy'),(97,16,4,'export'),(98,16,8,'delete'),(99,16,16,'edit'),(100,16,32,'administrate'),(101,17,1,'open'),(102,17,2,'copy'),(103,17,4,'export'),(104,17,8,'delete'),(105,17,16,'edit'),(106,17,32,'administrate'),(107,18,1,'open'),(108,18,2,'copy'),(109,18,4,'export'),(110,18,8,'delete'),(111,18,16,'edit'),(112,18,32,'administrate'),(113,18,64,'path_administrate'),(114,18,128,'manageresults'),(115,19,1,'open'),(116,19,2,'copy'),(117,19,4,'export'),(118,19,8,'delete'),(119,19,16,'edit'),(120,19,32,'administrate'),(121,20,1,'open'),(122,20,2,'copy'),(123,20,4,'export'),(124,20,8,'delete'),(125,20,16,'edit'),(126,20,32,'administrate'),(127,21,1,'open'),(128,21,2,'copy'),(129,21,4,'export'),(130,21,8,'delete'),(131,21,16,'edit'),(132,21,32,'administrate'),(133,22,1,'open'),(134,22,2,'copy'),(135,22,4,'export'),(136,22,8,'delete'),(137,22,16,'edit'),(138,22,32,'administrate'),(139,23,1,'open'),(140,23,2,'copy'),(141,23,4,'export'),(142,23,8,'delete'),(143,23,16,'edit'),(144,23,32,'administrate'),(145,24,1,'open'),(146,24,2,'copy'),(147,24,4,'export'),(148,24,8,'delete'),(149,24,16,'edit'),(150,24,32,'administrate'),(151,25,1,'open'),(152,25,2,'copy'),(153,25,4,'export'),(154,25,8,'delete'),(155,25,16,'edit'),(156,25,32,'administrate'),(157,26,1,'open'),(158,26,2,'copy'),(159,26,4,'export'),(160,26,8,'delete'),(161,26,16,'edit'),(162,26,32,'administrate'),(163,27,1,'open'),(164,27,2,'copy'),(165,27,4,'export'),(166,27,8,'delete'),(167,27,16,'edit'),(168,27,32,'administrate');
/*!40000 ALTER TABLE `claro_resource_mask_decoder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_node`
--

DROP TABLE IF EXISTS `claro_resource_node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `icon_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lvl` int(11) DEFAULT NULL,
  `path` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `accessible_from` datetime DEFAULT NULL,
  `accessible_until` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_to_portal` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_A76799FF98EC6B7B` (`resource_type_id`),
  KEY `IDX_A76799FF61220EA6` (`creator_id`),
  KEY `IDX_A76799FF54B9D732` (`icon_id`),
  KEY `IDX_A76799FF727ACA70` (`parent_id`),
  KEY `IDX_A76799FF82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_A76799FF54B9D732` FOREIGN KEY (`icon_id`) REFERENCES `claro_resource_icon` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_A76799FF61220EA6` FOREIGN KEY (`creator_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A76799FF727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A76799FF82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A76799FF98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `claro_resource_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_node`
--

LOCK TABLES `claro_resource_node` WRITE;
/*!40000 ALTER TABLE `claro_resource_node` DISABLE KEYS */;
INSERT INTO `claro_resource_node` VALUES (1,2,1,7,NULL,1,NULL,'2017-05-18 23:47:06','2017-05-18 23:47:06','Espace personnel - admin',1,'Espace personnel - admin-1`',NULL,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'CDC2A502-1F6B-4A05-8386-4D72267827FB',0),(2,2,1,7,1,1,NULL,'2017-05-18 23:47:06','2017-05-18 23:47:06','Mes documents publics',2,'Espace personnel - admin-1`Mes documents publics-2`',1,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'57E4B943-21EE-4D07-A04F-699A233F3C56',0),(3,2,2,7,NULL,2,NULL,'2017-06-15 14:22:35','2017-06-15 14:35:47','Espace personnelCrazyboy',1,'Espace personnelCrazyboy-3`',NULL,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'0C4E1EB3-667F-4D4A-A317-D67601C57348',0),(4,2,2,7,3,2,NULL,'2017-06-15 14:22:35','2017-06-15 14:22:36','Mes documents publics',2,'Espace personnelCrazyboy-3`Mes documents publics-4`',1,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'16DEFC30-C062-43C4-9E17-7E1862EF5806',0),(5,2,3,7,NULL,3,NULL,'2017-06-15 14:30:14','2017-06-15 14:30:14','Espace personnel - aurelie.favier',1,'Espace personnel - aurelie.favier-5`',NULL,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'04687CB7-D756-4CC8-8D47-9D30400D9294',0),(6,2,3,7,5,3,NULL,'2017-06-15 14:30:14','2017-06-15 14:30:14','Mes documents publics',2,'Espace personnel - aurelie.favier-5`Mes documents publics-6`',1,'custom/directory','Claroline\\CoreBundle\\Entity\\Resource\\Directory',NULL,NULL,1,NULL,1,'6E38516E-47B3-4200-B18B-BCD7B9701783',0),(7,1,1,1,NULL,NULL,NULL,'2017-06-28 09:40:35','2017-06-28 09:40:35','SuitesArithmetiques_Graphique.ggb',1,'SuitesArithmetiques_Graphique.ggb-7`',NULL,'application/vnd.geogebra.file','Claroline\\CoreBundle\\Entity\\Resource\\File',NULL,NULL,1,NULL,1,'5899CC58-92C3-43C5-9C50-72A1FB199F07',0),(8,5,1,3,2,1,NULL,'2017-06-28 09:40:39','2017-06-28 09:40:39','Suites arithmétiques avec Geogebra',3,'Espace personnel - admin-1`Mes documents publics-2`Suites arithmétiques avec Geogebra-8`',1,'custom/activity','Claroline\\CoreBundle\\Entity\\Resource\\Activity',NULL,NULL,1,NULL,1,'269A3013-8DE3-4133-B364-06D982125D47',0),(9,1,1,1,NULL,NULL,NULL,'2017-06-28 09:58:29','2017-06-28 09:58:29','SuitesArithmetiques_Graphique.ggb',1,'SuitesArithmetiques_Graphique.ggb-9`',NULL,'application/vnd.geogebra.file','Claroline\\CoreBundle\\Entity\\Resource\\File',NULL,NULL,1,NULL,1,'0E844D31-D39E-4C81-90E1-8838F9F12711',0),(10,1,3,89,NULL,NULL,NULL,'2017-06-29 09:29:41','2017-06-29 09:29:41','2nde_G4_S3_PPI.pdf',1,'2nde_G4_S3_PPI.pdf-10`',NULL,'application/pdf','Claroline\\CoreBundle\\Entity\\Resource\\File',NULL,NULL,1,NULL,1,'B7E3FE6F-0E62-4F5F-975B-4469C8045528',0),(11,5,3,3,6,3,NULL,'2017-06-29 09:30:32','2017-06-29 09:30:32','PPI Vecteurs',3,'Espace personnel - aurelie.favier-5`Mes documents publics-6`PPI Vecteurs-11`',1,'custom/activity','Claroline\\CoreBundle\\Entity\\Resource\\Activity',NULL,NULL,1,NULL,1,'B9763C84-6460-4FFC-8FF5-70A9AF5734A0',0);
/*!40000 ALTER TABLE `claro_resource_node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_rights`
--

DROP TABLE IF EXISTS `claro_resource_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `mask` int(11) NOT NULL,
  `resourceNode_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resource_rights_unique_resource_role` (`resourceNode_id`,`role_id`),
  KEY `IDX_3848F483D60322AC` (`role_id`),
  KEY `IDX_3848F483B87FAB32` (`resourceNode_id`),
  KEY `mask_idx` (`mask`),
  CONSTRAINT `FK_3848F483B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3848F483D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_rights`
--

LOCK TABLES `claro_resource_rights` WRITE;
/*!40000 ALTER TABLE `claro_resource_rights` DISABLE KEYS */;
INSERT INTO `claro_resource_rights` VALUES (1,4,0,1),(2,1,0,1),(3,8,5,1),(4,4,5,2),(5,1,0,2),(6,4,0,3),(7,1,0,3),(8,11,5,3),(9,4,5,4),(10,1,0,4),(11,4,0,5),(12,1,0,5),(13,14,5,5),(14,4,5,6),(15,1,0,6),(16,4,5,7),(17,1,0,7),(18,1,0,8),(19,4,5,8),(20,4,5,9),(21,1,0,9),(22,4,5,10),(23,1,0,10),(24,1,0,11),(25,4,5,11);
/*!40000 ALTER TABLE `claro_resource_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_shortcut`
--

DROP TABLE IF EXISTS `claro_resource_shortcut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_shortcut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target_id` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5E7F4AB8B87FAB32` (`resourceNode_id`),
  KEY `IDX_5E7F4AB8158E0B66` (`target_id`),
  CONSTRAINT `FK_5E7F4AB8158E0B66` FOREIGN KEY (`target_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5E7F4AB8B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_shortcut`
--

LOCK TABLES `claro_resource_shortcut` WRITE;
/*!40000 ALTER TABLE `claro_resource_shortcut` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_resource_shortcut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resource_type`
--

DROP TABLE IF EXISTS `claro_resource_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resource_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_exportable` tinyint(1) NOT NULL,
  `defaultMask` int(11) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AEC626935E237E06` (`name`),
  KEY `IDX_AEC62693EC942BCF` (`plugin_id`),
  CONSTRAINT `FK_AEC62693EC942BCF` FOREIGN KEY (`plugin_id`) REFERENCES `claro_plugin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resource_type`
--

LOCK TABLES `claro_resource_type` WRITE;
/*!40000 ALTER TABLE `claro_resource_type` DISABLE KEYS */;
INSERT INTO `claro_resource_type` VALUES (1,NULL,'file',1,1,1),(2,NULL,'directory',1,1,1),(3,NULL,'text',1,1,1),(4,NULL,'resource_shortcut',0,1,1),(5,NULL,'activity',1,1,1),(6,5,'claroline_forum',1,65,1),(7,10,'claroline_survey',0,1,1),(8,11,'claroline_announcement_aggregate',0,1,1),(9,13,'claroline_scorm_12',0,1,1),(10,13,'claroline_scorm_2004',0,1,1),(11,21,'claroline_web_resource',0,1,1),(12,23,'innova_collecticiel',1,1,1),(13,26,'hevinci_url',0,1,1),(14,29,'icap_blog',0,1,1),(15,30,'icap_dropzone',0,1,1),(16,32,'icap_wiki',0,1,1),(17,35,'claroline_result',0,1,1),(18,36,'innova_path',1,1,1),(19,37,'icap_website',0,1,1),(20,38,'innova_video_recorder',0,1,1),(21,39,'innova_audio_recorder',0,1,1),(22,40,'innova_media_resource',0,1,1),(23,41,'claroline_flashcard',0,1,1),(24,42,'ujm_exercise',0,1,1),(25,43,'icap_lesson',0,1,1),(26,44,'claroline_chat_room',0,1,0),(27,46,'claroline_claco_form',0,1,1);
/*!40000 ALTER TABLE `claro_resource_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_resources_widget_config`
--

DROP TABLE IF EXISTS `claro_resources_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_resources_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB15C56DAB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_CB15C56DAB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_resources_widget_config`
--

LOCK TABLES `claro_resources_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_resources_widget_config` DISABLE KEYS */;
INSERT INTO `claro_resources_widget_config` VALUES (1,'{\"mode\":0,\"tags\":[\"2nde vecteurs\"]}',3);
/*!40000 ALTER TABLE `claro_resources_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_result`
--

DROP TABLE IF EXISTS `claro_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `total` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E059B38CB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_E059B38CB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_result`
--

LOCK TABLES `claro_result` WRITE;
/*!40000 ALTER TABLE `claro_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_result_mark`
--

DROP TABLE IF EXISTS `claro_result_mark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_result_mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `result_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7D93D85EA76ED395` (`user_id`),
  KEY `IDX_7D93D85E7A7B643` (`result_id`),
  CONSTRAINT `FK_7D93D85E7A7B643` FOREIGN KEY (`result_id`) REFERENCES `claro_result` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7D93D85EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_result_mark`
--

LOCK TABLES `claro_result_mark` WRITE;
/*!40000 ALTER TABLE `claro_result_mark` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_result_mark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_role`
--

DROP TABLE IF EXISTS `claro_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `translation_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_read_only` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL,
  `maxUsers` int(11) DEFAULT NULL,
  `personal_workspace_creation_enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_317774715E237E06` (`name`),
  KEY `IDX_3177747182D40A1F` (`workspace_id`),
  CONSTRAINT `FK_3177747182D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_role`
--

LOCK TABLES `claro_role` WRITE;
/*!40000 ALTER TABLE `claro_role` DISABLE KEYS */;
INSERT INTO `claro_role` VALUES (1,NULL,'ROLE_USER','user',1,1,NULL,1),(2,NULL,'ROLE_WS_CREATOR','ws_creator',1,1,NULL,1),(3,NULL,'ROLE_ADMIN','admin',1,1,NULL,1),(4,NULL,'ROLE_ANONYMOUS','anonymous',1,1,NULL,1),(5,NULL,'ROLE_HOME_MANAGER','home_manager',1,1,NULL,1),(6,NULL,'ROLE_COMPETENCY_MANAGER','competency_manager',1,1,NULL,1),(7,NULL,'ROLE_USER_ADMIN','admin',1,4,NULL,0),(8,1,'ROLE_WS_COLLABORATOR_217B39B6-C9B5-43C9-BADB-1B32C39C0E86','collaborator',0,2,NULL,0),(9,1,'ROLE_WS_MANAGER_217B39B6-C9B5-43C9-BADB-1B32C39C0E86','manager',1,2,NULL,0),(10,NULL,'ROLE_USER_CRAZYBOY','Crazyboy',1,4,NULL,0),(11,2,'ROLE_WS_COLLABORATOR_359FD747-5C7E-4257-BFF1-7BBEC2C32FCA','collaborator',0,2,NULL,0),(12,2,'ROLE_WS_MANAGER_359FD747-5C7E-4257-BFF1-7BBEC2C32FCA','manager',1,2,NULL,0),(13,NULL,'ROLE_USER_AURELIE.FAVIER','aurelie.favier',1,4,NULL,0),(14,3,'ROLE_WS_COLLABORATOR_2EE264B3-84BD-4160-B809-7052E64B038E','collaborator',0,2,NULL,0),(15,3,'ROLE_WS_MANAGER_2EE264B3-84BD-4160-B809-7052E64B038E','manager',1,2,NULL,0);
/*!40000 ALTER TABLE `claro_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_role_options`
--

DROP TABLE IF EXISTS `claro_role_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_role_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_56C6D283D60322AC` (`role_id`),
  CONSTRAINT `FK_56C6D283D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_role_options`
--

LOCK TABLES `claro_role_options` WRITE;
/*!40000 ALTER TABLE `claro_role_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_role_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_rssreader_configuration`
--

DROP TABLE IF EXISTS `claro_rssreader_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_rssreader_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D6D1C54AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_8D6D1C54AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_rssreader_configuration`
--

LOCK TABLES `claro_rssreader_configuration` WRITE;
/*!40000 ALTER TABLE `claro_rssreader_configuration` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_rssreader_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_12_resource`
--

DROP TABLE IF EXISTS `claro_scorm_12_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_12_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `hide_top_bar` tinyint(1) NOT NULL DEFAULT '0',
  `exit_mode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DB7E0F7CB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_DB7E0F7CB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_12_resource`
--

LOCK TABLES `claro_scorm_12_resource` WRITE;
/*!40000 ALTER TABLE `claro_scorm_12_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_12_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_12_sco`
--

DROP TABLE IF EXISTS `claro_scorm_12_sco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_12_sco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scorm_resource_id` int(11) NOT NULL,
  `sco_parent_id` int(11) DEFAULT NULL,
  `entry_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scorm_identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `parameters` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prerequisites` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `max_time_allowed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_limit_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `launch_data` varchar(4096) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mastery_score` int(11) DEFAULT NULL,
  `is_block` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F900C289167AFF3D` (`scorm_resource_id`),
  KEY `IDX_F900C28948C689D5` (`sco_parent_id`),
  CONSTRAINT `FK_F900C289167AFF3D` FOREIGN KEY (`scorm_resource_id`) REFERENCES `claro_scorm_12_resource` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F900C28948C689D5` FOREIGN KEY (`sco_parent_id`) REFERENCES `claro_scorm_12_sco` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_12_sco`
--

LOCK TABLES `claro_scorm_12_sco` WRITE;
/*!40000 ALTER TABLE `claro_scorm_12_sco` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_12_sco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_12_sco_tracking`
--

DROP TABLE IF EXISTS `claro_scorm_12_sco_tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_12_sco_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sco_id` int(11) NOT NULL,
  `score_raw` int(11) DEFAULT NULL,
  `score_min` int(11) DEFAULT NULL,
  `score_max` int(11) DEFAULT NULL,
  `lesson_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_time` int(11) DEFAULT NULL,
  `total_time` int(11) DEFAULT NULL,
  `entry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suspend_data` varchar(4096) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exit_mode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_mode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `best_score_raw` int(11) DEFAULT NULL,
  `best_lesson_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_locked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_465499F3A76ED395` (`user_id`),
  KEY `IDX_465499F318A32826` (`sco_id`),
  CONSTRAINT `FK_465499F318A32826` FOREIGN KEY (`sco_id`) REFERENCES `claro_scorm_12_sco` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_465499F3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_12_sco_tracking`
--

LOCK TABLES `claro_scorm_12_sco_tracking` WRITE;
/*!40000 ALTER TABLE `claro_scorm_12_sco_tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_12_sco_tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_2004_resource`
--

DROP TABLE IF EXISTS `claro_scorm_2004_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_2004_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `hide_top_bar` tinyint(1) NOT NULL DEFAULT '0',
  `exit_mode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D16AB015B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_D16AB015B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_2004_resource`
--

LOCK TABLES `claro_scorm_2004_resource` WRITE;
/*!40000 ALTER TABLE `claro_scorm_2004_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_2004_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_2004_sco`
--

DROP TABLE IF EXISTS `claro_scorm_2004_sco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_2004_sco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scorm_resource_id` int(11) NOT NULL,
  `sco_parent_id` int(11) DEFAULT NULL,
  `entry_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scorm_identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `parameters` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_limit_action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `launch_data` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_block` tinyint(1) NOT NULL,
  `max_time_allowed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `completion_threshold` decimal(10,7) DEFAULT NULL,
  `scaled_passing_score` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E88F1DDD167AFF3D` (`scorm_resource_id`),
  KEY `IDX_E88F1DDD48C689D5` (`sco_parent_id`),
  CONSTRAINT `FK_E88F1DDD167AFF3D` FOREIGN KEY (`scorm_resource_id`) REFERENCES `claro_scorm_2004_resource` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E88F1DDD48C689D5` FOREIGN KEY (`sco_parent_id`) REFERENCES `claro_scorm_2004_sco` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_2004_sco`
--

LOCK TABLES `claro_scorm_2004_sco` WRITE;
/*!40000 ALTER TABLE `claro_scorm_2004_sco` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_2004_sco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_scorm_2004_sco_tracking`
--

DROP TABLE IF EXISTS `claro_scorm_2004_sco_tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_scorm_2004_sco_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sco_id` int(11) NOT NULL,
  `score_raw` int(11) DEFAULT NULL,
  `score_min` int(11) DEFAULT NULL,
  `score_max` int(11) DEFAULT NULL,
  `score_scaled` decimal(10,7) DEFAULT NULL,
  `completion_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `success_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_3A61CA76ED395` (`user_id`),
  KEY `IDX_3A61C18A32826` (`sco_id`),
  CONSTRAINT `FK_3A61C18A32826` FOREIGN KEY (`sco_id`) REFERENCES `claro_scorm_2004_sco` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3A61CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_scorm_2004_sco_tracking`
--

LOCK TABLES `claro_scorm_2004_sco_tracking` WRITE;
/*!40000 ALTER TABLE `claro_scorm_2004_sco_tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_scorm_2004_sco_tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_security_token`
--

DROP TABLE IF EXISTS `claro_security_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_security_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B3A67A408FBFBD64` (`client_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_security_token`
--

LOCK TABLES `claro_security_token` WRITE;
/*!40000 ALTER TABLE `claro_security_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_security_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_session`
--

DROP TABLE IF EXISTS `claro_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_session` (
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `session_time` int(11) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_session`
--

LOCK TABLES `claro_session` WRITE;
/*!40000 ALTER TABLE `claro_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_simple_text_widget_config`
--

DROP TABLE IF EXISTS `claro_simple_text_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_simple_text_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C389EBCCAB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_C389EBCCAB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_simple_text_widget_config`
--

LOCK TABLES `claro_simple_text_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_simple_text_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_simple_text_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_subcontent`
--

DROP TABLE IF EXISTS `claro_subcontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_subcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `next_id` int(11) DEFAULT NULL,
  `back_id` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D72E133C2055B9A2` (`father_id`),
  KEY `IDX_D72E133CDD62C21B` (`child_id`),
  KEY `IDX_D72E133CAA23F6C8` (`next_id`),
  KEY `IDX_D72E133CE9583FF0` (`back_id`),
  CONSTRAINT `FK_D72E133C2055B9A2` FOREIGN KEY (`father_id`) REFERENCES `claro_content` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D72E133CAA23F6C8` FOREIGN KEY (`next_id`) REFERENCES `claro_subcontent` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D72E133CDD62C21B` FOREIGN KEY (`child_id`) REFERENCES `claro_content` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D72E133CE9583FF0` FOREIGN KEY (`back_id`) REFERENCES `claro_subcontent` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_subcontent`
--

LOCK TABLES `claro_subcontent` WRITE;
/*!40000 ALTER TABLE `claro_subcontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_subcontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_answer`
--

DROP TABLE IF EXISTS `claro_survey_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_date` datetime NOT NULL,
  `nb_answers` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DFEB5349B3FE509D` (`survey_id`),
  KEY `IDX_DFEB5349A76ED395` (`user_id`),
  CONSTRAINT `FK_DFEB5349A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_DFEB5349B3FE509D` FOREIGN KEY (`survey_id`) REFERENCES `claro_survey_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_answer`
--

LOCK TABLES `claro_survey_answer` WRITE;
/*!40000 ALTER TABLE `claro_survey_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_choice`
--

DROP TABLE IF EXISTS `claro_survey_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `choice_question_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `other` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C49D43FEA46B3B4F` (`choice_question_id`),
  CONSTRAINT `FK_C49D43FEA46B3B4F` FOREIGN KEY (`choice_question_id`) REFERENCES `claro_survey_multiple_choice_question` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_choice`
--

LOCK TABLES `claro_survey_choice` WRITE;
/*!40000 ALTER TABLE `claro_survey_choice` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_multiple_choice_question`
--

DROP TABLE IF EXISTS `claro_survey_multiple_choice_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_multiple_choice_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `horizontal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_388E4C251E27F6BF` (`question_id`),
  CONSTRAINT `FK_388E4C251E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `claro_survey_question` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_multiple_choice_question`
--

LOCK TABLES `claro_survey_multiple_choice_question` WRITE;
/*!40000 ALTER TABLE `claro_survey_multiple_choice_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_multiple_choice_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_multiple_choice_question_answer`
--

DROP TABLE IF EXISTS `claro_survey_multiple_choice_question_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_multiple_choice_question_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_answer_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_FDB8AF37A3E60C9C` (`question_answer_id`),
  KEY `IDX_FDB8AF37998666D1` (`choice_id`),
  CONSTRAINT `FK_FDB8AF37998666D1` FOREIGN KEY (`choice_id`) REFERENCES `claro_survey_choice` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FDB8AF37A3E60C9C` FOREIGN KEY (`question_answer_id`) REFERENCES `claro_survey_question_answer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_multiple_choice_question_answer`
--

LOCK TABLES `claro_survey_multiple_choice_question_answer` WRITE;
/*!40000 ALTER TABLE `claro_survey_multiple_choice_question_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_multiple_choice_question_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_open_ended_question_answer`
--

DROP TABLE IF EXISTS `claro_survey_open_ended_question_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_open_ended_question_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_answer_id` int(11) NOT NULL,
  `answer_content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F2616BBEA3E60C9C` (`question_answer_id`),
  CONSTRAINT `FK_F2616BBEA3E60C9C` FOREIGN KEY (`question_answer_id`) REFERENCES `claro_survey_question_answer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_open_ended_question_answer`
--

LOCK TABLES `claro_survey_open_ended_question_answer` WRITE;
/*!40000 ALTER TABLE `claro_survey_open_ended_question_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_open_ended_question_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_question`
--

DROP TABLE IF EXISTS `claro_survey_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_allowed` tinyint(1) NOT NULL,
  `comment_label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rich_text` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1BD4C01382D40A1F` (`workspace_id`),
  CONSTRAINT `FK_1BD4C01382D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_question`
--

LOCK TABLES `claro_survey_question` WRITE;
/*!40000 ALTER TABLE `claro_survey_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_question_answer`
--

DROP TABLE IF EXISTS `claro_survey_question_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_question_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_comment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_9F5D3C468E018F4B` (`answer_survey_id`),
  KEY `IDX_9F5D3C461E27F6BF` (`question_id`),
  CONSTRAINT `FK_9F5D3C461E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `claro_survey_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9F5D3C468E018F4B` FOREIGN KEY (`answer_survey_id`) REFERENCES `claro_survey_answer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_question_answer`
--

LOCK TABLES `claro_survey_question_answer` WRITE;
/*!40000 ALTER TABLE `claro_survey_question_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_question_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_question_model`
--

DROP TABLE IF EXISTS `claro_survey_question_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_question_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `rich_text` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_88BF64F482D40A1F` (`workspace_id`),
  CONSTRAINT `FK_88BF64F482D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_question_model`
--

LOCK TABLES `claro_survey_question_model` WRITE;
/*!40000 ALTER TABLE `claro_survey_question_model` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_question_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_question_relation`
--

DROP TABLE IF EXISTS `claro_survey_question_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_question_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_order` int(11) NOT NULL,
  `mandatory` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `survey_unique_survey_question_relation` (`survey_id`,`question_id`),
  KEY `IDX_953FEEA4B3FE509D` (`survey_id`),
  KEY `IDX_953FEEA41E27F6BF` (`question_id`),
  CONSTRAINT `FK_953FEEA41E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `claro_survey_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_953FEEA4B3FE509D` FOREIGN KEY (`survey_id`) REFERENCES `claro_survey_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_question_relation`
--

LOCK TABLES `claro_survey_question_relation` WRITE;
/*!40000 ALTER TABLE `claro_survey_question_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_question_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_resource`
--

DROP TABLE IF EXISTS `claro_survey_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci,
  `published` tinyint(1) NOT NULL,
  `closed` tinyint(1) NOT NULL,
  `has_public_result` tinyint(1) NOT NULL,
  `allow_answer_edition` tinyint(1) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_11B27D4BB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_11B27D4BB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_resource`
--

LOCK TABLES `claro_survey_resource` WRITE;
/*!40000 ALTER TABLE `claro_survey_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_survey_simple_text_question_answer`
--

DROP TABLE IF EXISTS `claro_survey_simple_text_question_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_survey_simple_text_question_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_answer_id` int(11) NOT NULL,
  `answer_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_62C24A08A3E60C9C` (`question_answer_id`),
  CONSTRAINT `FK_62C24A08A3E60C9C` FOREIGN KEY (`question_answer_id`) REFERENCES `claro_survey_question_answer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_survey_simple_text_question_answer`
--

LOCK TABLES `claro_survey_simple_text_question_answer` WRITE;
/*!40000 ALTER TABLE `claro_survey_simple_text_question_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_survey_simple_text_question_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tagbundle_resources_tags_widget_config`
--

DROP TABLE IF EXISTS `claro_tagbundle_resources_tags_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tagbundle_resources_tags_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5F11BDA4AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_5F11BDA4AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tagbundle_resources_tags_widget_config`
--

LOCK TABLES `claro_tagbundle_resources_tags_widget_config` WRITE;
/*!40000 ALTER TABLE `claro_tagbundle_resources_tags_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_tagbundle_resources_tags_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tagbundle_tag`
--

DROP TABLE IF EXISTS `claro_tagbundle_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tagbundle_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6E5EC9DA76ED395` (`user_id`),
  CONSTRAINT `FK_6E5EC9DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tagbundle_tag`
--

LOCK TABLES `claro_tagbundle_tag` WRITE;
/*!40000 ALTER TABLE `claro_tagbundle_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_tagbundle_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tagbundle_tagged_object`
--

DROP TABLE IF EXISTS `claro_tagbundle_tagged_object`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tagbundle_tagged_object` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1EA1E15DBAD26311` (`tag_id`),
  CONSTRAINT `FK_1EA1E15DBAD26311` FOREIGN KEY (`tag_id`) REFERENCES `claro_tagbundle_tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tagbundle_tagged_object`
--

LOCK TABLES `claro_tagbundle_tagged_object` WRITE;
/*!40000 ALTER TABLE `claro_tagbundle_tagged_object` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_tagbundle_tagged_object` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_team`
--

DROP TABLE IF EXISTS `claro_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `team_manager` int(11) DEFAULT NULL,
  `team_manager_role` int(11) DEFAULT NULL,
  `directory_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `max_users` int(11) DEFAULT NULL,
  `self_registration` tinyint(1) NOT NULL,
  `self_unregistration` tinyint(1) NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A2FE5804D60322AC` (`role_id`),
  UNIQUE KEY `UNIQ_A2FE580459E625D1` (`team_manager_role`),
  UNIQUE KEY `UNIQ_A2FE58042C94069F` (`directory_id`),
  KEY `IDX_A2FE580482D40A1F` (`workspace_id`),
  KEY `IDX_A2FE580455D548E` (`team_manager`),
  CONSTRAINT `FK_A2FE58042C94069F` FOREIGN KEY (`directory_id`) REFERENCES `claro_directory` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_A2FE580455D548E` FOREIGN KEY (`team_manager`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_A2FE580459E625D1` FOREIGN KEY (`team_manager_role`) REFERENCES `claro_role` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_A2FE580482D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A2FE5804D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_team`
--

LOCK TABLES `claro_team` WRITE;
/*!40000 ALTER TABLE `claro_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_team_parameters`
--

DROP TABLE IF EXISTS `claro_team_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_team_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `self_registration` tinyint(1) NOT NULL,
  `self_unregistration` tinyint(1) NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `max_teams` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C99EF54182D40A1F` (`workspace_id`),
  CONSTRAINT `FK_C99EF54182D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_team_parameters`
--

LOCK TABLES `claro_team_parameters` WRITE;
/*!40000 ALTER TABLE `claro_team_parameters` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_team_parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_team_users`
--

DROP TABLE IF EXISTS `claro_team_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_team_users` (
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`,`user_id`),
  KEY `IDX_B10C67F3296CD8AE` (`team_id`),
  KEY `IDX_B10C67F3A76ED395` (`user_id`),
  CONSTRAINT `FK_B10C67F3296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `claro_team` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B10C67F3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_team_users`
--

LOCK TABLES `claro_team_users` WRITE;
/*!40000 ALTER TABLE `claro_team_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_team_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_text`
--

DROP TABLE IF EXISTS `claro_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5D9559DCB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_5D9559DCB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_text`
--

LOCK TABLES `claro_text` WRITE;
/*!40000 ALTER TABLE `claro_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_text_revision`
--

DROP TABLE IF EXISTS `claro_text_revision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_text_revision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `version` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F61948DE698D3548` (`text_id`),
  KEY `IDX_F61948DEA76ED395` (`user_id`),
  CONSTRAINT `FK_F61948DE698D3548` FOREIGN KEY (`text_id`) REFERENCES `claro_text` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F61948DEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_text_revision`
--

LOCK TABLES `claro_text_revision` WRITE;
/*!40000 ALTER TABLE `claro_text_revision` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_text_revision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_theme`
--

DROP TABLE IF EXISTS `claro_theme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extending_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_1D76301AEC942BCF` (`plugin_id`),
  CONSTRAINT `FK_1D76301AEC942BCF` FOREIGN KEY (`plugin_id`) REFERENCES `claro_plugin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_theme`
--

LOCK TABLES `claro_theme` WRITE;
/*!40000 ALTER TABLE `claro_theme` DISABLE KEYS */;
INSERT INTO `claro_theme` VALUES (1,NULL,'Claroline',0),(2,NULL,'Claroline Black',0),(3,NULL,'Claroline Mint',0),(4,NULL,'Claroline Ruby',0);
/*!40000 ALTER TABLE `claro_theme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tool_mask_decoder`
--

DROP TABLE IF EXISTS `claro_tool_mask_decoder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tool_mask_decoder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tool_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `granted_icon_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `denied_icon_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tool_mask_decoder_unique_tool_and_name` (`tool_id`,`name`),
  KEY `IDX_323623448F7B22CC` (`tool_id`),
  CONSTRAINT `FK_323623448F7B22CC` FOREIGN KEY (`tool_id`) REFERENCES `claro_tools` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tool_mask_decoder`
--

LOCK TABLES `claro_tool_mask_decoder` WRITE;
/*!40000 ALTER TABLE `claro_tool_mask_decoder` DISABLE KEYS */;
INSERT INTO `claro_tool_mask_decoder` VALUES (1,1,1,'open','fa fa-eye','fa fa-eye-slash'),(2,1,2,'edit','fa fa-edit','fa fa-edit'),(3,2,1,'open','fa fa-eye','fa fa-eye-slash'),(4,2,2,'edit','fa fa-edit','fa fa-edit'),(5,3,1,'open','fa fa-eye','fa fa-eye-slash'),(6,3,2,'edit','fa fa-edit','fa fa-edit'),(7,4,1,'open','fa fa-eye','fa fa-eye-slash'),(8,4,2,'edit','fa fa-edit','fa fa-edit'),(9,5,1,'open','fa fa-eye','fa fa-eye-slash'),(10,5,2,'edit','fa fa-edit','fa fa-edit'),(11,6,1,'open','fa fa-eye','fa fa-eye-slash'),(12,6,2,'edit','fa fa-edit','fa fa-edit'),(13,7,1,'open','fa fa-eye','fa fa-eye-slash'),(14,7,2,'edit','fa fa-edit','fa fa-edit'),(15,8,1,'open','fa fa-eye','fa fa-eye-slash'),(16,8,2,'edit','fa fa-edit','fa fa-edit'),(17,9,1,'open','fa fa-eye','fa fa-eye-slash'),(18,9,2,'edit','fa fa-edit','fa fa-edit'),(19,11,1,'open','fa fa-eye','fa fa-eye-slash'),(20,11,2,'edit','fa fa-edit','fa fa-edit'),(21,12,1,'open','fa fa-eye','fa fa-eye-slash'),(22,12,2,'edit','fa fa-edit','fa fa-edit'),(23,13,1,'open','fa fa-eye','fa fa-eye-slash'),(24,13,2,'edit','fa fa-edit','fa fa-edit'),(25,14,1,'open','fa fa-eye','fa fa-eye-slash'),(26,14,2,'edit','fa fa-edit','fa fa-edit'),(27,15,1,'open','fa fa-eye','fa fa-eye-slash'),(28,15,2,'edit','fa fa-edit','fa fa-edit'),(29,16,1,'open','fa fa-eye','fa fa-eye-slash'),(30,16,2,'edit','fa fa-edit','fa fa-edit'),(31,17,1,'open','fa fa-eye','fa fa-eye-slash'),(32,17,2,'edit','fa fa-edit','fa fa-edit'),(33,18,1,'open','fa fa-eye','fa fa-eye-slash'),(34,18,2,'edit','fa fa-edit','fa fa-edit'),(35,19,1,'open','fa fa-eye','fa fa-eye-slash'),(36,19,2,'edit','fa fa-edit','fa fa-edit'),(37,20,1,'open','fa fa-eye','fa fa-eye-slash'),(38,20,2,'edit','fa fa-edit','fa fa-edit'),(39,21,1,'open','fa fa-eye','fa fa-eye-slash'),(40,21,2,'edit','fa fa-edit','fa fa-edit');
/*!40000 ALTER TABLE `claro_tool_mask_decoder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tool_rights`
--

DROP TABLE IF EXISTS `claro_tool_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tool_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `ordered_tool_id` int(11) NOT NULL,
  `mask` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tool_rights_unique_ordered_tool_role` (`ordered_tool_id`,`role_id`),
  KEY `IDX_EFEDEC7ED60322AC` (`role_id`),
  KEY `IDX_EFEDEC7EBAC1B1D7` (`ordered_tool_id`),
  CONSTRAINT `FK_EFEDEC7EBAC1B1D7` FOREIGN KEY (`ordered_tool_id`) REFERENCES `claro_ordered_tool` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EFEDEC7ED60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tool_rights`
--

LOCK TABLES `claro_tool_rights` WRITE;
/*!40000 ALTER TABLE `claro_tool_rights` DISABLE KEYS */;
INSERT INTO `claro_tool_rights` VALUES (1,8,9,1),(2,8,10,1),(3,11,26,1),(4,11,27,1),(5,14,32,1),(6,14,33,1);
/*!40000 ALTER TABLE `claro_tool_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_tools`
--

DROP TABLE IF EXISTS `claro_tools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_workspace_required` tinyint(1) NOT NULL,
  `is_desktop_required` tinyint(1) NOT NULL,
  `is_displayable_in_workspace` tinyint(1) NOT NULL,
  `is_displayable_in_desktop` tinyint(1) NOT NULL,
  `is_exportable` tinyint(1) NOT NULL,
  `is_configurable_in_workspace` tinyint(1) NOT NULL,
  `is_configurable_in_desktop` tinyint(1) NOT NULL,
  `is_locked_for_admin` tinyint(1) NOT NULL,
  `is_anonymous_excluded` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tool_plugin_unique` (`name`,`plugin_id`),
  KEY `IDX_60F90965EC942BCF` (`plugin_id`),
  CONSTRAINT `FK_60F90965EC942BCF` FOREIGN KEY (`plugin_id`) REFERENCES `claro_plugin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_tools`
--

LOCK TABLES `claro_tools` WRITE;
/*!40000 ALTER TABLE `claro_tools` DISABLE KEYS */;
INSERT INTO `claro_tools` VALUES (1,NULL,'home',NULL,'home',0,0,1,1,1,0,0,0,0),(2,NULL,'parameters',NULL,'cogs',0,0,1,1,0,0,0,1,1),(3,NULL,'resource_manager',NULL,'folder-open',0,0,1,1,1,1,0,0,0),(4,NULL,'logs',NULL,'list',0,0,1,0,0,0,0,0,1),(5,NULL,'analytics',NULL,'bar-chart-o',0,0,1,0,0,0,0,0,1),(6,NULL,'users',NULL,'user',1,0,1,0,0,0,0,0,1),(7,NULL,'my_contacts',NULL,'users',0,0,0,1,0,0,0,0,1),(8,1,'agenda_',NULL,'calendar',0,0,1,1,0,0,0,0,1),(9,2,'formalibre_reservation_agenda',NULL,'pencil-square-o',0,0,0,1,0,0,0,0,1),(10,4,'message',NULL,'envelope',0,0,0,1,0,0,0,0,1),(11,7,'formalibre_support_tool',NULL,'exclamation-triangle',0,0,0,1,0,0,0,0,1),(12,16,'claroline_team_tool',NULL,'users',0,0,1,0,0,0,0,0,1),(13,18,'formalibre_presence_tool',NULL,'check-square-o',0,0,0,1,0,0,0,0,1),(14,20,'claroline_activity_tool',NULL,'tasks',0,0,1,1,0,0,0,0,1),(15,25,'my-learning-objectives',NULL,'arrow-up',0,0,0,1,0,0,0,0,1),(16,27,'my_portfolios',NULL,'list-alt',0,0,0,1,0,0,0,0,1),(17,28,'badges',NULL,'trophy',0,0,1,0,0,0,0,0,1),(18,28,'my_badges',NULL,'trophy',0,0,1,0,0,0,0,0,1),(19,28,'all_my_badges',NULL,'trophy',0,0,0,1,0,0,0,0,1),(20,42,'ujm_questions',NULL,'database',0,0,0,1,0,0,0,0,1),(21,45,'dashboard',NULL,'area-chart',0,0,0,1,0,0,0,0,1);
/*!40000 ALTER TABLE `claro_tools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_type`
--

DROP TABLE IF EXISTS `claro_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_content_page` int(11) NOT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_type`
--

LOCK TABLES `claro_type` WRITE;
/*!40000 ALTER TABLE `claro_type` DISABLE KEYS */;
INSERT INTO `claro_type` VALUES (1,'home',100,1,NULL),(2,'menu',100,1,NULL);
/*!40000 ALTER TABLE `claro_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_url`
--

DROP TABLE IF EXISTS `claro_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_ECB39474B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_ECB39474B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_url`
--

LOCK TABLES `claro_url` WRITE;
/*!40000 ALTER TABLE `claro_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user`
--

DROP TABLE IF EXISTS `claro_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `options_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `administrative_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `initialization_date` datetime DEFAULT NULL,
  `reset_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash_time` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `hasAcceptedTerms` tinyint(1) DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `is_mail_notified` tinyint(1) NOT NULL,
  `last_uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `has_tuned_public_url` tinyint(1) NOT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `authentication` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_mail_validated` tinyint(1) NOT NULL,
  `email_validation_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hide_mail_warning` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EB8D2852F85E0677` (`username`),
  UNIQUE KEY `UNIQ_EB8D28525126AC48` (`mail`),
  UNIQUE KEY `UNIQ_EB8D2852181F3A64` (`public_url`),
  UNIQUE KEY `UNIQ_EB8D285282D40A1F` (`workspace_id`),
  UNIQUE KEY `UNIQ_EB8D28523ADB05F1` (`options_id`),
  KEY `code_idx` (`administrative_code`),
  KEY `enabled_idx` (`is_enabled`),
  CONSTRAINT `FK_EB8D28523ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `claro_user_options` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_EB8D285282D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user`
--

LOCK TABLES `claro_user` WRITE;
/*!40000 ALTER TABLE `claro_user` DISABLE KEYS */;
INSERT INTO `claro_user` VALUES (1,1,1,'Xavier','Gonzalez','admin','wfpJQ5E0DGOHpxEdL2s/Q4UIGD98uCCO9CkIrVeB470c7TLAeMuJ4Yc8QK7J5L6U9nB64IHbBbAZPHGIucrqSw==',NULL,'1cmprwtsokqskkco0ooosgc080ss0o4',NULL,'fjavi.gonzalez@gmail.com',NULL,'2017-05-18 23:47:04','2017-05-18 23:49:52',NULL,NULL,NULL,NULL,NULL,1,1,NULL,'xavier.gonzalez',0,'2100-01-01 23:49:52',NULL,'AE88FF25-97C3-4C9F-8A13-05BE362B7C1F',0,'773E816D-1880-478D-A2ED-F2925090D2E7',1,0),(2,2,2,'Samuel','Galle','Crazyboy','jlEms7BK/vXIIz98KjPPpRbox+gnBqBcyC/oMPC/UHAhDGFPwQZiRm2cKmfkj0OJKjmKaLquox77AoqxaPT9wQ==','fr','1krp5vxvtjc0go0kc80ow8ko8c0go0o',NULL,'samuel.galle@hotmail.fr',NULL,'2017-06-15 14:22:34','2017-06-15 14:24:51',NULL,NULL,NULL,'',NULL,1,1,NULL,'samuel.galle',0,'2100-01-01 00:00:00',NULL,'A116D1DF-563C-49A4-98C7-007DA2276293',0,'1C9082A8-BA16-4266-B810-C4D72360E5AC',1,0),(3,3,3,'Aurélie','Favier','aurelie.favier','Irl9/1kdUDxTH247ZzNH/SjR1OMmcuxNvD1KJ7j/w377HZpAjQJymozocjkvklGgFJOKqt/DymnegAJQUHpysA==','fr','3xt974v3t0o48w4sw4c8gcckwc8o48o',NULL,'au.favier@gmail.com',NULL,'2017-06-15 14:30:13','2017-06-15 14:31:20',NULL,NULL,NULL,NULL,NULL,1,1,NULL,'aurélie.favier',0,'2100-01-01 14:31:20',NULL,'DC5F79A9-307D-43B6-86B2-37E63C9E4EB5',1,'AEF20E0B-EA83-4395-9332-975EF270BC78',0,0);
/*!40000 ALTER TABLE `claro_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_administrator`
--

DROP TABLE IF EXISTS `claro_user_administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_administrator` (
  `organization_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`organization_id`),
  KEY `IDX_22EB9B3A32C8A3DE` (`organization_id`),
  KEY `IDX_22EB9B3AA76ED395` (`user_id`),
  CONSTRAINT `FK_22EB9B3A32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_22EB9B3AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_administrator`
--

LOCK TABLES `claro_user_administrator` WRITE;
/*!40000 ALTER TABLE `claro_user_administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_user_administrator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_badge`
--

DROP TABLE IF EXISTS `claro_user_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `issuer_id` int(11) DEFAULT NULL,
  `issued_at` datetime NOT NULL,
  `expired_at` datetime DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `is_shared` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_badge_unique` (`user_id`,`badge_id`),
  KEY `IDX_7EBB381FA76ED395` (`user_id`),
  KEY `IDX_7EBB381FF7A2C2FC` (`badge_id`),
  KEY `IDX_7EBB381FBB9D6FEE` (`issuer_id`),
  CONSTRAINT `FK_7EBB381FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7EBB381FBB9D6FEE` FOREIGN KEY (`issuer_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_7EBB381FF7A2C2FC` FOREIGN KEY (`badge_id`) REFERENCES `claro_badge` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_badge`
--

LOCK TABLES `claro_user_badge` WRITE;
/*!40000 ALTER TABLE `claro_user_badge` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_user_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_group`
--

DROP TABLE IF EXISTS `claro_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_ED8B34C7A76ED395` (`user_id`),
  KEY `IDX_ED8B34C7FE54D947` (`group_id`),
  CONSTRAINT `FK_ED8B34C7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_ED8B34C7FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_group`
--

LOCK TABLES `claro_user_group` WRITE;
/*!40000 ALTER TABLE `claro_user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_location`
--

DROP TABLE IF EXISTS `claro_user_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_location` (
  `location_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`location_id`,`user_id`),
  KEY `IDX_932BBCCB64D218E` (`location_id`),
  KEY `IDX_932BBCCBA76ED395` (`user_id`),
  CONSTRAINT `FK_932BBCCB64D218E` FOREIGN KEY (`location_id`) REFERENCES `claro__location` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_932BBCCBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_location`
--

LOCK TABLES `claro_user_location` WRITE;
/*!40000 ALTER TABLE `claro_user_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_user_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_message`
--

DROP TABLE IF EXISTS `claro_user_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `is_removed` tinyint(1) NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `is_sent` tinyint(1) NOT NULL,
  `last_open_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D48EA38AA76ED395` (`user_id`),
  KEY `IDX_D48EA38A537A1329` (`message_id`),
  CONSTRAINT `FK_D48EA38A537A1329` FOREIGN KEY (`message_id`) REFERENCES `claro_message` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D48EA38AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_message`
--

LOCK TABLES `claro_user_message` WRITE;
/*!40000 ALTER TABLE `claro_user_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_user_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_options`
--

DROP TABLE IF EXISTS `claro_user_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `desktop_background_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desktop_mode` int(11) NOT NULL DEFAULT '1',
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B2066972A76ED395` (`user_id`),
  CONSTRAINT `FK_B2066972A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_options`
--

LOCK TABLES `claro_user_options` WRITE;
/*!40000 ALTER TABLE `claro_user_options` DISABLE KEYS */;
INSERT INTO `claro_user_options` VALUES (1,1,NULL,1,'{\"resourceManagerDisplayMode\":{\"desktop\":\"list\"}}'),(2,2,NULL,1,NULL),(3,3,NULL,1,NULL);
/*!40000 ALTER TABLE `claro_user_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_user_role`
--

DROP TABLE IF EXISTS `claro_user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_797E43FFA76ED395` (`user_id`),
  KEY `IDX_797E43FFD60322AC` (`role_id`),
  CONSTRAINT `FK_797E43FFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_797E43FFD60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_user_role`
--

LOCK TABLES `claro_user_role` WRITE;
/*!40000 ALTER TABLE `claro_user_role` DISABLE KEYS */;
INSERT INTO `claro_user_role` VALUES (1,1),(1,3),(1,7),(1,9),(2,1),(2,3),(2,10),(2,12),(3,1),(3,13),(3,15);
/*!40000 ALTER TABLE `claro_user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_video_track`
--

DROP TABLE IF EXISTS `claro_video_track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_video_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `trackFile_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D25DC06529C1004E` (`video_id`),
  KEY `IDX_D25DC065ED87669A` (`trackFile_id`),
  CONSTRAINT `FK_D25DC06529C1004E` FOREIGN KEY (`video_id`) REFERENCES `claro_file` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D25DC065ED87669A` FOREIGN KEY (`trackFile_id`) REFERENCES `claro_file` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_video_track`
--

LOCK TABLES `claro_video_track` WRITE;
/*!40000 ALTER TABLE `claro_video_track` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_video_track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget`
--

DROP TABLE IF EXISTS `claro_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_configurable` tinyint(1) NOT NULL,
  `is_exportable` tinyint(1) NOT NULL,
  `is_displayable_in_workspace` tinyint(1) NOT NULL,
  `is_displayable_in_desktop` tinyint(1) NOT NULL,
  `default_width` int(11) NOT NULL DEFAULT '4',
  `default_height` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `widget_plugin_unique` (`name`,`plugin_id`),
  KEY `IDX_76CA6C4FEC942BCF` (`plugin_id`),
  CONSTRAINT `FK_76CA6C4FEC942BCF` FOREIGN KEY (`plugin_id`) REFERENCES `claro_plugin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget`
--

LOCK TABLES `claro_widget` WRITE;
/*!40000 ALTER TABLE `claro_widget` DISABLE KEYS */;
INSERT INTO `claro_widget` VALUES (1,NULL,'core_resource_logger',1,0,1,1,4,3),(2,NULL,'simple_text',1,0,1,1,4,3),(3,NULL,'my_workspaces',0,0,0,1,4,3),(4,NULL,'my_profile',0,0,0,1,4,3),(5,NULL,'resources_widget',1,0,1,1,4,3),(6,1,'agenda_',0,0,1,1,4,3),(7,1,'agenda_task',0,0,1,1,4,3),(8,5,'claroline_forum_widget',1,0,1,1,4,3),(9,6,'claroline_tag_resources_widget',1,0,1,0,4,3),(10,8,'claroline_rssreader',1,1,1,1,4,3),(11,11,'claroline_announcement_widget',1,0,1,1,4,3),(12,15,'claroline_cursus_courses_registration_widget',1,0,1,1,12,4),(13,15,'claroline_cursus_my_courses',1,0,0,1,12,4),(14,24,'hevinci_favourite_widget',0,0,0,1,4,3),(15,25,'my-learning-objectives',0,0,1,1,4,3),(16,28,'badge_usage',1,0,1,0,4,3),(17,29,'blog_list',1,0,1,1,4,3),(18,29,'blog',1,0,1,1,4,3),(19,29,'tag_list',1,0,1,1,4,3),(20,35,'claroline_result',0,0,1,0,4,3),(21,36,'innova_path_widget',1,0,1,1,4,3),(22,46,'claroline_claco_form_widget',1,0,1,1,12,4);
/*!40000 ALTER TABLE `claro_widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget_badge_usage_config`
--

DROP TABLE IF EXISTS `claro_widget_badge_usage_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget_badge_usage_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numberLastAwardedBadge` smallint(6) NOT NULL,
  `numberMostAwardedBadge` smallint(6) NOT NULL,
  `widgetInstance_id` int(11) DEFAULT NULL,
  `simple_view` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9A2EA78BAB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_9A2EA78BAB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget_badge_usage_config`
--

LOCK TABLES `claro_widget_badge_usage_config` WRITE;
/*!40000 ALTER TABLE `claro_widget_badge_usage_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_widget_badge_usage_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget_display_config`
--

DROP TABLE IF EXISTS `claro_widget_display_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget_display_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `widget_instance_id` int(11) NOT NULL,
  `row_position` int(11) NOT NULL,
  `column_position` int(11) NOT NULL,
  `width` int(11) NOT NULL DEFAULT '4',
  `height` int(11) NOT NULL DEFAULT '3',
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `widget_display_config_unique_user` (`widget_instance_id`,`user_id`),
  UNIQUE KEY `widget_display_config_unique_workspace` (`widget_instance_id`,`workspace_id`),
  KEY `IDX_EBBE497282D40A1F` (`workspace_id`),
  KEY `IDX_EBBE4972A76ED395` (`user_id`),
  KEY `IDX_EBBE497244BF891` (`widget_instance_id`),
  CONSTRAINT `FK_EBBE497244BF891` FOREIGN KEY (`widget_instance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EBBE497282D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EBBE4972A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget_display_config`
--

LOCK TABLES `claro_widget_display_config` WRITE;
/*!40000 ALTER TABLE `claro_widget_display_config` DISABLE KEYS */;
INSERT INTO `claro_widget_display_config` VALUES (3,NULL,3,3,-1,-1,4,3,NULL,'{\"textTitleColor\":\"#0038ff\"}');
/*!40000 ALTER TABLE `claro_widget_display_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget_home_tab_config`
--

DROP TABLE IF EXISTS `claro_widget_home_tab_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget_home_tab_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_instance_id` int(11) DEFAULT NULL,
  `home_tab_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `widget_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_visible` tinyint(1) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D48CC23E44BF891` (`widget_instance_id`),
  KEY `IDX_D48CC23E7D08FA9E` (`home_tab_id`),
  KEY `IDX_D48CC23EA76ED395` (`user_id`),
  KEY `IDX_D48CC23E82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_D48CC23E44BF891` FOREIGN KEY (`widget_instance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D48CC23E7D08FA9E` FOREIGN KEY (`home_tab_id`) REFERENCES `claro_home_tab` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D48CC23E82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D48CC23EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget_home_tab_config`
--

LOCK TABLES `claro_widget_home_tab_config` WRITE;
/*!40000 ALTER TABLE `claro_widget_home_tab_config` DISABLE KEYS */;
INSERT INTO `claro_widget_home_tab_config` VALUES (3,3,4,3,NULL,1,'desktop',1,0);
/*!40000 ALTER TABLE `claro_widget_home_tab_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget_instance`
--

DROP TABLE IF EXISTS `claro_widget_instance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget_instance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `widget_id` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_desktop` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F89A38582D40A1F` (`workspace_id`),
  KEY `IDX_5F89A385A76ED395` (`user_id`),
  KEY `IDX_5F89A385FBE885E2` (`widget_id`),
  CONSTRAINT `FK_5F89A38582D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5F89A385A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5F89A385FBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `claro_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget_instance`
--

LOCK TABLES `claro_widget_instance` WRITE;
/*!40000 ALTER TABLE `claro_widget_instance` DISABLE KEYS */;
INSERT INTO `claro_widget_instance` VALUES (3,NULL,3,5,0,1,'Cours Vecteurs',NULL,NULL);
/*!40000 ALTER TABLE `claro_widget_instance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_widget_roles`
--

DROP TABLE IF EXISTS `claro_widget_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_widget_roles` (
  `widget_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`widget_id`,`role_id`),
  KEY `IDX_D746FA2EFBE885E2` (`widget_id`),
  KEY `IDX_D746FA2ED60322AC` (`role_id`),
  CONSTRAINT `FK_D746FA2ED60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D746FA2EFBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `claro_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_widget_roles`
--

LOCK TABLES `claro_widget_roles` WRITE;
/*!40000 ALTER TABLE `claro_widget_roles` DISABLE KEYS */;
INSERT INTO `claro_widget_roles` VALUES (1,1),(1,2),(1,3),(1,5),(2,1),(2,2),(2,3),(2,5),(3,1),(3,2),(3,3),(3,5),(4,1),(4,2),(4,3),(4,5),(5,1),(5,2),(5,3),(5,5),(6,1),(6,2),(6,3),(6,5),(7,1),(7,2),(7,3),(7,5),(8,1),(8,2),(8,3),(8,5),(9,1),(9,2),(9,3),(9,5),(10,1),(10,2),(10,3),(10,5),(11,1),(11,2),(11,3),(11,5),(12,1),(12,2),(12,3),(12,5),(13,1),(13,2),(13,3),(13,5),(14,1),(14,2),(14,3),(14,5),(15,1),(15,2),(15,3),(15,5),(16,1),(16,2),(16,3),(16,5),(16,6),(17,1),(17,2),(17,3),(17,5),(17,6),(18,1),(18,2),(18,3),(18,5),(18,6),(19,1),(19,2),(19,3),(19,5),(19,6),(20,1),(20,2),(20,3),(20,5),(20,6),(21,1),(21,2),(21,3),(21,5),(21,6),(22,1),(22,2),(22,3),(22,5),(22,6);
/*!40000 ALTER TABLE `claro_widget_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace`
--

DROP TABLE IF EXISTS `claro_workspace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maxStorageSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maxUploadResources` int(11) NOT NULL,
  `maxUsers` int(11) NOT NULL,
  `displayable` tinyint(1) NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `self_registration` tinyint(1) NOT NULL,
  `registration_validation` tinyint(1) NOT NULL,
  `self_unregistration` tinyint(1) NOT NULL,
  `creation_date` int(11) DEFAULT NULL,
  `is_personal` tinyint(1) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_access_date` tinyint(1) NOT NULL,
  `workspace_type` int(11) DEFAULT NULL,
  `options_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D902854577153098` (`code`),
  UNIQUE KEY `UNIQ_D90285452B6FCFB2` (`guid`),
  UNIQUE KEY `UNIQ_D90285453ADB05F1` (`options_id`),
  KEY `IDX_D9028545A76ED395` (`user_id`),
  KEY `name_idx` (`name`),
  CONSTRAINT `FK_D90285453ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `claro_workspace_options` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_D9028545A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace`
--

LOCK TABLES `claro_workspace` WRITE;
/*!40000 ALTER TABLE `claro_workspace` DISABLE KEYS */;
INSERT INTO `claro_workspace` VALUES (1,1,'Espace personnel - admin',NULL,'admin','1 TB',10000,10000,0,'217B39B6-C9B5-43C9-BADB-1B32C39C0E86',0,0,0,1495144020,1,NULL,NULL,0,NULL,NULL),(2,2,'Espace personnelCrazyboy',NULL,'Crazyboy','1 TB',10000,10000,0,'359FD747-5C7E-4257-BFF1-7BBEC2C32FCA',0,0,0,1497529320,1,NULL,NULL,0,NULL,NULL),(3,3,'Espace personnel - aurelie.favier',NULL,'aurelie.favier','1 TB',10000,10000,0,'2EE264B3-84BD-4160-B809-7052E64B038E',0,0,0,1497529800,1,NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `claro_workspace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_favourite`
--

DROP TABLE IF EXISTS `claro_workspace_favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_favourite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workspace_favourite_unique_combination` (`workspace_id`,`user_id`),
  KEY `IDX_711A30B82D40A1F` (`workspace_id`),
  KEY `IDX_711A30BA76ED395` (`user_id`),
  CONSTRAINT `FK_711A30B82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_711A30BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_favourite`
--

LOCK TABLES `claro_workspace_favourite` WRITE;
/*!40000 ALTER TABLE `claro_workspace_favourite` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_model`
--

DROP TABLE IF EXISTS `claro_workspace_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workspace_model_unique_name_workspace` (`name`,`workspace_id`),
  KEY `IDX_536FFC4C82D40A1F` (`workspace_id`),
  CONSTRAINT `FK_536FFC4C82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_model`
--

LOCK TABLES `claro_workspace_model` WRITE;
/*!40000 ALTER TABLE `claro_workspace_model` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_model_group`
--

DROP TABLE IF EXISTS `claro_workspace_model_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_model_group` (
  `group_id` int(11) NOT NULL,
  `workspacemodel_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`workspacemodel_id`),
  KEY `IDX_1F19A8AEFE54D947` (`group_id`),
  KEY `IDX_1F19A8AED500BD91` (`workspacemodel_id`),
  CONSTRAINT `FK_1F19A8AED500BD91` FOREIGN KEY (`workspacemodel_id`) REFERENCES `claro_workspace_model` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1F19A8AEFE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_model_group`
--

LOCK TABLES `claro_workspace_model_group` WRITE;
/*!40000 ALTER TABLE `claro_workspace_model_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_model_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_model_home_tab`
--

DROP TABLE IF EXISTS `claro_workspace_model_home_tab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_model_home_tab` (
  `workspacemodel_id` int(11) NOT NULL,
  `hometab_id` int(11) NOT NULL,
  PRIMARY KEY (`workspacemodel_id`,`hometab_id`),
  KEY `IDX_A8E0CB1BD500BD91` (`workspacemodel_id`),
  KEY `IDX_A8E0CB1BCCE862F` (`hometab_id`),
  CONSTRAINT `FK_A8E0CB1BCCE862F` FOREIGN KEY (`hometab_id`) REFERENCES `claro_home_tab` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A8E0CB1BD500BD91` FOREIGN KEY (`workspacemodel_id`) REFERENCES `claro_workspace_model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_model_home_tab`
--

LOCK TABLES `claro_workspace_model_home_tab` WRITE;
/*!40000 ALTER TABLE `claro_workspace_model_home_tab` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_model_home_tab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_model_resource`
--

DROP TABLE IF EXISTS `claro_workspace_model_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_model_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_node_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `isCopy` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5D706351BAD783F` (`resource_node_id`),
  KEY `IDX_F5D706357975B7E7` (`model_id`),
  CONSTRAINT `FK_F5D706351BAD783F` FOREIGN KEY (`resource_node_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F5D706357975B7E7` FOREIGN KEY (`model_id`) REFERENCES `claro_workspace_model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_model_resource`
--

LOCK TABLES `claro_workspace_model_resource` WRITE;
/*!40000 ALTER TABLE `claro_workspace_model_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_model_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_model_user`
--

DROP TABLE IF EXISTS `claro_workspace_model_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_model_user` (
  `user_id` int(11) NOT NULL,
  `workspacemodel_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`workspacemodel_id`),
  KEY `IDX_5318388FA76ED395` (`user_id`),
  KEY `IDX_5318388FD500BD91` (`workspacemodel_id`),
  CONSTRAINT `FK_5318388FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5318388FD500BD91` FOREIGN KEY (`workspacemodel_id`) REFERENCES `claro_workspace_model` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_model_user`
--

LOCK TABLES `claro_workspace_model_user` WRITE;
/*!40000 ALTER TABLE `claro_workspace_model_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_model_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_options`
--

DROP TABLE IF EXISTS `claro_workspace_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workspace_id` int(11) DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D603AE0582D40A1F` (`workspace_id`),
  CONSTRAINT `FK_D603AE0582D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_options`
--

LOCK TABLES `claro_workspace_options` WRITE;
/*!40000 ALTER TABLE `claro_workspace_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_registration_queue`
--

DROP TABLE IF EXISTS `claro_workspace_registration_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_registration_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `workspace_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_role_unique` (`role_id`,`user_id`),
  KEY `IDX_F461C538D60322AC` (`role_id`),
  KEY `IDX_F461C538A76ED395` (`user_id`),
  KEY `IDX_F461C53882D40A1F` (`workspace_id`),
  CONSTRAINT `FK_F461C53882D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F461C538A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F461C538D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_registration_queue`
--

LOCK TABLES `claro_workspace_registration_queue` WRITE;
/*!40000 ALTER TABLE `claro_workspace_registration_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_registration_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_tag`
--

DROP TABLE IF EXISTS `claro_workspace_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `workspace_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_unique_name_and_user` (`user_id`,`name`),
  KEY `IDX_C8EFD7EFA76ED395` (`user_id`),
  KEY `IDX_C8EFD7EF82D40A1F` (`workspace_id`),
  KEY `name_idx` (`name`),
  CONSTRAINT `FK_C8EFD7EF82D40A1F` FOREIGN KEY (`workspace_id`) REFERENCES `claro_workspace` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C8EFD7EFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_tag`
--

LOCK TABLES `claro_workspace_tag` WRITE;
/*!40000 ALTER TABLE `claro_workspace_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claro_workspace_tag_hierarchy`
--

DROP TABLE IF EXISTS `claro_workspace_tag_hierarchy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claro_workspace_tag_hierarchy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tag_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A46B159EA76ED395` (`user_id`),
  KEY `IDX_A46B159EBAD26311` (`tag_id`),
  KEY `IDX_A46B159E727ACA70` (`parent_id`),
  CONSTRAINT `FK_A46B159E727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `claro_workspace_tag` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A46B159EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A46B159EBAD26311` FOREIGN KEY (`tag_id`) REFERENCES `claro_workspace_tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claro_workspace_tag_hierarchy`
--

LOCK TABLES `claro_workspace_tag_hierarchy` WRITE;
/*!40000 ALTER TABLE `claro_workspace_tag_hierarchy` DISABLE KEYS */;
/*!40000 ALTER TABLE `claro_workspace_tag_hierarchy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineagendabundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineagendabundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineagendabundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineagendabundle_versions`
--

LOCK TABLES `doctrine_clarolineagendabundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineagendabundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineagendabundle_versions` VALUES ('20150429110105'),('20150430102809'),('20150827090315'),('20150909092618');
/*!40000 ALTER TABLE `doctrine_clarolineagendabundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineannouncementbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineannouncementbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineannouncementbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineannouncementbundle_versions`
--

LOCK TABLES `doctrine_clarolineannouncementbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineannouncementbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineannouncementbundle_versions` VALUES ('20130909095120'),('20140709170402'),('20161005170355');
/*!40000 ALTER TABLE `doctrine_clarolineannouncementbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinechatbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinechatbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinechatbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinechatbundle_versions`
--

LOCK TABLES `doctrine_clarolinechatbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinechatbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinechatbundle_versions` VALUES ('20160804113252');
/*!40000 ALTER TABLE `doctrine_clarolinechatbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineclacoformbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineclacoformbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineclacoformbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineclacoformbundle_versions`
--

LOCK TABLES `doctrine_clarolineclacoformbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineclacoformbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineclacoformbundle_versions` VALUES ('20161214103336'),('20170112084745');
/*!40000 ALTER TABLE `doctrine_clarolineclacoformbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinecorebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinecorebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinecorebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinecorebundle_versions`
--

LOCK TABLES `doctrine_clarolinecorebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinecorebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinecorebundle_versions` VALUES ('20150428152724'),('20150507095950'),('20150520105108'),('20150528144818'),('20150729163857'),('20150805174708'),('20150811094029'),('20150907121719'),('20150910155551'),('20151006175302'),('20151007154027'),('20151009160642'),('20151015111641'),('20151016141145'),('20151021111219'),('20160128111525'),('20160210202433'),('20160217120917'),('20160222140616'),('20160225174213'),('20160302181949'),('20160322162536'),('20160517114220'),('20160525165333'),('20160614150733'),('20160629093541'),('20160701173819'),('20160825105438'),('20160929141007'),('20161010101157'),('20161011112651'),('20161214140109');
/*!40000 ALTER TABLE `doctrine_clarolinecorebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinecursusbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinecursusbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinecursusbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinecursusbundle_versions`
--

LOCK TABLES `doctrine_clarolinecursusbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinecursusbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinecursusbundle_versions` VALUES ('20150227103604'),('20150303144334'),('20150429113219'),('20150528102713'),('20150807092127'),('20160219135325'),('20160325112454'),('20160811154524'),('20160829102237'),('20160905101805'),('20160923103206');
/*!40000 ALTER TABLE `doctrine_clarolinecursusbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinedashboardbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinedashboardbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinedashboardbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinedashboardbundle_versions`
--

LOCK TABLES `doctrine_clarolinedashboardbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinedashboardbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinedashboardbundle_versions` VALUES ('20160916160012');
/*!40000 ALTER TABLE `doctrine_clarolinedashboardbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineflashcardbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineflashcardbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineflashcardbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineflashcardbundle_versions`
--

LOCK TABLES `doctrine_clarolineflashcardbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineflashcardbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineflashcardbundle_versions` VALUES ('20160504115749'),('20161020110419'),('20161103101521'),('20161103163738');
/*!40000 ALTER TABLE `doctrine_clarolineflashcardbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineforumbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineforumbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineforumbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineforumbundle_versions`
--

LOCK TABLES `doctrine_clarolineforumbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineforumbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineforumbundle_versions` VALUES ('20130906115738'),('20131112143038'),('20131217153054'),('20140526155201'),('20140707134307'),('20140918151832'),('20141118143441'),('20150924145911'),('20160524143428');
/*!40000 ALTER TABLE `doctrine_clarolineforumbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinemessagebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinemessagebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinemessagebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinemessagebundle_versions`
--

LOCK TABLES `doctrine_clarolinemessagebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinemessagebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinemessagebundle_versions` VALUES ('20150429114010'),('20150723171850'),('20161010101329');
/*!40000 ALTER TABLE `doctrine_clarolinemessagebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinepdfgeneratorbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinepdfgeneratorbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinepdfgeneratorbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinepdfgeneratorbundle_versions`
--

LOCK TABLES `doctrine_clarolinepdfgeneratorbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinepdfgeneratorbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinepdfgeneratorbundle_versions` VALUES ('20160812112300');
/*!40000 ALTER TABLE `doctrine_clarolinepdfgeneratorbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineresultbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineresultbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineresultbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineresultbundle_versions`
--

LOCK TABLES `doctrine_clarolineresultbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineresultbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineresultbundle_versions` VALUES ('20160321100245');
/*!40000 ALTER TABLE `doctrine_clarolineresultbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinerssreaderbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinerssreaderbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinerssreaderbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinerssreaderbundle_versions`
--

LOCK TABLES `doctrine_clarolinerssreaderbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinerssreaderbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinerssreaderbundle_versions` VALUES ('20130805110005'),('20130925173308');
/*!40000 ALTER TABLE `doctrine_clarolinerssreaderbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinescormbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinescormbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinescormbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinescormbundle_versions`
--

LOCK TABLES `doctrine_clarolinescormbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinescormbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinescormbundle_versions` VALUES ('20140512112307'),('20140716170910'),('20150827171038'),('20161213092816');
/*!40000 ALTER TABLE `doctrine_clarolinescormbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinesurveybundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinesurveybundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinesurveybundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinesurveybundle_versions`
--

LOCK TABLES `doctrine_clarolinesurveybundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinesurveybundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinesurveybundle_versions` VALUES ('20140901163542'),('20150707094739'),('20160906142510');
/*!40000 ALTER TABLE `doctrine_clarolinesurveybundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinetagbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinetagbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinetagbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinetagbundle_versions`
--

LOCK TABLES `doctrine_clarolinetagbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinetagbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinetagbundle_versions` VALUES ('20150924123848');
/*!40000 ALTER TABLE `doctrine_clarolinetagbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolineteambundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolineteambundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolineteambundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolineteambundle_versions`
--

LOCK TABLES `doctrine_clarolineteambundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolineteambundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolineteambundle_versions` VALUES ('20141007174443');
/*!40000 ALTER TABLE `doctrine_clarolineteambundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_clarolinevideoplayerbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_clarolinevideoplayerbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_clarolinevideoplayerbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_clarolinevideoplayerbundle_versions`
--

LOCK TABLES `doctrine_clarolinevideoplayerbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_clarolinevideoplayerbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_clarolinevideoplayerbundle_versions` VALUES ('20160524121348');
/*!40000 ALTER TABLE `doctrine_clarolinevideoplayerbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_formalibrepresencebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_formalibrepresencebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_formalibrepresencebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_formalibrepresencebundle_versions`
--

LOCK TABLES `doctrine_formalibrepresencebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_formalibrepresencebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_formalibrepresencebundle_versions` VALUES ('20150911172936'),('20151013161529');
/*!40000 ALTER TABLE `doctrine_formalibrepresencebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_formalibrereservationbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_formalibrereservationbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_formalibrereservationbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_formalibrereservationbundle_versions`
--

LOCK TABLES `doctrine_formalibrereservationbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_formalibrereservationbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_formalibrereservationbundle_versions` VALUES ('20150908094114');
/*!40000 ALTER TABLE `doctrine_formalibrereservationbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_formalibresupportbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_formalibresupportbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_formalibresupportbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_formalibresupportbundle_versions`
--

LOCK TABLES `doctrine_formalibresupportbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_formalibresupportbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_formalibresupportbundle_versions` VALUES ('20150729105239');
/*!40000 ALTER TABLE `doctrine_formalibresupportbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_hevincicompetencybundle_versions`
--

DROP TABLE IF EXISTS `doctrine_hevincicompetencybundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_hevincicompetencybundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_hevincicompetencybundle_versions`
--

LOCK TABLES `doctrine_hevincicompetencybundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_hevincicompetencybundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_hevincicompetencybundle_versions` VALUES ('20150317150802'),('20150430113442'),('20150521162342'),('20150824165947');
/*!40000 ALTER TABLE `doctrine_hevincicompetencybundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_hevincifavouritebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_hevincifavouritebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_hevincifavouritebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_hevincifavouritebundle_versions`
--

LOCK TABLES `doctrine_hevincifavouritebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_hevincifavouritebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_hevincifavouritebundle_versions` VALUES ('20150401143404'),('20150420135837');
/*!40000 ALTER TABLE `doctrine_hevincifavouritebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_hevinciurlbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_hevinciurlbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_hevinciurlbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_hevinciurlbundle_versions`
--

LOCK TABLES `doctrine_hevinciurlbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_hevinciurlbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_hevinciurlbundle_versions` VALUES ('20150324141653'),('20150326112755');
/*!40000 ALTER TABLE `doctrine_hevinciurlbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapbadgebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapbadgebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapbadgebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapbadgebundle_versions`
--

LOCK TABLES `doctrine_icapbadgebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapbadgebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapbadgebundle_versions` VALUES ('20150506091116'),('20150911145838'),('20150929141509'),('20160119173531');
/*!40000 ALTER TABLE `doctrine_icapbadgebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapblogbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapblogbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapblogbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapblogbundle_versions`
--

LOCK TABLES `doctrine_icapblogbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapblogbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapblogbundle_versions` VALUES ('20130820133717'),('20131107161234'),('20131113113444'),('20131115104001'),('20140520101504'),('20140521085530'),('20140905171642'),('20140908154749'),('20141201164119'),('20150107170504'),('20150220150632'),('20150415125227'),('20150612110539'),('20150910095500'),('20150916163456');
/*!40000 ALTER TABLE `doctrine_icapblogbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapdropzonebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapdropzonebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapdropzonebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapdropzonebundle_versions`
--

LOCK TABLES `doctrine_icapdropzonebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapdropzonebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapdropzonebundle_versions` VALUES ('20130927143036'),('20140319130229'),('20140326083044'),('20140326083554'),('20140402131254'),('20140407074633'),('20140520123452'),('20140522071801'),('20140602090326'),('20140715144900'),('20140926131620');
/*!40000 ALTER TABLE `doctrine_icapdropzonebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icaplessonbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icaplessonbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icaplessonbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icaplessonbundle_versions`
--

LOCK TABLES `doctrine_icaplessonbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icaplessonbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icaplessonbundle_versions` VALUES ('20130923155308'),('20131030165411'),('20131113154806'),('20131113190717'),('20160113122054');
/*!40000 ALTER TABLE `doctrine_icaplessonbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapnotificationbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapnotificationbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapnotificationbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapnotificationbundle_versions`
--

LOCK TABLES `doctrine_icapnotificationbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapnotificationbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapnotificationbundle_versions` VALUES ('20140128085626'),('20150409150013'),('20150414153912'),('20161010101357');
/*!40000 ALTER TABLE `doctrine_icapnotificationbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapoauthbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapoauthbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapoauthbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapoauthbundle_versions`
--

LOCK TABLES `doctrine_icapoauthbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapoauthbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapoauthbundle_versions` VALUES ('20150709133254'),('20150709150946');
/*!40000 ALTER TABLE `doctrine_icapoauthbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapportfoliobundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapportfoliobundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapportfoliobundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapportfoliobundle_versions`
--

LOCK TABLES `doctrine_icapportfoliobundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapportfoliobundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapportfoliobundle_versions` VALUES ('20140716110911'),('20141031165140'),('20150203105612'),('20150216113033'),('20150409105732'),('20150413152543'),('20150413165837'),('20150630100700'),('20150825171151');
/*!40000 ALTER TABLE `doctrine_icapportfoliobundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapsocialmediabundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapsocialmediabundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapsocialmediabundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapsocialmediabundle_versions`
--

LOCK TABLES `doctrine_icapsocialmediabundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapsocialmediabundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapsocialmediabundle_versions` VALUES ('20150427170011'),('20150506111907');
/*!40000 ALTER TABLE `doctrine_icapsocialmediabundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapwebsitebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapwebsitebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapwebsitebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapwebsitebundle_versions`
--

LOCK TABLES `doctrine_icapwebsitebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapwebsitebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapwebsitebundle_versions` VALUES ('20140707151913'),('20140901154751'),('20140902134256'),('20140902163052'),('20140909095019'),('20140923153358'),('20141014171722'),('20141209152238'),('20141209161930'),('20150313153209'),('20150701152135'),('20160419101930');
/*!40000 ALTER TABLE `doctrine_icapwebsitebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_icapwikibundle_versions`
--

DROP TABLE IF EXISTS `doctrine_icapwikibundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_icapwikibundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_icapwikibundle_versions`
--

LOCK TABLES `doctrine_icapwikibundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_icapwikibundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_icapwikibundle_versions` VALUES ('20131003164704'),('20131028142219'),('20131031085945'),('20131104140647'),('20150904175048'),('20170130142846');
/*!40000 ALTER TABLE `doctrine_icapwikibundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_innovaaudiorecorderbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_innovaaudiorecorderbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_innovaaudiorecorderbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_innovaaudiorecorderbundle_versions`
--

LOCK TABLES `doctrine_innovaaudiorecorderbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_innovaaudiorecorderbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_innovaaudiorecorderbundle_versions` VALUES ('20160330115013');
/*!40000 ALTER TABLE `doctrine_innovaaudiorecorderbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_innovacollecticielbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_innovacollecticielbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_innovacollecticielbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_innovacollecticielbundle_versions`
--

LOCK TABLES `doctrine_innovacollecticielbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_innovacollecticielbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_innovacollecticielbundle_versions` VALUES ('20160113152537'),('20160429112134'),('20160512160118'),('20160526103805'),('20160601103914'),('20160613091211'),('20160614173913'),('20160615115202'),('20160623113642'),('20160624135648');
/*!40000 ALTER TABLE `doctrine_innovacollecticielbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_innovamediaresourcebundle_versions`
--

DROP TABLE IF EXISTS `doctrine_innovamediaresourcebundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_innovamediaresourcebundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_innovamediaresourcebundle_versions`
--

LOCK TABLES `doctrine_innovamediaresourcebundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_innovamediaresourcebundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_innovamediaresourcebundle_versions` VALUES ('20160621112001');
/*!40000 ALTER TABLE `doctrine_innovamediaresourcebundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_innovapathbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_innovapathbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_innovapathbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_innovapathbundle_versions`
--

LOCK TABLES `doctrine_innovapathbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_innovapathbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_innovapathbundle_versions` VALUES ('20150520093240'),('20150604114657'),('20150612100621'),('20150821091841'),('20150908153520'),('20150909175452'),('20151015102813'),('20160108093121'),('20160111125236'),('20160201090451'),('20160517175314'),('20160606160650'),('20161017161733');
/*!40000 ALTER TABLE `doctrine_innovapathbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_innovavideorecorderbundle_versions`
--

DROP TABLE IF EXISTS `doctrine_innovavideorecorderbundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_innovavideorecorderbundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_innovavideorecorderbundle_versions`
--

LOCK TABLES `doctrine_innovavideorecorderbundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_innovavideorecorderbundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_innovavideorecorderbundle_versions` VALUES ('20160404132931');
/*!40000 ALTER TABLE `doctrine_innovavideorecorderbundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_ujmexobundle_versions`
--

DROP TABLE IF EXISTS `doctrine_ujmexobundle_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_ujmexobundle_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_ujmexobundle_versions`
--

LOCK TABLES `doctrine_ujmexobundle_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_ujmexobundle_versions` DISABLE KEYS */;
INSERT INTO `doctrine_ujmexobundle_versions` VALUES ('20150923181250'),('20160121095840'),('20160204152921'),('20160208170151'),('20160325100549'),('20160521073423'),('20160522074135'),('20160525113210'),('20160526152914'),('20160824103348'),('20160901163804'),('20160906134001'),('20160928103948'),('20160929103152'),('20161004215152'),('20161009100906'),('20161009192957'),('20161010174239'),('20161010214401'),('20161102120915'),('20161118100602'),('20161120095146'),('20161123131857'),('20161124151551'),('20161128104517'),('20161130082133'),('20161213074630'),('20161219164337'),('20161220140457'),('20170104182145'),('20170104203421'),('20170105150732'),('20170109075113'),('20170111135100'),('20170113075433'),('20170113122419'),('20170113124810'),('20170118143154'),('20170118143155'),('20170120131422'),('20170120150009'),('20170123050000'),('20170123160000'),('20170131184412');
/*!40000 ALTER TABLE `doctrine_ujmexobundle_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_presencebundle_period`
--

DROP TABLE IF EXISTS `formalibre_presencebundle_period`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_presencebundle_period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_period` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_date` date NOT NULL,
  `school_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `begin_hour` time NOT NULL,
  `end_hour` time NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `schoolYear_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4E4AE7C08BF32374` (`schoolYear_id`),
  CONSTRAINT `FK_4E4AE7C08BF32374` FOREIGN KEY (`schoolYear_id`) REFERENCES `formalibre_presencebundle_schoolYear` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_presencebundle_period`
--

LOCK TABLES `formalibre_presencebundle_period` WRITE;
/*!40000 ALTER TABLE `formalibre_presencebundle_period` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_presencebundle_period` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_presencebundle_presence`
--

DROP TABLE IF EXISTS `formalibre_presencebundle_presence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_presencebundle_presence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `user_teacher_id` int(11) DEFAULT NULL,
  `user_student_id` int(11) DEFAULT NULL,
  `period_id` int(11) DEFAULT NULL,
  `course_session` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `Comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_33952B616BF700BD` (`status_id`),
  KEY `IDX_33952B61E6E7B8F1` (`user_teacher_id`),
  KEY `IDX_33952B616CF389F6` (`user_student_id`),
  KEY `IDX_33952B61EC8B7ADE` (`period_id`),
  KEY `IDX_33952B61D887D038` (`course_session`),
  CONSTRAINT `FK_33952B616BF700BD` FOREIGN KEY (`status_id`) REFERENCES `formalibre_presencebundle_status` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_33952B616CF389F6` FOREIGN KEY (`user_student_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_33952B61D887D038` FOREIGN KEY (`course_session`) REFERENCES `claro_cursusbundle_course_session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_33952B61E6E7B8F1` FOREIGN KEY (`user_teacher_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_33952B61EC8B7ADE` FOREIGN KEY (`period_id`) REFERENCES `formalibre_presencebundle_period` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_presencebundle_presence`
--

LOCK TABLES `formalibre_presencebundle_presence` WRITE;
/*!40000 ALTER TABLE `formalibre_presencebundle_presence` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_presencebundle_presence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_presencebundle_rights`
--

DROP TABLE IF EXISTS `formalibre_presencebundle_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_presencebundle_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `mask` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8A92280DD60322AC` (`role_id`),
  CONSTRAINT `FK_8A92280DD60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_presencebundle_rights`
--

LOCK TABLES `formalibre_presencebundle_rights` WRITE;
/*!40000 ALTER TABLE `formalibre_presencebundle_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_presencebundle_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_presencebundle_schoolYear`
--

DROP TABLE IF EXISTS `formalibre_presencebundle_schoolYear`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_presencebundle_schoolYear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schoolYearName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schoolYear_begin` date NOT NULL,
  `schoolYear_end` date NOT NULL,
  `schoolDay_begin_hour` time NOT NULL,
  `schoolDay_end_hour` time NOT NULL,
  `schoolYearActual` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_presencebundle_schoolYear`
--

LOCK TABLES `formalibre_presencebundle_schoolYear` WRITE;
/*!40000 ALTER TABLE `formalibre_presencebundle_schoolYear` DISABLE KEYS */;
INSERT INTO `formalibre_presencebundle_schoolYear` VALUES (1,'2016-2017','2016-09-01','2017-06-30','07:00:00','17:00:00',1);
/*!40000 ALTER TABLE `formalibre_presencebundle_schoolYear` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_presencebundle_status`
--

DROP TABLE IF EXISTS `formalibre_presencebundle_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_presencebundle_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statusName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusByDefault` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_presencebundle_status`
--

LOCK TABLES `formalibre_presencebundle_status` WRITE;
/*!40000 ALTER TABLE `formalibre_presencebundle_status` DISABLE KEYS */;
INSERT INTO `formalibre_presencebundle_status` VALUES (1,'Présent','#0fef40',1),(2,'Absent','#f20000',1),(3,'Retard','#ffb31f',1);
/*!40000 ALTER TABLE `formalibre_presencebundle_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_reservation`
--

DROP TABLE IF EXISTS `formalibre_reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_modification` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_71058F7071F7E88B` (`event_id`),
  KEY `IDX_71058F70BC91F416` (`resource`),
  CONSTRAINT `FK_71058F7071F7E88B` FOREIGN KEY (`event_id`) REFERENCES `claro_event` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_71058F70BC91F416` FOREIGN KEY (`resource`) REFERENCES `formalibre_reservation_resource` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_reservation`
--

LOCK TABLES `formalibre_reservation` WRITE;
/*!40000 ALTER TABLE `formalibre_reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_reservation_resource`
--

DROP TABLE IF EXISTS `formalibre_reservation_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_reservation_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `max_time_reservation` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `localisation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7AAF141683FEF793` (`resource_type`),
  CONSTRAINT `FK_7AAF141683FEF793` FOREIGN KEY (`resource_type`) REFERENCES `formalibre_reservation_resource_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_reservation_resource`
--

LOCK TABLES `formalibre_reservation_resource` WRITE;
/*!40000 ALTER TABLE `formalibre_reservation_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_reservation_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_reservation_resource_rights`
--

DROP TABLE IF EXISTS `formalibre_reservation_resource_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_reservation_resource_rights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `mask` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_92EF974689329D25` (`resource_id`),
  KEY `IDX_92EF9746D60322AC` (`role_id`),
  CONSTRAINT `FK_92EF974689329D25` FOREIGN KEY (`resource_id`) REFERENCES `formalibre_reservation_resource` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_92EF9746D60322AC` FOREIGN KEY (`role_id`) REFERENCES `claro_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_reservation_resource_rights`
--

LOCK TABLES `formalibre_reservation_resource_rights` WRITE;
/*!40000 ALTER TABLE `formalibre_reservation_resource_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_reservation_resource_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_reservation_resource_type`
--

DROP TABLE IF EXISTS `formalibre_reservation_resource_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_reservation_resource_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_reservation_resource_type`
--

LOCK TABLES `formalibre_reservation_resource_type` WRITE;
/*!40000 ALTER TABLE `formalibre_reservation_resource_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_reservation_resource_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_comment`
--

DROP TABLE IF EXISTS `formalibre_support_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `edition_date` datetime DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EA0B277BA76ED395` (`user_id`),
  KEY `IDX_EA0B277B700047D2` (`ticket_id`),
  CONSTRAINT `FK_EA0B277B700047D2` FOREIGN KEY (`ticket_id`) REFERENCES `formalibre_support_ticket` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EA0B277BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_comment`
--

LOCK TABLES `formalibre_support_comment` WRITE;
/*!40000 ALTER TABLE `formalibre_support_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_support_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_configuration`
--

DROP TABLE IF EXISTS `formalibre_support_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_configuration`
--

LOCK TABLES `formalibre_support_configuration` WRITE;
/*!40000 ALTER TABLE `formalibre_support_configuration` DISABLE KEYS */;
INSERT INTO `formalibre_support_configuration` VALUES (1,'{\"with_credits\":false,\"contacts\":[]}');
/*!40000 ALTER TABLE `formalibre_support_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_intervention`
--

DROP TABLE IF EXISTS `formalibre_support_intervention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_intervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `externalComment` longtext COLLATE utf8_unicode_ci,
  `internalComment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_B1287482A76ED395` (`user_id`),
  KEY `IDX_B1287482700047D2` (`ticket_id`),
  KEY `IDX_B12874826BF700BD` (`status_id`),
  CONSTRAINT `FK_B12874826BF700BD` FOREIGN KEY (`status_id`) REFERENCES `formalibre_support_status` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_B1287482700047D2` FOREIGN KEY (`ticket_id`) REFERENCES `formalibre_support_ticket` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B1287482A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_intervention`
--

LOCK TABLES `formalibre_support_intervention` WRITE;
/*!40000 ALTER TABLE `formalibre_support_intervention` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_support_intervention` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_status`
--

DROP TABLE IF EXISTS `formalibre_support_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_order` int(11) NOT NULL,
  `status_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B509CF116625D392` (`status_name`),
  UNIQUE KEY `UNIQ_B509CF1177153098` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_status`
--

LOCK TABLES `formalibre_support_status` WRITE;
/*!40000 ALTER TABLE `formalibre_support_status` DISABLE KEYS */;
INSERT INTO `formalibre_support_status` VALUES (1,'status_pc','PC',1,1),(2,'status_an','AN',2,0),(3,'status_cc','CC',3,0),(4,'status_pr','PR',4,0),(5,'status_ac','AC',5,0),(6,'status_et','ET',6,0),(7,'status_fa','FA',7,2);
/*!40000 ALTER TABLE `formalibre_support_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_ticket`
--

DROP TABLE IF EXISTS `formalibre_support_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `num` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  KEY `IDX_59A907AEA76ED395` (`user_id`),
  KEY `IDX_59A907AEC54C8C93` (`type_id`),
  KEY `IDX_59A907AE6BF700BD` (`status_id`),
  CONSTRAINT `FK_59A907AE6BF700BD` FOREIGN KEY (`status_id`) REFERENCES `formalibre_support_status` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_59A907AEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_59A907AEC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `formalibre_support_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_ticket`
--

LOCK TABLES `formalibre_support_ticket` WRITE;
/*!40000 ALTER TABLE `formalibre_support_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `formalibre_support_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formalibre_support_type`
--

DROP TABLE IF EXISTS `formalibre_support_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formalibre_support_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1FFFD8FB892CBB0E` (`type_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formalibre_support_type`
--

LOCK TABLES `formalibre_support_type` WRITE;
/*!40000 ALTER TABLE `formalibre_support_type` DISABLE KEYS */;
INSERT INTO `formalibre_support_type` VALUES (1,'functional'),(2,'technical');
/*!40000 ALTER TABLE `formalibre_support_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_organization`
--

DROP TABLE IF EXISTS `group_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_organization` (
  `group_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`organization_id`),
  KEY `IDX_2DA82945FE54D947` (`group_id`),
  KEY `IDX_2DA8294532C8A3DE` (`organization_id`),
  CONSTRAINT `FK_2DA8294532C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2DA82945FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_organization`
--

LOCK TABLES `group_organization` WRITE;
/*!40000 ALTER TABLE `group_organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_ability`
--

DROP TABLE IF EXISTS `hevinci_ability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_ability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `minActivityCount` int(11) NOT NULL,
  `activityCount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_11E77B9D5E237E06` (`name`(200))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_ability`
--

LOCK TABLES `hevinci_ability` WRITE;
/*!40000 ALTER TABLE `hevinci_ability` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_ability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_ability_activity`
--

DROP TABLE IF EXISTS `hevinci_ability_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_ability_activity` (
  `ability_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  PRIMARY KEY (`ability_id`,`activity_id`),
  KEY `IDX_46D92D328016D8B2` (`ability_id`),
  KEY `IDX_46D92D3281C06096` (`activity_id`),
  CONSTRAINT `FK_46D92D328016D8B2` FOREIGN KEY (`ability_id`) REFERENCES `hevinci_ability` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_46D92D3281C06096` FOREIGN KEY (`activity_id`) REFERENCES `claro_activity` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_ability_activity`
--

LOCK TABLES `hevinci_ability_activity` WRITE;
/*!40000 ALTER TABLE `hevinci_ability_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_ability_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_ability_progress`
--

DROP TABLE IF EXISTS `hevinci_ability_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_ability_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ability_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `passed_activity_ids` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:simple_array)',
  `passed_activity_count` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ability_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C8ACD62E8016D8B2` (`ability_id`),
  KEY `IDX_C8ACD62EA76ED395` (`user_id`),
  CONSTRAINT `FK_C8ACD62E8016D8B2` FOREIGN KEY (`ability_id`) REFERENCES `hevinci_ability` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C8ACD62EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_ability_progress`
--

LOCK TABLES `hevinci_ability_progress` WRITE;
/*!40000 ALTER TABLE `hevinci_ability_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_ability_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_competency`
--

DROP TABLE IF EXISTS `hevinci_competency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_competency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scale_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `activityCount` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_61ECD5E6F73142C2` (`scale_id`),
  KEY `IDX_61ECD5E6727ACA70` (`parent_id`),
  CONSTRAINT `FK_61ECD5E6727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_61ECD5E6F73142C2` FOREIGN KEY (`scale_id`) REFERENCES `hevinci_scale` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_competency`
--

LOCK TABLES `hevinci_competency` WRITE;
/*!40000 ALTER TABLE `hevinci_competency` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_competency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_competency_ability`
--

DROP TABLE IF EXISTS `hevinci_competency_ability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_competency_ability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competency_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_38178A41FB9F58C` (`competency_id`),
  KEY `IDX_38178A418016D8B2` (`ability_id`),
  KEY `IDX_38178A415FB14BA7` (`level_id`),
  CONSTRAINT `FK_38178A415FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `hevinci_level` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_38178A418016D8B2` FOREIGN KEY (`ability_id`) REFERENCES `hevinci_ability` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_38178A41FB9F58C` FOREIGN KEY (`competency_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_competency_ability`
--

LOCK TABLES `hevinci_competency_ability` WRITE;
/*!40000 ALTER TABLE `hevinci_competency_ability` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_competency_ability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_competency_activity`
--

DROP TABLE IF EXISTS `hevinci_competency_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_competency_activity` (
  `competency_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  PRIMARY KEY (`competency_id`,`activity_id`),
  KEY `IDX_82CDDCBFFB9F58C` (`competency_id`),
  KEY `IDX_82CDDCBF81C06096` (`activity_id`),
  CONSTRAINT `FK_82CDDCBF81C06096` FOREIGN KEY (`activity_id`) REFERENCES `claro_activity` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_82CDDCBFFB9F58C` FOREIGN KEY (`competency_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_competency_activity`
--

LOCK TABLES `hevinci_competency_activity` WRITE;
/*!40000 ALTER TABLE `hevinci_competency_activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_competency_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_competency_progress`
--

DROP TABLE IF EXISTS `hevinci_competency_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_competency_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competency_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `competency_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CB827A3FB9F58C` (`competency_id`),
  KEY `IDX_CB827A3A76ED395` (`user_id`),
  KEY `IDX_CB827A35FB14BA7` (`level_id`),
  CONSTRAINT `FK_CB827A35FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `hevinci_level` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_CB827A3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_CB827A3FB9F58C` FOREIGN KEY (`competency_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_competency_progress`
--

LOCK TABLES `hevinci_competency_progress` WRITE;
/*!40000 ALTER TABLE `hevinci_competency_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_competency_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_competency_progress_log`
--

DROP TABLE IF EXISTS `hevinci_competency_progress_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_competency_progress_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competency_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `competency_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8522FF2AFB9F58C` (`competency_id`),
  KEY `IDX_8522FF2AA76ED395` (`user_id`),
  KEY `IDX_8522FF2A5FB14BA7` (`level_id`),
  CONSTRAINT `FK_8522FF2A5FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `hevinci_level` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_8522FF2AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_8522FF2AFB9F58C` FOREIGN KEY (`competency_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_competency_progress_log`
--

LOCK TABLES `hevinci_competency_progress_log` WRITE;
/*!40000 ALTER TABLE `hevinci_competency_progress_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_competency_progress_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_favourite`
--

DROP TABLE IF EXISTS `hevinci_favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_favourite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `resource_node_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_55DB0452A76ED3951BAD783F` (`user_id`,`resource_node_id`),
  KEY `IDX_55DB0452A76ED395` (`user_id`),
  KEY `IDX_55DB04521BAD783F` (`resource_node_id`),
  CONSTRAINT `FK_55DB04521BAD783F` FOREIGN KEY (`resource_node_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_55DB0452A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_favourite`
--

LOCK TABLES `hevinci_favourite` WRITE;
/*!40000 ALTER TABLE `hevinci_favourite` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_learning_objective`
--

DROP TABLE IF EXISTS `hevinci_learning_objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_learning_objective` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_10D9D6545E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_learning_objective`
--

LOCK TABLES `hevinci_learning_objective` WRITE;
/*!40000 ALTER TABLE `hevinci_learning_objective` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_learning_objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_level`
--

DROP TABLE IF EXISTS `hevinci_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scale_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A5EB96D7F73142C2` (`scale_id`),
  CONSTRAINT `FK_A5EB96D7F73142C2` FOREIGN KEY (`scale_id`) REFERENCES `hevinci_scale` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_level`
--

LOCK TABLES `hevinci_level` WRITE;
/*!40000 ALTER TABLE `hevinci_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_objective_competency`
--

DROP TABLE IF EXISTS `hevinci_objective_competency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_objective_competency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objective_id` int(11) NOT NULL,
  `competency_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `framework_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EDBF854473484933` (`objective_id`),
  KEY `IDX_EDBF8544FB9F58C` (`competency_id`),
  KEY `IDX_EDBF85445FB14BA7` (`level_id`),
  KEY `IDX_EDBF854437AECF72` (`framework_id`),
  CONSTRAINT `FK_EDBF854437AECF72` FOREIGN KEY (`framework_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EDBF85445FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `hevinci_level` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EDBF854473484933` FOREIGN KEY (`objective_id`) REFERENCES `hevinci_learning_objective` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EDBF8544FB9F58C` FOREIGN KEY (`competency_id`) REFERENCES `hevinci_competency` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_objective_competency`
--

LOCK TABLES `hevinci_objective_competency` WRITE;
/*!40000 ALTER TABLE `hevinci_objective_competency` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_objective_competency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_objective_group`
--

DROP TABLE IF EXISTS `hevinci_objective_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_objective_group` (
  `objective_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`objective_id`,`group_id`),
  KEY `IDX_FFDC9E073484933` (`objective_id`),
  KEY `IDX_FFDC9E0FE54D947` (`group_id`),
  CONSTRAINT `FK_FFDC9E073484933` FOREIGN KEY (`objective_id`) REFERENCES `hevinci_learning_objective` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FFDC9E0FE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_objective_group`
--

LOCK TABLES `hevinci_objective_group` WRITE;
/*!40000 ALTER TABLE `hevinci_objective_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_objective_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_objective_progress`
--

DROP TABLE IF EXISTS `hevinci_objective_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_objective_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objective_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `objective_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CAC2DC3873484933` (`objective_id`),
  KEY `IDX_CAC2DC38A76ED395` (`user_id`),
  CONSTRAINT `FK_CAC2DC3873484933` FOREIGN KEY (`objective_id`) REFERENCES `hevinci_learning_objective` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_CAC2DC38A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_objective_progress`
--

LOCK TABLES `hevinci_objective_progress` WRITE;
/*!40000 ALTER TABLE `hevinci_objective_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_objective_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_objective_progress_log`
--

DROP TABLE IF EXISTS `hevinci_objective_progress_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_objective_progress_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objective_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `objective_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F125F34773484933` (`objective_id`),
  KEY `IDX_F125F347A76ED395` (`user_id`),
  CONSTRAINT `FK_F125F34773484933` FOREIGN KEY (`objective_id`) REFERENCES `hevinci_learning_objective` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_F125F347A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_objective_progress_log`
--

LOCK TABLES `hevinci_objective_progress_log` WRITE;
/*!40000 ALTER TABLE `hevinci_objective_progress_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_objective_progress_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_objective_user`
--

DROP TABLE IF EXISTS `hevinci_objective_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_objective_user` (
  `objective_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`objective_id`,`user_id`),
  KEY `IDX_6D032C1573484933` (`objective_id`),
  KEY `IDX_6D032C15A76ED395` (`user_id`),
  CONSTRAINT `FK_6D032C1573484933` FOREIGN KEY (`objective_id`) REFERENCES `hevinci_learning_objective` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6D032C15A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_objective_user`
--

LOCK TABLES `hevinci_objective_user` WRITE;
/*!40000 ALTER TABLE `hevinci_objective_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_objective_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_scale`
--

DROP TABLE IF EXISTS `hevinci_scale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_scale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D3477F405E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_scale`
--

LOCK TABLES `hevinci_scale` WRITE;
/*!40000 ALTER TABLE `hevinci_scale` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_scale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_url`
--

DROP TABLE IF EXISTS `hevinci_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internal_url` tinyint(1) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A3D1D452B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_A3D1D452B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_url`
--

LOCK TABLES `hevinci_url` WRITE;
/*!40000 ALTER TABLE `hevinci_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_user_progress`
--

DROP TABLE IF EXISTS `hevinci_user_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_user_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_53E81580A76ED395` (`user_id`),
  CONSTRAINT `FK_53E81580A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_user_progress`
--

LOCK TABLES `hevinci_user_progress` WRITE;
/*!40000 ALTER TABLE `hevinci_user_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_user_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hevinci_user_progress_log`
--

DROP TABLE IF EXISTS `hevinci_user_progress_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hevinci_user_progress_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `percentage` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5125DF35A76ED395` (`user_id`),
  CONSTRAINT `FK_5125DF35A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hevinci_user_progress_log`
--

LOCK TABLES `hevinci_user_progress_log` WRITE;
/*!40000 ALTER TABLE `hevinci_user_progress_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `hevinci_user_progress_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog`
--

DROP TABLE IF EXISTS `icap__blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infos` longtext COLLATE utf8_unicode_ci,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD75E6C4B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_FD75E6C4B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog`
--

LOCK TABLES `icap__blog` WRITE;
/*!40000 ALTER TABLE `icap__blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_comment`
--

DROP TABLE IF EXISTS `icap__blog_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `publication_date` datetime DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_95EB616FA76ED395` (`user_id`),
  KEY `IDX_95EB616F4B89032C` (`post_id`),
  CONSTRAINT `FK_95EB616F4B89032C` FOREIGN KEY (`post_id`) REFERENCES `icap__blog_post` (`id`),
  CONSTRAINT `FK_95EB616FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_comment`
--

LOCK TABLES `icap__blog_comment` WRITE;
/*!40000 ALTER TABLE `icap__blog_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_options`
--

DROP TABLE IF EXISTS `icap__blog_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `authorize_comment` tinyint(1) NOT NULL,
  `authorize_anonymous_comment` tinyint(1) NOT NULL,
  `post_per_page` smallint(6) NOT NULL,
  `auto_publish_post` tinyint(1) NOT NULL,
  `auto_publish_comment` tinyint(1) NOT NULL,
  `display_title` tinyint(1) NOT NULL,
  `banner_activate` tinyint(1) NOT NULL,
  `banner_background_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_height` smallint(6) NOT NULL,
  `banner_background_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_background_image_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_background_image_repeat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_cloud` smallint(6) DEFAULT NULL,
  `display_post_view_counter` tinyint(1) NOT NULL DEFAULT '1',
  `display_list_widget_blog_right` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '01112131415161',
  `tag_top_mode` tinyint(1) NOT NULL,
  `max_tag` smallint(6) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D1AAC984DAE07E97` (`blog_id`),
  CONSTRAINT `FK_D1AAC984DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `icap__blog` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_options`
--

LOCK TABLES `icap__blog_options` WRITE;
/*!40000 ALTER TABLE `icap__blog_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_post`
--

DROP TABLE IF EXISTS `icap__blog_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` datetime DEFAULT NULL,
  `publication_date` datetime DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `viewCounter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B067922989D9B62` (`slug`),
  KEY `IDX_1B067922A76ED395` (`user_id`),
  KEY `IDX_1B067922DAE07E97` (`blog_id`),
  CONSTRAINT `FK_1B067922A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_1B067922DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `icap__blog` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_post`
--

LOCK TABLES `icap__blog_post` WRITE;
/*!40000 ALTER TABLE `icap__blog_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_post_tag`
--

DROP TABLE IF EXISTS `icap__blog_post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `IDX_C3C6F4794B89032C` (`post_id`),
  KEY `IDX_C3C6F479BAD26311` (`tag_id`),
  CONSTRAINT `FK_C3C6F4794B89032C` FOREIGN KEY (`post_id`) REFERENCES `icap__blog_post` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C3C6F479BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `icap__blog_tag` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_post_tag`
--

LOCK TABLES `icap__blog_post_tag` WRITE;
/*!40000 ALTER TABLE `icap__blog_post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_tag`
--

DROP TABLE IF EXISTS `icap__blog_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8BE678285E237E06` (`name`),
  UNIQUE KEY `UNIQ_8BE67828989D9B62` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_tag`
--

LOCK TABLES `icap__blog_tag` WRITE;
/*!40000 ALTER TABLE `icap__blog_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_widget_blog`
--

DROP TABLE IF EXISTS `icap__blog_widget_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_widget_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resourceNode_id` int(11) DEFAULT NULL,
  `widgetInstance_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_widget_blog` (`resourceNode_id`,`widgetInstance_id`),
  KEY `IDX_EDA40898B87FAB32` (`resourceNode_id`),
  KEY `IDX_EDA40898AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_EDA40898AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EDA40898B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_widget_blog`
--

LOCK TABLES `icap__blog_widget_blog` WRITE;
/*!40000 ALTER TABLE `icap__blog_widget_blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_widget_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_widget_list_blog`
--

DROP TABLE IF EXISTS `icap__blog_widget_list_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_widget_list_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resourceNode_id` int(11) NOT NULL,
  `widgetInstance_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_294D4E02AB7B5A55` (`widgetInstance_id`),
  KEY `IDX_294D4E02B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_294D4E02AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_294D4E02B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_widget_list_blog`
--

LOCK TABLES `icap__blog_widget_list_blog` WRITE;
/*!40000 ALTER TABLE `icap__blog_widget_list_blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_widget_list_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_widget_list_options`
--

DROP TABLE IF EXISTS `icap__blog_widget_list_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_widget_list_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayStyle` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `widgetInstance_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_987CAC1AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_987CAC1AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_widget_list_options`
--

LOCK TABLES `icap__blog_widget_list_options` WRITE;
/*!40000 ALTER TABLE `icap__blog_widget_list_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_widget_list_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__blog_widget_tag_list_blog`
--

DROP TABLE IF EXISTS `icap__blog_widget_tag_list_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__blog_widget_tag_list_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_cloud` smallint(6) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `widgetInstance_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_widget_tag_list_blog` (`resourceNode_id`,`widgetInstance_id`),
  KEY `IDX_75E7D178B87FAB32` (`resourceNode_id`),
  KEY `IDX_75E7D178AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_75E7D178AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_75E7D178B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__blog_widget_tag_list_blog`
--

LOCK TABLES `icap__blog_widget_tag_list_blog` WRITE;
/*!40000 ALTER TABLE `icap__blog_widget_tag_list_blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__blog_widget_tag_list_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_correction`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_correction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_correction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `drop_id` int(11) DEFAULT NULL,
  `drop_zone_id` int(11) NOT NULL,
  `total_grade` decimal(10,2) DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `valid` tinyint(1) NOT NULL,
  `start_date` datetime NOT NULL,
  `last_open_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `finished` tinyint(1) NOT NULL,
  `editable` tinyint(1) NOT NULL,
  `reporter` tinyint(1) NOT NULL,
  `reportComment` longtext COLLATE utf8_unicode_ci,
  `correctionDenied` tinyint(1) NOT NULL,
  `correctionDeniedComment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_CDA81F40A76ED395` (`user_id`),
  KEY `IDX_CDA81F404D224760` (`drop_id`),
  KEY `IDX_CDA81F40A8C6E7BD` (`drop_zone_id`),
  CONSTRAINT `FK_CDA81F404D224760` FOREIGN KEY (`drop_id`) REFERENCES `icap__dropzonebundle_drop` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_CDA81F40A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_CDA81F40A8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `icap__dropzonebundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_correction`
--

LOCK TABLES `icap__dropzonebundle_correction` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_correction` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_correction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_criterion`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_criterion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_criterion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drop_zone_id` int(11) NOT NULL,
  `instruction` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F94B3BA7A8C6E7BD` (`drop_zone_id`),
  CONSTRAINT `FK_F94B3BA7A8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `icap__dropzonebundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_criterion`
--

LOCK TABLES `icap__dropzonebundle_criterion` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_criterion` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_criterion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_document`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_node_id` int(11) DEFAULT NULL,
  `drop_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_744084241BAD783F` (`resource_node_id`),
  KEY `IDX_744084244D224760` (`drop_id`),
  CONSTRAINT `FK_744084241BAD783F` FOREIGN KEY (`resource_node_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_744084244D224760` FOREIGN KEY (`drop_id`) REFERENCES `icap__dropzonebundle_drop` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_document`
--

LOCK TABLES `icap__dropzonebundle_document` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_drop`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_drop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_drop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drop_zone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hidden_directory_id` int(11) DEFAULT NULL,
  `drop_date` datetime NOT NULL,
  `reported` tinyint(1) NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `number` int(11) NOT NULL,
  `auto_closed_drop` tinyint(1) NOT NULL DEFAULT '0',
  `unlocked_drop` tinyint(1) NOT NULL DEFAULT '0',
  `unlocked_user` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_drop_for_user_in_drop_zone` (`drop_zone_id`,`user_id`),
  UNIQUE KEY `unique_drop_number_in_drop_zone` (`drop_zone_id`,`number`),
  UNIQUE KEY `UNIQ_3AD19BA65342CDF` (`hidden_directory_id`),
  KEY `IDX_3AD19BA6A8C6E7BD` (`drop_zone_id`),
  KEY `IDX_3AD19BA6A76ED395` (`user_id`),
  CONSTRAINT `FK_3AD19BA65342CDF` FOREIGN KEY (`hidden_directory_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_3AD19BA6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_3AD19BA6A8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `icap__dropzonebundle_dropzone` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_drop`
--

LOCK TABLES `icap__dropzonebundle_drop` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_drop` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_drop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_dropzone`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_dropzone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_dropzone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hidden_directory_id` int(11) DEFAULT NULL,
  `edition_state` smallint(6) NOT NULL,
  `instruction` longtext COLLATE utf8_unicode_ci,
  `allow_workspace_resource` tinyint(1) NOT NULL,
  `allow_upload` tinyint(1) NOT NULL,
  `allow_url` tinyint(1) NOT NULL,
  `allow_rich_text` tinyint(1) NOT NULL,
  `peer_review` tinyint(1) NOT NULL,
  `expected_total_correction` smallint(6) NOT NULL,
  `display_notation_to_learners` tinyint(1) NOT NULL,
  `display_notation_message_to_learners` tinyint(1) NOT NULL,
  `minimum_score_to_pass` double NOT NULL,
  `manual_planning` tinyint(1) NOT NULL,
  `manual_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_allow_drop` datetime DEFAULT NULL,
  `end_allow_drop` datetime DEFAULT NULL,
  `start_review` datetime DEFAULT NULL,
  `end_review` datetime DEFAULT NULL,
  `allow_comment_in_correction` tinyint(1) NOT NULL,
  `total_criteria_column` smallint(6) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `diplay_corrections_to_learners` tinyint(1) NOT NULL,
  `allow_correction_deny` tinyint(1) NOT NULL,
  `correction_instruction` longtext COLLATE utf8_unicode_ci,
  `success_message` longtext COLLATE utf8_unicode_ci,
  `fail_message` longtext COLLATE utf8_unicode_ci,
  `auto_close_opened_drops_when_time_is_up` tinyint(1) NOT NULL DEFAULT '0',
  `auto_close_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `notify_on_drop` tinyint(1) NOT NULL DEFAULT '0',
  `force_comment_in_correction` tinyint(1) NOT NULL,
  `event_agenda_drop` int(11) DEFAULT NULL,
  `event_agenda_correction` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6782FC235342CDF` (`hidden_directory_id`),
  UNIQUE KEY `UNIQ_6782FC23B87FAB32` (`resourceNode_id`),
  UNIQUE KEY `UNIQ_6782FC23E6B974D2` (`event_agenda_drop`),
  UNIQUE KEY `UNIQ_6782FC238D9E1321` (`event_agenda_correction`),
  CONSTRAINT `FK_6782FC235342CDF` FOREIGN KEY (`hidden_directory_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_6782FC238D9E1321` FOREIGN KEY (`event_agenda_correction`) REFERENCES `claro_event` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_6782FC23B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6782FC23E6B974D2` FOREIGN KEY (`event_agenda_drop`) REFERENCES `claro_event` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_dropzone`
--

LOCK TABLES `icap__dropzonebundle_dropzone` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_dropzone` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_dropzone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__dropzonebundle_grade`
--

DROP TABLE IF EXISTS `icap__dropzonebundle_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__dropzonebundle_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criterion_id` int(11) NOT NULL,
  `correction_id` int(11) NOT NULL,
  `value` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_grade_for_criterion_and_correction` (`criterion_id`,`correction_id`),
  KEY `IDX_B3C52D9397766307` (`criterion_id`),
  KEY `IDX_B3C52D9394AE086B` (`correction_id`),
  CONSTRAINT `FK_B3C52D9394AE086B` FOREIGN KEY (`correction_id`) REFERENCES `icap__dropzonebundle_correction` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B3C52D9397766307` FOREIGN KEY (`criterion_id`) REFERENCES `icap__dropzonebundle_criterion` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__dropzonebundle_grade`
--

LOCK TABLES `icap__dropzonebundle_grade` WRITE;
/*!40000 ALTER TABLE `icap__dropzonebundle_grade` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__dropzonebundle_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__lesson`
--

DROP TABLE IF EXISTS `icap__lesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `root_id` int(11) DEFAULT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D9B3613079066886` (`root_id`),
  UNIQUE KEY `UNIQ_D9B36130B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_D9B3613079066886` FOREIGN KEY (`root_id`) REFERENCES `icap__lesson_chapter` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D9B36130B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__lesson`
--

LOCK TABLES `icap__lesson` WRITE;
/*!40000 ALTER TABLE `icap__lesson` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__lesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__lesson_chapter`
--

DROP TABLE IF EXISTS `icap__lesson_chapter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__lesson_chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3D7E3C8C989D9B62` (`slug`),
  KEY `IDX_3D7E3C8CCDF80196` (`lesson_id`),
  KEY `IDX_3D7E3C8C727ACA70` (`parent_id`),
  CONSTRAINT `FK_3D7E3C8C727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `icap__lesson_chapter` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_3D7E3C8CCDF80196` FOREIGN KEY (`lesson_id`) REFERENCES `icap__lesson` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__lesson_chapter`
--

LOCK TABLES `icap__lesson_chapter` WRITE;
/*!40000 ALTER TABLE `icap__lesson_chapter` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__lesson_chapter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__notification`
--

DROP TABLE IF EXISTS `icap__notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `icon_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__notification`
--

LOCK TABLES `icap__notification` WRITE;
/*!40000 ALTER TABLE `icap__notification` DISABLE KEYS */;
INSERT INTO `icap__notification` VALUES (1,'2017-05-18 23:47:04',NULL,NULL,NULL,'role-subscribe_user','{\"role\":{\"name\":\"admin\"},\"receiverUser\":{\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"username\":\"admin\"}}'),(2,'2017-06-15 14:35:47',1,NULL,NULL,'role-subscribe_user','{\"role\":{\"name\":\"admin\"},\"receiverUser\":{\"firstName\":\"Samuel\",\"lastName\":\"Galle\",\"username\":\"Crazyboy\"},\"doer\":{\"id\":1,\"firstName\":\"Xavier\",\"lastName\":\"Gonzalez\",\"avatar\":null,\"publicUrl\":\"xavier.gonzalez\"}}');
/*!40000 ALTER TABLE `icap__notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__notification_follower_resource`
--

DROP TABLE IF EXISTS `icap__notification_follower_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__notification_follower_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `resource_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resource_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__notification_follower_resource`
--

LOCK TABLES `icap__notification_follower_resource` WRITE;
/*!40000 ALTER TABLE `icap__notification_follower_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__notification_follower_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__notification_plugin_configuration`
--

DROP TABLE IF EXISTS `icap__notification_plugin_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__notification_plugin_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dropdown_items` int(11) NOT NULL,
  `max_per_page` int(11) NOT NULL,
  `purge_enabled` tinyint(1) NOT NULL,
  `purge_after_days` int(11) NOT NULL,
  `last_purge_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__notification_plugin_configuration`
--

LOCK TABLES `icap__notification_plugin_configuration` WRITE;
/*!40000 ALTER TABLE `icap__notification_plugin_configuration` DISABLE KEYS */;
INSERT INTO `icap__notification_plugin_configuration` VALUES (1,10,50,1,60,'2017-06-15 00:00:00');
/*!40000 ALTER TABLE `icap__notification_plugin_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__notification_user_parameters`
--

DROP TABLE IF EXISTS `icap__notification_user_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__notification_user_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `display_enabled_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `rss_enabled_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `rss_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F44A756DA9D08426` (`rss_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__notification_user_parameters`
--

LOCK TABLES `icap__notification_user_parameters` WRITE;
/*!40000 ALTER TABLE `icap__notification_user_parameters` DISABLE KEYS */;
INSERT INTO `icap__notification_user_parameters` VALUES (1,1,'a:0:{}','a:0:{}','2e8b7d7edb47616426b4ae6454b17725'),(2,2,'a:0:{}','a:0:{}','c6b350352c202b90106782fc7773e537'),(3,3,'a:0:{}','a:0:{}','e63f05bae39a09cfdb829b5edbbfa8e7');
/*!40000 ALTER TABLE `icap__notification_user_parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__notification_viewer`
--

DROP TABLE IF EXISTS `icap__notification_viewer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__notification_viewer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) NOT NULL,
  `viewer_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB60418BEF1A9D84` (`notification_id`),
  KEY `viewer_idx` (`viewer_id`),
  CONSTRAINT `FK_DB60418BEF1A9D84` FOREIGN KEY (`notification_id`) REFERENCES `icap__notification` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__notification_viewer`
--

LOCK TABLES `icap__notification_viewer` WRITE;
/*!40000 ALTER TABLE `icap__notification_viewer` DISABLE KEYS */;
INSERT INTO `icap__notification_viewer` VALUES (1,2,2,1);
/*!40000 ALTER TABLE `icap__notification_viewer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__oauth_user`
--

DROP TABLE IF EXISTS `icap__oauth_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__oauth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `oauthId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_301D647CA76ED395` (`user_id`),
  CONSTRAINT `FK_301D647CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__oauth_user`
--

LOCK TABLES `icap__oauth_user` WRITE;
/*!40000 ALTER TABLE `icap__oauth_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__oauth_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio`
--

DROP TABLE IF EXISTS `icap__portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  `deletedAt` datetime DEFAULT NULL,
  `comments_view_at` datetime NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8B1895D989D9B62` (`slug`),
  KEY `IDX_8B1895DA76ED395` (`user_id`),
  CONSTRAINT `FK_8B1895DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio`
--

LOCK TABLES `icap__portfolio` WRITE;
/*!40000 ALTER TABLE `icap__portfolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_abstract_widget`
--

DROP TABLE IF EXISTS `icap__portfolio_abstract_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_abstract_widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `widget_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3E7AEFBBA76ED395` (`user_id`),
  CONSTRAINT `FK_3E7AEFBBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_abstract_widget`
--

LOCK TABLES `icap__portfolio_abstract_widget` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_abstract_widget` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_abstract_widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_comments`
--

DROP TABLE IF EXISTS `icap__portfolio_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sending_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D4662DE3B96B5643` (`portfolio_id`),
  KEY `IDX_D4662DE3F624B39D` (`sender_id`),
  CONSTRAINT `FK_D4662DE3B96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`),
  CONSTRAINT `FK_D4662DE3F624B39D` FOREIGN KEY (`sender_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_comments`
--

LOCK TABLES `icap__portfolio_comments` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_groups`
--

DROP TABLE IF EXISTS `icap__portfolio_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `portfolio_groups_unique_idx` (`portfolio_id`,`group_id`),
  KEY `IDX_9AF01ADFFE54D947` (`group_id`),
  KEY `IDX_9AF01ADFB96B5643` (`portfolio_id`),
  CONSTRAINT `FK_9AF01ADFB96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`),
  CONSTRAINT `FK_9AF01ADFFE54D947` FOREIGN KEY (`group_id`) REFERENCES `claro_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_groups`
--

LOCK TABLES `icap__portfolio_groups` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_guides`
--

DROP TABLE IF EXISTS `icap__portfolio_guides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_guides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `comments_view_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `portfolio_users_unique_idx` (`portfolio_id`,`user_id`),
  KEY `IDX_27EAB640A76ED395` (`user_id`),
  KEY `IDX_27EAB640B96B5643` (`portfolio_id`),
  CONSTRAINT `FK_27EAB640A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_27EAB640B96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_guides`
--

LOCK TABLES `icap__portfolio_guides` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_guides` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_guides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_teams`
--

DROP TABLE IF EXISTS `icap__portfolio_teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `portfolio_teams_unique_idx` (`portfolio_id`,`team_id`),
  KEY `IDX_BBC17F49296CD8AE` (`team_id`),
  KEY `IDX_BBC17F49B96B5643` (`portfolio_id`),
  CONSTRAINT `FK_BBC17F49296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `claro_team` (`id`),
  CONSTRAINT `FK_BBC17F49B96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_teams`
--

LOCK TABLES `icap__portfolio_teams` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_users`
--

DROP TABLE IF EXISTS `icap__portfolio_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `portfolio_users_unique_idx` (`portfolio_id`,`user_id`),
  KEY `IDX_3980F8F8A76ED395` (`user_id`),
  KEY `IDX_3980F8F8B96B5643` (`portfolio_id`),
  CONSTRAINT `FK_3980F8F8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_3980F8F8B96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_users`
--

LOCK TABLES `icap__portfolio_users` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget`
--

DROP TABLE IF EXISTS `icap__portfolio_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `col` int(11) NOT NULL DEFAULT '0',
  `row` int(11) NOT NULL DEFAULT '0',
  `size_x` int(11) NOT NULL DEFAULT '1',
  `size_y` int(11) NOT NULL DEFAULT '1',
  `widgetType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EF643D7FB96B5643` (`portfolio_id`),
  KEY `IDX_EF643D7FFBE885E2` (`widget_id`),
  CONSTRAINT `FK_EF643D7FB96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `icap__portfolio` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EF643D7FFBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget`
--

LOCK TABLES `icap__portfolio_widget` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_badges`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_badges` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_C1AF804BBF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_badges`
--

LOCK TABLES `icap__portfolio_widget_badges` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_badges_badge`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_badges_badge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_badges_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_25D41B98F7A2C2FC` (`badge_id`),
  KEY `IDX_25D41B98FBE885E2` (`widget_id`),
  CONSTRAINT `FK_25D41B98F7A2C2FC` FOREIGN KEY (`badge_id`) REFERENCES `claro_badge` (`id`),
  CONSTRAINT `FK_25D41B98FBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `icap__portfolio_widget_badges` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_badges_badge`
--

LOCK TABLES `icap__portfolio_widget_badges_badge` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_badges_badge` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_badges_badge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_experience`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_experience` (
  `id` int(11) NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_CD7379A3BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_experience`
--

LOCK TABLES `icap__portfolio_widget_experience` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_experience` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_formations`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_formations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime DEFAULT NULL,
  `establishmentName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diploma` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_88739997BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_formations`
--

LOCK TABLES `icap__portfolio_widget_formations` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_formations` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_formations_resource`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_formations_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_formations_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `widget_id` int(11) NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uriLabel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23096D5889329D25` (`resource_id`),
  KEY `IDX_23096D58FBE885E2` (`widget_id`),
  CONSTRAINT `FK_23096D5889329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_23096D58FBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `icap__portfolio_widget_formations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_formations_resource`
--

LOCK TABLES `icap__portfolio_widget_formations_resource` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_formations_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_formations_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_presentation`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_presentation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_presentation` (
  `id` int(11) NOT NULL,
  `presentation` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_F0DBA727BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_presentation`
--

LOCK TABLES `icap__portfolio_widget_presentation` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_presentation` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_presentation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_skills`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_skills` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_6C68C5A1BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_skills`
--

LOCK TABLES `icap__portfolio_widget_skills` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_skills_skill`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_skills_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_skills_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `widget_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_98EF40A3FBE885E2` (`widget_id`),
  CONSTRAINT `FK_98EF40A3FBE885E2` FOREIGN KEY (`widget_id`) REFERENCES `icap__portfolio_widget_skills` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_skills_skill`
--

LOCK TABLES `icap__portfolio_widget_skills_skill` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_skills_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_skills_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_text`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_text` (
  `id` int(11) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_89550C61BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_text`
--

LOCK TABLES `icap__portfolio_widget_text` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_title`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_title` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1431A01D989D9B62` (`slug`),
  UNIQUE KEY `portfolio_slug_unique_idx` (`slug`),
  CONSTRAINT `FK_1431A01DBF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_title`
--

LOCK TABLES `icap__portfolio_widget_title` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_title` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_type`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3E00FC8F5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_type`
--

LOCK TABLES `icap__portfolio_widget_type` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_type` DISABLE KEYS */;
INSERT INTO `icap__portfolio_widget_type` VALUES (1,'userInformation','info'),(2,'text','align-left'),(3,'skills','bookmark'),(4,'formations','graduation-cap'),(5,'experience','briefcase'),(6,'badges','trophy');
/*!40000 ALTER TABLE `icap__portfolio_widget_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__portfolio_widget_user_information`
--

DROP TABLE IF EXISTS `icap__portfolio_widget_user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__portfolio_widget_user_information` (
  `id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `show_avatar` tinyint(1) NOT NULL,
  `show_mail` tinyint(1) NOT NULL,
  `show_phone` tinyint(1) NOT NULL,
  `show_description` tinyint(1) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_E2BFAA03BF396750` FOREIGN KEY (`id`) REFERENCES `icap__portfolio_abstract_widget` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__portfolio_widget_user_information`
--

LOCK TABLES `icap__portfolio_widget_user_information` WRITE;
/*!40000 ALTER TABLE `icap__portfolio_widget_user_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__portfolio_widget_user_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__socialmedia_comment`
--

DROP TABLE IF EXISTS `icap__socialmedia_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__socialmedia_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6FC00C3089329D25` (`resource_id`),
  KEY `IDX_6FC00C30A76ED395` (`user_id`),
  CONSTRAINT `FK_6FC00C3089329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6FC00C30A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__socialmedia_comment`
--

LOCK TABLES `icap__socialmedia_comment` WRITE;
/*!40000 ALTER TABLE `icap__socialmedia_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__socialmedia_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__socialmedia_like`
--

DROP TABLE IF EXISTS `icap__socialmedia_like`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__socialmedia_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7C98AD9089329D25` (`resource_id`),
  KEY `IDX_7C98AD90A76ED395` (`user_id`),
  CONSTRAINT `FK_7C98AD9089329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7C98AD90A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__socialmedia_like`
--

LOCK TABLES `icap__socialmedia_like` WRITE;
/*!40000 ALTER TABLE `icap__socialmedia_like` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__socialmedia_like` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__socialmedia_note`
--

DROP TABLE IF EXISTS `icap__socialmedia_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__socialmedia_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F46173789329D25` (`resource_id`),
  KEY `IDX_1F461737A76ED395` (`user_id`),
  CONSTRAINT `FK_1F46173789329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1F461737A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__socialmedia_note`
--

LOCK TABLES `icap__socialmedia_note` WRITE;
/*!40000 ALTER TABLE `icap__socialmedia_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__socialmedia_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__socialmedia_share`
--

DROP TABLE IF EXISTS `icap__socialmedia_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__socialmedia_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `network` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4DB117C589329D25` (`resource_id`),
  KEY `IDX_4DB117C5A76ED395` (`user_id`),
  CONSTRAINT `FK_4DB117C589329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4DB117C5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__socialmedia_share`
--

LOCK TABLES `icap__socialmedia_share` WRITE;
/*!40000 ALTER TABLE `icap__socialmedia_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__socialmedia_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__socialmedia_wall_item`
--

DROP TABLE IF EXISTS `icap__socialmedia_wall_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__socialmedia_wall_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `like_id` int(11) DEFAULT NULL,
  `share_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_436BC420859BFA32` (`like_id`),
  KEY `IDX_436BC4202AE63FDB` (`share_id`),
  KEY `IDX_436BC420F8697D13` (`comment_id`),
  KEY `IDX_436BC420A76ED395` (`user_id`),
  CONSTRAINT `FK_436BC4202AE63FDB` FOREIGN KEY (`share_id`) REFERENCES `icap__socialmedia_share` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_436BC420859BFA32` FOREIGN KEY (`like_id`) REFERENCES `icap__socialmedia_like` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_436BC420A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_436BC420F8697D13` FOREIGN KEY (`comment_id`) REFERENCES `icap__socialmedia_comment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__socialmedia_wall_item`
--

LOCK TABLES `icap__socialmedia_wall_item` WRITE;
/*!40000 ALTER TABLE `icap__socialmedia_wall_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__socialmedia_wall_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__website`
--

DROP TABLE IF EXISTS `icap__website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resourceNode_id` int(11) DEFAULT NULL,
  `root_id` int(11) DEFAULT NULL,
  `options_id` int(11) DEFAULT NULL,
  `homepage_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_452309F8B87FAB32` (`resourceNode_id`),
  UNIQUE KEY `UNIQ_452309F879066886` (`root_id`),
  UNIQUE KEY `UNIQ_452309F83ADB05F1` (`options_id`),
  UNIQUE KEY `UNIQ_452309F8571EDDA` (`homepage_id`),
  CONSTRAINT `FK_452309F83ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `icap__website_options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_452309F8571EDDA` FOREIGN KEY (`homepage_id`) REFERENCES `icap__website_page` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_452309F879066886` FOREIGN KEY (`root_id`) REFERENCES `icap__website_page` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_452309F8B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__website`
--

LOCK TABLES `icap__website` WRITE;
/*!40000 ALTER TABLE `icap__website` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__website_options`
--

DROP TABLE IF EXISTS `icap__website_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__website_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_id` int(11) DEFAULT NULL,
  `copyrightEnabled` tinyint(1) NOT NULL,
  `copyrightText` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `analyticsProvider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `analyticsAccountId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cssCode` longtext COLLATE utf8_unicode_ci,
  `bgColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bgImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bgRepeat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bgPosition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerBgColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerBgImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerBgRepeat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerBgPosition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bannerHeight` int(11) DEFAULT NULL,
  `bannerEnabled` tinyint(1) NOT NULL,
  `bannerText` longtext COLLATE utf8_unicode_ci,
  `footerBgColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footerBgImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footerBgRepeat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footerBgPosition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footerHeight` int(11) DEFAULT NULL,
  `footerEnabled` tinyint(1) NOT NULL,
  `footerText` longtext COLLATE utf8_unicode_ci,
  `menuBgColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sectionBgColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuBorderColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuHoverColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontFamily` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontStyle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontWeight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuWidth` int(11) DEFAULT NULL,
  `menuOrientation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuFontSize` int(11) DEFAULT NULL,
  `totalWidth` int(11) DEFAULT NULL,
  `sectionFontColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bgContentColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C40F17718F45C82` (`website_id`),
  CONSTRAINT `FK_C40F17718F45C82` FOREIGN KEY (`website_id`) REFERENCES `icap__website` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__website_options`
--

LOCK TABLES `icap__website_options` WRITE;
/*!40000 ALTER TABLE `icap__website_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__website_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__website_page`
--

DROP TABLE IF EXISTS `icap__website_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__website_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_node_id` int(11) DEFAULT NULL,
  `website_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `richText` longtext COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isSection` tinyint(1) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNodeType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isHomepage` tinyint(1) DEFAULT NULL,
  `target` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FB66D1D41BAD783F` (`resource_node_id`),
  KEY `IDX_FB66D1D418F45C82` (`website_id`),
  KEY `IDX_FB66D1D4727ACA70` (`parent_id`),
  CONSTRAINT `FK_FB66D1D418F45C82` FOREIGN KEY (`website_id`) REFERENCES `icap__website` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FB66D1D41BAD783F` FOREIGN KEY (`resource_node_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_FB66D1D4727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `icap__website_page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__website_page`
--

LOCK TABLES `icap__website_page` WRITE;
/*!40000 ALTER TABLE `icap__website_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__website_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__wiki`
--

DROP TABLE IF EXISTS `icap__wiki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__wiki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `root_id` int(11) DEFAULT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `mode` smallint(6) DEFAULT NULL,
  `displaySectionNumbers` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1FAD6B8179066886` (`root_id`),
  UNIQUE KEY `UNIQ_1FAD6B81B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_1FAD6B8179066886` FOREIGN KEY (`root_id`) REFERENCES `icap__wiki_section` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1FAD6B81B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__wiki`
--

LOCK TABLES `icap__wiki` WRITE;
/*!40000 ALTER TABLE `icap__wiki` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__wiki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__wiki_contribution`
--

DROP TABLE IF EXISTS `icap__wiki_contribution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__wiki_contribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_781E6502A76ED395` (`user_id`),
  KEY `IDX_781E6502D823E37A` (`section_id`),
  CONSTRAINT `FK_781E6502A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_781E6502D823E37A` FOREIGN KEY (`section_id`) REFERENCES `icap__wiki_section` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__wiki_contribution`
--

LOCK TABLES `icap__wiki_contribution` WRITE;
/*!40000 ALTER TABLE `icap__wiki_contribution` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__wiki_contribution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `icap__wiki_section`
--

DROP TABLE IF EXISTS `icap__wiki_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `icap__wiki_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `wiki_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  `active_contribution_id` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `deletion_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_82904AAFE665925` (`active_contribution_id`),
  KEY `IDX_82904AAA76ED395` (`user_id`),
  KEY `IDX_82904AAAA948DBE` (`wiki_id`),
  KEY `IDX_82904AA727ACA70` (`parent_id`),
  CONSTRAINT `FK_82904AA727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `icap__wiki_section` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_82904AAA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_82904AAAA948DBE` FOREIGN KEY (`wiki_id`) REFERENCES `icap__wiki` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_82904AAFE665925` FOREIGN KEY (`active_contribution_id`) REFERENCES `icap__wiki_contribution` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `icap__wiki_section`
--

LOCK TABLES `icap__wiki_section` WRITE;
/*!40000 ALTER TABLE `icap__wiki_section` DISABLE KEYS */;
/*!40000 ALTER TABLE `icap__wiki_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_audio_recorder_configuration`
--

DROP TABLE IF EXISTS `innova_audio_recorder_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_audio_recorder_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `max_recording_time` int(11) NOT NULL DEFAULT '0',
  `max_try` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_audio_recorder_configuration`
--

LOCK TABLES `innova_audio_recorder_configuration` WRITE;
/*!40000 ALTER TABLE `innova_audio_recorder_configuration` DISABLE KEYS */;
INSERT INTO `innova_audio_recorder_configuration` VALUES (1,60,5);
/*!40000 ALTER TABLE `innova_audio_recorder_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_choice_criteria`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_choice_criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_choice_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criteria_id` int(11) NOT NULL,
  `choice_text` longtext COLLATE utf8_unicode_ci,
  `notation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2EC94D86990BEA15` (`criteria_id`),
  KEY `IDX_2EC94D869680B7F7` (`notation_id`),
  CONSTRAINT `FK_2EC94D869680B7F7` FOREIGN KEY (`notation_id`) REFERENCES `innova_collecticielbundle_notation` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2EC94D86990BEA15` FOREIGN KEY (`criteria_id`) REFERENCES `innova_collecticielbundle_grading_criteria` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_choice_criteria`
--

LOCK TABLES `innova_collecticielbundle_choice_criteria` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_choice_criteria` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_choice_criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_choice_notation`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_choice_notation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_choice_notation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `choice_text` longtext COLLATE utf8_unicode_ci,
  `notation_id` int(11) NOT NULL,
  `criteria_notation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9ABE6A929680B7F7` (`notation_id`),
  KEY `IDX_9ABE6A9224B233E4` (`criteria_notation_id`),
  CONSTRAINT `FK_9ABE6A9224B233E4` FOREIGN KEY (`criteria_notation_id`) REFERENCES `innova_collecticielbundle_grading_notation` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9ABE6A929680B7F7` FOREIGN KEY (`notation_id`) REFERENCES `innova_collecticielbundle_notation` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_choice_notation`
--

LOCK TABLES `innova_collecticielbundle_choice_notation` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_choice_notation` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_choice_notation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_comment`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` longtext COLLATE utf8_unicode_ci,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A9CB9095C33F7837` (`document_id`),
  KEY `IDX_A9CB9095A76ED395` (`user_id`),
  CONSTRAINT `FK_A9CB9095A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_A9CB9095C33F7837` FOREIGN KEY (`document_id`) REFERENCES `innova_collecticielbundle_document` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_comment`
--

LOCK TABLES `innova_collecticielbundle_comment` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_comment_read`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_comment_read`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_comment_read` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_83EB06B9F8697D13` (`comment_id`),
  KEY `IDX_83EB06B9A76ED395` (`user_id`),
  CONSTRAINT `FK_83EB06B9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_83EB06B9F8697D13` FOREIGN KEY (`comment_id`) REFERENCES `innova_collecticielbundle_comment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_comment_read`
--

LOCK TABLES `innova_collecticielbundle_comment_read` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_comment_read` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_comment_read` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_correction`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_correction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_correction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `drop_id` int(11) DEFAULT NULL,
  `drop_zone_id` int(11) NOT NULL,
  `total_grade` decimal(10,2) DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `valid` tinyint(1) NOT NULL,
  `start_date` datetime NOT NULL,
  `last_open_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `finished` tinyint(1) NOT NULL,
  `editable` tinyint(1) NOT NULL,
  `reporter` tinyint(1) NOT NULL,
  `reportComment` longtext COLLATE utf8_unicode_ci,
  `correctionDenied` tinyint(1) NOT NULL,
  `correctionDeniedComment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_BA9AF20BA76ED395` (`user_id`),
  KEY `IDX_BA9AF20B4D224760` (`drop_id`),
  KEY `IDX_BA9AF20BA8C6E7BD` (`drop_zone_id`),
  CONSTRAINT `FK_BA9AF20B4D224760` FOREIGN KEY (`drop_id`) REFERENCES `innova_collecticielbundle_drop` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_BA9AF20BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_BA9AF20BA8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_correction`
--

LOCK TABLES `innova_collecticielbundle_correction` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_correction` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_correction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_criterion`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_criterion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_criterion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drop_zone_id` int(11) NOT NULL,
  `instruction` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CC96E6A6A8C6E7BD` (`drop_zone_id`),
  CONSTRAINT `FK_CC96E6A6A8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_criterion`
--

LOCK TABLES `innova_collecticielbundle_criterion` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_criterion` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_criterion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_document`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_node_id` int(11) DEFAULT NULL,
  `drop_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `validate` tinyint(1) NOT NULL,
  `document_date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1C357F0C1BAD783F` (`resource_node_id`),
  KEY `IDX_1C357F0C4D224760` (`drop_id`),
  KEY `IDX_1C357F0CF624B39D` (`sender_id`),
  CONSTRAINT `FK_1C357F0C1BAD783F` FOREIGN KEY (`resource_node_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_1C357F0C4D224760` FOREIGN KEY (`drop_id`) REFERENCES `innova_collecticielbundle_drop` (`id`),
  CONSTRAINT `FK_1C357F0CF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_document`
--

LOCK TABLES `innova_collecticielbundle_document` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_drop`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_drop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_drop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drop_zone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hidden_directory_id` int(11) DEFAULT NULL,
  `drop_date` datetime NOT NULL,
  `reported` tinyint(1) NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `number` int(11) NOT NULL,
  `auto_closed_drop` tinyint(1) NOT NULL DEFAULT '0',
  `unlocked_drop` tinyint(1) NOT NULL DEFAULT '0',
  `unlocked_user` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_drop_for_user_in_drop_zone` (`drop_zone_id`,`user_id`),
  UNIQUE KEY `unique_drop_number_in_drop_zone` (`drop_zone_id`,`number`),
  UNIQUE KEY `UNIQ_717572395342CDF` (`hidden_directory_id`),
  KEY `IDX_71757239A8C6E7BD` (`drop_zone_id`),
  KEY `IDX_71757239A76ED395` (`user_id`),
  CONSTRAINT `FK_717572395342CDF` FOREIGN KEY (`hidden_directory_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_71757239A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_71757239A8C6E7BD` FOREIGN KEY (`drop_zone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_drop`
--

LOCK TABLES `innova_collecticielbundle_drop` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_drop` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_drop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_dropzone`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_dropzone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_dropzone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hidden_directory_id` int(11) DEFAULT NULL,
  `event_agenda_drop` int(11) DEFAULT NULL,
  `event_agenda_correction` int(11) DEFAULT NULL,
  `edition_state` smallint(6) NOT NULL,
  `instruction` longtext COLLATE utf8_unicode_ci,
  `correction_instruction` longtext COLLATE utf8_unicode_ci,
  `success_message` longtext COLLATE utf8_unicode_ci,
  `fail_message` longtext COLLATE utf8_unicode_ci,
  `allow_workspace_resource` tinyint(1) NOT NULL,
  `allow_upload` tinyint(1) NOT NULL,
  `allow_url` tinyint(1) NOT NULL,
  `allow_rich_text` tinyint(1) NOT NULL,
  `peer_review` tinyint(1) NOT NULL,
  `expected_total_correction` smallint(6) NOT NULL,
  `display_notation_to_learners` tinyint(1) NOT NULL,
  `display_notation_message_to_learners` tinyint(1) NOT NULL,
  `minimum_score_to_pass` double NOT NULL,
  `manual_planning` tinyint(1) NOT NULL,
  `manual_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_allow_drop` datetime DEFAULT NULL,
  `end_allow_drop` datetime DEFAULT NULL,
  `start_review` datetime DEFAULT NULL,
  `end_review` datetime DEFAULT NULL,
  `allow_comment_in_correction` tinyint(1) NOT NULL,
  `force_comment_in_correction` tinyint(1) NOT NULL,
  `diplay_corrections_to_learners` tinyint(1) NOT NULL,
  `allow_correction_deny` tinyint(1) NOT NULL,
  `total_criteria_column` smallint(6) NOT NULL,
  `auto_close_opened_drops_when_time_is_up` tinyint(1) NOT NULL DEFAULT '0',
  `auto_close_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `notify_on_drop` tinyint(1) NOT NULL DEFAULT '0',
  `return_receipt` tinyint(1) NOT NULL DEFAULT '0',
  `evaluation` tinyint(1) NOT NULL DEFAULT '0',
  `picture` tinyint(1) NOT NULL DEFAULT '0',
  `username` tinyint(1) NOT NULL DEFAULT '0',
  `resourceNode_id` int(11) DEFAULT NULL,
  `evaluation_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'noEvaluation',
  `maximum_notation` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FF7070B5342CDF` (`hidden_directory_id`),
  UNIQUE KEY `UNIQ_FF7070BE6B974D2` (`event_agenda_drop`),
  UNIQUE KEY `UNIQ_FF7070B8D9E1321` (`event_agenda_correction`),
  UNIQUE KEY `UNIQ_FF7070BB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_FF7070B5342CDF` FOREIGN KEY (`hidden_directory_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_FF7070B8D9E1321` FOREIGN KEY (`event_agenda_correction`) REFERENCES `claro_event` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_FF7070BB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FF7070BE6B974D2` FOREIGN KEY (`event_agenda_drop`) REFERENCES `claro_event` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_dropzone`
--

LOCK TABLES `innova_collecticielbundle_dropzone` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_dropzone` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_dropzone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_grade`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criterion_id` int(11) NOT NULL,
  `correction_id` int(11) NOT NULL,
  `value` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_grade_for_criterion_and_correction` (`criterion_id`,`correction_id`),
  KEY `IDX_D33E07AF97766307` (`criterion_id`),
  KEY `IDX_D33E07AF94AE086B` (`correction_id`),
  CONSTRAINT `FK_D33E07AF94AE086B` FOREIGN KEY (`correction_id`) REFERENCES `innova_collecticielbundle_correction` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D33E07AF97766307` FOREIGN KEY (`criterion_id`) REFERENCES `innova_collecticielbundle_criterion` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_grade`
--

LOCK TABLES `innova_collecticielbundle_grade` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_grade` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_grading_criteria`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_grading_criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_grading_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dropzone_id` int(11) NOT NULL,
  `criteria_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CFFAAB5D54FC3EC3` (`dropzone_id`),
  CONSTRAINT `FK_CFFAAB5D54FC3EC3` FOREIGN KEY (`dropzone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_grading_criteria`
--

LOCK TABLES `innova_collecticielbundle_grading_criteria` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_criteria` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_grading_notation`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_grading_notation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_grading_notation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dropzone_id` int(11) NOT NULL,
  `notation_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7B8D8C4954FC3EC3` (`dropzone_id`),
  CONSTRAINT `FK_7B8D8C4954FC3EC3` FOREIGN KEY (`dropzone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_grading_notation`
--

LOCK TABLES `innova_collecticielbundle_grading_notation` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_notation` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_notation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_grading_scale`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_grading_scale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_grading_scale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dropzone_id` int(11) NOT NULL,
  `scale_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_99352CDE54FC3EC3` (`dropzone_id`),
  CONSTRAINT `FK_99352CDE54FC3EC3` FOREIGN KEY (`dropzone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_grading_scale`
--

LOCK TABLES `innova_collecticielbundle_grading_scale` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_scale` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_grading_scale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_notation`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_notation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_notation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `dropzone_id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment_text` longtext COLLATE utf8_unicode_ci,
  `quality_text` longtext COLLATE utf8_unicode_ci,
  `note_date` datetime NOT NULL,
  `recordOrTransmit` tinyint(1) NOT NULL,
  `appreciation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C63449EFA76ED395` (`user_id`),
  KEY `IDX_C63449EFC33F7837` (`document_id`),
  KEY `IDX_C63449EF54FC3EC3` (`dropzone_id`),
  CONSTRAINT `FK_C63449EF54FC3EC3` FOREIGN KEY (`dropzone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C63449EFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_C63449EFC33F7837` FOREIGN KEY (`document_id`) REFERENCES `innova_collecticielbundle_document` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_notation`
--

LOCK TABLES `innova_collecticielbundle_notation` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_notation` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_notation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_return_receipt`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_return_receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_return_receipt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dropzone_id` int(11) NOT NULL,
  `return_receipt_type_id` int(11) DEFAULT NULL,
  `return_receipt_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_78A1DB96C33F7837` (`document_id`),
  KEY `IDX_78A1DB96A76ED395` (`user_id`),
  KEY `IDX_78A1DB9654FC3EC3` (`dropzone_id`),
  KEY `IDX_78A1DB96FD252543` (`return_receipt_type_id`),
  CONSTRAINT `FK_78A1DB9654FC3EC3` FOREIGN KEY (`dropzone_id`) REFERENCES `innova_collecticielbundle_dropzone` (`id`),
  CONSTRAINT `FK_78A1DB96A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_78A1DB96C33F7837` FOREIGN KEY (`document_id`) REFERENCES `innova_collecticielbundle_document` (`id`),
  CONSTRAINT `FK_78A1DB96FD252543` FOREIGN KEY (`return_receipt_type_id`) REFERENCES `innova_collecticielbundle_return_receipt_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_return_receipt`
--

LOCK TABLES `innova_collecticielbundle_return_receipt` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_return_receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_collecticielbundle_return_receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_collecticielbundle_return_receipt_type`
--

DROP TABLE IF EXISTS `innova_collecticielbundle_return_receipt_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_collecticielbundle_return_receipt_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_collecticielbundle_return_receipt_type`
--

LOCK TABLES `innova_collecticielbundle_return_receipt_type` WRITE;
/*!40000 ALTER TABLE `innova_collecticielbundle_return_receipt_type` DISABLE KEYS */;
INSERT INTO `innova_collecticielbundle_return_receipt_type` VALUES (1,'NO RETURN RECEIPT'),(2,'DOUBLOON'),(3,'DOCUMENT RECEIVED'),(4,'DOCUMENT UNREADABLE'),(5,'INCOMPLETE DOCUMENT'),(6,'ERROR DOCUMENT');
/*!40000 ALTER TABLE `innova_collecticielbundle_return_receipt_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_path`
--

DROP TABLE IF EXISTS `innova_path`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_path` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structure` longtext COLLATE utf8_unicode_ci NOT NULL,
  `breadcrumbs` tinyint(1) NOT NULL,
  `modified` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `resourceNode_id` int(11) DEFAULT NULL,
  `summary_displayed` tinyint(1) NOT NULL,
  `is_complete_blocking_condition` tinyint(1) NOT NULL,
  `manual_progression_allowed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CE19F054B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_CE19F054B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_path`
--

LOCK TABLES `innova_path` WRITE;
/*!40000 ALTER TABLE `innova_path` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_path` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_path_progression`
--

DROP TABLE IF EXISTS `innova_path_progression`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_path_progression` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `progression_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authorized_access` tinyint(1) NOT NULL,
  `locked_access` tinyint(1) NOT NULL,
  `lockedcall_access` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_960F966A73B21E9C` (`step_id`),
  KEY `IDX_960F966AA76ED395` (`user_id`),
  CONSTRAINT `FK_960F966A73B21E9C` FOREIGN KEY (`step_id`) REFERENCES `innova_step` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_960F966AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_path_progression`
--

LOCK TABLES `innova_path_progression` WRITE;
/*!40000 ALTER TABLE `innova_path_progression` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_path_progression` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_path_widget_config`
--

DROP TABLE IF EXISTS `innova_path_widget_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_path_widget_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:simple_array)',
  `widgetInstance_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C9025154AB7B5A55` (`widgetInstance_id`),
  CONSTRAINT `FK_C9025154AB7B5A55` FOREIGN KEY (`widgetInstance_id`) REFERENCES `claro_widget_instance` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_path_widget_config`
--

LOCK TABLES `innova_path_widget_config` WRITE;
/*!40000 ALTER TABLE `innova_path_widget_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_path_widget_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_path_widget_config_tags`
--

DROP TABLE IF EXISTS `innova_path_widget_config_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_path_widget_config_tags` (
  `widget_config_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`widget_config_id`,`tag_id`),
  KEY `IDX_95075D98685E7B00` (`widget_config_id`),
  KEY `IDX_95075D98BAD26311` (`tag_id`),
  CONSTRAINT `FK_95075D98685E7B00` FOREIGN KEY (`widget_config_id`) REFERENCES `innova_path_widget_config` (`id`),
  CONSTRAINT `FK_95075D98BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `claro_tagbundle_tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_path_widget_config_tags`
--

LOCK TABLES `innova_path_widget_config_tags` WRITE;
/*!40000 ALTER TABLE `innova_path_widget_config_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_path_widget_config_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_pathtemplate`
--

DROP TABLE IF EXISTS `innova_pathtemplate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_pathtemplate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `breadcrumbs` tinyint(1) NOT NULL,
  `structure` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_pathtemplate`
--

LOCK TABLES `innova_pathtemplate` WRITE;
/*!40000 ALTER TABLE `innova_pathtemplate` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_pathtemplate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_step`
--

DROP TABLE IF EXISTS `innova_step`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_step` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) DEFAULT NULL,
  `parameters_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `path_id` int(11) DEFAULT NULL,
  `lvl` int(11) NOT NULL,
  `step_order` int(11) NOT NULL,
  `activity_height` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_86F4856781C06096` (`activity_id`),
  KEY `IDX_86F4856788BD9C1F` (`parameters_id`),
  KEY `IDX_86F48567727ACA70` (`parent_id`),
  KEY `IDX_86F48567D96C566B` (`path_id`),
  CONSTRAINT `FK_86F48567727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `innova_step` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_86F4856781C06096` FOREIGN KEY (`activity_id`) REFERENCES `claro_activity` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_86F4856788BD9C1F` FOREIGN KEY (`parameters_id`) REFERENCES `claro_activity_parameters` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_86F48567D96C566B` FOREIGN KEY (`path_id`) REFERENCES `innova_path` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_step`
--

LOCK TABLES `innova_step` WRITE;
/*!40000 ALTER TABLE `innova_step` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_step` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_step_inherited_resources`
--

DROP TABLE IF EXISTS `innova_step_inherited_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_step_inherited_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C7E87ECC73B21E9C` (`step_id`),
  KEY `IDX_C7E87ECC89329D25` (`resource_id`),
  CONSTRAINT `FK_C7E87ECC73B21E9C` FOREIGN KEY (`step_id`) REFERENCES `innova_step` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C7E87ECC89329D25` FOREIGN KEY (`resource_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_step_inherited_resources`
--

LOCK TABLES `innova_step_inherited_resources` WRITE;
/*!40000 ALTER TABLE `innova_step_inherited_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_step_inherited_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_stepcondition`
--

DROP TABLE IF EXISTS `innova_stepcondition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_stepcondition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `step_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C6D7069F73B21E9C` (`step_id`),
  CONSTRAINT `FK_C6D7069F73B21E9C` FOREIGN KEY (`step_id`) REFERENCES `innova_step` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_stepcondition`
--

LOCK TABLES `innova_stepcondition` WRITE;
/*!40000 ALTER TABLE `innova_stepcondition` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_stepcondition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_stepcondition_criteriagroup`
--

DROP TABLE IF EXISTS `innova_stepcondition_criteriagroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_stepcondition_criteriagroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `stepcondition_id` int(11) DEFAULT NULL,
  `lvl` int(11) NOT NULL,
  `criteriagroup_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F33A94EA727ACA70` (`parent_id`),
  KEY `IDX_F33A94EAD71D3B68` (`stepcondition_id`),
  CONSTRAINT `FK_F33A94EA727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `innova_stepcondition_criteriagroup` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F33A94EAD71D3B68` FOREIGN KEY (`stepcondition_id`) REFERENCES `innova_stepcondition` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_stepcondition_criteriagroup`
--

LOCK TABLES `innova_stepcondition_criteriagroup` WRITE;
/*!40000 ALTER TABLE `innova_stepcondition_criteriagroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_stepcondition_criteriagroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_stepcondition_criterion`
--

DROP TABLE IF EXISTS `innova_stepcondition_criterion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_stepcondition_criterion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criteriagroup_id` int(11) DEFAULT NULL,
  `ctype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D1B1FC36E10D333F` (`criteriagroup_id`),
  CONSTRAINT `FK_D1B1FC36E10D333F` FOREIGN KEY (`criteriagroup_id`) REFERENCES `innova_stepcondition_criteriagroup` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_stepcondition_criterion`
--

LOCK TABLES `innova_stepcondition_criterion` WRITE;
/*!40000 ALTER TABLE `innova_stepcondition_criterion` DISABLE KEYS */;
/*!40000 ALTER TABLE `innova_stepcondition_criterion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `innova_video_recorder_configuration`
--

DROP TABLE IF EXISTS `innova_video_recorder_configuration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `innova_video_recorder_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `max_recording_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `innova_video_recorder_configuration`
--

LOCK TABLES `innova_video_recorder_configuration` WRITE;
/*!40000 ALTER TABLE `innova_video_recorder_configuration` DISABLE KEYS */;
INSERT INTO `innova_video_recorder_configuration` VALUES (1,120);
/*!40000 ALTER TABLE `innova_video_recorder_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_organization`
--

DROP TABLE IF EXISTS `location_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location_organization` (
  `location_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`location_id`,`organization_id`),
  KEY `IDX_B049331264D218E` (`location_id`),
  KEY `IDX_B049331232C8A3DE` (`organization_id`),
  CONSTRAINT `FK_B049331232C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B049331264D218E` FOREIGN KEY (`location_id`) REFERENCES `claro__location` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_organization`
--

LOCK TABLES `location_organization` WRITE;
/*!40000 ALTER TABLE `location_organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `location_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource`
--

DROP TABLE IF EXISTS `media_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `options_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B3F0DAA43ADB05F1` (`options_id`),
  UNIQUE KEY `UNIQ_B3F0DAA4B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_B3F0DAA43ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `media_resource_options` (`id`),
  CONSTRAINT `FK_B3F0DAA4B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource`
--

LOCK TABLES `media_resource` WRITE;
/*!40000 ALTER TABLE `media_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_help_link`
--

DROP TABLE IF EXISTS `media_resource_help_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_help_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_config_id` int(11) NOT NULL,
  `url` varchar(510) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F1D62D0C771B52B7` (`region_config_id`),
  CONSTRAINT `FK_F1D62D0C771B52B7` FOREIGN KEY (`region_config_id`) REFERENCES `media_resource_region_config` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_help_link`
--

LOCK TABLES `media_resource_help_link` WRITE;
/*!40000 ALTER TABLE `media_resource_help_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_help_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_help_text`
--

DROP TABLE IF EXISTS `media_resource_help_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_help_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_config_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FCF1133A771B52B7` (`region_config_id`),
  CONSTRAINT `FK_FCF1133A771B52B7` FOREIGN KEY (`region_config_id`) REFERENCES `media_resource_region_config` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_help_text`
--

LOCK TABLES `media_resource_help_text` WRITE;
/*!40000 ALTER TABLE `media_resource_help_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_help_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_media`
--

DROP TABLE IF EXISTS `media_resource_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_resource_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0A22F7E7E5AEFB6` (`media_resource_id`),
  CONSTRAINT `FK_E0A22F7E7E5AEFB6` FOREIGN KEY (`media_resource_id`) REFERENCES `media_resource` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_media`
--

LOCK TABLES `media_resource_media` WRITE;
/*!40000 ALTER TABLE `media_resource_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_options`
--

DROP TABLE IF EXISTS `media_resource_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showTextTranscription` tinyint(1) NOT NULL DEFAULT '0',
  `ttsLanguage` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_options`
--

LOCK TABLES `media_resource_options` WRITE;
/*!40000 ALTER TABLE `media_resource_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_region`
--

DROP TABLE IF EXISTS `media_resource_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_resource_id` int(11) NOT NULL,
  `start` double NOT NULL,
  `end` double NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B1E36FE87E5AEFB6` (`media_resource_id`),
  CONSTRAINT `FK_B1E36FE87E5AEFB6` FOREIGN KEY (`media_resource_id`) REFERENCES `media_resource` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_region`
--

LOCK TABLES `media_resource_region` WRITE;
/*!40000 ALTER TABLE `media_resource_region` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_resource_region_config`
--

DROP TABLE IF EXISTS `media_resource_region_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_resource_region_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_id` int(11) NOT NULL,
  `has_loop` tinyint(1) NOT NULL,
  `has_backward` tinyint(1) NOT NULL,
  `has_rate` tinyint(1) NOT NULL,
  `help_region_uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2EEE09F098260155` (`region_id`),
  CONSTRAINT `FK_2EEE09F098260155` FOREIGN KEY (`region_id`) REFERENCES `media_resource_region` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_resource_region_config`
--

LOCK TABLES `media_resource_region_config` WRITE;
/*!40000 ALTER TABLE `media_resource_region_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_resource_region_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_card_new`
--

DROP TABLE IF EXISTS `session_card_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_card_new` (
  `session_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  PRIMARY KEY (`session_id`,`card_id`),
  KEY `IDX_B0BFA0EC613FECDF` (`session_id`),
  KEY `IDX_B0BFA0EC4ACC9A20` (`card_id`),
  CONSTRAINT `FK_B0BFA0EC4ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `claro_fcbundle_card` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B0BFA0EC613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_fcbundle_session` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_card_new`
--

LOCK TABLES `session_card_new` WRITE;
/*!40000 ALTER TABLE `session_card_new` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_card_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_card_old`
--

DROP TABLE IF EXISTS `session_card_old`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_card_old` (
  `session_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  PRIMARY KEY (`session_id`,`card_id`),
  KEY `IDX_E401304C613FECDF` (`session_id`),
  KEY `IDX_E401304C4ACC9A20` (`card_id`),
  CONSTRAINT `FK_E401304C4ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `claro_fcbundle_card` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E401304C613FECDF` FOREIGN KEY (`session_id`) REFERENCES `claro_fcbundle_session` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_card_old`
--

LOCK TABLES `session_card_old` WRITE;
/*!40000 ALTER TABLE `session_card_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_card_old` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_answer_hints`
--

DROP TABLE IF EXISTS `ujm_answer_hints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_answer_hints` (
  `answer_id` int(11) NOT NULL,
  `hint_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`,`hint_id`),
  UNIQUE KEY `UNIQ_70DF26E3519161AB` (`hint_id`),
  KEY `IDX_70DF26E3AA334807` (`answer_id`),
  CONSTRAINT `FK_70DF26E3519161AB` FOREIGN KEY (`hint_id`) REFERENCES `ujm_hint` (`id`),
  CONSTRAINT `FK_70DF26E3AA334807` FOREIGN KEY (`answer_id`) REFERENCES `ujm_response` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_answer_hints`
--

LOCK TABLES `ujm_answer_hints` WRITE;
/*!40000 ALTER TABLE `ujm_answer_hints` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_answer_hints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_association`
--

DROP TABLE IF EXISTS `ujm_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `match_question_id` int(11) DEFAULT NULL,
  `label_id` int(11) DEFAULT NULL,
  `proposal_id` int(11) DEFAULT NULL,
  `score` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_2DD0DD0F2CBE8797` (`match_question_id`),
  KEY `IDX_2DD0DD0F33B92F39` (`label_id`),
  KEY `IDX_2DD0DD0FF4792058` (`proposal_id`),
  CONSTRAINT `FK_2DD0DD0F2CBE8797` FOREIGN KEY (`match_question_id`) REFERENCES `ujm_interaction_matching` (`id`),
  CONSTRAINT `FK_2DD0DD0F33B92F39` FOREIGN KEY (`label_id`) REFERENCES `ujm_label` (`id`),
  CONSTRAINT `FK_2DD0DD0FF4792058` FOREIGN KEY (`proposal_id`) REFERENCES `ujm_proposal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_association`
--

LOCK TABLES `ujm_association` WRITE;
/*!40000 ALTER TABLE `ujm_association` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_category`
--

DROP TABLE IF EXISTS `ujm_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locker` tinyint(1) NOT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9FDB39F8D17F50A6` (`uuid`),
  KEY `IDX_9FDB39F8A76ED395` (`user_id`),
  CONSTRAINT `FK_9FDB39F8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_category`
--

LOCK TABLES `ujm_category` WRITE;
/*!40000 ALTER TABLE `ujm_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_choice`
--

DROP TABLE IF EXISTS `ujm_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_qcm_id` int(11) DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `entity_order` int(11) NOT NULL,
  `score` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  `expected` tinyint(1) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D4BDFA95D17F50A6` (`uuid`),
  KEY `IDX_D4BDFA959DBF539` (`interaction_qcm_id`),
  KEY `IDX_D4BDFA95B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_D4BDFA959DBF539` FOREIGN KEY (`interaction_qcm_id`) REFERENCES `ujm_interaction_qcm` (`id`),
  CONSTRAINT `FK_D4BDFA95B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_choice`
--

LOCK TABLES `ujm_choice` WRITE;
/*!40000 ALTER TABLE `ujm_choice` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_coords`
--

DROP TABLE IF EXISTS `ujm_coords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_coords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_graphic_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shape` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` double NOT NULL,
  `size` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CD7B4982D17F50A6` (`uuid`),
  KEY `IDX_CD7B49827876D500` (`interaction_graphic_id`),
  CONSTRAINT `FK_CD7B49827876D500` FOREIGN KEY (`interaction_graphic_id`) REFERENCES `ujm_interaction_graphic` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_coords`
--

LOCK TABLES `ujm_coords` WRITE;
/*!40000 ALTER TABLE `ujm_coords` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_coords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_document`
--

DROP TABLE IF EXISTS `ujm_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_41FEAA4FA76ED395` (`user_id`),
  CONSTRAINT `FK_41FEAA4FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_document`
--

LOCK TABLES `ujm_document` WRITE;
/*!40000 ALTER TABLE `ujm_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_document_interaction`
--

DROP TABLE IF EXISTS `ujm_document_interaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_document_interaction` (
  `interaction_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`interaction_id`,`document_id`),
  KEY `IDX_FF792E7A886DEE8F` (`interaction_id`),
  KEY `IDX_FF792E7AC33F7837` (`document_id`),
  CONSTRAINT `FK_FF792E7A886DEE8F` FOREIGN KEY (`interaction_id`) REFERENCES `ujm_interaction` (`id`),
  CONSTRAINT `FK_FF792E7AC33F7837` FOREIGN KEY (`document_id`) REFERENCES `ujm_document` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_document_interaction`
--

LOCK TABLES `ujm_document_interaction` WRITE;
/*!40000 ALTER TABLE `ujm_document_interaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_document_interaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_document_question`
--

DROP TABLE IF EXISTS `ujm_document_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_document_question` (
  `question_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`,`document_id`),
  KEY `IDX_52D4A3F11E27F6BF` (`question_id`),
  KEY `IDX_52D4A3F1C33F7837` (`document_id`),
  CONSTRAINT `FK_52D4A3F11E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`),
  CONSTRAINT `FK_52D4A3F1C33F7837` FOREIGN KEY (`document_id`) REFERENCES `ujm_document` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_document_question`
--

LOCK TABLES `ujm_document_question` WRITE;
/*!40000 ALTER TABLE `ujm_document_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_document_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_exercise`
--

DROP TABLE IF EXISTS `ujm_exercise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci,
  `pick` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `max_attempts` int(11) NOT NULL,
  `correction_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_correction` datetime DEFAULT NULL,
  `mark_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interruptible` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `anonymous` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metadata_visible` tinyint(1) NOT NULL,
  `statistics` tinyint(1) NOT NULL,
  `minimal_correction` tinyint(1) NOT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `random_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `random_pick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_feedback` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_374DF525D17F50A6` (`uuid`),
  UNIQUE KEY `UNIQ_374DF525B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_374DF525B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_exercise`
--

LOCK TABLES `ujm_exercise` WRITE;
/*!40000 ALTER TABLE `ujm_exercise` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_exercise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_exercise_group`
--

DROP TABLE IF EXISTS `ujm_exercise_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_exercise_group` (
  `exercise_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`exercise_id`,`group_id`),
  KEY `IDX_78179004E934951A` (`exercise_id`),
  KEY `IDX_78179004FE54D947` (`group_id`),
  CONSTRAINT `FK_78179004E934951A` FOREIGN KEY (`exercise_id`) REFERENCES `ujm_exercise` (`id`),
  CONSTRAINT `FK_78179004FE54D947` FOREIGN KEY (`group_id`) REFERENCES `ujm_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_exercise_group`
--

LOCK TABLES `ujm_exercise_group` WRITE;
/*!40000 ALTER TABLE `ujm_exercise_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_exercise_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_exercise_question`
--

DROP TABLE IF EXISTS `ujm_exercise_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_exercise_question` (
  `exercise_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  PRIMARY KEY (`exercise_id`,`question_id`),
  KEY `IDX_DB79F240E934951A` (`exercise_id`),
  KEY `IDX_DB79F2401E27F6BF` (`question_id`),
  CONSTRAINT `FK_DB79F2401E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_DB79F240E934951A` FOREIGN KEY (`exercise_id`) REFERENCES `ujm_exercise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_exercise_question`
--

LOCK TABLES `ujm_exercise_question` WRITE;
/*!40000 ALTER TABLE `ujm_exercise_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_exercise_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_expertise`
--

DROP TABLE IF EXISTS `ujm_expertise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_expertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_expertise`
--

LOCK TABLES `ujm_expertise` WRITE;
/*!40000 ALTER TABLE `ujm_expertise` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_expertise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_expertise_user`
--

DROP TABLE IF EXISTS `ujm_expertise_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_expertise_user` (
  `expertise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`expertise_id`,`user_id`),
  KEY `IDX_F60D61B9D5B92F9` (`expertise_id`),
  KEY `IDX_F60D61BA76ED395` (`user_id`),
  CONSTRAINT `FK_F60D61B9D5B92F9` FOREIGN KEY (`expertise_id`) REFERENCES `ujm_expertise` (`id`),
  CONSTRAINT `FK_F60D61BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_expertise_user`
--

LOCK TABLES `ujm_expertise_user` WRITE;
/*!40000 ALTER TABLE `ujm_expertise_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_expertise_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_grid_item`
--

DROP TABLE IF EXISTS `ujm_grid_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_grid_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coordsX` int(11) DEFAULT NULL,
  `coordsY` int(11) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_66B59764D17F50A6` (`uuid`),
  KEY `IDX_66B59764B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_66B59764B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_grid_item`
--

LOCK TABLES `ujm_grid_item` WRITE;
/*!40000 ALTER TABLE `ujm_grid_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_grid_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_grid_odd`
--

DROP TABLE IF EXISTS `ujm_grid_odd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_grid_odd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `pair_question_id` int(11) DEFAULT NULL,
  `score` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_858E80E4126F525E` (`item_id`),
  KEY `IDX_858E80E4B745DCF` (`pair_question_id`),
  CONSTRAINT `FK_858E80E4126F525E` FOREIGN KEY (`item_id`) REFERENCES `ujm_grid_item` (`id`),
  CONSTRAINT `FK_858E80E4B745DCF` FOREIGN KEY (`pair_question_id`) REFERENCES `ujm_question_pair` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_grid_odd`
--

LOCK TABLES `ujm_grid_odd` WRITE;
/*!40000 ALTER TABLE `ujm_grid_odd` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_grid_odd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_grid_row`
--

DROP TABLE IF EXISTS `ujm_grid_row`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_grid_row` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pair_question_id` int(11) DEFAULT NULL,
  `ordered` tinyint(1) NOT NULL,
  `score` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_F63A28D2B745DCF` (`pair_question_id`),
  CONSTRAINT `FK_F63A28D2B745DCF` FOREIGN KEY (`pair_question_id`) REFERENCES `ujm_question_pair` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_grid_row`
--

LOCK TABLES `ujm_grid_row` WRITE;
/*!40000 ALTER TABLE `ujm_grid_row` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_grid_row` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_grid_row_item`
--

DROP TABLE IF EXISTS `ujm_grid_row_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_grid_row_item` (
  `row_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `entity_order` int(11) NOT NULL,
  PRIMARY KEY (`row_id`,`item_id`),
  KEY `IDX_BF97D89083A269F2` (`row_id`),
  KEY `IDX_BF97D890126F525E` (`item_id`),
  CONSTRAINT `FK_BF97D890126F525E` FOREIGN KEY (`item_id`) REFERENCES `ujm_grid_item` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_BF97D89083A269F2` FOREIGN KEY (`row_id`) REFERENCES `ujm_grid_row` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_grid_row_item`
--

LOCK TABLES `ujm_grid_row_item` WRITE;
/*!40000 ALTER TABLE `ujm_grid_row_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_grid_row_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_group`
--

DROP TABLE IF EXISTS `ujm_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_group`
--

LOCK TABLES `ujm_group` WRITE;
/*!40000 ALTER TABLE `ujm_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_hint`
--

DROP TABLE IF EXISTS `ujm_hint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_hint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `penalty` double NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B5FFCBE7D17F50A6` (`uuid`),
  KEY `IDX_B5FFCBE71E27F6BF` (`question_id`),
  KEY `IDX_B5FFCBE7B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_B5FFCBE71E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`),
  CONSTRAINT `FK_B5FFCBE7B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_hint`
--

LOCK TABLES `ujm_hint` WRITE;
/*!40000 ALTER TABLE `ujm_hint` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_hint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_hole`
--

DROP TABLE IF EXISTS `ujm_hole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_hole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_hole_id` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `selector` tinyint(1) NOT NULL,
  `placeholder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E9F4F525D17F50A6` (`uuid`),
  KEY `IDX_E9F4F52575EBD64D` (`interaction_hole_id`),
  CONSTRAINT `FK_E9F4F52575EBD64D` FOREIGN KEY (`interaction_hole_id`) REFERENCES `ujm_interaction_hole` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_hole`
--

LOCK TABLES `ujm_hole` WRITE;
/*!40000 ALTER TABLE `ujm_hole` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_hole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction`
--

DROP TABLE IF EXISTS `ujm_interaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invite` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  `locked_expertise` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E7D801641E27F6BF` (`question_id`),
  CONSTRAINT `FK_E7D801641E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction`
--

LOCK TABLES `ujm_interaction` WRITE;
/*!40000 ALTER TABLE `ujm_interaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction_graphic`
--

DROP TABLE IF EXISTS `ujm_interaction_graphic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction_graphic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9EBD442F1E27F6BF` (`question_id`),
  KEY `IDX_9EBD442F3DA5256D` (`image_id`),
  CONSTRAINT `FK_9EBD442F1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`),
  CONSTRAINT `FK_9EBD442F3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `ujm_picture` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction_graphic`
--

LOCK TABLES `ujm_interaction_graphic` WRITE;
/*!40000 ALTER TABLE `ujm_interaction_graphic` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction_graphic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction_hole`
--

DROP TABLE IF EXISTS `ujm_interaction_hole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction_hole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `htmlWithoutValue` longtext COLLATE utf8_unicode_ci NOT NULL,
  `originalText` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7343FAC11E27F6BF` (`question_id`),
  CONSTRAINT `FK_7343FAC11E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction_hole`
--

LOCK TABLES `ujm_interaction_hole` WRITE;
/*!40000 ALTER TABLE `ujm_interaction_hole` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction_hole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction_matching`
--

DROP TABLE IF EXISTS `ujm_interaction_matching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction_matching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `shuffle` tinyint(1) NOT NULL,
  `penalty` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AC9801C71E27F6BF` (`question_id`),
  CONSTRAINT `FK_AC9801C71E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction_matching`
--

LOCK TABLES `ujm_interaction_matching` WRITE;
/*!40000 ALTER TABLE `ujm_interaction_matching` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction_matching` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction_open`
--

DROP TABLE IF EXISTS `ujm_interaction_open`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `maxAnswerLength` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BFFE44F41E27F6BF` (`question_id`),
  CONSTRAINT `FK_BFFE44F41E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction_open`
--

LOCK TABLES `ujm_interaction_open` WRITE;
/*!40000 ALTER TABLE `ujm_interaction_open` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction_open` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_interaction_qcm`
--

DROP TABLE IF EXISTS `ujm_interaction_qcm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_interaction_qcm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `shuffle` tinyint(1) NOT NULL,
  `multiple` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_58C3D5A11E27F6BF` (`question_id`),
  CONSTRAINT `FK_58C3D5A11E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_interaction_qcm`
--

LOCK TABLES `ujm_interaction_qcm` WRITE;
/*!40000 ALTER TABLE `ujm_interaction_qcm` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_interaction_qcm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_label`
--

DROP TABLE IF EXISTS `ujm_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_matching_id` int(11) DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `entity_order` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C22A1EB5D17F50A6` (`uuid`),
  KEY `IDX_C22A1EB5FAB79C10` (`interaction_matching_id`),
  KEY `IDX_C22A1EB5B87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_C22A1EB5B87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_C22A1EB5FAB79C10` FOREIGN KEY (`interaction_matching_id`) REFERENCES `ujm_interaction_matching` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_label`
--

LOCK TABLES `ujm_label` WRITE;
/*!40000 ALTER TABLE `ujm_label` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_link_hint_paper`
--

DROP TABLE IF EXISTS `ujm_link_hint_paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_link_hint_paper` (
  `hint_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL,
  PRIMARY KEY (`hint_id`,`paper_id`),
  KEY `IDX_B76F00F9519161AB` (`hint_id`),
  KEY `IDX_B76F00F9E6758861` (`paper_id`),
  CONSTRAINT `FK_B76F00F9519161AB` FOREIGN KEY (`hint_id`) REFERENCES `ujm_hint` (`id`),
  CONSTRAINT `FK_B76F00F9E6758861` FOREIGN KEY (`paper_id`) REFERENCES `ujm_paper` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_link_hint_paper`
--

LOCK TABLES `ujm_link_hint_paper` WRITE;
/*!40000 ALTER TABLE `ujm_link_hint_paper` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_link_hint_paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_lock_attempt`
--

DROP TABLE IF EXISTS `ujm_lock_attempt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_lock_attempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paper_id` int(11) DEFAULT NULL,
  `key_lock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7A7CDF96E6758861` (`paper_id`),
  CONSTRAINT `FK_7A7CDF96E6758861` FOREIGN KEY (`paper_id`) REFERENCES `ujm_paper` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_lock_attempt`
--

LOCK TABLES `ujm_lock_attempt` WRITE;
/*!40000 ALTER TABLE `ujm_lock_attempt` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_lock_attempt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_object_question`
--

DROP TABLE IF EXISTS `ujm_object_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_object_question` (
  `question_id` int(11) DEFAULT NULL,
  `entity_order` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `IDX_F91814BFB87FAB32` (`resourceNode_id`),
  KEY `IDX_F91814BF1E27F6BF` (`question_id`),
  CONSTRAINT `FK_F91814BF1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F91814BFB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_object_question`
--

LOCK TABLES `ujm_object_question` WRITE;
/*!40000 ALTER TABLE `ujm_object_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_object_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_paper`
--

DROP TABLE IF EXISTS `ujm_paper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `exercise_id` int(11) DEFAULT NULL,
  `num_paper` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `ordre_question` longtext COLLATE utf8_unicode_ci,
  `interupt` tinyint(1) DEFAULT NULL,
  `score` double DEFAULT NULL,
  `anonymous` tinyint(1) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `invalidated` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_82972E4BD17F50A6` (`uuid`),
  KEY `IDX_82972E4BA76ED395` (`user_id`),
  KEY `IDX_82972E4BE934951A` (`exercise_id`),
  CONSTRAINT `FK_82972E4BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_82972E4BE934951A` FOREIGN KEY (`exercise_id`) REFERENCES `ujm_exercise` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_paper`
--

LOCK TABLES `ujm_paper` WRITE;
/*!40000 ALTER TABLE `ujm_paper` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_paper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_picture`
--

DROP TABLE IF EXISTS `ujm_picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_88AACC8AD17F50A6` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_picture`
--

LOCK TABLES `ujm_picture` WRITE;
/*!40000 ALTER TABLE `ujm_picture` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_planning`
--

DROP TABLE IF EXISTS `ujm_planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4D0E9FCFFE54D947` (`group_id`),
  CONSTRAINT `FK_4D0E9FCFFE54D947` FOREIGN KEY (`group_id`) REFERENCES `ujm_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_planning`
--

LOCK TABLES `ujm_planning` WRITE;
/*!40000 ALTER TABLE `ujm_planning` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_proposal`
--

DROP TABLE IF EXISTS `ujm_proposal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_proposal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_matching_id` int(11) DEFAULT NULL,
  `data` longtext COLLATE utf8_unicode_ci,
  `entity_order` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2672B44BD17F50A6` (`uuid`),
  KEY `IDX_2672B44BFAB79C10` (`interaction_matching_id`),
  KEY `IDX_2672B44BB87FAB32` (`resourceNode_id`),
  CONSTRAINT `FK_2672B44BB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`),
  CONSTRAINT `FK_2672B44BFAB79C10` FOREIGN KEY (`interaction_matching_id`) REFERENCES `ujm_interaction_matching` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_proposal`
--

LOCK TABLES `ujm_proposal` WRITE;
/*!40000 ALTER TABLE `ujm_proposal` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_proposal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_proposal_label`
--

DROP TABLE IF EXISTS `ujm_proposal_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_proposal_label` (
  `proposal_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  PRIMARY KEY (`proposal_id`,`label_id`),
  KEY `IDX_F9B1BA4AF4792058` (`proposal_id`),
  KEY `IDX_F9B1BA4A33B92F39` (`label_id`),
  CONSTRAINT `FK_F9B1BA4A33B92F39` FOREIGN KEY (`label_id`) REFERENCES `ujm_label` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F9B1BA4AF4792058` FOREIGN KEY (`proposal_id`) REFERENCES `ujm_proposal` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_proposal_label`
--

LOCK TABLES `ujm_proposal_label` WRITE;
/*!40000 ALTER TABLE `ujm_proposal_label` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_proposal_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_question`
--

DROP TABLE IF EXISTS `ujm_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `date_create` datetime NOT NULL,
  `date_modify` datetime DEFAULT NULL,
  `model` tinyint(1) NOT NULL,
  `invite` longtext COLLATE utf8_unicode_ci NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `scoreRule` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2F606977D17F50A6` (`uuid`),
  KEY `IDX_2F606977A76ED395` (`user_id`),
  KEY `IDX_2F60697712469DE2` (`category_id`),
  CONSTRAINT `FK_2F60697712469DE2` FOREIGN KEY (`category_id`) REFERENCES `ujm_category` (`id`),
  CONSTRAINT `FK_2F606977A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_question`
--

LOCK TABLES `ujm_question` WRITE;
/*!40000 ALTER TABLE `ujm_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_question_pair`
--

DROP TABLE IF EXISTS `ujm_question_pair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_question_pair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `shuffle` tinyint(1) NOT NULL,
  `penalty` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_36819691E27F6BF` (`question_id`),
  CONSTRAINT `FK_36819691E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_question_pair`
--

LOCK TABLES `ujm_question_pair` WRITE;
/*!40000 ALTER TABLE `ujm_question_pair` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_question_pair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_question_pair_items`
--

DROP TABLE IF EXISTS `ujm_question_pair_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_question_pair_items` (
  `question_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`,`item_id`),
  UNIQUE KEY `UNIQ_D5F9CF05126F525E` (`item_id`),
  KEY `IDX_D5F9CF051E27F6BF` (`question_id`),
  CONSTRAINT `FK_D5F9CF05126F525E` FOREIGN KEY (`item_id`) REFERENCES `ujm_grid_item` (`id`),
  CONSTRAINT `FK_D5F9CF051E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question_pair` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_question_pair_items`
--

LOCK TABLES `ujm_question_pair_items` WRITE;
/*!40000 ALTER TABLE `ujm_question_pair_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_question_pair_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_question_resource`
--

DROP TABLE IF EXISTS `ujm_question_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_question_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `entity_order` int(11) NOT NULL,
  `resourceNode_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B47B5FFCB87FAB32` (`resourceNode_id`),
  KEY `IDX_B47B5FFC1E27F6BF` (`question_id`),
  CONSTRAINT `FK_B47B5FFC1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B47B5FFCB87FAB32` FOREIGN KEY (`resourceNode_id`) REFERENCES `claro_resource_node` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_question_resource`
--

LOCK TABLES `ujm_question_resource` WRITE;
/*!40000 ALTER TABLE `ujm_question_resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_question_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_response`
--

DROP TABLE IF EXISTS `ujm_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paper_id` int(11) DEFAULT NULL,
  `question_id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mark` double DEFAULT NULL,
  `nb_tries` int(11) NOT NULL,
  `response` longtext COLLATE utf8_unicode_ci,
  `used_hints` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:simple_array)',
  `feedback` longtext COLLATE utf8_unicode_ci,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A7EC2BC2D17F50A6` (`uuid`),
  KEY `IDX_A7EC2BC2E6758861` (`paper_id`),
  CONSTRAINT `FK_A7EC2BC2E6758861` FOREIGN KEY (`paper_id`) REFERENCES `ujm_paper` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_response`
--

LOCK TABLES `ujm_response` WRITE;
/*!40000 ALTER TABLE `ujm_response` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_share`
--

DROP TABLE IF EXISTS `ujm_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_share` (
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `adminRights` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`,`question_id`),
  KEY `IDX_238BD307A76ED395` (`user_id`),
  KEY `IDX_238BD3071E27F6BF` (`question_id`),
  CONSTRAINT `FK_238BD3071E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_238BD307A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_share`
--

LOCK TABLES `ujm_share` WRITE;
/*!40000 ALTER TABLE `ujm_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_step`
--

DROP TABLE IF EXISTS `ujm_step`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_step` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `pick` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `max_attempts` int(11) NOT NULL,
  `entity_order` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uuid` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `random_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `random_pick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C2803688D17F50A6` (`uuid`),
  KEY `IDX_C2803688E934951A` (`exercise_id`),
  CONSTRAINT `FK_C2803688E934951A` FOREIGN KEY (`exercise_id`) REFERENCES `ujm_exercise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_step`
--

LOCK TABLES `ujm_step` WRITE;
/*!40000 ALTER TABLE `ujm_step` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_step` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_step_question`
--

DROP TABLE IF EXISTS `ujm_step_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_step_question` (
  `step_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `entity_order` int(11) NOT NULL,
  PRIMARY KEY (`step_id`,`question_id`),
  KEY `IDX_D22EA1CE73B21E9C` (`step_id`),
  KEY `IDX_D22EA1CE1E27F6BF` (`question_id`),
  CONSTRAINT `FK_D22EA1CE1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `ujm_question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D22EA1CE73B21E9C` FOREIGN KEY (`step_id`) REFERENCES `ujm_step` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_step_question`
--

LOCK TABLES `ujm_step_question` WRITE;
/*!40000 ALTER TABLE `ujm_step_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_step_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_subscription`
--

DROP TABLE IF EXISTS `ujm_subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `exercise_id` int(11) DEFAULT NULL,
  `creator` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A17BA225A76ED395` (`user_id`),
  KEY `IDX_A17BA225E934951A` (`exercise_id`),
  CONSTRAINT `FK_A17BA225A76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`),
  CONSTRAINT `FK_A17BA225E934951A` FOREIGN KEY (`exercise_id`) REFERENCES `ujm_exercise` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_subscription`
--

LOCK TABLES `ujm_subscription` WRITE;
/*!40000 ALTER TABLE `ujm_subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_type_matching`
--

DROP TABLE IF EXISTS `ujm_type_matching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_type_matching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_45333F9A77153098` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_type_matching`
--

LOCK TABLES `ujm_type_matching` WRITE;
/*!40000 ALTER TABLE `ujm_type_matching` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_type_matching` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_type_open_question`
--

DROP TABLE IF EXISTS `ujm_type_open_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_type_open_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_ABC1CC4777153098` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_type_open_question`
--

LOCK TABLES `ujm_type_open_question` WRITE;
/*!40000 ALTER TABLE `ujm_type_open_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_type_open_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_type_qcm`
--

DROP TABLE IF EXISTS `ujm_type_qcm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_type_qcm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4C21382C77153098` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_type_qcm`
--

LOCK TABLES `ujm_type_qcm` WRITE;
/*!40000 ALTER TABLE `ujm_type_qcm` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_type_qcm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_unit`
--

DROP TABLE IF EXISTS `ujm_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_unit`
--

LOCK TABLES `ujm_unit` WRITE;
/*!40000 ALTER TABLE `ujm_unit` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujm_word_response`
--

DROP TABLE IF EXISTS `ujm_word_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujm_word_response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `interaction_open_id` int(11) DEFAULT NULL,
  `hole_id` int(11) DEFAULT NULL,
  `response` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caseSensitive` tinyint(1) DEFAULT NULL,
  `score` double NOT NULL,
  `feedback` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_4E1930C598DDBDFD` (`interaction_open_id`),
  KEY `IDX_4E1930C515ADE12C` (`hole_id`),
  CONSTRAINT `FK_4E1930C515ADE12C` FOREIGN KEY (`hole_id`) REFERENCES `ujm_hole` (`id`),
  CONSTRAINT `FK_4E1930C598DDBDFD` FOREIGN KEY (`interaction_open_id`) REFERENCES `ujm_interaction_open` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujm_word_response`
--

LOCK TABLES `ujm_word_response` WRITE;
/*!40000 ALTER TABLE `ujm_word_response` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujm_word_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_organization`
--

DROP TABLE IF EXISTS `user_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_organization` (
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`organization_id`),
  KEY `IDX_41221F7EA76ED395` (`user_id`),
  KEY `IDX_41221F7E32C8A3DE` (`organization_id`),
  CONSTRAINT `FK_41221F7E32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `claro__organization` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_41221F7EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `claro_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_organization`
--

LOCK TABLES `user_organization` WRITE;
/*!40000 ALTER TABLE `user_organization` DISABLE KEYS */;
INSERT INTO `user_organization` VALUES (1,1),(2,1),(3,1);
/*!40000 ALTER TABLE `user_organization` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-12 19:07:47
