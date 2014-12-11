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

/*Table structure for table `gender` */

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `GenderID` int(11) NOT NULL,
  `GenderType` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`GenderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gender` */

insert  into `gender`(`GenderID`,`GenderType`) values (1,'male'),(2,'female');

/*Table structure for table `leave` */

DROP TABLE IF EXISTS `leave`;

CREATE TABLE `leave` (
  `LeaveID` int(11) NOT NULL AUTO_INCREMENT,
  `leaveType` varchar(50) DEFAULT NULL,
  `LeaveFromDt` date DEFAULT NULL,
  `LeaveToDt` date DEFAULT NULL,
  `LeaveStatus` int(11) DEFAULT NULL,
  `StaffName` int(11) DEFAULT NULL,
  `ApprovedDt` datetime DEFAULT NULL,
  `Note` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LeaveID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `leave` */

/*Table structure for table `leavestatus` */

DROP TABLE IF EXISTS `leavestatus`;

CREATE TABLE `leavestatus` (
  `LeaveStatusID` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveStatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`LeaveStatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `leavestatus` */

insert  into `leavestatus`(`LeaveStatusID`,`LeaveStatus`) values (1,'approved'),(2,'not approved'),(3,'cancelled');

/*Table structure for table `leavetype` */

DROP TABLE IF EXISTS `leavetype`;

CREATE TABLE `leavetype` (
  `LeaveTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveType` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LeaveTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `leavetype` */

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
  `LeaveBal` int(2) DEFAULT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`StaffID`,`StaffName`,`StaffIC`,`StaffDOB`,`StaffGender`,`StaffAddress`,`StaffContactNo`,`StaffEmail`,`StaffType`,`StaffUsername`,`StaffPassword`,`Year`,`LeaveBal`) values (1,'Mohamad Ezwan Bin Mohd Shahrin','941227015915','1994-12-27','male','No.28, Kg Seri Maju Jaya, Batu Pahat, Johor','+6014-6241620','Ezwanshahrin@gmail.com','admin','ezwan','ezwan123',NULL,NULL),(2,'kamarul','941020015897','1994-10-20','male','MLO 2800, Kg Baru Sedenak, 81010, Kulai, johor','+6017-7499736','kamarulrizam94@gmail.com','staff','mawi','mawi123',NULL,NULL);

/*Table structure for table `stafftype` */

DROP TABLE IF EXISTS `stafftype`;

CREATE TABLE `stafftype` (
  `StaffTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `StaffType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`StaffTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `stafftype` */

insert  into `stafftype`(`StaffTypeID`,`StaffType`) values (1,'admin'),(2,'staff');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
