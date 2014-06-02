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
-- Table structure for table `impacttracker`
--

DROP TABLE IF EXISTS `impacttracker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impacttracker` (
  `uniquenumber` varchar(30) DEFAULT NULL,
  `impactpossible` varchar(30) DEFAULT NULL,
  `targetofficial` varchar(30) DEFAULT NULL,
  `desiredchange` varchar(30) DEFAULT NULL,
  `ccimpactplan` varchar(30) DEFAULT NULL,
  `impactfollowuphappening` varchar(30) DEFAULT NULL,
  `ifnowhynot` varchar(30) DEFAULT NULL,
  `impactprocess` varchar(50) DEFAULT NULL,
  `impstatacheived` varchar(30) DEFAULT NULL,
  `milestone` varchar(30) DEFAULT NULL,
  `dateofimpact` date DEFAULT NULL,
  `timetakenforimpact` int(10) DEFAULT NULL,
  `communityscreening` varchar(20) DEFAULT NULL,
  `noofpeoplesawvideo` int(20) DEFAULT NULL,
  `detailsofscreening` varchar(50) DEFAULT NULL,
  `videoshowntoofficials` varchar(10) DEFAULT NULL,
  `noofofficials` int(10) DEFAULT NULL,
  `detailsofscreeningofficials` varchar(50) DEFAULT NULL,
  `collaborations` varchar(30) DEFAULT NULL,
  `noofpeopleinvolved` int(20) DEFAULT NULL,
  `noofpeopleimpacted` int(20) DEFAULT NULL,
  `noofvillagesimpacted` int(20) DEFAULT NULL,
  `videoproductionstatus` varchar(20) DEFAULT NULL,
  `videoreviewed` varchar(10) DEFAULT NULL,
  `approvepayment` varchar(10) DEFAULT NULL,
  `videoapproveddate` date DEFAULT NULL,
  `videoreviewedby` varchar(20) DEFAULT NULL,
  `blognotes` varchar(20) DEFAULT NULL,
  `gifttocc` varchar(10) DEFAULT NULL,
  `thankyoucard` varchar(10) DEFAULT NULL,
  KEY `uniquenumber` (`uniquenumber`),
  CONSTRAINT `impacttracker_ibfk_2` FOREIGN KEY (`uniquenumber`) REFERENCES `storytrack` (`uniquenumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `impacttracker_ibfk_1` FOREIGN KEY (`uniquenumber`) REFERENCES `storytrack` (`uniquenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impacttracker`
--

LOCK TABLES `impacttracker` WRITE;
/*!40000 ALTER TABLE `impacttracker` DISABLE KEYS */;
/*!40000 ALTER TABLE `impacttracker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preproduction`
--

DROP TABLE IF EXISTS `preproduction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preproduction` (
  `uniquenumber` varchar(30) NOT NULL,
  `dateofstory` date NOT NULL,
  `state` varchar(30) NOT NULL,
  `ccname` varchar(30) NOT NULL,
  `ccpair` varchar(30) DEFAULT NULL,
  `program` varchar(30) DEFAULT NULL,
  `mentorname` varchar(30) DEFAULT NULL,
  `iutopic` varchar(30) DEFAULT NULL,
  `storyidea` varchar(50) DEFAULT NULL,
  `videotreatment` varchar(30) DEFAULT NULL,
  `shootplan` varchar(50) DEFAULT NULL,
  `impactpossible` varchar(20) DEFAULT NULL,
  `targetofficial` varchar(20) DEFAULT NULL,
  `desiredchange` varchar(30) DEFAULT NULL,
  `ccimpactplan` varchar(50) DEFAULT NULL,
  `impactfollowup` varchar(10) DEFAULT NULL,
  `whynot` varchar(30) DEFAULT NULL,
  `impactvideoidno` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uniquenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preproduction`
--

LOCK TABLES `preproduction` WRITE;
/*!40000 ALTER TABLE `preproduction` DISABLE KEYS */;
/*!40000 ALTER TABLE `preproduction` ENABLE KEYS */;
UNLOCK TABLES;

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
  `paymentstatus` varchar(10) DEFAULT NULL,
  `editstatus` varchar(10) DEFAULT NULL,
  `editedmonth` date DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `publishplatform` varchar(10) DEFAULT NULL,
  `editor` varchar(30) DEFAULT NULL,
  `editorpayment` varchar(10) DEFAULT NULL,
  `uploaddate` date DEFAULT NULL,
  `publishdate` date DEFAULT NULL,
  `receivedRO` varchar(10) DEFAULT NULL,
  `receivedHQ` varchar(10) DEFAULT NULL,
  `uniquenumber` varchar(30) DEFAULT NULL,
  `dateofstory` date DEFAULT NULL,
  `ccpair` varchar(30) DEFAULT NULL,
  `program` varchar(30) DEFAULT NULL,
  `mentor` varchar(30) DEFAULT NULL,
  `iutopic` varchar(30) DEFAULT NULL,
  `videotreatment` varchar(30) DEFAULT NULL,
  `shootplan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `uniquenumber` (`uniquenumber`)
) ENGINE=InnoDB AUTO_INCREMENT=18723 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storytrack`
--

LOCK TABLES `storytrack` WRITE;
/*!40000 ALTER TABLE `storytrack` DISABLE KEYS */;
INSERT INTO `storytrack` VALUES (7,'Good','Not Good','Good','Not Good','Good','Good','Not Good','Not Requir','rajeef','Kerala','2014-05-14','entertainment','every day i will be high on coke','','','2014-05-14','hiiiiiiiiiiiiii','','option3','','2014-05-13','2014-05-14','Not Good','Good',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Not Good','Good','Good','Good','Good','Not Good','Good','NO','hello','Andaman and Nicobar ','2014-05-13','hi','how are u',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(79,'0','0','0','0','0','0','0','0','browne','Lakshadweep','2014-05-20','health','my health is very bad',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-05-14','2014-05-13','Not Good','Good',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(934,'Good','Not Good','Good','Not Good','Good','Not Good','Good','Not Requir','hello','Assam','2014-05-14','health','health is improving',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(959,'Not Good','Good','Good','Not Good','Good','Not Good','Not Good','NO','yatin','Tripura','2014-05-22','social','my social behaviour is to good\r\n','','','2014-05-06','hey wass up','','option2','ok','2014-05-07','2014-05-13','Good','Not Good',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6832,'Good','Not Good','Good','Not Good','Good','Good','Not Good','Not Requir','ansal','Andaman and Nicobar ','2014-05-12','health','my health is too good','','Hold','2014-05-22','hi how are you','IU','option2','ok','2014-05-14','2014-05-14','Good','Not Good',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18721,'Good','Not Good','Good','Good','Good','Good','Good','yes','ramesh','Andaman and Nicobar ','2014-12-31','health','hi','ok','ok','2014-05-14','hello','IU','option2','ok','2014-05-07','2014-05-14','Not Good','Good',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18722,'Good','Good','Good','Not Good','Not Good','Good','Good','NO','hi','Andaman and Nicobar ','2014-05-13','hello','nkk dv,jhds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2014-06-02  7:17:38
