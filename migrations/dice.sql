-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dice
CREATE DATABASE IF NOT EXISTS `dice` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dice`;

-- Dumping structure for table dice.results
CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Username of the player',
  `result` double(10,2) NOT NULL COMMENT 'One game result',
  `date` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Time and date result was posted',
  `ip` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Users IP address',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table where all game results are stored';

-- Dumping data for table dice.results: 7 rows
DELETE FROM `results`;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` (`id`, `username`, `result`, `date`, `ip`) VALUES
	(77, 'User', 0.90, '2017-10-31 18:59:55', '192.168.0.1'),
	(78, 'User', 0.50, '2017-10-31 18:59:59', '192.168.0.1'),
	(79, 'User', 1.40, '2017-10-31 19:00:01', '192.168.0.1'),
	(80, 'User', 0.00, '2017-10-31 19:00:03', '192.168.0.1'),
	(81, 'Ignas', 1.00, '2017-11-10 16:30:23', '::1'),
	(82, 'Ignas', 0.00, '2017-11-10 16:30:28', '::1'),
	(83, 'Ignas', 0.00, '2017-11-10 16:30:32', '::1');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;

-- Dumping structure for table dice.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_login` varchar(50) COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table dice.users: 1 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `surname`, `email`, `password`, `data`, `ip`, `last_login`) VALUES
	(6, 'labas', 'labas', 'labas', '33', '$2y$10$7A7iZKOfonZlD64DyapUJe9MWOIk7fWiEniPuvxO15VWUpJWbbJ9C', '2017-10-31 18:59:43', '::1', '2017-10-31 17:10:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
