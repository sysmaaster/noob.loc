CREATE TABLE `noob`.`users` 
    ( `user_id` INT(32) NOT NULL AUTO_INCREMENT COMMENT 'ід користовача' ,
        `user_email` VARCHAR(32) NOT NULL , 
        `user_password` VARCHAR(250) NOT NULL ,
        `user_name` VARCHAR(32) NOT NULL ,
        `user_lastname` VARCHAR(32) NOT NULL ,
        `user_sex` INT(2) NOT NULL COMMENT 'стать користувача' ,
        `user_red_date` TIMESTAMP(32) NOT NULL DEFAULT CURRENT_TIMESTAMP(32) ,
        `user_hid` VARCHAR(64) NOT NULL , 
        `user_group` INT(2) NOT NULL DEFAULT '0' COMMENT 'роль Користувача' , 
    PRIMARY KEY (`user_id`)) ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_lastname`, `user_sex`, `user_red_date`, `user_hid`, `user_group`) 
VALUES ('0', 'sysmaaster@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'Олександр', 'Андрущишен', '1', '2022-03-31 00:34:16.408663', '000', '5');