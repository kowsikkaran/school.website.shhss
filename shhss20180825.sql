CREATE DATABASE  IF NOT EXISTS `shhss` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shhss`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: shhss
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `employee_table`
--

DROP TABLE IF EXISTS `employee_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_table` (
  `name` varchar(30) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `city` varchar(120) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `join_date` varchar(30) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `date_of_birth` varchar(30) DEFAULT NULL,
  `role_id` varchar(30) DEFAULT NULL,
  `emp_id` varchar(30) DEFAULT NULL,
  `id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_table`
--

LOCK TABLES `employee_table` WRITE;
/*!40000 ALTER TABLE `employee_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kids_table`
--

DROP TABLE IF EXISTS `kids_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kids_table` (
  `kids_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile_No` varchar(15) DEFAULT NULL,
  `Address` varchar(120) DEFAULT NULL,
  `Qualification` varchar(45) DEFAULT NULL,
  `Date_of_birth` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`kids_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kids_table`
--

LOCK TABLES `kids_table` WRITE;
/*!40000 ALTER TABLE `kids_table` DISABLE KEYS */;
INSERT INTO `kids_table` VALUES (1,'karthick','s.karthick@gmail.com','9876543121','Raja street','LKG','2000-01-01','india','tamilnadu'),(2,'raja','raja@gmail.com','9876567821','Edyar street','UKG','2015-02-22','India','Tamilnadu'),(3,'raja','raja@gmail.com','9876567821','Edyar street','UKG','2015-02-22','India','Tamilnadu'),(4,'sathish','sathi@sathi.sathi','1234567890','tuticorin',NULL,'2008-12-31T18:30:00.000Z','india','tamilnadu'),(5,'vasanth','vasanth@gmail.com','345678909','jdgvjksv','PREKG','2018-03-05T18:30:00.000Z','njsdvjhv','ta'),(6,'vasanth','vasanth@gmail.com','345678909','just just','PREKG','2018-03-05T18:30:00.000Z','njsdvjhv','ta'),(7,'rfkgh','fkeb@gmail.com','3434578909','dag hjt hmt','LKG','2018-09-04T18:30:00.000Z','oqiyhdkscn','gtjn'),(8,'tyh','fh2@yu.dbvdb','fgh','cnb','UKG','1904-02-03T18:30:00.000Z','cbc','gvdfv'),(9,'mahesh','koohhui@gmail.com','98765432567','madurai','PREKG','2018-03-06T18:30:00.000Z','india','tamilnadu'),(10,'kdk','dfgfs@gfgsdvdffg','987r23','df','gfgfg','26-11-1111','766453w','v b');
/*!40000 ALTER TABLE `kids_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_alumni`
--

DROP TABLE IF EXISTS `tbl_alumni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_alumni` (
  `alumi_id` int(20) NOT NULL AUTO_INCREMENT,
  `alumni_name` varchar(50) DEFAULT NULL,
  `alumni_mail` varchar(50) DEFAULT NULL,
  `alumni_mobile` varchar(10) DEFAULT NULL,
  `alumni_address` varchar(200) DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`alumi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_alumni`
--

LOCK TABLES `tbl_alumni` WRITE;
/*!40000 ALTER TABLE `tbl_alumni` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_alumni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contact` (
  `contact_id` int(20) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(300) DEFAULT NULL,
  `contact_mail` varchar(300) DEFAULT NULL,
  `contact_message` varchar(1000) DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contact`
--

LOCK TABLES `tbl_contact` WRITE;
/*!40000 ALTER TABLE `tbl_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'shhss'
--

--
-- Dumping routines for database 'shhss'
--
/*!50003 DROP PROCEDURE IF EXISTS `clean_table` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `clean_table`()
BEGIN
truncate tbl_contact;
truncate tbl_alumni;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_kids` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_kids`()
BEGIN
select * from kids_table;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `kids_table` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `kids_table`(
IN p_Name VARCHAR(45), 
IN p_Email varchar(50),
IN p_Date_of_birth VARCHAR(45), 
IN p_mobile_no varchar(15), 
IN p_address VARCHAR(120), 
IN p_Qualification varchar(45),
IN p_country varchar(45),
IN p_state varchar(45),
OUT RESULT VARCHAR(40)
)
BEGIN

INSERT INTO kids_table
  (
     name,
     Email,
     Date_of_birth,
	 mobile_no,
     address,
     qualification,
     country,
	 state
     )  
     VALUES  
     ( 
      p_name,
      p_email,
	  p_Date_of_birth,
      p_mobile_no,
	  p_address,
      p_Qualification,
      p_country,
	  p_state
      );

IF ROW_COUNT()>0 THEN
SET RESULT = 'SUCCESS';
ELSE
SET RESULT = 'FAILURE';

END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_alumni_registration` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_alumni_registration`(
IN p_alumni_name VARCHAR(50),
IN p_alumni_mail VARCHAR(50),
IN p_alumni_mobile VARCHAR(10),
IN p_alumni_address VARCHAR(200)
)
BEGIN
declare RESULT VARCHAR(120);

INSERT INTO tbl_alumni
(
alumni_name,
alumni_mobile,
alumni_mail,
alumni_address,
created_date
) 
VALUES 
(
p_alumni_name,
p_alumni_mobile,
p_alumni_mail,
p_alumni_address,
now()
);
IF ROW_COUNT()>0 THEN
SET RESULT='SUCCESS' ;
ELSE 
SET RESULT='FAILURE';
END IF;

select RESULT;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_contact` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contact`(
IN p_contact_name VARCHAR(300),
IN p_contact_mail VARCHAR(20),
IN p_contact_message VARCHAR(1000),
OUT RESULT VARCHAR(120)
)
BEGIN
INSERT INTO tbl_contact
(
contact_name,
contact_mail,
contact_message,
created_date
) 
VALUES 
(
p_contact_name,
p_contact_mail,
p_contact_message,
now()
);

IF ROW_COUNT()>0 THEN
SET RESULT='SUCCESS' ;
ELSE 
SET RESULT='FAILURE';
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-25 15:33:55
