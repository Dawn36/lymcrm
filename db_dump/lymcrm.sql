/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.11-MariaDB : Database - lymcrm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lymcrm` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `lymcrm`;

/*Table structure for table `ic_bed` */

DROP TABLE IF EXISTS `ic_bed`;

CREATE TABLE `ic_bed` (
  `bed_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ward_no` varchar(100) DEFAULT NULL,
  `bed_no` varchar(100) DEFAULT NULL,
  `bed_status` decimal(10,0) DEFAULT NULL,
  `bed_creation` datetime DEFAULT NULL,
  `bed_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`bed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_bed` */

insert  into `ic_bed`(`bed_id`,`ward_no`,`bed_no`,`bed_status`,`bed_creation`,`bed_updation`) values (3,'1','101','1','2021-07-16 00:00:00',NULL),(4,'1','102','1','2021-07-16 00:00:00',NULL),(5,'1','103','1','2021-07-16 00:00:00',NULL),(6,'1','104','1','2021-07-16 00:00:00',NULL),(7,'1','105','1','2021-07-16 00:00:00',NULL),(8,'1','106','1','2021-07-16 00:00:00',NULL),(9,'1','107','1','2021-07-16 00:00:00',NULL),(11,'1','108','1','2021-07-16 00:00:00',NULL),(12,'1','109','1','2021-07-16 00:00:00',NULL),(13,'1','110','1','2021-07-16 00:00:00',NULL),(14,'1','111','1','2021-07-16 00:00:00',NULL),(15,'1','112','1','2021-07-16 00:00:00',NULL),(16,'1','113','1','2021-07-16 00:00:00',NULL),(17,'1','114','1','2021-07-16 00:00:00',NULL),(18,'1','115','1','2021-07-16 00:00:00',NULL),(19,'1','116','1','2021-07-16 00:00:00',NULL),(20,'2','201','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(21,'2','202','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(23,'2','203','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(24,'2','204','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(25,'2','205','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(26,'2','206','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(27,'2','207','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(28,'2','208','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(29,'2','209','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(30,'2','210','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(31,'2','211','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(32,'2','213','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(33,'2','214','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(34,'2','215','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(35,'2','216','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(36,'3','301','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(37,'3','302','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(38,'3','304','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(39,'3','303','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(40,'3','305','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(41,'3','306','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(42,'3','307','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(43,'3','308','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(44,'3','309','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(45,'3','310','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(46,'3','311','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(47,'3','312','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(48,'3','313','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(49,'3','314','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(50,'3','315','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(51,'3','316','1','2021-07-16 00:00:00','2021-07-16 00:00:00'),(69,'1','117','1','2021-07-16 00:00:00',NULL),(71,'1','118','1','2021-07-16 00:00:00',NULL),(72,'1','119','1','2021-07-16 00:00:00',NULL),(73,'1','120','1','2021-07-16 00:00:00',NULL),(74,'1','121','1','2021-07-16 00:00:00',NULL),(75,'1','122','1','2021-07-16 00:00:00',NULL),(76,'1','123','1','2021-07-16 00:00:00',NULL),(77,'1','124','1','2021-07-16 00:00:00',NULL),(78,'1','125','1','2021-07-16 00:00:00',NULL),(79,'1','126','1','2021-07-16 00:00:00',NULL),(80,'1','127','1','2021-07-16 00:00:00',NULL),(81,'1','128','1','2021-07-16 00:00:00',NULL),(82,'1','129','1','2021-07-16 00:00:00',NULL),(83,'1','130','1','2021-07-16 00:00:00',NULL),(84,'1','131','1','2021-07-16 00:00:00',NULL),(85,'1','132','1','2021-07-16 00:00:00',NULL),(86,'1','133','1','2021-07-16 00:00:00',NULL),(87,'1','134','1','2021-07-16 00:00:00',NULL),(104,'2','217','1','2021-07-16 00:00:00',NULL),(105,'2','218','1','2021-07-16 00:00:00',NULL),(106,'2','219','1','2021-07-16 00:00:00',NULL),(107,'2','220','1','2021-07-16 00:00:00',NULL),(108,'2','221','1','2021-07-16 00:00:00',NULL),(109,'2','222','1','2021-07-16 00:00:00',NULL),(110,'2','223','1','2021-07-16 00:00:00',NULL),(111,'2','224','1','2021-07-16 00:00:00',NULL),(112,'2','225','1','2021-07-16 00:00:00',NULL),(113,'2','226','1','2021-07-16 00:00:00',NULL),(114,'2','227','1','2021-07-16 00:00:00',NULL),(115,'2','229','1','2021-07-16 00:00:00',NULL),(116,'2','230','1','2021-07-16 00:00:00',NULL),(117,'2','231','1','2021-07-16 00:00:00',NULL),(118,'2','232','1','2021-07-16 00:00:00',NULL),(119,'2','233','1','2021-07-16 00:00:00',NULL),(120,'2','234','1','2021-07-16 00:00:00',NULL),(137,'3','317','1','2021-07-16 00:00:00',NULL),(138,'3','318','1','2021-07-16 00:00:00',NULL),(139,'3','319','1','2021-07-16 00:00:00',NULL),(140,'3','320','1','2021-07-16 00:00:00',NULL),(141,'3','321','1','2021-07-16 00:00:00',NULL),(142,'3','322','1','2021-07-16 00:00:00',NULL),(143,'3','323','1','2021-07-16 00:00:00',NULL),(144,'3','324','1','2021-07-16 00:00:00',NULL),(145,'3','325','1','2021-07-16 00:00:00',NULL),(146,'3','326','1','2021-07-16 00:00:00',NULL),(147,'3','327','1','2021-07-16 00:00:00',NULL),(148,'3','328','1','2021-07-16 00:00:00',NULL),(149,'3','329','1','2021-07-16 00:00:00',NULL),(150,'3','330','1','2021-07-16 00:00:00',NULL),(151,'3','331','1','2021-07-16 00:00:00',NULL),(152,'3','332','1','2021-07-16 00:00:00',NULL),(153,'3','333','1','2021-07-16 00:00:00',NULL),(154,'3','334','1','2021-07-16 00:00:00',NULL),(155,'PHDU','105','1','2022-01-17 00:00:00',NULL);

/*Table structure for table `ic_culture_report` */

DROP TABLE IF EXISTS `ic_culture_report`;

CREATE TABLE `ic_culture_report` (
  `culture_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `culture_insertion_date` datetime DEFAULT NULL,
  `culture_source` varchar(255) DEFAULT NULL,
  `culture_result` varchar(255) DEFAULT NULL,
  `culture_organism` varchar(255) DEFAULT NULL,
  `culture_antibio` text DEFAULT NULL,
  `MDR` text DEFAULT NULL,
  `culture_creation` datetime DEFAULT NULL,
  `culture_updation` datetime DEFAULT NULL,
  `culture_status` decimal(2,0) DEFAULT NULL,
  `device_id` bigint(20) DEFAULT NULL,
  `form_id` bigint(19) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`culture_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_culture_report` */

insert  into `ic_culture_report`(`culture_id`,`culture_insertion_date`,`culture_source`,`culture_result`,`culture_organism`,`culture_antibio`,`MDR`,`culture_creation`,`culture_updation`,`culture_status`,`device_id`,`form_id`,`created_at`,`created_by`) values (1,'2020-07-17 00:00:00','sadsad','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,1,1,NULL,6),(2,'2020-07-17 00:00:00','0','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,1,1,NULL,6),(3,'2020-07-17 00:00:00','dawns','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,0,1,NULL,6),(4,'2020-07-17 00:00:00','dawns','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,0,1,NULL,6),(5,'2020-07-17 00:00:00','dawns','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,0,1,NULL,6),(6,'2020-07-17 00:00:00','dawns','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,2,1,NULL,6),(7,'2020-07-17 00:00:00','sadsad','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,2,1,NULL,6),(8,'2020-07-17 00:00:00','hi there','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,3,1,NULL,6),(9,'2020-07-17 00:00:00','dawn','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,3,1,NULL,6),(10,'2020-07-17 00:00:00','sadsad','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,4,1,NULL,6),(11,'2020-07-17 00:00:00','dawn','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,4,1,NULL,6),(12,'2020-07-17 00:00:00','dawn','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,5,1,NULL,6),(13,'2020-07-17 00:00:00','hi there','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,5,1,NULL,6),(14,'2020-07-17 00:00:00','hi there','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,6,1,NULL,6),(15,'2020-07-17 00:00:00','dsa hahah','Positive','Enterococcus','Vancomycin','Vancomycin Resistant Enterococcus','2022-01-19 00:00:00',NULL,NULL,6,1,NULL,6),(16,'2020-07-17 00:00:00','hi there','Positive','Shigella species','All tested carbapenems (imipenem, meropenem, etc.)','Carbapenem Resistant Enterobacterales (CRE)','2022-01-19 00:00:00',NULL,NULL,10,5,NULL,6),(17,'2020-07-17 00:00:00','dawns','Positive','Proteus species','All tested carbapenems (imipenem, meropenem, etc.)','Carbapenem Resistant Enterobacterales (CRE)','2022-01-19 00:00:00',NULL,NULL,0,5,NULL,6);

/*Table structure for table `ic_infection_devices` */

DROP TABLE IF EXISTS `ic_infection_devices`;

CREATE TABLE `ic_infection_devices` (
  `device_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `form_id` bigint(20) NOT NULL,
  `device_name` varchar(255) DEFAULT NULL,
  `device_status` decimal(2,0) DEFAULT NULL,
  `deivce_insertion_date` datetime DEFAULT NULL,
  `phlebitis` varchar(100) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `check` varchar(255) DEFAULT NULL,
  `mr_no` varchar(255) DEFAULT NULL,
  `device_creation` datetime DEFAULT NULL,
  `device_updation` datetime DEFAULT NULL,
  `deivce_surgery_date` datetime DEFAULT NULL,
  `device_first_event` datetime DEFAULT NULL,
  `deivce_intubation_date` datetime DEFAULT NULL,
  `deivce_extubation_date` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `worse_cxr` decimal(20,0) DEFAULT 0,
  `worse_tracheal_secret` decimal(20,0) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_infection_devices` */

insert  into `ic_infection_devices`(`device_id`,`form_id`,`device_name`,`device_status`,`deivce_insertion_date`,`phlebitis`,`site`,`check`,`mr_no`,`device_creation`,`device_updation`,`deivce_surgery_date`,`device_first_event`,`deivce_intubation_date`,`deivce_extubation_date`,`type`,`worse_cxr`,`worse_tracheal_secret`,`created_at`,`created_by`) values (1,1,'Phlebitis','0','2022-01-19 00:00:00','','sad','confirmed','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6),(2,1,'Urinary Tract Infection','0','2022-01-19 00:00:00',NULL,NULL,'Suspected','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,'Foleys','0','0','2022-01-19 00:00:00',6),(3,1,'Central Line Associated Bloodstream Infection','0','2022-01-19 00:00:00',NULL,NULL,'Confirm','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,'CVP','0','0','2022-01-19 00:00:00',6),(4,1,'Hospital Acquired Pneumonia','0',NULL,NULL,NULL,'Suspected','1','2022-01-19 00:00:00',NULL,NULL,'2022-01-19 00:00:00',NULL,NULL,NULL,'1','1','2022-01-19 00:00:00',6),(5,1,'Ventilator Associated Pneumonia','0',NULL,NULL,NULL,'Confirm','1','2022-01-19 00:00:00',NULL,NULL,NULL,'2022-01-19 00:00:00','2022-01-19 00:00:00',NULL,'1','1','2022-01-19 00:00:00',6),(6,1,'Surgical Site Infection','0',NULL,NULL,NULL,'absent','1','2022-01-19 00:00:00',NULL,'2022-01-19 00:00:00',NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6),(7,2,'Phlebitis','0','2022-01-19 00:00:00','','123','confirmed','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6),(8,3,'Phlebitis','0','2022-01-19 00:00:00','','213','suspected','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6),(9,4,'Phlebitis','0','2022-01-19 00:00:00','','21','suspected','1','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6),(10,5,'Phlebitis','0','2022-01-19 00:00:00','','212','suspected','2','2022-01-19 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','2022-01-19 00:00:00',6);

/*Table structure for table `ic_lovs` */

DROP TABLE IF EXISTS `ic_lovs`;

CREATE TABLE `ic_lovs` (
  `lov_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `organism_name` varchar(255) DEFAULT NULL,
  `antibiotic_class_1` varchar(255) DEFAULT NULL,
  `lov_status` decimal(2,0) DEFAULT 1,
  `lov_creation` datetime DEFAULT NULL,
  `lov_updation` datetime DEFAULT NULL,
  `antibiotic_class_2` varchar(255) DEFAULT NULL,
  `antibiotic_class_3` varchar(255) DEFAULT NULL,
  `antibiotic_class_4` varchar(255) DEFAULT NULL,
  `antibiotic_class_5` varchar(255) DEFAULT NULL,
  `antibiotic_class_6` varchar(255) DEFAULT NULL,
  `antibiotic_class_7` varchar(255) DEFAULT NULL,
  `antibiotic_class_8` varchar(255) DEFAULT NULL,
  `antibiotic_class_9` varchar(255) DEFAULT NULL,
  `mbr_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lov_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_lovs` */

insert  into `ic_lovs`(`lov_id`,`organism_name`,`antibiotic_class_1`,`lov_status`,`lov_creation`,`lov_updation`,`antibiotic_class_2`,`antibiotic_class_3`,`antibiotic_class_4`,`antibiotic_class_5`,`antibiotic_class_6`,`antibiotic_class_7`,`antibiotic_class_8`,`antibiotic_class_9`,`mbr_name`) values (13,'Pseudomonas aeruginosa','All tested aminoglycosides (amikacin, gentamicin, etc.)','1','2021-06-19 00:00:00','2021-06-19 00:00:00','All tested fluoroquinolones (ciprofloxacin, levofloxacin, moxifloxacin, nalidixic acid, etc.)','Ceftazidime','All tested antipseudomonal penicillins (piperacillin, ticarcillin, etc.)','Polymyxins (polymyxin B, colistin)','All tested carbapenems (imipenem, meropenem, etc.)','Piperacillin tazobactam','','','MDR Pseudomonas aeruginosa'),(12,'Enterococcus','Vancomycin','1','2021-06-17 00:00:00',NULL,'','','','','','','','','Vancomycin Resistant Enterococcus'),(11,'Staphylococcus aureus','methicillin/oxacillin/cloxacillin','1','2021-06-17 00:00:00','2021-06-17 00:00:00','','','','','','','','','Methicillin Resistant Staphylococcus Aureus (MRSA)'),(14,'Acinetobacter species','All tested aminoglycosides (amikacin, gentamicin, etc.)','1','2021-06-19 00:00:00',NULL,'All tested fluoroquinolones (ciprofloxacin, levofloxacin, moxifloxacin, nalidixic acid, etc.)','Ceftazidime','All tested antipseudomonal penicillins (piperacillin, ticarcillin, etc.)','Polymyxins (polymyxin B, colistin)','All tested carbapenems (imipenem, meropenem, etc.)','Piperacillin tazobactam','','','MDR Acinetobacter species'),(15,'E. coli','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(16,'Klebsiella pneumoniae','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(17,'Klebsiella species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(18,'Enterobacter species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(19,'Salmonella Typhi','Ceftriaxone','1','2021-06-19 00:00:00',NULL,'','','','','','','','','XDR Salmonella Typhi'),(20,'Salmonella species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00','2021-06-19 00:00:00','','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(21,'Providencia species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(22,'Morganella species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(23,'Proteus species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(24,'Serratia species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(25,'Edwardsiella species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00','2021-06-19 00:00:00','','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(26,'Pantoea species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(27,'Raoultella terrigenna','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(28,'Shigella species','All tested carbapenems (imipenem, meropenem, etc.)','1','2021-06-19 00:00:00',NULL,'','','','','','','','','Carbapenem Resistant Enterobacterales (CRE)'),(29,'Candida auris','Azole group (fluconazole, etc.)','1','2021-06-19 00:00:00',NULL,'Echinocandins (caspofungin, etc.)','Polyenes(amphotericin, etc.)','Flucytosine','','','','','','Candida auris');

/*Table structure for table `ic_roles` */

DROP TABLE IF EXISTS `ic_roles`;

CREATE TABLE `ic_roles` (
  `role_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `role_status` decimal(2,0) DEFAULT 1,
  `role_creation` datetime DEFAULT NULL,
  `role_updation` datetime DEFAULT NULL,
  `role_code` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_roles` */

insert  into `ic_roles`(`role_id`,`role_name`,`role_status`,`role_creation`,`role_updation`,`role_code`) values (1,'CONTROLER','1','2021-06-05 00:00:00',NULL,32),(2,'ADMINISTRATE','1','2021-06-05 00:00:00',NULL,1);

/*Table structure for table `ic_source` */

DROP TABLE IF EXISTS `ic_source`;

CREATE TABLE `ic_source` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `source_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_source` */

insert  into `ic_source`(`record_id`,`source_name`,`status`,`created_at`,`created_by`,`update_at`,`update_by`) values (1,'dawns','active',NULL,NULL,'2022-01-18 00:00:00',NULL),(2,'sadsad','active',NULL,NULL,NULL,NULL),(3,'asdsa','inactive',NULL,NULL,NULL,NULL),(4,'dawn','active','2022-01-18 00:00:00',NULL,NULL,NULL),(5,'hi there','active','2022-01-18 00:00:00',NULL,NULL,NULL),(6,'dsa hahah','active','2022-01-18 00:00:00',6,'2022-01-18 00:00:00',6),(7,'dawn hahahahahahaha','active','2022-01-19 00:00:00',6,NULL,NULL),(8,'testing','active','2022-01-19 00:00:00',6,NULL,NULL);

/*Table structure for table `ic_surveillance_form` */

DROP TABLE IF EXISTS `ic_surveillance_form`;

CREATE TABLE `ic_surveillance_form` (
  `form_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mr_no` varchar(100) NOT NULL,
  `pateint_name` varchar(255) DEFAULT NULL,
  `ward_no` varchar(10) DEFAULT NULL,
  `bed_no` varchar(10) DEFAULT NULL,
  `admission_date` datetime DEFAULT NULL,
  `primary_diagnosis` varchar(255) DEFAULT NULL,
  `final_diagnosis` varchar(255) DEFAULT NULL,
  `discharge_date` datetime DEFAULT NULL,
  `discharge_condition` varchar(255) DEFAULT NULL,
  `fever` decimal(20,0) DEFAULT NULL,
  `temp` decimal(20,0) DEFAULT NULL,
  `tachy` decimal(20,0) DEFAULT NULL,
  `pulse` decimal(20,0) DEFAULT NULL,
  `hypo` decimal(20,0) DEFAULT NULL,
  `bp` decimal(20,0) DEFAULT NULL,
  `chills` decimal(20,0) DEFAULT NULL,
  `wbc` decimal(20,0) DEFAULT NULL,
  `neutro` decimal(20,0) DEFAULT NULL,
  `lymp` decimal(20,0) DEFAULT NULL,
  `form_creation` datetime DEFAULT NULL,
  `form_updation` datetime DEFAULT NULL,
  `form_status` decimal(2,0) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_surveillance_form` */

insert  into `ic_surveillance_form`(`form_id`,`mr_no`,`pateint_name`,`ward_no`,`bed_no`,`admission_date`,`primary_diagnosis`,`final_diagnosis`,`discharge_date`,`discharge_condition`,`fever`,`temp`,`tachy`,`pulse`,`hypo`,`bp`,`chills`,`wbc`,`neutro`,`lymp`,`form_creation`,`form_updation`,`form_status`,`created_at`,`created_by`) values (1,'1','dawn','1','112','2022-01-19 00:00:00','asd','sad','0000-00-00 00:00:00','improved','0','1232','0','123','0','90','0','0','213','0','2022-01-19 03:13:53',NULL,'1','2022-01-19 00:00:00',6),(2,'1','dawn','1','112','2022-01-19 00:00:00','asd','sad','0000-00-00 00:00:00','improved sent home','0','111','0','23','0','12','0','0','21','0','2022-01-19 03:18:53',NULL,'1','2022-01-19 00:00:00',6),(3,'1','dawn','1','112','2022-01-19 00:00:00','asd','sad','0000-00-00 00:00:00','improved','0','213','0','213','0','213','0','0','213','0','2022-01-19 03:22:08',NULL,'1','2022-01-19 00:00:00',6),(4,'1','dawn','1','112','2022-01-19 00:00:00','asd','sad','0000-00-00 00:00:00','','0','12','0','213','0','21','0','0','21','0','2022-01-19 03:24:59',NULL,'1','2022-01-19 00:00:00',6),(5,'2','a','1','116','2022-01-19 00:00:00','a','a','0000-00-00 00:00:00','improved sent home','0','121','0','213','0','212','0','0','21','0','2022-01-19 07:02:59',NULL,'1','2022-01-19 00:00:00',6);

/*Table structure for table `ic_users` */

DROP TABLE IF EXISTS `ic_users`;

CREATE TABLE `ic_users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role_id` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `user_creation` datetime DEFAULT NULL,
  `user_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_users` */

insert  into `ic_users`(`user_id`,`user_name`,`user_password`,`user_role_id`,`user_status`,`user_creation`,`user_updation`) values (1,'RTahir','YWE=','32','1','2021-06-09 20:13:44','2021-06-09 20:13:44'),(2,'admin','YWE=','2','1','2021-06-05 00:00:00',NULL),(6,'ICADMIN','YWE=','32','1','2021-06-05 00:00:00',NULL),(5,'CI','YWE=','1','1','2021-06-05 00:00:00',NULL);

/*Table structure for table `ic_ward` */

DROP TABLE IF EXISTS `ic_ward`;

CREATE TABLE `ic_ward` (
  `ward_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ward_no` varchar(100) DEFAULT NULL,
  `ward_depart` varchar(100) DEFAULT NULL,
  `ward_status` decimal(2,0) DEFAULT 1,
  `ward_creation` datetime DEFAULT NULL,
  `ward_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`ward_id`),
  UNIQUE KEY `ward_no` (`ward_no`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ic_ward` */

insert  into `ic_ward`(`ward_id`,`ward_no`,`ward_depart`,`ward_status`,`ward_creation`,`ward_updation`) values (1,'1','ICU','1','2021-07-11 00:00:00',NULL),(3,'2','HDU','1','2021-07-16 00:00:00',NULL),(7,'PHDU','asd','1','2022-01-17 00:00:00',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
