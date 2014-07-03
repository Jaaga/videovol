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
  `targetofficial` varchar(30) DEFAULT NULL,
  `desiredchange` varchar(30) DEFAULT NULL,
  `ccimpactplan` varchar(30) DEFAULT NULL,
  `impactfollowuphappening` varchar(30) DEFAULT NULL,
  `ifnowhynot` varchar(30) DEFAULT NULL,
  `impactprocess` varchar(50) DEFAULT NULL,
  `impactachieved` varchar(30) DEFAULT NULL,
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
  UNIQUE KEY `uniquenumber_2` (`uniquenumber`),
  KEY `uniquenumber` (`uniquenumber`),
  CONSTRAINT `impacttracker_ibfk_1` FOREIGN KEY (`uniquenumber`) REFERENCES `storytrack` (`uniquenumber`),
  CONSTRAINT `impacttracker_ibfk_2` FOREIGN KEY (`uniquenumber`) REFERENCES `storytrack` (`uniquenumber`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impacttracker`
--

LOCK TABLES `impacttracker` WRITE;
/*!40000 ALTER TABLE `impacttracker` DISABLE KEYS */;
INSERT INTO `impacttracker` VALUES ('23','$targetofficial','$desiredchange','$ccimpactplan','$impactfollowuphappening','$ifnowhynot','$impactprocess','$impstatachieved','$milestone','0000-00-00',0,'$communityscreening',0,'$detailsofscreening','$videoshow',0,'$detailsofscreeningofficials','$collaborations',0,0,0,'$videoproductionstat','$videorevi','$approvepa','0000-00-00','$videoreviewedby','$blognotes','$gifttocc','$thankyouc'),('KA_331','DC','yes','now 					\r\n				 					\r\n				','Maybe','yes','done','','30','2014-12-31',3,'Yes',4,'hi','Yes',20,'it was done today','jdkj',22,12,1,'Done','Yes','Yes','2014-12-31','nandan','Done','Yes','yes');
/*!40000 ALTER TABLE `impacttracker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posttrack`
--

DROP TABLE IF EXISTS `posttrack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posttrack` (
  `uniquenumber` varchar(30) NOT NULL,
  `footagereceived` date DEFAULT NULL,
  `wherereceived` varchar(30) DEFAULT NULL,
  `reviewedby` varchar(30) DEFAULT NULL,
  `seq` varchar(10) DEFAULT NULL,
  `broll` varchar(10) DEFAULT NULL,
  `fint` varchar(10) DEFAULT NULL,
  `vo` varchar(10) DEFAULT NULL,
  `ptc` varchar(10) DEFAULT NULL,
  `cta` varchar(10) DEFAULT NULL,
  `vd` varchar(10) DEFAULT NULL,
  `translation` varchar(10) DEFAULT NULL,
  `paymentapproved` varchar(10) DEFAULT NULL,
  `approvedon` date DEFAULT NULL,
  `editreceived` date DEFAULT NULL,
  `editor` varchar(30) DEFAULT NULL,
  `editcomplete` date DEFAULT NULL,
  `subtitlestatus` varchar(30) DEFAULT NULL,
  `videosent` date DEFAULT NULL,
  `editnotes` varchar(255) DEFAULT NULL,
  `goareceived` date DEFAULT NULL,
  `subtitlerequired` varchar(10) DEFAULT NULL,
  `subtitledone` date DEFAULT NULL,
  `cleaningrequired` varchar(10) DEFAULT NULL,
  `cleaningdone` date DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `seniornotes` varchar(255) DEFAULT NULL,
  `uploaded` date DEFAULT NULL,
  `published` date DEFAULT NULL,
  `publishplatform` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uniquenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posttrack`
--

LOCK TABLES `posttrack` WRITE;
/*!40000 ALTER TABLE `posttrack` DISABLE KEYS */;
INSERT INTO `posttrack` VALUES ('45','0000-00-00','goa','freeman',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `posttrack` ENABLE KEYS */;
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
  `stage` varchar(30) DEFAULT NULL,
  `impactpossible` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `uniquenumber` (`uniquenumber`)
) ENGINE=InnoDB AUTO_INCREMENT=47192 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storytrack`
--

LOCK TABLES `storytrack` WRITE;
/*!40000 ALTER TABLE `storytrack` DISABLE KEYS */;
INSERT INTO `storytrack` VALUES (5,'qqq 999','Andaman and Nicobar ','0002-02-22','qqq','ee		  				  				  				  		','done','ok','0000-00-00','afaf','IU','option3','ok','0000-00-00','0000-00-00','Good','Not Good','23','0000-00-00','pair','jlk','jkl','jkl','jkl','jkl','new story','Yes'),(6,'hello goober','Andaman and Nicobar ','2014-06-12','jsdbj','jdnbvjk		  		','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kjdnvk','2014-06-12','kdfnk','dkk','lkdf','lkd','l;f','FK',NULL,'Yes'),(9,'hemanth goober','Andaman and Nicobar ','2014-06-11','health','hello there is  water problem due to which there is health problem		  		','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'KA_331','2014-12-31','madhu','horrible','shivu','good','under process','now',NULL,'Yes'),(803,'n','Andaman and Nicobar ','0000-00-00','w','w		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'w','0000-00-00','w','w','w','w','w','w',NULL,'Yes'),(7451,'free','Andaman and Nicobar ','0000-00-00','aaa',' \r\n		  		 \r\n		  		k','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kkhhh','0000-00-00','','','','','','',NULL,'Yes'),(7592,'k','','0000-00-00','k','k',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'k','0000-00-00','k','k','k','k','k','k',NULL,'Yes'),(8616,'a','Andaman and Nicobar ','0000-00-00','d','d','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dddd','0000-00-00','w','w','w','w','w','w',NULL,'No'),(47182,'freeman','Andaman and Nicobar ','2014-06-11','health','hi my health is good ','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2014-06-10','mohan','rajesh','','health','goodmorning','from today','new story','No'),(47184,'akshay','Karnataka','2014-12-31','k','jbfskjdishmniuhnkjn;ioh','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kA-112','2014-06-10','hfiuhwi','jaaga','freeman','health','goodmorning','from today','new story','No'),(47185,'hhh','Arunachal Pradesh','2014-06-11','knach','knsj','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'knc','2014-06-12','ksk','dklnklads','nskcnkl','mldkcnlks','dlklk','kdnn','new story','No'),(47186,'stephanie','Assam','2014-06-12','aaaaa','dasadfaf','done',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'zdvdad','2014-06-12','ffdfd','dsf','df','ffnfg','fbgn','mkj','new story','No'),(47187,'m','','0000-00-00','m','mm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m','0000-00-00','m','m','m','m','m','m',NULL,'Yes'),(47188,'p','Andaman and Nicobar ','0000-00-00','p','p',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'p','0000-00-00','p','p','p','p','p','p',NULL,'Yes'),(47189,'9','Andaman and Nicobar ','0000-00-00','9','9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9','0000-00-00','9','9','9','9','9','9',NULL,'Yes'),(47190,'foo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'un',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47191,'foo2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'un1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2014-07-03  5:44:55
