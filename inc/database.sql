
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for demo
CREATE DATABASE IF NOT EXISTS `able_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `able_db`;

-- Dumping structure for table demo.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table demo.tbl_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `user_name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
	(1,'lotan', 'lotanable2@gmail.com', 'a5a30bc4c47888cd59c4e9df68d80242','Admin', '2022-09-31 06:29:02', '2022-09-31 06:29:02' );
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_user_role
CREATE TABLE IF NOT EXISTS `tbl_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table demo.tbl_user_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_user_role` DISABLE KEYS */;
INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
	(1, 'admin');
INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
	(2, 'editor');
INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
	(3, 'author');
INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
	(4, 'contributor');
/*!40000 ALTER TABLE `tbl_user_role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

CREATE TABLE IF NOT EXISTS `topic_tbl` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL UNIQUE,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `topic_tbl` (`topic_id`, `topic_name`, `slug`) VALUES
  (1,'Taita', 'talks about taita people');


CREATE TABLE IF NOT EXISTS `post_topic`(
  `id`int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `post_id` int(11) NOT NULL UNIQUE,
  `topic_id` int(11) NOT NULL
)


  CREATE TABLE IF NOT EXISTS `posts` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(11) DEFAULT NULL,
    `title` varchar(255) NOt NULL,
    `slug` varchar(255) NOT NULL UNIQUE,
    `views` int(11) NOT NULL DEFAULT '0',
    `image` varchar(255) NOT NULL,
    `body` text NOT NULL,
    `published` tinyint(1) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `posts`(`id`,`user_id`,`title`,`slug`,`views`,`image`,`body`,`published`,`created_at`,`updated_at`) VALUES
(1,1,'HOW TO LIVE LIFE','HOW-TO-LIVE-LIFE',0,'banner.jpg','read everday',1,'2022-10-21  05:34:34','2022-02-3 04:23:32')
