# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.19)
# Database: asheville_weekly_specials
# Generation Time: 2018-04-17 17:07:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;




# Dump of table businesses_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `businesses_users`;

CREATE TABLE `businesses_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `businesses_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `businesses_users_users_id_foreign` (`users_id`),
  KEY `businesses_users_businesses_id_foreign` (`businesses_id`),
  CONSTRAINT `businesses_users_businesses_id_foreign` FOREIGN KEY (`businesses_id`) REFERENCES `businesses` (`id`),
  CONSTRAINT `businesses_users_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(170,'2018_02_13_233507_create_members_table',1),
	(638,'2016_01_01_233733_create_states_table',4),
	(640,'2016_06_21_283652_create_specials_table',4),
	(662,'2018_01_04_042707_create_users_table',5),
	(664,'2018_01_20_283606_create_businesses_table',5),
	(666,'2018_03_07_202046_create_gmaps_geocache_table',5),
	(1385,'2014_10_12_100000_create_password_resets_table',6),
	(1386,'2018_01_01_233733_create_states_table',6),
	(1387,'2018_02_01_042707_create_users_table',6),
	(1388,'2018_02_01_283652_create_specials_table',6),
	(1389,'2018_02_02_283606_create_businesses_table',6),
	(1390,'2018_03_10_182451_create_places_table',6),
	(1391,'2018_03_15_172822_create_roles_table',6),
	(1392,'2018_04_12_184730_create_businesses_users_table',6),
	(1393,'2018_04_12_190906_create_specials_users_table',6);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table places
# ------------------------------------------------------------

DROP TABLE IF EXISTS `places`;

CREATE TABLE `places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table specials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `specials`;

CREATE TABLE `specials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` int(10) unsigned NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `monday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuesday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wednesday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thursday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunday` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `specials` WRITE;
/*!40000 ALTER TABLE `specials` DISABLE KEYS */;

INSERT INTO `specials` (`id`, `description`, `business_id`, `start_date`, `end_date`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `created_at`, `updated_at`)
VALUES
	(1,NULL,1,NULL,NULL,'3 Dollar Well Drinks','3 Dollar Draft Beers','3 Dollar Bubbles','3 Dollar House Wine','5 Dollar Jameson','5 Dollar Fireball','Half Price Bottle of Wine','2018-04-17 17:06:13','2018-04-17 17:06:13'),
	(2,NULL,2,NULL,NULL,'7 Dollar Shot & a Beer (shot of Benchmark bourbon & a 16 oz. Narragansett)','7 Dollar Whiskey Sour','7 Dollar French 75','7 Dollar Moscow Mule','7 Dollar Hot Toddy','7 Dollar Old Fashioned','7 Dollar Gimlet','2018-04-17 17:06:13','2018-04-17 17:06:13'),
	(3,NULL,3,NULL,NULL,'5 Dollar Wines','5 Dollar Jameson','4 Dollar Wells','2 Dollar Tecate','No Special','No Special','No Special','2018-04-17 17:06:13','2018-04-17 17:06:13'),
	(4,NULL,4,NULL,NULL,'4 Dollar Wells','5 Dollar Margaritas','4 Dollar House Wine','5 Dollar Dirty Martini','No Special','No Special','No Special','2018-04-17 17:06:13','2018-04-17 17:06:13'),
	(5,NULL,5,NULL,NULL,'','','','','','','','2018-04-17 17:06:13','2018-04-17 17:06:13'),
	(6,NULL,6,NULL,NULL,'','','','','','','','2018-04-17 17:06:13','2018-04-17 17:06:13');

/*!40000 ALTER TABLE `specials` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table specials_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `specials_users`;

CREATE TABLE `specials_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `specials_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `specials_users_users_id_foreign` (`users_id`),
  KEY `specials_users_specials_id_foreign` (`specials_id`),
  CONSTRAINT `specials_users_specials_id_foreign` FOREIGN KEY (`specials_id`) REFERENCES `specials` (`id`),
  CONSTRAINT `specials_users_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '3',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_name_unique` (`user_name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `first_name`, `last_name`, `city`, `role_id`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'The Southern','example1@aol.com','$2y$10$yn7GU3c.xwowQ2HsgjMiKuX63zsNrqqj3y1RkOqZ3Pse4K0zifV1G','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16'),
	(2,'Imperial LIfe','example2@aol.com','$2y$10$MRrNIl2UE0.be3pRPV.g8exH1/ErBi4BJz8/Mi3CMiD9wnaQUMVXy','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16'),
	(3,'Banks Ave','example3@aol.com','$2y$10$RrF2lxBo5zgCLv2lJnhkLe5Ul/GrSIf9yDH/.mxjeMOh99veO2PSq','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16'),
	(4,'The Vault','example4@aol.com','$2y$10$k.JLw2m3t0zZF2AF4C7pfuQ12aGn.j7FmVrH2HHmOu20EMNugN6uK','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16'),
	(5,'MG Road','example5@aol.com','$2y$10$bZ7IOnhKjNRrMcMQMorWTura5Y9J40Y.Z6xbD0nwheTKLehbjIgMO','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16'),
	(6,'Desoto','example6@aol.com','$2y$10$jlM5.86xT0dPrKmnH4Yk3OeujmsAwTHsR5EUpBFxT8M3bjcUX.zIC','Miguel','Tejeda',NULL,3,NULL,'2018-04-17 17:06:16','2018-04-17 17:06:16');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







# Dump of table businesses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `businesses`;

CREATE TABLE `businesses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `state_id` int(10) unsigned DEFAULT NULL,
  `special_id` int(10) unsigned DEFAULT NULL,
  `street` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_first_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_last_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `businesses_user_id_foreign` (`user_id`),
  KEY `businesses_state_id_foreign` (`state_id`),
  KEY `businesses_special_id_foreign` (`special_id`),
  CONSTRAINT `businesses_special_id_foreign` FOREIGN KEY (`special_id`) REFERENCES `specials` (`id`),
  CONSTRAINT `businesses_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  CONSTRAINT `businesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `businesses` WRITE;
/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;

INSERT INTO `businesses` (`id`, `image_path`, `business_name`, `user_id`, `state_id`, `special_id`, `street`, `city`, `zip`, `phone_num`, `url`, `contact_first_name`, `contact_last_name`, `email_address`, `created_at`, `updated_at`)
VALUES
	(1,'images/southernShop.jpg','The Southern Bar',1,NULL,1,'41 N. Lexington Avenue','Asheville','28804','828-251-1777','http://www.southernkitchenandbar.com/','John ','Smith','jonsmith@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19'),
	(2,'images/imperialShop.jpg','The Imperial Life',2,NULL,2,'48 College Street',', Asheville','28801','828-254-8980','https://imperialbarasheville.com/','kevin ','Smith','kevinsmith@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19'),
	(3,'images/banksShop.jpg','Banks Ave Bar',3,NULL,3,'32 Banks Ave',', Asheville','28801','828-785-1458','https://www.facebook.com/banksavebar/','Scott ','Smith','scott@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19'),
	(4,'images/vaultShop.jpg','Ranking Vault Cocktail Lounge',4,NULL,4,'7 Ranking Ave',', Asheville','28801','828-254-4993','http://rankinvault.com/','vaults','johnson','vault@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19'),
	(5,'images/mgShop.jpg','MG Road Bar and Lounge',5,NULL,5,'19 Wall St',', Asheville','28801','828-254-4363','http://www.mgroadlounge.com/','mgroad management','management','mgroad@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19'),
	(6,'images/desotoShop.jpg','Desoto Lounge',6,NULL,6,'504 Haywood Rd',', Asheville','28806','828-254-4363',' http://www.desotolounge.com/','desoto management','management','desoto@aol.com','2018-04-17 17:06:19','2018-04-17 17:06:19');

/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;
UNLOCK TABLES;

