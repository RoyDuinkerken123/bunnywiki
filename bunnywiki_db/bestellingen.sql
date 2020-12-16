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

-- Structuur van  tabel bunnywiki_db.bestellingen wordt geschreven
CREATE TABLE IF NOT EXISTS `bestellingen` (
  `bestelling_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `gebruiker_id` int(10) unsigned DEFAULT NULL,
  `bod` float NOT NULL,
  `verzendkosten` float NOT NULL,
  `besteldatum` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`bestelling_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel bunnywiki_db.bestellingen: ~1 rows (ongeveer)
/*!40000 ALTER TABLE `bestellingen` DISABLE KEYS */;
INSERT INTO `bestellingen` (`bestelling_id`, `product_id`, `gebruiker_id`, `bod`, `verzendkosten`, `besteldatum`) VALUES
	(8, 2, 2, 20.5, 14.7, '2020-12-16 18:07:52');
/*!40000 ALTER TABLE `bestellingen` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
