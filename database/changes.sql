
CREATE TABLE `user_rights` (
  `id` BIGINT(10) NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(10) DEFAULT NULL,
  `menu_id` BIGINT(10) DEFAULT NULL,  
  PRIMARY KEY (`id`)

) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci


=======================================================