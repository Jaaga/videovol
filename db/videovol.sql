-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: videovol
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.12.04.1

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
-- Table structure for table `ccdata`
--

DROP TABLE IF EXISTS `ccdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ccdata` (
  `name` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `village` varchar(30) DEFAULT NULL,
  `statecodes` varchar(20) DEFAULT NULL,
  `ccid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ccid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccdata`
--

LOCK TABLES `ccdata` WRITE;
/*!40000 ALTER TABLE `ccdata` DISABLE KEYS */;
INSERT INTO `ccdata` VALUES ('raju','karnataka','bangalore','sarjapur','KA',1),('ram','andhrapradesh','hyderabad','kookatpalli','AP',2);
/*!40000 ALTER TABLE `ccdata` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `impacttracker` VALUES ('ka_222 ','.kjsfk','dfd','jnsj','No','.jksjkhdks','     hello 234   ','Select','kjjk','2014-09-09',1,'Yes',1,'     vhjkjlukluhl			 \r\n				 \r\n				 \r\n				 \r\n				 \r','Yes',1,'       jhdg     ','lkjj;',1,1,1,'Done','Yes','Yes','2014-09-16','.klnkjdc','Done','Yes','yes'),('bh_222','kk','lkjkl','lij','Yes','ljkfdnj','jklnjk  ','Yes','jjn','2014-09-29',1,'Yes',1,'jnji  \r\n				','Yes',1,'kk  ','kk',1,1,1,'Done','Yes','Yes','2014-09-29','njknjk','Done','Yes','yes'),('KA_666','KJKJLHKJ','jkjkhkjl','kjjk','Yes','MJHBNBb','  ukhlkjhkj','Yes','kjhlkhj','2014-10-10',1,'Yes',1,';kjjo  \r\n				','Yes',1,'lkmkllk  ','klmkl',1,1,1,'NotDone','No','No','2014-10-10','jbjkbjk','NotDone','Yes','yes'),('JH_111','jbkj','bjk','kjbjk','Yes','kkdf','kkh  ','Yes','bkj','2014-11-10',1,'Yes',2,'bkku  \r\n				','Yes',1,'bljkk  ','jbjk',1,2,2,'Done','Yes','Yes','2014-11-10','mbjk','Done','Yes','yes'),('kljhfuh','ljkbjkb','jkbjk','blkjbjk','Yes','jjk',' bjkbjh   ','Yes',',n.n','2014-11-10',1,'Yes',1,' lhklj  \r\n				 \r\n				','Yes',1,' jbjk   ','nkjnkj',1,1,1,'Done','Yes','Yes','2014-11-10','jn','Done','Yes','yes'),('jkhdvkjh','iuoui','iuu','gluk','Yes','lugku','khou  ','Select','jkgjkg','2014-11-10',1,'Yes',1,'ilhikh  \r\n				','Yes',1,'njkhk  ','jkhkh',1,1,1,'Done','Yes','Yes','2014-11-10','mbjh','Done','Yes','yes');
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
INSERT INTO `posttrack` VALUES ('','2014-10-10','ghjg','kjbljkh','Good','Good','Good','Good','Good','Good','Good','Yes','Yes','2014-11-10','2014-11-10','jbjkb','2014-11-10','Done','2014-10-07','jljkhklu','2014-10-10','Yes','2014-11-10','Yes','2014-11-10','Good','nkjh','2014-11-10','2014-11-10','nkjjk'),('\".\r\n 			$uniquenumber . \"','0000-00-00','\" . $wherereceived . \"','\" . $reviewedby .\r\n 			\"','\" . $seq .','\" . $broll','\" . $fint ','\" . $vo . ','\" . $ptc .','\" . \r\n 			','\" . $vd . ','\" . $trans','\" . $payme','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('333','2014-07-09','jcj','jdj','Good','Good','Good','Good','Good','Good','Good','djj','yes','2014-07-08','2014-10-08','knk','2014-10-07','Not Done','2014-10-07',',m.nkjlbskjlkljsn','2014-10-10','Yes','2014-10-09','No','2014-10-09','Average','JKJN','2014-10-10','2014-10-10','LKKL'),('JH_111','0000-00-00','','','','','','','','','','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ka_222','2014-09-10','kjhfjkwekj','kdnfkjnjk','Good','Good','Good','Good','Good','Not Good','Good','Yes','Yes','2014-09-17',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Ka_666','2014-10-10','jbjh','kjbkj','Good','Good','Good','Not Good','Good','Not Good','Good','Yes','0','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `posttrack` ENABLE KEYS */;
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
  `targetofficial` varchar(20) DEFAULT NULL,
  `desiredchange` varchar(20) DEFAULT NULL,
  `ccimpactplan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `uniquenumber` (`uniquenumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storytrack`
--

LOCK TABLES `storytrack` WRITE;
/*!40000 ALTER TABLE `storytrack` DISABLE KEYS */;
INSERT INTO `storytrack` VALUES (1,'select cc name','select state name','2014-10-10','jjk','SNA C,JKSkl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'KA_666','2014-10-10','jjk','kjbj','kbjkb','jb','jbjkb','jb		  				  				  				  		',NULL,'Yes','bkjb','jb','ftfhtjdxt											'),(3,'Abdul Hasib Khan','Andaman and Nicobar ','2014-11-10','jhku','lkjhkl		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kljhfuh','2014-11-10','bjk','jbkj','kjbb','jklblj','hjblj','blb		  		',NULL,'Yes','huj','jkj','jlblj				'),(4,'select cc name','select state name','2014-09-10','flood','DUE TO HEAVY RAIN IN JAND K THEIR WAS HEAVY RAIN 		  				  				  				  				  				  				  				  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ka_222','2014-09-10','JIFJOI','LDFIJ','JNFJ','KJNVJDK','JFJ','JNDVJKNJKL		  				  				  				',NULL,'Yes','ccl','iii','hello how are you			'),(26,'Abdul Hasib Khan','Andaman and Nicobar ','2014-10-10','jnj','kljnkl		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'hjh','2014-10-10','jbjk','kjbjk','kj','jkbjkb','jkb','jkbjkb		  		',NULL,'Yes','jkb','bjk','kjbjkbkjl				'),(374,'Jai_Kumar','Karnataka','2014-10-10','jbjkb','kjb		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'jkhdvkjh','2014-10-21','b','kjb','jbjk','hgdt','tdr','fjgxj		  		',NULL,'Yes','yfyf','ifytf','fyf				'),(47192,'jdj','Andhra Pradesh','2014-07-09','jhfj','jdnvjj		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bh_222','2014-07-09','ndj','jndvj','jdvj','jnvj','jvdj','d',NULL,'Yes',NULL,NULL,NULL),(47193,'Abdul Hasib Khan','Andaman and Nicobar ','2014-11-10','hihi','lhi		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'JH_111','2014-11-10','gug','kugiu','gg','kgk','kglug','gljgug		  		',NULL,'Yes','gjg','hglglj','jgjuglugiu				'),(8653187,'Abhishek Kr Das','Arunachal Pradesh','2014-11-10','environment','there is a wild fire 		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BH_234','2014-11-10','hkj','jghk','kgjkl','jhljk','ulugh','uioy		  		',NULL,'Yes','kuuh','hlu','kjhlukh				'),(2147483647,'Abhishek Kr Das','Arunachal Pradesh','2014-11-12','identiy','lll		  		',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'JA_333','2014-11-10','ll','','','','','		  		',NULL,'Yes','','','				');
/*!40000 ALTER TABLE `storytrack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracker`
--

DROP TABLE IF EXISTS `tracker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracker` (
  `UID` varchar(20) NOT NULL,
  `ccname` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `program` varchar(30) DEFAULT NULL,
  `iutheme` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `storydate` date DEFAULT NULL,
  `ccpair` varchar(30) DEFAULT NULL,
  `mentor` varchar(30) DEFAULT NULL,
  `storytype` varchar(20) DEFAULT NULL,
  `shootplan` varchar(500) DEFAULT NULL,
  `relateduid` varchar(20) DEFAULT NULL,
  `impactpossible` varchar(5) DEFAULT NULL,
  `targetofficial` varchar(30) DEFAULT NULL,
  `desiredchange` varchar(300) DEFAULT NULL,
  `impactplan` varchar(300) DEFAULT NULL,
  `impactfollowup` varchar(5) DEFAULT NULL,
  `impactfollowupnotes` varchar(300) DEFAULT NULL,
  `impactprocess` varchar(300) DEFAULT NULL,
  `impactstatus` varchar(20) DEFAULT NULL,
  `impactdate` date DEFAULT NULL,
  `screeningdone` varchar(5) DEFAULT NULL,
  `screeningheadcount` int(20) DEFAULT NULL,
  `screeningnotes` varchar(300) DEFAULT NULL,
  `officialinvolved` int(20) DEFAULT NULL,
  `officialsatscreening` int(20) DEFAULT NULL,
  `ofiicialscreeningnotes` varchar(300) DEFAULT NULL,
  `collaborations` varchar(300) DEFAULT NULL,
  `peopleinvolved` int(20) DEFAULT NULL,
  `peopleimpacted` int(20) DEFAULT NULL,
  `villagesimpacted` int(20) DEFAULT NULL,
  `videofoldertitle` varchar(100) DEFAULT NULL,
  `footageinstate` date DEFAULT NULL,
  `assignededitor` varchar(30) DEFAULT NULL,
  `footagefromstate` date DEFAULT NULL,
  `editedvideofromstate` date DEFAULT NULL,
  `editstatus` varchar(20) DEFAULT NULL,
  `footagereview` varchar(300) DEFAULT NULL,
  `roughcutreview` varchar(300) DEFAULT NULL,
  `footagerating` int(10) DEFAULT NULL,
  `paymentapproved` varchar(5) DEFAULT NULL,
  `roughcutdate` date DEFAULT NULL,
  `editdate` date DEFAULT NULL,
  `finalvideorating` int(10) DEFAULT NULL,
  `bonus` varchar(5) DEFAULT NULL,
  `youtubedate` date DEFAULT NULL,
  `youtubeurl` varchar(120) DEFAULT NULL,
  `iupublishdate` date DEFAULT NULL,
  `videotitle` varchar(30) DEFAULT NULL,
  `subtitleneeded` varchar(5) DEFAULT NULL,
  `secondaryiuissue` varchar(30) DEFAULT NULL,
  `subcategory` varchar(30) DEFAULT NULL,
  `project` varchar(30) DEFAULT NULL,
  `blognotes` varchar(50) DEFAULT NULL,
  `flag` varchar(20) DEFAULT NULL,
  `flagnotes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracker`
--

LOCK TABLES `tracker` WRITE;
/*!40000 ALTER TABLE `tracker` DISABLE KEYS */;
INSERT INTO `tracker` VALUES ('42da131a-6a76-11e4-9','raju','1','PACS','Forced Eviction','jhjlu','2014-11-12','raju','raju','Profile Video','ghjgkjgkhgf',NULL,'Yes ','jmghjg','jjhgj','hjghjg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('7b64bd99-6a62-11e4-9','raju','karnataka','','','hello world','2014-11-01','raju','ram','','world hello',NULL,'','vodeovol','','impact',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('81c4a3e1-6a68-11e4-9','1','1','OAK','','vvvvvvvvvvvvvvvvvv','2014-11-12','1','1','','CCCCC',NULL,' ','CCCCC','CCCCC','CCCCC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('87d02b60-6af5-11e4-9','raju','andhrapradesh','OAK','Art/Culture','hjfgdfjf,jegflugfui','2014-11-13','1','raju','Issue','hfhfkj,jgefouitg',NULL,'Yes ',',jhfkfkyjyfuywuiey','hgjkhlkghikhgktgjglug','khk;ghi;h;ilshgd;ilhomfjyjyuru',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('adac6e2c-6af4-11e4-9','raju','karnataka','OAK','Conflict','hgdhgjhg','2014-11-13','raju','ram','Documentary','mjg,jjgkk.ugk.t',NULL,'Yes','bjmjmb','vmvbmnbvm','bbmnbm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ee99ac9f-6a67-11e4-9','ram','andhrapradesh','PACS','Caste/Identity','mnb,fdjkhjhkjhjgyfj','2014-11-12','raju','raju','Issue','mjsfuljkgfug,ujal',NULL,'Yes',',fljkhjkmjdfglu','','NKJHH,VLKA8DIQ ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tracker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `middlename` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `user_type` int(5) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `emailid` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `contactNo` int(10) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `login_status` int(5) DEFAULT NULL,
  `village` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `refreeName` varchar(20) DEFAULT NULL,
  `refreeContactNo` int(20) DEFAULT NULL,
  `organisation` int(20) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2014-11-17 10:14:18
