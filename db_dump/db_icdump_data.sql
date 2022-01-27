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

/*Data for the table `ic_bed` */

insert  into `ic_bed`(`bed_id`,`ward_no`,`bed_no`,`bed_status`,`bed_creation`,`bed_updation`) values (1,'1','1',NULL,'2021-06-05 00:00:00',NULL);

/*Data for the table `ic_culture_report` */

insert  into `ic_culture_report`(`culture_id`,`culture_insertion_date`,`culture_source`,`culture_result`,`culture_organism`,`culture_antibio`,`MDR`,`culture_creation`,`culture_updation`,`culture_status`,`device_id`) values (1,'2021-07-08 00:00:00','tissue','Positive','Staphylococcus aureus','Vancomycin, fluoroquinolone','Methicilin resistant Staphylococcus aureus (MRSA)','2021-06-02 00:00:00',NULL,NULL,1),(2,'2021-07-06 00:00:00','central line blood','Positive','Enterococcus','Vancomycin,piperacillin','Vancomycin resistant Enterococcus (VRE)','2021-06-02 00:00:00',NULL,NULL,2),(3,'2020-07-17 00:00:00','central line blood','Positive','Enterococcus','Vancomycin,piperacillin','Vancomycin resistant Enterococcus (VRE)','2021-06-02 00:00:00',NULL,NULL,3),(4,'2020-07-17 00:00:00','central line blood','Negative','Staphylococcus aureus','Vancomycin, fluoroquinolone','Methicilin resistant Staphylococcus aureus (MRSA)','2021-06-02 00:00:00',NULL,NULL,5),(5,'2020-07-17 00:00:00','urethral swab','Positive','Staphylococcus aureus','Vancomycin','Methicilin resistant Staphylococcus aureus (MRSA)','2021-06-05 00:00:00',NULL,NULL,6),(6,'2020-07-17 00:00:00','stool','Positive','Staphylococcus aureus',' fluoroquinolone','Vancomycin resistant Enterococcus (VRE)','2021-06-05 00:00:00',NULL,NULL,7);

/*Data for the table `ic_infection_devices` */

insert  into `ic_infection_devices`(`device_id`,`device_name`,`device_status`,`deivce_insertion_date`,`phlebitis`,`site`,`check`,`mr_no`,`device_creation`,`device_updation`,`deivce_surgery_date`,`device_extubation_date`,`type`) values (1,'Phlebitis','0','2021-06-02 00:00:00','yes','dfdf','Suspected','45879','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(2,'Phlebitis','0','2021-06-02 00:00:00','yes','test','Confirm','45869','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(3,'Phlebitis','0','2021-06-02 00:00:00','yes','test','Confirm','458691','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(4,'Surgical Site Infection','0','2021-06-02 00:00:00',NULL,NULL,'HAP NO','458691','2021-06-02 00:00:00',NULL,'2021-06-02 00:00:00',NULL,NULL),(5,'Phlebitis','0','2021-06-02 00:00:00','yes','testing','Confirm','23456','2021-06-02 00:00:00',NULL,NULL,NULL,NULL),(6,'Phlebitis','0','2021-06-06 00:00:00','yes','tagr','Suspected','1234','2021-06-05 00:00:00',NULL,NULL,NULL,NULL),(7,'Phlebitis','0','2021-06-06 00:00:00','yes','3df','Suspected','2456','2021-06-05 00:00:00',NULL,NULL,NULL,NULL);

/*Data for the table `ic_lovs` */

insert  into `ic_lovs`(`lov_id`,`lov_name`,`lov_type`,`lov_status`,`lov_creation`,`lov_updation`) values (1,'Staphylococcus aureus','organism','1','2021-06-05 00:00:00',NULL),(5,'Vancomycin','antibiotic1','1','2021-06-05 00:00:00',NULL),(4,'Enterococcus','organism','1','2021-06-05 00:00:00',NULL),(6,'Ciprofloxacin/levofloxacin/other fluoroquinolone','antibiotic2','1','2021-06-05 00:00:00',NULL),(7,'MDR Pseudomonas aeruginosa','mdr','1','2021-06-05 00:00:00',NULL),(8,'XDR Salmonella','mdr','1','2021-06-05 00:00:00',NULL);

/*Data for the table `ic_roles` */

insert  into `ic_roles`(`role_id`,`role_name`,`role_status`,`role_creation`,`role_updation`) values (1,'CONTROLER','1','2021-06-05 00:00:00',NULL),(2,'ADMINISTRATE','1','2021-06-05 00:00:00',NULL);

/*Data for the table `ic_surveillance_form` */

insert  into `ic_surveillance_form`(`form_id`,`mr_no`,`pateint_name`,`ward_no`,`bed_no`,`admission_date`,`primary_diagnosis`,`final_diagnosis`,`discharge_date`,`discharge_condition`,`fever`,`temp`,`tachy`,`pulse`,`hypo`,`bp`,`chills`,`wbc`,`neutro`,`lymp`,`worse_cxr`,`worse_tracheal_secret`,`form_creation`,`form_updation`,`form_status`) values (2,'45879','tahir','2','3','2021-06-02 00:00:00','testing','final test','2021-06-03 00:00:00','improved sent home','0','103','0','163','0','89','0','58','55','89','0','0','2021-06-02 00:00:00',NULL,'1'),(3,'45869','Aatir','3','4','2021-06-02 00:00:00','hamdard','darada dava','2021-06-02 00:00:00','improved sent home','0','589','0','589','0','5455','0','797','258','56','0','0','2021-06-02 00:00:00',NULL,'1'),(4,'458691','Aatir2','3','4','2021-06-02 00:00:00','hamdard','darada dava','2021-06-02 00:00:00','improved sent home','0','589','0','589','0','5455','0','797','258','56','0','0','2021-06-02 00:00:00',NULL,'1'),(5,'23456','WAQEEL','3','4','2021-06-02 00:00:00','TEST','tesing','2021-06-02 00:00:00','improved sent home','0','545','0','45','0','54','0','54','45','54','0','0','2021-06-02 00:00:00',NULL,'1'),(6,'34567','Amjad','4','3','2021-06-02 00:00:00','ggt','tt','2021-06-02 00:00:00','improved sent home','0','767','0','676','0','67','0','676','676','676','0','0','2021-06-02 00:00:00',NULL,'1'),(7,'456678','fdf','4','3','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','56','0','56','0','56','34','23','0','0','2021-06-02 00:00:00',NULL,'1'),(8,'4566783','fdf','4','3','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','56','0','56','0','56','34','23','0','0','2021-06-02 00:00:00',NULL,'1'),(9,'3456745','tager','4','4','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','65','0','565','0','565','0','56','56','65','0','0','2021-06-02 00:00:00',NULL,'1'),(10,'56899','trtr','6','5','2021-06-02 00:00:00','','','2021-06-02 00:00:00','','0','45','0','454','0','67','0','676','76','676','0','0','2021-06-02 00:00:00',NULL,'1'),(11,'1234','Tahir','1','2','2021-06-06 00:00:00','Test','Test','2021-06-06 00:00:00','improved sent home','0','45','0','45','0','78','0','23','23','33','0','0','2021-06-05 00:00:00',NULL,'1'),(12,'2456','Tahir','3','2','2021-06-06 00:00:00','Test','Test','2021-06-06 00:00:00','improved sent home','0','45','0','56','0','45','0','34','45','34','0','0','2021-06-05 00:00:00',NULL,'1');

/*Data for the table `ic_users` */

insert  into `ic_users`(`user_id`,`user_name`,`user_password`,`user_role_id`,`user_status`,`user_creation`,`user_updation`) values (1,'RTahir','4124bc0a9335c27f086f24ba207a4912','1','1','2021-06-09 20:13:44','2021-06-09 20:13:44'),(2,'admin','4124bc0a9335c27f086f24ba207a4912','2','1','2021-06-05 00:00:00',NULL),(6,'ICADMIN','4124bc0a9335c27f086f24ba207a4912','2','1','2021-06-05 00:00:00',NULL),(5,'CI','4124bc0a9335c27f086f24ba207a4912','1','1','2021-06-05 00:00:00',NULL);

/*Data for the table `ic_ward` */

insert  into `ic_ward`(`ward_id`,`ward_no`,`ward_depart`,`ward_status`,`ward_creation`,`ward_updation`) values (1,'1','control','1','2021-06-05 21:37:51',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
