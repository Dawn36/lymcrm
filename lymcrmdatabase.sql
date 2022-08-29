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

/*Table structure for table `apartment` */

DROP TABLE IF EXISTS `apartment`;

CREATE TABLE `apartment` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `building_id` bigint(20) DEFAULT NULL,
  `apartment_number` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `is_tenant` enum('yes','no') DEFAULT 'no',
  `is_owner` enum('yes','no') DEFAULT 'no',
  `is_tenancy` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `apartment` */

insert  into `apartment`(`record_id`,`building_id`,`apartment_number`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`,`is_tenant`,`is_owner`,`is_tenancy`) values (1,1,'12','active','2022-02-09 12:29:30',1,'dawn1211',NULL,NULL,NULL,'no','yes','no'),(2,1,'123','active','2022-02-09 12:29:54',1,'dawn1211',NULL,NULL,NULL,'no','yes','yes'),(3,2,'sad','active','2022-02-10 12:14:01',1,'dawn1211',NULL,NULL,NULL,'no','yes','yes'),(4,2,'sad10','active','2022-02-10 12:14:01',1,'dawn1211','2022-02-10 12:20:34',1,'dawn1211','no','yes','yes'),(5,4,'1','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(6,5,'2','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(7,4,'3','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(8,4,'4','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(9,5,'1','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(10,5,'3','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no'),(11,6,'3','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL,'no','no','no');

/*Table structure for table `building` */

DROP TABLE IF EXISTS `building`;

CREATE TABLE `building` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `building_name` varchar(255) DEFAULT NULL,
  `building_address` varchar(255) DEFAULT NULL,
  `building_community` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `building` */

insert  into `building`(`record_id`,`building_name`,`building_address`,`building_community`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`) values (1,'dawnnn','sad','asd','active','2022-02-09 12:29:21',1,'dawn1211',NULL,NULL,NULL),(2,'test','sadas','sdas','active','2022-02-10 12:13:52',1,'dawn1211',NULL,NULL,NULL),(3,'A','123','asd','inactive','2022-02-10 07:01:29',1,'dawn1211','2022-03-05 01:26:03',1,'dawn1211'),(4,'aa','aa-1','abc','active','2022-02-11 11:11:42',1,'dawn1211','2022-02-11 11:11:42',1,'dawn1211'),(5,'bb','bb-1','def','active','2022-02-11 11:11:42',1,'dawn1211','2022-02-11 11:11:42',1,'dawn1211'),(6,'cc','bb-1','def','active','2022-02-11 11:11:42',1,'dawn1211',NULL,NULL,NULL);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `updated_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `company` */

insert  into `company`(`record_id`,`company_name`,`name`,`email`,`address`,`created_name`,`phone_number`,`created_at`,`created_by`,`updated_at`,`updated_by`,`status`,`updated_name`) values (1,NULL,'dasaa','dawngill08@gmail.com','sadsa','dawn1211','213','2022-07-04 04:26:21',1,'2022-07-04 05:13:18',1,'active','dawn1211'),(2,NULL,'dsa','dawngill038@gmail.com','as','dawn1211','23213','2022-07-04 04:29:34',1,NULL,NULL,'active',NULL),(3,NULL,'aaaaa','darwingill6a@gmail.com','sad','dawn1211','232','2022-07-04 04:31:09',1,'2022-07-04 04:43:10',1,'inactive','dawn1211'),(4,'hhhhh','hahah','ahah@gmail.com','sad','dawn1211','21321','2022-07-21 05:40:47',1,'2022-07-21 05:40:56',1,'active','dawn1211');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `building_id` bigint(20) DEFAULT NULL,
  `apartment_id` bigint(20) DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `tenant_id` bigint(20) DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `complaint_status` enum('pending','assigned','completed') DEFAULT 'pending',
  `currency` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `assigned_remarks` varchar(255) DEFAULT NULL,
  `paid_by` varchar(255) DEFAULT NULL,
  `bill` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `assigned_date` datetime DEFAULT NULL,
  `complaint_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint` */

insert  into `complaint`(`record_id`,`building_id`,`apartment_id`,`owner_id`,`tenant_id`,`company_id`,`cost`,`description`,`complaint_status`,`currency`,`remarks`,`assigned_remarks`,`paid_by`,`bill`,`status`,`assigned_date`,`complaint_date`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`) values (1,1,2,1,2,2,'90','<p>sad dawn adsa</p>','completed',NULL,NULL,NULL,NULL,NULL,'active','2022-07-04 00:00:00','2022-07-05 11:58:13','2022-07-04 09:13:26',1,'dawn1211','2022-07-05 11:58:13',1,'dawn1211'),(2,1,2,1,2,NULL,NULL,'<p>sad dawn adsa</p>','assigned',NULL,NULL,NULL,NULL,NULL,'inactive',NULL,'2022-07-05 12:01:32','2022-07-04 09:15:21',1,'dawn1211','2022-07-05 12:01:32',10,'sd'),(3,1,2,1,2,NULL,NULL,'<p>sad dawn adsa</p>','pending',NULL,NULL,NULL,NULL,NULL,'inactive',NULL,'2022-07-05 12:01:32','2022-07-04 11:28:31',10,'sd','2022-07-05 12:01:32',10,'sd'),(4,1,2,1,2,1,'20000','<p><b>sad dawn adsa</b></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">hi</font></p><p><b><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">adsa</font></b></p>','completed',NULL,NULL,NULL,NULL,NULL,'active','2022-07-05 00:00:00','2022-07-05 11:59:24','2022-07-04 11:29:16',10,'sd','2022-07-05 11:59:24',1,'dawn1211'),(5,1,2,1,2,2,'12221','<p>asdsad</p>','completed','Aed د.إ','sad',NULL,'paid owner',12,'active','2022-07-15 00:00:00','2022-07-15 01:08:30','2022-07-15 01:08:30',1,'dawn1211',NULL,NULL,NULL),(6,1,2,1,2,2,'12222','<p>sdasd</p>','completed','Aed د.إ','sadsadasd',NULL,'paid tenant',0,'active','2022-07-30 00:00:00','2022-07-15 01:10:46','2022-07-15 01:10:46',1,'dawn1211',NULL,NULL,NULL),(7,1,2,1,2,1,NULL,'<p>sad</p>','assigned',NULL,NULL,NULL,NULL,NULL,'active','2022-08-08 00:00:00','2022-07-21 04:01:02','2022-07-21 04:01:02',4,'dawringill12',NULL,NULL,NULL),(8,1,2,1,2,4,NULL,'<p>sad</p>','assigned',NULL,NULL,NULL,NULL,NULL,'active','2022-08-16 00:00:00','2022-07-21 04:01:33','2022-07-21 04:01:33',4,'dawringill12',NULL,NULL,NULL),(9,1,2,1,2,NULL,NULL,'<p>asd</p>','pending',NULL,NULL,NULL,NULL,NULL,'active',NULL,'2022-07-21 04:01:48','2022-07-21 04:01:48',4,'dawringill12',NULL,NULL,NULL),(10,1,2,1,2,NULL,NULL,'<p>sad</p>','pending',NULL,NULL,NULL,NULL,NULL,'active',NULL,'2022-07-21 04:03:20','2022-07-21 04:03:20',4,'dawringill12',NULL,NULL,NULL),(11,1,2,1,2,4,NULL,'<p>sadas</p>','assigned',NULL,NULL,NULL,NULL,NULL,'active','2022-07-30 00:00:00','2022-07-30 03:01:21','2022-07-30 03:01:21',1,'dawn1211',NULL,NULL,NULL),(12,1,2,1,2,2,NULL,'<p>sadas</p>','assigned',NULL,NULL,'dawb',NULL,NULL,'active','2022-08-28 00:00:00','2022-08-08 10:21:57','2022-08-08 10:21:57',2,'darrel1',NULL,NULL,NULL);

/*Table structure for table `complaint_image` */

DROP TABLE IF EXISTS `complaint_image`;

CREATE TABLE `complaint_image` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `complaint_id` bigint(20) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint_image` */

insert  into `complaint_image`(`record_id`,`complaint_id`,`file_name`,`file_path`,`file_type`,`status`,`created_at`,`created_by`,`created_name`) values (1,1,'amin-avatar.jpeg','http://localhost:2000/uploads/complaint/amin-avatar.jpeg','.jpeg','active','2022-07-04 09:13:26',1,'dawn1211'),(2,1,'blog-post-01.jpg','http://localhost:2000/uploads/complaint/blog-post-01.jpg','.jpg','active','2022-07-04 09:13:26',1,'dawn1211'),(3,2,'amin-avatar.jpeg','http://localhost:2000/uploads/complaint/amin-avatar.jpeg','.jpeg','active','2022-07-04 09:15:21',1,'dawn1211'),(4,2,'blog-compact-post-03.jpg','http://localhost:2000/uploads/complaint/blog-compact-post-03.jpg','.jpg','active','2022-07-04 09:15:21',1,'dawn1211'),(5,3,'blog-compact-post-031.jpg','http://localhost:2000/uploads/complaint/blog-compact-post-031.jpg','.jpg','active','2022-07-04 11:28:31',10,'sd'),(6,4,'amin-avatar1.jpeg','http://localhost:2000/uploads/complaint/amin-avatar1.jpeg','.jpeg','active','2022-07-04 11:29:16',10,'sd'),(7,4,'blog-post-011.jpg','http://localhost:2000/uploads/complaint/blog-post-011.jpg','.jpg','active','2022-07-05 12:03:00',10,'sd'),(8,4,'blog-widget-01.jpg','http://localhost:2000/uploads/complaint/blog-widget-01.jpg','.jpg','active','2022-07-05 12:03:13',10,'sd'),(9,4,'blog-post-03.jpg','http://localhost:2000/uploads/complaint/blog-post-03.jpg','.jpg','active','2022-07-05 12:03:26',10,'sd'),(10,4,'blog-widget-011.jpg','http://localhost:2000/uploads/complaint/blog-widget-011.jpg','.jpg','active','2022-07-05 12:03:26',10,'sd'),(11,4,'listeo_bg3.jpg','http://localhost:2000/uploads/complaint/listeo_bg3.jpg','.jpg','active','2022-07-05 11:59:24',1,'dawn1211');

/*Table structure for table `deposit` */

DROP TABLE IF EXISTS `deposit`;

CREATE TABLE `deposit` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `building_id` bigint(20) DEFAULT NULL,
  `apartment_id` bigint(20) DEFAULT NULL,
  `tenancy_id` bigint(20) DEFAULT NULL,
  `type` enum('cheque','cash') DEFAULT NULL,
  `payment_id` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `deposit` */

insert  into `deposit`(`record_id`,`building_id`,`apartment_id`,`tenancy_id`,`type`,`payment_id`,`created_by`,`created_at`,`created_name`,`updated_by`,`updated_at`,`updated_name`,`status`) values (1,1,1,1,'cheque',2,1,'2022-02-09 12:31:49','dawn1211',NULL,NULL,NULL,'inactive'),(2,1,1,1,'cash',1,1,'2022-02-09 12:32:01','dawn1211',NULL,NULL,NULL,'inactive'),(3,1,2,2,'cheque',5,1,'2022-02-09 12:32:11','dawn1211',NULL,NULL,NULL,'inactive'),(4,1,2,2,'cash',3,1,'2022-02-09 12:32:22','dawn1211',NULL,NULL,NULL,'inactive'),(5,1,2,2,'cash',4,1,'2022-02-09 12:32:32','dawn1211',NULL,NULL,NULL,'inactive'),(6,1,2,2,'cheque',5,1,'2022-02-09 12:37:41','dawn1211',NULL,NULL,NULL,'inactive'),(7,1,1,1,'cash',1,1,'2022-02-09 09:23:13','dawn1211',NULL,NULL,NULL,'inactive'),(8,2,4,3,'cheque',7,1,'2022-02-16 12:06:20','dawn1211',NULL,NULL,NULL,'inactive'),(9,2,4,3,'cash',6,1,'2022-02-16 12:08:37','dawn1211',NULL,NULL,NULL,'inactive'),(10,1,2,2,'cheque',5,1,'2022-02-16 12:09:19','dawn1211',NULL,NULL,NULL,'active'),(11,1,2,2,'cash',4,1,'2022-02-16 12:11:12','dawn1211',NULL,NULL,NULL,'active'),(12,2,4,3,'cheque',7,1,'2022-02-16 12:11:31','dawn1211',NULL,NULL,NULL,'active'),(13,2,4,3,'cash',6,1,'2022-02-16 12:12:01','dawn1211',NULL,NULL,NULL,'active'),(14,2,3,5,'cheque',9,1,'2022-02-16 12:12:21','dawn1211',NULL,NULL,NULL,'active');

/*Table structure for table `deposit_attachment` */

DROP TABLE IF EXISTS `deposit_attachment`;

CREATE TABLE `deposit_attachment` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `deposit_id` bigint(20) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `deposit_attachment` */

insert  into `deposit_attachment`(`record_id`,`deposit_id`,`file_name`,`file_path`,`file_type`,`status`,`created_at`,`created_by`,`created_name`) values (1,1,'avatar-k.png','http://localhost:1000/uploads/deposit/avatar-k.png','.png','active','2022-02-05 11:15:24',1,'dawn'),(2,2,'cover-2-lg.png','http://localhost:1000/uploads/deposit/cover-2-lg.png','.png','active','2022-02-09 09:15:46',1,'dawn1211'),(3,4,'cover-6-lg.png','http://localhost:1000/uploads/deposit/cover-6-lg.png','.png','active','2022-02-09 09:15:59',1,'dawn1211'),(4,1,'cover-1-lg.png','http://localhost:1000/uploads/deposit/cover-1-lg.png','.png','active','2022-02-09 09:16:10',1,'dawn1211'),(5,5,'profile1.png','http://localhost:1000/uploads/deposit/profile1.png','.png','active','2022-02-09 09:16:28',1,'dawn1211'),(6,6,'avatar-i.png','http://localhost:1000/uploads/deposit/avatar-i.png','.png','active','2022-02-09 09:16:42',1,'dawn1211'),(7,6,'avatar-j.png','http://localhost:1000/uploads/deposit/avatar-j.png','.png','active','2022-02-09 09:16:42',1,'dawn1211'),(8,11,'cover-4-lg.png','http://localhost:1000/uploads/deposit/cover-4-lg.png','.png','active','2022-02-16 12:11:12',1,'dawn1211'),(9,13,'cover-4-lg1.png','http://localhost:1000/uploads/deposit/cover-4-lg1.png','.png','active','2022-02-16 12:12:01',1,'dawn1211');

/*Table structure for table `email_complaint` */

DROP TABLE IF EXISTS `email_complaint`;

CREATE TABLE `email_complaint` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) DEFAULT NULL,
  `complaint_id` bigint(20) DEFAULT NULL,
  `tenant_name` varchar(255) DEFAULT NULL,
  `building_id` bigint(20) DEFAULT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `appartment_id` bigint(20) DEFAULT NULL,
  `appartment_name` varchar(255) DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `complaint_status` varchar(255) DEFAULT NULL,
  `assign_to` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `email_complaint` */

insert  into `email_complaint`(`record_id`,`tenant_id`,`complaint_id`,`tenant_name`,`building_id`,`building_name`,`appartment_id`,`appartment_name`,`owner_id`,`owner_name`,`complaint_status`,`assign_to`,`created_at`) values (1,2,11,'sd',1,'dawnnn',2,'123',1,'daw','pending',NULL,'2022-07-30 03:01:22'),(2,2,11,'sd',1,'dawnnn',2,'123',1,'daw','assigned','hahah','2022-07-30 03:15:50'),(3,2,11,'sd',1,'dawnnn',2,'123',1,'daw','assigned','hahah','2022-07-30 03:18:51'),(4,2,6,'sd',1,'dawnnn',NULL,NULL,1,'daw','completed',NULL,'2022-08-05 12:32:33'),(5,2,6,'sd',1,'dawnnn',NULL,NULL,1,'daw','completed',NULL,'2022-08-05 12:33:04'),(6,2,5,'sd',1,'dawnnn',2,'123',1,'daw','completed',NULL,'2022-08-05 12:34:57'),(7,2,12,'sd',1,'dawnnn',2,'123',1,'daw','pending',NULL,'2022-08-08 10:21:59'),(8,2,7,'sd',1,'dawnnn',2,'123',1,'daw','assigned','dsa','2022-08-08 10:26:07'),(9,2,7,'sd',1,'dawnnn',2,'123',1,'daw','assigned','dasaa','2022-08-08 10:26:20'),(10,2,8,'sd',1,'dawnnn',2,'123',1,'daw','assigned','hahah','2022-08-16 12:15:27'),(11,2,12,'sd',1,'dawnnn',2,'123',1,'daw','assigned','hahah','2022-08-28 11:03:27'),(12,2,12,'sd',1,'dawnnn',2,'123',1,'daw','assigned','dsa','2022-08-28 11:03:39'),(13,2,12,'sd',1,'dawnnn',2,'123',1,'daw','assigned','dsa','2022-08-28 11:03:50');

/*Table structure for table `email_history` */

DROP TABLE IF EXISTS `email_history`;

CREATE TABLE `email_history` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint(20) DEFAULT NULL,
  `tenant_name` varchar(255) DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` enum('self','system') DEFAULT NULL,
  `check` varchar(255) DEFAULT NULL,
  `tenancy_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `email_history` */

insert  into `email_history`(`record_id`,`tenant_id`,`tenant_name`,`end_date`,`status`,`check`,`tenancy_id`) values (10,2,'sd','2022-04-13 12:00:00',NULL,'60','2'),(12,3,'soun','2022-03-14 12:00:00',NULL,'30','3'),(13,3,'soun','2022-04-13 12:00:00',NULL,'60','3'),(14,3,'soun','2022-05-13 12:00:00',NULL,'90','3'),(16,2,'sd','2022-05-13 12:00:00',NULL,'90','2');

/*Table structure for table `email_self` */

DROP TABLE IF EXISTS `email_self`;

CREATE TABLE `email_self` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `deposit_id` bigint(20) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_email` varchar(255) DEFAULT NULL,
  `installment` varchar(255) DEFAULT NULL,
  `apartment_no` varchar(255) DEFAULT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

/*Data for the table `email_self` */

insert  into `email_self`(`record_id`,`deposit_id`,`owner_name`,`owner_email`,`installment`,`apartment_no`,`building_name`,`created_at`,`created_by`,`created_name`,`subject`,`email_content`) values (1,1,'sonu','sonu@gmail.com','2nd','101hellow','hellow','2022-02-05 11:15:24',1,'dawn','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 101hellow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(2,1,'sonu','sonu@gmail.com','2nd','101hellow','hellow','2022-02-06 01:22:16',NULL,NULL,'Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 101hellow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(3,1,'sonu','sonu@gmail.com','2nd','101hellow','hellow','2022-02-06 07:16:22',1,'dawn','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 101hellow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(4,2,'sonu','sonu@gmail.com','2nd','102heloow','hellow','2022-02-06 08:40:44',1,'dawn','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 102heloow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(5,2,'sonu','sonu@gmail.com','2nd','102heloow','hellow','2022-02-07 05:46:41',1,'dawn','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 102heloow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(6,2,'sonu','sonu@gmail.com','2nd','102heloow','hellow','2022-02-08 10:43:30',1,'dawn1211','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 102heloow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(7,2,'sonu','sonu@gmail.com','2nd','102heloow','hellow','2022-02-08 10:44:29',1,'dawn1211','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 102heloow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(8,2,'sonu','sonu@gmail.com','2nd','102heloow','hellow','2022-02-08 11:17:48',1,'dawn1211','Deposit Slip for 2nd Installment','<p>Dear sonu,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 102heloow,hellow Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS L'),(9,2,'daw','hahha@gmail.com','1st','12','dawnnn','2022-02-09 09:15:46',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 12,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(10,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-09 09:15:59',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(11,1,'daw','hahha@gmail.com','2nd','12','dawnnn','2022-02-09 09:16:10',1,'dawn1211','Deposit Slip for 2nd Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 12,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(12,5,'daw','hahha@gmail.com','2nd','123','dawnnn','2022-02-09 09:16:28',1,'dawn1211','Deposit Slip for 2nd Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 2nd installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(13,6,'daw','hahha@gmail.com','3rd','123','dawnnn','2022-02-09 09:16:42',1,'dawn1211','Deposit Slip for 3rd Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 3rd installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(14,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-11 12:35:11',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(15,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-11 12:35:20',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(16,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 12:45:13',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(17,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 12:47:41',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(18,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 12:48:21',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(19,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 12:50:52',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(20,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 07:49:27',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(21,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 08:51:57',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(22,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 08:53:17',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(23,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 08:54:07',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(24,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 08:55:00',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>'),(25,4,'daw','hahha@gmail.com','1st','123','dawnnn','2022-02-12 08:55:59',1,'dawn1211','Deposit Slip for 1st Installment','<p>Dear daw,<br>Attached herewith is a deposit slip for the 1st installment against <br> the rent of your apartment 123,dawnnn Kindly confirm clearance with <br>your bank in due course of time. <br> Best Regards <br> FOR L.Y.M REAL ESTATE BROKERS LLC</p>');

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `is_user` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `owner` */

insert  into `owner`(`record_id`,`name`,`email`,`phone_number`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`,`is_user`) values (1,'daw','hahha@gmail.com',23,'active','2022-02-09 12:29:11',1,'dawn1211',NULL,NULL,NULL,'yes'),(2,'sd','darwingill6@gmail.com',232,'active','2022-02-10 06:27:49',1,'dawn1211',NULL,NULL,NULL,'no'),(3,'sd','darwingill@rocketmail.com',232,'active','2022-02-10 06:42:39',1,'dawn1211',NULL,NULL,NULL,'no'),(4,'sd','darwingill62@gmail.com',2321,'active','2022-02-10 06:44:41',1,'dawn1211',NULL,NULL,NULL,'no');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenancy_id` bigint(20) DEFAULT NULL,
  `payment_type` enum('cash','cheque') DEFAULT NULL,
  `cheque_no` varchar(255) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `is_deposit` enum('yes','no') DEFAULT 'no',
  `installment` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`record_id`,`tenancy_id`,`payment_type`,`cheque_no`,`payment_date`,`amount`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`,`status`,`is_deposit`,`installment`) values (1,1,'cheque','123415','2022-02-09 12:00:00','600','2022-02-10 11:56:04',1,'dawn1211','2022-02-10 11:56:04',1,'dawn1211','active','no',1),(2,1,'cheque','12341','2022-02-09 12:00:00','400','2022-02-10 11:56:04',1,'dawn1211','2022-02-10 11:56:04',1,'dawn1211','active','no',2),(3,2,'cash','Cash 1','2022-02-09 12:00:00','400','2022-03-02 09:05:24',1,'dawn1211','2022-03-02 09:05:24',1,'dawn1211','active','yes',1),(4,2,'cash','Cash 2','2022-02-09 12:00:00','500','2022-03-02 09:05:24',1,'dawn1211','2022-03-02 09:05:24',1,'dawn1211','active','yes',2),(5,2,'cheque','1234000','2022-02-09 12:00:00','100','2022-03-02 09:05:24',1,'dawn1211','2022-03-02 09:05:24',1,'dawn1211','active','yes',3),(6,3,'cash','Cash 1','2022-02-09 12:00:00','500','2022-03-02 09:05:11',1,'dawn1211','2022-03-02 09:05:11',1,'dawn1211','active','yes',1),(7,3,'cheque','12341','2022-02-10 12:00:00','500','2022-03-02 09:05:11',1,'dawn1211','2022-03-02 09:05:11',1,'dawn1211','active','yes',2),(8,4,'cash','0','2022-02-10 12:00:00','1000','2022-02-10 10:34:28',1,'dawn1211','2022-02-10 10:34:28',1,'dawn1211','active','no',1),(9,5,'cheque','1234','2022-02-10 12:00:00','500','2022-02-10 10:35:17',1,'dawn1211','2022-02-10 10:35:17',1,'dawn1211','active','yes',1),(10,5,'cheque','123410','2022-02-10 12:00:00','500','2022-02-10 10:35:17',1,'dawn1211','2022-02-10 10:35:17',1,'dawn1211','active','no',2),(11,6,'cash','Cash 1','2022-03-15 12:00:00','500.50','2022-03-15 11:09:08',1,'dawn1211','2022-03-15 11:09:08',1,'dawn1211','active','no',1),(12,6,'cash','Cash 2','2022-03-15 12:00:00','499.50','2022-03-15 11:09:08',1,'dawn1211','2022-03-15 11:09:08',1,'dawn1211','active','no',2);

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `building_id` bigint(20) DEFAULT NULL,
  `community_building` varchar(255) DEFAULT NULL,
  `apartment_id` bigint(20) DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `property` */

insert  into `property`(`record_id`,`building_id`,`community_building`,`apartment_id`,`owner_id`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`) values (1,1,'asd',1,1,'active','2022-02-09 12:29:41',1,'dawn1211',NULL,NULL,NULL),(2,1,'asd',2,1,'active','2022-02-09 12:30:04',1,'dawn1211',NULL,NULL,NULL),(3,2,'sdas',3,1,'active','2022-02-10 12:14:29',1,'dawn1211',NULL,NULL,NULL),(4,2,'sdas',4,1,'active','2022-02-10 12:20:45',1,'dawn1211',NULL,NULL,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`record_id`,`role_name`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (1,'Super Admin','active','2021-06-05 00:00:00',NULL,'0000-00-00 00:00:00',NULL),(2,'Sub Admin','active','2021-06-05 00:00:00',NULL,'0000-00-00 00:00:00',NULL),(3,'Owner','active',NULL,NULL,NULL,NULL),(4,'tenant','active',NULL,NULL,NULL,NULL);

/*Table structure for table `tenancy` */

DROP TABLE IF EXISTS `tenancy`;

CREATE TABLE `tenancy` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenancy_no` varchar(255) DEFAULT NULL,
  `building_id` varchar(255) DEFAULT NULL,
  `apartment_id` varchar(255) DEFAULT NULL,
  `tenant_id` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `rent_amount` varchar(255) DEFAULT NULL,
  `no_of_payments` varchar(255) DEFAULT NULL,
  `is_renew` enum('yes','no') DEFAULT 'no',
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `from_renew` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tenancy` */

insert  into `tenancy`(`record_id`,`tenancy_no`,`building_id`,`apartment_id`,`tenant_id`,`start_date`,`end_date`,`rent_amount`,`no_of_payments`,`is_renew`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`,`from_renew`) values (1,'120','1','1','1','2022-02-09 12:00:00','2022-04-12 12:00:00','1000','2','no','inactive','2022-02-10 11:56:04',1,'dawn1211','2022-02-10 11:56:04',1,'dawn1211','no'),(2,'120','1','2','2','2022-02-03 12:00:00','2022-02-11 12:00:00','1000','3','yes','active','2022-03-02 09:05:24',1,'dawn1211','2022-03-15 11:09:08',1,'dawn1211','no'),(3,'120','2','4','1','2022-02-10 12:00:00','2022-03-17 12:00:00','1000','2','no','active','2022-03-02 09:05:11',1,'dawn1211','2022-03-02 09:05:11',1,'dawn1211','no'),(4,'120','2','3','1','2022-02-01 12:00:00','2022-02-08 12:00:00','1000','1','yes','active','2022-02-10 10:34:28',1,'dawn1211','2022-02-10 10:35:17',1,'dawn1211','no'),(5,'120','2','3','1','2022-02-10 12:00:00','2022-03-31 12:00:00','1000','2','no','active','2022-02-10 10:35:17',1,'dawn1211','2022-02-10 10:35:17',1,'dawn1211','yes'),(6,'120','1','2','2','2022-03-15 12:00:00','2022-04-30 12:00:00','1000','2','no','active','2022-03-15 11:09:08',1,'dawn1211','2022-03-15 11:09:08',1,'dawn1211','yes');

/*Table structure for table `tenant` */

DROP TABLE IF EXISTS `tenant`;

CREATE TABLE `tenant` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `is_user` enum('yes','no') DEFAULT 'no',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tenant` */

insert  into `tenant`(`record_id`,`name`,`email`,`phone_number`,`status`,`created_at`,`created_by`,`created_name`,`updated_at`,`updated_by`,`updated_name`,`is_user`) values (1,'soun','dawngill08@gmail.com',213,'active','2022-02-09 12:30:19',1,'dawn1211',NULL,NULL,NULL,'yes'),(2,'sd','dawngaill08@gmail.com',0,'active','2022-02-10 07:13:39',1,'dawn1211',NULL,NULL,NULL,'yes'),(3,'sd','dawngill08@gmail.com',0,'active','2022-02-10 07:13:59',1,'dawn1211',NULL,NULL,NULL,'no');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_rest_password` datetime DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `role_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_name` varchar(255) DEFAULT NULL,
  `updated_name` varchar(255) DEFAULT NULL,
  `owner_tenant_id` bigint(20) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`record_id`,`name`,`email`,`password`,`last_rest_password`,`phone_number`,`status`,`role_id`,`created_at`,`updated_by`,`created_by`,`updated_at`,`created_name`,`updated_name`,`owner_tenant_id`,`profile_picture`) values (1,'dawn1211','dawngill08@gmail.com','MTIz',NULL,3142250984,'active',1,'2022-02-05 22:32:32',1,0,'2022-02-07 10:49:37','Super Admin','dawn121',0,'http://localhost:1000/uploads/profile/avatar-j.png'),(2,'darrel1','darrel08@gmail.com','MTIz','2022-02-07 06:36:33',232223,'active',2,'2022-02-05 10:40:35',1,1,'2022-02-06 03:21:38','dawn','dawn',0,NULL),(3,'dawngill','dawngill018@gmail.com','MTIz',NULL,213132,'inactive',4,'2022-02-05 10:45:03',NULL,1,NULL,'dawn',NULL,1,NULL),(4,'dawringill12','darwin09@gmail.com','MTIz',NULL,23132,'active',4,'2022-02-05 11:12:23',4,1,'2022-02-07 10:50:38','dawn','dawrin',2,NULL),(8,'soun','soun@gmail.com','MTIz',NULL,213,'active',4,'2022-02-09 12:56:00',NULL,1,NULL,'dawn1211',NULL,1,NULL),(6,'asd','darwingill05@rocketmail.com','MTIz',NULL,3412250984,'inactive',2,'2022-02-06 06:08:52',NULL,1,NULL,'dawn',NULL,0,NULL),(7,'daw','hahha@gmail.com','MTIz',NULL,23,'active',3,'2022-02-09 12:33:02',NULL,1,NULL,'dawn1211',NULL,1,NULL),(9,'d','dawgill077@gmail.com','MTIz',NULL,123,'active',2,'2022-02-14 05:37:25',NULL,1,NULL,'dawn1211',NULL,0,NULL),(10,'sd','dawngaill08@gmail.com','MTIz',NULL,111,'active',4,'2022-07-04 10:06:28',NULL,1,NULL,'dawn1211',NULL,2,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
