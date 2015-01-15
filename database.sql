/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.12-log : Database - leave_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`leave_app` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `leave_app`;

/*Table structure for table `leave1` */

DROP TABLE IF EXISTS `leave1`;

CREATE TABLE `leave1` (
  `LeaveID` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveFromDt` date DEFAULT NULL,
  `LeaveToDt` date DEFAULT NULL,
  `LeaveStatus` varchar(11) DEFAULT 'pending',
  `LeaveDay` int(11) DEFAULT NULL,
  `Note` varchar(50) DEFAULT NULL,
  `StaffName` varchar(50) DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  PRIMARY KEY (`LeaveID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `leave1` */

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL AUTO_INCREMENT,
  `StaffName` varchar(50) DEFAULT NULL,
  `StaffIC` varchar(50) DEFAULT NULL,
  `StaffDOB` date DEFAULT NULL,
  `StaffGender` varchar(11) DEFAULT NULL,
  `StaffAddress` varchar(50) DEFAULT NULL,
  `StaffContactNo` varchar(50) DEFAULT NULL,
  `StaffEmail` varchar(50) DEFAULT NULL,
  `StaffType` varchar(11) DEFAULT NULL,
  `StaffUsername` varchar(20) DEFAULT NULL,
  `StaffPassword` varchar(20) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL,
  `LeaveBal` int(2) DEFAULT '14',
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`StaffID`,`StaffName`,`StaffIC`,`StaffDOB`,`StaffGender`,`StaffAddress`,`StaffContactNo`,`StaffEmail`,`StaffType`,`StaffUsername`,`StaffPassword`,`Year`,`LeaveBal`) values (1,'Mohamad Ezwan Bin Mohd Shahrin','941227015915','1994-12-27','male','No.28, Kg Seri Maju Jaya, Batu Pahat, Johor','+6014-6241620','Ezwanshahrin@gmail.com','admin','ezwan','ezwan123',2014,14),(2,'Kamalrul Bin Rizam','941020015897','1994-10-20','male','MLO 2800, Kg Baru Sedenak, 81010, Kulai, johor','0177499736','kamarulrizam94@gmail.com','staff','mawi','mawi123',2015,14),(3,'Nurdinie Bazli Bin Norasikin','930123016055','1993-01-23','male','No. 22,jalan sp 1,86100, Batu Pahat, Johor.','0197643116','buzzlee93@yahoo.com','staff','bazli','bazli123',2015,14);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
