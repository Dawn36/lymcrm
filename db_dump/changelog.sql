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


CREATE TABLE `lymcrm`.`tenancy`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `tenancy_no` VARCHAR(255),
  `building_id` VARCHAR(255),
  `apartment_id` VARCHAR(255),
  `tenant_id` VARCHAR(255),
  `start_date` DATETIME,
  `end_date` DATETIME,
  `rent_amount` VARCHAR(255),
  `no_of_payments` VARCHAR(255),
  `is_renew` ENUM('yes','no') DEFAULT 'no',
  `status` ENUM('active','inactive'),
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

CREATE TABLE `lymcrm`.`payment`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `tenancy_id` BIGINT(20),
  `payment_type` ENUM('cash','cheque'),
  `cheque_no` BIGINT(20),
  `payment_date` DATETIME,
  `amount` VARCHAR(255),
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

CREATE TABLE `lymcrm`.`property`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `building_id` BIGINT(20),
  `apartment_id` BIGINT(20),
  `owner_id` BIGINT(20),
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);
ALTER TABLE `lymcrm`.`apartment`   
  ADD COLUMN `is_tenant` ENUM('yes','no') DEFAULT 'no'   NULL AFTER `updated_name`;

  
ALTER TABLE `lymcrm`.`property`   
  ADD COLUMN `community_building` VARCHAR(255) NULL AFTER `building_id`;


ALTER TABLE `lymcrm`.`property`   
  ADD COLUMN `status` ENUM('active','inactive') DEFAULT 'active'   NULL AFTER `owner_id`;


ALTER TABLE `lymcrm`.`apartment`   
  CHANGE `is_tenant` `is_owner` ENUM('yes','no') CHARSET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'no'   NULL;

ALTER TABLE `lymcrm`.`payment`   
  ADD COLUMN `status` ENUM('active','inactive') NULL AFTER `updated_name`;

ALTER TABLE `lymcrm`.`payment`   
<<<<<<< Updated upstream
  ADD COLUMN `is_deposit` ENUM('yes','no') DEFAULT 'no'   NULL AFTER `status`;


  CREATE TABLE `lymcrm`.`deposit`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `building_id` BIGINT(20),
  `apartment_id` BIGINT(20),
  `tenancy_id` BIGINT(20),
  `type` ENUM('cheque','cash'),
  `payment_id` BIGINT(20),
  `created_by` BIGINT(20),
  `created_at` DATETIME,
  `created_name` VARCHAR(255),
  `updated_by` BIGINT(20),
  `updated_at` DATETIME,
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

ALTER TABLE `lymcrm`.`deposit`   
  ADD COLUMN `status` ENUM('active','inactive') DEFAULT 'active'   NULL AFTER `updated_name`;
=======
  ADD COLUMN `installment` BIGINT(20) NULL AFTER `payment_date`;
>>>>>>> Stashed changes

CREATE TABLE `lymcrm`.`deposit_attachment`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `deposit_id` BIGINT(20),
  `file_name` VARCHAR(255),
  `file_path` VARCHAR(255),
  `file_type` VARCHAR(255),
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

CREATE TABLE `lymcrm`.`email_self`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `deposit_id` BIGINT(20),
  `owner_name` VARCHAR(255),
  `Owner_email` VARCHAR(255),
  `installment` VARCHAR(255),
  `apartment_no` VARCHAR(255),
  `building_name` VARCHAR(255),
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);


ALTER TABLE `lymcrm`.`email_self`   
  ADD COLUMN `subject` VARCHAR(255) NULL AFTER `created_name`,
  ADD COLUMN `email_content` VARCHAR(255) NULL AFTER `subject`;

