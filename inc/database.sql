
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
  `user_role_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_reg` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table demo.tbl_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `user_role_id`, `user_name`, `email`, `password`) VALUES
	(1, 1, 'lotan', 'lotanable2@gmail.com', 'a5a30bc4c47888cd59c4e9df68d80242');
INSERT INTO `tbl_users` (`id`, `user_role_id`, `user_name`, `email`, `password`) VALUES
	(2, 2, 'able','ablekilinda@gmail.com', '088e4727a34174507df3c58bea46ab46');
INSERT INTO `tbl_users` (`id`, `user_role_id`, `user_name`, `email`, `password`) VALUES
	(3, 3, 'juliana', 'julianamwake@gmail.com', '54387afa125a63304c2415978755e829');
INSERT INTO `tbl_users` (`id`, `user_role_id`, `user_name`, `email`, `password`) VALUES
	(4, 4, 'alex', 'alexmaganga@gmail.com', 'd1e1e0996f84b1f716fe59847d98f5f7');
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
  `topic_id` int(10) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(100) DEFAULT NULL,
  `topic_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `topic_tbl` (`topic_id`, `topic_name`, `topic_desc`) VALUES
  (1,'Taita', 'talks about taita people');