/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.36-MariaDB : Database - welfare
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Data for the table `groups` */

insert  into `groups`(`id`,`group_name`,`rights`) values (5,'Admin',NULL),(6,'Employee',NULL),(7,'Donor',NULL),(8,'Applicant',NULL);

/*Data for the table `menu_rights` */

insert  into `menu_rights`(`id`,`group_id`,`menu_id`,`type`) values (7,5,1,NULL),(8,5,2,NULL),(9,5,5,NULL),(10,6,2,NULL),(11,6,5,NULL),(12,7,4,NULL),(13,8,3,NULL),(14,8,8,NULL);

/*Data for the table `treecontrol` */

insert  into `treecontrol`(`id`,`name`,`link`,`class`) values (1,'Dashboard','dashboad.php','fa fa-home fa-2x'),(2,'Applications','applications.php','fa fa-home fa-2x'),(3,'My Application','myapplications.php','fa fa-laptop fa-2x'),(4,'My Donation','mydonations.php','fa fa-list fa-2x'),(5,'Settings','settings.php','fa fa-list fa-2x'),(8,'Create Application','addapplication.php','fa fa-list fa-2x');

/*Data for the table `user_groups` */

insert  into `user_groups`(`id`,`group_id`,`user_id`) values (4,5,1),(5,6,2),(6,7,3),(7,8,4);

/*Data for the table `users` */

insert  into `users`(`user_id`,`email`,`password`,`name`,`address`,`phone`,`user_type`,`status`,`created_at`,`updated_at`) values (1,'admin@admin.com','e10adc3949ba59abbe56e057f20f883e','Admin',NULL,'this will be loginthis will be loginthis will be l',1,1,NULL,NULL),(2,'employee','e10adc3949ba59abbe56e057f20f883e','test 123','shahr faisa','12346',2,1,'2021-10-08 16:04:28',NULL),(3,'donor','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,4,1,NULL,NULL),(4,'applicant','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,8,1,NULL,NULL),(5,'employe_donor','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,6,1,NULL,NULL),(6,'donor_applicant','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,12,NULL,NULL,NULL),(7,'employe_donor_applican','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,14,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
