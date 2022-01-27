/*
SQLyog Ultimate v10.00 Beta1
MySQL - 8.0.21 : Database - db_icportal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_icportal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_icportal`;

/*Table structure for table `ic_bed` */

DROP TABLE IF EXISTS `ic_bed`;

CREATE TABLE `ic_bed` (
  `bed_id` bigint NOT NULL AUTO_INCREMENT,
  `ward_no` varchar(100) DEFAULT NULL,
  `bed_no` varchar(100) DEFAULT NULL,
  `bed_status` decimal(10,0) DEFAULT NULL,
  `bed_creation` datetime DEFAULT NULL,
  `bed_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`bed_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_bed` */

/*Table structure for table `ic_culture_report` */

DROP TABLE IF EXISTS `ic_culture_report`;

CREATE TABLE `ic_culture_report` (
  `culture_id` bigint NOT NULL AUTO_INCREMENT,
  `culture_insertion_date` datetime DEFAULT NULL,
  `culture_source` varchar(255) DEFAULT NULL,
  `culture_result` varchar(255) DEFAULT NULL,
  `culture_organism` varchar(255) DEFAULT NULL,
  `culture_antibio` text,
  `MDR` text,
  `culture_creation` datetime DEFAULT NULL,
  `culture_updation` datetime DEFAULT NULL,
  `culture_status` decimal(2,0) DEFAULT NULL,
  `device_id` bigint DEFAULT NULL,
  PRIMARY KEY (`culture_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_culture_report` */

insert  into `ic_culture_report`(`culture_id`,`culture_insertion_date`,`culture_source`,`culture_result`,`culture_organism`,`culture_antibio`,`MDR`,`culture_creation`,`culture_updation`,`culture_status`,`device_id`) values (1,'2021-07-08 00:00:00','tissue','Positive','Staphylococcus aureus','Vancomycin, fluoroquinolone','Methicilin resistant Staphylococcus aureus (MRSA)','2021-06-02 00:00:00',NULL,NULL,1),(2,'2021-07-06 00:00:00','central line blood','Positive','Enterococcus','Vancomycin,piperacillin','Vancomycin resistant Enterococcus (VRE)','2021-06-02 00:00:00',NULL,NULL,2),(3,'2020-07-17 00:00:00','central line blood','Positive','Enterococcus','Vancomycin,piperacillin','Vancomycin resistant Enterococcus (VRE)','2021-06-02 00:00:00',NULL,NULL,3),(4,'2020-07-17 00:00:00','central line blood','Negative','Staphylococcus aureus','Vancomycin, fluoroquinolone','Methicilin resistant Staphylococcus aureus (MRSA)','2021-06-02 00:00:00',NULL,NULL,5);

/*Table structure for table `ic_infection_devices` */

DROP TABLE IF EXISTS `ic_infection_devices`;

CREATE TABLE `ic_infection_devices` (
  `device_id` bigint NOT NULL AUTO_INCREMENT,
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
  `device_extubation_date` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_infection_devices` */

insert  into `ic_infection_devices`(`device_id`,`device_name`,`device_status`,`deivce_insertion_date`,`phlebitis`,`site`,`check`,`mr_no`,`device_creation`,`device_updation`,`deivce_surgery_date`,`device_extubation_date`,`type`) values (1,'Phlebitis','0','2021-06-02 00:00:00','yes','dfdf','Suspected','45879','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(2,'Phlebitis','0','2021-06-02 00:00:00','yes','test','Confirm','45869','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(3,'Phlebitis','0','2021-06-02 00:00:00','yes','test','Confirm','458691','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(4,'Surgical Site Infection','0','2021-06-02 00:00:00',NULL,NULL,'HAP NO','458691','2021-06-02 00:00:00',NULL,'2021-06-02 00:00:00',NULL,NULL),(5,'Phlebitis','0','2021-06-02 00:00:00','yes','testing','Confirm','23456','2021-06-02 00:00:00',NULL,NULL,NULL,NULL);

/*Table structure for table `ic_lovs` */

DROP TABLE IF EXISTS `ic_lovs`;

CREATE TABLE `ic_lovs` (
  `lov_id` bigint NOT NULL AUTO_INCREMENT,
  `lov_name` varchar(255) DEFAULT NULL,
  `lov_type` varchar(100) DEFAULT NULL,
  `lov_status` decimal(2,0) DEFAULT '1',
  `lov_creation` datetime DEFAULT NULL,
  `lov_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`lov_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_lovs` */

/*Table structure for table `ic_roles` */

DROP TABLE IF EXISTS `ic_roles`;

CREATE TABLE `ic_roles` (
  `role_id` bigint NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `role_status` decimal(2,0) DEFAULT '1',
  `role_creation` datetime DEFAULT NULL,
  `role_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_roles` */

/*Table structure for table `ic_surveillance_form` */

DROP TABLE IF EXISTS `ic_surveillance_form`;

CREATE TABLE `ic_surveillance_form` (
  `form_id` bigint NOT NULL AUTO_INCREMENT,
  `mr_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
  `worse_cxr` decimal(20,0) DEFAULT NULL,
  `worse_tracheal_secret` decimal(20,0) DEFAULT NULL,
  `form_creation` datetime DEFAULT NULL,
  `form_updation` datetime DEFAULT NULL,
  `form_status` decimal(2,0) DEFAULT '1',
  PRIMARY KEY (`form_id`),
  UNIQUE KEY `mr_uniqe` (`mr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_surveillance_form` */

insert  into `ic_surveillance_form`(`form_id`,`mr_no`,`pateint_name`,`ward_no`,`bed_no`,`admission_date`,`primary_diagnosis`,`final_diagnosis`,`discharge_date`,`discharge_condition`,`fever`,`temp`,`tachy`,`pulse`,`hypo`,`bp`,`chills`,`wbc`,`neutro`,`lymp`,`worse_cxr`,`worse_tracheal_secret`,`form_creation`,`form_updation`,`form_status`) values (2,'45879','tahir','2','3','2021-06-02 00:00:00','testing','final test','2021-06-03 00:00:00','improved sent home','0','103','0','163','0','89','0','58','55','89','0','0','2021-06-02 00:00:00',NULL,'1'),(3,'45869','Aatir','3','4','2021-06-02 00:00:00','hamdard','darada dava','2021-06-02 00:00:00','improved sent home','0','589','0','589','0','5455','0','797','258','56','0','0','2021-06-02 00:00:00',NULL,'1'),(4,'458691','Aatir2','3','4','2021-06-02 00:00:00','hamdard','darada dava','2021-06-02 00:00:00','improved sent home','0','589','0','589','0','5455','0','797','258','56','0','0','2021-06-02 00:00:00',NULL,'1'),(5,'23456','WAQEEL','3','4','2021-06-02 00:00:00','TEST','tesing','2021-06-02 00:00:00','improved sent home','0','545','0','45','0','54','0','54','45','54','0','0','2021-06-02 00:00:00',NULL,'1'),(6,'34567','Amjad','4','3','2021-06-02 00:00:00','ggt','tt','2021-06-02 00:00:00','improved sent home','0','767','0','676','0','67','0','676','676','676','0','0','2021-06-02 00:00:00',NULL,'1'),(7,'456678','fdf','4','3','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','56','0','56','0','56','34','23','0','0','2021-06-02 00:00:00',NULL,'1'),(8,'4566783','fdf','4','3','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','56','0','56','0','56','34','23','0','0','2021-06-02 00:00:00',NULL,'1'),(9,'3456745','tager','4','4','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','65','0','565','0','565','0','56','56','65','0','0','2021-06-02 00:00:00',NULL,'1'),(10,'56899','trtr','6','5','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','454','0','67','0','676','76','676','0','0','2021-06-02 00:00:00',NULL,'1');

/*Table structure for table `ic_users` */

DROP TABLE IF EXISTS `ic_users`;

CREATE TABLE `ic_users` (
  `user_id` bigint NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role_id` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `user_creation` datetime DEFAULT NULL,
  `user_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_users` */

/*Table structure for table `ic_ward` */

DROP TABLE IF EXISTS `ic_ward`;

CREATE TABLE `ic_ward` (
  `ward_id` bigint NOT NULL AUTO_INCREMENT,
  `ward_no` varchar(100) DEFAULT NULL,
  `ward_depart` varchar(100) DEFAULT NULL,
  `ward_status` decimal(2,0) DEFAULT '1',
  `ward_creation` datetime DEFAULT NULL,
  `ward_updation` datetime DEFAULT NULL,
  PRIMARY KEY (`ward_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ic_ward` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
