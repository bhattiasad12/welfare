
CREATE TABLE `user_rights` (
  `id` BIGINT(10) NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(10) DEFAULT NULL,
  `menu_id` BIGINT(10) DEFAULT NULL,  
  PRIMARY KEY (`id`)

) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci


=======================================================


CREATE TABLE `welfare`.`application_documents`(     `document_id` BIGINT(10) ,     `application_id` BIGINT(1) ,     `document_name` VARCHAR(255) ,     `document_path` VARCHAR(5000) ,     `created_at` DATETIME   );


ALTER TABLE `welfare`.`application_documents`     CHANGE `document_id` `document_id` BIGINT(10) NOT NULL AUTO_INCREMENT,    ADD PRIMARY KEY(`document_id`);
