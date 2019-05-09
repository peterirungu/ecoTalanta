
---seller table
CREATE TABLE `ecotalanta`.`seller` (
 `seller_id` INT(11) NOT NULL AUTO_INCREMENT , 
 `first_name` VARCHAR(50) NOT NULL , 
 `last_name` VARCHAR(50) NOT NULL , 
 `nick_name` VARCHAR(50) NOT NULL , 
 `phone_number` VARCHAR(15) NOT NULL ,
 `gender` VARCHAR(15) NOT NULL , 
 `email` VARCHAR(50) NOT NULL ,
 `about_seller` TEXT NOT NULL ,
 `profile_picture` VARCHAR(100) NOT NULL ,
 `other_details` VARCHAR(255) NOT NULL ,
 `is_active` VARCHAR(50) NOT NULL ,
 `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 `date_modified` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 `location` VARCHAR(100) NOT NULL ,
 `business_name` INT NOT NULL ,
  PRIMARY KEY (`seller_id`)) ENGINE = InnoDB COMMENT = 'seller details';

ALTER TABLE `seller` ADD `password` VARCHAR(20) NOT NULL AFTER `business_name`;
