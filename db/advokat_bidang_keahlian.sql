-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5280
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_probono
CREATE DATABASE IF NOT EXISTS `db_probono` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_probono`;

-- Dumping structure for table db_probono.advokat_bidang_keahlian
CREATE TABLE IF NOT EXISTS `advokat_bidang_keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `bidang_keahlian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_probono.advokat_bidang_keahlian: ~6 rows (approximately)
/*!40000 ALTER TABLE `advokat_bidang_keahlian` DISABLE KEYS */;
INSERT INTO `advokat_bidang_keahlian` (`id`, `user_id`, `bidang_keahlian`) VALUES
	(1, 1, 4),
	(2, 1, 3),
	(3, 2, 5),
	(4, 2, 4),
	(5, 3, 6),
	(6, 3, 7);
/*!40000 ALTER TABLE `advokat_bidang_keahlian` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
