-- --------------------------------------------------------
-- Host:                         -
-- Server versie:                10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Structuur van  tabel bunnywiki_db.biedingen wordt geschreven
CREATE TABLE IF NOT EXISTS `biedingen` (
  `bieding_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `gebruiker_id` int(10) unsigned NOT NULL,
  `gebruiker_bod` float unsigned NOT NULL,
  PRIMARY KEY (`bieding_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel bunnywiki_db.biedingen: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `biedingen` DISABLE KEYS */;
INSERT INTO `biedingen` (`bieding_id`, `product_id`, `gebruiker_id`, `gebruiker_bod`) VALUES
	(1, 1, 2, 15.9),
	(2, 1, 5, 15.5),
	(3, 2, 2, 20),
	(4, 2, 6, 20.5);
/*!40000 ALTER TABLE `biedingen` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
