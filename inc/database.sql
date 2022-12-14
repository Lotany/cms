
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for demo
CREATE DATABASE IF NOT EXISTS `able_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `able_db`;

-- Dumping structure for table demo.tbl_users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
	(1,'lotan', 'lotanable2@gmail.com', 'a5a30bc4c47888cd59c4e9df68d80242','Admin', '2022-09-31 06:29:02', '2022-09-31 06:29:02' );



CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL UNIQUE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `topics`(`id`, `name`, `slug`) VALUES (1,'Inspirartion','inspiration'),(2,'Motivation','motivation'),(3,'Diary','diary');


CREATE TABLE IF NOT EXISTS `posts` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) DEFAULT NULL,
    `title` varchar(255) NOt NULL,
    `slug` varchar(255) NOT NULL UNIQUE,
    `views` int(11) NOT NULL DEFAULT '0',
    `image` varchar(255) NOT NULL,
    `body` text NOT NULL,
    `published` tinyint(1) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY(`id`),
     FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts`(`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES (1,1,'How to link a man','how-to-link-a-ama',0,'banner.jpg', 'how to link a mana to likn kyti',1,'2022-02-23 07:06:43','2019-02-08 09:07:04');

CREATE TABLE IF NOT EXISTS `post_topic`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL UNIQUE,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY (`topic_id`) REFERENCES `topics`(`id`) ON DELETE CASCADE ON UPDATE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=latin1;