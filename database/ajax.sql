/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.11-MariaDB : Database - welfare
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`welfare` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `welfare`;

/*Table structure for table `ajax` */

DROP TABLE IF EXISTS `ajax`;

CREATE TABLE `ajax` (
  `record_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ajax` */

insert  into `ajax`(`record_id`,`name`) values (1,'dawn'),(2,'dawn'),(3,'asad'),(4,'asad'),(5,'asad'),(6,'asad'),(7,'asad'),(8,'asad'),(9,'asad'),(10,'asad'),(11,'asad'),(12,'umair'),(13,'dawn'),(14,'dawn'),(15,'dawn'),(16,'umair'),(17,'umair'),(18,'umair'),(19,'umair'),(20,'umair'),(21,'as'),(22,'a'),(23,'asad');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
