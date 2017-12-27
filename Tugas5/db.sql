/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.10-MariaDB-log : Database - pbw_tugas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pbw_tugas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pbw_tugas`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`nama`,`username`,`password`) values (1,'Puguh Sudarma','reroet','628a98554d657ca8aa0577b07d56b602');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama_lengkap` varchar(75) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama_lengkap`,`alamat`,`jenis_kelamin`,`agama`) values ('123123','asdfsdaf','sdafasd','L','Islam'),('1308605054','I Wayan Puguh Sudarma','Jln. Pulau Saelus I No. 1','L','Hindu'),('1308605055','GGGGGGGG','HSHSHSHSH','L','Hindu'),('1902831298','oiafhsadifhoih','oiahsfoisjdhfih','P','Budha'),('21312312','kriqywyr','iufhisdhfuih','P','Konghuchu');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
