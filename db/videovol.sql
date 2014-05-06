-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: videovol
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

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
-- Table structure for table `footagecheck`
--

DROP TABLE IF EXISTS `footagecheck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footagecheck` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `seq` enum('good','bad') DEFAULT NULL,
  `broll` enum('good','bad') DEFAULT NULL,
  `fint` enum('good','bad') DEFAULT NULL,
  `vo` enum('good','bad') DEFAULT NULL,
  `ptc` enum('good','bad') DEFAULT NULL,
  `cta` enum('good','bad') DEFAULT NULL,
  `vd` enum('good','bad') DEFAULT NULL,
  `translation` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footagecheck`
--

LOCK TABLES `footagecheck` WRITE;
/*!40000 ALTER TABLE `footagecheck` DISABLE KEYS */;
/*!40000 ALTER TABLE `footagecheck` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junioreditor`
--

DROP TABLE IF EXISTS `junioreditor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junioreditor` (
  `uniqueno` int(10) NOT NULL AUTO_INCREMENT,
  `ccname` varchar(30) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `receiveddate` date DEFAULT NULL,
  `issuetopic` varchar(50) DEFAULT NULL,
  `storydescription` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`uniqueno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junioreditor`
--

LOCK TABLES `junioreditor` WRITE;
/*!40000 ALTER TABLE `junioreditor` DISABLE KEYS */;
/*!40000 ALTER TABLE `junioreditor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmanager`
--

DROP TABLE IF EXISTS `pmanager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmanager` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `paymentstatus` enum('ok','hold') DEFAULT NULL,
  `editstatus` enum('edited','incomplete') DEFAULT NULL,
  `editedmonth` date DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `publishplatform` enum('yt','ui','special') DEFAULT NULL,
  `editor` varchar(30) DEFAULT NULL,
  `editorpayment` enum('ok','hold') DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmanager`
--

LOCK TABLES `pmanager` WRITE;
/*!40000 ALTER TABLE `pmanager` DISABLE KEYS */;
/*!40000 ALTER TABLE `pmanager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senioreditor`
--

DROP TABLE IF EXISTS `senioreditor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senioreditor` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `uploaddate` date DEFAULT NULL,
  `publishdate` date DEFAULT NULL,
  `receivedRO` enum('yes','no') DEFAULT NULL,
  `receivedHQ` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senioreditor`
--

LOCK TABLES `senioreditor` WRITE;
/*!40000 ALTER TABLE `senioreditor` DISABLE KEYS */;
/*!40000 ALTER TABLE `senioreditor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-06  8:02:30
