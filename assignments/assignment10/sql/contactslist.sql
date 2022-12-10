-- MySQL dump 10.13  Distrib 5.7.32, for Linux (x86_64)
--
-- Host: localhost    Database: final_project
-- ------------------------------------------------------
-- Server version	5.7.32-0ubuntu0.18.04.1

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
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',  
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(250) NOT NULL DEFAULT '',
  `state` varchar(2) NOT NULL DEFAULT '',
  `phone` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `dob` varchar(10) NOT NULL DEFAULT '',
  `contactType` varchar(250) NULL DEFAULT'No contact options selected',
  `age` varchar(5) NOT NULL DEFAULT '',
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

##########################
# Populate contacts table
##########################
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10001, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'No contact options selected', '19-30');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10002, 'Scott Shapera', '321 Someplace', 'test', 'MI', '555-123-4567', 'sshapera@test.com', '12/25/1999', 'newsletter,emailUpdates,textUpdates', '51+');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10003, 'Scott Shaper', '123 Someplace', 'Anywhere', 'CA', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'emailUpdates', '51+');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10004, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'textUpdates', '19-30');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10005, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'emailUpdates', '31-50');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10006, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'newsletter', '19-30');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10007, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'emailUpdates', '10-18');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10008, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'No contact options selected', '19-30');
INSERT INTO contacts(id, name, address, city, state, phone, email, dob, contactType, age)
VALUES(10009, 'Scott Shaper', '123 Someplace', 'Anywhere', 'MI', '999.999.9999', 'sshaper@test.com', '12/25/1999', 'No contact options selected', '10-18');