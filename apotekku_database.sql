/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - apotekku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apotekku` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `apotekku`;

/*Table structure for table `kasirs` */

DROP TABLE IF EXISTS `kasirs`;

CREATE TABLE `kasirs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kasirs_username_unique` (`username`),
  UNIQUE KEY `kasirs_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kasirs` */

insert  into `kasirs`(`id`,`username`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'restuaja','restusaputraxxxayu@gmail.com','$2y$10$kjSGKBa9ni/sSzzguIFhyO/iRxKvxjjoCMmvz297zXrv.56OkEC92',NULL,'2019-11-27 16:30:53','2019-11-27 16:30:53');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2019_11_26_122549_create_model_users_table',1),
(2,'2019_11_27_151453_create_kasirs_table',2);

/*Table structure for table `obat` */

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `kode_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `dosis_obat` varchar(50) NOT NULL,
  `kegunaan_obat` varchar(200) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `kadaluarsa` date DEFAULT NULL,
  PRIMARY KEY (`kode_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `obat` */

insert  into `obat`(`kode_obat`,`nama_obat`,`jenis_obat`,`dosis_obat`,`kegunaan_obat`,`harga_obat`,`stok_obat`,`kadaluarsa`) values 
(2,'neuralgin','tablet','200 mg','sakit kepala',10000,100,'2019-12-24'),
(4,'salep 88','salep','100mg','penyakit kulit',5000,2000,'2019-12-25');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_jabatan` varchar(50) NOT NULL,
  `pegawai_alamat` text NOT NULL,
  `pegawai_telepon` varchar(15) NOT NULL,
  `pegawai_umur` int(11) NOT NULL,
  `gaji_pokok` int(12) NOT NULL,
  `pegawai_jenisKelamin` varchar(20) NOT NULL,
  `pegawai_status` varchar(15) NOT NULL,
  `pegawai_tm` int(11) DEFAULT NULL,
  `pegawai_tl` int(11) DEFAULT NULL,
  `pegawai_thr` int(11) DEFAULT NULL,
  `pegawai_photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`pegawai_id`,`pegawai_nama`,`pegawai_jabatan`,`pegawai_alamat`,`pegawai_telepon`,`pegawai_umur`,`gaji_pokok`,`pegawai_jenisKelamin`,`pegawai_status`,`pegawai_tm`,`pegawai_tl`,`pegawai_thr`,`pegawai_photo`) values 
(6,'Rian Hidayat','kasir','Perum. SDN 2 Batu Putuk, RT 003, LK 2, Batu Putuk, Teluk Betung Utara Lampung, Indonesia','082371143008',23,2000000,'Laki-laki','tetap',20000,400000,300000,NULL),
(7,'restu saputra','Staff','Perum. SDN 2 Batu Putuk, RT 003, LK 2, Batu Putuk, Teluk Betung Utara Lampung, Indonesia','082186111476',22,234,'Laki-laki','tetap',123,123,123,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`name`,`remember_token`,`level`,`created_at`,`updated_at`) values 
(3,'restusaputra','restusaputraxxxayu@gmail.com','$2y$10$Lfj0GCqM/2FAz.i9uCZqTeigrvE02HBHKLN4l4I0gPnyzdGw3raN6','Restu Saputra',NULL,'admin','2019-11-28 16:40:48','2019-11-28 16:40:48'),
(4,'rendriardinata','rianhidayat881@gmail.com','$2y$10$6q.dVZXJgzKLNf5U3eTCZewVQeFsQ8Hpo0fennJqt7OK7cNFPaQQS','Rendri Ardinata',NULL,'apoteker','2019-11-28 16:43:00','2019-11-28 16:43:00'),
(5,'rianhhhh','rian@gmail.com','$2y$10$QZhVhxALXSEytzswdHyGcuQ3L1iPDzmOap6lNJQ.87GaKjbu9qYdy','Rian Hidayat',NULL,'owner','2019-11-28 16:44:38','2019-11-28 16:44:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
