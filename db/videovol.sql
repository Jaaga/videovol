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
-- Table structure for table `storytrack`
--

DROP TABLE IF EXISTS `storytrack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storytrack` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `seq` varchar(10) DEFAULT NULL,
  `broll` varchar(10) DEFAULT NULL,
  `fint` varchar(10) DEFAULT NULL,
  `vo` varchar(10) DEFAULT NULL,
  `ptc` varchar(10) DEFAULT NULL,
  `cta` varchar(10) DEFAULT NULL,
  `vd` varchar(10) DEFAULT NULL,
  `translation` varchar(10) DEFAULT NULL,
  `ccname` varchar(30) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `receiveddate` date DEFAULT NULL,
  `issuetopic` varchar(50) DEFAULT NULL,
  `storydescription` varchar(300) DEFAULT NULL,
  `paymentstatus` enum('ok','hold') DEFAULT NULL,
  `editstatus` enum('edited','incomplete') DEFAULT NULL,
  `editedmonth` date DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `publishplatform` enum('yt','ui','special') DEFAULT NULL,
  `editor` varchar(30) DEFAULT NULL,
  `editorpayment` enum('ok','hold') DEFAULT NULL,
  `uploaddate` date DEFAULT NULL,
  `publishdate` date DEFAULT NULL,
  `receivedRO` enum('yes','no') DEFAULT NULL,
  `receivedHQ` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storytrack`
--

LOCK TABLES `storytrack` WRITE;
/*!40000 ALTER TABLE `storytrack` DISABLE KEYS */;
/*!40000 ALTER TABLE `storytrack` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-14  8:24:10
