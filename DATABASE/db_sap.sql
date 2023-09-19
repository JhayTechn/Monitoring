/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.21-MariaDB : Database - db_sap
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sap` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sap`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

/*Table structure for table `tbl_confirm` */

DROP TABLE IF EXISTS `tbl_confirm`;

CREATE TABLE `tbl_confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_confirm` */

insert  into `tbl_confirm`(`id`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `tbl_fill` */

DROP TABLE IF EXISTS `tbl_fill`;

CREATE TABLE `tbl_fill` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `datein` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Middlename` varchar(255) DEFAULT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Birthday` varchar(255) DEFAULT NULL,
  `BirthofPlace` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `Religion` varchar(255) DEFAULT NULL,
  `CellphoneNumber` bigint(11) DEFAULT NULL,
  `District` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fill` */

/*Table structure for table `tbl_fill2` */

DROP TABLE IF EXISTS `tbl_fill2`;

CREATE TABLE `tbl_fill2` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `datein` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Middlename` varchar(255) DEFAULT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Birthday` varchar(255) DEFAULT NULL,
  `BirthofPlace` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `Religion` varchar(255) DEFAULT NULL,
  `CellphoneNumber` bigint(11) DEFAULT NULL,
  `District` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fill2` */

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `datein` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

/*Table structure for table `tbl_logins` */

DROP TABLE IF EXISTS `tbl_logins`;

CREATE TABLE `tbl_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `datein` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logins` */

insert  into `tbl_logins`(`id`,`Username`,`Password`,`Fullname`,`datein`) values (1,'teds','teds','Jay-ar','2021-07-31 11:59:06 AM');

/*Table structure for table `tbl_restore` */

DROP TABLE IF EXISTS `tbl_restore`;

CREATE TABLE `tbl_restore` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `datein` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Age` int(10) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Birthday` varchar(255) DEFAULT NULL,
  `BirthofPlace` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Municipality` varchar(255) DEFAULT NULL,
  `Zipcode` int(10) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `Religion` varchar(255) DEFAULT NULL,
  `CellphoneNumber` int(11) DEFAULT NULL,
  `District` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_restore` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
