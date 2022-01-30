/* change log date 1/30/2022  dawn change */;
CREATE TABLE `lymcrm`.`building`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `building_name` VARCHAR(255),
  `building_address` VARCHAR(255),
  `building_community` VARCHAR(255),
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);




CREATE TABLE `lymcrm`.`apartment`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `building_id` BIGINT(20),
  `apartment_number` VARCHAR(255),
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

