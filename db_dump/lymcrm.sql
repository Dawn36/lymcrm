ALTER TABLE `lymcrm`.`ic_roles`   
  CHANGE `role_id` `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  CHANGE `role_name` `name` VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  CHANGE `role_status` `status` ENUM('active','inactive') DEFAULT 'active'   NULL,
  CHANGE `role_creation` `created_at` DATETIME NULL,
  CHANGE `role_updation` `created_by` BIGINT(20) NULL,
  CHANGE `role_code` `updated_at` DATETIME NULL,
  ADD COLUMN `updated_by` BIGINT(20) NULL AFTER `updated_at`;

RENAME TABLE `lymcrm`.`ic_roles` TO `lymcrm`.`roles`;


ALTER TABLE `lymcrm`.`users`   
  CHANGE `user_id` `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  CHANGE `user_name` `name` VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  CHANGE `user_role_id` `email` VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL  AFTER `name`,
  CHANGE `user_status` `phone_number` BIGINT(20) NULL,
  ADD COLUMN `role_id` BIGINT(20) NULL AFTER `phone_number`,
  CHANGE `user_password` `password` VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  ADD COLUMN `last_rest_password` DATETIME NULL AFTER `password`,
  CHANGE `user_creation` `created_at` DATETIME NULL,
  CHANGE `user_updation` `created_by` BIGINT(20) NULL,
  ADD COLUMN `updated_at` DATETIME NULL AFTER `created_by`,
  ADD COLUMN `updated_by` BIGINT(20) NULL AFTER `updated_at`;


ALTER TABLE `lymcrm`.`users`   
  ADD COLUMN `status` ENUM('active','inactive') DEFAULT 'active'   NULL AFTER `phone_number`,
  CHANGE `updated_by` `updated_by` BIGINT(20) NULL  AFTER `created_at`,
  CHANGE `created_by` `created_by` BIGINT(20) NULL  AFTER `updated_by`;



ALTER TABLE `lymcrm`.`roles`   
  CHANGE `name` `role_name` VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL;



CREATE TABLE `lymcrm`.`owner`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `email` VARCHAR(255),
  `phone_number` BIGINT(20),
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  PRIMARY KEY (`record_id`)
);


ALTER TABLE `lymcrm`.`owner`   
  ADD COLUMN `created_name` VARCHAR(255) NULL AFTER `created_by`,
  ADD COLUMN `updated_name` VARCHAR(255) NULL AFTER `updated_by`;


  
CREATE TABLE `lymcrm`.`tenant`(  
  `record_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `email` VARCHAR(255),
  `phone_number` BIGINT(20),
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` DATETIME,
  `created_by` BIGINT(20),
  `created_name` VARCHAR(255),
  `updated_at` DATETIME,
  `updated_by` BIGINT(20),
  `updated_name` VARCHAR(255),
  PRIMARY KEY (`record_id`)
);

ALTER TABLE `lymcrm`.`owner`   
  ADD COLUMN `is_user` ENUM('yes','no') DEFAULT 'no'   NULL AFTER `updated_name`;


ALTER TABLE `lymcrm`.`tenant`   
  ADD COLUMN `is_user` ENUM('yes','no') DEFAULT 'no'   NULL AFTER `updated_name`;


ALTER TABLE `lymcrm`.`users`   
  ADD COLUMN `created_name` VARCHAR(255) NULL AFTER `updated_at`,
  ADD COLUMN `updated_name` VARCHAR(255) NULL AFTER `created_name`;


  ALTER TABLE `lymcrm`.`users`   
  ADD COLUMN `owner_tenant_id` BIGINT(20) NULL AFTER `updated_name`;
